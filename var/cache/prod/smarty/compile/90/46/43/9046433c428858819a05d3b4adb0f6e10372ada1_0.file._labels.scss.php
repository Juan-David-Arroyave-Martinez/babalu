<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:38
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_labels.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec7982129690_65018604',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9046433c428858819a05d3b4adb0f6e10372ada1' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_labels.scss',
      1 => 1542223692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec7982129690_65018604 (Smarty_Internal_Template $_smarty_tpl) {
?>// Labels

@mixin label-variant($color) {
  background-color: $color;
  
  &[href] {
    &:hover,
    &:focus {
      background-color: darken($color, 10%);
    }
  }
}
<?php }
}
