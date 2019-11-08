ti<?php
	global $VISUAL_COMPOSER_EXTENSIONS;	
    $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_VisualComposer_Element = array(
		"name"                          => __( "TS Image Basic Overlay", "ts_visual_composer_extend" ),
		"base"                          => "TS-VCSC-Image-Overlay",
		"icon"                          => "ts-composer-element-icon-image-overlay",
		"class"                         => "ts_vcsc_main_image_overlay",
		"category"                      => __( "Composium", "ts_visual_composer_extend" ),
		"description" 		        	=> __("Place an image with text overlay", "ts_visual_composer_extend"),
		"admin_enqueue_js"            	=> "",
		"admin_enqueue_css"           	=> "",
		"params"                        => array(
			// Image Selection and Dimensions
			array(
				"type"                  => "seperator",
				"param_name"            => "seperator_1",
				"seperator"				=> "Image Selection / Dimensions",
			),
			array(
				"type"                  => "attach_image",
				"holder" 				=> ($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_EditorImagePreview == "true" ? "img" : ""),
				"heading"               => __( "Image", "ts_visual_composer_extend" ),
				"param_name"            => "image",
				"class"					=> "ts_vcsc_holder_image",
				"value"                 => "",
				"admin_label"           => ($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_EditorImagePreview == "true" ? false : true),
				"description"           => __( "Select the image you want to use.", "ts_visual_composer_extend" )
			),
			array(
				"type"             	 	=> "switch_button",
				"heading"			    => __( "Add Custom ALT Attribute", "ts_visual_composer_extend" ),
				"param_name"		    => "attribute_alt",
				"value"				    => "false",
				"description"       	=> __( "Switch the toggle if you want add a custom ALT attribute value, otherwise file name will be set.", "ts_visual_composer_extend" )
			),
			array(
				"type"                  => "textfield",
				"heading"               => __( "Enter ALT Value", "ts_visual_composer_extend" ),
				"param_name"            => "attribute_alt_value",
				"value"                 => "",
				"description"           => __( "Enter a custom value for the ALT attribute for this image.", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "attribute_alt", 'value' => 'true' )
			),
			array(
				"type"             	 	=> "switch_button",
				"heading"               => __( "Use Fixed Image Dimensions", "ts_visual_composer_extend" ),
				"param_name"            => "image_fixed",
				"value"                 => "false",
				"description"       	=> __( "Switch the toggle if you want to use a responsive width in % instead of px.", "ts_visual_composer_extend" )
			),
			array(
				"type"                  => "nouislider",
				"heading"               => __( "Image Width", "ts_visual_composer_extend" ),
				"param_name"            => "image_responsive",
				"value"                 => "100",
				"min"                   => "1",
				"max"                   => "100",
				"step"                  => "1",
				"unit"                  => '%',
				"description"           => __( "Define the image width in %.", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "image_fixed", 'value' => 'false' )
			),
			array(
				"type"                  => "nouislider",
				"heading"               => __( "Image Width", "ts_visual_composer_extend" ),
				"param_name"            => "image_width",
				"value"                 => "300",
				"min"                   => "100",
				"max"                   => "1000",
				"step"                  => "1",
				"unit"                  => 'px',
				"description"           => __( "Define the image width in px.", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "image_fixed", 'value' => 'true' )
			),
			array(
				"type"                  => "nouislider",
				"heading"               => __( "Image Height", "ts_visual_composer_extend" ),
				"param_name"            => "image_height",
				"value"                 => "0",
				"min"                   => "0",
				"max"                   => "750",
				"step"                  => "1",
				"unit"                  => 'px',
				"description"           => __( "Define the image height in px; set to '0' (zero) to use auto-height based on assigned width.", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "image_fixed", 'value' => 'true' )
			),
			array(
				"type"                  => "dropdown",
				"heading"               => __( "Image Position", "ts_visual_composer_extend" ),
				"param_name"            => "image_position",
				"width"                 => 300,
				"value"					=> array(
					__( "Center", "ts_visual_composer_extend" )                         => "ts-imagefloat-center",
					__( "Float Left", "ts_visual_composer_extend" )                     => "ts-imagefloat-left",
					__( "Float Right", "ts_visual_composer_extend" )                    => "ts-imagefloat-right",
				),
				"description"           => __( "Define how to position the image.", "ts_visual_composer_extend" ),
			),
			// Hover Styles
			array(
				"type"                  => "seperator",
				"param_name"            => "seperator_2",
				"seperator"				=> "Hover Styles",
			),
			array(
				"type"                  => "dropdown",
				"heading"               => __( "Hover Style", "ts_visual_composer_extend" ),
				"param_name"            => "hover_type",
				"width"                 => 300,
				"value"					=> array(
					__( "Style 1", "ts_visual_composer_extend" )                        => "ts-imagehover-style1",
					__( "Style 2", "ts_visual_composer_extend" )                        => "ts-imagehover-style2",
					__( "Style 3", "ts_visual_composer_extend" )                        => "ts-imagehover-style3",
					__( "Style 4", "ts_visual_composer_extend" )                        => "ts-imagehover-style4",
					__( "Style 5", "ts_visual_composer_extend" )                        => "ts-imagehover-style5",
					__( "Style 6", "ts_visual_composer_extend" )                        => "ts-imagehover-style6",
					__( "Style 7", "ts_visual_composer_extend" )                        => "ts-imagehover-style7",
					__( "Style 8", "ts_visual_composer_extend" )                        => "ts-imagehover-style8",
				),
				"admin_label"           => true,
				"description"           => __( "Select the overlay effect for the image.", "ts_visual_composer_extend" )
			),
			array(
				"type"					=> "dropdown",
				"heading"				=> __( "Overlay Trigger", "ts_visual_composer_extend" ),
				"param_name"			=> "overlay_trigger",
				"value"					=> array(
					__( "Hover", "ts_visual_composer_extend" )                          => "ts-trigger-hover",
					__( "Click", "ts_visual_composer_extend" )                          => "ts-trigger-click",
				),
				"admin_label"           => true,
			),
			array(
				"type"              	=> "dropdown",
				"heading"           	=> __( "Border Type", "ts_visual_composer_extend" ),
				"param_name"        	=> "frame_type",
				"width"             	=> 300,
				"value"             	=> array(
					__( "None", "ts_visual_composer_extend" )                          => "",
					__( "Solid Border", "ts_visual_composer_extend" )                  => "solid",
					__( "Dotted Border", "ts_visual_composer_extend" )                 => "dotted",
					__( "Dashed Border", "ts_visual_composer_extend" )                 => "dashed",
					__( "Double Border", "ts_visual_composer_extend" )                 => "double",
					__( "Grouve Border", "ts_visual_composer_extend" )                 => "groove",
					__( "Ridge Border", "ts_visual_composer_extend" )                  => "ridge",
					__( "Inset Border", "ts_visual_composer_extend" )                  => "inset",
					__( "Outset Border", "ts_visual_composer_extend" )                 => "outset",
				),
				"admin_label"           => true,
				"description"       	=> __( "Select the type of border around the icon / image.", "ts_visual_composer_extend" ),
			),
			array(
				"type"              	=> "nouislider",
				"heading"           	=> __( "Border Thickness", "ts_visual_composer_extend" ),
				"param_name"        	=> "frame_thick",
				"value"             	=> "1",
				"min"               	=> "1",
				"max"               	=> "10",
				"step"              	=> "1",
				"unit"              	=> 'px',
				"description"       	=> __( "Define the thickness of the icon / image border.", "ts_visual_composer_extend" ),
				"dependency"        	=> array( 'element' => "frame_type", 'value' => $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Border_Type_Values )
			),
			array(
				"type"              	=> "colorpicker",
				"heading"           	=> __( "Border Color", "ts_visual_composer_extend" ),
				"param_name"        	=> "frame_color",
				"value"             	=> "#000000",
				"description"       	=> __( "Define the color of the icon / image border.", "ts_visual_composer_extend" ),
				"dependency"        	=> array( 'element' => "frame_type", 'value' => $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_Border_Type_Values )
			),
			array(
				"type"					=> "switch_button",
				"heading"				=> __( "Show Overlay on Start", "ts_visual_composer_extend" ),
				"param_name"			=> "hover_active",
				"value"					=> "false",
				"description"			=> __( "Switch the toggle if you want to show the overlay on page load.", "ts_visual_composer_extend" ),
				"dependency"			=> array( 'element' => "overlay_trigger", 'value' => array('ts-trigger-click') ),
			),
			array(
				"type"             	 	=> "switch_button",
				"heading"               => __( "Show Overlay Handle", "ts_visual_composer_extend" ),
				"param_name"            => "overlay_handle_show",
				"value"                 => "true",
				"edit_field_class"		=> "vc_col-sm-6 vc_column",
				"description"       	=> __( "Use the toggle to show or hide a handle button below the image.", "ts_visual_composer_extend" )
			),
			array(
				"type"                  => "colorpicker",
				"heading"               => __( "Handle Color", "ts_visual_composer_extend" ),
				"param_name"            => "overlay_handle_color",
				"value"                 => "#0094FF",
				"edit_field_class"		=> "vc_col-sm-6 vc_column",
				"description"           => __( "Define the color for the overlay handle button.", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "overlay_handle_show", 'value' => 'true' )
			),
			// Hover Title
			array(
				"type"                  => "seperator",
				"param_name"            => "seperator_3",
				"seperator"				=> "Hover Title",
				"group" 				=> "Hover Content",
			),
			array(
				"type"                  => "textfield",
				"heading"               => __( "Title", "ts_visual_composer_extend" ),
				"param_name"            => "title",
				"value"                 => "",
				"description"	        => __( "Enter the title for the overlay content.", "ts_visual_composer_extend" ),
				"group" 				=> "Hover Content",
			),
			array(
				"type"					=> "dropdown",
				"heading"				=> __( "Title Wrap", "ts_visual_composer_extend" ),
				"param_name"			=> "title_wrap",
				"width"					=> 150,
				"value"					=> array(
					__( "Standard DIV", "ts_visual_composer_extend" )		=> "div",
					__( "H1", "ts_visual_composer_extend" )					=> "h1",
					__( "H2", "ts_visual_composer_extend" )					=> "h2",
					__( "H3", "ts_visual_composer_extend" )					=> "h3",
					__( "H4", "ts_visual_composer_extend" )					=> "h4",
					__( "H5", "ts_visual_composer_extend" )					=> "h5",
					__( "H6", "ts_visual_composer_extend" )					=> "h6",
				),
				"description"			=> __( "Select in which DOM element type the title should be wrapped in; specific theme styling might apply.", "ts_visual_composer_extend" ),
				"standard"				=> "h3",
				"std"					=> "h3",
				"default"				=> "h3",
				"group" 				=> "Hover Content",
			),	
			array(
				"type"              	=> "fontsmanager",
				"heading"           	=> __( "Title: Font Family", "ts_visual_composer_extend" ),
				"param_name"        	=> "font_titlefamily",
				"value"             	=> "",
				"default"				=> "true",
				"connector"				=> "font_titletype",
				"group"					=> "Hover Content",
			),
			array(
				"type"              	=> "hidden_input",
				"param_name"        	=> "font_titletype",
				"value"             	=> "",
				"group"					=> "Hover Content",
			),
			array(
				"type"                  => "seperator",
				"param_name"            => "seperator_4",
				"seperator"				=> "Hover Message",
				"group" 				=> "Hover Content",
			),
			array(
				"type"					=> "switch_button",
				"heading"           	=> __( "Allow HTML Code", "ts_visual_composer_extend" ),
				"param_name"        	=> "message_code",
				"value"             	=> "false",
				"description"       	=> __( "Switch the toggle to allow for HTML code to create the overlay content.", "ts_visual_composer_extend" ),
				"group" 				=> "Hover Content",
			),
			array(
				"type"                  => "textarea",
				"heading"               => __( "Message", "ts_visual_composer_extend" ),
				"param_name"            => "message",
				"value"                 => "",
				"description"	        => __( "Enter the main content for the image overlay; HTML code can NOT be used.", "ts_visual_composer_extend" ),
				"dependency"        	=> array( 'element' => "message_code", 'value' => 'false' ),
				"group" 				=> "Hover Content",
			),
			array(
				"type"              	=> ($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_EditorBase64TinyMCE == "true" ? "wysiwyg_base64" : "textarea_raw_html"),
				"heading"           	=> __( "Message", "ts_visual_composer_extend" ),
				"param_name"        	=> "message_html",
				"minimal"				=> "true",
				"value"             	=> base64_encode(""),
				"description"       	=> __( "Enter the main content for the image overlay; HTML code CAN be used.", "ts_visual_composer_extend" ),
				"dependency"        	=> array( 'element' => "message_code", 'value' => 'true' ),
				"group" 				=> "Hover Content",
			),
			array(
				"type"              	=> "fontsmanager",
				"heading"           	=> __( "Message: Font Family", "ts_visual_composer_extend" ),
				"param_name"        	=> "font_textfamily",
				"value"             	=> "",
				"default"				=> "true",
				"connector"				=> "font_texttype",
				"group"					=> "Hover Content",
			),
			array(
				"type"              	=> "hidden_input",
				"param_name"        	=> "font_texttype",
				"value"             	=> "",
				"group"					=> "Hover Content",
			),
			array(
				"type"					=> "switch_button",
				"heading"           	=> __( "Message: Truncation", "ts_visual_composer_extend" ),
				"param_name"        	=> "message_truncate",
				"value"             	=> "false",
				"description"       	=> __( "Switch the toggle if you want to automatically truncate the message via JS if the container is too small to show all elements.", "ts_visual_composer_extend" ),
				"group" 				=> "Hover Content",
			),
			// Hover Link
			array(
				"type"                  => "seperator",
				"param_name"            => "seperator_5",
				"seperator"				=> "Hover Link",
				"group" 				=> "Hover Content",
			),
			array(
				"type"					=> "switch_button",
				"heading"           	=> __( "Text Button", "ts_visual_composer_extend" ),
				"param_name"        	=> "button_style",
				"value"             	=> "true",
				"description"       	=> __( "Switch the toggle to display a normal text button or icon button.", "ts_visual_composer_extend" ),
				"group" 				=> "Hover Content",
			),
			array(
				"type"			        => "textfield",
				"heading"		        => __( "Button: Text", "ts_visual_composer_extend" ),
				"param_name"	        => "button_text",
				"value"			        => "Read More",
				"description"	        => __( "Enter the text to be shown in the overlay link button.", "ts_visual_composer_extend" ),
				"dependency"        	=> array( 'element' => "button_style", 'value' => 'true' ),
				"group" 				=> "Hover Content",
			),
			array(
				"type"              	=> "fontsmanager",
				"heading"           	=> __( "Button: Font Family", "ts_visual_composer_extend" ),
				"param_name"        	=> "font_buttonfamily",
				"value"             	=> "",
				"default"				=> "true",
				"connector"				=> "font_buttontype",
				"dependency"        	=> array( 'element' => "button_style", 'value' => 'true' ),
				"group"					=> "Hover Content",
			),
			array(
				"type"              	=> "hidden_input",
				"param_name"        	=> "font_buttontype",
				"value"             	=> "",
				"dependency"        	=> array( 'element' => "button_style", 'value' => 'true' ),
				"group"					=> "Hover Content",
			),
			array(
				"type"			        => "textfield",
				"heading"               => __( "Button: URL", "ts_visual_composer_extend" ),
				"param_name"	        => "button_url",
				"value"			        => "",
				"description"	        => __( "Enter the URL for the image overlay link (start with http://).", "ts_visual_composer_extend" ),
				"group" 				=> "Hover Content",
			),
			array(
				"type"			        => "dropdown",
				"heading"               => __( "Button: Link Target", "ts_visual_composer_extend" ),
				"param_name"	        => "button_target",
				"value"                 => array(
					__( "Same Window", "ts_visual_composer_extend" )                    => "_parent",
					__( "New Window", "ts_visual_composer_extend" )                     => "_blank"
				),
				"description"	        => __( "Select how the image link should be opened.", "ts_visual_composer_extend" ),
				"group" 				=> "Hover Content",
			),
			// Hover Styling
			array(
				"type"                  => "seperator",
				"param_name"            => "seperator_6",
				"seperator"				=> "Hover Styling",
				"group" 				=> "Hover Content",
			),
			array(
				"type"             	 	=> "switch_button",
				"heading"               => __( "Customize Overlay", "ts_visual_composer_extend" ),
				"param_name"            => "custom_styling",
				"value"                 => "false",
				"description"       	=> __( "Switch the toggle if you want to customize some aspects of the hover overlay, or use the default styling.", "ts_visual_composer_extend" ),
				"group" 				=> "Hover Content",
			),
			array(
				"type"                  => "colorpicker",
				"heading"               => __( "Overlay: Background Color", "ts_visual_composer_extend" ),
				"param_name"            => "custom_overlay",
				"value"                 => "rgba(0, 0, 0, 0.5)",
				"edit_field_class"		=> "vc_col-sm-6 vc_column",
				"description"           => __( "Define the background color for the overlay.", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "custom_styling", 'value' => 'true' ),
				"group" 				=> "Hover Content",
			),
			array(
				"type"                  => "colorpicker",
				"heading"               => __( "Title: Background Color", "ts_visual_composer_extend" ),
				"param_name"            => "custom_titleback",
				"value"                 => "#000000",
				"edit_field_class"		=> "vc_col-sm-6 vc_column",
				"description"           => __( "Define the background color for the overlay title.", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "custom_styling", 'value' => 'true' ),
				"group" 				=> "Hover Content",
			),
			array(
				"type"                  => "colorpicker",
				"heading"               => __( "Title: Font Color", "ts_visual_composer_extend" ),
				"param_name"            => "custom_titlecolor",
				"value"                 => "#ffffff",
				"edit_field_class"		=> "vc_col-sm-6 vc_column",
				"description"           => __( "Define the font color for the overlay title.", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "custom_styling", 'value' => 'true' ),
				"group" 				=> "Hover Content",
			),
			array(
				"type"                  => "colorpicker",
				"heading"               => __( "Title: Shadow Color", "ts_visual_composer_extend" ),
				"param_name"            => "custom_titleshadow",
				"value"                 => "rgba(175, 175, 175, 0.5)",
				"edit_field_class"		=> "vc_col-sm-6 vc_column",
				"description"           => __( "Define the shadow color for the overlay title.", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "custom_styling", 'value' => 'true' ),
				"group" 				=> "Hover Content",
			),
			array(
				"type"                  => "colorpicker",
				"heading"               => __( "Text: Font Color", "ts_visual_composer_extend" ),
				"param_name"            => "custom_textcolor",
				"value"                 => "#ffffff",
				"edit_field_class"		=> "vc_col-sm-6 vc_column",
				"description"           => __( "Define the font color for the overlay text.", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "custom_styling", 'value' => 'true' ),
				"group" 				=> "Hover Content",
			),			
			array(
				"type"                  => "colorpicker",
				"heading"               => __( "Button: Background Color", "ts_visual_composer_extend" ),
				"param_name"            => "custom_buttonback",
				"value"                 => "#000000",
				"edit_field_class"		=> "vc_col-sm-6 vc_column",
				"description"           => __( "Define the background color for the overlay button.", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "custom_styling", 'value' => 'true' ),
				"group" 				=> "Hover Content",
			),
			array(
				"type"                  => "colorpicker",
				"heading"               => __( "Button: Font Color", "ts_visual_composer_extend" ),
				"param_name"            => "custom_buttoncolor",
				"value"                 => "#ffffff",
				"edit_field_class"		=> "vc_col-sm-6 vc_column",
				"description"           => __( "Define the font color for the overlay button.", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "custom_styling", 'value' => 'true' ),
				"group" 				=> "Hover Content",
			),
			array(
				"type"                  => "colorpicker",
				"heading"               => __( "Button: Shadow Color", "ts_visual_composer_extend" ),
				"param_name"            => "custom_buttonshadow",
				"value"                 => "#000000",
				"edit_field_class"		=> "vc_col-sm-6 vc_column",
				"description"           => __( "Define the shadow color for the overlay button.", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "custom_styling", 'value' => 'true' ),
				"group" 				=> "Hover Content",
			),
			// Image Tooltip
			array(
				"type"                  => "seperator",
				"param_name"            => "seperator_7",
				"seperator"				=> "Image Tooltip",
				"group" 				=> "Tooltip Settings",
			),
			array(
				"type"             	 	=> "switch_button",
				"heading"               => __( "Use HTML in Tooltip", "ts_visual_composer_extend" ),
				"param_name"            => "tooltip_html",
				"value"                 => "false",
				"description"       	=> __( "Switch the toggle if you want to allow basic HTML code for the tooltip content.", "ts_visual_composer_extend" ),
				"group" 				=> "Tooltip Settings",
			),
			array(
				"type"                  => "textarea",
				"heading"               => __( "Tooltip Content", "ts_visual_composer_extend" ),
				"param_name"            => "tooltip_content",
				"value"                 => "",
				"description"           => __( "Enter the tooltip content here (do not use quotation marks or HTML code).", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "tooltip_html", 'value' => 'false' ),
				"group" 				=> "Tooltip Settings",
			),
			array(
				"type"              	=> ($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_EditorBase64TinyMCE == "true" ? "wysiwyg_base64" : "textarea_raw_html"),
				"heading"           	=> __( "Tooltip Content", "ts_visual_composer_extend" ),
				"param_name"        	=> "tooltip_content_html",
				"minimal"				=> "true",
				"value"             	=> base64_encode(""),
				"description"      	 	=> __( "Enter the tooltip content for the element; basic HTML code can be used.", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "tooltip_html", 'value' => 'true' ),
				"group" 				=> "Tooltip Settings",
			),
			array(
				"type"			        => "dropdown",
				"heading"               => __( "Tooltip Style", "ts_visual_composer_extend" ),
				"param_name"	        => "tooltip_style",
				"value"                 => $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_ToolTipster_Layouts,
				"description"           => __( "Select the tooltip style.", "ts_visual_composer_extend" ),				
				"group" 				=> "Tooltip Settings",
			),
			array(
				"type"				    => "dropdown",
				"heading"			    => __( "Tooltip Animation", "ts_visual_composer_extend" ),
				"param_name"		    => "tooltip_animation",
				"value"                 => array(
					__("Swing", "ts_visual_composer_extend")                    => "swing",
					__("Fall", "ts_visual_composer_extend")                 	=> "fall",
					__("Grow", "ts_visual_composer_extend")                 	=> "grow",
					__("Slide", "ts_visual_composer_extend")                 	=> "slide",
					__("Fade", "ts_visual_composer_extend")                 	=> "fade",
				),
				"description"		    => __( "Select how the tooltip entry and exit should be animated once triggered.", "ts_visual_composer_extend" ),
				"group"					=> "Tooltip Settings",
			),
			array(
				"type"					=> "nouislider",
				"heading"				=> __( "Tooltip X-Offset", "ts_visual_composer_extend" ),
				"param_name"			=> "tooltipster_offsetx",
				"value"					=> "0",
				"min"					=> "-100",
				"max"					=> "100",
				"step"					=> "1",
				"unit"					=> 'px',
				"description"			=> __( "Define an optional X-Offset for the tooltip position.", "ts_visual_composer_extend" ),
				"group" 				=> "Tooltip Settings",
			),
			array(
				"type"					=> "nouislider",
				"heading"				=> __( "Tooltip Y-Offset", "ts_visual_composer_extend" ),
				"param_name"			=> "tooltipster_offsety",
				"value"					=> "0",
				"min"					=> "-100",
				"max"					=> "100",
				"step"					=> "1",
				"unit"					=> 'px',
				"description"			=> __( "Define an optional Y-Offset for the tooltip position.", "ts_visual_composer_extend" ),
				"group" 				=> "Tooltip Settings",
			),
			// Other Settings
			array(
				"type"                  => "seperator",
				"param_name"            => "seperator_8",
				"seperator"				=> "Other Settings",
				"group" 				=> "Other Settings",
			),
			array(
				"type"                  => "nouislider",
				"heading"               => __( "Margin: Top", "ts_visual_composer_extend" ),
				"param_name"            => "margin_top",
				"value"                 => "0",
				"min"                   => "0",
				"max"                   => "200",
				"step"                  => "1",
				"unit"                  => 'px',
				"description"           => __( "Select the top margin for the element.", "ts_visual_composer_extend" ),
				"group" 				=> "Other Settings",
			),
			array(
				"type"                  => "nouislider",
				"heading"               => __( "Margin: Bottom", "ts_visual_composer_extend" ),
				"param_name"            => "margin_bottom",
				"value"                 => "0",
				"min"                   => "0",
				"max"                   => "200",
				"step"                  => "1",
				"unit"                  => 'px',
				"description"           => __( "Select the bottom margin for the element.", "ts_visual_composer_extend" ),
				"group" 				=> "Other Settings",
			),
			array(
				"type"                  => "textfield",
				"heading"               => __( "Define ID Name", "ts_visual_composer_extend" ),
				"param_name"            => "el_id",
				"value"                 => "",
				"description"           => __( "Enter an unique ID for the element.", "ts_visual_composer_extend" ),
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