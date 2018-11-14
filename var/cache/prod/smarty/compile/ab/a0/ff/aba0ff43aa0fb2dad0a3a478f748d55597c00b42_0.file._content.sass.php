<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:36
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/partials/_content.sass' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec7980e68066_38743620',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aba0ff43aa0fb2dad0a3a478f748d55597c00b42' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/partials/_content.sass',
      1 => 1542223692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec7980e68066_38743620 (Smarty_Internal_Template $_smarty_tpl) {
?>html, body
	min-height: 100%
	height: 100%

body
	font: 400 #<?php echo $_smarty_tpl->tpl_vars['font']->value-'size'-'base';?>
/#<?php echo $_smarty_tpl->tpl_vars['line']->value-'height'-'base';?>
 $font-family-base
	color: $text-color
	background-color: $body-bg
	-webkit-tap-highlight-color: rgba(0,0,0,0)
	&.mobile
		#content.bootstrap
			@media (max-width: $screen-lg)
				padding-left: $paddingLeftMobile

			.page-head
				h2.page-title
					padding-left: $paddingLeftMobile
				h4.page-subtitle
					@include left($paddingLeftMobile)
				ul.page-breadcrumb
					@include left($paddingLeftMobile)

#main
	z-index: 10
	width: 100%
	padding: 36px 0 60px
	@include margin(0, 0, -50px, 0)
	@include float(left)

#content.bootstrap
	padding: 120px 10px 0 225px
	&.with-tabs
		padding-top: 160px
	@include transition-property(margin)
	@include transition-duration(0.4s)
	@include transition-timing-function(ease-out)
	.panel
		position: relative
		padding: 20px
		margin-bottom: 20px
		border: solid 1px darken($bg-content-color,10%)
		background-color: white
		@include border-radius(5px)
		&.panel-highlighted
			border-color: $brand-primary!important
			@include box-shadow(rgba($brand-primary,.15) 0 0 0 6px inset !important)
		.panel-heading
			font-family: $headings-font-family
			font-weight: $headings-font-weight
			font-size: 14px
			text-overflow: ellipsis
			white-space: nowrap
			color: #555
			height: 32px
			.btn
				padding: 4px 8px !important
			a.btn
				font-family: $font-family-sans-serif
				text-transform: none
				position: relative
				top: 2px
			i
				font-size: $icon-size-base
		.panel
			border: solid 1px #DDDDDD
		.panel.tab-content
			@include border-radius(0 0 3px 3px)
	h3:not(.modal-title), .panel-heading
		border: none
		font-size: 1.2em
		line-height: 2.2em
		height: 2.2em
		text-transform: uppercase
		border-bottom: solid 1px #EEEEEE
		@include padding(0, 0, 0, 5px)
		@include margin(-20px, -16px, 15px, -16px)
		i, a
			color: contrasted($bg-panel-heading-color)
		.badge
			color: $gray
			font-size: 1.1em
			line-height: 1.2em
			padding: 0 10px
			font-weight: 700
			border: solid 1px lighten($gray-light,25%)
			background-color: white
			@include margin-left(0.4em)
			@include border-radius(20px)
			a
				display: block
				font-size: 0.8em
		.panel-heading-action
			line-height: 0
			position: absolute
			top: 2px
			@include right(0)
			.btn
				padding: 4px 8px !important
			.btn-group
				position: absolute
				white-space: nowrap
				top: -2px
				@include right(2px)
				a.btn
					float: none
			> a.btn
				position: absolute
				top: 0
				@include right(2px)
			a.list-toolbar-btn
				height: 30px
				width: 30px
				color: #CCC
				@include float(left)
				@include border-left(solid 1px #eee)
				&:hover
					text-decoration: none
					color: $brand-primary
				i
					text-align: center
					font-size: 18px
					line-height: 30px
	.panel-danger .panel-heading
		background-color: $badge-notif-color!important
	form .alert
		clear: both
	.mobile &
		padding: 140px 5px 0
		@include margin-left(0!important)
	.help-block
		font-style: italic
	.nav.nav-tabs li.active a
		z-index: 99
	.breadcrumb
		background-color: white
		border: solid 1px darken($bg-content-color,10%)
	.panel.panel-sm
		padding: 8px!important
		.panel-heading
			font-size: 13px
			margin: -8px -8px 10px
			@include ltr
				padding-left: 8px
			@include rtl
				padding-right: 8px
		.form-group
			margin-bottom: 8px

//data-focus
.data-focus
	&.data-focus-primary
		background-color: $brand-primary
		color: white
		@include border-radius(10px)

//orders
#customer_part
	.customerCard
		&.selected-customer .panel
			color: $brand-success
			border: solid 2px $brand-success

//modal
body.display-modal
	#content, #main
		margin: 0
		padding: 0
		background: #F8F8F8

.bootstrap
	.modal
		.alert
			h3
				margin-top: 0
	.modal-footer
		.alert
			text-align: left

//todo: remove temp fix for bootstrap RC1 -> final
.bootstrap
	input[type="text"],input[type="search"],input[type="password"], textarea, select
		@extend .form-control

//panels
.bootstrap
	.panel
		.panel-footer
			height: 73px
			border-color: #eee
			background-color: #FCFDFE
			margin: 15px -20px -20px
			.btn.pull-right:not(:first-child)
				@include margin-right(5px)
			.btn
				line-height: 1em

#header
	.panel-footer
		margin: 15px 0 0!important
		height: 40px!important

//help containers
#main.helpOpen
	width: 70%
	@media (max-width: $screen-lg)
		width: 100%

#help-container
	position: relative
	margin: 0
	padding: 0
	float: right
	width: 30%
	margin-top: 155px
	margin-bottom: 50px
	background-color: white
	box-sizing: border-box
	overflow-x: hidden
	@media (max-width: $screen-lg)
		display: none

.page-topbar
	#help-container
		margin-top: 140px

.page-sidebar-closed
	&:not(.mobile)
		#content
			padding-left: $paddingLeftPageClosed

			.page-head
				padding-left: $paddingLeftPageClosed - .9375rem
<?php }
}
