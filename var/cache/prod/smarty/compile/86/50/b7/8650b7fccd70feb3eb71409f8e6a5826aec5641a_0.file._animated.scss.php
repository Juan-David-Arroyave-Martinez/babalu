<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:37
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/font-awesome/_animated.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec7981ca34d0_45794332',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8650b7fccd70feb3eb71409f8e6a5826aec5641a' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/font-awesome/_animated.scss',
      1 => 1542223692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec7981ca34d0_45794332 (Smarty_Internal_Template $_smarty_tpl) {
?>// Spinning Icons
// --------------------------

.#<?php echo $_smarty_tpl->tpl_vars['fa']->value-'css'-'prefix';?>
-spin {
  -webkit-animation: fa-spin 2s infinite linear;
          animation: fa-spin 2s infinite linear;
}

.#<?php echo $_smarty_tpl->tpl_vars['fa']->value-'css'-'prefix';?>
-pulse {
  -webkit-animation: fa-spin 1s infinite steps(8);
          animation: fa-spin 1s infinite steps(8);
}

@-webkit-keyframes fa-spin {
  0% {
    -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(359deg);
            transform: rotate(359deg);
  }
}

@keyframes fa-spin {
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
