<?php
/**
 * Usefull content.
 * User: emalsha
 * Date: 16/03/18
 * Time: 5:11 PM
 */

?>

<div class="wrap">
    <?php if (is_home() && !is_front_page()) : ?>
        <header class="page-header">
            <h1 class="page-title"><?php single_post_title(); ?></h1>
        </header>
    <?php else : ?>
        <header class="page-header">
            <h2 class="page-title"><?php _e('Posts', 'wanabima'); ?></h2>
        </header>
    <?php endif; ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <?php
            if (have_posts()) :

                /* Start the Loop */
                while (have_posts()) : the_post();

                    /*
                     * Include the Post-Format-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                     */
                    get_template_part('template-parts/post/content', get_post_format());

                endwhile;

                the_posts_pagination(array(
                    'prev_text' => wanabima_get_svg(array('icon' => 'arrow-left')) . '<span class="screen-reader-text">' . __('Previous page', 'wanabima') . '</span>',
                    'next_text' => '<span class="screen-reader-text">' . __('Next page', 'wanabima') . '</span>' . wanabima_get_svg(array('icon' => 'arrow-right')),
                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('Page', 'wanabima') . ' </span>',
                ));

            else :

                get_template_part('template-parts/post/content', 'none');

            endif;
            ?>

        </main><!-- #main -->
    </div><!-- #primary -->
    <?php get_sidebar(); ?>
</div><!-- .wrap -->


<!----------------------------------------------------------------------/-->
<?

/**
 * Custom post type for add camp site details.
 */

function camp_site_post_type()
{

// Set UI labels for Custom Post Type
    $labels = array(
        'name' => _x('Camp Site', 'Post Type General Name', 'wanabima'),
        'singular_name' => _x('Camp Site', 'Post Type Singular Name', 'wanabima'),
        'menu_name' => __('Camp Sites', 'wanabima'),
        'parent_item_colon' => __('Parent Camp Site', 'wanabima'),
        'all_items' => __('All Camp Sites', 'wanabima'),
        'view_item' => __('View Camp Site', 'wanabima'),
        'add_new_item' => __('Add New Camp Site', 'wanabima'),
        'add_new' => __('Add New', 'wanabima'),
        'edit_item' => __('Edit Camp Site', 'wanabima'),
        'update_item' => __('Update Camp Site', 'wanabima'),
        'search_items' => __('Search Camp Site', 'wanabima'),
        'not_found' => __('Not Found', 'wanabima'),
        'not_found_in_trash' => __('Not found in Trash', 'wanabima'),
    );

    $args = array(
        'label' => __('camp-site', 'wanabima'),
        'description' => __('Camping site information', 'wanabima'),
        'labels' => $labels,
// Features this CPT supports in Post Editor
        'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'page-attributes'),
// You can associate this CPT with a taxonomy or custom taxonomy.
        'taxonomies' => array('post_tag'),
        'hierarchical' => false,
        'menu_icon' => 'dashicons-location-alt',
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => 'camping_menu',
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
    );

// Registering Custom Post Type
    register_post_type('camp-sites', $args);

}

add_action('init', 'camp_site_post_type', 0);

/**
 * Custom post type for add glamping site details.
 */

function glamping_site_post_type()
{

// Set UI labels for Custom Post Type
    $labels = array(
        'name' => _x('Glamping Site', 'Post Type General Name', 'wanabima'),
        'singular_name' => _x('Glamping Site', 'Post Type Singular Name', 'wanabima'),
        'menu_name' => __('Glamping Sites', 'wanabima'),
        'parent_item_colon' => __('Parent Glamping Site', 'wanabima'),
        'all_items' => __('All Glamping Sites', 'wanabima'),
        'view_item' => __('View Glamping Site', 'wanabima'),
        'add_new_item' => __('Add New Glamping Site', 'wanabima'),
        'add_new' => __('Add New', 'wanabima'),
        'edit_item' => __('Edit Glamping Site', 'wanabima'),
        'update_item' => __('Update Glamping Site', 'wanabima'),
        'search_items' => __('Search Glamping Site', 'wanabima'),
        'not_found' => __('Not Found', 'wanabima'),
        'not_found_in_trash' => __('Not found in Trash', 'wanabima'),
    );

    $args = array(
        'label' => __('glamping-site', 'wanabima'),
        'description' => __('Glamping Site information', 'wanabima'),
        'labels' => $labels,
// Features this CPT supports in Post Editor
        'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'page-attributes'),
// You can associate this CPT with a taxonomy or custom taxonomy.
        'taxonomies' => array('post_tag'),
        'hierarchical' => false,
        'menu_icon' => 'dashicons-location-alt',
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => 'camping_menu',
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
    );

// Registering Custom Post Type
    register_post_type('glamping-sites', $args);

}

add_action('init', 'glamping_site_post_type', 0);


/**
 * Custom post type for add national park details.
 */

function national_park_post_type()
{

// Set UI labels for Custom Post Type
    $labels = array(
        'name' => _x('National Park', 'Post Type General Name', 'wanabima'),
        'singular_name' => _x('National Park Post Type', 'Post Type Singular Name', 'wanabima'),
        'menu_name' => __('National Park', 'wanabima'),
        'parent_item_colon' => __('Parent Item', 'wanabima'),
        'all_items' => __('All National Park Items', 'wanabima'),
        'view_item' => __('View National Park Content ', 'wanabima'),
        'add_new_item' => __('Add New National Park Content', 'wanabima'),
        'add_new' => __('Add New', 'wanabima'),
        'edit_item' => __('Edit National Park Content', 'wanabima'),
        'update_item' => __('Update National Park Content', 'wanabima'),
        'search_items' => __('Search National Park Content', 'wanabima'),
        'not_found' => __('Not Found', 'wanabima'),
        'not_found_in_trash' => __('Not found in Trash', 'wanabima'),
    );

    $args = array(
        'label' => __('national-park', 'wanabima'),
        'description' => __('National Park page information', 'wanabima'),
        'labels' => $labels,
        // Features this CPT supports in Post Editor
        'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'page-attributes'),
        // You can associate this CPT with a taxonomy or custom taxonomy.
        'taxonomies' => array('post_tag'),
        'hierarchical' => false,
        'menu_icon' => 'dashicons-media-archive',
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => 'nature_menu',
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
    );

    // Registering Custom Post Type
    register_post_type('national-park', $args);

}

