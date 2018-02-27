<?php
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
if ( version_compare( $GLOBALS['wp_version'], '4.7-alpha', '<' ) ) {
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
function wanabima_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/wanabima
	 * If you're building a theme based on Wanabima, use a find and replace
	 * to change 'wanabima' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'wanabima' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	add_image_size( 'wanabima-featured-image', 2000, 1200, true );

	add_image_size( 'wanabima-thumbnail-avatar', 100, 100, true );

	// Set the default content width.
	$GLOBALS['content_width'] = 525;

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'top'    => __( 'Top Menu', 'wanabima' ),
		'social' => __( 'Social Links Menu', 'wanabima' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
	) );

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, and column width.
 	 */
	add_editor_style( array( 'assets/css/editor-style.css', wanabima_fonts_url() ) );

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
				'post_title' => _x( 'About', 'Theme starter content', 'wanabima' ),
				'file' => 'assets/images/image1.jpg', // URL relative to the template directory.
			),
			'image-contact' => array(
				'post_title' => _x( 'Contact', 'Theme starter content', 'wanabima' ),
				'file' => 'assets/images/image2.jpg',
			),
			'image-blog' => array(
				'post_title' => _x( 'Blog', 'Theme starter content', 'wanabima' ),
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
				'name' => __( 'Top Menu', 'wanabima' ),
				'items' => array(
					'link_home', // Note that the core "home" page is actually a link in case a static front page is not used.
					'page_about',
					'page_blog',
					'page_contact',
				),
			),

			// Assign a menu to the "social" location.
			'social' => array(
				'name' => __( 'Social Links Menu', 'wanabima' ),
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
	$starter_content = apply_filters( 'wanabima_starter_content', $starter_content );

	add_theme_support( 'starter-content', $starter_content );
}
add_action( 'after_setup_theme', 'wanabima_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wanabima_content_width() {

	$content_width = $GLOBALS['content_width'];

	// Get layout.
	$page_layout = get_theme_mod( 'page_layout' );

	// Check if layout is one column.
	if ( 'one-column' === $page_layout ) {
		if ( wanabima_is_frontpage() ) {
			$content_width = 644;
		} elseif ( is_page() ) {
			$content_width = 740;
		}
	}

	// Check if is single post and there is no sidebar.
	if ( is_single() && ! is_active_sidebar( 'sidebar-1' ) ) {
		$content_width = 740;
	}

	/**
	 * Filter Wanabima content width of the theme.
	 *
	 * @since Wanabima 1.0
	 *
	 * @param int $content_width Content width in pixels.
	 */
	$GLOBALS['content_width'] = apply_filters( 'wanabima_content_width', $content_width );
}
add_action( 'template_redirect', 'wanabima_content_width', 0 );

/**
 * Register custom fonts.
 */
function wanabima_fonts_url() {
	$fonts_url = '';

	/*
	 * Translators: If there are characters in your language that are not
	 * supported by Libre Franklin, translate this to 'off'. Do not translate
	 * into your own language.
	 */
	$libre_franklin = _x( 'on', 'Libre Franklin font: on or off', 'wanabima' );

	if ( 'off' !== $libre_franklin ) {
		$font_families = array();

		$font_families[] = 'Libre Franklin:300,300i,400,400i,600,600i,800,800i';

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);

		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return esc_url_raw( $fonts_url );
}

/**
 * Add preconnect for Google Fonts.
 *
 * @since Wanabima 1.0
 *
 * @param array  $urls           URLs to print for resource hints.
 * @param string $relation_type  The relation type the URLs are printed.
 * @return array $urls           URLs to print for resource hints.
 */
function wanabima_resource_hints( $urls, $relation_type ) {
	if ( wp_style_is( 'wanabima-fonts', 'queue' ) && 'preconnect' === $relation_type ) {
		$urls[] = array(
			'href' => 'https://fonts.gstatic.com',
			'crossorigin',
		);
	}

	return $urls;
}
add_filter( 'wp_resource_hints', 'wanabima_resource_hints', 10, 2 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wanabima_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'wanabima' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'wanabima' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 1', 'wanabima' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add widgets here to appear in your footer.', 'wanabima' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 2', 'wanabima' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Add widgets here to appear in your footer.', 'wanabima' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'wanabima_widgets_init' );

