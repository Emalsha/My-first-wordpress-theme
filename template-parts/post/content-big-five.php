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

<div class="card">
    <!--        <img class="card-img-top" src="./img/home/glamping.jpg" alt="Card image cap">-->
    <?php if ('' !== get_the_post_thumbnail() && !is_single() && !get_post_gallery()) : ?>
        <?php the_post_thumbnail('wanabima-featured-image', ['class' => 'card-img-top']); ?>
    <?php endif; ?>
    <div class="card-body">
        <h4 class="card-title"><?php echo get_the_title(); ?></h4>
        <p class="card-text"><?php the_content('Read the rest of this entry &raquo;'); ?></p>
        <a href="<?php the_permalink(); ?>" class="btn btn-primary"><?php echo $custom_fields['BUTTON'] ? $custom_fields['BUTTON'][0] : "Go Visit" ?></a>
    </div>
</div>