<?php
namespace Source\Core;

use Source\Database\Connect;

class Model{

	protected $database;

	public function __construct(){
		$this->database = Connect::getInstance();
	}

}
