<?php
	global $VISUAL_COMPOSER_EXTENSIONS;
	if ((class_exists('WPBakeryShortCode')) && (!class_exists('WPBakeryShortCode_TS_VCSC_Info_Notice'))) {
		class WPBakeryShortCode_TS_VCSC_Info_Notice extends WPBakeryShortCode {};
	};
    $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_VisualComposer_Element = array(
		"name"                      => __( "TS Info / Notice Panel", "ts_visual_composer_extend" ),
		"base"                      => "TS_VCSC_Info_Notice",
		"icon" 	                    => "ts-composer-element-icon-info-notice",
		"category"                  => __( "Composium", "ts_visual_composer_extend" ),
		"description"               => __("Place an info / notice panel element", "ts_visual_composer_extend"),
		"js_view"     				=> ($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_EditorLivePreview == "true" ? "TS_VCSC_InfoNoticeViewCustom" : ""),
		"admin_enqueue_js"        	=> "",
		"admin_enqueue_css"       	=> "",
		"params"                    => array(
			// Info / Notice Settings
			array(
				"type"              => "seperator",
				"param_name"        => "seperator_1",
				"seperator"         => "Info / Notice Content",
			),				
			// Presets (VC 4.4.0+)
			array(
				'type' 				=> 'params_preset',
				'heading' 			=> __( 'Basic Presets', 'ts_visual_composer_extend' ),
				'param_name' 		=> 'presets',
				'value' 			=> '',
				'options' 			=> array(
					array(
						'label' 	=> __( 'Custom', 'ts_visual_composer_extend' ),
						'value' 	=> '',
						'params' 	=> array(),
					),
					array(
						'label' 	=> __( 'Info Panel - Info', 'ts_visual_composer_extend' ),
						'value' 	=> 'preset_info_info',
						'params' 	=> array(
							'panel_layout' 			=> 'info',
							'panel_type' 			=> 'info',
							'icon_replace'			=> 'false',
							'panel_icon' 			=> ((($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_EditorIconFontsInternal == "true") && ($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Composer_Font_Settings['Font Awesome (VC)']['active'] == 'true')) ? 'fa fa-info-circle' : 'ts-awesome-info-circle'),
						),
					),
					array(
						'label' 	=> __( 'Info Panel - Success', 'ts_visual_composer_extend' ),
						'value' 	=> 'preset_info_success',
						'params' 	=> array(
							'panel_layout' 			=> 'info',
							'panel_type' 			=> 'success',
							'icon_replace'			=> 'false',
							'panel_icon' 			=> ((($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_EditorIconFontsInternal == "true") && ($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Composer_Font_Settings['Font Awesome (VC)']['active'] == 'true')) ? 'fa fa-sun-o' : 'ts-awesome-sun-o'),
						),
					),
					array(
						'label' 	=> __( 'Info Panel - Warning', 'ts_visual_composer_extend' ),
						'value' 	=> 'preset_info_warning',
						'params' 	=> array(
							'panel_layout' 			=> 'info',
							'panel_type' 			=> 'warning',
							'icon_replace'			=> 'false',
							'panel_icon' 			=> ((($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_EditorIconFontsInternal == "true") && ($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Composer_Font_Settings['Font Awesome (VC)']['active'] == 'true')) ? 'fa fa-exclamation-circle' : 'ts-awesome-exclamation-circle'),
						),
					),
					array(
						'label' 	=> __( 'Info Panel - Critical', 'ts_visual_composer_extend' ),
						'value' 	=> 'preset_info_critical',
						'params' 	=> array(
							'panel_layout' 			=> 'info',
							'panel_type' 			=> 'critical',
							'icon_replace'			=> 'false',
							'panel_icon' 			=> ((($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_EditorIconFontsInternal == "true") && ($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Composer_Font_Settings['Font Awesome (VC)']['active'] == 'true')) ? 'fa fa-exclamation-triangle' : 'ts-awesome-exclamation-triangle'),
						),
					),
					array(
						'label' 	=> __( 'Notice Panel - Info', 'ts_visual_composer_extend' ),
						'value' 	=> 'preset_notice_info',
						'params' 	=> array(
							'panel_layout' 			=> 'notice',
							'panel_type' 			=> 'info',
							'icon_replace'			=> 'false',
							'panel_icon' 			=> ((($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_EditorIconFontsInternal == "true") && ($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Composer_Font_Settings['Font Awesome (VC)']['active'] == 'true')) ? 'fa fa-info-circle' : 'ts-awesome-info-circle'),
						),
					),
					array(
						'label' 	=> __( 'Notice Panel - Success', 'ts_visual_composer_extend' ),
						'value' 	=> 'preset_notice_success',
						'params' 	=> array(
							'panel_layout' 			=> 'notice',
							'panel_type' 			=> 'success',
							'icon_replace'			=> 'false',
							'panel_icon' 			=> ((($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_EditorIconFontsInternal == "true") && ($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Composer_Font_Settings['Font Awesome (VC)']['active'] == 'true')) ? 'fa fa-sun-o' : 'ts-awesome-sun-o'),
						),
					),
					array(
						'label' 	=> __( 'Notice Panel - Warning', 'ts_visual_composer_extend' ),
						'value' 	=> 'preset_notice_warning',
						'params' 	=> array(
							'panel_layout' 			=> 'notice',
							'panel_type' 			=> 'warning',
							'icon_replace'			=> 'false',
							'panel_icon' 			=> ((($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_EditorIconFontsInternal == "true") && ($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Composer_Font_Settings['Font Awesome (VC)']['active'] == 'true')) ? 'fa fa-exclamation-circle' : 'ts-awesome-exclamation-circle'),
						),
					),
					array(
						'label' 	=> __( 'Notice Panel - Critical', 'ts_visual_composer_extend' ),
						'value' 	=> 'preset_notice_critical',
						'params' 	=> array(
							'panel_layout' 			=> 'notice',
							'panel_type' 			=> 'critical',
							'icon_replace'			=> 'false',
							'panel_icon' 			=> ((($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_EditorIconFontsInternal == "true") && ($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Composer_Font_Settings['Font Awesome (VC)']['active'] == 'true')) ? 'fa fa-exclamation-triangle' : 'ts-awesome-exclamation-triangle'),
						),
					),
				),
				'description' 		=> __( "Select a predefined design or choose 'Custom' for custom styling; requires VC 4.4.0+.", "ts_visual_composer_extend" ),
			),		
			// Custom Settings				
			array(
				"type"              => "dropdown",
				"heading"           => __( "Panel Layout", "ts_visual_composer_extend" ),
				"param_name"        => "panel_layout",
				"width"             => 150,
				"value"             => array(
					__( "Info Panel", "ts_visual_composer_extend" )				=> "info",
					__( "Notice Panel", "ts_visual_composer_extend" )			=> "notice",
				),
				"admin_label"       => true,
				"description"       => __( "Select the overall layout for the panel.", "ts_visual_composer_extend" ),
			),
			array(
				"type"              => "dropdown",
				"heading"           => __( "Info / Notice Type", "ts_visual_composer_extend" ),
				"param_name"        => "panel_type",
				"width"             => 150,
				"value"             => array(
					__( "Normal", "ts_visual_composer_extend" )					=> "normal",
					__( "Info", "ts_visual_composer_extend" )					=> "info",
					__( "Success", "ts_visual_composer_extend" )				=> "success",
					__( "Warning", "ts_visual_composer_extend" )				=> "warning",
					__( "Critical", "ts_visual_composer_extend" )				=> "critical",
					__( "Custom", "ts_visual_composer_extend" )					=> "custom",
				),
				"admin_label"       => true,
				"description"       => __( "Select the type of info / notice you want to display.", "ts_visual_composer_extend" ),
			),				
			array(
				"type"              => "colorpicker",
				"heading"           => __( "Icon Color", "ts_visual_composer_extend" ),
				"param_name"        => "color_icon",
				"value"             => "#cccccc",
				"description"       => __( "Select the color of the icon for the info / notice panel.", "ts_visual_composer_extend" ),
				"dependency"        => array( 'element' => "panel_type", 'value' => 'custom' ),
			),
			array(
				"type"              => "colorpicker",
				"heading"           => __( "Title Color", "ts_visual_composer_extend" ),
				"param_name"        => "color_title",
				"value"             => "#666666",
				"description"       => __( "Select the color of the title for the info / notice panel.", "ts_visual_composer_extend" ),
				"dependency"        => array( 'element' => "panel_type", 'value' => 'custom' ),
			),
			array(
				"type"              => "colorpicker",
				"heading"           => __( "Border Color", "ts_visual_composer_extend" ),
				"param_name"        => "color_border",
				"value"             => "#cccccc",
				"description"       => __( "Select the border color for the info / notice panel.", "ts_visual_composer_extend" ),
				"dependency"        => array( 'element' => "panel_type", 'value' => 'custom' ),
			),
			array(
				"type"              => "colorpicker",
				"heading"           => __( "Background Color", "ts_visual_composer_extend" ),
				"param_name"        => "color_background",
				"value"             => "#ffffff",
				"description"       => __( "Select the background color for the info / notice panel.", "ts_visual_composer_extend" ),
				"dependency"        => array( 'element' => "panel_type", 'value' => 'custom' ),
			),				
			array(
				"type"				=> "switch_button",
				"heading"           => __( "Use Normal Image", "ts_visual_composer_extend" ),
				"param_name"        => "icon_replace",
				"value"             => "false",
				"description"       => __( "Switch the toggle to either use and icon or a normal image.", "ts_visual_composer_extend" )
			),
			array(
				"type" 				=> "icons_panel",
				'heading' 			=> __( 'Panel Icon', 'ts_visual_composer_extend' ),
				'param_name' 		=> 'panel_icon',
				'value'				=> '',
				"settings" 			=> array(
					"emptyIcon" 			=> true,
					'emptyIconValue'		=> 'transparent',
					"type" 					=> 'extensions',
				),
				"description"       => ($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_EditorVisualSelector == "true" ? __( "Select the icon for your info / notice panel.", "ts_visual_composer_extend" ) : $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_IconSelectorString),
				"dependency"        => array( 'element' => "icon_replace", 'value' => 'false' )
			),			
			array(
				"type"              => "attach_image",
				"heading"           => __( "Panel Image", "ts_visual_composer_extend" ),
				"param_name"        => "panel_image",
				"value"             => "false",
				"description"       => __( "Image must have equal dimensions for scaling purposes (i.e. 100x100).", "ts_visual_composer_extend" ),
				"dependency"        => array( 'element' => "icon_replace", 'value' => 'true' )
			),
			array(
				"type"              => "nouislider",
				"heading"           => __( "Icon / Image Size", "ts_visual_composer_extend" ),
				"param_name"        => "panel_size",
				"value"             => "50",
				"min"               => "0",
				"max"               => "200",
				"step"              => "1",
				"unit"              => 'px',
				"description"       => __( "Select the size for the info / notice panel icon or image.", "ts_visual_composer_extend" ),
			),
			array(
				"type"              => "nouislider",
				"heading"           => __( "Icon / Image Spacer", "ts_visual_composer_extend" ),
				"param_name"        => "panel_spacer",
				"value"             => "15",
				"min"               => "0",
				"max"               => "50",
				"step"              => "1",
				"unit"              => 'px',
				"description"       => __( "Select the space between the icon / image and the main content.", "ts_visual_composer_extend" ),
			),
			// Content Settings
			array(
				"type"              => "seperator",
				"param_name"        => "seperator_2",
				"seperator"			=> "Panel Content",
				"group" 			=> "Panel Content",
			),
			array(
				"type"              => "textfield",
				"heading"           => __( "Panel Title", "ts_visual_composer_extend" ),
				"param_name"        => "panel_title",
				"value"             => "",
				"admin_label"       => true,
				"description"       => __( "Enter an optional title for the info / notice panel.", "ts_visual_composer_extend" ),
				"group" 			=> "Panel Content",
			),
			array(
				"type"				=> "textarea_html",
				"heading"			=> __( "Panel Content", "ts_visual_composer_extend" ),
				"param_name"		=> "content",
				"value"				=> "I am an info or notice panel. Click the edit button to change this text.",
				"description"		=> __( "Create the content for the info / notice element.", "ts_visual_composer_extend" ),
				"group" 			=> "Panel Content",
			),
			// Font Settings
			array(
				"type"              => "seperator",
				"param_name"        => "seperator_3",
				"seperator"			=> "Panel Fonts",
				"group" 			=> "Panel Fonts",
			),
			array(
				"type"				=> "fontsmanager",
				"heading"			=> __( "Title Font Family", "ts_visual_composer_extend" ),
				"param_name"		=> "font_title_family",
				"value"				=> "",
				"default"			=> "true",
				"connector"			=> "font_title_type",
				"description"		=> __( "Select the font to be used for the title text.", "ts_visual_composer_extend" ),
				"group"				=> "Panel Fonts",
			),
			array(
				"type"				=> "hidden_input",
				"param_name"		=> "font_title_type",
				"value"				=> "",
				"group"				=> "Panel Fonts",
			),				
			array(
				"type"				=> "fontsmanager",
				"heading"			=> __( "Content Font Family", "ts_visual_composer_extend" ),
				"param_name"		=> "font_content_family",
				"value"				=> "",
				"default"			=> "true",
				"connector"			=> "font_content_type",
				"description"		=> __( "Select the font to be used for the content text.", "ts_visual_composer_extend" ),
				"group"				=> "Panel Fonts",
			),
			array(
				"type"				=> "hidden_input",
				"param_name"		=> "font_content_type",
				"value"				=> "",
				"group"				=> "Panel Fonts",
			),				
			// Icon Animations
			array(
				"type"              => "seperator",
				"param_name"        => "seperator_4",
				"seperator"			=> "Animations",
				"group" 			=> "Other Settings",
			),
			array(
				"type"				=> "switch_button",
				"heading"           => __( "Add Icon / Image Animation", "ts_visual_composer_extend" ),
				"param_name"        => "animations",
				"value"             => "false",
				"description"       => __( "Switch the toggle if you want to apply animations or a shadow to the icon box.", "ts_visual_composer_extend" ),
				"group" 			=> "Other Settings",
			),
			array(
				"type"              => "dropdown",
				"heading"           => __( "Icon / Image Animation Style", "ts_visual_composer_extend" ),
				"param_name"        => "animation_effect",
				"width"             => 150,
				"value"             => array(
					__( "One Time Effect while Hover", "ts_visual_composer_extend" )    			=> "ts-hover-css-",
					__( "Infinite (Looping) Effect", "ts_visual_composer_extend" )                	=> "ts-infinite-css-",
				),
				"description"       => __( "Select the animation style for the icon / image.", "ts_visual_composer_extend" ),
				"dependency"        => array( 'element' => "animations", 'value' => 'true' ),
				"group" 			=> "Other Settings",
			),
			array(
				"type"				=> "css3animations",
				"heading"			=> __("Icon / Image Animation", "ts_visual_composer_extend"),
				"param_name"		=> "animation_class",
				"prefix"			=> "",
				"connector"			=> "css3animations_in",
				"noneselect"		=> "true",
				"default"			=> "",
				"value"				=> "",
				"admin_label"		=> false,
				"description"		=> __("Select the animation for the icon / image.", "ts_visual_composer_extend"),
				"dependency"        => array( 'element' => "animations", 'value' => 'true' ),
				"group" 			=> "Other Settings",
			),
			array(
				"type"				=> "hidden_input",
				"heading"			=> __( "Icon / Image Animation", "ts_visual_composer_extend" ),
				"param_name"		=> "css3animations_in",
				"value"				=> "",
				"admin_label"		=> true,
				"dependency"        => array( 'element' => "animations", 'value' => 'true' ),
				"group" 			=> "Other Settings",
			),
			// Other Conditionals
			array(
				"type"				=> "seperator",
				"param_name"        => "seperator_5",
				"seperator"			=> "Output Conditions",
				"group"				=> "Other Settings",
			),
			array(
				"type"              => "ts_conditionals",
				"heading"			=> __( "Output Conditions", "ts_visual_composer_extend" ),
				"param_name"        => "conditionals",
				"group"				=> "Other Settings",
			),
			// Other Settings
			array(
				"type"              => "seperator",
				"param_name"        => "seperator_6",
				"seperator"			=> "Other Settings",
				"group" 			=> "Other Settings",
			),
			array(
				"type"              => "nouislider",
				"heading"           => __( "Margin: Top", "ts_visual_composer_extend" ),
				"param_name"        => "margin_top",
				"value"             => "0",
				"min"               => "-50",
				"max"               => "200",
				"step"              => "1",
				"unit"              => 'px',
				"description"       => __( "Select the top margin for the element.", "ts_visual_composer_extend" ),
				"group" 			=> "Other Settings",
			),
			array(
				"type"              => "nouislider",
				"heading"           => __( "Margin: Bottom", "ts_visual_composer_extend" ),
				"param_name"        => "margin_bottom",
				"value"             => "0",
				"min"               => "-50",
				"max"               => "200",
				"step"              => "1",
				"unit"              => 'px',
				"description"       => __( "Select the bottom margin for the element.", "ts_visual_composer_extend" ),
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