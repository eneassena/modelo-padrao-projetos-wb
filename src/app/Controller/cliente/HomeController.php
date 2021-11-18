<?php 


namespace Source\App\Controller\Cliente;

use League\Plates\Engine;

class HomeController {
    public $view = null;
    public $data = [];

    public function __construct()
    {
        // $this->view = new Engine(__DIR__."/../../../../templates", 'php');
        // $this->view = new Engine("C:/xampp/htdocs/website_pastelaria/templates", 'php');
        $this->view = new Engine(PATH_TEMPLATE, 'php');
    }
 
    public function home(){
        $this->data['title'] = "Pastelaria - Home";
        echo $this->view->render("site/home", $this->data);
    }
}