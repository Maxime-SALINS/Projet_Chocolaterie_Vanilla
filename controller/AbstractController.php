<?php
namespace App\controller;

class AbstractController{
    static public function render(string $path, array $data=[]):void 
    {
        extract($data);
        ob_start();
        require_once 'views/Pages/'.$path.'.html.php';
        $content = ob_get_clean();
        require_once 'views/Pages/base.html.php';
    }

    public function redirect(string $path):void {
        header('Location:'. $path);
    }

    public function connexionVerification():bool {
        return !empty($_SESSION['connecte']);
    }
}