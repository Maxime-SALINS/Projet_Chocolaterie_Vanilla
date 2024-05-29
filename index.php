<?php
require_once 'autoload.php';

use App\controller\PageController;

$uri = $_SERVER['REQUEST_URI'];
$newPage = new PageController();

if ($uri === "/"){
  $newPage->index();
} elseif ($uri === "/contact"){
  $newPage->contact();
} elseif ($uri === "/histoire"){
  $newPage->story();
} elseif ($uri === '/produits') {
  $newPage->product();
} elseif ($uri === "/404"){
  $newPage->error();
} else {
  $newPage->index();
}
