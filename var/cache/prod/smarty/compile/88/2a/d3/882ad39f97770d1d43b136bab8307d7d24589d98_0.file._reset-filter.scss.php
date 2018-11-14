<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:38
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_reset-filter.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec79820e0103_33811164',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '882ad39f97770d1d43b136bab8307d7d24589d98' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_reset-filter.scss',
      1 => 1542223692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec79820e0103_33811164 (Smarty_Internal_Template $_smarty_tpl) {
?>// Reset filters for IE
//
// When you need to remove a gradient background, do not forget to use this to reset
// the IE filter for IE9 and below.

@mixin reset-filter() {
  filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
}
<?php }
}
