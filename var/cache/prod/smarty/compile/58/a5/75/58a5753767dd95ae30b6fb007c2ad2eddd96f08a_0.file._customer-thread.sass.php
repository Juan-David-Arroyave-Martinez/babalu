<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:36
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/controllers/_customer-thread.sass' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec7980b05c14_67675582',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58a5753767dd95ae30b6fb007c2ad2eddd96f08a' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/controllers/_customer-thread.sass',
      1 => 1542223692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec7980b05c14_67675582 (Smarty_Internal_Template $_smarty_tpl) {
?>//Avatar

.employee_avatar_small
	@extend .avatar-sm
	vertical-align: middle
	img
		padding: 0
		border: none

.employee_avatar
	@extend .avatar-lg
	display: block!important
	margin: 10px auto!important
	text-align: center

.avatar-xs
	@include avatar(16px, 16px)
.avatar-sm
	@include avatar(32px, 32px)
.avatar-md
	@include avatar(48px, 32px)
.avatar-lg
	@include avatar(80px, 80px)
.avatar-xl
	@include avatar(128px, 128px)


#employee-thumbnail
	margin-bottom: 10px
	width: 104px
	height: 104px
	background-image: url(data:image/png;base64,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)
	background-size: contain
	position: relative
	border: solid 1px #ccc
	@include border-radius(4px)
	@include box-shadow(white 0 0 0 4px inset)
	&:before
		@extend .icon
		@extend .icon-spin
		@extend .icon-refresh
		position: absolute
		top: 10px
		display: block
		text-align: center
		font-size: 2em
		z-index: 10
		color: #ccc
		@include left(10px)
	a
		width: 100px
		height: 100px
		overflow: hidden
		display: block
		position: absolute
		top: 1px
		z-index: 100
		background-position: center
		background-size: contain
		border: none
		@include left(1px)
		@include box-shadow(white 0 0 0 3px inset)



.message-item-initial
	h2
		font-size: 1.5em
		@include margin(0, 0, 5px, 0)
	.message-item-initial-body
		@extend .panel
		position: relative
		margin-top: 10px
	.message-date
		color: #bbb
		margin-bottom: 10px

//Messages
.message-item
	@extend .media
	position: relative
	border-bottom: solid 1px #EEEEEE
	@include margin(0, 0, 0, 30px)
	padding: 10px 0
	&:last-child
		border: none
	.message-item-heading
		display: inline-block
	.message-body
		@include margin(0, 0, 0, 80px)
		.message-item-text
			@include padding(0, 0, 0, 10px)
			@include border-left(2px solid #ccc)
	.message-avatar
		position: absolute
		top: 10px
		@include left(10px)
	.message-date
		color: #bbb

//Arrows
.arrow:before, .arrow:after
	position: absolute
	display: inline-block
	border-color: transparent
	border-style: solid
	content: ""
.arrow-left:before
	top: 6px
	@include ltr
		border-right-color: #d1d4d7
		border-width: 7px 7px 7px 0
	@include rtl
		border-left-color: #d1d4d7
		border-width: 7px 0 7px 7px
	@include margin-left(-7px)
	@include left(0)
.arrow-left:after
	top: 7px
	@include ltr
		border-right-color: #fff
		border-width: 6px 6px 6px 0
	@include rtl
		border-left-color: #fff
		border-width: 6px 0 6px 6px
	@include left(0)
	@include margin-left(-6px)
.arrow-right:before
	top: 6px
	@include ltr
		border-left-color: #d1d4d7
		border-width: 7px 0 7px 7px
	@include rtl
		border-right-color: #d1d4d7
		border-width: 7px 7px 7px 0
	@include right(0px)
	@include margin-right(-7px)
.arrow-right:after
	top: 7px
	@include ltr
		border-left-color: #fff
		border-width: 6px 0 6px 6px
	@include rtl
		border-right-color: #fff
		border-width: 6px 6px 6px 0
	@include right(0px)
	@include margin-right(-6px)

//Timeline
$time-icon-size: 40px
.timeline
	display: table
	width: 100%
	border-spacing: 0
	table-layout: fixed
	position: relative
	border-collapse: collapse
	&:before
		content: ""
		width: 6px
		position: absolute
		top: 0
		bottom: 30px
		background-color: #ddd
		z-index: 0
		@include margin-left(-4px)
		@include left(50%)
	.timeline-item
		display: table-row
		.timeline-caption
			display: table-cell
			vertical-align: top
			width: 50%
			.timeline-panel
				@extend .panel
				display: inline-block
				position: relative
				@include text-align(left)
				@include margin-left($time-icon-size + 2px)
				@include box-shadow(0)
			h5
				margin: 0
				span
					display: block
					color: #999
					margin-bottom: 4px
					font-size: 12px
			p
				font-size: 12px
				margin-bottom: 0
				margin-top: 10px
		.timeline-date
			position: absolute
			width: 150px
			top: 10px
			@include text-align(right)
			@include left(-220px)
		.timeline-icon
			position: absolute
			width: $time-icon-size
			height: $time-icon-size
			line-height: $time-icon-size
			border-radius: $time-icon-size
			top: -2px
			text-align: center
			border: 2px solid #fff
			background-color: #666
			@include left(-($time-icon-size + $time-icon-size/2 + 2px))
			i
				font-size: ($time-icon-size/2)
				margin-top: 5px
				color: #fff
		&:before, &.alt:after
			content: ""
			display: block
			width: 50%
		&.alt
			@include text-align(right)
			&:before
				display: none
			.timeline-panel
				@include margin-right($time-icon-size)
				@include margin-left(0)
			.timeline-date
				@include right(-220px)
				@include text-align(left)
				@include left(auto)
			.timeline-icon
				@include left(auto)
				@include right(-($time-icon-size+$time-icon-size/2))
		&.active
			display: table-caption
			text-align: center
			&:before
				width: 1%
			.timeline-panel
				@include margin-left(0)
			.timeline-caption
				display: inline-block
				width: auto
			.timeline-date,
			.timeline-icon
				position: static
				margin-bottom: 10px
				display: inline-block
				width: auto
.command-danger
	background-color: $brand-danger!important
.command-success
	background-color: $brand-success!important
<?php }
}
