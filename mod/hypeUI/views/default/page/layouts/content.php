<?php
/**
 * Main content area layout
 *
 * @uses $vars['content']        HTML of main content area
 * @uses $vars['sidebar']        HTML of the sidebar
 * @uses $vars['header']         HTML of the content area header (override)
 * @uses $vars['nav']            HTML of the content area nav (override)
 * @uses $vars['footer']         HTML of the content area footer
 * @uses $vars['filter']         HTML of the content area filter (override)
 * @uses $vars['title']          Title text (override)
 * @uses $vars['context']        Page context (override)
 * @uses $vars['filter_context'] Filter context: everyone, friends, mine
 * @uses $vars['class']          Additional class to apply to layout
 */

$vars['title'] = elgg_extract('title', $vars, '');
if (!$vars['title'] && $vars['title'] !== false) {
	$context = elgg_extract('context', $vars, elgg_get_context());
	$keys = [
		"page:$context",
		"$context",
	];
	foreach ($keys as $key) {
		if (elgg_language_key_exists($key)) {
			$vars['title'] = elgg_echo($key);
			break;
		}
	}
}

$vars['filter'] = elgg_view('page/layouts/content/filter', $vars);

echo elgg_view_layout('one_sidebar', $vars);
