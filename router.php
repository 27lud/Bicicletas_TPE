<?php

//require_once './app/controllers/bikes.controller.php';
require_once './app/controllers/user.controller.php';
require_once './app/controllers/category.controller.php';
require_once './app/controllers/item.controller.php';

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

$action = 'home'; // acción por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

$params = explode('/', $action);

// instancio los controllers
$itemController = new ItemController();
$categoryController = new CategoryController();
$userController = new UserController();

switch ($params[0]) {
    case 'login':
        $userController->showFormLogin();  // muestra el form login
        break;
    case 'validate':
        $userController->validateUser();   //validar usuario
        break;
    case 'logout':
        $userController->logout();  //cierra sesion
        break;
    case 'home':
        $categoryController->showCategoriesList();   //aca va las categorias en el home
        break;
    case 'addCategory':
        $categoryController->addCategoryOfBike();   //me añade una categoria
        break;
    case 'newCategory':
        $categoryController->showFormCategories();   //me muestra el form categoria
        break;
        case 'updateCategory':
        $categoryController->editCategoryOfBike($params[1]);   //acción que edita categoria
        break;
    case 'category':
        $categoryController->editFormCategories($params[1]);   //me lleva el form de categoria para editar
        break;
    case 'deleteCategory':  
        $id = $params[1];
        $categoryController->deleteCategoryOfBikebyid($id); //me borra la categoria completo con los items, esta en cascada
        break;
    case 'bicycles':
        $id = $params[1];
        $itemController->showItemsbyfk($id);   //muestra los items según su categoria
        break;
    case 'bicycleTable':
        $itemController->showItemList();   //muestra la lista de items
        break;
    case 'addItem':
        $itemController->addItem();   //añade un nuevo item
        break;
    case 'newBike':
        $itemController->showFormItems();   //muestra el form para añadir item
        break;
    case 'updateItem':
        $id = $params[1];
        $itemController->editItem($id);   //accion que edita cada item
        break;
    case 'item':
        $itemController->editFormItems($params[1]);   //lleva al form para editar el item
        break;
    case 'deleteItem':  //borra el item seleccionado
        $id = $params[1];
        $itemController->deleteItembyid($id);
        break;
    default:
        echo ('404 Page not found');
        break;
}
