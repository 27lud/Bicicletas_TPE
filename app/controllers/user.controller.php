<?php

require_once './app/models/user.model.php';
require_once './app/views/user.view.php';

class UserController {
  private $model;
  private $view;

  function __construct() {
    session_start();  // inicio de sesion sin verficicación
    $this->model = new UserModel();
    $this->view = new UserView();
  }
  public function showFormLogin() {
    $this->view->showFormLogin();
  }
  public function validateUser() {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user = $this->model->getUserByEmail($email); //encuentro el user por esta función

    if ($user && password_verify($password, $user->password)) {  //si el user esta y la password coincide
      session_start(); //inicio sesion
      $_SESSION['USER_ID'] = $user->id;
      $_SESSION['USER_EMAIL'] = $user->email;
      $_SESSION['IS_LOGGED'] = true;

      header("Location: " . BASE_URL);
    } else {
      $this->view->showFormLogin("El usuario o la contraseña no existe.");
    }
  }
  public function logout() { //desloguear
    session_start();
    session_destroy();
    header("Location: " . BASE_URL);
  }
}
