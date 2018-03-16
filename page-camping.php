<?php
/**
 * Template Name: Camping
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

                <?php
                global $wpdb;

                $cpage = 'camping';
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
            </div>
        </section>

        <!--==========================
      Campsite home Section
    ============================-->
        <section id="camping-site-home">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="row ">
                                <div class="col-md-6 ">
                                    <img src="<?php echo get_template_directory_uri()?>/img/camping/camping10.jpg" class="w-100">
                                </div>
                                <div class="col-md-6 camping-site-home-item">
                                    <div class="card-block p-2">
                                        <h3 class="card-title">CAMPING</h3>
                                        <p class="card-text">Consectetur adipiscing elit, sed do eiusmod tempor
                                            incididunt
                                            ut
                                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                            exercitation
                                            ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                            non
                                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        <a href="../camp-sites" class="btn btn-outline-secondary">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="row ">
                                <div class="col-md-6 ">
                                    <img src="<?php echo get_template_directory_uri()?>/img/camping/camping11.jpg" class="w-100">
                                </div>
                                <div class="col-md-6 camping-site-home-item">
                                    <div class="card-block p-2">
                                        <h3 class="card-title">GLAMPING</h3>
                                        <p class="card-text">Consectetur adipiscing elit, sed do eiusmod tempor
                                            incididunt
                                            ut
                                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                            exercitation
                                            ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                            non
                                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        <a href="../glamping-sites" class="btn btn-outline-secondary">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- #end-->

        <?php
        global $wpdb;

        $cpage = 'camping';
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