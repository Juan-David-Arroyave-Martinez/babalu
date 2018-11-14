<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:37
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/bootstrap-rtl-sass/_type-rtl.sass' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec79810a11b1_88612490',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2da443f5e01995276c12e3cb783c736e7bc09d7' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/bootstrap-rtl-sass/_type-rtl.sass',
      1 => 1542223692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec79810a11b1_88612490 (Smarty_Internal_Template $_smarty_tpl) {
?>// Blockquotes

blockquote
	border-right: 5px solid $blockquote-border-color
	border-left: 0

	// Float left with text-align: left
	&.pull-left
		p,
		small,
		.small
			text-align: left

// Horizontal description lists

@media (min-width: $grid-float-breakpoint)
	.dl-horizontal
		dt
			float: right
			width: ($component-offset-horizontal - 20)
			clear: right
			text-align: left
		dd
			margin-left: 0
			margin-right: $component-offset-horizontal<?php }
}
