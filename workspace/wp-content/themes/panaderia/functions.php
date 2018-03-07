<?php
function theme_scripts(){
    
    wp_register_script( 'jquery10', get_template_directory_uri() . '/js/jquery1.11.1.js', array( 'jquery' ), null, true );
    wp_enqueue_script( 'jquery10' );
    
    //wp_register_script( 'jquery4', get_template_directory_uri() . '/js/angular.js', array( 'jquery' ), null, true );
    //wp_enqueue_script( 'jquery4' );

    wp_register_script( 'jquery1', get_template_directory_uri() . '/js/api.json', array( 'jquery' ), null, true );
    wp_enqueue_script( 'jquery1' );
    
    wp_register_script( 'jquery2', get_template_directory_uri() . '/js/website.assets.minde43.js', array( 'jquery' ), null, true );
    wp_enqueue_script( 'jquery2' );
    
    wp_register_script( 'jquery3', get_template_directory_uri() . '/js/website.min6cc0.js', array( 'jquery' ), null, true );
    wp_enqueue_script( 'jquery3' );
    
    wp_register_script( 'jquery5', get_template_directory_uri() . '/js/loading-bar.js', array( 'jquery' ), null, true );
    wp_enqueue_script( 'jquery5' );
    
    wp_register_script( 'jquery6', get_template_directory_uri() . '/js/loading-bar.min.js', array( 'jquery' ), null, true );
    wp_enqueue_script( 'jquery6' );
    
    wp_register_script( 'jquery7', get_template_directory_uri() . '/js/scroll.js', array( 'jquery' ), null, true );
    wp_enqueue_script( 'jquery7' );
    
    wp_register_script( 'jquery8', get_template_directory_uri() . '/js/jquery-1.3.2.js', array( 'jquery' ), null, true );
    wp_enqueue_script( 'jquery8' );
    
    wp_register_script( 'jquery9', get_template_directory_uri() . '/js/scroll-startstop.events.jquery.js', array( 'jquery' ), null, true );
    wp_enqueue_script( 'jquery9' );
    
    wp_register_script( 'jquery10', get_template_directory_uri() . '/js/nav.js', array( 'jquery' ), null, true );
    wp_enqueue_script( 'jquery10' );
    
    
}

add_action('wp_enqueue_scripts', 'theme_scripts');

add_theme_support(
    'post-thumbnails'    
);





/* Personalizar apariencia del formulario de comentarios */
function my_comment_form_default_fields($fields){
    //Info necesaria
    //Usuario de ese momento, si esta logueado
    $user = wp_get_current_user();
    //Quien va a dejar el comentario
    $commenter = wp_get_current_commenter();
    //Nombre del usuario que ha escrito el post
    $name = $user->exist()?$user->display-name:'';
    //Email del user
    $req = get_option('require_name_email');
    //Campo autor = author
    $fields['author']='<input type="text" class="form-control" id="author" placeholder="Name" name="author" value="'.esc_attr($commenter['comment_author']).'" size="20" required  >';
    //Campo email
    $fields['email']='<input type="email" class="form-control" id="email" placeholder="Email" name="email" value="'.esc_attr($commenter['comment_author_email']).'" size="20" required  >';
    //Campo url
    $fields['url']='<input type="text" class="form-control" id="url" placeholder="Url" name="url" value="'.esc_attr($commenter['comment_author_url']).'" size="20" ><br><br>';
    //Campo textarea
    $fields['comment_field']='<textarea class="form-control" id="comment" name="comment" placeholder="Comentario..." cols="69" rows="4" required ></textarea>';
    
    return $fields;
    
    
    
    //Problemas:
    //1. Cuando nos logueamos desaparecen los campos. Solo aparece el textarea
    //2. Salen dos textarea
}

add_filter('comment_form_default_fields', 'my_comment_form_default_fields');


function my_form_defaults($defaults){
    
    if(!is_user_logged_in()){
        if(isset($defaults['comment_field'])){
            $defaults['comment_field']="";
        }
    }else{
        $defaults['comment_field']='<textarea class="form-control" id="comment" placeholder="Comentario..." name="comment" cols="69" rows="4" required ></textarea>';
    }
    
    return $defaults;
    
}

