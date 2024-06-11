<?php
namespace App\controller;

use App\model\NewsletterModel;
use App\manager\NewsletterManager;

class NewsletterController extends AbstractController{

    public function viewAll():array
    {
        $tableSql = new NewsletterManager;
        $table_subscriber = $tableSql->findAll();

        return $table_subscriber;
    }

    public function newSubscriber()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){

            if(!empty($_POST['useremail_news'])){

                $newSubscriber = new NewsletterModel;
                $newSubscriber->setUserEmail($_POST['useremail_news']);
                $subEmail = $newSubscriber->getUserEmail();

                $newSQL = new NewsletterManager;

                if($newSQL->findEmail($subEmail)) {
                    $newSQL->uplaodSubscriber($subEmail);
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        }
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