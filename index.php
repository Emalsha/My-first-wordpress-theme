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
                <?php
                global $wpdb;

                $aimages = $wpdb->get_results("SELECT * FROM " . $wpdb->prefix . "activitycontent WHERE id=1 OR id=2");
                if ($aimages) {
                    foreach ($aimages as $aimage) {
                        ?>
                        <div class="wow fadeInUp activity-item" data-wow-delay="0.1s">
                            <figure>
                                <?php $attachmentImg = wp_get_attachment_image_src($aimage->content_image, full);
                                if ($attachmentImg) {
                                    ?>
                                    <img src="<?php echo $attachmentImg[0] ?>" class="img-fluid"
                                         alt="Wanabima Activity">
                                    <?php
                                } else {
                                    ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/wanabima%201x1.png"
                                         class="img-fluid"
                                         alt="Wanabima Activity">
                                    <?php
                                }
                                ?>
                                <div class="image-title">
                                    <?php echo $aimage->content_title; ?>
                                </div>

                                <div class="overlay">
                                    <a href="<?php echo $aimage->url; ?>" class="link-details" title="More Details">
                                        <?php echo $aimage->content_title; ?>
                                        <br>
                                        <button class="btn btn-outline-light"><i class="fa fa-binoculars"></i></button>
                                    </a>
                                    <p style="font-size: .5em"><?php echo $aimage->feature_sub_title; ?></p>
                                </div>
                            </figure>
                        </div>

                        <?php
                    }
                }
                ?>
            </div>

            <div class="col-md-3 wb-home-menu">
                <?php
                global $wpdb;

                $fimages = $wpdb->get_results("SELECT * FROM " . $wpdb->prefix . "activitycontent WHERE id=3 OR id=4");
                if ($fimages) {
                    foreach ($fimages as $fimage) {
                        ?>
                        <div class="wow fadeInUp activity-item" data-wow-delay="0.1s">
                            <figure>
                                <?php $attachmentImg = wp_get_attachment_image_src($fimage->content_image, full);
                                if ($attachmentImg) {
                                    ?>
                                    <img src="<?php echo $attachmentImg[0] ?>" class="img-fluid"
                                         alt="Wanabima Activity">
                                    <?php
                                } else {
                                    ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/wanabima%201x1.png"
                                         class="img-fluid"
                                         alt="Wanabima Activity">
                                    <?php
                                }
                                ?>

                                <div class="image-title">
                                    <?php echo $fimage->content_title; ?>
                                </div>
                                <div class="overlay">
                                    <a href="<?php echo $fimage->url; ?>" class="link-details" title="More Details">
                                        <?php echo $fimage->content_title; ?>
                                        <br>
                                        <button class="btn btn-outline-light"><i class="fa fa-binoculars"></i></button>
                                    </a>
                                    <p style="font-size: .5em"><?php echo $fimage->feature_sub_title; ?></p>
                                </div>
                            </figure>
                        </div>

                        <?php
                    }
                }
                ?>
            </div>

            <div class="col-md-6 wb-home-menu">
                <?php
                global $wpdb;

                $fimages = $wpdb->get_results("SELECT * FROM " . $wpdb->prefix . "activitycontent WHERE id=5");
                if ($fimages) {
                    foreach ($fimages as $fimage) {
                        ?>
                        <div class="wow fadeInUp activity-item" data-wow-delay="0.1s">
                            <figure>
                                <?php $attachmentImg = wp_get_attachment_image_src($fimage->content_image, full);
                                if ($attachmentImg) {
                                    ?>
                                    <img src="<?php echo $attachmentImg[0] ?>" class="img-fluid"
                                         alt="Wanabima Activity">
                                    <?php
                                } else {
                                    ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/wanabima%201x1.png"
                                         class="img-fluid"
                                         alt="Wanabima Activity">
                                    <?php
                                }
                                ?>
                                <div class="image-title">
                                    <?php echo $fimage->content_title; ?>
                                </div>
                                <div class="overlay">
                                    <a href="<?php echo $fimage->url; ?>" class="link-details" title="More Details">
                                        <?php echo $fimage->content_title; ?>
                                        <br>
                                        <button class="btn btn-outline-light"><i class="fa fa-binoculars"></i></button>
                                    </a>
                                    <p style="font-size: .5em"><?php echo $fimage->feature_sub_title; ?></p>
                                </div>
                            </figure>
                        </div>

                        <?php
                    }
                }
                ?>
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
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/wanabima%20683x1024.png"
                                         class="img-fluid"
                                         alt="Wanabima feature tours">
                                    <?php
                                }
                                ?>
                                <div class="feature-item-title">
                                    <h4><?php echo $fimage->feature_title; ?></h4>
                                </div>
                                <div class="overlay feature-item-info">
                                    <a href="<?php echo $fimage->url; ?>">
                                        <div class="feature-item-info-content">
                                            <h4><?php echo $fimage->feature_title; ?></h4>
                                            <span><?php echo $fimage->feature_sub_title; ?></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
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
