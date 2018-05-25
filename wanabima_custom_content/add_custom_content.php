<?php
/**

Plugin Name: Wanabima custom content
Description: A plugin to add custom content in pages
Author: Emalsha Rasad
Version: 0.1
*/


global $wcc_db_version;
$wcc_db_version = '1.0';

function wcc_install(){
    global $wpdb;
    global $wcc_db_version;

    $table_name = $wpdb->prefix."customcontent";

    $charset_collate = $wpdb->get_charset_collate();

    //id mediumint(9) NOT NULL AUTO_INCREMENT,

    $sql = "CREATE TABLE $table_name (
      id mediumint(9) NOT NULL AUTO_INCREMENT,
      time datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
      text_page tinytext NOT NULL,
      text_page_position mediumint(9) NOT NULL,
      text_title text NOT NULL,
      text_sub_title text NOT NULL,
      text text NOT NULL,
      url varchar(55) DEFAULT '' NOT NULL,
      PRIMARY KEY  (id)
    ) $charset_collate;";

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $sql );

    add_option('wcc_db_version',$wcc_db_version);
}

function wcc_install_data()
{
    global $wpdb;

    $table_name = $wpdb->prefix . 'customcontent';

    $row_count = $wpdb->get_var("SELECT COUNT(*) FROM " . $table_name);

    if (!$row_count > 0) {

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'text_page' => 'home', 'text_page_position' => 1, 'text_title' => 'Home Page', 'text_sub_title' => 'Under Maintains', 'text' => 'This is a sample data. This will update soon.',));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'text_page' => 'home', 'text_page_position' => 2, 'text_title' => 'Home Page', 'text_sub_title' => 'Under Maintains', 'text' => 'This is a sample data. This will update soon.',));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'text_page' => 'home', 'text_page_position' => 3, 'text_title' => 'Home Page', 'text_sub_title' => 'Under Maintains', 'text' => 'This is a sample data. This will update soon.',));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'text_page' => 'rent_a_jeep', 'text_page_position' => 1, 'text_title' => 'Rent A Jeep Page', 'text_sub_title' => 'Under Maintains', 'text' => 'This is a sample data. This will update soon.',));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'text_page' => 'rent_a_jeep', 'text_page_position' => 2, 'text_title' => 'Rent A Jeep Page', 'text_sub_title' => 'Under Maintains', 'text' => 'This is a sample data. This will update soon.',));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'text_page' => 'rent_a_jeep', 'text_page_position' => 3, 'text_title' => 'Rent A Jeep Page', 'text_sub_title' => 'Under Maintains', 'text' => 'This is a sample data. This will update soon.',));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'text_page' => 'camping', 'text_page_position' => 1, 'text_title' => 'Camping Page', 'text_sub_title' => 'Under Maintains', 'text' => 'This is a sample data. This will update soon.',));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'text_page' => 'camping', 'text_page_position' => 2, 'text_title' => 'Camping Page', 'text_sub_title' => 'Under Maintains', 'text' => 'This is a sample data. This will update soon.',));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'text_page' => 'camping', 'text_page_position' => 3, 'text_title' => 'Camping Page', 'text_sub_title' => 'Under Maintains', 'text' => 'This is a sample data. This will update soon.',));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'text_page' => 'camping_sites', 'text_page_position' => 1, 'text_title' => 'Camping Sites Page', 'text_sub_title' => 'Under Maintains', 'text' => 'This is a sample data. This will update soon.',));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'text_page' => 'camping_sites', 'text_page_position' => 2, 'text_title' => 'Camping Sites Page', 'text_sub_title' => 'Under Maintains', 'text' => 'This is a sample data. This will update soon.',));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'text_page' => 'camping_sites', 'text_page_position' => 3, 'text_title' => 'Camping Sites Page', 'text_sub_title' => 'Under Maintains', 'text' => 'This is a sample data. This will update soon.',));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'text_page' => 'glamping_sites', 'text_page_position' => 1, 'text_title' => 'Glamping Sites Page', 'text_sub_title' => 'Under Maintains', 'text' => 'This is a sample data. This will update soon.',));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'text_page' => 'glamping_sites', 'text_page_position' => 2, 'text_title' => 'Glamping Sites Page', 'text_sub_title' => 'Under Maintains', 'text' => 'This is a sample data. This will update soon.',));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'text_page' => 'glamping_sites', 'text_page_position' => 3, 'text_title' => 'Glamping Sites Page', 'text_sub_title' => 'Under Maintains', 'text' => 'This is a sample data. This will update soon.',));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'text_page' => 'nature_and_wildlife', 'text_page_position' => 1, 'text_title' => 'Nature and Wildlife Page', 'text_sub_title' => 'Under Maintains', 'text' => 'This is a sample data. This will update soon.',));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'text_page' => 'nature_and_wildlife', 'text_page_position' => 2, 'text_title' => 'Nature and Wildlife Page', 'text_sub_title' => 'Under Maintains', 'text' => 'This is a sample data. This will update soon.',));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'text_page' => 'nature_and_wildlife', 'text_page_position' => 3, 'text_title' => 'Nature and Wildlife Page', 'text_sub_title' => 'Under Maintains', 'text' => 'This is a sample data. This will update soon.',));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'text_page' => 'national_parks', 'text_page_position' => 1, 'text_title' => 'National Park Page', 'text_sub_title' => 'Under Maintains', 'text' => 'This is a sample data. This will update soon.',));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'text_page' => 'national_parks', 'text_page_position' => 2, 'text_title' => 'National Park Page', 'text_sub_title' => 'Under Maintains', 'text' => 'This is a sample data. This will update soon.',));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'text_page' => 'national_parks', 'text_page_position' => 3, 'text_title' => 'National Park Page', 'text_sub_title' => 'Under Maintains', 'text' => 'This is a sample data. This will update soon.',));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'text_page' => 'big_five_with_wanabima', 'text_page_position' => 1, 'text_title' => 'Big Five Page', 'text_sub_title' => 'Under Maintains', 'text' => 'This is a sample data. This will update soon.',));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'text_page' => 'big_five_with_wanabima', 'text_page_position' => 2, 'text_title' => 'Big Five Page', 'text_sub_title' => 'Under Maintains', 'text' => 'This is a sample data. This will update soon.',));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'text_page' => 'big_five_with_wanabima', 'text_page_position' => 3, 'text_title' => 'Big Five Page', 'text_sub_title' => 'Under Maintains', 'text' => 'This is a sample data. This will update soon.',));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'text_page' => 'wanabima_safari', 'text_page_position' => 1, 'text_title' => 'Wanabima Safari Page', 'text_sub_title' => 'Under Maintains', 'text' => 'This is a sample data. This will update soon.',));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'text_page' => 'wanabima_safari', 'text_page_position' => 2, 'text_title' => 'Wanabima Safari Page', 'text_sub_title' => 'Under Maintains', 'text' => 'This is a sample data. This will update soon.',));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'text_page' => 'wanabima_safari', 'text_page_position' => 3, 'text_title' => 'Wanabima Safari Page', 'text_sub_title' => 'Under Maintains', 'text' => 'This is a sample data. This will update soon.',));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'text_page' => 'adventure', 'text_page_position' => 1, 'text_title' => 'Adventures Page', 'text_sub_title' => 'Under Maintains', 'text' => 'This is a sample data. This will update soon.',));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'text_page' => 'adventure', 'text_page_position' => 2, 'text_title' => 'Adventures Page', 'text_sub_title' => 'Under Maintains', 'text' => 'This is a sample data. This will update soon.',));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'text_page' => 'adventure', 'text_page_position' => 3, 'text_title' => 'Adventures Page', 'text_sub_title' => 'Under Maintains', 'text' => 'This is a sample data. This will update soon.',));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'text_page' => 'off_raod_racing', 'text_page_position' => 1, 'text_title' => 'Off Road Page', 'text_sub_title' => 'Under Maintains', 'text' => 'This is a sample data. This will update soon.',));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'text_page' => 'off_raod_racing', 'text_page_position' => 2, 'text_title' => 'Off Road Page', 'text_sub_title' => 'Under Maintains', 'text' => 'This is a sample data. This will update soon.',));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'text_page' => 'off_raod_racing', 'text_page_position' => 3, 'text_title' => 'Off Road Page', 'text_sub_title' => 'Under Maintains', 'text' => 'This is a sample data. This will update soon.',));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'text_page' => 'mud_fun', 'text_page_position' => 1, 'text_title' => 'Mud Fun Page', 'text_sub_title' => 'Under Maintains', 'text' => 'This is a sample data. This will update soon.',));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'text_page' => 'mud_fun', 'text_page_position' => 2, 'text_title' => 'Mud Fun Page', 'text_sub_title' => 'Under Maintains', 'text' => 'This is a sample data. This will update soon.',));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'text_page' => 'mud_fun', 'text_page_position' => 3, 'text_title' => 'Mud Fun Page', 'text_sub_title' => 'Under Maintains', 'text' => 'This is a sample data. This will update soon.',));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'text_page' => '4x4_adventure', 'text_page_position' => 1, 'text_title' => 'Mud Fun Page', 'text_sub_title' => 'Under Maintains', 'text' => 'This is a sample data. This will update soon.',));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'text_page' => '4x4_adventure', 'text_page_position' => 2, 'text_title' => 'Mud Fun Page', 'text_sub_title' => 'Under Maintains', 'text' => 'This is a sample data. This will update soon.',));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'text_page' => '4x4_adventure', 'text_page_position' => 3, 'text_title' => 'Mud Fun Page', 'text_sub_title' => 'Under Maintains', 'text' => 'This is a sample data. This will update soon.',));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'text_page' => 'tours', 'text_page_position' => 1, 'text_title' => 'Tours Page', 'text_sub_title' => 'Under Maintains', 'text' => 'This is a sample data. This will update soon.',));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'text_page' => 'tours', 'text_page_position' => 2, 'text_title' => 'Tours Page', 'text_sub_title' => 'Under Maintains', 'text' => 'This is a sample data. This will update soon.',));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'text_page' => 'tours', 'text_page_position' => 3, 'text_title' => 'Tours Page', 'text_sub_title' => 'Under Maintains', 'text' => 'This is a sample data. This will update soon.',));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'text_page' => 'hideout', 'text_page_position' => 1, 'text_title' => 'Hideout Page', 'text_sub_title' => 'Under Maintains', 'text' => 'This is a sample data. This will update soon.',));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'text_page' => 'hideout', 'text_page_position' => 2, 'text_title' => 'Hideout Page', 'text_sub_title' => 'Under Maintains', 'text' => 'This is a sample data. This will update soon.',));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'text_page' => 'hideout', 'text_page_position' => 3, 'text_title' => 'Hideout Page', 'text_sub_title' => 'Under Maintains', 'text' => 'This is a sample data. This will update soon.',));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'text_page' => 'sand_and_beach', 'text_page_position' => 1, 'text_title' => 'Sand and Beach Page', 'text_sub_title' => 'Under Maintains', 'text' => 'This is a sample data. This will update soon.',));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'text_page' => 'sand_and_beach', 'text_page_position' => 2, 'text_title' => 'Sand and Beach Page', 'text_sub_title' => 'Under Maintains', 'text' => 'This is a sample data. This will update soon.',));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'text_page' => 'sand_and_beach', 'text_page_position' => 3, 'text_title' => 'Sand and Beach Page', 'text_sub_title' => 'Under Maintains', 'text' => 'This is a sample data. This will update soon.',));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'text_page' => 'hilly_and_cozy', 'text_page_position' => 1, 'text_title' => 'Hilly and Cozy Page', 'text_sub_title' => 'Under Maintains', 'text' => 'This is a sample data. This will update soon.',));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'text_page' => 'hilly_and_cozy', 'text_page_position' => 2, 'text_title' => 'Hilly and Cozy Page', 'text_sub_title' => 'Under Maintains', 'text' => 'This is a sample data. This will update soon.',));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'text_page' => 'hilly_and_cozy', 'text_page_position' => 3, 'text_title' => 'Hilly and Cozy Page', 'text_sub_title' => 'Under Maintains', 'text' => 'This is a sample data. This will update soon.',));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'text_page' => 'across_the_paradise', 'text_page_position' => 1, 'text_title' => 'Hilly and Cozy Page', 'text_sub_title' => 'Under Maintains', 'text' => 'This is a sample data. This will update soon.',));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'text_page' => 'across_the_paradise', 'text_page_position' => 2, 'text_title' => 'Hilly and Cozy Page', 'text_sub_title' => 'Under Maintains', 'text' => 'This is a sample data. This will update soon.',));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'text_page' => 'across_the_paradise', 'text_page_position' => 3, 'text_title' => 'Hilly and Cozy Page', 'text_sub_title' => 'Under Maintains', 'text' => 'This is a sample data. This will update soon.',));


        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'text_page' => 'accommodation', 'text_page_position' => 1, 'text_title' => 'Accommodation Page', 'text_sub_title' => 'Under Maintains', 'text' => 'This is a sample data. This will update soon.',));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'text_page' => 'accommodation', 'text_page_position' => 2, 'text_title' => 'Accommodation Page', 'text_sub_title' => 'Under Maintains', 'text' => 'This is a sample data. This will update soon.',));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'text_page' => 'accommodation', 'text_page_position' => 3, 'text_title' => 'Accommodation Page', 'text_sub_title' => 'Under Maintains', 'text' => 'This is a sample data. This will update soon.',));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'text_page' => 'luxury_star_class_hotels', 'text_page_position' => 1, 'text_title' => 'Luxury Star Hotel', 'text_sub_title' => 'Under Maintains', 'text' => 'This is a sample data. This will update soon.',));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'text_page' => 'luxury_star_class_hotels', 'text_page_position' => 2, 'text_title' => 'Luxury Star Hotel', 'text_sub_title' => 'Under Maintains', 'text' => 'This is a sample data. This will update soon.',));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'text_page' => 'luxury_star_class_hotels', 'text_page_position' => 3, 'text_title' => 'Luxury Star Hotel', 'text_sub_title' => 'Under Maintains', 'text' => 'This is a sample data. This will update soon.',));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'text_page' => 'luxury_boutique_hotels', 'text_page_position' => 1, 'text_title' => 'Luxury Boutique Hotel', 'text_sub_title' => 'Under Maintains', 'text' => 'This is a sample data. This will update soon.',));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'text_page' => 'luxury_boutique_hotels', 'text_page_position' => 2, 'text_title' => 'Luxury Boutique Hotel', 'text_sub_title' => 'Under Maintains', 'text' => 'This is a sample data. This will update soon.',));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'text_page' => 'luxury_boutique_hotels', 'text_page_position' => 3, 'text_title' => 'Luxury Boutique Hotel', 'text_sub_title' => 'Under Maintains', 'text' => 'This is a sample data. This will update soon.',));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'text_page' => 'resorts_and_villas', 'text_page_position' => 1, 'text_title' => 'Resort And Villa', 'text_sub_title' => 'Under Maintains', 'text' => 'This is a sample data. This will update soon.',));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'text_page' => 'resorts_and_villas', 'text_page_position' => 2, 'text_title' => 'Resort And Villa', 'text_sub_title' => 'Under Maintains', 'text' => 'This is a sample data. This will update soon.',));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'text_page' => 'resorts_and_villas', 'text_page_position' => 3, 'text_title' => 'Resort And Villa', 'text_sub_title' => 'Under Maintains', 'text' => 'This is a sample data. This will update soon.',));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'text_page' => 'bungalows_and_home_stay', 'text_page_position' => 1, 'text_title' => 'Bungalow and Home', 'text_sub_title' => 'Under Maintains', 'text' => 'This is a sample data. This will update soon.',));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'text_page' => 'bungalows_and_home_stay', 'text_page_position' => 2, 'text_title' => 'Bungalow and Home', 'text_sub_title' => 'Under Maintains', 'text' => 'This is a sample data. This will update soon.',));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'text_page' => 'bungalows_and_home_stay', 'text_page_position' => 3, 'text_title' => 'Bungalow and Home', 'text_sub_title' => 'Under Maintains', 'text' => 'This is a sample data. This will update soon.',));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'text_page' => 'services', 'text_page_position' => 1, 'text_title' => 'Services', 'text_sub_title' => 'Under Maintains', 'text' => 'This is a sample data. This will update soon.',));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'text_page' => 'services', 'text_page_position' => 2, 'text_title' => 'Services', 'text_sub_title' => 'Under Maintains', 'text' => 'This is a sample data. This will update soon.',));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'text_page' => 'services', 'text_page_position' => 3, 'text_title' => 'Services', 'text_sub_title' => 'Under Maintains', 'text' => 'This is a sample data. This will update soon.',));

    }
}

//Create table and insert sample data
register_activation_hook( __FILE__, 'wcc_install' );
register_activation_hook( __FILE__, 'wcc_install_data' );



function page_content_admin_menu() {
    //Create table and insert sample data
    register_activation_hook( __FILE__, 'wcc_install' );
    register_activation_hook( __FILE__, 'wcc_install_data' );

    add_menu_page( 'Page Content', 'Page Content', 'manage_options', 'wanabimaplugin/plugin-page-content-admin-page.php', 'plugin_page_content_admin_page', 'dashicons-tickets', 5  );
}

function plugin_page_content_admin_page(){
    include('admin_controller.php');

}

//Add custom content adding plugin
add_action( 'admin_menu', 'page_content_admin_menu' );

?>