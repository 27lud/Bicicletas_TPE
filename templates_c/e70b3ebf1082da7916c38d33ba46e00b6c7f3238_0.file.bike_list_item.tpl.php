<?php
/* Smarty version 4.2.1, created on 2024-10-19 05:44:18
  from 'C:\xampp\htdocs\WEB-2-TPE\templates\bike_list_item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_67132b128a7490_24024297',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e70b3ebf1082da7916c38d33ba46e00b6c7f3238' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB-2-TPE\\templates\\bike_list_item.tpl',
      1 => 1729309454,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_67132b128a7490_24024297 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="container mt-5">
        <h2 class="text-center">Bicycle Table</h2>
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Category</th>
                    <th>Brand</th>
                    <th>Year</th>
                    <th>Color</th>
                    <?php if (((isset($_SESSION['IS_LOGGED'])))) {?>
                    <th>Edit</th>
                    <th>Delete</th>
                    <?php ob_start();
}
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

                </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                <tr>
                <td>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['item']->value->id_tipos_fk == $_smarty_tpl->tpl_vars['category']->value->id) {
echo $_smarty_tpl->tpl_vars['category']->value->nombre;
ob_start();
}
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>

                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value->marca;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value->anio;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value->color;?>
</td>
                    <?php if (((isset($_SESSION['IS_LOGGED'])))) {?>
                    <td><a type='button' class="btn btn-warning" href="item/<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
">Edit</a></td>
                    <td><a type="button" class="btn btn-danger" href="deleteItem/<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
">Delete</a></td>
                    <?php ob_start();
}
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>

                </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
    </div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