/**
 * Replaces "[...]" (appended to automatically generated excerpts) with ... and
 * a 'Continue reading' link.
 *
 * @since Wanabima 1.0
 *
 * @param string $link Link to single post/page.
 * @return string 'Continue reading' link prepended with an ellipsis.
 */
function wanabima_excerpt_more( $link ) {
	if ( is_admin() ) {
		return $link;
	}

	$link = sprintf( '<p class="link-more"><a href="%1$s" class="more-link">%2$s</a></p>',
		esc_url( get_permalink( get_the_ID() ) ),
		/* translators: %s: Name of current post */
		sprintf( __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'wanabima' ), get_the_title( get_the_ID() ) )
	);
	return ' &hellip; ' . $link;
}
add_filter( 'excerpt_more', 'wanabima_excerpt_more' );

/**
 * Handles JavaScript detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 * @since Wanabima 1.0
 */
function wanabima_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'wanabima_javascript_detection', 0 );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function wanabima_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">' . "\n", get_bloginfo( 'pingback_url' ) );
	}
}
add_action( 'wp_head', 'wanabima_pingback_header' );

/**
 * Display custom color CSS.
 */
function wanabima_colors_css_wrap() {
	if ( 'custom' !== get_theme_mod( 'colorscheme' ) && ! is_customize_preview() ) {
		return;
	}

	require_once( get_parent_theme_file_path( '/inc/color-patterns.php' ) );
	$hue = absint( get_theme_mod( 'colorscheme_hue', 250 ) );
?>
	<style type="text/css" id="custom-theme-colors" <?php if ( is_customize_preview() ) { echo 'data-hue="' . $hue . '"'; } ?>>
		<?php echo wanabima_custom_colors_css(); ?>
	</style>
<?php }
add_action( 'wp_head', 'wanabima_colors_css_wrap' );

/**
 * Enqueue scripts and styles.
 */
