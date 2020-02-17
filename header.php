<?php
$custom_logo_id = get_theme_mod( 'custom_logo' );
$image = wp_get_attachment_image_src( $custom_logo_id, 'full');

?>

<!doctype html>

<html <?php language_attributes(); ?>>

  <head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php wp_head(); ?>

    <title><?php wp_title( '|', true, 'right' ); ?></title>

  </head>

  <body <?php body_class(); ?>>

  <div class="container mt-5">

      <!-- Title  -->

<div class="wayne-logo-div">

<img class="<?php if(wp_is_mobile()){echo 'wayne-logo-mobile';}else{echo 'wayne-logo';} ?>" src="<?php echo $image[0]?>" onclick="window.location.href = '<?php echo get_site_url(); ?>'">

</div>


<div class="text-center">
<h1 onclick="window.location.href = '<?php echo get_site_url(); ?>'" onselectstart="return false" class="cursor-none display-4 text-center mb-3" id="wayne-blogname"><?php echo get_bloginfo("name"); ?></h1>
<br>
<h2 onselectstart="return false" class="cursor-none display-6 text-center mb-5" id="wayne-blogdescription"><?php echo get_bloginfo("description"); ?></h2>

</div>



 <!-- Menu  -->
      <?php
if ( wp_is_mobile() ) { 
  if (function_exists(wayne_mobile_menu())) wayne_mobile_menu();
}
else{
   if (function_exists(wayne_header_menu())) wayne_header_menu(); 
   }
?>

<div id="qnimate" class="off">

    <div id="search" class="open">

    <button data-widget="remove" id="aramayiKapat" class="close" type="button">x</button>

    <form action="<?php echo home_url('/'); ?>" method="get" autocomplete="off">

            <input type="text" placeholder="search..." value="" name="s" id="term">

            <button class="btn btn-lg btn-site" type="submit"><span class="glyphicon glyphicon-search"></span> Search</button>

    </form>

    </div>

</div>