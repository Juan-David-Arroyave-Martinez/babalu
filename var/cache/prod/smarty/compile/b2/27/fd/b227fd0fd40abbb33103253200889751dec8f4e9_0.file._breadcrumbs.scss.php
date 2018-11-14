<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:38
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/bootstrap-sass/_breadcrumbs.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec79823d4338_96024123',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b227fd0fd40abbb33103253200889751dec8f4e9' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/bootstrap-sass/_breadcrumbs.scss',
      1 => 1542223692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec79823d4338_96024123 (Smarty_Internal_Template $_smarty_tpl) {
?>//
// Breadcrumbs
// --------------------------------------------------


.breadcrumb {
  padding: $breadcrumb-padding-vertical $breadcrumb-padding-horizontal;
  margin-bottom: $line-height-computed;
  list-style: none;
  background-color: $breadcrumb-bg;
  border-radius: $border-radius-base;

  > li {
    display: inline-block;

    + li:before {
      content: "#<?php echo $_smarty_tpl->tpl_vars['breadcrumb']->value-'separator';?>
\00a0"; // Unicode space added since inline-block means non-collapsing white-space
      padding: 0 5px;
      color: $breadcrumb-color;
    }
  }

  > .active {
    color: $breadcrumb-active-color;
  }
}
<?php }
}
