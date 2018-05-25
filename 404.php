<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
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

                <div id="nav-menu-container p-0 m-0" style="background-color: var(--main-color-1)">
                    <br>
                    <ul class="nav-menu-contact" style="float: right">
                        <li><a href="#" class="facebook"><i class="fa fa-facebook-official"></i></a></li>
                        <li><a href="mailto:wanabima@gmail.com">wanabima@gmail.com</a></li>
                        <li><a href="tel:+94710868772"> +947-10-88-088</a></li>
                    </ul>
                    <br><br>

                    <div style="background-color: var(--main-color-1); height: 50px;">
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
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'wanabima' ); ?></h1>
				</header><!-- .page-header -->
				<div class="page-content">
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'wanabima' ); ?></p>

					<?php get_search_form(); ?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
