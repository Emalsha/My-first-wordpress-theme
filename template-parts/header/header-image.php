<?php
/**
 * Displays header media
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<!--<div class="custom-header">-->
<!---->
<!--		<div class="custom-header-media">-->
<!--			--><?php //the_custom_header_markup(); ?>
<!--            --><?php // //var_dump(get_all_header_data()); ?>
<!--            --><?php
//                foreach (get_all_header_data() as $headerimg){
//                    echo $headerimg[url];
//            }
//            ?>
<!---->
<!--		</div>-->
<!---->
<!--<!-- Dont need	--><?php ////get_template_part( 'template-parts/header/site', 'branding' ); ?>
<!---->
<!--</div><!-- .custom-header -->

<section id="intro">
    <div class="intro-container">
        <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

            <ol class="carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <?php
                $all_images = get_all_header_data();
                $i = 0;
                foreach ( $all_images as $headerImg) {
                    ?>
                    <div class="carousel-item<?php if($i == 0) echo ' active';?>" style="background-image: url('<?php echo $headerImg[url]; ?>');">
                        <div class="carousel-container">
                            <div class="carousel-content">
                            </div>
                        </div>
                    </div>

                <?php
                $i++;
                }
                ?>
<!--                has_header_video-->
                <div class="carousel-item">
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <video class="video-fluid intro-carousel-video" autoplay loop>
                                <source src="<?php echo get_header_video_url();?>" type="video/mp4" />
                            </video>
                        </div>
                    </div>
                </div>

                    <!--                <div class="carousel-item active"-->
<!--                     style="background-image: url('/uploads/img/intro-carousel/1.jpg');">-->
<!--                    <div class="carousel-container">-->
<!--                        <div class="carousel-content">-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <div class="carousel-item" style="background-image: url('img/intro-carousel/2.jpg');">-->
<!--                    <div class="carousel-container">-->
<!--                        <div class="carousel-content">-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <div class="carousel-item" style="background-image: url('img/intro-carousel/3.jpg');">-->
<!--                    <div class="carousel-container">-->
<!--                        <div class="carousel-content">-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->


            </div>

            <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </div>
</section><!-- #intro -->