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
$content = str_replace('-','_',$temp);

$cpage = $content;

?>

    <main id="main">
aaaaaaaa
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
                //the_archive_title('<h1 class="page-title">', '</h1>'); TODO
                //the_archive_description('<div class="taxonomy-description">', '</div>'); TODO
                ?>
            </header><!-- .page-header -->
        <?php endif; ?>
        <!--==========================
              Camping Site detail Section
        ============================-->
        <section id="campsite">

            <div class="container-fluid">
                <div class="card-deck">
                    <div class="card">

                        <?php if ('' !== get_the_post_thumbnail() && !is_single() && !get_post_gallery()) : ?>
                            <?php the_post_thumbnail('wanabima-featured-image', ['class' => 'card-img-top']); ?>
                        <?php endif; ?>
                        <div class="card-body big-five-card">
                            <h4 class="card-title">NATIONAL PARKS</h4>
                            <p>

                                took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>

                            <?php
                            $button_link = get_post_meta(get_the_ID(), 'button_link', true);
                            if(isset($button_link)) {?>
                                <a href="<?php echo get_site_url(); ?>/nature-and-wildlife/national-parks" class="btn btn-wanabima"><?php echo $custom_fields['button_title'] ? $custom_fields['button_title'][0] : "Go Visit" ?></a>
                                <?php
                            }?>

                        </div>
                    </div>

                    <div class="card">

                        <?php if ('' !== get_the_post_thumbnail() && !is_single() && !get_post_gallery()) : ?>
                            <?php the_post_thumbnail('wanabima-featured-image', ['class' => 'card-img-top']); ?>
                        <?php endif; ?>
                        <div class="card-body big-five-card">
                            <h4 class="card-title">BIG FIVE WITH WANABIMA</h4>
                            <p>

                                took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>

                            <?php
                            $button_link = get_post_meta(get_the_ID(), 'button_link', true);
                            if(isset($button_link)) {?>
                                <a href="<?php echo get_site_url(); ?>/nature-and-wildlife/big-five-with-wanabima" class="btn btn-wanabima"><?php echo $custom_fields['button_title'] ? $custom_fields['button_title'][0] : "Go Visit" ?></a>
                                <?php
                            }?>

                        </div>
                    </div>

                    <div class="card">

                        <?php if ('' !== get_the_post_thumbnail() && !is_single() && !get_post_gallery()) : ?>
                            <?php the_post_thumbnail('wanabima-featured-image', ['class' => 'card-img-top']); ?>
                        <?php endif; ?>
                        <div class="card-body big-five-card">
                            <h4 class="card-title">WANABIMA SAFARI</h4>
                            <p>

                                took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>

                            <?php
                            $button_link = get_post_meta(get_the_ID(), 'button_link', true);
                            if(isset($button_link)) {?>
                                <a href="<?php echo get_site_url(); ?>/nature-and-wildlife/wanabima-safari" class="btn btn-wanabima"><?php echo $custom_fields['button_title'] ? $custom_fields['button_title'][0] : "Go Visit" ?></a>
                                <?php
                            }?>

                        </div>
                    </div>

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