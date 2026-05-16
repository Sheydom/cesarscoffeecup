<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');
Route::view('products', 'products')->name('products');
Route::view('greenStock', 'greenStock')->name('greenStock');
Route::view('coRoasting', 'coRoasting')->name('coRoasting');
Route::view('contact', 'contact')->name('contact');
Route::view('aboutUs','aboutUs')->name('aboutUs');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';

Route::prefix('legal')->group(function () {
    Route::view('terms', 'legal.termsAndCondition')->name('legal.termsAndCondition');
    Route::view('refunds', 'legal.refunds')->name('legal.refunds');
    Route::view('privacy', 'legal.privacy')->name('legal.privacy');
    Route::view('shipping', 'legal.shipping')->name('legal.shipping');
    Route::view('cookies', 'legal.cookies')->name('legal.cookies');
});
