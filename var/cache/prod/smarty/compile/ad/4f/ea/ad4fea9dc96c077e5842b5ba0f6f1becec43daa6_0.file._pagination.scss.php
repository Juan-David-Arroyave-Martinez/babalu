<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:38
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_pagination.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec7982118e36_35630005',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad4fea9dc96c077e5842b5ba0f6f1becec43daa6' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_pagination.scss',
      1 => 1542223692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec7982118e36_35630005 (Smarty_Internal_Template $_smarty_tpl) {
?>// Pagination

@mixin pagination-size($padding-vertical, $padding-horizontal, $font-size, $border-radius) {
  > li {
    > a,
    > span {
      padding: $padding-vertical $padding-horizontal;
      font-size: $font-size;
    }
    &:first-child {
      > a,
      > span {
        @include border-left-radius($border-radius);
      }
    }
    &:last-child {
      > a,
      > span {
        @include border-right-radius($border-radius);
      }
    }
  }
}
<?php }
}
