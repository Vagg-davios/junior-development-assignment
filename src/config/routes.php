<?php
$BASE = dirname(__DIR__, 2);

$router->get('/', $BASE . "/src/controller/book/index.php");

$router->get('/book', $BASE . "/src/controller/book/show.php");
$router->get('/borrowed', $BASE . "/src/controller/book/borrowed.php");

$router->get('/register', $BASE . "/src/controller/user/register.php");
$router->post('/register', $BASE . "/src/controller/user/create-user.php");