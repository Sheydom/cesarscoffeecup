<?php

use App\Http\Controllers\Auth\RegisterUserController;
use App\Http\Controllers\Auth\SessionsController;
use App\Http\Controllers\Mail\ContactController;
use App\Http\Controllers\User\UserSettingsController;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Route;

// core-views

Route::view('/', 'welcome')->name('home');
Route::view('products', 'products')->name('products');
Route::view('greenStock', 'greenStock')->name('greenStock');
Route::view('coRoasting', 'coRoasting')->name('coRoasting');
Route::view('contact', 'contact')->name('contact');
Route::view('aboutUs', 'aboutUs')->name('aboutUs');

// legal-views
Route::prefix('legal')->group(function () {
    Route::view('terms', 'legal.termsAndCondition')->name('legal.termsAndCondition');
    Route::view('cancellationAndRefund', 'legal.cancellationAndRefund')->name('legal.cancellationAndRefund');
    Route::view('privacy', 'legal.privacy')->name('legal.privacy');
    Route::view('shipping', 'legal.shipping')->name('legal.shipping');
    Route::view('cookies', 'legal.cookies')->name('legal.cookies');
});

// auth -> group function only guests can acces these sites to login or register
Route::middleware('guest')->group(function () {
    Route::get('register', [RegisterUserController::class, 'create'])->name('register');
    Route::post('register', [RegisterUserController::class, 'store'])->name('register.store');
    Route::get('login', [SessionsController::class, 'create'])->name('login');
    Route::post('login', [SessionsController::class, 'store'])->name('login.store');
});
// only authorised user can logout
Route::middleware('auth')->group(function () {
    Route::delete('logout', [SessionsController::class, 'destroy'])->name('logout');
});

// user-settings -  middleware to redirect non authenticated user to loginpage
Route::middleware('auth')->group(function () {
    Route::get('settings', [UserSettingsController::class, 'create'])->name('settings');
    Route::put('settings', [UserSettingsController::class, 'update'])->name('settings.update');
    Route::delete('settings', [UserSettingsController::class, 'destroy'])->name('settings.delete');

});

// mail route
// Route::post('contactMail', [ContactController::class, 'homeSubmit'])->name('contactMail');
// Route::post('coRoastingMail', [ContactController::class, 'coRoastingSubmit'])->name('coRoastingMail');
