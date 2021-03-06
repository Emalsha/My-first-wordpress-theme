<?php
/**
 * Template for displaying search forms in Wanabima
 *
 * @package Wanabima
 * @since 1.0
 * @version 1.0
 */

?>

<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="form-group col-md-6">
        <label for="<?php echo $unique_id; ?>">
            <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'wanabima' ); ?></span>
        </label>

        <input type="search" id="<?php echo $unique_id; ?>" class="form-control" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'wanabima' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
    </div>
    <div class="col-md-6">
        <button type="submit" class="btn btn-dark"><i class="fa fa-search"></i> <span class="screen-reader-text"><?php echo _x( 'Search', 'submit button', 'wanabima' ); ?></span></button>
    </div>
</form>
