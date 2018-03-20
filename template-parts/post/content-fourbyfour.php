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

<div class="card">
    <!--        <img class="card-img-top" src="./img/home/glamping.jpg" alt="Card image cap">-->
    <?php if ('' !== get_the_post_thumbnail() && !is_single() && !get_post_gallery()) : ?>
        <?php the_post_thumbnail('wanabima-featured-image', ['class' => 'card-img-top']); ?>
    <?php endif; ?>
    <div class="card-body">
        <h4 class="card-title"><?php echo get_the_title(); ?></h4>
        <p class="card-text"><?php the_content('Read the rest of this entry &raquo;'); ?></p>

        <?php
        $button_link = get_post_meta(get_the_ID(), 'button_link', true);
        if(isset($button_link)) {?>
            <a href="<?php echo $button_link; ?>" class="btn btn-primary"><?php echo $custom_fields['button_title'] ? $custom_fields['button_title'][0] : "Go Visit" ?></a>
            <?php
        }?>

    </div>
</div>
