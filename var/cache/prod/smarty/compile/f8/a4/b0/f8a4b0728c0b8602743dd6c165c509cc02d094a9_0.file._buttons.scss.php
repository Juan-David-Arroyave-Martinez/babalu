<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:38
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/bootstrap-sass/_buttons.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec7982286854_86374027',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8a4b0728c0b8602743dd6c165c509cc02d094a9' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/bootstrap-sass/_buttons.scss',
      1 => 1542223692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec7982286854_86374027 (Smarty_Internal_Template $_smarty_tpl) {
?>//
// Buttons
// --------------------------------------------------


// Base styles
// --------------------------------------------------

.btn {
  display: inline-block;
  margin-bottom: 0; // For input.btn
  font-weight: $btn-font-weight;
  text-align: center;
  vertical-align: middle;
  cursor: pointer;
  background-image: none; // Reset unusual Firefox-on-Android default style; see https://github.com/necolas/normalize.css/issues/214
  border: 1px solid transparent;
  white-space: nowrap;
  @include button-size($padding-base-vertical, $padding-base-horizontal, $font-size-base, $line-height-base, $border-radius-base);
  @include user-select(none);

  &,
  &:active,
  &.active {
    &:focus {
      @include tab-focus();
    }
  }

  &:hover,
  &:focus {
    color: $btn-default-color;
    text-decoration: none;
  }

  &:active,
  &.active {
    outline: 0;
    background-image: none;
    @include box-shadow(inset 0 3px 5px rgba(0,0,0,.125));
  }

  &.disabled,
  &[disabled],
  fieldset[disabled] & {
    cursor: not-allowed;
    pointer-events: none; // Future-proof disabling of clicks
    @include opacity(.65);
    @include box-shadow(none);
  }
}


// Alternate buttons
// --------------------------------------------------

.btn-default {
  @include button-variant($btn-default-color, $btn-default-bg, $btn-default-border);
}
.btn-primary {
  @include button-variant($btn-primary-color, $btn-primary-bg, $btn-primary-border);
}
// Success appears as green
.btn-success {
  @include button-variant($btn-success-color, $btn-success-bg, $btn-success-border);
}
// Info appears as blue-green
.btn-info {
  @include button-variant($btn-info-color, $btn-info-bg, $btn-info-border);
}
// Warning appears as orange
.btn-warning {
  @include button-variant($btn-warning-color, $btn-warning-bg, $btn-warning-border);
}
// Danger and error appear as red
.btn-danger {
  @include button-variant($btn-danger-color, $btn-danger-bg, $btn-danger-border);
}


// Link buttons
// -------------------------

// Make a button look and behave like a link
.btn-link {
  color: $link-color;
  font-weight: normal;
  cursor: pointer;
  border-radius: 0;

  &,
  &:active,
  &[disabled],
  fieldset[disabled] & {
    background-color: transparent;
    @include box-shadow(none);
  }
  &,
  &:hover,
  &:focus,
  &:active {
    border-color: transparent;
  }
  &:hover,
  &:focus {
    color: $link-hover-color;
    text-decoration: underline;
    background-color: transparent;
  }
  &[disabled],
  fieldset[disabled] & {
    &:hover,
    &:focus {
      color: $btn-link-disabled-color;
      text-decoration: none;
    }
  }
}


// Button Sizes
// --------------------------------------------------

.btn-lg {
  // line-height: ensure even-numbered height of button next to large input
  @include button-size($padding-large-vertical, $padding-large-horizontal, $font-size-large, $line-height-large, $border-radius-small);
}
.btn-sm {
  // line-height: ensure proper height of button next to small input
  @include button-size($padding-small-vertical, $padding-small-horizontal, $font-size-small, $line-height-small, $border-radius-small);
}
.btn-xs {
  @include button-size($padding-xs-vertical, $padding-xs-horizontal, $font-size-small, $line-height-small, $border-radius-small);
}


// Block button
// --------------------------------------------------

.btn-block {
  display: block;
  width: 100%;
  padding-left: 0;
  padding-right: 0;
}

// Vertically space out multiple block buttons
.btn-block + .btn-block {
  margin-top: 5px;
}

// Specificity overrides
input[type="submit"],
input[type="reset"],
input[type="button"] {
  &.btn-block {
    width: 100%;
  }
}
<?php }
}
