<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:38
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/bootstrap-sass/_code.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec7982055294_22069323',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a3e31330f1b1926069dd1a4bbff06052843a42f' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/bootstrap-sass/_code.scss',
      1 => 1542223692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec7982055294_22069323 (Smarty_Internal_Template $_smarty_tpl) {
?>//
// Code (inline and block)
// --------------------------------------------------


// Inline and block code styles
code,
kbd,
pre,
samp {
  font-family: $font-family-monospace;
}

// Inline code
code {
  padding: 2px 4px;
  font-size: 90%;
  color: $code-color;
  background-color: $code-bg;
  border-radius: $border-radius-base;
}

// User input typically entered via keyboard
kbd {
  padding: 2px 4px;
  font-size: 90%;
  color: $kbd-color;
  background-color: $kbd-bg;
  border-radius: $border-radius-small;
  box-shadow: inset 0 -1px 0 rgba(0,0,0,.25);
}

// Blocks of code
pre {
  display: block;
  padding: (($line-height-computed - 1) / 2);
  margin: 0 0 ($line-height-computed / 2);
  font-size: ($font-size-base - 1); // 14px to 13px
  line-height: $line-height-base;
  word-break: break-all;
  word-wrap: break-word;
  color: $pre-color;
  background-color: $pre-bg;
  border: 1px solid $pre-border-color;
  border-radius: $border-radius-base;

  // Account for some code outputs that place code tags in pre tags
  code {
    padding: 0;
    font-size: inherit;
    color: inherit;
    white-space: pre-wrap;
    background-color: transparent;
    border-radius: 0;
  }
}

// Enable scrollable blocks of code
.pre-scrollable {
  max-height: $pre-scrollable-max-height;
  overflow-y: scroll;
}
<?php }
}
