<?php

// Customizer CSS
if(!function_exists('blogen_css_generator')){
    function blogen_css_generator(){
        $output = '';

        // "Header"
        $output .= 'img.mainsite-logo{ width: '.esc_attr( get_theme_mod( 'logo_width', '120' ) ) .'px; }';
        $height = get_theme_mod( 'logo_height', '' );
        if( $height ){
            $output .= 'img.mainsite-logo{ height: '.esc_attr( $height ) .'px; }';
        }
        $logo_responsive_width = get_theme_mod( 'logo_responsive_width', '' );
        if( $logo_responsive_width ){
            $output .= '.header-responsive-wrap img.mainsite-logo{ width: '.esc_attr( $logo_responsive_width ) .'px; }';
        }

        // "Theme Color"
        $tc_primary_color = get_theme_mod( 'tc_primary_color', '#FD4145' );

        //primary color
        if( $tc_primary_color ){
            $output .= 'a, .mainsite-search .search-button:hover,
            .mainsite-entry-header .mainsite-post-grid-category a, .mainsite-entry-header .mainsite-post-grid-category a:hover,
            .mainsite-entry-meta span a:hover, .mainsite-post-single .nav-links >div a:hover,
            .widget_categories ul li a:hover, .widget_recent_entries ul li a:hover,
            .widget_recent_comments ul li a:hover, .widget_pages ul li a:hover, .widget_meta ul li a:hover,
            .widget_archive ul li a:hover, .widget_nav_menu ul li a:hover, .mainsite-blog-widget-title a:hover, .mainsite-footer-menu li a:hover, #mainsite-header-trigger:hover,
            .mainsite-offcanvas-menu ul li a:hover, .mainsite-social-icon ul li a:hover, .mainsite-header-one .mainsite-social-icon ul li a:hover, .mainsite-offcanvas-header .mainsite-trigger:hover, .mainsite-trigger-bottom:hover,
            .click-open-btn:hover { color: '.esc_attr( get_theme_mod( 'tc_primary_color', '#FD4145' ) ) .'; }';
        }

        //background
        if( $tc_primary_color ){
            $output .= '.mainsite-post-grid-category a, .mainsite-entry-header .mainsite-post-grid-category a:before,
            .mainsite-layout-inside .nav-links .page-numbers:hover,
            .mainsite-layout-inside .nav-links .page-numbers.current,
            .mainsite-tags-links a:hover, .mainsite-comment-text span.reply a:hover, .mainsite-top-footer .tagcloud a:hover,
            .mainsite-btn-dark:hover, #mainsite-header-trigger:hover .mainsite-icon-bar,
            #mainsite-header-trigger:hover .mainsite-icon-bar:after,
            #mainsite-header-trigger:hover .mainsite-icon-bar:before, .not-found .search-button,
            .mainsite-footer-one .mainsite-footer-social-icon li a:hover,
            .mainsite-footer-two .mainsite-footer-social-icon li a:hover { background: '.esc_attr( get_theme_mod( 'tc_primary_color', '#FD4145' ) ) .'; }';
        }

        //border
        if( $tc_primary_color ){
            $output .= '.mainsite-tags-links a:hover, .mainsite-top-footer .tagcloud a:hover { border-color: '.esc_attr( get_theme_mod( 'tc_primary_color', '#FD4145' ) ) .'; }';
        }

        // hover color 
        $tc_secendary_color = get_theme_mod( 'tc_secendary_color', '#E4282C' );
        if( $tc_secendary_color ){
            $output .= 'a:hover, a:active{ color: '.esc_attr( get_theme_mod( 'tc_secendary_color', '#E4282C' ) ) .'; }';
        }

        //header color
        $output .= '.site-header { background: '.esc_attr( get_theme_mod( 'header_bg_color', '' ) ) .'; }';
        
        //body color
        $output .= 'body{ color: '.esc_attr( get_theme_mod( 'tc_body_color', '#3f4044' ) ) .'; }';
        $output .= 'body{ background-color: '.esc_attr( get_theme_mod( 'tc_body_bg', '#ffffff' ) ) .'; }';
        $body_bg_img = get_theme_mod( 'body_bg_img', '' );
        if($body_bg_img) {
            $output .= 'body{ background-image: url('.esc_attr( get_theme_mod( 'body_bg_img', '')).'); }';
        }

        //button
        $tc_btn_color = get_theme_mod( 'tc_btn_color', '#fff' );
        $tc_btn_hover_color = get_theme_mod( 'tc_btn_hover_color', '#fff' );
        $tc_btn_bgcolor = get_theme_mod( 'tc_btn_bgcolor', '#FD4145' );
        $tc_btn_bg_hover_color = get_theme_mod( 'tc_btn_bg_hover_color', '#E4282C' );
        if( $tc_btn_color ){
            $output .= '.mainsite-btn-primary, button, input[type="button"], input[type="reset"], input[type="submit"] { color: '.esc_attr( get_theme_mod( 'tc_btn_color', '#ffffff' ) ) .'; }';
        }
        if( $tc_btn_hover_color ){
            $output .= '.mainsite-btn-primary:hover,button, input[type="button"]:hover, input[type="reset"]:hover, input[type="submit"]:hover { color: '.esc_attr( get_theme_mod( 'tc_btn_hover_color', '#ffffff' ) ) .'; }';
        }
        if( $tc_btn_bgcolor ){
            $output .= '.mainsite-btn-primary, .mainsite-btn-primary, button, input[type="button"], input[type="reset"], input[type="submit"] { background: '.esc_attr( get_theme_mod( 'tc_btn_bgcolor', '#FD4145' ) ) .'; }';
        }
        if( $tc_btn_bg_hover_color ){
            $output .= '.mainsite-btn-primary:hover, button, input[type="button"]:hover, input[type="reset"]:hover, input[type="submit"]:hover{ background: '.esc_attr( get_theme_mod( 'tc_btn_bg_hover_color', '#000000' ) ) .'; }';
        }

        //menu color
        $tc_menu_color = get_theme_mod( 'tc_menu_color', '' );
        if( $tc_menu_color ){
            $output .= '.site-header ul.primary-menu > li > a, .mainsite-header-four .mainsite-social-icon ul li a, 
            .mainsite-header-four .mainsite-search .search-button, .mainsite-header-four #mainsite-header-trigger,
            .mainsite-header-three .mainsite-social-icon ul li a, .mainsite-header-three .mainsite-search .search-button { color: '.esc_attr( get_theme_mod( 'tc_menu_color', '' ) ) .'; }';
        }
        $output .= 'ul.primary-menu > li.current-menu-item > a, 
            ul.primary-menu > li > a:hover, ul.primary-menu > li.menu-item-has-children.current-menu-item:after, 
            ul.primary-menu > li.menu-item-has-children:hover:after, .mainsite-header-four #mainsite-header-trigger:hover,
            .mainsite-header-four .mainsite-social-icon ul li a:hover, .mainsite-header-three .mainsite-social-icon ul li a:hover, ul.primary-menu > li.menu-item-has-children:hover > a { color: '.esc_attr( get_theme_mod( 'tc_menu_hover_color', '#FD4145' ) ) .'; }
            ul.primary-menu > li > a:after{ background:'.esc_attr( get_theme_mod( 'tc_menu_hover_color', '#FD4145' ) ) .'; }';
        $output .= 'ul.sub-menu li a { color: '.esc_attr( get_theme_mod( 'tc_submenu_color', '#000' ) ) .'; }';
        $output .= 'ul.sub-menu li a:hover{ color: '.esc_attr( get_theme_mod( 'tc_submenu_hover_color', '#FD4145' ) ) .'; }';

        // "Footer Top bar"
        $tb_color = get_theme_mod( 'tb_color', '' );
        if( $tb_color ){
            $output .= '.mainsite-topbar, .mainsite-topbar a{ color: '.esc_attr( get_theme_mod( 'tb_color', '' ) ) .'; }';
        }
        $tb_bg_color = get_theme_mod( 'tb_bg_color', '' );
        if( $tb_bg_color ){
            $output .= '.mainsite-topbar{ background: '.esc_attr( get_theme_mod( 'tb_bg_color', '' ) ) .'; }';
        }
        $output .= '.mainsite-topbar a:hover{ color: '.esc_attr( get_theme_mod( 'tb_link_hover_color', '#FD4145' ) ) .'; }';
        $output .= '.mainsite-topbar{ padding-top: '.esc_attr( get_theme_mod( 'tb_padding_top', '8' ) ) .'px; }';
        $output .= '.mainsite-topbar{ padding-bottom: '.esc_attr( get_theme_mod( 'tb_padding_bottom', '8' ) ) .'px; }';
        
        // "Footer Top Options"
        $output .= '.mainsite-top-footer, .mainsite-top-footer .footer-item ul li a,  .mainsite-top-footer a { color: '.esc_attr( get_theme_mod( 'ft_color', '#000' ) ) .'; }';
        $output .= '.mainsite-top-footer{ background: '.esc_attr( get_theme_mod( 'ft_bg_color', '#f8f8f8' ) ) .'; }';
        $output .= '.mainsite-top-footer a:hover, .mainsite-top-footer .footer-item ul li a:hover{ color: '.esc_attr( get_theme_mod( 'ft_link_hover_color', '#FD4145' ) ) .'; }';
        $output .= '.mainsite-top-footer{ padding-top: '.esc_attr( get_theme_mod( 'ft_padding_top', '80' ) ) .'px; }';
        $output .= '.mainsite-top-footer{ padding-bottom: '.esc_attr( get_theme_mod( 'ft_padding_bottom', '80' ) ) .'px; }';

        // "Footer Options"
        $output .= '.mainsite-footer-info, .mainsite-footer-social-icon ul li a { color: '.esc_attr( get_theme_mod( 'fb_color', '#596172' ) ) .'; }';
        $output .= '.mainsite-footer{ background: '.esc_attr( get_theme_mod( 'fb_bg_color', '#f8f8f8' ) ) .'; }';
        $output .= '.mainsite-footer a:hover, .mainsite-footer-social-icon ul li a:hover{ color: '.esc_attr( get_theme_mod( 'fb_link_hover_color', '#FD4145' ) ) .'; }';
        $output .= '.mainsite-footer-info{ padding-top: '.esc_attr( get_theme_mod( 'fb_padding_top', '60' ) ) .'px; }';
        $output .= '.mainsite-footer-info{ padding-bottom: '.esc_attr( get_theme_mod( 'fb_padding_bottom', '60' ) ) .'px; }';

        return $output;
    }
}

//theme setup
if ( ! function_exists( 'blogen_setup' ) ) :
	function blogen_setup() {
        
        //add language string
		load_theme_textdomain( 'blogen', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );

		// Registe wp_nav_menu
        register_nav_menus(
            array(
                'primary' => __( 'Primary Menu', 'blogen' ),
                'topbar-menu' => __( 'Topbar Menu', 'blogen' ),
                'footer-menu' => __( 'Footer Menu', 'blogen' )
            )
        );
        
        /*
        * Switch default core markup for search form, comment form, and comments
        */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

        add_theme_support( 'custom-header', array(
            'width'            => 1920,
            'height'           => 380,
            'flex-height'      => true,
            'wp-head-callback' => 'blogen_header_style',
        ));

        # Set up the WordPress core custom background feature.
        add_theme_support( 'custom-background', array(
            'default-color' => 'ffffff',
        ));

        // Add theme support for selective refresh for widgets.
        add_theme_support( 'customize-selective-refresh-widgets' );
        
        # Enable support for custom logo.

        // Add custom styles for visual editor to resemble the theme style.
        add_theme_support( 'wp-block-styles' );
        add_theme_support( 'align-wide' );
        add_theme_support( 'editor-styles' );
        add_editor_style( array( 'assets/css/editor-style.css' ) );
        // Gutenberg support
        add_theme_support( 'editor-color-palette', array(
            array(
            'name' => esc_html__( 'Tan', 'blogen' ),
            'slug' => 'tan',
            'color' => '#D2B48C',
            ),
            array(
                'name' => esc_html__( 'Yellow', 'blogen' ),
                'slug' => 'yellow',
                'color' => '#FDE64B',
            ),
            array(
                'name' => esc_html__( 'Orange', 'blogen' ),
                'slug' => 'orange',
                'color' => '#ED7014',
            ),
            array(
                'name' => esc_html__( 'Red', 'blogen' ),
                'slug' => 'red',
                'color' => '#D0312D',
            ),
            array(
                'name' => esc_html__( 'Pink', 'blogen' ),
                'slug' => 'pink',
                'color' => '#b565a7',
            ),
            array(
                'name' => esc_html__( 'Purple', 'blogen' ),
                'slug' => 'purple',
                'color' => '#A32CC4',
            ),
            array(
                'name' => esc_html__( 'Blue', 'blogen' ),
                'slug' => 'blue',
                'color' => '#4E97D8',
            ),
            array(
                'name' => esc_html__( 'Green', 'blogen' ),
                'slug' => 'green',
                'color' => '#00B294',
            ),
            array(
                'name' => esc_html__( 'Brown', 'blogen' ),
                'slug' => 'brown',
                'color' => '#231709',
            ),
            array(
                'name' => esc_html__( 'Grey', 'blogen' ),
                'slug' => 'grey',
                'color' => '#7D7D7D',
            ),
            array(
                'name' => esc_html__( 'Black', 'blogen' ),
                'slug' => 'black',
                'color' => '#000000',
            ),
        ));
        
        add_theme_support( 'editor-font-sizes', array(
            array(
                'name' => esc_html__( 'small', 'blogen' ),
                'shortName' => esc_html__( 'S', 'blogen' ),
                'size' => 12,
                'slug' => 'small'
            ),
            array(
                'name' => esc_html__( 'regular', 'blogen' ),
                'shortName' => esc_html__( 'M', 'blogen' ),
                'size' => 16,
                'slug' => 'regular'
            ),
            array(
                'name' => esc_html__( 'larger', 'blogen' ),
                'shortName' => esc_html__( 'L', 'blogen' ),
                'size' => 36,
                'slug' => 'larger'
            ),
            array(
                'name' => esc_html__( 'huge', 'blogen' ),
                'shortName' => esc_html__( 'XL', 'blogen' ),
                'size' => 48,
                'slug' => 'huge'
            )
        ));
        
        add_image_size( 'blogen-1140-600', 1140, 600, true );
	}
endif;
add_action( 'after_setup_theme', 'blogen_setup' );

function blogen_content_width() {
    global $content_width;
	$GLOBALS['content_width'] = apply_filters( 'blogen_content_width', 640 );
}
add_action( 'after_setup_theme', 'blogen_content_width', 0 );


//header style
if( ! function_exists( 'blogen_header_style' ) ):
    function blogen_header_style(){
        $header_text_color = get_header_textcolor();
        if ( get_theme_support( 'custom-header', 'default-text-color' ) === $header_text_color ) {
            return;
        }
        ?>
        <style id="mainsite-custom-header-styles" type="text/css">
            .wrap-inner-banner .page-header .page-title,
            body.home.page .wrap-inner-banner .page-header .page-title {
                color: #<?php echo esc_attr( $header_text_color ); ?>;
            }
        </style>
    <?php
    }
endif;

/**
* Register widget area.
*/
function blogen_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'blogen' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'blogen' ),
		'before_widget' => '<div id="%1$s" class="mainsite-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="mainsite-widget-title">',
		'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
		'name'          => esc_html__( 'Offcanvas', 'blogen' ),
		'id'            => 'offcanavs-1',
		'description'   => esc_html__( 'Add widgets here.', 'blogen' ),
		'before_widget' => '<div id="%1$s" class="mainsite-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="mainsite-widget-title">',
		'after_title'   => '</h2>',
    ) );
    
    for( $i = 1; $i <= 4; $i++ ){
		register_sidebar( array(
			'name'          => esc_html__( 'Footer', 'blogen' ) . $i,
			'id'            => 'mainsite-footer-sidebar-' . $i,
			'description'   => esc_html__( 'Add widgets here.', 'blogen' ),
			'before_widget' => '<div id="%1$s" class="mainsite-widget %2$s"><div class="footer-item">',
			'after_widget'  => '</div></div>',
			'before_title'  => '<h2 class="mainsite-widget-title">',
			'after_title'   => '</h2>',
		) );
	}
}
add_action( 'widgets_init', 'blogen_widgets_init' );

