<?php

// Latest Posts Widget

class wayne_latest_posts extends WP_Widget {

	function __construct() {
		parent::__construct(
		'wayne_latest_posts',
		__('Wayne Latest Posts', 'wayne-blog-news'),
		array( 'description' => __( 'Latest posts on your Website', 'wayne-blog-news' ), )
		);
	
	}


	public function widget( $args, $instance ) {
        $title = apply_filters( 'widget_title', $instance['title'] );
        echo $args['before_widget'];
        $number = $instance[ 'number' ];
		if ( ! empty( $title ) )
		echo $args['before_title'] .''. $title .'' . $args['after_title'];
		
		$r = new WP_Query( apply_filters( 'widget_posts_args', array( 'posts_per_page' => $number, 'no_found_rows' => true, 'post_status' => 'publish', 'ignore_sticky_posts' => true ) ) );

		$wayne_latest_posts_yazi_sayisi = 0;

		while ( $r->have_posts() ) : $r->the_post(); 

            $wayne_latest_posts_yazi_sayisi += 1;
            		
			if($wayne_latest_posts_yazi_sayisi == $number + 1){
				break;
			}
		?>

			<div class="row">
			<div class="col-6 col-md-5 image-container p-3">
			<a href="<?php the_permalink() ?>"><img src="<?php if ( has_post_thumbnail() ) {
	echo the_post_thumbnail_url();
}
else{
	echo get_theme_file_uri('img/image-404.png');
}
?>" class="image-cut h-100 w-100" alt="<?php the_title() ?>"></a>
			</div>
			<div class="col-6 col-md-7 ">
			<a href="<?php the_permalink() ?>">
			<h4 class="mb-1 mt-3 widget-son-yazilar-h4"><?php the_title() ?></h4>
			</a>
			<small class="text-muted"><time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time></small>
			</div>
			</div>

			<hr class="m-0">

		<?php endwhile;
		wp_reset_query();


		echo $args['after_widget'];
		}

	
    public function form( $instance ) {
        if ( isset( $instance[ 'title' ] ) )
        $title = $instance[ 'title' ];
        else
        $title = __( 'Latest Posts', 'wayne-blog-news' );
        if ( isset( $instance[ 'number' ] ) )
        $number = $instance[ 'number' ];
        else
        $number = '5';
        ?>
        <p>
        <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:', 'wayne-blog-news' ); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        <label for="<?php echo $this->get_field_id( 'number' ); ?>"><?php _e( 'Number of posts:', 'wayne-blog-news' ); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id( 'number' ); ?>" name="<?php echo $this->get_field_name( 'number' ); ?>" type="text" value="<?php echo esc_attr( $number ); ?>" />
        </p>
        <?php
        }

	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        $instance['number'] = ( ! empty( $new_instance['number'] ) ) ? strip_tags( $new_instance['number'] ) : '';
        return $instance;
		}


}

	function wayne_latest_posts_register_widget() {
		register_widget( 'wayne_latest_posts' );
		}
        add_action( 'widgets_init', 'wayne_latest_posts_register_widget' );
        

// Tags Widget


class wayne_tags extends WP_Widget {

	function __construct() {
		parent::__construct(
		'wayne_tags',
		__('Wayne Tags', 'wayne-blog-news'),
		array( 'description' => __( 'Tags on your Website', 'wayne-blog-news' ), )
		);
	
	}


