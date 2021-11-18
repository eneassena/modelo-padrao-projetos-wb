<?php 


namespace Source\App\Model;

use CoffeeCode\DataLayer\DataLayer;

class ClienteModel extends DataLayer {
    public function __construct(){
        parent::__construct("cliente", ['nome', 'telefone'], "idCliente", false);
    }
}