$(document).ready(function () {
    
    $('.confirmBorrado').on('click' , function(evento) {
        
        if(!confirm("Estás seguro de que quieres borrarlo?")) {
            evento.preventDefault();
        }
    })
    
});