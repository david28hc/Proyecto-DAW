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

            <header id="section-header" class="header moto-section" data-widget="section" data-container="section">
                <div class="moto-widget moto-widget-block moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto moto-bg-color5_5" data-widget="block" data-spacing="aaaa" style="" data-moto-sticky="{}">

                    <div class="container-fluid">
                        <div class="row">
                            <div class="moto-cell col-sm-12" data-container="container">

                                <div data-widget-id="wid__spacer__5a6ddd8516f9d" class="moto-widget moto-widget-spacer moto-preset-default moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto " data-widget="spacer" data-preset="default" data-spacing="saaa" data-visible-on="mobile-v">
                                    <div class="moto-widget-spacer-block" style="height:10px"></div>
                                </div>
                                <div class="moto-widget moto-widget-row row-fixed moto-justify-content_center moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-grid-type="sm" data-widget="row" data-spacing="aaaa" style="">

                                    <div class="container-fluid">
                                        <div class="row" data-container="container">


                                            <div class="moto-widget moto-widget-row__column moto-cell col-sm-2 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa">

                                                <div data-widget-id="wid__image__5a6ddd851739e" class="moto-widget moto-widget-image moto-preset-default moto-align-center_mobile-h moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto  " data-widget="image">
                                                    <a class="moto-widget-image-link moto-link" href="<?php echo get_option('home') ?>" data-action="page">
                <img src="<?php echo bloginfo('template_directory'); ?>/img/logo2.png" class="moto-widget-image-picture lazyload" data-id="175" title="" alt="">
            </a>
                                                </div>
                                            </div>
                                            <div class="moto-widget moto-widget-row__column moto-cell col-sm-10 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa">

                                                <div data-widget-id="wid__menu__5a6ddd85182ec" class="moto-widget moto-widget-menu moto-preset-3 moto-align-right moto-align-center_mobile-h moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto" data-preset="3" data-widget="menu">
                                                    <a href="#" class="moto-widget-menu-toggle-btn"><i class="moto-widget-menu-toggle-btn-icon fa fa-bars"></i></a>

                                                    <ul class="moto-widget-menu-list moto-widget-menu-list_horizontal">

                                                        <li class="moto-widget-menu-item">
                                                            <a href="<?php echo get_option('home') ?>" data-action="page" class="moto-widget-menu-link moto-widget-menu-link-level-1 moto-link">Home</a>
                                                        </li>

                                                        <li class="moto-widget-menu-item">
                                                            <a href="<?php echo get_page_link(get_page_by_title('blog')->ID) ?>" data-action="page" class="moto-widget-menu-link moto-widget-menu-link-level-1 moto-widget-menu-link-active moto-link">Blog</a>
                                                        </li>

                                                        <li class="moto-widget-menu-item">
                                                            <a href="<?php echo get_page_link(get_page_by_title('products')->ID) ?>" data-action="page" class="moto-widget-menu-link moto-widget-menu-link-level-1 moto-link">Nuestros productos</a>
                                                        </li>

                                                        <li class="moto-widget-menu-item">
                                                            <a href="<?php echo get_page_link(get_page_by_title('contact')->ID) ?>" data-action="page" class="moto-widget-menu-link moto-widget-menu-link-level-1 moto-link">Contacto</a>
                                                        </li>

                                                    </ul>

                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                </div>
                                <div data-widget-id="wid__spacer__5a6ddd851af3f" class="moto-widget moto-widget-spacer moto-preset-default moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto " data-widget="spacer" data-preset="default" data-spacing="saaa" data-visible-on="mobile-v">
                                    <div class="moto-widget-spacer-block" style="height:10px"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

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
                                                        <p style="text-align: center;" class="moto-text_system_1">BLOG</p>
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
                                        <div class="row" data-container="container">
                                            <div class="moto-cell col-sm-9 moto-widget moto-widget-row__column" data-container="container" data-widget="row.column">
                                                <div data-widget-id="wid__blog_post_list__5a6ddd851d8a7" class="moto-widget moto-widget-blog-post_list moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="blog.post_list">
                                                    <ul class="moto-blog-posts-list">



                                                        <?php
                                                        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                                                        
                                                            $args=array(
                                                                'posts_per_page'=>2,
                                                                'post__not_in' => array($dest_ID),
                                                                'paged'          => $paged,
                                                                'nopaging' => false,
                                                            );



                                                            $custom_query = new WP_Query($args);

                                                            if($wp_query->have_posts()):while($wp_query->have_posts()):$wp_query->the_post();
                                                        ?>



                                                            <li class="moto-blog-posts-list-item">
                                                                <article>
                                                                    <div class="moto-widget moto-widget-row" data-widget="row">
                                                                        <div class="container-fluid">
                                                                            <div class="row">
                                                                                <div class="moto-cell col-sm-12" data-container="container">
                                                                                    <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto" data-preset="default">
                                                                                        <div class="moto-widget-text-content moto-widget-text-editable">
                                                                                            <h2 class="moto-text_system_7"><a href="<?php the_permalink(); ?>"><?php the_title(); echo '<br><br>'?> </a></h2>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="moto-widget moto-widget-row" data-widget="row">
                                                                                        <div class="container-fluid">
                                                                                            <div class="row">
                                                                                                <div class="moto-cell col-sm-12" data-container="container">
                                                                                                    <div data-widget-id="wid__blog_post_published_on__5a6ddd851e1a1" class="moto-widget moto-widget-blog-post_published_on moto-preset-default moto-align-left moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto " data-preset="default" data-widget="blog.post_published_on" data-spacing="aasa">
                                                                                                        <div class="moto-text_system_11">
                                                                                                            <span class="fa fa-calendar moto-widget-blog-post_published_on-icon"></span><span class="moto-widget-blog-post_published_on-date"><?php the_time('j-m-Y'); ?></span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div data-widget-id="wid__image__5a6ddd851e3fa" class="moto-widget moto-widget-image moto-preset-default  moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto  " data-widget="image">
                                                                                        <a class="moto-widget-image-link moto-link" href="the-most-common-mistakes-when-managing-personal-finances/index.html" data-action="blog.post">
                                                                                            <img src="<?php 
                                                                                                        if(has_post_thumbnail()){
                                                                                                            $postImg = get_the_post_thumbnail_url();
                                                                                                        }else{
                                                                                                            $postImg = get_template_directory_uri()."/img/default-image.png";
                                                                                                        }
                                                                                                        echo $postImg ?>" class="moto-widget-image-picture lazyload" data-id="" title="" alt="">
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="moto-blog-post-content moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto">
                                                                                        <div class="moto-text_normal">
                                                                                            <?php the_excerpt(); ?>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div data-widget-id="wid__button__5a6ddd851eddd" class="moto-widget moto-widget-button moto-preset-default moto-align-left moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto " data-widget="button">
                                                                                        <a href="<?php the_permalink(); ?>" data-action="blog.post" class="moto-widget-button-link moto-size-small moto-link"><span class="fa moto-widget-theme-icon"></span> <span class="moto-widget-button-label">LEER MÁS</span></a>
                                                                                    </div>
                                                                                    <div class="moto-widget moto-widget-divider moto-preset-2 moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto moto-align-center" data-divider-type="horizontal" data-preset="2">
                                                                                        <hr class="moto-widget-divider-line">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </article>
                                                            </li>


                                                            <?php
                                                                endwhile;endif;
                                                                
                                                                ?>

                                                    </ul>
                                                    
                                                    <?php
                                                     
                                                        // the_posts_pagination(array(
                                                        //     'prev_text' => 'Anterior',
                                                        //     'next_text' => 'Siguiente',
                                                        //     'before_page_number' => '<span class="num_page"></span>'
                                                        // ));
                                                       
                                                        
                                                       echo get_paginate_page_links();
                                                    
	
                                                       

                                                        wp_reset_query();
                                                    ?>
                                                    
                                                    
                                                    

                                                </div>
                                            </div>



