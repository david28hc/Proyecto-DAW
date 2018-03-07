(function(){
    
    // MOSTRAR PRODUCTOS
    var ticket = {
        'idmember': '',
        'idclient': ''
    };
    
    
        ajax();
        function ajax() {
        $.ajax(
            {
                url: 'ajax/productsAjax',
                type: 'post',
                dataType: 'json',
                data: {
                    
                    // accion: 'productsAjax',
                    // ruta: 'ajax'
                }
            }
        ).done(
            
            function(json) {
                //console.log(json);
                var paquito = $("#paquito");
                //$('#paquito').html('va bien ' + json.data[1].idProduct);
                loadProducts(json.data);
                $.each(json.data, function(i, product) {
                    //  console.log(product);
                     var familia = product.idFamily;
                     if(familia == 1) {
                         $('.pan').append('<div class="lightbox-item p-item col-md-4 col-sm-6 col-xs-12 alto"><img data-id="' + product.idProduct + '"  class="pepe" src="product/verfoto?id='+ product.idProduct +'"></div>');
                     } else if(familia == 3) {
                         $('.bolleria').append('<div class="lightbox-item p-item col-md-4 col-sm-6 col-xs-12 alto"><img data-id="' + product.idProduct + '"  src="product/verfoto?id='+ product.idProduct +'"></div>');
                     } else if(familia == 4) {
                         $('.croissanteria').append('<div class="lightbox-item p-item col-md-4 col-sm-6 col-xs-12 alto"><img data-id="' + product.idProduct + '" src="product/verfoto?id='+ product.idProduct +'"></div>');
                     } else if(familia == 5) {
                         $('.navidad').append('<div class="lightbox-item p-item col-md-4 col-sm-6 col-xs-12 alto"><img data-id="' + product.idProduct + '"  src="product/verfoto?id='+ product.idProduct +'"></div>');
                     }  else {
                         $('.otros').append('<div class="lightbox-item p-item col-md-4 col-sm-6 col-xs-12 alto"><img data-id="' + product.idProduct + '"  src="product/verfoto?id='+ product.idProduct +'"></div>');
                     }
                    
                });
            
            }
        
            
        ).fail(
            function(){
                $('#paquito').html('Algo ha fallado!!!');
            }
        );
        
        
        //MOSTRAR CARRITO DESDE SESION
        
        vercarro();
        function vercarro() {
        $.ajax(
            {
                url: 'carrito/verCarro',
                type: 'post',
                dataType: 'json',
                data: {
                    // accion: 'verCarro',
                    // ruta: 'carrito'
                }
            }
        ).done(
            function(json) {
                $('.carr').empty();
                
                var cont = 0;
                var sumatoriaTotal = 0;
                
                $.each(json.carro, function(id, product) {
                    // console.log(product);
                    
                    var sumatoria = parseFloat(product.item.price * product.cantidad);
                    var fixedSumatoria = (sumatoria).toFixed(2);
                    
                    
                    $('.carr').append('<tr class="borrartr"><td id="id" data-id="'+ product.item.idProduct +'">'+ product.item.product +'</td><td id="cantidad" class="catidad2">' + product.cantidad + '</td><td class="pecio">' + product.item.price + '</td><td class="pecioTotal">' + fixedSumatoria + '</td><td><a class="restar"><i class="fa fa-minus" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;<a class="restarall"><i class="fa fa-times" aria-hidden="true"></i></a></td></tr>');
                    
                    sumatoriaTotal = parseFloat(sumatoriaTotal) + parseFloat(sumatoria);
                    
                    cont++;
                
            });
            
            
            var fixed = (sumatoriaTotal).toFixed(2);

                $('.con').html(cont);
                $('.pre').html(parseFloat(fixed));
            
            }
            
        ).fail(
            function(){
                alert('nanain');
            }
        );
        }
            
        
        
        function loadProducts (productos) {

        }
        
    }
    
    
    
    // BORRAR UN PRODUCTO
    
    $('.borrartr').on('click', '.restar', function() {
        alert('me cago en carlos');
        $.ajax(
            {
                url: 'carrito/subCarro',
                type: 'post',
                dataType: 'json',
                data: {
                    // accion: 'subCarro',
                    // ruta: 'carrito',
                    id: idproduct
                }
            }
        ).done(
            
           function(json) {
                $('.carr').empty();
                
                var cont = 0;
                var sumatoriaTotal = 0;
                
                $.each(json.carro, function(id, product) {
                    // console.log(product);
                    
                    var sumatoria = parseFloat(product.item.price * product.cantidad);
                    var fixedSumatoria = (sumatoria).toFixed(2);
                    
                    
                    $('.carr').append('<tr class="borrartr"><td id="id" data-id="'+ product.item.idProduct +'">'+ product.item.product +'</td><td id="cantidad" class="catidad2">' + product.cantidad + '</td><td class="pecio">' + product.item.price + '</td><td class="pecioTotal">' + fixedSumatoria + '</td><td><a href=""><i class="fa fa-minus" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;<a href=""><i class="fa fa-times" aria-hidden="true"></i></a></td></tr>');
                    
                    sumatoriaTotal = parseFloat(sumatoriaTotal) + parseFloat(sumatoria);
                    
                    cont++;
                
            });
            
            
            var fixed = (sumatoriaTotal).toFixed(2);

                $('.con').html(cont);
                $('.pre').html(parseFloat(fixed));
            
            }
            
        ).fail(
            function(){
                alert('nanain');
            }
        );
        });
    
    
    
    
    
    //NUEVO TICKET
    
    $('.nuevo').click(function(e) {
        var pepe = confirm('¿Estás seguro de comenzar un nuevo ticket?');
        if(pepe) {
            ajax3();
        function ajax3() {
        $.ajax(
            {
                url: 'carrito/reiniciarCarro',
                type: 'post',
                dataType: 'json',
                data: {
                    // accion: 'reiniciarCarro',
                    // ruta: 'carrito'
                }
            }
        ).done(
            function() {
                $('.borrartr').remove();
                $('.con').html('0');
                $('.pre').html('0');
            }
        ).fail(
            function(){
                $('#paquito').html('Algo ha fallado!!!');
            }
        );
    }
        } else {
            e.preventDefault();
        }
    });
    
    var pp = $('.lightbox').find('lightbox-item');
    
    
    
    
    
   
   
   
    
    // AÑADIR PRODUCTO SELECCIONADO
    
    $('.lightbox').on('click', '.p-item' , function(){
       var lele = $(this).find('img');
       //alert(lele.data('id'));
       
       var id = lele.data('id');
       
       ajax2();
       function ajax2() {
        $.ajax(
            {
                url: 'carrito/addCarro',
                type: 'post',
                dataType: 'json',
                data: {
                    // accion: 'addCarro',
                    // ruta: 'carrito',
                    id : id
                }
            }
        ).done(
            
            function(json) {

                $('.carr').empty();
                
                var cont = 0;
                var sumatoriaTotal = 0;
                
                

                $.each(json.carro, function(id, product) {
                    // console.log(product);
                    
                    var sumatoria = parseFloat(product.item.price * product.cantidad);
                    var fixedSumatoria = (sumatoria).toFixed(2);
                    
                    
                    $('.carr').append('<tr class="borrartr"><td id="id" data-id="'+ product.item.idProduct +'">'+ product.item.product +'</td><td id="cantidad" class="catidad2">' + product.cantidad + '</td><td class="pecio">' + product.item.price + '</td><td class="pecioTotal">' + fixedSumatoria + '</td><td><a href="tpv/index#" class="restar"><i class="fa fa-minus" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;<a href="tpv/index#" class="restarAll"><i class="fa fa-times" aria-hidden="true"></i></a></td></tr>');
                    
                    sumatoriaTotal = parseFloat(sumatoriaTotal) + parseFloat(sumatoria);
                    
                    cont++;

                });


                var fixed = (sumatoriaTotal).toFixed(2);

                $('.con').html(cont);
                $('.pre').html(parseFloat(fixed));
                
                    
                
            }
            
            ).fail(
            function(){
                $('#paquito').html('Algo ha fallado!!!');
            }
        );

        
    }
    });
    
    

    // contar();
    // function contar(){
    //     var prodcutosTotal = 0;
        
    //     var nFilas = $(".carr .borrartr").length;

    //     var msg = "Filas: " + nFilas;
        
    //     alert(msg);
        
        
    // }
    
    $('#apuntar').click(function() {
        $('#modal-cliente').show();
        $('.tickets').hide();
        $('.productos').hide();
    });
    
    $('#cerrarmodalclient').click(function() {
        $('#modal-cliente').hide();
        $('.tickets').show();
        $('.productos').show();
    });
    
    
    // FUNCION SACAR CLIENTES
    
    clientes();
        function clientes() {
        $.ajax(
            {
                url: 'clientesajax/clientesAjax',
                type: 'post',
                dataType: 'json',
                data: {
                    // accion: 'clientesAjax',
                    // ruta: 'clientesajax'
                }
            }
        ).done(
            function(json) {
                $.each(json.datacliente, function(i, client) {
                     
                         $('#selectclient').append('<tr><td class="myclient-id">'+ client.idClient +'</td><td class="myclient-name">'+ client.name +'</td><td>'+ client.surname +'</td><td>'+ client.tin +'</td><td>'+ client.address +'</td><td>'+ client.location +'</td><td>'+ client.postalcode +'</td><td>'+ client.province +'</td><td>'+ client.email +'</td></tr>');
                });
            
            }
        
            
        ).fail(
            function(){
                $('#paquito').html('Algo ha fallado!!!');
            }
        );
    
        }
        
        //Funcion para seleccionar los clientes
        
        $('#selectclient').on('click','tr', function() {
            var idCliente = $(this).find('.myclient-id').html();
            ticket.idclient = idCliente;
            
            $('#modal-cliente').hide();
            $('.tickets').show();
            $('.productos').show();
            
            var nameCliente = $(this).find('.myclient-name').html();
            alert('Ticket apuntado a: ' + nameCliente + '\n\n' + 'Para guardar ticket, pulsar en "GUARDAR TICKET"');
            
        });
        
        $('.guardar').click(function() {
            var detail = {};
            var trs = $('.carr').children('tr');
            
            trs.each(function(i) {
                
                detail[i] = {'idproduct': trs.eq(i).find('#id').attr('data-id'),
                    'quantity': trs.eq(i).find('#cantidad').html(),
                    'price': trs.eq(i).find('.pecioTotal').html()
                };
                });
                
                
            
            
            console.log(detail);
            
                            $.ajax(
                                {
                                    url: 'clientesajax/guardarTicket',
                                    type: 'post',
                                    dataType: 'json',
                                    data: {
                                        // accion: 'guardarTicket',
                                        // ruta: 'clientesajax',
                                        ticketmandar: ticket,
                                        ticketdm: detail
                                    }
                                }
                                    ).done(
                                        function(json) {
                                        //alert(json.devuelto);
                                        alert('Ticket guardado correctamente');
                                        
                                        $('.carr').empty();
                                        $('.con').html('0');
                                        $('.pre').html('0');
                                        
                                        }
                                    ).fail(
                                        function(){
                                            alert('No se ha ingresado nada');
                                        }
                                    );
        });
    
})();