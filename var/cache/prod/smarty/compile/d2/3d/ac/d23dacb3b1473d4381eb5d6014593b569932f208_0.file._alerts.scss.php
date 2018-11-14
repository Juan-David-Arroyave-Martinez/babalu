<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:38
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_alerts.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec798214a0c1_52398278',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd23dacb3b1473d4381eb5d6014593b569932f208' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_alerts.scss',
      1 => 1542223692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec798214a0c1_52398278 (Smarty_Internal_Template $_smarty_tpl) {
?>// Alerts

@mixin alert-variant($background, $border, $text-color) {
  background-color: $background;
  border-color: $border;
  color: $text-color;

  hr {
    border-top-color: darken($border, 5%);
  }
  .alert-link {
    color: darken($text-color, 10%);
  }
}
<?php }
}
