<?php

function _welearner_register_menus() {
    register_nav_menus( array(
        'main-menu' => esc_html__('Main Menu', '_welearner'),
    ) );
}
add_action( 'init', '_welearner_register_menus' );
?>





       
