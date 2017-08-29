<?php

elgg_register_event_handler('init', 'system', 'identity_init');
elgg_register_plugin_hook_handler('view', 'page/elements/sidebar', 'entity_add_sidebar_logos');

function identity_init(){

}

function entity_add_sidebar_logos($hook, $type, $returnvalue, $params) {
    if ($params['viewtype'] !== 'default') {
        return $returnvalue;
    }

    $view_sidebar_logos = elgg_view('page/elements/sidebar_logos');
    return $returnvalue.$view_sidebar_logos;
}