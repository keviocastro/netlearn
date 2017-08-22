<?php
/**
 * Navigation
 *
 * @package Elgg.Core
 * @subpackage UI
 */
?>

/* ***************************************
	PAGINATION
*************************************** */
.elgg-pagination {
	margin: 20px 0 10px;
	display: block;
	text-align: center;
}
.elgg-pagination li {
	display: inline;
	margin: 0 6px 0 0;
	text-align: center;
}
.elgg-pagination a, .elgg-pagination span {
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	
	padding: 6px 16px;
	color: #08A7E7;
	border: 1px solid #08A7E7;
	font-size: 12px;
}
.elgg-pagination a:hover {
	background: #08A7E7;
	color: #FFFFFF;
	text-decoration: none;
}
.elgg-pagination .elgg-state-disabled span {
	color: #CCCCCC;
	border-color: #CCCCCC;
}
.elgg-pagination .elgg-state-selected span {
	background: #08A7E7;
	color: #FFFFFF;
}

/* ***************************************
	TABS
*************************************** */
.elgg-tabs {
	margin-bottom: 10px;
	border-bottom: 1px solid #CCCCCC;
	display: table;
	width: 100%;
}
.elgg-tabs li {
	float: left;
	border: 1px solid #FFFFFF;
	border-bottom: 0;
	margin: 0 0 0 10px;
	
	-webkit-border-radius: 3px 3px 0 0;
	-moz-border-radius: 3px 3px 0 0;
	border-radius: 3px 3px 0 0;
}
.elgg-tabs > li:hover {
	background: #EEEEEE;
}
.elgg-tabs a {
	text-decoration: none;
	display: block;
	padding: 5px 15px 3px;
	text-align: center;
	height: 24px;
	color: #999999;
}
.elgg-tabs a:hover {
	background: #EEEEEE;
	color: #08A7E7;
}
.elgg-tabs .elgg-state-selected {
	border-color: #CCCCCC;
}
.elgg-tabs .elgg-state-selected:hover {
	background: #FFFFFF;
}
.elgg-tabs .elgg-state-selected a {
	color: #08A7E7;
	position: relative;
	top: 2px;
	background: #FFFFFF;
}

/* ***************************************
	BREADCRUMBS
*************************************** */
.elgg-breadcrumbs {
	line-height: 1.2em;
	color: #bababa;
}
.elgg-breadcrumbs > li {
	display: inline-block;
}
.elgg-breadcrumbs > li:after {
	content: "\003E";
	padding: 0 4px;
	font-weight: normal;
}
.elgg-breadcrumbs > li > a {
	display: inline-block;
	color: #999999;
}
.elgg-breadcrumbs > li > a:hover {
	color: #0054A7;
	text-decoration: underline;
}

.elgg-main .elgg-breadcrumbs {
	position: relative;
	margin: -20px 0 5px 0;
    padding: 10px 0;
}

