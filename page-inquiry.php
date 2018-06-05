<?php
/**
 * The template for displaying inquiry page
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
                        global $general_number;
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

<!--            <div class="col-lg-12 col-md-12 p-0" style="margin-top: 120px;">-->
<!--                <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d11203.254267814127!2d79.8867122987518!3d6.896759668816453!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3ae25a20c4d7ccc3%3A0x67b4cee739a886e1!2sgoogle+map+car+way+lanka+nawala!3m2!1d6.8971969!2d79.8921275!5e0!3m2!1sen!2slk!4v1521781107584"-->
<!--                        frameborder="0" style="border:0; width: 100%; height: 40vh;" allowfullscreen></iframe>-->
<!--            </div>-->

            <!--==========================
              Content 1 Section
            ============================-->
            <section id="content1" style="margin-top: 120px;">
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
                            <?php
                            if ( ! function_exists( 'post_exists' ) ) {
                                require_once( ABSPATH . 'wp-admin/includes/post.php' );
                            }

                            if(post_exists($_GET['id'])){?>
                            <h3 class="h3"><?php echo htmlspecialchars($_GET['id']) . " : " . htmlspecialchars($_GET['title']); ?> - Inquiry Form</h3>
                        <?php $post = get_page_by_path('inquiry-response', OBJECT, 'page');?>
                            <form action="<?php echo get_permalink($post->ID);?>" method="post" onsubmit="return check_captcha_is_filled();" id="formcontact">
                                <?php /**   Use this hidden value to identify post. Keep '::' as delimiter.  */?>
                                <input type="hidden" value="<?php echo $_GET['id'] . " :: " . $_GET['title']; ?>" name="wb-service">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="fromdate">From Date*</label>
                                        <input type="date" class="form-control" id="fromdate" name="wb-fromdate" required>
                                    </div>
                                    <div class="form-group col-md-3 col-sm-6">
                                        <label for="fromtime">From Time</label>
                                        <input type="time" class="form-control" id="fromtime" name="wb-fromtime">
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="todate">To Date*</label>
                                        <input type="date" class="form-control" id="todate" name="wb-todate" required>
                                    </div>
                                    <div class="form-group col-md-3 col-sm-6">
                                        <label for="totime">To Date</label>
                                        <input type="time" class="form-control" id="totime" name="wb-totime">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="cname">Your Name*</label>
                                        <input type="text" class="form-control" id="cname" name="wb-cname" placeholder="Type your name here" required>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="cemail">Your Email*</label>
                                        <input type="email" class="form-control" id="cemail" name="wb-cemail" placeholder="Give your e-mail address to reply" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="ccontact">Contact No</label>
                                        <input type="text" class="form-control" id="ccontact" name="wb-ccontact">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="wb-cmessage">Message</label>
                                        <textarea name="wb-cmessage" class="form-control" id="wb-cmessage" placeholder="If anything you wish to tell us..." rows="8"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <div class="g-recaptcha" data-sitekey="6Le9Z04UAAAAADgJHq9tXWSOwIsy8oBtUrILGdnh"

                                             data-callback="capcha_filled"
                                             data-expired-callback="capcha_expired">
                                        </div>
                                    </div>
                                </div>

                                <br>
                                <input type="submit" name="wb-submit" class="btn btn-wanabima btn-md pl-5 pr-5"
                                       value="Inquire Now">
                            </form>

                            <?php }else{?>
                                <h3 class="h3"> Sorry, <?php echo $_GET['id'];?> doesn't exist.</h3>

                            <?php }?>
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

            <?php get_footer(); ?>

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



