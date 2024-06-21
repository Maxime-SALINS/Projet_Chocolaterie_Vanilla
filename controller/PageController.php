<?php
namespace App\controller;

use App\model\Page;
use App\manager\PageManager;
use App\controller\NewsletterController;


class PageController extends AbstractController {

    public function index()
    {
        $homePage = new PageManager;
        $elements = $homePage->findElements('Accueil');

        $newPage = new Page($elements);

        $newsQuery = new NewsletterController;
        $newsletterStatus = $newsQuery->newsletterSubscription();

        $this->render('home', array_merge([
            'newPage' => $newPage,
            'title_default' => 'Page | Chocolaterie',
            'name' => 'index'
        ], $newsletterStatus));
    }

    public function contact()
    {
        $newsQuery = new NewsletterController;
        $newsletterStatus = $newsQuery->newsletterSubscription();

        $this->render('contact', array_merge([
            'title' => 'Contact',
            'first_title' => 'contact',
            'title_default' => 'Page | Chocolaterie',
            'name' => 'contact'
        ], $newsletterStatus));
    }

    public function story()
    {
        $storyPage = new PageManager;
        $elements = $storyPage->findElements('Histoire');
        $newPage = new Page($elements);
        
        $newsQuery = new NewsletterController;
        $newsletterStatus = $newsQuery->newsletterSubscription();

        $this->render('story', array_merge([
            'newPage' => $newPage,
            'title_default' => 'Page | Chocolaterie',
            'name' => 'story'
        ], $newsletterStatus));
    }

    public function error()
    {
        $newsQuery = new NewsletterController;
        $newsletterStatus = $newsQuery->newsletterSubscription();
        
        $this->render('404', array_merge([
            'title' => 'Page | Erreur 404',
            'first_title' => 'erreur 404',
            'name' => 'error'
        ], $newsletterStatus));
    }

    public function connection()
    {
        $this->render('login', [
            'title' => 'Connexion',
            'first_title' => 'connexion',
            'name' => 'login'
        ]);
    }

    public function dashboard(string $path, string $file)
    {
        if(empty($_SESSION) || $_SESSION['role'] !== 'admin'){
            $this->redirect('/');
            exit();
        } else {
            $dashboardPage = new PageManager;
            $elements = $dashboardPage->findAllPage();

            $this->render($path, [
                'title' => 'Dashboard',
                'first_title' => 'Dashboard administrateur',
                'name' => 'dashboard',
                'elements' => $elements,
            ], 'dashboard',$file);
        }
    }

    public function viewDashSeo(string $path, string $file)
    {

        if(empty($_SESSION) || $_SESSION['role'] !== 'admin'){

            $this->redirect('/');
            exit();
        
        } else {

            if ($_SERVER['REQUEST_METHOD'] == 'POST'){

                if (!empty($_POST['meta_description'])){

                    $newMeta = htmlspecialchars($_POST['meta_description']);
                    $id = $_GET['id'];
                    $newSQL = new PageManager;

                    if($newSQL->updateContent($newMeta, $id)){

                        $this->redirect('/dashboard/referencement');
                    }
                }
            }

            $dashboardPage = new PageManager;
            $elements = $dashboardPage->findAllPage();
            $seo_elements = $dashboardPage->findMetaDescription();

            $this->render($path, [
                'title' => 'Dashboard',
                'first_title' => 'Dashboard administrateur',
                'name' => 'dashboard',
                'elements' => $elements,
                'seo_elements'=>$seo_elements
            ], 'dashboard',$file);

        }
    }

    public function viewDashNewsletter(string $path, string $file)
    {
        if(empty($_SESSION) || $_SESSION['role'] !== 'admin'){

            $this->redirect('/');
            exit();

        } else {
            $dashboardPage = new PageManager;
            $elements = $dashboardPage->findAllPage();

            $newletter = new NewsletterController;
            $news_elements = $newletter->viewAll();

            $this->render($path, [
                'title' => 'Dashboard',
                'first_title' => 'Dashboard administrateur',
                'name' => 'dashboard',
                'elements' => $elements,
                'news_elements' => $news_elements,
            ], 'dashboard',$file);
        }
    }
}