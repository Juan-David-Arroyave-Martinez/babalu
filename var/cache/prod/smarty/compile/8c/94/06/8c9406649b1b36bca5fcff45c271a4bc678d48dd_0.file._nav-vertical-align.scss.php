<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:38
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_nav-vertical-align.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec7982193572_59335617',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c9406649b1b36bca5fcff45c271a4bc678d48dd' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_nav-vertical-align.scss',
      1 => 1542223692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec7982193572_59335617 (Smarty_Internal_Template $_smarty_tpl) {
?>// Navbar vertical align
//
// Vertically center elements in the navbar.
// Example: an element has a height of 30px, so write out `.navbar-vertical-align(30px);` to calculate the appropriate top margin.

@mixin navbar-vertical-align($element-height) {
  margin-top: (($navbar-height - $element-height) / 2);
  margin-bottom: (($navbar-height - $element-height) / 2);
}
<?php }
}
