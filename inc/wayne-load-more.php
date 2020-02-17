<?php

function wayne_load_more_scripts() {
 
			global $wp_query; 
		 
			wp_enqueue_script('jquery');
		 
			wp_register_script( 'wayne_loadmore', get_stylesheet_directory_uri() . '/js/loadmore.js', array('jquery') );

			wp_localize_script( 'wayne_loadmore', 'wayne_loadmore_params', array(
				'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', 
				'posts' => json_encode( $wp_query->query_vars ),
				'current_page' => get_query_var( 'paged' ) ? get_query_var('paged') : 1,
				'max_page' => $wp_query->max_num_pages
			) );
		 
			 wp_enqueue_script( 'wayne_loadmore' );
		}
		 
		add_action( 'wp_enqueue_scripts', 'wayne_load_more_scripts' );



function wayne_loadmore_ajax_handler(){
 	$args = json_decode( stripslashes( $_POST['query'] ), true );
	$args['paged'] = $_POST['page'] + 1;
	$args['post_status'] = 'publish';
 
	query_posts( $args );

	if(wp_is_mobile()){
		if(get_option('wayne_latest_posts_template_mobile') == 'latest-posts-template-2'){
			get_template_part( 'template-parts/load-more/template-2', get_post_format() );
		  }
		else{
			get_template_part( 'template-parts/load-more/template-default', get_post_format() );
		}
	  }else{
		if(get_option('wayne_latest_posts_template') == 'latest-posts-template-2'){
			get_template_part( 'template-parts/load-more/template-2', get_post_format() );
		  }
		else{
			get_template_part( 'template-parts/load-more/template-default', get_post_format() );
		}
	  }

	die;
}
 
 
 
add_action('wp_ajax_loadmore', 'wayne_loadmore_ajax_handler');
add_action('wp_ajax_nopriv_loadmore', 'wayne_loadmore_ajax_handler');

?>