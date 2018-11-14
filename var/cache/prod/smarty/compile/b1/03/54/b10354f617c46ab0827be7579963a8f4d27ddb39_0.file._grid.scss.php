<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:38
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/bootstrap-sass/_grid.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec798206d092_06635903',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b10354f617c46ab0827be7579963a8f4d27ddb39' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/bootstrap-sass/_grid.scss',
      1 => 1542223692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec798206d092_06635903 (Smarty_Internal_Template $_smarty_tpl) {
?>//
// Grid system
// --------------------------------------------------


// Container widths
//
// Set the container width, and override it for fixed navbars in media queries.

.container {
  @include container-fixed();

  @media (min-width: $screen-sm-min) {
    width: $container-sm;
  }
  @media (min-width: $screen-md-min) {
    width: $container-md;
  }
  @media (min-width: $screen-lg-min) {
    width: $container-lg;
  }
}


// Fluid container
//
// Utilizes the mixin meant for fixed width containers, but without any defined
// width for fluid, full width layouts.

.container-fluid {
  @include container-fixed();
}


// Row
//
// Rows contain and clear the floats of your columns.

.row {
  @include make-row();
}


// Columns
//
// Common styles for small and large grid columns

@include make-grid-columns();


// Extra small grid
//
// Columns, offsets, pushes, and pulls for extra small devices like
// smartphones.

@include make-grid(xs);


// Small grid
//
// Columns, offsets, pushes, and pulls for the small device range, from phones
// to tablets.

@media (min-width: $screen-sm-min) {
  @include make-grid(sm);
}


// Medium grid
//
// Columns, offsets, pushes, and pulls for the desktop device range.

@media (min-width: $screen-md-min) {
  @include make-grid(md);
}


// Large grid
//
// Columns, offsets, pushes, and pulls for the large desktop device range.

@media (min-width: $screen-lg-min) {
  @include make-grid(lg);
}
<?php }
}
