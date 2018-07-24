<?php
/**
 * The template for displaying testimonial page
 *
 * @author Emalsha Rasad
 * @package Wanabima
 * @since 1.0
 * @version 1.0
 */
?>


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
            if (function_exists('yoast_breadcrumb')) {
                yoast_breadcrumb('<div id="breadcrumbs">', '</div>');
            }

            ?>


            <!--==========================
              Content 1 Section
            ============================-->
            <section id="content1">
                <div class="container">

                    <?php the_post() ?>
                    <header class="section-header">
                        <?php the_title('<h3>', '</h3>'); ?>
                        <h4 class="text-center"></h4>
                        <p><?php the_content(); ?></p>
                    </header>
                </div>
            </section>


            <div class="container">
                <div id="primary" class="content-area">
                    <main id="main" class="site-main row" role="main">

                        <div class="col-md-2"></div>
                        <div class="col-md-8 col-sm-12">
                            <?php if ( function_exists( 'strong_testimonials_view' ) ) {
                                strong_testimonials_view( $id );
                            } ?>
                        </div>


                    </main><!-- #main -->
                </div><!-- #primary -->
            </div><!-- .wrap -->

            <?php get_footer(); ?>

            


