<li class="moto-blog-posts-list-item">
    <article>
        <div class="moto-widget moto-widget-row" data-widget="row">
            <div class="container-fluid">
                <div class="row">
                    <div class="moto-cell col-sm-12" data-container="container">
                        <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto" data-preset="default">
                            <div class="moto-widget-text-content moto-widget-text-editable">
                                <h2 class="moto-text_system_7"><i class="fa fa-fire" aria-hidden="true"><a href="<?php the_permalink(); ?>">&nbsp;&nbsp;<?php the_title(); echo '<br><br>'?> </a></i></h2>
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
                                <img class="img-responsive" src="<?php 
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