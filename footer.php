</div><footer style="background-color: #f4f6f8" class="pt-5 mt-3">

<div class="container">
      <?php if(get_option('wayne_footer_widgets') == 'enable'){ ?>
        <div class="row mt-5">
      <div class="col-md-4 text-center text-md-left">
            <?php dynamic_sidebar("footer_1"); ?>
      </div>
      <div class="col-md-4 text-center text-md-left">
            <?php dynamic_sidebar("footer_2"); ?>
      </div>
      <div class="col-md-4 text-center text-md-left">
            <?php dynamic_sidebar("footer_3"); ?>
      </div>
  </div>
     <?php } ?>
   
  <div class="row py-5">
      <div class="col-12 col-md-6 mb-5 text-center text-md-left rights-reserved" id="wayne-footer-text">
          <?php echo get_option('wayne_footer_text'); ?>
      </div>
      <div class="col-12 col-md-6 text-center text-md-right">
<div class="btn-group social" role="group" aria-label="Social Media">
<?php
if(get_option('wayne_footer_social_media') != 'disable'){

  if(get_option('wayne_footer_social_media_facebook')){
    echo '<a target="_blank" href="'.get_option("wayne_footer_social_media_facebook").'"><i class="fab fa-facebook fa-2x"></i></a>';
  }
  if(get_option('wayne_footer_social_media_twitter')){
    echo '<a target="_blank" href="https://twitter.com/'.get_option("wayne_footer_social_media_twitter").'"><i class="fab fa-twitter fa-2x"></i></a>';
  }
  if(get_option('wayne_footer_social_media_instagram')){
    echo '<a target="_blank" href="https://www.instagram.com/'.get_option("wayne_footer_social_media_instagram").'"><i class="fab fa-instagram fa-2x"></i></a>';
  }
  if(get_option('wayne_footer_social_media_pinterest')){
    echo '<a target="_blank" href="'.get_option("wayne_footer_social_media_pinterest").'"><i class="fab fa-pinterest fa-2x"></i></a>';
  }
  if(get_option('wayne_footer_social_media_youtube')){
    echo '<a target="_blank" href="'.get_option("wayne_footer_social_media_youtube").'"><i class="fab fa-youtube fa-2x"></i></a>';
  }
  if(get_option('wayne_footer_social_media_linkedin')){
    echo '<a target="_blank" href="'.get_option("wayne_footer_social_media_linkedin").'"><i class="fab fa-linkedin fa-2x"></i></a>';
  }
  if(get_option('wayne_footer_social_media_github')){
    echo '<a target="_blank" href="https://github.com/'.get_option("wayne_footer_social_media_github").'"><i class="fab fa-github fa-2x"></i></a>';
  }

}
?>
</div>
      </div>
  </div>
</div>
</footer>
<?php wp_footer(); ?>

<?php 

$blog_name_animate = get_option('blog_name_animate');
$blog_description_animate = get_option('blog_description_animate');

?>

<script>

  $("#wayne-blogname").hover(function() {
    $(this).addClass('animated <?php echo $blog_name_animate?>');
  }, function() { 
    $(this).removeClass('animated <?php echo $blog_name_animate?>');
  });

  $("#wayne-blogdescription").hover(function() {
    $(this).addClass('animated <?php echo $blog_description_animate?>');
  }, function() { 
    $(this).removeClass('animated <?php echo $blog_description_animate?>');
  }); 
</script>
</body>
</html>