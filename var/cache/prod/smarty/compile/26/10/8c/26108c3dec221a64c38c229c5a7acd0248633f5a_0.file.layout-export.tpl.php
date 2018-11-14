<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:36
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/template/layout-export.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec7980614568_01941986',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26108c3dec221a64c38c229c5a7acd0248633f5a' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/template/layout-export.tpl',
      1 => 1542223690,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec7980614568_01941986 (Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['export_precontent']->value;
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['export_headers']->value, 'header');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['header']->value) {
echo $_smarty_tpl->tpl_vars['text_delimiter']->value;
echo $_smarty_tpl->tpl_vars['header']->value;
echo $_smarty_tpl->tpl_vars['text_delimiter']->value;?>
;<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['export_content']->value, 'line');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['line']->value) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['line']->value, 'content');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['content']->value) {
echo $_smarty_tpl->tpl_vars['text_delimiter']->value;
echo $_smarty_tpl->tpl_vars['content']->value;
echo $_smarty_tpl->tpl_vars['text_delimiter']->value;?>
;<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
