<?php
declare(strict_types=1);

namespace Framework;

Class App{
    private Router $router;

    function __construct(){
        $this->router = new Router(); 
    }
    public function run(){
        echo "Application is Running...!";
    }
    public function add(string $path){
        $this->router->add('GET',$path);

    }
}

