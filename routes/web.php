<?php

use Illuminate\Support\Facades\Route;


// core-views

Route::view('/', 'welcome')->name('home');
Route::view('products', 'products')->name('products');
Route::view('greenStock', 'greenStock')->name('greenStock');
Route::view('coRoasting', 'coRoasting')->name('coRoasting');
Route::view('contact', 'contact')->name('contact');
Route::view('aboutUs','aboutUs')->name('aboutUs');






// lega-views
Route::prefix('legal')->group(function () {
    Route::view('terms', 'legal.termsAndCondition')->name('legal.termsAndCondition');
    Route::view('cancellationAndRefund', 'legal.cancellationAndRefund')->name('legal.cancellationAndRefund');
    Route::view('privacy', 'legal.privacy')->name('legal.privacy');
    Route::view('shipping', 'legal.shipping')->name('legal.shipping');
    Route::view('cookies', 'legal.cookies')->name('legal.cookies');
});
