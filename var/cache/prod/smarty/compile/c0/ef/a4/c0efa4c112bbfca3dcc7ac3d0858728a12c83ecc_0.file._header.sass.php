<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:36
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/partials/_header.sass' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec7980d9ef88_99445216',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0efa4c112bbfca3dcc7ac3d0858728a12c83ecc' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/partials/_header.sass',
      1 => 1542223692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec7980d9ef88_99445216 (Smarty_Internal_Template $_smarty_tpl) {
?>$header-text-color: #4e6167
$search-border-color: #bbcdd2

#header
	z-index: 20
#header_infos
	position: fixed
	z-index: 503
	background: #fff
	height: $size-header-height
	width: 100%
	display: flex
	align-items: stretch
	color: $header-text-color
	font-size: 13px
	box-sizing: content-box

	.mobile &
		padding: $header-mobile-padding-y 0

	.material-icons
		vertical-align: middle
		position: relative

	#header_logo
		height: 100%
		background: url('#<?php echo $_smarty_tpl->tpl_vars['img']->value-'path';?>
/prestashop-avatar-header_shopname.png') no-repeat center left
		width: 13.13rem
		.mobile &
			margin-left: -15px
			min-width: 172px
			width: 0
			flex-grow: 1

	#shop_version
		font-size: 10px
		position: absolute
		left: 11.25rem
		top: .9375rem
		color: #4a4a4a
        // hide if viewport <= tablet portrait size
		@media (max-width: breakpoint-max('md'))
			display: none

	> .component
		margin:
			left: 0.5rem
			right: 0.5rem

		// hide on very small screens
		&.hide-mobile-sm
			@media (max-width: breakpoint-max('sm'))
				display: none

	// disable bootstrap styling
	.btn-link
		color: initial
		&:hover
			color: initial
			text-decoration: none
		&:active,
		&:focus
			text-decoration: none
			box-shadow: none
			outline: none

	#quick_select
		height: $size-header-height
		font-size: 13px
		color: $header-text-color
		line-height: 1.5
		padding: 7px 10px 5px
		> .material-icons
			font-size: 20px
			margin-left: -5px

	// Shop state / Maintenance / Debug / View my shop
	.shop-state,
	#header_shopname
		display: inline-block
		padding: $navbar-padding-vertical 5px
		line-height: $line-height-computed
		height: $navbar-height

		> .material-icons
			margin-right: $navbar-padding-horizontal

	.shop-state
		padding-top: 11px
		color: $header-text-color
		text-decoration: none
		white-space: nowrap

		&:hover,
		&:focus
			color: $brand-info !important
			text-decoration: none !important

		.material-icons
			color: #6c868e
			font-size: 20px
			margin-top: -4px

		// hide label if width <= tablet landscape size
		@media (max-width: breakpoint-max('lg'))
			span
				display: none

		@media (max-width: $screen-sm-max)
			padding:
				left: 10px !important
				right: 10px !important
			margin-right: 0
			.material-icons
				margin-right: 0

	ul.header-list
		color: $header-text-color
		margin-bottom: 0
		padding: 0
		display: flex
		align-items: stretch

		#header_shopname
			padding-top: 11px
			color: $header-text-color !important
			&:hover, &:focus
				color: $brand-info !important

		li
			list-style: none
			display: block

			> a
				&.notifs
					display:        flex
					height:         $size-header-height
					min-width:      $size-header-height
					line-height:    $size-header-height
					box-sizing:     border-box
					padding:        0 5px !important
					vertical-align: middle
					align-items: 	center
					&:hover, &:focus
						color: $brand-info
						text-decoration: none

	#maintenance-mode
		a
			color: #6c868e
			&:hover, &:focus
				color: $brand-info
				text-decoration: none

	// view my shop
	#header_shopname
		font-size: 13px !important
		height: inherit !important
		text-decoration: none
		padding-top: 11px
		text-overflow: ellipsis
		white-space: nowrap
		overflow-x: hidden
		i
			color: $brand-info
		@media (max-width: 320px)
			max-width: 140px

	// multishop menu
	#header_shop
		.dropdown
			&.open
				.dropdown-toggle
					background: none !important
					color: $brand-info !important
			.material-icons
				color: $brand-info
				top: -1px
			.dropdown-toggle
				display: inline-block !important
				color: $header-text-color !important
				text-decoration: none !important
				&:hover
					color: $brand-info !important
				i
					padding-left: 5px
			.dropdown-menu
				.list-dropdown-menu
					overflow-y: auto
					max-height: 500px
					margin: 20px
					padding: 0

	// employee button
	#header_employee_box
		padding: 0
		margin-right: 0
		margin-bottom: 0
		display: flex
		align-items: center

		.mobile &
			display: none

		#employee_infos
			list-style-type: none
			width: 24px
			margin-right: 10px
			box-sizing: border-box
			display: block

			#employee_links
				.employee_avatar
					display: none !important
					img
						border: none
						padding: 0

				@media (max-width: $screen-sm)
					li
						color: white
						font-size: 1.2em
						text-transform: uppercase
						i
							font-size: 1.3em
							color: $brand-primary

			.employee_name
				text-align: center

			.dropdown-menu
				min-width: inherit
				width: 10.625rem
				li
					font-size: 14px
					&:hover
						.material-icons
							color: white
					&.username
						font-weight: 600
						padding: 16px 0 9px
					&.divider
						border: 1px solid $gray-lighter
					a
						.material-icons
							padding: 0
							margin-right: 5px

.bo_search_form
	@extend .hidden-xs
	flex-grow: 1
	margin: 4px 0 0 0
	.form-group
		width: 250px
	#bo_query
		@include border-radius(0, 55px, 55px, 0)
		color:       $main-color
		background:  white
		border:      1px solid $search-border-color
		border-left: none
		font-style:  italic
		&::placeholder
			color: $gray-medium
		@include box-shadow(none)
		@include transition(none)
	.input-group
		margin: 0 !important
	.input-group-btn
		@include border-radius(55px, 0, 0, 55px)
		border:       1px solid $search-border-color
		border-right: none
		.btn
			@include border-radius(55px, 0, 0, 55px)
			@include box-shadow(none)
			height: 29px
			outline: none
		.btn-default
			@include box-shadow(none)
			border: 1px solid transparent !important
	.clear_search
		position: absolute
		top: 6px
		z-index: 10
		@include right(8px)
	#search_type_icon
		line-height: 1
		top: -2px
		padding-right: 0
		font-size: 20px
	.icon-remove
		vertical-align: middle

#header_quick
	@extend .hidden-xs
	@extend .hidden-sm

	font-size: 13px
	a
		//color: #6c868e

	.dropdown
		> a,
		> a:focus
			color: $header-text-color !important
			background-color: transparent !important

		> a
			.material-icons
				font-size: 20px
				margin-left: -5px

		> a:hover
			color: $toolbar-buttons-hover-color !important

	.dropdown-menu
		> li
			a
				padding: 7px 15px
				&:hover
					color: #fff

				.material-icons
					margin-right: $navbar-padding-horizontal

				&:not(:hover)
					.material-icons
						color: #6c868e

		.material-icons
			font-size: 1.125rem

#ajax_running
	position: absolute
	height: 35px
	width: 35px
	top: 0
	background-color: rgba(black,.4)
	text-align: center
	@include left(0)
	i
		font-size: 20px
		color: rgba(white,.6)
		line-height: 35px

#notification,
#employee_infos
	&.open
		background: none
		a
			&.dropdown-toggle
				background: none !important
	.material-icons
		color: #6c868e
		font-size: 22px
		vertical-align: middle
	#total_notif_number_wrapper
		display: inline-block
		line-height: .75rem
		height: 1rem
		vertical-align: middle
		position: absolute
		top: .3rem
		right: .6rem
		color: #fff
		background: #f1b746
		font:
			size: .625rem
		padding: 0 .18rem
		border-radius: .625rem
		border: 2px solid #fff
		> span
			font-size: inherit
			color: inherit
	.dropdown-menu
		margin: 0
		padding: 0
		border-radius: 0
		min-width: 25rem
		box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.1)
		border: 1px solid #bbcdd2
		top: 42px
		right: 5px !important
		&:before, &:after
			bottom: 100%
			right: 8px
			border: solid transparent
			content: " "
			height: 0
			width: 0
			position: absolute
			pointer-events: none
		&:after
			border-color: transparent
			border-bottom-color: white
			border-width: 7px
			margin-right: 1px
		&:before
			border-color: transparent
			border-bottom-color: #bbcdd2
			border-width: 8px
		.notifications
			.nav-tabs
				border-bottom: 1px solid #fff
				.nav-item
					margin-left: 0
					width: 33%
					text-align: center
					margin-bottom: -1px
					&.active
						a
							border-top: 0
							border-bottom: 3px solid $brand-info
							color: $brand-info
					&:hover
						a
							color: $brand-info
					.nav-link
						color: #6c868e
						font-weight: 400
						padding: .9375rem .9375rem .625rem
						font-family: Open Sans,sans-serif
						font-size: 0.9rem
						text-transform: none
						border: 0
			.tab-content
				border-top: .125rem solid $gray-lighter
				padding: 0
				margin-top: -.0625rem
				background: #f2f4f5
				.tab-pane
					height: 11.875rem
					overflow-y: auto
					.no-notification
						display: none
					&.empty
						color: #6c868e
						text-align: center
						&::after
							content: "\E7F5"
							font-family: "Material Icons"
							opacity: 0.7
							font-size: 5.625rem
							color: #bbcdd2
						> .no-notification
							position: absolute
							bottom: 0
							width: 100%
							display: block
				.notif
					display: block
					padding: .625rem .9375rem
					color: #6c868e
					.material-icons
						vertical-align: top
						font-size: 16px
						line-height: 16px
					.message-notification-status
						&.open
							color: #5cb85c
						&.closed
							color: #d9534f
						&.pending1, &.pending2
							color: #FFBB00
					strong
						color: #363a41
					&:hover
						background-color: #3ed2f0
						color: #fff
						text-decoration: none
						strong
							color: #fff

#employee_infos
	> a > .material-icons
		font-size: 24px
<?php }
}
