<?php
namespace App\controller;

use App\model\Page;
use App\manager\PageManager;
use App\controller\NewsletterController;
use App\controller\ProductController;

class PageController extends AbstractController {

    public function index()
    {
        $homePage = new PageManager;
        $elements = $homePage->findElements('Accueil');

        $newPage = new Page($elements);
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $newSub = new NewsletterController;
            if($newSub->newSubscriber()){
              $msg_success = "Vos êtes abonné à la Newsletter";
            } elseif (!$newSub->newSubscriber() && !empty($_POST['useremail_news'])) {
              $msg_error = "Vous avez déjà souscrit un abonnement";
            } else {
              $error = "Vous devez remplir ce champ";
            }
        }

        if(!empty($msg_success)) {
            $this->render('home', [
                'newPage' => $newPage,
                'title_default' => 'Page | Chocolaterie',
                'msg_success' => $msg_success,
                'name' => 'index'
            ]);
        } elseif (!empty($msg_error)) {
            $this->render('home', [
                'newPage' => $newPage,
                'title_default' => 'Page | Chocolaterie',
                'msg_error' => $msg_error,
                'name' => 'index'
            ]);
        } elseif (!empty($error)){
            $this->render('home', [
                'newPage' => $newPage,
                'title_default' => 'Page | Chocolaterie',
                'error' => $error,
                'name' => 'index'
            ]);
        } else {
            $this->render('home', [
                'newPage' => $newPage,
                'title_default' => 'Page | Chocolaterie',
                'name' => 'index'
            ]);
        }
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

    public function dashboard(string $path, string $file)
    {
        if(empty($_SESSION) || $_SESSION['role'] !== 'admin'){
            $this->redirect('/');
            exit();
        } else {
            $dashboardPage = new PageManager;
            $elements = $dashboardPage->findAllPage();
            $seo_elements = $dashboardPage->findMetaDescription();

            $newletter = new NewsletterController;
            $news_elements = $newletter->viewAll();

            if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                $this->updateMetaDescription();
            }

            $this->render($path, [
                'title' => 'Dashboard',
                'first_title' => 'Dashboard administrateur',
                'name' => 'dashboard',
                'elements' => $elements,
                'news_elements' => $news_elements,
                'seo_elements'=>$seo_elements,
            ], 'dashboard',$file);
        }
    }

    public function updateMetaDescription(){

        if (!empty($_POST['meta_description'])){
            $newMeta = htmlspecialchars($_POST['meta_description']);
            $id = $_GET['id'];
            $newSQL = new PageManager;
            if($newSQL->updateContent($newMeta, $id)){
                $this->redirect('/dashboard/referencement');
            }
        }
    }
}