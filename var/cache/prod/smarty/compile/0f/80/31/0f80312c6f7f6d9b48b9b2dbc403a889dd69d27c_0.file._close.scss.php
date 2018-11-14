<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:38
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/bootstrap-sass/_close.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec79823dfb61_47542249',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f80312c6f7f6d9b48b9b2dbc403a889dd69d27c' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/bootstrap-sass/_close.scss',
      1 => 1542223692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec79823dfb61_47542249 (Smarty_Internal_Template $_smarty_tpl) {
?>//
// Close icons
// --------------------------------------------------


.close {
  float: right;
  font-size: ($font-size-base * 1.5);
  font-weight: $close-font-weight;
  line-height: 1;
  color: $close-color;
  text-shadow: $close-text-shadow;
  @include opacity(.2);

  &:hover,
  &:focus {
    color: $close-color;
    text-decoration: none;
    cursor: pointer;
    @include opacity(.5);
  }

  // [converter] extracted button& to button.close
}

// Additional properties for button version
// iOS requires the button element instead of an anchor tag.
// If you want the anchor version, it requires `href="#"`.
button.close {
  padding: 0;
  cursor: pointer;
  background: transparent;
  border: 0;
  -webkit-appearance: none;
}
<?php }
}
