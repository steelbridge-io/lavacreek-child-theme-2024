<?php
/**
 * Allow users to select Topbar or Offcanvas menu. Adds body class of offcanvas or topbar based on which they choose.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

if ( ! function_exists( 'wpt_register_theme_customizer' ) ) :

add_action( 'customize_register', 'wpt_register_theme_customizer' );

	function wpt_register_theme_customizer( $wp_customize ) {

		// Create custom panels
		$wp_customize->add_panel(
			'mobile_menu_settings', array(
				'priority'       => 1000,
				'theme_supports' => '',
				'title'          => __( 'Mobile Menu Settings', 'foundationpress' ),
				'description'    => __( 'Controls the mobile menu', 'foundationpress' ),
			)
		);

		// Create custom field for mobile navigation layout
		$wp_customize->add_section(
			'mobile_menu_layout', array(
				'title'    => __( 'Mobile navigation layout', 'foundationpress' ),
				'panel'    => 'mobile_menu_settings',
				'priority' => 1000,
			)
		);

		// Set default navigation layout
		$wp_customize->add_setting(
			'wpt_mobile_menu_layout',
			array(
				'default' => __( 'topbar', 'foundationpress' ),
			)
		);

		// Add options for navigation layout
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'mobile_menu_layout',
				array(
					'type'     => 'radio',
					'section'  => 'mobile_menu_layout',
					'settings' => 'wpt_mobile_menu_layout',
					'choices'  => array(
						'topbar'    => 'Topbar',
						'offcanvas' => 'Offcanvas',
					),
				)
			)
		);
    
    ///////////////// FRONT PAGE SLIDER 
    
    // Front Page Slider Section 
    $wp_customize->add_section( 'fp_top_slider', array(
      'title'             => __('Front Page Slider', 'foundationpress'),
      'priority'          => 20,
      'active_callback'		=> function() {return is_page_template('page-templates/front.php');}
    ));
    
    // Slider Logo
    $wp_customize -> add_setting ( 'fp-logo', array(
        'default'           => '',
        'type'              => 'theme_mod',
        'transport'         => 'refresh'   
    ));
    $wp_customize -> add_control (
    new WP_Customize_Image_Control (
        $wp_customize,
        'fp-logo',
            array (
                'label'             => __('Slider Logo'),
                'section'           => 'fp_top_slider',
                'settings'          => 'fp-logo',
                'priority'          => 10,
                'sanitize_callback' => 'esc_url_raw',
                //'active_callback'   => function() {return is_page_template('page-templates/front.php');}
                
            )
        )
    );
    
    ///////////////// SLIDER ONE
    
    // Slider #1
    $wp_customize -> add_setting ( 'fp-topslider-one', array(
        'default'           => '',
        'type'              => 'theme_mod',
        'transport'         => 'postMessage'   
    ));
    $wp_customize -> add_control (
    new WP_Customize_Image_Control (
        $wp_customize,
        'fp-topslider-one',
            array (
                'label'             => __('Slider &#35;1 Image'),
                'section'           => 'fp_top_slider',
                'settings'          => 'fp-topslider-one',
                'priority'          => 10,
                'sanitize_callback' => 'esc_url_raw',  
            )
        )
    );
    // Slider #1 Caption
    $wp_customize -> add_setting ( 'fp-topslider-one-caption', array(
        'default'           => '',
        'type'              => 'theme_mod',
        'transport'         => 'postMessage'   
    ));
    $wp_customize->add_control( 'fp-topslider-one-caption', array(
        'default'   => '',
        'type'      => 'textarea',
        'priority'  => 10,
        'section'   => 'fp_top_slider',
        'settings'  => 'fp-topslider-one-caption',
        'label'     => __('Slider &#35;1 Caption'),
    )); 
    
    ///////////////// SLIDER TWO
    
     // Slider #2
    $wp_customize -> add_setting ( 'fp-topslider-two', array(
        'default'           => '',
        'type'              => 'theme_mod',
        'transport'         => 'postMessage'   
    ));
    $wp_customize -> add_control (
    new WP_Customize_Image_Control (
        $wp_customize,
        'fp-topslider-two',
            array (
                'label'             => __('Slider &#35;2 Image'),
                'section'           => 'fp_top_slider',
                'settings'          => 'fp-topslider-two',
                'priority'          => 10,
                'sanitize_callback' => 'esc_url_raw',  
            )
        )
    );
    // Slider #2 Caption
    $wp_customize -> add_setting ( 'fp-topslider-two-caption', array(
        'default'           => '',
        'type'              => 'theme_mod',
        'transport'         => 'postMessage'   
    ));
    $wp_customize->add_control( 'fp-topslider-two-caption', array(
        'default'   => '',
        'type'      => 'textarea',
        'priority'  => 10,
        'section'   => 'fp_top_slider',
        'settings'  => 'fp-topslider-two-caption',
        'label'     => __('Slider &#35;2 Caption'),
    ));
    
    ///////////////// SLIDER THREE
    
     // Slider #3
    $wp_customize -> add_setting ( 'fp-topslider-three', array(
        'default'           => '',
        'type'              => 'theme_mod',
        'transport'         => 'postMessage'   
    ));
    $wp_customize -> add_control (
    new WP_Customize_Image_Control (
        $wp_customize,
        'fp-topslider-three',
            array (
                'label'             => __('Slider &#35;3 Image'),
                'section'           => 'fp_top_slider',
                'settings'          => 'fp-topslider-three',
                'priority'          => 10,
                'sanitize_callback' => 'esc_url_raw',  
            )
        )
    );
    // Slider #3 Caption
    $wp_customize -> add_setting ( 'fp-topslider-three-caption', array(
        'default'           => '',
        'type'              => 'theme_mod',
        'transport'         => 'postMessage'   
    ));
    $wp_customize->add_control( 'fp-topslider-three-caption', array(
        'default'   => '',
        'type'      => 'textarea',
        'priority'  => 10,
        'section'   => 'fp_top_slider',
        'settings'  => 'fp-topslider-three-caption',
        'label'     => __('Slider &#35;3 Caption'),
    ));
    
    ///////////////// SLIDER FOUR
    
    // Slider #4
    $wp_customize -> add_setting ( 'fp-topslider-four', array(
        'default'           => '',
        'type'              => 'theme_mod',
        'transport'         => 'postMessage'   
    ));
    $wp_customize -> add_control (
    new WP_Customize_Image_Control (
        $wp_customize,
        'fp-topslider-four',
            array (
                'label'             => __('Slider &#35;4 Image'),
                'section'           => 'fp_top_slider',
                'settings'          => 'fp-topslider-four',
                'priority'          => 10,
                'sanitize_callback' => 'esc_url_raw',  
            )
        )
    );
    // Slider #4 Caption
    $wp_customize -> add_setting ( 'fp-topslider-four-caption', array(
        'default'           => '',
        'type'              => 'theme_mod',
        'transport'         => 'postMessage'   
    ));
    $wp_customize->add_control( 'fp-topslider-four-caption', array(
        'default'   => '',
        'type'      => 'textarea',
        'priority'  => 10,
        'section'   => 'fp_top_slider',
        'settings'  => 'fp-topslider-four-caption',
        'label'     => __('Slider &#35;4 Caption'),
    ));
    
    
    ///////////////// FRONT PAGE SLIDER #2
    
    // Front Page Slider #2 Section
    $wp_customize->add_section( 'fp_slider_two', array(
      'title'             => __('Front Page Slider &#35;2', 'foundationpress'),
      'priority'          => 30,
      'active_callback'		=> function() {return is_page_template('page-templates/front.php');}
    ));
    
    ///////////////// SLIDER #2 (slide #1)
    
    // Slide #1
    $wp_customize -> add_setting ( 'fp-slidertwo-one', array(
        'default'           => '',
        'type'              => 'theme_mod',
        'transport'         => 'postMessage'   
    ));
    $wp_customize -> add_control (
    new WP_Customize_Image_Control (
        $wp_customize,
        'fp-slidertwo-one',
            array (
                'label'             => __('Slide &#35;1'),
                'section'           => 'fp_slider_two',
                'settings'          => 'fp-slidertwo-one',
                'priority'          => 10,
                'sanitize_callback' => 'esc_url_raw',  
            )
        )
    );
    
    
    ///////////////// SLIDER #2 (slide #2)
    
    // Slide #2
    $wp_customize -> add_setting ( 'fp-slidertwo-two', array(
        'default'           => '',
        'type'              => 'theme_mod',
        'transport'         => 'postMessage'   
    ));
    $wp_customize -> add_control (
    new WP_Customize_Image_Control (
        $wp_customize,
        'fp-slidertwo-two',
            array (
                'label'             => __('Slide &#35;2'),
                'section'           => 'fp_slider_two',
                'settings'          => 'fp-slidertwo-two',
                'priority'          => 10,
                'sanitize_callback' => 'esc_url_raw',  
            )
        )
    );
    
    ///////////////// SLIDER #2 (slide #3)
    
    // Slide #3
    $wp_customize -> add_setting ( 'fp-slidertwo-three', array(
        'default'           => '',
        'type'              => 'theme_mod',
        'transport'         => 'postMessage'   
    ));
    $wp_customize -> add_control (
    new WP_Customize_Image_Control (
        $wp_customize,
        'fp-slidertwo-three',
            array (
                'label'             => __('Slide &#35;3'),
                'section'           => 'fp_slider_two',
                'settings'          => 'fp-slidertwo-three',
                'priority'          => 10,
                'sanitize_callback' => 'esc_url_raw',  
            )
        )
    );
    
    ///////////////// SLIDER #2 (slide #4)
    
    // Slide #3
    $wp_customize -> add_setting ( 'fp-slidertwo-four', array(
        'default'           => '',
        'type'              => 'theme_mod',
        'transport'         => 'postMessage'   
    ));
    $wp_customize -> add_control (
    new WP_Customize_Image_Control (
        $wp_customize,
        'fp-slidertwo-four',
            array (
                'label'             => __('Slide &#35;4'),
                'section'           => 'fp_slider_two',
                'settings'          => 'fp-slidertwo-four',
                'priority'          => 10,
                'sanitize_callback' => 'esc_url_raw',  
            )
        )
    );
    
    
    ///////////////// CARD SECTION
    
    // Right Card Section - Contains Two Cards
    $wp_customize->add_section( 'fp_card_section', array(
      'title'             => __('Front Page Card Section', 'foundationpress'),
      'priority'          => 40,
      'active_callback'		=> function() {return is_page_template('page-templates/front.php');}
    ));
    
    ///////////////// TOP CARD IMAGE & CAPTION
    
    //Top Car Image
    $wp_customize -> add_setting ( 'fp-topcard-img', array(
      'default'   => '',
      'type'      => 'theme_mod',
      'transport' => 'postMessage'
    ));
    $wp_customize -> add_control (
      new WP_Customize_Image_Control (
        $wp_customize,
          'fp-topcard-img',
            array (
              'label'     => __('Top Card Image'),
              'section'   => 'fp_card_section',
              'settings'  => 'fp-topcard-img',
              'priority'  => 10,
              'sanitize_callback' => 'esc_url_raw',
        )
      )
    );
    
    // Top Card Caption
    $wp_customize -> add_setting ( 'fp-topcard-cap', array(
        'default'           => '',
        'type'              => 'theme_mod',
        'transport'         => 'postMessage'   
    ));
    $wp_customize -> add_control (
    new WP_Customize_Control (
        $wp_customize,
        'fp-topcard-cap',
            array (
                'label'             => __('Top Card Caption'),
                'section'           => 'fp_card_section',
                'settings'          => 'fp-topcard-cap',
                'type'              => 'textarea',
                'priority'          => 10,
                'sanitize_callback' => 'esc_url_raw',  
            )
        )
    );
    
    // Bottom Card Image
    $wp_customize -> add_setting ( 'fp-bottomcard-img', array(
        'default'           => '',
        'type'              => 'theme_mod',
        'transport'         => 'postMessage'   
    ));
    $wp_customize -> add_control (
    new WP_Customize_Image_Control (
        $wp_customize,
        'fp-bottomcard-img',
            array (
                'label'             => __('Bottom Card Image'),
                'section'           => 'fp_card_section',
                'settings'          => 'fp-bottomcard-img',
                'priority'          => 10,
                'sanitize_callback' => 'esc_url_raw',  
            )
        )
    );
    
    // Bottom Card Caption
    $wp_customize -> add_setting ( 'fp-bottomcard-cap', array(
        'default'           => '',
        'type'              => 'theme_mod',
        'transport'         => 'postMessage'   
    ));
    $wp_customize -> add_control (
    new WP_Customize_Control (
        $wp_customize,
        'fp-bottomcard-cap',
            array (
                'label'             => __('Bottom Card Caption'),
                'section'           => 'fp_card_section',
                'settings'          => 'fp-bottomcard-cap',
                'type'              => 'textarea',
                'priority'          => 10,
                'sanitize_callback' => 'esc_url_raw',  
            )
        )
    );
    
    
     ///////////////// PARALLAX IMAGES
    
    // Adds Parallax Section
    $wp_customize->add_section( 'fp_parallax_section', array(
      'title'             => __('Front Page Parallax Images', 'foundationpress'),
      'priority'          => 40,
      'active_callback'		=> function() {return is_page_template('page-templates/front.php');}
    ));
    
    // Adds Parallax Top Image
    $wp_customize -> add_setting ( 'fp-topparallax-img', array(
        'default'   => '',
        'type'      => 'theme_mod',
        'transport' => 'refresh'
    ));
    $wp_customize -> add_control (
      new WP_Customize_Image_Control (
        $wp_customize,
        'fp-topparallax-img',
          array(
            'label'             => __('Top Parallax Image'),
            'section'           => 'fp_parallax_section',
            'settings'          => 'fp-topparallax-img',
            'priority'          => '10',
            'sanatize_callback' => 'esc_url_raw'
        )
      )
    );
    
    // Parallax One CTA
    $wp_customize -> add_setting ( 'fp-topparallax-cta', array(
        'default'           => '',
        'type'              => 'theme_mod',
        'transport'         => 'postMessage'   
    ));
    $wp_customize -> add_control (
    new WP_Customize_Control (
        $wp_customize,
        'fp-topparallax-cta',
            array (
                'label'             => __('Top Parallax CTA'),
                'section'           => 'fp_parallax_section',
                'settings'          => 'fp-topparallax-cta',
                'type'              => 'textarea',
                'priority'          => 10,
                'sanitize_callback' => 'esc_url_raw',  
            )
        )
    );
    
    // Parallax Divider Section Content
    $wp_customize -> add_setting ( 'fp-divider-content', array(
        'default'           => '',
        'type'              => 'theme_mod',
        'transport'         => 'postMessage'   
    ));
    $wp_customize -> add_control (
    new WP_Customize_Control (
        $wp_customize,
        'fp-divider-content',
            array (
                'label'             => __('Parallax Divider Content'),
                'section'           => 'fp_parallax_section',
                'settings'          => 'fp-divider-content',
                'type'              => 'textarea',
                'priority'          => 10,
                'sanitize_callback' => 'esc_url_raw',  
            )
        )
    );
    
    // Adds Parallax Bottom Image
    $wp_customize -> add_setting ( 'fp-bottomparallax-img', array(
        'default'   => '',
        'type'      => 'theme_mod',
        'transport' => 'refresh'
    ));
    $wp_customize -> add_control (
      new WP_Customize_Image_Control (
        $wp_customize,
        'fp-bottomparallax-img',
          array(
            'label'             => __('Bottom Parallax Image'),
            'section'           => 'fp_parallax_section',
            'settings'          => 'fp-bottomparallax-img',
            'priority'          => '10',
            'sanatize_callback' => 'esc_url_raw'
        )
      )
    );
    
    // Parallax Two CTA
    $wp_customize -> add_setting ( 'fp-bottomparallax-cta', array(
        'default'           => '',
        'type'              => 'theme_mod',
        'transport'         => 'postMessage'   
    ));
    $wp_customize -> add_control (
    new WP_Customize_Control (
        $wp_customize,
        'fp-bottomparallax-cta',
            array (
                'label'             => __('Bottom Parallax CTA'),
                'section'           => 'fp_parallax_section',
                'settings'          => 'fp-bottomparallax-cta',
                'type'              => 'textarea',
                'priority'          => 10,
                'sanitize_callback' => 'esc_url_raw',  
            )
        )
    ); 
    
    ///////////////// FRONT PAGE COLORS
    
    // Add Front Page Top Gradient Color Section
    $wp_customize->add_section( 'fp_color_section', array(
      'title'             => __('Front Page Colors', 'foundationpress'),
      'priority'          => 50,
      'active_callback'		=> function() {return is_page_template('page-templates/front.php');}
    ));
    
    // Front Page Color Setting and control
    $wp_customize -> add_setting ( 'fp-top-gradient-bg', array(
        'default'           => '',
        'type'              => 'theme_mod',
        'transport'         => 'refresh'   
    ));
    $wp_customize->add_control( 
	    new WP_Customize_Control (
	   $wp_customize, 
	   'fp-top-gradient-bg', 
      array(
        'label'      => __( 'Back Ground Color Top Gradient', 'foundationpress' ),
        'section'    => 'fp_color_section',
        'settings'   => 'fp-top-gradient-bg',
        'type'              => 'text',
        'priority'          => 10,
	   ) 
    ) 
  );
  
    // Front Page Middle Gradient
    $wp_customize -> add_setting ( 'fp-middle-gradient-bg', array(
        'default'           => '',
        'type'              => 'theme_mod',
        'transport'         => 'refresh'   
    ));
    $wp_customize->add_control( 
	    new WP_Customize_Control (
	   $wp_customize, 
	   'fp-middle-gradient-bg', 
      array(
        'label'      => __( 'Back Ground Color Middle Gradient', 'foundationpress' ),
        'section'    => 'fp_color_section',
        'settings'   => 'fp-middle-gradient-bg',
        'type'              => 'text',
        'priority'          => 10,
	   ) 
    ) 
  );
  
   // Front Page Bottom Gradient Color Setting and control
    $wp_customize -> add_setting ( 'fp-bottom-gradient-bg', array(
        'default'           => '',
        'type'              => 'theme_mod',
        'transport'         => 'refresh'   
    ));
    $wp_customize->add_control( 
	   new WP_Customize_Control (
	   $wp_customize, 
	   'fp-bottom-gradient-bg', 
      array(
        'label'      => __( 'Bottom Gradient', 'foundationpress' ),
        'section'    => 'fp_color_section',
        'settings'   => 'fp-bottom-gradient-bg',
        'type'              => 'text',
        'priority'          => 10,
	   ) 
    ) 
  );

  // End
	}
  
  
  // Add Patials | Selective Refresh To Customizer Components
  add_action( 'customize_register', 'my_register_blogname_partials' );
  function my_register_blogname_partials( WP_Customize_Manager $wp_customize ) {
  
  // Parallax One
  $wp_customize->selective_refresh->add_partial( 'fp-topparallax-img', array(
    'selector' => '#parallaxone.parallax-window',
    'render_callback' => 'wp_get_document_title',
  ));
  
  // Parallax One CTA
  $wp_customize->selective_refresh->add_partial( 'fp-topparallax-cta', array(
    'selector' => '#parallaxone .parallax-text',
    'render_callback' => 'wp_get_document_title',
  ));
  
  // Parallax Divider Content
  $wp_customize->selective_refresh->add_partial( 'fp-divider-content', array(
    'selector'=> '#parallax-divider .cell',
    'render_callback' => 'wp_get_document_title',
  ));
  
  // Parallax Bottom Image
  $wp_customize->selective_refresh->add_partial( 'fp-bottomparallax-img', array(
    'selector'=> '#parallaxtwo.parallax-window',
    'render_callback' => 'wp_get_document_title'
  ));
  
  // Parallax Bottom CTA
  $wp_customize->selective_refresh->add_partial( 'fp-bottomparallax-cta', array(
    'selector'=> '#parallaxtwo .parallax-text',
    'render_callback' => 'wp_get_document_title'
  ));
  
  }

	// Add class to body to help w/ CSS
	add_filter( 'body_class', 'mobile_nav_class' );
	function mobile_nav_class( $classes ) {
		if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) :
			$classes[] = 'topbar';
		elseif ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) :
			$classes[] = 'offcanvas';
		endif;
		return $classes;
	}
endif;

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function tfs_customize_preview_js() {
	wp_enqueue_script( 'tfs_customizer', get_template_directory_uri() . '/library/js/customizer.js', array( 'jquery', 'customize-preview' ), '', true );
}
add_action( 'customize_preview_init', 'tfs_customize_preview_js' );
