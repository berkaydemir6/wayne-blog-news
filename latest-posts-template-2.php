<div class="col-md-8 mt-0">

<div class="row mt-md-5">

<?php


$post_i = 0;

$post_x = 0;


if ( have_posts() ) : while ( have_posts() ) : the_post();

if($post_i == $post_sayisi){

    break;

}

if(wp_is_mobile()){
    ?>

    <div class="col-md-1"></div>

    <div class="col-12 col-md-10 mt-4 hover-post">

    <figure>

<a href="<?php the_permalink(); ?>"><img src="<?php if ( has_post_thumbnail() ) {

echo the_post_thumbnail_url('medium_large');

}

else{

    echo get_theme_file_uri('img/image-404.png');

}

?>" class="cursor-none icerik-gorsel w-100 h-100 d-inline-block" alt="<?php the_title(); ?>"/></a>

    <figcaption>

        <div class="icerik px-5 pt-4">

    <h3 class="ih-zoom-out icerik-h3"><a onselectstart="return false" class="main-h3-header px-1" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

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

<?php

}
else{

    if ($post_i % 3 == 0 || $post_i == 0): 

        $post_i += 1; 
    
    ?>
    
        <div class="col-md-1"></div>
    
        <div class="col-12 col-md-10 mt-4 hover-post">
    
        <figure>
    
    <a href="<?php the_permalink(); ?>"><img src="<?php if ( has_post_thumbnail() ) {
    
    echo the_post_thumbnail_url('medium_large');
    
    }
    
    else{
    
        echo get_theme_file_uri('img/image-404.png');
    
    }
    
    ?>" class="cursor-none icerik-gorsel w-100 h-100 d-inline-block" alt="<?php the_title(); ?>"/></a>
    
        <figcaption>
    
            <div class="icerik px-5 pt-4">
    
        <h3 class="ih-zoom-out icerik-h3"><a onselectstart="return false" class="main-h3-header px-1" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    
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
    
    <div class="col-md-1"></div>
    
            
    
    <?php
    
    
    
    else: 
    
    $post_i += 1;
    
    $post_x += 1;
    
    ?>    
    
            <div class="col-12 col-md-6 mt-4 mt-md-5 hover-post">
    
            <figure>
    
    <a href="<?php the_permalink(); ?>"><img src="<?php if ( has_post_thumbnail() ) {
    
        echo the_post_thumbnail_url();
    
    }
    
    else{
    
        echo get_theme_file_uri('img/image-404.png');
    
    }
    
    ?>" class="cursor-none icerik-gorsel w-100 p-3 h-100 d-inline-block" alt="<?php the_title(); ?>" style="min-height: 250px;"/></a>
    
        <figcaption>
    
            <div class="icerik-sirali px-5 pt-5">
    
            <h3 class="ih-zoom-out icerik-sirali-h3"><a onselectstart="return false" class="main-sirali-h3-header px-1" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    
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
    
            <?php 
    
    
    
            if ($post_x == 2){
    
                echo '</div><div class="row mt-md-5">';
    
            }

        endif;
    
}

    endwhile;

    endif;



    

    ?>