<?php
$sec = date('s');
$colorArray = array('#3F51B5', '#2196F3', '#673AB7', '#FF4336', '#9C27B0', '#03A9F4', '#009688', '#4CAF50', '#8BC34A', '#FF9800', '#FF5722', '#795548');
$colorIndex = $sec % 12;
?>
/* <style> /**/

/* ***************************************
	RESET CSS
*************************************** */
html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, font, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td {
	margin: 0;
	padding: 0;
	border: 0;
	font-weight: inherit;
	font-style: inherit;
	font-size: 100%;
	font-family: inherit;
	vertical-align: baseline;
}
<?php // force vertical scroll bar ?>
html, body {
	height: 100%;
	margin-bottom: 1px;
	font-weight:400;
	font-family:Roboto, "Roboto Condensed";
}
img {
	border-width: 0;
	border-color: transparent;
}
ol, ul {
	list-style: none;
}
em, i {
	font-style: italic;
}
ins {
	text-decoration: none;
}
del, strike {
	text-decoration:line-through;
}
strong, b {
	font-weight: bold;
}
table {
	border-collapse: collapse;
	border-spacing: 0;
}
caption, th, td {
	text-align: left;
	font-weight: normal;
	vertical-align: top;
}
blockquote:before, blockquote:after,
q:before, q:after {
	content: "";
}
blockquote, q {
	quotes: "" "";
}

/* ***************************************
	BASICS
*************************************** */
body {
	background-color: #eee;
	font-size: 90%;
	line-height: 1.4em;
	font-weight:400;
	font-family:Roboto, "Roboto Condensed";
}
h1, h2, h3, h4, h5, h6 {
	font-weight: 400;
	line-height: auto;
	color: #666;
}
h1 { font-size: 1.8em; }
h2 { font-size: 1.5em; line-height: 1.1em;}
h3 { font-size: 1.2em; }
h4 { font-size: 1.0em; }
h5 { font-size: 0.9em; }
h6 { font-size: 0.8em; }

a {
	color: <?php echo $colorArray[$colorIndex]; ?>;
	text-decoration: none;
	-webkit-transition:0.25s;
	-moz-transition:0.25s;
	-o-transition:0.25s;
}
a:hover {
	color: #0064FF;
}
pre, code {
	background-color: #EEE;
	border: 1px solid #DDD;
	color: #444;
	font-family: Monaco, "Courier New", Courier, monospace;
	font-size: 13px;
	overflow: auto;
	margin: 15px 0;
	padding: 5px;
}
blockquote {
	background: #EBF5FF;
}
p {
	margin-bottom: 15px;
}

.clearfloat {
	clear: both;
}

/* Clearfix! */
.clearfix:after,
.elgg-grid:after,
.elgg-layout:after,
.elgg-inner:after,
.elgg-page-header:after,
.elgg-page-footer:after,
.elgg-head:after,
.elgg-foot:after,
.elgg-col:after,
.elgg-col-alt:after,
.elgg-image-block:after {
	content: ".";
	display: block;
	height: 0;
	clear: both;
	visibility: hidden;
}

.elgg-body {
	width: auto;
	word-wrap: break-word;
	overflow: hidden;
}
.elgg-body:after {
	display: block;
	visibility: hidden;
	height: 0 !important;
	line-height: 0;
	overflow: hidden;
	font-size: xx-large;
	content: " x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x ";
}

/* ***************************************
	PAGE WRAPPER
*************************************** */
.elgg-page > .elgg-inner {
	margin: 0 auto;
	padding: 20px 40px 0;
	min-width: 800px;
	max-width: 1600px;
}

/* ***************************************
	HEADER
*************************************** */
.elgg-page-header {
	background-color: <?php echo $colorArray[$colorIndex]; ?>;
	padding: 20px;
	box-shadow:0 -6px 0 rgba(0,0,0,.06),0 0 12px rgba(0,0,0,.18),0 12px 18px rgba(0,0,0,.18);
	font-weight:500;
	font-family:Roboto, "Roboto Condensed";
}
.elgg-heading-site {
	font-size: 1.8em;
	line-height: 1.2em;
	margin-right: 10px;
	float: left;
	font-weight:300;
}
.elgg-heading-site a {
	color: #ffffff;
	text-decoration: none;
}
.elgg-heading-site a:hover {
	color: white;
	text-decoration: none;
}
.elgg-menu-user,
.elgg-menu-admin-header {
	float: right;
	margin: 8px 8px 0 0;
}
.elgg-menu-user,
.elgg-menu-admin-header, 
.elgg-menu-user a,
.elgg-menu-admin-header a {
	color: white;
}
.elgg-menu-user a,
.elgg-menu-admin-header a {
	text-decoration: blink;
	-webkit-transition:0.25s;
	-moz-transition:0.25s;
	-o-transition:0.25s;
}
.elgg-menu-user a:hover,
.elgg-menu-admin-header a:hover {
	color: #005CFF;
}
.elgg-menu-user li,
.elgg-menu-admin-header li {
	display: inline;
}
.elgg-menu-user li:after,
.elgg-menu-admin-header li:after {
	content: "|";
	display: inline-block;
	font-weight: normal;
	margin: 0 8px;
}
.elgg-menu-user li:last-child:after,
.elgg-menu-admin-header li:last-child:after {
	content: "";
}
a.elgg-maintenance-mode-warning {
	color: #d00;
}

/* ***************************************
	MESSAGES
*************************************** */
.elgg-page-messages {
	padding: 20px 0 0;
	margin-bottom: -10px;
}
.elgg-system-messages p {
	margin: 0;
}
.elgg-message {
	padding: 20px;
	margin-bottom: 10px;
	border: 1px solid #ddd;
	border-radius: 3px;
	cursor: pointer;
	box-shadow:0 -6px 0 rgba(0,0,0,.06),0 0 12px rgba(0,0,0,.18),0 12px 18px rgba(0,0,0,.18);
}
.elgg-message.elgg-state-error {
	color: #FF4336;
	background-color: #F8E8E8;
	border: 1px solid #E5B7B5;
}
.elgg-message.elgg-state-success {
	color: #4CAF50;
	background-color: #EAF8E8;
	border: 1px solid #AADEA2;
}

