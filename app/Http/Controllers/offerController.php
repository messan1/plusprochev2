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
    //During creation:
    //colis_ttc = this->colis_unit_cost * env("PP_COLIS_FEE");
    //courrier_ttc = $this->courrier_unit_cost * env("PP_COURRIER_FEE");

    public function index($pagination = 20)
    {

        $offers = Offer::latest()->paginate($pagination);
        return view('pages.MyOffer', compact('offers'))->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function create()
    {
        return view("offers.create");
    }

    public function store(Request $request){
        if(!isset($request['has_courrier']) && !isset($request['has_colis'])){
            $sms = "Vous navez pas cochez"; 
                    return view('pages.PublishOffer')->with('error',$sms);
        }else{
            $request->validate([
                "depart" => "required",
                "destination" => "required",
                "arrived_at" => "required",
                "delivery_address" => "required",

            ]);
            $dataTrajet = [
                "depart"=> $request['depart'],
                "destination"=> $request['destination'],
                "arrived_at"=> $request['arrived_at'],
                "plane_ticket"=> $request['plane_ticket']
            ];
            $trajet = trajet::create($dataTrajet);

            $dataOffer = [
                "delivery_address"=> $request['delivery_address'],
                ];
            if($request['has_colis']=='on'){
                $validated = $request->validate([
                    "colis_quantity" => "required",
                    "colis_unit_cost" => "required",
                    "delivery_condition" => "required",
                ]);

                $dataOffer['colis_quantity'] = $request['colis_quantity'];
                $dataOffer['colis_unit_cost'] = $request['colis_unit_cost'];
                $dataOffer['delivery_condition'] = $request['delivery_condition'];
            };
            if($request['has_courrier']=='on'){
                $request->validate([
                    "courrier_quantity" => "required",
                    "courrier_unit_cost" => "required",
                ]);
                $offer->courrier_quantity = $request['courrier_quantity'];
                $offer->courrier_unit_cost = $request['courrier_unit_cost'];

            }
            Offer::create($data);
            
        }
    }
    public function oldstore(Request $request)
    {

       // dd($request);

        $input = $request->all();

        if( isset($input["has_courrier"]) && $input["has_courrier"]=="on"){


            $request->validate([
                "depart" => "required",
                "destination" => "required",
                "arrived_at" => "required",
                "delivery_address" => "required",

                "courrier_quantity" => "required",
                "courrier_unit_cost" => "required",
            ]);



            //dd($input["price_kg"]);


            if ($image = $request->file('plane_ticket')) {
                $destinationPath = 'plane_ticket/';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $input['plane_ticket'] = "$profileImage";
            }





            $offer = new Offer();
            $offer["delivery_condition"] = $input["delivery_condition"];
            $offer["courrier_unit_cost"] = $input["courrier_unit_cost"];
            $offer["courrier_quantity"] = $input["courrier_quantity"];
            $offer["user_id"] = 1;
            $offer["code"] = refCode(env('PP_PREFIX_OFFER'), 0);


            $trajet = new trajet();
            $trajet["depart"] = $input["depart"];
            $trajet["destination"] = $input["destination"];
            $trajet["arrived_at"] = $input["arrived_at"];
            $trajet["plane_ticket"] = $input["plane_ticket"];


            $trajet->save();

            $offer->user()->associate(Auth::user());
            $offer->trajet()->associate($trajet);

            $offer->save();
        }

        if( isset($input["has_colis"]) &&  $input["has_colis"]=="on"){

            $request->validate([
                "depart" => "required",
                "destination" => "required",
                "arrived_at" => "required",
                "delivery_address" => "required",
                "has_colis" => "required",
                "colis_quantity" => "required",
                "colis_unit_cost" => "required",
                "delivery_condition" => "required",

            ]);



            //dd($input["price_kg"]);


            if ($image = $request->file('plane_ticket')) {
                $destinationPath = 'plane_ticket/';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $input['plane_ticket'] = "$profileImage";
            }



            $offer = new Offer();
            $offer["colis_quantity"] = $input["colis_quantity"];
            $offer["colis_unit_cost"] = $input["colis_unit_cost"];
            $offer["delivery_condition"] = $input["delivery_condition"];
            $offer["user_id"] = 1;


            $trajet = new trajet();
            $trajet["depart"] = $input["depart"];
            $trajet["destination"] = $input["destination"];
            $trajet["arrived_at"] = $input["arrived_at"];
            $trajet["plane_ticket"] = $input["plane_ticket"];


            $trajet->save();

            $offer->user()->associate(Auth::user());
            $offer->trajet()->associate($trajet);

            $offer->save();
        }







        return redirect()->route('offers.index')
            ->with('success', 'Votre offre à été rajoutée.');
    }


    public function location(Request $request)
    {

        $request->validate([
            "depart" => "required",
            "destination" => "required",
        ]);

        $input = $request->all();

        $offers = Offer::whereHas('trajet', function ($query) use ($input) {
            $query->where('arrivee', $input["destination"]);
            $query->where('depart', $input["depart"]);
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

    public function show($id)
    {
        return view('offers.details', ['offer' => Offer::findOrFail($id)]);
    }


    public function pay(Request $request)
    {

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


    public function offer_already_paid($pagination = 20)
    {

        $transactions = transaction::whereHas('user', function ($query) {
            $query->where('id',  Auth::user()->id);
        })->with('offer')->with('user')->get();


        return view('offers.paid', compact('transactions'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

        //dd($offers);
    }

    public function show_payment_gate($id = 1)

    {


        //$intent = auth()->user()->createOrGetStripeCustomer();
        // $intent = 4;

        return view('offers.payement_gate', compact('id', 'intent'));
    }

    public function validate_payment(Request $request)
    {
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
