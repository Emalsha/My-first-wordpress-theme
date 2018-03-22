<?php
/**
 * The template for displaying gallery pages
 *
 *
 * @auther Emalsha Rasad
 * @package Wanabima
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">

    <div class="container">

        <div id="" class="p-3 text-center">

            <ul class="nav nav-tabs text-uppercase text-md-center font-weight-bold" role="tablist" id="gallerytab">
                <li class="nav-item col-md-6 col-sm-6">
                    <a class="nav-link active" data-toggle="tab" href="#imagemenu" role="tab" id="imagemenu-tab" aria-controls="imagemenu" aria-selected="true">Image</a>
                </li>
                <li class="nav-item col-md-6 col-sm-6">
                    <a class="nav-link" data-toggle="tab" href="#videomenu" role="tab" id="videomenu-tab" aria-controls="videomenu" aria-selected="true">Video</a>
                </li>
            </ul>

            <div class="tab-content p-3">
                <?php
                while ( have_posts() ) : the_post();

                    get_template_part( 'template-parts/page/content', 'page' );

                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;

                endwhile; // End of the loop.
                ?>

            </div>
        </div>

            </main><!-- #main -->
        </div><!-- #primary -->
    </div><!-- .wrap -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>

<?php get_footer();
