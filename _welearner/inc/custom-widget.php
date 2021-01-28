<?php



class _welearner_Footer_Logo_Widget extends WP_Widget {

    public function __construct() {
        parent::__construct(
            '_welearner_footer_widget',
            esc_html__('Footer Logo Widget', '_welearner'),
            array(
                'description' => esc_html__('Add credential for footer logo', '_welearner'),
                'customize_selective_refresh' => true
            )
        );
    }

    public function form( $instance ) {
		
		if(isset($instance['text'])) {
            $title = $instance['text'];
        } else {
            $title = "default";
        }
		if(isset($instance['facebook'])) {
            $facebook = $instance['facebook'];
        } else {
            $facebook = "";
        }
		if(isset($instance['linkedin'])) {
            $linkedin = $instance['linkedin'];
        } else {
            $linkedin = "";
        }
		if(isset($instance['twitter'])) {
            $twitter = $instance['twitter'];
        } else {
            $twitter = "";
        }

        ?>
					
		<?php if(has_custom_logo( )) {?>
			<div class="img-logo">
				<?php the_custom_logo(); ?>
			</div>
		<?php } else { ?>
            <div class="text-logo">
                <a href="<?php echo esc_url(home_url( '/' )); ?>"><?php esc_html(bloginfo( 'name' )); ?></a>
            </div>
		<?php } ?>
		<p>
            <label for="<?php echo $this->get_field_id('text') ?>"><?php esc_html_e('Text:', '_welearner'); ?></label>
			<input rows="5" cols="60" style="width:99%" class="widefat" id="<?php echo $this->get_field_id('text') ?>" name="<?php echo $this->get_field_name('text') ?>" type="text" value="<?php echo esc_attr($title); ?>" />

	   </p>
	   <p>
            <label for="<?php echo $this->get_field_id('facebook') ?>"><?php esc_html_e('Facebook link:', '_welearner'); ?></label>
			<input rows="5" cols="60" style="width:99%" class="widefat" id="<?php echo $this->get_field_id('facebook') ?>" name="<?php echo $this->get_field_name('facebook') ?>" type="text" value="<?php echo esc_attr($facebook); ?>" />

	   </p>
	   <p>
            <label for="<?php echo $this->get_field_id('linkedin') ?>"><?php esc_html_e('Linkedin link:', '_welearner'); ?></label>
			<input rows="5" cols="60" style="width:99%" class="widefat" id="<?php echo $this->get_field_id('linkedin') ?>" name="<?php echo $this->get_field_name('linkedin') ?>" type="text" value="<?php echo esc_attr($linkedin); ?>" />

	   </p>
	   <p>
            <label for="<?php echo $this->get_field_id('twitter') ?>"><?php esc_html_e('Twitter link:', '_welearner'); ?></label>
			<input rows="5" cols="60" style="width:99%" class="widefat" id="<?php echo $this->get_field_id('twitter') ?>" name="<?php echo $this->get_field_name('twitter') ?>" type="text" value="<?php echo esc_attr($twitter); ?>" />

	   </p>


        <?php
    }

    public function widget($args, $instance) {

		?>
		<div class="footer-logo-area">
							<div class="footer-logo">
								<?php if(has_custom_logo( )) {?>
									<div class="img-logo">
										<?php the_custom_logo(); ?>
									</div>
								<?php } else { ?>
									<div class="text-logo">
										<a href="<?php echo esc_url(home_url( '/' )); ?>"><?php esc_html(bloginfo( 'name' )); ?></a>
									</div>
								<?php } ?>
							</div>                            
                            <p><?php
							if(isset($instance['text']) && !empty($instance['text'])) {
								$title = apply_filters('widget_title', $instance['text']);
								echo esc_html($title);
							}?>
							</p>
                            <ul>
								<?php if(isset($instance['facebook']) && !empty($instance['facebook']))  { ?>
								<a class="facebook" href="<?php
										$facebook = apply_filters('widget_title', $instance['facebook']);
										echo esc_url($facebook);
									?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
								<?php } ?>
								<?php if(isset($instance['linkedin']) && !empty($instance['linkedin'])) { ?>
								<a class="linkedin" href="<?php
									
										$linkedin = apply_filters('widget_title', $instance['linkedin']);
										echo esc_url($linkedin);
									?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
								<?php } ?>
								<?php if(isset($instance['twitter']) && !empty($instance['twitter'])) { ?>
                                <a class="twitter" href="<?php
									
										$twitter = apply_filters('widget_title', $instance['twitter']);
										echo esc_url($twitter);
									?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
								<?php } ?>

                            </ul>
                        </div>
		
		
		<?php


            
		
    }

    public function update($new_instance, $old_instance) {
        $instance['text'] =  sanitize_text_field($new_instance['text']);
        $instance['facebook'] =  sanitize_text_field($new_instance['facebook']);
        $instance['linkedin'] =  sanitize_text_field($new_instance['linkedin']);
        $instance['twitter'] =  sanitize_text_field($new_instance['twitter']);
        return $instance;
    
    }
}

function _welearner_register_most_recent_widget() {
    register_widget('_welearner_Footer_Logo_Widget');
}

add_action('widgets_init', '_welearner_register_most_recent_widget');
