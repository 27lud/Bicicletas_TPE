<?php

require_once './app/controllers/category.controller.php';
require_once './app/models/item.model.php';
require_once './helpers/auth.helper.php';
require_once './app/views/item.view.php';

class ItemController {
  private $model;
  private $authHelper;
  private $view;

  public function __construct() {
    $this->model = new ItemModel();
    $this->authHelper = new AuthHelper();
    $this->view = new ItemView();
  }
  public function getItemByfk($id) {
    $item = $this->model->getItembyfk($id);
    return $item;
  }  
  public function showItemsbyfk($id) {
    $items = $this->getItemByfk($id); 
    $this->view->showItemsbyfk($items); 
  }
  public function addItem() {
    $this->authHelper->checkLoggedIn();

    $item = $_POST['item'];
    $year = $_POST['year'];
    $color = $_POST['color'];
    $category = $_POST['category'];

    if (empty($item) || empty($year)|| empty($color) || empty($category) ) {
      $this->view->showFormItems("Fill the data to add a bike");
    } else {
      $this->model->insertItem($item, $year, $color, $category);

      header("Location: " . BASE_URL . "bicycleTable");
    }
  }
  public function editItem($id) {
    $this->authHelper->checkLoggedIn();

    $item = $_POST['item'];
    $year = $_POST['year'];
    $color = $_POST['color'];
    $category = $_POST['category'];

    if (empty($item) || empty($year)|| empty($color) || empty($category)) {
      $this->view->showEditFormItem($id, "Fill the data to edit a bike");
    } else {
      $this->model->UpdateItem($id, $item, $year, $color, $category);

      header("Location: " . BASE_URL . "bicycleTable");
    }
  }
  public function deleteItembyid($id) {
    $this->authHelper->checkLoggedIn();
    $this->model->deleteItemById($id);

    header("Location: " . BASE_URL . "bicycleTable");
  }
  public function getAllItems() {
    $items = $this->model->getAllItems();
    return $items;
  }
  public function getItem($id) {
    $item = $this->model->getItem($id);
    return $item;
  }
  public function showItemList() {
    $items = $this->getAllItems();
    $category = new CategoryController();
    $categories = $category->getCategories();
    $this->view->showItemList($items, $categories);
  }
  public function showFormItems() {
    $category = new CategoryController();
    $categories = $category->getCategories();

    $this->view->showFormItems($categories);
  }
  public function editFormItems($id) {
    $item = $this->model->getItem($id);
    $category = new CategoryController();
    $categories = $category->getCategories();
    $this->view->showEditFormItem($item, $categories);
    
  }
}