/* ***************************************
	TOPBAR MENU
*************************************** */
.elgg-menu-topbar,
.elgg-menu-navbar {
	float: left;
}
.elgg-menu-topbar {
	padding-top: 8px;
}
.elgg-menu-topbar > li,
.elgg-menu-navbar > li {
	float: left;
}
.elgg-menu-topbar > li > a,
.elgg-menu-navbar > li > a {
	padding-top: 2px;
	color: #EEEEEE;
	margin: 1px 25px 0 0;
}
.elgg-menu-topbar > li > a:hover {
	color: #08A7E7;
	text-decoration: none;
}
.elgg-menu-topbar-alt {
	float: right;
}
.elgg-menu-topbar-alt > li > a {
	margin: 1px 0 0 25px;
}
.elgg-menu-navbar > li > a.elgg-topbar-logo {
	position: relative;
	z-index: 9002;
	margin-top: 2px;
	width: auto;
	height: 29px;
}
.elgg-menu-navbar > li > a.elgg-topbar-logo {
	font-family: "Arial Black", "Arial Bold", Gadget, sans-serif;
	font-size: 1.6em;
	line-height: 1.6em;
	color: #FFCC00;
	text-decoration: none;
}
.elgg-menu-topbar > li > a.elgg-topbar-avatar {
	padding-top: 3px;
	width: 18px;
	height: 18px;
}
/* ***************************************
	SITE MENU
*************************************** */
.elgg-menu-site {
	z-index: 1;
}
.elgg-menu-site > li > a {
	font-weight: bold;
	padding: 9px 15px 7px 15px;
}
.elgg-menu-site > li > a:hover {
	text-decoration: none;
}
.elgg-menu-site-default {
	position: absolute;
	bottom: 3px;
	left: 0;
	height: 34px;
}
.elgg-menu-site-default > li {
	float: left;
	margin-right: 1px;
}
.elgg-menu-site-default > li > a {
	color: #FFFFFF;
}
.elgg-menu-site > li > ul {
	display: none;
	background-color: #FFFFFF;
}
.elgg-menu-site > li:hover > ul {
	display: block;
}
.elgg-menu-site-default > .elgg-state-selected > a,
.elgg-menu-site-default > li:hover > a {
	background: #0092CB;
	color: #FFFFFF;
    
    -webkit-border-radius: 3px 3px 0 0;
	-moz-border-radius: 3px 3px 0 0;
	border-radius: 3px 3px 0 0;
}
.elgg-menu-site-more {
	position: relative;
	left: -1px;
	width: 100%;
	min-width: 180px;
	border: 1px solid #999999;
	border-top: 0;

	-webkit-border-radius: 0 0 3px 3px;
	-moz-border-radius: 0 0 3px 3px;
	border-radius: 0 0 3px 3px;

	-webkit-box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.25);
	-moz-box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.25);
	box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.25);
}
.elgg-menu-site-more > li > a {
	background-color: #FFFFFF;
	color: #555;

	-webkit-border-radius: 0;
	-moz-border-radius: 0;
	border-radius: 0;

	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
}
.elgg-menu-site-more > li.elgg-state-selected > a,
.elgg-menu-site-more > li > a:hover {
	background: #0092CB;
	color: #FFFFFF;
}
.elgg-menu-site-more > li:last-child > a,
.elgg-menu-site-more > li:last-child > a:hover {
	-webkit-border-radius: 0 0 3px 3px;
	-moz-border-radius: 0 0 3px 3px;
	border-radius: 0 0 3px 3px;
}
.elgg-more > a:before {
	content: "\25BC";
	font-size: smaller;
	margin-right: 4px;
}
/* ***************************************
	TITLE
*************************************** */
.elgg-menu-title {
	float: right;
}
.elgg-menu-title > li {
	display: inline-block;
	margin-left: 4px;
}
/* ***************************************
	FILTER MENU
*************************************** */
.elgg-menu-filter {
	margin-bottom: 10px;
	border-bottom: 1px solid #CCCCCC;
	display: table;
	width: 100%;
}
.elgg-menu-filter > li {
	float: left;
	border: 1px solid #FFFFFF;
	border-bottom: 0;
	margin: 0 0 0 10px;
	
	-webkit-border-radius: 3px 3px 0 0;
	-moz-border-radius: 3px 3px 0 0;
	border-radius: 3px 3px 0 0;
}
.elgg-menu-filter > li:hover {
	background: #EEEEEE;
}
.elgg-menu-filter > li > a {
	text-decoration: none;
	display: block;
	padding: 5px 15px 3px;
	text-align: center;
	height: 21px;
	color: #999999;
}
.elgg-menu-filter > li > a:hover {
	background: #EEEEEE;
	color: #08A7E7;
}
.elgg-menu-filter > .elgg-state-selected {
	border-color: #CCCCCC;
}
.elgg-menu-filter > .elgg-state-selected > a {
	color: #08A7E7;
	position: relative;
	top: 2px;
	background: #FFFFFF;
}
/* ***************************************
	PAGE MENU
*************************************** */
.elgg-menu-page {
	margin-bottom: 15px;
}
.elgg-menu-page a {
    display: block;
    color: #FFFFFF;
    padding: 10px;
    margin: 0 0 1px 0;        
    background: #333333;
}
.elgg-menu-page a:hover {
	text-decoration: none;
    background: #999999;
}
.elgg-menu-page li.elgg-state-selected > a {
	background: #999999;
}
.elgg-menu-page .elgg-child-menu {
	display: none;
	margin-left: 15px;
}
.elgg-menu-page .elgg-menu-closed:before, .elgg-menu-opened:before {
	display: inline-block;
	padding-right: 4px;
}
.elgg-menu-page .elgg-menu-closed:before {
	content: "\002B";
}
.elgg-menu-page .elgg-menu-opened:before {
	content: "\002D";
}
/* ***************************************
	HOVER MENU
*************************************** */
.elgg-menu-hover {
	display: none;
	position: absolute;
	z-index: 10000;
	padding: 10px;
	overflow: hidden;

	min-width: 165px;
	max-width: 250px;
	border: solid 1px;
	border: 1px solid #999999;
	background-color: #FFFFFF;
	
	-webkit-border-radius: 0 3px 3px 3px;
	-moz-border-radius: 0 3px 3px 3px;
	border-radius: 0 3px 3px 3px;

	-webkit-box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.25);
	-moz-box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.25);
	box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.25);
}
.elgg-menu-hover > li {
	border-bottom: 1px solid #DDDDDD;
}
.elgg-menu-hover > li:last-child {
	border-bottom: none;
}
.elgg-menu-hover .elgg-heading-basic {
	display: block;
}
.elgg-menu-hover a {
	padding: 6px 10px;
	font-size: 92%;
}
.elgg-menu-hover a:hover {
	background: #EEEEEE;
	text-decoration: none;
}
.elgg-menu-hover-admin a {
	color: red;
}
.elgg-menu-hover-admin a:hover {
	color: #FFFFFF;
	background-color: red;
}
/* ***************************************
	SITE FOOTER
*************************************** */
.elgg-menu-footer > li,
.elgg-menu-footer > li > a {
	display: inline-block;
	color: #999999;
}
.elgg-menu-footer > li:after {
	content: "\007C";
	padding: 0 4px;
}
.elgg-menu-footer-default {
	float: right;
}
.elgg-menu-footer-alt {
	float: left;
}
/* ***************************************
	GENERAL MENU
*************************************** */
.elgg-menu-general > li,
.elgg-menu-general > li > a {
	display: inline-block;
	color: #999999;
}
.elgg-menu-general > li:after {
	content: "\007C";
	padding: 0 4px;
}
/* ***************************************
	ENTITY AND ANNOTATION
*************************************** */
<?php // height depends on line height/font size ?>
.elgg-menu-entity, elgg-menu-annotation {
	float: right;
	margin-left: 15px;
	font-size: 90%;
	color: #AAAAAA;
	line-height: 16px;
	height: 16px;
}
.elgg-menu-entity > li, .elgg-menu-annotation > li {
	margin-left: 15px;
}
.elgg-menu-entity > li > a, .elgg-menu-annotation > li > a {
	color: #AAAAAA;
}
<?php // need to override .elgg-menu-hz ?>
.elgg-menu-entity > li > a, .elgg-menu-annotation > li > a {
	display: block;
}
.elgg-menu-entity > li > span, .elgg-menu-annotation > li > span {
	vertical-align: baseline;
}
/* ***************************************
	OWNER BLOCK
*************************************** */
.elgg-menu-owner-block li a {
    display: block;
    color: #FFFFFF;
    padding: 10px;
    margin: 0 0 1px 0;        
    background: #333333;
}
.elgg-menu-owner-block li a:hover {
	text-decoration: none;
    background: #999999;
}
.elgg-menu-owner-block li.elgg-state-selected > a {
	background: #999999;
}
/* ***************************************
	LONGTEXT
*************************************** */
.elgg-menu-longtext {
	float: right;
}
/* ***************************************
	RIVER
*************************************** */
.elgg-menu-river {
	float: right;
	margin-left: 15px;
	font-size: 90%;
	color: #AAAAAA;
	line-height: 16px;
	height: 16px;
}
.elgg-menu-river > li {
	display: inline-block;
	margin-left: 5px;
}
.elgg-menu-river > li > a {
	color: #AAAAAA;
	height: 16px;
}
<?php // need to override .elgg-menu-hz ?>
.elgg-menu-river > li > a {
	display: block;
}
.elgg-menu-river > li > span {
	vertical-align: baseline;
}
/* ***************************************
	SIDEBAR EXTRAS (rss, bookmark, etc)
*************************************** */
.elgg-menu-extras {
	margin-bottom: 20px;
}
.elgg-menu-extras li {
	margin-right: 5px;
}
/* ***************************************
	WIDGET MENU
*************************************** */
.elgg-menu-widget > li {
	position: absolute;
	top: 5px;
	display: inline-block;
	width: 18px;
	height: 18px;
	padding: 0;
}
.elgg-menu-widget > .elgg-menu-item-collapse {
	left: 4px;
}
.elgg-menu-widget > .elgg-menu-item-delete {
	right: 4px;
}
.elgg-menu-widget > .elgg-menu-item-settings {
	right: 28px;
}
