<?php

/*
    Template Name: onepost
*/

?>

<!DOCTYPE html>
<html lang="en" data-ng-app="website">

<!-- Mirrored from try.cms-guide.com/site/000/0o/ev/00oxj34k194hev/blog/the-most-common-mistakes-when-managing-personal-finances/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 Jan 2018 14:27:48 GMT -->
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


    <link rel="canonical" href="index.html" />
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
    <noscript><iframe src="http://www.googletagmanager.com/ns.html?id=GTM-PXV336" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                "gtm.start": new Date().getTime(),
                event: "gtm.js"
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != "dataLayer" ? "&l=" + l : "";
            j.async = true;
            j.src = "../../../../../../../../www.googletagmanager.com/gtm5445.html?id=" + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, "script", "xxxxDataLayer", "GTM-PXV336");

    </script>
    <!-- End Google Tag Manager -->



    <div class="page">

        <?php
                get_template_part('nav');
            ?>
        
        <?php
            $post_id = $post->ID;
            
            //Devuelve lista de objetos con categorias
                    $cats = get_the_category();
                    //var_dump($cats);
                    //Creamos un array y un foreach para recorrerlos
                    $catid = array();
                    foreach($cats as $cat){
                        $catid[]=$cat->term_id;
                    }
        ?>

        <!-- With dynamic template -->
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
                                                <p style="text-align: center;" class="moto-text_system_1"><?php
                                                
                                                // $args = array(
                                                //     //'title_li' => '',
                                                //     'limit' => 1
                                                // );
                                                
                                                // the_category(' / ');
                                                
                                                $category = get_the_category();
                                                echo $category[0]->cat_name;
                                                
                                                $cat1 = $category[0]->cat_name;
                                                $cat2 = $category[1]->cat_name;
                                                
                                                if($cat1 == null){
                                                    echo 'Entrada';
                                                }
                                                
                                                if($cat2 == null){
                                                    
                                                }else{
                                                    echo ' / ';
                                                }
                                                echo $category[1]->cat_name;
                                                
                                                ?>
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
        <div class="moto-widget moto-widget-block moto-spacing-top-large moto-spacing-right-auto moto-spacing-bottom-large moto-spacing-left-auto" data-widget="block" data-spacing="lala" style="">

            <div class="container-fluid">
                <div class="row">
                    <div class="moto-cell col-sm-12" data-container="container">

                        <div class="moto-widget moto-widget-row row-fixed" data-widget="row" style="">
                            <div class="container-fluid">
                                <div class="row" data-container="container">
                                    <div class="moto-cell col-sm-9 moto-widget moto-widget-row__column" data-container="container" data-widget="row.column">
                                        <div data-widget-id="wid__blog_post_name__5a6dddba2b6b3" class="moto-widget moto-widget-blog-post_name moto-preset-default moto-align-left moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto  " data-preset="default" data-widget="blog.post_name">
                                            <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="aaaa">
                                                <div class="moto-widget-text-content moto-widget-text-editable">
                                                    <h1 class="moto-text_system_7"><a><?php the_title();?></a></h1>
                                                </div>
                                            </div>
                                        </div>
                                        <div data-grid-type="sm" class="moto-widget moto-widget-row row-gutter-0" data-widget="row">
                                            <div class="container-fluid">
                                                <!--<div class="row" data-container="container">-->
                                                    <!--<div class="moto-cell col-sm-3 moto-widget moto-widget-row__column" data-container="container" data-widget="row.column" style="">-->
                                                        <!--<div data-widget-id="wid__blog_post_published_on__5a6dddba2bb23" class="moto-widget moto-widget-blog-post_published_on moto-preset-default moto-align-left moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto " data-preset="default" data-widget="blog.post_published_on" data-spacing="aasa">-->
                                                            <!--<div class="moto-text_system_11">-->
                                                                <!--<span class="fa fa-calendar moto-widget-blog-post_published_on-icon"></span><span class="moto-widget-blog-post_published_on-date"><?php //the_time('j-m-Y');?></span>-->
                                                            <!--</div>-->
                                                        <!--</div>-->
                                                    <!--</div>-->
                                                <!--    <div class="moto-cell col-sm-9 moto-widget moto-widget-row__column" data-container="container" data-widget="row.column" style="">-->
                                                <!--        <div data-widget-id="wid__blog_post_author__5a6dddba2bf5d" class="moto-widget moto-widget-blog-post-author moto-preset-default moto-align-left moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto " data-widget="blog.post_author" data-preset="default">-->
                                                <!--            <div class="moto-text_system_11">-->
                                                                <!--<span class="fa fa-user moto-widget-blog-post-author-icon"></span><span class="moto-widget-blog-post-author-text"><?php //echo get_the_author_posts_link(); ?></span>-->
                                                <!--            </div>-->
                                                <!--        </div>-->
                                                <!--    </div>-->
                                                <!--</div>-->
                                            </div>
                                        </div>
                                        <!--<div data-widget-id="wid__spacer__5a6dddba2c416" class="moto-widget moto-widget-spacer moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto " data-widget="spacer" data-preset="default" data-spacing="aaaa" data-visible-on="mobile-v">-->
                                        <!--    <div class="moto-widget-spacer-block" style="height:10px"></div>-->
                                        <!--</div>-->
                                        
                                        
                                        <!--<div data-widget-id="wid__social_buttons__5a6dddba2c872" class="moto-widget moto-widget-social-buttons moto-preset-default moto-align-left moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto " data-widget="social_buttons" data-preset="default" data-spacing="aasa">-->
                                        <!--    <ul class="social-buttons-list">-->
                                        <!--        <li class="social-button" data-name="facebook_share" data-provider="facebook">-->
                                        <!--            <div class="fb-share-button" data-href="http://try.cms-guide.com/site/000/0o/ev/00oxj34k194hev/blog/the-most-common-mistakes-when-managing-personal-finances/" data-layout="button_count" moto-dependency-require="facebook"></div>-->
                                        <!--        </li>-->
                                        <!--        <li class="social-button" data-name="twitter_tweet" data-provider="twitter"><a href="index.html" class="twitter-share-button" moto-dependency-require="twitter"></a></li>-->
                                        <!--        <li class="social-button" data-name="google_share" data-provider="google_plus">-->
                                        <!--            <div class="g-plus" data-action="share" data-annotation="bubble" data-href="http://try.cms-guide.com/site/000/0o/ev/00oxj34k194hev/blog/the-most-common-mistakes-when-managing-personal-finances/" moto-dependency-require="google_plus"></div>-->
                                        <!--        </li>-->
                                        <!--        <li class="social-button" data-name="linkedIn_share" data-provider="linkedin"><span type="IN/Share" data-url="http://try.cms-guide.com/site/000/0o/ev/00oxj34k194hev/blog/the-most-common-mistakes-when-managing-personal-finances/" data-counter="right" moto-dependency-require="linkedin"></span></li>-->
                                        <!--    </ul>-->
                                        <!--</div>-->
                                        
                                        
                                        <div data-widget-id="wid__spacer__5a6dddba2ca5a" class="moto-widget moto-widget-spacer moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto " data-widget="spacer" data-preset="default" data-spacing="aaaa" data-visible-on="mobile-v">
                                            <div class="moto-widget-spacer-block" style="height:10px"></div>
                                        </div>
                                        <div data-widget-id="wid__blog_post_content__5a6dddba2cdbb" class="moto-widget moto-widget-blog-post_content moto-preset-default  moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto" data-widget="blog.post_content">

                                            <section id="section-content" class="content page-25 moto-section" data-widget="section" data-container="section">
                                                <div class="moto-widget moto-widget-row" data-widget="row" data-draggable-disabled="">
                                                    <div class="container-fluid">
                                                        <div class="row" data-container="container">
                                                            <div class="moto-cell col-sm-12 moto-widget moto-widget-row__column" data-container="container" data-widget="row.column">
                                                                <div data-widget-id="wid__image__5a6dddba2d04d" class="moto-widget moto-widget-image moto-preset-default moto-align-center moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto  " data-widget="image">
                                                                    <span class="moto-widget-image-link">
                <img data-src="/site/000/0o/ev/00oxj34k194hev/mt-content/uploads/2017/09/mt-1190-blog-img01.jpg" class="moto-widget-image-picture lazyload" data-id="212" title="" alt="">
            </span>
                                                                </div>
                                                                <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-large moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="sala" data-draggable-disabled="">
                                                                    <div class="moto-widget-text-content moto-widget-text-editable">
                                                                        <div class="moto-text_normal"><?php the_post();
                    the_content(); ?></div>
                                                                        
                                                                    </div>
                                                                    <div class="etiquetas col-sm-4">
                                                                    <?php
                                                                        the_tags();
                                                                    ?>
                                                                    </div>
                                                                    <div class="etiquetas col-sm-4">
                                                                    <?php
                                                                        echo 'Autor: ' . get_the_author_posts_link();
                                                                    ?>
                                                                    </div>
                                                                    <div class="etiquetas col-sm-4">
                                                                        <span class="fa fa-calendar moto-widget-blog-post_published_on-icon">&nbsp;&nbsp;</span><span class="moto-widget-blog-post_published_on-date"><?php the_time('j-m-Y'); ?></span>
                                                                    </div>
                                                                </div>
                                                                
                                                            </div>
                                                            
                                                        </div>
                                                        
                                                    </div>
                                                    
                                                </div>
                                                
                                            </section>

                                        </div>
                                        
                                        
                                        <?php comments_template(); ?>
                                    </div>
                                    
                                    
                                    
                                    
                                    
