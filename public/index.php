<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

$basePath = realpath(__DIR__.'/..') ?: __DIR__.'/..';

if (! file_exists($basePath.'/vendor/autoload.php')) {
    $cpanelPath = dirname(__DIR__, 2).'/repositories/portfolio';

    if (file_exists($cpanelPath.'/vendor/autoload.php')) {
        $basePath = $cpanelPath;
    }
}

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = $basePath.'/storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require $basePath.'/vendor/autoload.php';

// Bootstrap Laravel and handle the request...
/** @var Application $app */
$app = require_once $basePath.'/bootstrap/app.php';

$app->handleRequest(Request::capture());
