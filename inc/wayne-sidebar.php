<?php

register_sidebar(
	array(
		'name' => 'Wayne Sidebar',
		'id' => 'wayne_sidebar',
		'before_widget' => '<div class="col my-4">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="recent-posts-header mb-4 left-border">',
		'after_title' => '</h4>'
	)
);


register_sidebar(
	array(
		'name' => 'Wayne Blog Sidebar',
		'id' => 'wayne_blog_sidebar',
		'before_widget' => '<div class="col my-4">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="recent-posts-header mb-4 left-border">',
		'after_title' => '</h4>'
	)
);


register_sidebar(
	array(
		'name' => 'Footer 1',
		'id' => 'footer_1',
		'before_widget' => '<div class="col my-4">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="recent-posts-header mb-4 left-border">',
		'after_title' => '</h4>'
	)
);


register_sidebar(
	array(
		'name' => 'Footer 2',
		'id' => 'footer_2',
		'before_widget' => '<div class="col my-4">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="recent-posts-header mb-4 left-border">',
		'after_title' => '</h4>'
	)
);


register_sidebar(
	array(
		'name' => 'Footer 3',
		'id' => 'footer_3',
		'before_widget' => '<div class="col my-4">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="recent-posts-header mb-4 left-border">',
		'after_title' => '</h4>'
	)
);

?>