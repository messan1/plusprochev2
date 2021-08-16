<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\trajet;
use App\Models\transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Cashier\Billable;

class offerController extends Controller
{
    public function index($pagination = 20)
    {

        $offers = Offer::latest()->paginate($pagination);

        return view('offers.index', compact('offers'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function create()
    {
        return view("offers.create");
    }

    public function store(Request $request)
    {

        $request->validate([
            "quantity_kg" => "required",
            "fly_proof" => "required",
            "price_kg" => "required",
            "date_arrivee" => "required",
            "status" => "required",
            "provenance" => "required",
            "destination" => "required",
        ]);



        $input = $request->all();
        //dd($input["price_kg"]);


        if ($image = $request->file('fly_proof')) {
            $destinationPath = 'fly_proof/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['fly_proof'] = "$profileImage";
        }



        $offer = new Offer();
        $offer["quantity_kg"] = $input["quantity_kg"];
        $offer["price_kg"] = $input["price_kg"];
        $offer["status"] = $input["status"];
        $offer["user_id"] = 1;


        $trajet = new trajet();
        $trajet["depart"] = $input["provenance"];
        $trajet["arrivee"] = $input["destination"];
        $trajet["date_arrivee"] = $input["date_arrivee"];
        $trajet["billet_avion"] = $input["fly_proof"];


        $trajet->save();

        $offer->user()->associate(Auth::user());
        $offer->trajet()->associate($trajet);

        $offer->save();


        //dd($input);


        return redirect()->route('offers.index')
            ->with('success', 'Votre offre à été rajoutée.');
    }


    public function location(Request $request)
    {

        $request->validate([
            "provenance" => "required",
            "destination" => "required",
        ]);

        $input = $request->all();

        $offers = Offer::whereHas('trajet', function ($query) use ($input) {
            $query->where('arrivee', $input["destination"]);
            $query->where('depart', $input["provenance"]);
        })->with('trajet')->with('user')->get();



        return view('offers.sell', compact('offers'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function myoffers()
    {

        $offers = Offer::whereHas('user', function ($query) {
            $query->where('id',  Auth::user()->id);
        })->with('trajet')->with('user')->get();

        return view('offers.sell', compact('offers'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function show($id) {
        return view('offers.details', ['offer' => Offer::findOrFail($id)]);
    }


    public function pay(Request $request){

        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $transaction = new transaction();

        $request->validate([
            "quantity" => "required",
        ]);

        $input = $request->all();


        $transaction["assurance"] = $input["assurance"];
        $transaction["reference_payement"] = null;
        $transaction["quantity"] = $input["quantity"];
        $transaction["price"] = $input["price"];
        $transaction["meansPayement"] = '1';
        $transaction["offer_id"] = $input["id"];

        $transaction->user()->associate(Auth::user());


        $transaction->save();
        return redirect()->route('testimonial.add')->with('success', 'Votre à été payé avec success');


       // dd($transaction->offer);

    }


    public function offer_already_paid($pagination = 20){

        $transactions = transaction::whereHas('user', function ($query) {
            $query->where('id',  Auth::user()->id);
        })->with('offer')->with('user')->get();


        return view('offers.paid', compact('transactions'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

        //dd($offers);
    }

    public function show_payment_gate($id=1)

    {


       //$intent = auth()->user()->createOrGetStripeCustomer();
      // $intent = 4;

        return view('offers.payement_gate', compact('id','intent'));
    }

    public function validate_payment(Request $request){
        $user          = $request->user();
        $paymentMethod = $request->input('payment_method');

        try {
            $user->createOrGetStripeCustomer();
            $user->updateDefaultPaymentMethod($paymentMethod);
            $user->charge(45 * 100, $paymentMethod);
        } catch (\Exception $exception) {
            return back()->with('error', $exception->getMessage());
        }

        return back()->with('message', 'Product purchased successfully!');
    }
}
