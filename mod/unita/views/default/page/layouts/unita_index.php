<?php
/**
 *
 * Layout with one sidebar
 *
 */

$class = 'elgg-layout elgg-layout-one-sidebar clearfix';
if (isset($vars['class'])) {
	$class = "$class {$vars['class']}";
}

?>

<div class="<?php echo $class; ?>">
	<div class="elgg-sidebar">
		<?php
			echo elgg_view('page/elements/sidebar', $vars);
		?>
	</div>

	<div class="elgg-main elgg-body">
		<?php
		echo elgg_view_module('featured',  elgg_echo("unita:latest:members"), $vars['members'], $mod_params);
		if (elgg_is_active_plugin('groups')) {
			echo elgg_view_module('featured',  elgg_echo("unita:latest:groups"), $vars['groups'], $mod_params);
		}
		if (elgg_is_active_plugin('blog')) {
			echo elgg_view_module('featured',  elgg_echo("unita:blogs"), $vars['blogs'], $mod_params);
		}
		if (elgg_is_active_plugin('bookmarks')) {
			echo elgg_view_module('featured',  elgg_echo("unita:bookmarks"), $vars['bookmarks'], $mod_params);
		}
		if (elgg_is_active_plugin('file')) {
			echo elgg_view_module('featured',  elgg_echo("unita:files"), $vars['files'], $mod_params);
		}
		?>
	</div>
</div>
