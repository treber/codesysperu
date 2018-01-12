/*-----------------Cambio de color: border-input, textarea-----------------*/

var $change_color = $('#form');

$change_color.on('focus', '.input, .textarea, .boton',
	function(){
		var $t = $(this);
		$t.addClass('addcolor');
	});
$change_color.on('blur', '.input, .textarea, .boton',
	function(){
		var $t = $(this);
		$t.removeClass('addcolor');
	});