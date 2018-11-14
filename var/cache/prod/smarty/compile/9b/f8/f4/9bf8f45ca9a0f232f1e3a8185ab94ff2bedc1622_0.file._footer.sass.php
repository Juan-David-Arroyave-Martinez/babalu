<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:36
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/partials/_footer.sass' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec7980f1af24_96425565',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9bf8f45ca9a0f232f1e3a8185ab94ff2bedc1622' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/partials/_footer.sass',
      1 => 1542223692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec7980f1af24_96425565 (Smarty_Internal_Template $_smarty_tpl) {
?>#footer
	display: block
	width: 100%
	height: 50px
	position: fixed
	bottom: 0
	z-index: 600
	background-color: rgba(black,0.8)
	color: #aaa
	line-height: 50px
	@include animate(fadeInUp, 0.3s)
	a
		color: #ccc
	&.hide
		display: none!important
	#go-top
		display: block
		height: 30px
		width: 30px
		position: fixed
		right: 10px
		bottom: 10px
		z-index: 9003
		padding: 0px 6px
		margin: -2px 0px 0px
		text-align: center
		line-height: 30px
		text-decoration: none
		color: #fff
		cursor: pointer
		font-size: 16px
		background-color: $main-color
		@include right(10px)
		&:hover
			background-color: $brand-primary
	a.footer_link
		color: $brand-primary
		&:hover
			color: white
			text-decoration: none
		i
			font-size: $icon-size-base
			color: white
	.footer-contact
		padding: 7px 0 0 0
		line-height: 35px
		white-space: nowrap
		overflow: hidden
		text-overflow: ellipsis
		@include margin(0,0,6px,6px)
		strong
			font-weight: 400
			color: white

a.link-social
	i
		font-size: 14px
		width: 24px
		height: 24px
		display: inline-block
		line-height: 24px !important
		text-align: center
		@include margin(0, 4px, 0, 0)
		@include border-radius(30px)
	&:hover
		text-decoration: none

.link-youtube i
	color: white
	background-color: #FF0000
	&:hover
		color: #FF0000
		background-color: white
.link-twitter i
	color: white
	background-color: #7CCEEF
	&:hover
		color: #7CCEEF
		background-color: white
.link-facebook i
	color: white
	background-color: #557DBB
	&:hover
		color: #557DBB
		background-color: white
.link-github i
	color: black
	background-color: white
	&:hover
		color: white
		background-color: black

.status-page-dot
	&.operational
		color: #2ecc71 !important
	&.degraded_performance
		color: #f1c40f !important
	&.partial_outage
		color: #e67e22 !important
	&.major_outage
		color: #e74c3c !important
<?php }
}
