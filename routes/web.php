<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\WelcomeController;

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
//     return view('welcome');
// });

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

// Jobsheet 2 Praktikum 2

Route::get('/user/{name?}', function ($name='Jhon') {
    return 'Nama saya, ' . $name;
});

// Jobsheet 2 Praktikum 3
// ubah route hello menggunakan controller
Route::get('/hello', [WelcomeController::class, 'hello']);

// Modifikasi Route Menggunakan Controller
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'about']);
Route::get('/articles/{id?}', [ArticleController::class, 'articles']);





