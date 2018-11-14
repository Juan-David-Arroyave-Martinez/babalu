<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:38
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_border-radius.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec7982131da9_66836745',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba9d1c588450400ccb9e22b396b15a451ba99f57' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_border-radius.scss',
      1 => 1542223692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec7982131da9_66836745 (Smarty_Internal_Template $_smarty_tpl) {
?>// Single side border-radius

@mixin border-top-radius($radius) {
  border-top-right-radius: $radius;
   border-top-left-radius: $radius;
}
@mixin border-right-radius($radius) {
  border-bottom-right-radius: $radius;
     border-top-right-radius: $radius;
}
@mixin border-bottom-radius($radius) {
  border-bottom-right-radius: $radius;
   border-bottom-left-radius: $radius;
}
@mixin border-left-radius($radius) {
  border-bottom-left-radius: $radius;
     border-top-left-radius: $radius;
}
<?php }
}
