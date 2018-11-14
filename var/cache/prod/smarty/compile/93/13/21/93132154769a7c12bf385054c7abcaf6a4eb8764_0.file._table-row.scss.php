<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:38
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_table-row.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec79821efa21_00277202',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '93132154769a7c12bf385054c7abcaf6a4eb8764' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_table-row.scss',
      1 => 1542223692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec79821efa21_00277202 (Smarty_Internal_Template $_smarty_tpl) {
?>// Tables

@mixin table-row-variant($state, $background) {
  // Exact selectors below required to override `.table-striped` and prevent
  // inheritance to nested tables.
  .table > thead > tr,
  .table > tbody > tr,
  .table > tfoot > tr {
    > td.#<?php echo $_smarty_tpl->tpl_vars['state']->value;?>
,
    > th.#<?php echo $_smarty_tpl->tpl_vars['state']->value;?>
,
    &.#<?php echo $_smarty_tpl->tpl_vars['state']->value;?>
 > td,
    &.#<?php echo $_smarty_tpl->tpl_vars['state']->value;?>
 > th {
      background-color: $background;
    }
  }

  // Hover states for `.table-hover`
  // Note: this is not available for cells or rows within `thead` or `tfoot`.
  .table-hover > tbody > tr {
    > td.#<?php echo $_smarty_tpl->tpl_vars['state']->value;?>
:hover,
    > th.#<?php echo $_smarty_tpl->tpl_vars['state']->value;?>
:hover,
    &.#<?php echo $_smarty_tpl->tpl_vars['state']->value;?>
:hover > td,
    &:hover > .#<?php echo $_smarty_tpl->tpl_vars['state']->value;?>
,
    &.#<?php echo $_smarty_tpl->tpl_vars['state']->value;?>
:hover > th {
      background-color: darken($background, 5%);
    }
  }
}
<?php }
}
