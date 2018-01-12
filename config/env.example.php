<?php 

define('DATABASE', [
	'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'my-database',
    'username'  => 'my-user',
    'password'  => 'my-password',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',

	]);

define('P15_EMAIL', [
	'Host' 			=> '',
	'SMTPAuth' 		=> true,                               
	'Username' 		=> '',                 
	'Password' 		=> '',                           
	'SMTPSecure' 	=> 'tls',                            
	'Port' 			=> 587,
	'setFrom' 		=> '',         
	'addAddress' 	=> ''
	]);

define('COPYRIGHT', '&copy ' . date('Y', time()). ' Derechos reservados' . ' - ' . 'Codesysperu' );

?>