<?php

$guid = elgg_extract('guid', $vars);

if (!$video = get_entity($guid)) {
	// @todo either deleted or do not have access
	forward('videos/all');
}

if (!$video->canEdit()) {
	// @todo cannot change it
	forward('videos/all');
}

elgg_set_page_owner_guid($video->getContainerGUID());
$owner = elgg_get_page_owner_entity();

gatekeeper(); 
group_gatekeeper();

$title = $video->title;

// set up breadcrumbs
elgg_push_breadcrumb(elgg_echo('videos'), 'videos/all');
if (elgg_instanceof($owner, 'user')) {
	elgg_push_breadcrumb($owner->name, "videos/owner/$owner->username");
} else {
	elgg_push_breadcrumb($owner->name, "videos/group/$owner->guid");
}
elgg_push_breadcrumb($title, $video->getURL());
elgg_push_breadcrumb(elgg_echo('izap_videos:editVideo'));

$content = elgg_view('izap_videos/forms/_partial',array('entity' => $video));

$body = elgg_view_layout('content', array(
	'content' => $content,
	'title' => $title,
	'filter' => '',
	'sidebar' => elgg_view('izap_videos/sidebar', array('page' => 'edit')),
));

echo elgg_view_page($title, $body);
