<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:30
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/template/controllers/localization/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec797a0332b6_92408221',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2326c50eccbff69c476eb7017e557aec0f1ec5de' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/template/controllers/localization/content.tpl',
      1 => 1542223691,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec797a0332b6_92408221 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['localization_form']->value)) {
echo $_smarty_tpl->tpl_vars['localization_form']->value;
}
if (isset($_smarty_tpl->tpl_vars['localization_options']->value)) {
echo $_smarty_tpl->tpl_vars['localization_options']->value;
}
echo '<script'; ?>
 type="text/javascript">
	$(document).ready(function() {
		$('#PS_CURRENCY_DEFAULT').change(function(e) {
			alert("<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Before changing the default currency, we strongly recommend that you enable maintenance mode. Indeed, any change on the default currency requires a manual adjustment of the price of each product and its combinations.','d'=>'Admin.International.Notification','js'=>1),$_smarty_tpl ) );?>
");
		});
	});
<?php echo '</script'; ?>
>
<?php }
}
