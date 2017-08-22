<?php
/*
 *
 * Theme Unita
 *
 * @author Elggzone
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License v2
 * @copyright Copyright (c) 2012, Elggzone
 *
 * @link http://www.perjensen-online.dk/
 *
 */
 
elgg_register_event_handler('init','system','unita_init');
 
function unita_init() {

	$plugin = elgg_get_plugin_from_id('unita');
	
	elgg_register_css('elgg.colorpicker', '/css/colorpicker.css');
	if (elgg_get_context() != 'admin') {
		elgg_load_css('elgg.colorpicker');
	}
		
	elgg_register_event_handler('pagesetup', 'system', 'unita_pagesetup_handler', 1000);
	
	$action_path = dirname(__FILE__) . '/actions';
	
	// elgg_register_action("unita/admin/settings", "$action_path/settings.php", 'admin');
	
	elgg_register_admin_menu_item('configure', 'unita', 'settings');		
	elgg_extend_view('js/elgg', 'js/unita/tabs');

	if ($plugin->show_thewire == 'yes'){
		elgg_register_action("unita/add", "$action_path/add.php");	
		elgg_extend_view('js/elgg', 'js/unita/update');
	}

	elgg_register_action("unita/color", "$action_path/color.php");

	elgg_extend_view('page/elements/head', 'unita/meta', 1);
	elgg_extend_view('css/elgg', 'unita/css');
	elgg_extend_view('css/admin', 'unita/admin');
	elgg_extend_view('js/elgg', 'js/unita/theme');
	
	elgg_extend_view('css/walled_garden', 'unita/css');
	
	elgg_register_js('respond', 'mod/unita/vendors/js/respond.js');
	elgg_load_js('respond');
	elgg_register_js('unita', 'mod/unita/vendors/js/unita.js', 'footer');
	elgg_load_js('unita');

	// Registar e carregar css que sobrescreve o unita
	elgg_register_css('tema_css', elgg_get_site_url() . 'mod/unita/views/default/css/tema.css');
	elgg_load_css('tema_css');

	elgg_register_js('colorpicker', 'mod/unita/vendors/js/colorpicker.js');
	elgg_load_js('colorpicker');

	elgg_unregister_js('elgg.friendspicker');
	
	if ($plugin->unita_index == 'yes') {
		elgg_register_plugin_hook_handler('index', 'system', 'unita_index_handler', 1);
	}
	if (elgg_is_logged_in()	&& $plugin->show_icon == 'yes'){
		elgg_extend_view('page/elements/sidebar', 'page/elements/rivericon', '2');
	}
	if ($plugin->show_reg_text == 'yes'){
		elgg_extend_view('help/register', 'page/elements/info_register');
	}
	
	if (elgg_is_logged_in()	&& elgg_get_context() == 'activity'){			
		if ($plugin->show_thewire == 'yes'){
			elgg_extend_view('page/layouts/content/header', 'page/elements/riverwire', 1);
		}
		if ($plugin->show_menu == 'yes'){	
			elgg_extend_view('page/elements/sidebar', 'page/elements/ownermenu', '502');
		}
		if ($plugin->show_friends == 'yes'){
			elgg_extend_view('page/elements/sidebar', 'page/elements/friends', '503');
		}
		if ($plugin->show_latest_members == 'yes'){
			elgg_extend_view('page/elements/sidebar', 'page/elements/latest_members', '504');
		}		
		if ($plugin->show_latest_groups == 'yes'){
			elgg_extend_view('page/elements/sidebar', 'page/elements/latest_groups', '505');
		}
	}
	if ((elgg_get_context() == 'activity') || (elgg_get_context() == 'thewire')){
		if ($plugin->show_tagcloud == 'yes'){
			elgg_extend_view('page/elements/sidebar', 'page/elements/tagcloud_block', '507');
		}
		if ($plugin->show_custom == 'yes'){
			elgg_extend_view('page/elements/sidebar', 'page/elements/custom_module', 506);
		}
	}
}

function unita_index_handler($hook, $type, $return, $params) {
	if ($return == true) {
		return $return;
	}
	if (!include_once(dirname(__FILE__) . "/index.php")) {
		return false;
	}
	return true;
}

