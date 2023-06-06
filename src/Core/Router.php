<?php

namespace Core;

class Router
{
    private array $routes = [];

    private function add($uri, $controller, $method): void
    {
        $this->routes[] = [ // or use compact('uri', 'controller', 'method')
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method
        ];
    }

    public function get($uri, $controller): void
    {
        $this->add($uri, $controller, 'GET');
    }

    public function post($uri, $controller): void
    {
        $this->add($uri, $controller, 'POST');
    }

    public function delete($uri, $controller): void
    {
        $this->add($uri, $controller, 'DELETE');
    }

    public function route(string $uri, string $method)
    {

        foreach($this->routes as $route) {
            if ($route['uri'] === $uri && $route['method'] === strtoupper($method)) {
                return require_once $route['controller'];
            }
        }

        return require_once view('/codes/_404.view.php');
    }
}