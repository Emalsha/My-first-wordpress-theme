<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Wanabima
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="container">
	<div id="primary" class="p-3">
		<main id="main" class="rounded-top border-top" role="main">

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/post/content', get_post_format() );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

				?>
                <div class="text-center">
                    <?php
                    the_post_navigation( array(
                        'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'wanabima' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'wanabima' ) . '</span> <span class="nav-title"><span class="nav-title-icon-wrapper">' . wanabima_get_svg( array( 'icon' => 'arrow-left' ) ) . '</span>%title</span>',
                        'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'wanabima' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'wanabima' ) . '</span> <span class="nav-title">%title<span class="nav-title-icon-wrapper">' . wanabima_get_svg( array( 'icon' => 'arrow-right' ) ) . '</span></span>',
                    ) );
                    ?>
                </div>

            <?php

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();?>