add_filter('comment_form_defaults', 'my_form_defaults');


    //Como hacer que apareca el textarea por defecto solo cuando estemos logueados
    
    
    
    
    
    
    function custom_comments($comment, $args, $depth){
        
        ?>

           <div class="<?php echo ($depth > 1) ? 'blog-post-comment-reply' : 'blog-post-comment'; ?>">
                                <?php echo get_avatar( $comment, 60, $default, 'Commenter avatar', array( 'class' => array( 'img-circle' ) ) ); ?>
                                <span class="blog-post-comment-name"><?php comment_author(); ?> -</span> <?php comment_date();echo ' at '; comment_time(); ?> 
                                
                                <?php 
                                comment_reply_link( 
                                    array_merge( 
                                        $args, 
                                        array( 
                                            'add_below' => $add_below, 
                                            'depth'     => $depth, 
                                            'max_depth' => $args['max_depth'],
                                            'before' =>  '<div class="righty"><i class="fa fa-comment"></i>&nbsp;',
                                            'after' => '</div>'
                                        ) 
                                    ) 
                                ); ?>
                           
                                <p>
                                    <?php comment_text(); ?>
                                </p>
                               <!-- <?php edit_comment_link( __( '(Edit)' ), '  ', '' ); ?>-->
 
            
        <?php
    }
    
    
    
    
    
    
    
    
//FUNCION PARA PAGINACION SI NO FUNCIONA LA OTRA

function get_paginate_page_links( $type = 'plain', $endsize = 1, $midsize = 1 ) {
    global $wp_query, $wp_rewrite;
    
    /* Obtenemos el número actual de página -> en una plantilla tipo index  
      OJO! si queremos obtener el número de página de una página estática -> tipo front page - 
      tenemos que cambiar 'paged' por 'page'.
    */
    $current = get_query_var( 'paged' ) > 1 ? get_query_var('paged') : 1;

    // Saneamos los valores de los argumentos de entrada
    if ( ! in_array( $type, array( 'plain', 'list', 'array' ) ) ) $type = 'plain';
    // absint es una función WP que convierte un número a su entero no negativo, hace lo mismo que abs(intval($num))
    $endsize = absint( $endsize );
    $midsize = absint( $midsize );

    // Establecemos los valores de los argumentos de la función paginate_links()
    $pagination = array(
        'base'      => @add_query_arg( 'paged', '%#%' ),
        'format'    => '',
        'total'     => $wp_query->max_num_pages,
        'current'   => $current,
        'show_all'  => false,
        'end_size'  => $endsize,
        'mid_size'  => $midsize,
        'type'      => $type,
        'prev_text' => '&lt;&lt; Previous',
        'next_text' => 'Next &gt;&gt;'
    );
    // El método using_permalinks() del objeto wp_rewrite de WP devuelve TRUE si nuestro sitio usa alguna clase de permalinks
    if ( $wp_rewrite->using_permalinks() ) {
        /* Si usamos permalinks hay que rehacer la URL donde pasaremos el número de página, quitando el argumento s de la url por defecto
         que puede estar a partir de la última barra de directorio en la propia url
         
        user_trailingslashit -> Si los permalinks están configuarados para acabar en /, le añade la barra a la url que genere para los page links
        si no está configurado para ello, se la quita en caso de que exista
        trailingslashit( '/home/julien/bin/dotfiles' );  ---> '/home/julien/bin/dotfiles/'
         
        */
        $pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ).'page/%#%/', 'paged' );
    } 
        /* Si estamos en el template search o archive tenemos que tener en cuenta 
        la variable s que es la que tiene el valor de búsqueda */ 
    if ( ! empty( $wp_query->query_vars['s'] ) ) {
            $pagination['add_args'] = array( 's' => get_query_var( 's' ) );
    }
    return paginate_links( $pagination );
}


