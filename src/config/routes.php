<?php
$BASE = dirname(__DIR__, 2);

$router->get('/', $BASE . "/src/controller/book/index.php")->only('auth');

$router->get('/book', $BASE . "/src/controller/book/show.php")->only('auth');
$router->get('/borrow', $BASE . "/src/controller/book/borrow.php")->only('auth');
$router->get('/borrowed', $BASE . "/src/controller/book/borrowed.php")->only('auth');

$router->get('/register', $BASE . "/src/controller/user/register.php")->only('guest');
$router->post('/register', $BASE . "/src/controller/user/create-user.php");

$router->get('/login', $BASE . "/src/controller/user/login.php")->only('guest');
$router->post('/login', $BASE . "/src/controller/user/log-user.php");

$router->get('/logout', $BASE . "/src/controller/user/logout-user.php")->only('auth');
