<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';


Route::prefix('legal')->group(function(){
    Route::view('terms', 'legal.terms')->name('legal.terms');
    Route::view('refunds', 'legal.refunds')->name('legal.refunds');
    Route::view('privacy', 'legal.privacy')->name('legal.privacy');
    Route::view('shipping', 'lega.shipping')->name('legal.shipping');
});