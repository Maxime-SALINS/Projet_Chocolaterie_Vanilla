<?php

namespace App\controller;

use App\model\PageModel;
use App\manager\PageManager;
use App\service\NewsletterService;
use Utils\UtilsController\AbstractController;

class HomeController extends AbstractController
{
    public function index()
    {
        $pageManager = new PageManager;
        $elements = $pageManager->findElements('Accueil');

        $page = new PageModel($elements);

        $newsletterService = new NewsletterService;
        $news = $newsletterService->newsletterSubscription();

        return $this->render('/home/home.html.php', array_merge([
            'newPage' => $page,
            'title_default' => 'Page | Chocolaterie',
            'name' => 'index'
        ], $news));

    }

    public function dashboard()
    {
        if(empty($_SESSION) || $_SESSION['role'] !== 'admin'){
            $this->redirect('/');
            exit();
        } else {
            $dashboardPage = new PageManager;
            $elements = $dashboardPage->findAllPage();

            $newsletterService = new NewsletterService;
            $news_elements = $newsletterService->findAll();

            $this->render('/dashboard/home-dashboard.html.php', [
                'title' => 'Dashboard',
                'name' => 'dashboard',
                'elements' => $elements,
                'news_elements' => $news_elements
            ], 'dashboard.html.php');
        }
    }
}