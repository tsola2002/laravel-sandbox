<?php

use App\Http\Controllers\Api\DogController;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\Dog as DogResource;
use App\Http\Resources\Dog;

// routes/api.php
Route::namespace('App\Http\Controllers\Api')
    ->group(function () {


        Route::apiResource('dogs', DogController::class);
});

Route::get('dogs/{dogId}', function ($dogId) {
    return new DogResource(Dog::find($dogId));
});
