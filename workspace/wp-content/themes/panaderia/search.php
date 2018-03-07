<?php

/*
    Template Name: blog
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
        <title><?php my_title(); ?></title>
        <link rel="SHORTCUT ICON" href="../img/favicon-11905e78.ico?_build=1517145726" type="image/vnd.microsoft.icon" />


        <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--<link rel="stylesheet" href="../css/assets.minc0a3.css?_build=1513698342" />-->
        <!--<link rel="stylesheet" href="../css/styles3624.css?_build=1517145724" />-->
        <!--<link rel="stylesheet" href="../css/stylesef09.css?_build=1517141814" id="moto-website-style" />-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



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
                                                        <?php
                                                            if(have_posts){
                                                                //$total = $wp_the_query->post_count;
                                                                $total = $wp_the_query->found_posts;
                                                                
                                                                if($total>1){
                                                                    $result = $total . ' posts encontrados';
                                                                }else{
                                                                    $result = $total . ' post encontrado';
                                                                }
                                                            }else{
                                                                $result = 'Ningun post encontrado';
                                                            }

                                                        ?>
                                                        <p style="text-align: center;" class="moto-text_system_1">Búsqueda: <?php echo esc_html(get_search_query()); ?></p>
                                                        <p style="text-align: center;" class="moto-text_normal"><span class="moto-color5_5"><?php echo $result; ?></span></p>
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







                <div class="moto-widget moto-widget-block moto-spacing-top-large moto-spacing-right-auto moto-spacing-bottom-large moto-spacing-left-auto" data-widget="block" data-spacing="lala" style="">

                    <div class="container-fluid">
                        <div class="row">
                            <div class="moto-cell col-sm-12" data-container="container">

                                <div class="moto-widget moto-widget-row row-fixed" data-widget="row" style="">
                                    <div class="container-fluid">
                                        <div class="row" data-container="container">
                                            
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <center>
                                                    <div class="searchArchives">
                                                        <?php
                                                            get_search_form();
                                                        ?>    
                                                    </div>
                                                </center>
                                            </div>
                                            </div>
                                            
                                            <br><br><br><br>
                                            
                                            <div class="row" data-container="container">
                                            <div class="moto-cell col-sm-12 moto-widget moto-widget-row__column" data-container="container" data-widget="row.column">
                                                <div data-widget-id="wid__blog_post_list__5a6ddd851d8a7" class="moto-widget moto-widget-blog-post_list moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="blog.post_list">
                                                    
                                                    
                                                    <?php
                                                    //Tabla con posts

                                                    global $count;
                                                    //$paged = (get_query_var('paged')) ? get_query_var('paged'):1;
                                                    $args = array(
                                                        'post_type' => 'post',
                                                        'posts_per_page' => 5,
                                                        'paged' => $paged
                                                    );  
                                                
                                                    //$query = new WP_Query($args);
                                                    if(have_posts()):
                                                        ?>
                                                        <table class="table tablaBusqueda">
                                                            <tr>
                                                                <td>Titulo</td>
                                                                <td>Autor</td>
                                                                <td>Publicado</td>
                                                            </tr>
                                                        <?php
                                                        while(have_posts()):the_post();
                                                    ?>
                                                    
                                                    <?php
                                                        get_template_part('content', 'list');
                                                    ?>
                                                        
                                                    
                                                    <?php
                                                         endwhile;
                                                         
                                                         
                                                         
                                                    ?>
                                                        
                                                        </table><center>
                                                        
                                                    <?php
                                                    
                                                        the_posts_pagination(array(
                                                                 'prev_text' => 'Anterior',
                                                                 'next_text' => 'Siguiente',
                                                                 'title_li' => '',
                                                                 'before_page_number' => '<span class="page-item">',
                                                                 'after_page_number' => '</span>'
                                                        ));
                                                        
                                                        endif;
                                                    
                                                    
                                                    ?>
                                                    </center>
                                                    
                                                    


                                                    <!--<div class="moto-widget moto-widget-pagination moto-preset-default clearfix moto-spacing-top-small moto-spacing-bottom-small">-->
                                                    <!--    <ul class="moto-pagination-group moto-pagination-group_pages">-->
                                                    <!--        <li class="moto-pagination-item moto-pagination-item-page">-->
                                                    <!--            <span class="moto-pagination-link moto-pagination-link_active"><span class="moto-pagination-link-text">1</span></span>-->
                                                    <!--        </li>-->
                                                    <!--        <li class="moto-pagination-item moto-pagination-item-page">-->
                                                    <!--            <a href="index4658.html?page=2" class="moto-pagination-link"><span class="moto-pagination-link-text">2</span></a>-->
                                                    <!--        </li>-->
                                                    <!--    </ul>-->
                                                    <!--    <ul class="moto-pagination-group moto-pagination-group-controls moto-pagination-group_right">-->
                                                    <!--        <li class="moto-pagination-item moto-pagination-item-control moto-pagination-item-control_next">-->
                                                    <!--            <a href="index4658.html?page=2" class="moto-pagination-link"><i class="moto-pagination-link-icon moto-pagination-link-text fa fa-angle-right"></i></a>-->
                                                    <!--        </li>-->
                                                    <!--        <li class="moto-pagination-item moto-pagination-item-control moto-pagination-item-control_last">-->
                                                    <!--            <a href="index4658.html?page=2" class="moto-pagination-link"><i class="moto-pagination-link-icon moto-pagination-link-text fa fa-angle-double-right"></i></a>-->
                                                    <!--        </li>-->
                                                    <!--    </ul>-->
                                                    <!--</div>-->
                                                </div>
                                            </div>



<!--  FINAL  ---   SACAR LOS ULTIMOS POSTS  -->
                                            
                                            
                                            


<!--  COMIENZO  ---   SACAR POST RECIENTES  -->



                                            
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

       <?php
        get_footer();
        ?>