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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>




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
                                                        <p style="text-align: center;" class="moto-text_system_1">AUTOR</p>
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
                                            
                                            
                                            
                                            
                                             <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                                 
                                                 <div class="col-md-12 autorfoto">
                                                    <div class="autortwitter"></div>
                                                    <div class="autorfacebook"></div>
                                                </div>
                                                
                                                <div class="col-md-12 autorbio">
                                                    <br><br>
                                                    <?php
                                                        $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
                                                        
                                                        $nickname = $curauth->nickname;
                                                        $rol = get_author_rol($curauth->ID);

                                                        
                                                    ?>
                                                    
                                                    <br><br>
                                                    
                                                    <div class="nick"><?php echo $nickname . ' (' . $rol . ')' ?></div>
                                                    
                                                    <br><br>
                                                    
                                                    <div class="bio">Bio</div>
                                                    <hr>
                                                    <div class="description"><?php echo $curauth->user_description; ?></div>
                                                    
                                                    <br><br><br><br>
                                                    
                                                    
                                                </div>
                                                
                                                
                                                <hr>
                                                <div class="col-md-12 autorposts">
                                                    <div class="bio">Posts del autor</div>
                                                    <hr>
                                                    <?php 
                                                    $args = array(
                                                                'post_per_page' => 10,
                                                                'author' => $curauth->ID,
                                                                //'author_name'
                                                                'post_type' => array('post'),
                                                                'tax_query' => array(array(
                                                                        'taxonomy' => 'post_format',
                                                                        'field' => 'slug',
                                                                        'terms' => array('post-format-quote', 'post-format-link'),
                                                                'operator' => 'NOT IN'
                                                                    ))
                                                            );
                                                            
                                                            $posts_by_author = new WP_Query($args);
                                                            
                                                    if ($posts_by_author->have_posts() ) : while ($posts_by_author->have_posts() ) : $posts_by_author->the_post(); 
                                                    
                                                    ?>
                                                    
                                                    
                                                    
                                                    <li>
                                                        <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>">
                                                        <?php the_title(); ?></a>,
                                                        <?php the_time('d M Y'); ?> in <?php the_category('&');?>
                                                    </li>
                                            
                                                <?php endwhile; else: ?>
                                                    <p><?php _e('Este autor no tiene posts.'); ?></p>
                                            
                                                <?php endif; ?>
                                   
                                                </div>
                                                
                
                
               <section id="about">
        <div class="container wow fadeInUp">
            <div class="row">
                

<!--   http://justintadlock.com/archives/2009/09/10/adding-and-using-custom-user-profile-fields   -->
<?php //echo get_user_meta($curauth->ID , 'skill1_v')[0]  ?>

<canvas id="bar1" height="30" data-skill="<?php echo get_user_meta($author->ID , 'skill1')[0] ?>" data-value="<?php echo get_user_meta($author->ID , 'VSkill1')[0] ?>">
This text is displayed if your browser does not support HTML5 Canvas.
</canvas><br>

                
            </div>
        </div>
        <br><br><br><br>
        
        <div class="bio">Habilidades</div>
        
        <hr>
        <!-- Skill Bars -->
            
            <div class="skillbar clearfix " data-percent="<?php echo get_user_meta($curauth->ID , 'skill1_v')[0] ?>%">
            	<div class="skillbar-title" style="background: #2980b9;"><span>REPOSTERIA</span></div>
            	<div class="skillbar-bar" style="background: #3498db;"></div>
            	<div class="skill-bar-percent"><?php echo get_user_meta($curauth->ID , 'skill1_v')[0] ?>%</div>
            </div> <!-- End Skill Bar -->
            
            <div class="skillbar clearfix " data-percent="<?php echo get_user_meta($curauth->ID , 'skill2_v')[0] ?>%">
            	<div class="skillbar-title" style="background: #2c3e50;"><span>BOLLERIA</span></div>
            	<div class="skillbar-bar" style="background: #2c3e50;"></div>
            	<div class="skill-bar-percent"><?php echo get_user_meta($curauth->ID , 'skill2_v')[0] ?>%</div>
            </div> <!-- End Skill Bar -->
            
            <div class="skillbar clearfix " data-percent="<?php echo get_user_meta($curauth->ID , 'skill3_v')[0] ?>%">
            	<div class="skillbar-title" style="background: #46465e;"><span>PANADERIA</span></div>
            	<div class="skillbar-bar" style="background: #5a68a5;"></div>
            	<div class="skill-bar-percent"><?php echo get_user_meta($curauth->ID , 'skill3_v')[0] ?>%</div>
            </div> <!-- End Skill Bar -->
            
        <script>
            
            $(document).ready(function(){
            	$('.skillbar').each(function(){
            		$(this).find('.skillbar-bar').animate({
            			width:$(this).attr('data-percent')
            		},6000);
            	});
            });
            
        </script>
        
        
        
    </section>
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

        <?php
        get_footer();
        ?>