	public function widget( $args, $instance ) {
		$title = apply_filters( 'widget_title', $instance['title'] );
		echo $args['before_widget'];
		$number = $instance[ 'number' ];

		if ( ! empty( $title ) )
		echo $args['before_title'] .''. $title .''. $args['after_title'];
		$etiket_sayisi = 0;
		$number -= 1;
		
		$r = new WP_Query( apply_filters( 'widget_posts_args', array( 'posts_per_page' => 100, 'no_found_rows' => true, 'post_status' => 'publish', 'ignore_sticky_posts' => true ) ) );

			
		while ( $r->have_posts() ) : $r->the_post(); ?>

			<?php $post_tags = get_the_tags();
 
		if ( $post_tags) {
			foreach( $post_tags as $tag ) {
				if($etiket_sayisi <= $number){
					echo '<a href="'.get_tag_link($tag).'" class="wayne-tag" style="text-decoration: none;"><strong>'.$tag->name.'</strong></a>';
				}
				$etiket_sayisi += 1;
			}
		} 
	
?>

        <?php endwhile;

		echo $args['after_widget'];
		}

	
	public function form( $instance ) {
		if ( isset( $instance[ 'title' ] ) )
		$title = $instance[ 'title' ];
		else
		$title = __( 'Tags', 'wayne-blog-news' );
		if ( isset( $instance[ 'number' ] ) )
        $number = $instance[ 'number' ];
        else
        $number = '5';
		?>
		<p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:', 'wayne-blog-news' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		<label for="<?php echo $this->get_field_id( 'number' ); ?>"><?php _e( 'Number of tags:', 'wayne-blog-news' ); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id( 'number' ); ?>" name="<?php echo $this->get_field_name( 'number' ); ?>" type="text" value="<?php echo esc_attr( $number ); ?>" />
		</p>
		<?php
		}

	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['number'] = ( ! empty( $new_instance['number'] ) ) ? strip_tags( $new_instance['number'] ) : '';
		return $instance;
		}


}

	function wayne_tags_register_widget() {
		register_widget( 'wayne_tags' );
		}
		add_action( 'widgets_init', 'wayne_tags_register_widget' );


// Contact Widget

class wayne_contact extends WP_Widget {

	function __construct() {
		parent::__construct(
		'wayne_contact',
		__('Wayne Contact', 'wayne-blog-news'),
		array( 'description' => __( 'Contact Details', 'wayne-blog-news' ), )
		);
	
	}


	public function widget( $args, $instance ) {
		$title = apply_filters( 'widget_title', $instance['title'] );
        echo $args['before_widget'];
        $location = $instance[ 'location' ];
        $location_url = $instance[ 'location_url' ];
        $email = $instance[ 'email' ];
		$phone = $instance[ 'phone' ];
		
		if ( ! empty( $title ) )
        echo $args['before_title'] .''. $title .'' . $args['after_title'];

        if($location != ''){ ?>

            <div class="row my-3">
			<div class="col-1 col-md-1">
			<i class="fas fa-map-marked-alt"></i>
			</div>
			<div class="col">
			<?php if($location_url != ''){ ?>
                <a target="_blank" class="wayne_contact" href="<?php echo $location_url ?>"><?php echo $location ?></a>
            <?php
            }else{ ?>
                <?php echo $location ?></a>
            <?php } ?>
			</div>
			</div>

        <?php
        }
        if($email != ''){ ?>

            <div class="row my-3">
			<div class="col-1 col-md-1">
			<i class="fas fa-envelope"></i>
			</div>
			<div class="col">
            <a class="wayne_contact" href="mailto:<?php echo $email ?>"><?php echo $email ?></a>
			</div>
			</div>

        <?php
        }
        if($phone != ''){ ?>

            <div class="row my-3">
			<div class="col-1 col-md-1">
			<i class="fas fa-phone-square-alt"></i>
			</div>
			<div class="col">
			<a class="wayne_contact" href="tel:<?php echo $phone ?>"><?php echo $phone ?></a>
			</div>
			</div>

        <?php
        }
        

        ?>
            

        <?php

		echo $args['after_widget'];
		}

	
	public function form( $instance ) {
		if ( isset( $instance[ 'title' ] ) )
		$title = $instance[ 'title' ];
		else
        $title = __( 'Contact', 'wayne-blog-news' );
        if ( isset( $instance[ 'location' ] ) )
		$location = $instance[ 'location' ];
		else
        $location = '';
        if ( isset( $instance[ 'location_url' ] ) )
		$location_url = $instance[ 'location_url' ];
		else
        $location_url = '';
        if ( isset( $instance[ 'email' ] ) )
		$email = $instance[ 'email' ];
		else
        $email = '';
        if ( isset( $instance[ 'phone' ] ) )
		$phone = $instance[ 'phone' ];
		else
		$phone = '';
		?>
		<p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:', 'wayne-blog-news' ); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        <label for="<?php echo $this->get_field_id( 'location' ); ?>"><?php _e( 'Location', 'wayne-blog-news' ); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id( 'location' ); ?>" name="<?php echo $this->get_field_name( 'location' ); ?>" type="text" value="<?php echo esc_attr( $location ); ?>" />
        <label for="<?php echo $this->get_field_id( 'location_url' ); ?>"><?php _e( 'Location URL', 'wayne-blog-news' ); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id( 'location_url' ); ?>" name="<?php echo $this->get_field_name( 'location_url' ); ?>" type="text" placeholder="Google Maps url" value="<?php echo esc_attr( $location_url ); ?>" />
        <label for="<?php echo $this->get_field_id( 'email' ); ?>"><?php _e( 'E-Mail', 'wayne-blog-news' ); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id( 'email' ); ?>" name="<?php echo $this->get_field_name( 'email' ); ?>" type="text" value="<?php echo esc_attr( $email ); ?>" />
        <label for="<?php echo $this->get_field_id( 'phone' ); ?>"><?php _e( 'Phone', 'wayne-blog-news' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'phone' ); ?>" name="<?php echo $this->get_field_name( 'phone' ); ?>" type="text" value="<?php echo esc_attr( $phone ); ?>" />
		</p>
		<?php
		}

