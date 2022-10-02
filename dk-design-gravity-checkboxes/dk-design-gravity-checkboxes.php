<?php

defined('ABSPATH') or die("No script kiddies please!");
/*
Plugin Name: DK Design Make Radio Buttons Better
Plugin URI: https://dkdesignhawaii.com
Description: Improves visual aesthetic and usability of checkboxes in gravity forms. Add CSS class "wsRadioBtns" to checkboxes that you want to improve.
Author: Dan Morrone
Version: 1
Author URI: https://dkdesignhawaii.com
*/


add_action('wp_head', 'wsAddRadioButtonCSS');


function wsAddRadioButtonCSS() {
	
echo '<style type="text/css">	
/*Pimp Radio Buttons*/

/* hide input */
.wsRadioBtns input:empty {
	margin-left: -999px !important;
}

/* style label */
.wsRadioBtns input:empty ~ label {
	position: relative;
	float: left;
	line-height: 2.5em;
	text-indent: 3.25em;
	margin-top: 2em;
	cursor: pointer;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;

}

.wsRadioBtns input {
 padding:3px;	
}

.wsRadioBtns input:empty ~ label:before {
	position: absolute;
	display: block;
	top: 0;
	bottom: 0;
	left: 0;
	content: \'\';
	width: 2.5em;
	background: transparent;
	border-radius: 3px;
	border: 2px solid #999;
}

/* toggle hover */
.wsRadioBtns input:hover:not(:checked) ~ label:before {
	content:\'\2713\';
	text-indent: .7em;
	color: #C2C2C2;
}

.wsRadioBtns input:hover:not(:checked) ~ label {
	color: #333;
}

/* toggle on */
.wsRadioBtns input:checked ~ label:before {
	content:\'\2713\';
	text-indent: .7em;
	color: #FFFFFF;
	background-color: #000000;

}

/*End radio buttons */

</style>';

}
