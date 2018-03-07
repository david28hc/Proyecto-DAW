<!--Para indicarle a wordpress que muestre el fomrmulario usamos: comment_form()-->
<!--Comentarios asociados al post: wp_list_comments();
Mediante un filtro customizamos el formulario de comentarios
- Cambiar orden de los campos
- Eliminar o añadir
-->

<?php
comment_form();
//wp_list_comments();

$args = array(
        'style' => 'div',
        'type' => 'comment',
        'callback' => 'custom_comments'
    );
    
    wp_list_comments($args);

?>

