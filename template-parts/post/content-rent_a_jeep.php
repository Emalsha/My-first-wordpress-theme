<?php
/**
 * Template part for displaying vehicle
 *
 *
 * @package Wanabima
 * @since 1.0
 * @version 1.0
 * @author Emalsha Rasad
 */

?>

<div class="product row" id="<?php the_ID(); ?>">

    <?php if ('' !== get_the_post_thumbnail() && !is_single() && !get_post_gallery()) : ?>

        <div class="col-lg-4 col-md-6 col-sm-12 img-container carousel slide carousel-fade" id="carousel<?php the_ID(); ?>" data-interval="5000" data-ride="carousel">

            <div class="carousel-inner" style="height: 100%;">
                <div class="carousel-item active" style="height: 100%;">
                    <?php the_post_thumbnail('wanabima-featured-image'); ?>
                </div>

                <?php if (MultiPostThumbnails::has_post_thumbnail(get_post_type(),'second-image')){?>
                    <div class="carousel-item" style="height: 100%;">
                        <?php
                        if (class_exists('MultiPostThumbnails')) :
                            MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'second-image',null,'post-thumbnail',array('class'=>'d-block w-100 campsite-carousel-img'));
                        endif;
                        ?>
                    </div>
                <?php } ?>
                <?php if (MultiPostThumbnails::has_post_thumbnail(get_post_type(),'third-image')){?>
                    <div class="carousel-item" style="height: 100%;">
                        <?php
                        if (class_exists('MultiPostThumbnails')) :
                            MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'third-image',null,'post-thumbnail',array('class'=>'d-block w-100 campsite-carousel-img'));
                        endif;
                        ?>
                    </div>
                <?php } ?>
                <?php if (MultiPostThumbnails::has_post_thumbnail(get_post_type(),'forth-image')){?>
                    <div class="carousel-item" style="height: 100%;">
                        <?php
                        if (class_exists('MultiPostThumbnails')) :
                            MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'forth-image',null,'post-thumbnail',array('class'=>'d-block w-100 campsite-carousel-img'));
                        endif;
                        ?>
                    </div>
                <?php } ?>
                <?php if (MultiPostThumbnails::has_post_thumbnail(get_post_type(),'fifth-image')){?>
                    <div class="carousel-item" style="height: 100%;">
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


    <?php endif; ?>

    <div class="col-lg-8 col-md-6 col-sm-12">
        <div class="product-content">
            <h4><?php echo get_the_title(); ?></h4>

            <div class="row">
                <div class="col-lg-9 col-md-12 product-content-left">
                    <div class="product-content-p">
                        <?php the_content('Read the rest of this entry &raquo;'); ?>
                    </div>
                    <?php

                    $custom_fields = get_post_custom();
                    foreach ($custom_fields as $key => $value) {
                        if ($key === 'Seating Capacity' || $key === 'Snorkeled' || $key === 'Luggage Capacity' || $key === 'AC' || $key === 'Hood' || $key === 'Hood Rack' || $key === 'Transmission' || $key === 'Trailer') {
                            //echo $key . " => " . $value[0] . "<br />"; ?>
                            <div class="col-lg-6 col-md-12 float-left">
                                <label class="name-label" id=""><?php echo $key; ?> :</label>
                                <label class="col-form-label"><?php echo $value[0];?></label>
                            </div>
                        <?php }
                    }
                    ?>


                </div>

                <div class="col-lg-3 col-md-12 float-right buttons text-center product-content-right">
                    <div>
                        <label for="price" class="price-label">PER DAY</label>
                    </div>
                    <div>
                        <p class="badge badge-light price-value" id="price">$<?php echo $custom_fields['PRICE'][0] ?></p>
                    </div>
                    <div class="">
                        <?php $getURL = get_home_url()."/inquiry?id=".get_the_title();?>
                        <a class="btn btn-outline-wanabima product-content-btn" href="<?php echo $getURL;?>">Inquire</a>
                    </div>
                    <div>
                        <label for="" class="button-label">CALL US FOR <br> PERSONALIZED <br>
                            RATES</label>
                    </div>
                </div>
            </div>
            <div class="product-content-footnote-container">
                <p class="product-content-footnote">Additional services, camping / adventure gear will be provided on demand.</p>
            </div>

        </div>
    </div>
</div>
