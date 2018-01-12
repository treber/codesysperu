<?php 
/*
* Esta clase se va a encargar de llamar a las vistas.
* compact(): Es lo contrario a extract(), Crea un array que contiene variables y sus valores.
* $_SERVER[]: Es un array que contiene información, tales como cabeceras, rutas y ubicaciones
* de script. Las entradas de este array son creadas por el servidor web.
* 'REQUEST_METHOD': Método de petición empleado para acceder a la página, es decir 'GET', *'HEAD', 'POST', 'PUT'.
* nl2br: Devuelve el parámetro string con un <br /> o <br> insertado antes de cada nueva línea. * (\r\n, \n\r, \n y \r).
* $_SESSION[]: Es una array asociativo que contiene variables de sesión disponibles para el script actual. 
*/

namespace App\Controllers;

use App\Libraries\Mail;
use App\Libraries\View;
use App\Models\Customer;
use Gregwar\Captcha\CaptchaBuilder;

class CustomerController{

	public function email()
	{
		/*--------------------Si se envian los datos por POST -------------------------*/
		if ($_SERVER['REQUEST_METHOD'] == 'POST'){
			$name 		= htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
			$last_name 	= htmlspecialchars($_POST['last_name'], ENT_QUOTES, 'UTF-8');
			$email 		= htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
			$telephone 	= htmlspecialchars($_POST['telephone'], ENT_QUOTES, 'UTF-8');
			$comment 	= htmlspecialchars($_POST['comment'], ENT_QUOTES, 'UTF-8');
			$captchaInput = trim($_POST['captcha']);
			$inputs = compact('name', 'last_name', 'email', 'telephone', 'comment');

			/*
			** Validar datos en PHP, si javascript está desactivado en el navegador.
			*/
			if ($name == ''){
				$this->contactWithError('Ingrese su nombre por favor', $inputs);
			} elseif ($last_name == '') {
				$this->contactWithError('Ingrese sus apellidos por favor', $inputs);
			} elseif ($email == '') {
				$this->contactWithError('Ingrese su email por favor', $inputs);
			} elseif ($comment == '') {
				$this->contactWithError('Ingrese su mensaje por favor', $inputs);
			} // Compara el captcha ingresado en el formulario con el captcha de la imagen
			  elseif ($captchaInput != $_SESSION['phrase'])	{
				$this->contactWithError('El texto no coincide con la imagen', $inputs);
	            //View::render('pages/customer');
			}

			/*---------------INSERTAR REGISTRO DESDE FORMULARIO A LA BD-------------*/
				$customer = new Customer;
				$customer->name 		= $name;
				$customer->last_name 	= $last_name;
				$customer->email 		= $email;
				$customer->telephone 	= $telephone;
				$customer->comment 		= $comment;
				/*$customer->save();*/


			/*--------ENVIO DE FORMULARIO AL CORREO DESTINO------------*/
				$mail = new Mail;
				if (!$mail->validateAddress($email)) {
					$this->contactWithError('El email ingresado no es valido', $inputs);
				}
				$mail->setFrom(CDP_EMAIL['setFrom']);
				$mail->addAddress(CDP_EMAIL['addAddress']);
				$mail->isHTML(true);
				$mail->Subject = "{$name} <{$email}>";
				$mail->Body = nl2br($comment); //obligatorio llenar este campo para que me llegue a mi correo de gmail.

			/*------------------VALIDACION DE ENVIO----------------------*/

	        	if ($mail->send() or $customer->save()) {
					View::render('pages/success');
				}
				else {
					$this->contactWithError('Su mensaje no pudo ser enviado. Error: '. $mail->ErrorInfo, $inputs );
				}
		
		} else {
			/*------------------Si no se envian los datos por POST, entonces------------------*/
			$captcha = new CaptchaBuilder;
            $captcha->build(); //llama al metodo construir captcha
            $_SESSION['phrase'] = $captcha->getPhrase(); //obtiene el  contenido de la frase
            // y lo guarda en la session phrase.
            View::render('pages/customer', compact('captcha'));
            View::render('pages/customer');
		}

	}

	private function contactWithError($errorMessage, array $variables = [])
    {
        $captcha = new CaptchaBuilder;
        $captcha->build();
        $_SESSION['phrase'] = $captcha->getPhrase();
        $variables['captcha'] = $captcha;
        // El valor del error se guarda en el array $variables con el key 'errorMessage'
        $variables['errorMessage'] = $errorMessage;
        // Se muestran los datos que ya han sido ingresados, para no volver a llenar el formulario.
        View::render('pages/customer', $variables);
        exit;
    }
}

?>