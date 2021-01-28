

<form role="search" method="get" class="c-search-form" action="<?php echo esc_url( home_url( '/' ) ) ?>">
<input type="search" id="search" placeholder="<?php echo esc_attr_x( 'What do you want to learn?', 'placeholder', '_welearner' ) ?>" value="<?php echo esc_attr(get_search_query()) ?>" name="s">
<button type="submit"><?php echo esc_html_x( 'Search', 'submit button', '_welearner' ); ?></button>
</form>