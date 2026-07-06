<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->alias([
            'auth.user'  => \App\Http\Middleware\AuthenticateUser::class,
            'guest.only' => \App\Http\Middleware\GuestOnly::class,
            'admin.only' => \App\Http\Middleware\AdminOnly::class,
        ]);

        // Render terminates TLS at its proxy and forwards plain HTTP —
        // trust the proxy headers so Laravel generates https:// URLs.
        $middleware->trustProxies(at: '*');
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
