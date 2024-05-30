<?php
namespace App\manager;

use \PDO;
use App\model\Database;

class UserManager {

    public function findUser(string $email, string $password):bool
    {
        $pdo = Database::getPDO();
        $sql = "SELECT * FROM user WHERE email = :email";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':email', $email, PDO::PARAM_STR);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_OBJ);

        if(!$user){
            return false;
        } else {
            if(password_verify($password, $user->password)){
                return true;
            } else {
                return false;
            }
        }
    }

    public function setUserSession(int $id, string $username, string $role)
    {
        // session_start();
        $pdo = Database::getPDO();
        $sql = "UPDATE user SET lastLogin = NOW() WHERE id=:id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        $stmt->execute();

        $_SESSION['id'] = $id;
        $_SESSION['name'] = $username;
        $_SESSION['role'] = $role;
    }
}