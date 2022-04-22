<?php

include 'Database.php';

class AuthController
{
    protected $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function login($request)
    {
        $query = $this->db->pdo->prepare('SELECT id,username,password FROM users WHERE username = :username');
        $query->bindParam(':username', $request['username']);
        $query->execute();

        $user = $query->fetch();

        $password = $request['password'];
        if(count($user) > 0 && $user['password'] == $password ){
            $_SESSION['ID'] = $user['ID'];
            $_SESSION['username'] = $user['username'];

            header('Location: ../index-1.php');                
        }else{
            echo "<p>no such user </p>";
        }
    }
}
