<?php

namespace Core\Middleware;

use Exception;

class Middleware
{
    const TABLE = [ // map middleware keys to classes
        'guest' => Guest::class,
        'auth' => Auth::class,
    ];

    /**
     * @throws Exception
     */
    public static function resolve($key): void
    {
        if (!$key) return; // No key provided, return

        $middleware = static::TABLE[$key] ?? false; // either get it from the table or false

        if (!$middleware) throw new \Exception("Middleware '{$key}' not found");

        (new $middleware)->handle(); // handle function inside of middleware classes

    }
}