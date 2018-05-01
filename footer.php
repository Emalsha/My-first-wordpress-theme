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
                    <h3>Wanabima</h3>

                    <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita
                        valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet
                        proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
                </div>

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h2>Contact Info</h2>
                    <p>
                        No: 645/A<br>
                        Colombo 5,<br>
                        Sri Lanka <br>
                        <strong>Phone:</strong> +94 77 949 91 19<br>
                        <strong>Email:</strong> info@example.com<br>
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
                                'link_before' => '<i class="fa fa-',
                                'link_after' => '"></i>',
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
