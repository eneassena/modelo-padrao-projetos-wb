<?php 


namespace Source\App\Controller\Cliente;

use League\Plates\Engine;
use Source\App\Model\BebidaModel;
use Source\App\Model\CardapioModel;
use Source\App\Model\LocalizacaoModel;

class PedidoController {
    public $view = null;
    public $data = [];

    public function __construct()
    {
        $this->view = new Engine(PATH_TEMPLATE, 'php');
        $this->data['cardapios'] = (new CardapioModel)->find()->fetch(true);
        $this->data['bebidas'] = (new BebidaModel)->find()->fetch(true);
        $this->data['localizacao'] = (new LocalizacaoModel)->find()->fetch(true);
    }
 
    public function home(){
        $this->data['title'] = "Pastelaria - Sobre";
        echo $this->view->render("site/pedido", $this->data);
    }
}