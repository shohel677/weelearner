				<?php get_header(); ?>

<?php
    $layout = get_post_meta( get_the_ID(), '__welearner_post_layout', 'full' );
    $sidebar = is_active_sidebar( 'sidebar-1' );
    if($layout === 'sidebar' && !$sidebar) {
        $layout = 'full';
    }
?>
				
<div class="container <?php echo $layout; ?>">
	<div class="row">
		<div class="col-xl-<?php echo $layout === 'sidebar' ? '9' : '12' ?>">
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', '_welearner' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', '_welearner' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
		</div>
		<?php if( $layout === 'sidebar') { ?>		
            <div class="col-xl-3">
            	<div class="sidebar">
					<?php get_sidebar(); ?>
                </div>
            </div>
			<?php } ?>
	</div>
</div>
				
				

<?php get_footer(); ?>

