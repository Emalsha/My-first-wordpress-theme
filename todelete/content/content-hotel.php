<?php
/**
 * Template part for displaying accommodation
 *
 *
 * @package Wanabima
 * @since 1.0
 * @version 1.0
 * @author Emalsha Rasad
 */

?>

<?php

$custom_fields = get_post_custom();

?>

<div class="p-3 col-md-6"  id="<?php the_ID(); ?>">
    <div class="border border-dark rounded">
        <div class="row">

            <div class="col-md-6 pr-0 img-container carousel slide carousel-fade" id="carousel<?php the_ID(); ?>" data-interval="false">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <?php if ('' !== get_the_post_thumbnail() && !is_single() && !get_post_gallery()) : ?>
                            <?php the_post_thumbnail('wanabima-featured-image', ['class' => 'd-block w-100 img-fluid ']); ?>
                        <?php endif; ?>
                    </div>
                    <?php if (MultiPostThumbnails::has_post_thumbnail(get_post_type(),'second-image')){?>
                        <div class="carousel-item" style="height: 100%;">
                            <?php
                            if (class_exists('MultiPostThumbnails')) :
                                MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'second-image',null,'post-thumbnail',array('class'=>'d-block w-100 img-fluid'));
                            endif;
                            ?>
                        </div>
                    <?php } ?>
                    <?php if (MultiPostThumbnails::has_post_thumbnail(get_post_type(),'third-image')){?>
                        <div class="carousel-item" style="height: 100%;">
                            <?php
                            if (class_exists('MultiPostThumbnails')) :
                                MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'third-image',null,'post-thumbnail',array('class'=>'d-block w-100 img-fluid'));
                            endif;
                            ?>
                        </div>
                    <?php } ?>
                    <?php if (MultiPostThumbnails::has_post_thumbnail(get_post_type(),'forth-image')){?>
                        <div class="carousel-item" style="height: 100%;">
                            <?php
                            if (class_exists('MultiPostThumbnails')) :
                                MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'forth-image',null,'post-thumbnail',array('class'=>'d-block w-100 img-fluid'));
                            endif;
                            ?>
                        </div>
                    <?php } ?>
                    <?php if (MultiPostThumbnails::has_post_thumbnail(get_post_type(),'fifth-image')){?>
                        <div class="carousel-item" style="height: 100%;">
                            <?php
                            if (class_exists('MultiPostThumbnails')) :
                                MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'fifth-image',null,'post-thumbnail',array('class'=>'d-block w-100 img-fluid'));
                            endif;
                            ?>
                        </div>
                    <?php } ?>

                </div>
                <a class="carousel-control-prev" style="left: auto" href="#carousel<?php the_ID(); ?>" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel<?php the_ID(); ?>" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <div class="col-md-6 p-3">
                <div class="float-right hotel-content">
                    <h3 class="card-title"><?php echo get_the_title(); ?></h3>
                    <h5 class="card-title">Wanabima Accommodation</h5>
                    <?php the_content(); ?>
                </div>
            </div>

        </div>
    </div>
</div>
