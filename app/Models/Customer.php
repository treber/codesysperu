<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model{
	
	protected $table = 'customers';
	/*
	* Relacion de tres o más tablas utilizando una tabla pivot
	* belongsToMany: Relación de muchos a muchos
	* Crear la relación con el modelo Project
	
	public function projects()
	{
		return $this->belongsToMany('App\Models\Project');
	}*/
}


?>