<?php

$book_id = $_POST['loan_id'];

$loans = new Loans();

$loans->returnBook($book_id);
$_SESSION['return'] = "Book returned!";
header("Location: ./borrowed");
exit();