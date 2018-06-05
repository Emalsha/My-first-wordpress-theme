<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wanabima
 * @since 1.0
 * @version 1.2
 */

?>

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

</div><!-- #content -->

<!--==========================
  Footer
============================-->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-info">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Avens.png" alt="">
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal </p>
                </div>

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h2>Contact Info</h2>
                    <?php
                        global $email_address;
                        global $phone_number;
                        global $general_number;
                    ?>
                    <p>
                        412/A, Level 1,<br>
                        Nawala Road,<br>
                        Rajagiriya.<br>
                        Sri Lanka. <br><br>
                        <strong>Hotline:</strong> <?= $phone_number;?><br>
                        <strong>General:</strong> <?= $general_number;?><br>
                        <strong>Email:</strong> <?= $email_address;?><br>
                        <strong>Web:</strong><a href="https://www.wanabima.com"> www.wanabima.com</a><br>
                    </p>

                    <?php
                    if (has_nav_menu('social')) : ?>
                        <div class="social-links" role="navigation"
                             aria-label="<?php esc_attr_e('Footer Social Links Menu', 'wanabima'); ?>">
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'social',
                                'menu_class' => 'social-links-menu',
                                'container' => '',
                                'items_wrap' => '%3$s',
                                'depth' => 1,
                                'link_before' => '',
                                'link_after' => '',
//                                'before' => '<i>',
//                                'after' => '</i>',
//                                'link_before' => '<i class="fa fa-',
//                                'link_after' => '"></i>',
                            ));
                            ?>
                        </div><!-- .social-navigation -->
                    <?php endif; ?>

                </div>

                <?php
                get_template_part('template-parts/footer/footer', 'widgets');
                ?>


            </div>
        </div>
    </div>


    <?php get_template_part('template-parts/footer/site', 'info'); ?>

</footer><!-- #footer -->
</div><!-- .site-content-contain -->
</div><!-- #page -->


<?php wp_footer(); ?>

</body>
</html>
