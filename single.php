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

//get_header(); ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

    <div class="site-content-contain">
        <div id="content" class="site-content">

            <!--==========================
                        Header
            ============================-->
            <header id="header" style="padding: 0;">
                <div class="container-fluid p-0 m-0">
                    <?php if (has_nav_menu('top')) : ?>
                        <div id="logo" class="pull-left">
                            <a href="#intro"><?php the_custom_logo(); ?></a>
                        </div>
                        <?php
                        global $email_address;
                        global $phone_number;
                        ?>
                        <div id="nav-menu-container p-0 m-0" style="background-color: var(--main-color-2)">
                            <br>
                            <ul class="nav-menu-contact" style="float: right">
                                <li><a href="#" class="facebook"><i class="fa fa-facebook-official"></i></a></li>
                                <li><a href="mailto:<?= $email_address; ?>"><?= $email_address; ?></a></li>
                                <li><a href="tel:<?= $phone_number; ?>"> <?= $phone_number; ?></a></li>
                            </ul>
                            <br><br>

                            <div style="background-color: var(--main-color-3); height: 50px;">
                                <?php get_template_part('template-parts/navigation/navigation', 'top'); ?>
                            </div>

                        </div><!-- #nav-menu-container -->
                    <?php endif; ?>
                </div>
            </header><!-- #header -->

            <?php
            if ( function_exists('yoast_breadcrumb') && !is_home() ) {
                yoast_breadcrumb('<div id="breadcrumbs" style="margin-top: 120px;">','</div>');
            }
            ?>

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
