<?php 


namespace Source\App\Controller\Cliente;

use League\Plates\Engine;

class VerPedidoController {
    public $view = null;
    public $data = [];

    public function __construct()
    {
        $this->view = new Engine(PATH_TEMPLATE, 'php');
    }
 
    public function home(){
        $this->data['title'] = "Pastelaria - Sobre";
        echo $this->view->render("site/ver.pedido", $this->data);
    }
}