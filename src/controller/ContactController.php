<?php

namespace App\controller;

use App\model\PageModel;
use App\manager\PageManager;
use App\service\NewsletterService;
use Utils\UtilsController\AbstractController;

class ContactController extends AbstractController {

    public function index()
    {
        $newsletterService = new NewsletterService;
        $news = $newsletterService->newsletterSubscription();

        $this->render('/contact/contact.html.php', array_merge([
            'title' => 'Contact',
            'first_title' => 'contact',
            'title_default' => 'Page | Chocolaterie',
            'name' => 'contact'
        ], $news));
    }
}
