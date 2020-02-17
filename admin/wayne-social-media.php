<?php 

$footer_social_media = get_option('footer_social_media');
$footer_social_media_facebook = get_option('wayne_footer_social_media_facebook');
$footer_social_media_twitter = get_option('wayne_footer_social_media_twitter');
$footer_social_media_instagram = get_option('wayne_footer_social_media_instagram');
$footer_social_media_pinterest = get_option('wayne_footer_social_media_pinterest');
$footer_social_media_youtube = get_option('wayne_footer_social_media_youtube');
$footer_social_media_linkedin = get_option('wayne_footer_social_media_linkedin');
$footer_social_media_github = get_option('wayne_footer_social_media_github');
?>

<h1>Footer Social Media</h1>

<table>
    <tr>
        <td class="wayne-setting-name"><h3>Facebook</h3></td>
        <td class="wayne-setting-choose"><input type="text" placeholder="URL" value ="<?php echo $footer_social_media_facebook?>" name="wayne_footer_social_media_facebook" class="wayne_footer_social_media_facebook"/></td>
        <td><input type="submit" class="button-primary wayne_footer_social_media_facebook_button updated_true" value='Update'></td>
    </tr>

    <tr>
        <td class="wayne-setting-name"><h3>Twitter</h3></td>
        <td class="wayne-setting-choose"><input type="text" placeholder="Username" value ="<?php echo $footer_social_media_twitter?>" name="wayne_footer_social_media_twitter" class="wayne_footer_social_media_twitter"/></td>
        <td><input type="submit" class="button-primary wayne_footer_social_media_twitter_button updated_true" value='Update'></td>
    </tr>

    <tr>
        <td class="wayne-setting-name"><h3>Instagram</h3></td>
        <td class="wayne-setting-choose"><input type="text" placeholder="Username" value ="<?php echo $footer_social_media_instagram?>" name="wayne_footer_social_media_instagram" class="wayne_footer_social_media_instagram"/></td>
        <td><input type="submit" class="button-primary wayne_footer_social_media_instagram_button updated_true" value='Update'></td>
    </tr>

    <tr>
        <td class="wayne-setting-name"><h3>Pinterest</h3></td>
        <td class="wayne-setting-choose"><input type="text" placeholder="URL" value ="<?php echo $footer_social_media_pinterest?>" name="wayne_footer_social_media_pinterest" class="wayne_footer_social_media_pinterest"/></td>
        <td><input type="submit" class="button-primary wayne_footer_social_media_pinterest_button updated_true" value='Update'></td>
    </tr>

    <tr>
        <td class="wayne-setting-name"><h3>YouTube</h3></td>
        <td class="wayne-setting-choose"><input type="text" placeholder="URL" value ="<?php echo $footer_social_media_youtube?>" name="wayne_footer_social_media_youtube" class="wayne_footer_social_media_youtube"/></td>
        <td><input type="submit" class="button-primary wayne_footer_social_media_youtube_button updated_true" value='Update'></td>
    </tr>

    <tr>
        <td class="wayne-setting-name"><h3>Linkedin</h3></td>
        <td class="wayne-setting-choose"><input type="text" placeholder="URL" value ="<?php echo $footer_social_media_linkedin?>" name="wayne_footer_social_media_linkedin" class="wayne_footer_social_media_linkedin"/></td>
        <td><input type="submit" class="button-primary wayne_footer_social_media_linkedin_button updated_true" value='Update'></td>
    </tr>

    <tr>
        <td class="wayne-setting-name"><h3>Github</h3></td>
        <td class="wayne-setting-choose"><input type="text" placeholder="Username" value ="<?php echo $footer_social_media_github?>" name="wayne_footer_social_media_github" class="wayne_footer_social_media_github"/></td>
        <td><input type="submit" class="button-primary wayne_footer_social_media_github_button updated_true" value='Update'></td>
    </tr>
</table>

<div class="admin-updated text-center mt-3">

Updated!

</div>

<script>

window.addEventListener('load', function () {
  

$('.wayne_footer_social_media_facebook_button').on('click', function(){

var wayne_footer_social_media_facebook = $(".wayne_footer_social_media_facebook").val();


jQuery.post(
    ajaxurl,
    {
        'action': 'wayne_ajax_footer_social_media_facebook',
        'data': wayne_footer_social_media_facebook
    }
);

});

$('.wayne_footer_social_media_twitter_button').on('click', function(){

var wayne_footer_social_media_twitter = $(".wayne_footer_social_media_twitter").val();


jQuery.post(
    ajaxurl,
    {
        'action': 'wayne_ajax_footer_social_media_twitter',
        'data': wayne_footer_social_media_twitter
    }
);

});

$('.wayne_footer_social_media_instagram_button').on('click', function(){

var wayne_footer_social_media_instagram = $(".wayne_footer_social_media_instagram").val();


jQuery.post(
    ajaxurl,
    {
        'action': 'wayne_ajax_footer_social_media_instagram',
        'data': wayne_footer_social_media_instagram
    }
);

});

$('.wayne_footer_social_media_pinterest_button').on('click', function(){

var wayne_footer_social_media_pinterest = $(".wayne_footer_social_media_pinterest").val();


jQuery.post(
    ajaxurl,
    {
        'action': 'wayne_ajax_footer_social_media_pinterest',
        'data': wayne_footer_social_media_pinterest
    }
);

});

$('.wayne_footer_social_media_youtube_button').on('click', function(){

var wayne_footer_social_media_youtube = $(".wayne_footer_social_media_youtube").val();


jQuery.post(
    ajaxurl,
    {
        'action': 'wayne_ajax_footer_social_media_youtube',
        'data': wayne_footer_social_media_youtube
    }
);

});

$('.wayne_footer_social_media_linkedin_button').on('click', function(){

var wayne_footer_social_media_linkedin = $(".wayne_footer_social_media_linkedin").val();


jQuery.post(
    ajaxurl,
    {
        'action': 'wayne_ajax_footer_social_media_linkedin',
        'data': wayne_footer_social_media_linkedin
    }
);

});

$('.wayne_footer_social_media_github_button').on('click', function(){

var wayne_footer_social_media_github = $(".wayne_footer_social_media_github").val();


jQuery.post(
    ajaxurl,
    {
        'action': 'wayne_ajax_footer_social_media_github',
        'data': wayne_footer_social_media_github
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

})


</script>