//  Funcion para eliminar paginas del search
function remove_pages_from_search($query) {
    if ($query->is_search) {
    $query->set('post_type', 'post');
    }
    return $query;
    }
//add_filter('pre_get_posts','remove_pages_from_search');


// Modifica el excerpt_more para mostrar lo que queramos
function mi_excerpt_leermas() {
    global $post;
    return ' ...';
}

add_filter('excerpt_more', 'mi_excerpt_leermas');


//Funcion que devuelve el rode de un autor
function get_author_rol($user_id){
    
    //Extrameos toda la info del autor
    $user_info=get_userdata($user_id);
    
    //Devuelve un array
    return implode(',', $user_info->roles);
    
}





/*_____________________________________________*/


/* CUSTOM POST TYPE: NUEVOS PRODUCTOS */

function new_product_post(){
    $supports = array(
        'title',
        'editor',
        'author',
        'thumbnail',
        //'excerpt',
        //'custom_fields',
        'comments',
        'revisions'
        //'post-formats'
        );
    $labels = array(
        'name' => _x('Products', 'plural'),
        'singular_name' => _x('Product', 'singular'),
        'menu_name' => _x('Products','admin menu'),
        'name_admin_bar' => _x('Product', 'admin bar'),
        'add_new' => _x('Add new', 'add new'),
        
        'add_new_item' => __('Add New Product'),
        'new_item' => __('New Product'),
        'edit_item' => __('Edit Product'),
        'view_item' => __('View Products'),
        'all_items' => __('All Products'),
        'search_items' => __('Search Products'),
        'not_found' => __('No Products Founds')
        );
        
        $args = array(
            'supports' => $supports, //array de paneles soportados en el admin area
            'labels' => $labels, //traduccion para los labels en el admin area
            'public' => true, //ambito del post public -> lo puede ver todo el mundo
            'query-var' => true, //la query_var soportara los post pernosalizados
            'rewrite' => array('slug' => 'product'), //slug para el post
            'has_archive' => true, // permitimos archivos adjuntos
            'hierarchical' => false, // no va a tener posts hijo -> no hay jerarquía
            'menu_position' => 5, // posición de la opción de menú en el admin area
            'exclude_from_search' => false,
            'capability_type' => 'post'
        );
        
        register_post_type('new_product',$args);
    
}

add_action('init', 'new_product_post');


//Añadir categorias y tags a custom post types

function add_cattags_to_custom_post_type(){
    
    register_taxonomy_for_object_type('category', 'new_product');
    
    register_taxonomy_for_object_type('post_tag', 'new_product');
    
}

add_action ('init', 'add_cattags_to_custom_post_type');


//Crear metabox

function add_new_product_metabox(){
    $screens = array('new_product');
    foreach($screens as $screen){
        add_meta_box(
            'new_product_metabox',
            __('New Products Details', 'mime'),
            'add_fields_to_metabox',
            $screen,
            'normal',
            'default'
        );
    }
}

add_action('add_meta_boxes', 'add_new_product_metabox');




//Crear funcion callback

