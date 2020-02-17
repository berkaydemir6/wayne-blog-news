<?php 

$animateList = array('bounce', 'flash', 'pulse', 'rubberBand', 'shake', 'swing', 'tada', 'wobble', 'jello', 'heartBeat',

'bounceIn', 'bounceInDown', 'bounceInLeft', 'bounceInRight', 'bounceInUp', 'bounceOut', 'bounceOutDown', 'bounceOutLeft',

'bounceOutRight', 'bounceOutUp', 'fadeIn', 'fadeInDown', 'fadeInDownBig', 'fadeInLeft', 'fadeInLeftBig', 'fadeInRight',

'fadeInRightBig', 'fadeInUp', 'fadeOut', 'fadeOutDown', 'fadeOutDownBig', 'fadeOutLeft', 'fadeOutLeftBig', 'fadeOutRight',

'fadeOutRightBig', 'fadeOutUp', 'fadeOutUpBig', 'flip', 'flipInX', 'flipInY', 'flipOutX', 'flipOutY', 'lightSpeedIn',

'lightSpeedOut', 'rotateIn', 'rotateInDownLeft', 'rotateInDownRight', 'rotateInUpLeft', 'rotateInRight', 'rotateOut',

'rotateOutDownLeft', 'rotateOutRightLeft', 'rotateOutUpLeft', 'rotateOutUpRight', 'slideOutUp', 'slideOutLeft', 'slideOutRight',

'zoomIn', 'zoomInDown', 'zoomInLeft', 'zoomInRight', 'zoomInUp', 'zoomOut', 'zoomOutDown', 'zoomOutLeft', 'zoomOutRight',

'zoomOutUp', 'hinge', 'jackInTheBox', 'rollIn', 'rollOut');


$colorList = array('primary', 'secondary', 'success', 'danger', 'warning', 'info', 'light', 'dark');

$blog_name_animate = get_option('blog_name_animate');

$blog_description_animate = get_option('blog_description_animate');

$wayne_menu_color = get_option('wayne_menu_color');

$search_box = get_option('wayne_search_box');

$wayne_footer_text = get_option('wayne_footer_text');

$wayne_footer_widgets = get_option('wayne_footer_widgets');

$wayne_footer_social_media = get_option('wayne_footer_social_media');

$wayne_load_more_page = get_option('wayne_load_more_page');

$wayne_comments = get_option('wayne_comments');

$wayne_posts_per_page = get_option('posts_per_page');

$wayne_latest_posts_template = get_option('wayne_latest_posts_template');

$wayne_latest_posts_template_mobile = get_option('wayne_latest_posts_template_mobile');

?>



<h1>Wayne WordPress Theme</h1>



<h1>Header</h1>

<table>



<tr>

    <td class="wayne-setting-name"><h3>Web Site Name - Hover Animate</h3></td>

    <td class="wayne-setting-choose"><select name="blog_name_animate" class="blog_name_animate">

    <option value="No Animate">No Animate</option>

    <?php 

    foreach ($animateList as &$animateName) {

        echo '<option value="'.$animateName.'">'.$animateName.'</option>';

} 

?>

    </select></td>

    <td><input type="submit" class="button-primary blog_name_animate_button updated_true" value='Update'></td>

</tr>



<tr>

    <td class="wayne-setting-name"><h3>Web Site Description - Hover Animate</h3></td>

    <td class="wayne-setting-choose"><select name="blog_description_animate" class="blog_description_animate">

    <option value="No Animate">No Animate</option>

    <?php 

    foreach ($animateList as &$animateName) {

        echo '<option value="'.$animateName.'">'.$animateName.'</option>';

} 

?>

    </select></td>

    <td><input type="submit" class="button-primary blog_description_animate_button updated_true" value='Update'></td>

</tr>

<tr>

    <td class="wayne-setting-name"><h3>Search Box</h3></td>

    <td class="wayne-setting-choose">

    <select name="wayne_search_box" class="wayne_search_box">

    <option value="enable">Enable</option>

    <option value="disable">Disable</option>

    </select>

    </td>

    <td><input type="submit" class="button-primary search_box_button updated_true" value='Update'></td>

</tr>


<tr>

    <td class="wayne-setting-name"><h3>Menu Colors</h3></td>

    <td class="wayne-setting-choose"><select name="wayne_menu_color" class="wayne_menu_color">

    <option value="colorful">colorful</option>

    <?php 

    foreach ($colorList as $colorName) {

        echo '<option value="'.$colorName.'">'.$colorName.'</option>';

} 

?>

    </select></td>

    <td><input type="submit" class="button-primary wayne_menu_color_button updated_true" value='Update'></td>

</tr>

<tr>

    <td class="wayne-setting-name"><h3>Logo</h3></td>

    

    <td><input type="submit" class="button-secondary" value='Change Logo' onclick="window.location.href = '<?php echo get_site_url()?>/wp-admin/customize.php'"></td>

    <td >Customize wayne-logo and wayne-logo-mobile class for custom logo margin and padding.</td>
