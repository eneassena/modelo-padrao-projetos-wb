<?php 


namespace Source\Admin\Controller;

use League\Plates\Engine;

class Welcome {
    public $view = null;
    public $data = [];

    public function __construct()
    {
        $this->view = new Engine(PATH_TEMPLATE, 'php');
    }
 
    public function home(){
        $this->data['title'] = "Pastelaria - Welcome";
        echo $this->view->render("admin/welcome.template", $this->data);
    }
}