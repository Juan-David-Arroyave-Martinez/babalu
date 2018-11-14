<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:38
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_text-overflow.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec798226c9e5_28493849',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2cf2e79943cc958c8386478d4c26ab0e85a5b83b' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_text-overflow.scss',
      1 => 1542223692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec798226c9e5_28493849 (Smarty_Internal_Template $_smarty_tpl) {
?>// Text overflow
// Requires inline-block or block for proper styling

@mixin text-overflow() {
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}
<?php }
}
