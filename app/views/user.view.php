<?php

require_once './library/smarty-master/libs/Smarty.class.php';

class UserView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty();
    }
    function showFormLogin($error = null) {
        $this->smarty->assign("error", $error);

        $this->smarty->display('login.tpl');
    }
}
