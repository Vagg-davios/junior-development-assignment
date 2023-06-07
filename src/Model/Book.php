<?php

use Core\Database;

class Book
{

    private ?Database $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function getAvailableBooks(): array
    {
        $this->db->query('SELECT * FROM books WHERE book_id NOT IN (SELECT book_id FROM loans)');
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function getBook($id): array
    {
        $this->db->query('SELECT * FROM books WHERE book_id = :id');
        $this->db->bind(':id', $id);
        $this->db->execute();

        return $this->db->single();
    }

}