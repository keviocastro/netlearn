<?php
/**
 * Icon module
 *
 */

$user = elgg_get_logged_in_user_entity();

$icon = elgg_view_entity_icon($user, 'medium', array('use_hover' => false));
$title = elgg_echo('unita:welcome', array($user->name));

$num_messages = (int)messages_count_unread();
if ($num_messages != 0) {
	$text .= "<span class=\"messages-new\"> $num_messages</span>";
}							
$message = elgg_view('output/url', array(
	'href' => 'messages/inbox/' . $user->username,
	'text' => elgg_echo('messages') . $text,
	'is_trusted' => true,
));

$friends = elgg_view('output/url', array(
	'href' => "/friends/$user->username",
	'text' => elgg_echo('friends'),
	'is_trusted' => true,
));

$path_graphics = elgg_get_site_url()."mod/unita/graphics";

echo <<<HTML

<div id="profile-owner-block">
	$icon
	<ul>
	<li>$title</li>
	<li>$message</li>
	<li>$friends</li>
	</ul>
</div>

<div class="logo-sidebar-block">
	<ul>
		<li>
			<img class="logo-sidebar" src="$path_graphics/logo1_sidebar.jpeg">
		</li>
		<li>
			<img class="logo-sidebar" src="$path_graphics/logo2_sidebar.jpeg">
		</li>
		<li>
			<img class="logo-sidebar" src="$path_graphics/logo3_sidebar.jpeg">
		</li>
	</ul>
</div>

HTML;