/**
* Enqueue scripts and styles for Frontend.
*/
function blogen_scripts() {
    wp_enqueue_style( 'blogen-google-font-style', '//fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900', false );
    wp_enqueue_style( 'blogen-grid', BLOGEN_URI . '/assets/css/grid.css', null, 'all' );
    wp_enqueue_style( 'blogen-cbfont', BLOGEN_URI . '/assets/css/cbfont.css', null, 'all' );
    wp_enqueue_style( 'blogen-blocks-styles', BLOGEN_URI . '/assets/css/blocks.css', null, 'all' );
    wp_enqueue_style( 'blogen-style', get_stylesheet_uri() );

    if ( has_nav_menu( 'primary' ) ) {
        wp_enqueue_script( 'blogen-navigation', BLOGEN_URI . '/assets/js/navigation.js', array(), BLOGEN_VERSION, true );
	}
    wp_enqueue_script( 'blogen-main', BLOGEN_URI . '/assets/js/main.js', array('jquery'), BLOGEN_VERSION, true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
    }
    wp_add_inline_style( 'blogen-style', blogen_css_generator() );
}
add_action( 'wp_enqueue_scripts', 'blogen_scripts' );

/**
* Enqueue scripts and styles for Editor.
*/
function blogen_scripts_editor() {
    wp_enqueue_style( 'blogen-google-font-style', '//fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900', false ); 
}
add_action('enqueue_block_editor_assets', 'blogen_scripts_editor');