	public function update( $new_instance, $old_instance ) {
		$instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        $instance['location'] = ( ! empty( $new_instance['location'] ) ) ? strip_tags( $new_instance['location'] ) : '';
        $instance['location_url'] = ( ! empty( $new_instance['location_url'] ) ) ? strip_tags( $new_instance['location_url'] ) : '';
        $instance['email'] = ( ! empty( $new_instance['email'] ) ) ? strip_tags( $new_instance['email'] ) : '';
        $instance['phone'] = ( ! empty( $new_instance['phone'] ) ) ? strip_tags( $new_instance['phone'] ) : '';
        return $instance;
		}


}

	function wayne_contact_register_widget() {
		register_widget( 'wayne_contact' );
		}
        add_action( 'widgets_init', 'wayne_contact_register_widget' );
        

// Social Media Widget

class wayne_social extends WP_Widget {

	function __construct() {
		parent::__construct(
		'wayne_social',
		__('Wayne Social Media', 'wayne-blog-news'),
		array( 'description' => __( 'Social Media Icons', 'wayne-blog-news' ), )
		);
	
	}


	public function widget( $args, $instance ) {
		$title = apply_filters( 'widget_title', $instance['title'] );
        echo $args['before_widget'];
        $facebook = $instance[ 'facebook' ];
        $twitter = $instance[ 'twitter' ];
        $instagram = $instance[ 'instagram' ];
        $youtube = $instance[ 'youtube' ];
        $linkedln = $instance[ 'linkedln' ];
        $github = $instance[ 'github' ];

		if ( ! empty( $title ) )
        echo $args['before_title'] .''. $title .'' . $args['after_title'];


        ?>   <div class="col-12 text-center text-md-left">

			<div class="btn-group social my-2" role="group" aria-label="Social Media">
        <?php

        if($facebook != ''){ ?>
            <a href="#"><i class="fab fa-facebook fa-2x"></i></a>
        <?php
        }
        if($twitter != ''){ ?>
            <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
        <?php
        }
        if($instagram != ''){ ?>
            <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
        <?php
        }
        if($youtube != ''){ ?>
            <a href="#"><i class="fab fa-youtube fa-2x"></i></a>
        <?php
        }
        if($linkedln != ''){ ?>
            <a href="#"><i class="fab fa-linkedin fa-2x"></i></a>
        <?php
        }
        if($github != ''){ ?>
            <a href="#"><i class="fab fa-github fa-2x"></i></a>
        <?php
        }

        ?>
			</div>
        </div> 

        <?php

		echo $args['after_widget'];
		}

	
	public function form( $instance ) {
		if ( isset( $instance[ 'title' ] ) )
		$title = $instance[ 'title' ];
		else
        $title = __( 'Social Media', 'wayne-blog-news' );
        if ( isset( $instance[ 'facebook' ] ) )
		$facebook = $instance[ 'facebook' ];
		else
        $facebook = '#';
        if ( isset( $instance[ 'twitter' ] ) )
		$twitter = $instance[ 'twitter' ];
		else
        $twitter ='#';
        if ( isset( $instance[ 'instagram' ] ) )
		$instagram = $instance[ 'instagram' ];
		else
        $instagram = '#';
        if ( isset( $instance[ 'youtube' ] ) )
		$youtube = $instance[ 'youtube' ];
		else
        $youtube = '#';
        if ( isset( $instance[ 'linkedln' ] ) )
		$linkedln = $instance[ 'linkedln' ];
		else
        $linkedln = '#';
        if ( isset( $instance[ 'github' ] ) )
		$github = $instance[ 'github' ];
		else
		$github = '#';
		?>
		<p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:', 'wayne-blog-news' ); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        <label for="<?php echo $this->get_field_id( 'facebook' ); ?>">Facebook</label>
        <input class="widefat" id="<?php echo $this->get_field_id( 'facebook' ); ?>" name="<?php echo $this->get_field_name( 'facebook' ); ?>" type="text" placeholder="username" value="<?php echo esc_attr( $facebook ); ?>" />
        <label for="<?php echo $this->get_field_id( 'twitter' ); ?>">Twitter</label>
        <input class="widefat" id="<?php echo $this->get_field_id( 'twitter' ); ?>" name="<?php echo $this->get_field_name( 'twitter' ); ?>" type="text" placeholder="username" value="<?php echo esc_attr( $twitter ); ?>" />
        <label for="<?php echo $this->get_field_id( 'instagram' ); ?>">Instagram</label>
        <input class="widefat" id="<?php echo $this->get_field_id( 'instagram' ); ?>" name="<?php echo $this->get_field_name( 'instagram' ); ?>" type="text" placeholder="username" value="<?php echo esc_attr( $instagram ); ?>" />
        <label for="<?php echo $this->get_field_id( 'youtube' ); ?>">YouTube</label>
        <input class="widefat" id="<?php echo $this->get_field_id( 'youtube' ); ?>" name="<?php echo $this->get_field_name( 'youtube' ); ?>" type="text" placeholder="username" value="<?php echo esc_attr( $youtube ); ?>" />
        <label for="<?php echo $this->get_field_id( 'linkedln' ); ?>">Linkedln</label>
        <input class="widefat" id="<?php echo $this->get_field_id( 'linkedln' ); ?>" name="<?php echo $this->get_field_name( 'linkedln' ); ?>" type="text" placeholder="username" value="<?php echo esc_attr( $linkedln ); ?>" />
        <label for="<?php echo $this->get_field_id( 'github' ); ?>">Github</label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'github' ); ?>" name="<?php echo $this->get_field_name( 'github' ); ?>" type="text" placeholder="username" value="<?php echo esc_attr( $github ); ?>" />
		</p>
		<?php
		}

	public function update( $new_instance, $old_instance ) {
		$instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        $instance['facebook'] = ( ! empty( $new_instance['facebook'] ) ) ? strip_tags( $new_instance['facebook'] ) : '';
        $instance['twitter'] = ( ! empty( $new_instance['twitter'] ) ) ? strip_tags( $new_instance['twitter'] ) : '';
        $instance['instagram'] = ( ! empty( $new_instance['instagram'] ) ) ? strip_tags( $new_instance['instagram'] ) : '';
        $instance['youtube'] = ( ! empty( $new_instance['youtube'] ) ) ? strip_tags( $new_instance['youtube'] ) : '';
        $instance['linkedln'] = ( ! empty( $new_instance['linkedln'] ) ) ? strip_tags( $new_instance['linkedln'] ) : '';
        $instance['github'] = ( ! empty( $new_instance['github'] ) ) ? strip_tags( $new_instance['github'] ) : '';
        return $instance;
		}


}

	function wayne_social_register_widget() {
		register_widget( 'wayne_social' );
		}
		add_action( 'widgets_init', 'wayne_social_register_widget' );


?>