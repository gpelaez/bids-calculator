<?php

//autoload de composer

use App\Controller\AppController;

require  '../vendor/autoload.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

define('APPLICATION_PATH', realpath(__DIR__ . '/../'));

$request = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

switch ($request) {
    case '':
    case '/':
        $appController = AppController::create();
        return $appController->app();
        break;

    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
}
