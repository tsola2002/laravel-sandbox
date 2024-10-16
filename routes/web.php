<?php

use App\Http\Controllers\StudentResourceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [TaskController::class, 'index']);

Route::resource('tasks', TaskController::class);

Route::apiResource('students', StudentResourceController::class);

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