add_action('init', 'national_park_post_type', 0);

/**
 * Custom post type for add big five with wanabima details.
 */

function big_five_post_type()
{

// Set UI labels for Custom Post Type
    $labels = array(
        'name' => _x('Big Five', 'Post Type General Name', 'wanabima'),
        'singular_name' => _x('Big Five Post Type', 'Post Type Singular Name', 'wanabima'),
        'menu_name' => __('Big Five', 'wanabima'),
        'parent_item_colon' => __('Parent Item', 'wanabima'),
        'all_items' => __('All Big Fives', 'wanabima'),
        'view_item' => __('View Big Fives Content ', 'wanabima'),
        'add_new_item' => __('Add New Big Fives Content', 'wanabima'),
        'add_new' => __('Add New', 'wanabima'),
        'edit_item' => __('Edit Big Fives Content', 'wanabima'),
        'update_item' => __('Update Big Fives Content', 'wanabima'),
        'search_items' => __('Search Big Fives Content', 'wanabima'),
        'not_found' => __('Not Found', 'wanabima'),
        'not_found_in_trash' => __('Not found in Trash', 'wanabima'),
    );

    $args = array(
        'label' => __('big-five-with-wanabima', 'wanabima'),
        'description' => __('Big Fives page information', 'wanabima'),
        'labels' => $labels,
        // Features this CPT supports in Post Editor
        'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'page-attributes'),
        // You can associate this CPT with a taxonomy or custom taxonomy.
        'taxonomies' => array('big-five-with-wanabima'),
        'hierarchical' => false,
        'menu_icon' => 'dashicons-media-archive',
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => 'nature_menu',
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
    );

    // Registering Custom Post Type
    register_post_type('big-five', $args);

}

add_action('init', 'big_five_post_type', 0);


/**
 * Custom post type for add wanabima safari details.
 */

function safari_post_type()
{

// Set UI labels for Custom Post Type
    $labels = array(
        'name' => _x('Safari', 'Post Type General Name', 'wanabima'),
        'singular_name' => _x('Safari Post Type', 'Post Type Singular Name', 'wanabima'),
        'menu_name' => __('Safari', 'wanabima'),
        'parent_item_colon' => __('Parent Item', 'wanabima'),
        'all_items' => __('All Safari', 'wanabima'),
        'view_item' => __('View Safari Content ', 'wanabima'),
        'add_new_item' => __('Add New Safari Content', 'wanabima'),
        'add_new' => __('Add New', 'wanabima'),
        'edit_item' => __('Edit Safari Content', 'wanabima'),
        'update_item' => __('Update Safari Content', 'wanabima'),
        'search_items' => __('Search Safari Content', 'wanabima'),
        'not_found' => __('Not Found', 'wanabima'),
        'not_found_in_trash' => __('Not found in Trash', 'wanabima'),
    );

    $args = array(
        'label' => __('safari-wanabima', 'wanabima'),
        'description' => __('Safari page information', 'wanabima'),
        'labels' => $labels,
        // Features this CPT supports in Post Editor
        'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'custom-fields', 'page-attributes'),
        // You can associate this CPT with a taxonomy or custom taxonomy.
        'taxonomies' => array('post_tag'),
        'hierarchical' => false,
        'menu_icon' => 'dashicons-media-archive',
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => 'nature_menu',
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
    );

    // Registering Custom Post Type
    register_post_type('safari', $args);

}

add_action('init', 'safari_post_type', 0);


/**
 * Custom post type for add national park details.
 */

function off_road_post_type()
{

// Set UI labels for Custom Post Type
    $labels = array(
        'name' => _x('Off Road', 'Post Type General Name', 'wanabima'),
        'singular_name' => _x('Off Road Post Type', 'Post Type Singular Name', 'wanabima'),
        'menu_name' => __('Off Road', 'wanabima'),
        'parent_item_colon' => __('Parent Item', 'wanabima'),
        'all_items' => __('Off Road', 'wanabima'),
        'view_item' => __('View Off Road Content ', 'wanabima'),
        'add_new_item' => __('Add New Off Road Content', 'wanabima'),
        'add_new' => __('Add New', 'wanabima'),
        'edit_item' => __('Edit Off Road Content', 'wanabima'),
        'update_item' => __('Update Off Road Content', 'wanabima'),
        'search_items' => __('Search Off Road Content', 'wanabima'),
        'not_found' => __('Not Found', 'wanabima'),
        'not_found_in_trash' => __('Not found in Trash', 'wanabima'),
    );

    $args = array(
        'label' => __('off-road', 'wanabima'),
        'description' => __('Off Road page information', 'wanabima'),
        'labels' => $labels,
        // Features this CPT supports in Post Editor
        'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'page-attributes'),
        // You can associate this CPT with a taxonomy or custom taxonomy.
        'taxonomies' => array('post_tag'),
        'hierarchical' => false,
        'menu_icon' => 'dashicons-marker',
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => 'adventure_menu',
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
    );

    // Registering Custom Post Type
    register_post_type('off-road', $args);

}

add_action('init', 'off_road_post_type', 0);

