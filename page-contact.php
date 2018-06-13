<?php
/**
 * The template for displaying contact page
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

            <div class="col-lg-12 col-md-12 p-0" style="margin-top: 120px;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d11203.254267814127!2d79.8867122987518!3d6.896759668816453!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3ae25a20c4d7ccc3%3A0x67b4cee739a886e1!2sgoogle+map+car+way+lanka+nawala!3m2!1d6.8971969!2d79.8921275!5e0!3m2!1sen!2slk!4v1521781107584"
                        frameborder="0" style="border:0; width: 100%; height: 40vh;" allowfullscreen></iframe>
            </div>

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

                        <div class="col-md-8 col-sm-12">
                            <form action="" method="post" onsubmit="return check_captcha_is_filled();" id="formcontact">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="cname">Name :*</label>
                                        <input type="text" class="form-control" id="cname" name="cname" required>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="cemail">Email:*</label>
                                        <input type="email" class="form-control" id="cemail" name="cemail" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="cmessage">Message:*</label>
                                        <textarea name="cmessage" class="form-control" id="cmessage" rows="8"
                                                  required></textarea>
                                    </div>
                                </div>
                                <div class="g-recaptcha" data-sitekey="6Le9Z04UAAAAADgJHq9tXWSOwIsy8oBtUrILGdnh"
                                     data-callback="capcha_filled"
                                     data-expired-callback="capcha_expired"></div>
                                <br>
                                <input type="submit" name="submit" class="btn btn-wanabima btn-md pl-5 pr-5"
                                       value="Send">
                            </form>
                        </div>

                        <div class="col-md-4 col-sm-12 p-2">
                            <div class="card bg-light mb-3" style="max-width: 18rem;">
                                <div class="card-header">Contact Now</div>
                                <div class="card-body">
                                    <h5 class="card-title">Address:</h5>
                                    <p class="card-text">
                                        412/A, Level 1, <br>
                                        Nawala Road,<br>
                                        Rajagiriya. <br>
                                        Sri Lanka. </p>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Contact No:</h5>
                                    <p class="card-text"><a href="tel:<?= $phone_number; ?>"> <?= $phone_number; ?></a></p>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Email:</h5>
                                    <p class="card-text"><a href="tel:<?= $email_address; ?>"> <?= $email_address; ?></a></p>
                                </div>
                            </div>
                        </div>

                    </main><!-- #main -->
                </div><!-- #primary -->
            </div><!-- .wrap -->

            <?php get_footer();

            if ($_POST['submit']) {
                if (!$_POST['g-recaptcha-response']) {
                    echo "<script>alert('Please fill captcha!');</script>";
                } else {
                    $msg = sanitize_textarea_field($_POST['cmessage']);
                    $senderMail = sanitize_email($_POST['cemail']);
                    $senderName = sanitize_text_field($_POST['cname']);

                    $emailMsg = "Sender: " . $senderName . " \nSender Mail: " . $senderMail . " \nMessage :" . $msg;

                    $wanabimaMail = 'wanabima@gmail.com';
                    mail($wanabimaMail, " Contact Message From Wanabima", $wanabimaMail);
                }
            }
            ?>

            <script type="text/javascript">

                var allowSubmit = false;

                function capcha_filled() {
                    allowSubmit = true;
                }

                function capcha_expired() {
                    allowSubmit = false;
                }

                function check_captcha_is_filled() {
                    if (allowSubmit) return true;
                    alert('Fill in the captcha!');
                    return false;
                }
            </script>