.elgg-admin-notices p {
	color: #3F51B5;
	background-color: #E7F1F9;
	border: 1px solid #B1D1E9;
	padding: 20px;
	border-radius: 3px;
}
.elgg-admin-notices a.elgg-admin-notice {
	float: right;
	text-decoration: none;
}

.elgg-admin-notices a {
	text-decoration: underline;
}

/* ***************************************
	BODY
*************************************** */
.elgg-page-body {
	padding: 20px 0;
}
.elgg-main {
	background-color: #fff;
	border: 1px solid #ccc;
	padding: 20px;
	position: relative;
	min-height: 400px;
	box-shadow:0 -6px 0 rgba(0,0,0,.06),0 0 12px rgba(0,0,0,.18),0 12px 18px rgba(0,0,0,.18);
}
.elgg-sidebar {
	width: 210px;
	float: right;
	margin-left: 30px;
	box-shadow:0 -6px 0 rgba(0,0,0,.06),0 0 12px rgba(0,0,0,.18),0 12px 18px rgba(0,0,0,.18);
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}
.elgg-main > .elgg-head {
	margin-bottom: 10px;
}
.elgg-main h2 {
	color: #333333;
}

/* ***************************************
	FOOTER
*************************************** */
.elgg-page-footer {
	background-color: <?php echo $colorArray[$colorIndex]; ?>;
	border: 1px solid #999;
	padding: 10px 20px;
	margin-bottom: 10px;
	box-shadow:0 -6px 0 rgba(0,0,0,.06),0 0 12px rgba(0,0,0,.18),0 12px 18px rgba(0,0,0,.18);
	border-radius:10px;
}
.elgg-page-footer a {
	color: <?php echo $colorArray[$colorIndex]; ?>;
	text-decoration: none;
	-webkit-transition:0.25s;
	-moz-transition:0.25s;
	-o-transition:0.25s;
}
.elgg-page-footer a:hover {
	text-decoration: blink;
}

/* ***************************************
	MODULES
*************************************** */
.elgg-module {
	overflow: hidden;
}
.elgg-module-main {
	background-color: #fff;
	border: 1px solid #ccc;
	padding: 10px;
}
.elgg-module-main > .elgg-head {
	margin-bottom: 5px;
}
.elgg-module-info > .elgg-head {
	margin-bottom: 10px;
}
.elgg-module-inline {
	margin: 20px 0;
	padding:15px;
	-webkit-transition:0.25s;
	-moz-transition:0.25s;
	-o-transition:0.25s;
	transition:0.25s;
}
.elgg-module-inline:hover {
	box-shadow:0 -6px 0 rgba(0,0,0,.06),0 0 12px rgba(0,0,0,.18),0 12px 18px rgba(0,0,0,.18);
}
.elgg-module-inline > .elgg-head {
	background-color: <?php echo $colorArray[$colorIndex]; ?>;
	color: white;
	padding: 5px;
	font-weight:300;
	margin-bottom: 10px;
	border-radius: 3px;
}
.elgg-module-inline > .elgg-head h3 {
	color: white;
}
.elgg-module-popup {
	background-color: white;
	border: 1px solid #ccc;	
	z-index: 9999;
	margin-bottom: 0;
	padding: 5px;
	border-radius: 6px;
	box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.5);
}
.elgg-module-popup > .elgg-head {
	margin-bottom: 5px;
}
.elgg-module-popup > .elgg-head * {
	color: #666;
}
.elgg-module-featured {
	border: 1px solid #666;
	border-radius: 6px;
}
.elgg-module-featured > .elgg-head {
	padding: 5px;
	background-color: #333;
}
.elgg-module-featured > .elgg-head * {
	color: white;
}
.elgg-module-featured > .elgg-body {
	padding: 10px;
}

/* ***************************************
	TABLE
*************************************** */
.elgg-table {
	width: 100%;
	color: <?php echo $colorArray[$colorIndex]; ?>;
	cursor:pointer;
}
.elgg-table td, .elgg-table th {
	background: white;
	padding: 4px 8px;
	color:<?php echo $colorArray[$colorIndex]; ?>;
	vertical-align: middle;
	-webkit-transition:0.25s;
	-moz-transition:0.25s;
	-o-transition:0.25s;
	transition:0.25s;
}
.elgg-table th {
	background-color: #ddd;
	color:<?php echo $colorArray[$colorIndex]; ?>;
}
.elgg-table .alt td {
	background: #eee;
	color:<?php echo $colorArray[$colorIndex]; ?>;
}
.elgg-table input[type=checkbox] {
	margin-top: 3px;
	color:<?php echo $colorArray[$colorIndex]; ?>;
}

.elgg-table-alt {
	width: 100%;
}
.elgg-table-alt th {
	background-color: <?php echo $colorArray[$colorIndex]; ?>;
	font-weight: 400;
	color:white;
}
.elgg-table-alt td, .elgg-table-alt th {
	padding: 2px 4px;
}
.elgg-table-alt td:first-child {
	width: 200px;
	font-weight:400;
}
.elgg-table-alt tr {
	-webkit-transition:0.2s;
	-moz-transition:0.2s;
	-o-transition:0.2s;
	transition:0.2s;
	color: <?php echo $colorArray[$colorIndex]; ?>
}
.elgg-table-alt tr:hover {
	background: <?php echo $colorArray[$colorIndex]; ?>;
	color:white;
}

/* ***************************************
	LISTS AND IMAGE BLOCK
*************************************** */
.elgg-image-block {
	padding: 3px 0;
}
.elgg-image-block .elgg-image {
	float: left;
	margin-right: 5px;
}
.elgg-image-block .elgg-image-alt {
	float: right;
	margin-left: 5px;
}
.elgg-item {
	margin: 3px;
}
.elgg-list-simple li {
	margin-bottom: 5px;
}
.elgg-list-distinct {
	border-top: 1px dotted #CCCCCC;
	margin: 5px 0;
	clear: both;
}
.elgg-list-distinct > li {
	border-bottom: 1px dotted #CCCCCC;
}

