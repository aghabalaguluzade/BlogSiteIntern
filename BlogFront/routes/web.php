<?php

use App\Http\Controllers\BlogController;
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
    return view('index');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/blog/{slug}', function ($slug) {
    return view('blog');
});

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/404', function() {
    return view('layouts.404');
})->name('404');



Route::get('/blogs', [BlogController::class, 'index'])->name('blogs');