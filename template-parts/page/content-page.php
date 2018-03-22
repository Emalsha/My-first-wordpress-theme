<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<?php
if (get_post_gallery()){
    ?>
    <div id="imagemenu" class="tab-pane fade show active" role="tabpanel" aria-labelledby="imagemenu-tab">
        <?php
        the_content();

        wp_link_pages( array(
            'before' => '<div class="page-links">' . __( 'Pages:', 'wanabima' ),
            'after'  => '</div>',
        ) );
        ?>
    </div>
    <?php
}else{ ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            <?php wanabima_edit_link( get_the_ID() ); ?>
        </header><!-- .entry-header -->
        <div class="entry-content">
            <?php
            the_content();

            wp_link_pages( array(
                'before' => '<div class="page-links">' . __( 'Pages:', 'wanabima' ),
                'after'  => '</div>',
            ) );
            ?>
        </div><!-- .entry-content -->
    </article><!-- #post-## -->

    <?php
}
?>
