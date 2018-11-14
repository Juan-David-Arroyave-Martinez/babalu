<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:38
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_size.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec79820ec966_40473012',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f08c898cc5af0428a97bc57e7e1bb43e9c6b41e' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_size.scss',
      1 => 1542223692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec79820ec966_40473012 (Smarty_Internal_Template $_smarty_tpl) {
?>// Sizing shortcuts

@mixin size($width, $height) {
  width: $width;
  height: $height;
}

@mixin square($size) {
  @include size($size, $size);
}
<?php }
}
