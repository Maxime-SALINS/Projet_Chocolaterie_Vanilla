<?php
namespace App\model;

class NewsletterModel {

    private $userEmail;
    

    /**
     * Get the value of userEmail
     */ 
    public function getUserEmail():string
    {
        return $this->userEmail;
    }

    /**
     * Set the value of userEmail
     *
     * @return  self
     */ 
    public function setUserEmail(string $userEmail)
    {
        $userEmail = htmlspecialchars($userEmail);
        $this->userEmail = $userEmail;

        return $this;
    }
}