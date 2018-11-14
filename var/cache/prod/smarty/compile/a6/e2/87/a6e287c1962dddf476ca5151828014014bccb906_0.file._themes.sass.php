<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:36
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/controllers/_themes.sass' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec7980b74ee9_67717527',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6e287c1962dddf476ca5151828014014bccb906' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/controllers/_themes.sass',
      1 => 1542223692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec7980b74ee9_67717527 (Smarty_Internal_Template $_smarty_tpl) {
?>.theme-container
	width: 100%
	height: 300px
	overflow: hidden
	border: solid 1px #ccc
	position: relative
	background-color: rgba(#4D576E,.3)
	@include border-radius(3px)
	.theme-title
		text-align: center
		height: 40px
		line-height: 40px
		font-size: 16px
		background-color: #4D576E
		color: white
		margin: 0 0 10px 0
		padding: 0
		border-bottom: solid 1px white

	.thumbnail-wrapper
		.action-wrapper
			display: none
			position: absolute
			top: 40px
			left: 0
			.action-overlay
				width: 100%
				height: 260px
				@include background-image(linear-gradient(rgba(#4D576E,.5),#4D576E))
			.action-buttons
				position: absolute
				width: 100%
				top: 130px
				text-align: center

.addons-see-all-themes
	padding-top: 21px
	a
		margin-left: 10px

.addons-style-search-bar
	padding-top: 0px
<?php }
}
