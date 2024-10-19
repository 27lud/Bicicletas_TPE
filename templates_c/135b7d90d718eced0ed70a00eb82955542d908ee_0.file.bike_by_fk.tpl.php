<?php
/* Smarty version 4.2.1, created on 2024-10-19 07:56:24
  from 'C:\xampp\htdocs\WEB-2-TPE\templates\bike_by_fk.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_67134a08466e39_81669972',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '135b7d90d718eced0ed70a00eb82955542d908ee' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB-2-TPE\\templates\\bike_by_fk.tpl',
      1 => 1729313206,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_67134a08466e39_81669972 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2 class="text-center">Bikes in stock</h2>
<div class="card">
  <ul class="list-group">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
      <li class="list-group-item">
        <h5>Bicycle brand: <?php echo $_smarty_tpl->tpl_vars['item']->value->marca;?>
</h5>
        <p>Year of manufacture: <?php echo $_smarty_tpl->tpl_vars['item']->value->anio;?>
</p>
        <p>Bicycle color: <?php echo $_smarty_tpl->tpl_vars['item']->value->color;?>
</p>
      </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </ul>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
