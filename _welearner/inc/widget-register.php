<?php
function _welearner_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', '_welearner' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', '_welearner' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}

$footer_layout = sanitize_text_field(get_theme_mod('_welearner_footer_layout', '4,2,2,2,2'));
$footer_layout = preg_replace('/\s+/', '', $footer_layout);
$columns = explode(',', $footer_layout);


foreach ($columns as $i => $column) {
    register_sidebar( array(
        'id' => 'footer-sidebar-' . ($i + 1),
        'name' => sprintf(esc_html__( 'Footer Widgets Column %s', '_welearner' ), $i +1),
        'description' => esc_html__( 'Footer widgets', '_welearner' ),
        'before_widget' => '<div id="%1$s" class="footer-menu %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ) );
}
add_action( 'widgets_init', '_welearner_widgets_init' );