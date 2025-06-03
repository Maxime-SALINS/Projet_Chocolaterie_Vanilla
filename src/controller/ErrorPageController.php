<?php

namespace App\controller;

use App\service\NewsletterService;
use Utils\UtilsController\AbstractController;

class ErrorPageController extends AbstractController {

    public function index()
    {
        $newsQuery = new NewsletterService;
        $newsletterStatus = $newsQuery->newsletterSubscription();
        
        $this->render('/404/404.html.php', array_merge([
            'title' => 'Page | Erreur 404',
            'first_title' => 'erreur 404',
            'name' => 'error'
        ], $newsletterStatus));
    }
}