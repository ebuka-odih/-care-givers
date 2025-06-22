<?php

use App\Http\Controllers\DonationController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.index')->name('index');
Route::view('/about', 'pages.about')->name('about');
Route::view('/causes', 'pages.causes')->name('causes');
Route::view('/contact', 'pages.contact')->name('contact');
Route::view('/donate', 'pages.donate')->name('donate');

Route::post('/donate', [DonationController::class, 'store'])->name('donate.store');
