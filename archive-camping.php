<?php
/**
 *
 * @package Wanabima
 * @since 1.0
 * @version 1.0
 * @author Emalsha Rasad
 */

get_header();
$cpage = 'camping';

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
                <div class="row">

<!--                    Camping site-->
                    <div class="p-3 col-md-6"  id="camping-site">
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
                                    <div class="float-right camping-card">
                                        <h3 class="card-title"><?php echo get_the_title(); ?></h3>
                                        <h5 class="card-title">Big Five With Wanabima</h5>
                                        <p>
                                            No focus keyword was set for this page. If you do not set a focus keyword, no score can be calculated.No focus keyword was set for this page. If you do not set a focus keyword, no score can be calculated.No focus keyword was set for this page. If you do not set a focus keyword, no score can be calculated.No focus
                                        </p>
                                            <a href="<?php echo get_site_url(); ?>/camping/camping-site" class="btn btn-outline-wanabima">Camping Site</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

<!--                    Glamping site-->
                    <div class="p-3 col-md-6"  id="glamping-site">
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
                                    <div class="float-right camping-card">
                                        <h3 class="card-title"><?php echo get_the_title(); ?></h3>
                                        <h5 class="card-title">Big Five With Wanabima</h5>
                                        <p>
                                            No focus keyword was set for this page. If you do not set a focus keyword, no score can be calculated.No focus keyword was set for this page. If you do not set a focus keyword, no score can be calculated.No focus keyword was set for this page. If you do not set a focus keyword, no score can be calculated.No focus
                                        </p>
                                            <a href="<?php echo get_site_url(); ?>/camping/glamping-site" class="btn btn-outline-wanabima">Glamping Site</a>
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
    </main><!-- .main-->

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


<?php get_footer();