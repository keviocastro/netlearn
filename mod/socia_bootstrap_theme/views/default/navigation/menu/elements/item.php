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
if (!elgg_in_context("admin")) {

    $item = $vars['item'];

    $link_class = '';
    if ($item->getSelected()) {
        $link_class = 'active';
    }

    $children = $item->getChildren();
    if ($children) {
        $item->addLinkClass($link_class);
        $item->addLinkClass('dropdown');
    }

    $item_class = $item->getItemClass();
    if ($item->getSelected()) {
        $item_class = "$item_class active";
    }
    if (isset($vars['item_class']) && $vars['item_class']) {
        $item_class .= ' ' . $vars['item_class'];
    }

    echo "<li class=\"$item_class\">";
    echo elgg_view_menu_item($item);
    if ($children) {
        echo elgg_view('navigation/menu/elements/section', array(
            'items' => $children,
        ));
    }
    echo '</li>';
} else {
    $item = $vars['item'];

    $link_class = 'elgg-menu-closed';
    if ($item->getSelected()) {
        // @todo switch to addItemClass when that is implemented
        //$item->setItemClass('elgg-state-selected');
        $link_class = 'elgg-menu-opened';
    }

    $children = $item->getChildren();
    if ($children) {
        $item->addLinkClass($link_class);
        $item->addLinkClass('elgg-menu-parent');
    }

    $item_class = $item->getItemClass();
    if ($item->getSelected()) {
        $item_class = "$item_class elgg-state-selected";
    }
    if (isset($vars['item_class']) && $vars['item_class']) {
        $item_class .= ' ' . $vars['item_class'];
    }

    echo "<li class=\"$item_class\">";
    echo elgg_view_menu_item($item);
    if ($children) {
        echo elgg_view('navigation/menu/elements/section', array(
            'items' => $children,
            'class' => 'elgg-menu elgg-child-menu',
        ));
    }
    echo '</li>';
}