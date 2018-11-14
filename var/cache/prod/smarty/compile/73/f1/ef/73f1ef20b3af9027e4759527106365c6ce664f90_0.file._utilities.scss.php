<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:38
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/bootstrap-sass/_utilities.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec79824bbbe2_08253487',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73f1ef20b3af9027e4759527106365c6ce664f90' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/bootstrap-sass/_utilities.scss',
      1 => 1542223692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec79824bbbe2_08253487 (Smarty_Internal_Template $_smarty_tpl) {
?>//
// Utility classes
// --------------------------------------------------


// Floats
// -------------------------

.clearfix {
  @include clearfix();
}
.center-block {
  @include center-block();
}
.pull-right {
  float: right !important;
}
.pull-left {
  float: left !important;
}


// Toggling content
// -------------------------

// Note: Deprecated .hide in favor of .hidden or .sr-only (as appropriate) in v3.0.1
.hide {
  display: none !important;
}
.show {
  display: block !important;
}
.invisible {
  visibility: hidden;
}
.text-hide {
  @include text-hide();
}


// Hide from screenreaders and browsers
//
// Credit: HTML5 Boilerplate

.hidden {
  display: none !important;
  visibility: hidden !important;
}


// For Affix plugin
// -------------------------

.affix {
  position: fixed;
}
<?php }
}
