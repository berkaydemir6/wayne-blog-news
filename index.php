<?php get_header(); ?>
    <div class="row">
    <?php
    $post_sayisi = get_option('posts_per_page');

    if(wp_is_mobile()){
      if(get_option('wayne_latest_posts_template_mobile')){
        require_once(get_option('wayne_latest_posts_template_mobile').'.php');
      }
      else{
        require_once("latest-posts-template-default.php");
      }
    }else{
      if(get_option('wayne_latest_posts_template')){
        require_once(get_option('wayne_latest_posts_template').'.php');
      }
      else{
        require_once("latest-posts-template-default.php");
      }
    }
    ?>

</div> 
</div>

<div class="col-md-4 mt-md-4 sidebar d-none d-sm-block">

<?php dynamic_sidebar("wayne_sidebar"); ?>

</div>

<?php 

if(get_option('wayne_load_more_page') == 'prev_next_page'){ ?>

<div class="row w-100 text-center next-prev-page">

  <div class="col-6 col-md-4">

  <?php previous_posts_link( 'Previous Page' ); ?>

  </div>

  <div class="col-6 col-md-4">

  <?php next_posts_link( 'Next Page' ); ?>

  </div>

</div>
<?php
}else{ ?>

<div class="col-12 mt-3">
          <button type="button" style="display: none;"></button>
          
<?php

 if (  $wp_query->max_num_pages > 1 )
   echo '<div class="btn btn-outline-danger wayne_loadmore col-md-8">Load More</div>';

   ?>
      </div>

<?php } ?>

      <div class="sidebar d-block d-md-none d-lg-none d-xl-none">

      <?php dynamic_sidebar("wayne_sidebar"); ?>

  </div>

  </div>
  </div>


  <?php get_footer(); ?>