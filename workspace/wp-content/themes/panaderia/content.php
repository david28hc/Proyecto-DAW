<li class="moto-widget-blog-recent_posts-item">
                                                        <div class="moto-widget-blog-recent_posts-item-preview">
                                                            <div class="moto-widget moto-widget-image moto-preset-default moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto" data-preset="default" data-spacing="sasa">
                                                                <a href="the-most-common-mistakes-when-managing-personal-finances/index.html" class="moto-widget-image-link moto-link">
                                                                    <img src="<?php 
                                                            if(has_post_thumbnail()){
                                                                $postImg = get_the_post_thumbnail_url();
                                                            }else{
                                                                $postImg = get_template_directory_uri()."/img/default-image.png";
                                                            }
                                                            echo $postImg ?>" class="moto-widget-image-picture">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="moto-widget-blog-recent_posts-item-title">
                                                            <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto" data-preset="default" data-spacing="aasa">
                                                                <div class="moto-widget-text-content moto-widget-text-editable">
                                                                    <h2 class="blog-post-title moto-text_normal">
                                                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a>
                                                                    </h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>