<?php
namespace Source\Controllers;

use Source\Core\Controller;

class notfoundController extends Controller{

	public function index(){

		$data = array();
		$this->loadTemplate('notfound', $data);

	}
	
}
