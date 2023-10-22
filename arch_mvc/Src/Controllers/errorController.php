<?php 

class errorController extends Controller {

    public function error() {
        $this->dados = ['status' => 404 ];
        $this->loadTemplate('error', $this->dados);
    }
}