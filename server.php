<?php

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?? ''
);

// Serve static assets like CSS, JS, images, etc.
if ($uri !== '/' && file_exists(__DIR__ . $uri)) {
    return false;
}

// Fallback to Laravel
require_once __DIR__ . '/index.php';
