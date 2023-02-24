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

// Route::get('/', function () {
//     $pages = ['CHARACTERS','COMICS','MOVIES','TV','GAMES','COLLECTIBLES','VIDEOS','FANS','NEWS','SHOP'];
//     return view('home', compact('pages'));
// })->name('home');

Route::get('/', function () {
    $pages = ['CHARACTERS','COMICS','MOVIES','TV','GAMES','COLLECTIBLES','VIDEOS','FANS','NEWS','SHOP'];

    $comicsLinks =["Characters", "Comics", "Movies", "TV", "Games", "Collectibles", "Videos", "Fans", "News"];

    $shopLinks = ["Shop DC", "Shop Dc Collectibles"];

    $dcLinks =["Terms Of Use", "Privacy policy (new)", "Ad Choices", "Advertising", "Jobs", "Subscriptions", "Talent Workshop", "CPSC Certificates", "Ratings", "Shop Help", "Contact Us"];

    $sitesLinks= ["DC", "MAD Magazine", "DC Kids", "DC Universe", "Dc Power Visa"];
    return view('home',compact('pages'), compact('comicsLinks'), compact('shopLinks'),
    compact('dcLinks'),compact('sitesLinks') );
})->name('home');