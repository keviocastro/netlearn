<?php
/**
 * Save color
 */

if (get_input('selected')) {
	$color = get_input('selected');
	$result = elgg_set_plugin_setting('unita_color', $color, 'unita');
}
if (get_input('hover')) {
	$color = get_input('hover');
	$result = elgg_set_plugin_setting('unita_hover', $color, 'unita');
}

forward(REFERER);

exit;