/**
* Add Body Class
*/
function blogen_body_classes( $classes ) {
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
    }
    // $skin = get_theme_mod( 'skin_style', 'white' );
    // $classes[] = 'mainsite-'.$skin;
    if(get_theme_mod( 'box_layout', '0' )){
        $box_layout = get_theme_mod( 'box_layout', '0' );
        $classes[] = 'mainsite-box-layout';
    }
	return $classes;
}
add_filter( 'body_class', 'blogen_body_classes' );


/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function blogen_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'blogen_pingback_header' );

/**
 * footer widget active check
 */
function blogen_is_active_footer_sidebar(){
	for( $i = 1; $i <= 4; $i++ ){
		if ( is_active_sidebar( 'mainsite-footer-sidebar-'.$i ) ) :
			return true;
		endif;
	}
	return false;
}

/**
 * Excerpt
 */
if(!function_exists('blogen_excerpt_max_charlength')):
	function blogen_excerpt_max_charlength($charlength) {
		$excerpt = get_the_excerpt();
		$charlength++;

		if ( mb_strlen( $excerpt ) > $charlength ) {
			$subex = mb_substr( $excerpt, 0, $charlength - 5 );
			$exwords = explode( ' ', $subex );
			$excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
			if ( $excut < 0 ) {
				return mb_substr( $subex, 0, $excut );
			} else {
				return $subex;
			}
		} else {
			return $excerpt;
		}
	}
