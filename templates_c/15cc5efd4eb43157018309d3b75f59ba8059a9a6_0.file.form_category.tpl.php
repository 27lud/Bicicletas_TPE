<?php
/* Smarty version 4.2.1, created on 2024-10-19 06:32:10
  from 'C:\xampp\htdocs\WEB-2-TPE\templates\form_category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6713364a1f1001_95941014',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15cc5efd4eb43157018309d3b75f59ba8059a9a6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB-2-TPE\\templates\\form_category.tpl',
      1 => 1729312224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6713364a1f1001_95941014 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1>Add type of bike </h1>
<form action="addCategory" method="POST">
    <div class="row">
        <div class="col-3">
            <div class="form-group">
                <label> Category name</label>
                <input name="category" type="text" class="form-control">
            </div>
            <div>
                <label>Description</label>
                <input name="information" type="text" class="form-control">
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

</form>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
