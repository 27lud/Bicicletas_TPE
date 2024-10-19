<?php
/* Smarty version 4.2.1, created on 2024-10-03 21:39:00
  from 'C:\xampp\htdocs\WEB-2-TPE\templates\form_update_category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_66fef2d46b5a55_80383360',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6956ac6f28419bca38d5202f03a266a5768203df' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB-2-TPE\\templates\\form_update_category.tpl',
      1 => 1727984337,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_66fef2d46b5a55_80383360 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1>Change category of bike </h1>

<form action="updateCategory/<?php echo $_smarty_tpl->tpl_vars['category']->value->id;?>
" method="POST">
    <div class="row">
        <div class="col-3">
            <div class="form-group">

                <label>Category name</label>
                <input value="<?php echo $_smarty_tpl->tpl_vars['category']->value->nombre;?>
" name="category" type="text" class="form-control">
            </div>
            <div>
                <label>Description</label>
                <input  value="<?php echo $_smarty_tpl->tpl_vars['category']->value->descripcion;?>
" name="information" type="text" class="form-control">
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
    <?php if ($_smarty_tpl->tpl_vars['error']->value != null) {?>
        <p><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
    <?php ob_start();
}
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

</form><?php }
}
