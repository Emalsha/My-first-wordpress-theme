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

get_header();

$cpage = 'home'; // For custom content and feature image

?>

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
                        <div class="overlay">
                            <a href="#" class="link-details" title="More Details">
                                OCEAN
                                <br>
                                <button class="btn btn-outline-light"><i class="fa fa-binoculars"></i></button>
                            </a>
                        </div>
                    </figure>
                </div>
                <div class="wow fadeInUp activity-item" data-wow-delay="0.1s">
                    <figure>
                        <img src="<?php echo esc_url(home_url('/')) ?>wp-content/uploads/img/home/jeep.jpg"
                             class="img-fluid" alt="">
                        <div class="overlay">
                            <a href="#" class="link-details" title="More Details">
                                JEEP
                                <br>
                                <button class="btn btn-outline-light"><i class="fa fa-binoculars"></i></button>
                            </a>
                        </div>
                    </figure>
                </div>
            </div>

            <div class="col-md-3 wb-home-menu">
                <div class="wow fadeInUp activity-item" data-wow-delay="0.1s">
                    <figure>
                        <img src="<?php echo esc_url(home_url('/')) ?>wp-content/uploads/img/home/glamping.jpg"
                             class="img-fluid" alt="">
                        <div class="overlay">
                            <a href="#" class="link-details" title="More Details">
                                GLAMPING
                                <br>
                                <button class="btn btn-outline-light"><i class="fa fa-binoculars"></i></button>
                            </a>
                        </div>
                    </figure>
                </div>
                <div class="wow fadeInUp activity-item" data-wow-delay="0.1s">
                    <figure>
                        <img src="<?php echo esc_url(home_url('/')) ?>wp-content/uploads/img/home/camping.jpg"
                             class="img-fluid" alt="">
                        <div class="overlay">
                            <a href="#" class="link-details" title="More Details">
                                CAMPING
                                <br>
                                <button class="btn btn-outline-light"><i class="fa fa-binoculars"></i></button>
                            </a>
                        </div>
                    </figure>
                </div>
            </div>

            <div class="col-md-6 wb-home-menu">
                <div class="wow fadeInUp activity-item" data-wow-delay="0.1s">
                    <figure>
                        <img src="<?php echo esc_url(home_url('/')) ?>wp-content/uploads/img/home/adventure.jpg"
                             class="img-fluid" alt="">
                        <div class="overlay">
                            <a href="#" class="link-details" title="More Details">
                                ADVENTURE
                                <br>
                                <button class="btn btn-outline-light"><i class="fa fa-binoculars"></i></button>
                            </a>
                        </div>
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
            <h3 class="h3">Featured Tours</h3>

            <div class="row">
                <?php
                global $wpdb;

                $fimages = $wpdb->get_results("SELECT * FROM " . $wpdb->prefix . "feature_image WHERE feature_page='$cpage' ORDER BY 'feature_image_position'");
                if ($fimages) {
                    foreach ($fimages as $fimage) {
                        ?>
                        <div class="col-lg-3 col-md-6 wow fadeInUp">
                            <a href="<?php echo $fimage->url; ?>">
                                <div class="feature-item">
                                    <!--Use 683 x 1024 image -->
                                    <?php $attachmentImg = wp_get_attachment_image_src($fimage->feature_image, full);
                                    if ($attachmentImg) {
                                        ?>
                                        <img src="<?php echo $attachmentImg[0] ?>" class="img-fluid"
                                             alt="Wanabima feature tours">
                                        <?php
                                    } else {
                                        ?>
                                        <img src="./img/wanabima%20683x1024.png" class="img-fluid"
                                             alt="Wanabima feature tours">
                                        <?php
                                    }
                                    ?>
                                    <div class="overlay feature-item-info">
                                        <div class="feature-item-info-content">
                                            <h4><?php echo $fimage->feature_title; ?></h4>
                                            <span><?php echo $fimage->feature_sub_title; ?></span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <?php
                    }
                }
                ?>


            </div>
        </div>
    </section><!-- #Feature Tours section -->


    <?php
    global $wpdb;

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

<!-- Template Main Javascript File -->
<script src="js/main.js"></script>


<?php get_footer();
