<?php
    global $VISUAL_COMPOSER_EXTENSIONS;   
	$VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_VisualComposer_Element = array(
		"name"                      => __( "TS Google Tables", "ts_visual_composer_extend" ),
		"base"                      => "TS-VCSC-Google-Tables",
		"icon" 	                    => "ts-composer-element-icon-google-table",
		"category"                  => __( "Composium", "ts_visual_composer_extend" ),
		"description"               => __("Place a Google Table element", "ts_visual_composer_extend"),
		"admin_enqueue_js"			=> "",
		"admin_enqueue_css"			=> "",
		"params"                    => array(
			// Chart Settings
			array(
				"type"              => "seperator",
				"param_name"        => "seperator_1",
				"seperator"			=> "General Table Settings",
			),
			array(
				"type"              => "nouislider",
				"heading"           => __( "Height in px", "ts_visual_composer_extend" ),
				"param_name"        => "table_height",
				"value"             => "400",
				"min"               => "0",
				"max"               => "2048",
				"step"              => "1",
				"unit"              => 'px',
				"description"       => __( "Define the maximum height of the chart; set to 0 (zero) for automatic height.", "ts_visual_composer_extend" )
			),	
			array(
				"type"              => "textfield",
				"heading"           => __( "Title", "ts_visual_composer_extend" ),
				"param_name"        => "table_title",
				"value"             => "",
				"admin_label"       => true,
				"description"       => __( "Enter a title for your chart.", "ts_visual_composer_extend" ),
			),
			array(
				"type"              => "textfield",
				"heading"           => __( "Google Spreadsheet Key", "ts_visual_composer_extend" ),
				"param_name"        => "table_external_key",
				"value"             => "",
				"admin_label"       => true,
				"description"       => __( "Enter the alpha-numeric key that identifies the Google Spreadsheet.", "ts_visual_composer_extend" ),
			),
			array(
				"type"              => "textfield",
				"heading"           => __( "Google Spreadsheet Sheet", "ts_visual_composer_extend" ),
				"param_name"        => "table_external_sheet",
				"value"             => "",
				"description"       => __( "Enter the GID number that identifies the actual sheet in the document that contains the data.", "ts_visual_composer_extend" ),
			),
			array(
				"type"              => "textfield",
				"heading"           => __( "Google Spreadsheet Range", "ts_visual_composer_extend" ),
				"param_name"        => "table_external_range",
				"value"             => "",
				"description"       => __( "Enter the range that identifies the area in the spreadsheet that contains the source data; for example: A1:C7. Leave empty for automatic search.", "ts_visual_composer_extend" ),
			),
			array(
				"type"              => "nouislider",
				"heading"           => __( "Number of Header Rows", "ts_visual_composer_extend" ),
				"param_name"        => "table_external_header",
				"value"             => "1",
				"min"               => "0",
				"max"               => "10",
				"step"              => "1",
				"unit"              => '',
				"description"       => __( "Select how many rows in the data set represent the table header.", "ts_visual_composer_extend" ),
			),
			// Table Settings
			array(
				"type"              => "seperator",
				"param_name"        => "seperator_2",
				"seperator"			=> "Table Settings",
				"group" 			=> "Table Settings",
			),
			array(
				"type"              => "switch_button",
				"heading"           => __( "Alternating Table Rows", "ts_visual_composer_extend" ),
				"param_name"        => "table_alternating",
				"value"             => "true",
				"admin_label"       => true,
				"description"       => __( "Switch the toggle if you want to show the table rows in alternating colors for better differentiation.", "ts_visual_composer_extend" ),
				"group" 			=> "Table Settings",
			),
			array(
				"type"              => "switch_button",
				"heading"           => __( "RTL Table", "ts_visual_composer_extend" ),
				"param_name"        => "table_rtl",
				"value"             => "false",
				"description"       => __( "Switch the toggle if the table should provide basic support for a RTL (Right-To-Left) layout; requires an active overall RTL page layout.", "ts_visual_composer_extend" ),
				"group" 			=> "Table Settings",
			),
			array(
				"type"              => "switch_button",
				"heading"           => __( "Enable Column Sort", "ts_visual_composer_extend" ),
				"param_name"        => "table_sort_enable",
				"value"             => "true",
				"admin_label"       => true,
				"description"       => __( "Switch the toggle if you want to apply a sorting option to the table columns.", "ts_visual_composer_extend" ),
				"group" 			=> "Table Settings",
			),
			array(
				"type"              => "switch_button",
				"heading"           => __( "Initial ASC Sort", "ts_visual_composer_extend" ),
				"param_name"        => "table_sort_asc",
				"value"             => "true",
				"dependency"        => array( 'element' => "table_sort_enable", 'value' => 'true' ),
				"description"       => __( "Switch the toggle if the initial sorting direction should be ascending (asc).", "ts_visual_composer_extend" ),
				"group" 			=> "Table Settings",
			),
			array(
				"type"              => "nouislider",
				"heading"           => __( "Initial Sort Colum", "ts_visual_composer_extend" ),
				"param_name"        => "table_sort_column",
				"value"             => "0",
				"min"               => "-1",
				"max"               => "50",
				"step"              => "1",
				"unit"              => '',
				"dependency"        => array( 'element' => "table_sort_enable", 'value' => 'true' ),
				"description"       => __( "Select the column the table should be initially sorted by; set to -1 for no initial sorting; 0 (zero) equals the first column.", "ts_visual_composer_extend" ),
				"group" 			=> "Table Settings",
			),
			array(
				"type"              => "switch_button",
				"heading"           => __( "Enable Table Pagination", "ts_visual_composer_extend" ),
				"param_name"        => "table_page_enable",
				"value"             => "false",
				"admin_label"       => true,
				"description"       => __( "Switch the toggle if you want to apply a basic paging option to the table.", "ts_visual_composer_extend" ),
				"group" 			=> "Table Settings",
			),
			array(
				"type"              => "nouislider",
				"heading"           => __( "Number Rows per Page", "ts_visual_composer_extend" ),
				"param_name"        => "table_page_size",
				"value"             => "10",
				"min"               => "5",
				"max"               => "100",
				"step"              => "1",
				"unit"              => '',
				"dependency"        => array( 'element' => "table_page_enable", 'value' => 'true' ),
				"description"       => __( "Define the number of rows you want to show, not counting the header row.", "ts_visual_composer_extend" ),
				"group" 			=> "Table Settings",
			),
			array(
				"type"              => "nouislider",
				"heading"           => __( "Initial Page", "ts_visual_composer_extend" ),
				"param_name"        => "table_page_start",
				"value"             => "0",
				"min"               => "0",
				"max"               => "100",
				"step"              => "1",
				"unit"              => '',
				"dependency"        => array( 'element' => "table_page_enable", 'value' => 'true' ),
				"description"       => __( "Define the initial page the table should show after rendering; 0 (zero) equals the first page.", "ts_visual_composer_extend" ),
				"group" 			=> "Table Settings",
			),
			// Other Settings
			array(
				"type"              => "seperator",
				"param_name"        => "seperator_3",
				"seperator"			=> "Other Settings",
				"group" 			=> "Other Settings",
			),
			array(
				"type"              => "nouislider",
				"heading"           => __( "Margin: Top", "ts_visual_composer_extend" ),
				"param_name"        => "margin_top",
				"value"             => "0",
				"min"               => "-250",
				"max"               => "500",
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
				"min"               => "-250",
				"max"               => "500",
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