<!--  FINAL  ---   SACAR LOS ULTIMOS POSTS  -->
                                            
                                            
                                            


<!--  COMIENZO  ---   SACAR POST RECIENTES  -->



                                            <div class="moto-cell col-sm-3 moto-widget moto-widget-row__column" data-container="container" data-widget="row.column">
                                                <div data-widget-id="wid__blog_recent_posts__5a6ddd8521e63" class="moto-widget moto-widget-blog-recent_posts moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto " data-widget="blog.recent_posts">
                                                    <div class="moto-widget-blog-recent_posts-title">
                                                        <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto" data-preset="default" data-spacing="aasa">
                                                            <div class="moto-widget-text-content moto-widget-text-editable">
                                                                <!--<p class="moto-text_system_7">POSTS RECIENTES</p>-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                    
                                                    <?php
                                                        get_sidebar();
                                                    ?>




                                                     <!--<ul class="moto-widget-blog-recent_posts-list">->

                                                        <!--POSTS RECIENTES-->

                                                        <?php
                                                            // $args=array(
                                                            //     'posts_per_page'=>5,
                                                            //     'tax_query' => array(
                                                            //                     array(
                                                            //                         'taxonomy' => 'post_format',
                                                            //                         'field' => 'slug',
                                                            //                         'terms' => array('post-format-link', 'post-format-quote'),
                                                            //                         'operator' => 'NOT IN'
                                                            //                         )
                                                            //                         ),
                                                            // );

                                                            // $custom_query = new WP_Query($args);

                                                            // if($custom_query->have_posts()):while($custom_query->have_posts()):$custom_query->the_post();
                                                        ?>

<!--Llamamos a content que contiene la plantilla para mostrar los posts recientes-->
                                                        <?php
                                                            //get_template_part("content", get_post_format());
                                                        ?>


                                                        <?php
                                                            //$dest_ID = $post -> ID;
                                                        ?>
                                                        <?php
                                                           // endwhile;endif;
                                                            //wp_reset_postdata();
                                                        ?>

                                                     <!--</ul>
                                                    
                                                </div>
                                            </div>->




