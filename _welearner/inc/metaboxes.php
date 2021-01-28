<?php
/*################# course-single.php ####################*/

function _welearner_single_add_meta_box() {
    add_meta_box( 
        '_welearner_single_post_metabox', 
        'Choose Layout', 
        '_welearner_post_metabox_html', 
        array('post','page','_welearner_courses'), 
        'normal', 
        'default');
}

add_action( 'add_meta_boxes', '_welearner_single_add_meta_box' );

function _welearner_post_metabox_html($post) {
    $layout = get_post_meta($post->ID, '__welearner_post_layout', true);
    ?>

    <p>
        <label for="_welearner_post_metabox_html"><?php esc_html_e( 'Layout', '_welearner' ); ?></label>
        <select name="__welearner_post_layout_single" id="_welearner_post_metabox_html" class="widefat">
            <option <?php selected( $layout, 'full' ); ?> value="full"><?php esc_html_e( 'Full Width', '_welearner' ); ?></option>
            <option <?php selected( $layout, 'sidebar' ); ?> value="sidebar"><?php esc_html_e( 'Post With Sidebar', '_welearner' ); ?></option>
        </select>
    </p>
    <?php
}

function _welearner_save_post_metabox($post_id, $post) {


    


    if(array_key_exists('__welearner_post_layout_single', $_POST)) {
        update_post_meta( 
            $post_id, 
            '__welearner_post_layout', 
            sanitize_text_field($_POST['__welearner_post_layout_single'])
        );
    }
}

add_action( 'save_post', '_welearner_save_post_metabox', 10, 2 );

/*#################  Metabox for course custom post type ####################*/

function _welearner_course_add_meta_box() {
    add_meta_box( 
        '_welearner_course_metabox', 
        'Price for course', 
        '_welearner_course_price', 
        '_welearner_courses', 
        'normal', 
        'default');
}

add_action( 'add_meta_boxes', '_welearner_course_add_meta_box');

function _welearner_course_price($post) {
    $__welearner_course_old_price = get_post_meta($post->ID, '__welearner_course_old_price', true);
    $__welearner_course_new_price = get_post_meta($post->ID, '__welearner_course_new_price', true);
	wp_nonce_field( '_welearner_update_course_metabox', '_welearner_update_course_nonce' );


	

    ?>

	
	<p>
        <label for="_welearner_course_price"><?php esc_html_e( 'Old Price', '_welearner' ); ?></label>
        <br />
        <input class="widefat" type="text" name="_welearner_course_old_price" id="_welearner_course_price" value="<?php echo esc_html( $__welearner_course_old_price ); ?>" />
    </p>
	<p>
        <label for="_welearner_course_new_price"><?php esc_html_e( 'Price', '_welearner' ); ?></label>
        <br />
        <input class="widefat" type="text" name="_welearner_course_new_price" id="_welearner_course_new_price" value="<?php echo esc_html( $__welearner_course_new_price ); ?>" />
    </p>



    <?php
}

function _welearner_save_course_metabox($post_id, $post) {
	
	$edit_cap = get_post_type_object( $post->post_type )->cap->edit_post;
    if( !current_user_can( $edit_cap, $post_id )) {
        return;
    }
    if( !isset( $_POST['_welearner_update_course_nonce']) || !wp_verify_nonce( $_POST['_welearner_update_course_nonce'], '_welearner_update_course_metabox' )) {
        return;
    }

	if(array_key_exists('_welearner_course_old_price', $_POST)) {
        update_post_meta( 
            $post_id, 
            '__welearner_course_old_price', 
            sanitize_text_field($_POST['_welearner_course_old_price'])
        );
    }
	if(array_key_exists('_welearner_course_new_price', $_POST)) {
        update_post_meta( 
            $post_id, 
            '__welearner_course_new_price', 
            sanitize_text_field($_POST['_welearner_course_new_price'])
        );
    }
	 

}

add_action( 'save_post', '_welearner_save_course_metabox', 10, 2 );

/*#################  Metabox for counter custom post type ####################*/

function _welearner_counter_add_meta_box() {
    add_meta_box( 
        '_welearner_counter_metabox', 
        'Choose icon for counter', 
        '_welearner_counter_number', 
        '__welearner_counter', 
        'normal', 
        'default');
}