function wanabima_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'wanabima-fonts', wanabima_fonts_url(), array(), null );

	// Theme stylesheet.
	wp_enqueue_style( 'wanabima-style', get_stylesheet_uri(),array( 'bootstrap','font-awesome','animate','ionicons','owlcarousel','Google-font') );

    // Load the customization.
    wp_enqueue_style( 'wanabima-customize', get_theme_file_uri( '/assets/css/customize.css' ), array( 'wanabima-style' ));

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
    wp_enqueue_style( 'bootstrap', get_theme_file_uri( '/assets/lib/bootstrap/css/bootstrap.min.css' ));
    wp_enqueue_style( 'font-awesome', get_theme_file_uri( '/assets/lib/font-awesome/css/font-awesome.min.css' ));
    wp_enqueue_style( 'animate', get_theme_file_uri( '/assets/lib/animate/animate.min.css' ), array( 'bootstrap' ));
    wp_enqueue_style( 'ionicons', get_theme_file_uri( '/assets/lib/ionicons/css/ionicons.min.css' ));
    wp_enqueue_style( 'owlcarousel', get_theme_file_uri( '/assets/lib/owlcarousel/assets/owl.carousel.min.css' ));
    wp_enqueue_style( 'Google-font', get_theme_file_uri( 'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700' ));

	// Load the dark colorscheme.
	if ( 'dark' === get_theme_mod( 'colorscheme', 'light' ) || is_customize_preview() ) {
		wp_enqueue_style( 'wanabima-colors-dark', get_theme_file_uri( '/assets/css/colors-dark.css' ), array( 'wanabima-style' ), '1.0' );
	}

	// Load the Internet Explorer 9 specific stylesheet, to fix display issues in the Customizer.
	if ( is_customize_preview() ) {
		wp_enqueue_style( 'wanabima-ie9', get_theme_file_uri( '/assets/css/ie9.css' ), array( 'wanabima-style' ), '1.0' );
		wp_style_add_data( 'wanabima-ie9', 'conditional', 'IE 9' );
	}

	// Load the Internet Explorer 8 specific stylesheet.
	wp_enqueue_style( 'wanabima-ie8', get_theme_file_uri( '/assets/css/ie8.css' ), array( 'wanabima-style' ), '1.0' );
	wp_style_add_data( 'wanabima-ie8', 'conditional', 'lt IE 9' );

	// Load the html5 shiv.
	wp_enqueue_script( 'html5', get_theme_file_uri( '/assets/js/html5.js' ), array(), '3.7.3' );
	wp_script_add_data( 'html5', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'wanabima-skip-link-focus-fix', get_theme_file_uri( '/assets/js/skip-link-focus-fix.js' ), array(), '1.0', true );

	$wanabima_l10n = array(
		'quote'          => wanabima_get_svg( array( 'icon' => 'quote-right' ) ),
	);

	if ( has_nav_menu( 'top' ) ) {
		wp_enqueue_script( 'wanabima-navigation', get_theme_file_uri( '/assets/js/navigation.js' ), array( 'jquery' ), '1.0', true );
		$wanabima_l10n['expand']         = __( 'Expand child menu', 'wanabima' );
		$wanabima_l10n['collapse']       = __( 'Collapse child menu', 'wanabima' );
		$wanabima_l10n['icon']           = wanabima_get_svg( array( 'icon' => 'angle-down', 'fallback' => true ) );
	}

	wp_enqueue_script( 'wanabima-global', get_theme_file_uri( '/assets/js/global.js' ), array( 'jquery' ), '1.0', true );

	//Main js file
    wp_enqueue_script( 'wanabima-main', get_theme_file_uri( '/assets/js/main.js' ), array( 'jquery' ), '1.0', true );


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

	wp_enqueue_script( 'jquery-scrollto', get_theme_file_uri( '/assets/js/jquery.scrollTo.js' ), array( 'jquery' ), '2.1.2', true );

    wp_enqueue_script( 'jquery', get_theme_file_uri( '/assets/lib/jquery/jquery.min.js' ),array( 'jquery' ), '2.1.2', true );
    wp_enqueue_script( 'jquery-migrate', get_theme_file_uri( '/assets/lib/jquery/jquery-migrate.min.js' ), array( 'jquery' ), '2.1.2', true );
    wp_enqueue_script( 'bootstrap-bundle', get_theme_file_uri( '/assets/lib/bootstrap/js/bootstrap.bundle.min.js' ), array( 'jquery' ), '2.1.2', true );
    wp_enqueue_script( 'easing', get_theme_file_uri( '/assets/lib/easing/easing.min.js' ), array( 'jquery' ), '2.1.2', true );
    wp_enqueue_script( 'superfish-hover', get_theme_file_uri( '/assets/lib/superfish/hoverIntent.js' ), array( 'jquery' ), '2.1.2', true );
    wp_enqueue_script( 'superfish-super', get_theme_file_uri( '/assets/lib/superfish/superfish.min.js' ), array( 'jquery' ), '2.1.2', true );
    wp_enqueue_script( 'wow', get_theme_file_uri( '/assets/lib/wow/wow.min.js' ), array( 'jquery' ), '2.1.2', true );
    wp_enqueue_script( 'waypoint', get_theme_file_uri( '/assets/lib/waypoints/waypoints.min.js' ), array( 'jquery' ), '2.1.2', true );
    wp_enqueue_script( 'counterup', get_theme_file_uri( '/assets/lib/counterup/counterup.min.js' ), array( 'jquery' ), '2.1.2', true );
    wp_enqueue_script( 'owlcarousel', get_theme_file_uri( '/assets/lib/owlcarousel/owl.carousel.min.js' ), array( 'jquery' ), '2.1.2', true );
    wp_enqueue_script( 'isotope', get_theme_file_uri( '/assets/lib/isotope/isotope.pkgd.min.js' ), array( 'jquery' ), '2.1.2', true );
    wp_enqueue_script( 'touchSwipe', get_theme_file_uri( '/assets/lib/touchSwipe/jquery.touchSwipe.min.js' ), array( 'jquery' ), '2.1.2', true );

	wp_localize_script( 'wanabima-skip-link-focus-fix', 'wanabimaScreenReaderText', $wanabima_l10n );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wanabima_scripts' );

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for content images.
 *
 * @since Wanabima 1.0
 *
 * @param string $sizes A source size value for use in a 'sizes' attribute.
 * @param array  $size  Image size. Accepts an array of width and height
 *                      values in pixels (in that order).
 * @return string A source size value for use in a content image 'sizes' attribute.
 */
