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
    return view('frontend.pages.home');
});

Route::get('/about', function () {
    return view('frontend.pages.about');
});

Route::get('/services', function () {
    return view('frontend.pages.services');
});

Route::get('/portfolio', function () {
    return view('frontend.pages.portfolio');
});

Route::get('/portfolio-details', function () {
    return view('frontend.pages.portfolio-details');
});
