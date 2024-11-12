<?php

namespace App\controller;

use App\model\PageModel;
use App\manager\PageManager;
use App\controller\NewsletterController;
use Utils\UtilsController\AbstractController;

class HomeController extends AbstractController
{
    public function index()
    {
        $pageManager = new PageManager;
        $elements = $pageManager->findElements('Accueil');

        $page = new PageModel($elements);

        $newsletterController = new NewsletterController;
        $news = $newsletterController->newsletterSubscription();

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

            $this->render('/dashboard/home-dashboard.html.php', [
                'title' => 'Dashboard',
                'first_title' => 'Dashboard administrateur',
                'name' => 'dashboard',
                'elements' => $elements,
            ], 'dashboard.html.php');
        }
    }
}