function wanabima_content_image_sizes_attr( $sizes, $size ) {
	$width = $size[0];

	if ( 740 <= $width ) {
		$sizes = '(max-width: 706px) 89vw, (max-width: 767px) 82vw, 740px';
	}

	if ( is_active_sidebar( 'sidebar-1' ) || is_archive() || is_search() || is_home() || is_page() ) {
		if ( ! ( is_page() && 'one-column' === get_theme_mod( 'page_options' ) ) && 767 <= $width ) {
			 $sizes = '(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px';
		}
	}

	return $sizes;
}
add_filter( 'wp_calculate_image_sizes', 'wanabima_content_image_sizes_attr', 10, 2 );

/**
 * Filter the `sizes` value in the header image markup.
 *
 * @since Wanabima 1.0
 *
 * @param string $html   The HTML image tag markup being filtered.
 * @param object $header The custom header object returned by 'get_custom_header()'.
 * @param array  $attr   Array of the attributes for the image tag.
 * @return string The filtered header image HTML.
 */
function wanabima_header_image_tag( $html, $header, $attr ) {
	if ( isset( $attr['sizes'] ) ) {
		$html = str_replace( $attr['sizes'], '100vw', $html );
	}
	return $html;
}
add_filter( 'get_header_image_tag', 'wanabima_header_image_tag', 10, 3 );

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for post thumbnails.
 *
 * @since Wanabima 1.0
 *
 * @param array $attr       Attributes for the image markup.
 * @param int   $attachment Image attachment ID.
 * @param array $size       Registered image size or flat array of height and width dimensions.
 * @return array The filtered attributes for the image markup.
 */
function wanabima_post_thumbnail_sizes_attr( $attr, $attachment, $size ) {
	if ( is_archive() || is_search() || is_home() ) {
		$attr['sizes'] = '(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px';
	} else {
		$attr['sizes'] = '100vw';
	}

	return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'wanabima_post_thumbnail_sizes_attr', 10, 3 );

/**
 * Use front-page.php when Front page displays is set to a static page.
 *
 * @since Wanabima 1.0
 *
 * @param string $template front-page.php.
 *
 * @return string The template to be used: blank if is_home() is true (defaults to index.php), else $template.
 */
function wanabima_front_page_template( $template ) {
	return is_home() ? '' : $template;
}
add_filter( 'frontpage_template',  'wanabima_front_page_template' );

/**
 * Modifies tag cloud widget arguments to display all tags in the same font size
 * and use list format for better accessibility.
 *
 * @since Wanabima 1.4
 *
 * @param array $args Arguments for tag cloud widget.
 * @return array The filtered arguments for tag cloud widget.
 */
function wanabima_widget_tag_cloud_args( $args ) {
	$args['largest']  = 1;
	$args['smallest'] = 1;
	$args['unit']     = 'em';
	$args['format']   = 'list';

	return $args;
}
add_filter( 'widget_tag_cloud_args', 'wanabima_widget_tag_cloud_args' );

/**
 * Implement the Custom Header feature.
 */
require get_parent_theme_file_path( '/inc/custom-header.php' );

/**
 * Custom template tags for this theme.
 */
require get_parent_theme_file_path( '/inc/template-tags.php' );

/**
 * Additional features to allow styling of the templates.
 */
require get_parent_theme_file_path( '/inc/template-functions.php' );

/**
 * Customizer additions.
 */
require get_parent_theme_file_path( '/inc/customizer.php' );

/**
 * SVG icons functions and filters.
 */
require get_parent_theme_file_path( '/inc/icon-functions.php' );


/**
 * Get all header image url from registered images in theme.
 *
 * @return string Path to header image
 */

function get_all_header_data() {
    static $_wp_all_header = null;

    if ( empty( $_wp_all_header ) ) {
        $header_image_mod = get_theme_mod( 'header_image', '' );
        $headers = array();

        if ( 'random-uploaded-image' == $header_image_mod )
            $headers = get_uploaded_header_images();
        elseif ( ! empty( $_wp_default_headers ) ) {
            if ( 'random-default-image' == $header_image_mod ) {
                $headers = $_wp_default_headers;
            } else {
                if ( current_theme_supports( 'custom-header', 'random-default' ) )
                    $headers = $_wp_default_headers;
            }
        }

        if ( empty( $headers ) )
            return new stdClass;

        $_wp_all_header = new stdClass();

        $_wp_all_header = (object)$headers;
        //TODO Emalsha Rasad
    }
    return $_wp_all_header;
}


