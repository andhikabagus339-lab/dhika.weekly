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
    return view('home', [
        "title" => "Home",
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        "title" => "Profile",
        "name" => "Andhika Bagus Setiawan",
        "nim" => "13242520023",
        "prodi" => "Teknologi Informasi",
        "image" => "messi.jpg"
    ]);
});
Route::get('/contact', function () {
    return view('contact', [
        "title" => "contact",
    ]);
});
Route::get('/berita', function () {
    return view('berita', [
        "title" => "Berita",
    ]);
});