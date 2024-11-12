<?php

namespace App\controller;

use App\model\UserModel;
use App\manager\UserManager;
use Utils\UtilsController\AbstractController;

class LoginController extends AbstractController {

    public function index()
    {
        $this->render('/login/login.html.php', [
            'title' => 'Connexion',
            'first_title' => 'connexion',
            'name' => 'login'
        ]);
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            if(!empty($_POST['email']) && !empty($_POST['password'])){

                $user = new UserModel;
                $user->setEmail($_POST['email']);
                $user->setPassword($_POST['password']);

                $email = $user->getEmail();
                $password = $user->getPassword();

                $userManager = new UserManager;
                
                if($userManager->findUser($email, $password)){
                    if($this->connexionVerification()){
                        $this->redirect('/dashboard');
                        exit();
                    }
                } else {
                    $error = "Nom d'utilisateur ou mot de passe invalide";
                    $this->render('/login/login.html.php', [
                        'title' => 'Connexion',
                        'first_title' => 'connexion',
                        'name' => 'login',
                        'error' => $error
                    ]);
                }
            } else {
                $msg_error = "*champs obligatoire";
                $this->render('/login/login.html.php', [
                    'title' => 'Connexion',
                    'first_title' => 'connexion',
                    'name' => 'login',
                    'msg_error' => $msg_error
                ]);
            }
        }
    }

    public function logout()
    {
        if($_SERVER['REQUEST_URI'] === '/logout'){
            
            session_start();

            $_SESSION = array();

            session_destroy();
            
            $this->redirect('/');
        }
    }
}