<?php
/**

Plugin Name: Wanabima Feature Image
Description: A plugin to add feature images in page
Author: Emalsha Rasad
Version: 0.1
 */


global $wfi_db_version;
$wfi_db_version = '1.0';

function wfi_install(){
    global $wpdb;
    global $wfi_db_version;

    $table_name = $wpdb->prefix."feature_image";

    $charset_collate = $wpdb->get_charset_collate();

    //id mediumint(9) NOT NULL AUTO_INCREMENT,

    $sql = "CREATE TABLE $table_name (
      id mediumint(9) NOT NULL AUTO_INCREMENT,
      time datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
      feature_page tinytext NOT NULL,
      image_position mediumint(9) NOT NULL,
      feature_title text NOT NULL,
      feature_sub_title text NOT NULL,
      feature_image text NOT NULL,
      url varchar(55) DEFAULT '' NOT NULL,
      PRIMARY KEY  (id)
    ) $charset_collate;";

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $sql );

    add_option('wfi_db_version',$wfi_db_version);
}

function wfi_install_data()
{
    global $wpdb;

    $table_name = $wpdb->prefix . 'feature_image';

    $row_count = $wpdb->get_var("SELECT COUNT(*) FROM " . $table_name);

    if (!$row_count > 0) {

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'home', 'image_position' => 1, 'feature_title' => 'Home Page', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'home', 'image_position' => 2, 'feature_title' => 'Home Page', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'home', 'image_position' => 3, 'feature_title' => 'Home Page', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'home', 'image_position' => 4, 'feature_title' => 'Home Page', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'rent_a_jeep', 'image_position' => 1, 'feature_title' => 'Rent A Jeep Page', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'rent_a_jeep', 'image_position' => 2, 'feature_title' => 'Rent A Jeep Page', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'rent_a_jeep', 'image_position' => 3, 'feature_title' => 'Rent A Jeep Page', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'rent_a_jeep', 'image_position' => 4, 'feature_title' => 'Rent A Jeep Page', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'camping', 'image_position' => 1, 'feature_title' => 'Camping Page', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'camping', 'image_position' => 2, 'feature_title' => 'Camping Page', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'camping', 'image_position' => 3, 'feature_title' => 'Camping Page', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'camping', 'image_position' => 4, 'feature_title' => 'Camping Page', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'camping_site', 'image_position' => 1, 'feature_title' => 'Camping Sites Page', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'camping_site', 'image_position' => 2, 'feature_title' => 'Camping Sites Page', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'camping_site', 'image_position' => 3, 'feature_title' => 'Camping Sites Page', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'camping_site', 'image_position' => 4, 'feature_title' => 'Camping Sites Page', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'glamping_site', 'image_position' => 1, 'feature_title' => 'Glamping Sites Page', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'glamping_site', 'image_position' => 2, 'feature_title' => 'Glamping Sites Page', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'glamping_site', 'image_position' => 3, 'feature_title' => 'Glamping Sites Page', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'glamping_site', 'image_position' => 4, 'feature_title' => 'Glamping Sites Page', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'nature&wild', 'image_position' => 1, 'feature_title' => 'Nature and Wildlife Page', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'nature&wild', 'image_position' => 2, 'feature_title' => 'Nature and Wildlife Page', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'nature&wild', 'image_position' => 3, 'feature_title' => 'Nature and Wildlife Page', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'nature&wild', 'image_position' => 4, 'feature_title' => 'Nature and Wildlife Page', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'national_park', 'image_position' => 1, 'feature_title' => 'National Park Page', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'national_park', 'image_position' => 2, 'feature_title' => 'National Park Page', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'national_park', 'image_position' => 3, 'feature_title' => 'National Park Page', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'national_park', 'image_position' => 4, 'feature_title' => 'National Park Page', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'big_five', 'image_position' => 1, 'feature_title' => 'Big Five Page', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'big_five', 'image_position' => 2, 'feature_title' => 'Big Five Page', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'big_five', 'image_position' => 3, 'feature_title' => 'Big Five Page', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'big_five', 'image_position' => 4, 'feature_title' => 'Big Five Page', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'wanabima_safari', 'image_position' => 1, 'feature_title' => 'Wanabima Safari Page', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'wanabima_safari', 'image_position' => 2, 'feature_title' => 'Wanabima Safari Page', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'wanabima_safari', 'image_position' => 3, 'feature_title' => 'Wanabima Safari Page', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'wanabima_safari', 'image_position' => 4, 'feature_title' => 'Wanabima Safari Page', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => '4x4_adventure', 'image_position' => 1, 'feature_title' => '4x4 Adventures Page', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => '4x4_adventure', 'image_position' => 2, 'feature_title' => '4x4 Adventures Page', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => '4x4_adventure', 'image_position' => 3, 'feature_title' => '4x4 Adventures Page', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => '4x4_adventure', 'image_position' => 4, 'feature_title' => '4x4 Adventures Page', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'off_raod', 'image_position' => 1, 'feature_title' => 'Off Road Page', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'off_raod', 'image_position' => 2, 'feature_title' => 'Off Road Page', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'off_raod', 'image_position' => 3, 'feature_title' => 'Off Road Page', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'off_raod', 'image_position' => 4, 'feature_title' => 'Off Road Page', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'mud_fun', 'image_position' => 1, 'feature_title' => 'Mud Fun Page', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'mud_fun', 'image_position' => 2, 'feature_title' => 'Mud Fun Page', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'mud_fun', 'image_position' => 3, 'feature_title' => 'Mud Fun Page', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'mud_fun', 'image_position' => 4, 'feature_title' => 'Mud Fun Page', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'rally-4x4', 'image_position' => 1, 'feature_title' => 'Mud Fun Page', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'rally-4x4', 'image_position' => 2, 'feature_title' => 'Mud Fun Page', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'rally-4x4', 'image_position' => 3, 'feature_title' => 'Mud Fun Page', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'rally-4x4', 'image_position' => 4, 'feature_title' => 'Mud Fun Page', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'tour', 'image_position' => 1, 'feature_title' => 'Tours Page', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'tour', 'image_position' => 2, 'feature_title' => 'Tours Page', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'tour', 'image_position' => 3, 'feature_title' => 'Tours Page', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'tour', 'image_position' => 4, 'feature_title' => 'Tours Page', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'hideout', 'image_position' => 1, 'feature_title' => 'Hideout Page', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'hideout', 'image_position' => 2, 'feature_title' => 'Hideout Page', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'hideout', 'image_position' => 3, 'feature_title' => 'Hideout Page', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'hideout', 'image_position' => 4, 'feature_title' => 'Hideout Page', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'sandandbeach', 'image_position' => 1, 'feature_title' => 'Sand and Beach Page', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'sandandbeach', 'image_position' => 2, 'feature_title' => 'Sand and Beach Page', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'sandandbeach', 'image_position' => 3, 'feature_title' => 'Sand and Beach Page', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'sandandbeach', 'image_position' => 4, 'feature_title' => 'Sand and Beach Page', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'hillyandcozy', 'image_position' => 1, 'feature_title' => 'Hilly and Cozy Page', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'hillyandcozy', 'image_position' => 2, 'feature_title' => 'Hilly and Cozy Page', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'hillyandcozy', 'image_position' => 3, 'feature_title' => 'Hilly and Cozy Page', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'hillyandcozy', 'image_position' => 4, 'feature_title' => 'Hilly and Cozy Page', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'accommodation', 'image_position' => 1, 'feature_title' => 'Accommodation Page', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'accommodation', 'image_position' => 2, 'feature_title' => 'Accommodation Page', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'accommodation', 'image_position' => 3, 'feature_title' => 'Accommodation Page', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'accommodation', 'image_position' => 4, 'feature_title' => 'Accommodation Page', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'starhotel', 'image_position' => 1, 'feature_title' => 'Luxury Star Hotel', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'starhotel', 'image_position' => 2, 'feature_title' => 'Luxury Star Hotel', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'starhotel', 'image_position' => 3, 'feature_title' => 'Luxury Star Hotel', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'starhotel', 'image_position' => 4, 'feature_title' => 'Luxury Star Hotel', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'boutiquehotel', 'image_position' => 1, 'feature_title' => 'Luxury Boutique Hotel', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'boutiquehotel', 'image_position' => 2, 'feature_title' => 'Luxury Boutique Hotel', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'boutiquehotel', 'image_position' => 3, 'feature_title' => 'Luxury Boutique Hotel', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'boutiquehotel', 'image_position' => 4, 'feature_title' => 'Luxury Boutique Hotel', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'resortandvilla', 'image_position' => 1, 'feature_title' => 'Resort And Villa', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'resortandvilla', 'image_position' => 2, 'feature_title' => 'Resort And Villa', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'resortandvilla', 'image_position' => 3, 'feature_title' => 'Resort And Villa', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'resortandvilla', 'image_position' => 4, 'feature_title' => 'Resort And Villa', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'bungalowandhome', 'image_position' => 1, 'feature_title' => 'Bungalow and Home', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'bungalowandhome', 'image_position' => 2, 'feature_title' => 'Bungalow and Home', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'bungalowandhome', 'image_position' => 3, 'feature_title' => 'Bungalow and Home', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'bungalowandhome', 'image_position' => 4, 'feature_title' => 'Bungalow and Home', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'services', 'image_position' => 1, 'feature_title' => 'Services', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'services', 'image_position' => 2, 'feature_title' => 'Services', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'services', 'image_position' => 3, 'feature_title' => 'Services', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'services', 'image_position' => 4, 'feature_title' => 'Services', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'gallery', 'image_position' => 1, 'feature_title' => 'Gallery', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'gallery', 'image_position' => 2, 'feature_title' => 'Gallery', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'gallery', 'image_position' => 3, 'feature_title' => 'Gallery', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'gallery', 'image_position' => 4, 'feature_title' => 'Gallery', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'contact', 'image_position' => 1, 'feature_title' => 'Contact', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'contact', 'image_position' => 2, 'feature_title' => 'Contact', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'contact', 'image_position' => 3, 'feature_title' => 'Contact', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'contact', 'image_position' => 4, 'feature_title' => 'Contact', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));

        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'inquiry', 'image_position' => 1, 'feature_title' => 'Inquiry', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'inquiry', 'image_position' => 2, 'feature_title' => 'Inquiry', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'inquiry', 'image_position' => 3, 'feature_title' => 'Inquiry', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));
        $wpdb->insert($table_name, array('time' => current_time('mysql'), 'feature_page' => 'inquiry', 'image_position' => 4, 'feature_title' => 'Inquiry', 'feature_sub_title' => 'Under Maintains', 'feature_image' => 'NaN','url'=>''));



    }
}

//Create table and insert sample data
register_activation_hook( __FILE__, 'wfi_install' );
register_activation_hook( __FILE__, 'wfi_install_data' );



function page_feature_image_admin_menu() {
    //Create table and insert sample data
    register_activation_hook( __FILE__, 'wfi_install' );
    register_activation_hook( __FILE__, 'wfi_install_data' );

    add_menu_page( 'Page Feature Image', 'Page Feature Image', 'manage_options', 'wanabimaplugin/plugin-feature-image-admin.php', 'plugin_feature_image_admin', 'dashicons-tickets', 5  );
}

function plugin_feature_image_admin(){
    include('admin_controller.php');

}

//Add custom content adding plugin
add_action( 'admin_menu', 'page_feature_image_admin_menu' );

add_action ( 'admin_enqueue_scripts', function () {
    if (is_admin ())
        wp_enqueue_media ();
} );

?>