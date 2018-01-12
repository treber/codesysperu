/* Foco en el primer campo del formulario*/

if (!("autofocus" in document.createElement("input"))) {
	document.getElementById("nombre").focus();
};

function validarFormulario(){


	var expRegNombre 	= 	/^[a-záéíóúñ\s]+$/i;
	var expRegApellido 	= 	/^[a-záéíóúñ\s]+$/i;
	var expRegEmail 	=	/^[a-zA-Z0-9\._-]+@[a-zA-Z0-9-]{2,}[.][a-zA-Z]{2,4}$/;
	var expRegTelefono 	=	/^[0-9]{7,9}$/;
	
	var nombre 		= document.getElementById('nombre');
	var apellido 	= document.getElementById('apellidos');
	var email 		= document.getElementById('email');
	var telefono 	= document.getElementById('movil');
	var formulario 	= document.getElementById('formupdate');
	var mensaje		= document.getElementById('mensaje');


	if (!nombre.value) { //si el campo nombre está vacío que envíe una alerta
		alert("Escriba su nombre por favor.");
		nombre.focus();
		return false;
	}else if (!expRegNombre.exec(nombre.value)) { // la funcion exec() devuelve el texto que coincida sino devuelve null
		alert("El campo nombre solo acepta letras a-zA-Z");
		nombre.focus(); // lleva el puntero del mouse a la caja de texto
		return false;

	}else if (!apellido.value) {
		alert("Escriba sus apellidos por favor.");
		apellido.focus();
		return false;
	}else if(!expRegApellido.exec(apellido.value)){
		alert("El campo apellidos solo acepta letras a-zA-Z");
		apellido.focus();
		return false;

	}else if (!email.value) {		
		alert("Escriba su email por favor.");
		email.focus();
		return false;
	}else if(!expRegEmail.exec(email.value)){
		alert("Ingrese un email válido por favor.");
		email.focus();
		return false;

	}else if (!telefono.value) {		
		alert("Escriba su teléfono por favor.");
		telefono.focus();
		return false;
	}else if(!expRegTelefono.exec(telefono.value)){
		alert("El campo teléfono acepta de 7 a 9 dígitos.");
		telefono.focus();
		return false;

	}else{
		document.formulario.submit();
	}
}

function maxchar(max)
{
	var maxChar = document.getElementById("mensaje");
	if(maxChar.value.length >= max){
		return false;
	}else {
		return true;
	}
}
	window.onload = function()
	{
		var botonEnviar = document.getElementById("actualizar");
		botonEnviar.onclick = validarFormulario;
	}





