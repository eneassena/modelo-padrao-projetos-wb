<?php 


namespace Source\App\Service;

use Source\App\Model\ClienteModel;

class ClienteService {
    public function cadastrar(array $data){
        $data = filter_var_array($data, FILTER_SANITIZE_STRING);
        
        if(!$data['nome'] || !$data['telefone'] ){
            var_dump('campos vasios');
        }

        $cliente = new ClienteModel();
        $cliente->nome = $data['nome'];
        $cliente->telefone = $data['telefone'];
        return $cliente->save();
    }
    public function editar(array $data){
        $cliente = (new ClienteModel())->findById($data['id']);
        $cliente->nome = $data['nome'];
        $cliente->telefone = $data['telefone'];
        return $cliente->save();
    }
    public function buscarPorCodigo($id) {
        return (new ClienteModel())->findById((int)$id);
    }
}