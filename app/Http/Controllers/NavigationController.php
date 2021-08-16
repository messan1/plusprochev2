<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavigationController extends Controller
{
    public function home()
    {
        return view("home");
    }
    public function contactus()
    {
        return view("pages.ContactUs");
    }
    public function howitworks()
    {
        return view("pages.HowItWorks");
    }
    public function newlogin()
    {
        return view("pages.Login");
    }
    public function myoffers()
    {
        return view("pages.MyOffer");
    }

    public function orderoffer()
    {
        return view("pages.OrderOffers");
    }
    public function profile()
    {
        return view("pages.Profils");
    }
    public function mybuyings()
    {
        return view("pages.MyBuying");
    }
    public function publishoffer()
    {
        return view("pages.PublishOffer");
    }
    public function resetpassword()
    {
        return view("pages.ResetPassword");
    }
    public function newsignup()
    {
        return view("pages.Signup");
    }
    public function validateaccount()
    {
        return view("pages.ValidateAccount");
    }


    public function searchoffers()
    {
        return view("pages.SearchOffer");
    }
    public function detailsorder()
    {
        return view("pages.DetailsOrder");
    }
}
