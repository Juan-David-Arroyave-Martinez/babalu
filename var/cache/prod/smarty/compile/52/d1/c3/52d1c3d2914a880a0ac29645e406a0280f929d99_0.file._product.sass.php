<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:36
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/partials/_product.sass' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec7980d4ff41_33731688',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52d1c3d2914a880a0ac29645e406a0280f929d99' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/partials/_product.sass',
      1 => 1542223692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec7980d4ff41_33731688 (Smarty_Internal_Template $_smarty_tpl) {
?>.media-product-pack
	width: 200px
	border: solid 2px #eee
	padding: 4px
	overflow: hidden
	position: relative
	margin-bottom: 10px
	@include margin-right(10px)
	@include border-radius(4px)
	@include float(left)
	.media-product-pack-img
		width: 100%
		padding-bottom: 5px
		border-bottom: 1px solid #ccc
		margin-bottom: 5px
	.media-product-pack-title
		width: 100%
		padding: 0 5px
		display: inline-block
		overflow: hidden
		text-overflow: ellipsis
		white-space: nowrap
	.media-product-pack-ref
		color: #aaa
		width: 100%
		padding: 0 5px
		display: inline-block
		overflow: hidden
		text-overflow: ellipsis
		white-space: nowrap

	.media-product-pack-action
		position: absolute
		top: 7px
		border: solid 1px #ccc
		text-align: center
		@include right(7px)
		@include border-radius(4px)

	.media-product-pack-quantity
		background-color: white
		position: absolute
		padding: 0 4px
		top: 7px
		height: 25px
		min-width: 35px
		line-height: 23px
		border: solid 1px #ccc
		text-align: center
		@include left(7px)
		@include border-radius(4px)
<?php }
}
