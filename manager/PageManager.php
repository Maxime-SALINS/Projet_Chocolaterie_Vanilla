<?php
namespace App\manager;

use \PDO;

class PageManager extends DatabaseManager {
    
    public function findElements(string $page_name):array
    {
        $sql = "SELECT page_name, e.element_type, e.element_position, c.content
        FROM `pages` p 
        INNER JOIN `elements` e 
        ON p.page_id = e.page_id 
        JOIN `content` c 
        ON e.element_id = c.element_id 
        WHERE page_name = :page_name";

        $stmt = $this->getDatabase()->prepare($sql);
        $stmt->bindValue(':page_name', $page_name, PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findElementsDash(string $page_name):array
    {
        $sql = "SELECT page_name, e.element_id, e.element_type, e.element_position, c.content
        FROM `pages` p 
        INNER JOIN `elements` e 
        ON p.page_id = e.page_id 
        JOIN `content` c 
        ON e.element_id = c.element_id 
        WHERE page_name = :page_name
        EXCEPT WHERE e.element_type = `meta description`";

        $stmt = $this->getDatabase()->prepare($sql);
        $stmt->bindValue(':page_name', $page_name, PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findAllPage():array
    {
        $sql = "SELECT * FROM pages LIMIT 4";

        $stmt = $this->getDatabase()->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findMetaDescription():array
    {
        $sql = "SELECT page_name, e.element_id, e.element_type, c.content
        FROM `pages` p 
        INNER JOIN `elements` e 
        ON p.page_id = e.page_id 
        JOIN `content` c 
        ON e.element_id = c.element_id
        WHERE e.element_type = 'meta description'";

        $stmt = $this->getDatabase()->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function updateContent(string $text, int $id):bool
    {
        $sql = "UPDATE content SET content=:content WHERE element_id=:element_id";

        $stmt = $this->getDatabase()->prepare($sql);
        $stmt->bindValue(':content', $text, PDO::PARAM_STR);
        $stmt->bindValue(':element_id', $id, PDO::PARAM_INT);

        $stmt->execute();

        return true;
    }
}