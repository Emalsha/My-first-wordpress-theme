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
$url_parse = wp_parse_url(home_url( $wp->request ));
$path = $url_parse['path'];
$temp = end(explode('/',$path));
$con = str_replace('-','_',$temp);

global $wpdb;

$conPage = $wpdb->get_row("SELECT page FROM " . $wpdb->prefix . "link_pattern WHERE page_url='$temp' ");

$cpage = $conPage->page;

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
                            'acc_id' => 'luxury_star_class_hotels',
                            'title' => 'LUXURY STAR CLASS HOTELS',
                            'subtitle' => 'Wanabima Accommodation',
                            'button' => '',
                            'slug' => 'luxury-hotel-sri-lanka'
                        ),
                        '1' => array(
                            'acc_id' => 'luxury_boutique_hotels',
                            'title' => 'LUXURY BOUTIQUE HOTELS',
                            'subtitle' => 'Wanabima Accommodation',
                            'button' => '',
                            'slug' => 'boutique-hotels-sri-lanka'
                        ),
                        '2' => array(
                            'acc_id' => 'resorts_and_villas',
                            'title' => 'RESORTS AND VILLAS',
                            'subtitle' => 'Wanabima Accommodation',
                            'button' => '',
                            'slug' => 'sri-lanka-resorts'
                        ),
                        '3' => array(
                            'acc_id' => 'bungalows_and_home_stay',
                            'title' => 'BUNGALOWS AND HOME STAY',
                            'subtitle' => 'Wanabima Accommodation',
                            'button' => '',
                            'slug' => 'bungalows-sri-lanka'
                        ),
                    );


                    foreach ($items as $item_key => $item) {

                        ?>
                        <div class="p-3 col-md-6" id="<?php echo $item['acc_id']; ?>">
                            <div class="border border-dark rounded">
                                <div class="row m-0">

                                    <div class="col-md-6 p-0 img-container carousel slide carousel-fade"
                                         id="carousel<?php echo $item['acc_id']?>" data-interval="false">
                                        <div class="carousel-inner" id="carouselinner<?php echo $item['acc_id']?>">

                                        </div>
                                        <a class="carousel-control-prev" style="left: auto"
                                           href="#carousel<?php echo $item['acc_id']; ?>" role="button"
                                           data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carousel<?php echo $item['acc_id']; ?>"
                                           role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>

                                    <div class="col-md-6 p-2 accommodation-archive-item">
                                        <div class="float-left">
                                            <h3 class="card-title"><?php echo $item['title']; ?></h3>
                                            <h5 class="card-title"><?php echo $item['subtitle']; ?></h5>

                                            <?php
                                            $term = get_term_by('slug', $item['slug'], 'accommodation_taxonomy');
                                            $desc = term_description($term->term_id, 'accommodation_taxonomy');
                                            ?>
                                            <?php echo $desc; ?>
                                            <a href="<?php echo get_site_url(); ?>/sri-lanka-holidays/<?php echo $item['slug']; ?>"
                                               class="btn btn-outline-wanabima">MORE</a>

                                        </div>
                                    </div>
                                    <script>
                                        if (imgList_<?php echo $item['acc_id']; ?>) {
                                            for(var i=0, len = imgList_<?php echo $item['acc_id']; ?>.length; i< len; i++){
                                                jQuery('#carouselinner<?php echo $item['acc_id']; ?>').append(imgList_<?php echo $item['acc_id']; ?>[i]);
                                            }

                                        }
                                    </script>

                                </div>
                            </div>
                        </div>


                    <?php }?>
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