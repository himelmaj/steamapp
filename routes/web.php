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

Route::view('/', 'welcome');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('home', 'home')->name('home');
    Route::view('forum', 'forum')->name('forum');
    Route::view('profile', 'profile')->name('profile');
    Route::view('contact', 'contact')->name('contact');
});


// Route::view('home', 'home')
//     ->middleware(['auth', 'verified'])
//     ->name('home');

// Route::view('forum', 'forum')
//     ->middleware(['auth', 'verified'])
//     ->name('forum');

// Route::view('profile', 'profile')
//     ->middleware(['auth'])
//     ->name('profile');

require __DIR__.'/auth.php';
