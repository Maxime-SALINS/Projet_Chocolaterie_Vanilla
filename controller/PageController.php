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
            'title' => 'Page | Contact',
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
            'title_default' => 'Page | Chocolaterie',
            'name' => 'error'
        ]);
    }

    public function connection()
    {
        $elements = [
            array("page_name"=>"Connexion", "element_type"=>"h1", "element_position"=>1,"content"=>"connexion"),
            array("page_name"=>"Connexion", "element_type"=>"meta description", "element_position"=>1,"content"=>"connexion")
        ];
        $newPage = new Page($elements);

        $this->render('login', [
            'newPage'=> $newPage,
            'title_default' => 'Page | Chocolaterie',
            'name' => 'login'
        ]);
    }

    public function dashboard()
    {
        if(empty($_SESSION) || $_SESSION['role'] !== 'admin'){
            $this->redirect('/');
            exit();
        } else {
            $elements = [
                array("page_name"=>"Dashboard", "element_type"=>"h1", "element_position"=>1,"content"=>"Dashboard"),
                array("page_name"=>"Dashboard", "element_type"=>"meta description", "element_position"=>1,"content"=>"Dashboard")
            ];
            $newPage = new Page($elements);
            $this->render('dashboard', [
                'newPage'=> $newPage,
                'title_default' => 'Page | Chocolaterie',
                'name' => 'dashboard'
            ]);
        }
    }
}