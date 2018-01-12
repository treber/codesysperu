<?php

/*
* En la carpeta Models se crean las clases que se van a conectar con la bd.
* Los campos de las tablas de la bd van a hacer propiedades de las clases creadas.
*/
namespace App\Models;

# Utilizando el ORM de Illuminate
use Illuminate\Database\Eloquent\Model;

# Se extiende de la clase "Model". Esta clase le pertenece al ORM Illuminate
class Project extends Model{

	protected $table = 'projects';
	/*Agregue estas lineas que estaban en el archivo Customer.php*/
	public function projects()
	{
		return $this->belongsToMany('App\Models\Project');
	}

}



?>