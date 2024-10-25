<?php

namespace App\controller;

use App\model\PageModel;
use App\manager\PageManager;
use App\controller\NewsletterController;
use Utils\UtilsController\AbstractController;

class HomeController extends AbstractController
{

    public function index(PageManager $pageManager, NewsletterController $newsletterController)
    {

        $elements = $pageManager->findElements('Accueil');

        $page = new PageModel($elements);

        $news = $newsletterController->newsletterSubscription();

        return $this->render('home', array_merge([
            'newPage' => $page,
            'title_default' => 'Page | Chocolaterie',
            'name' => 'index'
        ], $news));

    }
}