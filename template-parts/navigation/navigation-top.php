<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'wanabima' ); ?>">
<!--	<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false">-->
<!--		--><?php
//		echo wanabima_get_svg( array( 'icon' => 'bars' ) );
//		echo wanabima_get_svg( array( 'icon' => 'close' ) );
//		_e( 'Menu', 'wanabima' );
//		?>
<!--	</button>-->

	<?php wp_nav_menu( array(
		'theme_location' => 'top',
		'menu_id'        => 'top-menu',
        'menu_class'    => 'nav-menu',
	) ); ?>

</nav><!-- #site-navigation -->
