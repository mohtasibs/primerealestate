<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Check if Laravel is in maintenance mode
if (file_exists(__DIR__ . '/storage/framework/maintenance.php')) {
    require __DIR__ . '/storage/framework/maintenance.php';
}

// Register Composer autoloader
require __DIR__ . '/vendor/autoload.php';

// Bootstrap the Laravel application
$app = require_once __DIR__ . '/bootstrap/app.php';

// Handle the request
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Request::capture()
)->send();

$kernel->terminate($request, $response);
