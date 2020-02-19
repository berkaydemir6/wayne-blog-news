<?php get_header();

setPostViews(get_the_ID()); 

while(have_posts()) : the_post();
?>	

<div class="row row-no-margin mt-md-5">
            <div class="col-md-8">
              
            <figure class="imghvr-blur" onselectstart="return false">
   <img src="<?php if ( has_post_thumbnail() ) {
	echo the_post_thumbnail_url();
}
else{
  echo get_theme_file_uri('img/image-404.png');
}
?>" class="icerik-gorsel w-100 h-100 d-inline-block" alt="<?php the_title(); ?>"/>
</figure>
            </div>
            <div class="col-md-4 mb-md-5 my-4 d-none d-sm-block">
       <div class="thumb-post">
            <p class="date text-center mt-1"><img class="img-fluid" src="<?php $user_id =  get_the_author_meta( 'ID' );
            echo get_avatar_url( get_the_author_meta( 'ID' ) , 32 ); ?>" alt="Profile Photo"/></p>
                <h3 class="text-center"><a href="#" class="wayne-author"><?php the_author_posts_link(); ?></a></h3>
                <div class="text-center">
                <div class="btn-group social my-2" role="group" aria-label="Social Media">
		<?php 
		if(get_user_meta($user_id, 'facebook', true) != ''){
			echo '<a href="'.get_user_meta($user_id, 'facebook', true).'"><i class="fab fa-facebook fa-2x"></i></a>';
		}
		if(get_user_meta($user_id, 'twitter', true) != ''){
			echo '<a href="https://twitter.com/'.get_user_meta($user_id, 'twitter', true).'"><i class="fab fa-twitter fa-2x"></i></a>';
		}
		if(get_user_meta($user_id, 'instagram', true) != ''){
			echo '<a href="https://www.instagram.com/'.get_user_meta($user_id, 'instagram', true).'"><i class="fab fa-instagram fa-2x"></i></a>';
		}
		if(get_user_meta($user_id, 'github', true) != ''){
			echo '<a href="https://github.com/'.get_user_meta($user_id, 'github', true).'"><i class="fab fa-github fa-2x"></i></a>';
		}
		?>
			</div>

                </div>
               
                <p class="text-center p-1 author-details single-w"><?php echo get_user_meta($user_id, 'slogan', true); ?></p>
    
        </div> 
        <div class="single-w">
        <?php the_date("j F Y"); ?> </br>
        <?php echo wayne_reading_time(); ?>
        </div>
				<p class="date text-center mt-2 single-w"> <?php echo getPostViews(get_the_ID()); ?> views </p>
            </div>
    </div>

        <div class="row" <?php post_class(); ?>>
            <div class="col-md-8 except text-justify mt-4">
            <div class="icerik-single mt-2 mb-2">
    <h3 class="ih-zoom-out icerik-h3-single"><a class="main-h3-header main-h3-header-in-single px-2 py-4" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        </div>

            <?php the_content(); ?>

            </div>
            <div class="col-md-4 sidebar">

            <?php dynamic_sidebar("wayne_blog_sidebar"); ?>

            </div>

            </div>
            <div class="row">
            <div class="col-md-8">
            <?php 
            
            if ( get_the_tags() ) {
              foreach( get_the_tags() as $tag ) {
                echo '<a href="'.get_tag_link($tag).'" class="wayne-tag" style="text-decoration: none;"><strong>'.$tag->name.'</strong></a>';
              }
            } 
      
            $categories = get_the_category();
            if ( ! empty( $categories ) ) {
                echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '" class="wayne-category">' . esc_html( $categories[0]->name ) . '</a>';
            }
            ?>
            </div>
            </div>
              <div class="row">
            <div class="col-12 col-md-8 mt-1 p-3">

            <?php 
            comments_template(); 
            ?>

            </div>

            <div class="col-md-4">
            
            </div>
            
            </div>

</div>

  </div>
<?php

 endwhile;           
 get_footer(); 
 
 ?>