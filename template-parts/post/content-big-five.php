<?php
/**
 * Template part for displaying big five
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

<div class="p-3 col-md-6 ">
    <div class="border border-dark rounded">
        <div class="row ">
            <div class="col-md-6 pr-0">
                <?php if ('' !== get_the_post_thumbnail() && !is_single() && !get_post_gallery()) : ?>
                    <?php the_post_thumbnail('wanabima-featured-image', ['class' => 'img-fluid']); ?>
                <?php endif; ?>
            </div>
            <div class="col-md-6 p-3">
                <div class="float-right">
                    <h3 class="card-title"><?php echo get_the_title(); ?></h3>
                    <h5 class="card-title">Big Five With Wanabima</h5>
                    <?php the_content(); ?>
<!--                    <p class="car
d-text">--><?php //the_content(); ?><!--</p>-->
                    <a href="<?php the_permalink(); ?>" class="btn btn-outline-dark"><?php echo $custom_fields['BUTTON'] ? $custom_fields['BUTTON'][0] : "MORE" ?></a>
                </div>
            </div>
        </div>
    </div>
</div>
