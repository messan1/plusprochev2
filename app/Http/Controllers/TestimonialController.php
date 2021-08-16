<?php

namespace App\Http\Controllers;

use App\Models\testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestimonialController extends Controller
{
    public function index($id)
    {

        $testimonials = testimonial::whereHas('trajet', function ($query) use ($id) {
            $query->where('id', $id);
        })->with('offer')->with('user')->get();

       dd($testimonials);

    }

    public  function store(Request $request) {
        if (!Auth::check()) {
            return redirect()->route('login');
        }


        $testimonial = new testimonial();

        $request->validate([
            "id" => "required",
            "rate" => "required",
            "testimonial" => "required",
        ]);

        $input = $request->all();
        $testimonial["rate"] = $input["rate"];
        $testimonial["testimonial"] = $input["testimonial"];
        $testimonial["offer_id"] = $input["id"];

        $testimonial->user()->associate(Auth::user());


        $testimonial->save();
        return redirect()->route('offers.index')->with('success', 'Votre commentaire à été rajouté avec success');
    }



}
