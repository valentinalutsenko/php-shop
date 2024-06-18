<?php

namespace core\Router;

class Router
{
    /**
     * @param string $uri
     * @return void
     */
    public function dispatch(string $uri): void
    {
        $routes = $this->getRoutes();
        $routes[$uri]();
    }

    /**
     * @return array
     */
    private function getRoutes(): array
    {
        return require_once ROOT.'/config/routes.php';
    }
}
