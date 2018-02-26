<?php
/**
 * The template for displaying archive pages
 *
 * @package Wanabima
 * @since 1.0
 * @version 1.0
 * @author Emalsha Rasad
 */

get_header(); ?>

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
        <?php if (have_posts()) : ?>
            <header class="page-header">
                <?php
                //the_archive_title('<h1 class="page-title">', '</h1>'); TODO
                //the_archive_description('<div class="taxonomy-description">', '</div>'); TODO
                ?>
            </header><!-- .page-header -->
        <?php endif; ?>
        <!--==========================
   Jeep detail Section
 ============================-->
        <section id="jeepdetail">

            <div class="container">
                <?php
                if (have_posts()) : ?>
                    <?php
                    /* Start the Loop */
                    while (have_posts()) : the_post();
//                        Get template
                        get_template_part('template-parts/post/content', get_post_type());

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
        </section>


        <?php get_sidebar(); ?>
    </main><!-- .main-->

<?php get_footer();
