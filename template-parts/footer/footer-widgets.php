<?php
/**
 * Displays footer widgets if assigned
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<?php
if ( is_active_sidebar( 'sidebar-2' ) ||
	 is_active_sidebar( 'sidebar-3' ) ) :
?>

	<aside class="col-lg-3 col-md-6 widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Footer 2', 'wanabima' ); ?>">
		<?php
		if ( is_active_sidebar( 'sidebar-2' ) ) { ?>
			<div class="footer-links widget-column footer-widget-1">
				<?php dynamic_sidebar( 'sidebar-2' ); ?>
			</div>
		<?php } ?>

	</aside>
    <aside class="col-lg-3 col-md-6 widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Footer 3', 'wanabima' ); ?>">
        <?php
        if ( is_active_sidebar( 'sidebar-3' ) ) { ?>
            <div class="footer-tag widget-column footer-widget-2">
                <?php dynamic_sidebar( 'sidebar-3' ); ?>
            </div>
        <?php } ?>
    </aside>
    <!-- .widget-area -->

<?php endif; ?>
