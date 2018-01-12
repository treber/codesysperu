<?php 
namespace App\Libraries;
use PHPMailer;

class Mail extends PHPMailer
{
	public function __construct($exceptions = false){
		parent::__construct($exceptions);

		$this->isSMTP();                           
		$this->Host 		= CDP_EMAIL['Host'];
		$this->SMTPAuth 	= CDP_EMAIL['SMTPAuth'];  
		$this->Username 	= CDP_EMAIL['Username'];
		$this->Password 	= CDP_EMAIL['Password'];                 
		$this->SMTPSecure 	= CDP_EMAIL['SMTPSecure'];
		$this->Port 		= CDP_EMAIL['Port'];

		$this->SMTPOptions = array(
				'ssl'=> array(
				'verify_peer' 		=> false,
				'verify_peer_name' 	=> false,
				'allow_self_signed' => true
				)
			);
	}
}


?>