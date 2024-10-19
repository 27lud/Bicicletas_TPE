<?php
/* Smarty version 4.2.1, created on 2024-10-19 06:44:29
  from 'C:\xampp\htdocs\WEB-2-TPE\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6713392d3dbb80_78886695',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96567758f0f50e0c653a06fda703b8faa97b7511' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB-2-TPE\\templates\\header.tpl',
      1 => 1729313065,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6713392d3dbb80_78886695 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo BASE_URL;?>
">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>King of bikes</title>
</head>
<body class="d-flex flex-column min-vh-100">
    <header>
        <nav class="navbar" style="background-color: #e3f2fd;>
            <div class="container-fluid">
              <a class="btn btn-info" aria-current="page" href="home">Home</a>
              <a type="button" class="btn btn-secondary" href="bicycleTable">Bicycle table</a>
              <a type="button" class="btn btn-secondary" href="newBike">Add new bicycle</a>
              <a type="button" class="btn btn-secondary"  href="newCategory">Add new bicycle category</a>
              <?php if ((!(isset($_SESSION['IS_LOGGED'])))) {?>  .
              <a type="button" class="btn btn-success" href="login">Log in</a>
              <?php } else { ?>
                <a type="button" class="btn btn-danger" href="logout">Logout</a>
              <?php }?>
                <ul class="navbar-nav">
                </ul>
              </div>
            </div>
          </nav>
    </header>
    <div class="flex-grow-1">
       

<?php }
}
