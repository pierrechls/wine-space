<?php
/**
 * winegrower Theme Customizer controls
 *
 * @package winegrower
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer along with several other settings.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 * @since  1.0.0
 */
if ( ! function_exists( 'winegrower_customize_register' ) ) {
	function winegrower_customize_register( $wp_customize ) {
		$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
		$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

		// Move background color setting alongside background image
		$wp_customize->get_control( 'background_color' )->section 	= 'background_image';
		$wp_customize->get_control( 'background_color' )->priority 	= 20;

		// Change background image section title & priority
		$wp_customize->get_section( 'background_image' )->title 	= __( 'Background', 'winegrower' );
		$wp_customize->get_section( 'background_image' )->priority 	= 30;

		// Change header image section title & priority
		$wp_customize->get_section( 'header_image' )->title 		= __( 'Header', 'winegrower' );
		$wp_customize->get_section( 'header_image' )->priority 		= 35;

		/**
		 * Custom controls
		 */
		require_once dirname( __FILE__ ) . '/controls/layout.php';
		require_once dirname( __FILE__ ) . '/controls/arbitrary.php';

		if ( apply_filters( 'winegrower_customizer_more', true ) ) {
			require_once dirname( __FILE__ ) . '/controls/more.php';
		}

		/**
		 * Add the typography section
	     */
		$wp_customize->add_section( 'winegrower_typography' , array(
			'title'      => __( 'Typography', 'winegrower' ),
			'priority'   => 45,
		) );

		/**
		 * Accent Color
		 */
		$wp_customize->add_setting( 'winegrower_accent_color', array(
			'default'           => apply_filters( 'winegrower_default_accent_color', '#96588a' ),
			'sanitize_callback' => 'winegrower_sanitize_hex_color',
		) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'winegrower_accent_color', array(
			'label'	   => __( 'Link / accent color', 'winegrower' ),
			'section'  => 'winegrower_typography',
			'settings' => 'winegrower_accent_color',
			'priority' => 20,
		) ) );

		/**
		 * Text Color
		 */
		$wp_customize->add_setting( 'winegrower_text_color', array(
			'default'           => apply_filters( 'winegrower_default_text_color', '#60646c' ),
			'sanitize_callback' => 'winegrower_sanitize_hex_color',
			'transport'			=> 'postMessage',
		) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'winegrower_text_color', array(
			'label'		=> __( 'Text color', 'winegrower' ),
			'section'	=> 'winegrower_typography',
			'settings'	=> 'winegrower_text_color',
			'priority'	=> 30,
		) ) );

		/**
		 * Heading color
		 */
		$wp_customize->add_setting( 'winegrower_heading_color', array(
			'default'           => apply_filters( 'winegrower_default_heading_color', '#484c51' ),
			'sanitize_callback' => 'winegrower_sanitize_hex_color',
			'transport'			=> 'postMessage',
		) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'winegrower_heading_color', array(
			'label'	   => __( 'Heading color', 'winegrower' ),
			'section'  => 'winegrower_typography',
			'settings' => 'winegrower_heading_color',
			'priority' => 40,
		) ) );

		/**
		 * Logo
		 */
		if ( ! class_exists( 'Jetpack' ) ) {
			$wp_customize->add_control( new Arbitrary_winegrower_Control( $wp_customize, 'winegrower_logo_heading', array(
				'section'  		=> 'header_image',
				'type' 			=> 'heading',
				'label'			=> __( 'Logo', 'winegrower' ),
				'priority' 		=> 2,
			) ) );

			$wp_customize->add_control( new Arbitrary_winegrower_Control( $wp_customize, 'winegrower_logo_info', array(
				'section'  		=> 'header_image',
				'type' 			=> 'text',
				'description'	=> sprintf( __( 'Looking to add a logo? Install the %sJetpack%s plugin! %sRead more%s.', 'winegrower' ), '<a href="https://wordpress.org/plugins/jetpack/">', '</a>', '<a href="http://docs.woothemes.com/document/winegrower-faq/#section-1">', '</a>' ),
				'priority' 		=> 3,
			) ) );

			$wp_customize->add_control( new Arbitrary_winegrower_Control( $wp_customize, 'winegrower_logo_divider_after', array(
				'section'  		=> 'header_image',
				'type' 			=> 'divider',
				'priority' 		=> 4,
			) ) );
		}

		/**
		 * Header Background
		 */
		$wp_customize->add_setting( 'winegrower_header_background_color', array(
			'default'           => apply_filters( 'winegrower_default_header_background_color', '#2c2d33' ),
			'sanitize_callback' => 'winegrower_sanitize_hex_color',
			'transport'			=> 'postMessage',
		) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'winegrower_header_background_color', array(
			'label'	   => __( 'Background color', 'winegrower' ),
			'section'  => 'header_image',
			'settings' => 'winegrower_header_background_color',
			'priority' => 15,
		) ) );

		/**
		 * Header text color
		 */
		$wp_customize->add_setting( 'winegrower_header_text_color', array(
			'default'           => apply_filters( 'winegrower_default_header_text_color', '#9aa0a7' ),
			'sanitize_callback' => 'winegrower_sanitize_hex_color',
			'transport'			=> 'postMessage',
		) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'winegrower_header_text_color', array(
			'label'	   => __( 'Text color', 'winegrower' ),
			'section'  => 'header_image',
			'settings' => 'winegrower_header_text_color',
			'priority' => 20,
		) ) );

		/**
		 * Header link color
		 */
		$wp_customize->add_setting( 'winegrower_header_link_color', array(
			'default'           => apply_filters( 'winegrower_default_header_link_color', '#ffffff' ),
			'sanitize_callback' => 'winegrower_sanitize_hex_color',
			'transport'			=> 'postMessage',
		) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'winegrower_header_link_color', array(
			'label'	   => __( 'Link color', 'winegrower' ),
			'section'  => 'header_image',
			'settings' => 'winegrower_header_link_color',
			'priority' => 30,
		) ) );

		/**
		 * Footer section
		 */
		$wp_customize->add_section( 'winegrower_footer' , array(
			'title'      	=> __( 'Footer', 'winegrower' ),
			'priority'   	=> 40,
			'description' 	=> __( 'Customise the look & feel of your web site footer.', 'winegrower' ),
		) );

		/**
		 * Footer heading color
		 */
		$wp_customize->add_setting( 'winegrower_footer_heading_color', array(
			'default'           => apply_filters( 'winegrower_default_footer_heading_color', '#494c50' ),
			'sanitize_callback' => 'winegrower_sanitize_hex_color',
			'transport' 		=> 'postMessage',
		) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'winegrower_footer_heading_color', array(
			'label'	   	=> __( 'Heading color', 'winegrower' ),
			'section'  	=> 'winegrower_footer',
			'settings' 	=> 'winegrower_footer_heading_color',
		) ) );

		/**
		 * Footer text color
		 */
		$wp_customize->add_setting( 'winegrower_footer_text_color', array(
			'default'           => apply_filters( 'winegrower_default_footer_text_color', '#61656b' ),
			'sanitize_callback' => 'winegrower_sanitize_hex_color',
			'transport'			=> 'postMessage',
		) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'winegrower_footer_text_color', array(
			'label'	   => __( 'Text color', 'winegrower' ),
			'section'  => 'winegrower_footer',
			'settings' => 'winegrower_footer_text_color',
		) ) );

		/**
		 * Footer link color
		 */
		$wp_customize->add_setting( 'winegrower_footer_link_color', array(
			'default'           => apply_filters( 'winegrower_default_footer_link_color', '#96588a' ),
			'sanitize_callback' => 'winegrower_sanitize_hex_color',
			'transport'			=> 'postMessage',
		) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'winegrower_footer_link_color', array(
			'label'	   => __( 'Link color', 'winegrower' ),
			'section'  => 'winegrower_footer',
			'settings' => 'winegrower_footer_link_color',
		) ) );

		/**
		 * Footer Background
		 */
		$wp_customize->add_setting( 'winegrower_footer_background_color', array(
			'default'           => apply_filters( 'winegrower_default_footer_background_color', '#f3f3f3' ),
			'sanitize_callback' => 'winegrower_sanitize_hex_color',
			'transport'			=> 'postMessage',
		) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'winegrower_footer_background_color', array(
			'label'	   => __( 'Background color', 'winegrower' ),
			'section'  => 'winegrower_footer',
			'settings' => 'winegrower_footer_background_color',
		) ) );

		/**
		 * Buttons section
		 */
		$wp_customize->add_section( 'winegrower_buttons' , array(
			'title'      	=> __( 'Buttons', 'winegrower' ),
			'priority'   	=> 45,
			'description' 	=> __( 'Customise the look & feel of your web site buttons.', 'winegrower' ),
		) );

		/**
		 * Button background color
		 */
		$wp_customize->add_setting( 'winegrower_button_background_color', array(
			'default'           => apply_filters( 'winegrower_default_button_background_color', '#60646c' ),
			'sanitize_callback' => 'winegrower_sanitize_hex_color',
		) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'winegrower_button_background_color', array(
			'label'	   => __( 'Background color', 'winegrower' ),
			'section'  => 'winegrower_buttons',
			'settings' => 'winegrower_button_background_color',
			'priority' => 10,
		) ) );

		/**
		 * Button text color
		 */
		$wp_customize->add_setting( 'winegrower_button_text_color', array(
			'default'           => apply_filters( 'winegrower_default_button_text_color', '#ffffff' ),
			'sanitize_callback' => 'winegrower_sanitize_hex_color',
		) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'winegrower_button_text_color', array(
			'label'	   => __( 'Text color', 'winegrower' ),
			'section'  => 'winegrower_buttons',
			'settings' => 'winegrower_button_text_color',
			'priority' => 20,
		) ) );

		/**
		 * Button alt background color
		 */
		$wp_customize->add_setting( 'winegrower_button_alt_background_color', array(
			'default'           => apply_filters( 'winegrower_default_button_alt_background_color', '#96588a' ),
			'sanitize_callback' => 'winegrower_sanitize_hex_color',
		) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'winegrower_button_alt_background_color', array(
			'label'	   => __( 'Alternate button background color', 'winegrower' ),
			'section'  => 'winegrower_buttons',
			'settings' => 'winegrower_button_alt_background_color',
			'priority' => 30,
		) ) );

		/**
		 * Button alt text color
		 */
		$wp_customize->add_setting( 'winegrower_button_alt_text_color', array(
			'default'           => apply_filters( 'winegrower_default_button_alt_text_color', '#ffffff' ),
			'sanitize_callback' => 'winegrower_sanitize_hex_color',
		) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'winegrower_button_alt_text_color', array(
			'label'	   => __( 'Alternate button text color', 'winegrower' ),
			'section'  => 'winegrower_buttons',
			'settings' => 'winegrower_button_alt_text_color',
			'priority' => 40,
		) ) );

		/**
		 * Layout
		 */
		$wp_customize->add_section( 'winegrower_layout' , array(
			'title'      	=> __( 'Layout', 'winegrower' ),
			'priority'   	=> 50,
		) );

		$wp_customize->add_setting( 'winegrower_layout', array(
			'default'    		=> 'right',
			'sanitize_callback' => 'winegrower_sanitize_layout',
		) );

		$wp_customize->add_control( new Layout_Picker_winegrower_Control( $wp_customize, 'winegrower_layout', array(
			'label'    => __( 'General layout', 'winegrower' ),
			'section'  => 'winegrower_layout',
			'settings' => 'winegrower_layout',
			'priority' => 1,
		) ) );

		$wp_customize->add_control( new Arbitrary_winegrower_Control( $wp_customize, 'winegrower_divider', array(
			'section'  	=> 'winegrower_layout',
			'type' 		=> 'divider',
			'priority' 	=> 2,
		) ) );

		/**
		 * More
		 */
		if ( apply_filters( 'winegrower_customizer_more', true ) ) {
			$wp_customize->add_section( 'winegrower_more' , array(
				'title'      	=> __( 'More', 'winegrower' ),
				'priority'   	=> 999,
			) );

			$wp_customize->add_setting( 'winegrower_more', array(
				'default'    		=> null,
				'sanitize_callback' => 'sanitize_text_field',
			) );

			$wp_customize->add_control( new More_winegrower_Control( $wp_customize, 'winegrower_more', array(
				'label'    => __( 'Looking for more options?', 'winegrower' ),
				'section'  => 'winegrower_more',
				'settings' => 'winegrower_more',
				'priority' => 1,
			) ) );
		}
	}
}