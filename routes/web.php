<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');
Route::view('/privacidade', 'pages.privacy')->name('privacy');
Route::view('/termos', 'pages.terms')->name('terms');
