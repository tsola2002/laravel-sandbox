<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/info', function () {
    return view('info');
});
