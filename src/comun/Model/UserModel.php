<?php 


namespace Source\Comun\Model;

use CoffeeCode\DataLayer\DataLayer;


class UserModel extends DataLayer {

	public function __construct(){
		parent::__construct("users", ['nome', 'sobrenome']);
	}

}