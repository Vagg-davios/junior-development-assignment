<?php

class Router
{
    private array $routes;

    public function __construct(array $routes)
    {
        $this->routes = $routes;
    }

    public function route(string $uri)
    {
        if (array_key_exists($uri, $this->routes)) {
            return require_once $this->routes[$uri];
        }

        return require_once view('/codes/_404.view.php');
    }
}