.elgg-gallery > li {
	position: relative;
	display: inline-block;
}

/* ***************************************
	FORMS AND INPUT
*************************************** */
label {
	font-weight: bold;
	color: #333333;
	font-size: 110%;
}
label.elgg-state-disabled,
input.elgg-state-disabled {
	opacity: 0.6;
}

fieldset > div {
	margin-bottom: 15px;
}
fieldset > div:last-child {
	margin-bottom: 0;
}
input {
	font: 120% Arial, Helvetica, sans-serif;
	padding: 5px;
	border: 1px solid #ccc;
	color: #666;
	border-radius: 5px;
	margin: 0;
	
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}

/* default elgg core input field classes */
.elgg-input-text,
.elgg-input-tags,
.elgg-input-url,
.elgg-input-plaintext,
.elgg-input-longtext {
	width: 98%;
}
.elgg-input-thin {
	width: 400px;
}
.elgg-input-natural {
	width: auto;
}

input[type="radio"] {
	margin: 0 3px 0 0;
}

select {
	max-width: 100%;
	padding: 4px; 
}

.elgg-fieldset {
	border: 1px solid #ccc;
	border-radius: 5px;
	padding: 5px;
	padding-bottom: 10px;
	margin-bottom: 15px;
}
.elgg-fieldset > legend {
	color: #333333;
	font-size: 110%;
	font-weight: bold;
	padding: 0 3px;
}

.elgg-button {
	font-size: 100%;
	text-decoration: none;
	border-radius: 3px;
	width: auto;
	padding: 6px 12px;
	margin-bottom: 5px;
	cursor: pointer;
	
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}

.elgg-button + .elgg-button {
	margin-left: 5px;
}

.elgg-button-submit,
.elgg-button-action {
	color: white;
	background-color: <?php echo $colorArray[$colorIndex]; ?>;
	box-shadow:0 -6px 0 rgba(0,0,0,.06),0 0 12px rgba(0,0,0,.18),0 12px 18px rgba(0,0,0,.18);
	-webkit-transition:0.25s;
	-moz-transition:0.25s;
	-o-transition:0.25s;
}
.elgg-button-submit:hover,
.elgg-button-action:hover {
	color: white;
	background-color: #0044FF;
	text-decoration: none;
	z-index:12000px;
}
.elgg-button-submit.elgg-state-disabled,
.elgg-button-action.elgg-state-disabled {
	color: #999;
	cursor: default;
}

.elgg-button-cancel {
	color: #333;
	background-color: #ccc;
	border: 1px solid #999;
}
.elgg-button-cancel:hover {
	color: #222;
	background-color: #999;
	text-decoration: none;
}

.elgg-form-useradd input[type=text],
.elgg-form-useradd input[type=password] {
	width: 300px;
}

.elgg-form-settings {
	max-width: 800px;
}
.content-header-options > form {
	float: left;
	margin-right: 10px;
}
.content-header-options form .mtm {
	margin-top: 0;
}

/* **************************************
     DATE PICKER
*************************************** */
.ui-datepicker {
	margin-top: 3px;
	padding: 3px 3px 0;
	border: 1px solid #ccc;
	background-color: white;
}
.ui-datepicker-header {
	padding: 2px 0;
	border: 1px solid #ccc;
	background-color: #eee;
	border-radius: 5px;
}
.ui-datepicker-prev, .ui-datepicker-next {
	position: absolute;
	top: 9px;
	cursor: pointer;
}
.ui-datepicker-prev {
	left: 6px;
}
.ui-datepicker-next {
	right: 6px;
}
.ui-datepicker-title {
	line-height: 1.8em;
	margin: 0 30px;
	text-align: center;
	font-weight: bold;
}
.ui-datepicker-calendar {
	margin-bottom: 2px;
}
.ui-datepicker th {
	border: none;
	font-weight: bold;
	padding: 5px 6px;
	text-align: center;
}
.ui-datepicker td {
	padding: 1px;
}
.ui-datepicker td span, .ui-datepicker td a {
	display: block;
	padding: 2px;
	line-height: 1.2em;
	text-align: right;
	text-decoration: none;
}
.ui-datepicker-calendar .ui-state-default {
	border: 1px solid #ccc;
	color: #555;
	background: #fafafa;
}
.ui-datepicker-calendar .ui-state-hover {
	border: 1px solid #aaa;
	color: #333;
	background: #ccc;
}
.ui-datepicker-calendar .ui-state-active,
.ui-datepicker-calendar .ui-state-active.ui-state-hover {
	font-weight: bold;
	border: 1px solid #999;
	color: #333;
	background: #ddd;
}

/* ***************************************
	AUTOCOMPLETE
*************************************** */
<?php //autocomplete will expand to fullscreen without max-width ?>
.ui-autocomplete {
	position: absolute;
	cursor: default;
}
.elgg-autocomplete-item .elgg-body {
	max-width: 600px;
}
.ui-autocomplete {
	background-color: white;
	border: 1px solid #ccc;
	overflow: hidden;
	border-radius: 5px;
}
.ui-autocomplete .ui-menu-item {
	padding: 0px 4px;
	border-radius: 5px;
}
.ui-autocomplete .ui-menu-item:hover {
	background-color: #eee;
}
.ui-autocomplete a:hover {
	text-decoration: none;
	color: #4690D6;
}
.ui-autocomplete a.ui-state-hover {
	background-color: #eee;
	display: block;
}

/* ***************************************
	USER PICKER
*************************************** */
.elgg-user-picker-list li:first-child {
	border-top: 1px dotted #ccc;
	margin-top: 5px;
}
.elgg-user-picker-list > li {
	border-bottom: 1px dotted #ccc;
}

