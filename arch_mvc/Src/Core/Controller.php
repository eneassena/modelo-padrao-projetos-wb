<?php 

class Controller{
    protected $templateName = null;
    protected $dados;

    public function __construct()  {
        $this->dados = array();
    } 
    
    public function loadTemplate(string $nameView, array $dadosModel=array()) {
        $this->dados = $dadosModel;
        require "Views/template.php";
    }

    public function loadViewNoTemplate(string $nameView, array $dadosModel=array()) {
        extract($dadosModel);
        require "Views/".$nameView.".php";
    }
}