$(document).ready(function () {

    "use strict";
    $('#formLogin').submit(validarFormulario);
    //$('#formLogin').on('reset' , function(evento) {
    //    
    //    if(!confirm("Estás seguro de que quieres reiniciar el formulario?")) {
    //        evento.preventDefault();
    //    }
    //})
    
    /*crear spans*/
    $('#formLogin input').each(function () {

        if ($(this).attr('type') !== 'submit' && $(this).attr('type') !== 'reset') {
            var nuevoSpan = $('<span/>', {
                'id': $(this).attr('id') + 'Error'
            })
            $(this).after(nuevoSpan);
        }
    });
    
    
    $('#email').change(function() {
        validarCorreo($(this));
    });
    
    $('#password').change(function() {
        validarClave($(this));
    });


    function getSpanForCampo(campo) {
        
        return $('#' + campo.attr('id') + 'Error');
    }


    function validarFormulario(evento) {
        //evento.preventDefault();
        var valEmail = validarCorreo($('#email'));
        var valClave = validarClave($('#password') );
        if ( !valEmail || !valClave ) {
            evento.preventDefault();
        }
    }


    function validarLongitudMin(campo, min) {
        var span = getSpanForCampo(campo);
        var longitud = campo.val().length;
        if (longitud >= min) {
            span.text('');
            return true;
        }
        
        else {
            span.text('Debe contener al menos ' + min + ' caracteres');
            return false;
        }
    }
    
    function validarLongitudMax(campo, max) {
        var span = getSpanForCampo(campo);
        var longitud = campo.val().length;
        if (longitud <= max) {
            span.text('');
            return true;
        }
        
        else {
            span.text('Debe contener menos de ' + max + ' caracteres');
            return false;
        }
    }
    
    function validarLongitud(campo, longitud) {
        var span = getSpanForCampo(campo);
        var longitudCampo = campo.val().length;
        if (longitudCampo >= longitud) {
            span.text('');
            return true;
        }
        
        else {
            span.text('El campo debe contener 4 caracteres');
            return false;
        }
    }
    
    /* FORM */

    function validarCorreo(campo) {        
        var expresion = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
        var span = getSpanForCampo(campo);
        if (expresion.test(campo.val())) {
            span.text('');
            return true;
        }

        span.text('Formato Incorrecto');
        return false;
    }
    
    function validarClave(campo, campoRepetir) {        
        var longitud = validarLongitudMin(campo , 4);        
        return longitud && validarRepetirClave(campoRepetir, campo);        
    }
});
