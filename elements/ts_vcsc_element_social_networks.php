<?php
    global $VISUAL_COMPOSER_EXTENSIONS;
	$social_values 					= get_option('ts_vcsc_extend_settings_socialDefaults', '');
	if (($social_values == false) || (empty($social_values)) || ($social_values == "") || (!is_array($social_values))) {
		$social_values				= array();
	}
	$social_dismiss					= __( "Click here to permanently remove the default value for this social network.", "ts_visual_composer_extend" );
	$social_identifier				= mt_rand(999999, 9999999);
	$VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_VisualComposer_Element = array(
		"name"						=> __( "TS Social Networks", "ts_visual_composer_extend" ),
		"base"						=> "TS-VCSC-Social-Icons",
		"icon"						=> "ts-composer-element-icon-icon-social",
		"category"					=> __("Composium", "ts_visual_composer_extend"),
		"description" 		    	=> __("Place social network links", "ts_visual_composer_extend"),
		"admin_enqueue_js"			=> "",
		"admin_enqueue_css"			=> "",
		"params"					=> array(
			// Main Social Network Settings
			array(
				"type"              => "seperator",
				"param_name"        => "seperator_1",
				"seperator"         => "Icon Settings",
			),
			array(
				"type"              => "dropdown",
				"heading"           => __( "Style", "ts_visual_composer_extend" ),
				"param_name"        => "icon_style",
				"admin_label"       => true,
				"value"             => array(
					"Simple"        		=> "simple",
					"Square"        		=> "square",
					"Rounded"       		=> "rounded",
					"Circle"        		=> "circle",
				),
			),
			array(
				"type"              => "colorpicker",
				"heading"           => __( "Icon Background Color", "ts_visual_composer_extend" ),
				"param_name"        => "icon_background",
				"value"             => "#f5f5f5",
				"dependency"        => array( 'element' => "icon_style", 'value' => array('square', 'rounded', 'circle') )
			),
			array(
				"type"              => "colorpicker",
				"heading"           => __( "Icon Border Color", "ts_visual_composer_extend" ),
				"param_name"        => "icon_frame_color",
				"value"             => "#f5f5f5",
				"dependency"        => array( 'element' => "icon_style", 'value' => array('square', 'rounded', 'circle') )
			),
			array(
				"type"              => "nouislider",
				"heading"           => __( "Icon Frame Border Thickness", "ts_visual_composer_extend" ),
				"param_name"        => "icon_frame_thick",
				"value"             => "1",
				"min"               => "1",
				"max"               => "10",
				"step"              => "1",
				"unit"              => 'px',
				"dependency"        => array( 'element' => "icon_style", 'value' => array('square', 'rounded', 'circle') )
			),
			array(
				"type"              => "nouislider",
				"heading"           => __( "Icon Size", "ts_visual_composer_extend" ),
				"param_name"        => "icon_size",
				"value"             => "20",
				"min"               => "0",
				"max"               => "50",
				"step"              => "1",
				"unit"              => 'px',
			),
			array(
				"type"              => "nouislider",
				"heading"           => __( "Icon Margin", "ts_visual_composer_extend" ),
				"param_name"        => "icon_margin",
				"value"             => "5",
				"min"               => "0",
				"max"               => "50",
				"step"              => "1",
				"unit"              => 'px',
			),
			array(
				"type"              => "nouislider",
				"heading"           => __( "Icon Padding", "ts_visual_composer_extend" ),
				"param_name"        => "icon_padding",
				"value"             => "10",
				"min"               => "0",
				"max"               => "50",
				"step"              => "1",
				"unit"              => 'px',
			),
			array(
				"type"              => "dropdown",
				"heading"           => __( "Icons Align", "ts_visual_composer_extend" ),
				"param_name"        => "icon_align",
				"width"             => 150,
				"value"             => array(
				__( 'Left', "ts_visual_composer_extend" )     => "left",
				__( 'Right', "ts_visual_composer_extend" )    => "right",
				__( 'Center', "ts_visual_composer_extend" )   => "center" ),
				"admin_label"       => true,
			),
			array(
				"type"				=> "css3animations",
				"heading"			=> __("Icons Hover Animation", "ts_visual_composer_extend"),
				"param_name"		=> "icon_hover",
				"prefix"			=> "ts-hover-css-",
				"connector"			=> "css3animations_in",
				"noneselect"		=> "true",
				"default"			=> "",
				"value"				=> "",
				"admin_label"		=> false,
				"description"		=> __("Select the hover animation for the social icons.", "ts_visual_composer_extend"),
			),
			array(
				"type"				=> "hidden_input",
				"heading"			=> __( "Icons Hover Animation", "ts_visual_composer_extend" ),
				"param_name"		=> "css3animations_in",
				"value"				=> "",
				"admin_label"		=> true,
			),
			// Tooltip Settings
			array(
				"type"				=> "seperator",
				"param_name"		=> "seperator_2",
				"seperator"			=> "Tooltips",
				"group" 			=> "Tooltips",
			),
			array(
				"type"              => "switch_button",
				"heading"           => __( "Show Tooltip Title", "ts_visual_composer_extend" ),
				"param_name"        => "tooltip_show",
				"value"             => "false",
				"description"       => __( "Switch the toggle if you want to show a tooltip with the social link information.", "ts_visual_composer_extend" ),
				"group" 			=> "Tooltips",
			),
			array(
				"type"              => "textfield",
				"heading"           => __( "Title Pre Text", "ts_visual_composer_extend" ),
				"param_name"        => "tooltip_text",
				"value"             => "Click here to view our profile on ",
				"description"       => __( "The name of the social network will be added to the end of your text string automatically.", "ts_visual_composer_extend" ),
				"dependency"        => array( 'element' => "tooltip_show", 'value' => 'true' ),
				"group" 			=> "Tooltips",
			),
			array(
				"type"              => "switch_button",
				"heading"			=> __( "Use Advanced Tooltip", "ts_visual_composer_extend" ),
				"param_name"		=> "tooltip_css",
				"value"             => "false",
				"description"		=> __( "Switch the toggle if you want to apply am advanced tooltip to the image.", "ts_visual_composer_extend" ),
				"dependency"        => array( 'element' => "tooltip_show", 'value' => 'true' ),
				"group" 			=> "Tooltips",
			),
			array(
				"type"				=> "dropdown",
				"heading"			=> __( "Tooltip Position", "ts_visual_composer_extend" ),
				"param_name"		=> "tooltip_position",
				"value"				=> $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_ToolTipster_Positions,
				"description"		=> __( "Select the tooltip position in relation to the image.", "ts_visual_composer_extend" ),
				"dependency"		=> array( 'element' => "tooltip_css", 'value' => 'true' ),
				"group" 			=> "Tooltips",
			),
			array(
				"type"				=> "dropdown",
				"heading"			=> __( "Tooltip Style", "ts_visual_composer_extend" ),
				"param_name"		=> "tooltip_style",
				"value"             => $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_ToolTipster_Layouts,
				"description"		=> __( "Select the tooltip style.", "ts_visual_composer_extend" ),
				"dependency"		=> array( 'element' => "tooltip_css", 'value' => 'true' ),
				"group" 			=> "Tooltips",
			),			
			array(
				"type"				=> "dropdown",
				"heading"			=> __( "Tooltip Animation", "ts_visual_composer_extend" ),
				"param_name"		=> "tooltip_animation",
				"value"				=> $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_ToolTipster_Animations,
				"description"		=> __( "Select how the tooltip entry and exit should be animated once triggered.", "ts_visual_composer_extend" ),
				"group"				=> "Tooltips",
				"dependency"		=> array( 'element' => "tooltip_css", 'value' => 'true' ),
			),			
			array(
				"type"				=> "nouislider",
				"heading"			=> __( "Tooltip X-Offset", "ts_visual_composer_extend" ),
				"param_name"		=> "tooltipster_offsetx",
				"value"				=> "0",
				"min"				=> "-100",
				"max"				=> "100",
				"step"				=> "1",
				"unit"				=> 'px',
				"description"		=> __( "Define an optional X-Offset for the tooltip position.", "ts_visual_composer_extend" ),
				"dependency"		=> array( 'element' => "tooltip_css", 'value' => 'true' ),
				"group" 			=> "Tooltips",
			),
			array(
				"type"				=> "nouislider",
				"heading"			=> __( "Tooltip Y-Offset", "ts_visual_composer_extend" ),
				"param_name"		=> "tooltipster_offsety",
				"value"				=> "0",
				"min"				=> "-100",
				"max"				=> "100",
				"step"				=> "1",
				"unit"				=> 'px',
				"description"		=> __( "Define an optional Y-Offset for the tooltip position.", "ts_visual_composer_extend" ),
				"dependency"		=> array( 'element' => "tooltip_css", 'value' => 'true' ),
				"group" 			=> "Tooltips",
			),		
			// Link Settings
			array(
				"type"              => "seperator",
				"param_name"        => "seperator_3",
				"seperator"			=> "Link Settings",
				"group" 			=> "Social Networks",
			),				
			array(
				"type"              => "messenger",
				"param_name"        => "messenger",
				"color"				=> "#BA0000",
				"size"				=> "14",
				"layout"			=> "notice",
				"level"				=> "critical",
				"message"           => __( "In order to permanently remove a default network value from this element, and to prevent the default network from being shown on the frontend (if not replaced by a custom value), you MUST enter a single 'space' sign, using the space button on your keyboard; or use the provided dismiss button for the network to do it for you.", "ts_visual_composer_extend" ),
				"group" 			=> "Social Networks",
			),
			// Social Networks
			array(
				"type"              => "social_networks",
				"heading"           => "<i class='ts-social-icon " . $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Social_Networks_Array['Email']['icon'] . "'></i> " . __( "Email Address", "ts_visual_composer_extend" ) . (((isset($social_values['Email']['link'])) && ($social_values['Email']['link'] != "")) ? "<i class='dashicons-dismiss ts-parameter-socialnetwork-dismiss' data-identifier='email-" . $social_identifier . "' title='" . $social_dismiss . "'></i>" : ""),
				"param_name"        => "email",
				"default"           => (isset($social_values['Email']['link']) ? $social_values['Email']['link'] : ""),
				"identifier"		=> $social_identifier,
				"value"				=> "",
				"group" 			=> "Social Networks",
			),
			array(
				"type"              => "social_networks",
				"heading"           => "<i class='ts-social-icon " . $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Social_Networks_Array['Phone']['icon'] . "'></i> " . __( "Phone Number", "ts_visual_composer_extend" ) . (((isset($social_values['Phone']['link'])) && ($social_values['Phone']['link'] != "")) ? "<i class='dashicons-dismiss ts-parameter-socialnetwork-dismiss' data-identifier='phone-" . $social_identifier . "' title='" . $social_dismiss . "'></i>" : ""),
				"param_name"        => "phone",
				"default"			=> (isset($social_values['Phone']['link']) ? $social_values['Phone']['link'] : ""),
				"identifier"		=> $social_identifier,
				"value"				=> "",
				"group" 			=> "Social Networks",
			),
			array(
				"type"              => "social_networks",
				"heading"           => "<i class='ts-social-icon " . $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Social_Networks_Array['Cell']['icon'] . "'></i> " . __( "Cell Number", "ts_visual_composer_extend" ) . (((isset($social_values['Cell']['link'])) && ($social_values['Cell']['link'] != "")) ? "<i class='dashicons-dismiss ts-parameter-socialnetwork-dismiss' data-identifier='cell-" . $social_identifier . "' title='" . $social_dismiss . "'></i>" : ""),
				"param_name"        => "cell",
				"default"             => (isset($social_values['Cell']['link']) ? $social_values['Cell']['link'] : ""),
				"identifier"		=> $social_identifier,
				"value"				=> "",
				"group" 			=> "Social Networks",
			),
			array(
				"type"              => "social_networks",
				"heading"           => "<i class='ts-social-icon " . $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Social_Networks_Array['Portfolio']['icon'] . "'></i> " . __( "Portfolio URL", "ts_visual_composer_extend" ) . (((isset($social_values['Portfolio']['link'])) && ($social_values['Portfolio']['link'] != "")) ? "<i class='dashicons-dismiss ts-parameter-socialnetwork-dismiss' data-identifier='portfolio-" . $social_identifier . "' title='" . $social_dismiss . "'></i>" : ""),
				"param_name"        => "portfolio",
				"default"			=> (isset($social_values['Portfolio']['link']) ? $social_values['Portfolio']['link'] : ""),
				"identifier"		=> $social_identifier,
				"value"				=> "",
				"group" 			=> "Social Networks",
			),
			array(
				"type"              => "social_networks",
				"heading"           => "<i class='ts-social-icon " . $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Social_Networks_Array['Link']['icon'] . "'></i> " . __( "Other Link URL", "ts_visual_composer_extend" ) . (((isset($social_values['Link']['link'])) && ($social_values['Link']['link'] != "")) ? "<i class='dashicons-dismiss ts-parameter-socialnetwork-dismiss' data-identifier='link-" . $social_identifier . "' title='" . $social_dismiss . "'></i>" : ""),
				"param_name"        => "link",
				"default"			=> (isset($social_values['Link']['link']) ? $social_values['Link']['link'] : ""),
				"identifier"		=> $social_identifier,
				"value"				=> "",
				"group" 			=> "Social Networks",
			),
			array(
				"type"              => "social_networks",
				"heading"           => "<i class='ts-social-icon " . $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Social_Networks_Array['Behance']['icon'] . "'></i> " . __( "Behance URL", "ts_visual_composer_extend" ) . (((isset($social_values['Behance']['link'])) && ($social_values['Behance']['link'] != "")) ? "<i class='dashicons-dismiss ts-parameter-socialnetwork-dismiss' data-identifier='behance-" . $social_identifier . "' title='" . $social_dismiss . "'></i>" : ""),
				"param_name"        => "behance",
				"default"			=> (isset($social_values['Behance']['link']) ? $social_values['Behance']['link'] : ""),
				"identifier"		=> $social_identifier,
				"value"				=> "",
				"group" 			=> "Social Networks",
			),
			array(
				"type"              => "social_networks",
				"heading"           => "<i class='ts-social-icon " . $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Social_Networks_Array['Digg']['icon'] . "'></i> " . __( "Digg URL", "ts_visual_composer_extend" ) . (((isset($social_values['Digg']['link'])) && ($social_values['Digg']['link'] != "")) ? "<i class='dashicons-dismiss ts-parameter-socialnetwork-dismiss' data-identifier='digg-" . $social_identifier . "' title='" . $social_dismiss . "'></i>" : ""),
				"param_name"        => "digg",
				"default"			=> (isset($social_values['Digg']['link']) ? $social_values['Digg']['link'] : ""),
				"identifier"		=> $social_identifier,
				"value"				=> "",
				"group" 			=> "Social Networks",
			),
			array(
				"type"              => "social_networks",
				"heading"           => "<i class='ts-social-icon " . $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Social_Networks_Array['Dribbble']['icon'] . "'></i> " . __( "Dribbble URL", "ts_visual_composer_extend" ) . (((isset($social_values['Dribbble']['link'])) && ($social_values['Dribbble']['link'] != "")) ? "<i class='dashicons-dismiss ts-parameter-socialnetwork-dismiss' data-identifier='dribbble-" . $social_identifier . "' title='" . $social_dismiss . "'></i>" : ""),
				"param_name"        => "dribbble",
				"default"			=> (isset($social_values['Dribbble']['link']) ? $social_values['Dribbble']['link'] : ""),
				"identifier"		=> $social_identifier,
				"value"				=> "",
				"group" 			=> "Social Networks",
			),
			array(
				"type"              => "social_networks",
				"heading"           => "<i class='ts-social-icon " . $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Social_Networks_Array['Dropbox']['icon'] . "'></i> " . __( "Dropbox URL", "ts_visual_composer_extend" ) . (((isset($social_values['Dropbox']['link'])) && ($social_values['Dropbox']['link'] != "")) ? "<i class='dashicons-dismiss ts-parameter-socialnetwork-dismiss' data-identifier='dropbox-" . $social_identifier . "' title='" . $social_dismiss . "'></i>" : ""),
				"param_name"        => "dropbox",
				"default"			=> (isset($social_values['Dropbox']['link']) ? $social_values['Dropbox']['link'] : ""),
				"identifier"		=> $social_identifier,
				"value"				=> "",
				"group" 			=> "Social Networks",
			),
			array(
				"type"              => "social_networks",
				"heading"           => "<i class='ts-social-icon " . $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Social_Networks_Array['Envato']['icon'] . "'></i> " . __( "Envato URL", "ts_visual_composer_extend" ) . (((isset($social_values['Envato']['link'])) && ($social_values['Envato']['link'] != "")) ? "<i class='dashicons-dismiss ts-parameter-socialnetwork-dismiss' data-identifier='envato-" . $social_identifier . "' title='" . $social_dismiss . "'></i>" : ""),
				"param_name"        => "envato",
				"default"			=> (isset($social_values['Envato']['link']) ? $social_values['Envato']['link'] : ""),
				"identifier"		=> $social_identifier,
				"value"				=> "",
				"group" 			=> "Social Networks",
			),
			array(
				"type"              => "social_networks",
				"heading"           => "<i class='ts-social-icon " . $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Social_Networks_Array['EverNote']['icon'] . "'></i> " . __( "Evernote URL", "ts_visual_composer_extend" ) . (((isset($social_values['EverNote']['link'])) && ($social_values['EverNote']['link'] != "")) ? "<i class='dashicons-dismiss ts-parameter-socialnetwork-dismiss' data-identifier='evernote-" . $social_identifier . "' title='" . $social_dismiss . "'></i>" : ""),
				"param_name"        => "evernote",
				"default"			=> (isset($social_values['EverNote']['link']) ? $social_values['EverNote']['link'] : ""),
				"identifier"		=> $social_identifier,
				"value"				=> "",
				"group" 			=> "Social Networks",
			),
			array(
				"type"              => "social_networks",
				"heading"           => "<i class='ts-social-icon " . $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Social_Networks_Array['Facebook']['icon'] . "'></i> " . __( "Facebook URL", "ts_visual_composer_extend" ) . (((isset($social_values['Facebook']['link'])) && ($social_values['Facebook']['link'] != "")) ? "<i class='dashicons-dismiss ts-parameter-socialnetwork-dismiss' data-identifier='facebook-" . $social_identifier . "' title='" . $social_dismiss . "'></i>" : ""),
				"param_name"        => "facebook",
				"default"			=> (isset($social_values['Facebook']['link']) ? $social_values['Facebook']['link'] : ""),
				"identifier"		=> $social_identifier,
				"value"				=> "",
				"group" 			=> "Social Networks",
			),
			array(
				"type"              => "social_networks",
				"heading"           => "<i class='ts-social-icon " . $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Social_Networks_Array['Flickr']['icon'] . "'></i> " . __( "Flickr URL", "ts_visual_composer_extend" ) . (((isset($social_values['Flickr']['link'])) && ($social_values['Flickr']['link'] != "")) ? "<i class='dashicons-dismiss ts-parameter-socialnetwork-dismiss' data-identifier='flickr-" . $social_identifier . "' title='" . $social_dismiss . "'></i>" : ""),
				"param_name"        => "flickr",
				"default"			=> (isset($social_values['Flickr']['link']) ? $social_values['Flickr']['link'] : ""),
				"identifier"		=> $social_identifier,
				"value"				=> "",
				"group" 			=> "Social Networks",
			),
			array(
				"type"              => "social_networks",
				"heading"           => "<i class='ts-social-icon " . $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Social_Networks_Array['Github']['icon'] . "'></i> " . __( "GitHub URL", "ts_visual_composer_extend" ) . (((isset($social_values['Github']['link'])) && ($social_values['Github']['link'] != "")) ? "<i class='dashicons-dismiss ts-parameter-socialnetwork-dismiss' data-identifier='github-" . $social_identifier . "' title='" . $social_dismiss . "'></i>" : ""),
				"param_name"        => "github",
				"default"			=> (isset($social_values['Github']['link']) ? $social_values['Github']['link'] : ""),
				"identifier"		=> $social_identifier,
				"value"				=> "",
				"group" 			=> "Social Networks",
			),
			array(
				"type"              => "social_networks",
				"heading"           => "<i class='ts-social-icon " . $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Social_Networks_Array['Google']['icon'] . "'></i> " . __( "Google Plus URL", "ts_visual_composer_extend" ) . (((isset($social_values['Google']['link'])) && ($social_values['Google']['link'] != "")) ? "<i class='dashicons-dismiss ts-parameter-socialnetwork-dismiss' data-identifier='gplus-" . $social_identifier . "' title='" . $social_dismiss . "'></i>" : ""),
				"param_name"        => "gplus",
				"default"			=> (isset($social_values['Google']['link']) ? $social_values['Google']['link'] : ""),
				"identifier"		=> $social_identifier,
				"value"				=> "",
				"group" 			=> "Social Networks",
			),
			array(
				"type"              => "social_networks",
				"heading"           => "<i class='ts-social-icon " . $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Social_Networks_Array['Instagram']['icon'] . "'></i> " . __( "Instagram URL", "ts_visual_composer_extend" ) . (((isset($social_values['Instagram']['link'])) && ($social_values['Instagram']['link'] != "")) ? "<i class='dashicons-dismiss ts-parameter-socialnetwork-dismiss' data-identifier='instagram-" . $social_identifier . "' title='" . $social_dismiss . "'></i>" : ""),
				"param_name"        => "instagram",
				"default"			=> (isset($social_values['Instagram']['link']) ? $social_values['Instagram']['link'] : ""),
				"identifier"		=> $social_identifier,
				"value"				=> "",
				"group" 			=> "Social Networks",
			),
			array(
				"type"              => "social_networks",
				"heading"           => "<i class='ts-social-icon " . $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Social_Networks_Array['LastFM']['icon'] . "'></i> " . __( "Last-FM URL", "ts_visual_composer_extend" ) . (((isset($social_values['LastFM']['link'])) && ($social_values['LastFM']['link'] != "")) ? "<i class='dashicons-dismiss ts-parameter-socialnetwork-dismiss' data-identifier='lastfm-" . $social_identifier . "' title='" . $social_dismiss . "'></i>" : ""),
				"param_name"        => "lastfm",
				"default"			=> (isset($social_values['LastFM']['link']) ? $social_values['LastFM']['link'] : ""),
				"identifier"		=> $social_identifier,
				"value"				=> "",
				"group" 			=> "Social Networks",
			),
			array(
				"type"              => "social_networks",
				"heading"           => "<i class='ts-social-icon " . $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Social_Networks_Array['LinkedIn']['icon'] . "'></i> " . __( "Linkedin URL", "ts_visual_composer_extend" ) . (((isset($social_values['LinkedIn']['link'])) && ($social_values['LinkedIn']['link'] != "")) ? "<i class='dashicons-dismiss ts-parameter-socialnetwork-dismiss' data-identifier='linkedin-" . $social_identifier . "' title='" . $social_dismiss . "'></i>" : ""),
				"param_name"        => "linkedin",
				"default"			=> (isset($social_values['LinkedIn']['link']) ? $social_values['LinkedIn']['link'] : ""),
				"identifier"		=> $social_identifier,
				"value"				=> "",
				"group" 			=> "Social Networks",
			),
			array(
				"type"              => "social_networks",
				"heading"           => "<i class='ts-social-icon " . $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Social_Networks_Array['Paypal']['icon'] . "'></i> " . __( "Paypal URL", "ts_visual_composer_extend" ) . (((isset($social_values['Paypal']['link'])) && ($social_values['Paypal']['link'] != "")) ? "<i class='dashicons-dismiss ts-parameter-socialnetwork-dismiss' data-identifier='paypal-" . $social_identifier . "' title='" . $social_dismiss . "'></i>" : ""),
				"param_name"        => "paypal",
				"default"			=> (isset($social_values['Paypal']['link']) ? $social_values['Paypal']['link'] : ""),
				"identifier"		=> $social_identifier,
				"value"				=> "",
				"group" 			=> "Social Networks",
			),
			array(
				"type"              => "social_networks",
				"heading"           => "<i class='ts-social-icon " . $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Social_Networks_Array['Picasa']['icon'] . "'></i> " . __( "Picasa URL", "ts_visual_composer_extend" ) . (((isset($social_values['Picasa']['link'])) && ($social_values['Picasa']['link'] != "")) ? "<i class='dashicons-dismiss ts-parameter-socialnetwork-dismiss' data-identifier='picasa-" . $social_identifier . "' title='" . $social_dismiss . "'></i>" : ""),
				"param_name"        => "picasa",
				"default"			=> (isset($social_values['Picasa']['link']) ? $social_values['Picasa']['link'] : ""),
				"identifier"		=> $social_identifier,
				"value"				=> "",
				"group" 			=> "Social Networks",
			),
			array(
				"type"              => "social_networks",
				"heading"           => "<i class='ts-social-icon " . $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Social_Networks_Array['Pinterest']['icon'] . "'></i> " . __( "Pinterest URL", "ts_visual_composer_extend" ) . (((isset($social_values['Pinterest']['link'])) && ($social_values['Pinterest']['link'] != "")) ? "<i class='dashicons-dismiss ts-parameter-socialnetwork-dismiss' data-identifier='pinterest-" . $social_identifier . "' title='" . $social_dismiss . "'></i>" : ""),
				"param_name"        => "pinterest",
				"default"			=> (isset($social_values['Pinterest']['link']) ? $social_values['Pinterest']['link'] : ""),
				"identifier"		=> $social_identifier,
				"value"				=> "",
				"group" 			=> "Social Networks",
			),
			array(
				"type"              => "social_networks",
				"heading"           => "<i class='ts-social-icon " . $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Social_Networks_Array['RSS']['icon'] . "'></i> " . __( "RSS URL", "ts_visual_composer_extend" ) . (((isset($social_values['RSS']['link'])) && ($social_values['RSS']['link'] != "")) ? "<i class='dashicons-dismiss ts-parameter-socialnetwork-dismiss' data-identifier='rss-" . $social_identifier . "' title='" . $social_dismiss . "'></i>" : ""),
				"param_name"        => "rss",
				"default"			=> (isset($social_values['RSS']['link']) ? $social_values['RSS']['link'] : ""),
				"identifier"		=> $social_identifier,
				"value"				=> "",
				"group" 			=> "Social Networks",
			),
			array(
				"type"              => "social_networks",
				"heading"           => "<i class='ts-social-icon " . $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Social_Networks_Array['Skype']['icon'] . "'></i> " . __( "Skype URL", "ts_visual_composer_extend" ) . (((isset($social_values['Skype']['link'])) && ($social_values['Skype']['link'] != "")) ? "<i class='dashicons-dismiss ts-parameter-socialnetwork-dismiss' data-identifier='skype-" . $social_identifier . "' title='" . $social_dismiss . "'></i>" : ""),
				"param_name"        => "skype",
				"default"			=> (isset($social_values['Skype']['link']) ? $social_values['Skype']['link'] : ""),
				"identifier"		=> $social_identifier,
				"value"				=> "",
				"group" 			=> "Social Networks",
			),
			array(
				"type"              => "social_networks",
				"heading"           => "<i class='ts-social-icon " . $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Social_Networks_Array['Soundcloud']['icon'] . "'></i> " . __( "Soundcloud URL", "ts_visual_composer_extend" ) . (((isset($social_values['Soundcloud']['link'])) && ($social_values['Soundcloud']['link'] != "")) ? "<i class='dashicons-dismiss ts-parameter-socialnetwork-dismiss' data-identifier='soundcloud-" . $social_identifier . "' title='" . $social_dismiss . "'></i>" : ""),
				"param_name"        => "soundcloud",
				"default"			=> (isset($social_values['Soundcloud']['link']) ? $social_values['Soundcloud']['link'] : ""),
				"identifier"		=> $social_identifier,
				"value"				=> "",
				"group" 			=> "Social Networks",
			),
			array(
				"type"              => "social_networks",
				"heading"           => "<i class='ts-social-icon " . $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Social_Networks_Array['Spotify']['icon'] . "'></i> " . __( "Spotify URL", "ts_visual_composer_extend" ) . (((isset($social_values['Spotify']['link'])) && ($social_values['Spotify']['link'] != "")) ? "<i class='dashicons-dismiss ts-parameter-socialnetwork-dismiss' data-identifier='spotify-" . $social_identifier . "' title='" . $social_dismiss . "'></i>" : ""),
				"param_name"        => "spotify",
				"default"           => (isset($social_values['Spotify']['link']) ? $social_values['Spotify']['link'] : ""),
				"identifier"		=> $social_identifier,
				"value"				=> "",
				"group" 			=> "Social Networks",
			),
			array(
				"type"              => "social_networks",
				"heading"           => "<i class='ts-social-icon " . $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Social_Networks_Array['StumbleUpon']['icon'] . "'></i> " . __( "StumbleUpon URL", "ts_visual_composer_extend" ) . (((isset($social_values['StumbleUpon']['link'])) && ($social_values['StumbleUpon']['link'] != "")) ? "<i class='dashicons-dismiss ts-parameter-socialnetwork-dismiss' data-identifier='stumbleupon-" . $social_identifier . "' title='" . $social_dismiss . "'></i>" : ""),
				"param_name"        => "stumbleupon",
				"default"			=> (isset($social_values['StumbleUpon']['link']) ? $social_values['StumbleUpon']['link'] : ""),
				"identifier"		=> $social_identifier,
				"value"				=> "",
				"group" 			=> "Social Networks",
			),
			array(
				"type"              => "social_networks",
				"heading"           => "<i class='ts-social-icon " . $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Social_Networks_Array['Tumblr']['icon'] . "'></i> " . __( "Tumblr URL", "ts_visual_composer_extend" ) . (((isset($social_values['Tumblr']['link'])) && ($social_values['Tumblr']['link'] != "")) ? "<i class='dashicons-dismiss ts-parameter-socialnetwork-dismiss' data-identifier='tumblr-" . $social_identifier . "' title='" . $social_dismiss . "'></i>" : ""),
				"param_name"        => "tumblr",
				"default"			=> (isset($social_values['Tumblr']['link']) ? $social_values['Tumblr']['link'] : ""),
				"identifier"		=> $social_identifier,
				"value"				=> "",
				"group" 			=> "Social Networks",
			),
			array(
				"type"              => "social_networks",
				"heading"           => "<i class='ts-social-icon " . $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Social_Networks_Array['Twitter']['icon'] . "'></i> " . __( "Twitter URL", "ts_visual_composer_extend" ) . (((isset($social_values['Twitter']['link'])) && ($social_values['Twitter']['link'] != "")) ? "<i class='dashicons-dismiss ts-parameter-socialnetwork-dismiss' data-identifier='twitter-" . $social_identifier . "' title='" . $social_dismiss . "'></i>" : ""),
				"param_name"        => "twitter",
				"default"			=> (isset($social_values['Twitter']['link']) ? $social_values['Twitter']['link'] : ""),
				"identifier"		=> $social_identifier,
				"value"				=> "",
				"group" 			=> "Social Networks",
			),
			array(
				"type"              => "social_networks",
				"heading"           => "<i class='ts-social-icon " . $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Social_Networks_Array['Vimeo']['icon'] . "'></i> " . __( "Vimeo URL", "ts_visual_composer_extend" ) . (((isset($social_values['Vimeo']['link'])) && ($social_values['Vimeo']['link'] != "")) ? "<i class='dashicons-dismiss ts-parameter-socialnetwork-dismiss' data-identifier='vimeo-" . $social_identifier . "' title='" . $social_dismiss . "'></i>" : ""),
				"param_name"        => "vimeo",
				"default"			=> (isset($social_values['Vimeo']['link']) ? $social_values['Vimeo']['link'] : ""),
				"identifier"		=> $social_identifier,
				"value"				=> "",
				"group" 			=> "Social Networks",
			),
			array(
				"type"              => "social_networks",
				"heading"           => "<i class='ts-social-icon " . $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Social_Networks_Array['VKontakte']['icon'] . "'></i> " . __( "VKontakte URL", "ts_visual_composer_extend" ) . (((isset($social_values['VKontakte']['link'])) && ($social_values['VKontakte']['link'] != "")) ? "<i class='dashicons-dismiss ts-parameter-socialnetwork-dismiss' data-identifier='vkontakte-" . $social_identifier . "' title='" . $social_dismiss . "'></i>" : ""),
				"param_name"        => "vkontakte",
				"default"			=> (isset($social_values['VKontakte']['link']) ? $social_values['VKontakte']['link'] : ""),
				"identifier"		=> $social_identifier,
				"value"				=> "",
				"group" 			=> "Social Networks",
			),
			array(
				"type"              => "social_networks",
				"heading"           => "<i class='ts-social-icon " . $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Social_Networks_Array['Wikipedia']['icon'] . "'></i> " . __( "Wikipedia URL", "ts_visual_composer_extend" ) . (((isset($social_values['Wikipedia']['link'])) && ($social_values['Wikipedia']['link'] != "")) ? "<i class='dashicons-dismiss ts-parameter-socialnetwork-dismiss' data-identifier='wikipedia-" . $social_identifier . "' title='" . $social_dismiss . "'></i>" : ""),
				"param_name"        => "wikipedia",
				"default"			=> (isset($social_values['Wikipedia']['link']) ? $social_values['Wikipedia']['link'] : ""),
				"identifier"		=> $social_identifier,
				"value"				=> "",
				"group" 			=> "Social Networks",
			),
			array(
				"type"              => "social_networks",
				"heading"           => "<i class='ts-social-icon " . $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Social_Networks_Array['Xing']['icon'] . "'></i> " . __( "Xing URL", "ts_visual_composer_extend" ) . (((isset($social_values['Xing']['link'])) && ($social_values['Xing']['link'] != "")) ? "<i class='dashicons-dismiss ts-parameter-socialnetwork-dismiss' data-identifier='xing-" . $social_identifier . "' title='" . $social_dismiss . "'></i>" : ""),
				"param_name"        => "xing",
				"default"			=> (isset($social_values['Xing']['link']) ? $social_values['Xing']['link'] : ""),
				"identifier"		=> $social_identifier,
				"value"				=> "",
				"group" 			=> "Social Networks",
			),
			array(
				"type"              => "social_networks",
				"heading"           => "<i class='ts-social-icon " . $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Social_Networks_Array['YouTube']['icon'] . "'></i> " . __( "Youtube URL", "ts_visual_composer_extend" ) . (((isset($social_values['YouTube']['link'])) && ($social_values['YouTube']['link'] != "")) ? "<i class='dashicons-dismiss ts-parameter-socialnetwork-dismiss' data-identifier='youtube-" . $social_identifier . "' title='" . $social_dismiss . "'></i>" : ""),
				"param_name"        => "youtube",
				"default"			=> (isset($social_values['YouTube']['link']) ? $social_values['YouTube']['link'] : ""),
				"identifier"		=> $social_identifier,
				"value"				=> "",
				"group" 			=> "Social Networks",
			),
			// Other Icon Settings
			array(
				"type"              => "seperator",
				"param_name"        => "seperator_4",
				"seperator"			=> "Other Settings",
				"group" 			=> "Other Settings",
			),
			array(
				"type"              => "textfield",
				"heading"           => __( "Define ID Name", "ts_visual_composer_extend" ),
				"param_name"        => "el_id",
				"value"             => "",
				"description"       => __( "Enter an unique ID for the element.", "ts_visual_composer_extend" ),
				"group" 			=> "Other Settings",
			),
			array(
				"type"				=> "tag_editor",
				"heading"			=> __( "Extra Class Names", "ts_visual_composer_extend" ),
				"param_name"		=> "el_class",
				"value"				=> "",
				"description"		=> __( "Enter additional class names for the element.", "ts_visual_composer_extend" ),
				"group"				=> "Other Settings",
			),
		)
	);	
	if ($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_VisualComposer_LeanMap == "true") {
		return $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_VisualComposer_Element;
	} else {			
		vc_map($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_VisualComposer_Element);
	};
?>