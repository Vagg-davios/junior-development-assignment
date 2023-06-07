<?php
$BASE = dirname(__DIR__, 2);

$router->get('/', $BASE . "/src/Controller/book/index.php")->only('auth');

$router->get('/book', $BASE . "/src/Controller/book/show.php")->only('auth');
$router->get('/borrow', $BASE . "/src/Controller/book/borrow.php")->only('auth');
$router->get('/borrowed', $BASE . "/src/Controller/book/borrowed.php")->only('auth');

$router->get('/register', $BASE . "/src/Controller/user/register.php")->only('guest');
$router->post('/register', $BASE . "/src/Controller/user/create-user.php");

$router->get('/login', $BASE . "/src/Controller/user/login.php")->only('guest');
$router->post('/login', $BASE . "/src/Controller/user/log-user.php");

$router->get('/logout', $BASE . "/src/Controller/user/logout-user.php")->only('auth');
