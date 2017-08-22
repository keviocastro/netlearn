<?php
/**
 * Unita custom index page
 * 
 */

if (elgg_is_logged_in()) {
	forward('activity');
}

elgg_push_context('front');

elgg_push_context('widgets');

$list_params = array(
	'type' => 'object',
	'limit' => 4,
	'full_view' => false,
	'view_type_toggle' => false,
	'pagination' => false,
);

$list_params['subtype'] = 'blog';
$blogs = elgg_list_entities($list_params);

$list_params['subtype'] = 'bookmarks';
$bookmarks = elgg_list_entities($list_params);

$list_params['subtype'] = 'file';
$files = elgg_list_entities($list_params);

$newest_members = elgg_list_entities_from_metadata(array(
	'metadata_names' => 'icontime',
	'types' => 'user',
	'limit' => 10,
	'full_view' => false,
	'pagination' => false,
	'list_type' => 'gallery',
	'gallery_class' => 'elgg-gallery-users',
	'size' => 'small',
));

$list_params['type'] = 'group';
unset($list_params['subtype']);
$groups = elgg_list_entities($list_params);

$login = elgg_view("core/account/login_box");

elgg_pop_context();

$params = array(
	'blogs' => $blogs,
	'bookmarks' => $bookmarks,
	'files' => $files,
	'groups' => $groups,
	'members' => $newest_members,
	'sidebar' => $login
);
$body = elgg_view_layout('unita_index', $params);

global $autofeed;
$autofeed = FALSE;

echo elgg_view_page(null, $body);
