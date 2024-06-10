<?php
namespace App\manager;

use \PDO;

class UserManager extends DatabaseManager{

    public function findUser(string $email, string $password):bool
    {
        $sql = "SELECT * FROM user WHERE email = :email";
        $stmt = $this->getDatabase()->prepare($sql);
        $stmt->bindValue(':email', $email, PDO::PARAM_STR);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_OBJ);

        if(!$user){
            return false;
        } else {
            if(password_verify($password, $user->password)){
                $this->setUserSession($user);
                return true;
            } else {
                return false;
            }
        }
    }

    public function setUserSession($user)
    {
        $sql = "UPDATE user SET lastLogin = NOW() WHERE id=:id";
        $stmt = $this->getDatabase()->prepare($sql);
        $stmt->bindParam(':id', $user->id, PDO::PARAM_INT);

        $stmt->execute();

        $_SESSION['id'] = $user->id;
        $_SESSION['name'] = $user->username;
        $_SESSION['email'] = $user->email;
        $_SESSION['role'] = $user->role;
        $_SESSION['connecte'] = 1;
    }

    public function updatePassword(string $password, string $username)
    {
        $sql = "UPDATE user SET password = :password WHERE username = :username";

        $stmt = $this->getDatabase()->prepare($sql);
        $stmt->bindValue(':password', $password, PDO::PARAM_STR);
        $stmt->bindValue(':username', $username, PDO::PARAM_STR);

        $stmt->execute();
    }

    public function updatePasswordAndEmail(string $email, string $password, string $username)
    {
        $sql = "UPDATE user SET email = :email, password = :password WHERE username = :username";

        $stmt = $this->getDatabase()->prepare($sql);
        $stmt->bindValue(':email', $email, PDO::PARAM_STR);
        $stmt->bindValue(':password', $password, PDO::PARAM_STR);
        $stmt->bindValue(':username', $username, PDO::PARAM_STR);

        $stmt->execute();
    }

    public function updateAllInfo(string $email, string $password, string $username, int $id)
    {
        $sql = "UPDATE user SET username = :username, email = :email, password = :password WHERE id = :id";

        $stmt = $this->getDatabase()->prepare($sql);
        $stmt->bindValue(':email', $email, PDO::PARAM_STR);
        $stmt->bindValue(':password', $password, PDO::PARAM_STR);
        $stmt->bindValue(':username', $username, PDO::PARAM_STR);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);

        $stmt->execute();
    }
}