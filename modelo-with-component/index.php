<?php


require __DIR__."/vendor/autoload.php";


use CoffeeCode\Router\Router;


$app = new Router(ROOT);

// rotas web
require_once __DIR__.'/src/routes/home/web.php';

$app->dispatch();


if ($app->error()) {
    var_dump($app->error());
    $app->redirect("/error/{$app->error()}");
}