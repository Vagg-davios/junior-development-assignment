<?php

require dirname(__DIR__,2) . '/public/config/Database.php';

class Book {

    private ?Database $db;

    public function __construct(){
        $this->db = new Database();
    }

    public function getBooks(): array
    {
        $this->db->query('SELECT * FROM books');
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