<!--  FINAL  ---   SACAR POST RECIENTES  -->





                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <footer id="section-footer" class="footer moto-section" data-widget="section" data-container="section" moto-sticky="{mode:'smallHeight', direction:'bottom'}">
            <div class="moto-widget moto-widget-block moto-bg-color_custom1 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="block" data-spacing="aaaa" style="" data-draggable-disabled="">

                <div class="container-fluid">
                    <div class="row">
                        <div class="moto-cell col-sm-12" data-container="container">

                            <div data-widget-id="wid__spacer__5a6ddd8522c48" class="moto-widget moto-widget-spacer moto-preset-default moto-spacing-top-medium moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto " data-widget="spacer" data-preset="default" data-spacing="masa" data-visible-on="mobile-v">
                                <div class="moto-widget-spacer-block" style="height:20px"></div>
                            </div>
                            <div class="moto-widget moto-widget-row row-fixed moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-grid-type="sm" data-widget="row" data-spacing="aaaa" style="" data-draggable-disabled="">

                                <div class="container-fluid">
                                    <div class="row" data-container="container">


                                        <div class="moto-widget moto-widget-row__column moto-cell col-sm-12 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa">

                                            <div data-widget-id="wid__image__5a6ddd8522dac" class="moto-widget moto-widget-image moto-preset-default moto-align-center moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto  " data-widget="image">
                                                <a class="moto-widget-image-link moto-link" href="../index.html" data-action="page">
                <img src="<?php echo bloginfo('template_directory'); ?>/img/logo.png" class="moto-widget-image-picture lazyload" data-id="145" title="" alt="">
            </a>
                                            </div>
                                            <div data-widget-id="wid__social_links__5a6ddd8523202" class="moto-widget moto-widget-social-links moto-preset-2 moto-align-center moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto  " data-widget="social_links" data-preset="2">
                                                <ul class="moto-widget-social-links-list">
                                                    <li class="moto-widget-social-links-item">
                                                        <a href="#" class="moto-widget-social-links-link moto-widget-social-links-link_facebook" data-provider="facebook"></a>
                                                    </li>
                                                    <li class="moto-widget-social-links-item">
                                                        <a href="#" class="moto-widget-social-links-link moto-widget-social-links-link_twitter" data-provider="twitter"></a>
                                                    </li>
                                                    <li class="moto-widget-social-links-item">
                                                        <a href="#" class="moto-widget-social-links-link moto-widget-social-links-link_googleplus" data-provider="googleplus"></a>
                                                    </li>
                                                    <li class="moto-widget-social-links-item">
                                                        <a href="#" class="moto-widget-social-links-link moto-widget-social-links-link_linkedin" data-provider="linkedin"></a>
                                                    </li>
                                                    <li class="moto-widget-social-links-item">
                                                        <a href="#" class="moto-widget-social-links-link moto-widget-social-links-link_instagram" data-provider="instagram"></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="aaaa" data-animation="" data-draggable-disabled="">
                                                <div class="moto-widget-text-content moto-widget-text-editable">
                                                    <p style="text-align: center;" class="moto-text_system_10">© 2017 All Rights Reserved <a href="../terms-of-use/index.html" data-action="page" data-id="20" class="moto-link">Terms of Use</a> and <a data-action="page" data-id="18" class="moto-link" href="../privacy-policy/index.html">Privacy Policy</a>.&nbsp;Designed by&nbsp;<a target="_self" rel="nofollow" data-action="url" class="moto-link" href="https://motocms.com/">MotoCMS.com</a></p>
                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                </div>
                            </div>
                            <div data-widget-id="wid__spacer__5a6ddd8523985" class="moto-widget moto-widget-spacer moto-preset-default moto-spacing-top-medium moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto " data-widget="spacer" data-preset="default" data-spacing="masa" data-visible-on="mobile-v">
                                <div class="moto-widget-spacer-block" style="height:20px"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <div data-moto-back-to-top-button class="moto-back-to-top-button"></div>
        <!--<script src="../js/website.assets.minde43.js?_build=1513698379" type="text/javascript" data-cfasync="false"></script>-->
        <script type="text/javascript" data-cfasync="false">
            var websiteConfig = websiteConfig || {};
            websiteConfig.address = '../index.html';
            websiteConfig.apiUrl = '../api.json';
            websiteConfig.preferredLocale = 'en_US';
            websiteConfig.preferredLanguage = websiteConfig.preferredLocale.substring(0, 2);
            websiteConfig.back_to_top_button = {
                "enabled": true,
                "topOffset": 300,
                "animationTime": 500
            };
            websiteConfig.lazy_loading = {
                "enabled": true
            };
            angular.module('website.plugins', []);

        </script>
        <!--<script src="../js/website.min6cc0.js?_build=1513698373" type="text/javascript" data-cfasync="false"></script>-->



    </body>

    <!-- Mirrored from try.cms-guide.com/site/000/0o/ev/00oxj34k194hev/blog/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 Jan 2018 14:27:17 GMT -->

    </html>
