<?php 

	function randsite_styles(){


		//Register styles
		wp_register_style('normalize' , get_template_directory_uri().'/css/normalize.css', array(), '7.0');
		wp_register_style('style' , get_template_directory_uri().'/css/style.css', array('normalize'), '1.0');
		wp_register_style('bootstrap' , get_template_directory_uri().'/css/bootstrap.css', array(), '3.3.7');


		//Register scripts
		wp_register_script('jquery' , get_template_directory_uri(). '/js/jquery.js' , array() , '3.2.1');
		wp_register_script('bootstrapjs' , get_template_directory_uri(). '/js/bootstrap.js' , array() , '3.3.7');
		wp_register_script('greensock' , 'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TimelineMax.min.js' , array() , '3.3.7');
		wp_register_script('plugins' , 'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/plugins/CSSPlugin.min.js');
		wp_register_script('timeline' , 'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TimelineLite.min.js');
		wp_register_script('timemax' , 'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js' , array() , '3.3.7');
		wp_register_script('scrollmagic' , 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js');
		wp_register_script('debugscroll' , 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js');
		wp_register_script('scrollanimation' , 'http://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js');
		wp_register_script('main' , get_template_directory_uri().'/js/main.js');
		

		//Run styles
		wp_enqueue_style('normalize');
		wp_enqueue_style('bootstrap');
		wp_enqueue_style('style');
		

		//Run scripts
		wp_enqueue_script('jquery');
		wp_enqueue_script('bootstrapjs');
		wp_enqueue_script('main');
		wp_enqueue_script('greensock');
		wp_enqueue_script('plugins');
		wp_enqueue_script('timeline');
		wp_enqueue_script('timemax');
		wp_enqueue_script('scrollmagic');
		wp_enqueue_script('debugscroll');

	}

	add_action('wp_enqueue_scripts','randsite_styles');


	//Creación de Menus

	function randsite_menus(){
		register_nav_menus(array(
			'header-menu' => __('Header Menu', 'randsite'),
			'social-menu' => __('Social Menu', 'randsite')
		));
	}

	add_action('init', 'randsite_menus');



	add_action( 'init', 'randsite_sites' );
function randsite_sites() {
	$labels = array(
		'name'               => _x( 'Sites', 'randsite' ),
		'singular_name'      => _x( 'Sites', 'post type singular name', 'randsite' ),
		'menu_name'          => _x( 'Sites', 'admin menu', 'randsite' ),
		'name_admin_bar'     => _x( 'Sites', 'add new on admin bar', 'randsite' ),
		'add_new'            => _x( 'Add New', 'book', 'randsite' ),
		'add_new_item'       => __( 'Add New Site', 'randsite' ),
		'new_item'           => __( 'New Sites', 'randsite' ),
		'edit_item'          => __( 'Edit Sites', 'randsite' ),
		'view_item'          => __( 'View Sites', 'randsite' ),
		'all_items'          => __( 'All Sites', 'randsite' ),
		'search_items'       => __( 'Search Sites', 'randsite' ),
		'parent_item_colon'  => __( 'Parent Sites:', 'randsite' ),
		'not_found'          => __( 'No Sites found.', 'randsite' ),
		'not_found_in_trash' => __( 'No Sites found in Trash.', 'randsite' )
	);

	$args = array(
		'labels'             => $labels,
    'description'        => __( 'Description.', 'randsite' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'categorias' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'editor', 'thumbnail' ),
    'taxonomies'          => array( 'category' ),
	);

	register_post_type( 'sites', $args );
}

 ?>