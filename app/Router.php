<?php
/**
 * Router
 *
 * Компонент принимает массив с экшеноми и с путями файлов
 *
 *
 **/
namespace App;

class Router
{
/**
 * @var array
 **/
	public static function run($routers){

		$rout = $_SERVER['REQUEST_URI'];


		if (array_key_exists($rout, $routers)) {
			include $routers[$rout];
		} else {
			var_dump(404);
		}
	}

}