</tr>



</table>





<h1>Blog</h1>



<table>



<tr>

    <td class="wayne-setting-name"><h3>Post per page</h3></td>

    <td class="wayne-setting-choose" id="wayne_posts_per_page"><input type="number" value ="<?php echo $wayne_posts_per_page?>" name="wayne_posts_per_page" class="wayne_posts_per_page"/></td>

    <td><input type="submit" class="button-primary wayne_posts_per_page_button updated_true" value='Update'></td>

</tr>



<tr>

    <td class="wayne-setting-name"><h3>Latest Post Template - Desktop</h3></td>

    <td class="wayne-setting-choose">

    <select name="wayne_latest_posts_template" class="wayne_latest_posts_template">

    <option value="latest-posts-template-default">Default Template</option>

    <option value="latest-posts-template-2">Template 2</option>

    </select>

    </td>

    <td><input type="submit" class="button-primary wayne_latest_posts_template_button updated_true" value='Update'></td>

</tr>



<tr>

    <td class="wayne-setting-name"><h3>Latest Post Template - Mobile </h3></td>

    <td class="wayne-setting-choose">

    <select name="wayne_latest_posts_template_mobile" class="wayne_latest_posts_template_mobile">

    <option value="latest-posts-template-default">Default Template</option>

    <option value="latest-posts-template-2">Template 2</option>

    </select>

    </td>

    <td><input type="submit" class="button-primary wayne_latest_posts_template_mobile_button updated_true" value='Update'></td>

</tr>



<tr>

    <td class="wayne-setting-name"><h3>Load More / Page</h3></td>

    <td class="wayne-setting-choose">

    <select name="wayne_load_more_page" class="wayne_load_more_page">

    <option value="load_more">Load More</option>

    <option value="prev_next_page">Prev. / Next Page</option>

    </select>

    </td>

    <td><input type="submit" class="button-primary wayne_load_more_page_button updated_true" value='Update'></td>

</tr>

<tr>

    <td class="wayne-setting-name"><h3>Comments</h3></td>

    <td class="wayne-setting-choose">

    <select name="wayne_comments" class="wayne_comments">

    <option value="wayne-comments">Wayne</option>

    <option value="wordpress-comments">WordPress</option>

    </select>

    </td>

    <td><input type="submit" class="button-primary wayne_comments_button updated_true" value='Update'></td>

</tr>



</table>



<h1>Footer</h1>



<table>



<tr>

    <td class="wayne-setting-name"><h3>Footer Text</h3></td>

    <td class="wayne-setting-choose"><input type="text" value ="<?php echo $wayne_footer_text?>" name="wayne_footer_text" class="wayne_footer_text"/></td>

    <td><input type="submit" class="button-primary wayne_footer_text_button updated_true" value='Update'></td>

</tr>



<tr>

    <td class="wayne-setting-name"><h3>Footer Widgets</h3></td>

    <td class="wayne-setting-choose">

    <select name="wayne_footer_widgets" class="wayne_footer_widgets">

    <option value="enable">Enable</option>

    <option value="disable">Disable</option>

    </select>

    </td>

    <td><input type="submit" class="button-primary wayne_footer_widgets_button updated_true" value='Update'></td>

</tr>



<tr>

    <td class="wayne-setting-name"><h3>Footer Social Media</h3></td>

    <td class="wayne-setting-choose">

    <select name="wayne_footer_social_media" class="wayne_footer_social_media">

    <option value="enable">Enable</option>

    <option value="disable">Disable</option>

    </select>

    </td>

    <td><input type="submit" class="button-primary wayne_footer_social_media_button updated_true_restart" id="wayne_footer_social_media" value='Update'></td>
    <td><input type="submit" class="button-secondary" id="wayne_footer_social_media_customize" value='Customize' onclick="window.location.href = '<?php echo get_site_url().'/wp-admin/themes.php?page=wayne-social-media'; ?>'"></td>

</tr>



</table>



<div class="admin-updated text-center mt-3">



Updated!



</div>



<script>

