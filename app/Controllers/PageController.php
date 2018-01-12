<?php 

namespace App\Controllers;
use App\Libraries\View;

class PageController{

	public function index()
	{
		View::render('pages/index');
	}

	public function services()
	{
		View::render('pages/services');
	}
	
}


?>