<?php
namespace App\controller;

class PageController {

    public function index()
    {
        
        $this->render('home', [
            'title' => 'Page | Accueil',
            'first_title' => 'chocolaterie la rouvière',
            'title_default' => 'Page | Chocolaterie'
        ]);
    }

    public function contact()
    {
        $this->render('contact', [
            'title' => 'Page | Contact',
            'first_title' => 'contact',
            'title_default' => 'Page | Chocolaterie'
        ]);
    }

    public function story()
    {
        $this->render('story', [
            'title' => 'Page | Histoire',
            'first_title' => 'notre histoire',
            'title_default' => 'Page | Chocolaterie'
        ]);
    }

    public function product()
    {
        $this->render('product-list', [
            'title' => 'Page | Produits',
            'first_title' => 'nos produits',
            'title_default' => 'Page | Chocolaterie'
        ]);
    }

    public function error()
    {
        $this->render('404', [
            'title' => 'Page | Erreur 404',
            'first_title' => 'erreur 404',
            'title_default' => 'Page | Chocolaterie'
        ]);
    }

    public function render(string $path, array $data=[]):void 
    {
        extract($data);
        ob_start();
        require_once 'views/Components/header.php';
        require_once 'views/Pages/'.$path.'.html.php';
        require_once 'views/Components/footer.php';
        $content = ob_get_clean();
        require_once 'views/Pages/base.html.php';
    }

}