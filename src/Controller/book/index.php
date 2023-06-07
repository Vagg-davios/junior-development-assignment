<?php

$books = new Book();

view('/book/index.view.php', [
    'headerText' => "Available books:",
    'books' => $books->getAvailableBooks()
]);

exit();
