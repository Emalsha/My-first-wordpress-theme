<?php
/**
 *
 * @package Wanabima
 * @since 1.0
 * @version 1.0
 * @author Emalsha Rasad
 */

get_header();

global $wp;
$url_parse = wp_parse_url(home_url($wp->request));
$path = $url_parse['path'];
$temp = end(explode('/', $path));
$content = str_replace('-', '_', $temp);

$cpage = $content;

?>

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
        <?php if (have_posts()) : ?>
            <header class="page-header">
                <?php
                //                the_archive_title('<h1 class="page-title">', '</h1>'); //TODO
                //the_archive_description('<div class="taxonomy-description">', '</div>'); TODO
                ?>
            </header><!-- .page-header -->
        <?php endif; ?>
        <!--==========================
              Camping Site detail Section
        ============================-->
        <section id="campsite">

            <div class="container-fluid">
                <div class="row">


                    <?php

                    $items = array(
                        '0' => array(
                            'tour_id' => 'hideout',
                            'title' => 'HIDEOUT',
                            'subtitle' => 'Tagline',
                            'button' => '',
                            'slug' => 'hideout'
                        ),
                        '1' => array(
                            'tour_id' => 'sand_and_beach',
                            'title' => 'SAND & BEACH',
                            'subtitle' => 'Attractive Tagline',
                            'button' => '',
                            'slug' => 'sand-and-beach'
                        ),
                        '2' => array(
                            'tour_id' => 'hilly_and_cozy',
                            'title' => 'HILLY & COZY',
                            'subtitle' => 'Cozy Tagline',
                            'button' => '',
                            'slug' => 'hilly-and-cozy'
                        ),
                        '3' => array(
                            'tour_id' => 'across_the_paradise',
                            'title' => 'ACROSS THE PARADISE',
                            'subtitle' => 'Surf Through The Wonder Of Asia',
                            'button' => '',
                            'slug' => 'across-the-paradise'
                        ),
                    )

                    ?>

                    <?php

                    foreach ($items as $item_key => $item) {
                        ?>
                        <div class="p-3 col-md-6" id="<?= $item['tour_id']; ?>">
                            <div class="border border-dark rounded">
                                <div class="row">
                                    <div class="col-md-6 pr-0 img-container carousel slide carousel-fade"
                                         id="carousel<?php echo $item['tour_id']; ?>" data-interval="false">
                                        <div class="carousel-inner" id="carouselinner<?php echo $item['tour_id']; ?>">

                                        </div>

                                        <a class="carousel-control-prev" style="left: auto"
                                           href="#carousel<?= $item['tour_id']; ?>" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carousel<?= $item['tour_id']; ?>"
                                           role="button"
                                           data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>

                                    <div class="col-md-6 p-2 tour-archive-item">
                                        <div class="float-left">
                                            <h3 class="card-title"><?= $item['title']; ?></h3>
                                            <h5 class="card-title"><?= $item['subtitle']; ?></h5>
                                            <?php
                                            $term = get_term_by('slug', $item['slug'], 'tour_taxonomy');
                                            $desc = term_description($term->term_id, 'tour_taxonomy');
                                            ?>
                                            <?php echo $desc; ?>
                                            <a href="<?php echo get_site_url(); ?>/tours/<?php echo $item['slug'] ?>"
                                               class="btn btn-outline-wanabima">Visit</a>

                                        </div>
                                    </div>
                                    <script>
                                        if (imgList_<?php echo $item['tour_id']; ?>) {
                                            for(let i=0, len = imgList_<?php echo $item['tour_id']; ?>.length; i< len; i++){
                                                jQuery('#carouselinner<?php echo $item['tour_id']; ?>').append(imgList_<?php echo $item['tour_id']; ?>[i]);
                                            }

                                        }
                                    </script>
                                </div>
                            </div>
                        </div>

                    <?php } ?>


                </div>
            </div>
        </section>

        <?php
        global $wpdb;

        $position = 2;

        $content = $wpdb->get_row("SELECT * FROM " . $wpdb->prefix . "customcontent WHERE text_page='$cpage' AND text_page_position='$position'");
        if ($content) {
            ?>
            <!--==========================
                     Content 2 Section
                   ============================-->
            <section id="content2">
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

    </main><!-- .main-->

<?php get_footer();