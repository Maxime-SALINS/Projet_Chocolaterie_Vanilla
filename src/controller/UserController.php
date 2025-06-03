<?php
namespace App\controller;

use App\manager\PageManager;
use App\model\UserModel;
use App\manager\UserManager;
use App\service\NewsletterService;
use Utils\UtilsController\AbstractController;

class UserController extends AbstractController {

    public function index()
    {
        if(empty($_SESSION) || $_SESSION['role'] !== 'admin'){
            $this->redirect('/');
            exit();
        } else {
            $dashboardPage = new PageManager;
            $elements = $dashboardPage->findAllPage();

            $newsletterService = new NewsletterService;
            $news_elements = $newsletterService->findAll();

            $this->render('/dashboard/profil-dashboard.html.php', [
                'title' => 'Dashboard',
                'first_title' => 'Dashboard administrateur',
                'name' => 'dashboard',
                'elements' => $elements,
                'news_elements' => $news_elements
            ], 'dashboard.html.php');
        }
    }

    public function update()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            if (empty($_POST['username']) && empty($_POST['email']) && !empty($_POST['password'])){

                $user = new UserModel;
                $user->setUsername($_SESSION['name']);
                $user->setPassword($_POST['password']);

                $username = $user->getUsername();
                $password= $user->getPassword();

                $userManager = new UserManager;
                $userManager->updatePassword($password, $username);

            } elseif (empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])){

                $user = new UserModel;
                $user->setUsername($_SESSION['name']);
                $user->setEmail($_POST['email']);
                $user->setPassword($_POST['password']);

                $username = $user->getUsername();
                $email = $user->getEmail();
                $password = $user->getPassword();

                $userManager = new UserManager;
                $userManager->updatePasswordAndEmail($email, $password, $username);

            } elseif (!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])){

                $user = new UserModel;
                $user->setId($_SESSION['id']);
                $user->setUsername($_POST['username']);
                $user->setEmail($_POST['email']);
                $user->setPassword($_POST['password']);

                $id = $user->getId();
                $username = $user->getUsername();
                $email = $user->getEmail();
                $password = $user->getPassword();

                $userManager = new UserManager;
                $userManager->updateAllInfo($email, $password, $username, $id);
            }
        }
    }
}