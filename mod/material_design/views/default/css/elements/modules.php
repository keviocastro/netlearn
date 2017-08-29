<?php
$sec = date('s');
$colorArray = array('#3498db', '#34495e', '#e74c3c');
$colorIndex = $sec % 3;
?>
/* <style> /**/

/* ***************************************
	Modules
*************************************** */
.elgg-module {
	overflow: hidden;
	margin-bottom: 20px;
}

/* Aside */
.elgg-module-aside .elgg-head {
	border-bottom: 1px solid #DCDCDC;

	margin-bottom: 5px;
	padding-bottom: 5px;
}

/* Info */
.elgg-module-info > .elgg-head {
	background-color: #F0F0F0;
	padding: 10px;
	margin-bottom: 10px;
	height: auto;
	overflow: hidden;
	box-shadow: inset 0 0 1px #FFFFFF;
}
.elgg-module-info > .elgg-head * {
	color: #444;
}

/* Popup */
.elgg-module-popup {
	background-color: <?php echo $colorArray[$colorIndex]; ?>;
	z-index: 9999;
	margin-bottom: 0;
	padding: 5px;
	border-radius: 3px;
	box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.5);
}
.elgg-module-popup > .elgg-head {
	margin-bottom: 5px;
}
.elgg-module-popup > .elgg-head * {
	color: #0054A7;
}

/* Dropdown */
.elgg-module-dropdown {
	background-color: #FFF;
	border: 1px solid #DEDEDE;
	border-radius: 0 0 3px 3px;
	display:none;
	width: 240px;
	padding: 20px;
	margin-right: 0;
	z-index: 100;
	position: absolute;
	right: 0;
	top: 100%;
	box-shadow: 1px 3px 5px rgba(0, 0, 0, 0.25);
}

/* Featured */
.elgg-module-featured {
	border: 1px solid #DCDCDC;
	border-radius: 3px;
}
.elgg-module-featured > .elgg-head {
	background-color: #F0F0F0;
	padding: 10px;
	height: auto;
	overflow: hidden;
	border-bottom: 1px solid #DCDCDC;
	box-shadow: inset 0 0 1px #FFFFFF;
}
.elgg-module-featured > .elgg-head * {
	color: #666;
}
.elgg-module-featured > .elgg-body {
	padding: 10px;
}

/* ***************************************
	Widgets
*************************************** */
.elgg-widgets {
	min-height: 30px;
	box-shadow:0 -6px 0 rgba(0,0,0,.06),0 0 12px rgba(0,0,0,.18),0 12px 18px rgba(0,0,0,.18);
}
.elgg-widget-add-control {
	text-align: right;
	margin: 0 5px 15px;
}
.elgg-widget-add-control .elgg-button {
	display: inline;
}
.elgg-widgets-add-panel {
	padding: 10px;
	margin: 0 5px 15px;
	color:white;
	background-color:<?php echo $colorArray[$colorIndex]; ?>;
}
<?php //@todo location-dependent style: make an extension of elgg-gallery ?>
.elgg-widgets-add-panel li {
	float: left;
	margin: 2px 10px;
	width: 200px;
	padding: 4px;
	background-color: <?php echo $colorArray[$colorIndex]; ?>;
	font-weight: bold;
	box-shadow:0 -6px 0 rgba(0,0,0,.06),0 0 12px rgba(0,0,0,.18),0 12px 18px rgba(0,0,0,.18);
	-webkit-transition:0.25s;
	-moz-transition:0.25s;
	-o-transition:0.25s;
	transition:0.25s;
}
.elgg-widgets-add-panel li a {
	display: block;
	color: <?php echo $colorArray[$colorIndex]; ?>;
}
.elgg-widgets-add-panel li a:hover {
	color:#3D51B5;
}
.elgg-widgets-add-panel .elgg-state-available {
	font-weight:400;
	color: <?php echo $colorArray[$colorIndex]; ?>;
	background: white;
	cursor: pointer;
	-webkit-transition:0.25s;
	-moz-transition:0.25s;
	-o-transition:0.25s;
	transition:0.25s;
	box-shadow:0 -6px 0 rgba(0,0,0,.06),0 0 12px rgba(0,0,0,.18),0 12px 18px rgba(0,0,0,.18);
}
.elgg-widgets-add-panel .elgg-state-available:hover {
	background-color: <?php echo $colorArray[$colorIndex]; ?>;
	color:white;
	padding-left:10px;
}
.elgg-widgets-add-panel .elgg-state-unavailable {
	color: #888;
}

.elgg-module-widget {
	margin: 0 10px 15px;
	position: relative;
	padding:5px;
	-webkit-transition:0.25s;
	-moz-transition:0.25s;
	-o-transition:0.25s;
	transition:0.25s;
	border-radius:5px;
}
.elgg-module-widget:hover {
	box-shadow:0 -6px 0 rgba(0,0,0,.06),0 0 12px rgba(0,0,0,.18),0 12px 18px rgba(0,0,0,.18);
}
.elgg-module-widget > .elgg-head {
	background-color: <?php echo $colorArray[$colorIndex]; ?>;
	color: white;
	padding: 10px 0;
	height: auto;
	overflow: hidden;
	font-weight:400;
	font-family:Roboto, "Roboto Condensed";
	box-shadow: inset 0 0 1px #FFFFFF;
}
.elgg-module-widget > .elgg-head h3 {
	float: left;
	color: white;
	padding: 0 45px 0 30px;
}
.elgg-module-widget.elgg-state-draggable .elgg-widget-handle {
	cursor: move;
}
a.elgg-widget-collapse-button {
	color: white;
}
a.elgg-widget-collapse-button:hover,
a.elgg-widget-collapsed:hover {
	color: blue;
	text-decoration: none;
}
a.elgg-widget-collapse-button:before {
	content: "\25BC";
}
a.elgg-widget-collapsed:before {
	content: "\25BA";
}
.elgg-module-widget > .elgg-body {
	width: 100%;
	overflow: hidden;
}
.elgg-widget-edit {
	display: none;
	width: auto;
	padding: 10px;
	background-color: white;
}
.elgg-widget-content {
	padding: 10px;
	font-weight:400;
	font-family:Roboto, "Roboto Condensed";
}
.elgg-widget-placeholder {
	border: 3px dashed <?php echo $colorArray[$colorIndex]; ?>;
	margin-bottom: 15px;
}
