<?php

/**
 * Latest Groups
 *
 */
elgg_push_context('widgets');

$title = elgg_view('output/url', array(
    'href' => "/groups/all",
    'text' => elgg_echo('unita:latest:groups'),
    'is_trusted' => true,
        ));

$num = (int) elgg_get_plugin_setting('num_groups', 'unita');

$num = ($num) ? ($num) : 5;

$options = array(
    'type' => 'group',
    'subtype' => 0,
    'full_view' => false,
    'pagination' => false,
    'limit' => $num
);
$groups = elgg_list_entities($options);

elgg_pop_context();

if ($groups) {
    echo elgg_view_module('aside', $title, $groups);

    //variável url das comunidades recentes;
    $comunidade_url = "groups/all";   
    //criando link ver todas comunidades recentes
    $more_link = elgg_view('output/url', array(
        'href' => $comunidade_url,
        'text' => elgg_echo('unita:groups:ver:todas'),
        'is_trusted' => true,
    ));
    echo "<span class=\"elgg-widget-more\">$more_link</span>";
    
} else {
    $groups = elgg_echo('unita:groups:none');
    echo elgg_view_module('aside', $title, $groups);
}
