<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _Welearner
 */

get_header();
?>

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
	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->
	
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
<?php
get_footer();
