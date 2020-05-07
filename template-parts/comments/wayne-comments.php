<?php if(!empty($post->post_password)) : ?>
  	<?php if($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) : ?>
		<p><?php echo __('This post is password protected. Enter the password to view comments.', 'wayne-blog-news') ?></p>
  	<?php endif; ?>
<?php endif; ?>

<?php if($comments) : ?>
  	<ul>
    	<?php foreach($comments as $comment) : ?>
  		<div id="comment-<?php comment_ID(); ?>">
  			<?php if ($comment->comment_approved == '0') : ?>
  				<p><?php echo __('Your comment is awaiting approval', 'wayne-blog-news') ?></p>
  			<?php endif; ?>
              <div class="row my-3">
                    <div class="col-3">
                            <div class="text-center">
                            <img class="img-fluid yorum-fotografi mt-2" src="<?php echo get_avatar_url(get_comment_author_email()); ?>"/>
                            <br>
                            <h5 class="pt-2"><?php wayne_get_comment_author_link()?> </h5>
                            </div>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-7">
                        <div class="text-left">
                        <small class="text-muted"><?php echo comment_date(); ?> at <?php echo comment_time(); ?></small>
                        </div>
                         <p class="wayne-comment"><?php echo get_comment_text(); ?></p>

                    </div>
                </div>            
          </div>
		<?php endforeach; ?>
    <div class="row">
    <div class="col-6 text-center">
    <?php previous_comments_link(); ?>
    </div>
    <div class="col-6 text-center">
    <?php next_comments_link(); ?>
    </div>
    </div>
	</ul>
  <hr>
<?php else : ?>
	<p><?php echo __('No comments yet', 'wayne-blog-news') ?></p>
<?php endif; ?>

<?php if(comments_open()) : ?>
	<?php if(get_option('comment_registration') && !$user_ID) : ?>
		<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p><?php else : ?>
			<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
  
			<?php if($user_ID) : ?>
				<p><?php echo __('Logged in as', 'wayne-blog-news') ?> <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Log out &raquo;</a></p>
	<?php else : ?>
<div class="form-group row">
    <label for="author" class="col-sm-2 col-form-label"><?php echo __('Name', 'wayne-blog-news') ?> <small><?php if($req) echo "(required)"; ?></small></label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="author" id="author">
    </div>
  </div>

  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label"><?php echo __('Email', 'wayne-blog-news') ?> <small><?php if($req) echo "(required)"; ?></small></label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="email" id="email" placeholder="email@example.com" value="<?php echo $comment_author_email; ?>">
    </div>
  </div>
  <?php endif; ?>
  <div class="form-group">
    <label for="comment"><?php echo __('Comment', 'wayne-blog-news') ?></label>
    <textarea class="form-control" name="comment" id="comment" rows="5"></textarea>
  </div>

  <p><input class="btn btn-primary" style="background-color: crimson; border-color: crimson;" name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" />
			<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>"/></p>
			<?php do_action('comment_form', $post->ID); ?>


		</form>
	<?php endif; ?>
<?php else : ?>
	<p><?php echo __('The comments are closed.', 'wayne-blog-news') ?></p>
<?php endif; ?>