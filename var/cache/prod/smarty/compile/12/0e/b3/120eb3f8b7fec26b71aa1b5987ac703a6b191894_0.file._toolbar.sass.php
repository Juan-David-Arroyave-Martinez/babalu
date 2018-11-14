<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:36
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/partials/_toolbar.sass' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec7980d28b81_16039095',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '120eb3f8b7fec26b71aa1b5987ac703a6b191894' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/partials/_toolbar.sass',
      1 => 1542223692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec7980d28b81_16039095 (Smarty_Internal_Template $_smarty_tpl) {
?>.page-head
	width: 100%
	height: 100px
	margin: 0
	position: fixed
	top: $size-header-height
	z-index: 499
	background-color: white
	border-bottom: #DFDFDF 1px solid
	color: #363A41
	padding: 0 0 0 210px

	.mobile &
		top: $size-header-height + ($header-mobile-padding-y * 2)

	@media (max-width: breakpoint-max('md'))
		padding: 0

	transition: padding-left .5s ease-out
	left: 0

	&.with-tabs
		height: 140px

	> .wrapper
	  padding-left: 15px

	.page-title
		float: left
		clear: left
		position: relative
		margin: 0 0 .9375rem
		font: 20pt $font-family-sans-serif
		color: #363A41
		white-space: nowrap
		padding: .3125rem 0
		line-height: 1.2

		a
			border-bottom: dotted 1px white
			&:hover
				color: black
				border-color: black
	a
		color: white
		text-decoration: none
	h4.page-subtitle
		@include float(left)
		position: absolute
		margin-top: 60px
		@include left($widthSidebarNav+20px)
		font-family: $url-font-content-name
		@media (max-width: $screen-tablet)
			@include left(70px)
	.toolbarBox
		position: absolute
		background-color: transparent!important
		@include right(0)
		#toolbar-nav
			border: none
		.btn-toolbar
			margin: 0
			@include padding(3px, 0, 0, 0)
			.toolbar_btn
				position: relative
				padding: 20px 5px !important
				font-size: 12px
				line-height: 8px
				color: $main-color
				text-align: center
				text-shadow: none
				white-space: nowrap
				overflow: hidden
				text-overflow: ellipsis
				@include margin(0, 3px, 2px, 0)
				@media (max-width: $screen-desktop)
					width: 46px
					font-size: 11px
				i
					color: $toolbar-buttons-color
					&:hover
						color: $toolbar-buttons-hover-color
				div
					padding-top: 10px
			.dropdown-toolbar
				display: none
				@include float(right)
				@include border-radius(3px)
				@media (max-width: $screen-sm)
					display: block
	ul.page-breadcrumb
		list-style: none
		margin: 0
		padding: .3125rem 0
		line-height: 1.5
		color: black
		font-size: 12px
		color: rgba(black,0.5)
		background: transparent !important
		border: none !important
		white-space: nowrap
		float: left
		@include border-radius(0)
		li
			i
				font-size: 10px
			&.breadcrumb-container i, &.breadcrumb-current i
				position: absolute
				top: 2px
				font-size: 42px
				color: darken($secondary-color,15%)
				@include padding-right(5px)
				@include border-right(solid 1px darken($secondary-color,15%))
				@include left(-60px)
			&:before
				color: darken($secondary-color,15%)
			a
				color: #363A41
				&:hover
					color: #363A41
	.page-head-tabs
		clear: left
		background-color: #fff

		ul
			border-top: 1px solid #dfdfdf
			border-bottom: 1px solid #dfdfdf
			font-weight: 400

		li
			display: inline-block

			a
				padding: .9375rem 1.25rem
				vertical-align: middle
				color: #6c868e
				box-sizing: border-box
				font-size: .875rem
				line-height: 1.5

				&.current
					border-bottom: 3px solid #3ed2f0
					background-color: #f4f9fb
					color: #363a41

.page-sidebar-closed
	.page-head
		padding-left: 4.0625rem

.page-header-toolbar-back
	border: none!important
	display: inline-block
<?php }
}