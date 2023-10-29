<?php
require __DIR__ . '/../vendor/autoload.php';

use Slim\Factory\AppFactory;
use Src\Controllers\HomeController;

$app = AppFactory::create();
$app->setBasePath('/php-web');

$app->get('/', [HomeController::class, 'homePage']);
$app->get('/about', [HomeController::class, 'aboutPage']);
$app->get('/ver-orders', [HomeController::class, 'verOrderPage']);



// Parse json, form data and xml
$app->addBodyParsingMiddleware();

$app->addRoutingMiddleware();
$app->addErrorMiddleware(true, true, true);

$app->options('/{routes:.+}', function ($request, $response, $args) {
    return $response;
});

// http://127.0.0.1/users
// cors
$app->add(function ($request, $handler) {
    $response = $handler->handle($request);
    return $response
            ->withHeader('Access-Control-Allow-Origin', '127.0.0.1:3000')
            ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
            ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');
});
 
$app->run();