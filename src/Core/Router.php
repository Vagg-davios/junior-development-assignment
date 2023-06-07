<?php

namespace Core;

use Core\Middleware\Middleware;
use Exception;

class Router
{
    private array $routes = [];

    private function add($uri, $controller, $method): Router
    {
        $this->routes[] = [ // or use compact('uri', 'controller', 'method')
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method,
            'middleware' => null
        ];

        return $this;
    }

    public function get($uri, $controller): Router
    {
        return $this->add($uri, $controller, 'GET');
    }

    public function post($uri, $controller): Router
    {
        return $this->add($uri, $controller, 'POST');
    }

    public function delete($uri, $controller): Router
    {
        return $this->add($uri, $controller, 'DELETE');
    }

    public function only($key){
        $this->routes[array_key_last($this->routes)]['middleware'] = $key;
        return $this;
    }

    /**
     * Find corresponding route, pass any middleware it might have amd resolve that
     * @throws Exception
     */
    public function route(string $uri, string $method)
    {
        foreach($this->routes as $route) {
            if ($route['uri'] === $uri && $route['method'] === strtoupper($method))
            {
                Middleware::resolve($route['middleware']); // get the middleware name from the route table and resolve it

                return require_once $route['controller']; // route to corresponding controller
            }

        }

        return require_once view('/codes/_404.view.php'); // or throw 404 screen
    }
}