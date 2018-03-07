<div class="moto-widget moto-widget-row__column moto-cell col-sm-3 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" style="" data-widget="row.column" data-container="container" data-spacing="aaaa">
                                <div data-widget-id="wid__image__5a6ddd9544b54" class="moto-widget moto-widget-image moto-preset-default moto-align-center moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto  " data-widget="image">
                                    <span class="moto-widget-image-link">
    <img class="img-responsive" src="<?php 
                                if(has_post_thumbnail()){
                                    $postImg = get_the_post_thumbnail_url();
                                }else{
                                    $postImg = get_template_directory_uri()."/img/default-image3.png";
                                }
                                echo $postImg ?>" class="moto-widget-image-picture lazyload" data-id="" title="" alt="">
</span>
                                </div>



                                <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="aasa" data-animation="">
                                    <div class="moto-widget-text-content moto-widget-text-editable">
                                        <p class="moto-text_normal" style="text-align: center;"><span class="moto-color4_5"><?php the_time('j-m-Y'); ?></span></p>
                            <p class="moto-text_201" style="text-align: center;"><a href="<?php the_permalink(); ?>">&nbsp;&nbsp;<?php the_title(); ?> </a></p>
                                        <!--<p class="moto-text_system_13">Babka Combo Pack</p>-->
                                        <!--<p class="moto-text_system_7">15.95€</p>-->
                                    </div>
                                    <div class="botonReceta"><div data-widget-id="wid__button__5a6ddd851eddd" class="moto-widget moto-widget-button moto-preset-default moto-align-left moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto " data-widget="button">
                                        <a href="<?php the_permalink(); ?>" data-action="blog.post" class="moto-widget-button-link moto-size-small moto-link"><span class="fa moto-widget-theme-icon"></span> <span class="moto-widget-button-label">Ver Receta</span></a>
                                    </div></div>
                                </div>
                            </div>