/**
 * Custom post type for add vehicle details.
 *
 * Creating a function to create our CPT
*/

function vehicle_post_type() {

// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Vehicles', 'Post Type General Name', 'wanabima' ),
        'singular_name'       => _x( 'Vehicle', 'Post Type Singular Name', 'wanabima' ),
        'menu_name'           => __( 'Vehicles', 'wanabima' ),
        'parent_item_colon'   => __( 'Parent Vehicle', 'wanabima' ),
        'all_items'           => __( 'All Vehicles', 'wanabima' ),
        'view_item'           => __( 'View Vehicle', 'wanabima' ),
        'add_new_item'        => __( 'Add New vehicle', 'wanabima' ),
        'add_new'             => __( 'Add New', 'wanabima' ),
        'edit_item'           => __( 'Edit Vehicle', 'wanabima' ),
        'update_item'         => __( 'Update Vehicle', 'wanabima' ),
        'search_items'        => __( 'Search Vehicle', 'wanabima' ),
        'not_found'           => __( 'Not Found', 'wanabima' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'wanabima' ),
    );

// Set other options for Custom Post Type
// 'supports'=> array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', 'page-attributes')//

    $args = array(
        'label'               => __( 'vehicles', 'wanabima' ),
        'description'         => __( 'Vehicle information', 'wanabima' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields', 'page-attributes'),
        // You can associate this CPT with a taxonomy or custom taxonomy.
        'taxonomies'          => array( 'jeep' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => false,
        'menu_icon'           => 'dashicons-forms',
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'rewrite'             => [ 'slug' => 'vehicles' ],
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );

    // Registering Custom Post Type
    register_post_type( 'vehicles', $args );

}

add_action( 'init', 'vehicle_post_type', 0 );


/**
 * Custom post type for add camp site details.
 */

function camp_site_post_type() {

// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Camp Site', 'Post Type General Name', 'wanabima' ),
        'singular_name'       => _x( 'Camp Site', 'Post Type Singular Name', 'wanabima' ),
        'menu_name'           => __( 'Camp Sites', 'wanabima' ),
        'parent_item_colon'   => __( 'Parent Camp Site', 'wanabima' ),
        'all_items'           => __( 'All Camp Sites', 'wanabima' ),
        'view_item'           => __( 'View Camp Site', 'wanabima' ),
        'add_new_item'        => __( 'Add New Camp Site', 'wanabima' ),
        'add_new'             => __( 'Add New', 'wanabima' ),
        'edit_item'           => __( 'Edit Camp Site', 'wanabima' ),
        'update_item'         => __( 'Update Camp Site', 'wanabima' ),
        'search_items'        => __( 'Search Camp Site', 'wanabima' ),
        'not_found'           => __( 'Not Found', 'wanabima' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'wanabima' ),
    );

    $args = array(
        'label'               => __( 'camp-site', 'wanabima' ),
        'description'         => __( 'Vehicle information', 'wanabima' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields', 'page-attributes'),
        // You can associate this CPT with a taxonomy or custom taxonomy.
        'taxonomies'          => array( 'camp-site' ),
        'hierarchical'        => false,
        'menu_icon'           => 'dashicons-location-alt',
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );

    // Registering Custom Post Type
    register_post_type( 'camp-sites', $args );

}

add_action( 'init', 'camp_site_post_type', 0 );

// Add fake metabox above editing pane
function vehicle_post_support() {
    $screen = get_current_screen();
    $edit_post_type = $screen->post_type;
    if ( $edit_post_type == 'vehicles' ){

    ?>
    <div class="after-title-help postbox">
        <h3>Using this screen</h3>
        <div class="inside">
            <p>Use this screen to add new vehicle or edit existing ones. Make sure you click 'Publish' to publish a new item and 'Update' to save any changes.</p>
            <p>Use custome fields to add vehicle specific information and use <b>"PRICE"</b> custom field for vehicle price.</p>
        </div><!-- .inside -->
    </div><!-- .postbox -->
<?php }
}
add_action( 'edit_form_after_title', 'vehicle_post_support' );
