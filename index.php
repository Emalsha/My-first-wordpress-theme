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

get_header(); ?>

    <body>

    <main id="main">

        <!--==========================
          Content 1 Section
        ============================-->
        <section id="content1">
            <div class="container">

                <header class="section-header">
                    <h3>DUMMY HEADER 1</h3>
                    <h4 class="text-center">Sub Header 1</h4>
                    <p><b>Dummy Description 1 </b>Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it to make a type specimen book. It has survived not
                        only five centuries, but also the leap into electronic typesetting, remaining essentially
                        unchanged.
                        It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                        passages,
                        and more recently with desktop publishing software like Aldus PageMaker including versions of
                        Lorem
                        Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                        has
                        been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                        galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but
                        also the leap into electronic typesetting, remaining essentially unchanged. It was popularised
                        in
                        the .</p>
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
                            <img src="<?php echo esc_url( home_url( '/' ) )?>wp-content/uploads/img/home/ocean.jpg" class="img-fluid" alt="">
                            <a href="#" class="link-details" title="More Details">
                                OCEAN
                                <br>
                                <button class="btn btn-outline-light"><i class="fa fa-binoculars"></i></button>
                            </a>
                        </figure>
                    </div>
                    <div class="wow fadeInUp activity-item" data-wow-delay="0.1s">
                        <figure>
                            <img src="<?php echo esc_url( home_url( '/' ) )?>wp-content/uploads/img/home/jeep.jpg" class="img-fluid" alt="">
                            <a href="#" class="link-details" title="More Details">
                                JEEP
                                <br>
                                <button class="btn btn-outline-light"><i class="fa fa-binoculars"></i></button>
                            </a>
                        </figure>
                    </div>
                </div>

                <div class="col-md-3 wb-home-menu">
                    <div class="wow fadeInUp activity-item" data-wow-delay="0.1s">
                        <figure>
                            <img src="<?php echo esc_url( home_url( '/' ) )?>wp-content/uploads/img/home/glamping.jpg" class="img-fluid" alt="">
                            <a href="#" class="link-details" title="More Details">
                                GLAMPING
                                <br>
                                <button class="btn btn-outline-light"><i class="fa fa-binoculars"></i></button>
                            </a>
                        </figure>
                    </div>
                    <div class="wow fadeInUp activity-item" data-wow-delay="0.1s">
                        <figure>
                            <img src="<?php echo esc_url( home_url( '/' ) )?>wp-content/uploads/img/home/camping.jpg" class="img-fluid" alt="">
                            <a href="#" class="link-details" title="More Details">
                                CAMPING
                                <br>
                                <button class="btn btn-outline-light"><i class="fa fa-binoculars"></i></button>
                            </a>
                        </figure>
                    </div>
                </div>

                <div class="col-md-6 wb-home-menu">
                    <div class="wow fadeInUp activity-item" data-wow-delay="0.1s">
                        <figure>
                            <img src="<?php echo esc_url( home_url( '/' ) )?>wp-content/uploads/img/home/adventure.jpg" class="img-fluid" alt="">
                            <a href="#" class="link-details" title="More Details">
                                ADVENTURE
                                <br>
                                <button class="btn btn-outline-light"><i class="fa fa-binoculars"></i></button>
                            </a>
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
                    <h3>Content 2</h3>
                    <h4 class="text-center">Sub Content 2</h4>
                    <p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant
                        vituperatoribus, ad pro quaestio laboramus. Ei ubique vivendum pro. At ius nisl accusam lorenta
                        zanos paradigno tridexa panatarel.</p>
                </header>


            </div>
        </section><!-- #content2 -->

        <!--==========================
          Featured Tours Section
        ============================-->
        <section id="featured-tour" class="wow fadeIn">
            <div class="container-fluid text-center">
                <h3>Featured Tours</h3>
                <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                    pariatur.
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
                    est
                    laborum.</p>

                <div class="row">

                    <div class="col-lg-3 col-md-6 wow fadeInUp">
                        <div class="feature-item">
                            <!--Use 683 x 1024 image -->
                            <img src="<?php echo esc_url( home_url( '/' ) )?>wp-content/uploads/img/home/tour1.jpg" class="img-fluid" alt="">
                            <div class="feature-item-info">
                                <div class="feature-item-info-content">
                                    <h4>Hide out</h4>
                                    <span>Stay out from busy life</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="feature-item">
                            <img src="<?php echo esc_url( home_url( '/' ) )?>wp-content/uploads/img/home/tour2.jpg" class="img-fluid" alt="">
                            <div class="feature-item-info">
                                <div class="feature-item-info-content">
                                    <h4>Hilly and Cozy</h4>
                                    <span>Stay out from busy life</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="feature-item">
                            <img src="<?php echo esc_url( home_url( '/' ) )?>wp-content/uploads/img/home/tour3.jpg" class="img-fluid" alt="">
                            <div class="feature-item-info">
                                <div class="feature-item-info-content">
                                    <h4>Accross the Paradise</h4>
                                    <span>Stay out from busy life</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="feature-item">
                            <img src="<?php echo esc_url( home_url( '/' ) )?>wp-content/uploads/img/home/tour4.jpg" class="img-fluid" alt="">
                            <div class="feature-item-info">
                                <div class="feature-item-info-content">
                                    <h4>Sand and Beach</h4>
                                    <span>Stay out from busy life</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section><!-- #Feature Tours section -->

        <!--==========================
          Content 3 Section
        ============================-->
        <section id="content3">
            <div class="container">

                <header class="section-header">
                    <h3>DUMMY HEADER 1</h3>
                    <h4 class="text-center">Sub Header 1</h4>
                    <p><b>Dummy Description 1 </b>Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it to make a type specimen book. It has survived not
                        only five centuries, but also the leap into electronic typesetting, remaining essentially
                        unchanged.
                        It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                        passages,
                        and more recently with desktop publishing software like Aldus PageMaker including versions of
                        Lorem
                        Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                        has
                        been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                        galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but
                        also the leap into electronic typesetting, remaining essentially unchanged. It was popularised
                        in
                        the .</p>
                </header>
            </div>
        </section>

    </main>



    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>



    <!-- Template Main Javascript File -->
    <script src="js/main.js"></script>



    <div class="wrap">
        <?php if (is_home() && !is_front_page()) : ?>
            <header class="page-header">
                <h1 class="page-title"><?php single_post_title(); ?></h1>
            </header>
        <?php else : ?>
            <header class="page-header">
                <h2 class="page-title"><?php _e('Posts', 'wanabima'); ?></h2>
            </header>
        <?php endif; ?>

        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">

                <?php
                if (have_posts()) :

                    /* Start the Loop */
                    while (have_posts()) : the_post();

                        /*
                         * Include the Post-Format-specific template for the content.
                         * If you want to override this in a child theme, then include a file
                         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                         */
                        get_template_part('template-parts/post/content', get_post_format());

                    endwhile;

                    the_posts_pagination(array(
                        'prev_text' => wanabima_get_svg(array('icon' => 'arrow-left')) . '<span class="screen-reader-text">' . __('Previous page', 'wanabima') . '</span>',
                        'next_text' => '<span class="screen-reader-text">' . __('Next page', 'wanabima') . '</span>' . wanabima_get_svg(array('icon' => 'arrow-right')),
                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('Page', 'wanabima') . ' </span>',
                    ));

                else :

                    get_template_part('template-parts/post/content', 'none');

                endif;
                ?>

            </main><!-- #main -->
        </div><!-- #primary -->
        <?php get_sidebar(); ?>
    </div><!-- .wrap -->

<?php get_footer();
