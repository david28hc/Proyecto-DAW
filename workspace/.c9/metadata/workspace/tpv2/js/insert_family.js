{"filter":false,"title":"insert_family.js","tooltip":"/tpv2/js/insert_family.js","undoManager":{"mark":100,"position":100,"stack":[[{"start":{"row":264,"column":0},"end":{"row":332,"column":0},"action":"remove","lines":["","    ","    //function validarEsNumero(campo,numDigitos) {","    //    var span = getSpanForCampo(campo);","    //    var valLongitud = validarLongitud(campo, numDigitos);","    //    var valNum = jQuery.isNumeric(campo.val());","    //    ","    //    if (valLongitud && valNum) {","    //        span.text('');","    //        return true;","    //    }","    //    ","    //    else {","    //        span.text('Debe ser un número y contener ' + numDigitos + 'número de dígitos');","    //        return false;","    //    }","    //}","//","    //function validarFecha(campo) {","    //    var span = getSpanForCampo(campo);","    //    var fecha = new Date(campo.val());        ","    //    if (isNaN(fecha)) {","    //        span.text('No has introducido una fecha válida');","    //        return false;","    //    }","    //    ","    //    else {","    //        span.text('');","    //        return true;","    //    }","    //}","    //","    //function validarClave(campo, campoRepetir) {        ","    //    var longitud = validarLongitudMin(campo , 6);        ","    //    return longitud && validarRepetirClave(campoRepetir, campo);        ","    //}","    //","    //function validarRepetirClave(campo, campoOriginal) {        ","    //    if(campo.val() !== '') {","    //        var span = getSpanForCampo(campo);","    //        if (campo.val() === campoOriginal.val() ) {","    //            span.text('');","    //            return true;","    //        }","    //        else {","    //            span.text('Las contraseñas no coinciden');","    //            return false;","    //        }","    //    }","    //            ","    //    else {","    //           return false; ","    //    }                ","    //}","    //","   //","    //function validarTelefono(campo) {        ","    //    var patronTel = /^[9|6]{1}([\\d]{2}[-]*){3}[\\d]{2}$/;","    //    var span = getSpanForCampo(campo);","    //    if (patronTel.test(campo.val())) {","    //        span.text('');","    //        return true;","    //    }","//","    //    span.text('telefono inválido');","    //    return false;","    //}","",""],"id":2}],[{"start":{"row":3,"column":8},"end":{"row":3,"column":24},"action":"remove","lines":["formInsertClient"],"id":3},{"start":{"row":3,"column":8},"end":{"row":3,"column":24},"action":"insert","lines":["formInsertFamily"]}],[{"start":{"row":4,"column":8},"end":{"row":4,"column":24},"action":"remove","lines":["formInsertClient"],"id":4},{"start":{"row":4,"column":8},"end":{"row":4,"column":24},"action":"insert","lines":["formInsertFamily"]}],[{"start":{"row":12,"column":8},"end":{"row":12,"column":24},"action":"remove","lines":["formInsertClient"],"id":5},{"start":{"row":12,"column":8},"end":{"row":12,"column":24},"action":"insert","lines":["formInsertFamily"]}],[{"start":{"row":24,"column":8},"end":{"row":24,"column":12},"action":"remove","lines":["name"],"id":6},{"start":{"row":24,"column":8},"end":{"row":24,"column":9},"action":"insert","lines":["f"]}],[{"start":{"row":24,"column":9},"end":{"row":24,"column":10},"action":"insert","lines":["a"],"id":7}],[{"start":{"row":24,"column":10},"end":{"row":24,"column":11},"action":"insert","lines":["m"],"id":8}],[{"start":{"row":24,"column":11},"end":{"row":24,"column":12},"action":"insert","lines":["i"],"id":9}],[{"start":{"row":24,"column":12},"end":{"row":24,"column":13},"action":"insert","lines":["l"],"id":10}],[{"start":{"row":24,"column":13},"end":{"row":24,"column":14},"action":"insert","lines":["y"],"id":11}],[{"start":{"row":25,"column":8},"end":{"row":25,"column":19},"action":"remove","lines":["validarName"],"id":12},{"start":{"row":25,"column":8},"end":{"row":25,"column":9},"action":"insert","lines":["v"]}],[{"start":{"row":25,"column":9},"end":{"row":25,"column":10},"action":"insert","lines":["a"],"id":13}],[{"start":{"row":25,"column":10},"end":{"row":25,"column":11},"action":"insert","lines":["l"],"id":14}],[{"start":{"row":25,"column":11},"end":{"row":25,"column":12},"action":"insert","lines":["i"],"id":15}],[{"start":{"row":25,"column":12},"end":{"row":25,"column":13},"action":"insert","lines":["d"],"id":16}],[{"start":{"row":25,"column":13},"end":{"row":25,"column":14},"action":"insert","lines":["a"],"id":17}],[{"start":{"row":25,"column":14},"end":{"row":25,"column":15},"action":"insert","lines":["r"],"id":18}],[{"start":{"row":25,"column":15},"end":{"row":25,"column":16},"action":"insert","lines":["F"],"id":19}],[{"start":{"row":25,"column":16},"end":{"row":25,"column":17},"action":"insert","lines":["a"],"id":20}],[{"start":{"row":25,"column":17},"end":{"row":25,"column":18},"action":"insert","lines":["m"],"id":21}],[{"start":{"row":25,"column":18},"end":{"row":25,"column":19},"action":"insert","lines":["i"],"id":22}],[{"start":{"row":25,"column":19},"end":{"row":25,"column":20},"action":"insert","lines":["l"],"id":23}],[{"start":{"row":25,"column":20},"end":{"row":25,"column":21},"action":"insert","lines":["y"],"id":24}],[{"start":{"row":28,"column":4},"end":{"row":78,"column":4},"action":"remove","lines":["$('#surname').change(function() {","        validarSurname($(this));","    });","    ","    $('#tin').change(function() {","        validarTin($(this));","    });","    ","    $('#address').change(function() {","        validarAddress($(this));","    });","    ","    $('#location').change(function() {","        validarLocation($(this));","    });","    ","    $('#postalcode').change(function(){","        validarPostalCode($(this), 5);","    });","    ","    $('#province').change(function(){","        validarProvince($(this));","    });","    ","    $('#email').change(function() {","        validarCorreo($(this));","    });","    ","    //$('#password').change(function() {","    //    validarClave($(this), $('#verificar'));","    //});","    //","    //$('#verificar').change(function() {","    //    validarRepetirClave($(this), $('#password'));","    //});","    //","    //$('#provincia').change(function() {","    //    validarLongitud($(this),2); ","    //});","    //","    //$('#codPostal').change(function(){","    //    validarEsNumero($(this), 5);","    //});","    //        ","    //$('#telefono').change(function(){","    //    validarTelefono($(this));","    //})","    //$('#fecha').change(function(){","    //   validarFecha($(this)); ","    //});","    "],"id":25}],[{"start":{"row":28,"column":0},"end":{"row":28,"column":4},"action":"remove","lines":["    "],"id":26}],[{"start":{"row":27,"column":4},"end":{"row":28,"column":0},"action":"remove","lines":["",""],"id":27}],[{"start":{"row":27,"column":0},"end":{"row":27,"column":4},"action":"remove","lines":["    "],"id":28}],[{"start":{"row":26,"column":7},"end":{"row":27,"column":0},"action":"remove","lines":["",""],"id":29}],[{"start":{"row":27,"column":0},"end":{"row":27,"column":4},"action":"remove","lines":["    "],"id":30}],[{"start":{"row":26,"column":7},"end":{"row":27,"column":0},"action":"remove","lines":["",""],"id":31}],[{"start":{"row":30,"column":4},"end":{"row":30,"column":8},"action":"remove","lines":["    "],"id":32}],[{"start":{"row":30,"column":0},"end":{"row":30,"column":4},"action":"remove","lines":["    "],"id":33}],[{"start":{"row":29,"column":37},"end":{"row":30,"column":0},"action":"remove","lines":["",""],"id":34}],[{"start":{"row":36,"column":12},"end":{"row":36,"column":19},"action":"remove","lines":["valName"],"id":35},{"start":{"row":36,"column":12},"end":{"row":36,"column":13},"action":"insert","lines":["v"]},{"start":{"row":36,"column":13},"end":{"row":36,"column":14},"action":"insert","lines":["g"]}],[{"start":{"row":36,"column":14},"end":{"row":36,"column":15},"action":"insert","lines":["a"],"id":36}],[{"start":{"row":36,"column":14},"end":{"row":36,"column":15},"action":"remove","lines":["a"],"id":37}],[{"start":{"row":36,"column":13},"end":{"row":36,"column":14},"action":"remove","lines":["g"],"id":38}],[{"start":{"row":36,"column":13},"end":{"row":36,"column":14},"action":"insert","lines":["a"],"id":39}],[{"start":{"row":36,"column":14},"end":{"row":36,"column":15},"action":"insert","lines":["l"],"id":40}],[{"start":{"row":36,"column":15},"end":{"row":36,"column":16},"action":"insert","lines":["F"],"id":41}],[{"start":{"row":36,"column":16},"end":{"row":36,"column":17},"action":"insert","lines":["a"],"id":42}],[{"start":{"row":36,"column":17},"end":{"row":36,"column":18},"action":"insert","lines":["m"],"id":43}],[{"start":{"row":36,"column":18},"end":{"row":36,"column":19},"action":"insert","lines":["i"],"id":44}],[{"start":{"row":36,"column":19},"end":{"row":36,"column":20},"action":"insert","lines":["l"],"id":45}],[{"start":{"row":36,"column":20},"end":{"row":36,"column":21},"action":"insert","lines":["y"],"id":46}],[{"start":{"row":36,"column":24},"end":{"row":36,"column":35},"action":"remove","lines":["validarName"],"id":47},{"start":{"row":36,"column":24},"end":{"row":36,"column":25},"action":"insert","lines":["v"]}],[{"start":{"row":36,"column":25},"end":{"row":36,"column":26},"action":"insert","lines":["a"],"id":48}],[{"start":{"row":36,"column":26},"end":{"row":36,"column":27},"action":"insert","lines":["l"],"id":49}],[{"start":{"row":36,"column":27},"end":{"row":36,"column":28},"action":"insert","lines":["i"],"id":50}],[{"start":{"row":36,"column":28},"end":{"row":36,"column":29},"action":"insert","lines":["d"],"id":51}],[{"start":{"row":36,"column":29},"end":{"row":36,"column":30},"action":"insert","lines":["a"],"id":52}],[{"start":{"row":36,"column":30},"end":{"row":36,"column":31},"action":"insert","lines":["r"],"id":53}],[{"start":{"row":36,"column":31},"end":{"row":36,"column":32},"action":"insert","lines":["F"],"id":54}],[{"start":{"row":36,"column":32},"end":{"row":36,"column":33},"action":"insert","lines":["a"],"id":55}],[{"start":{"row":36,"column":33},"end":{"row":36,"column":34},"action":"insert","lines":["m"],"id":56}],[{"start":{"row":36,"column":34},"end":{"row":36,"column":35},"action":"insert","lines":["i"],"id":57}],[{"start":{"row":36,"column":35},"end":{"row":36,"column":36},"action":"insert","lines":["l"],"id":58}],[{"start":{"row":36,"column":36},"end":{"row":36,"column":37},"action":"insert","lines":["y"],"id":59}],[{"start":{"row":36,"column":37},"end":{"row":37,"column":0},"action":"insert","lines":["",""],"id":60},{"start":{"row":37,"column":0},"end":{"row":37,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":37,"column":4},"end":{"row":37,"column":8},"action":"remove","lines":["    "],"id":61}],[{"start":{"row":37,"column":0},"end":{"row":37,"column":4},"action":"remove","lines":["    "],"id":62}],[{"start":{"row":36,"column":37},"end":{"row":37,"column":0},"action":"remove","lines":["",""],"id":63}],[{"start":{"row":36,"column":42},"end":{"row":36,"column":46},"action":"remove","lines":["name"],"id":64},{"start":{"row":36,"column":42},"end":{"row":36,"column":43},"action":"insert","lines":["f"]}],[{"start":{"row":36,"column":43},"end":{"row":36,"column":44},"action":"insert","lines":["a"],"id":65}],[{"start":{"row":36,"column":44},"end":{"row":36,"column":45},"action":"insert","lines":["i"],"id":66}],[{"start":{"row":36,"column":44},"end":{"row":36,"column":45},"action":"remove","lines":["i"],"id":67}],[{"start":{"row":36,"column":44},"end":{"row":36,"column":45},"action":"insert","lines":["m"],"id":68}],[{"start":{"row":36,"column":45},"end":{"row":36,"column":46},"action":"insert","lines":["i"],"id":69}],[{"start":{"row":36,"column":46},"end":{"row":36,"column":47},"action":"insert","lines":["l"],"id":70}],[{"start":{"row":36,"column":47},"end":{"row":36,"column":48},"action":"insert","lines":["y"],"id":71}],[{"start":{"row":37,"column":8},"end":{"row":43,"column":50},"action":"remove","lines":["var valSurname = validarSurname($('#surname'));","        var valTin = validarTin($('#tin'));","        var valAddress = validarAddress($('#address'));","        var valLocation = validarLocation($('#location'));","        var valPostalCode = validarPostalCode($('#postalcode'),5);","        var valProvince = validarProvince($('#province'));","        var valEmail = validarCorreo($('#email'));"],"id":72}],[{"start":{"row":39,"column":14},"end":{"row":39,"column":21},"action":"remove","lines":["valName"],"id":73},{"start":{"row":39,"column":14},"end":{"row":39,"column":23},"action":"insert","lines":["valFamily"]}],[{"start":{"row":39,"column":24},"end":{"row":39,"column":128},"action":"remove","lines":["|| !valSurname  || !valTin || !valAddress || !valLocation || !valPostalCode || !valProvince || !valEmail"],"id":74}],[{"start":{"row":39,"column":23},"end":{"row":39,"column":24},"action":"remove","lines":[" "],"id":75}],[{"start":{"row":41,"column":9},"end":{"row":50,"column":51},"action":"remove","lines":["","        ","        //var valClave = validarClave($('#password') , $('verificar') );","        //var valRepetirClave = validarRepetirClave( $('#verificar'), $('#password') );","        //var valNombre = validarLongitudMin($('#nombre') , 1);","        //var valApellidos = validarLongitudMin($('#apellidos') , 1);","        //var valProvincia = validarLongitud($('#provincia') , 2);","        //var valPostal = validarEsNumero($('#codPostal') , 5);","        //var valTlf = validarTelefono($('#telefono'));","        //var valFecha = validarFecha($('#fecha'));"],"id":76}],[{"start":{"row":88,"column":13},"end":{"row":88,"column":24},"action":"remove","lines":["validarName"],"id":77},{"start":{"row":88,"column":13},"end":{"row":88,"column":14},"action":"insert","lines":["v"]}],[{"start":{"row":88,"column":14},"end":{"row":88,"column":15},"action":"insert","lines":["a"],"id":78}],[{"start":{"row":88,"column":15},"end":{"row":88,"column":16},"action":"insert","lines":["l"],"id":79}],[{"start":{"row":88,"column":16},"end":{"row":88,"column":17},"action":"insert","lines":["i"],"id":80}],[{"start":{"row":88,"column":17},"end":{"row":88,"column":18},"action":"insert","lines":["d"],"id":81}],[{"start":{"row":88,"column":18},"end":{"row":88,"column":19},"action":"insert","lines":["a"],"id":82}],[{"start":{"row":88,"column":19},"end":{"row":88,"column":20},"action":"insert","lines":["r"],"id":83}],[{"start":{"row":88,"column":20},"end":{"row":88,"column":21},"action":"insert","lines":["F"],"id":84}],[{"start":{"row":88,"column":21},"end":{"row":88,"column":22},"action":"insert","lines":["a"],"id":85}],[{"start":{"row":88,"column":22},"end":{"row":88,"column":23},"action":"insert","lines":["m"],"id":86}],[{"start":{"row":88,"column":23},"end":{"row":88,"column":24},"action":"insert","lines":["i"],"id":87}],[{"start":{"row":88,"column":24},"end":{"row":88,"column":25},"action":"insert","lines":["l"],"id":88}],[{"start":{"row":88,"column":25},"end":{"row":88,"column":26},"action":"insert","lines":["y"],"id":89}],[{"start":{"row":102,"column":4},"end":{"row":194,"column":5},"action":"remove","lines":["function validarSurname(campo,numDigitos) {","        var span = getSpanForCampo(campo);","        ","        var valLongitud = validarLongitudMin(campo, 4);","        if(valLongitud===true){","            var valLongitud = validarLongitudMax(campo, 60);","            if (valLongitud) {","                span.text('');","                return true;","            }","        }","    }","    ","    function validarTin(campo,numDigitos) {","        var span = getSpanForCampo(campo);","        ","        var valLongitud = validarLongitudMin(campo, 4);","        if(valLongitud===true){","            var valLongitud = validarLongitudMax(campo, 20);","            if (valLongitud) {","                span.text('');","                return true;","            }","        }","    }","    ","    function validarAddress(campo,numDigitos) {","        var span = getSpanForCampo(campo);","        ","        var valLongitud = validarLongitudMin(campo, 4);","        if(valLongitud===true){","            var valLongitud = validarLongitudMax(campo, 100);","            if (valLongitud) {","                span.text('');","                return true;","            }","        }","    }","    ","    function validarLocation(campo,numDigitos) {","        var span = getSpanForCampo(campo);","        ","        var valLongitud = validarLongitudMin(campo, 4);","        if(valLongitud===true){","            var valLongitud = validarLongitudMax(campo, 100);","            if (valLongitud) {","                span.text('');","                return true;","            }","        }","    }","    ","    function validarPostalCode(campo,numDigitos) {","        var span = getSpanForCampo(campo);","        var valLongitud = validarLongitud(campo, numDigitos);","        var valNum = jQuery.isNumeric(campo.val());","        ","        //console.log(campo.val().length);","        if(campo.val().length===5){","            if (valLongitud && valNum) {","                span.text('');","                return true;","            }","        }else{","            span.text('Debe ser un número y contener ' + numDigitos + ' número de dígitos');","            return false;","        }","    }","    ","    function validarProvince(campo,numDigitos) {","        var span = getSpanForCampo(campo);","        ","        var valLongitud = validarLongitudMin(campo, 4);","        if(valLongitud===true){","            var valLongitud = validarLongitudMax(campo, 30);","            if (valLongitud) {","                span.text('');","                return true;","            }","        }","    }","","    function validarCorreo(campo) {        ","        var expresion = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\\.[a-zA-Z0-9-]+)*$/;","        var span = getSpanForCampo(campo);","        if (expresion.test(campo.val())) {","            span.text('');","            return true;","        }","","        span.text('Formato Incorrecto');","        return false;","    }"],"id":90}],[{"start":{"row":102,"column":0},"end":{"row":102,"column":4},"action":"remove","lines":["    "],"id":91}],[{"start":{"row":101,"column":4},"end":{"row":102,"column":0},"action":"remove","lines":["",""],"id":92}],[{"start":{"row":101,"column":0},"end":{"row":101,"column":4},"action":"remove","lines":["    "],"id":93}],[{"start":{"row":100,"column":5},"end":{"row":101,"column":0},"action":"remove","lines":["",""],"id":94}],[{"start":{"row":93,"column":56},"end":{"row":93,"column":57},"action":"remove","lines":["4"],"id":95}],[{"start":{"row":93,"column":56},"end":{"row":93,"column":57},"action":"remove","lines":["0"],"id":96},{"start":{"row":93,"column":56},"end":{"row":93,"column":57},"action":"insert","lines":["1"]}],[{"start":{"row":93,"column":57},"end":{"row":93,"column":58},"action":"insert","lines":["0"],"id":99}],[{"start":{"row":93,"column":58},"end":{"row":93,"column":59},"action":"insert","lines":["0"],"id":100}],[{"start":{"row":21,"column":0},"end":{"row":21,"column":4},"action":"remove","lines":["    "],"id":101}],[{"start":{"row":20,"column":7},"end":{"row":21,"column":0},"action":"remove","lines":["",""],"id":102}],[{"start":{"row":21,"column":0},"end":{"row":21,"column":4},"action":"remove","lines":["    "],"id":103}],[{"start":{"row":20,"column":7},"end":{"row":21,"column":0},"action":"remove","lines":["",""],"id":104}]]},"ace":{"folds":[],"scrolltop":600,"scrollleft":0,"selection":{"start":{"row":20,"column":7},"end":{"row":20,"column":7},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":30,"state":"no_regex","mode":"ace/mode/javascript"}},"timestamp":1518169303118,"hash":"69f8ee5f7e29e7383ee2108724a2edf081133b41"}