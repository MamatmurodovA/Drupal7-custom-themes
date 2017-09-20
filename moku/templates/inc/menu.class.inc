<?php

class Menu{
    public $menu_tree;
    public $drop_down_class = FALSE;
    public function current_language()
    {
        return $GLOBALS['language']->language;
    }
    public function __construct($menu_machine_name)
    {
        $tree = menu_tree_all_data($menu_machine_name);
        $this->menu_tree = array_filter($tree, function($item)
        {
            return (isset($item['link']['language']) && $item['link']['language'] == $this->current_language())? : $item;
        });
    }
    protected function get_children($item)
    {
        if ($item['link']['has_children'] == 1):
            $out = ($this->drop_down_class)? '<ul class="dropdown-menu">' : '<ul>';
            foreach($item['below'] as $child):
                $out .= '<li>';
                $url = $child['link']['link_path'];
                $out .= '<a href="'.url($url).'">';
                    $out .= $child['link']['link_title'];
                $out .= '</a>';
                if($children  = $this->get_children($child)):
                    $out .= $children;
                endif;
                $out .= '</li>';
            endforeach;
            $out .= '</ul>';
            return $out;
        else:
            return NULL;
        endif;
    }

    public function get_menu_tree()
    {
        $out = '<div>';
            $out .= ($this->drop_down_class)? '<ul class="nav navbar-nav">' : '<ul>';
                foreach($this->menu_tree as $menu):
                    $out .= '<li>';
                    $url = ($menu['link']['link_path'] != '<front>')? url($menu['link']['link_path']) : '#';
                        $out .= '<a href="'.$url.'">';
                            $out .= $menu['link']['link_title'];
                    if($children  = $this->get_children($menu)):
                        $out .= ($this->drop_down_class)? '<span class="caret"></span>' : '';
                        $out .= '</a>';
                        $out .= $children;
                    else:
                        $out .= '</a>';
                    endif;
                    $out .= '</li>';
                endforeach;
            $out .= '</ul>';
        $out .= '</div>';

        return $out;
    }
}




class Taxonomy_tree
{
    public $vid;
    public $taxonomy_parents;
    public $taxonomy_tree;
    public $drop_down = FALSE;
    public function __construct($taxonomy_machine_name)
    {
        $this->vid = taxonomy_vocabulary_machine_name_load(CATEGORY_TAXONOMY_NAME)->vid;
        $tree = taxonomy_get_tree($this->vid);
        $this->taxonomy_parents = array_filter($tree, function ($item){
            return $item->parents[0] == 0;
        });
        return $this->tree_load();

    }
    public function get_taxonomy_children ($tid)
    {
        $children_list = array();
        if( $children = taxonomy_get_children($tid))
        {
            foreach ($children as $child)
            {
                $children_list [] = array(
                    'item_name' => $child->name,
                    'item_tid'  => $child->tid,
                    'item_children' => ($this->get_taxonomy_children($child->tid))? $this->get_taxonomy_children($child->tid) : NULL,
                );
            }
            return $children_list;
        }
        return NULL;
    }
    public function tree_load()
    {
        foreach ($this->taxonomy_parents as $menu)
        {
            $this->taxonomy_tree[] = array(
                'item_name' => $menu->name,
                'item_tid'  => $menu->tid,
                'item_children' => ($this->get_taxonomy_children($menu->tid))? $this->get_taxonomy_children($menu->tid) : NULL
            );
        }
        return $this->taxonomy_tree;
    }

    protected function get_taxonomy_children_with_html($tree_item)
    {
        $result = ($this->drop_down)? '<ul class="dropdown-menu">' : '<ul>';
            foreach ($tree_item['item_children'] as $item_child)
            {

                $result .= "<li>";
                $result .= "<a href='". url('category/'. $item_child['item_tid'])."'>". $item_child['item_name'] . "</a>";
                    if($item_child['item_children'])
                    {
                        $result .= $this->get_taxonomy_children_with_html($item_child);
                    }
                $result .= "</li>";
            }
        $result .= "</ul>";
        return $result;
    }
    public function tree_as_menu()
    {
        $out = ($this->drop_down)? '<ul class="nav navbar-nav">' : '<ul>';
            foreach ($this->taxonomy_tree as $tree_item)
            {
                $out .= "<li>";
                    if ($tree_item['item_children'])
                    {
                        $out .= "<a href='".url('category/'. $tree_item['item_tid'])."' data-toggle='dropdown' >";
                            $out .= $tree_item['item_name'];
                            $out .= "<span class='caret'></span>";
                        $out .= "</a>";
                        $out .= $this->get_taxonomy_children_with_html($tree_item);

                    }
                    else{
                        $out .= "<a href='".url('category/'. $tree_item['item_tid'])."'>";
                            $out .= $tree_item['item_name'];
                        $out .= "</a>";
                    }
                $out .= "</li>";
            }
            $out .= "<li>" . l(t('Our partners'), 'our-partners')."</li>";
        $out .= "</ul>";
        return $out;
    }
}