<!--  COMIENZO  ---   SACAR POST RECIENTES  -->



                                            <div class="moto-cell col-sm-3 moto-widget moto-widget-row__column" data-container="container" data-widget="row.column">
                                                <div data-widget-id="wid__blog_recent_posts__5a6ddd8521e63" class="moto-widget moto-widget-blog-recent_posts moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto " data-widget="blog.recent_posts">
                                                    <div class="moto-widget-blog-recent_posts-title">
                                                        <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto" data-preset="default" data-spacing="aasa">
                                                            <div class="moto-widget-text-content moto-widget-text-editable">
                                                                <p class="moto-text_system_7">POSTS RELACIONADOS</p>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <ul class="moto-widget-blog-recent_posts-list">



                                                        <!--POSTS RECIENTES-->


                                                        <?php
                                                            $args=array(
                                                                'posts_per_page'=>3,    
                                                                 'category__in'=> $catid,
                                                                 'post__not_in' => array($post_id)
                                                            );

                                                            $custom_query = new WP_Query($args);

                                                            if($custom_query->have_posts()):while($custom_query->have_posts()):$custom_query->the_post();
                                                        ?>



<!--Llamamos a content que contiene la plantilla para mostrar los posts recientes-->
                                                        <?php
                                                            get_template_part("content", 'relacionados');
                                                            
                                                            
                                                        ?>
                                                        


                                                        <?php
                                                            $dest_ID = $post -> ID;
                                                        ?>
                                                        <?php
                                                            endwhile;
                                                            else:
                                                        ?>        
                                                            <h2 class="blog-post-title moto-text_normal">
                                                                <a href="">No existen posts relacionados</a>
                                                            </h2>
                                                        <?php
                                                            endif;
                                                            wp_reset_postdata();
                                                        ?>





                                                    </ul>

                                                </div>
                                            </div>




<!--  FINAL  ---   SACAR POST RECIENTES  -->
                                    
                                    
                                    
                                    
                                    
                                    
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