/**
 * Custom post type for add mud fun details.
 */

function mud_fun_post_type()
{

// Set UI labels for Custom Post Type
    $labels = array(
        'name' => _x('Mud Fun ', 'Post Type General Name', 'wanabima'),
        'singular_name' => _x('Mud Fun  Post Type', 'Post Type Singular Name', 'wanabima'),
        'menu_name' => __('Mud Fun ', 'wanabima'),
        'parent_item_colon' => __('Parent Item', 'wanabima'),
        'all_items' => __('Mud Fun', 'wanabima'),
        'view_item' => __('View Mud Fun Content ', 'wanabima'),
        'add_new_item' => __('Add New Mud Fun Content', 'wanabima'),
        'add_new' => __('Add New', 'wanabima'),
        'edit_item' => __('Edit Mud Fun Content', 'wanabima'),
        'update_item' => __('Update Mud Fun Content', 'wanabima'),
        'search_items' => __('Search Mud Fun Content', 'wanabima'),
        'not_found' => __('Not Found', 'wanabima'),
        'not_found_in_trash' => __('Not found in Trash', 'wanabima'),
    );

    $args = array(
        'label' => __('mud-fun', 'wanabima'),
        'description' => __('Mud Fun page information', 'wanabima'),
        'labels' => $labels,
        // Features this CPT supports in Post Editor
        'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'page-attributes'),
        // You can associate this CPT with a taxonomy or custom taxonomy.
        'taxonomies' => array('post_tag'),
        'hierarchical' => false,
        'menu_icon' => 'dashicons-marker',
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => 'adventure_menu',
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
    );

    // Registering Custom Post Type
    register_post_type('mud-fun', $args);

}

add_action('init', 'mud_fun_post_type', 0);

/**
 * Custom post type for add 4x4 rally details.
 */

function rally_post_type()
{

// Set UI labels for Custom Post Type
    $labels = array(
        'name' => _x('4x4 Rally', 'Post Type General Name', 'wanabima'),
        'singular_name' => _x('4x4 Rally Post Type', 'Post Type Singular Name', 'wanabima'),
        'menu_name' => __('4x4 Rally', 'wanabima'),
        'parent_item_colon' => __('Parent Item', 'wanabima'),
        'all_items' => __('4x4 Rally', 'wanabima'),
        'view_item' => __('View 4x4 Rally Content ', 'wanabima'),
        'add_new_item' => __('Add New 4x4 Rally Content', 'wanabima'),
        'add_new' => __('Add New', 'wanabima'),
        'edit_item' => __('Edit 4x4 Rally Content', 'wanabima'),
        'update_item' => __('Update 4x4 Rally Content', 'wanabima'),
        'search_items' => __('Search 4x4 Rally Content', 'wanabima'),
        'not_found' => __('Not Found', 'wanabima'),
        'not_found_in_trash' => __('Not found in Trash', 'wanabima'),
    );

    $args = array(
        'label' => __('rally-4x4', 'wanabima'),
        'description' => __('4x4 Rally page information', 'wanabima'),
        'labels' => $labels,
        // Features this CPT supports in Post Editor
        'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'page-attributes'),
        // You can associate this CPT with a taxonomy or custom taxonomy.
        'taxonomies' => array('post_tag'),
        'hierarchical' => false,
        'menu_icon' => 'dashicons-marker',
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => 'adventure_menu',
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
    );

    // Registering Custom Post Type
    register_post_type('rally-4x4', $args);

}

add_action('init', 'rally_post_type', 0);


/**
 * Custom post type for add hideout details.
 */

function tour_hideout_post_type()
{

// Set UI labels for Custom Post Type
    $labels = array(
        'name' => _x('Hideout', 'Post Type General Name', 'wanabima'),
        'singular_name' => _x('Hideout Post Type', 'Post Type Singular Name', 'wanabima'),
        'menu_name' => __('Hideout', 'wanabima'),
        'parent_item_colon' => __('Parent Item', 'wanabima'),
        'all_items' => __('Hideout', 'wanabima'),
        'view_item' => __('View Hideout Content ', 'wanabima'),
        'add_new_item' => __('Add New Hideout Content', 'wanabima'),
        'add_new' => __('Add New', 'wanabima'),
        'edit_item' => __('Edit Hideout Content', 'wanabima'),
        'update_item' => __('Update Hideout Content', 'wanabima'),
        'search_items' => __('Search Hideout Content', 'wanabima'),
        'not_found' => __('Not Found', 'wanabima'),
        'not_found_in_trash' => __('Not found in Trash', 'wanabima'),
    );

    $args = array(
        'label' => __('hideout', 'wanabima'),
        'description' => __('Hideout page information', 'wanabima'),
        'labels' => $labels,
        // Features this CPT supports in Post Editor
        'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'page-attributes'),
        // You can associate this CPT with a taxonomy or custom taxonomy.
        'taxonomies' => array('post_tag'),
        'hierarchical' => false,
        'menu_icon' => 'dashicons-palmtree',
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => 'tours_menu',
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
    );

    // Registering Custom Post Type
    register_post_type('hideout', $args);

}

add_action('init', 'tour_hideout_post_type', 0);

/**
 * Custom post type for add sand and beach details.
 */

