<?php
    $plugin = elgg_get_plugin_from_id('material_design');

    $form = elgg_echo('lastlogin:settings:lastlogin_info') . "<br><br>";

    $form .= "<b>" . elgg_echo('lastlogin:settings:lastlogin_time') . "</b>";
    $form .= elgg_view('input/dropdown', array(
                    'name' => 'params[lastlogin_visibility]',
                    'options_values' => array('no' => elgg_echo('lastlogin:settings:no'),
                                              'admin' => elgg_echo('lastlogin:settings:admin'),
                                              'all' => elgg_echo('lastlogin:settings:all')),
                    'value' => $plugin->lastlogin_visibility
    ));

    $form .= "<br><br><b>" . elgg_echo('lastlogin:settings:registered_time') . "</b>";
    $form .= elgg_view('input/dropdown', array(
                    'name' => 'params[registered_visibility]',
                    'options_values' => array('no' => elgg_echo('lastlogin:settings:no'),
                                              'admin' => elgg_echo('lastlogin:settings:admin'),
                                              'all' => elgg_echo('lastlogin:settings:all')),
                    'value' => $plugin->registered_visibility
    ));
    $form .= "<br><br><b>" . elgg_echo('lastlogin:settings:guid') . "</b>";
    $form .= elgg_view('input/dropdown', array(
                    'name' => 'params[guid_visibility]',
                    'options_values' => array('no' => elgg_echo('lastlogin:settings:no'),
                                              'yes' => elgg_echo('lastlogin:settings:yes')),
                    'value' => $plugin->guid_visibility
    ));
    $form .= "<br><br>";

    echo $form;
