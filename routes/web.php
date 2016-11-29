<?php

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
    return view('website.home');
});

Route::get('home', function () {
    return view('website.home');
});

Route::get('contacts', function () {
    return view('website.contacts');
});

Route::get('about', function () {
    return view('website.about_us');
});

Route::get('soft_soln', function () {
    return view('website.soft_soln');
});
Route::get('research', function () {
    return view('website.research');
});
Route::get('net_soln', function () {
    return view('website.net_soln');
});
Route::get('ict_training', function () {
    return view('website.ict_training');
});
Route::get('gis', function () {
    return view('website.gis');
});
Route::get('business', function () {
    return view('website.business');
});