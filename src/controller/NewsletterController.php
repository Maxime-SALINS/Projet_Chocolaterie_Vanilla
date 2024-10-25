<?php
namespace App\controller;

use App\model\NewsletterModel;
use App\manager\NewsletterManager;
use Utils\UtilsController\AbstractController;

class NewsletterController extends AbstractController{

    public function viewAll():array
    {
        $tableSql = new NewsletterManager;
        $table_subscriber = $tableSql->findAll();

        return $table_subscriber;
    }

    public function newsletterSubscription()
    {
        $msg_success = $msg_error = $error = null;

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            if(!empty($_POST['useremail_news'])){

                $newSubscriber = new NewsletterModel;
                $newSubscriber->setUserEmail($_POST['useremail_news']);
                $subEmail = $newSubscriber->getUserEmail();

                $newSQL = new NewsletterManager;

                if($newSQL->findEmail($subEmail)) {
                    $newSQL->uplaodSubscriber($subEmail);
                    $msg_success = "Vous êtes abonné à la Newsletter";
                } else {
                    $msg_error = "Vous avez déjà souscrit un abonnement";
                }
            } else {
                $error = "Vous devez remplir ce champ";
            }
        }

        return [
            'msg_success' => $msg_success,
            'msg_error' => $msg_error,
            'error' => $error,
        ];
    }
    
    public function deleteSubscriber(string $email) {
        
        $newSubscriber = new NewsletterModel;
        $newSubscriber->setUserEmail($email);
        $subEmail = $newSubscriber->getUserEmail();

        $newSQL = new NewsletterManager;
        $newSQL->delete($subEmail);

        $this->redirect('/dashboard/newsletter');
    }
}