// (function () {
//     //primera llamada a ajax, solicitar todos los datos
//     $.ajax(
//         {
//             url: 'index.php',
//             type: 'get',
//             dataType: 'json',
//             data: {
//                 ruta: 'ajax',
//                 accion: 'listadocompleto'
//             }
//         }
//     ).done(
//         function(json) {
//             var listado = json.listado;
//             for(indice in listado){
//                 var usuario = listado[indice];
//                 console.log(usuario);
//                 createNode(usuario);
//             }
//             associateEvents();
//         }
        
//     ).fail(
//     );
    
    
//     $('#boton').on('click',function(){
//         $.ajax(
//             {
//                 url: 'index.php',
//                 type: 'get',
//                 dataType: 'json',
//                 data: {
//                     ruta: 'ajax',
//                     accion: 'registro',
//                     correo: $('#correo').val(),
//                     clave: $('#clave').val(),
//                     claveRepetida: $('#claveRepetida').val()
//                 }
//             }
//         ).done(
//             function(json) {
//                 if(json.respuesta.r <= 0) {
//                     $('#mensaje').html('usuario duplicado u otro error');
//                 }else{
//                     $('#mensaje').html('perfecto, mira tu correo');
//                 }
//             }
            
//         ).fail(
//         );
//     });
    
    
//     function createNode(usuario){
//         var id = usuario.id;
//         var correo = usuario.correo;
//         var verificado = usuario.verificado;
//         var nodo = $('<li>' + id + ' ' + correo + ' ' + verificado + 
//         ' <a class="borrar" href="#" data-id="' + id +'">Borrar</a> <a class="editar" href="#" data-id="' + id +'">Editar</a>' + '</li>');
//         $('#lineasUsuario').append(nodo);
//     }
    
//     function associateEvents(){
//         $('.borrar').on('click' , function(){
//             alert('borrando ' + $(this).data('id'));
//         });
        
//         $('.editar').on('click' , function(){
//             alert('editando ' + $(this).data('id'));
//         });
//     }
// })();



