<?php

namespace App\controller;

use App\model\PageModel;
use App\manager\PageManager;
use App\controller\NewsletterController;
use Utils\UtilsController\AbstractController;

class StoryController extends AbstractController {

    public function index(){
        
        $storyPage = new PageManager;
        $elements = $storyPage->findElements('Histoire');
        $newPage = new PageModel($elements);
        
        $newsQuery = new NewsletterController;
        $newsletterStatus = $newsQuery->newsletterSubscription();

        $this->render('/story/story.html.php', array_merge([
            'newPage' => $newPage,
            'title_default' => 'Page | Chocolaterie',
            'name' => 'story'
        ], $newsletterStatus));
    }
}