window.addEventListener('load', function () {
 
<?php

if(strlen($blog_name_animate) > 0){ ?>

$("select.blog_name_animate").val('<?php echo $blog_name_animate?>').change() ;

<?php

}

if(strlen($wayne_menu_color) > 0){ ?>

    $("select.wayne_menu_color").val('<?php echo $wayne_menu_color?>').change() ;
    
    <?php
    
    }

if(strlen($blog_description_animate) > 0){ ?>

$("select.blog_description_animate").val('<?php echo $blog_description_animate?>').change() ;

<?php

}

if(strlen($search_box) > 0){ ?>

$("select.wayne_search_box").val('<?php echo $search_box?>').change() ;

<?php

}

if(strlen($wayne_footer_widgets) > 0){ ?>

$("select.wayne_footer_widgets").val('<?php echo $wayne_footer_widgets?>').change() ;

<?php  

} 

if(strlen($wayne_load_more_page) > 0){ ?>

$("select.wayne_load_more_page").val('<?php echo $wayne_load_more_page?>').change() ;

<?php 

}

if(strlen($wayne_comments) > 0){ ?>

    $("select.wayne_comments").val('<?php echo $wayne_comments?>').change() ;
    
    <?php 
    
    }

if(strlen($wayne_latest_posts_template) > 0){ ?>

$("select.wayne_latest_posts_template").val('<?php echo $wayne_latest_posts_template?>').change() ;

<?php 

}

if(strlen($wayne_latest_posts_template_mobile) > 0){ ?>

$("select.wayne_latest_posts_template_mobile").val('<?php echo $wayne_latest_posts_template_mobile?>').change() ;

<?php 

}

if(strlen($wayne_footer_social_media) > 0){ ?>

$("select.wayne_footer_social_media").val('<?php echo $wayne_footer_social_media?>').change() ;

<?php 

}

?>



$('.blog_name_animate_button').on('click', function(){



var blog_name_animate = $("select.blog_name_animate").children("option:selected").val();
    

jQuery.post(

ajaxurl,

{

    'action': 'wayne_ajax_blog_name_animate',

    'data': blog_name_animate

}

);



});


$('.wayne_menu_color_button').on('click', function(){



var menu_color = $("select.wayne_menu_color").children("option:selected").val();

    

jQuery.post(

ajaxurl,

{

    'action': 'wayne_ajax_menu_color',

    'data': menu_color

}

);



});





$('.blog_description_animate_button').on('click', function(){



var blog_description_animate = $("select.blog_description_animate").children("option:selected").val();

    

jQuery.post(

ajaxurl,

{

    'action': 'wayne_ajax_blog_description_animate',

    'data': blog_description_animate

}

);



});



$('.search_box_button').on('click', function(){



var search_box = $("select.wayne_search_box").children("option:selected").val();    

console.log(search_box);

jQuery.post(

ajaxurl,

{

    'action': 'wayne_ajax_search_box',

    'data': search_box

}

);



});





$('.wayne_footer_text_button').on('click', function(){



var wayne_footer_text = $(".wayne_footer_text").val();



jQuery.post(

ajaxurl,

{

    'action': 'wayne_ajax_footer_text',

    'data': wayne_footer_text

}

);

});





$('.wayne_footer_widgets_button').on('click', function(){



var wayne_footer_widgets = $("select.wayne_footer_widgets").children("option:selected").val();



jQuery.post(

ajaxurl,

{

    'action': 'wayne_ajax_footer_widgets',

    'data': wayne_footer_widgets

}

);



});



$('.wayne_load_more_page_button').on('click', function(){



var wayne_load_more_page = $("select.wayne_load_more_page").children("option:selected").val();



jQuery.post(

ajaxurl,

{

    'action': 'wayne_ajax_load_more_page',

    'data': wayne_load_more_page

}

);



});


$('.wayne_comments_button').on('click', function(){



var wayne_comments = $("select.wayne_comments").children("option:selected").val();



jQuery.post(

ajaxurl,

{

    'action': 'wayne_ajax_comments',

    'data': wayne_comments

}

);



});



$('.wayne_latest_posts_template_button').on('click', function(){



var wayne_latest_posts_template = $("select.wayne_latest_posts_template").children("option:selected").val();



jQuery.post(

ajaxurl,

{

    'action': 'wayne_ajax_latest_posts_template',

    'data': wayne_latest_posts_template

}

);



});



$('.wayne_latest_posts_template_mobile_button').on('click', function(){



var wayne_latest_posts_template_mobile = $("select.wayne_latest_posts_template_mobile").children("option:selected").val();



jQuery.post(

ajaxurl,

{

    'action': 'wayne_ajax_latest_posts_template_mobile',

    'data': wayne_latest_posts_template_mobile

}

);



});





$('.wayne_footer_social_media_button').on('click', function(){



var wayne_footer_social_media = $("select.wayne_footer_social_media").children("option:selected").val();



jQuery.post(

ajaxurl,

{

    'action': 'wayne_ajax_footer_social_media',

    'data': wayne_footer_social_media

}

);



});





$('.wayne_posts_per_page_button').on('click', function(){



var wayne_posts_per_page = $(".wayne_posts_per_page").val();



jQuery.post(

ajaxurl,

{

    'action': 'wayne_ajax_posts_per_page',

    'data': wayne_posts_per_page

}

);



});





$('.updated_true').on('click', function(){



$(".admin-updated").css("visibility", "visible");

setTimeout(

function() 

{

    $(".admin-updated").css("visibility", "hidden");

}, 2000);



});



$('.updated_true_restart').on('click', function(){



$(".admin-updated").css("visibility", "visible");

$(".admin-updated").text('Refresh the Page');

setTimeout(

function() 

{

    $(".admin-updated").css("visibility", "hidden");

    $(".admin-updated").text('Updated!');

}, 2000);



});



})

</script>