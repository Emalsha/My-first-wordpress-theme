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

    <?php if ( '' !== get_the_post_thumbnail() && ! is_single() && ! get_post_gallery() ) : ?>

        <div class="col-md-4 img-container">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail( 'wanabima-featured-image' ); ?>
            </a>
        </div>



    <?php endif; ?>
<!--    <div class="col-md-4 img-container">-->
<!--        <img src="img/jeep/jeep2.jpg">-->
<!--    </div>-->
    <div class="col-md-8 ">
        <div class="product-content">
            <h4><?php echo get_the_title();?></h4>
            <p><?php the_content('Read the rest of this entry &raquo;'); ?></p>
            <div class="row">

                <?php while (get_post_custom()): $post; ?>
                <div class="col-md-4">
                    <div>
                        <label class="name-label" id=""><?php $post->ID;?> :</label>
                        <label class="col-form-label"><?php $post->meta_value;?></label>
                    </div>
                    <div>
                        <label class="name-label" id="">Luggage Capacity :</label>
                        <label class="col-form-label">4</label>
                    </div>
                    <div>
                        <label class="name-label" id="">Hood :</label>
                        <label class="col-form-label">Tent</label>
                    </div>
                </div>
                <?php endwhile; ?>
                <div class="col-md-4">

                    <div>
                        <label class="name-label" id="">Snorkeled :</label>
                        <label class="col-form-label">No</label>
                    </div>
                    <div>
                        <label class="name-label" id="">A/C :</label>
                        <label class="col-form-label">Yes</label>
                    </div>
                    <div>
                        <label class="name-label" id="">Hood Rack :</label>
                        <label class="col-form-label">No</label>
                    </div>
                    <div>
                        <label class="name-label" id="">Transmission :</label>
                        <label class="col-form-label">Auto</label>
                    </div>

                </div>
                <div class="col-md-4 buttons text-center">
                    <div>
                        <label for="price" class="price-label">PER DAY</label>
                    </div>
                    <div>
                        <p class="badge badge-light price-value" id="price">$155.00</p>
                    </div>
                    <div class="">
                        <a class="btn btn-outline-success" href="#">Book Now</a>
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
