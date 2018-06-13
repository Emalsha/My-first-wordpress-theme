<?php
/**

Plugin Name: Wanabima Carousel Image
Description: A plugin to add carousel images in page
Author: Emalsha Rasad
Version: 0.1
 */


global $wci_db_version;
$wci_db_version = '1.0';

function wci_install(){
    global $wpdb;
    global $wci_db_version;

    $table_name = $wpdb->prefix."carousel_image";

    $charset_collate = $wpdb->get_charset_collate();


    $sql = "CREATE TABLE $table_name (
      id mediumint(9) NOT NULL AUTO_INCREMENT,
      time datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
      page tinytext NOT NULL,
      image text NOT NULL,
      PRIMARY KEY  (id)
    ) $charset_collate;";

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $sql );

    add_option('wci_db_version',$wci_db_version);
}

function wci_install_data()
{
    global $wpdb;

    $table_name = $wpdb->prefix . 'carousel_image';

    $row_count = $wpdb->get_var("SELECT COUNT(*) FROM " . $table_name);

    if (!$row_count > 0) {

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'home', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'home', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'home', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'home', 'image' => 'NaN'));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'rent_a_jeep', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'rent_a_jeep', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'rent_a_jeep', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'rent_a_jeep', 'image' => 'NaN'));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'camping', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'camping', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'camping', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'camping', 'image' => 'NaN'));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'camping_sites', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'camping_sites', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'camping_sites', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'camping_sites', 'image' => 'NaN'));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'glamping_sites', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'glamping_sites', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'glamping_sites', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'glamping_sites', 'image' => 'NaN'));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'nature_and_wildlife', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'nature_and_wildlife', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'nature_and_wildlife', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'nature_and_wildlife', 'image' => 'NaN'));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'national_parks', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'national_parks', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'national_parks', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'national_parks', 'image' => 'NaN'));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'big_five_with_wanabima', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'big_five_with_wanabima', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'big_five_with_wanabima', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'big_five_with_wanabima', 'image' => 'NaN'));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'the_sloth_bear_season', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'the_sloth_bear_season', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'the_sloth_bear_season', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'the_sloth_bear_season', 'image' => 'NaN'));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'the_asian_elephant_season', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'the_asian_elephant_season', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'the_asian_elephant_season', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'the_asian_elephant_season', 'image' => 'NaN'));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'the_leopard_season', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'the_leopard_season', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'the_leopard_season', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'the_leopard_season', 'image' => 'NaN'));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'the_blue_whale_season', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'the_blue_whale_season', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'the_blue_whale_season', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'the_blue_whale_season', 'image' => 'NaN'));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'the_sperm_whale_season', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'the_sperm_whale_season', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'the_sperm_whale_season', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'the_sperm_whale_season', 'image' => 'NaN'));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'wanabima_safari', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'wanabima_safari', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'wanabima_safari', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'wanabima_safari', 'image' => 'NaN'));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'adventure', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'adventure', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'adventure', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'adventure', 'image' => 'NaN'));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'land_and_offroad', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'land_and_offroad', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'land_and_offroad', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'land_and_offroad', 'image' => 'NaN'));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'water_sports', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'water_sports', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'water_sports', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'water_sports', 'image' => 'NaN'));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => '4x4_adventure', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => '4x4_adventure', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => '4x4_adventure', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => '4x4_adventure', 'image' => 'NaN'));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'tours', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'tours', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'tours', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'tours', 'image' => 'NaN'));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'hideout', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'hideout', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'hideout', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'hideout', 'image' => 'NaN'));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'sand_and_beach', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'sand_and_beach', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'sand_and_beach', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'sand_and_beach', 'image' => 'NaN'));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'hilly_and_cozy', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'hilly_and_cozy', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'hilly_and_cozy', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'hilly_and_cozy', 'image' => 'NaN'));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'across_the_paradise', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'across_the_paradise', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'across_the_paradise', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'across_the_paradise', 'image' => 'NaN'));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'accommodation', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'accommodation', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'accommodation', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'accommodation', 'image' => 'NaN'));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'luxury_star_class_hotels', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'luxury_star_class_hotels', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'luxury_star_class_hotels', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'luxury_star_class_hotels', 'image' => 'NaN'));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'luxury_boutique_hotels', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'luxury_boutique_hotels', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'luxury_boutique_hotels', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'luxury_boutique_hotels', 'image' => 'NaN'));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'resorts_and_villas', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'resorts_and_villas', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'resorts_and_villas', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'resorts_and_villas', 'image' => 'NaN'));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'bungalows_and_home_stay', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'bungalows_and_home_stay', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'bungalows_and_home_stay', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'bungalows_and_home_stay', 'image' => 'NaN'));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'services', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'services', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'services', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'services', 'image' => 'NaN'));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'gallery', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'gallery', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'gallery', 'image' => 'NaN'));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'page' => 'gallery', 'image' => 'NaN'));

    }
}

//Create table and insert sample data
register_activation_hook( __FILE__, 'wci_install' );
register_activation_hook( __FILE__, 'wci_install_data' );



function page_carousel_image_admin_menu() {
    //Create table and insert sample data
    register_activation_hook( __FILE__, 'wci_install' );
    register_activation_hook( __FILE__, 'wci_install_data' );

    add_menu_page( 'Page Carousel Image', 'Page Carousel Image', 'manage_options', 'wanabimaplugin/plugin-carousel-image-admin.php', 'plugin_carousel_image_admin', 'dashicons-tickets', 5  );
}

function plugin_carousel_image_admin(){
    include('admin_controller.php');

}

//Add custom content adding plugin
add_action( 'admin_menu', 'page_carousel_image_admin_menu' );

add_action ( 'admin_enqueue_scripts', function () {
    if (is_admin ())
        wp_enqueue_media ();
} );

