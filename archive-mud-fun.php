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
                    <?php
                    global $wpdb;

                    $cpage = 'mud_fun';
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

        <?php
        global $wpdb;

        $cpage = 'mud_fun';
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

<?php get_footer();