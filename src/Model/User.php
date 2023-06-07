<?php

use Core\Database;

class User
{

    private ?Database $db;
    private static ?int $userId;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public static function getUserId(): ?int
    {
        return self::$userId;
    }

    private static function setUserId(int $userId): void
    {
        self::$userId = $userId;
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

    public function login($email, $password): bool
    {
        $this->db->query("SELECT * FROM users WHERE email = :email");
        $this->db->bind(':email', $email);
        $user = $this->db->single();

        if (!$user || !password_verify($password, $user['password'])) return false;

        self::setUserId($user['user_id']); // Is this bad security?

        return true;
    }
}