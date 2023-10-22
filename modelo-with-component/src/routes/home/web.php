<?php 

$app->namespace("Web\App\Controller")->group(null);



/**
 * Controller: HomeController
 * Metodo: home
 */ 
$app->get('/', 'HomeController:home');


/**
 * Controller: HomeController
 * Metodo: error
 */ 
$app->get('/error/{errcode}', 'HomeController:error');

