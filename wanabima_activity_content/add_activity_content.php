<?php
/**

Plugin Name: Wanabima activity content
Description: A plugin to add activity content in home page
Author: Emalsha Rasad
Version: 0.1
*/


global $wac_db_version;
$wac_db_version = '1.0';

function wac_install(){
    global $wpdb;
    global $wac_db_version;

    $table_name = $wpdb->prefix."activitycontent";

    $charset_collate = $wpdb->get_charset_collate();

    //id mediumint(9) NOT NULL AUTO_INCREMENT,

    $sql = "CREATE TABLE $table_name (
      id mediumint(9) NOT NULL AUTO_INCREMENT,
      content_position mediumint(9) NOT NULL,
      content_title text NOT NULL,
      content_sub_title text DEFAULT '' NOT NULL,
      content_image text NOT NULL,
      url varchar(55) DEFAULT '' NOT NULL,
      PRIMARY KEY  (id)
    ) $charset_collate;";

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $sql );

    add_option('wac_db_version',$wac_db_version);
}

function wac_install_data()
{
    global $wpdb;

    $table_name = $wpdb->prefix . 'activitycontent';

    $row_count = $wpdb->get_var("SELECT COUNT(*) FROM " . $table_name);

    if (!$row_count > 0) {

        $wpdb->insert($table_name, array('content_position' => '1', 'content_title' => 'ACTIVITY 1', 'content_image' => 'NaN'));
        $wpdb->insert($table_name, array('content_position' => '2', 'content_title' => 'ACTIVITY 2', 'content_image' => 'NaN'));
        $wpdb->insert($table_name, array('content_position' => '3', 'content_title' => 'ACTIVITY 3', 'content_image' => 'NaN'));
        $wpdb->insert($table_name, array('content_position' => '4', 'content_title' => 'ACTIVITY 4', 'content_image' => 'NaN'));
        $wpdb->insert($table_name, array('content_position' => '5', 'content_title' => 'ACTIVITY 5', 'content_image' => 'NaN'));

    }
}

//Create table and insert sample data
register_activation_hook( __FILE__, 'wac_install' );
register_activation_hook( __FILE__, 'wac_install_data' );



function page_activity_admin_menu() {
    //Create table and insert sample data
    register_activation_hook( __FILE__, 'wac_install' );
    register_activation_hook( __FILE__, 'wac_install_data' );

    add_menu_page( 'Home Page Activity', 'Home Page Activity', 'manage_options', 'wanabimaplugin/plugin-activity-admin-page.php', 'plugin_activity_admin_page', 'dashicons-tickets', 5  );
}

function plugin_activity_admin_page(){
    include('admin_controller.php');
}

//Add activity content adding plugin
add_action( 'admin_menu', 'page_activity_admin_menu' );

add_action ( 'admin_enqueue_scripts', function () {
    if (is_admin ())
        wp_enqueue_media ();
} );

?>