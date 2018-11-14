<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:26
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/template/controllers/orders/_select_payment.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec79769517b5_60736234',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd00535841d391b77b21848a5fcbfa5d3f5d37a8f' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/template/controllers/orders/_select_payment.tpl',
      1 => 1542223691,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec79769517b5_60736234 (Smarty_Internal_Template $_smarty_tpl) {
?><select name="payment_module_name" id="payment_module_name">
  <?php if (!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['payment_modules']->value, 'module');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['module']->value) {
?>
      <option value="<?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
" <?php if (isset($_POST['payment_module_name']) && $_smarty_tpl->tpl_vars['module']->value->name == $_POST['payment_module_name']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['module']->value->displayName;?>
</option>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <?php } else { ?>
      <option value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back office order','d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back office order','d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl ) );?>
</option>
  <?php }?>
</select>
<?php }
}
