<?php
/**
 *
 * Unita CSS 
 * Contains CSS added through colorpickers
 *
 */

$plugin = elgg_get_plugin_from_id('unita');

$color = $plugin->unita_color;
$hover = $plugin->unita_hover;

echo <<<CSS

a {
	color: $hover
}
.elgg-page-header {
	background: $color
}
.elgg-river-comments-tab {
	color: $color
}
input[type=text]:focus, textarea:focus {
	border: solid 1px $color
}
.friends-picker-navigation li a.current {
	background: $color
}
.ui-autocomplete a:hover {
	color: $color
}
.ui-datepicker-header {
	background: $color
}
.ui-datepicker-calendar .ui-state-default {
	color: $color
}
.elgg-pagination a, .elgg-pagination span {
	color: $color
	border: 1px solid $color
}
.elgg-pagination a:hover {
	background: $color
}
.elgg-pagination .elgg-state-selected span {
	background: $color
}
.elgg-tabs a:hover {
	color: $color
}
.elgg-tabs .elgg-state-selected a {
	color: $color
}
.elgg-menu-topbar > li > a:hover {
	color: $color
}
.elgg-menu-filter > li > a:hover {
	color: $color
}
.elgg-menu-filter > .elgg-state-selected > a {
	color: $color
}
.elgg-search input[type=text]:focus, .elgg-search input[type=text]:active {
	border: solid 1px $color
}

.elgg-menu-site-default > .elgg-state-selected > a,
.elgg-menu-site-default > li:hover > a {
	background: $hover
}
.elgg-menu-site-more > li.elgg-state-selected > a,
.elgg-menu-site-more > li > a:hover {
	background: $hover
}

CSS;

?>

