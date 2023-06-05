<?php

use JetBrains\PhpStorm\NoReturn;

#[NoReturn] function dd($data): void // dump and die
{
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    die();
};



function formatUrl($url) : array
{
    $path = explode(ROOT, $url);
    return parse_url($path[1]);
}

spl_autoload_register(function ($class) {
    $coreFile = BASE_PATH . 'src/core/' . $class . '.php';
    $controllerFile = BASE_PATH . 'src/model/' . $class . '.php';
    if (file_exists($coreFile)) {
        require_once $coreFile;
    } elseif (file_exists($controllerFile)) {
        require_once $controllerFile;
    }
});

function base_path($path): string
{
    return BASE_PATH . $path;
}

function view($path, $attributes = []): string
{
    extract($attributes);

    return require_once base_path('src/view') . $path;
}

function model($path): string
{
    return require_once base_path('src/model') . $path;
}