<?php
/**
 * Elgg page header
 * In the default theme, the header lives between the topbar and main content area.
 */

$plugin = elgg_get_plugin_from_id('unita');

if ($plugin->show_teaser == 'yes'){
	echo elgg_view('page/elements/teaser', $vars);
}
	
// insert site-wide navigation
echo elgg_view_menu('site');