/* ***************************************
	FRIENDS PICKER
*************************************** */
.friends-picker-main-wrapper {
	margin-bottom: 15px;
}
.friends-picker-container h3 {
	font-size:4em !important;
	text-align: left;
	margin:10px 0 20px !important;
	color:#999 !important;
	background: none !important;
	padding:0 !important;
}
.friends-picker .friends-picker-container .panel ul {
	text-align: left;
	margin: 0;
	padding:0;
}
.friends-picker-wrapper {
	margin: 0;
	padding:0;
	position: relative;
	width: 730px;
}
.friends-picker {
	position: relative;
	overflow: hidden;
	margin: 0;
	padding:0;
	width: 730px;
	height: auto;
	background-color: #dedede;
	border-radius: 8px;
}
.friendspicker-savebuttons {
	background: white;
	border-radius: 8px;
	margin:0 10px 10px;
}
.friends-picker .friends-picker-container { /* long container used to house end-to-end panels. Width is calculated in JS  */
	position: relative;
	left: 0;
	top: 0;
	width: 100%;
	list-style-type: none;
}
.friends-picker .friends-picker-container .panel {
	float:left;
	height: 100%;
	position: relative;
	width: 730px;
	margin: 0;
	padding:0;
}
.friends-picker .friends-picker-container .panel .wrapper {
	margin: 0;
	padding:4px 10px 10px 10px;
	min-height: 230px;
}
.friends-picker-navigation {
	margin: 0 0 10px;
	padding:0 0 10px;
	border-bottom:1px solid #ccc;
}
.friends-picker-navigation ul {
	list-style: none;
	padding-left: 0;
}
.friends-picker-navigation ul li {
	float: left;
	margin:0;
	background:white;
}
.friends-picker-navigation a {
	font-weight: bold;
	text-align: center;
	background: white;
	color: #999;
	text-decoration: none;
	display: block;
	padding: 0;
	width:20px;
	border-radius: 4px;
}
.tabHasContent {
	background: white;
	color:#333 !important;
}
.friends-picker-navigation li a:hover {
	background: #333;
	color:white !important;
}
.friends-picker-navigation li a.current {
	background: #4690D6;
	color:white !important;
}
.friends-picker-navigation-l, .friends-picker-navigation-r {
	position: absolute;
	top: 46px;
	text-indent: -9000em;
}
.friends-picker-navigation-l a, .friends-picker-navigation-r a {
	display: block;
	height: 40px;
	width: 40px;
}
.friends-picker-navigation-l {
	right: 48px;
	z-index:1;
}
.friends-picker-navigation-r {
	right: 0;
	z-index:1;
}
.friends-picker-navigation-l {
	background: url("<?php echo elgg_get_site_url(); ?>_graphics/friendspicker.png") no-repeat left top;
}
.friends-picker-navigation-r {
	background: url("<?php echo elgg_get_site_url(); ?>_graphics/friendspicker.png") no-repeat -60px top;
}
.friends-picker-navigation-l:hover {
	background: url("<?php echo elgg_get_site_url(); ?>_graphics/friendspicker.png") no-repeat left -44px;
}
.friends-picker-navigation-r:hover {
	background: url("<?php echo elgg_get_site_url(); ?>_graphics/friendspicker.png") no-repeat -60px -44px;
}
.friendspicker-savebuttons .elgg-button-submit,
.friendspicker-savebuttons .elgg-button-cancel {
	margin:5px 20px 5px 5px;
}
.friendspicker-members-table {
	background: #dedede;
	border-radius: 8px;
	margin:10px 0 0;
	padding:10px 10px 0;
}

/* ***************************************
      PROGRESS BAR
**************************************** */
.elgg-progressbar {
	height: 20px;
	border: 1px solid #CCC;
}
.ui-progressbar-value {
	height: 20px;
	background: green;
}
.elgg-progressbar-counter {
	float: left;
	color: white;
	margin: 1px;
}

/* ***************************************
	PAGINATION
*************************************** */
.elgg-pagination {
	margin: 10px 0;
	display: block;
	text-align: center;
}
.elgg-pagination li {
	display: inline;
	margin: 0 6px 0 0;
	text-align: center;
}
.elgg-pagination a, .elgg-pagination span {
	padding: 2px 6px;
	color: #333;
	border: 1px solid #333;
	font-size: 12px;
	text-decoration: none;
}
.elgg-pagination a:hover {
	background: #333;
	color: white;
	text-decoration: none;
}
.elgg-pagination .elgg-state-disabled span {
	color: #CCC;
	border-color: #CCC;
}
.elgg-pagination .elgg-state-selected span {
	color: #000;
	border-color: #ccc;
}

/* ***************************************
	TABS
*************************************** */
.elgg-tabs {
	margin-bottom: 5px;
	border-bottom: 1px solid #ccc;
	display: table;
	width: 100%;
}
.elgg-tabs li {
	float: left;
	border: 1px solid #ccc;
	border-bottom-width: 0;
	background: #eee;
	margin: 0 0 0 10px;
}
.elgg-tabs a {
	text-decoration: none;
	display: block;
	padding: 3px 10px 0 10px;
	text-align: center;
	height: 21px;
	color: <?php echo $colorArray[$colorIndex]; ?>;
}
.elgg-tabs a:hover {
	background: <?php echo $colorArray[$colorIndex]; ?>;
	color:#333;
}
.elgg-tabs .elgg-state-selected {
	border-color: #ccc;
	background: white;
}
.elgg-tabs .elgg-state-selected a {
	position: relative;
	top: 2px;
	background: white;
}

