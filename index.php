<?php
require_once 'controllers/Page-controller.php';

$title_default = 'Page | Chocolaterie';
$uri = $_SERVER['REQUEST_URI'];

if ($uri === "/"){
  $title = 'Page | Accueil';
  $first_title = 'chocolaterie la rouvière';
  $view = new PageControllers('home');
  $view->render(["title_default"=>$title_default, "title"=>$title, "first_title"=>$first_title]);
} elseif ($uri === "/contact"){
  $title = 'Page | Contact';
  $first_title = 'contact';
  $view = new PageControllers('contact');
  $view->render(["title_default"=>$title_default, "title"=>$title, "first_title"=>$first_title]);
} elseif ($uri === "/histoire"){
  $title = 'Page | Histoire';
  $first_title = 'notre histoire';
  $view = new PageControllers('story');
  $view->render(["title_default"=>$title_default, "title"=>$title, "first_title"=>$first_title]);
} elseif ($uri === '/produits') {
  $title = 'Page | Produits';
  $first_title = 'nos produits';
  $view = new PageControllers('product-list');
  $view->render(["title_default"=>$title_default, "title"=>$title, "first_title"=>$first_title]);
} elseif ($uri === "/404"){
  $title = 'Page | Erreur 404';
  $first_title = 'erreur 404';
  $view = new PageControllers('404');
  $view->render(["title_default"=>$title_default, "title"=>$title, "first_title"=>$first_title]);
} else {
  $title = 'Page | Accueil';
  $first_title = 'chocolaterie la rouvière';
  $view = new PageControllers('home');
  $view->render(["title_default"=>$title_default, "title"=>$title, "first_title"=>$first_title]);
}
