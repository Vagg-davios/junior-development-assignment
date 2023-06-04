<?php
require_once __DIR__ . '/layout/header.view.php';
require_once dirname(__DIR__) . '/model/Book.php';

$books = new Book();

foreach ($books->getBooks() as $book) {
    echo $book['title'] . '<br>';
}

require_once __DIR__ . '/layout/footer.view.php';
