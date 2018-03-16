<?php
/**
 * The main template file
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Wanabima
 * @since 1.0
 * @version 1.0
 *
 * Theme Name: Wanabima
 * Author: G.H.B.Emalsha Rasad
 */

get_header(); ?>

    <body>

<main id="main">

    <!--==========================
      Content 1 Section
    ============================-->
    <section id="content1">
        <div class="container">

            <header class="section-header">

                <?php
                global $wpdb;

                $cpage = 'home';
                $position = 1;

                $content = $wpdb->get_row("SELECT * FROM " . $wpdb->prefix . "customcontent WHERE text_page='$cpage' AND text_page_position='$position'");
                if ($content) {
                    ?>

                    <h3><?php echo $content->text_title; ?></h3>
                    <h4 class="text-center"><?php echo $content->text_sub_title; ?></h4>
                    <p><?php echo $content->text; ?></p>

                    <?php
                }
                ?>


            </header>
        </div>
    </section>

    <!--==========================
      Activity Section
    ============================-->
    <section id="activity">
        <div class="row activity-row">

            <div class="col-md-3 wb-home-menu">
                <div class="wow fadeInUp activity-item" data-wow-delay="0.1s">
                    <figure>
                        <img src="<?php echo esc_url(home_url('/')) ?>wp-content/uploads/img/home/ocean.jpg"
                             class="img-fluid" alt="">
                        <a href="#" class="link-details" title="More Details">
                            OCEAN
                            <br>
                            <button class="btn btn-outline-light"><i class="fa fa-binoculars"></i></button>
                        </a>
                    </figure>
                </div>
                <div class="wow fadeInUp activity-item" data-wow-delay="0.1s">
                    <figure>
                        <img src="<?php echo esc_url(home_url('/')) ?>wp-content/uploads/img/home/jeep.jpg"
                             class="img-fluid" alt="">
                        <a href="#" class="link-details" title="More Details">
                            JEEP
                            <br>
                            <button class="btn btn-outline-light"><i class="fa fa-binoculars"></i></button>
                        </a>
                    </figure>
                </div>
            </div>

            <div class="col-md-3 wb-home-menu">
                <div class="wow fadeInUp activity-item" data-wow-delay="0.1s">
                    <figure>
                        <img src="<?php echo esc_url(home_url('/')) ?>wp-content/uploads/img/home/glamping.jpg"
                             class="img-fluid" alt="">
                        <a href="#" class="link-details" title="More Details">
                            GLAMPING
                            <br>
                            <button class="btn btn-outline-light"><i class="fa fa-binoculars"></i></button>
                        </a>
                    </figure>
                </div>
                <div class="wow fadeInUp activity-item" data-wow-delay="0.1s">
                    <figure>
                        <img src="<?php echo esc_url(home_url('/')) ?>wp-content/uploads/img/home/camping.jpg"
                             class="img-fluid" alt="">
                        <a href="#" class="link-details" title="More Details">
                            CAMPING
                            <br>
                            <button class="btn btn-outline-light"><i class="fa fa-binoculars"></i></button>
                        </a>
                    </figure>
                </div>
            </div>

            <div class="col-md-6 wb-home-menu">
                <div class="wow fadeInUp activity-item" data-wow-delay="0.1s">
                    <figure>
                        <img src="<?php echo esc_url(home_url('/')) ?>wp-content/uploads/img/home/adventure.jpg"
                             class="img-fluid" alt="">
                        <a href="#" class="link-details" title="More Details">
                            ADVENTURE
                            <br>
                            <button class="btn btn-outline-light"><i class="fa fa-binoculars"></i></button>
                        </a>
                    </figure>
                </div>
            </div>

        </div>
    </section><!-- #activity -->

    <!--==========================
      Content 2 Section
    ============================-->
    <section id="content2">
        <div class="container">


            <header class="section-header wow fadeInUp">
                <?php
                global $wpdb;

                $cpage = 'home';
                $position = 2;

                $content = $wpdb->get_row("SELECT * FROM " . $wpdb->prefix . "customcontent WHERE text_page='$cpage' AND text_page_position='$position'");
                if ($content) {
                    ?>

                    <h3><?php echo $content->text_title; ?></h3>
                    <h4 class="text-center"><?php echo $content->text_sub_title; ?></h4>
                    <p><?php echo $content->text; ?></p>

                    <?php
                }
                ?>
            </header>


        </div>
    </section><!-- #content2 -->

    <!--==========================
      Featured Tours Section
    ============================-->
    <section id="featured-tour" class="wow fadeIn">
        <div class="container-fluid text-center">
            <h3>Featured Tours</h3>
            <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
                est
                laborum.</p>

            <div class="row">

                <div class="col-lg-3 col-md-6 wow fadeInUp">
                    <div class="feature-item">
                        <!--Use 683 x 1024 image -->
                        <img src="<?php echo esc_url(home_url('/')) ?>wp-content/uploads/img/home/tour1.jpg"
                             class="img-fluid" alt="">
                        <div class="feature-item-info">
                            <div class="feature-item-info-content">
                                <h4>Hide out</h4>
                                <span>Stay out from busy life</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="feature-item">
                        <img src="<?php echo esc_url(home_url('/')) ?>wp-content/uploads/img/home/tour2.jpg"
                             class="img-fluid" alt="">
                        <div class="feature-item-info">
                            <div class="feature-item-info-content">
                                <h4>Hilly and Cozy</h4>
                                <span>Stay out from busy life</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="feature-item">
                        <img src="<?php echo esc_url(home_url('/')) ?>wp-content/uploads/img/home/tour3.jpg"
                             class="img-fluid" alt="">
                        <div class="feature-item-info">
                            <div class="feature-item-info-content">
                                <h4>Accross the Paradise</h4>
                                <span>Stay out from busy life</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="feature-item">
                        <img src="<?php echo esc_url(home_url('/')) ?>wp-content/uploads/img/home/tour4.jpg"
                             class="img-fluid" alt="">
                        <div class="feature-item-info">
                            <div class="feature-item-info-content">
                                <h4>Sand and Beach</h4>
                                <span>Stay out from busy life</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section><!-- #Feature Tours section -->


    <?php
    global $wpdb;

    $cpage = 'home';
    $position = 3;

    $content = $wpdb->get_row("SELECT * FROM " . $wpdb->prefix . "customcontent WHERE text_page='$cpage' AND text_page_position='$position'");
    if ($content) {
        ?>
        <!--==========================
                 Content 3 Section
               ============================-->
        <section id="content3">
            <div class="container">

                <header class="section-header">
                    <h3><?php echo $content->text_title; ?></h3>
                    <h4 class="text-center"><?php echo $content->text_sub_title; ?></h4>
                    <p><?php echo $content->text; ?></p>
                </header>
            </div>
        </section>
        <?php
    }
    ?>


</main>


<!--<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>-->


<!-- Template Main Javascript File -->
<script src="js/main.js"></script>


<?php get_footer();
