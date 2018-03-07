$(document).ready(function () {
    
    "use strict";
    
    $('#formEditFamily').submit(validarFormulario);
    
    /*crear spans*/
    $('#formEditFamily input').each(function () {

        if ($(this).attr('type') !== 'submit' && $(this).attr('type') !== 'reset') {
            var nuevoSpan = $('<span/>', {
                'id': $(this).attr('id') + 'Error'
            })
            $(this).after(nuevoSpan);
        }
    });
    
    $('#family').change(function() {
        validarFamily($(this));
    });
    

    function getSpanForCampo(campo) {
        
        return $('#' + campo.attr('id') + 'Error');
    }


    function validarFormulario(evento) {
        var valFamily = validarFamily($('#family'));
        
        if ( !valFamily ) {
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
    function validarFamily(campo,numDigitos) {
        var span = getSpanForCampo(campo);
        
        var valLongitud = validarLongitudMin(campo, 4);
        if(valLongitud===true){
            var valLongitud = validarLongitudMax(campo, 100);
            //console.log(valLongitud);
            if (valLongitud) {
                span.text('');
                return true;
            }
        }
    }

});
