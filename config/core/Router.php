<?php
namespace Src\Config;

class Router
{
    public static function resolve($routes)
    {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $route = $routes[$uri] ?? null;

        if ($route) {
            $controllerName = "Src\\controller\\" . $route['controller'];
            $action = $route['action'];
            $controller = new $controllerName();
            $controller->$action();
        } else {

            $errorController = "\\Src\\config\\core\\ErreurController";
            $errorController::notFound();
        }
    }
}