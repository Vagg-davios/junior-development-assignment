<?php
const BASE_PATH = __DIR__ . '/../';

require_once BASE_PATH  . './src/config/functions.php' ;
require_once base_path('./src/config/config.php');
$routes = require_once base_path('./src/config/routes.php');

$router = new Router($routes);

$urlArray = formatUrl($_SERVER["REQUEST_URI"]);
$router->route($urlArray['path']);