/* ***************************************
	SIDEBAR MENU
*************************************** */
.elgg-admin-sidebar-menu a {
	display: block;
	padding: 5px;
	color: <?php echo $colorArray[$colorIndex]; ?>;
	cursor: pointer;
	text-decoration: none;
	margin-bottom: 2px;
	font-weight:400;
	padding-left:10px;
	-webkit-transition:0.25s;
	-moz-transition:0.25s;
	-o-transition:0.25s;
	transition:0.25s;
}
.elgg-admin-sidebar-menu a:hover {
	text-decoration: none;
	font-weight:400;
	background: <?php echo $colorArray[$colorIndex]; ?>;
	color: white;
	margin-left:10px;
}
.elgg-admin-sidebar-menu li.elgg-state-selected > a {
	background-color: <?php echo $colorArray[$colorIndex]; ?>;
	color:white;
}
.elgg-admin-sidebar-menu .elgg-menu-closed:before {
	content: "\25B8";
	padding-right: 4px;
}
.elgg-admin-sidebar-menu .elgg-menu-opened:before {
	content: "\25BE";
	padding-right: 4px;
}
.elgg-admin-sidebar-menu .elgg-child-menu {
	display: none;
	padding-left: 30px;
}
.elgg-admin-sidebar-menu li.elgg-state-selected > ul {
	display: block;
}
.elgg-admin-sidebar-menu h2 {
	padding-bottom: 5px;
	font-weight:300;
	font:"ProductSans Regular";
	margin-left:10px;
	margin-top:10px;
	color: <?php echo $colorArray[$colorIndex]; ?>;
	cursor:pointer;
	-webkit-transition:0.25s;
	-moz-transition:0.25s;
	-o-transition:0.25s;
	transition:0.25s;
}
.elgg-admin-sidebar-menu ul.elgg-menu-page {
	padding-bottom: 15px;
}

/* ***************************************
	TITLE MENU
*************************************** */
.elgg-menu-title {
	float: right;
}
.elgg-menu-title > li {
	display: inline-block;
	margin-left: 4px;
}

/* ***************************************
	FOOTER MENU
*************************************** */
.elgg-menu-footer {
	color: white;
	background:<?php echo $colorArray[$colorIndex]; ?>;
}
.elgg-menu-footer li {
	float: left;
}
.elgg-menu-footer li:after {
	content: "\007C";
	display: inline-block;
	padding: 0 4px 0 4px;
	font-weight: normal;
}
.elgg-menu-footer li:last-child:after {
	content: "";
}

/* ***************************************
	GENERAL MENU
*************************************** */
.elgg-menu-general > li,
.elgg-menu-general > li > a {
	display: inline-block;
	color: white;
	background:<?php echo $colorArray[$colorIndex]; ?>;
}

.elgg-menu-general > li:after {
	content: "\007C";
	padding: 0 4px;
}

/* ***************************************
	HOVER MENU
*************************************** */
.elgg-menu-hover {
	display: none;
	color:<?php echo $colorArray[$colorIndex]; ?>;
	position: absolute;
	z-index: 10000;
	width: 165px;
	padding-top: 2px;
	padding-bottom: 2px;
	border: solid 1px #E5E5E5;
	border-color: #E5E5E5 #999 #999 #E5E5E5;
	background-color: white;
	box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.50);
}
.elgg-menu-hover > li {
	padding:4px;
	color:<?php echo $colorArray[$colorIndex]; ?>;
}
.elgg-menu-hover > li:first-child {
	font-size:18px;
	font-weight:400;
	background:white;
	color:<?php echo $colorArray[$colorIndex]; ?>;
}
.elgg-menu-hover > li:last-child {
	border-bottom: none;
}
.elgg-menu-hover .elgg-heading-basic {
	display: block;
}
.elgg-menu-hover a {
	display: block;
	padding: 2px 8px;
	font-size: 92%;
	color: <?php echo $colorArray[$colorIndex]; ?>;
}
.elgg-menu-hover a:hover {
	background:<?php echo $colorArray[$colorIndex]; ?>;
	color:white;
	text-decoration: none;
}
.elgg-menu-hover-admin a {
	color: red;
}
.elgg-menu-hover-admin a:hover {
	color: white;
	background-color: red;
}

/* ***************************************
	ENTITY MENU
*************************************** */
<?php // height depends on line height/font size ?>
.elgg-menu-entity, .elgg-menu-annotation {
	float: right;
	margin-left: 15px;
	font-size: 90%;
	color: #666;
	line-height: 16px;
	height: 16px;
}
.elgg-menu-entity > li, .elgg-menu-annotation > li {
	margin-left: 15px;
}
.elgg-menu-entity > li > a, .elgg-menu-annotation > li > a {
	color: #aaa;
}
<?php // need to override .elgg-menu-hz ?>
.elgg-menu-entity > li > a, .elgg-menu-annotation > li > a {
	display: block;
}
.elgg-menu-entity > li > span, .elgg-menu-annotation > li > span {
	vertical-align: baseline;
}

/* ***************************************
	WIDGET MENU
*************************************** */
.elgg-menu-widget > li {
	position: absolute;
	top: 4px;
	display: inline-block;
	width: 18px;
	height: 18px;
	padding: 2px 2px 0 0;
}
.elgg-menu-widget > .elgg-menu-item-collapse {
	left: 5px;
}
.elgg-menu-widget > .elgg-menu-item-delete {
	right: 5px;
}
.elgg-menu-widget > .elgg-menu-item-settings {
	right: 25px;
}

/* ***************************************
	MORE MENUS
*************************************** */
/* Horizontal menus w/ separator support */
.elgg-menu-hz > li,
.elgg-menu-hz > li:after,
.elgg-menu-hz > li > a {
	display: inline-block;
	vertical-align: middle;
}
/* Allow inline image blocks in horizontal menus */
.elgg-menu-hz .elgg-body:after {
	content: '.';
}
.elgg-menu > li:last-child::after {
	display: none;
}
.elgg-menu-admin-footer a {
	color: #eee;
	border:none;
}
.elgg-menu-admin-footer  {
	background:<?php echo $colorArray[$colorIndex]; ?>;
}
.elgg-menu-admin-footer > li {
	padding-right: 25px;
}
.elgg-menu-longtext {
	float: right;
}
.elgg-menu-metadata {
	list-style-type: none;
	float: right;
	margin-left: 15px;
	font-size: 90%;
}
.elgg-menu-metadata > li {
	float: left;
	margin-left: 15px;
}
.elgg-menu-metadata, .elgg-menu-metadata a {
	color: white;
}

