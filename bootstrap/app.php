<?php

use Illuminate\Foundation\Application;
use Illuminate\Contracts\Console\Kernel as ConsoleKernel;
use Illuminate\Contracts\Http\Kernel as HttpKernel;
use Illuminate\Contracts\Debug\ExceptionHandler;
use App\Http\Kernel;
use App\Console\Kernel as ConsoleAppKernel;
use App\Exceptions\Handler;

$app = new Application(
    $_ENV['APP_BASE_PATH'] ?? dirname(__DIR__)
);

$app->singleton(HttpKernel::class, Kernel::class);
$app->singleton(ConsoleKernel::class, ConsoleAppKernel::class);
$app->singleton(ExceptionHandler::class, Handler::class);

return $app;