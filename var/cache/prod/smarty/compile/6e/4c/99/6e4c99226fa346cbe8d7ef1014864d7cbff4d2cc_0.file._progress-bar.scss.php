<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:38
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_progress-bar.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec798216e005_83329080',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e4c99226fa346cbe8d7ef1014864d7cbff4d2cc' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_progress-bar.scss',
      1 => 1542223692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec798216e005_83329080 (Smarty_Internal_Template $_smarty_tpl) {
?>// Progress bars

@mixin progress-bar-variant($color) {
  background-color: $color;
  .progress-striped & {
    @include gradient-striped();
  }
}
<?php }
}