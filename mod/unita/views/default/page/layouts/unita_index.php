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
		echo elgg_view_module('featured',  elgg_echo("unita:latest:members"), $vars['members']);
		if (elgg_is_active_plugin('groups')) {
			echo elgg_view_module('featured',  elgg_echo("unita:latest:groups"), $vars['groups']);
		}
		if (elgg_is_active_plugin('blog')) {
			echo elgg_view_module('featured',  elgg_echo("unita:blogs"), $vars['blogs']);
		}
		if (elgg_is_active_plugin('bookmarks')) {
			echo elgg_view_module('featured',  elgg_echo("unita:bookmarks"), $vars['bookmarks']);
		}
		if (elgg_is_active_plugin('file')) {
			echo elgg_view_module('featured',  elgg_echo("unita:files"), $vars['files']);
		}
		?>
	</div>
</div>
