<?php
/*
Plugin Name: Gather Lead Button
Author: Gather Technologies
Version: 1.0
*/

function gather_lead_script($atts) {

	$a = shortcode_atts(array("locationid"=>"","trigger"=>""), $atts);

	if (empty($a["locationid"])) {
		return '<h3>Please include the "locationid" field in your shortcode for the button to work.</h3>';
	};

	$script = "<script ";
	$script .= "type='text/javascript' ";
	$script .= "src='https://gatherhere.com/js/leadform.js' ";
	$script .= "id='gather-loader'";
	$script .= "data-locationid='".$a["locationid"]."' ";
	if (!empty($a["trigger"])) {
		$script .= "data-trigger='".$a["trigger"]."' ";
	};
	$script .= "></script>";

	return $script;
}
add_shortcode('gather-lead-button', 'gather_lead_script');


?>
