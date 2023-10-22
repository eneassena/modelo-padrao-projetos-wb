<?php 

class Core {
    public function __construct() {
            $this->run();
    }

    public function run() {
        $route = $_GET['route'];
        $controller = '';
        $paramentros = [];
        $metodo = "";
        
        if(isset($route)) {
            $url = $route;
        }

        if(!empty($url)) { // possui informação após dominio: www.mysite.com/noticia
            $urlParams = explode("/",$url);
            $controller = $urlParams[0]."Controller"; // noticia
            array_shift($urlParams); // remove o valor do index 0 do array de urls
            // se o usuario mandou a função entra nesse if
            if(isset($urlParams[0]) && !empty($urlParams[0])){
                $metodo = $urlParams[0];
                array_shift($urlParams);
            } else { // mandou somente a classe
                $metodo = "index";
            }

            if(count($urlParams) > 0) {
                $paramentros = $urlParams;
            }
            
        } else {
            $controller = "homeController";
            $metodo = "index";
        }
        
        $caminho = dirname(__DIR__)."/Controllers/$controller.php";
     
        if(!file_exists($caminho) && !method_exists($controller, $metodo)) {
            $controller = "errorController";
            $metodo = "error";
        }
        
      
        $c = new $controller;        
      
        call_user_func_array(array($c, $metodo), $paramentros);
    }
}