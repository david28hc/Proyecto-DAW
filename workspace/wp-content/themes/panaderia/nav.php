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
                                                    <a href="#" class="moto-widget-menu-toggle-btn" id="juan"><i class="moto-widget-menu-toggle-btn-icon fa fa-bars"></i></a>

                                                    <ul class="moto-widget-menu-list moto-widget-menu-list_horizontal">

                                                        <li class="moto-widget-menu-item">
                                                            <p><?php $damelink = get_permalink(); ?></p>
                                                            
                                                          
                                                            <a href="<?php echo get_option('home') ?>" data-action="page" class="moto-widget-menu-link moto-widget-menu-link-level-1 moto-link"><?php _e('Home') ?></a>
                                                        </li>

                                                        <li class="moto-widget-menu-item">
                                                            <a href="<?php echo get_page_link(get_page_by_title('blog')->ID) ?>" data-action="page" class="moto-widget-menu-link moto-widget-menu-link-level-1 moto-link 
                                                            <?php
                                                                if(is_home()){
                                                                    echo 'moto-widget-menu-link-active';
                                                                }
                                                            ?>
                                                            "><?php _e('Blog') ?></a>
                                                        </li>

                                                        <li class="moto-widget-menu-item">
                                                            <a href="<?php echo get_page_link(get_page_by_title('products')->ID) ?>" data-action="page" class="moto-widget-menu-link moto-widget-menu-link-level-1 moto-link 
                                                            <?php
                                                                if($damelink == 'https://proyecto-panaderia-soulsilver.c9users.io/nuestros-productos/'){
                                                                    echo 'moto-widget-menu-link-active';
                                                                }
                                                            ?>
                                                            "><?php _e('Nuestros productos') ?></a>
                                                        </li>
                                                        
                                                        <li class="moto-widget-menu-item">
                                                            <a href="<?php echo get_page_link(get_page_by_title('news')->ID) ?>" data-action="page" class="moto-widget-menu-link moto-widget-menu-link-level-1 moto-link 
                                                            <?php
                                                                if($damelink == 'https://proyecto-panaderia-soulsilver.c9users.io/news/'){
                                                                    echo 'moto-widget-menu-link-active';
                                                                }
                                                            ?>
                                                            "><?php _e('Novedades') ?></a>
                                                        </li>
                                                        
                                                        <li class="moto-widget-menu-item">
                                                            <a href="<?php echo get_page_link(get_page_by_title('recipes')->ID) ?>" data-action="page" class="moto-widget-menu-link moto-widget-menu-link-level-1 moto-link 
                                                            <?php
                                                                if($damelink == 'https://proyecto-panaderia-soulsilver.c9users.io/recipes/'){
                                                                    echo 'moto-widget-menu-link-active';
                                                                }
                                                            ?>
                                                            "><?php _e('Recetas') ?></a>
                                                        </li>

                                                        <li class="moto-widget-menu-item">
                                                            <a href="<?php echo get_page_link(get_page_by_title('contact')->ID) ?>" data-action="page" class="moto-widget-menu-link moto-widget-menu-link-level-1 moto-link 
                                                            <?php
                                                                if($damelink == 'https://proyecto-panaderia-soulsilver.c9users.io/contacto/'){
                                                                    echo 'moto-widget-menu-link-active';
                                                                }
                                                            ?>
                                                            "><?php _e('Contacto') ?></a>
                                                        </li>

                                                    </ul>

                                                </div>
                                            </div>
                                            
                                            <div class="idioma">
                                                
                                                <?php  
            
                                                    if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('Idioma Widget')) :
                                                
                                                ?>
                                                
                                                <div class="warning">Sorry</div>
                                                
                                                <?php
                                                    endif;
                                                ?>
                                                
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