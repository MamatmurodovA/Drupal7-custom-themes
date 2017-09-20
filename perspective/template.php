<?php

define('THEME_ROOT_PERSPECTIVE', path_to_theme());
define('THEME_PERSPECTIVE_SRC_ROOT', THEME_ROOT_PERSPECTIVE.'/src');
define('THEME_ROOT_INC_ROOT', THEME_ROOT_PERSPECTIVE.'/templates/inc/');

include_once THEME_ROOT_INC_ROOT. 'menu.class.inc';

function get_block($module_name, $id)
{
    $block = block_load($module_name, $id);
    $block_rendered = _block_get_renderable_array(_block_render_blocks(array($block)));
    return drupal_render($block_rendered);
}

function get_lang()
{
    return $GLOBALS['language']->language;
}

function main_menu()
{
    $menu_tree = new Menu('main-menu');
    $menu_tree->drop_down_class = TRUE;
    return $menu_tree->get_menu_tree();
}