function tour_sandandbeach_post_type()
{

// Set UI labels for Custom Post Type
    $labels = array(
        'name' => _x('Sand & Beach', 'Post Type General Name', 'wanabima'),
        'singular_name' => _x('Sand & Beach Post Type', 'Post Type Singular Name', 'wanabima'),
        'menu_name' => __('Sand & Beach', 'wanabima'),
        'parent_item_colon' => __('Parent Item', 'wanabima'),
        'all_items' => __('Sand & Beach', 'wanabima'),
        'view_item' => __('View Sand & Beach Content ', 'wanabima'),
        'add_new_item' => __('Add New Sand & Beach Content', 'wanabima'),
        'add_new' => __('Add New', 'wanabima'),
        'edit_item' => __('Edit Sand & Beach Content', 'wanabima'),
        'update_item' => __('Update Sand & Beach Content', 'wanabima'),
        'search_items' => __('Search Sand & Beach Content', 'wanabima'),
        'not_found' => __('Not Found', 'wanabima'),
        'not_found_in_trash' => __('Not found in Trash', 'wanabima'),
    );

    $args = array(
        'label' => __('sandandbeach', 'wanabima'),
        'description' => __('Sand & Beach page information', 'wanabima'),
        'labels' => $labels,
        // Features this CPT supports in Post Editor
        'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'page-attributes'),
        // You can associate this CPT with a taxonomy or custom taxonomy.
        'taxonomies' => array('post_tag'),
        'hierarchical' => false,
        'menu_icon' => 'dashicons-palmtree',
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => 'tours_menu',
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
    );

    // Registering Custom Post Type
    register_post_type('sandandbeach', $args);

}

add_action('init', 'tour_sandandbeach_post_type', 0);


/**
 * Custom post type for add hilly and cozy details.
 */

function tour_hillyandcozy_post_type()
{

// Set UI labels for Custom Post Type
    $labels = array(
        'name' => _x('Hilly & Cozy', 'Post Type General Name', 'wanabima'),
        'singular_name' => _x('Hilly & Cozy Post Type', 'Post Type Singular Name', 'wanabima'),
        'menu_name' => __('Hilly & Cozy', 'wanabima'),
        'parent_item_colon' => __('Parent Item', 'wanabima'),
        'all_items' => __('Hilly & Cozy', 'wanabima'),
        'view_item' => __('View Hilly & Cozy Content ', 'wanabima'),
        'add_new_item' => __('Add New Hilly & Cozy Content', 'wanabima'),
        'add_new' => __('Add New', 'wanabima'),
        'edit_item' => __('Edit Hilly & Cozy Content', 'wanabima'),
        'update_item' => __('Update Hilly & Cozy Content', 'wanabima'),
        'search_items' => __('Search Hilly & Cozy Content', 'wanabima'),
        'not_found' => __('Not Found', 'wanabima'),
        'not_found_in_trash' => __('Not found in Trash', 'wanabima'),
    );

    $args = array(
        'label' => __('hillyandcozy', 'wanabima'),
        'description' => __('Hilly & Cozy page information', 'wanabima'),
        'labels' => $labels,
        // Features this CPT supports in Post Editor
        'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'page-attributes'),
        // You can associate this CPT with a taxonomy or custom taxonomy.
        'taxonomies' => array('post_tag'),
        'hierarchical' => false,
        'menu_icon' => 'dashicons-palmtree',
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => 'tours_menu',
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
    );

    // Registering Custom Post Type
    register_post_type('hillyandcozy', $args);

}

add_action('init', 'tour_hillyandcozy_post_type', 0);

/**
 * Custom post type for add across the paradise details.
 */

function tour_paradise_post_type()
{

// Set UI labels for Custom Post Type
    $labels = array(
        'name' => _x('Across the Paradise', 'Post Type General Name', 'wanabima'),
        'singular_name' => _x('Across the Paradise Post Type', 'Post Type Singular Name', 'wanabima'),
        'menu_name' => __('Across the Paradise', 'wanabima'),
        'parent_item_colon' => __('Parent Item', 'wanabima'),
        'all_items' => __('Across the Paradise', 'wanabima'),
        'view_item' => __('View Across the Paradise Content ', 'wanabima'),
        'add_new_item' => __('Add New Across the Paradise Content', 'wanabima'),
        'add_new' => __('Add New', 'wanabima'),
        'edit_item' => __('Edit Across the Paradise Content', 'wanabima'),
        'update_item' => __('Update Across the Paradise Content', 'wanabima'),
        'search_items' => __('Search Across the Paradise Content', 'wanabima'),
        'not_found' => __('Not Found', 'wanabima'),
        'not_found_in_trash' => __('Not found in Trash', 'wanabima'),
    );

    $args = array(
        'label' => __('paradise', 'wanabima'),
        'description' => __('Across the Paradise page information', 'wanabima'),
        'labels' => $labels,
        // Features this CPT supports in Post Editor
        'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'page-attributes'),
        // You can associate this CPT with a taxonomy or custom taxonomy.
        'taxonomies' => array('post_tag'),
        'hierarchical' => false,
        'menu_icon' => 'dashicons-palmtree',
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => 'tours_menu',
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
    );

    // Registering Custom Post Type
    register_post_type('paradise', $args);

}

add_action('init', 'tour_paradise_post_type', 0);


/**
 * Custom post type for add Star hotel details.
 */

function acco_star_hotel_post_type()
{

// Set UI labels for Custom Post Type
    $labels = array(
        'name' => _x('Star Class Hotel', 'Post Type General Name', 'wanabima'),
        'singular_name' => _x('Star Class Hotel Post Type', 'Post Type Singular Name', 'wanabima'),
        'menu_name' => __('Star Class Hotel', 'wanabima'),
        'parent_item_colon' => __('Parent Item', 'wanabima'),
        'all_items' => __('Star Class Hotel', 'wanabima'),
        'view_item' => __('View Star Class Hotel Content ', 'wanabima'),
        'add_new_item' => __('Add New Star Class Hotel Content', 'wanabima'),
        'add_new' => __('Add New', 'wanabima'),
        'edit_item' => __('Edit Star Class Hotel  Content', 'wanabima'),
        'update_item' => __('Update Star Class Hotel Content', 'wanabima'),
        'search_items' => __('Search Star Class Hotel Content', 'wanabima'),
        'not_found' => __('Not Found', 'wanabima'),
        'not_found_in_trash' => __('Not found in Trash', 'wanabima'),
    );

    $args = array(
        'label' => __('star_hotel', 'wanabima'),
        'description' => __('Star Class Hotel page information', 'wanabima'),
        'labels' => $labels,
        // Features this CPT supports in Post Editor
        'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'page-attributes'),
        // You can associate this CPT with a taxonomy or custom taxonomy.
        'taxonomies' => array('post_tag'),
        'hierarchical' => false,
        'menu_icon' => 'dashicons-palmtree',
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => 'accommodation_menu',
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
    );

    // Registering Custom Post Type
    register_post_type('starhotel', $args);

}

