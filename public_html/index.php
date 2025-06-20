<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Check if Laravel is in maintenance mode
if (file_exists(__DIR__ . '/../laravel-app/storage/framework/maintenance.php')) {
    require __DIR__ . '/../laravel-app/storage/framework/maintenance.php';
}

// Register the Composer autoloader
require __DIR__ . '/../laravel-app/vendor/autoload.php';

// Bootstrap the Laravel application
$app = require_once __DIR__ . '/../laravel-app/bootstrap/app.php';

// Handle the incoming request
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Request::capture()
)->send();

$kernel->terminate($request, $response);