/* ***************************************
	WIDGETS
*************************************** */
.elgg-layout-widgets > .elgg-widgets {
	float: right;
}
.elgg-widgets {
	min-height: 30px;
}
.elgg-widget-add-control {
	text-align: right;
	margin: 5px 5px 15px;
}
.elgg-widgets-add-panel {
	padding: 10px;
	margin: 0 5px 15px;
	background: <?php echo $colorArray[$colorIndex]; ?>;
	color:white;
}
.elgg-widgets-add-panel ul {
	padding: 0;
	margin: 0;
}
.elgg-widgets-add-panel li {
	float: left;
	margin: 2px 10px;
	list-style: none;
	width: 200px;
	padding: 4px;
	color:white;
	background-color:<?php echo $colorArray[$colorIndex]; ?>;
	font-weight: bold;
}
.elgg-widgets-add-panel li a {
	display: block;
}
.elgg-widget-single.elgg-state-available {
	color: white;
	background:<?php echo $colorArray[$colorIndex]; ?>;
	cursor: pointer;
	font:"ProductSans Regular";
	font-weight:400;
	-webkit-transition:0.25s;
	-moz-transition:0.25s;
	-o-transition:0.25s;
	transition:0.25s;
	align-content:center;
}
.elgg-widget-single.elgg-state-available:hover {
	color:<?php echo $colorArray[$colorIndex]; ?>;
	background:white;
}
.elgg-widget-single.elgg-state-unavailable {
	color: #000000;
	background:<?php echo $colorArray[$colorIndex]; ?>;
}

.elgg-module-widget {
	background-color: #dedede;
	padding: 1px;
	margin: 0 5px 15px;
	position: relative;
	-webkit-transition:0.25s;
	-moz-transition:0.25s;
	-o-transition:0.25s;
	transition:0.25s;
}
.elgg-module-widget:hover {
	box-shadow:0 -6px 0 rgba(0,0,0,.06),0 0 12px rgba(0,0,0,.18),0 12px 18px rgba(0,0,0,.18);
}
.elgg-module-widget > .elgg-head {
	background-color: <?php echo $colorArray[$colorIndex]; ?>;
	height: 26px;
	color:white;
	overflow: hidden;
}
.elgg-module-widget.elgg-state-draggable .elgg-widget-handle {
	cursor: move;
}
.elgg-module-widget > .elgg-head h3 {
	float: left;
	padding: 4px 45px 0 20px;
	color: white;
	font-weight:400;
}

.elgg-widget-collapse-button {
	color: #fff;
	text-decoration: none;
}
a.elgg-widget-collapse-button:hover,
a.elgg-widget-collapsed:hover {
	color: #fff;
	text-decoration: none;
}
a.elgg-widget-collapse-button:before {
	content: "\25BC";
}
a.elgg-widget-collapsed:before {
	content: "\25BA";
}
.elgg-module-widget > .elgg-body {
	background-color: white;
	width: 100%;
	overflow: hidden;
}
.elgg-widget-edit {
	display: none;
	width: 96%;
	padding: 2%;
}
.elgg-widget-content {
	padding: 10px;
}
.elgg-widget-placeholder {
	border: 2px dashed <?php echo $colorArray[$colorIndex]; ?>;
	margin-bottom: 15px;
}

/* ***************************************
	GRID
*************************************** */
.elgg-grid {}
.elgg-col {
	float: left;
}
.elgg-col-alt {
	float: right;
}
.elgg-col-1of1 {
	float: none;
}
.elgg-col-1of2 {
	width: 50%;
}
.elgg-col-1of3 {
	width: 33.33%;
}
.elgg-col-2of3 {
	width: 66.66%;
}
.elgg-col-1of4 {
	width: 25%;
}
.elgg-col-3of4 {
	width: 75%;
}
.elgg-col-1of5 {
	width: 20%;
}
.elgg-col-2of5 {
	width: 40%;
}
.elgg-col-3of5 {
	width: 60%;
}
.elgg-col-4of5 {
	width: 80%;
}
.elgg-col-1of6 {
	width: 16.66%;
}
.elgg-col-5of6 {
	width: 83.33%;
}

/* ***************************************
	ICONS
*************************************** */
.elgg-icon {
	background: transparent url(<?php echo elgg_get_site_url(); ?>_graphics/admin_sprites.png) no-repeat left;
	width: 16px;
	height: 16px;
	display: inline-block;
	margin: 0 2px;
	vertical-align: text-bottom;
}
.elgg-module .elgg-head .elgg-icon {
	vertical-align: baseline;
}
.elgg-icon-delete:hover,
.elgg-icon-delete-alt:hover {
	background-position: 0 -0px;
}
.elgg-icon-delete,
.elgg-icon-delete-alt {
	background-position: 0 -18px;
}
.elgg-icon-drag-arrow:hover {
	background-position: 0 -36px;
}
.elgg-icon-drag-arrow {
	background-position: 0 -54px;
}
.elgg-icon-hover-menu:hover {
	background-position: 0 -72px;
}
.elgg-icon-hover-menu {
	background-position: 0 -90px;
}
.elgg-icon-settings-alt:hover {
	background-position: 0 -108px;
}
.elgg-icon-settings-alt {
	background-position: 0 -126px;
}

.elgg-ajax-loader {
	background: white url(<?php echo elgg_get_site_url(); ?>_graphics/ajax_loader_bw.gif) no-repeat center center;
	min-height: 33px;
	min-width: 33px;
}