add_action('init', 'acco_star_hotel_post_type', 0);


/**
 * Custom post type for add boutique hotel details.
 */

function acco_boutique_hotel_post_type()
{

// Set UI labels for Custom Post Type
    $labels = array(
        'name' => _x('Boutique Hotel', 'Post Type General Name', 'wanabima'),
        'singular_name' => _x('Boutique Hotel Post Type', 'Post Type Singular Name', 'wanabima'),
        'menu_name' => __('Boutique Hotel', 'wanabima'),
        'parent_item_colon' => __('Parent Item', 'wanabima'),
        'all_items' => __('Boutique Hotel', 'wanabima'),
        'view_item' => __('View Boutique Hotel Content ', 'wanabima'),
        'add_new_item' => __('Add New Boutique Hotel Content', 'wanabima'),
        'add_new' => __('Add New', 'wanabima'),
        'edit_item' => __('Edit Boutique Hotel Content', 'wanabima'),
        'update_item' => __('Update Boutique Hotel Content', 'wanabima'),
        'search_items' => __('Search Boutique Hotel Content', 'wanabima'),
        'not_found' => __('Not Found', 'wanabima'),
        'not_found_in_trash' => __('Not found in Trash', 'wanabima'),
    );

    $args = array(
        'label' => __('boutique_hotel', 'wanabima'),
        'description' => __('Boutique Hotel page information', 'wanabima'),
        'labels' => $labels,
        // Features this CPT supports in Post Editor
        'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'page-attributes'),
        // You can associate this CPT with a taxonomy or custom taxonomy.
        'taxonomies' => array('post_tag'),
        'hierarchical' => false,
        'menu_icon' => 'dashicons-palmtree',
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => 'accommodation_menu',
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
    );

    // Registering Custom Post Type
    register_post_type('boutiquehotel', $args);

}

add_action('init', 'acco_boutique_hotel_post_type', 0);


/**
 * Custom post type for add resort and villa details.
 */

function acco_resort_villa_post_type()
{

// Set UI labels for Custom Post Type
    $labels = array(
        'name' => _x('Resort and Villa', 'Post Type General Name', 'wanabima'),
        'singular_name' => _x('Resort and Villa Post Type', 'Post Type Singular Name', 'wanabima'),
        'menu_name' => __('Resort and Villa', 'wanabima'),
        'parent_item_colon' => __('Parent Item', 'wanabima'),
        'all_items' => __('Resort and Villa', 'wanabima'),
        'view_item' => __('View Resort and Villa Content ', 'wanabima'),
        'add_new_item' => __('Add New Resort and Villa Content', 'wanabima'),
        'add_new' => __('Add New', 'wanabima'),
        'edit_item' => __('Edit Resort and Villa Content', 'wanabima'),
        'update_item' => __('Update Resort and Villa Content', 'wanabima'),
        'search_items' => __('Search Resort and Villa Content', 'wanabima'),
        'not_found' => __('Not Found', 'wanabima'),
        'not_found_in_trash' => __('Not found in Trash', 'wanabima'),
    );

    $args = array(
        'label' => __('resortandvilla', 'wanabima'),
        'description' => __('Resort and Villa page information', 'wanabima'),
        'labels' => $labels,
        // Features this CPT supports in Post Editor
        'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'page-attributes'),
        // You can associate this CPT with a taxonomy or custom taxonomy.
        'taxonomies' => array('post_tag'),
        'hierarchical' => false,
        'menu_icon' => 'dashicons-palmtree',
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => 'accommodation_menu',
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
    );

    // Registering Custom Post Type
    register_post_type('resortandvilla', $args);

}

add_action('init', 'acco_resort_villa_post_type', 0);


/**
 * Custom post type for add bungalow and home details.
 */

function acco_bungalow_home_post_type()
{

// Set UI labels for Custom Post Type
    $labels = array(
        'name' => _x('Bungalow and Home', 'Post Type General Name', 'wanabima'),
        'singular_name' => _x('Bungalow and Home Post Type', 'Post Type Singular Name', 'wanabima'),
        'menu_name' => __('Bungalow and Home', 'wanabima'),
        'parent_item_colon' => __('Parent Item', 'wanabima'),
        'all_items' => __('Bungalow and Home', 'wanabima'),
        'view_item' => __('View Bungalow and Home Content ', 'wanabima'),
        'add_new_item' => __('Add New Bungalow and Home Content', 'wanabima'),
        'add_new' => __('Add New', 'wanabima'),
        'edit_item' => __('Edit Bungalow and Home Content', 'wanabima'),
        'update_item' => __('Update Bungalow and Home Content', 'wanabima'),
        'search_items' => __('Search Bungalow and Home Content', 'wanabima'),
        'not_found' => __('Not Found', 'wanabima'),
        'not_found_in_trash' => __('Not found in Trash', 'wanabima'),
    );

    $args = array(
        'label' => __('bungalowandhome', 'wanabima'),
        'description' => __('Bungalow and Home page information', 'wanabima'),
        'labels' => $labels,
        // Features this CPT supports in Post Editor
        'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'page-attributes'),
        // You can associate this CPT with a taxonomy or custom taxonomy.
        'taxonomies' => array('post_tag'),
        'hierarchical' => false,
        'menu_icon' => 'dashicons-palmtree',
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => 'accommodation_menu',
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
    );

    // Registering Custom Post Type
    register_post_type('bungalowandhome', $args);

}

