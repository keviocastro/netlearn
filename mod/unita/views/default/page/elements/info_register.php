<?php
/**
 * Text module
 *
 */

$plugin = elgg_get_plugin_from_id('unita');
$site = elgg_get_site_entity();

$title = elgg_echo('unita:register', array($site->name));

if ($plugin->show_reg_text == 'file') { 
	$text = elgg_echo('unita:register:text');
} else {
	$text = $plugin->reg_text;	
}
echo elgg_view_module('register', $title, $text);

