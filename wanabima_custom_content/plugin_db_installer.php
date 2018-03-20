<?php
/**
 * Created by PhpStorm.
 * User: emalsha
 * Date: 15/03/18
 * Time: 12:47 PM
 */

global $wcc_db_version;
$wcc_db_version = '1.0';

function wcc_install(){
    global $wpdb;
    global $wcc_db_version;

    $table_name = $wpdb->prefix."customcontent";

    $charset_collate = $wpdb->get_charset_collate();

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

function wcc_install_data() {
    global $wpdb;

    $welcome_page = 'home';
    $welcome_page_position = 1;
    $welcome_text = 'Congratulations, you just completed the installation!';
    $welcome_text_title = 'Welcome Title';
    $welcome_text_sub_title = 'Welcome Sub Title';

    $table_name = $wpdb->prefix . 'customcontent';

    $wpdb->insert(
        $table_name,
        array(
            'time' => current_time( 'mysql' ),
            'text_page' => $welcome_page,
            'text_page_position' => $welcome_page_position,
            'text_title' => $welcome_text_title,
            'text_sub_title' => $welcome_text_sub_title,
            'text' => $welcome_text,
        )
    );
}
