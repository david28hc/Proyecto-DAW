<?php

/*
    Template Name: recipes
*/

?>

    <!DOCTYPE html>
    <html lang="en" data-ng-app="website">

    <!-- Mirrored from try.cms-guide.com/site/000/0o/ev/00oxj34k194hev/blog/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 Jan 2018 14:27:05 GMT -->
    <!-- Added by HTTrack -->
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <!-- /Added by HTTrack -->

    <head>


        <!--
ABUSE REPORT HERE : https://support.cms-guide.com/hc/en-us/requests/new
-->


        <meta charset="utf-8">
        <title>Blog</title>
        <link rel="SHORTCUT ICON" href="../img/favicon-11905e78.ico?_build=1517145726" type="image/vnd.microsoft.icon" />


        <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--<link rel="stylesheet" href="../css/assets.minc0a3.css?_build=1513698342" />-->
        <!--<link rel="stylesheet" href="../css/styles3624.css?_build=1517145724" />-->
        <!--<link rel="stylesheet" href="../css/stylesef09.css?_build=1517141814" id="moto-website-style" />-->



        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">




    </head>

    <body class="moto-background">



        <!-- Hook: |Render: website.body.top| -->
        <!-- Google Tag Manager -->
        <!--<noscript><iframe src="http://www.googletagmanager.com/ns.html?id=GTM-PXV336" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>-->
        <script>
            //     (function(w, d, s, l, i) {
            //         w[l] = w[l] || [];
            //         w[l].push({
            //             "gtm.start": new Date().getTime(),
            //             event: "gtm.js"
            //         });
            //         var f = d.getElementsByTagName(s)[0],
            //             j = d.createElement(s),
            //             dl = l != "dataLayer" ? "&l=" + l : "";
            //         j.async = true;
            //         j.src = "../../../../../../../www.googletagmanager.com/gtm5445.html?id=" + i + dl;
            //         f.parentNode.insertBefore(j, f);
            //     })(window, document, "script", "xxxxDataLayer", "GTM-PXV336");

        </script>
        <!-- End Google Tag Manager -->



        <div class="page">
            
            <?php
                get_template_part('nav');
            ?>

            

            <section id="section-content" class="content page-3 moto-section" data-widget="section" data-container="section">
                <div class="moto-widget moto-widget-block moto-spacing-top-large moto-spacing-right-auto moto-spacing-bottom-large moto-spacing-left-auto" data-widget="block" data-spacing="lala" style="background-image:url(<?php echo bloginfo('template_directory'); ?>/img/mt-1190-header-bg.jpg);background-position:top;background-repeat:no-repeat;background-size:cover;" data-bg-image="2017/09/mt-1190-header-bg.html">

                    <div class="container-fluid">
                        <div class="row">
                            <div class="moto-cell col-sm-12" data-container="container">


                                <div class="moto-widget moto-widget-row row-fixed moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-grid-type="sm" data-widget="row" data-spacing="aaaa" style="">

                                    <div class="container-fluid">
                                        <div class="row" data-container="container">


                                            <div class="moto-widget moto-widget-row__column moto-cell col-sm-12 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa">


                                                <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="aaaa" data-animation="">
                                                    <div class="moto-widget-text-content moto-widget-text-editable">
                                                        <p style="text-align: center;" class="moto-text_system_1"><?php _e('RECETAS') ?></p>
                                                    </div>
                                                </div>


                                            </div>



                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                
                <br><br><br><br>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 searchArchives2">
                    <center>
                        <div class="searchArchives">
                            <?php
                                get_search_form();
                            ?>    
                        </div>
                    </center>
                </div>
        
        


                <!--  COMIENZO  ---   SACAR LOS ULTIMOS POSTS  -->



                 
            <div class="moto-widget moto-widget-block moto-spacing-top-large moto-spacing-right-auto moto-spacing-bottom-large moto-spacing-left-auto" data-widget="block" data-spacing="lala" style="">

                <div class="container-fluid">
                    <div class="row">
                        <div class="moto-cell col-sm-12" data-container="container">






                            <div class="moto-widget moto-widget-row row-fixed moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-grid-type="sm" data-widget="row" data-spacing="aaaa" style="">

                                <div class="container-fluid">
                                    <div class="row" data-container="container">
                                        
                                        <div class="col-md-12">
                                        
                                        
                                        
                                        <?php /* ··············· El LOOP ·················· */ 
                        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                        
                        $args = array(
                            'posts_per_page'=>9,
                            'paged' => $paged,
                            'nopaging' => false,
                            'orderby' => 'date',
                            'post_type' => array ('recipe'),
                             
                        );
                        
                        $custom_query = new WP_Query($args);

                        if ($custom_query->have_posts()) : while($custom_query->have_posts()) : $custom_query->the_post(); 
                        
                        

                            get_template_part('content' , 'recipes');


                            endwhile;
                               
                                echo '<div class="col-md-12 text-center bg-pagination">';
                                //echo get_paginate_page_links();
                                echo '</div> ';
                            else:
                                echo '<div class="text-center">';
                                echo 'NOT POST FOUND';
                                echo '</div> ';
                            endif;
                        ?>

                                                    
                <?php
                                                     
                                                       
               the_posts_pagination(array(
                         'prev_text' => 'Anterior',
                         'next_text' => 'Siguiente',
                         'title_li' => '',
                         'before_page_number' => '<span class="page-item">',
                         'after_page_number' => '</span>'
                ));
            

                wp_reset_query();
            ?>



                                        </div>

                                    </div>
                                </div>
                            </div>
                            
                            
                            
                            

                        </div>
                    </div>
                </div>
            </div>
            
                            
                            
                            
                            
                            
                            

        <?php
        get_footer();
        ?>