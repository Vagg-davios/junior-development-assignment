<?php

$books = new Book();

view('/book/show.view.php', [
    'headerText' => "Book details:",
    'book' => $books->getBook($_GET["id"]),
]);

