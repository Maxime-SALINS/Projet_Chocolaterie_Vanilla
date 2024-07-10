<?php
namespace App\controller;

use App\model\User;
use App\manager\UserManager;

class UserController extends AbstractController {

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            if(!empty($_POST['email']) && !empty($_POST['password'])){

                $user = new User;
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
                    $this->render('login', [
                        'title' => 'Connexion',
                        'first_title' => 'connexion',
                        'name' => 'login',
                        'error' => $error
                    ]);
                }
            } else {
                $msg_error = "*champs obligatoire";
                $this->render('login', [
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

    public function updateProfil()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            if (empty($_POST['username']) && empty($_POST['email']) && !empty($_POST['password'])){

                $user = new User;
                $user->setUsername($_SESSION['name']);
                $user->setPassword($_POST['password']);

                $username = $user->getUsername();
                $password= $user->getPassword();

                $userManager = new UserManager;
                $userManager->updatePassword($password, $username);

            } elseif (empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])){

                $user = new User;
                $user->setUsername($_SESSION['name']);
                $user->setEmail($_POST['email']);
                $user->setPassword($_POST['password']);

                $username = $user->getUsername();
                $email = $user->getEmail();
                $password = $user->getPassword();

                $userManager = new UserManager;
                $userManager->updatePasswordAndEmail($email, $password, $username);

            } elseif (!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])){

                $user = new User;
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