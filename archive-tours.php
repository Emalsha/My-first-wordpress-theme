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
$content = str_replace('-','_',$temp);

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
<!--                    --><?php
//                    if (have_posts()) : ?>
<!--                        --><?php
//                        $categories = get_terms( 'tour_taxonomy', array(
//                            'hide_empty' => 0
//                        ) );
//                        /* Start the Loop */
//                        foreach($categories as $cats){
////                        Get template
//                            get_template_part('template-parts/post/content', 'tours');
//                        }
//
//
//                        the_posts_pagination(array(
//                            'prev_text' => wanabima_get_svg(array('icon' => 'arrow-left')) . '<span class="screen-reader-text">' . __('Previous page', 'wanabima') . '</span>',
//                            'next_text' => '<span class="screen-reader-text">' . __('Next page', 'wanabima') . '</span>' . wanabima_get_svg(array('icon' => 'arrow-right')),
//                            'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('Page', 'wanabima') . ' </span>',
//                        ));
//
//
//                    endif; ?>

                    <div class="p-3 col-md-6"  id="">
                        <div class="border border-dark rounded">
                            <div class="row">

                                <div class="col-md-6 pr-0 img-container carousel slide carousel-fade" id="carousel<?php the_ID(); ?>" data-interval="false">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <?php if ('' !== get_the_post_thumbnail() && !is_single() && !get_post_gallery()) : ?>
                                                <?php the_post_thumbnail('wanabima-featured-image', ['class' => 'd-block w-100 img-fluid ']); ?>
                                            <?php endif; ?>
                                        </div>
                                        <?php if (MultiPostThumbnails::has_post_thumbnail(get_post_type(),'second-image')){?>
                                            <div class="carousel-item" style="height: 100%;">
                                                <?php
                                                if (class_exists('MultiPostThumbnails')) :
                                                    MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'second-image',null,'post-thumbnail',array('class'=>'d-block w-100 img-fluid'));
                                                endif;
                                                ?>
                                            </div>
                                        <?php } ?>
                                        <?php if (MultiPostThumbnails::has_post_thumbnail(get_post_type(),'third-image')){?>
                                            <div class="carousel-item" style="height: 100%;">
                                                <?php
                                                if (class_exists('MultiPostThumbnails')) :
                                                    MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'third-image',null,'post-thumbnail',array('class'=>'d-block w-100 img-fluid'));
                                                endif;
                                                ?>
                                            </div>
                                        <?php } ?>
                                        <?php if (MultiPostThumbnails::has_post_thumbnail(get_post_type(),'forth-image')){?>
                                            <div class="carousel-item" style="height: 100%;">
                                                <?php
                                                if (class_exists('MultiPostThumbnails')) :
                                                    MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'forth-image',null,'post-thumbnail',array('class'=>'d-block w-100 img-fluid'));
                                                endif;
                                                ?>
                                            </div>
                                        <?php } ?>
                                        <?php if (MultiPostThumbnails::has_post_thumbnail(get_post_type(),'fifth-image')){?>
                                            <div class="carousel-item" style="height: 100%;">
                                                <?php
                                                if (class_exists('MultiPostThumbnails')) :
                                                    MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'fifth-image',null,'post-thumbnail',array('class'=>'d-block w-100 img-fluid'));
                                                endif;
                                                ?>
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <a class="carousel-control-prev" style="left: auto" href="#carousel<?php the_ID(); ?>" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carousel<?php the_ID(); ?>" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>

                                <div class="col-md-6 p-3">
                                    <div class="float-right">
                                        <h3 class="card-title">HIDEOUT</h3>
                                        <h5 class="card-title">Tagline</h5>
                                        <?php
                                        $term = get_term( 'hideout', 'tour_taxonomy' );
                                        ?>
                                        <p>This is a sample data. This will update soon. This is a sample data. This will update soon. This is a sample data. This will update soon.</p>
                                        <a href="" class="btn btn-outline-wanabima">Visit</a>

                                    </div>
                                </div>

                            </div>
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