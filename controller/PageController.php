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
        $this->render('story', [
            'title' => 'Page | Histoire',
            'first_title' => 'notre histoire',
            'title_default' => 'Page | Chocolaterie',
            'name' => 'story'
        ]);
    }

    public function product()
    {
        $this->render('product-list', [
            'title' => 'Page | Produits',
            'first_title' => 'nos produits',
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
        $this->render('login', [
            'title' => 'Page | Connexion',
            'first_title' => 'connexion',
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
            $this->render('dashboard', [
                'title' => 'Dashboard',
                'title_default' => 'Page | Chocolaterie',
                'name' => 'dashboard'
            ]);
        }
    }
}