<?php
namespace App\controller;

use App\model\PageModel;
use App\manager\PageManager;
use App\service\NewsletterService;
use Utils\UtilsController\AbstractController;


class PageController extends AbstractController {

    public function viewDashPage(string $page_name)
    {
        if(empty($_SESSION) || $_SESSION['role'] !== 'admin'){
            $this->redirect('/');
            exit();
        } else {
            $dashboardPage = new PageManager;
            $elements = $dashboardPage->findAllPage();
            $page_elements = $dashboardPage->findElementsDash($page_name);

            $this->render('', [
                'title' => 'Dashboard',
                'first_title' => 'Dashboard administrateur',
                'name' => 'dashboard',
                'elements' => $elements,
                'page_elements'=>$page_elements
            ], 'dashboard',$file);
        }
    }

    public function updateElementsPage(string $path, string $file)
    {
        if(empty($_SESSION) || $_SESSION['role'] !== 'admin'){

            $this->redirect('/');
            exit();
        
        } else {

            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                 
                if(!empty($_POST['title'])){

                    $value = htmlspecialchars($_POST['title']);
                    $id = $_GET['id'];

                    $newsQuery = new PageManager;
                    $newsQuery->updateContent($value, $id);

                    $this->redirect('/dashboard/contenu?page_name=Accueil');

                } elseif(!empty($_FILES['image_page'])){

                    $image_page = $_FILES['image_page']['name'];

                    //image infos :
                    $tmpName = $_FILES['image_page']['tmp_name'];

                    //Get extension of image :
                    $imgExtension = pathinfo($image_page, PATHINFO_EXTENSION);

                    //Regex for extension valid :
                    $extensionValid = ['jpg', 'jpeg', 'gif', 'png', 'webp'];

                    if (!in_array(strtolower($imgExtension),$extensionValid)) {
                        
                        $msg_error = "l'extention de l'image n'est pas valide";
                    
                        $dashboardPage = new PageManager;
                        $elements = $dashboardPage->findAllPage();
    
                        $this->render($path, [
                            'title' => 'Dashboard',
                            'first_title' => 'Dashboard administrateur',
                            'name' => 'dashboard',
                            'elements' => $elements,
                            'msg_error' => $msg_error
                        ], 'dashboard',$file);
                        
                    } else {

                        $id = htmlspecialchars($_GET['id']);
                        $newQuery = new PageManager;

                        $oldImage = $newQuery->findElementsById($id);
                        $pathImageFull = $oldImage['content'];
                        $directory = dirname($pathImageFull) . '/';
                        
                        if ($directory[0] === '/') {
                            $directory = substr($directory, 1);
                        }
                        
                        move_uploaded_file($tmpName, $directory . $image_page);
                        
                        $directory = dirname($pathImageFull) . '/';
                        $value = $directory.$image_page;
    
                        $newQuery->updateContent($value, $id);
                        
                        $msg_success = "L'image a été mise à jour";
                        
                        $elements = $newQuery->findAllPage();

                        $this->render($path, [
                            'title' => 'Dashboard',
                            'first_title' => 'Dashboard administrateur',
                            'name' => 'dashboard',
                            'elements' => $elements,
                            'msg_success' => $msg_success
                        ], 'dashboard',$file);
                    }
                } elseif (!empty($_POST['text'])){

                    $value = htmlspecialchars($_POST['text']);
                    $id = $_GET['id'];

                    $newsQuery = new PageManager;
                    $newsQuery->updateContent($value, $id);

                    $this->redirect('/dashboard/contenu?page_name=Accueil');
                }
            }

            $dashboardPage = new PageManager;
            $elements = $dashboardPage->findAllPage();

            $this->render($path, [
                'title' => 'Dashboard',
                'first_title' => 'Dashboard administrateur',
                'name' => 'dashboard',
                'elements' => $elements,
            ], 'dashboard',$file);
        }
    }
}