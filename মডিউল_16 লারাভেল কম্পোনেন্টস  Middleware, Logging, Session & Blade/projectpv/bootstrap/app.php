<?php

use App\Http\Middleware\DemoMiddleware;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
       $middleware->alias([
           'demo'=>DemoMiddleware::class
       ]);
        $middleware->web([
            //DemoMiddleware::class,
           // 'throttle:3,1'
        ]);
        $middleware->validateCsrfTokens(except: [
            '/*'

        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
