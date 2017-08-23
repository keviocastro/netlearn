<?php

/**
 * Twitter&reg; Bootstrap Theme for Elgg
 *
 * Converts all Elgg css elements to Twitter&reg; Bootstrap elements.  Helps 
 * Designers create beautiful Bootstrap themes for Elgg.
 *
 * PHP version 5.6
 *
 * LICENSE: This source file is subject to version 3.01 of the PHP license
 * that is available through the world-wide-web at the following URI:
 * http://www.php.net/license/3_01.txt.  If you did not receive a copy of
 * the PHP License and are unable to obtain it through the web, please
 * send a note to license@php.net so we can mail you a copy immediately.
 *
 * @category   Elgg Themes
 * @author     Shane Barron <admin@socia.us>
 * @copyright  2017 SocialApparatus
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version    1
 * @link       http://socia.us
 */
$vars['class'] = elgg_extract_class($vars, 'elgg-input-tags form-control');

$defaults = array(
    'value' => '',
    'disabled' => false,
    'autocapitalize' => 'off',
    'type' => 'text'
);

if (isset($vars['entity'])) {
    $defaults['value'] = $vars['entity']->tags;
    unset($vars['entity']);
}

$vars = array_merge($defaults, $vars);

if (is_array($vars['value'])) {
    $tags = array();

    foreach ($vars['value'] as $tag) {
        if (is_string($tag)) {
            $tags[] = $tag;
        } else {
            $tags[] = $tag->value;
        }
    }

    $vars['value'] = implode(", ", $tags);
}
echo "<div class='form-group'>";
echo elgg_format_element('input', $vars);
echo "</div>";
