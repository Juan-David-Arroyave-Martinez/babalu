<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:38
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_background-variant.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec798218c0b9_67211875',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96cd890b70ae2579e447d5f9b0cf5d5b9dee3666' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_background-variant.scss',
      1 => 1542223692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec798218c0b9_67211875 (Smarty_Internal_Template $_smarty_tpl) {
?>// Contextual backgrounds

// [converter] $parent hack
@mixin bg-variant($parent, $color) {
  #<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
 {
    background-color: $color;
  }
  a#<?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
:hover {
    background-color: darken($color, 10%);
  }
}
<?php }
}
