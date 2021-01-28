<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _Welearner
 */

?>
<?php $_welearner_footer_background_img =   esc_attr(get_theme_mod('_welearner_footer_background_img'));?>

<!-- Footer Area Section Start -->  
<?php
    $footer_layout = sanitize_text_field(get_theme_mod('_welearner_footer_layout', '4,2,2,2,2'));
    $footer_layout = preg_replace('/\s+/', '', $footer_layout);
    $columns = explode(',', $footer_layout);
    $widgets_active = false;
    foreach ($columns as $i => $column) {
        if( is_active_sidebar( 'footer-sidebar-' . ($i + 1) )) {
            $widgets_active = true;
        }
    }
?>
<?php if($widgets_active) { ?>
<section class="footer-area pb-150 pt-100" data-background="<?php echo $_welearner_footer_background_img; ?>">
            <div class="container">
                <div class="row">
					<?php foreach($columns as $i => $column) { ?>
					<div class="col-lg-<?php echo $column ?>">
						<?php if(is_active_sidebar( 'footer-sidebar-' . ($i + 1) )) {
							dynamic_sidebar( 'footer-sidebar-' . ($i + 1) );
						} ?>
					</div>
					<?php }?>
                    
                    
                </div>
            </div>
        </section>
        <!-- Footer Area Section End --> 
<?php } ?>
<?php wp_footer(); ?>

</body>
</html>
