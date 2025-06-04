<?php
namespace Utils\UtilsController;

class AbstractController{
    static public function render(string $path, array $data=[], string $path_base = "base.html.php"):void 
    {
        extract($data);
        ob_start();
        require_once 'views/'.$path;
        $content = ob_get_clean();
        require_once 'views/'.$path_base;
    }

    public function redirect(string $path):void {
        header('Location:'. $path);
    }

    public function connexionVerification():bool {
        return !empty($_SESSION['connecte']);
    }
}