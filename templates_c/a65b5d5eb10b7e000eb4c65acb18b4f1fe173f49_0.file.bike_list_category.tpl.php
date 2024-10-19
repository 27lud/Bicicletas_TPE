<?php
/* Smarty version 4.2.1, created on 2024-10-19 06:27:41
  from 'C:\xampp\htdocs\WEB-2-TPE\templates\bike_list_category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6713353d52f4e0_73828937',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a65b5d5eb10b7e000eb4c65acb18b4f1fe173f49' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB-2-TPE\\templates\\bike_list_category.tpl',
      1 => 1729311865,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6713353d52f4e0_73828937 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1 class="text-center">Categories of bikes </h1>
<div class="card">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
    <div class="card-body">
      <h3 class="text-dark"><?php echo $_smarty_tpl->tpl_vars['category']->value->nombre;?>
</h3>
      <p class="text-secondary"><?php echo $_smarty_tpl->tpl_vars['category']->value->descripcion;?>
</p>
      <a type="button" class="btn btn-success" href="bicycles/<?php echo $_smarty_tpl->tpl_vars['category']->value->id;?>
">Show more</a>
      <?php if (((isset($_SESSION['IS_LOGGED'])))) {?>
        <a type='button' class="btn btn-warning" href="category/<?php echo $_smarty_tpl->tpl_vars['category']->value->id;?>
">Edit</a>
        <a type="button" class="btn btn-danger" href="deleteCategory/<?php echo $_smarty_tpl->tpl_vars['category']->value->id;?>
">Delete</a>
      <?php ob_start();
}
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

    </div>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <?php if (($_smarty_tpl->tpl_vars['error']->value)) {?>
    <p class="text-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
  <?php ob_start();
}
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>

</div>
<p class="mt-3"><b>Showing <?php echo $_smarty_tpl->tpl_vars['count']->value;?>
 Category of bikes</b></p>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
