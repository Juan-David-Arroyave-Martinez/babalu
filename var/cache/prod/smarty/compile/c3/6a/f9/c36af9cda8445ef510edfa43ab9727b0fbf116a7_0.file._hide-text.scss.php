<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:38
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_hide-text.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec7982104e33_39159658',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c36af9cda8445ef510edfa43ab9727b0fbf116a7' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_hide-text.scss',
      1 => 1542223692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec7982104e33_39159658 (Smarty_Internal_Template $_smarty_tpl) {
?>// CSS image replacement
//
// Heads up! v3 launched with with only `.hide-text()`, but per our pattern for
// mixins being reused as classes with the same name, this doesn't hold up. As
// of v3.0.1 we have added `.text-hide()` and deprecated `.hide-text()`.
//
// Source: https://github.com/h5bp/html5-boilerplate/commit/aa0396eae757

// Deprecated as of v3.0.1 (will be removed in v4)
@mixin hide-text() {
  font: #<?php echo 0/0;?>
 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0;
}

// New mixin to use as of v3.0.1
@mixin text-hide() {
  @include hide-text();
}
<?php }
}
