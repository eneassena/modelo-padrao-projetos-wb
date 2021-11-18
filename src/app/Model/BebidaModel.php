<?php 


namespace Source\App\Model;

use CoffeeCode\DataLayer\DataLayer;


class BebidaModel extends DataLayer {

	public function __construct(){
		parent::__construct("bebida", [
			'tipoDaBebida',	
			'quantidadeEmMl',
			'valorUnidade'
		], "idBebida", false);
	}

	

}