function add_fields_to_metabox($post){
    //Creamos un campo nonce
    wp_nonce_field(basename(__FILE__), 'new_product_metabox_nonce');
    
    //Recogemos los datos de la BBDD
    $familia = get_post_meta($post->ID, 'familia', true);
    $precio = get_post_meta($post->ID, 'precio', true);
    
    $gluten = get_post_meta($post->ID, 'gluten', true);
    $huevo = get_post_meta($post->ID, 'huevo', true);
    $cacahuetes = get_post_meta($post->ID, 'cacahuetes', true);
    $soja = get_post_meta($post->ID, 'soja', true);
    $lacteos = get_post_meta($post->ID, 'lacteos', true);
    $sesamo = get_post_meta($post->ID, 'sesamo', true);
    
    ?>
    
    <div class="metabox">
        
    <label for="familia">Familia: </label>
    <select id="familia" name="familia">
        <option value="pan" <?php if ($familia=='pan') echo 'selected';?>>Pan</option>
        <option value="bolleria" <?php if ($familia=='bolleria') echo 'selected';?>>Bolleria</option>
        <option value="croissanteria" <?php if ($familia=='croissanteria') echo 'selected';?>>Croissanteria</option>
        <option value="navidad" <?php if ($familia=='navidad') echo 'selected';?>>Navidad</option>
        <option value="otros" <?php if ($familia=='otros') echo 'selected';?>>Otros</option>
    </select> <br><br>
    
    <label for="precio">Precio: </label>
    <input type="text" id="precio" name="precio" size="15" value="<?php echo $precio ?>"><br><br>
    
    <label for="alergenos">Alergenos: </label><br>
    <input type="checkbox" id="gluten" name="gluten" value="1" <?php if ($gluten) echo 'checked';?>>&nbsp;Gluten   <br />
    <input type="checkbox" id="huevo" name="huevo" value="2" <?php if ($huevo) echo 'checked';?>>&nbsp;Huevo  <br />
    <input type="checkbox" id="cacahuetes" name="cacahuetes" value="3" <?php if ($cacahuetes) echo 'checked';?>>&nbsp; Cacahuetes  <br />
    <input type="checkbox" id="soja" name="soja" value="4" <?php if ($soja) echo 'checked';?>>&nbsp;Soja  <br />
    <input type="checkbox" id="lacteos" name="lacteos" value="5" <?php if ($lacteos) echo 'checked';?>>&nbsp;Lácteos  <br />
    <input type="checkbox" id="sesamo" name="sesamo" value="6" <?php if ($sesamo) echo 'checked';?>>&nbsp;Sésamo  <br />
    
    
    </div>
    
    <?php
}



//Funcion para actualizar los campos para crear o modificar

function save_new_product_fields ( $post_id ) {
    
        //Comprobar si es revision o DOING_AUTOSAVE
        $is_autosave = wp_is_post_autosave($post_id);
        $is_revision = wp_is_post_revision($post_id);
        
        //Comprobar si el campo nonce es valido
        $is_nonce_valid = (isset($_POST['new_product_metabox_nonce']) && wp_verify_nonce($_POST['new_product_metabox_nonce'], basename(__FILE__)));
        
        //Si no es valido hacemos un return
        if ($is_autosave || $is_revision || !$is_nonce_valid) {
            return;
        }
        
        //Saneamos los campos para evitar inyecciones de codigo
        $familia = sanitize_text_field( $_POST['familia']);
        $precio = sanitize_text_field( $_POST['precio']);
        
        $gluten = sanitize_text_field( $_POST['gluten']);
        $huevo = sanitize_text_field( $_POST['huevo']);
        $cacahuetes = sanitize_text_field( $_POST['cacahuetes']);
        $soja = sanitize_text_field( $_POST['soja']);
        $lacteos = sanitize_text_field( $_POST['lacteos']);
        $sesamo = sanitize_text_field( $_POST['sesamo']);
        

        //Actualizamos la BBDD
        update_post_meta( $post_id, 'familia', $familia);
        update_post_meta( $post_id, 'precio', $precio);
        
        update_post_meta( $post_id, 'gluten', $gluten);
        update_post_meta( $post_id, 'huevo', $huevo);
        update_post_meta( $post_id, 'cacahuetes', $cacahuetes);
        update_post_meta( $post_id, 'soja', $soja);
        update_post_meta( $post_id, 'lacteos', $lacteos);
        update_post_meta( $post_id, 'sesamo', $sesamo);


}


add_action('save_post', save_new_product_fields);



/*_____________________________________________*/




/* CUSTOM POST TYPE: RECETAS */