add_action('init', 'acco_bungalow_home_post_type', 0);

/**
 * Add custom post type to admin menu categories
 *
 */

add_action('admin_menu', 'register_my_page');
function register_my_page()
{
//    add_menu_page('Camping', 'Camping', 'edit_others_posts', 'camping_menu', function () {
//        echo "Camping Page";
//    }, 'dashicons-arrow-right', 6);
//    add_menu_page('Nature & Wildlife', 'Nature & Wildlife', 'edit_others_posts', 'nature_menu', function () {
//        echo "Nature & Wildlife Page";
//    }, 'dashicons-arrow-right', 6);
//    add_menu_page('4x4 Adventure', '4x4 Adventure', 'edit_others_posts', 'adventure_menu', function () {
//        echo "4x4 Adventure Page";
//    }, 'dashicons-arrow-right', 6);
//    add_menu_page('Tours', 'Tours', 'edit_others_posts', 'tours_menu', function () {
//        echo "Tours Page";
//    }, 'dashicons-arrow-right', 6);
//    add_menu_page('Accommodation', 'Accommodation', 'edit_others_posts', 'accommodation_menu', function () {
//        echo "Accommodation Page";
//    }, 'dashicons-arrow-right', 6);
}

//Camp site
new MultiPostThumbnails(array(
    'label' => 'Second Image',
    'id' => 'second-image',
    'post_type' => 'camp-sites'
));
new MultiPostThumbnails(array(
    'label' => 'Third Image',
    'id' => 'third-image',
    'post_type' => 'camp-sites'
));
new MultiPostThumbnails(array(
    'label' => 'Forth Image',
    'id' => 'forth-image',
    'post_type' => 'camp-sites'
));
new MultiPostThumbnails(array(
    'label' => 'Fifth Image',
    'id' => 'fifth-image',
    'post_type' => 'camp-sites'
));

//Glamp site
new MultiPostThumbnails(array(
    'label' => 'Second Image',
    'id' => 'second-image',
    'post_type' => 'glamping-sites'
));
new MultiPostThumbnails(array(
    'label' => 'Third Image',
    'id' => 'third-image',
    'post_type' => 'glamping-sites'
));
new MultiPostThumbnails(array(
    'label' => 'Forth Image',
    'id' => 'forth-image',
    'post_type' => 'glamping-sites'
));
new MultiPostThumbnails(array(
    'label' => 'Fifth Image',
    'id' => 'fifth-image',
    'post_type' => 'glamping-sites'
));

//start hotel
new MultiPostThumbnails(array(
    'label' => 'Second Image',
    'id' => 'second-image',
    'post_type' => 'starhotel'
));
new MultiPostThumbnails(array(
    'label' => 'Third Image',
    'id' => 'third-image',
    'post_type' => 'starhotel'
));
new MultiPostThumbnails(array(
    'label' => 'Forth Image',
    'id' => 'forth-image',
    'post_type' => 'starhotel'
));
new MultiPostThumbnails(array(
    'label' => 'Fifth Image',
    'id' => 'fifth-image',
    'post_type' => 'starhotel'
));

//boutiquehotel
new MultiPostThumbnails(array(
    'label' => 'Second Image',
    'id' => 'second-image',
    'post_type' => 'boutiquehotel'
));
new MultiPostThumbnails(array(
    'label' => 'Third Image',
    'id' => 'third-image',
    'post_type' => 'boutiquehotel'
));
new MultiPostThumbnails(array(
    'label' => 'Forth Image',
    'id' => 'forth-image',
    'post_type' => 'boutiquehotel'
));
new MultiPostThumbnails(array(
    'label' => 'Fifth Image',
    'id' => 'fifth-image',
    'post_type' => 'boutiquehotel'
));

//resortandvilla
new MultiPostThumbnails(array(
    'label' => 'Second Image',
    'id' => 'second-image',
    'post_type' => 'resortandvilla'
));
new MultiPostThumbnails(array(
    'label' => 'Third Image',
    'id' => 'third-image',
    'post_type' => 'resortandvilla'
));
new MultiPostThumbnails(array(
    'label' => 'Forth Image',
    'id' => 'forth-image',
    'post_type' => 'resortandvilla'
));
new MultiPostThumbnails(array(
    'label' => 'Fifth Image',
    'id' => 'fifth-image',
    'post_type' => 'resortandvilla'
));

//bungalowandhome
new MultiPostThumbnails(array(
    'label' => 'Second Image',
    'id' => 'second-image',
    'post_type' => 'bungalowandhome'
));
new MultiPostThumbnails(array(
    'label' => 'Third Image',
    'id' => 'third-image',
    'post_type' => 'bungalowandhome'
));
new MultiPostThumbnails(array(
    'label' => 'Forth Image',
    'id' => 'forth-image',
    'post_type' => 'bungalowandhome'
));
new MultiPostThumbnails(array(
    'label' => 'Fifth Image',
    'id' => 'fifth-image',
    'post_type' => 'bungalowandhome'
));

//hideout
new MultiPostThumbnails(array(
    'label' => 'Second Image',
    'id' => 'second-image',
    'post_type' => 'hideout'
));
new MultiPostThumbnails(array(
    'label' => 'Third Image',
    'id' => 'third-image',
    'post_type' => 'hideout'
));
new MultiPostThumbnails(array(
    'label' => 'Forth Image',
    'id' => 'forth-image',
    'post_type' => 'hideout'
));
new MultiPostThumbnails(array(
    'label' => 'Fifth Image',
    'id' => 'fifth-image',
    'post_type' => 'hideout'
));


