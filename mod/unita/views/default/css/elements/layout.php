<?php
/**
 * Page Layout
 *
 * Contains CSS for the page shell and page layout
 *
 * Default layout: 990px wide, centered. Used in default page shell
 *
 * @package Elgg.Core
 * @subpackage UI
 */
?>

/* ***************************************
	PAGE LAYOUT
*************************************** */
/***** DEFAULT LAYOUT ******/
.elgg-page-topbar > .elgg-inner,
.elgg-page-default .elgg-page-header > .elgg-inner,
.elgg-page-default .elgg-page-body > .elgg-inner,
.elgg-page-default .elgg-page-footer > .elgg-inner {
	width: 990px;
	margin: 0 auto;
}
.elgg-page-default {
	min-width: 998px;
}
.elgg-page-default .elgg-page-header > .elgg-inner {
	min-height: 38px;
}
.elgg-page-default .elgg-page-footer > .elgg-inner {
	padding: 5px 0;
	border-top: 1px solid #DEDEDE;
}
/***** TOPBAR ******/
.elgg-page-topbar {
	background: #1F1F1F;
	border-bottom: 1px solid #000000;
	position: relative;
	height: 40px;
	z-index: 9000;
}
/***** PAGE MESSAGES ******/
.elgg-system-messages {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	z-index: 9003;
}
.elgg-system-messages li p {
	margin: 0;
}
/***** PAGE HEADER ******/
.elgg-page-header {
	position: relative;
    background: #08A7E7;
}
.elgg-page-header > .elgg-inner {
	position: relative;
}
/***** PAGE BODY LAYOUT ******/
.elgg-layout {
	min-height: 360px;
}
.elgg-layout-error {
	margin-top: 20px;
}
.elgg-sidebar {
	position: relative;
	padding: 20px 0;
	float: right;
	width: 300px;
	margin: 0 0 0 40px;
}
.elgg-sidebar-alt {
	position: relative;
	padding: 20px 0;
	float: left;
	width: 160px;
	margin: 0 10px 0 0;
}
.elgg-main {
	position: relative;
	min-height: 360px;
	padding: 20px 0;
}
.elgg-main > .elgg-head {
	padding-bottom: 3px;
	border-bottom: 4px solid #222222;
	margin-bottom: 10px;
}
/***** PAGE FOOTER ******/
.elgg-page-footer {
	position: relative;
}
.elgg-page-footer {
	color: #999999;
}
.elgg-page-footer a:hover {
	color: #666666;
}