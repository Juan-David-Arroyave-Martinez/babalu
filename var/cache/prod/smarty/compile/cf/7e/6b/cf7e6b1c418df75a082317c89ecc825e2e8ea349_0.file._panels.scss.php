<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:38
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_panels.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec7982176761_40553260',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf7e6b1c418df75a082317c89ecc825e2e8ea349' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_panels.scss',
      1 => 1542223692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec7982176761_40553260 (Smarty_Internal_Template $_smarty_tpl) {
?>// Panels

@mixin panel-variant($border, $heading-text-color, $heading-bg-color, $heading-border) {
  border-color: $border;

  & > .panel-heading {
    color: $heading-text-color;
    background-color: $heading-bg-color;
    border-color: $heading-border;

    + .panel-collapse > .panel-body {
      border-top-color: $border;
    }
  }
  & > .panel-footer {
    + .panel-collapse > .panel-body {
      border-bottom-color: $border;
    }
  }
}
<?php }
}
