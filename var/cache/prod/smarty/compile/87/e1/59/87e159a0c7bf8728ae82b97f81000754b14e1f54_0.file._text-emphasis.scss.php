<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:38
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_text-emphasis.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec798221a1e1_87679803',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87e159a0c7bf8728ae82b97f81000754b14e1f54' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_text-emphasis.scss',
      1 => 1542223692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec798221a1e1_87679803 (Smarty_Internal_Template $_smarty_tpl) {
?>// Typography

// [converter] $parent hack
@mixin text-emphasis-variant($parent, $color) {
  #<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
 {
    color: $color;
  }
  a#<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
:hover {
    color: darken($color, 10%);
  }
}
<?php }
}
