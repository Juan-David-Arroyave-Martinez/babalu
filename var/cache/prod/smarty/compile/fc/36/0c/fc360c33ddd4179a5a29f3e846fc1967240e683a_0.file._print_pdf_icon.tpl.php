<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:30
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/template/controllers/outstanding/_print_pdf_icon.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec797a7814b1_09302517',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc360c33ddd4179a5a29f3e846fc1967240e683a' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/template/controllers/outstanding/_print_pdf_icon.tpl',
      1 => 1542223691,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec797a7814b1_09302517 (Smarty_Internal_Template $_smarty_tpl) {
if (Configuration::get('PS_INVOICE')) {?>
	<span style="width:20px; margin-right:5px;">
		<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf'),'html','UTF-8' ));?>
&amp;submitAction=generateInvoicePDF&amp;id_order_invoice=<?php echo $_smarty_tpl->tpl_vars['id_invoice']->value;?>
"><img src="../img/admin/tab-invoice.gif" alt="invoice" /></a>
	</span>
<?php }
}
}
