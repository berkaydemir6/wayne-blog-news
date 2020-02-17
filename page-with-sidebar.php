<?php 

/*
 * Template Name: Page with Sidebar
 * Template Page Type: page
 */

get_header();

setPostViews(get_the_ID()); 

while(have_posts()) : the_post();
?>	

<div class="row mt-md-5">
<div class="col-md-8 mb-md-3" >


<?php if ( has_post_thumbnail() ) { ?>
    <figure class="imghvr-blur" onselectstart="return false">
   <img src="<?php echo the_post_thumbnail_url(); ?>" class="icerik-gorsel w-100 h-100 d-inline-block" alt="<?php the_title(); ?>"/>
    <figcaption>
        <div class="icerik-single px-5 pt-4">
    <h3 class="ih-zoom-out icerik-h3-page"><a class="main-h3-header px-1" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        </div>
    </figcaption>
</figure>
<?php }
else{ ?>

         <div class="icerik-single px-5">
     <h3 class="ih-zoom-out icerik-h3-page"><a class="main-h3-header px-1" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
         </div>
<?php } ?>

<div class="except text-justify mt-1 p-3">

            <?php the_content(); ?>


 </div>

            </div>
            <div class="col-md-4 mb-md-5">
            <?php dynamic_sidebar("wayne_blog_sidebar"); ?>
            </div>


</div>

  </div>
  <?php
                endwhile;
                
get_footer(); ?>