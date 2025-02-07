<?php
namespace App\service;

use App\model\NewsletterModel;
use App\manager\NewsletterManager;

class NewsletterService {

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

    public function findAll():array
    {
        $tableSql = new NewsletterManager;
        $table_subscriber = $tableSql->findAll();

        return $table_subscriber;
    }

    public function deleteSubscriber(string $email): bool
    {

        $findSubscriber = new NewsletterModel;
        $findSubscriber->setUserEmail($email);
        $subEmail = $findSubscriber->getUserEmail();

        $newSQL = new NewsletterManager;
        $newSQL->delete($subEmail);

        return true;
    }
}