<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:38
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_buttons.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec7982181d21_16402701',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e30a647944e13a044c0935d9ff3663ce4d941043' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_buttons.scss',
      1 => 1542223692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec7982181d21_16402701 (Smarty_Internal_Template $_smarty_tpl) {
?>// Button variants
//
// Easily pump out default styles, as well as :hover, :focus, :active,
// and disabled options for all buttons

@mixin button-variant($color, $background, $border) {
  color: $color;
  background-color: $background;
  border-color: $border;

  &:hover,
  &:focus,
  &:active,
  &.active,
  .open > &.dropdown-toggle {
    color: $color;
    background-color: darken($background, 10%);
        border-color: darken($border, 12%);
  }
  &:active,
  &.active,
  .open > &.dropdown-toggle {
    background-image: none;
  }
  &.disabled,
  &[disabled],
  fieldset[disabled] & {
    &,
    &:hover,
    &:focus,
    &:active,
    &.active {
      background-color: $background;
          border-color: $border;
    }
  }

  .badge {
    color: $background;
    background-color: $color;
  }
}

// Button sizes
@mixin button-size($padding-vertical, $padding-horizontal, $font-size, $line-height, $border-radius) {
  padding: $padding-vertical $padding-horizontal;
  font-size: $font-size;
  line-height: $line-height;
  border-radius: $border-radius;
}
<?php }
}