endif;

/**
 * Comment List
 */
function blogen_comments($comment, $args, $depth) { ?>
    <li <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">
        <div class="mainsite-the-comment">	
            <div class="mainsite-author-img">
                <?php echo get_avatar($comment,$args['avatar_size']); ?>
            </div>
            <div class="mainsite-comment-text">
                <span class="reply">
                    <?php comment_reply_link(array_merge( $args, array('reply_text' => __('Reply', 'blogen'), 'depth' => $depth, 'max_depth' => $args['max_depth'])), $comment->comment_ID); ?>
                    <?php edit_comment_link(__('Edit', 'blogen')); ?>
                </span>
                <h6 class="mainsite-author"><?php echo get_comment_author_link(); ?></h6>
                <span class="mainsite-date"><?php printf(esc_html__('%1$s at %2$s', 'blogen'), wp_kses_post(get_comment_date()),  wp_kses_post(get_comment_time())) ?></span>
                <?php if ($comment->comment_approved == '0') : ?>
                    <em><i class="cb-font-info-circled"></i><?php esc_html_e('Comment awaiting approval', 'blogen'); ?></em>
                    <br />
                <?php endif; ?>
                <?php comment_text(); ?>
            </div>	
        </div>	
    </li>
    <?php 
}

/*-------------------------------------------------------
*           Include the TGM Plugin Activation class
*-------------------------------------------------------*/
add_action( 'tgmpa_register', 'blogen_plugins_include');

if(!function_exists('blogen_plugins_include')):

    function blogen_plugins_include()
    {
        $plugins = array( 
                array(
                    'name'                  => esc_html__( 'Gutenberg Blocks Ultimate Post Blocks', 'blogen' ),
                    'slug'                  => 'ultimate-post',
                    'source'                => esc_url('https://downloads.wordpress.org/plugin/ultimate-post.zip'),
                    'required'              => false,
                    'version'               => '',
                    'force_activation'      => false,
                    'force_deactivation'    => false,
                    'external_url'          => '',
                ),                                                                                                 
            );

    $config = array(
        'id'           => 'blogen',                 // Unique ID for hashing notices for multiple instances of TGMPA.
        'default_path' => '',                      // Default absolute path to bundled plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.                  
    );

    tgmpa( $plugins, $config );

    }

endif;