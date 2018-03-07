$(document).ready(function () {

    "use strict";
    $('#formInsertProduct').submit(validarFormulario);
    $('#formInsertProduct').on('reset' , function(evento) {
        
        if(!confirm("Estás seguro de que quieres reiniciar el formulario?")) {
            evento.preventDefault();
        }
    })
    
    /*crear spans*/
    $('#formInsertProduct input').each(function () {

        if ($(this).attr('type') !== 'submit' && $(this).attr('type') !== 'reset') {
            var nuevoSpan = $('<span/>', {
                'id': $(this).attr('id') + 'Error'
            })
            $(this).after(nuevoSpan);
        }
    });
    
    
    
    $('#product').change(function() {
        validarProduct($(this));
    });
    
    $('#price').change(function() {
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
        var valProduct = validarProduct($('#product'));
        var valPrice = validarPrice($('#price'));
        var valDescription = validarDescription($('#description'));
        
        if ( !valProduct || !valPrice  || !valDescription ) {
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
    
    function validarPrice(campo,numDigitos) {
        var valPrice = jQuery.isNumeric(campo.val());
        var span = getSpanForCampo(campo);
            if(valPrice){
                var valLongitud = validarLongitudMin(campo, 1);
                if(valLongitud){
                        var expresion = /^^(\d{1})?(\d+\.?)(\d{2})?$/;
                        if (expresion.test(campo.val())) {
                            span.text('');
                            return true;
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
            var valLongitud = validarLongitudMax(campo, 100000);
            if (valLongitud) {
                span.text('');
                return true;
            }
        }
    }
    
});
