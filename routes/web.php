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
    return view('welcome');
});
Route::get('/greetings', function () {
    return view('greetings');
});

// Jobsheet 2 Praktikum 1


Route::get('/hello', function () {
    return 'Hello';
});
Route::get('/world', function () {
    return 'World';
});

Route::get('/about', function () {
    return 'NIM : 2341720166 <br> Nama : Abdullah Shamil Basayev';
});


