<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:37
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/font-awesome/_core.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec7981d1b2c8_13670780',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77e90cf3a46fd5cfe3f224c4e89e18bbcfe7f169' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/font-awesome/_core.scss',
      1 => 1542223692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec7981d1b2c8_13670780 (Smarty_Internal_Template $_smarty_tpl) {
?>// Base Class Definition
// -------------------------

.#<?php echo $_smarty_tpl->tpl_vars['fa']->value-'css'-'prefix';?>
 {
  display: inline-block;
  font: normal normal normal #<?php echo $_smarty_tpl->tpl_vars['fa']->value-'font'-'size'-'base';?>
/1 FontAwesome; // shortening font declaration
  font-size: inherit; // can't have font-size inherit on line above, so need to override
  text-rendering: auto; // optimizelegibility throws things off #1094
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  transform: translate(0, 0); // ensures no half-pixel rendering in firefox

}
<?php }
}
