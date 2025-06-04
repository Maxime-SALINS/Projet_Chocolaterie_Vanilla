<?php 

namespace Utils\Routing;

class Route {

    private ?string $path = null;
    private $callable;
    private array $matches = [];
    private array $params = [];

    public function __construct($path, $callable)
    {
        $this->path = trim($path, '/');
        $this->callable = $callable;
    }

    public function with($params, $regex): Route
    {
        $this->params[$params] = str_replace('(', '(?:', $regex);
        return $this;
    }

    public function match(string $url) 
    {
        $url = trim($url, '/');
        $path = preg_replace_callback('#:([\w]+)#', [$this, 'paramMatch'], $this->path);
        $regex = "#^$path$#i";
        
        if(!preg_match($regex, $url, $matches)){
            return false;
        }

        array_shift($matches);
        
        $i = 0;
        foreach ($this->params as $key => $regex) {
            $this->matches[$key] = $matches[$i++];
        }

        return true;
    }
    
    public function call()
    {
        if (is_string($this->callable)) {
            $parts = explode('#', $this->callable);
            $controller = "App\\controller\\" . $parts[0] . "Controller";
            $method = $parts[1];
            return call_user_func_array([new $controller(), $method], array_values($this->matches)); // ✅ ICI
        } else {
            return call_user_func_array($this->callable, array_values($this->matches)); // aussi ici si besoin
        }
    }

    public function getUrl($params)
    {

        $path = $this->path;

        foreach($params as $k => $v){

            $path = str_replace(":$k", $v, $path);

        }

        return $path;
    }

    private function paramMatch($match): string
    {

        if(isset($this->params[$match[1]])){

            return '(' . $this->params[$match[1]] . ')';
        }

        return '([^/]+)';

    }

}
