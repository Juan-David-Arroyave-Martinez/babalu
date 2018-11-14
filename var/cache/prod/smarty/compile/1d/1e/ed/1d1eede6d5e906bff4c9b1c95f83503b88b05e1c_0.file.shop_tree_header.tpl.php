<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:24
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/template/controllers/shop/helpers/tree/shop_tree_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec7974d9b155_91797827',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d1eede6d5e906bff4c9b1c95f83503b88b05e1c' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/template/controllers/shop/helpers/tree/shop_tree_header.tpl',
      1 => 1542223691,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec7974d9b155_91797827 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel-heading">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-sitemap"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl ) );
}?>
	<div class="pull-right">
		<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {
echo $_smarty_tpl->tpl_vars['toolbar']->value;
}?>
	</div>
</div>
<?php }
}
