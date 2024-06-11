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

    public function uplaodSubscriber(string $email):bool
    {
        $sql ="INSERT INTO newsletter (email) VALUES (email=:email)";

        $stmt = $this->getDatabase()->prepare($sql);
        $stmt->bindValue(':email', $email, PDO::PARAM_STR);
        $stmt->execute();

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