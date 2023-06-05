<?php

require_once '../src/core/functions.php';
require_once './config/config.php';


$url = $_SERVER['REQUEST_URI'];
$path = explode(ROOT, $url); //exclude ROOT from URL
$urlArray = parse_url($path[1]); // get the path from the url and parse it to get query too

$BASE = dirname(__DIR__);


$routes = [
    '/' => $BASE . "/src/controller/index.php",
    '/borrowed' => $BASE . "/src/controller/borrowedBooks.php",
    '/book' => $BASE . "/src/controller/book.php",
];

function routeToController($uri, $routes)
{
    if (array_key_exists($uri, $routes))
        return require_once $routes[$uri];

    return require_once dirname(__DIR__) . '/src/view/_404.view.php';

}

routeToController($urlArray["path"], $routes);