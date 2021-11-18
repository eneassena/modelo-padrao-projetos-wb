<?php 


namespace Source\App\Model;

use CoffeeCode\DataLayer\DataLayer;


class LocalizacaoModel extends DataLayer {

	public function __construct(){
		parent::__construct("localizacao", ['nomeDoBairro'], "idLocalizacao", false);
	}

}