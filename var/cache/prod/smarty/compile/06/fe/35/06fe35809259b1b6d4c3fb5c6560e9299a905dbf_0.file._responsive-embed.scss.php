<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:37
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/bootstrap-sass/_responsive-embed.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec7981f26853_50027885',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06fe35809259b1b6d4c3fb5c6560e9299a905dbf' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/bootstrap-sass/_responsive-embed.scss',
      1 => 1542223692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec7981f26853_50027885 (Smarty_Internal_Template $_smarty_tpl) {
?>// Embeds responsive
//
// Credit: Nicolas Gallagher and SUIT CSS.

.embed-responsive {
  position: relative;
  display: block;
  height: 0;
  padding: 0;
  overflow: hidden;

  .embed-responsive-item,
  iframe,
  embed,
  object {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    height: 100%;
    width: 100%;
    border: 0;
  }

  // Modifier class for 16:9 aspect ratio
  &.embed-responsive-16by9 {
    padding-bottom: 56.25%;
  }

  // Modifier class for 4:3 aspect ratio
  &.embed-responsive-4by3 {
    padding-bottom: 75%;
  }
}
<?php }
}
