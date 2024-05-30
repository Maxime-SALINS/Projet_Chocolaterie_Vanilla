<?php
namespace App\controller;

class PageController extends AbstractController {

    public function index()
    {
        
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
        $this->render('dashboard', [
            'title' => 'Dashboard',
            'title_default' => 'Page | Chocolaterie',
            'name' => 'dashboard'
        ]);
    }
}