function recipe_post(){
    $supports = array(
        'title',
        'editor',
        'author',
        'thumbnail',
        //'excerpt',
        //'custom_fields',
        'comments',
        'revisions'
        //'post-formats'
        );
    $labels = array(
        'name' => _x('Recipes', 'plural'),
        'singular_name' => _x('Recipe', 'singular'),
        'menu_name' => _x('Recipes','admin menu'),
        'name_admin_bar' => _x('Recipe', 'admin bar'),
        'add_new' => _x('Add new', 'add new'),
        
        'add_new_item' => __('Add New Recipe'),
        'new_item' => __('New Recipe'),
        'edit_item' => __('Edit Recipe'),
        'view_item' => __('View Recipes'),
        'all_items' => __('All Recipes'),
        'search_items' => __('Search Recipes'),
        'not_found' => __('No Recipes Founds')
        );
        
        $args = array(
            'supports' => $supports, //array de paneles soportados en el admin area
            'labels' => $labels, //traduccion para los labels en el admin area
            'public' => true, //ambito del post public -> lo puede ver todo el mundo
            'query-var' => true, //la query_var soportara los post pernosalizados
            'rewrite' => array('slug' => 'recipe'), //slug para el post
            'has_archive' => true, // permitimos archivos adjuntos
            'hierarchical' => false, // no va a tener posts hijo -> no hay jerarquía
            'menu_position' => 5, // posición de la opción de menú en el admin area
            'exclude_from_search' => false,
            'capability_type' => 'post'
        );
        
        register_post_type('recipe',$args);
    
}

add_action('init', 'recipe_post');


//Añadir categorias y tags a custom post types

function add_cattags_to_custom_post_type_recipe(){
    
    register_taxonomy_for_object_type('category', 'recipe');
    
    register_taxonomy_for_object_type('post_tag', 'recipe');
    
}

add_action ('init', 'add_cattags_to_custom_post_type_recipe');



//Crear metabox

function add_recipe_metabox(){
    $screens = array('recipe');
    foreach($screens as $screen){
        add_meta_box(
            'recipe_metabox',
            __('New Recipes Details', 'mime'),
            'add_fields_to_metabox_recipe',
            $screen,
            'normal',
            'default'
        );
    }
}

add_action('add_meta_boxes', 'add_recipe_metabox');




//Crear funcion callback

function add_fields_to_metabox_recipe($post){
    //Creamos un campo nonce
    wp_nonce_field(basename(__FILE__), 'recipe_metabox_nonce');
    
    //Recogemos los datos de la BBDD
    $familia = get_post_meta($post->ID, 'familia', true);
    // $ingredientes = get_post_meta($post->ID, 'ingredientes', true);
    // $elaboracion = get_post_meta($post->ID, 'elaboracion', true);
    
    $gluten = get_post_meta($post->ID, 'gluten', true);
    $huevo = get_post_meta($post->ID, 'huevo', true);
    $cacahuetes = get_post_meta($post->ID, 'cacahuetes', true);
    $soja = get_post_meta($post->ID, 'soja', true);
    $lacteos = get_post_meta($post->ID, 'lacteos', true);
    $sesamo = get_post_meta($post->ID, 'sesamo', true);
    
    ?>
    
    <div class="metabox">
        
    <label for="familia">Familia: </label>
    <select id="familia" name="familia">
        <option value="pan" <?php if ($familia=='pan') echo 'selected';?>>Pan</option>
        <option value="bolleria" <?php if ($familia=='bolleria') echo 'selected';?>>Bolleria</option>
        <option value="croissanteria" <?php if ($familia=='croissanteria') echo 'selected';?>>Croissanteria</option>
        <option value="navidad" <?php if ($familia=='navidad') echo 'selected';?>>Navidad</option>
        <option value="otros" <?php if ($familia=='otros') echo 'selected';?>>Otros</option>
    </select> <br><br>
    
    <!--<label for="ingredientes">Ingredientes: </label><br>-->
    <!--<textarea id="ingredientes" name="ingredientes" rows="10" cols="100"><?php //echo $ingredientes ?></textarea><br><br>-->
    
    <!--<label for="elaboracion">Elaboracion: </label><br>-->
    <!--<textarea id="elaboracion" name="elaboracion" rows="10" cols="100"><?php //echo $elaboracion ?></textarea><br><br>-->
    
    <label for="alergenos">Alergenos: </label><br>
    <input type="checkbox" id="gluten" name="gluten" value="1" <?php if ($gluten) echo 'checked';?>>&nbsp;Gluten   <br />
    <input type="checkbox" id="huevo" name="huevo" value="2" <?php if ($huevo) echo 'checked';?>>&nbsp;Huevo  <br />
    <input type="checkbox" id="cacahuetes" name="cacahuetes" value="3" <?php if ($cacahuetes) echo 'checked';?>>&nbsp; Cacahuetes  <br />
    <input type="checkbox" id="soja" name="soja" value="4" <?php if ($soja) echo 'checked';?>>&nbsp;Soja  <br />
    <input type="checkbox" id="lacteos" name="lacteos" value="5" <?php if ($lacteos) echo 'checked';?>>&nbsp;Lácteos  <br />
    <input type="checkbox" id="sesamo" name="sesamo" value="6" <?php if ($sesamo) echo 'checked';?>>&nbsp;Sésamo  <br />
    
    
    </div>
    
    <?php
}