/* ***************************************
	AVATAR ICONS
*************************************** */
.elgg-avatar {
	position: relative;
	display: inline-block;
}
.elgg-avatar > a > img {
	display: block;
}
.elgg-avatar-tiny > a > img {
	width: 25px;
	height: 25px;
	
	/* remove the border-radius if you don't want rounded avatars in supported browsers */
	border-radius: 50%;
	
	background-clip:  border;
	background-size: 25px;
}
.elgg-avatar-small > a > img {
	width: 40px;
	height: 40px;
	
	/* remove the border-radius if you don't want rounded avatars in supported browsers */
	border-radius: 50%;
	background-clip:  border;
	background-size: 40px;
}
.elgg-avatar-medium > a > img {
	width: 100px;
	height: 100px;
}
.elgg-avatar-large > a > img {
	width: 200px;
	height: 200px;
}
.elgg-avatar > .elgg-icon-hover-menu {
	display: none;
	position: absolute;
	right: 0;
	bottom: 0;
	margin: 0;
	cursor: pointer;
}
.elgg-avatar {
	position: relative;
}
.elgg-avatar > a > img {
	display: block;
}
.elgg-avatar-tiny > a > img {
	width: 25px;
	height: 25px;

	/* remove the border-radius if you don't want rounded avatars in supported browsers */
	border-radius: 50%;
	background-clip: border;
	background-size: 25px;
}
.elgg-avatar-small > a > img {
	width: 40px;
	height: 40px;

	/* remove the border-radius if you don't want rounded avatars in supported browsers */
	border-radius: 50%;

	background-clip:  border;
	background-size: 40px;
}
.elgg-avatar-medium > a > img {
	width: 100px;
	height: 100px;
}
.elgg-avatar-large > a > img {
	width: 200px;
	height: 200px;
}

/* ***************************************
	PLUGINS
**************************************** */
.elgg-plugin {
	box-shadow:0 -6px 0 rgba(0,0,0,.06),0 0 12px rgba(0,0,0,.18),0 12px 18px rgba(0,0,0,.18);
	margin: 0 0 5px;
	padding: 10px;
	border-radius: 5px;
}
.elgg-plugin.elgg-state-draggable > .elgg-image-block .elgg-head {
	cursor: move;
}
.elgg-plugin p {
	margin: 0;
	font-weight:400;
}
.elgg-plugin h3 {
	color: <?php echo $colorArray[$colorIndex]; ?>;
	padding-bottom: 10px;
}
.elgg-plugin-settings {
	font-weight: normal;
	font-size: 0.9em;
}
.elgg-plugin-screenshot {
	display: inline;
}
.elgg-plugin-screenshot img {
	border: 1px solid #999;
}
.elgg-plugin-screenshot-lightbox {
	display: block;
	position: absolute;
	width: 99%;
	text-align: center;
	background-color: white;
	border: 1px solid #999;
	border-radius: 8px;
}
.elgg-plugin-screenshot-lightbox h2 {
	color: black;
}
.elgg-plugin-contributors {
	list-style-position: inside;
	list-style-type: circle;
}
.elgg-plugin-contributors li {
	font-style: italic;
}
.elgg-plugin-contributors dl,
.elgg-plugin-contributors dd {
	display: inline;
	padding-right: 5px
}
.elgg-plugin-contributors dt {
	display: none;
}
.elgg-plugin-contributors dd:after {
	content: ', ';
}
.elgg-plugin-contributors dd.elgg-plugin-contributor-name:after {
	content: ' - ';
}
.elgg-plugin-contributors dd.elgg-plugin-contributor-description:after {
	content: '';
}
.elgg-plugin.elgg-state-active {
	background: <?php echo $colorArray[$colorIndex]; ?>;
	color:white;
}
.elgg-plugin.elgg-state-active a {
	color:white;
	-webkit-transition:0.25s;
	-o-transition:0.25s;
	-moz-transition:0.25s;
	transition:0.25s;
}
.elgg-plugin.elgg-state-active a:hover {
	color:#3F51B5;
}
.elgg-plugin.elgg-state-active h3 {
	color:white;
}
.elgg-plugin.elgg-state-active .elgg-plugin-more {
	background: <?php echo $colorArray[$colorIndex]; ?>;
	color:white;
}
.elgg-plugin.elgg-state-inactive {
	background: #dedede;
}
.elgg-plugin .elgg-state-error {
	background: #fbe3e4;
	color: #8a1f11;
	border-color: #fbc2c4;
	font-weight: bold;
}
.elgg-plugin .elgg-state-warning {
	background: #fbedb5;
	color: #000000;
	border-color: #fbe58b;
	font-weight: bold;
}
.elgg-plugin-more {
	background-color: #eee;
	border-radius: 8px;
	padding: 5px 10px;
	margin: 4px 0;
}
ul.elgg-plugin-categories, ul.elgg-plugin-categories > li,
ul.elgg-plugin-resources, ul.elgg-plugin-resources > li {
	display: inline;
}
.elgg-plugin-category-bundled {
	border-width: 2px;
	border-color: #0054A7;
}
.elgg-plugin .elgg-menu-hz > li:after {
	content: ",";
	padding-right: 10px;
}

/****************************************
	MARKDOWN
****************************************/
.elgg-markdown {
	margin: 15px;
}
.elgg-markdown h1,
.elgg-markdown h2,
.elgg-markdown h3,
.elgg-markdown h4,
.elgg-markdown h5,
.elgg-markdown h6 {
	margin: 1em 0 1em -15px;
	color: #333;
}
.elgg-markdown ol {
	list-style: decimal;
	padding-left: 2em;
}
.elgg-markdown ul {
	list-style: disc;
	padding-left: 2em;
}
.elgg-markdown p {
	margin: 15px 0;
}
.elgg-markdown img {
	max-width: 100%;
	height: auto;
	margin: 10px 0;
}
.elgg-markdown pre > code {
	border: none;
}

/* ***************************************
	MISC
*************************************** */
.elgg-content-thin {
	max-width: 600px;
}

.elgg-subtext {
	color: #666;
	font-size: 85%;
	line-height: 1.2em;
	font-style: italic;
	margin-bottom: 5px;
}

.elgg-text-help {
	display: block;
	font-size: 85%;
	font-style: italic;
}

.elgg-longtext-control {
	margin-left: 14px;
	font-size: 80%;
	cursor: pointer;
}

table.mceLayout {
	width:100% !important;
}

.elgg-output dt {
	font-weight: bold;
}
.elgg-output dd {
	margin: 0 0 1em 2em;
}

<?php echo elgg_view('css/elements/misc/spinner.css') ?>

