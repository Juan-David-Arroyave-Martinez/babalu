<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:36
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/controllers/_login.sass' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec7980b624e9_78753767',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b2b86486252430e272d6686f6da47dbbbe33f98' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/controllers/_login.sass',
      1 => 1542223692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec7980b624e9_78753767 (Smarty_Internal_Template $_smarty_tpl) {
?>@mixin background-image-with-ms($image)
	@include background-image($image) // Compass default version, for everything but IE 10.
	background-image: -ms-#<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
 // Vendor prefixes for IE 10.

#login
	min-height: 100%
	padding-bottom: 45px

#shop-img
	z-index: 1
	position: absolute
	margin: 0 auto
	width: 69.5px
	left: 0
	right: 0

#login-header
	padding-top: 40px
	margin-bottom: 30px
	color: #6d6d6d
	h1, h4
		margin: 0
		padding: 0

#login-panel
	margin: 0 auto
	width: 500px

	.form-control
		height: inherit !important
		padding: 10px 8px !important

	@media (max-width: $screen-phone)
		width: 90%
	.panel
		@include border-radius(0)
		@include box-shadow(0 1px 3px rgba(0,0,0,0.30))
	.panel-footer
		height: inherit
		margin: 0 -20px -20px
	.flip-container
		height: 420px
		margin-top: 115px
		@include perspective(1000px)
		transform-style: preserve-3d
		//@include animate(fadeInDown, 0.3s)
		&.flip
			.flipper
				@include rotateY(180deg)
			.back
				@include backface-visibility(visible)
	.flipper
		position: relative
		transform-style: preserve-3d
		@include transition-duration(0.6s)
		@include transform-style
	.front, .back
		width: 100%
		padding: 40px
		position: absolute
		transition: 0.6s
		transform-style: preserve-3d
		top: 0
		@include backface-visibility(hidden)
		@include left(0)
	.front
		@include rotateY(0)
		z-index: 2
	.back
		display: none
		z-index: 1
		@include rotateY(180deg)

	#shop_name, #reset_name, #reset_confirm_name, #forgot_name, #forgot_confirm_name
		text-align: center
		font-family: $font-family-sans-serif
	#login_form
		padding-top: 15px

	#remind-me
		margin-top: 0

#login-footer
	margin-top: 20px
	a
		color: #A0AAB5
<?php }
}
