<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:30
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/template/controllers/shop_group/helpers/form/form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec797ab9e477_94796540',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c17424e38ecd80e8aa27e61a97c09cbeba8fea7' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/template/controllers/shop_group/helpers/form/form.tpl',
      1 => 1542223691,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec797ab9e477_94796540 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11865484625bec797ab92df4_32211509', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block 'script'} */
class Block_11865484625bec797ab92df4_32211509 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_11865484625bec797ab92df4_32211509',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	function toggleShareOrders() {

		var disabled_customer = ($('#share_customer_on').prop('checked')) ? false : true;
		var disabled_stock = ($('#share_stock_on').prop('checked')) ? false : true;

		if (disabled_customer || disabled_stock)
		{
			$("input[name=share_order]").each(function(i) {
	            $(this).attr('disabled', true);
	        });

			$('#share_order_off').attr('checked', true);
		}
		else
		{
			$('input[name=share_order]').attr('disabled', false);
		}
	}

	$(document).ready(function() {
		if (!$("input[name=share_order]").prop('disabled'))
		{
			toggleShareOrders();
			$('input[name=share_customer]').click(function()
			{
				toggleShareOrders();
			});
			$('input[name=share_stock]').click(function()
			{
				toggleShareOrders();
			});
		}

		$('#useImportData').click(function() {
			$('#importList').slideToggle('slow');
		});
	});

<?php
}
}
/* {/block 'script'} */
}
