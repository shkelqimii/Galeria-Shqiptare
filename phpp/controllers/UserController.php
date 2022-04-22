<?php

include 'Database.php';

class UserController
{
    protected $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function store($request)
    {
        $password = $request['password'];

        $query = $this->db->pdo->prepare('INSERT INTO users (username, password) VALUES (:username, :password)');
        $query->bindParam(':username', $request['username']);
        $query->bindParam(':password', $password);
        $query->execute();

        return header('Location: ./login.php');
    }
}
