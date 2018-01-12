/*Valida el formulario de eliminación de un contacto*/

function validarFormulario(){


	var expRegApellido 	= 	/^[a-záéíóúñ\s]+$/i;
	
	var apellido 	= document.getElementById('apellidos');
	var formulario 	= document.getElementById('formulario');


	if (!apellido.value) {
		alert("Escriba sus apellidos por favor.");
		return false;
		apellido.focus();
	}else if(!expRegApellido.exec(apellido.value)){
		alert("El campo apellidos solo acepta letras a-zA-Z");
		return false;
		apellido.focus();
	}else{
		document.formulario.submit();
	}
}

	window.onload = function()
	{
		var botonEliminar = document.getElementById("eliminar");
		botonEliminar.onclick = validarFormulario;
	}





