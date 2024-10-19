<?php

require_once './app/models/category.model.php';
require_once './helpers/auth.helper.php';
require_once './app/views/category.view.php';

class CategoryController {
  private $model;
  private $authHelper;
  private $view;

  public function __construct() {
    $this->model = new CategoryModel();
    $this->authHelper = new AuthHelper();
    $this->view = new CategoryView();
  }
  public function addCategoryOfBike() {
    $this->authHelper->checkLoggedIn();

    $category = $_POST['category'];
    $information = $_POST['information'];

    if (empty($category) || empty($information)) {
      $this->view->showFormCategories("Fill the data to add a bike category");
    } else {
      $this->model->insertCategoryOfBike($category, $information);

      header("Location: " . BASE_URL);
    }
  }
  public function editCategoryOfBike($id) {
    $this->authHelper->checkLoggedIn();

    $category = $_POST['category'];   // validación entrada de datos
    $information = $_POST['information'];

    if (empty($category) && empty($information)) {
      $this->view->showEditFormCategory($id, "Fill the data to edit a bike category");
    } else {
      $this->model->UpdateCategory($id, $category, $information);

      header("Location: " . BASE_URL);
    }
  }
  public function deleteCategoryOfBikebyid($id) {
    $this->authHelper->checkLoggedIn();
    $this->model->deleteCategoryOfBikeById($id);

    header("Location: " . BASE_URL);
  }
  public function getCategories() {
    $categories = $this->model->getCategories();
    return $categories;
  }
  public function getCategory($id) {
    $category = $this->model->getCategory($id);
    return $category;
  }
  public function showCategoriesList() {
    $categories = $this->getCategories();
    $this->view->showCategoryList($categories);
  }
  public function showFormCategories() {
    $this->view->showFormCategories();
  }
  public function editFormCategories($id) {
    $category = $this->model->getCategory($id);
    $this->view->showEditFormCategory($category);
  }
}