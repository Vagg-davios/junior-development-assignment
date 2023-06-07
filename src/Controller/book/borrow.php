<?php
$book_id = $_POST['book_id'];
$user_id = $_POST['user_id'];
$due_date = $_POST['due_date'];


$loans = new Loans();

if ($loans->getLoans($_SESSION['user']) >= 3) {
    $_SESSION['error'] = "You can't borrow more than 3 books!";
    header("Location: ./borrowed");
    exit();
}

$loans->addLoan($book_id, $user_id, $due_date);
header("Location: ./borrowed");
exit();
