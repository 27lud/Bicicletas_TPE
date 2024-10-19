<?php
/* Smarty version 4.2.1, created on 2024-10-16 17:45:34
  from 'C:\xampp\htdocs\WEB-2-TPE\templates\form_update_item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_670fdf9e76b7b5_42702119',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1087e36580510fc22c44d2b3db861c3b099f61cb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB-2-TPE\\templates\\form_update_item.tpl',
      1 => 1729093531,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_670fdf9e76b7b5_42702119 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1>Edit bike data</h1>

<form action="updateItem/<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
" method="POST">
    <div class="row">
        <div class="col-3">
            <div class="form-group">

                <label>Bicycle brand</label>
                <input value="<?php echo $_smarty_tpl->tpl_vars['item']->value->marca;?>
" name="item" type="text" class="form-control">
            </div>
            <div>
                <label>Year of manufacture</label>
                <input  value="<?php echo $_smarty_tpl->tpl_vars['item']->value->anio;?>
" name="year" type="text" class="form-control">
            </div>
            <div>
                <label>Bicycle color</label>
                <input  value="<?php echo $_smarty_tpl->tpl_vars['item']->value->color;?>
" name="color" type="text" class="form-control">
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
 <?php if ($_smarty_tpl->tpl_vars['item']->value->id_tipos_fk == $_smarty_tpl->tpl_vars['category']->value->id) {?> selected <?php ob_start();
}
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
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
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>

</form><?php }
}
