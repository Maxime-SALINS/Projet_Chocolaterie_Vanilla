<?php

class PageControllers {
    private $path;

    public function __construct(string $path)
    {
        $this->setPath($path);
    }

    public function setPath(string $path)
    {
        $this->path = $path;
    }

    public function getPath():string
    {
        return $this->path;
    }

    public function render(array $data,string $route_base = 'views/Pages/base.html.php'):void 
    {
        extract($data);
        ob_start();
        require_once 'views/Components/header.php';
        require_once 'views/Pages/'.$this->getPath().'.html.php';
        require_once 'views/Components/footer.php';
        $content = ob_get_clean();
        require_once $route_base;
    }

}