<?php

namespace App\controller;

use App\model\PageModel;
use App\manager\PageManager;
use App\controller\NewsletterController;
use Utils\UtilsController\AbstractController;

class ContactController extends AbstractController {

    public function index()
    {
        $newsQuery = new NewsletterController;
        $newsletterStatus = $newsQuery->newsletterSubscription();

        $this->render('/contact/contact.html.php', array_merge([
            'title' => 'Contact',
            'first_title' => 'contact',
            'title_default' => 'Page | Chocolaterie',
            'name' => 'contact'
        ], $newsletterStatus));
    }
}