//Funcion para actualizar los campos para crear o modificar

function save_new_product_fields_recipe ( $post_id ) {
    
        //Comprobar si es revision o DOING_AUTOSAVE
        $is_autosave = wp_is_post_autosave($post_id);
        $is_revision = wp_is_post_revision($post_id);
        
        //Comprobar si el campo nonce es valido
        $is_nonce_valid = (isset($_POST['recipe_metabox_nonce']) && wp_verify_nonce($_POST['recipe_metabox_nonce'], basename(__FILE__)));
        
        //Si no es valido hacemos un return
        if ($is_autosave || $is_revision || !$is_nonce_valid) {
            return;
        }
        
        //Saneamos los campos para evitar inyecciones de codigo
        $familia = sanitize_text_field( $_POST['familia']);
        // $ingredientes = sanitize_text_field( $_POST['ingredientes']);
        // $elaboracion = sanitize_text_field( $_POST['elaboracion']);
        
        $gluten = sanitize_text_field( $_POST['gluten']);
        $huevo = sanitize_text_field( $_POST['huevo']);
        $cacahuetes = sanitize_text_field( $_POST['cacahuetes']);
        $soja = sanitize_text_field( $_POST['soja']);
        $lacteos = sanitize_text_field( $_POST['lacteos']);
        $sesamo = sanitize_text_field( $_POST['sesamo']);
        

        //Actualizamos la BBDD
        update_post_meta( $post_id, 'familia', $familia);
        // update_post_meta( $post_id, 'ingredientes', $ingredientes);
        // update_post_meta( $post_id, 'elaboracion', $elaboracion);
        
        update_post_meta( $post_id, 'gluten', $gluten);
        update_post_meta( $post_id, 'huevo', $huevo);
        update_post_meta( $post_id, 'cacahuetes', $cacahuetes);
        update_post_meta( $post_id, 'soja', $soja);
        update_post_meta( $post_id, 'lacteos', $lacteos);
        update_post_meta( $post_id, 'sesamo', $sesamo);


}


add_action('save_post', save_new_product_fields_recipe);



/*_____________________________________________*/





//Funcion para cambiar el titulo segun la pagina
function my_title(){
    
    //function_exists('is_tag') - Si venimos de un query post, no rompe el tema
    if (function_exists('is_tag') && is_tag()) {
        
        //single_tag_title -> Devuelve el titulo para la pagina
        single_tag_title('Tag Archive for &quot;'); echo '&quot; · ';
        
    //No pone exists porque si tenemos esas plantillas
    } elseif (is_archive()) {
        wp_title(''); echo ' Archivo · ';
    } elseif (is_search()) {
        echo 'Busqueda &quot;'.wp_specialchars($s).'&quot; · ';
        //WP no distingue de paginas o posts
    } elseif (!(is_404()) && (is_single()) || (is_page())) {
             bloginfo('name'); wp_title();
    } elseif (is_404()) {
        echo 'No encontrado · ';
    }
    if (is_front_page()) {
        echo ' | Bakery';//bloginfo('name'); echo ' · '; bloginfo('description');
    } elseif (is_home()) {
       bloginfo('name'); wp_title();
    }
    if ($paged > 1) {
        echo ' · pagina '. $paged;
    }
}



