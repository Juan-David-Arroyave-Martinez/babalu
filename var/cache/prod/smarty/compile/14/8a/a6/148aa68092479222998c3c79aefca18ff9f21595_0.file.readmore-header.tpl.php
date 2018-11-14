<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:32
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/template/controllers/modules/readmore-header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec797c6523e3_21781152',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '148aa68092479222998c3c79aefca18ff9f21595' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/template/controllers/modules/readmore-header.tpl',
      1 => 1542223691,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec797c6523e3_21781152 (Smarty_Internal_Template $_smarty_tpl) {
?><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
<h3 class="modal-title">
	<div class="module_name">
		<a href="#" class="icon icon-chevron-left" onclick="openModulesList()"></a>
			<?php echo $_smarty_tpl->tpl_vars['displayName']->value;?>

			<small class="text-muted"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'v'),$_smarty_tpl ) );
echo $_smarty_tpl->tpl_vars['version']->value;?>
 - <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'by'),$_smarty_tpl ) );?>
 <?php echo $_smarty_tpl->tpl_vars['author']->value;?>
</small>
	</div>
</h3>
<?php }
}
