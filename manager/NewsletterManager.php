<?php
namespace App\manager;

use \PDO;
use App\manager\DatabaseManager;

class NewsletterManager extends DatabaseManager {

    public function findAll():array
    {
        $sql = "SELECT * FROM newsletter";

        $stmt = $this->getDatabase()->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findEmail(string $email):bool
    {
        $sql ="SELECT * FROM newsletter WHERE email=:email";

        $stmt = $this->getDatabase()->prepare($sql);
        $stmt->bindValue(':email', $email, PDO::PARAM_STR);
        $stmt->execute();

        $findEmail = $stmt->fetch(PDO::FETCH_ASSOC);

        if($findEmail) {
            return false;
        } else {
            return true;
        }
    }

    public function uplaodSubscriber(string $email):bool
    {
        $newData = array($email);

        $sql ="INSERT INTO newsletter(`email`) VALUES (?)";
        $stmt = $this->getDatabase()->prepare($sql);
        $stmt->execute($newData);

        return true;
    }

    public function delete(string $email):bool
    {
        $sql = "DELETE FROM newsletter WHERE email = :email";

        $stmt = $this->getDatabase()->prepare($sql);
        $stmt->bindValue(':email', $email, PDO::PARAM_STR);
        $stmt->execute();

        return true;
    }
}