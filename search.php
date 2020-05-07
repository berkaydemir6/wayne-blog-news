<?php get_header(); 


$s=get_search_query();
$args = array('s' =>$s);
?>

<div class="row">
            <div class="col-md-8 except text-justify mt-1 p-3">

            <?php $the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) { 
        echo "<h2 style='color:#000'>";
        echo sprintf( __( 'Results for: %s', 'wayne-blog-news' ), get_query_var('s') );
        echo "</h2>";
        while ( $the_query->have_posts() ) {
           $the_query->the_post();
                 ?>

                 <div class="row">
                    <div class="col-12 col-md-6 my-md-3">

<img src="<?php if ( has_post_thumbnail() ) {
echo the_post_thumbnail_url();
}
else{
  echo get_theme_file_uri('img/image-404.png');
}
?>" class="icerik-gorsel w-100 p-3 h-100 d-inline-block" alt="<?php the_title(); ?>" style="min-height: 250px;"/>

</div>

<div class="col-12 col-md-6 my-md-4 mb-5">

<a href="<?php the_permalink(); ?>"><h3 class="page-news-type-h3"><?php the_title() ?></h3></a>
<p class="page-news-type-p d-none d-sm-block">
<?php echo excerpt(15); ?>
<br><small class="muted"><time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time></small>
</p>
</div></div>
                 <?php
        }
    }else{
?>
        
        <div class="alert alert-info mt-3">
        <h2 style='color:#000'><?php echo __('Oooops. We didn\'t found what you search.', 'wayne-blog-news') ?></h2>
          <p class="mt-2"><?php echo __('You should try searching using different words.', 'wayne-blog-news') ?></p>
        </div>
<?php }  ?>


            </div>
            <div class="col-md-4 sidebar">

            <?php dynamic_sidebar("wayne_sidebar"); ?>


            </div>

            </div>



<?php get_footer(); ?>