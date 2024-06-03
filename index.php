<?php
require_once 'autoload.php';

use App\controller\PageController;
use App\controller\UserController;

$uri = $_SERVER['REQUEST_URI'];
$newPage = new PageController();

if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

if ($uri === "/"){
  $newPage->index();
} elseif ($uri === "/contact"){
  $newPage->contact();
} elseif ($uri === "/histoire"){
  $newPage->story();
} elseif ($uri === '/produits') {
  $newPage->product();
} elseif ($uri === "/admin"){
  $user = new UserController;
  $user->login();
  $newPage->connection();
} elseif ($uri === "/dashboard"){
  $newPage->dashboard();
} elseif ($uri === "/logout"){
  $user = new UserController;
  $user->logout();
} elseif ($uri === "/404"){
  $newPage->error();
} else {
  $newPage->index();
}
