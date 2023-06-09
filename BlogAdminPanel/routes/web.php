<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactMeController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\TagController;
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

Route::middleware(['auth', 'admin'])->group(function () {
        Route::prefix('admin')->group(function () {
                Route::view('/', 'index')->name('home');
                Route::resource('blogs', BlogController::class);
                Route::resource('categories', CategoryController::class);
                Route::resource('tags', TagController::class);
                Route::put('blogs/updateStatus/{id}', [BlogController::class, 'updateStatus'])->name('blogs.updateStatus');
                Route::get('/settings', [SettingsController::class, 'index'])->name('settings.index');
                Route::post('/settings', [SettingsController::class, 'updateOrCreate'])->name('settings.updateOrCreate');
                Route::get('/profile', [AuthController::class, 'profile'])->name('profile');
                Route::put('/profile/update', [AuthController::class, 'updateProfile'])->name('profile.update');
                Route::get('contact-me', [ContactMeController::class, 'index'])->name('contactMe');
                Route::get('about', [AboutController::class, 'index'])->name('about');
                Route::post('about', [AboutController::class, 'updateOrCreate'])->name('about.updateOrCreate');
        });
});

Route::get('/login', [AuthController::class, 'loginIndex'])->name('loginIndex');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
