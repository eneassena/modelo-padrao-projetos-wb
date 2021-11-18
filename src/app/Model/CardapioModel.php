<?php 


namespace Source\App\Model;

use CoffeeCode\DataLayer\DataLayer;



class CardapioModel extends DataLayer {

	public function __construct(){
		parent::__construct("cardapio_pastel", ['saborDoPastel', 'ingrediente', 'valorUnitario'], "idCardapioPastel");
	}
}