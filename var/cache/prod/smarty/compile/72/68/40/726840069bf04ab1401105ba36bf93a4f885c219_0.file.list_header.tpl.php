<?php
/* Smarty version 3.1.32, created on 2018-12-12 22:03:51
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin950meejgc/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c11cc1761f557_19619898',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '726840069bf04ab1401105ba36bf93a4f885c219' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin950meejgc/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl',
      1 => 1542223690,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c11cc1761f557_19619898 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9705837415c11cc1761d954_72538618', 'leadin');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block 'leadin'} */
class Block_9705837415c11cc1761d954_72538618 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leadin' => 
  array (
    0 => 'Block_9705837415c11cc1761d954_72538618',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
 type="text/javascript">
		$(document).ready(function() {
			$(location.hash).click();
		});
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'leadin'} */
}
