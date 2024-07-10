<?php
namespace App\model;

class User {

    private $id;
    private $username;
    private $email;
    private $password;

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function getId():int
    {
        return $this->id;
    }

    public function setUsername(string $name)
    {
        $username = htmlspecialchars($name);
        $this->username = $username;
    }

    public function getUsername():string
    {
        return $this->username;
    }

    public function setEmail(string $email)
    {
        $email = htmlspecialchars($email);
        $this->email = $email;
    }

    public function getEmail():string
    {
        return $this->email;
    }

    public function setPassword(string $password) 
    {
        // $password_hash = password_hash($password,PASSWORD_DEFAULT,['cost'=> 12]);
        $password = htmlspecialchars($password);
        $this->password = $password;
    }

    public function getPassword():string
    {
        return $this->password;
    }
}