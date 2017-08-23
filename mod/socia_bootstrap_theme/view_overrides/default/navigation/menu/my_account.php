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
function cmp($a, $b) {
    return strcmp($a->priority, $b->priority);
}

$default_items = elgg_extract('default', $vars['menu'], array());
usort($default_items, "cmp");

echo '<ul class="nav navbar-nav navbar-right">';

echo '<li class="dropdown">';

$more = elgg_echo('my_account');
echo "<a href=\"#\" class='dropdown-toggle' data-toggle='dropdown' role='button'>$more <span class='caret'></span></a>";

echo elgg_view('navigation/menu/elements/section', array(
    'class' => 'dropdown-menu',
    'items' => $default_items,
));

echo '</li>';
echo '</ul>';