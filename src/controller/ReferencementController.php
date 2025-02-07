<?php

namespace App\controller;

use App\manager\PageManager;
use Utils\UtilsController\AbstractController;

class ReferencementController extends AbstractController {

    public function index()
    {
    
        if(empty($_SESSION) || $_SESSION['role'] !== 'admin'){
    
            $this->redirect('/');
            exit();
        
        } else {
    
            $dashboardPage = new PageManager;
            $elements = $dashboardPage->findAllPage();
            $seo_elements = $dashboardPage->findMetaDescription();
    
            $this->render('/dashboard/seo-dashboard.html.php', [
                'title' => 'Dashboard',
                'first_title' => 'Dashboard administrateur',
                'name' => 'dashboard',
                'elements' => $elements,
                'seo_elements'=>$seo_elements
            ], 'dashboard.html.php');
    
        }
    }

    public function update(){

        if(empty($_SESSION) || $_SESSION['role'] !== 'admin'){
    
            $this->redirect('/');
            exit();
        
        } else {

            if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    
                if (!empty($_POST['meta_description'])){
    
                    $newMeta = htmlspecialchars($_POST['meta_description']);
                    $id = $_GET['id'];
                    $newSQL = new PageManager;
    
                    if($newSQL->updateContent($newMeta, $id)){
    
                        $this->redirect('/dashboard/referencement');
                    }
                }
            }

            $this->render('/dashboard/update/update-seo.html.php', [
                'title' => 'Dashboard',
                'first_title' => 'Dashboard administrateur',
                'name' => 'dashboard',
            ], 'dashboard.html.php');
        }
    }
}