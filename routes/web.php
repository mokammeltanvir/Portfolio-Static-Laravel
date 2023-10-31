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

Route::get('/', 'App\Http\Controllers\PortfolioController@home')->name('home');


Route::get('/about', 'App\Http\Controllers\PortfolioController@about')->name('about');



Route::get('/services', 'App\Http\Controllers\PortfolioController@services')->name('services');

Route::get('/portfolio', 'App\Http\Controllers\PortfolioController@portfolio')->name('portfolio');
Route::get('/portfolio/{id}', 'App\Http\Controllers\PortfolioController@portfolioDetail')->name('portfolio-details');


Route::get('/contact', 'App\Http\Controllers\PortfolioController@contact')->name('contact');
