    <div class="col-12 col-md-6 mt-4 mt-md-5 hover-post">
        <figure>
   <img src="<?php if ( has_post_thumbnail() ) {
	echo the_post_thumbnail_url();
}
else{
  echo get_theme_file_uri('img/image-404.png');
}
?>" class="icerik-gorsel w-100 p-3 h-100 d-inline-block" alt="<?php the_title(); ?>" style="min-height: 250px;"/>
    <figcaption>
        <div class="icerik-sirali px-5 pt-5">
        <h3 class="ih-zoom-out icerik-sirali-h3"><a class="main-sirali-h3-header px-1" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        </div>
        <div class="icerik-bilgileri">
            <table class="post-icons">
                <tr>
                    <td class="text-center"><i class="far fa-eye"></i></td>
                    <td class="text-center"><i class="far fa-comment"></i></td>
                </tr>
                <tr>
                    <td class="text-center"><?php echo getPostViews(get_the_ID()); ?></td>
                    <td class="text-center"><?php comments_number( '0', '1', '%' ); ?></td>
                </tr>
            </table>
        </div>
    </figcaption>
</figure>
</div>