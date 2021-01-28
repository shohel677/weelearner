<?php
/**
 * Template Name: Home page
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Welearner
 */

get_header();?>

<!-- Slider Area Section Start -->  
<?php $_welearner_slider_header_text = _welearner_sanitize_site_info(get_theme_mod('_welearner_slider_header_text'));?>
<?php $_welearner_slider_small_text = esc_html(get_theme_mod('_welearner_slider_small_text'));?>
<?php $_welearner_slider_background =  esc_attr(get_theme_mod('_welearner_slider_background'));?>
<?php $_welearner_slider_image =   esc_attr(get_theme_mod('_welearner_slider_image'));?>
<?php $_welearner_popilar_topic_first_img =   esc_attr(get_theme_mod('_welearner_popilar_topic_first_img'));?>
<?php $_welearner_popilar_topic_second_img =   esc_attr(get_theme_mod('_welearner_popilar_topic_second_img'));?>
<?php $_welearner_popilar_topic_third_img =   esc_attr(get_theme_mod('_welearner_popilar_topic_third_img'));?>
<?php $_welearner_popilar_topic_fourth_img =   esc_attr(get_theme_mod('_welearner_popilar_topic_fourth_img'));?>
<?php $_welearner_popilar_topic_fifth_img =   esc_attr(get_theme_mod('_welearner_popilar_topic_fifth_img'));?>
<?php $_welearner_popilar_topic_sixth_img =   esc_attr(get_theme_mod('_welearner_popilar_topic_sixth_img'));?>
<?php $_welearner_popilar_topic_seventh_img =   esc_attr(get_theme_mod('_welearner_popilar_topic_seventh_img'));?>
<?php $_welearner_popilar_topic_eighth_img =   esc_attr(get_theme_mod('_welearner_popilar_topic_eighth_img'));?>
<?php $_welearner_popilar_topic_first_text =   esc_html(get_theme_mod('_welearner_popilar_topic_first_text'));?>
<?php $_welearner_popilar_topic_second_text =   esc_html(get_theme_mod('_welearner_popilar_topic_second_text'));?>
<?php $_welearner_popilar_topic_third_text =   esc_html(get_theme_mod('_welearner_popilar_topic_third_text'));?>
<?php $_welearner_popilar_topic_fourth_text =   esc_html(get_theme_mod('_welearner_popilar_topic_fourth_text'));?>
<?php $_welearner_popilar_topic_fifth_text =   esc_html(get_theme_mod('_welearner_popilar_topic_fifth_text'));?>
<?php $_welearner_popilar_topic_sixth_text =   esc_html(get_theme_mod('_welearner_popilar_topic_sixth_text'));?>
<?php $_welearner_popilar_topic_seventh_text =   esc_html(get_theme_mod('_welearner_popilar_topic_seventh_text'));?>
<?php $_welearner_popilar_topic_eighth_text =   esc_html(get_theme_mod('_welearner_popilar_topic_eighth_text'));?>
<?php $_welearner_popilar_topic_first_url =   esc_url(get_theme_mod('_welearner_popilar_topic_first_url'));?>
<?php $_welearner_popilar_topic_second_url =   esc_url(get_theme_mod('_welearner_popilar_topic_second_url'));?>
<?php $_welearner_popilar_topic_third_url =   esc_url(get_theme_mod('_welearner_popilar_topic_third_url'));?>
<?php $_welearner_popilar_topic_fourth_url =   esc_url(get_theme_mod('_welearner_popilar_topic_fourth_url'));?>
<?php $_welearner_popilar_topic_fifth_url =   esc_url(get_theme_mod('_welearner_popilar_topic_fifth_url'));?>
<?php $_welearner_popilar_topic_sixth_url =   esc_url(get_theme_mod('_welearner_popilar_topic_sixth_url'));?>
<?php $_welearner_popilar_topic_seventh_url =   esc_url(get_theme_mod('_welearner_popilar_topic_seventh_url'));?>
<?php $_welearner_popilar_topic_eighth_url =   esc_url(get_theme_mod('_welearner_popilar_topic_eighth_url'));?>
<?php $_welearner_popular_topic_header_text =   esc_html(get_theme_mod('_welearner_popular_topic_header_text'));?>
<?php $_welearner_trending_course_header_text =   esc_html(get_theme_mod('_welearner_trending_course_header_text'));?>
<?php $_welearner_top_course_header_text =   esc_html(get_theme_mod('_welearner_top_course_header_text'));?>
<?php $_welearner_testimonial_header_text =   esc_html(get_theme_mod('_welearner_testimonial_header_text'));?>
<?php $_welearner_testimonial_header_img =   esc_attr(get_theme_mod('_welearner_testimonial_header_img'));?>
<?php $_welearner_testimonial_header_slogan =   esc_html(get_theme_mod('_welearner_testimonial_header_slogan'));?>
<?php $_welearner_testimonial_background_img =   esc_attr(get_theme_mod('_welearner_testimonial_background_img'));?>
<?php $_welearner_creator_header_text =   esc_html(get_theme_mod('_welearner_creator_header_text'));?>
<?php $_welearner_creator_header_slogan =   esc_html(get_theme_mod('_welearner_creator_header_slogan'));?>
<?php $_welearner_brand_header_text =   esc_html(get_theme_mod('_welearner_brand_header_text'));?>
<?php $_welearner_brand_first_img =   esc_attr(get_theme_mod('_welearner_brand_first_img'));?>
<?php $_welearner_brand_second_img =   esc_attr(get_theme_mod('_welearner_brand_second_img'));?>
<?php $_welearner_brand_third_img =   esc_attr(get_theme_mod('_welearner_brand_third_img'));?>
<?php $_welearner_brand_fourth_img =   esc_attr(get_theme_mod('_welearner_brand_fourth_img'));?>
<?php $_welearner_brand_fifth_img =   esc_attr(get_theme_mod('_welearner_brand_fifth_img'));?>
<?php $_welearner_brand_sixth_img =   esc_attr(get_theme_mod('_welearner_brand_sixth_img'));?>
<?php $_welearner_brand_seventh_img =   esc_attr(get_theme_mod('_welearner_brand_seventh_img'));?>
<?php $_welearner_brand_eighth_img =   esc_attr(get_theme_mod('_welearner_brand_eighth_img'));?>
<?php $_welearner_blog_background_img =   esc_attr(get_theme_mod('_welearner_blog_background_img'));?>
<?php $_welearner_blog_header_text =   esc_html(get_theme_mod('_welearner_blog_header_text'));?>





            <section  class="slider-area " data-background="<?php echo $_welearner_slider_background;?>">
                            
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-8">
                             <div class="slider-components">
                                     <div class="slider-text" >
											<?php if($_welearner_slider_header_text) { ?>
                                                <h1>  <?php 
													$allowed = array(
														'br' => array(),
														'span' => array()
													);
													echo wp_kses( $_welearner_slider_header_text, $allowed ); ?>						
												</h1>
																				<?php } ?>
											<?php if($_welearner_slider_small_text) { ?>
                                                <p><?php echo $_welearner_slider_small_text ;?></p> 
											<?php } ?>												
                                            </div>
                                            <div class="top-search">
                                                <?php get_search_form( true ); ?>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4">
                                    <div class="hero-img d-none d-lg-block">
                                        <img class="img-fliud" src="<?php echo $_welearner_slider_image;?>" alt="">
                                    </div>
                             </div>
                    </div>
            </div>
                            
         </section>
        <!-- Slider Area Section End --> 
        <!-- Popular Topics Area Section End --> 
        <section class="popular-topic mt-120 mb-60">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="popular-section-header">
                            <h2 class="f-left"><?php echo $_welearner_popular_topic_header_text; ?></h2>
                            <a class="popular-btn f-right"href="#">View All</a>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12">
                    </div>
                </div>
                <div class="row">
                <?php if($_welearner_popilar_topic_first_text) { ?>

                    <div class="col-xl-3 col-lg-3 col-md-6 topicbox">
                        <div class="topic-comp topic-comp-blue d-flex align-items-center">
                        <?php if($_welearner_popilar_topic_first_img) { ?>
                            <img src="<?php echo $_welearner_popilar_topic_first_img ?>" alt="">
                            <?php } ?>
                            <a class="first-button" href="<?php echo $_welearner_popilar_topic_first_url ?>"><?php echo $_welearner_popilar_topic_first_text ?></a>
                            
                        </div>

                    </div>
                    <?php } ?>
                    <?php if($_welearner_popilar_topic_second_text) { ?>

                    <div class="col-xl-3 col-lg-3 col-md-6 topicbox">
                        <div class="topic-comp topic-comp-orange d-flex align-items-center">
                            <?php if($_welearner_popilar_topic_second_img) { ?>
                            <img src="<?php echo $_welearner_popilar_topic_second_img ?>" alt="">
                            <?php } ?>
                            <a class="second-button" href="<?php echo $_welearner_popilar_topic_second_url ?>"><?php echo $_welearner_popilar_topic_second_text ?></a>
                            
                        </div>

                    </div>
                    <?php } ?>
                    <?php if($_welearner_popilar_topic_third_text) { ?>

                    <div class="col-xl-3 col-lg-3  col-md-6 topicbox">
                        <div class="topic-comp topic-comp-pink d-flex align-items-center">
                            <?php if($_welearner_popilar_topic_third_img) { ?>
                            <img src="<?php echo $_welearner_popilar_topic_third_img ?>" alt="">
                            <?php } ?>
                            <a class="third-button" href="<?php echo $_welearner_popilar_topic_third_url ?>"><?php echo $_welearner_popilar_topic_third_text ?></a>
                            
                        </div>

                    </div>
                    <?php } ?>
                    <?php if($_welearner_popilar_topic_fourth_text) { ?>

                    <div class="col-xl-3 col-lg-3 col-md-6 topicbox">
                        <div class="topic-comp topic-comp-green d-flex align-items-center">
                        <?php if($_welearner_popilar_topic_fourth_img) { ?>
                            <img src="<?php echo $_welearner_popilar_topic_fourth_img ?>" alt="">
                            <?php } ?>
                            <a class="fourth-button" href="<?php echo $_welearner_popilar_topic_fourth_url ?>"><?php echo $_welearner_popilar_topic_fourth_text ?></a>
                            
                        </div>

                    </div>
                    <?php } ?>
                    <?php if($_welearner_popilar_topic_fifth_text) { ?>

                    <div class="col-xl-3 col-lg-3 col-md-6 topicbox">
                        <div class="topic-comp topic-comp-light-pink d-flex align-items-center">
                        <?php if($_welearner_popilar_topic_fifth_img) { ?>
                            <img src="<?php echo $_welearner_popilar_topic_fifth_img ?>" alt="">
                            <?php } ?>
                            <a class="fifth-button" href="<?php echo $_welearner_popilar_topic_fifth_url ?>"><?php echo $_welearner_popilar_topic_fifth_text ?></a>
                            
                        </div>

                    </div>
                    <?php } ?>
                    <?php if($_welearner_popilar_topic_sixth_text) { ?>

                    <div class="col-xl-3 col-lg-3 col-md-6 topicbox">
                        <div class="topic-comp-circular topic-comp-pink d-flex align-items-center">
                        <?php if($_welearner_popilar_topic_sixth_img) { ?>
                            <img src="<?php echo $_welearner_popilar_topic_sixth_img ?>" alt="">
                            <?php } ?>
                            <a class="sixth-button" href="<?php echo $_welearner_popilar_topic_sixth_url ?>"><?php echo $_welearner_popilar_topic_sixth_text ?></a>
                            
                        </div>

                    </div>
                    <?php } ?>
                    <?php if($_welearner_popilar_topic_seventh_text) { ?>

                    <div class="col-xl-3 col-lg-3 col-md-6 topicbox">
                        <div class="topic-comp topic-comp-blue d-flex align-items-center">
                        <?php if($_welearner_popilar_topic_seventh_img) { ?>
                            <img src="<?php echo $_welearner_popilar_topic_seventh_img ?>" alt="">
                            <?php } ?>
                            <a class="seventh-button" href="<?php echo $_welearner_popilar_topic_seventh_url ?>"><?php echo $_welearner_popilar_topic_seventh_text ?></a>
                            
                        </div>

                    </div>
                    <?php } ?>
                    <?php if($_welearner_popilar_topic_eighth_text) { ?>

                    <div class="col-xl-3 col-lg-3 col-md-6 topicbox">
                        <div class="topic-comp topic-comp-orange d-flex align-items-center">
                        <?php if($_welearner_popilar_topic_eighth_img) { ?>
                            <img src="<?php echo $_welearner_popilar_topic_eighth_img ?>" alt="">
                            <?php } ?>
                            <a class="eighth-button" href="<?php echo $_welearner_popilar_topic_eighth_url ?>"><?php echo $_welearner_popilar_topic_eighth_text ?></a>
                            
                        </div>

                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        <!-- Popular Topics Area Section End --> 
        <!-- Trending Area Section End -->  
        <section class="course-area mb-80">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                    <div class="course-section-header">
                            <h2 class="f-left"><?php echo $_welearner_trending_course_header_text; ?></h2>
                            <a class="course-btn f-right"href="#">View All</a>
                        </div>
                    </div>
                </div>
                <div class="row">
				<?php
 
				$args = array(
					'post_type' => '_welearner_courses',
					'posts_per_page' => 3
					);
				 
				$query = new WP_Query( $args );
				 
				if ( $query->have_posts() ) {
				 
					while ( $query->have_posts() ) {
				 
						$query->the_post(); 
			?>
                    <div class="col-xl-4 col-lg-4">
                        <div class="course-comp">
                            <div class="course-img">
                            <?php the_post_thumbnail( 'course-thumb' ) ?>
                            </div>
                            <div class="course-meta">
                                <div id="post-<?php the_ID(); ?>" <?php post_class( 'course-lablel f-left' ); ?> >
								

								<?php $terms = get_the_terms( $post->ID , '_welearner_course_topic' ); 
										foreach ( $terms as $term ) {
											$term_link = get_term_link( $term, '_welearner_course_topic' );
											if( is_wp_error( $term_link ) )
											continue;
										echo '<a href="' . $term_link . '">' . $term->name . '</a>';
										} 
								?>                       
                                </div>
                                <div class="course-rate f-right">
                                <?php echo apply_filters('custom_rating_display',''); ?>
                                </div>

                            </div>
                            <div class="course-header">
                                <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>

                            </div>
                            <div class="course-author d-flex align-items-center">
                                <div class="author-img ">
								
                                <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?></a>

                                </div>
                                <div class="author-name">
                                        <p><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"> <?php the_author(); ?></a></p>
                                </div>

                            </div>
							<?php
							$__welearner_course_old_price = esc_html(get_post_meta(get_the_ID(), '__welearner_course_old_price', true)); 
							$__welearner_course_new_price = esc_html(get_post_meta( get_the_ID(), '__welearner_course_new_price', true));

							?>
                            <div class="course-essential">
							<?php if($__welearner_course_old_price) { ?>
                                <div class="old-price f-left">
                                    <p><del><?php _e('$', '_welearner')?><?php echo $__welearner_course_old_price; ?></del></p>
                                </div>
							<?php }?>
							<?php if($__welearner_course_new_price) { ?>
                                <div class="new-price f-left">
                                    <p><?php _e('$', '_welearner')?><?php echo $__welearner_course_new_price; ?></p>
                                </div>
							<?php } ?>
                                <div class="watch-more f-right">
                                  <a href="<?php the_permalink();?>"><?php _e('Watch More', '_welearner')?></a>
                                </div>

                            </div>
                        </div>
                        
                    </div>
								<?php
			   }
 
			}
			 
			wp_reset_postdata();
			 
		?>
                  
                </div>
            </div>
        </section>
        <!-- Trending Area Section End --> 
        <!-- Trending Area Section End -->  
          <section class="course-area pb-40">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                    <div class="course-section-header">
                            <h2 class="f-left"><?php echo $_welearner_top_course_header_text; ?></h2>
                            <a class="course-btn f-right" href="#">View All</a>
                        </div>
                    </div>
                </div>
                <div class="row">

        <?php
        global $wpdb;
		   
		   $results = $wpdb->get_results("SELECT DISTINCT(wd_comments.comment_post_ID), GROUP_CONCAT(wd_comments.comment_iD separator ', ') comment_ids FROM wd_comments JOIN wd_commentmeta ON wd_commentmeta.comment_id = wd_comments.comment_ID GROUP BY wd_comments.comment_post_ID", ARRAY_A);


		   foreach($results as $key => $value) {

			   $c_post_id = $value['comment_post_ID'];
			   $comment_ids = $value['comment_ids'];
			   $res = $wpdb->get_results( "SELECT AVG(`meta_value`) as avg_rate FROM wd_commentmeta WHERE `meta_key` = 'rating' AND comment_ID IN ($comment_ids) ORDER BY meta_value" );
			  $results[$key]['avg_rate'] = $res[0]->avg_rate;
		   }
		   $avg_rate = array_column($results, 'avg_rate');
		   array_multisort($avg_rate, SORT_DESC, $results);

		   $top_rated = array();
		   foreach ($results as $result) {

			   if($result['avg_rate'] && $result['comment_ids'] )
			   {
				   $top_rated[] = $result['comment_post_ID'];
			   }
		   }

		   $args = array(
			   'post_type' => array("_welearner_courses"),
			   'posts_per_page' => 3,
			   'post__in' => $top_rated,
			   'orderby' => 'post__in' 
		   );

		   $top_rated_posts = new wp_Query( $args );

		   if ( $top_rated_posts->have_posts() ) {
			

			   while ( $top_rated_posts->have_posts() ) {
				   $top_rated_posts->the_post();
				   $new_key = array_search(get_the_id(), array_column($results, 'comment_post_ID'));
           ?>
           
           <div class="col-xl-4 col-lg-4">
                        <div class="course-comp">
                            <div class="course-img">
                            <?php the_post_thumbnail( 'course-thumb' ) ?>
                            </div>
                            <div class="course-meta">
                                <div id="post-<?php the_ID(); ?>" <?php post_class( 'course-lablel f-left' ); ?> >
								

								<?php $terms = get_the_terms( $post->ID , '_welearner_course_topic' ); 
										foreach ( $terms as $term ) {
											$term_link = get_term_link( $term, '_welearner_course_topic' );
											if( is_wp_error( $term_link ) )
											continue;
										echo '<a href="' . $term_link . '">' . $term->name . '</a>';
										} 
								?>                       
                                </div>
                                <div class="course-rate f-right">
                                <?php echo apply_filters('custom_rating_display',''); ?>
                                </div>

                            </div>
                            <div class="course-header">
                                <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>

                            </div>
                            <div class="course-author d-flex align-items-center">
                                <div class="author-img ">
								
                                <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?></a>

                                </div>
                                <div class="author-name">
                                        <p><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"> <?php the_author(); ?></a></p>
                                </div>

                            </div>
							<?php
							$__welearner_course_old_price = esc_html(get_post_meta(get_the_ID(), '__welearner_course_old_price', true)); 
							$__welearner_course_new_price = esc_html(get_post_meta( get_the_ID(), '__welearner_course_new_price', true));

							?>
                            <div class="course-essential">
							<?php if($__welearner_course_old_price) { ?>
                                <div class="old-price f-left">
                                    <p><del><?php _e('$', '_welearner')?><?php echo $__welearner_course_old_price; ?></del></p>
                                </div>
							<?php }?>
							<?php if($__welearner_course_new_price) { ?>
                                <div class="new-price f-left">
                                    <p><?php _e('$', '_welearner')?><?php echo $__welearner_course_new_price; ?></p>
                                </div>
							<?php } ?>
                                <div class="watch-more f-right">
                                  <a href="<?php the_permalink();?>"><?php _e('Watch More', '_welearner')?></a>
                                </div>

                            </div>
                        </div>
                        
                    </div>
           
           <?php

       }
      

       wp_reset_postdata();
   } else {
       // no posts found
   }?>
 
                </div>
            </div>
        </section>
        <!-- Trending Area Section End --> 
        <!-- Counter Area Section start -->   
        <section class="couter-area pb-80">
            <div class="container">
  
                        <div class="row">
                      
                        <?php
 
                        $args = array(
                            'post_type' => '__welearner_counter',
                            'posts_per_page' => 3
                            );
                        
                        $query = new WP_Query( $args );
                        
                        if ( $query->have_posts() ) {
                        
                            while ( $query->have_posts() ) {
                        
                                $query->the_post(); 
                           ?>
                            <div class="col-xl-4 col-lg-4">
                            <?php
							$__welearner_counter_post_number = esc_html(get_post_meta(get_the_ID(), '__welearner_counter_post_number', true)); 
							$__welearner_counter_post_number_plus = esc_html(get_post_meta( get_the_ID(), '__welearner_counter_post_number_plus', true));

							?>
                                <div class="conter-content">
                                    <h1 class="counter-text"><span class="counter"><?php echo $__welearner_counter_post_number;?> </span><?php if( $__welearner_counter_post_number_plus === 'yes') { ?><?php _e('+', '_welearner'); ?><?php } ?></h1>
                                    <h4><?php the_title();?></h4>
                                </div>                    
                             
                            </div>
                         
                          
                        <?php
                            }
                
                            }
                            
                            wp_reset_postdata();
                            
                        ?>
                  </div>
            </div>
        </section>
        <!-- Counter Area Section End -->  
        <!-- Testimonial Area Section start -->  
        <section class="testimonial-area pt-140 pb-50" data-background="<?php echo $_welearner_testimonial_background_img; ?>">
            <div class="container">
                <div class="row">
                    
                    <div class="col-xl-6 col-lg-6">
                        <div class="testimonial-header">
                            <h2><?php echo $_welearner_testimonial_header_text ?></h2>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2">
                        <div class="testimonial-icon">
                        <img class="img-fluid" src="<?php echo $_welearner_testimonial_header_img ?>" alt="">
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="testimonial-header-text">
                            <h6><?php echo $_welearner_testimonial_header_slogan ?></h6>
                        </div>
                    </div>                    
                </div>
                <div class="row testimonial-active pb-150" >
				
				
						<?php
 
                        $args = array(
                            'post_type' => '__welearner_test',
                            );
                        
                        $query = new WP_Query( $args );
                        
                        if ( $query->have_posts() ) {
                        
                            while ( $query->have_posts() ) {
                        
                                $query->the_post(); 
                           ?>
						<div class="col-xl-4 col-lg-4 testimonial-item">
                            <?php the_post_thumbnail( 'testimonial-thumb' ) ?>
							                            <?php
							$__welearner_testimonial_author = esc_html(get_post_meta(get_the_ID(), '__welearner_testimonial_author', true)); 
							$__welearner_testimonial_designation = esc_html(get_post_meta( get_the_ID(), '__welearner_testimonial_designation', true));

							?>

                            <h4><?php echo $__welearner_testimonial_author;?></h4>
                            <h6 class="testimonial-designation"><?php $__welearner_testimonial_designation; ?></h6>
                            <p class="testimonial-post"><?php the_content();?></p>
                            <h5><?php the_title();?></h5>
                        </div>
						
						<?php
                            }
                
                            }
                            
                            wp_reset_postdata();
                            
                        ?>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 pb-35">
                        <div class="testimonial-footer-text text-center">
                            <p><?php echo $_welearner_brand_header_text;?></p>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12">
                        <div class="testimonial-footer-img text-center">
                        <img class="img-fluid" src="<?php echo $_welearner_brand_first_img; ?>" alt="">
						<img class="img-fluid" src="<?php echo $_welearner_brand_second_img; ?>" alt="">
                        <img class="img-fluid" src="<?php echo $_welearner_brand_third_img; ?>" alt="">
                        <img class="img-fluid" src="<?php echo $_welearner_brand_fourth_img; ?>" alt="">
                        <img class="img-fluid" src="<?php echo $_welearner_brand_fifth_img; ?>" alt="">
                        <img class="img-fluid" src="<?php echo $_welearner_brand_sixth_img; ?>" alt="">
                        <img class="img-fluid" src="<?php echo $_welearner_brand_seventh_img; ?>" alt="">
                        <img class="img-fluid" src="<?php echo $_welearner_brand_eighth_img; ?>" alt="">

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial Area Section End -->  
        <!-- Creator Area Section Start -->  
        <section class="creator-area pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3 col-lg-6 offset-lg-3">
                        <div class="creator-header-text text-center">
                            <h1><?php echo $_welearner_creator_header_text;?></h1>
                            <p><?php echo $_welearner_creator_header_slogan?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row creator-active">
				<?php
 
                        $args = array(
                            'post_type' => '__welearner_creator',
                            );
                        
                        $query = new WP_Query( $args );
                        
                        if ( $query->have_posts() ) {
                        
                            while ( $query->have_posts() ) {
                        
                                $query->the_post(); 
                           ?>
						   
                    <div class="col-xl-4 col-lg-4">
                        <div class="our-team">
                            <?php the_post_thumbnail( 'creator-thumb' ) ?>
							                            <?php
							$__welearner_creator_facebook = esc_url(get_post_meta(get_the_ID(), '__welearner_creator_facebook', true)); 
							$__welearner_creator_linkedin = esc_url(get_post_meta( get_the_ID(), '__welearner_creator_linkedin', true));
							$__welearner_creator_twitter = esc_url(get_post_meta( get_the_ID(), '__welearner_creator_twitter', true));

							?>
						<ul class="social">
						    <?php if($__welearner_creator_facebook) { ?>
                            <li><a href="<?php echo $__welearner_creator_facebook;?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<?php } ?>
							<?php if($__welearner_creator_linkedin) { ?>
                            <li><a href="<?php echo $__welearner_creator_linkedin;?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							<?php } ?>
							<?php if($__welearner_creator_twitter) { ?>
                            <li><a href="<?php echo $__welearner_creator_twitter;?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<?php } ?>
                            
                            </ul>
                        </div>
                        <div class="team-content">
                                <h5><?php the_title();?></h5>
                                <p><?php the_content();?></p>
                        </div>
                    
                    </div>
					<?php
                            }
                
                            }
                            
                            wp_reset_postdata();
                            
                        ?>
                </div>
            </div>
            
        </section>
        <!-- Creator Area Section End -->  
        <!-- Blog Area Section Start -->  

        <section class="blog-area pb-50" data-background="<?php echo $_welearner_blog_background_img; ?>">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4">
                        <div class="blog-area-header">
                            <h1><?php echo $_welearner_blog_header_text; ?></h1>
                        </div>

                    </div>
                </div>
                <div class="row">
				        <?php 
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 3
                            );
                        
                        $query = new WP_Query( $args );
                        
                        if ( $query->have_posts() ) {
                        
                            while ( $query->have_posts() ) {
                        
                                $query->the_post(); 
                           ?>

                    <div class="col-xl-4 col-lg-4">
                        <div class="blog-item">
                            <?php the_post_thumbnail( ' blog-thumb' ) ?>
                            <h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                            <p><a href="<?php the_permalink();?>">Read Blog</a></p>
                            
                        </div>
                    </div>
					<?php
                            }
                
                            }
                            
                            wp_reset_postdata();
                            
                        ?>
                </div>
            </div>
        </section>
        <!-- Blog Area Section End -->  
        <!-- Banner Area Section Start -->  
        <section class="banner-area pt-40 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="banner-text text-center">
                            <h1>Become an instructor</h1>
                            <p>Top instructors from around the world teach millions of students on Udemy. We provide the tools and skills to teach what you love.</p>
                            <a class="btn" href="#">Get Join</a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="banner-text-2 text-center">
                            <h1>Welearner for Business</h1>
                            <p>Get unlimited access to 4,000+ of We Learner’s top courses for your team.</p>
                            <a class="btn" href="#">Get Start</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Banner Area Section End -->  
         
        

		
<?php get_footer(); ?>
