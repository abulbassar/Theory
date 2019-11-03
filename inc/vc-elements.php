<?php 
	/* for Theory theme */

?>

<?php
	
	
	// Text box section
	vc_map(array(
		'name'						=>__('Section one box','theory'),
		'description'				=>__('This is for box section','theory'),
		'base'						=>'textbox',
		'icon'						=>'fa fa-map' ,
		'show_settings_on_create'	=>true,
		'category'					=>__('Theory','theory'),
		'params'					=>array(
					array(
					  'type' => "textfield",
					  "admin_label" => true,
					  "heading" => __( "Box heading", "theory" ),
					  "param_name" => "textbox_heading"
					),
					array(
					  'type' => "textarea",
					  "admin_label" => true,
					  "heading" => __( "Box description", "theory" ),
					  "param_name" => "textbox_desc"
					),
					array(
					  'type' => "textfield",
					  "admin_label" => true,
					  "heading" => __( "Button text", "theory" ),
					  "param_name" => "textbox_btn"
					),
					
		),
		
	));
	
	// Team
	vc_map(array(
		'name'						=>__('Section Team Member','theory'),
		'description'				=>__('This is for Team Member section','theory'),
		'base'						=>'team_member',
		'icon'						=>'fa fa-map' ,
		'show_settings_on_create'	=>true,
		'category'					=>__('Theory','theory'),
		'params'					=>array(
					array(
					  'type' => "textfield",
					  "admin_label" => true,
					  "heading" => __( "Team heading", "theory" ),
					  "param_name" => "team_heading"
					),
					array(
					  'type' => "textarea",
					  "admin_label" => true,
					  "heading" => __( "Box description", "theory" ),
					  "param_name" => "team_desc"
					),
					array(
					  'type' => "textfield",
					  "admin_label" => true,
					  "heading" => __( "Post per Page", "theory" ),
					  "param_name" => "team_per_page"
					),
					
		),
		
	));
	
	// heading
	vc_map(array(
		'name'						=>__('Theory heading','theory'),
		'description'				=>__('This is for heading section','theory'),
		'base'						=>'theory_heading',
		'icon'						=>'fa fa-map' ,
		'show_settings_on_create'	=>true,
		'category'					=>__('Theory','theory'),
		'params'					=>array(
					array(
					  'type' => "textfield",
					  "admin_label" => true,
					  "heading" => __( "Feature heading", "theory" ),
					  "param_name" => "theory_head"
					),
					array(
					  'type' => "textarea",
					  "admin_label" => true,
					  "heading" => __( "head description", "theory" ),
					  "param_name" => "theory_head_desc"
					),
		),
		
	));
	
	// feature
	vc_map(array(
		'name'						=>__('Feature Section','theory'),
		'description'				=>__('This is for Feature section','theory'),
		'base'						=>'feature',
		'icon'						=>'fa fa-map' ,
		'show_settings_on_create'	=>true,
		'category'					=>__('Theory','theory'),
		'params'					=>array(
					array(
					  'type' => "textfield",
					  "admin_label" => true,
					  "heading" => __( "Feature heading", "theory" ),
					  "param_name" => "feature_heading"
					),
					/*
					array(
					  'type' => "textarea",
					  "admin_label" => true,
					  "heading" => __( "head title description", "theory" ),
					  "param_name" => "feature_desc"
					),
					*/
					array(
					  'type' => "textfield",
					  "admin_label" => true,
					  "heading" => __( "Post per Page", "theory" ),
					  "param_name" => "feat_per_page"
					),
					
					array(
					  'type' => "textfield",
					  "admin_label" => true,
					  "heading" => __( "Button text", "theory" ),
					  "param_name" => "feature_btn"
					),
					
		),
		
	));
	
	


?>