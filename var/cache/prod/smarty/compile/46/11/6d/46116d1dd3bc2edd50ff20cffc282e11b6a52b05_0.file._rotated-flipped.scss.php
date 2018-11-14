<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:37
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/font-awesome/_rotated-flipped.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec7981298e70_11056929',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46116d1dd3bc2edd50ff20cffc282e11b6a52b05' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/font-awesome/_rotated-flipped.scss',
      1 => 1542223692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec7981298e70_11056929 (Smarty_Internal_Template $_smarty_tpl) {
?>// Rotated & Flipped Icons
// -------------------------

.#<?php echo $_smarty_tpl->tpl_vars['fa']->value-'css'-'prefix';?>
-rotate-90  { @include fa-icon-rotate(90deg, 1);  }
.#<?php echo $_smarty_tpl->tpl_vars['fa']->value-'css'-'prefix';?>
-rotate-180 { @include fa-icon-rotate(180deg, 2); }
.#<?php echo $_smarty_tpl->tpl_vars['fa']->value-'css'-'prefix';?>
-rotate-270 { @include fa-icon-rotate(270deg, 3); }

.#<?php echo $_smarty_tpl->tpl_vars['fa']->value-'css'-'prefix';?>
-flip-horizontal { @include fa-icon-flip(-1, 1, 0); }
.#<?php echo $_smarty_tpl->tpl_vars['fa']->value-'css'-'prefix';?>
-flip-vertical   { @include fa-icon-flip(1, -1, 2); }

// Hook for IE8-9
// -------------------------

:root .#<?php echo $_smarty_tpl->tpl_vars['fa']->value-'css'-'prefix';?>
-rotate-90,
:root .#<?php echo $_smarty_tpl->tpl_vars['fa']->value-'css'-'prefix';?>
-rotate-180,
:root .#<?php echo $_smarty_tpl->tpl_vars['fa']->value-'css'-'prefix';?>
-rotate-270,
:root .#<?php echo $_smarty_tpl->tpl_vars['fa']->value-'css'-'prefix';?>
-flip-horizontal,
:root .#<?php echo $_smarty_tpl->tpl_vars['fa']->value-'css'-'prefix';?>
-flip-vertical {
  filter: none;
}
<?php }
}
