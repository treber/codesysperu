<?php 

require_once '../config/app.php';
#require_once 'config/app.php';

use App\Libraries\Route;

// Tomando el url del navegador.
$url = $_GET['url'] ?? '';
// ROUTES: constante que proviene del archivo routes.php
$route = ROUTES[$url] ?? false;

if ($route) {
	$controller = $route['controller'];
	$action = $route['action'];

	Route::any($controller, $action);

} else{
	header('HTTP/1.0 404 Not Found');
	die('Página no encontrada');
}


?>