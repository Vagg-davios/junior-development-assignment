<?php

$loans = new Loans();

$borrowedBooksArray = $loans->getBooksOfUser($_SESSION['user']);
$numberOfLoans = count($borrowedBooksArray);

view('/book/borrowed.view.php', [
    'headerText' => "Borrowed books: {$numberOfLoans}/3",
    'loans' => $borrowedBooksArray,
]);
