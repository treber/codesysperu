<?php 
/*
* Esta clase se va a encargar de llamar a las vistas.
* compact(): Es lo contrario a extract(), Crea un array que contiene variables y sus valores. 
* find(): Es una función del ORM Illuminate que busca un solo dato.
* render(): El método render es responsable de convertir una excepción dada en una respuesta HTTP que se debe devolver al explorador. De forma predeterminada, la excepción se pasa a la clase base que genera una respuesta para usted. Sin embargo, puede revisar el tipo de excepción o devolver su propia respuesta personalizada:
*/

namespace App\Controllers;

use App\Libraries\View;
use App\Models\Project;

class ProjectController{
	// action: "projects" : Muestra todos los proyectos
	public function projects()
	{
		$projects = Project::all();

		View::render('projects/index', compact('projects'));
	}
	// action: "project" : Muestra un proyecto obtenido de acuerdo a su id
	public function project()
	{

		$id = $_GET['id'] ?? '';
		$project = Project::find($id);
		/*
		* Método where() de laravel
		* Primer argumento: nombre de la columna de la bd
		* Segundo argumento: operador soportado.
		* Tercer argumento: valor a evaluar en la columna.
		*/

		$rest = Project::where('id', '<>', "{$id}")->get();

		# Si no están vacias las propiedades $project y $rest
		if(!empty($project) and !empty($rest))
		{
			// Si el proyecto existe, entonces se la pasamos a la Vista
			View::render("projects/project{$id}", compact('project', 'rest'));

		}else {
			$this->projects();
		}
	}
}

?>