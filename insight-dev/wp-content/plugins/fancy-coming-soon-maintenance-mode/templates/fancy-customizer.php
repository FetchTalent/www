<?php
/* Fancy Coming Soon Customizer Options */

 /* Theme Customizer Panel */
 function fancy_coming_soon_customizer( $wp_customize ) {
 	$wp_customize->add_panel( 'fancy_coming_soon_general_panel', array(
 		'priority'    => 1,
 		'title'       => esc_html__( 'Fancy Coming Soon Settings', 'fancy-coming-soon'),
 		 ) 
  	);
	
	
	
	
	/* Section - Coming Soon - General */
	$wp_customize->add_section( 'fancy_coming_soon_section_general', array(
		'title'          => esc_html__( 'General', 'fancy-coming-soon' ),
		'panel'          => 'fancy_coming_soon_general_panel', // Not typically needed.
		'priority'       => 5,
		) 
	);
	
	
	/* Setting - Coming Soon - General */
	$wp_customize->add_setting( 'fancy_coming_soon_preview' ,array(
		'default' => '1',
		'sanitize_callback' => 'fancy_coming_soon_sanitize_text',
	) );
	$wp_customize->add_control( 'fancy_coming_soon_preview', array(
		'label'          => esc_html__( 'Preview Coming Soon Page?', 'fancy-coming-soon' ),
		'description'          => esc_html__( 'Refresh this page page after saving in order to see the change.  This is used to preview your coming soon page in the theme customizer.', 'fancy-coming-soon' ),
		'section' => 'fancy_coming_soon_section_general',
		'type' => 'checkbox',
		'priority'   => 10,
		)
	);
	
	
	/* Setting - Coming Soon - General */
	$wp_customize->add_setting( 'fancy_coming_soon_page_custom_css' ,array(
		'sanitize_callback' => 'fancy_coming_soon_sanitize_text',
	) );
	$wp_customize->add_control( 'fancy_coming_soon_page_custom_css', array(
		'label'          => esc_html__( 'Custom CSS on Coming Soon Page', 'fancy-coming-soon' ),
		'section' => 'fancy_coming_soon_section_general',
		'type' => 'textarea',
		'priority'   => 20,
		)
	);
	
	
	

	
	/* Section - Coming Soon - Background */
	$wp_customize->add_section( 'fancy_coming_soon_section_background', array(
		'title'          => esc_html__( 'Background', 'fancy-coming-soon' ),
		'panel'          => 'fancy_coming_soon_general_panel', // Not typically needed.
		'priority'       => 10,
		) 
	);
	
	/* Setting - Coming Soon - Background */
	$wp_customize->add_setting( 'fancy_coming_soon_background_color', array(
		'default' => '#f5f5f5',
		'sanitize_callback' => 'fancy_coming_soon_sanitize_text',
	) );
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'fancy_coming_soon_background_color', array(
		'label'    => esc_html__( 'Background Color', 'fancy-coming-soon' ),
		'section'  => 'fancy_coming_soon_section_background',
		'priority'   => 10,
	) ) 
	);
	
	/* Setting - General - Background */
	$wp_customize->add_setting( 'fancy_coming_soon_background_image' ,array(
		'default' => plugin_dir_url( __FILE__ ) .'../assets/images/bg.jpg',
		'sanitize_callback' => 'fancy_coming_soon_sanitize_text',
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'fancy_coming_soon_background_image', array(
		'label'    => esc_html__( 'Background Image', 'fancy-coming-soon' ),
		'section' => 'fancy_coming_soon_section_background',
		'priority'   => 20,
		))
	);
	
	/* Setting - Coming Soon - Background */
	$wp_customize->add_setting( 'fancy_coming_soon_background_repeat' ,array(
		'default' =>  'no-repeat',
		'sanitize_callback' => 'fancy_coming_soon_sanitize_text',
	) );
	$wp_customize->add_control( 'fancy_coming_soon_background_repeat', array(
		'label'          => esc_html__( 'Background Repeat', 'fancy-coming-soon' ),
		'section' => 'fancy_coming_soon_section_background',
		'type' => 'radio',
		'priority'   => 30,
		'choices' => array(
	        'no-repeat' => esc_html__( 'No repeat', 'fancy-coming-soon' ),
	        'repeat-all' => esc_html__( 'Tile', 'fancy-coming-soon' ),
	        'repeat-x' => esc_html__( 'Tile Horizontally', 'fancy-coming-soon' ),
	        'repeat-y' => esc_html__( 'Tile Vertically', 'fancy-coming-soon' ),

		 ),
		 
		)
	);
	
	/* Setting - Coming Soon - Background */
	$wp_customize->add_setting( 'fancy_coming_soon_background_position' ,array(
		'default' =>  'center',
		'sanitize_callback' => 'fancy_coming_soon_sanitize_text',
	) );
	$wp_customize->add_control( 'fancy_coming_soon_background_position', array(
		'label'          => esc_html__( 'Background Position', 'fancy-coming-soon' ),
		'section' => 'fancy_coming_soon_section_background',
		'type' => 'radio',
		'priority'   => 40,
		'choices' => array(
	        'left' => esc_html__( 'Left', 'fancy-coming-soon' ),
	        'center' => esc_html__( 'Center', 'fancy-coming-soon' ),
	        'right' => esc_html__( 'Right', 'fancy-coming-soon' ),

		 ),
		 
		)
	);
	
	/* Setting - Coming Soon - Background */
	$wp_customize->add_setting( 'fancy_coming_soon_background_cover' ,array(
		'default' =>  'cover',
		'sanitize_callback' => 'fancy_coming_soon_sanitize_text',
	) );
	$wp_customize->add_control( 'fancy_coming_soon_background_cover', array(
		'label'          => esc_html__( 'Background Cover', 'fancy-coming-soon' ),
		'section' => 'fancy_coming_soon_section_background',
		'type' => 'radio',
		'priority'   => 50,
		'choices' => array(
	        'cover' => esc_html__( 'Cover', 'fancy-coming-soon' ),
	        'auto' => esc_html__( 'Auto', 'fancy-coming-soon' ),

		 ),
		 
		)
	);
	

	
	
	
	
	
	
	
	
	
	
	
	/* Section - Coming Soon - Site Logo */
	$wp_customize->add_section( 'fancy_coming_soon_section_logo', array(
		'title'          => esc_html__( 'Site Logo', 'fancy-coming-soon' ),
		'panel'          => 'fancy_coming_soon_general_panel', // Not typically needed.
		'priority'       => 20,
		) 
	);
	
	/* Setting - General - Site Logo */
	$wp_customize->add_setting( 'fancy_coming_soon_plugin_logo' ,array(
		'default' => plugin_dir_url( __FILE__ ) .'../assets/images/logo.png',
		'sanitize_callback' => 'fancy_coming_soon_sanitize_text',
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'fancy_coming_soon_plugin_logo', array(
		'label'    => esc_html__( 'Logo Image', 'fancy-coming-soon' ),
		'description'    => esc_html__( 'Recommended size: 80px by 80px', 'fancy-coming-soon' ),
		'section' => 'fancy_coming_soon_section_logo',
		'priority'   => 10,
		))
	);
	
	
	
	
	
	
	
	
	
	
	
	
	
	/* Section - Coming Soon - Page Content */
	$wp_customize->add_section( 'fancy_coming_soon_section_page_settings', array(
		'title'          => esc_html__( 'Page Content', 'fancy-coming-soon' ),
		'panel'          => 'fancy_coming_soon_general_panel', // Not typically needed.
		'priority'       => 30,
		) 
	);
	
	/* Setting - Coming Soon - Page Content */
	$wp_customize->add_setting( 'fancy_coming_soon_percentage_completed' ,array(
		'default' =>  '75',
		'sanitize_callback' => 'fancy_coming_soon_sanitize_text',
	) );
	$wp_customize->add_control( 'fancy_coming_soon_percentage_completed', array(
		'label'          => esc_html__( 'Percentage Completed', 'fancy-coming-soon' ),
		'section' => 'fancy_coming_soon_section_page_settings',
		'type' => 'text',
		'priority'   => 10,
		)
	);
	
	/* Setting - Coming Soon - Page Content */
	$wp_customize->add_setting( 'fancy_coming_soon_page_heading' ,array(
		'default' =>  '<h1>Something <strong>really good</strong> is coming <strong>very soon</strong>.</h1>',
		'sanitize_callback' => 'fancy_coming_soon_sanitize_text',
	) );
	$wp_customize->add_control( 'fancy_coming_soon_page_heading', array(
		'label'          => esc_html__( 'Heading', 'fancy-coming-soon' ),
		'section' => 'fancy_coming_soon_section_page_settings',
		'type' => 'textarea',
		'priority'   => 20,
		)
	);
	
	
	/* Setting - Coming Soon - Page Content */
	$wp_customize->add_setting( 'fancy_coming_soon_page_content' ,array(
		'default' =>  'If you have something new you’re looking to launch, you’re going to want to start building a community of people interested in what you’re launching. The Launch template by is the best way to do just that.',
		'sanitize_callback' => 'fancy_coming_soon_sanitize_text',
	) );
	$wp_customize->add_control( 'fancy_coming_soon_page_content', array(
		'label'          => esc_html__( 'Main Content', 'fancy-coming-soon' ),
		'section' => 'fancy_coming_soon_section_page_settings',
		'type' => 'textarea',
		'priority'   => 30,
		)
	);
	
	
	
	/* Setting - Coming Soon - Page Content */
	$wp_customize->add_setting( 'fancy_coming_soon_page_footer' ,array(
		'default' =>  'Designed by <a href="http://www.leeflets.com" rel="nofollow" target="_blank">Jason Schuller</a> & Developed by <a href="http://www.wpkube.com/" rel="nofollow" target="_blank">WP Kube</a>',
		'sanitize_callback' => 'fancy_coming_soon_sanitize_text',
	) );
	$wp_customize->add_control( 'fancy_coming_soon_page_footer', array(
		'label'          => esc_html__( 'Footer Text', 'fancy-coming-soon' ),
		'section' => 'fancy_coming_soon_section_page_settings',
		'type' => 'textarea',
		'priority'   => 40,
		)
	);
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	/* Section - Coming Soon - Social Links */
	$wp_customize->add_section( 'fancy_coming_soon_mailchimp_key', array(
		'title'          => esc_html__( 'MailChimp Form', 'fancy-coming-soon' ),
		'panel'          => 'fancy_coming_soon_general_panel', // Not typically needed.
		'priority'       => 40,
		) 
	);
	
	/* Setting - Coming Soon - Page Content */
	$wp_customize->add_setting( 'fancy_coming_soon_mailchimp_form' ,array(
		'sanitize_callback' => 'fancy_coming_soon_sanitize_text',
	) );
	$wp_customize->add_control( 'fancy_coming_soon_mailchimp_form', array(
		'label'          => esc_html__( 'Disable MailChimp Form', 'fancy-coming-soon' ),
		'section' => 'fancy_coming_soon_mailchimp_key',
		'type' => 'checkbox',
		'priority'   => 10,
		)
	);
	
	
	/* Setting - Coming Soon - Page Content */
	$wp_customize->add_setting( 'fancy_coming_soon_mailchimp_form_url' ,array(
		'sanitize_callback' => 'fancy_coming_soon_sanitize_text',
	) );
	$wp_customize->add_control( 'fancy_coming_soon_mailchimp_form_url', array(
		'label'          => esc_html__( 'MailChimp Form Action URL', 'fancy-coming-soon' ),
		'description'	  => __( 'You can get your form action URL by creating a sign-up form and copying the form action="" field.: <a href="http://kb.mailchimp.com/lists/signup-forms/add-a-signup-form-to-your-website" target="_blank">http://kb.mailchimp.com/lists/signup-forms/add-a-signup-form-to-your-website</a>', 'fancy-coming-soon'),
		'section' => 'fancy_coming_soon_mailchimp_key',
		'type' => 'text',
		'priority'   => 10,
		)
	);
	
	
	/* Setting - Coming Soon - Page Content
	$wp_customize->add_setting( 'fancy_coming_soon_embed_form' ,array(
		'sanitize_callback' => 'fancy_coming_soon_sanitize_text',
	) );
	$wp_customize->add_control( 'fancy_coming_soon_embed_form', array(
		'label'          => esc_html__( 'Optional Newsletter Embed Form', 'fancy-coming-soon' ),
		'description'          => esc_html__( 'Add-in newsletter embed HTML into this box. This can be used for other third party newsletter forms like constant contact. ', 'fancy-coming-soon' ),
		'section' => 'fancy_coming_soon_mailchimp_key',
		'type' => 'textarea',
		'priority'   => 30,
		)
	);
	 */
	
	
	
	
	
	
	
	
	
	
	
	/* Section - Coming Soon - Social Links */
	$wp_customize->add_section( 'fancy_coming_soon_section_social_settings', array(
		'title'          => esc_html__( 'Social Links', 'fancy-coming-soon' ),
		'panel'          => 'fancy_coming_soon_general_panel', // Not typically needed.
		'priority'       => 50,
		) 
	);
	
	/* Setting - Coming Soon - Social Links */
	$wp_customize->add_setting( 'fancy_coming_soon_social_twitter' ,array(
		'default' =>  'https://www.twitter.com/circathemes',
		'sanitize_callback' => 'fancy_coming_soon_sanitize_text',
	) );
	$wp_customize->add_control( 'fancy_coming_soon_social_twitter', array(
		'label'          => esc_html__( 'Twitter', 'fancy-coming-soon' ),
		'section' => 'fancy_coming_soon_section_social_settings',
		'type' => 'text',
		'priority'   => 10,
		)
	);
	
	
	/* Setting - Coming Soon - Social Links */
	$wp_customize->add_setting( 'fancy_coming_soon_social_facebook' ,array(
		'default' =>  'https://www.facebook.com/circathemes',
		'sanitize_callback' => 'fancy_coming_soon_sanitize_text',
	) );
	$wp_customize->add_control( 'fancy_coming_soon_social_facebook', array(
		'label'          => esc_html__( 'Facebook', 'fancy-coming-soon' ),
		'section' => 'fancy_coming_soon_section_social_settings',
		'type' => 'text',
		'priority'   => 20,
		)
	);
	
	
	/* Setting - Coming Soon - Social Links */
	$wp_customize->add_setting( 'fancy_coming_soon_social_email' ,array(
		'default' =>  'you@domain.com',
		'sanitize_callback' => 'fancy_coming_soon_sanitize_text',
	) );
	$wp_customize->add_control( 'fancy_coming_soon_social_email', array(
		'label'          => esc_html__( 'Email', 'fancy-coming-soon' ),
		'section' => 'fancy_coming_soon_section_social_settings',
		'type' => 'text',
		'priority'   => 30,
		)
	);
	
	
	
	
	
	
	
 }
 
add_action( 'customize_register', 'fancy_coming_soon_customizer' );

function fancy_coming_soon_sanitize_text( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}
