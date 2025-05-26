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

Route::prefix('a')->middleware('auth:a')->group(function () {
    Route::get('/', function () {
        $session = session()->all();

        $user = auth()->user();

        return "<pre>" .  print_r([
            'session' => $session,
            'user' => $user,
        ], true) . "</pre>";
    });
});


Route::prefix('b')->middleware('auth:b')->group(function () {
    Route::get('/', function () {
        $session = session()->all();

        $user = auth()->user();

        return "<pre>" .  print_r([
            'session' => $session,
            'user' => $user,
        ], true) . "</pre>";
    });
});
