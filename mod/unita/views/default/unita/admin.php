<?php

/**
 *  Options Panel CSS
 */

?>

/* ***************************************
	SETTINGS
*****************************************/
.disabled{
	color: red;
}
.panel-header {
	padding-bottom: 10px;
    margin-bottom: 4px;
    font-size: 18px;
}
.panel-line {
	height:1px;
    width: 100%;
	background:#CCC;
	border-bottom:1px solid #FFF;
	overflow:hidden;
}
.settings-optionspanel{
    min-height: 260px;
    padding: 20px 0 0;
}
.settings-optionspanel .elgg-markdown h1 {
	font-size: 1.2em;
	margin: 1em 0 0;
}
.settings-optionspanel .label{
	font-size: 1.2em;
    font-weight: bold;
}
.settings-optionspanel .elgg-input-text,
.settings-optionspanel .elgg-input-dropdown{
	float: right;
}
.settings-optionspanel .elgg-input-text {
    margin-bottom: 15px;
}
.elggzone-holder{
	background-color: #EEEEEE;
	border: 2px solid #FFFFFF;
	margin: 20px;
	
	color: #333333;
	padding:30px;
}
.elggzone-options-panel {
	background-color: #333;
	border: 1px solid #444;
	margin-top: 15px;
	width: 100%;
}
.elggzone-options-panel .item {
	border-bottom: 1px solid #C0C0C0;
	padding: 10px 0;
}
.elggzone-options-panel .elgg-button {
	font-size: 14px;
	font-weight: normal;
	text-decoration: none;
    float: left;

	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;

	width: auto;
	padding: 6px 10px;
	cursor: pointer;
}
/* ***************************************
	TABS
*****************************************/
.elggzone-loader {
	display: block;
	background: transparent url(<?php echo elgg_get_site_url(); ?>mod/unita/graphics/loader.gif) no-repeat 0 0;
	width: 31px;
	height: 31px;
}
.ez-result {
	display: inline-block;
    float: left;
    margin-left: 20px;
}
#elggzone-tabs .ui-tabs-nav {
    margin-bottom: 20px;
	border-bottom: 1px solid #ccc;
	display: table;
	width: 100%;    
}
#elggzone-tabs .ui-tabs-nav li {
	float: left;
	border: 1px solid #CCCCCC;
	border-bottom-width: 0;
	margin: 0 2px 0 0;    
    background: #dedede;
    background-image: linear-gradient(to bottom, #FFFFFF, #dedede);
    
    -webkit-border-radius: 3px 3px 0 0;
	-moz-border-radius: 3px 3px 0 0;
	border-radius: 3px 3px 0 0;
}
#elggzone-tabs .ui-tabs-nav a {
	text-decoration: none;
	display: block;
	padding: 6px 20px 2px;
	text-align: center;
	height: 23px;
	color: #777;
}
#elggzone-tabs .ui-tabs-nav a:hover {
	background: #EEEEEE;
	color: #333;
}
#elggzone-tabs .ui-tabs-nav .ui-tabs-selected {
	border-color: #CCCCCC;
	background: #FFFFFF;

}
#elggzone-tabs .ui-tabs-nav .ui-tabs-selected a {
	color: #333;
	position: relative;
	top: 2px;
    
	background: #EEEEEE;
    background-image: linear-gradient(to bottom, #FFFFFF, #EEEEEE);
}
#elggzone-tabs .ui-tabs-hide {
	display: none !important;
}
#elggzone-tabs .ui-tabs-panel {
	display: block;
}
#elggzone-tabs .ui-tabs-panel > div {
	display: block;
    margin: 0 0 15px;
}
/* ***************************************
	COLORPICKER
*****************************************/
#colorpickerField,
#colorpickerFieldHover {
	float: right;
	width: 80px;
    height: 12px;
    
    -webkit-border-radius: 0;
	-moz-border-radius: 0;
	border-radius: 0;
}
.onchange,
.onchange-hover {
	float: right;
	width: 40px;
    height: 24px;
    margin-right: 2px;
}
.colorpicker {
	width: 356px;
	height: 176px;
	overflow: hidden;
	position: absolute;
    background: url(<?php echo elgg_get_site_url(); ?>mod/unita/graphics/images/colorpicker_background.png);
	font-family: Arial, Helvetica, sans-serif;
	display: none;
}
.colorpicker_color {
	width: 150px;
	height: 150px;
	left: 14px;
	top: 13px;
	position: absolute;
	background: #f00;
	overflow: hidden;
	cursor: crosshair;
}
.colorpicker_color div {
	position: absolute;
	top: 0;
	left: 0;
	width: 150px;
	height: 150px;
    background: url(<?php echo elgg_get_site_url(); ?>mod/unita/graphics/images/colorpicker_overlay.png);
}
.colorpicker_color div div {
	position: absolute;
	top: 0;
	left: 0;
	width: 11px;
	height: 11px;
	overflow: hidden;
    background: url(<?php echo elgg_get_site_url(); ?>mod/unita/graphics/images/colorpicker_select.gif);
	margin: -5px 0 0 -5px;
}
.colorpicker_hue {
	position: absolute;
	top: 13px;
	left: 171px;
	width: 35px;
	height: 150px;
	cursor: n-resize;
}
.colorpicker_hue div {
	position: absolute;
	width: 35px;
	height: 9px;
	overflow: hidden;
    background: url(<?php echo elgg_get_site_url(); ?>mod/unita/graphics/images/colorpicker_indic.gif) left top;
	margin: -4px 0 0 0;
	left: 0px;
}
.colorpicker_new_color {
	position: absolute;
	width: 60px;
	height: 30px;
	left: 213px;
	top: 13px;
	background: #f00;
}
.colorpicker_current_color {
	position: absolute;
	width: 60px;
	height: 30px;
	left: 283px;
	top: 13px;
	background: #f00;
}
.colorpicker input {
	background-color: transparent;
	border: 1px solid transparent;
	position: absolute;
	font-size: 10px;
	font-family: Arial, Helvetica, sans-serif;
	color: #898989;
	top: 4px;
	right: 11px;
	text-align: right;
	margin: 0;
	padding: 0;
	height: 11px;
}
.colorpicker_hex {
	position: absolute;
	width: 72px;
	height: 22px;
    background: url(<?php echo elgg_get_site_url(); ?>mod/unita/graphics/images/colorpicker_hex.png) top;
	left: 212px;
	top: 142px;
}
.colorpicker_hex input {
	right: 6px;
}
.colorpicker_field {
	height: 22px;
	width: 62px;
	background-position: top;
	position: absolute;
}
.colorpicker_field span {
	position: absolute;
	width: 12px;
	height: 22px;
	overflow: hidden;
	top: 0;
	right: 0;
	cursor: n-resize;
}
.colorpicker_rgb_r {
    background: url(<?php echo elgg_get_site_url(); ?>mod/unita/graphics/images/colorpicker_rgb_r.png);
	top: 52px;
	left: 212px;
}
.colorpicker_rgb_g {
    background: url(<?php echo elgg_get_site_url(); ?>mod/unita/graphics/images/colorpicker_rgb_g.png);
	top: 82px;
	left: 212px;
}
.colorpicker_rgb_b {
    background: url(<?php echo elgg_get_site_url(); ?>mod/unita/graphics/images/colorpicker_rgb_b.png);
	top: 112px;
	left: 212px;
}
.colorpicker_hsb_h {
    background: url(<?php echo elgg_get_site_url(); ?>mod/unita/graphics/images/colorpicker_hsb_h.png);
	top: 52px;
	left: 282px;
}
.colorpicker_hsb_s {
    background: url(<?php echo elgg_get_site_url(); ?>mod/unita/graphics/images/colorpicker_hsb_s.png);
	top: 82px;
	left: 282px;
}
.colorpicker_hsb_b {
    background: url(<?php echo elgg_get_site_url(); ?>mod/unita/graphics/images/colorpicker_hsb_b.png);
	top: 112px;
	left: 282px;
}
.colorpicker_submit {
	position: absolute;
	width: 22px;
	height: 22px;
    background: url(<?php echo elgg_get_site_url(); ?>mod/unita/graphics/images/colorpicker_submit.png) top;
	left: 322px;
	top: 142px;
	overflow: hidden;
}
.colorpicker_focus {
	background-position: center;
}
.colorpicker_hex.colorpicker_focus {
	background-position: bottom;
}
.colorpicker_submit.colorpicker_focus {
	background-position: bottom;
}
.colorpicker_slider {
	background-position: bottom;
}
