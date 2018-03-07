<div class="sidebarsection">
        <p class="moto-text_system_7">Buscar</p>
        
        <?php
            get_search_form();
        ?>
        
    </div>
    
    <br><br>
    
    <div class="sidebarsection">
        <p class="moto-text_system_7">Últimas entradas</p>
        
        <?php
            $args = array(
                        'type' => 'postbypost',  //alpha - alfabeticamente por titulo
                        'limit' => 5,
                        'post_type' => array ('new_product'),
                    );
        
            wp_get_archives($args);
        ?>
        
    </div>
    
    <br><br>
    
    <div class="sidebarsection">
        <p class="moto-text_system_7">Categorias</p>
        <?php
        $args = array(
                        'title_li' => '', //Para que no aparezca categorias repetido
                        //'show_count' => true, //Cuenta
                        'echo' => false
                    );
                    
            $cats = wp_list_categories($args); 
            
            //Añado clases
            $cats = preg_replace('/<\/a> \(([0-9]+)\)/', ' <span class=badge badge-pasific pull-right">\\1</span></a>', $cats);
            
            //Visualizo
            echo $cats;
            
        ?>
        
    </div>
    
    <br><br>
    
    <div class="sidebarsection">
        <p class="moto-text_system_7">Autores</p>
        
         <?php
            $args = array(
                        //'optioncount' => true, //Mostrar numero de posts
                        'orderby' => 'post_count', //Numero de posts
                        'order' => 'ASC', //Order ascendentes
                        'hide_empty' => false, //Mostar aunque no tengan posts
                        'echo' => false
                    );
         
            $aut = wp_list_authors($args);
            
            $aut = preg_replace('/<\/a> \(([0-9]+)\)/', ' <span class=badge badge-pasific pull-right">\\1</span></a>', $aut);
            
            echo $aut;
        ?>
    </div>
    
    <br><br>
    
    <div class="sidebarsection">
        <p class="moto-text_system_7">Páginas</p>
        <?php
            $args = array(
                        'title_li' => ''
                    );
        
            wp_list_pages($args);
            
            //Investigar 
        ?>
        
    </div>