<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:37
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/font-awesome/_spinning.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec7981d0ad09_73613953',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5d5059d1ad5e50f187e9b02f0a9ddf4b50f1a26' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/font-awesome/_spinning.scss',
      1 => 1542223692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec7981d0ad09_73613953 (Smarty_Internal_Template $_smarty_tpl) {
?>// Spinning Icons
// --------------------------

.#<?php echo $_smarty_tpl->tpl_vars['fa']->value-'css'-'prefix';?>
-spin {
  -webkit-animation: spin 2s infinite linear;
  -moz-animation: spin 2s infinite linear;
  -o-animation: spin 2s infinite linear;
  animation: spin 2s infinite linear;
}

@-moz-keyframes spin {
  0% { -moz-transform: rotate(0deg); }
  100% { -moz-transform: rotate(359deg); }
}
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(359deg); }
}
@-o-keyframes spin {
  0% { -o-transform: rotate(0deg); }
  100% { -o-transform: rotate(359deg); }
}
@keyframes spin {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(359deg);
    transform: rotate(359deg);
  }
}
<?php }
}
