<?php

require_once dirname(__DIR__) . '/model/Book.php';
$books = new Book();

$book = $books->getBook($_GET["id"]);

require_once dirname(__DIR__) . '/view/book.view.php';