function extra_profile_fields( $user ) { ?>
    <h3><?php _e("Personal Skills"); ?></h3>
        <table class="form-table">
            <tr>
                <th><label for="skill1_d"><?php _e("Skill 1 Description");?></label></th>
                <td>
                    <input type="text" name="skill1_d" id="skill1_d" value="<?php echo esc_attr( get_the_author_meta( 'skill1_d', $user->ID ) ); ?>" class="regular-text" />
                    <br />
                    <span class="description"><?php _e("Please enter your skill description.");?></span>
                </td>
                <th><label for="skill1_v"><?php _e("Skill 1 Value");?></label></th>
                <td>
                    <input type="text" name="skill1_v" id="skill1_v" value="<?php echo esc_attr( get_the_author_meta( 'skill1_v', $user->ID ) ); ?>" class="regular-text" />
                    <br />
                    <span class="description"><?php _e("Please enter your skill value.");?></span>
                </td>
            </tr>
            
            <tr>
                <th><label for="skill1_d"><?php _e("Skill 2 Description");?></label></th>
                <td>
                    <input type="text" name="skill2_d" id="skill2_d" value="<?php echo esc_attr( get_the_author_meta( 'skill2_d', $user->ID ) ); ?>" class="regular-text" />
                    <br />
                    <span class="description"><?php _e("Please enter your skill description.");?></span>
                </td>
                <th><label for="skill2_v"><?php _e("Skill 2 Value");?></label></th>
                <td>
                    <input type="text" name="skill2_v" id="skill2_v" value="<?php echo esc_attr( get_the_author_meta( 'skill2_v', $user->ID ) ); ?>" class="regular-text" />
                    <br />
                    <span class="description"><?php _e("Please enter your skill value.");?></span>
                </td>
            </tr>
            
            <tr>
                <th><label for="skill1_d"><?php _e("Skill 3 Description");?></label></th>
                <td>
                    <input type="text" name="skill3_d" id="skill3_d" value="<?php echo esc_attr( get_the_author_meta( 'skill3_d', $user->ID ) ); ?>" class="regular-text" />
                    <br />
                    <span class="description"><?php _e("Please enter your skill description.");?></span>
                </td>
                <th><label for="skill1_v"><?php _e("Skill 3 Value");?></label></th>
                <td>
                    <input type="text" name="skill3_v" id="skill3_v" value="<?php echo esc_attr( get_the_author_meta( 'skill3_v', $user->ID ) ); ?>" class="regular-text" />
                    <br />
                    <span class="description"><?php _e("Please enter your skill value.");?></span>
                </td>
            </tr>

            
    </table>
<?php }

add_action( 'show_user_profile', 'extra_profile_fields' );
add_action( 'edit_user_profile', 'extra_profile_fields' );

//Guardar datos

function save_skills_fields($user_id){
    if(!current_user_can('edit_user', $user_id)){
        return;
    }
    update_user_meta($user_id, 'skill1_d', $_POST['skill1_d']);
    update_user_meta($user_id, 'skill2_d', $_POST['skill2_d']);
    update_user_meta($user_id, 'skill3_d', $_POST['skill3_d']);
    
    update_user_meta($user_id, 'skill1_v', $_POST['skill1_v']);
    update_user_meta($user_id, 'skill2_v', $_POST['skill2_v']);
    update_user_meta($user_id, 'skill3_v', $_POST['skill3_v']);
}

add_action('personal_options_update', 'save_skills_fields');
add_action('edit_user_profile_update', 'save_skills_fields');




//Habilitar area de widget idiomas
    
function crea_area_widgets(){
    register_sidebar(array(
        'name' => 'Idioma Widget', //Nombre
        'id' => 'idioma', //Identificador
        'description' => 'Idioma widgets area', //Descripcion
        'before_widget' => '<div class="widget %2$s"', //Etiqueta hrml antes del widget. %2$s -> para obtener la clase que has creado
        'after_widget' => '</div>' //Etiqueta hrml despues del widget
        )
    );    
}

add_action('widgets_init', 'crea_area_widgets');