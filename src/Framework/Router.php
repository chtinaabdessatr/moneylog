<?php
declare(strict_types=1);
namespace Framework;

class Router{
    private array $routes =[];
    public function add(string $method, string $path){
       $this->routes[]=[
        'path'=> $this->normalize_path($path),
        
        'method'=>strtoupper($method)  
       ];
    }

    private function normalize_path(string $path) :string {

        $path = trim($path, '/');
        $path="/{$path}/";
        
        return $path;

    }
}