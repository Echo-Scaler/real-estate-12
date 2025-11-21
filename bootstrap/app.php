<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\Role; //add to middleware alias

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->alias([
            //Alias Middleware (route မှာ အတိုကောက်နာမည်နဲ့သုံးမယ့် middleware)
            //Group Middleware (web, api တို့လို group လုပ်ပီးသုံးမယ့် middleware)
            //Global Middleware (App တစ်ခုလုံးမှာ auto run မယ့် middleware)
            'role' => Role::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
