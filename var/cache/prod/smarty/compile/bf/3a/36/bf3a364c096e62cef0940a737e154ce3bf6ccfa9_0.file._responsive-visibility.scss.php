<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:38
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_responsive-visibility.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec7982142304_89386157',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf3a364c096e62cef0940a737e154ce3bf6ccfa9' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_responsive-visibility.scss',
      1 => 1542223692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec7982142304_89386157 (Smarty_Internal_Template $_smarty_tpl) {
?>// Responsive utilities

//
// More easily include all the states for responsive-utilities.less.
// [converter] $parent hack
@mixin responsive-visibility($parent) {
  #<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
 {
    display: block !important;
  }
  table#<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
  { display: table; }
  tr#<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
     { display: table-row !important; }
  th#<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
,
  td#<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
     { display: table-cell !important; }
}

// [converter] $parent hack
@mixin responsive-invisibility($parent) {
  #<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
 {
    display: none !important;
  }
}
<?php }
}
