<?php
/**
 * Enqueue all styles and scripts
 *
 * Learn more about enqueue_script: {@link https://codex.wordpress.org/Function_Reference/wp_enqueue_script}
 * Learn more about enqueue_style: {@link https://codex.wordpress.org/Function_Reference/wp_enqueue_style }
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */


// Check to see if rev-manifest exists for CSS and JS static asset revisioning
//https://github.com/sindresorhus/gulp-rev/blob/master/integration.md


if ( ! function_exists( 'lavacreek_scripts' ) ) :
	function lavacreek_scripts() {

        // Enqueue the main Stylesheet.
        wp_enqueue_style('main-stylesheet', get_template_directory_uri() . '/dist/assets/css/' . foundationpress_asset_path('app.css'), array(), '2.10.4', 'all');
								
        wp_enqueue_style('custom-style', get_template_directory_uri() . '/assets/css/parent-theme-tfs-custom.css', array(), '1.0.0', 'all');

        // Child Theme CSS
        wp_enqueue_style( 'child-style',get_stylesheet_directory_uri() . '/style.css', array(), '1.0.0', 'all' );

        wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.7.2/css/all.css', array(), '5.7.2', 'all');
					
        // AOS - Animate On Scroll
        wp_enqueue_style('aos-css', 'http://unpkg.com/aos@2.3.1/dist/aos.css', array(), '2.3.1', 'all');

        // Deregister the jquery version bundled with WordPress.
        wp_deregister_script('jquery');

        // CDN hosted jQuery placed in the header, as some plugins require that jQuery is loaded in the header.
        wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', array(), '3.2.1', true);
		
        wp_enqueue_script('aos-js', 'http://unpkg.com/aos@2.3.1/dist/aos.js', array('jquery'), '2.3.1', true);
        wp_add_inline_script('aos-js', 'jQuery(document).ready(function(){
          AOS.init();
        });', 'after');

        wp_enqueue_script('parallax-js', get_template_directory_uri() . '/library/js/parallax.min.js', array(), '',
            true);

        // Deregister the jquery-migrate version bundled with WordPress.
        wp_deregister_script('jquery-migrate');

        // CDN hosted jQuery migrate for compatibility with jQuery 3.x
        wp_register_script('jquery-migrate', '//code.jquery.com/jquery-migrate-3.0.1.min.js', array
        ('jquery'), '3.0.1', true);

        // Enqueue jQuery migrate. Uncomment the line below to enable.
								wp_enqueue_script('jquery-migrate');

        //Enqueue FontAwesome from CDN. Uncomment the line below if you need FontAwesome.
        wp_enqueue_script('fontawesome', 'https://use.fontawesome.com/5016a31c8c.js', array(), '4.7.0', true);

        // Enqueue Foundation scripts
        wp_enqueue_script('foundation', get_template_directory_uri() . '/dist/assets/js/' . foundationpress_asset_path('app.js'), array('jquery'), '2.10.4', true);

        // Add the comment-reply library on pages where it is necessary
        if (is_singular() && comments_open() && get_option('thread_comments')) {
            wp_enqueue_script('comment-reply');
        }
					
        //if (basename(get_page_template()) === 'landing-page.php' ) {
            wp_enqueue_script( 'my_script', 'http://static.ctctcdn.com/js/signup-form-widget/current/signup-form-widget.min.js', array(), null, true );
            wp_add_inline_script( 'my_script', 'var _ctct_m = "0a0f5b541f83f517b80813b9cfbdb8d9";' );
       // }
	} 
  endif; 
	add_action( 'wp_enqueue_scripts', 'lavacreek_scripts' );
	
	function enqueue_my_script() {
	//if ( is_page_template( 'landing-page.php' ) ) {
 
		?>
		<!-- Begin Constant Contact Active Forms -->
		<script> var _ctct_m = "0a0f5b541f83f517b80813b9cfbdb8d9"; </script>
		<script id="signupScript" src="//static.ctctcdn.com/js/signup-form-widget/current/signup-form-widget.min.js" async defer></script>
		<!-- End Constant Contact Active Forms -->
		<?php
	//}
}
//add_action( 'wp_footer', 'enqueue_my_script', 100 );