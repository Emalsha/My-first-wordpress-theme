<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
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
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

    <div class="site-content-contain">
        <div id="content" class="site-content">

            <?php

            /*
             * If a regular post or page, and not the front page, show the featured image.
             * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
             */
            if ((is_single() || (is_page() && !wanabima_is_frontpage())) && has_post_thumbnail(get_queried_object_id())) :
                echo '<div class="single-featured-image-header">';
                echo get_the_post_thumbnail(get_queried_object_id(), 'wanabima-featured-image');
                echo '</div><!-- .single-featured-image-header -->';
            endif;
            ?>

                            <?php get_template_part( 'template-parts/header/header', 'image' ); ?>

            <!--==========================
              Header
            ============================-->
            <header id="header">
                <div class="container-fluid">
                    <?php if (has_nav_menu('top')) : ?>
                        <div id="logo" class="pull-left">
                            <a href="#intro"><?php the_custom_logo(); ?></a>
                        </div>

                        <nav id="nav-menu-container">
                            <ul class="nav-menu-contact" style="float: right">
                                <li><a href="#" class="facebook"><i class="fa fa-facebook-official"></i></a></li>
                                <li><a href="tel:+94710868772">+947-10-88-088</a></li>
                            </ul>
                            <br><br>

<!--                            main menu-->
                            <?php get_template_part('template-parts/navigation/navigation', 'top'); ?>

<!--                            <ul class="nav-menu">-->
<!--                                <li class="menu-active"><a href="#intro">Home</a></li>-->
<!--                                <li><a href="#content1">Content 1</a></li>-->
<!--                                <li><a href="#activity">Activity</a></li>-->
<!--                                <li><a href="#content2">Content 2</a></li>-->
<!--                                <li class="menu-has-children"><a href="#featured-tour">Feature Tour</a>-->
<!--                                    <ul>-->
<!--                                        <li><a href="#">Drop Down 1</a></li>-->
<!--                                        <li><a href="#">Drop Down 3</a></li>-->
<!--                                        <li><a href="#">Drop Down 4</a></li>-->
<!--                                        <li><a href="#">Drop Down 5</a></li>-->
<!--                                    </ul>-->
<!--                                </li>-->
<!--                                <li><a href="#content3">Content 3</a></li>-->
<!--                            </ul>-->
                        </nav><!-- #nav-menu-container -->
                    <?php endif; ?>
                </div>
            </header><!-- #header -->