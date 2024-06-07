<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

require_once 'autoload.php';

use App\controller\PageController;
use App\controller\UserController;

$uri = $_SERVER['REQUEST_URI'];
$Page = new PageController();


switch ($uri) {
  case '/contact':
    $Page->contact();
    break;

  case '/histoire':
    $Page->story();
    break;

  case '/produits':
    $Page->product();
    break;
  
  case '/admin':
    $user = new UserController;
    $user->login();
    $Page->connection();
    break;

  case '/dashboard':
    $path = 'home-dashboard';
    $Page->dashboard($path);
    break;
  
  case '/dashboard/profil':
    $path = 'profil-dashboard';
    $Page->dashboard($path);
    break;

  case '/dashboard/statistique':
    $path = 'stat-dashboard';
    $Page->dashboard($path);
    break;

  case '/dashboard/referencement':
    $path = 'seo-dashboard';
    $Page->dashboard($path);
    break;
  
  case '/dashboard/produits':
    $path = 'product-dashboard';
    $Page->dashboard($path);
    break;
  
  case '/dashboard/contenu/?page_name=Accueil':
    $path = 'accueil-content-dashboard';
    $Page->dashboard($path);
    break;
  
  case '/dashboard/contenu/?page_name=Histoire':
    $path = 'story-content-dashboard';
    $Page->dashboard($path);
    break;
  
  case '/dashboard/newsletter':
    $path = 'newsletter-dashboard';
    $Page->dashboard($path);
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