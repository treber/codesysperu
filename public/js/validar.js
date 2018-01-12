
/*-------------------------------------*/
function validateForm(){


    var expRegNombre    =   /^[a-záéíóúñ\s]+$/i;
    var expRegApellido  =   /^[a-záéíóúñ\s]+$/i;
    var expRegEmail     =   /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
    var expRegTelefono  =   /^[0-9\s]{7,9}$/;
    var expRegComentario=   /^[a-záéíóúñ0-9\.\,\_\+\=\-\;\s]+$/i;
    var expRegCaptcha   =   /^[a-z0-9\s]+$/i;
    
    var nombre      = document.getElementById('name');
    var apellido    = document.getElementById('last_name');
    var email       = document.getElementById('email');
    var telefono    = document.getElementById('telephone');
    var comentario  = document.getElementById('comment');
    var captcha     = document.getElementById('captcha');
    var formulario  = document.getElementById('form');
    
    var $form  = $('#form');
    var $error = $form.find('.error');
    
/*----------------------- -----------------------*/
    if (!nombre.value) {
        $error.eq(0).html('Ingrese su nombre por favor.').show();
        $('#name').on('click keypress', function(){
            $error.hide()});
        nombre.focus();
        return false;
        }else if (!expRegNombre.exec(nombre.value)) {
            $error.eq(0).html('El campo nombre solo acepta letras.').show();
            $('#name').on('click keypress', function(){
                $error.hide()});
            nombre.focus();
            return false;

        }else if (!apellido.value) {
            $error.eq(1).html('Ingrese sus apellidos por favor.').show();
            $('#last_name').on('click keypress', function(){
                $error.hide()});
            apellido.focus();
            return false;
        }else if(!expRegApellido.exec(apellido.value)){
            $error.eq(1).html('El campo apellidos solo acepta letras.').show();
            $('#last_name').on('click keypress', function(){
                $error.hide()});
            apellido.focus();
            return false;

        }else if (!email.value) {       
            $error.eq(2).html('Ingrese su email por favor.').show();
            $('#email').on('click keypress', function(){
                $error.hide()});
            email.focus();
            return false;
        }else if(!expRegEmail.exec(email.value)){
            $error.eq(2).html('Ingrese un email válido.').show();
            $('#email').on('click keypress', function(){
                $error.hide()});
            email.focus();
            return false;    
        /*
        }else if (!telefono.value) {        
            $error.eq(3).html('Ingrese un teléfono por favor.').show();
            $('#telephone').on('click keypress', function(){
                $error.hide()});
            telefono.focus();
            return false;
        */
        }else if(telefono.value){
            if(!expRegTelefono.exec(telefono.value)){
                $error.eq(3).html('Solo se acepta de 7 a 9 digitos.').show();
                $('#telephone').on('click keypress', function(){
                    $error.hide()});
                telefono.focus();
                return false;
            }

        }else if (!comentario.value) {      
            $error.eq(4).html('Ingrese su comentario por favor.').show();
            $('#comment').on('click keypress', function(){
                $error.hide()});
            comentario.focus();
            return false;
        }else if(!expRegComentario.exec(comentario.value)){
            $error.eq(4).html('Algunos carácteres no son válidos.').show();
            $('#comment').on('click keypress', function(){
                $error.hide()});
            comentario.focus();
            return false;
        
        }else if(captcha.value){
            if(!expRegCaptcha.exec(captcha.value)){
                $error.eq(5).html().show();
                $('#captcha').on('click keypress', function(){
                    $error.hide()});
                captcha.focus();
                return false;
            }

        }else {
            
            document.formulario.submit();
        }
}


    function maxchar(max)
    {
        var maxChar = document.getElementById("comment");
        if(maxChar.value.length >= max){
            return false;
        }else {
            return true;
        }
    }

    window.onload = function()
    {
        var botonEnviar = document.getElementById('send');
        botonEnviar.onclick = validateForm;
    }

/*
* .find(): Obtiene los descendientes de cada elemento en el conjunto actual de elementos
* coincidentes, filtrador por un selector, un objeto jQuery o un elemento.
*/



