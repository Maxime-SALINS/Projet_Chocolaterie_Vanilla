<?php
namespace App\manager;

use \PDO;
use Utils\Database\Database;

class PageManager{
    
    public function findElements(string $page_name):array
    {
        $sql = "SELECT p.page_name, e.element_type, pe.elements_position, pe.content
        FROM `pages_has_elements` pe
        INNER JOIN `pages` p 
        ON pe.idPages = p.idPages 
        JOIN `elements` e 
        ON pe.idElements = e.idElements
        WHERE page_name = :page_name";

        $stmt = Database::getPDO()->prepare($sql);
        $stmt->bindValue(':page_name', $page_name, PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findElementsDash(string $page_name): array
    {
        $sql = "SELECT p.page_name, e.idElements, e.element_type, pe.elements_position, pe.content
        FROM `pages_has_elements` pe 
        INNER JOIN `pages` p 
        ON pe.idPages = p.idPages
        JOIN `elements` e 
        ON pe.idElements = e.idElements
        WHERE page_name = :page_name
        AND e.element_type != 'meta description'";

        $stmt = Database::getPDO()->prepare($sql);
        $stmt->bindValue(':page_name', $page_name, PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findAllPage():array
    {
        $sql = "SELECT * FROM pages LIMIT 4";

        $stmt = Database::getPDO()->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findMetaDescription():array
    {
        $sql = "SELECT p.page_name, e.element_type, pe.elements_position, pe.content
        FROM `pages_has_elements` pe
        INNER JOIN `pages` p 
        ON pe.idPages = p.idPages 
        JOIN `elements` e 
        ON pe.idElements = e.idElements
        WHERE e.element_type = 'meta description'";

        $stmt = Database::getPDO()->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function updateContent(string $value, int $id):bool
    {
        $sql = "UPDATE `pages_has_elements` SET content=:content WHERE idElements=:idElements";

        $stmt = Database::getPDO()->prepare($sql);
        $stmt->bindValue(':content', $value, PDO::PARAM_STR);
        $stmt->bindValue(':idElements', $id, PDO::PARAM_INT);

        $stmt->execute();

        return true;
    }

    public function findElementsById(int $id):array
    {
        $sql = "SELECT * FROM `pages_has_elements` WHERE idElements=:idElements";

        $stmt = Database::getPDO()->prepare($sql);
        $stmt->bindValue(':idElements', $id, PDO::PARAM_INT);

        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}