function unita_pagesetup_handler() {

	$plugin = elgg_get_plugin_from_id('unita');

	elgg_unregister_menu_item('topbar', 'dashboard');
	elgg_unregister_menu_item('topbar', 'elgg_logo');
	elgg_unregister_menu_item('topbar', 'messages');
	elgg_unregister_menu_item('topbar', 'friends');

	elgg_unextend_view('page/elements/header', 'search/header');	
	if (elgg_is_logged_in()) {
		elgg_extend_view('page/elements/sidebar', 'search/header', '1');
	}
	if (!elgg_is_logged_in()) {	
		elgg_unregister_plugin_hook_handler('output:before', 'layout', 'elgg_views_add_rss_link');
	}
				
	$site = elgg_get_site_entity();
	$site_name = $site->name;
	$logo_url = elgg_get_site_url() . "mod/unita/graphics/logo.png";
	if ($plugin->showlogo == 'yes'){
		$name = "<img src=\"$logo_url\" alt=\"$site_name\" width=\"131\" height=\"34\" />";
	} else {
		$name = $site_name;
	}
	elgg_register_menu_item('navbar', array(
		'name' => 'unita_logo',
		'href' => elgg_get_site_url(),
		'text' => $name,
		'priority' => 1,
		'link_class' => 'elgg-topbar-logo',
	));
			
	// Extend footer with copyright
	$year = date('Y');	
	$href = "http://www.logoseducacao.com.br";
	elgg_register_menu_item('footer', array(
		'name' => 'copyright_this',
		'href' => $href,
		'title' => elgg_echo('unita:tooltip'),
		'text' => elgg_echo('unita:copyright') . $year . elgg_echo('Elggzone'),
		'priority' => 1,
		'section' => 'alt',
	));
	
	// elgg_register_menu_item('footer', array(
	// 	'name' => 'elgg',
	// 	'href' => $href,
	// 	'text' => elgg_echo('unita:elgg'),
	// 	'priority' => 2,
	// 	'section' => 'alt',
	// ));
	
	if (elgg_is_admin_logged_in()) {		
		elgg_register_menu_item('topbar', array(
			'name' => 'themeadministration',
			'href' => 'admin/settings/unita',
			'text' => elgg_echo('unita:admin'),
			'priority' => 102,
			'section' => 'alt',
		));
	}
	
	if (elgg_is_logged_in()) {
		$user = elgg_get_logged_in_user_entity();
		
		if (elgg_is_active_plugin('messages') && $plugin->show_icon == 'no') {
			$num_messages = (int)messages_count_unread();
			$text = '';
			if ($num_messages != 0) {
				$text .= "<span class=\"messages-new\">$num_messages</span>";
			}							
			elgg_register_menu_item('topbar', array(
				'name' => 'messages',
				'href' => 'messages/inbox/' . elgg_get_logged_in_user_entity()->username,
				'text' => $text . elgg_echo('messages'),
				'priority' => 1,
				'section' => 'alt',
			));
		}
		if ($plugin->show_icon == 'no') {	
			elgg_register_menu_item('topbar', array(
				'name' => 'friends',
				'text' => elgg_echo('friends'),
				'href' => "/friends/$user->username",
				'priority' => 2,
				'section' => 'alt',
			));	
		}
		if (elgg_is_active_plugin('dashboard')) {
			elgg_register_menu_item('site', array(
				'name' => 'dashboard',
				'href' => 'dashboard',
				'text' => elgg_echo('dashboard'),
			));
		}
		if (elgg_is_active_plugin('reportedcontent')) {
			elgg_unregister_menu_item('footer', 'report_this');
		
			$href = "javascript:elgg.forward('reportedcontent/add'";
			$href .= "+'?address='+encodeURIComponent(location.href)";
			$href .= "+'&title='+encodeURIComponent(document.title));";
				
			elgg_register_menu_item('extras', array(
				'name' => 'report_this',
				'href' => $href,
				'text' => elgg_view_icon('report-this'),
				'title' => elgg_echo('reportedcontent:this:tooltip'),
				'priority' => 100,
			));
		}	
	}
}
