<?php
require 'environment.php';

if(ENVIRONMENT == 'development'){
	define("SITE", [
		"name" => "Estructure mvc respecting an PSRs",
		"desc" => "Default of development Web",
		"base" => "http://localhost/mvc_structure/",
		"locale" => "pt-BR"
	]);
} else{
	define("SITE", [
		"name" => "Name of site",
		"desc" => "Descriprition of site",
		"base" => "http://www.meusite.com.br",
		"locale" => "pt-BR"
	]);
}
