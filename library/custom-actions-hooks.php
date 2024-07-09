<?php
/**
 * Created by PhpStorm.
 * User: chrisparsons
 * Date: 2019-02-14
 * Time: 04:57
 */

// Adds a container below the entry-content container in the default template
add_action( 'after_default_template_content', 'add_stuff', 15 );
function add_stuff() {
	$default_cta_content = get_post_meta(get_the_ID(), 'default-cta-content', true);
	echo '<div class="grid-x">' .
				'<div class="card">' .
					$default_cta_content .
				'</div>' .
				'</div>';
}
