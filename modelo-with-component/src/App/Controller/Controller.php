<?php 


namespace Web\App\Controller;

use League\Plates\Engine;

class Controller {
    public $view = null;
    public $data = [];

    public function __construct()
    {
        $this->data['title'] = "Template Page";
        $this->view = new Engine(PATH_TEMPLATE, 'php');
    }
    public function home (){}
}