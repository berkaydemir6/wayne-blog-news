<?php 

/*
 * Template Name: Single without Sidebar
 * Template Post Type: post
 */

get_header();

setPostViews(get_the_ID()); 

while(have_posts()) : the_post();
?>	

<div class="row mt-md-3">
            <div class="col-md-12 mb-md-3" >
            <div class="icerik-single mb-3">
    <h3 class="ih-zoom-out icerik-h3-single"><a class="main-h3-header" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        </div>
            <figure class="imghvr-blur" onselectstart="return false">
   <img src="<?php if ( has_post_thumbnail() ) {
	echo the_post_thumbnail_url();
}
else{
  echo get_theme_file_uri('img/image-404.png');
}


?>" 

<?php
if(wp_is_mobile()){ ?>

class="icerik-gorsel w-100 h-100 mx-auto d-block"

  <?php }else{ ?>

    class="icerik-gorsel w-50 h-50 mx-auto d-block"
  
  <?php } ?>

 alt="<?php the_title(); ?>"/>
</figure>
           
            <div class="except text-justify mt-1 p-3" <?php post_class(); ?>>
            <?php the_content(); ?>
            <small class="text-muted"><time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time></small>
            </div>
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
  <?php
endwhile;
 get_footer(); ?>