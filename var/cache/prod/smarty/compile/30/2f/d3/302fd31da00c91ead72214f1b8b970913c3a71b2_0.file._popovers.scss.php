<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:38
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/bootstrap-sass/_popovers.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec79822d02e5_02788873',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '302fd31da00c91ead72214f1b8b970913c3a71b2' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/bootstrap-sass/_popovers.scss',
      1 => 1542223692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec79822d02e5_02788873 (Smarty_Internal_Template $_smarty_tpl) {
?>//
// Popovers
// --------------------------------------------------


.popover {
  position: absolute;
  top: 0;
  left: 0;
  z-index: $zindex-popover;
  display: none;
  max-width: $popover-max-width;
  padding: 1px;
  text-align: left; // Reset given new insertion method
  background-color: $popover-bg;
  background-clip: padding-box;
  border: 1px solid $popover-fallback-border-color;
  border: 1px solid $popover-border-color;
  border-radius: $border-radius-large;
  @include box-shadow(0 5px 10px rgba(0,0,0,.2));

  // Overrides for proper insertion
  white-space: normal;

  // Offset the popover to account for the popover arrow
  &.top     { margin-top: -$popover-arrow-width; }
  &.right   { margin-left: $popover-arrow-width; }
  &.bottom  { margin-top: $popover-arrow-width; }
  &.left    { margin-left: -$popover-arrow-width; }
}

.popover-title {
  margin: 0; // reset heading margin
  padding: 8px 14px;
  font-size: $font-size-base;
  font-weight: normal;
  line-height: 18px;
  background-color: $popover-title-bg;
  border-bottom: 1px solid darken($popover-title-bg, 5%);
  border-radius: ($border-radius-large - 1) ($border-radius-large - 1) 0 0;
}

.popover-content {
  padding: 9px 14px;
}

// Arrows
//
// .arrow is outer, .arrow:after is inner

.popover > .arrow {
  &,
  &:after {
    position: absolute;
    display: block;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid;
  }
}
.popover > .arrow {
  border-width: $popover-arrow-outer-width;
}
.popover > .arrow:after {
  border-width: $popover-arrow-width;
  content: "";
}

.popover {
  &.top > .arrow {
    left: 50%;
    margin-left: -$popover-arrow-outer-width;
    border-bottom-width: 0;
    border-top-color: $popover-arrow-outer-fallback-color; // IE8 fallback
    border-top-color: $popover-arrow-outer-color;
    bottom: -$popover-arrow-outer-width;
    &:after {
      content: " ";
      bottom: 1px;
      margin-left: -$popover-arrow-width;
      border-bottom-width: 0;
      border-top-color: $popover-arrow-color;
    }
  }
  &.right > .arrow {
    top: 50%;
    left: -$popover-arrow-outer-width;
    margin-top: -$popover-arrow-outer-width;
    border-left-width: 0;
    border-right-color: $popover-arrow-outer-fallback-color; // IE8 fallback
    border-right-color: $popover-arrow-outer-color;
    &:after {
      content: " ";
      left: 1px;
      bottom: -$popover-arrow-width;
      border-left-width: 0;
      border-right-color: $popover-arrow-color;
    }
  }
  &.bottom > .arrow {
    left: 50%;
    margin-left: -$popover-arrow-outer-width;
    border-top-width: 0;
    border-bottom-color: $popover-arrow-outer-fallback-color; // IE8 fallback
    border-bottom-color: $popover-arrow-outer-color;
    top: -$popover-arrow-outer-width;
    &:after {
      content: " ";
      top: 1px;
      margin-left: -$popover-arrow-width;
      border-top-width: 0;
      border-bottom-color: $popover-arrow-color;
    }
  }

  &.left > .arrow {
    top: 50%;
    right: -$popover-arrow-outer-width;
    margin-top: -$popover-arrow-outer-width;
    border-right-width: 0;
    border-left-color: $popover-arrow-outer-fallback-color; // IE8 fallback
    border-left-color: $popover-arrow-outer-color;
    &:after {
      content: " ";
      right: 1px;
      border-right-width: 0;
      border-left-color: $popover-arrow-color;
      bottom: -$popover-arrow-width;
    }
  }

}
<?php }
}
