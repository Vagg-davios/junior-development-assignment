<?php

use JetBrains\PhpStorm\NoReturn;

#[NoReturn] function dd($data): void // dump and die
{
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    die();
}

function formatUrl($url): array
{
    $path = explode(ROOT, $url);
    return parse_url($path[1] ?? exit("Not allowed to access this page"));
}

spl_autoload_register(function ($class) {
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class); // replace / with \ in url

    $coreFile = base_path("/src/{$class}.php");
    $modelFile = base_path("/src/Model/" . basename($class) . '.php'); // avoid the namespace core for this one using basename

    if (file_exists($coreFile)) {
        require $coreFile;
    } elseif (file_exists($modelFile)) {
        require $modelFile;
    }
});


function base_path($path): string
{
    return BASE_PATH . $path;
}

function view($path, $attributes = []): string
{
    extract($attributes);

    return require_once base_path('src/View') . $path;
}
