<?php

use App\Http\Controllers\Auth\RegisterUserController;
use App\Http\Controllers\Auth\SessionsController;
use Illuminate\Support\Facades\Route;


// core-views

Route::view('/', 'welcome')->name('home');
Route::view('products', 'products')->name('products');
Route::view('greenStock', 'greenStock')->name('greenStock');
Route::view('coRoasting', 'coRoasting')->name('coRoasting');
Route::view('contact', 'contact')->name('contact');
Route::view('aboutUs','aboutUs')->name('aboutUs')->middleware('auth');


// lega-views
Route::prefix('legal')->group(function () {
    Route::view('terms', 'legal.termsAndCondition')->name('legal.termsAndCondition');
    Route::view('cancellationAndRefund', 'legal.cancellationAndRefund')->name('legal.cancellationAndRefund');
    Route::view('privacy', 'legal.privacy')->name('legal.privacy');
    Route::view('shipping', 'legal.shipping')->name('legal.shipping');
    Route::view('cookies', 'legal.cookies')->name('legal.cookies');
});

//auth
Route::get('register', [RegisterUserController::class, 'create'])->name('register');
Route::post('register', [RegisterUserController::class, 'store'])->name('register.store');

Route::get('login',[SessionsController::class, 'create'])->name('login');
Route::post('login',[SessionsController::class, 'store'])->name('login.store');

Route::delete('logout',[SessionsController::class, 'destroy'])->name('logout');