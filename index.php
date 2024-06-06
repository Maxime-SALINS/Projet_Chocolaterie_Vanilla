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

  case '/dasboard':
    $Page->dashboard();
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