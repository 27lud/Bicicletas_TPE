<?php

require_once './library/smarty-master/libs/Smarty.class.php';

class ItemView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty();  
    }
    function showItemsbyfk($items, $error = null) {
        $this->smarty->assign('count', count($items));
        $this->smarty->assign('items', $items);
        $this->smarty->assign('error', $error);

        $this->smarty->display('bike_by_fk.tpl');
    }
    function showItemList($items, $categories, $error = null) {   
        $this->smarty->assign('count', count($items));
        $this->smarty->assign('items', $items);
        $this->smarty->assign('categories', $categories);
        $this->smarty->assign('error', $error);

        $this->smarty->display('bike_list_item.tpl');
    }
    function showEditFormItem($item,$categories, $error = null) { 

        $this->smarty->assign('item', $item);
        $this->smarty->assign('categories', $categories);
        $this->smarty->assign('error', $error);

        $this->smarty->display('form_update_item.tpl');
    }
    function showFormItems($categories, $error = null) {
        
        $this->smarty->assign('categories', $categories);
        $this->smarty->assign('error', $error);
        
        $this->smarty->display('form_item.tpl');

    }
}