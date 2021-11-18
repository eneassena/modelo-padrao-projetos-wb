<?php 


namespace Source\App\Controller\Cliente;

use League\Plates\Engine;

class CardapioController {
    public $view = null;
    public $data = [];

    public function __construct()
    {
        $this->view = new Engine(PATH_TEMPLATE, 'php');
    }
 
    public function home(){
        $this->data['title'] = "Pastelaria - Cardápio";
        echo $this->view->render("site/cardapio", $this->data);
    }
}