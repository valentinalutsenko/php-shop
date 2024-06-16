<?php

namespace core\Router;

class Router
{
    public function dispatch(string $uri): void
    {
        $routes = $this->getRoutes();
        $routes[$uri]();
    }

    private function getRoutes(): array
    {
        return require_once ROOT . '/config/routes.php';
    }
}