<?php
if ( ! function_exists( 'theme_setup' ) ) :
	
	function theme_setup() {

		load_theme_textdomain( 'theme', get_template_directory() . '/languages' );
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );
		
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'theme' ),
				'menu-top' => esc_html__( 'Top Menu', 'theme' ),
			)
		);
		
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);
		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'theme_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);
		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );
		
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'theme_setup' );

function theme_widgets_init() {
	add_theme_support('woocommerce');
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'theme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Blog Details', 'theme' ),
			'id'            => 'sidebar-blog_details',
			'description'   => esc_html__( 'Add widgets here.', 'theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
		register_sidebar(
		array(
			'name'          => esc_html__( 'Blog Sidebar', 'theme' ),
			'id'            => 'sidebar-blog',
			'description'   => esc_html__( 'Add widgets here.', 'theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	
		register_sidebar(
		array(
			'name'          => esc_html__( 'Header Social', 'theme' ),
			'id'            => 'header-social',
			'description'   => esc_html__( 'Add widgets here.', 'theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

		register_sidebar(
		array(
			'name'          => esc_html__( 'Header Phone', 'theme' ),
			'id'            => 'header-phone',
			'description'   => esc_html__( 'Add widgets here.', 'theme' ),
			'before_widget' => '<div id="%1$s" class="top_header_contact">',
			'after_widget'  => '</div>',
			'before_title'  => '',
			'after_title'   => '',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Sidebar 1', 'theme' ),
			'id'            => 'footer_sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'theme' ),
			'before_widget' => '<div class="footer_box ft_contact">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="ft_heading">',
			'after_title'   => '</h2>',
		)
	);
		register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Sidebar 2', 'theme' ),
			'id'            => 'footer_sidebar-2',
			'description'   => esc_html__( 'Add widgets here.', 'theme' ),
			'before_widget' => '<div class="footer_box">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="ft_heading">',
			'after_title'   => '</h2>',
		)
	   );
	
	register_sidebar(
		array(
			'name'          => esc_html__( 'Confidential', 'theme' ),
			'id'            => 'confidential',
			'description'   => esc_html__( 'Add widgets here.', 'theme' ),
			'before_widget' => '<div class="free-confidential-sec">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>',
		)
	   );
		register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Sidebar 3', 'theme' ),
			'id'            => 'footer_sidebar-3',
			'description'   => esc_html__( 'Add widgets here.', 'theme' ),
			'before_widget' => '<div class="footer_box">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="ft_heading">',
			'after_title'   => '</h2>',
		)
	   );
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Sidebar 4', 'theme' ),
			'id'            => 'footer_sidebar-4',
			'description'   => esc_html__( 'Add widgets here.', 'theme' ),
			'before_widget' => '<div class="footer_box">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="ft_heading">',
			'after_title'   => '</h2>',
		)
	   );
		register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Copyright', 'theme' ),
			'id'            => 'footer_sidebar-copyright',
			'description'   => esc_html__( 'Add widgets here.', 'theme' ),
			'before_widget' => '<div class="footer_copy">',
			'after_widget'  => '</div>',
			'before_title'  => '',
			'after_title'   => '',
		)
	   );
}
add_action( 'widgets_init', 'theme_widgets_init' );

add_action( 'init', 'register_my_menus' );

function register_my_menus() {

register_nav_menus(

	array(

		'main-menu' => __( 'Main Menu' ),	
		'quick-links' => __( 'Quick Links' ),
		'services' => __( 'Services' ),
		'resources' => __( 'Resources' ),
		'foot-menu' => __( 'Foot Menu' ),				

	)

);

}

add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');

	function theme_enqueue_scripts(){
		wp_enqueue_script('bootstrap',get_bloginfo('template_url').'/assets/js/bootstrap.bundle.min.js', array(),time(),true);

		wp_enqueue_script('popper',get_bloginfo('template_url').'/assets/js/popper.min.js', array(),time(),true);
		
		wp_enqueue_script('plugin',get_bloginfo('template_url').'/assets/js/plugin.js', array(),'',true);

		wp_enqueue_script('mCustomScrollbar',get_bloginfo('template_url').'/assets/js/jquery.mCustomScrollbar.concat.min.js', array(),'',true);

		wp_enqueue_script('custom',get_bloginfo('template_url').'/assets/js/custom.js', array(),'',true);

		
	}

	
	add_action('wp_enqueue_scripts', 'theme_enqueue_style');

	function theme_enqueue_style(){
		wp_register_style('bootstrap-min', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(),'');
		wp_enqueue_style('bootstrap-min');

		wp_register_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(),'');
		wp_enqueue_style('responsive');

		wp_register_style('mCustomScrollbar', get_template_directory_uri() . '/assets/css/jquery.mCustomScrollbar.min.css', array(),'');
		wp_enqueue_style('mCustomScrollbar');
		wp_register_style('font-awesome', 'https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css', array(),'');
		wp_enqueue_style('font-awesome');
		wp_register_style('owl-carousel-min', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(),'');
		wp_enqueue_style('owl-carousel-min');
		wp_register_style('owl-theme-default-min', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css', array(),'');
		wp_enqueue_style('owl-theme-default-min');
		wp_register_style('fancybox', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css', array(),'');
		wp_enqueue_style('fancybox');		
		wp_register_style('style', get_template_directory_uri() . '/assets/css/style.css', array(),'');
		wp_enqueue_style('style');
	}