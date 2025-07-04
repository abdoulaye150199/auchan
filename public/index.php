<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config/core/Router.php';

use Src\Config\Router;

$routes = require __DIR__ . '/../routes/route.web.php';
Router::resolve($routes);
