<?php

use App\Http\Controllers\NavigationController;
use App\Http\Controllers\TypeaheadController;
use App\Http\Controllers\offerController;
use Illuminate\Support\Facades\Route;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('homepage');
});




Auth::routes(['verify' => true]);


Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

//
Route::get("howitworks",[NavigationController::class,"howitworks"]);
Route::get("publishoffer",[NavigationController::class,"publishoffer"]);
Route::get("contactus",[NavigationController::class,"contactus"]);
Route::get("orderoffer",[NavigationController::class,"orderoffer"]);
Route::get("myoffers",[NavigationController::class,"myoffers"]);
Route::get("mybuyings",[NavigationController::class,"mybuyings"]);
Route::get("profile",[NavigationController::class,"profile"]);
Route::get("searchoffers",[NavigationController::class,"searchoffers"]);
Route::get("detailsorder",[NavigationController::class,"detailsorder"]);


//typesense
Route::get('/ajax-autocomplete-search', [TypeaheadController::class, 'autocompleteSearch']);



//Infinity
Route::resource('/offers',offerController::class);



//Router for location
Route::post('/offers-by-loaction', [offerController::class, 'location'])->name('location');
Route::get('/offers-by-loaction', [offerController::class, 'location'])->name('location');

//Router for location
Route::get('/my-offers',[offerController::class, 'myoffers'])->middleware(['auth', 'verified']);


//Router to buy an offer"
Route::post('/buy-offer',[offerController::class, 'pay'])->name('pay')->middleware(['auth', 'verified']);

//Router to show an offer
Route::get('/offer_already_paid',[offerController::class, 'offer_already_paid'])->name('offer-pay')->middleware(['auth', 'verified']);