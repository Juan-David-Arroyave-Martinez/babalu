<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:38
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/bootstrap-sass/_progress-bars.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec79826971c0_80905957',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81f313401ff3d576a4c5019352307c4ea1bc6067' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/bootstrap-sass/_progress-bars.scss',
      1 => 1542223692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec79826971c0_80905957 (Smarty_Internal_Template $_smarty_tpl) {
?>//
// Progress bars
// --------------------------------------------------


// Bar animations
// -------------------------

@keyframes progress-bar-stripes {
  from  { background-position: 40px 0; }
  to    { background-position: 0 0; }
}



// Bar itself
// -------------------------

// Outer container
.progress {
  overflow: hidden;
  height: $line-height-computed;
  margin-bottom: $line-height-computed;
  background-color: $progress-bg;
  border-radius: $border-radius-base;
  @include box-shadow(inset 0 1px 2px rgba(0,0,0,.1));
}

// Bar of progress
.progress-bar {
  float: left;
  width: 0%;
  height: 100%;
  font-size: $font-size-small;
  line-height: $line-height-computed;
  color: $progress-bar-color;
  text-align: center;
  background-color: $progress-bar-bg;
  @include box-shadow(inset 0 -1px 0 rgba(0,0,0,.15));
  @include transition(width .6s ease);
}

// Striped bars
.progress-striped .progress-bar {
  @include gradient-striped();
  background-size: 40px 40px;
}

// Call animation for the active one
.progress.active .progress-bar {
  @include animation(progress-bar-stripes 2s linear infinite);
}

// Account for lower percentages
.progress-bar {
  &[aria-valuenow="1"],
  &[aria-valuenow="2"] {
    min-width: 30px;
  }

  &[aria-valuenow="0"] {
    color: $gray-light;
    min-width: 30px;
    background-color: transparent;
    background-image: none;
    box-shadow: none;
  }
}



// Variations
// -------------------------

.progress-bar-success {
  @include progress-bar-variant($progress-bar-success-bg);
}

.progress-bar-info {
  @include progress-bar-variant($progress-bar-info-bg);
}

.progress-bar-warning {
  @include progress-bar-variant($progress-bar-warning-bg);
}

.progress-bar-danger {
  @include progress-bar-variant($progress-bar-danger-bg);
}
<?php }
}
