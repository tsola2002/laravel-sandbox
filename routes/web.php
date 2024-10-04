<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/jobs', function () {
    return view('jobs',
    ['jobs' => [
                    [
                    'title' => 'Director',
                    'salary' => 50000
                    ],
                    [
                        'title' => 'Developer',
                        'salary' => 100000
                    ],
                    [
                        'title' => 'Teacher',
                        'salary' => 5000
                    ]
            ]
        ]
    );
});
