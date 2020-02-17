<?php

	if ( ! isset( $content_width ) ){
		$content_width = 760;
	}

	// Theme Support

	add_theme_support( 'post-thumbnails' ); 
	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );

	// Admin Panel

	add_action( 'admin_menu', 'register_wayne_theme_menu_page' );

	// Theme Translate

	add_action('after_setup_theme','wayne_translate_theme');

	// Custom Logo

	add_theme_support( 'custom-logo' );

	add_theme_support( 'custom-logo', array(
		'height'      => 80,
		'width'       => 80,
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array( 'site-title', 'site-description' ),
	) );

	function register_wayne_theme_menu_page(){
		add_theme_page( 'Wayne Theme', 'Wayne Theme Settings', 'edit_theme_options', 'wayne-theme-settings', 'wayne_theme_menu_page');
		add_theme_page( 'Social Media', 'Social Media','manage_options','wayne-social-media' , 'wayne_theme_social_menu_page');
	}

	function wayne_theme_menu_page(){
		require(__DIR__).'/admin/wayne-settings.php';
	}
	function wayne_theme_social_menu_page(){
		require(__DIR__).'/admin/wayne-social-media.php';
	}

	// JS - CSS
	function wayne_data() {

	wp_enqueue_style( 'wayne-wordpress-requires', get_theme_file_uri( '/css/wordpress-requires.css' ), false, NULL, 'all' );
	wp_enqueue_style( 'wayne-bootstrap', get_theme_file_uri( '/css/bootstrap.min.css' ), false, NULL, 'all' );
	wp_enqueue_style( 'wayne-animate', get_theme_file_uri( '/css/animate.css' ), false, NULL, 'all' );
	wp_enqueue_style( 'wayne-font-awesome', get_theme_file_uri( '/css/font-awesome.min.css' ), false, NULL, 'all' );
	wp_enqueue_style( 'wayne-bootstrap-social', get_theme_file_uri( '/css/bootstrap-social.css' ), false, NULL, 'all' );
	wp_enqueue_style( 'wayne-google-fonts', get_theme_file_uri( '/css/google-fonts.css' ), false, NULL, 'all' );
	wp_enqueue_style( 'wayne-style', get_theme_file_uri( '/css/style.css' ), false, NULL, 'all' );


	wp_enqueue_script( 'wayne-font-awesome-js', get_theme_file_uri( 'font-awasome/all.min.js' ), false, NULL, 'all' );
	wp_enqueue_script( 'wayne-jquery', get_theme_file_uri( 'js/jquery-3.4.1.min.js' ), false, NULL, 'all' );
	wp_enqueue_script( 'wayne-popper', get_theme_file_uri( 'js/popper.min.js' ), false, NULL, 'all' );
	wp_enqueue_script( 'wayne-bootstrap-js', get_theme_file_uri( 'js/bootstrap.min.js' ), false, NULL, 'all' );
	wp_enqueue_script( 'wayne-js', get_theme_file_uri( 'js/wayne.js' ), false, NULL, 'all' );

	}

	function wayne_admin_data() {

		wp_enqueue_style( 'wayne-admin', get_theme_file_uri( 'admin/css/admin.css' ), false, NULL, 'all' );

		wp_enqueue_script( 'wayne-admin-jquery', get_theme_file_uri( 'admin/js/jquery-1.12.4.min.js' ), false, NULL, 'all' );

	}


	add_action( 'wp_enqueue_scripts', 'wayne_data' );

	add_action( 'admin_enqueue_scripts', 'wayne_admin_data' );

	// Excerpt


	function excerpt($limit) {
		$excerpt = explode(' ', get_the_excerpt(), $limit);
  
		if (count($excerpt) >= $limit) {
			array_pop($excerpt);
			$excerpt = implode(" ", $excerpt) . '...';
		} else {
			$excerpt = implode(" ", $excerpt);
		}
  
		$excerpt = preg_replace('`\[[^\]]*\]`', '', $excerpt);
  
		return $excerpt;
  }
  
  function content($limit) {
	  $content = explode(' ', get_the_content(), $limit);
  
	  if (count($content) >= $limit) {
		  array_pop($content);
		  $content = implode(" ", $content) . '...';
	  } else {
		  $content = implode(" ", $content);
	  }
  
	  $content = preg_replace('/\[.+\]/','', $content);
	  $content = apply_filters('the_content', $content); 
	  $content = str_replace(']]>', ']]&gt;', $content);
  
	  return $content;
  }


function wayne_reading_time() {
	$get_Content = wp_strip_all_tags( get_the_content() );
	$Words = explode(' ', $get_Content);
	$totalwords = array();
		foreach ($Words as $Word)  {
		if (array_key_exists($Word, $totalwords)){ 
			$totalwords[$Word] += 1;
		} else {
			$totalwords[$Word] = 1;
		}
	}
	$CheckWords = count($Words);
	$readingSpeed = 150;
	$result = $CheckWords/$readingSpeed;
	$result = round($result);
	return  '<strong>'.$result.' min</strong> read time';
}

function wayne_translate_theme() {
     load_theme_textdomain( 'wayne-blog-news', get_template_directory() . '/languages' );
     $locale = get_locale();
	 $locale_file = get_template_directory() . "/languages/$locale.php";
         if ( is_readable( $locale_file ) ) require_once( $locale_file );
 }

	// Widgets

	require get_template_directory() . '/inc/wayne-widgets.php';

	// Load More

	require get_template_directory() . '/inc/wayne-load-more.php';

	// Menu

	require get_template_directory() . '/inc/wayne-menu.php';

	// Sidebar

	require get_template_directory() . '/inc/wayne-sidebar.php';

	// Post View Count

	require get_template_directory() . '/inc/wayne-post-view-count.php';

	// User Meta

	require get_template_directory() . '/inc/wayne-user-meta.php';

	// Admin Panel Settings

	require get_template_directory() . '/inc/wayne-admin-func.php';

	// Comments Author URL

	require get_template_directory() . '/inc/wayne-comments.php';


?>