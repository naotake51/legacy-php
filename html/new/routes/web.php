<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello, World!';
});

Route::get('/samples', function () {
    $samples = \App\Models\Sample::all();
    return $samples;
});
