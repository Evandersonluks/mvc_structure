<?php
namespace Source\Core;

class Controller{

	public function loadView($view, $data){
		extract($data);
		require 'views/'.$view.'.php';
	}
	
	public function loadTemplate($view, $data){
		require 'views/template.php';
	}

	public function loadViewInTemplate($view, $data){
		extract($data);
		require 'views/'.$view.'.php';
	}

}
