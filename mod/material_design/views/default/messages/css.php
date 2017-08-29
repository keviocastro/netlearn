<?php
/**
 * Elgg Messages CSS
 *
 * @package ElggMessages
 */
?>
<style>
.messages-container {
	min-height: 200px;
	box-shadow:0 -6px 0 rgba(0,0,0,.06),0 0 12px rgba(0,0,0,.18),0 12px 18px rgba(0,0,0,.18);
}
.message.unread a {
	color: #D40005;
}
.messages-buttonbank {
	text-align: right;
	box-shadow:0 -6px 0 rgba(0,0,0,.06),0 0 12px rgba(0,0,0,.18),0 12px 18px rgba(0,0,0,.18);	
}
.messages-buttonbank input {
	margin-left: 10px;
}

/*** message metadata ***/
.messages-owner {
	float: left;
	width: 20%;
	margin-right: 2%;
}
.messages-subject {
	float: left;
	width: 55%;
	margin-right: 2%;
}
.messages-timestamp {
	float: left;
	width: 14%;
	margin-right: 2%;
	color:#ABA6A6;
}
.messages-delete {
	float: left;
	width: 5%;
}
/*** topbar icon ***/
.messages-new {
	color:#fff;
	font:"Roboto Condensed", Roboto;
	background-color:#003366;
	border-radius: 10px;
	box-shadow: -2px 2px 4px rgba(0, 0, 0, 0.50);
	position: absolute;
	text-align: center;
	line-height: 14px;
	top: 4px;
	left: 26px;
	min-width: 16px;
	height: 16px;
	font-size: 10px;
	font-weight: bold;
}
</style>