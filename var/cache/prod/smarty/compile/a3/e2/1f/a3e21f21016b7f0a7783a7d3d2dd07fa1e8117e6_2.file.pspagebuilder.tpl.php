<?php
/* Smarty version 3.1.32, created on 2018-12-10 23:30:08
  from '/home4/makemark/public_html/makemark/babalu_prestashop/modules/pspagebuilder/views/templates/hook/pspagebuilder.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c0f3d5079a137_43846176',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3e21f21016b7f0a7783a7d3d2dd07fa1e8117e6' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/modules/pspagebuilder/views/templates/hook/pspagebuilder.tpl',
      1 => 1542658072,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c0f3d5079a137_43846176 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('ime', time());?>
<div id="pts<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['prefix']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['time']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['prefix']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 clearfix">
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['layout_tpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('rows'=>$_smarty_tpl->tpl_vars['layout']->value), 0, true);
?>
</div><?php }
}
