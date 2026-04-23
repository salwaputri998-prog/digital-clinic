<?php

use Illuminate\Support\Facades\Route;

Route::prefix('pages')->group(function () {
    Route::view('/home', 'pages.home');
    Route::view('/about', 'pages.about');
    Route::view('/service', 'pages.service');
    Route::view('/contact', 'pages.contact');
    Route::view('/login', 'pages.login');
    Route::view('/register', 'pages.register');
    Route::view('/dashboard', 'pages.dashboard');
});