<?php

use Core\Database;

class User
{

    private ?Database $db;

    public function __construct(){
        $this->db = Database::getInstance();
    }

    public function userExists($email): bool
    {
        $this->db->query('SELECT * FROM users WHERE email = :email');
        $this->db->bind(':email', $email);
        $this->db->single();

        return $this->db->rowCount() > 0;
    }

    public function register($data): bool
    {
        $this->db->query("INSERT INTO users (fullname, username, email, password) VALUES (:fullname, :username, :email, :password)");
        $this->db->bind(':fullname', $data['full-name']);
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);

        return $this->db->execute();
    }





}