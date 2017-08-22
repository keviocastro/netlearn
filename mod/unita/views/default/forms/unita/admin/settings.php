<?php
/**
 *
 * Unita settings
 * 
 */

$plugin = elgg_get_plugin_from_id('unita');

	if (!isset($plugin->unita_index)) {	$plugin->unita_index = 'no'; }
	if (!isset($plugin->show_thewire)) { $plugin->show_thewire = 'no'; }
	if (!isset($plugin->show_reg_text)) { $plugin->show_reg_text = 'no'; }
	if (!isset($plugin->unita_color)) {	$plugin->unita_color = '#08A7E7;'; }
	if (!isset($plugin->unita_hover)) {	$plugin->unita_hover = '#0092CB;'; }
	if (!isset($plugin->showlogo)) { $plugin->showlogo = 'yes';	}
	if (!isset($plugin->teaseroutput)) { $plugin->teaseroutput = $teaseroutput;	}
	
echo "<div id=\"elggzone-tabs\">";	
	echo elgg_view('navigation/tabs', array(
		'tabs' => array(
			array(
				'text' => elgg_echo('elggzone:tab:general'),
				'href' => '#tab-general',
			),
			array(
				'text' => elgg_echo('elggzone:tab:frontpage'),
				'href' => '#tab-frontpage',
			),
			array(
				'text' => elgg_echo('elggzone:tab:sidebar'),
				'href' => '#tab-sidebar',
			)
		)
	));
	
	// TAB GENERAL
	echo '<div id="tab-general">';
	
		echo "<div class=\"label\">" . elgg_echo('unita:header:general') . "</div>";
		
		echo "<div>" . elgg_echo('unita:info:color') . "</div>";
		
		echo '<div class="item">';
			echo elgg_echo('unita:label:color');
			echo elgg_view('input/text', array('name' => 'params[unita_color]', 'id' => 'colorpickerField', 'value' => $plugin->unita_color));
			echo '<div class="onchange"></div>';
		echo '</div>';
		
		echo '<div class="item">';
			echo elgg_echo('unita:label:hover');
			echo elgg_view('input/text', array('name' => 'params[unita_hover]', 'id' => 'colorpickerFieldHover', 'value' => $plugin->unita_hover));
			echo '<div class="onchange-hover"></div>';
		echo '</div>';		
		
		echo "<div>" . elgg_echo('unita:info:registration') . "</div>";
				
		echo '<div class="item">';
		echo elgg_echo('unita:label:show_reg_text');
		echo elgg_view('input/dropdown', array(
			'name' => 'params[show_reg_text]',
			'options_values' => array(
				'no' => elgg_echo('option:no'),
				'file' => elgg_echo('unita:option:file'),
				'field' => elgg_echo('unita:option:field')
			),
			'value' => $plugin->show_reg_text,
		));
		echo '</div>';
		
		echo '<div>';
		echo elgg_echo('unita:label:text:reg');
		echo elgg_view('input/longtext', array(
			'name' => "params[reg_text]",
			'value' => $plugin->reg_text,
		));
		echo "</div>";
		
		echo '<div class="item">';
		echo elgg_echo('unita:label:thewire');
		echo elgg_view('input/dropdown', array(
			'name' => 'params[show_thewire]',
			'options_values' => array(
				'no' => elgg_echo('option:no'),
				'yes' => elgg_echo('option:yes')
				),
			'value' => $plugin->show_thewire,
		));
		echo '</div>';
		
		echo "<div>" . elgg_echo('unita:info:logo') . "</div>";
		
		echo '<div class="item">';
		echo elgg_echo('unita:label:logo');
		echo elgg_view('input/dropdown', array(
			'name' => 'params[showlogo]',
			'options_values' => array(
				'no' => elgg_echo('option:no'),
				'yes' => elgg_echo('option:yes')
				),
			'value' => $plugin->showlogo,
		));
		echo '</div>';
		
		echo '<div class="item">';
		echo elgg_echo('unita:info:teaser');
		echo elgg_view('input/dropdown', array(
			'name' => 'params[show_teaser]',
			'options_values' => array(
				'no' => elgg_echo('option:no'),
				'yes' => elgg_echo('option:yes')
				),
			'value' => $plugin->show_teaser,
		));
		echo '</div>';
				
		echo '<div>';
		echo elgg_echo('unita:label:teaser');
		echo elgg_view('input/longtext', array(
			'name' => 'params[teaseroutput]', 
			'value' => $plugin->teaseroutput));
		echo '</div>';
		
		echo elgg_view('input/submit', array('value' => elgg_echo("save")));
		
	echo '</div>';
	
	// TAB FRONTPAGE
	echo '<div id="tab-frontpage">';
	
		echo "<div class=\"label\">" . elgg_echo('unita:header:frontpage') . "</div>";
	
		echo '<div class="item">';
		echo elgg_echo('unita:label:index');
		echo elgg_view('input/dropdown', array(
			'name' => 'params[unita_index]',
			'options_values' => array(
				'no' => elgg_echo('unita:option:activity'),
				'yes' => elgg_echo('unita:option:unita')
			),
			'value' => $plugin->unita_index,
		));
		echo '</div>';
		
		echo elgg_view('input/submit', array('value' => elgg_echo("save")));
		
	echo '</div>';

	// TAB SIDEBAR
	echo '<div id="tab-sidebar">';
	
		echo "<div class=\"label\">" . elgg_echo('unita:header:sidebar') . "</div>";
		echo "<div>" . elgg_echo('unita:info:modules') . "</div>";
		
		$options = array('show_icon', 'show_menu', 'show_latest_members', 'show_latest_groups', 'show_custom', 'show_tagcloud', 'show_friends');
		foreach ($options as $dropdown) {
			echo '<div class="item">';
			echo elgg_view('input/dropdown', array(
				'name' => "params[$dropdown]",
				'options_values' => array(
					'no' => elgg_echo('option:no'),
					'yes' => elgg_echo('option:yes')
				),
				'value' => $plugin->$dropdown,
			));
			echo ' ' . elgg_echo("unita:label:$dropdown");
			echo '</div>';
		}
		
		echo elgg_view('input/submit', array('value' => elgg_echo("save")));
		
	echo '</div>';
		
echo "</div>"; // #elggzone-tabs

echo "<div class=\"ez-result\"></div>";
	