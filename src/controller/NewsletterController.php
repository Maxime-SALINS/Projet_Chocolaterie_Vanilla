<?php

namespace App\controller;

use App\manager\PageManager;
use App\service\NewsletterService;
use Utils\UtilsController\AbstractController;

class NewsletterController extends AbstractController {

    public function index()
    {
        if(empty($_SESSION) || $_SESSION['role'] !== 'admin'){
            $this->redirect('/');
            exit();
        } else {
            $dashboardPage = new PageManager;
            $elements = $dashboardPage->findAllPage();

            $newsletterService = new NewsletterService;
            $news_elements = $newsletterService->findAll();

            $this->render('/dashboard/newsletter-dashboard.html.php', [
                'title' => 'Dashboard',
                'first_title' => 'Dashboard administrateur',
                'name' => 'dashboard',
                'elements' => $elements,
                'news_elements' => $news_elements
            ], 'dashboard.html.php');
        }
    }

    public function delete()
    {
        $email= $_GET['email'];

        $newsletterService = new NewsletterService;
        $deleteNews = $newsletterService->deleteSubscriber($email);

        if ($deleteNews){
            $this->redirect('/dashboard/newsletter');
        }
    }
}