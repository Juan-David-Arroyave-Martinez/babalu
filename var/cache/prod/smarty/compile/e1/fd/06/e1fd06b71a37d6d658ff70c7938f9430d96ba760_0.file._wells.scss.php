<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:38
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/bootstrap-sass/_wells.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec798205f098_04558681',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1fd06b71a37d6d658ff70c7938f9430d96ba760' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/bootstrap-sass/_wells.scss',
      1 => 1542223692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec798205f098_04558681 (Smarty_Internal_Template $_smarty_tpl) {
?>//
// Wells
// --------------------------------------------------


// Base class
.well {
  min-height: 20px;
  padding: 19px;
  margin-bottom: 20px;
  background-color: $well-bg;
  border: 1px solid $well-border;
  border-radius: $border-radius-base;
  @include box-shadow(inset 0 1px 1px rgba(0,0,0,.05));
  blockquote {
    border-color: #ddd;
    border-color: rgba(0,0,0,.15);
  }
}

// Sizes
.well-lg {
  padding: 24px;
  border-radius: $border-radius-large;
}
.well-sm {
  padding: 9px;
  border-radius: $border-radius-small;
}
<?php }
}
