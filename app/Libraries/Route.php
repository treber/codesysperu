<?php 
/*

* Esta clase se va a encargar de manejar los controladores para que en el
* Index se tenga que invocar una función estática.
* method_exists(): Comprueba si existe un método de una clase.
* header() es usado para enviar encabezados HTTP sin formato.
* {interpolación}: Se usa cuando concatenamos comillas simples dentro de comillas dobles o viceversa.
*/

namespace App\Libraries;

use App\Controllers\ProjectController;


class Route{

	// Se encarga de atender lo que envía el index
	public static function any($controller = null, $action = 'index')
	{
		// Si el controlador si se pasó, entonces
		if($controller){
		// Obtenemos el namespace del archivo controlador	
		$controller = "\\App\\Controllers\\{$controller}Controller";
		// Se crea la instancia de las clases controller(Customer, Page o Project).
		$controller = new $controller;
			
		} else{
			$controller = new ProjectController;
		}

		if (method_exists($controller, $action)) {
			// Retorna la ejecución o acción de ese método.
			return $controller->$action();
		} else{
			header('HTTP/1.0 404 Not Found');
			die('Página no encontrada jajaja');
		}
	}
}



?>