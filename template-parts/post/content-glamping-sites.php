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

<?php

$custom_fields = get_post_custom();

?>

<div class="campsite-item d-inline-block" id="<?php the_ID(); ?>">
    <div id="carouselControls" class="carousel slide campsite-carousel" data-ride="carousel">
        <div class="carousel-inner campsite-carousel-inner">
            <?php if ('' !== get_the_post_thumbnail() && !is_single() && !get_post_gallery()) : ?>

                <div class="carousel-item active">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('wanabima-featured-image', ['class' => 'd-block w-100 campsite-carousel-img']); ?>
                    </a>
                </div>

            <?php endif; ?>
            <!--            <div class="carousel-item active">-->
            <!--                <img class="d-block w-100 campsite-carousel-img" src="img/camping/camping1.jpg" alt="First slide">-->
            <!--            </div>-->
            <!--            <div class="carousel-item">-->
            <!--                <img class="d-block w-100 campsite-carousel-img" src="img/camping/camping2.jpg" alt="Second slide">-->
            <!--            </div>-->
            <!--            <div class="carousel-item">-->
            <!--                <img class="d-block w-100 campsite-carousel-img" src="img/camping/camping3.jpg" alt="Third slide">-->
            <!--            </div>-->
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
        <h6 class="p-1 m-1 h6"><?php echo $custom_fields['SUBTITLE'][0] ?></h6>
        <h3 class="p-1 m-1 h3"><?php echo get_the_title(); ?></h3>
        <p class="p-1 m-2 lead">
            <?php the_content('Read the rest of this entry &raquo;'); ?>
        </p>
        <button class="btn btn-outline-success">Inquiry</button>
    </div>
    <div class="campsite-item-social text-center">
        <!--https://simplesharebuttons.com/html-share-buttons/-->
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
            <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php the_permalink(); ?>" target="_blank">
                <i class="fa fa-pinterest"></i>
            </a>

            <!-- Twitter -->
            <a href="https://twitter.com/share?url=<?php the_permalink(); ?>&amp;text=Simple%20Share%20Buttons&amp;hashtags=wanabima"
               target="_blank">
                <i class="fa fa-twitter"></i>
            </a>
        </div>
    </div>
</div>