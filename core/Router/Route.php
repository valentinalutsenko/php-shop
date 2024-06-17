<?php

namespace core\Router;

class Route
{
    private $uri;

    private $method;

    private $action;

    public function __construct(
        $uri,
        $method,
        $action,
    ) {
    }

    public static function get($uri, $action)
    {
        return new static($uri, 'GET', $action);
    }

    public function getUri()
    {
        return $this->uri;
    }

    public function getAction()
    {
        return $this->action;
    }

    public function getMethod()
    {
        return $this->method;
    }
}
