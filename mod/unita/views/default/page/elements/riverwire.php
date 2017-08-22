<?php
/**
 * the wire
 *
 */

$title = elgg_echo('unita:thewire');
$content .= elgg_view_form('thewire/add', array('name' => 'elgg-wire'));

echo elgg_view_module('thewire', $title, $content);

