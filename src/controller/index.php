<?php

require_once dirname(__DIR__) . '/model/Book.php';
$books = new Book();

$headerText = "Available books:";

$booksArray = $books->getBooks();

require dirname(__DIR__) . '/view/home.view.php';
