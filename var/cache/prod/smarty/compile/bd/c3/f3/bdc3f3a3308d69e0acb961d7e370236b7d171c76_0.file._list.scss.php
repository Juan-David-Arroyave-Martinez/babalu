<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:37
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/font-awesome/_list.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec7981d3fb13_23060067',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bdc3f3a3308d69e0acb961d7e370236b7d171c76' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/font-awesome/_list.scss',
      1 => 1542223692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec7981d3fb13_23060067 (Smarty_Internal_Template $_smarty_tpl) {
?>// List Icons
// -------------------------

.#<?php echo $_smarty_tpl->tpl_vars['fa']->value-'css'-'prefix';?>
-ul {
  padding-left: 0;
  margin-left: $fa-li-width;
  list-style-type: none;
  > li { position: relative; }
}
.#<?php echo $_smarty_tpl->tpl_vars['fa']->value-'css'-'prefix';?>
-li {
  position: absolute;
  left: -$fa-li-width;
  width: $fa-li-width;
  top: (2em / 14);
  text-align: center;
  &.#<?php echo $_smarty_tpl->tpl_vars['fa']->value-'css'-'prefix';?>
-lg {
    left: -$fa-li-width + (4em / 14);
  }
}
<?php }
}
