<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:37
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/font-awesome/_bordered-pulled.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec7981d70e09_87975111',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '313bd314bccc2574c621e6f480619abdd1f466d0' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/font-awesome/_bordered-pulled.scss',
      1 => 1542223692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec7981d70e09_87975111 (Smarty_Internal_Template $_smarty_tpl) {
?>// Bordered & Pulled
// -------------------------

.#<?php echo $_smarty_tpl->tpl_vars['fa']->value-'css'-'prefix';?>
-border {
  padding: .2em .25em .15em;
  border: solid .08em $fa-border-color;
  border-radius: .1em;
}

.pull-right { float: right; }
.pull-left { float: left; }

.#<?php echo $_smarty_tpl->tpl_vars['fa']->value-'css'-'prefix';?>
 {
  &.pull-left { margin-right: .3em; }
  &.pull-right { margin-left: .3em; }
}
<?php }
}
