<?php
/**
 *
 * @package Wanabima
 * @since 1.0
 * @version 1.0
 * @author Emalsha Rasad
 */

get_header();

$cpage = 'starhotel';

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
                    if (have_posts()) : ?>
                        <?php
                        /* Start the Loop */
                        while (have_posts()) : the_post();
//                        Get template
                            get_template_part('template-parts/post/content', 'hotel');

                        endwhile;

                        the_posts_pagination(array(
                            'prev_text' => wanabima_get_svg(array('icon' => 'arrow-left')) . '<span class="screen-reader-text">' . __('Previous page', 'wanabima') . '</span>',
                            'next_text' => '<span class="screen-reader-text">' . __('Next page', 'wanabima') . '</span>' . wanabima_get_svg(array('icon' => 'arrow-right')),
                            'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('Page', 'wanabima') . ' </span>',
                        ));

                    else :

                        get_template_part('template-parts/post/content', 'none');

                    endif; ?>
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