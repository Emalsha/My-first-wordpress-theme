<?php
/**
 * Template part for displaying blog post
 *
 *
 * @package Wanabima
 * @since 1.0
 * @version 1.0
 * @author Emalsha Rasad
 */

$custom_fields = get_post_custom();

?>

<!--Post -->
<div class="campsite-item d-inline-block" id="<?php the_ID(); ?>">
    <div class="img-container carousel slide carousel-fade campsite-carousel" id="carousel<?php the_ID(); ?>" data-interval="false">

        <div class="carousel-inner campsite-carousel-inner">
            <div class="carousel-item active">
                <?php
                if (has_post_thumbnail()){
                    the_post_thumbnail('wanabima-featured-image', ['class' => 'd-block w-100 campsite-carousel-img']);
                }else{ ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/wanabima%201110x500.png" class="d-block w-100 campsite-carousel-img wp-post-image" alt="wanabima" >
                <?php } ?>
            </div>
            <?php if (MultiPostThumbnails::has_post_thumbnail(get_post_type(),'second-image')){?>
                <div class="carousel-item">
                    <?php
                    if (class_exists('MultiPostThumbnails')) :
                        MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'second-image',null,'post-thumbnail',array('class'=>'d-block w-100 campsite-carousel-img'));
                    endif;
                    ?>
                </div>
            <?php } ?>
            <?php if (MultiPostThumbnails::has_post_thumbnail(get_post_type(),'third-image')){?>
                <div class="carousel-item">
                    <?php
                    if (class_exists('MultiPostThumbnails')) :
                        MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'third-image',null,'post-thumbnail',array('class'=>'d-block w-100 campsite-carousel-img'));
                    endif;
                    ?>
                </div>
            <?php } ?>
            <?php if (MultiPostThumbnails::has_post_thumbnail(get_post_type(),'forth-image')){?>
                <div class="carousel-item">
                    <?php
                    if (class_exists('MultiPostThumbnails')) :
                        MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'forth-image',null,'post-thumbnail',array('class'=>'d-block w-100 campsite-carousel-img'));
                    endif;
                    ?>
                </div>
            <?php } ?>
            <?php if (MultiPostThumbnails::has_post_thumbnail(get_post_type(),'fifth-image')){?>
                <div class="carousel-item">
                    <?php
                    if (class_exists('MultiPostThumbnails')) :
                        MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'fifth-image',null,'post-thumbnail',array('class'=>'d-block w-100 campsite-carousel-img'));
                    endif;
                    ?>
                </div>
            <?php } ?>



        </div>
        <a class="carousel-control-prev" href="#carousel<?php the_ID(); ?>" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel<?php the_ID(); ?>" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

    </div>

    <!--    Post content-->
    <div class="text-center">
        <h6 class="p-1 m-1 h6"><?php echo $custom_fields['sub_title'][0] ? get_the_title():""; ?></h6>
        <h3 class="p-1 m-1 h3"><?php echo $custom_fields['sub_title'][0] ? $custom_fields['sub_title'][0]:get_the_title(); ?></h3>

        <p class="p-1 m-2 lead">
            <?php the_content('Read the rest of this entry &raquo;'); ?>
        </p>

    </div>

    <!--    Social link-->
    <div class="campsite-item-social text-center">
        <div class="p-2 mx-auto h4">
            <!-- Facebook -->
            <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" target="_blank">
                <i class="fa fa-facebook"></i>
            </a>

            <!-- Google+ -->
            <a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" target="_blank">
                <i class="fa fa-google"></i>
            </a>

            <!-- LinkedIn -->
            <a href="https://www.pinterest.com/pin/create/button/?url=https://<?php the_permalink(); ?>&media=<?php ;?>&description=<?php echo get_the_title(); ?>" target="_blank">
                <i class="fa fa-pinterest"></i>
            </a>

            <!-- Twitter -->
            <a href="https://twitter.com/share?url=<?php the_permalink(); ?>&amp;hashtags=wanabima"
               target="_blank">
                <i class="fa fa-twitter"></i>
            </a>
        </div>
    </div>
</div>