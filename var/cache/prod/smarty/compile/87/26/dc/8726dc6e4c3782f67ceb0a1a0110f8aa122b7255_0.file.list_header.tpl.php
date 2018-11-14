<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:25
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/template/controllers/logs/helpers/list/list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec79754a5d24_67580425',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8726dc6e4c3782f67ceb0a1a0110f8aa122b7255' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/template/controllers/logs/helpers/list/list_header.tpl',
      1 => 1542223691,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec79754a5d24_67580425 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20609607685bec7975492c77_47282930', "override_header");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block "override_header"} */
class Block_20609607685bec7975492c77_47282930 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'override_header' => 
  array (
    0 => 'Block_20609607685bec7975492c77_47282930',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	<div class="panel">
		<h3>
			<i class="icon-warning-sign"></i>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Severity levels','d'=>'Admin.Advparameters.Help'),$_smarty_tpl ) );?>

		</h3>
		<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Meaning of severity levels:'),$_smarty_tpl ) );?>
</p>
		<ol>
			<li><span class="badge badge-success"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Informative only','d'=>'Admin.Advparameters.Help'),$_smarty_tpl ) );?>
</span></li>
			<li><span class="badge badge-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Warning','d'=>'Admin.Advparameters.Help'),$_smarty_tpl ) );?>
</span></li>
			<li><span class="badge badge-danger"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Error','d'=>'Admin.Advparameters.Help'),$_smarty_tpl ) );?>
</span></li>
			<li><span class="badge badge-critical"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Major issue (crash)!','d'=>'Admin.Advparameters.Help'),$_smarty_tpl ) );?>
</span></li>
		</ol>
	</div>

<?php
}
}
/* {/block "override_header"} */
}
