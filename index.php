<?php 

require __DIR__."/vendor/autoload.php";

use CoffeeCode\Router\Router;



$route = new Router(ROOT);

$route->namespace("Source\Comun\Controller");
 
/**
 * Controller: CardapioController
 * Metodo: home
 */
$route->group(null);
$route->get("/", "HomeController:home");
// $route->get("/{message}", "Home:home", "name.home");
// $route->get("/cadastro/store/message", "Home:obtem_params", "name.obtem_params");
 


$route->dispatch();

if($route->error()){
    var_dump($route->error());
}
