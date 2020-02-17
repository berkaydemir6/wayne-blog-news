<?php

if( have_posts() ) :

?>

<div class="row">
<div class="col-md-8 mt-0">

<?php
$post_i = 0;
$post_x = 0;

while( have_posts() ): the_post();


if(wp_is_mobile()){
  echo '<div class="row mt-md-3">';

  get_template_part( 'template-parts/load-more/template-parts/1', get_post_format() );

  echo '</div>';

}else{
  if ($post_i % 3 == 0 || $post_i == 0): 
    $post_i += 1;

    echo '<div class="row mt-md-3">';

    get_template_part( 'template-parts/load-more/template-parts/1', get_post_format() );

    else: 

    $post_i += 1;
    $post_x += 1;

    get_template_part( 'template-parts/load-more/template-parts/2', get_post_format() );

    if ($post_x == 2){
        echo '</div><div class="row mt-md-3">';
    }

    endif;
}
    
endwhile;

endif;

?>

<script>$(document).ready(function() { 
$(".icerik-h3").hover(function() { 
  $(this).parent().parent().parent().parent().children("figure").children("img").css({"filter" : "blur(2px) grayscale(25%)", "transition" : ".3s linear"}).animate(200);
  $(this).parent().parent().parent().parent().children("figure").children("figcaption").children(".icerik-bilgileri").css({"visibility" : "visible", "transition" : ".3s linear", "opacity" : "1", "top" : "25px"}).animate(200);  
}, function() { 
  $(this).parent().parent().parent().parent().children("figure").children("img").css({"filter" : "blur(0)", "transition" : ".3s linear"}).animate(200);
  $(this).parent().parent().parent().parent().children("figure").children("figcaption").children(".icerik-bilgileri").css({"visibility" : "hidden", "transition" : ".3s linear", "opacity" : "0", "top" : "0px"}).animate(200);  
}); 
});


$(document).ready(function() { 
$(".icerik-sirali-h3").hover(function() { 
  $(this).parent().parent().parent().parent().children("figure").children("img").css({"filter" : "blur(2px) grayscale(25%)", "transition" : ".3s linear"}).animate(200);
  $(this).parent().parent().parent().parent().children("figure").children("figcaption").children(".icerik-bilgileri").css({"visibility" : "visible", "transition" : ".3s linear", "opacity" : "1", "top" : "25px"}).animate(200);  
}, function() { 
  $(this).parent().parent().parent().parent().children("figure").children("img").css({"filter" : "blur(0)", "transition" : ".3s linear"}).animate(200);
  $(this).parent().parent().parent().parent().children("figure").children("figcaption").children(".icerik-bilgileri").css({"visibility" : "hidden", "transition" : ".3s linear", "opacity" : "0", "top" : "0px"}).animate(200);  
}); 
});</script>

<?php die; ?>