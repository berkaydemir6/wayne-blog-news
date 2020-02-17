<div class="col-md-8 mt-md-0" style="padding: 0px;">
<div class="row">
<?php 
    if ( have_posts() ) : while ( have_posts() ) : the_post();
?>

<div class="col-12 col-md-6 my-md-3">

<a href="<?php the_permalink(); ?>"><img src="<?php if ( has_post_thumbnail() ) {
echo the_post_thumbnail_url('medium_large');
}
else{
echo get_theme_file_uri('img/image-404.png');
}
?>" class="cursor-none icerik-gorsel w-100 p-3 h-100 d-inline-block" alt="<?php the_title(); ?>" style="min-height: 250px;"/></a>

</div>

<div class="col-12 col-md-6 my-md-4 mb-5">

<a href="<?php the_permalink(); ?>"><h3 class="page-news-type-h3"><?php the_title() ?></h3></a>
<p class="page-news-type-p d-none d-sm-block">

<?php echo excerpt(15); ?>
<br><small class="text-muted"><time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time> - by </small>
<?php $user_id =  get_the_author_meta( 'ID' ); ?>
<small class="text-muted">
<?php the_author_posts_link(); ?>
</small>
</p>
</div>
<?php 
endwhile; 
endif;
?>