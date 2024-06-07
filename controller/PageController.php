<?php
namespace App\controller;

use App\model\Page;
use App\manager\PageManager;

class PageController extends AbstractController {

    public function index()
    {
        $homePage = new PageManager;
        $elements = $homePage->findElements('Accueil');

        $newPage = new Page($elements);
        
        $this->render('home', [
            'newPage' => $newPage,
            'title_default' => 'Page | Chocolaterie',
            'name' => 'index'
        ]);
    }

    public function contact()
    {
        $this->render('contact', [
            'title' => 'Contact',
            'first_title' => 'contact',
            'title_default' => 'Page | Chocolaterie',
            'name' => 'contact'
        ]);
    }

    public function story()
    {
        $storyPage= new PageManager;
        $elements= $storyPage->findElements('Histoire');

        $newPage = new Page($elements);
        
        $this->render('story', [
            'newPage' => $newPage,
            'title_default' => 'Page | Chocolaterie',
            'name' => 'story'
        ]);
    }

    public function product()
    {
        $productPage = new PageManager;
        $elements = $productPage->findElements('Produits');

        $newPage = new Page($elements);

        $this->render('product-list', [
            'newPage' => $newPage,
            'title_default' => 'Page | Chocolaterie',
            'name' => 'product'
        ]);
    }

    public function error()
    {
        $this->render('404', [
            'title' => 'Page | Erreur 404',
            'first_title' => 'erreur 404',
            'name' => 'error'
        ]);
    }

    public function connection()
    {
        $this->render('login', [
            'title' => 'Connexion',
            'first_title' => 'connexion',
            'name' => 'login'
        ]);
    }

    public function dashboard(string $path)
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
                'elements' => $elements
            ], 'dashboard','Components/dashboard/');
        }
    }
}