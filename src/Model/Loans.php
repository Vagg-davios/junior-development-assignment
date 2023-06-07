<?php

use Core\Database;

class Loans
{
    private ?Database $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function getLoans($id): int
    {
        $this->db->query('SELECT * FROM loans WHERE student_id = :student_id');
        $this->db->bind(':student_id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function addLoan($book_id, $student_id, $due_date): void
    {
        $this->db->query('INSERT INTO loans (book_id, student_id, due_date) VALUES (:book_id, :student_id, :due_date)');
        $this->db->bind(':book_id', $book_id);
        $this->db->bind(':student_id', $student_id);
        $this->db->bind(':due_date', $due_date);
        $this->db->execute();
    }

    public function getBooksOfUser($id): array
    {
        $this->db->query('SELECT books.title, books.author, loans.due_date, loans.id FROM books JOIN loans ON books.book_id = loans.book_id WHERE loans.student_id = :id');
        $this->db->bind(':id', $id);
        $this->db->execute();

        return $this->db->resultSet();
    }

    public function returnBook($loan_id): void
    {
        $this->db->query('DELETE FROM loans WHERE id = :loan_id');
        $this->db->bind(':loan_id', $loan_id);
        $this->db->execute();
    }

}