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
}