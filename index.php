<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

require_once 'autoload.php';
require_once __DIR__ . '/utils/autoload_utils.php';

use Utils\Routing\Router;

$url = $_SERVER['REQUEST_URI'];
$router = new Router($url);

//Routing systeme

//Home page
$router->get('/', "Home#index");

//Story page
$router->get('/histoire', "Story#index");

//Contact page
$router->get('/contact', "Contact#index");

//Product page
$router->get('/produits', "Product#index");
$router->post('/produits', "Product#index");
$router->get('/produit/detail/:product_id', "Product#show")->with('product_id', '[0-9]+');

//Login page
$router->get('/login', "Login#index");
$router->post('/login', "Login#login");

//logout
$router->get('/logout', "Login#logout");

//Dashboard
$router->get('/dashboard', "Home#dashboard");
$router->get('/dashboard/produits', "Product#viewDashboard");
$router->get('/dashboard/produits/ajout-produit', "Product#new");
$router->get('/dashboard/produit/modification/:idProduct', "Product#update")->with('idProduct', '[0-9]+');
$router->get('/dashboard/produit/supprimer/:idProduct', "Product#delete")->with('idProduct', '[0-9]+');
$router->post('/dashboard/produits/ajout-produit', "Product#new");

//Error 404 page
$router->get('/404', "ErrorPage#index");

$router->run();