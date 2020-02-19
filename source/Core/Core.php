<?php
namespace Source\Core;

class Core{
	public function start(){

		$url = '/';

		if(isset($_GET['url'])){
			$url .= $_GET['url'];
		}

		$parameters = array();

		if(!empty($url) && $url != '/'){

			$url = explode('/', $url);
			array_shift($url);
			$defaultController = $url[0].'Controller';
			array_shift($url);

			if(isset($url[0]) && !empty($url[0])){
				$defaultAction = $url[0];
				array_shift($url);
			}else{
				$defaultAction = 'index';
			}

			if(count($url)>0){
				$parameters = $url;
			}

		}else{
			$defaultController = 'homeController';
			$defaultAction = 'index';
		}

		$prefix = 'Source\Controllers\\';

		if(!file_exists('Source/Controllers/'.$defaultController.'.php') ||
			!method_exists($prefix.$defaultController, $defaultAction)){
			$defaultController = 'notfoundController';
			$defaultAction = 'index';
		}

		$controller = $prefix.$defaultController;
		$newController = new $controller();
		call_user_func_array(array($newController, $defaultAction), $parameters);
		
	}

}
