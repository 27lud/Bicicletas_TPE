<?php

class AuthHelper {

    public function checkLoggedIn() {

        if (!isset($_SESSION['IS_LOGGED'])) { //verificacion si user esta logueado
            header("Location: " . BASE_URL . 'login'); //sino redirige al login
            die(); //muere aca
        }
    }

}
