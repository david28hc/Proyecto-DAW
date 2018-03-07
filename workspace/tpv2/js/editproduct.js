$(document).ready(function () {

    "use strict";
    $('#formEditProduct').submit(validarFormulario);
    
    /*crear spans*/
    $('#formEditProduct input').each(function () {

        if ($(this).attr('type') !== 'submit' && $(this).attr('type') !== 'reset') {
            var nuevoSpan = $('<span/>', {
                'id': $(this).attr('id') + 'Error'
            })
            $(this).after(nuevoSpan);
        }
    });
    
    $('#producto').change(function() {
        validarProduct($(this));
    });
    
    $('#precio').change(function() {
        validarPrice($(this));
    });
    
    $('#description').change(function() {
        validarDescription($(this));
    });


    function getSpanForCampo(campo) {
        return $('#' + campo.attr('id') + 'Error');
    }


    function validarFormulario(evento) {
        //evento.preventDefault();
        var valProduct = validarProduct($('#producto'));
        var valPrice = validarPrice($('#precio'));
        var valDescription = validarDescription($('#description'));
        
        if ( !valProduct  || !valPrice || !valDescription ) {
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
    
    function validarProduct(campo,numDigitos) {
        var span = getSpanForCampo(campo);
        
        var valLongitud = validarLongitudMin(campo, 3);
        if(valLongitud===true){
            var valLongitud = validarLongitudMax(campo, 100);
            if (valLongitud) {
                span.text('');
                return true;
            }
        }
    }
    
    function validarPrice(campo,numDigitos) {
        var valPrice = jQuery.isNumeric(campo.val());
        var span = getSpanForCampo(campo);
        //console.log('entro');
            if(valPrice){
                //console.log('entro1');
                //console.log(campo.val());
                var valLongitud = validarLongitudMin(campo, 1);
                if(valLongitud){
                        //console.log('entro3');
                        var expresion = /^^(\d{1})?(\d+\.?)(\d{2})?$/;
                        //console.log(campo.val());
                        if (expresion.test(campo.val())) {
                            span.text('');
                            return true;
                            //console.log('entro4');
                        }else{
                            span.text('Son 2 decimales');
                            return false;  
                        }
                        span.text('');
                        return true;
                }else{
                    span.text('Minimo 1 numero');
                    return false;  
                }
            }else{
                span.text('Formato incorrecto o vacio');
                return false;
            }
    }
    
    function validarDescription(campo,numDigitos) {
        var span = getSpanForCampo(campo);
        
        var valLongitud = validarLongitudMin(campo, 4);
        if(valLongitud===true){
            var valLongitud = validarLongitudMax(campo, 10000);
            if (valLongitud) {
                span.text('');
                return true;
            }
        }
    }

});
