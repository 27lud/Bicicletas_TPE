<?php

require_once './library/smarty-master/libs/Smarty.class.php';

class CategoryView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty();  //smarty
    }
    function showCategoryList($categories, $error = null) {   // home
        $this->smarty->assign('count', count($categories));
        $this->smarty->assign('categories', $categories);
        $this->smarty->assign('error', $error);

        $this->smarty->display('bike_list_category.tpl');
    }
    function showEditFormCategory($category, $error = null) { // form  editar tipo
        $this->smarty->assign('category', $category);
        $this->smarty->assign('error', $error);

        $this->smarty->display('form_update_category.tpl');
    }
    function showFormCategories($error = null) {  //form para agregar categoria
        $this->smarty->assign('error', $error);

        $this->smarty->display('form_category.tpl');
    }
}
