<?php 

/*
* Este archivo recibe las rutas que va a recibir del navegador.
* Los id del arreglo ROUTES son: servicios, proyectos, proyecto y contacto
*/

define('ROUTES', [
		'' 				=> ['controller' => 'Page', 	'action' => 'index'],
		'servicios' 	=> ['controller' => 'Page', 	'action' => 'services'],
		'proyectos'		=> ['controller' => 'Project', 	'action' => 'projects'],
		'proyecto'		=> ['controller' => 'Project', 	'action' => 'project'],
		'contacto' 		=> ['controller' => 'Customer', 'action' => 'email'],
	]);

?>
