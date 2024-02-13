<?php

namespace Src\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class HomeController extends Controller
{
    // protected $views = null;

    public function __construct()
    {
        parent::__construct();
    }

    public function homePage(Request $request, Response $response, $args)
    {
        $pageContent = $this->views->render('home');

        $response->getBody()->write($pageContent);

        return $response;
    }

    public function aboutPage(Request $request, Response $response, $args)
    {
        $pageContent = $this->views->render('about');

        $response->getBody()->write($pageContent);

        return $response;
    }

    public function verOrderPage(Request $request, Response $response, $args)
    {
        $pageContent = $this->views->render('verOrderPage');

        $response->getBody()->write($pageContent);

        return $response;
    }


    public function getUsers(Request $request, Response $response, $args)
    {
        $data =  [];

        $responseDb = [];
        foreach ($responseDb as $key => $value) {
            array_push($data, $value->data());
        }

        $payload = json_encode($data, JSON_PRETTY_PRINT);

        $response->getBody()->write($payload);

        return $response->withHeader('Content-Type', 'application/json');
    }
}