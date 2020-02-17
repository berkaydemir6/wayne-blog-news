<?php 


function wayne_ajax_blog_name_animate(){
    update_option('blog_name_animate', sanitize_text_field($_POST['data']));
    wp_die();
}

function wayne_ajax_menu_color(){
    update_option('wayne_menu_color', sanitize_text_field($_POST['data']));
    wp_die();
}


function wayne_ajax_blog_description_animate(){
    update_option('blog_description_animate', sanitize_text_field($_POST['data']));
    wp_die();
}


function wayne_ajax_search_box(){
    update_option('wayne_search_box', sanitize_text_field($_POST['data']));
    wp_die();
}


function wayne_ajax_footer_text(){
    update_option('wayne_footer_text', sanitize_text_field($_POST['data']));
    wp_die();
}


function wayne_ajax_footer_widgets(){
    update_option('wayne_footer_widgets', sanitize_text_field($_POST['data']));
    wp_die();

}


function wayne_ajax_load_more_page(){
    update_option('wayne_load_more_page', sanitize_text_field($_POST['data']));
    wp_die();
}

function wayne_ajax_comments(){
    update_option('wayne_comments', sanitize_text_field($_POST['data']));
    wp_die();
}


function wayne_ajax_posts_per_page(){
    update_option('posts_per_page', sanitize_text_field($_POST['data']));
    wp_die();
}


function wayne_ajax_footer_social_media(){
    update_option('wayne_footer_social_media', sanitize_text_field($_POST['data']));
    wp_die();

}


function wayne_ajax_latest_posts_template(){
    update_option('wayne_latest_posts_template', sanitize_text_field($_POST['data']));
    wp_die();
}


function wayne_ajax_latest_posts_template_mobile(){
    update_option('wayne_latest_posts_template_mobile', sanitize_text_field($_POST['data']));
    wp_die();
}


function wayne_ajax_footer_social_media_facebook(){
    update_option('wayne_footer_social_media_facebook', sanitize_text_field($_POST['data']));
    wp_die();
}



function wayne_ajax_footer_social_media_twitter(){
    update_option('wayne_footer_social_media_twitter', sanitize_text_field($_POST['data']));
    wp_die();
}



function wayne_ajax_footer_social_media_instagram(){
    update_option('wayne_footer_social_media_instagram', sanitize_text_field($_POST['data']));
    wp_die();
}



function wayne_ajax_footer_social_media_pinterest(){
    update_option('wayne_footer_social_media_pinterest', sanitize_text_field($_POST['data']));
    wp_die();
}



function wayne_ajax_footer_social_media_youtube(){
    update_option('wayne_footer_social_media_youtube', sanitize_text_field($_POST['data']));
    wp_die();
}



function wayne_ajax_footer_social_media_linkedin(){
    update_option('wayne_footer_social_media_linkedin', sanitize_text_field($_POST['data']));
    wp_die();
}



function wayne_ajax_footer_social_media_github(){
    update_option('wayne_footer_social_media_github', sanitize_text_field($_POST['data']));
    wp_die();
}


add_action( 'wp_ajax_wayne_ajax_blog_name_animate', 'wayne_ajax_blog_name_animate');

add_action( 'wp_ajax_wayne_ajax_blog_description_animate', 'wayne_ajax_blog_description_animate');

add_action( 'wp_ajax_wayne_ajax_search_box', 'wayne_ajax_search_box');

add_action( 'wp_ajax_wayne_ajax_menu_color', 'wayne_ajax_menu_color');



add_action( 'wp_ajax_wayne_ajax_footer_text', 'wayne_ajax_footer_text');

add_action( 'wp_ajax_wayne_ajax_footer_widgets', 'wayne_ajax_footer_widgets');



add_action( 'wp_ajax_wayne_ajax_load_more_page', 'wayne_ajax_load_more_page');

add_action( 'wp_ajax_wayne_ajax_comments', 'wayne_ajax_comments');

add_action( 'wp_ajax_wayne_ajax_posts_per_page', 'wayne_ajax_posts_per_page');

add_action( 'wp_ajax_wayne_ajax_latest_posts_template', 'wayne_ajax_latest_posts_template');

add_action( 'wp_ajax_wayne_ajax_latest_posts_template_mobile', 'wayne_ajax_latest_posts_template_mobile');



// Footer Social Media



add_action( 'wp_ajax_wayne_ajax_footer_social_media', 'wayne_ajax_footer_social_media');

add_action( 'wp_ajax_wayne_ajax_footer_social_media_facebook', 'wayne_ajax_footer_social_media_facebook');

add_action( 'wp_ajax_wayne_ajax_footer_social_media_twitter', 'wayne_ajax_footer_social_media_twitter');

add_action( 'wp_ajax_wayne_ajax_footer_social_media_instagram', 'wayne_ajax_footer_social_media_instagram');

add_action( 'wp_ajax_wayne_ajax_footer_social_media_pinterest', 'wayne_ajax_footer_social_media_pinterest');

add_action( 'wp_ajax_wayne_ajax_footer_social_media_youtube', 'wayne_ajax_footer_social_media_youtube');

add_action( 'wp_ajax_wayne_ajax_footer_social_media_linkedin', 'wayne_ajax_footer_social_media_linkedin');

add_action( 'wp_ajax_wayne_ajax_footer_social_media_github', 'wayne_ajax_footer_social_media_github');

?>