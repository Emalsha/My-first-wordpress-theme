<?php
/**
 * The template for displaying archive pages
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
        <!--==========================
              Camping Site detail Section
        ============================-->
        <section id="campsite">

            <div class="container-fluid">
                <div class="card-deck">
                    <?php

                    $items = array(
                        '0' => array(
                            'adv_id' => '4x4_adventure',
                            'title' => '4x4 ADVENTURE',
                            'subtitle' => '',
                            'button' => '',
                            'slug' => '4x4-suv-jeep-adventure'
                        ),
                        '1' => array(
                            'adv_id' => 'water_sports',
                            'title' => 'WATER SPORT',
                            'subtitle' => '',
                            'button' => '',
                            'slug' => 'surfing-sri-lanka'
                        ),
                        '2' => array(
                            'adv_id' => 'land_and_offroad',
                            'title' => 'LAND AND OFFROAD',
                            'subtitle' => '',
                            'button' => '',
                            'slug' => 'offroad-sri-lanka'
                        ),
                    )

                    ?>

                    <?php

                    foreach ($items as $item_key => $item) {
                        ?>

                        <div class="card">
                            <div class="pr-0 img-container carousel slide carousel-fade"
                                 id="carousel<?php echo $item['adv_id']?>" data-interval="false">
                                <div class="carousel-inner" id="carouselinner<?php echo $item['adv_id']?>">

                                </div>
                                <a class="carousel-control-prev" style="left: auto"
                                   href="#carousel<?php echo $item['adv_id']; ?>" role="button"
                                   data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carousel<?php echo $item['adv_id']; ?>"
                                   role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                            <div class="card-body big-five-card">
                                <h4 class="card-title"><?= $item['title']; ?></h4>
                                <?php
                                $term = get_term_by('slug', $item['slug'], 'adventure_taxonomy');
                                $desc = term_description($term->term_id, 'adventure_taxonomy');
                                ?>
                                <?php echo $desc; ?>

                                <?php
                                $button_link = get_post_meta(get_the_ID(), 'button_link', true);
                                if (isset($button_link)) { ?>
                                    <a href="<?php echo get_site_url(); ?>/adventure-sri-lanka/<?php echo $item['slug'] ?>" class="btn btn-wanabima">Feel the
                                        Excitement</a>
                                    <?php
                                } ?>

                            </div>
                            <script>
                                if (imgList_<?php echo $item['adv_id']; ?>) {
                                    for(var i=0, len = imgList_<?php echo $item['adv_id']; ?>.length; i< len; i++){
                                        jQuery('#carouselinner<?php echo $item['adv_id']; ?>').append(imgList_<?php echo $item['adv_id']; ?>[i]);
                                    }

                                }
                            </script>
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
