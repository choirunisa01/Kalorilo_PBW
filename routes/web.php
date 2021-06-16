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

Route::get('/about', function () {
    return view('about');
});

Route::get('/kalori', function () {
    return view('kalori');
});

Route::get('/kaloriminuman', function () {
    return view('kaloriminuman');
});

Route::get('/bakar', function () {
    return view('bakar');
});
		
Route::get('/hitung', function () {
    return view('hitung');
});

Route::get('/hasil', function () {
    return view('hasil');
});