/* ***************************************
	HELPERS
*************************************** */
.hidden,
.elgg-page .hidden {
	display: none;
}
.centered {
	margin: 0 auto;
}
.center {
	text-align: center;
}
.float {
	float: left;
}
.float-alt {
	float: right;
}
.elgg-toggle {
	cursor: pointer;
}
.elgg-discover .elgg-discoverable {
	display: none;
}
.elgg-discover:hover .elgg-discoverable {
	display: block;
}
.elgg-transition:hover,
.elgg-transition:focus,
:focus > .elgg-transition {
	opacity: .7;
}

/* ***************************************
	BORDERS AND SEPARATORS
*************************************** */
.elgg-border-plain {
	border: 1px solid #eeeeee;
}
.elgg-border-transition {
	border: 1px solid #eeeeee;
}
.elgg-divide-top {
	border-top: 1px solid #CCCCCC;
}
.elgg-divide-bottom {
	border-bottom: 1px solid #CCCCCC;
}
.elgg-divide-left {
	border-left: 1px solid #CCCCCC;
}
.elgg-divide-right {
	border-right: 1px solid #CCCCCC;
}

/* ***************************************
	SPACING (from OOCSS)
*************************************** */
.pan{padding:0}
.pas{padding:5px}
.pam{padding:10px}
.pal{padding:20px}
.ptn{padding-top:0}
.pts{padding-top:5px}
.ptm{padding-top:10px}
.ptl{padding-top:20px}
.prn{padding-right:0}
.prs{padding-right:5px}
.prm{padding-right:10px}
.prl{padding-right:20px}
.pbn{padding-bottom:0}
.pbs{padding-bottom:5px}
.pbm{padding-bottom:10px}
.pbl{padding-bottom:20px}
.pln{padding-left:0}
.pls{padding-left:5px}
.plm{padding-left:10px}
.pll{padding-left:20px}
.phn{padding-left:0;padding-right:0}
.phs{padding-left:5px;padding-right:5px}
.phm{padding-left:10px;padding-right:10px}
.phl{padding-left:20px;padding-right:20px}
.pvn{padding-top:0;padding-bottom:0}
.pvs{padding-top:5px;padding-bottom:5px}
.pvm{padding-top:10px;padding-bottom:10px}
.pvl{padding-top:20px;padding-bottom:20px}
.man{margin:0}
.mas{margin:5px}
.mam{margin:10px}
.mal{margin:20px}
.mtn{margin-top:0}
.mts{margin-top:5px}
.mtm{margin-top:10px}
.mtl{margin-top:20px}
.mrn{margin-right:0}
.mrs{margin-right:5px}
.mrm{margin-right:10px}
.mrl{margin-right:20px}
.mbn{margin-bottom:0}
.mbs{margin-bottom:5px}
.mbm{margin-bottom:10px}
.mbl{margin-bottom:20px}
.mln{margin-left:0}
.mls{margin-left:5px}
.mlm{margin-left:10px}
.mll{margin-left:20px}
.mhn{margin-left:0;margin-right:0}
.mhs{margin-left:5px;margin-right:5px}
.mhm{margin-left:10px;margin-right:10px}
.mhl{margin-left:20px;margin-right:20px}
.mvn{margin-top:0;margin-bottom:0}
.mvs{margin-top:5px;margin-bottom:5px}
.mvm{margin-top:10px;margin-bottom:10px}
.mvl{margin-top:20px;margin-bottom:20px}

/* ***************************************
	RESPONSIVE
*************************************** */

html {
	font-size: 100%;
	-webkit-text-size-adjust: 100%;
	-ms-text-size-adjust: 100%;
}
.elgg-admin-button-nav {
	display: none;
	float: right;
	margin: 6px 0 0 10px;	
	cursor: pointer;
	-webkit-transition:0.25s;
	-moz-transition:0.25s;
	-o-transition:0.25s;
	transition:0.25s;
}
.elgg-admin-button-nav:hover .icon-bar {
	background-color: lightblue;
}
.elgg-admin-button-nav .icon-bar {
	background-color: white;
	border-radius: 1px 1px 1px 1px;	
	display: block;
	height: 3px;
	width: 26px;
}
.elgg-admin-button-nav .icon-bar + .icon-bar {
	margin-top: 5px;
}
@media (max-width: 1030px) {
	.elgg-page > .elgg-inner {
		padding: 20px 20px 0;
		width: auto;
		min-width: 0;
	}
	.elgg-col-1of2 {
		width: 100%;
		min-height: 0 !important;
	}
}
@media (min-width: 769px) {
	#elgg-admin-nav-collapse {
		display: block !important;
	}
}
@media (max-width: 768px) {
	.elgg-admin-button-nav {		
		display: block;
	}
	.elgg-heading-site {
		display: none;
	}
	#elgg-admin-nav-collapse {
		display: none;
		width: 100%;
		background-color: <?php echo $colorArray[$colorIndex]; ?>;
	}
	.elgg-sidebar {
		position: static;
		z-index: 100;
		left: 0;
		top: 0;
		width: auto;
		float: none;
		background-color: #111;
		margin: 0;
	}
	.elgg-module-main {
		border: none;
		padding: 0;
	}
	.elgg-module-main > .elgg-body {
		padding: 30px;
	}
	/* Sidebar menu */
	.elgg-admin-sidebar-menu a {
		padding: 8px 12px;
		color: #999;
		margin-bottom: 0;
		border-radius: 0;
		border-color: #111;
		border-style: solid;
		border-width: 0 0 0 4px;
	}
	.elgg-admin-sidebar-menu a:hover {
		border-color: #333;
		border-style: solid;
		border-width: 0 0 0 4px;
		background: #111;
	}
	.elgg-admin-sidebar-menu li.elgg-state-selected > a {
		color: #fff;
		border-color: #4787B8;
		border-style: solid;
		border-width: 0 0 0 4px;
		background: #111;
	}
	.elgg-admin-sidebar-menu li {
		border-color: #222;
		border-style: solid;
		border-width: 0 0 1px 0;
	}
}
@media (max-width: 480px) {
	.elgg-form-useradd input[type=text],
	.elgg-form-useradd input[type=password] {
		width: 100%;
	}
}