add_action( 'add_meta_boxes', '_welearner_counter_add_meta_box');

function _welearner_counter_number($post) {
    $__welearner_counter_post_number = get_post_meta($post->ID, '__welearner_counter_post_number', true);
    $__welearner_counter_post_number_plus = get_post_meta($post->ID, '__welearner_counter_post_number_plus', true);
	wp_nonce_field( '_welearner_update_counter_metabox', '_welearner_update_counter_nonce' );


	

    ?>

	
	<p>
        <label for="_welearner_counter_number"><?php esc_html_e( 'Add number for counter', '_welearner' ); ?></label>
        <br />
        <input class="widefat" type="text" name="_welearner_couter_number_box" id="_welearner_counter_number" value="<?php echo esc_html( $__welearner_counter_post_number ); ?>" />
    </p>
	<p>
        <label for="_welearner_couter_number_plus"><?php esc_html_e( 'Add plus sign after counter number', '_welearner' ); ?></label>
        <select name="_welearner_couter_number_plus" id="_welearner_couter_number_plus" class="widefat">
            <option <?php selected( $__welearner_counter_post_number_plus, 'yes' ); ?> value="yes"><?php esc_html_e( 'Yes', '_welearner' ); ?></option>
            <option <?php selected( $__welearner_counter_post_number_plus, 'no' ); ?> value="no"><?php esc_html_e( 'No', '_welearner' ); ?></option>
        </select>
    </p>


    <?php
}

function _welearner_save_counter_metabox($post_id, $post) {
	
	$edit_cap = get_post_type_object( $post->post_type )->cap->edit_post;
    if( !current_user_can( $edit_cap, $post_id )) {
        return;
    }
    if( !isset( $_POST['_welearner_update_counter_nonce']) || !wp_verify_nonce( $_POST['_welearner_update_counter_nonce'], '_welearner_update_counter_metabox' )) {
        return;
    }

	if(array_key_exists('_welearner_couter_number_box', $_POST)) {
        update_post_meta( 
            $post_id, 
            '__welearner_counter_post_number', 
            sanitize_text_field($_POST['_welearner_couter_number_box'])
        );
    }
	if(array_key_exists('_welearner_couter_number_plus', $_POST)) {
        update_post_meta( 
            $post_id, 
            '__welearner_counter_post_number_plus', 
            sanitize_text_field($_POST['_welearner_couter_number_plus'])
        );
    }
	 

}

add_action( 'save_post', '_welearner_save_counter_metabox', 10, 2 );

/*#################  Metabox for testimonial custom post type ####################*/

function _welearner_testimonial_add_meta_box() {
    add_meta_box( 
        '_welearner_testimonial_metabox', 
        'Testimonial details', 
        '_welearner_testimonial_custom', 
        '__welearner_test', 
        'normal', 
        'default');
}

add_action( 'add_meta_boxes', '_welearner_testimonial_add_meta_box');

function _welearner_testimonial_custom($post) {
    $__welearner_testimonial_author = get_post_meta($post->ID, '__welearner_testimonial_author', true);
    $__welearner_testimonial_designation = get_post_meta($post->ID, '__welearner_testimonial_designation', true);
	wp_nonce_field( '_welearner_update_testimonial_metabox', '_welearner_update_testimonial_nonce' );


	

    ?>

	
	<p>
        <label for="_welearner_testimonial_custom"><?php esc_html_e( 'Testimonial Client Name', '_welearner' ); ?></label>
        <br />
        <input class="widefat" type="text" name="_welearner_testimonial_author" id="_welearner_testimonial_custom" value="<?php echo esc_html( $__welearner_testimonial_author ); ?>" />
    </p>
	<p>
        <label for="_welearner_testimonial_designation"><?php esc_html_e( 'Testimonial Client Designation', '_welearner' ); ?></label>
        <br />
        <input class="widefat" type="text" name="_welearner_testimonial_designation" id="_welearner_testimonial_designation" value="<?php echo esc_html( $__welearner_testimonial_designation ); ?>" />
    </p>



    <?php
}

