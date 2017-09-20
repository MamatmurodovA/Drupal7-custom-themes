<?php
$theme_name = basename(__DIR__);

define('INC_PATH', drupal_get_path('theme', $theme_name).'/templates/inc/');
define('CATEGORY_TAXONOMY_NAME', 'category');
print INC_PATH;
require_once 'templates/inc/menu.class.inc';

function get_footer_menu()
{
	$main_menu = new Menu('main-menu');
	$main_menu->drop_down_class = FALSE;
	return $main_menu->get_menu_tree();	
}

function get_main_menu()
{
    $tree = new Taxonomy_tree(CATEGORY_TAXONOMY_NAME);
    $tree->drop_down = TRUE;
    return $tree->tree_as_menu();
}

function get_node_comments($nid)
{
    $node = node_load($nid);
    $comments = comment_load_multiple(comment_get_thread($node, '', 100));
    $out = '';
    foreach ($comments as $comment)
    {
        $timestamp = "@$comment->created";

        $out .= '<div class="comment-text">';
            $out .= '<span class="icon">m</span>';
            $out .= '<span class="user-name">'.$comment->name.'</span>';
            $out .= '<span class="comment-added-time">'.time_elapsed_string($timestamp, true).'</span>';
            $out .= '<p>'.$comment->comment_body['und'][0]['value'].'</p>';
        $out .= '</div>';
    }
    return $out;

}

function time_elapsed_string($datetime, $full = false) {
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . t($v . ($diff->$k > 1 ? 's' : ''));
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . t(' ago') : t('just now');
}

function get_user_discounts($uid)
{
    $query = db_query("SELECT discounts.discount_id, discounts.created, discount_codes.discount_code FROM discounts INNER JOIN discount_codes ON discounts.discount_id = discount_codes.discount_id WHERE discount_codes.user_id = :uid", array(":uid" => $uid));
    $result = $query->fetchAll();
    return $result;
}
