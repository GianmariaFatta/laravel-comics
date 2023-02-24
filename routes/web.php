<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
  
    $comicsLinks =["Characters", "Comics", "Movies", "TV", "Games", "Collectibles", "Videos", "Fans", "News"];

    $shopLinks = ["Shop DC", "Shop Dc Collectibles"];

    $dcLinks =["Terms Of Use", "Privacy policy (new)", "Ad Choices", "Advertising", "Jobs", "Subscriptions", "Talent Workshop", "CPSC Certificates", "Ratings", "Shop Help", "Contact Us"];
    
    $sitesLinks= ["DC", "MAD Magazine", "DC Kids", "DC Universe", "Dc Power Visa"];

    $comics = config('comics');

    return view('home', [ 'comicsLinks' => $comicsLinks, 'shopLinks' => $shopLinks, 'dcLinks' => $dcLinks, 'sitesLinks' => $sitesLinks, 'comics'=> $comics]);

})->name('home');

Route::get('/characters', function () {

    return view('characters');

})->name('characters');
