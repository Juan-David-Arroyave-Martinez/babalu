<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:38
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_nav-divider.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec79821a0528_98661509',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '578b68ffa52ad8d8a7490dbbd7e79d0c1f6a9d16' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_nav-divider.scss',
      1 => 1542223692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec79821a0528_98661509 (Smarty_Internal_Template $_smarty_tpl) {
?>// Horizontal dividers
//
// Dividers (basically an hr) within dropdowns and nav lists

@mixin nav-divider($color: #e5e5e5) {
  height: 1px;
  margin: (($line-height-computed / 2) - 1) 0;
  overflow: hidden;
  background-color: $color;
}
<?php }
}
