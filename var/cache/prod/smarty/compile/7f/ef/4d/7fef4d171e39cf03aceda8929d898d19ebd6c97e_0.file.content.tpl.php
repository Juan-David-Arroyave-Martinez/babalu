<?php
/* Smarty version 3.1.32, created on 2018-12-15 13:22:36
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin950meejgc/themes/default/template/controllers/currencies/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c15466c715b49_83081764',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7fef4d171e39cf03aceda8929d898d19ebd6c97e' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin950meejgc/themes/default/template/controllers/currencies/content.tpl',
      1 => 1542223690,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:controllers/currencies/status.tpl' => 1,
    'file:controllers/currencies/conversion_rate.tpl' => 1,
  ),
),false)) {
function content_5c15466c715b49_83081764 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-10 col-xs-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
	<div class="col-lg-2 col-xs-12">
		<?php if (isset($_smarty_tpl->tpl_vars['isForm']->value)) {?>
			<?php $_smarty_tpl->_subTemplateRender('file:controllers/currencies/status.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<?php } else { ?>
			<?php $_smarty_tpl->_subTemplateRender('file:controllers/currencies/conversion_rate.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<?php }?>
	</div>
</div>
<?php }
}
