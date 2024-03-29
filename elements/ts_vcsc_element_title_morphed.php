<?php
    global $VISUAL_COMPOSER_EXTENSIONS;
	if ((class_exists('WPBakeryShortCode')) && (!class_exists('WPBakeryShortCode_TS_VCSC_Title_Morphed'))) {
		class WPBakeryShortCode_TS_VCSC_Title_Morphed extends WPBakeryShortCode {};
	};
    $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_VisualComposer_Element = array(
		"name"                      	=> __( "TS Title Morphed", "ts_visual_composer_extend" ),
		"base"                      	=> "TS_VCSC_Title_Morphed",
		"icon" 	                    	=> "ts-composer-element-icon-title-morphed",
		"category"                  	=> __( "Composium", "ts_visual_composer_extend" ),
		"description"               	=> __("Place a title with morphing effect", "ts_visual_composer_extend"),
		"admin_enqueue_js"        		=> "",
		"admin_enqueue_css"       		=> "",
		"params"                    	=> array(
			// Content Settings
			array(
				"type"              	=> "seperator",
				"param_name"        	=> "seperator_1",
				"seperator"         	=> "Title Content",
			),
			array(
				"type"              	=> "switch_button",
				"heading"               => __( "Add Prefix String", "ts_visual_composer_extend" ),
				"param_name"            => "title_preuse",
				"value"                 => "false",
				"description"           => __( "Switch the toggle if you want to add a fixed pre-string to the animated segments.", "ts_visual_composer_extend" ),
			),
			array(
				"type"              	=> "textfield",
				"heading"           	=> __( "Prefix: String", "ts_visual_composer_extend" ),
				"param_name"        	=> "title_prefix",
				"value"             	=> "",
				"description"       	=> __( "Enter an optional fixed text string to be shown before the animated segments.", "ts_visual_composer_extend" ),
				"dependency"        	=> array( 'element' => "title_preuse", 'value' => 'true' ),
			),
			array(
				"type"                  => "exploded_textarea",
				"heading"               => __( "Title: Strings", "ts_visual_composer_extend" ),
				"param_name"            => "title_strings",
				"value"                 => "",
				"description"           => __( "Enter the individual title strings for the segments to be animated; separate by line break (NO commas allowed).", "ts_visual_composer_extend" ),
			),
			array(
				"type"              	=> "switch_button",
				"heading"               => __( "Add Postfix String", "ts_visual_composer_extend" ),
				"param_name"            => "title_postuse",
				"value"                 => "false",
				"description"           => __( "Switch the toggle if you want to add a fixed post-string to the animated segments.", "ts_visual_composer_extend" ),
			),
			array(
				"type"              	=> "textfield",
				"heading"           	=> __( "Postfix: String", "ts_visual_composer_extend" ),
				"param_name"        	=> "title_postfix",
				"value"             	=> "",
				"description"       	=> __( "Enter an optional fixed text string to be shown after the animated segments.", "ts_visual_composer_extend" ),
				"dependency"        	=> array( 'element' => "title_postuse", 'value' => 'true' ),
			),
			// Switch (Alternative) Title
			array(
				"type"              	=> "seperator",
				"param_name"        	=> "seperator_2",
				"seperator"         	=> "Alternative Title Switch",
			),
			array(
				"type"              	=> "switch_button",
				"heading"               => __( "Use Different Title", "ts_visual_composer_extend" ),
				"param_name"            => "switch_alternate",
				"value"                 => "false",
				"description"           => __( "Switch the toggle if you want to use a different fixed title whenever the element width falls below a certain threshold. Otherwise, the fixed title will be composed out of the prefix, title, and postfix strings as provided above.", "ts_visual_composer_extend" ),
			),
			array(
				"type"              	=> "textfield",
				"heading"           	=> __( "Fixed Title String", "ts_visual_composer_extend" ),
				"param_name"        	=> "switch_title",
				"value"             	=> "",
				"description"       	=> __( "Enter an alternative fixed title string to be shown whenever the element width falls below a certain threshold.", "ts_visual_composer_extend" ),
				"dependency"        	=> array( 'element' => "switch_alternate", 'value' => 'true' ),
			),
			array(
				"type"              	=> "dropdown",
				"heading"           	=> __( "Alternative: Wrapper", "ts_visual_composer_extend" ),
				"param_name"        	=> "switch_wrapper",
				"width"             	=> 150,
				"value"             	=> array(
					__( "H1", "ts_visual_composer_extend" )                      	=> "h1",
					__( "H2", "ts_visual_composer_extend" )                    		=> "h2",
					__( "H3", "ts_visual_composer_extend" )                   		=> "h3",
					__( "H4", "ts_visual_composer_extend" )                   		=> "h4",
					__( "H5", "ts_visual_composer_extend" )                   		=> "h5",
					__( "H6", "ts_visual_composer_extend" )                   		=> "h6",
					__( "DIV", "ts_visual_composer_extend" )                   		=> "div",
				),
				"default"				=> "div",
				"standard"				=> "div",
				"std"					=> "div",
				"description"       	=> __( "Select the wrapper that should be used for the alternative title.", "ts_visual_composer_extend" )
			),
			array(
				"type"              	=> "nouislider",
				"heading"           	=> __( "Alternative: Threshold", "ts_visual_composer_extend" ),
				"param_name"        	=> "switch_trigger",
				"value"             	=> "480",
				"min"               	=> "240",
				"max"               	=> "1024",
                "default"               => "360",
				"standard"				=> "360",
				"std"					=> "360",
				"step"              	=> "1",
				"unit"              	=> 'px',
				"description"       	=> __( "Define the width threshold at which the alternative title should be shown instead.", "ts_visual_composer_extend" ),
			),
			// Style Settings
			array(
				"type"              	=> "seperator",
				"param_name"        	=> "seperator_3",
				"seperator"				=> "Title Styling",
				"group"					=> "Style Settings"
			),	
			array(
				"type"					=> "image_selector",
				"heading"				=> __( "Text: Horizontal Align", "ts_visual_composer_extend" ),
				"param_name"			=> "font_align",
				"template"				=> "alignfull",
				"value"					=> "center",
				"edit_field_class"		=> "vc_col-sm-6 vc_column",
				"description"       	=> __( "Select the horizontal alignment for all sections.", "ts_visual_composer_extend" ),
				"group"					=> "Style Settings"
			),
			array(
				"type"              	=> "dropdown",
				"heading"           	=> __( "Text: Font Weight", "ts_visual_composer_extend" ),
				"param_name"        	=> "font_weight",
				"width"             	=> 150,
				"value"             	=> array(
					__( 'Default', "ts_visual_composer_extend" )  => "inherit",
					__( 'Bold', "ts_visual_composer_extend" )     => "bold",
					__( 'Bolder', "ts_visual_composer_extend" )   => "bolder",
					__( 'Normal', "ts_visual_composer_extend" )   => "normal",
					__( 'Light', "ts_visual_composer_extend" )    => "300",
				),
				"edit_field_class"		=> "vc_col-sm-6 vc_column",
				"group"					=> "Style Settings"
			),
			array(
				"type"              	=> "dropdown",
				"heading"           	=> __( "Text: Transform Effect", "ts_visual_composer_extend" ),
				"param_name"        	=> "font_transform",
				"width"             	=> 300,
				"value"             	=> array(
					__( 'None', "ts_visual_composer_extend" )			=> "none",
					__( 'Capitalize', "ts_visual_composer_extend" )		=> "capitalize",			 
					__( 'Uppercase', "ts_visual_composer_extend" )		=> "uppercase",
					__( 'Lowercase', "ts_visual_composer_extend" )		=> "lowercase",
				),
				"description"       	=> __( "Select the default text transform for all sections.", "ts_visual_composer_extend" ),
				"edit_field_class"		=> "vc_col-sm-6 vc_column",
				"group"					=> "Style Settings"
			),
			array(
				"type"              	=> "dropdown",
				"heading"           	=> __( "Text: Decoration", "ts_visual_composer_extend" ),
				"param_name"        	=> "font_decoration",
				"width"             	=> 300,
				"value"             	=> array(
					__( 'None', "ts_visual_composer_extend" )       	=> "none",
					__( 'Underline', "ts_visual_composer_extend" )		=> "underline",			 
					__( 'Overline', "ts_visual_composer_extend" )		=> "overline",
					__( 'Line Through', "ts_visual_composer_extend" )	=> "line-through",
				),
				"description"       	=> __( "Select the default font decoration for all sections.", "ts_visual_composer_extend" ),
				"edit_field_class"		=> "vc_col-sm-6 vc_column",
				"group"					=> "Style Settings"
			),	
			array(
				"type"              	=> "colorpicker",
				"heading"           	=> __( "Text: Font Color", "ts_visual_composer_extend" ),
				"param_name"        	=> "font_color",
				"value"             	=> "#000000",
				"edit_field_class"		=> "vc_col-sm-6 vc_column",
				"group"					=> "Style Settings"
			),
			array(
				"type"              	=> "fontsmanager",
				"heading"           	=> __( "Font Family", "ts_visual_composer_extend" ),
				"param_name"        	=> "font_family",
				"value"             	=> "",
				"default"				=> "true",
				"connector"				=> "font_type",
				"group"					=> "Style Settings"
			),
			array(
				"type"              	=> "hidden_input",
				"param_name"        	=> "font_type",
				"value"             	=> "",
				"group"					=> "Style Settings"
			),
			array(
				"type"              	=> "nouislider",
				"heading"           	=> __( "Font Size", "ts_visual_composer_extend" ),
				"param_name"        	=> "font_size",
				"value"             	=> "24",
				"min"               	=> "24",
				"max"               	=> "72",
				"step"              	=> "1",
				"unit"              	=> 'px',
				"group"					=> "Style Settings"
			),
			// Switch Title String
			array(
				"type"              	=> "seperator",
				"param_name"        	=> "seperator_4",
				"seperator"				=> "Alternative Title Styling",
				"group"					=> "Style Settings"
			),
			array(
				"type"              	=> "switch_button",
				"heading"               => __( "Alternative: Customize", "ts_visual_composer_extend" ),
				"param_name"            => "switch_custom",
				"value"                 => "false",
				"description"           => __( "Switch the toggle if you want to style the fixed title to be different then the title strings.", "ts_visual_composer_extend" ),
				"group"					=> "Style Settings"
			),		
			array(
				"type"					=> "image_selector",
				"heading"				=> __( "Text: Horizontal Align", "ts_visual_composer_extend" ),
				"param_name"			=> "switch_align",
				"template"				=> "alignfull",
				"value"					=> "center",
				"edit_field_class"		=> "vc_col-sm-6 vc_column",
				"description"       	=> __( "Select the horizontal alignment for the alternative title.", "ts_visual_composer_extend" ),
				"dependency"        	=> array( 'element' => "switch_custom", 'value' => 'true' ),
				"group"					=> "Style Settings"
			),
			array(
				"type"              	=> "dropdown",
				"heading"           	=> __( "Text: Font Weight", "ts_visual_composer_extend" ),
				"param_name"        	=> "switch_weight",
				"width"             	=> 150,
				"value"             	=> array(
					__( 'Default', "ts_visual_composer_extend" )  => "inherit",
					__( 'Bold', "ts_visual_composer_extend" )     => "bold",
					__( 'Bolder', "ts_visual_composer_extend" )   => "bolder",
					__( 'Normal', "ts_visual_composer_extend" )   => "normal",
					__( 'Light', "ts_visual_composer_extend" )    => "300",
				),
				"edit_field_class"		=> "vc_col-sm-6 vc_column",
				"dependency"        	=> array( 'element' => "switch_custom", 'value' => 'true' ),
				"group"					=> "Style Settings"
			),
			array(
				"type"              	=> "dropdown",
				"heading"           	=> __( "Text: Transform Effect", "ts_visual_composer_extend" ),
				"param_name"        	=> "switch_transform",
				"width"             	=> 300,
				"value"             	=> array(
					__( 'None', "ts_visual_composer_extend" )			=> "none",
					__( 'Capitalize', "ts_visual_composer_extend" )		=> "capitalize",			 
					__( 'Uppercase', "ts_visual_composer_extend" )		=> "uppercase",
					__( 'Lowercase', "ts_visual_composer_extend" )		=> "lowercase",
				),
				"description"       	=> __( "Select the default text transform for the alternative title.", "ts_visual_composer_extend" ),
				"edit_field_class"		=> "vc_col-sm-6 vc_column",
				"dependency"        	=> array( 'element' => "switch_custom", 'value' => 'true' ),
				"group"					=> "Style Settings"
			),
			array(
				"type"              	=> "dropdown",
				"heading"           	=> __( "Text: Decoration", "ts_visual_composer_extend" ),
				"param_name"        	=> "switch_decoration",
				"width"             	=> 300,
				"value"             	=> array(
					__( 'None', "ts_visual_composer_extend" )       	=> "none",
					__( 'Underline', "ts_visual_composer_extend" )		=> "underline",			 
					__( 'Overline', "ts_visual_composer_extend" )		=> "overline",
					__( 'Line Through', "ts_visual_composer_extend" )	=> "line-through",
				),
				"description"       	=> __( "Select the default font decoration for the alternative title.", "ts_visual_composer_extend" ),
				"edit_field_class"		=> "vc_col-sm-6 vc_column",
				"dependency"        	=> array( 'element' => "switch_custom", 'value' => 'true' ),
				"group"					=> "Style Settings"
			),	
			array(
				"type"              	=> "colorpicker",
				"heading"           	=> __( "Text: Font Color", "ts_visual_composer_extend" ),
				"param_name"        	=> "switch_color",
				"value"             	=> "#000000",
				"edit_field_class"		=> "vc_col-sm-6 vc_column",
				"dependency"        	=> array( 'element' => "switch_custom", 'value' => 'true' ),
				"group"					=> "Style Settings"
			),
			array(
				"type"              	=> "fontsmanager",
				"heading"           	=> __( "Font Family", "ts_visual_composer_extend" ),
				"param_name"        	=> "switch_family",
				"value"             	=> "",
				"default"				=> "true",
				"connector"				=> "switch_type",
				"dependency"        	=> array( 'element' => "switch_custom", 'value' => 'true' ),
				"group"					=> "Style Settings"
			),
			array(
				"type"              	=> "hidden_input",
				"param_name"        	=> "switch_type",
				"value"             	=> "",
				"dependency"        	=> array( 'element' => "switch_custom", 'value' => 'true' ),
				"group"					=> "Style Settings"
			),
			array(
				"type"              	=> "nouislider",
				"heading"           	=> __( "Font Size", "ts_visual_composer_extend" ),
				"param_name"        	=> "switch_size",
				"value"             	=> "24",
				"min"               	=> "24",
				"max"               	=> "72",
				"step"              	=> "1",
				"unit"              	=> 'px',
				"dependency"        	=> array( 'element' => "switch_custom", 'value' => 'true' ),
				"group"					=> "Style Settings"
			),			
			// Prefix String
			array(
				"type"              	=> "seperator",
				"param_name"        	=> "seperator_5",
				"seperator"				=> "Prefix Styling",
				"dependency"        	=> array( 'element' => "title_preuse", 'value' => 'true' ),
				"group"					=> "Style Settings"
			),
			array(
				"type"              	=> "switch_button",
				"heading"               => __( "Prefix: Customize", "ts_visual_composer_extend" ),
				"param_name"            => "prefix_custom",
				"value"                 => "false",
				"description"           => __( "Switch the toggle if you want to style the prefix string to be different then the title strings.", "ts_visual_composer_extend" ),
				"dependency"        	=> array( 'element' => "title_preuse", 'value' => 'true' ),
				"group"					=> "Style Settings"
			),	
			array(
				"type"              	=> "dropdown",
				"heading"           	=> __( "Prefix: Font Weight", "ts_visual_composer_extend" ),
				"param_name"        	=> "prefix_weight",
				"width"             	=> 150,
				"value"             	=> array(
					__( 'Default', "ts_visual_composer_extend" )  			=> "inherit",
					__( 'Bold', "ts_visual_composer_extend" )     			=> "bold",
					__( 'Bolder', "ts_visual_composer_extend" )   			=> "bolder",
					__( 'Normal', "ts_visual_composer_extend" )   			=> "normal",
					__( 'Light', "ts_visual_composer_extend" )    			=> "300",
				),
				"edit_field_class"		=> "vc_col-sm-6 vc_column",
				"dependency"        	=> array( 'element' => "prefix_custom", 'value' => "true" ),
				"group"					=> "Style Settings"
			),
			array(
				"type"              	=> "dropdown",
				"heading"           	=> __( "Prefix: Transform Effect", "ts_visual_composer_extend" ),
				"param_name"        	=> "prefix_transform",
				"width"             	=> 300,
				"value"             	=> array(
					__( 'None', "ts_visual_composer_extend" )				=> "none",
					__( 'Capitalize', "ts_visual_composer_extend" )			=> "capitalize",			 
					__( 'Uppercase', "ts_visual_composer_extend" )			=> "uppercase",
					__( 'Lowercase', "ts_visual_composer_extend" )			=> "lowercase",
				),
				"description"       	=> __( "Select the text transform for the prefix section.", "ts_visual_composer_extend" ),
				"edit_field_class"		=> "vc_col-sm-6 vc_column",
				"dependency"        	=> array( 'element' => "prefix_custom", 'value' => "true" ),
				"group"					=> "Style Settings"
			),
			array(
				"type"              	=> "dropdown",
				"heading"           	=> __( "Prefix: Decoration", "ts_visual_composer_extend" ),
				"param_name"        	=> "prefix_decoration",
				"width"             	=> 300,
				"value"             	=> array(
					__( 'None', "ts_visual_composer_extend" )       		=> "none",
					__( 'Underline', "ts_visual_composer_extend" )			=> "underline",			 
					__( 'Overline', "ts_visual_composer_extend" )			=> "overline",
					__( 'Line Through', "ts_visual_composer_extend" )		=> "line-through",
				),
				"description"       	=> __( "Select the font decoration for the prefix section.", "ts_visual_composer_extend" ),
				"edit_field_class"		=> "vc_col-sm-6 vc_column",
				"dependency"        	=> array( 'element' => "prefix_custom", 'value' => "true" ),
				"group"					=> "Style Settings"
			),
			array(
				"type"              	=> "colorpicker",
				"heading"           	=> __( "Prefix: Font Color", "ts_visual_composer_extend" ),
				"param_name"        	=> "prefix_color",
				"value"             	=> "#000000",
				"edit_field_class"		=> "vc_col-sm-6 vc_column",
				"dependency"        	=> array( 'element' => "prefix_custom", 'value' => "true" ),
				"group"					=> "Style Settings"
			),
			array(
				"type"              	=> "fontsmanager",
				"heading"           	=> __( "Prefix: Font Family", "ts_visual_composer_extend" ),
				"param_name"        	=> "prefix_family",
				"value"             	=> "",
				"default"				=> "true",
				"connector"				=> "prefix_type",
				"dependency"        	=> array( 'element' => "prefix_custom", 'value' => "true" ),
				"group"					=> "Style Settings"
			),
			array(
				"type"              	=> "hidden_input",
				"param_name"        	=> "prefix_type",
				"value"             	=> "",
				"dependency"        	=> array( 'element' => "prefix_custom", 'value' => "true" ),
				"group"					=> "Style Settings"
			),
			array(
				"type"              	=> "nouislider",
				"heading"           	=> __( "Prefix: Font Size", "ts_visual_composer_extend" ),
				"param_name"        	=> "prefix_size",
				"value"             	=> "75",
				"min"               	=> "50",
				"max"               	=> "100",
				"step"              	=> "1",
				"unit"              	=> '%',
				"dependency"        	=> array( 'element' => "prefix_custom", 'value' => "true" ),
				"description"           => __( "Define the font size as a percentage of the font size used for the main title strings.", "ts_visual_composer_extend" ),
				"group"					=> "Style Settings"
			),
			array(
				"type"              	=> "dropdown",
				"heading"           	=> __( "Prefix: Line Setting", "ts_visual_composer_extend" ),
				"param_name"        	=> "prefix_line",
				"width"             	=> 300,
				"value"             	=> array(
					__( 'Same Line', "ts_visual_composer_extend" )			=> "inline-block",
					__( 'Separate Line', "ts_visual_composer_extend" )		=> "block",
				),
				"description"       	=> __( "Select how the prefix string should be placed in relation to the animated title strings.", "ts_visual_composer_extend" ),
				"edit_field_class"		=> "vc_col-sm-6 vc_column",
				"dependency"        	=> array( 'element' => "prefix_custom", 'value' => "true" ),
				"group"					=> "Style Settings"
			),
			array(
				"type"					=> "image_selector",
				"heading"				=> __( "Prefix: Vertical Align", "ts_visual_composer_extend" ),
				"param_name"			=> "prefix_vertical",
				"template"				=> "vertical",
				"value"					=> "bottom",
				"description"       	=> __( "Select how the prefix string should be placed within the line (will only be effective if the prefix font size is less then 100%).", "ts_visual_composer_extend" ),
				"edit_field_class"		=> "vc_col-sm-6 vc_column",
				"dependency"        	=> array( 'element' => "prefix_line", 'value' => "inline-block" ),
				"group"					=> "Style Settings"
			),
			array(
				"type"              	=> "nouislider",
				"heading"           	=> __( "Prefix: Vertical Offset", "ts_visual_composer_extend" ),
				"param_name"        	=> "prefix_offset",
				"value"             	=> "0",
				"min"               	=> "-20",
				"max"               	=> "20",
				"step"              	=> "1",
				"unit"              	=> 'px',
				"description"       	=> __( "Define an optional offset for the prefix string if you want to fine tune its vertical alignment.", "ts_visual_composer_extend" ),
				"dependency"        	=> array( 'element' => "prefix_line", 'value' => "inline-block" ),
				"group"					=> "Style Settings"
			),		
			// Postfix String
			array(
				"type"              	=> "seperator",
				"param_name"        	=> "seperator_6",
				"seperator"				=> "Postfix Styling",
				"dependency"        	=> array( 'element' => "title_postuse", 'value' => 'true' ),
				"group"					=> "Style Settings"
			),
			array(
				"type"              	=> "switch_button",
				"heading"               => __( "Postfix: Customize", "ts_visual_composer_extend" ),
				"param_name"            => "postfix_custom",
				"value"                 => "false",
				"description"           => __( "Switch the toggle if you want to style the postfix string to be different then the title strings.", "ts_visual_composer_extend" ),
				"dependency"        	=> array( 'element' => "title_postuse", 'value' => 'true' ),
				"group"					=> "Style Settings"
			),
			array(
				"type"              	=> "dropdown",
				"heading"           	=> __( "Postfix: Font Weight", "ts_visual_composer_extend" ),
				"param_name"        	=> "postfix_weight",
				"width"             	=> 150,
				"value"             	=> array(
					__( 'Default', "ts_visual_composer_extend" )  => "inherit",
					__( 'Bold', "ts_visual_composer_extend" )     => "bold",
					__( 'Bolder', "ts_visual_composer_extend" )   => "bolder",
					__( 'Normal', "ts_visual_composer_extend" )   => "normal",
					__( 'Light', "ts_visual_composer_extend" )    => "300",
				),
				"edit_field_class"		=> "vc_col-sm-6 vc_column",
				"dependency"        	=> array( 'element' => "postfix_custom", 'value' => "true" ),
				"group"					=> "Style Settings"
			),			
			array(
				"type"              	=> "dropdown",
				"heading"           	=> __( "Postfix: Transform Effect", "ts_visual_composer_extend" ),
				"param_name"        	=> "postfix_transform",
				"width"             	=> 300,
				"value"             	=> array(
					__( 'None', "ts_visual_composer_extend" )				=> "none",
					__( 'Capitalize', "ts_visual_composer_extend" )			=> "capitalize",			 
					__( 'Uppercase', "ts_visual_composer_extend" )			=> "uppercase",
					__( 'Lowercase', "ts_visual_composer_extend" )			=> "lowercase",
				),
				"description"       	=> __( "Select the text transform for the postfix section.", "ts_visual_composer_extend" ),
				"edit_field_class"		=> "vc_col-sm-6 vc_column",
				"dependency"        	=> array( 'element' => "postfix_custom", 'value' => "true" ),
				"group"					=> "Style Settings"
			),
			array(
				"type"              	=> "dropdown",
				"heading"           	=> __( "Postfix: Decoration", "ts_visual_composer_extend" ),
				"param_name"        	=> "postfix_decoration",
				"width"             	=> 300,
				"value"             	=> array(
					__( 'None', "ts_visual_composer_extend" )       		=> "none",
					__( 'Underline', "ts_visual_composer_extend" )			=> "underline",			 
					__( 'Overline', "ts_visual_composer_extend" )			=> "overline",
					__( 'Line Through', "ts_visual_composer_extend" )		=> "line-through",
				),
				"description"       	=> __( "Select the font decoration for the postfix section.", "ts_visual_composer_extend" ),
				"edit_field_class"		=> "vc_col-sm-6 vc_column",
				"dependency"        	=> array( 'element' => "postfix_custom", 'value' => "true" ),
				"group"					=> "Style Settings"
			),
			array(
				"type"              	=> "colorpicker",
				"heading"           	=> __( "Postfix: Font Color", "ts_visual_composer_extend" ),
				"param_name"        	=> "postfix_color",
				"value"             	=> "#000000",
				"edit_field_class"		=> "vc_col-sm-6 vc_column",
				"dependency"        	=> array( 'element' => "postfix_custom", 'value' => "true" ),
				"group"					=> "Style Settings"
			),
			array(
				"type"              	=> "fontsmanager",
				"heading"           	=> __( "Postfix: Font Family", "ts_visual_composer_extend" ),
				"param_name"        	=> "postfix_family",
				"value"             	=> "",
				"default"				=> "true",
				"connector"				=> "postfix_type",
				"dependency"        	=> array( 'element' => "postfix_custom", 'value' => "true" ),
				"group"					=> "Style Settings"
			),
			array(
				"type"              	=> "hidden_input",
				"param_name"        	=> "postfix_type",
				"value"             	=> "",
				"dependency"        	=> array( 'element' => "postfix_custom", 'value' => "true" ),
				"group"					=> "Style Settings"
			),
			array(
				"type"              	=> "nouislider",
				"heading"           	=> __( "Postfix: Font Size", "ts_visual_composer_extend" ),
				"param_name"        	=> "postfix_size",
				"value"             	=> "75",
				"min"               	=> "50",
				"max"               	=> "100",
				"step"              	=> "1",
				"unit"              	=> '%',
				"dependency"        	=> array( 'element' => "postfix_custom", 'value' => "true" ),
				"description"           => __( "Define the font size as a percentage of the font size used for the main title strings.", "ts_visual_composer_extend" ),
				"group"					=> "Style Settings"
			),
			array(
				"type"              	=> "dropdown",
				"heading"           	=> __( "Postfix: Line Setting", "ts_visual_composer_extend" ),
				"param_name"        	=> "postfix_line",
				"width"             	=> 300,
				"value"             	=> array(
					__( 'Same Line', "ts_visual_composer_extend" )			=> "inline-block",
					__( 'Separate Line', "ts_visual_composer_extend" )		=> "block",
				),
				"description"       	=> __( "Select how the postfix string should be placed in relation to the animated title strings.", "ts_visual_composer_extend" ),
				"edit_field_class"		=> "vc_col-sm-6 vc_column",
				"dependency"        	=> array( 'element' => "postfix_custom", 'value' => "true" ),
				"group"					=> "Style Settings"
			),
			array(
				"type"					=> "image_selector",
				"heading"				=> __( "Postfix: Vertical Align", "ts_visual_composer_extend" ),
				"param_name"			=> "postfix_vertical",
				"template"				=> "vertical",
				"value"					=> "bottom",
				"description"       	=> __( "Select how the postfix string should be placed within the line (will only be effective if the prefix font size is less then 100%).", "ts_visual_composer_extend" ),
				"edit_field_class"		=> "vc_col-sm-6 vc_column",
				"dependency"        	=> array( 'element' => "postfix_line", 'value' => "inline-block" ),
				"group"					=> "Style Settings"
			),
			array(
				"type"              	=> "nouislider",
				"heading"           	=> __( "Postfix: Vertical Offset", "ts_visual_composer_extend" ),
				"param_name"        	=> "postfix_offset",
				"value"             	=> "0",
				"min"               	=> "-20",
				"max"               	=> "20",
				"step"              	=> "1",
				"unit"              	=> 'px',
				"description"       	=> __( "Define an optional offset for the postfix string if you want to fine tune its vertical alignment.", "ts_visual_composer_extend" ),
				"dependency"        	=> array( 'element' => "postfix_line", 'value' => "inline-block" ),
				"group"					=> "Style Settings"
			),		
			// Animation Settings
			array(
				"type"              	=> "seperator",
				"param_name"        	=> "seperator_7",
				"seperator"         	=> "Animation Settings",
				"group"					=> "Animation Settings",
			),
			array(
				"type"              	=> "switch_button",
				"heading"               => __( "Trigger on Viewport", "ts_visual_composer_extend" ),
				"param_name"            => "title_viewport",
				"value"                 => "true",
				"admin_label"			=> true,
				"description"           => __( "Switch the toggle if you want the animation to be triggered upon viewport entry.", "ts_visual_composer_extend" ),
				"edit_field_class"		=> "vc_col-sm-6 vc_column",
				"group" 				=> "Animation Settings",
			),
			array(
				"type"              	=> "switch_button",
				"heading"               => __( "Animate Section Width", "ts_visual_composer_extend" ),
				"param_name"            => "title_effect",
				"value"                 => "false",
				"description"           => __( "Switch the toggle if you want to also animate the width of the section that contains the title strings.", "ts_visual_composer_extend" ),
				"edit_field_class"		=> "vc_col-sm-6 vc_column",
				"group" 				=> "Animation Settings",
			),
			array(
				"type"              	=> "dropdown",
				"heading"           	=> __( "Animation Routine", "ts_visual_composer_extend" ),
				"param_name"        	=> "title_routine",
				"width"             	=> 150,
				"value"             	=> array(
					__( "In-Animation Only", "ts_visual_composer_extend" )    			=> "morphext",
					__( "In + Out Animation", "ts_visual_composer_extend" )				=> "morphist",
				),
				"admin_label"			=> true,
				"description"       	=> __( "Select the animation routine that should be used for the title strings.", "ts_visual_composer_extend" ),
				"group"					=> "Animation Settings",
			),
			array(
				"type"					=> "css3animations",
				"heading"				=> __("In-Animation", "ts_visual_composer_extend"),
				"param_name"			=> "title_animation1",
				"prefix"				=> "ts-viewport-css-",
				"connector"				=> "title_connector1",
				"noneselect"			=> "false",
				"default"				=> "ts-viewport-css-fadeInUp",
				"value"					=> "ts-viewport-css-fadeInUp",
				"admin_label"			=> false,
				"description"			=> __("Select the in-animation for the title strings.", "ts_visual_composer_extend"),
				"group"					=> "Animation Settings",
			),
			array(
				"type"					=> "hidden_input",
				"heading"				=> __( "In-Animation", "ts_visual_composer_extend" ),
				"param_name"			=> "title_connector1",
				"value"					=> "",
				"group"					=> "Animation Settings",
			),
			array(
				"type"					=> "css3animations",
				"heading"				=> __("Out-Animation", "ts_visual_composer_extend"),
				"param_name"			=> "title_animation2",
				"prefix"				=> "ts-viewport-css-",
				"connector"				=> "title_connector2",
				"noneselect"			=> "false",
				"default"				=> "ts-viewport-css-fadeOutUp",
				"value"					=> "ts-viewport-css-fadeOutUp",
				"admin_label"			=> false,
				"description"			=> __("Select the out-animation for the title strings.", "ts_visual_composer_extend"),
				"dependency"        	=> array( 'element' => "title_routine", 'value' => 'morphist' ),
				"group"					=> "Animation Settings",
			),
			array(
				"type"					=> "hidden_input",
				"heading"				=> __( "Out-Animation", "ts_visual_composer_extend" ),
				"param_name"			=> "title_connector2",
				"value"					=> "",
				"dependency"        	=> array( 'element' => "title_routine", 'value' => 'morphist' ),
				"group"					=> "Animation Settings",
			),
			array(
				"type"                  => "nouislider",
				"heading"               => __( "Animation Loops", "ts_visual_composer_extend" ),
				"param_name"            => "title_loops",
				"value"                 => "0",
				"min"                   => "0",
				"max"                   => "200",
				"step"                  => "1",
				"unit"                  => '',
				"description"           => __( "Define how often the title strings should be looped (repeated); set to zero for unlimited loops.", "ts_visual_composer_extend" ),
				"group"					=> "Animation Settings",
			),	
			array(
				"type"                  => "nouislider",
				"heading"               => __( "Animation Speed", "ts_visual_composer_extend" ),
				"param_name"            => "title_speed",
				"value"                 => "2000",
				"min"                   => "500",
				"max"                   => "8000",
				"step"                  => "100",
				"unit"                  => 'ms',
				"admin_label"			=> true,
				"description"           => __( "Define the wait time between the individual title string transitions.", "ts_visual_composer_extend" ),
				"group"					=> "Animation Settings",
			),
			array(
				"type"                  => "nouislider",
				"heading"               => __( "Animation Delay", "ts_visual_composer_extend" ),
				"param_name"            => "title_wait",
				"value"                 => "0",
				"min"                   => "0",
				"max"                   => "2000",
				"step"                  => "100",
				"unit"                  => 'ms',
				"description"           => __( "Define an optional initial delay from when the first animation is triggered and its execution.", "ts_visual_composer_extend" ),
				"group"					=> "Animation Settings",
			),
			// Other Settings
			array(
				"type"              	=> "seperator",
				"param_name"        	=> "seperator_8",
				"seperator"             => "Other Settings",
				"group" 				=> "Other Settings",
			),
			array(
				"type"              	=> "nouislider",
				"heading"           	=> __( "Margin: Top", "ts_visual_composer_extend" ),
				"param_name"        	=> "margin_top",
				"value"             	=> "0",
				"min"               	=> "-50",
				"max"               	=> "200",
				"step"              	=> "1",
				"unit"              	=> 'px',
				"description"       	=> __( "Select the top margin for the element.", "ts_visual_composer_extend" ),
				"group" 				=> "Other Settings",
			),
			array(
				"type"              	=> "nouislider",
				"heading"           	=> __( "Margin: Bottom", "ts_visual_composer_extend" ),
				"param_name"        	=> "margin_bottom",
				"value"             	=> "0",
				"min"               	=> "-50",
				"max"               	=> "200",
				"step"              	=> "1",
				"unit"              	=> 'px',
				"description"       	=> __( "Select the bottom margin for the element.", "ts_visual_composer_extend" ),
				"group" 				=> "Other Settings",
			),
			array(
				"type"              	=> "textfield",
				"heading"           	=> __( "Define ID Name", "ts_visual_composer_extend" ),
				"param_name"        	=> "el_id",
				"value"             	=> "",
				"description"       	=> __( "Enter an unique ID for the element.", "ts_visual_composer_extend" ),
				"group" 				=> "Other Settings",
			),
			array(
				"type"                  => "tag_editor",
				"heading"           	=> __( "Extra Class Names", "ts_visual_composer_extend" ),
				"param_name"            => "el_class",
				"value"                 => "",
				"description"      		=> __( "Enter additional class names for the element.", "ts_visual_composer_extend" ),
				"group" 				=> "Other Settings",
			),
		)
	);	
	if ($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_VisualComposer_LeanMap == "true") {
		return $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_VisualComposer_Element;
	} else {			
		vc_map($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_VisualComposer_Element);
	};
?>