//sand and beach
new MultiPostThumbnails(array(
    'label' => 'Second Image',
    'id' => 'second-image',
    'post_type' => 'sandandbeach'
));
new MultiPostThumbnails(array(
    'label' => 'Third Image',
    'id' => 'third-image',
    'post_type' => 'sandandbeach'
));
new MultiPostThumbnails(array(
    'label' => 'Forth Image',
    'id' => 'forth-image',
    'post_type' => 'sandandbeach'
));
new MultiPostThumbnails(array(
    'label' => 'Fifth Image',
    'id' => 'fifth-image',
    'post_type' => 'sandandbeach'
));

//hilly and cozy
new MultiPostThumbnails(array(
    'label' => 'Second Image',
    'id' => 'second-image',
    'post_type' => 'hillyandcozy'
));
new MultiPostThumbnails(array(
    'label' => 'Third Image',
    'id' => 'third-image',
    'post_type' => 'hillyandcozy'
));
new MultiPostThumbnails(array(
    'label' => 'Forth Image',
    'id' => 'forth-image',
    'post_type' => 'hillyandcozy'
));
new MultiPostThumbnails(array(
    'label' => 'Fifth Image',
    'id' => 'fifth-image',
    'post_type' => 'hillyandcozy'
));

//across the paradise
new MultiPostThumbnails(array(
    'label' => 'Second Image',
    'id' => 'second-image',
    'post_type' => 'paradise'
));
new MultiPostThumbnails(array(
    'label' => 'Third Image',
    'id' => 'third-image',
    'post_type' => 'paradise'
));
new MultiPostThumbnails(array(
    'label' => 'Forth Image',
    'id' => 'forth-image',
    'post_type' => 'paradise'
));
new MultiPostThumbnails(array(
    'label' => 'Fifth Image',
    'id' => 'fifth-image',
    'post_type' => 'paradise'
));

//mud-fun
new MultiPostThumbnails(array(
    'label' => 'Second Image',
    'id' => 'second-image',
    'post_type' => 'mud-fun'
));
new MultiPostThumbnails(array(
    'label' => 'Third Image',
    'id' => 'third-image',
    'post_type' => 'mud-fun'
));
new MultiPostThumbnails(array(
    'label' => 'Forth Image',
    'id' => 'forth-image',
    'post_type' => 'mud-fun'
));
new MultiPostThumbnails(array(
    'label' => 'Fifth Image',
    'id' => 'fifth-image',
    'post_type' => 'mud-fun'
));

//rally 4x4
new MultiPostThumbnails(array(
    'label' => 'Second Image',
    'id' => 'second-image',
    'post_type' => 'rally-4x4'
));
new MultiPostThumbnails(array(
    'label' => 'Third Image',
    'id' => 'third-image',
    'post_type' => 'rally-4x4'
));
new MultiPostThumbnails(array(
    'label' => 'Forth Image',
    'id' => 'forth-image',
    'post_type' => 'rally-4x4'
));
new MultiPostThumbnails(array(
    'label' => 'Fifth Image',
    'id' => 'fifth-image',
    'post_type' => 'rally-4x4'
));

//    TO DELETE
function country_post_type()
{

// Set UI labels for Custom Post Type
    $labels = array(
        'name' => _x('Country', 'Post Type General Name', 'wanabima'),
        'singular_name' => _x('Country Post Type', 'Post Type Singular Name', 'wanabima'),
        'menu_name' => __('Country', 'wanabima'),
        'parent_item_colon' => __('Parent Item', 'wanabima'),
        'all_items' => __('Country', 'wanabima'),
        'view_item' => __('View Hideout Content ', 'wanabima'),
        'add_new_item' => __('Add New Hideout Content', 'wanabima'),
        'add_new' => __('Add New', 'wanabima'),
        'edit_item' => __('Edit Hideout Content', 'wanabima'),
        'update_item' => __('Update Hideout Content', 'wanabima'),
        'search_items' => __('Search Hideout Content', 'wanabima'),
        'not_found' => __('Not Found', 'wanabima'),
        'not_found_in_trash' => __('Not found in Trash', 'wanabima'),
    );

    $args = array(
        'label' => __('country', 'wanabima'),
        'description' => __('Country page information', 'wanabima'),
        'labels' => $labels,
        // Features this CPT supports in Post Editor
        'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'page-attributes'),
        // You can associate this CPT with a taxonomy or custom taxonomy.
        'taxonomies' => array('country_taxonomy'),
        'hierarchical' => false,
        'menu_icon' => 'dashicons-palmtree',
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
//        'rewrite' => array('slug' => 'country/%country_taxonomy%','with_front' => FALSE),
    );

    // Registering Custom Post Type
    register_post_type('country', $args);

}

add_action('init', 'country_post_type', 0);

function country_taxonomy()
{

    register_taxonomy(
        'country_taxonomy',
        'country',
//        array(
//            'label' => __( 'Asian Category' ),
//            'rewrite' => array( 'slug' => 'asian' ),
//            'hierarchical' => true,
//        )
        array(
            'hierarchical' => true,
            'label' => 'Country Taxonomy',  //Display name
            'query_var' => true,
            'rewrite' => array(
                'slug' => 'countryType', // This controls the base slug that will display before each term
                'with_front' => false // Don't display the category base before
            )
        )
    );

}

add_action('init', 'country_taxonomy');

