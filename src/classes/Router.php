<?php

class Router
{
    protected $routes = [];

    public function __construct() {
        
    }
    public function get($uri, $controller)
    {
        $this->routes[] = [
        "uri" => $uri,
        "controller" => $controller,
        "method" => "GET",
        ];
    }
    public function post()
    {
        $this->routes[] = [
            "uri" => $uri,
            "controller" => $controller,
            "method" => "POST",
        ];
    }
    public function patch()
    {
        $this->routes[] = [
            "uri" => $uri,
            "controller" => $controller,
            "method" => "PATCH",
        ];
    }
    public function put()
    {
        $this->routes[] = [
            "uri" => $uri,
            "controller" => $controller,
            "method" => "PUT",
        ];
    }
}
