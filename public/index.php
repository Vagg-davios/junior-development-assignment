<?php

session_start();

const BASE_PATH = __DIR__ . '/../';

require_once BASE_PATH  . './src/config/functions.php' ;
require_once base_path('./src/config/config.php');


$router = new Core\Router();

$routes = require_once base_path('./src/config/routes.php');
$urlArray = formatUrl($_SERVER["REQUEST_URI"]);

$method = $_POST["_method"] ?? $_SERVER["REQUEST_METHOD"];

$router->route($urlArray['path'], $method);