function filter_post_type_link($link, $post)
{
    if ($post->post_type != 'country')
        return $link;

    if ($cats = get_the_terms($post->ID, 'country_taxonomy')) {
        $link = str_replace('%country_taxonomy%', array_pop($cats)->slug, $link);
    } else {
        $link = str_replace('%country_taxonomy%', "", $link);
    }

    return $link;
}

add_filter('post_type_link', 'filter_post_type_link', 10, 2);


function europe_taxonomy()
{

    register_taxonomy(
        'europe',
        'post',
        array(
            'label' => __('Europe Category'),
            'rewrite' => array('slug' => 'europe'),
            'hierarchical' => true,
            'sort' => true,
        )
    );
}

add_action('init', 'europe_taxonomy');


?>


1	Home			https://www.wanabima.com
2	Rent A Jeep			https://www.wanabima.com/rent-a-suv-4x4-jeep-sri-lanka
3	Camping			https://www.wanabima.com/camping-sri-lanka
4	Camping Sites		https://www.wanabima.com/camping-sri-lanka/tented-safari-camping-sri-lanka
5	Glamping Sites		https://www.wanabima.com/camping-sri-lanka/glamping-sri-lanka
6	Nature & Wildlife 			https://www.wanabima.com/nature-wildlife
7	National Parks		https://www.wanabima.com/nature-wildlife/sri-lanka-national-parks
8	Big Five With Wanabima		https://www.wanabima.com/nature-wildlife/sri-lanka-wildlife-tours
9	The Sloth Bear Season	https://www.wanabima.com/nature-wildlife/sri-lanka-wildlife-tours/sloth-bear
10	The Asian Elephant Season	https://www.wanabima.com/nature-wildlife/sri-lanka-wildlife-tours/sri-lankan-elephant
11	The Leopard Season	https://www.wanabima.com/nature-wildlife/sri-lanka-wildlife-tours/sri-lankan-leopard
12	The Blue Whale Season	https://www.wanabima.com/nature-wildlife/sri-lanka-wildlife-tours/whale-watching-sri-lanka
13	The Sperm Whale Season	https://www.wanabima.com/nature-wildlife/sri-lanka-wildlife-tours/sri-lanka-whale-watching-holidays
14	Wanabima Safari 		https://www.wanabima.com/sri-lanka-safari-holidays
15	Adventure 			https://www.wanabima.com/adventure-sri-lanka
16	4X4 Adventure		https://www.wanabima.com/adventure-sri-lanka/4X4-suv-jeep-adventure
17	Water Sports		https://www.wanabima.com/adventure-sri-lanka/surfing-sri-lanka
18	Land & Offroad		https://www.wanabima.com/adventure-sri-lanka/offroad-sri-lanka
19	Tours 			https://www.wanabima.com/sri-lanka-tour-packages
20	Hideout 		https://www.wanabima.com/sri-lanka-tour-packages/hideout
21	Sand and Beach		https://www.wanabima.com/sri-lanka-tour-packages/sri-lanka-beach-holidays
22	Hilly and Cozy 		https://www.wanabima.com/sri-lanka-tour-packages/hill-country-sri-lanka
23	Across the Paradise		https://www.wanabima.com/sri-lanka-tour-packages/sri-lanka-travel
24	Accommodation			https://www.wanabima.com/sri-lanka-holidays
25	Luxury Star Class Hotels		https://www.wanabima.com/sri-lanka-holidays/luxury-hotels-sri-lanka
26	Luxury boutique hotels		https://www.wanabima.com/sri-lanka-holidays/boutique-hotels-sri-lanka
27	Resorts and Villas		https://www.wanabima.com/sri-lanka-holidays/sri-lanka-resorts
28	Bungalows and Home Stay  		https://www.wanabima.com/sri-lanka-holidays/bungalows-sri-lanka
29	Services 			https://www.wanabima.com/adventure-camping-gear-sri-lanka
30	Gallery			https://www.wanabima.com/gallery
31	Contact Us			https://www.wanabima.com/contact-us
32	About Us			https://www.wanabima.com/travel-agent-sri-lanka
33	About Sri Lanka 			https://www.wanabima.com/sri-lanka-tourism
34	Testimonials 			https://www.wanabima.com/travel-reviews-sri-lanka
35	Privacy Policy			https://www.wanabima.com/privacy-policy
36	Terms & Conditions 			https://www.wanabima.com/terms-and-conditions
37	Sitemap			https://www.wanabima.com/sitemap

Rent A Jeep			rent-a-suv-4x4-jeep-sri-lanka
Camping			camping-sri-lanka
Camping Sites		tented-safari-camping-sri-lanka
Glamping Sites		glamping-sri-lanka
Nature & Wildlife 			nature-wildlife
National Parks		sri-lanka-national-parks
Big Five With Wanabima		sri-lanka-wildlife-tours
The Sloth Bear Season	sloth-bear
The Asian Elephant Season	sri-lankan-elephant
The Leopard Season	sri-lankan-leopard
The Blue Whale Season	whale-watching-sri-lanka
The Sperm Whale Season	sri-lanka-whale-watching-holidays
Wanabima Safari 		sri-lanka-safari-holidays
Adventure 			adventure-sri-lanka
4X4 Adventure		4X4-suv-jeep-adventure
Water Sports		surfing-sri-lanka
Land & Offroad		offroad-sri-lanka
Tours 			sri-lanka-tour-packages
Hideout 		hideout
Sand and Beach		sri-lanka-beach-holidays
Hilly and Cozy 		hill-country-sri-lanka
Across the Paradise		sri-lanka-travel
Accommodation			sri-lanka-holidays
Luxury Star Class Hotels		luxury-hotels-sri-lanka
Luxury boutique hotels		boutique-hotels-sri-lanka
Resorts and Villas		sri-lanka-resorts
Bungalows and Home Stay  		bungalows-sri-lanka
