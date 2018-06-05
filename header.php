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
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

    <div class="site-content-contain">
        <div id="content" class="site-content">

            <?php
                get_template_part('template-parts/header/header', 'image');
            ?>

            <!--==========================
              Header
            ============================-->
            <header id="header">
                <div class="container-fluid">
                    <?php if (has_nav_menu('top')) : ?>
                        <div id="logo" class="pull-left">
                            <a href="#intro"><?php the_custom_logo(); ?></a>
                        </div>
                        <?php
                            global $email_address;
                            global $phone_number;
                        ?>
                        <div id="nav-menu-container">
                            <ul class="nav-menu-contact" style="float: right">
                                <li><a href="#" class="facebook"><i class="fa fa-facebook-official"></i></a></li>
                                <li><a href="mailto:<?= $email_address; ?>"><?= $email_address; ?></a></li>
                                <li><a href="tel:<?= $phone_number; ?>"> <?= $phone_number; ?></a></li>
                            </ul>
                            <br><br>

                            <!--                            main menu-->
                            <?php get_template_part('template-parts/navigation/navigation', 'top'); ?>

                        </div><!-- #nav-menu-container -->
                    <?php endif; ?>
                </div>
            </header><!-- #header -->
<?php
if ( function_exists('yoast_breadcrumb') && !is_home() ) {
    yoast_breadcrumb('<div id="breadcrumbs">','</div>');
}
?>