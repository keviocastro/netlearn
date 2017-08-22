<?php

/**
 * Unita css
 */

?>
.elgg-content .elgg-icon-push-pin-alt {
	margin-right: 7px;
}
.file-gallery-item {
	padding: 10px;
}
.logo-sidebar-block {

}
.logo-sidebar {
    width: 300px;
    height: 130;
}
.elgg-sidebar .elgg-module {
	display: inline-block;
}
.elgg-sidebar #profile-owner-block {
	width: 270px;
    margin-bottom: 20px;
    padding: 15px;
    background: #EEEEEE;
    overflow: hidden;
}
.elgg-sidebar #profile-owner-block .elgg-avatar-medium {
    position: relative;
    float: left;
}
.elgg-sidebar .elgg-module .elgg-avatar-tiny,
.elgg-sidebar-alt .elgg-module .elgg-avatar-tiny {
	float: left;
    padding: 0 1px 1px 0;
}
.elgg-sidebar #profile-owner-block ul {
    position: relative;
    float: left;
    margin-left: 15px;
}
.elgg-sidebar #profile-owner-block ul li {
    padding-bottom: 5px;
}
.elgg-menu-topbar .elgg-icon-settings {
	display: none;
}
/*** FRIENDSPICKER ***/
.friends-picker-container h3 {
    font-size: 1.4em !important;
    margin-bottom: 5px;
}
.friends-picker-wrapper {
    width: 100%;
}
.friendspicker-savebuttons {
	background: transparent;
	margin: 10px 10px 10px 0;
}
.friends-picker-container .panel {
	height: 100%;
	width: auto;
    display: block;
	margin: 0;
	padding:0;
    border-bottom: 1px solid #CCCCCC;
}
.tidypics-river-list > li {
	*float: left;
}
/* ***************************************
	RESPONSIVE
*****************************************/
html {
    font-size: 100%;
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
}
.clearfix {
  *zoom: 1;
}
/*** NAVBAR ***/
.elgg-navbar {
    *position: relative;
    *z-index: 2;
    overflow: visible;
}
.divider-vertical {
	float: left;
    height: 40px;
    width: 1px;
    margin: 0;
    overflow: hidden;
    background-color: #575D63;
    border-right: 1px solid #232527;
}
.elgg-navbar .elgg-navbar-inner {
	*min-width: 100%;
    min-height: 40px;     
	background: #1F1F1F;
    border-bottom: 1px solid #000000;
}
.elgg-button-nav {
    display: none;
    font-size: 13px;
    line-height: 8px;
    color: #FFFFFF;
    float: left;
    padding: 15px 15px 10px;
    margin-left: 10px;
}
.elgg-button-nav .icon-bar {
    background-color: #F5F5F5;
    border-radius: 1px 1px 1px 1px;
    box-shadow: 0 1px 0 rgba(0, 0, 0, 0.25);
    display: block;
    height: 2px;
    width: 18px;
}
.elgg-button-nav .icon-bar + .icon-bar {
    margin-top: 3px;
}
@media (max-width: 1018px)  {
    .elgg-page-default {
        width: 100%;
        min-width: 0;
    }
    .elgg-main {
        padding: 20px;
    }
    .teaser {
        padding: 30px 20px 80px;
    }
    .elgg-menu-navbar {
    	margin-left: 19px;
    }
    .elgg-menu-site-default {
        left: 10px;
    }
    .elgg-page-topbar > .elgg-inner {
        width: auto;
        padding: 0;
    }
    .elgg-page-default .elgg-page-header > .elgg-inner {
        width: auto;
    }
    .elgg-page-default .elgg-page-body > .elgg-inner {
    	width: auto;
    }
    .elgg-page-default .elgg-page-footer > .elgg-inner {
        width: auto;
        margin: 0 20px;
    }
    .elgg-page-footer {
        width: auto;
    }
    .elgg-layout-one-sidebar .elgg-main {
        width: auto;
    }
    .elgg-layout-two-sidebar .elgg-main {
        width: auto;
    }
    .elgg-menu-topbar-alt {
        margin-right: 20px;
    }
    .elgg-sidebar {
        margin-right: 20px;
    }
    .elgg-sidebar-alt {
        display: none;
    }
    .elgg-main .elgg-output img {
        max-width: 100%;
        height: auto;
    } 
    .file-photo .elgg-photo {
		max-width: 98%;
    }
    .tidypics-photo {
    	max-width: 97%;
    }
    .elgg-image-block {
        padding: 10px 0;
    } 
    .groups-profile-icon img {
        width: 100%;
        height: auto;
    }
}
@media (min-width: 980px) {
    .elgg-navbar {
        display: none;
    }
    .elgg-nav-collapse {
		display: block !important;
	}
}
@media (max-width: 979px) {
    .elgg-page-header > .elgg-inner > .elgg-menu-site {
    	display: none;
    }
    .elgg-page-topbar {
    	display: inline;
        min-height: 40px;
        border-bottom: none;
    }
    .elgg-menu-topbar-alt {
        margin-right: 0;
    }
	.elgg-menu-topbar > li > a.elgg-topbar-logo {
    	padding: 0;
    }
    .elgg-menu-topbar > li > a.elgg-topbar-avatar {
        padding-top: 2px;
    }
    .teaser {
        padding: 30px 20px 40px;
    }
	#dashboard-info {
    	margin-left: 0;
        margin-right: 0;    
    }
    .profile .elgg-inner {
        margin: 0;
    }
    .elgg-river-responses .elgg-form{
        padding-bottom: 5px;
        height: auto;
    }
    .elgg-river-responses input[type=submit] {
        margin-left: 0;
        margin-top: 4px;
    }
    .elgg-river-responses input[type=text] {
        width: 100%;
    }
    .elgg-menu-topbar {
        display: none;
    } 
    #groups-tools > li {
        width: 100%;
        float: none;
        margin-bottom: 20px;
    }
    #groups-tools > li:nth-child(odd) {
        margin-right: 0;
    }
    #groups-tools > li:last-child {
        margin-bottom: 0;
    }
    /***** IE ******/
    #groups-tools > .odd {
        margin-right: 0;
    }
    /***** CUSTOM INDEX ******/
    .elgg-col-1of2 {
        width: 100%;
    }
    .prl {
        padding-right: 0;
    }
    /***** WIDGETS ******/
    .elgg-col-2of3,
    #elgg-widget-col-1,
    #elgg-widget-col-2,
    #elgg-widget-col-3 {
        width: 100%;
        min-height: 0 !important;
    }
    .elgg-module-widget {
        margin: 0 0 15px;
    }
     /***** NAVIGATION ******/
    .elgg-navbar {
        position: relative;
        display: block;
    }
    .elgg-nav-collapse {
        background: #000000;
        clear: both;
		display: none;
        padding: 10px 0 10px;
        position: absolute;
        top: 41px;
        *left: 0;
        width: 100%;
        z-index: 10000;
    }
    .elgg-button-nav {
        cursor: pointer;
        display: block;
    }
    .elgg-nav-collapse ul {
        background: inherit;
        display: block;
        position: static;
        width: auto;
        height: auto;
    }
    .elgg-nav-collapse ul li {
        float: none;
        margin: 1px 10px 0;
    }
    .elgg-nav-collapse li {
        background: #333333;
        clear: both;
        float: none;
        padding: 6px 0 6px 20px;
        margin: 0 10px;
    }
    .elgg-nav-collapse ul li ul li {
        margin-left: 0;
        margin-right: 0;
        border-top: 1px solid #000000;
    }
    .elgg-nav-collapse li:hover {
        background: #999999;
    }
    .elgg-nav-collapse li ul {
    	display: block;
		background: #000000;
    }
    .elgg-nav-collapse a, .elgg-nav-collapse ul a {
        color: #FFFFFF;
        display: block;
        font: inherit;
        padding: 0;
    }
    .elgg-nav-collapse a:hover, .elgg-nav-collapse ul a:hover {
        background: none repeat scroll 0 0 transparent;
        color: #FFFFFF;
    }
    .elgg-nav-collapse .elgg-more {
    	padding-bottom: 0 !important;
    }  
    .elgg-nav-collapse .elgg-more > a {
    	padding-bottom: 4px !important;
    }  
    .elgg-nav-collapse .elgg-more:hover {
    	background: #333333;
    }    
    .elgg-nav-collapse .elgg-state-selected {
        background-color: #999999;
    }
    .elgg-menu-site-more,
    .elgg-menu-site-more > li > a,
    .elgg-menu-site-default > li > a,
    .elgg-menu-site-default > .elgg-state-selected > a,
	.elgg-menu-site-default > li:hover > a {
    	color: #FFFFFF !important;
        background: none !important;
        border: none;
        
        -webkit-border-radius: 0;
        -moz-border-radius: 0;
        border-radius: 0;
    }
    .elgg-menu-site-more > li.elgg-state-selected > a,
    .elgg-menu-site-more > li > a:hover {
        background: transparent;
    }
    .elgg-menu-topbar-alt,
    .elgg-menu-topbar {
        float: none;
        padding-top: 0;
    }
    .elgg-menu-topbar > li > a {
        margin-left: 0;        
    }
    .elgg-menu-topbar > li > a:hover {
        color: #FFFFFF !important;
    }
    .elgg-menu-topbar .elgg-icon {
		margin-right: 8px;    
    }
    /*** WALLED ***/
    .elgg-body-walledgarden {
    	margin: 20px;
        width: auto;
    }
    .elgg-heading-walledgarden {
        margin-top: 0;
    }
    .elgg-heading-walledgarden br {
    	display: none;
    }
    .elgg-menu-walled-garden {
    	margin: 10px 0;
    }
    .elgg-module-walledgarden {
        max-width: 100%;
    }
    .elgg-module-walledgarden .elgg-col .elgg-inner {
    	margin: 0;
    }
}
@media (max-width: 840px) {    
    .groups-profile-fields {
        float: left;
    }
    #profile-owner-block {
    	border-right: none;
        width: auto;
    }
    #profile-details {
        display: block;
        float: left;
    }
}
@media (max-width: 767px) {
    .elgg-river-attachments,
    .elgg-river-message,
    .elgg-river-content {
        font-size: 100%;
    }
    .embed-wrapper {
        width: auto;
        margin: 0;
    }
    .elgg-module-register {
        width: 100%;        
    }
    .elgg-form-account {
        width: 100%;
        margin-right: 0;
        margin-bottom: 20px;
    }
    .elgg-layout-one-sidebar {
        width: 100%;
        float: left;
    }
    .elgg-layout-two-sidebar {
        width: 100%;
        float: left;
    }
    .elgg-sidebar {
        background: #EEEEEE;
        width: 100%;
        float: left;
        padding: 20px;
        margin: 0 0 10px 0;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }
    .elgg-sidebar #profile-owner-block {
        width: 100%;
        padding-left: 0;
    }
    .elgg-sidebar .elgg-module {
        width: 100%;
        
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }
    /*** SUB MENUES ***/
    .elgg-menu-entity {
    	margin-left: 0;
        vertical-align: right;  
        height: auto;
    }
    .elgg-menu-entity li {
        vertical-align: right; 
    }
    .elgg-menu-footer-alt,
    .elgg-menu-footer-default {
    	display: block;
        float: none;
        text-align: center;
    }
    .elgg-page-footer .float-alt {
        float: none;
        text-align: center;
    }
    .tidypics-photo-item + .tidypics-photo-item {
    	margin-left: 0;
        margin-right: 7px;
    }
}
@media (max-width: 480px)  {
    .elgg-main {
        padding: 10px;
    }
    .elgg-menu-navbar {
    	margin-left: 9px;
    }
    .teaser {
        padding: 30px 10px 40px;
    }
    .elgg-page-default .elgg-page-footer > .elgg-inner {
        margin: 0 10px;
    }
    .elgg-sidebar {
        padding: 20px 10px;
    }
    .elgg-likes {
        width: auto;
    }
    #notificationstable td.namefield {
        width: 20%;
    } 
    .tinymce-toggle-editor {
        display: none !important;
    }
    td.mceToolbar {
        display: none;
    }
    .elgg-page-footer > .elgg-inner {
        margin: 0 10px;    
    }
    .file-photo .elgg-photo {
		max-width: 97%;
    }
}
