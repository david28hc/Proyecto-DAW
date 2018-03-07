$(document).ready(function () {

    "use strict";
    $('#formEditClient').submit(validarFormulario);
    //$('#formEditClient').on('reset' , function(evento) {
    //    
    //    if(!confirm("Estás seguro de que quieres reiniciar el formulario?")) {
    //        evento.preventDefault();
    //    }
    //})
    
    /*crear spans*/
    $('#formEditClient input').each(function () {

        if ($(this).attr('type') !== 'submit' && $(this).attr('type') !== 'reset') {
            var nuevoSpan = $('<span/>', {
                'id': $(this).attr('id') + 'Error'
            })
            $(this).after(nuevoSpan);
        }
    });
    
    
    
    $('#name').change(function() {
        validarName($(this));
    });
    
    $('#surname').change(function() {
        validarSurname($(this));
    });
    
    $('#tin').change(function() {
        validarTin($(this));
    });
    
    $('#address').change(function() {
        validarAddress($(this));
    });
    
    $('#location').change(function() {
        validarLocation($(this));
    });
    
    $('#postalcode').change(function(){
        validarPostalCode($(this), 5);
    });
    
    $('#province').change(function(){
        validarProvince($(this));
    });
    
    $('#email').change(function() {
        validarCorreo($(this));
    });
    
    //$('#password').change(function() {
    //    validarClave($(this), $('#verificar'));
    //});
    //
    //$('#verificar').change(function() {
    //    validarRepetirClave($(this), $('#password'));
    //});
    //
    //$('#provincia').change(function() {
    //    validarLongitud($(this),2); 
    //});
    //
    //$('#codPostal').change(function(){
    //    validarEsNumero($(this), 5);
    //});
    //        
    //$('#telefono').change(function(){
    //    validarTelefono($(this));
    //})
    //$('#fecha').change(function(){
    //   validarFecha($(this)); 
    //});
    
    


    function getSpanForCampo(campo) {
        
        return $('#' + campo.attr('id') + 'Error');
    }


    function validarFormulario(evento) {
        //evento.preventDefault();
        var valName = validarName($('#name'));
        var valSurname = validarSurname($('#surname'));
        var valTin = validarTin($('#tin'));
        var valAddress = validarAddress($('#address'));
        var valLocation = validarLocation($('#location'));
        var valPostalCode = validarPostalCode($('#postalcode'),5);
        var valProvince = validarProvince($('#province'));
        var valEmail = validarCorreo($('#email'));
        
        if ( !valName || !valSurname  || !valTin || !valAddress || !valLocation || !valPostalCode || !valProvince || !valEmail ) {
            evento.preventDefault();
        }
        
        //var valClave = validarClave($('#password') , $('verificar') );
        //var valRepetirClave = validarRepetirClave( $('#verificar'), $('#password') );
        //var valNombre = validarLongitudMin($('#nombre') , 1);
        //var valApellidos = validarLongitudMin($('#apellidos') , 1);
        //var valProvincia = validarLongitud($('#provincia') , 2);
        //var valPostal = validarEsNumero($('#codPostal') , 5);
        //var valTlf = validarTelefono($('#telefono'));
        //var valFecha = validarFecha($('#fecha'));
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
    function validarName(campo,numDigitos) {
        var span = getSpanForCampo(campo);
        
        var valLongitud = validarLongitudMin(campo, 4);
        if(valLongitud===true){
            var valLongitud = validarLongitudMax(campo, 40);
            //console.log(valLongitud);
            if (valLongitud) {
                span.text('');
                return true;
            }
        }
    }
    
    function validarSurname(campo,numDigitos) {
        var span = getSpanForCampo(campo);
        
        var valLongitud = validarLongitudMin(campo, 4);
        if(valLongitud===true){
            var valLongitud = validarLongitudMax(campo, 60);
            if (valLongitud) {
                span.text('');
                return true;
            }
        }
    }
    
    function validarTin(campo,numDigitos) {
        var span = getSpanForCampo(campo);
        
        var valLongitud = validarLongitudMin(campo, 4);
        if(valLongitud===true){
            var valLongitud = validarLongitudMax(campo, 20);
            if (valLongitud) {
                span.text('');
                return true;
            }
        }
    }
    
    function validarAddress(campo,numDigitos) {
        var span = getSpanForCampo(campo);
        
        var valLongitud = validarLongitudMin(campo, 4);
        if(valLongitud===true){
            var valLongitud = validarLongitudMax(campo, 100);
            if (valLongitud) {
                span.text('');
                return true;
            }
        }
    }
    
    function validarLocation(campo,numDigitos) {
        var span = getSpanForCampo(campo);
        
        var valLongitud = validarLongitudMin(campo, 4);
        if(valLongitud===true){
            var valLongitud = validarLongitudMax(campo, 100);
            if (valLongitud) {
                span.text('');
                return true;
            }
        }
    }
    
    function validarPostalCode(campo,numDigitos) {
        var span = getSpanForCampo(campo);
        var valLongitud = validarLongitud(campo, numDigitos);
        var valNum = jQuery.isNumeric(campo.val());
        
        //console.log(campo.val().length);
        if(campo.val().length===5){
            if (valLongitud && valNum) {
                span.text('');
                return true;
            }
        }else{
            span.text('Debe ser un número y contener ' + numDigitos + ' número de dígitos');
            return false;
        }
    }
    
    function validarProvince(campo,numDigitos) {
        var span = getSpanForCampo(campo);
        
        var valLongitud = validarLongitudMin(campo, 4);
        if(valLongitud===true){
            var valLongitud = validarLongitudMax(campo, 30);
            if (valLongitud) {
                span.text('');
                return true;
            }
        }
    }

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

    
    //function validarEsNumero(campo,numDigitos) {
    //    var span = getSpanForCampo(campo);
    //    var valLongitud = validarLongitud(campo, numDigitos);
    //    var valNum = jQuery.isNumeric(campo.val());
    //    
    //    if (valLongitud && valNum) {
    //        span.text('');
    //        return true;
    //    }
    //    
    //    else {
    //        span.text('Debe ser un número y contener ' + numDigitos + 'número de dígitos');
    //        return false;
    //    }
    //}
//
    //function validarFecha(campo) {
    //    var span = getSpanForCampo(campo);
    //    var fecha = new Date(campo.val());        
    //    if (isNaN(fecha)) {
    //        span.text('No has introducido una fecha válida');
    //        return false;
    //    }
    //    
    //    else {
    //        span.text('');
    //        return true;
    //    }
    //}
    //
    //function validarClave(campo, campoRepetir) {        
    //    var longitud = validarLongitudMin(campo , 6);        
    //    return longitud && validarRepetirClave(campoRepetir, campo);        
    //}
    //
    //function validarRepetirClave(campo, campoOriginal) {        
    //    if(campo.val() !== '') {
    //        var span = getSpanForCampo(campo);
    //        if (campo.val() === campoOriginal.val() ) {
    //            span.text('');
    //            return true;
    //        }
    //        else {
    //            span.text('Las contraseñas no coinciden');
    //            return false;
    //        }
    //    }
    //            
    //    else {
    //           return false; 
    //    }                
    //}
    //
   //
    //function validarTelefono(campo) {        
    //    var patronTel = /^[9|6]{1}([\d]{2}[-]*){3}[\d]{2}$/;
    //    var span = getSpanForCampo(campo);
    //    if (patronTel.test(campo.val())) {
    //        span.text('');
    //        return true;
    //    }
//
    //    span.text('telefono inválido');
    //    return false;
    //}


});
