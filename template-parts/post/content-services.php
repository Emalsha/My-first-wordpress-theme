<?php
/**
 * Template part for displaying service
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
<div class="d-inline-block col-md-4 p-1 m-1 border border-dark rounded" id="<?php the_ID(); ?>">
    <div class="img-container">
        <?php the_post_thumbnail('wanabima-featured-image', ['class' => 'd-block w-100 img-fluid campsite-carousel-img']); ?>
    </div>
    <!--    Post content-->
    <div class="text-center">
        <h3 class="p-1 m-1 h3"><?php echo get_the_title();?></h3>
        <div style="font-size: 1.5em" class="font-weight-bold">
            <?php the_content(); ?>
        </div>
    </div>
</div>