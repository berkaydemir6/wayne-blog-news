<?php 

get_header();

setPostViews(get_the_ID()); 

while(have_posts()) : the_post();
?>	

<div class="row mt-md-5">

<div class="col-md-12 mb-md-3" >

<?php if ( has_post_thumbnail() ) { ?>

 
            <figure class="imghvr-blur" onselectstart="return false">
   <img src="<?php echo the_post_thumbnail_url(); ?>" 

   <?php
if(wp_is_mobile()){ ?>

class="icerik-gorsel w-100 h-100 mx-auto d-block"

  <?php }else{ ?>

    class="icerik-gorsel w-50 h-50 mx-auto d-block"
  
  <?php } ?>
   
   alt="<?php the_title(); ?>"/>
    <figcaption>
        <div class="icerik-single-without-sidebar pt-4">
    <h3 class="ih-zoom-out icerik-h3"><a class="main-h3-header px-1" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        </div>
    </figcaption>
</figure>
           
	
<?php }else{ ?>

        <div class="icerik-single-without-sidebar">
    <h3 class="ih-zoom-out icerik-h3"><a class="main-h3-header px-1" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        </div>

<?php } ?>

</div>
            <div class="except text-justify px-3">

            <?php the_content(); ?>


            </div>
            </div>

</div>

  </div>
  
  <?php
endwhile;

  get_footer(); ?>