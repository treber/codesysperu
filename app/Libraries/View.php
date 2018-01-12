<?php 

/*
* Esta clase se va a encargar de requerir las vistas que corresponden.
* extract(): Importa variables desde un array a la tabla de símbolos actual.
* El array asociativo $variables se convierte en varias variables de php;
*/

namespace App\Libraries;

class View
{
	
	public static function render($fileView, array $variables = [])
	{
		/*$array = ['cosa1' => 'Un texto', 'cosa2' => 'otro texto'];
        extract($array);
        $cosa1 = 'Un texto';
        $cosa2 = 'otro texto';*/
        
		extract($variables);

		require_once APP_PATH . "/views/$fileView.view.php";

	}
}

?>