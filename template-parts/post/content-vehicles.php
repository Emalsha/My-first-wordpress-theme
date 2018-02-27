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
