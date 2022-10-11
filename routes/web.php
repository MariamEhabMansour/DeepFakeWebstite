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
//-------Public Website Routes




Route::get('/', 'WebsiteController@homepage');

Route::get('/services', 'WebsiteController@services')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/', function () {
    return view('welcome');
});

Route::get('/generator', function(){
    return view('generator');
});

Route::get('/service', function(){
    return view('service');
});

Route::get('/policy', function() {
    return view('policy');
});


Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');
