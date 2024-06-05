<?php
namespace App\controller;

use App\model\Page;
use App\manager\PageManager;

class PageController extends AbstractController {

    public function index()
    {
        $homePage = new PageManager;
        $elements = $homePage->findElements('Accueil');
        var_dump($elements);

        $newPage = new Page($elements[0]->page_name,$elements[0]->content, $elements[10]->content, $elements[11]->content, $elements[12]->content, $elements[13]->content, $elements[14]->content, $elements[15]->content, null, $elements[1]->content, $elements[2]->content, $elements[3]->content, $elements[4]->content, $elements[5]->content, $elements[6]->content, $elements[7]->content, $elements[8]->content, $elements[9]->content);
        var_dump($newPage);
        
        $this->render('home', [
            'title' => 'Page | Accueil',
            'first_title' => 'chocolaterie la rouvière',
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