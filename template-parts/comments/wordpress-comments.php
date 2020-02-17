<ol class="comment-list">
    <?php
        wp_list_comments( array(
            'avatar_size' => 60,
            'max_depth'   => 5,
            'style'       => 'ol',
            'short_ping'  => true,
            'type'        => 'comment',
        ) );
    ?>
</ol><!-- .comment-list -->

<?php

wp_link_pages();

$comment_form = array(
    'fields' => array(
        'cookies' => '<p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes" />' .
        '<label for="wp-comment-cookies-consent">' . _e( 'Save my name, email, and website in this browser for the next time I comment.', 'wayne-blog-news' ) . '</label></p>',
    ),
);
 
comment_form( $comment_form );

if ( is_singular() ) wp_enqueue_script( "comment-reply" ); 

?>