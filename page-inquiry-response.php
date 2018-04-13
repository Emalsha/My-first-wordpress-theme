<?php
/**
 * Created by PhpStorm.
 * User: emalsha
 * Date: 23/03/18
 * Time: 10:27 PM
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

            <div class="col-lg-12 col-md-12 p-0" style="margin-top: 120px;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d11203.254267814127!2d79.8867122987518!3d6.896759668816453!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3ae25a20c4d7ccc3%3A0x67b4cee739a886e1!2sgoogle+map+car+way+lanka+nawala!3m2!1d6.8971969!2d79.8921275!5e0!3m2!1sen!2slk!4v1521781107584"
                        frameborder="0" style="border:0; width: 100%; height: 40vh;" allowfullscreen></iframe>
            </div>

            <div class="container">
                <div id="primary" class="content-area">
                    <main id="main" class="site-main row" role="main">

                        <?php

                        if ($_POST['wb-submit']) {
                            if (!$_POST['g-recaptcha-response']) {
                                echo "<script>alert('Please fill captcha!');</script>";
                            } else {

                                $service = sanitize_text_field($_POST['wb-service']);

                                $fromDate = sanitize_text_field($_POST['wb-fromdate']);
                                $fromTime = sanitize_text_field($_POST['wb-fromtime']);
                                $toDate = sanitize_text_field($_POST['wb-todate']);
                                $toTime = sanitize_text_field($_POST['wb-totime']);

                                $senderName = sanitize_text_field($_POST['wb-cname']);
                                $senderMail = sanitize_email($_POST['wb-cemail']);
                                $senderContact = sanitize_text_field($_POST['wb-ccontact']);
                                $msg = sanitize_textarea_field($_POST['wb-cmessage']);

//        Create email message
                                $emailMsg = "Sender: " . $senderName . " \nSender Mail: " . $senderMail . " \nContact :" . $senderContact;
                                $emailMsg .= "\nService: " . $service . " \nFrom : " . $fromDate . " : " . $fromTime . " \nTo : " . $toDate . " : " . $toTime;
                                $emailMsg .= "\nMessage: " . $msg;

                                $wanabimaMail = 'wanabima@gmail.com';
                                mail($wanabimaMail, " Contact Message From Wanabima", $wanabimaMail);
                                ?>

                                <div class="alert alert-success w-100" role="alert">
                                    <h4 class="alert-heading">Thank You!</h4>
                                    <p>You have completed reservation inquiry.</p>
                                    <hr>
                                    <p class="mb-0">Our team will contact you soon.</p>
                                </div>

                                <?php
                            }
                        }else{
                            ?>

                            <h3 class="text-center h3">Sorry, This is wrong place. <a href="<?php echo get_home_url();?>">Go back.</a></h3>

                            <?php
                        }

                        ?>


                    </main><!-- #main -->
                </div><!-- #primary -->
            </div><!-- .wrap -->

            <?php get_footer(); ?>



