<?php
$sec = date('s');
$colorArray = array('#3F51B5', '#2196F3', '#673AB7', '#FF4336', '#9C27B0', '#03A9F4', '#009688', '#4CAF50', '#8BC34A', '#FF9800', '#FF5722', '#795548');
$colorIndex = $sec % 12;
?>
/* <style> /**/	

/* ***************************************
	PAGE LAYOUT
*************************************** */
/***** DEFAULT LAYOUT ******/
<?php // the width is on the page rather than topbar to handle small viewports ?>
.elgg-page-default {
	min-width: 800px;
	margin-top:40.25px;
}
.elgg-page-default .elgg-page-header > .elgg-inner {
	max-width: 990px;
	margin: 0 auto;
	min-height: 65px;
}
.elgg-page-default .elgg-page-navbar > .elgg-inner {
	max-width: 990px;
	margin: 0 auto;
	height: auto;
}
.elgg-page-default .elgg-page-body > .elgg-inner {
	max-width: 990px;
	margin: 0 auto;
}
.elgg-page-default .elgg-page-footer > .elgg-inner {
	max-width: 990px;
	margin: 0 auto;
	padding: 5px 0;
	border-top: 1px solid #DEDEDE;
}

/***** TOPBAR ******/
.elgg-page-topbar {
	background: <?php echo $colorArray[$colorIndex]; ?>;
	border-top: 1px solid <?php echo $colorArray[$colorIndex]; ?>;
	border-bottom: 1px solid <?php echo $colorArray[$colorIndex]; ?>;
	padding: 0 20px;
	position: relative;
	height: 32px;
	z-index: 9000;
}

/***** PAGE MESSAGES ******/
.elgg-system-messages {
	position: fixed;
	top: 32px;
	right: 20px;
	max-width: 500px;
	z-index: 2000;
}
.elgg-system-messages li {
	margin-top: 10px;
}
.elgg-system-messages li p {
	margin: 0;
}

/***** PAGE HEADER ******/
.elgg-page-header {
	padding: 5px 20px 10px;
	position: relative;
	background: <?php echo $colorArray[$colorIndex]; ?>;
}
.elgg-page-header > .elgg-inner {
	position: relative;
}
/***** PAGE NAVBAR ******/
.elgg-page-navbar {
	padding: 0 20px;
	background: <?php echo $colorArray[$colorIndex]; ?>;
	position:fixed;
	top:0px;
	z-index:999999;
	width:100%;
	padding:0px;
}
.elgg-page-navbar > .elgg-inner {
	position: relative;
}

/***** PAGE BODY LAYOUT ******/
.elgg-page-body {
	padding: 0 20px;
	width:auto;
	-ms-scrollbar-3dlight-color:blue;
	-ms-scrollbar-arrow-color:green;
	-ms-scrollbar-base-color:blue;
}

.elgg-layout {
	min-height: 360px;
}
.elgg-layout-widgets > .elgg-widgets {
	float: right;
}
.elgg-sidebar {
	position: relative;
	float: right;
	padding-top:25px;
	padding-left:17px;
	padding-right:9px;
	width: 23.212121%;
	background-color: white;
	box-shadow:0 -6px 0 rgba(0,0,0,.06),0 0 12px rgba(0,0,0,.18),0 12px 18px rgba(0,0,0,.18);
	margin-top:24px;
	margin-right:-60px;
	padding:20px 20px 20px 20px;
}
.elgg-sidebar-alt {
	position: relative;
	padding: 32px 30px 20px 0;
	float: left;
	width: 16.161616%;
	margin: 0 30px 0 0;
}
.elgg-main {
	position: relative;
	padding-right:20px;
	padding-left:-40px;
	padding:20px 20px 20px 20px;
	min-height: 320px;
	min-width: 320px;
	margin-top:24px;
	box-shadow:0 -6px 0 rgba(0,0,0,.06),0 0 12px rgba(0,0,0,.18),0 12px 18px rgba(0,0,0,.18);
}
.elgg-main > .elgg-head {
	padding-bottom: 5px;
	border-bottom: 1px solid #EBEBEB;
	margin-bottom: 10px;
}
.elgg-layout-one-sidebar .elgg-main {
	float: left;
	width: 72.525252%;
}
.elgg-layout-two-sidebar .elgg-main {
	float: left;
	width: 50.101010%;
}

/***** PAGE FOOTER ******/
.elgg-page-footer {
	color: #999;
	font-family:Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
	font-size:16px;
	position: relative;
	padding-right:20px;
	padding-left:-40px;
	padding:20px 20px 20px 20px;
	margin-top:24px;
	box-shadow:0 -6px 0 rgba(0,0,0,.06),0 0 6px rgba(0,0,0,.18),0 12px 18px rgba(0,0,0,.18);
}

.elgg-page-footer a:hover {
	color: #666;
}
.search-input  {
	background: white;
	animation:ease-in 0.25s;
	-webkit-animation:ease-in 0.25s;
	-moz-transition:ease-in 0.25s;
	-o-transition:ease-in 0.25s;
	font:"ProductSans Regular";
	font-weight:400;
	color:white;
}
.search-input:focus  {
	color:<?php echo $colorArray[$colorIndex]; ?>;
	width:200px;
	font:"ProductSans Regular";
	font-weight:400;
	background:white;
}
.fixed {
	position:fixed;
	top:0px;
	z-index:999999;
	width:100%;
	padding:0px;
}
.separated {
margin-top:100px;
}