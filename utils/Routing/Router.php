<?php

namespace Utils\Routing;

class Router {

    private string $url;
    private array $routes = [];
    private array $namedRoutes = [];

    public function __construct($url)
    {
        $url= parse_url($url, PHP_URL_PATH);
        
        $this->url = $url;
    }

    public function get($path, $callable, $namedRoutes= null) {

        return $this->add($path, $callable, $namedRoutes, 'GET');
    }

    public function post($path, $callable, $namedRoutes= null) {

        return $this->add($path, $callable, $namedRoutes, 'POST');
    }

    public function run()
    {

        
        if (!isset($this->routes[$_SERVER['REQUEST_METHOD']])){
            throw new RouterException('REQUEST_METHOD does not exist');
        }

        foreach ($this->routes[$_SERVER['REQUEST_METHOD']] as $route)
        {
            if($route->match($this->url)){

                return $route->call();

            }
        }

        throw new RouterException('No matching routes');
    }

    private function add($path, $callable, $name, $method): Route {

        $route = new Route($path, $callable);
        $this->routes[$method][] = $route;

        if(is_string($callable) && $name === null){

            $name = $callable;
        }

        if ($name){

            $this->namedRoutes[$name] = $route;

        }

        return $route;

    }

    public function url(string $name, array $params = [] ){

        if(!isset($this->namedRoutes[$name])) {

            throw new RouterException('No route matches this name');
        }

        return $this->namedRoutes[$name]->getUrl($params);

    }
}