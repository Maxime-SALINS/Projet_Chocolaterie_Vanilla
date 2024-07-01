<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

require_once 'autoload.php';

use App\controller\PageController;
use App\controller\UserController;
use App\controller\NewsletterController;
use App\controller\ProductController;

$Page = new PageController();
$newProduct = new ProductController;

$uri = $_SERVER['REQUEST_URI'];

switch ($uri) {
  case '/contact':
    $Page->contact();
    break;

  case '/histoire':
    $Page->story();
    break;

  case '/produits':
    $newProduct->viewAll();
    break;

  case '/produit/detail?product_id='.(isset($_GET['product_id']) ? $_GET['product_id'] : '' ):
    $newProduct->showOne($_GET['product_id']);
    break;
  
  case '/admin':
    $user = new UserController;
    $user->login();
    $Page->connection();
    break;

  case '/dashboard':
    $path = 'home-dashboard';
    $file = "Components/dashboard/";
    $Page->dashboard($path, $file);
    break;
  
  case '/dashboard/profil':
    $path = 'profil-dashboard';
    $file = "Components/dashboard/";
    $Page->dashboard($path, $file);
    $user = new UserController;
    $user->updateProfil();
    break;

  case '/dashboard/statistique':
    $path = 'stat-dashboard';
    $file = "Components/dashboard/";
    $Page->dashboard($path,$file);
    break;

  case '/dashboard/referencement':
    $path = 'seo-dashboard';
    $file = "Components/dashboard/";
    $Page->viewDashSeo($path, $file);
    break;
  
  case '/dashboard/referencement/modification?id='.(isset($_GET['id']) ? $_GET['id'] : '' ):
    $path = 'update-seo';
    $file = "Components/dashboard/update/";
    $Page->viewDashSeo($path, $file);
    break;

  case '/dashboard/produits':
    $path = 'product-dashboard';
    $file = "Components/dashboard/";
    $newProduct->viewProductDash($path, $file);
    break;
  
  case '/dashboard/produit/ajout-produit':
    $path = 'create-product';
    $file = "Components/dashboard/create/";
    $newProduct->createProduct($path, $file);
    break;

  case '/dashboard/produit/modification?product_id='.(isset($_GET['product_id']) ? $_GET['product_id'] : '' ):
    $path = 'update-product';
    $file = "Components/dashboard/update/";
    $newProduct->updateProduct($path, $file);
    break;

  case '/dashboard/produit/supprimer?product_id='.(isset($_GET['product_id']) ? $_GET['product_id'] : '' ):
    $newProduct->deleteProduct($_GET['product_id']);
    break;
  
  case '/dashboard/contenu/?page_name=Accueil':
    $path = 'accueil-content-dashboard';
    $file = "Components/dashboard/";
    $page_name = "Accueil";
    $Page->viewDashPage($page_name,$path, $file);
    break;
  
  case '/dashboard/contenu/?page_name=Histoire':
    $path = 'story-content-dashboard';
    $file = "Components/dashboard/";
    $page_name = "Histoire";
    $Page->viewDashPage($page_name,$path, $file);
    break;
  
  case '/dashboard/contenu/?page_name=Produits':
    $path = 'product-content-dashboard';
    $file = "Components/dashboard/";
    $page_name = "Produits";
    $Page->viewDashPage($page_name,$path, $file);
    break;
  
  case '/dashboard/contenu/?page_name=Contact':
    $path = 'contact-content-dashboard';
    $file = "Components/dashboard/";
    $page_name = "Contact";
    $Page->viewDashPage($page_name,$path, $file);
    break;

  case '/dashboard/newsletter':
    $path = 'newsletter-dashboard';
    $file = "Components/dashboard/";
    $Page->viewDashNewsletter($path, $file);
    break;

  case '/dashboard/newsletter/delete?email='.(isset($_GET['email']) ? $_GET['email'] : '' ):
    $deleteSub = new NewsletterController;
    $deleteSub->deleteSubscriber($_GET['email']);
    break;
    
  case '/logout':
    $user = new UserController;
    $user->logout();
    break;
  
  case '/404':
    $Page->error();
    break;
  
  default:
    $Page->index();
    break;
}