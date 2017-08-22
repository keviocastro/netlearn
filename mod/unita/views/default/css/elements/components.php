<?php
/**
 * Layout Object CSS
 *
 * Image blocks, lists, tables, gallery, messages
 *
 * @package Elgg.Core
 * @subpackage UI
 */
?>

/* ***************************************
	Image Block
*************************************** */
.elgg-image-block {
	padding: 10px 0;
}
.elgg-image-block .elgg-image {
	float: left;
	margin-right: 10px;
}
.elgg-image-block .elgg-image-alt {
	float: right;
	margin-left: 10px;
}

/* ***************************************
	List
*************************************** */
.elgg-list {
	margin: 5px 0;
	clear: both;
}
.elgg-list > li {
	border-bottom: 1px dotted #CCCCCC;
}

.elgg-item .elgg-subtext {
	margin-bottom: 5px;
}
.elgg-item .elgg-content {
	margin: 10px 0;
}

/* ***************************************
	Gallery
*************************************** */
.elgg-gallery {
	border: none;
	margin-right: auto;
	margin-left: auto;
}
.elgg-gallery td {
	padding: 5px;
}
.elgg-gallery-fluid > li {
	float: left;
}
.elgg-gallery-users > li {
	margin: 0 2px;
}

/* ***************************************
	Tables
*************************************** */
.elgg-table {
	width: 100%;
	border-top: 1px solid #CCCCCC;
}
.elgg-table td, .elgg-table th {
	padding: 4px 8px;
	border: 1px solid #CCCCCC;
}
.elgg-table th {
	background-color: #DDDDDD;
}
.elgg-table tr:nth-child(odd), .elgg-table tr.odd {
	background-color: #FFFFFF;
}
.elgg-table tr:nth-child(even), .elgg-table tr.even {
	background-color: #F0F0F0;
}
.elgg-table-alt {
	width: 100%;
	border-top: 1px solid #CCCCCC;
}
.elgg-table-alt th {
	background-color: #EEEEEE;
	font-weight: bold;
}
.elgg-table-alt td, .elgg-table-alt th {
	padding: 2px 4px 2px 4px;
	border-bottom: 1px solid #CCCCCC;
}
.elgg-table-alt td:first-child {
	width: 200px;
}
.elgg-table-alt tr:hover {
	background: #E4E4E4;
}

/* ***************************************
	Owner Block
*************************************** */
.elgg-owner-block {
	margin-bottom: 20px;
}

/* ***************************************
	Messages
*************************************** */
.elgg-message {
	color: #FFFFFF;
	font-weight: bold;
	display: block;
	padding: 10px;
	cursor: pointer;
	opacity: 0.9;
    text-align: center;   
}
.elgg-state-success {
	background-color: black;
}
.elgg-state-error {
	background-color: red;
}
.elgg-state-notice {
	background-color: #08A7E7;
}

/* ***************************************
	River
*************************************** */
.elgg-list-river {
	border-top: 1px solid #CCCCCC;
}
.elgg-list-river > li {
	border-bottom: 1px solid #CCCCCC;
}
.elgg-river-item .elgg-pict {
	margin-right: 20px;
}
.elgg-river-timestamp {
	color: #666666;
	font-size: 85%;
	font-style: italic;
	line-height: 1.2em;
}

.elgg-river-attachments,
.elgg-river-message,
.elgg-river-content {
	margin: 8px 0 5px 0;
}
.elgg-river-attachments .elgg-avatar,
.elgg-river-attachments .elgg-icon {
	float: left;
}
.elgg-river-attachments .elgg-icon {
	margin: 2px 5px 0 7px;
}
.elgg-river-layout .elgg-input-dropdown {
	float: right;
	margin: 10px 0;
}

.elgg-river-comments-tab {
	display: block;
	background-color: #EEEEEE;
	color: #08A7E7;
	margin-top: 5px;
	width: auto;
	float: right;
	font-size: 85%;
	padding: 1px 7px;
	
	-webkit-border-radius: 3px 3px 0 0;
	-moz-border-radius: 3px 3px 0 0;
	border-radius: 3px 3px 0 0;
}

<?php //@todo components.php ?>
.elgg-river-comments {
	margin: 0;
	border-top: none;
}
.elgg-river-comments li:first-child {
	-webkit-border-radius: 3px 0 0;
	-moz-border-radius: 3px 0 0;
	border-radius: 3px 0 0;
}
.elgg-river-comments li:last-child {
	-webkit-border-radius: 0 0 3px 3px;
	-moz-border-radius-bottomleft: 0 0 3px 3px;
	border-radius-bottomleft: 0 0 3px 3px;
}
.elgg-river-comments li {
	background-color: #EEEEEE;
	border-bottom: none;
	padding: 4px 10px;
	margin-bottom: 2px;
}
.elgg-river-comments .elgg-media {
	padding: 0;
}
.elgg-river-more {
	background-color: #EEEEEE;
	
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	
	padding: 2px 4px;
	font-size: 85%;
	margin-bottom: 2px;
}

<?php //@todo location-dependent styles ?>
.elgg-river-item form {
	background-color: #EEEEEE;
	padding: 4px 4px 6px 4px;
	
	-moz-border-radius: 3px;
	-webkit-border-radius: 3px;
	border-radius: 3px;
	
	height: 32px;
}
.elgg-river-item input[type=text] {
	width: 80%;
}
.elgg-river-item input[type=submit] {
	margin: 0 0 0 10px;
}


/* **************************************
	Comments (from elgg_view_comments)
************************************** */
.elgg-comments {
	margin-top: 25px;
}
.elgg-comments > form {
	margin-top: 15px;
}

/* ***************************************
	Image-related
*************************************** */
.elgg-photo {
	border: 1px solid #CCCCCC;
	padding: 3px;
	background-color: #FFFFFF;
}

/* ***************************************
	Tags
*************************************** */
.elgg-tags {
	font-size: 85%;
}
.elgg-tags > li {
	float:left;
	margin-right: 5px;
}
.elgg-tags li.elgg-tag:after {
	content: ",";
}
.elgg-tags li.elgg-tag:last-child:after {
	content: "";
}
.elgg-tagcloud {
	text-align: justify;
}

/* ***************************************
    Rescrever class elgg-photo:hover
*************************************** */
.elgg-photo:hover{
    background: #08A7E7;
}

/*****************************************
    tirar borda de tab a direita
*****************************************/
.tabs-right>.nav-tabs {
    border-left: 0px;
}
