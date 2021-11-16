<?php
include __DIR__ . '/../vendor/autoload.php';

use MVC\Router;
use Controllers\PageController;

$router = new Router();

$router->get('/', [PageController::class, 'index']);
$router->post('/',[PageController::class, 'index']);

$router->comporbarRutas();

