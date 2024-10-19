<?php
/* Smarty version 4.2.1, created on 2024-10-19 06:32:05
  from 'C:\xampp\htdocs\WEB-2-TPE\templates\form_item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6713364543e8e1_91645498',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2383de44c5c64c162210ddaa1a027e1dd9f34244' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB-2-TPE\\templates\\form_item.tpl',
      1 => 1729312241,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6713364543e8e1_91645498 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1>Add a bike</h1>
<form action="addItem" method="POST">
    <div class="row">
        <div class="col-3">
            <div class="form-group">
                <label>Bicycle brand</label>
                <input name="item" type="text" class="form-control">
            </div>
            <div>
                <label>Year of manufacture</label>
                <input name="year" type="number" class="form-control">
            </div>
            <div>
                <label>Bicycle color</label>
                <input name="color" type="text" class="form-control">
            </div>
            <div>
                <label>Category</label>
                <select name="category">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                    <option value=<?php echo $_smarty_tpl->tpl_vars['category']->value->id;?>
><?php echo $_smarty_tpl->tpl_vars['category']->value->nombre;?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
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
