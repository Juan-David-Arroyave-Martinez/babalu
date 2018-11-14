<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:37
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/bootstrap-rtl-sass/_pagination-rtl.sass' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec79810b7f54_46268518',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27bd3a371cb62e4c4d9485cc0307d00efefd2d76' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/bootstrap-rtl-sass/_pagination-rtl.sass',
      1 => 1542223692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec79810b7f54_46268518 (Smarty_Internal_Template $_smarty_tpl) {
?>//
// RTL Pagination (multiple pages)
// --------------------------------------------------
.pagination
	padding-right: 0
	> li
		> a,
		> span
			float: right // Collapse white-space
			margin-right: -1px
			margin-left: 0px
		&:first-child
			> a,
			> span
				margin-left: 0
				@include border-right-radius($border-radius-base)
				@include border-left-radius(0)
		&:last-child
			> a,
			> span
				margin-right: -1px
				@include border-left-radius($border-radius-base)
				@include border-right-radius(0)<?php }
}
