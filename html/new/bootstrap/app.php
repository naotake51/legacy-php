<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->redirectGuestsTo(function (Request $request) {
            $prefix = $request->route()?->getPrefix();

            return match ($prefix) {
                '/a' => url('../a_home.php'),
                '/b' => url('../b_home.php'),
            };
        });
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