function _welearner_save_testimonial_metabox($post_id, $post) {
	
	$edit_cap = get_post_type_object( $post->post_type )->cap->edit_post;
    if( !current_user_can( $edit_cap, $post_id )) {
        return;
    }
    if( !isset( $_POST['_welearner_update_testimonial_nonce']) || !wp_verify_nonce( $_POST['_welearner_update_testimonial_nonce'], '_welearner_update_testimonial_metabox' )) {
        return;
    }

	if(array_key_exists('_welearner_testimonial_author', $_POST)) {
        update_post_meta( 
            $post_id, 
            '__welearner_testimonial_author', 
            sanitize_text_field($_POST['_welearner_testimonial_author'])
        );
    }
	if(array_key_exists('_welearner_testimonial_designation', $_POST)) {
        update_post_meta( 
            $post_id, 
            '__welearner_testimonial_designation', 
            sanitize_text_field($_POST['_welearner_testimonial_designation'])
        );
    }
	 

}

add_action( 'save_post', '_welearner_save_testimonial_metabox', 10, 2 );
/*#################  Metabox for creator custom post type ####################*/

function _welearner_creator_add_meta_box() {
    add_meta_box( 
        '_welearner_creator_metabox', 
        'creator details', 
        '_welearner_creator_custom', 
        '__welearner_creator', 
        'normal', 
        'default');
}

add_action( 'add_meta_boxes', '_welearner_creator_add_meta_box');

function _welearner_creator_custom($post) {
    $__welearner_creator_facebook = get_post_meta($post->ID, '__welearner_creator_facebook', true);
    $__welearner_creator_linkedin = get_post_meta($post->ID, '__welearner_creator_linkedin', true);
    $__welearner_creator_twitter = get_post_meta($post->ID, '__welearner_creator_twitter', true);
	wp_nonce_field( '_welearner_update_creator_metabox', '_welearner_update_creator_nonce' );


	

    ?>

	
	<p>
        <label for="_welearner_creator_custom"><?php esc_html_e( 'Creator Facebook Link', '_welearner' ); ?></label>
        <br />
        <input class="widefat" type="text" name="_welearner_creator_facebook" id="_welearner_creator_custom" value="<?php echo esc_html( $__welearner_creator_facebook ); ?>" />
    </p>
	<p>
        <label for="_welearner_creator_linkedin"><?php esc_html_e( 'Creator Linkedin Link', '_welearner' ); ?></label>
        <br />
        <input class="widefat" type="text" name="_welearner_creator_linkedin" id="_welearner_creator_linkedin" value="<?php echo esc_html( $__welearner_creator_linkedin ); ?>" />
    </p>
	<p>
        <label for="_welearner_creator_twitter"><?php esc_html_e( 'Creator Twitter Link', '_welearner' ); ?></label>
        <br />
        <input class="widefat" type="text" name="_welearner_creator_twitter" id="_welearner_creator_twitter" value="<?php echo esc_html( $__welearner_creator_twitter ); ?>" />
    </p>



    <?php
}

function _welearner_save_creator_metabox($post_id, $post) {
	
	$edit_cap = get_post_type_object( $post->post_type )->cap->edit_post;
    if( !current_user_can( $edit_cap, $post_id )) {
        return;
    }
    if( !isset( $_POST['_welearner_update_creator_nonce']) || !wp_verify_nonce( $_POST['_welearner_update_creator_nonce'], '_welearner_update_creator_metabox' )) {
        return;
    }

	if(array_key_exists('_welearner_creator_facebook', $_POST)) {
        update_post_meta( 
            $post_id, 
            '__welearner_creator_facebook', 
            sanitize_text_field($_POST['_welearner_creator_facebook'])
        );
    }
	if(array_key_exists('_welearner_creator_linkedin', $_POST)) {
        update_post_meta( 
            $post_id, 
            '__welearner_creator_linkedin', 
            sanitize_text_field($_POST['_welearner_creator_linkedin'])
        );
    }
	if(array_key_exists('_welearner_creator_twitter', $_POST)) {
        update_post_meta( 
            $post_id, 
            '__welearner_creator_twitter', 
            sanitize_text_field($_POST['_welearner_creator_twitter'])
        );
    }
	 

}

add_action( 'save_post', '_welearner_save_creator_metabox', 10, 2 );





?>