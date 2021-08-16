<?php

use App\Http\Controllers\NavigationController;
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
Route::get("publishoffer",[NavigationController::class,"publishoffer"]);
Route::get("myoffers",[NavigationController::class,"myoffers"]);
Route::get("mybuyings",[NavigationController::class,"mybuyings"]);
Route::get("profile",[NavigationController::class,"profile"]);
Route::get("searchoffers",[NavigationController::class,"searchoffers"]);
Route::get("detailsorder",[NavigationController::class,"detailsorder"]);
