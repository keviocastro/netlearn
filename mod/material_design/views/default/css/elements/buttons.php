<?php
/**
 * CSS buttons
 *
 * @package Elgg.Core
 * @subpackage UI
 */
?>
/* <style> /**/
/* **************************
	BUTTONS
************************** */
.elgg-button{
	display:inline-block;
	line-height:20px;
}
.breadcrumb>li+li:before{
	color:#9a9a9a;
	content:"chevron_right";
	margin-left:.4em;
	}
.breadcrumb>.active{
	color:#212121;
	}
.breadcrumb>.active>.a,.breadcrumb>.active>a{
	color:#212121;
	cursor:text;
	text-decoration:none;
	}
.elgg-button{
	background-color:#3f51b5;
	background-image:none;
	background-position:50% 50%;
	background-size:100% 100%;
	border:0;
	border-radius:2px;
	box-shadow:0 1px 3px rgba(0,0,0,.15),0 1px 3px 1px rgba(0,0,0,.15);
	color:white;
	cursor:pointer;
	margin-bottom:0;
	max-width:90px;
	padding:8px;
	text-align:center;
	text-transform:uppercase;
	transition:background-color .3s cubic-bezier(.4,0,.2,1),box-shadow .3s cubic-bezier(.4,0,.2,1),color .3s cubic-bezier(.4,0,.2,1);
	-ms-user-select:none;
	user-select:none;
	vertical-align:middle;
	}
.fbtn,.fbtn-ori,.fbtn-sub{
	transition:all .3s cubic-bezier(.4,0,.2,1);
	}
.elgg-button:active,.elgg-button:focus,.elgg-button:hover{
	color:white;
	outline:0;
	background:#3f51b5;
	text-decoration:none;
	}
.elgg-button:active,.elgg-button:focus{
	box-shadow:0 1px 3px rgba(0,0,0,.15),0 1px 3px 1px rgba(0,0,0,.15),0 3px 9px rgba(0,0,0,.3);
	}
.elgg-button:active{
	background-color:#3f51b5;
	}
.elgg-button.disabled,.elgg-button[disabled],fieldset[disabled] .elgg-button{
	background-color:rgba(154,154,154,.18)!important;
	box-shadow:none!important;
	color:rgba(0,0,0,.38)!important;
	cursor:not-allowed;
}
.elgg-button-submit{
	background-color:#3f51b5;
	box-shadow:none;
	width:300px;
}
elgg-button-submit:active,elgg-button-submit:focus,elgg-button-submit:hover{
	background-color:#3f51b5;
	box-shadow:none;
	color:white;
}
elgg-button-submit:active{
	background-color:#3f51b5;
}
elgg-button-submit.disabled.elgg-state-disabled, elgg-button-submit{
	background-color:transparent!important;
}

.elgg-button-cancel,.elgg-button-cancel:active,.elgg-button-cancel:focus,.elgg-button-cancel:hover{
	background-color:#ffc107;
	color:rgba(0,0,0,.87)
	box-shadow:0 1px 3px rgba(0,0,0,.15),0 1px 3px 1px rgba(0,0,0,.15);
	width:300px;
}
.elgg-button-action {
	background-color:#4caf50;
	background-image:none;
	background-position:50% 50%;
	background-size:100% 100%;
	border:0;
	border-radius:2px;
	box-shadow:0 1px 3px rgba(0,0,0,.15),0 1px 3px 1px rgba(0,0,0,.15);
	color:white;
	cursor:pointer;
	margin-bottom:0;
	max-width:100%;
	padding:8px;
	text-align:center;
	text-transform:uppercase;
	transition:background-color .3s cubic-bezier(.4,0,.2,1),box-shadow .3s cubic-bezier(.4,0,.2,1),color .3s cubic-bezier(.4,0,.2,1);
	-ms-user-select:none;
	user-select:none;
	vertical-align:middle;
}
.elgg-button-action:hover,
.elgg-button-action:focus {
	background:#4caf50;
	color: white;
}
.elgg-button-delete {
	border: 1px solid rgba(0, 0, 0, 0.2);
	background: #FF3300;
}
.elgg-button-delete:hover,
.elgg-button-delete:focus {
	background: #D63006;
}
.elgg-button-dropdown {
	background: none;
	text-decoration: none;
	display: block;
	position: relative;
	margin-left: 0;
	color: #FFF;
	border: none;
	box-shadow: none;
	border-radius: 0;
}
.elgg-button-dropdown:hover,
.elgg-button-dropdown:focus,
.elgg-button-dropdown.elgg-state-active {
	color: #FFF;
	background: #60B8F7;
	text-decoration: none;
}
.elgg-button-special {
	border: 1px solid rgba(0, 0, 0, 0.2);
	background: #42C5B8;
}
.elgg-button-special:hover,
.elgg-button-special:focus {
	background: #5ED9CD;
}
/* Use .elgg-size-small or .elgg-size-large for additional sizes */
.elgg-button.elgg-size-small {
	font-size: 12px;
	font-weight:400;
	font-family:Roboto, "Roboto Condensed";
	padding: 4px 8px;
}
.elgg-button.elgg-size-large {
	font-size: 20px;
	font-weight:400;
	font-family:Roboto, "Roboto Condensed";
	padding: 14px 20px;
	margin: 15px 0;
	border-radius: 5px;
}
