<?php
namespace Source\Controllers;

use Source\Core\Controller;
use Source\Models\User;

class homeController extends Controller{

	public function index(){

		$user = new User();
		
		$data = array(
			'nome' => $user->getUser(),
		);
		
		$this->loadTemplate('home', $data);
	}

}
