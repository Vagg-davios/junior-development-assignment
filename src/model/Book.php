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

}