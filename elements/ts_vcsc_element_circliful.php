<?php
    global $VISUAL_COMPOSER_EXTENSIONS;    
	$VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_VisualComposer_Element = array(
		"name"                      => __( "TS Counter Circle", "ts_visual_composer_extend" ),
		"base"                      => "TS-VCSC-Circliful",
		"icon" 	                    => "ts-composer-element-icon-circliful",
		"category"                  => __( "Composium", "ts_visual_composer_extend" ),
		"description"               => __("Place a circle counter element", "ts_visual_composer_extend"),
		"admin_enqueue_js"			=> "",
		"admin_enqueue_css"			=> "",
		"params"                    => array(
			// Circliful Settings
			array(
				"type"              => "seperator",
				"param_name"        => "seperator_1",
				"seperator"			=> "Circle Counter Settings",
			),
			array(
				"type"              => "colorpicker",
				"heading"           => __( "Foreground Color", "ts_visual_composer_extend" ),
				"param_name"        => "color_foreground",
				"value"             => "#117d8b",
				"description"       => __( "Define the foreground color of the counter (displaying the animated value).", "ts_visual_composer_extend" ),
			),
			array(
				"type"              => "colorpicker",
				"heading"           => __( "Background Color", "ts_visual_composer_extend" ),
				"param_name"        => "color_background",
				"value"             => "#eeeeee",
				"description"       => __( "Define the background color of the counter (displaying the line on which the animation occurs).", "ts_visual_composer_extend" ),
			),				
			array(
				"type"              => "dropdown",
				"heading"           => __( "Line Border Type", "ts_visual_composer_extend" ),
				"param_name"        => "circle_border",
				"width"             => 150,
				"value"             => array(
					__( 'Default', "ts_visual_composer_extend" )        	=> "default",
					__( 'Inline', "ts_visual_composer_extend" )          	=> "inline",
					__( 'Outline', "ts_visual_composer_extend" )        	=> "outline",
				),
				"description"       => __( "Select what kind of animated line border should be used.", "ts_visual_composer_extend" )
			),				
			array(
				"type"				=> "switch_button",
				"heading"           => __( "Add Inner Circle Color", "ts_visual_composer_extend" ),
				"param_name"        => "circle_fill",
				"value"             => "false",
				"description"       => __( "Switch the toggle if you want to add a color to the inner circle area.", "ts_visual_composer_extend" ),
			),
			array(
				"type"              => "colorpicker",
				"heading"           => __( "Circle Background Color", "ts_visual_composer_extend" ),
				"param_name"        => "circle_inside",
				"value"             => "#ffffff",
				"description"       => __( "Define the background color for the inner circle area.", "ts_visual_composer_extend" ),
				"dependency"        => array( 'element' => "circle_fill", 'value' => 'true' )
			),
			array(
				"type"				=> "switch_button",
				"heading"           => __( "Responsive Circle Counter", "ts_visual_composer_extend" ),
				"param_name"        => "circle_responsive",
				"value"             => "true",
				"description"       => __( "Switch the toggle if you want the circle counter to be responsive", "ts_visual_composer_extend" ),
			),
			array(
				"type"              => "nouislider",
				"heading"           => __( "Maximum Circle Size", "ts_visual_composer_extend" ),
				"param_name"        => "circle_maxsize",
				"value"             => "250",
				"min"               => "1",
				"max"               => "1024",
				"step"              => "1",
				"unit"              => 'px',
				"description"       => __( "Define the maximum allowed size of the circle counter; otherwise maximum available column space will be used.", "ts_visual_composer_extend" ),
				"dependency"        => array( 'element' => "circle_responsive", 'value' => 'true' )
			),
			array(
				"type"              => "nouislider",
				"heading"           => __( "Circle Size", "ts_visual_composer_extend" ),
				"param_name"        => "circle_dimension",
				"value"             => "200",
				"min"               => "1",
				"max"               => "1024",
				"step"              => "1",
				"unit"              => 'px',
				"description"       => __( "Define the fixed size of the circle counter in pixel.", "ts_visual_composer_extend" ),
				"dependency"        => array( 'element' => "circle_responsive", 'value' => 'false' )
			),
			array(
				"type"              => "nouislider",
				"heading"           => __( "Circle Thickness in px", "ts_visual_composer_extend" ),
				"param_name"        => "circle_thickness",
				"value"             => "5",
				"min"               => "1",
				"max"               => "25",
				"step"              => "1",
				"unit"              => 'px',
				"description"       => __( "Define the thickness of the circle lines.", "ts_visual_composer_extend" )
			),
			array(
				"type"				=> "switch_button",
				"heading"           => __( "Show as Half-Circle", "ts_visual_composer_extend" ),
				"param_name"        => "circle_half",
				"value"             => "false",
				"description"       => __( "Switch the toggle if you want to show the circle counter as half-circle.", "ts_visual_composer_extend" ),
			),
			// Circliful Values
			array(
				"type"              => "seperator",
				"param_name"        => "seperator_2",
				"seperator"			=> "Animated Label",
				"group" 			=> "Counter Values",
			),				
			array(
				"type"				=> "switch_button",
				"heading"           => __( "Use Shortcode for Animated Circle Value", "ts_visual_composer_extend" ),
				"param_name"        => "circle_percent_by_shortcode",
				"value"             => "false",
				"description"       => __( "Switch the toggle if you want to use a shortcode to generate the animated circle value.", "ts_visual_composer_extend" ),
				"group" 			=> "Counter Values",
			),
			array(
				"type"              => "nouislider",
				"heading"           => __( "Animated Circle Value", "ts_visual_composer_extend" ),
				"param_name"        => "circle_percent",
				"value"             => "15",
				"min"               => "1",
				"max"               => "100",
				"step"              => "1",
				"unit"              => '%',
				"admin_label"       => true,
				"description"       => __( "Define the value in percent the circle should animate to.", "ts_visual_composer_extend" ),
				"dependency"        => array( 'element' => "circle_percent_by_shortcode", 'value' => 'false' ),
				"group" 			=> "Counter Values",
			),
			array(
				"type"              => "textarea_raw_html",
				"heading"           => __( "Animated Circle Value", "ts_visual_composer_extend" ),
				"param_name"        => "circle_percent_shortcode",
				"value"             => base64_encode(""),
				"description"       => __( "Enter the shortcode that will dynamically generate the animated circle value.", "ts_visual_composer_extend" ),
				"dependency"        => array( 'element' => "circle_percent_by_shortcode", 'value' => 'true' ),
				"group" 			=> "Counter Values",
			),
			array(
				"type"              => "nouislider",
				"heading"           => __( "Animation Speed", "ts_visual_composer_extend" ),
				"param_name"        => "circle_speed",
				"value"             => "1",
				"min"               => "0",
				"max"               => "10",
				"step"              => "1",
				"unit"              => '',
				"description"       => __( "Define the speed of the circle counter animation.", "ts_visual_composer_extend" ),
				"group" 			=> "Counter Values",
			),
			array(
				"type"				=> "switch_button",
				"heading"           => __( "Use Circle Value as Animated Label Value", "ts_visual_composer_extend" ),
				"param_name"        => "circle_value_text_use_percent",
				"value"             => "false",
				"description"       => __( "Switch the toggle if you want to use the circle value as value for the label as well.", "ts_visual_composer_extend" ),
				"group" 			=> "Counter Values",
			),			
			array(
				"type"				=> "switch_button",
				"heading"           => __( "Use Shortcode for Animated Label Value", "ts_visual_composer_extend" ),
				"param_name"        => "circle_value_text_by_shortcode",
				"value"             => "false",
				"description"       => __( "Switch the toggle if you want to use a shortcode to generate the animated label value.", "ts_visual_composer_extend" ),
				"dependency"        => array( 'element' => "circle_value_text_use_percent", 'value' => 'false' ),
				"group" 			=> "Counter Values",
			),
			array(
				"type"              => "textfield",
				"heading"           => __( "Animated Label Value", "ts_visual_composer_extend" ),
				"param_name"        => "circle_value_text",
				"value"             => "",
				"admin_label"       => true,
				"description"       => __( "Enter an optional integer (numeric) value to be used as circle label; can be different from 'Animated Circle Value'.", "ts_visual_composer_extend" ),
				"dependency"        => array( 'element' => "circle_value_text_by_shortcode", 'value' => 'false' ),
				"group" 			=> "Counter Values",
			),
			array(
				"type"              => "textarea_raw_html",
				"heading"           => __( "Animated Label Value", "ts_visual_composer_extend" ),
				"param_name"        => "circle_value_text_shortcode",
				"value"             => base64_encode(""),
				"description"       => __( "Enter the shortcode that will dynamically generate the animated label value.", "ts_visual_composer_extend" ),
				"dependency"        => array( 'element' => "circle_value_text_by_shortcode", 'value' => 'true' ),
				"group" 			=> "Counter Values",
			),
			array(
				"type"              => "textfield",
				"heading"           => __( "Main Text - Prefix Unit", "ts_visual_composer_extend" ),
				"param_name"        => "circle_value_pre",
				"value"             => "",
				"description"       => __( "Enter a prefix (i.e. $) for the animated circle label.", "ts_visual_composer_extend" ),
				"group" 			=> "Counter Values",
			),
			array(
				"type"              => "textfield",
				"heading"           => __( "Main Text - Postfix Unit", "ts_visual_composer_extend" ),
				"param_name"        => "circle_value_post",
				"value"             => "",
				"description"       => __( "Enter a postfix (i.e. %) for the animated circle label.", "ts_visual_composer_extend" ),
				"group" 			=> "Counter Values",
			),
			array(
				"type"              => "dropdown",
				"heading"           => __( "Thousand Seperator", "ts_visual_composer_extend" ),
				"param_name"        => "circle_value_group",
				"width"             => 150,
				"value"             => array(
					__( 'Comma', "ts_visual_composer_extend" )        => ",",
					__( 'Dot', "ts_visual_composer_extend" )          => ".",
					__( 'Space', "ts_visual_composer_extend" )        => " ",
				),
				"description"       => __( "Select a character to separate thousands in the circle label number.", "ts_visual_composer_extend" ),
				"group" 			=> "Counter Values",
			),
			array(
				"type"              => "dropdown",
				"heading"           => __( "Decimals Seperator", "ts_visual_composer_extend" ),
				"param_name"        => "circle_value_seperator",
				"width"             => 150,
				"value"             => array(
					__( 'Dot', "ts_visual_composer_extend" )          => ".",
					__( 'Comma', "ts_visual_composer_extend" )        => ",",
					__( 'Space', "ts_visual_composer_extend" )        => " ",
				),
				"description"       => __( "Select a character to separate thousands in the circle label number.", "ts_visual_composer_extend" ),
				"group" 			=> "Counter Values",
			),
			/*array(
				"type"              => "nouislider",
				"heading"           => __( "Number of Decimals", "ts_visual_composer_extend" ),
				"param_name"        => "circle_value_decimals",
				"value"             => "0",
				"min"               => "0",
				"max"               => "4",
				"step"              => "1",
				"unit"              => '',
				"description"       => __( "Define the number of decimals for the circle label number.", "ts_visual_composer_extend" ),
				"group" 			=> "Counter Values",
			),*/
			array(
				"type"              => "nouislider",
				"heading"           => __( "Font Size", "ts_visual_composer_extend" ),
				"param_name"        => "circle_font_size",
				"value"             => "30",
				"min"               => "10",
				"max"               => "100",
				"step"              => "1",
				"unit"              => 'px',
				"description"       => __( "Define the font-size in px for the animated label value.", "ts_visual_composer_extend" ),
				"group" 			=> "Counter Values",
			),
			array(
				"type"              => "colorpicker",
				"heading"           => __( "Font Color", "ts_visual_composer_extend" ),
				"param_name"        => "circle_font_color",
				"value"             => "#676767",
				"description"       => __( "Define the font color for the animated label value.", "ts_visual_composer_extend" ),
				"edit_field_class"	=> "vc_col-sm-6 vc_column",
				"group" 			=> "Counter Values",
			),
			array(
				"type"              => "dropdown",
				"heading"           => __( "Font Weight", "ts_visual_composer_extend" ),
				"param_name"        => "circle_font_weight",
				"width"             => 200,
				"value"             => array(
					__( 'Default', "ts_visual_composer_extend" )      => "inherit",
					__( 'Bold', "ts_visual_composer_extend" )         => "bold",
					__( 'Bolder', "ts_visual_composer_extend" )       => "bolder",
					__( 'Normal', "ts_visual_composer_extend" )       => "normal",
					__( 'Light', "ts_visual_composer_extend" )        => "300",
				),
				"description"       => __( "Select the font weight for the animated label value.", "ts_visual_composer_extend" ),
				"edit_field_class"	=> "vc_col-sm-6 vc_column",
				"group" 			=> "Counter Values",
			),
			array(
				"type"				=> "fontsmanager",
				"heading"			=> __( "Font Family", "ts_visual_composer_extend" ),
				"param_name"		=> "circle_font_family",
				"value"				=> "",
				"default"			=> "true",
				"connector"			=> "circle_font_type",
				"description"		=> __( "Select the font to be used for the animated label value.", "ts_visual_composer_extend" ),
				"group" 			=> "Counter Values",
			),
			array(
				"type"				=> "hidden_input",
				"param_name"		=> "circle_font_type",
				"value"				=> "",
				"group" 			=> "Counter Values",
			),
			// Info Label (Message)
			array(
				"type"              => "seperator",
				"param_name"        => "seperator_3",
				"seperator"			=> "Info Label",
				"group" 			=> "Counter Values",
			),
			array(
				"type"              => "textfield",
				"heading"           => __( "Info Label", "ts_visual_composer_extend" ),
				"param_name"        => "circle_value_info",
				"value"             => "",
				"admin_label"       => true,
				"description"       => __( "Enter an optional text the inner circle info label; usually what the animated value represents.", "ts_visual_composer_extend" ),
				"group" 			=> "Counter Values",
			),
			array(
				"type"              => "nouislider",
				"heading"           => __( "Font Size (Info)", "ts_visual_composer_extend" ),
				"param_name"        => "circle_info_size",
				"value"             => "15",
				"min"               => "10",
				"max"               => "100",
				"step"              => "1",
				"unit"              => 'px',
				"description"       => __( "Define the font-size in px for the inner circle info label.", "ts_visual_composer_extend" ),
				"group" 			=> "Counter Values",
			),
			array(
				"type"              => "colorpicker",
				"heading"           => __( "Font Color (Info)", "ts_visual_composer_extend" ),
				"param_name"        => "circle_info_color",
				"value"             => "#999999",
				"description"       => __( "Define the font color for the inner circle info label.", "ts_visual_composer_extend" ),
				"edit_field_class"	=> "vc_col-sm-6 vc_column",
				"group" 			=> "Counter Values",
			),
			array(
				"type"              => "dropdown",
				"heading"           => __( "Font Weight (Info)", "ts_visual_composer_extend" ),
				"param_name"        => "circle_info_weight",
				"width"             => 200,
				"value"             => array(
					__( 'Default', "ts_visual_composer_extend" )      => "inherit",
					__( 'Bold', "ts_visual_composer_extend" )         => "bold",
					__( 'Bolder', "ts_visual_composer_extend" )       => "bolder",
					__( 'Normal', "ts_visual_composer_extend" )       => "normal",
					__( 'Light', "ts_visual_composer_extend" )        => "300",
				),
				"description"       => __( "Select the font weight for the inner circle info label.", "ts_visual_composer_extend" ),
				"edit_field_class"	=> "vc_col-sm-6 vc_column",
				"group" 			=> "Counter Values",
			),
			array(
				"type"				=> "fontsmanager",
				"heading"			=> __( "Font Family (Info)", "ts_visual_composer_extend" ),
				"param_name"		=> "circle_info_family",
				"value"				=> "",
				"default"			=> "true",
				"connector"			=> "circle_info_type",
				"description"		=> __( "Select the font to be used for the inner circle info label.", "ts_visual_composer_extend" ),
				"group" 			=> "Counter Values",
			),
			array(
				"type"				=> "hidden_input",
				"param_name"		=> "circle_info_type",
				"value"				=> "",
				"group" 			=> "Counter Values",
			),
			// Circliful Icon / Image
			array(
				"type"              => "seperator",
				"param_name"        => "seperator_4",
				"seperator"			=> "Circle Counter Icon / Image",
				"group" 			=> "Icon / Image",
			),
			array(
				"type"				=> "switch_button",
				"heading"           => __( "Use Normal Image", "ts_visual_composer_extend" ),
				"param_name"        => "circle_icon_replace",
				"value"             => "false",
				"description"       => __( "Switch the toggle if you want to use an image instead of a font icon.", "ts_visual_composer_extend" ),
				"group" 			=> "Icon / Image",
			),
			array(
				"type" 				=> "icons_panel",
				'heading' 			=> __( 'Select Icon', 'ts_visual_composer_extend' ),
				'param_name' 		=> 'circle_icon',
				'value'				=> '',
				"settings" 			=> array(
					"emptyIcon" 			=> true,
					'emptyIconValue'		=> 'transparent',
					"type" 					=> 'extensions',
				),
				"admin_label"       => true,
				"description"       => ($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_EditorVisualSelector == "true" ? __( "Select the an icon for the circle counter.", "ts_visual_composer_extend" ) : $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_IconSelectorString),
				"dependency"        => array( 'element' => "circle_icon_replace", 'value' => 'false' ),
				"group" 			=> "Icon / Image",
			),			
			array(
				"type"              => "attach_image",
				"heading"           => __( "Select Image", "ts_visual_composer_extend" ),
				"param_name"        => "circle_image",
				"value"             => "false",
				"description"       => __( "Image must have equal dimensions for scaling purposes (i.e. 100x100).", "ts_visual_composer_extend" ),
				"dependency"        => array( 'element' => "circle_icon_replace", 'value' => 'true' ),
				"group" 			=> "Icon / Image",
			),
			array(
				"type"              => "colorpicker",
				"heading"           => __( "Icon Color", "ts_visual_composer_extend" ),
				"param_name"        => "circle_icon_color",
				"value"             => "#eeeeee",
				"description"       => __( "Define the color for the circle icon.", "ts_visual_composer_extend" ),
				"dependency"        => array( 'element' => "circle_icon_replace", 'value' => 'false' ),
				"group" 			=> "Icon / Image",
			),
			array(
				"type"              => "dropdown",
				"heading"           => __( "Icon / Image Position", "ts_visual_composer_extend" ),
				"param_name"        => "circle_icon_position",
				"width"             => 150,
				"value"             => array(
					__( 'Left', "ts_visual_composer_extend" )     => "left",
					__( 'Right', "ts_visual_composer_extend" )    => "right",
				),
				"description"       => __( "Select how to position the icon / image in relation to the main text.", "ts_visual_composer_extend" ),
				"group" 			=> "Icon / Image",
			),
			array(
				"type"              => "nouislider",
				"heading"           => __( "Icon / Image Size", "ts_visual_composer_extend" ),
				"param_name"        => "circle_icon_size",
				"value"             => "30",
				"min"               => "10",
				"max"               => "200",
				"step"              => "1",
				"unit"              => 'px',
				"description"       => __( "Select the size for the icon / image used for the circle counter element.", "ts_visual_composer_extend" ),
				"group" 			=> "Icon / Image",
			),			
			// Counter Tooltip
			array(
				"type"				=> "seperator",
				"param_name"		=> "seperator_5",
				"seperator"			=> "Counter Tooltip",
				"group" 			=> "Tooltip Settings",
			),
			array(
				"type"              => ($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_EditorBase64TinyMCE == "true" ? "wysiwyg_base64" : "textarea_raw_html"),
				"heading"           => __( "Tooltip Content", "ts_visual_composer_extend" ),
				"param_name"        => "tooltip_encoded",
				"minimal"			=> "true",
				"value"             => base64_encode(""),
				"description"      	=> __( "Enter the tooltip content here (HTML code can be used).", "ts_visual_composer_extend" ),
				"group" 			=> "Tooltip Settings",
			),
			array(
				"type"				=> "dropdown",
				"heading"			=> __( "Tooltip Position", "ts_visual_composer_extend" ),
				"param_name"		=> "tooltip_position",
				"value"				=> $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_ToolTipster_Vertical,
				"description"		=> __( "Select the tooltip position in relation to the image.", "ts_visual_composer_extend" ),
				"group" 			=> "Tooltip Settings",
			),
			array(
				"type"				=> "dropdown",
				"heading"			=> __( "Tooltip Style", "ts_visual_composer_extend" ),
				"param_name"		=> "tooltip_style",
				"value"             => $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_ToolTipster_Layouts,
				"description"		=> __( "Select the tooltip style.", "ts_visual_composer_extend" ),
				"group" 			=> "Tooltip Settings",
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
				"group" 			=> "Tooltip Settings",
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
				"group" 			=> "Tooltip Settings",
			),			
			// Counter Trigger
			array(
				"type"              => "seperator",
				"param_name"        => "seperator_6",
				"seperator"			=> "Counter Trigger",
				"group" 			=> "Other Settings",
			),
			array(
				"type"				=> "switch_button",
				"heading"           => __( "Trigger on Viewport", "ts_visual_composer_extend" ),
				"param_name"        => "circle_counter_viewport",
				"value"             => "true",
				"description"       => __( "Switch the toggle to trigger the counter on viewport or on pageload.", "ts_visual_composer_extend" ),
				"group" 			=> "Other Settings",
			),
			array(
				"type" 				=> "dropdown",
				"heading" 			=> __( "Viewport Offset", "ts_visual_composer_extend"),
				"param_name" 		=> "circle_counter_offset",
				"value"             => array(
					__( "Full View", "ts_visual_composer_extend" )						=> "full",
					__( "Top View", "ts_visual_composer_extend" )						=> "top",
					__( "Bottom View", "ts_visual_composer_extend" )					=> "bottom",
				),
				"description" 		=> __("Define which part of the element needs to be visible in order to trigger the animation.", "ts_visual_composer_extend"),
				"dependency" 		=> array("element" => "circle_counter_viewport", "value" => "true"),
				"group"				=> "Other Settings",
			),
			array(
				"type"              => "nouislider",
				"heading"           => __( "Viewport Delay", "ts_visual_composer_extend" ),
				"param_name"        => "circle_counter_delay",
				"value"             => "0",
				"min"               => "0",
				"max"               => "10000",
				"step"              => "100",
				"unit"              => 'ms',
				"description"       => "Define the delay in ms after which the animation should start, once initially triggered.",
				"dependency" 		=> array("element" => "circle_counter_viewport", "value" => "true"),
				"group"				=> "Other Settings",
			),
			array(
				"type"				=> "switch_button",
				"heading"           => __( "Repeat on Viewport", "ts_visual_composer_extend" ),
				"param_name"        => "circle_counter_repeat",
				"value"             => "false",
				"description"       => __( "Switch the toggle if you want to restart the counter every time it comes back into viewport.", "ts_visual_composer_extend" ),
				"dependency" 		=> array("element" => "circle_counter_viewport", "value" => "true"),
				"group"				=> "Other Settings",
			),
			// Other Settings
			array(
				"type"              => "seperator",
				"param_name"        => "seperator_7",
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