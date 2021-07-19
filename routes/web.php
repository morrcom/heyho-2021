<?php

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
    return view('welcome');
});

Route::get('/promotions', function () {
    return view('promo');
});

Route::get('/chefs', function () {
    return view('chefs');
});

Route::get('/userterms', function () {
    return view('legal/userterms');
});

Route::get('/vendorterms', function () {
    return view('legal/vendorterms');
});

Route::get('/privacypolicy', function () {
    return view('legal/privacypolicy');
});