<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:36
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/partials/_print.sass' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec7980f0e0d0_09407625',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ab47dc868182d2c31de7826d96c3abbb28a7dd2' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/partials/_print.sass',
      1 => 1542223692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec7980f0e0d0_09407625 (Smarty_Internal_Template $_smarty_tpl) {
?>@media print
	*
		color: #000 !important // Black prints faster: h5bp.com/s
		border-color: #000 !important
		background: transparent !important
		font-family: Georgia, "Times New Roman", Times, serif !important
		text-shadow: none!important
		@include box-shadow(none!important)
	// commons
	[class^="icon-"], [class^="process-icon-"]
		font-family: $icon-font-family !important
	#header, #footer, #nav-bar, #nav-topbar, .hidden-print
		display: none !important
	.visible-print
		display: block !important
	hr
		display: none !important
	#main
		width: 8.5in !important
		float: none !important
		margin: 0 auto !important
		padding: 0 !important
		#content.bootstrap
			margin: 0 !important
			padding: 0 !important
			.page-head
				display: none !important
			.panel
				page-break-inside: avoid !important
				clear: both !important
				margin: 0 0 40px !important
				padding: 0 !important
				border: none !important
				@include box-shadow(none!important)
				.panel-heading
					margin: 0 0 20px !important
				.panel, .well
					margin: 0 !important
			.tab-pane
				margin-bottom: 20px !important
			.row
				margin-bottom: 20px !important
			.panel
				clear: both !important
			.btn
				display: none !important
			.panel-heading-action
				display: none
			.nav-tabs li a
				display: none
				border-bottom-color: white !important
				background-color: white !important
			.tab-content > .tab-pane
				display: block !important
				opacity: 1 !important
			h4
				margin: 0 0 10px 0 !important
			// orders
			#shipping
				.form-horizontal
					padding-bottom: 10px !important
			#addressShipping
				width: 49% !important
				float: left !important
				margin-bottom: 0 !important
			#addressInvoice
				width: 49% !important
				float: right !important
				margin-bottom: 0 !important
			#status
				tr:first-child td
					font-weight: bold !important
			.table
				border: solid 1px black !important
				margin-bottom: 10px !important
				th
					font-style: italic
			.label-inactive
				font-size: 11pt !important
				text-decoration: line-through !important
				i
					display: none !important
			.kpi-container.panel
				margin: 30px 0 20px 0 !important
				border: solid 1px black !important
				.box-stats
					padding: 10px 0 !important
					height: auto !important
					width: 25% !important
					font-size: 8pt !important
					i
						font-size: 20pt !important
			.alert
				border: 1px solid black !important
				&:before
					color: black !important
			.table-responsive
				border: none !important
				margin: 0 !important
			.panel-total td
				font-size: 13pt!important
<?php }
}
