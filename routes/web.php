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
    return view('home');
});


Route::get('/form', function () {
    return view('form');
});

Route::get('/thecity', function () {
    return view('thecity');
});

Route::get('/thecity', function () {
    return view('thecity');
});
Route::get('/gov', function () {
    return view('gov');
});

Route::get('/economy', function () {
    return view('economy');
});

Route::get('/spablenos', function () {
    return view('spablenos');
});

Route::get('/tourism', function () {
    return view('tourism');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::post('register', array('uses' => 'Register@store'));
