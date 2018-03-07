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
                                                        <p style="text-align: center;" class="moto-text_system_1">
                                                            
                                                            <?php
                
                                                                if(is_category()){
                                                                    $title = "Archivos de la categoria: " . single_cat_title('', false);
                                                                }
                                                                elseif(is_tag()){
                                                                    $title = "Archivos del Tag: " . single_tag_title('', false);
                                                                }
                                                                elseif(is_author()){
                                                                    $title = "Archivos del Autor: " . get_the_author();
                                                                }
                                                                elseif(is_year()){
                                                                    $title = "Archivos del Año: ". get_the_date('Y');
                                                                }
                                                                elseif(is_day()){
                                                                    $title = "Archivos del Dia: ". get_the_date('M-Y');
                                                                }
                                                                elseif(is_month()){
                                                                    $title = "Archivos del Mes: ". get_the_date('D-M-Y');
                                                                }
                                                                
                                                                
                                                                if(have_posts){
                                                        //$total = $wp_the_query->post_count;
                                                        $total = $wp_the_query->found_posts;
                                                        
                                                        if($total>1){
                                                            $result = $total . ' posts econtrados';
                                                        }else{
                                                            $result = $total . ' post econtrado';
                                                        }
                                                    }else{
                                                        $result = 'No posts found';
                                                    }
                                                    
                                                    ?>
                                                        
                                                        <p style="text-align: center;" class="titleArch"><?php echo $title; ?></p>
                                                        <p style="text-align: center;" class="moto-text_normal"><span class="moto-color5_5"><?php echo $result; ?></span></p>
                                                        
                                                        
                                                        </p>
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






                <!--  COMIENZO  ---   SACAR LOS ULTIMOS POSTS  -->



                <div class="moto-widget moto-widget-block moto-spacing-top-large moto-spacing-right-auto moto-spacing-bottom-large moto-spacing-left-auto" data-widget="block" data-spacing="lala" style="">

                    <div class="container-fluid">
                        <div class="row">
                            <div class="moto-cell col-sm-12" data-container="container">

                                <div class="moto-widget moto-widget-row row-fixed" data-widget="row" style="">
                                    <div class="container-fluid">
                                        
                                        
                                        <div class="row">
        <div class="container">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <?php
                
                if(is_category()){
                    $title = "Archivos de la categoria: " . single_cat_title('', false);
                }
                elseif(is_tag()){
                    $title = "Archivos del Tag: " . single_tag_title('', false);
                }
                elseif(is_author()){
                    $title = "Archivos del Autor: " . get_the_author();
                }
                elseif(is_year()){
                    $title = "Archivos del Año: ". get_the_date('Y');
                }
                elseif(is_day()){
                    $title = "Archivos del Dia: ". get_the_date('M-Y');
                }
                elseif(is_month()){
                    $title = "Archivos del Mes: ". get_the_date('D-M-Y');
                }
                
                
                if(have_posts){
        //$total = $wp_the_query->post_count;
        $total = $wp_the_query->found_posts;
        
        if($total>1){
            $result = $total . ' posts found';
        }else{
            $result = $total . ' post found';
        }
    }else{
        $result = 'No posts found';
    }

//echo $title;
//echo '<br>';
//echo 'Resultado de busqueda: ' . esc_html(get_search_query());
//echo '<br>';
//echo $result;
?>

<!--<div class="resultadoBusqueda">-->
<!--    <div class="postsEcontrados">-->
        <?php //echo $title; ?>
<!--    </div>-->
<!--    <div class="numeroPosts">-->
        <?php //echo $result; ?>
<!--    </div>-->
<!--</div>-->


<?php

//Mostrar categorias con mas posts

$args = array(
        'title_li' => '',
        'order' => 'DESC',
        'orderby'=> 'count',
        'number' => 10
        );

//wp_list_categories($args);
?>
<br><br>
<div class="divcatPost2">
    <hr>
    <div class="catPost2 catsArch">
        <?php wp_list_categories($args); ?>
    </div>
    <hr>
</div>

<br><br>

 <div class="row">
        <div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

<?php
//Tabla con posts

global $count;
if(have_posts()):
    ?>
    <div class="bio">Posts de la categoria:</div>
    <table class="table">
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
    
    </table>
    </div>
    </div>
    </div>
    <center>
<?php

            the_posts_pagination(array(
             'prev_text' => 'Anterior',
             'next_text' => 'Siguiente',
             'title_li' => null,
             'before_page_number' => '<span class="num_page"> </span>'
             ));
    
    endif;
    ?>
    </center>
            </div>
            <div class="col-md-4">
                <?php
                    get_sidebar();
                ?>
            </div>
        </div>
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