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

<div class="product" id="<?php the_ID(); ?>">

    <?php if ('' !== get_the_post_thumbnail() && !is_single() && !get_post_gallery()) : ?>

        <div class="col-md-4 img-container">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('wanabima-featured-image'); ?>
            </a>
        </div>


    <?php endif; ?>
    <!--    <div class="col-md-4 img-container">-->
    <!--        <img src="img/jeep/jeep2.jpg">-->
    <!--    </div>-->
    <div class="col-md-8 ">
        <div class="product-content">
            <h4><?php echo get_the_title(); ?></h4>

            <div class="row">
                <div class="col-md-9 product-content-left">
                    <div class="product-content-p">
                        <?php the_content('Read the rest of this entry &raquo;'); ?>
                    </div>
                    <?php

                    $custom_fields = get_post_custom();
                    //$my_custom_field = $custom_fields['Color'];
                    foreach ($custom_fields as $key => $value) {
                        if ($key !== '_edit_last' && $key !== '_edit_lock' && $key !== '_thumbnail_id' && $key !== 'PRICE') {
                            //echo $key . " => " . $value[0] . "<br />"; ?>
                            <div class="col-md-6 float-left">
                                <label class="name-label" id=""><?php echo $key; ?> :</label>
                                <label class="col-form-label"><?php echo $value[0];?></label>
                            </div>
                        <?php }
                    }
                    ?>
                </div>

                <div class="col-md-3 float-right buttons text-center product-content-right">
                    <div>
                        <label for="price" class="price-label">PER DAY</label>
                    </div>
                    <div>
                        <p class="badge badge-light price-value" id="price">$<?php echo $custom_fields['PRICE'][0] ?></p>
                    </div>
                    <div class="">
                        <a class="btn btn-outline-success" href="<?php the_ID(); ?>">Book Now</a>
                    </div>
                    <div>
                        <label for="" class="button-label">CALL US FOR <br> PERSONALIZED <br>
                            RATES</label>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="campsite-item d-inline-block">
    <div id="carouselControls" class="carousel slide campsite-carousel" data-ride="carousel">
        <div class="carousel-inner campsite-carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100 campsite-carousel-img" src="img/camping/camping1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 campsite-carousel-img" src="img/camping/camping2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 campsite-carousel-img" src="img/camping/camping3.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="text-center">
        <h6 class="p-1 m-1 h6">CMP-002</h6>
        <h3 class="p-1 m-1 h3">Nuwara Eliya</h3>
        <p class="p-1 m-2 lead">
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
            printer took a galley of type and scrambled it to make a type specimen book. It has survived not
            only five centuries,
        </p>
        <button class="btn btn-outline-success">Inquiry</button>
    </div>
    <div class="campsite-item-social text-center">
        <!--https://simplesharebuttons.com/html-share-buttons/-->
        <div class="p-2 mx-auto h4">
            <!-- Facebook -->
            <a href="http://www.facebook.com/sharer.php?u=https://emalsha.wordpress.com" target="_blank">
                <img src="img/social/facebook.png" alt="Facebook" />
            </a>

            <!-- Google+ -->
            <a href="https://plus.google.com/share?url=https://emalsha.wordpress.com" target="_blank">
                <img src="img/social/google.png" alt="Google" />
            </a>

            <!-- LinkedIn -->
            <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https://emalsha.wordpress.com" target="_blank">
                <img src="img/social/linkedin.png" alt="LinkedIn" />
            </a>

            <!-- Twitter -->
            <a href="https://twitter.com/share?url=https://emalsha.wordpress.com&amp;text=Simple%20Share%20Buttons&amp;hashtags=emalsha" target="_blank">
                <img src="img/social/twitter.png" alt="Twitter" />
            </a>
        </div>
    </div>
</div>