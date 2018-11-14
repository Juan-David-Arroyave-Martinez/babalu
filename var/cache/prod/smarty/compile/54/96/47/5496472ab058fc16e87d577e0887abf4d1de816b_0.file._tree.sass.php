<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:36
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/partials/_tree.sass' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec7980cffae4_06137070',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5496472ab058fc16e87d577e0887abf4d1de816b' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/partials/_tree.sass',
      1 => 1542223692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec7980cffae4_06137070 (Smarty_Internal_Template $_smarty_tpl) {
?>.tree-panel-heading-controls
	line-height: 2.2em
	font-size: 1.1em
	//text-transform: uppercase
	color: $brand-primary
	i
		font-size: $icon-size-base
.tree
	list-style: none
	@include padding(0, 0, 0, 20px)
	input
		vertical-align: baseline
		margin-right: 4px
		line-height: normal
	i
		font-size: $icon-size-base
	.tree-item-name, .tree-folder-name
		padding: 2px 5px
		@include border-radius(4px)
		label
			font-weight: 400
		&:hover
			background-color: #eee
			cursor: pointer
	.tree-selected
		color: white
		background-color: $brand-primary
		&:hover
			background-color: darken($brand-primary,5%)
		i.tree-dot
			background-color: white
	i.tree-dot
		display: inline-block
		position: relative
		width: 6px
		height: 6px
		margin: 0 4px
		background-color: #ccc
		@include border-radius(6px)
	.tree-item-disable, .tree-folder-name-disable
		color: #ccc
		&:hover
			color: #ccc
			background-color: none
.tree-actions
	display: inline-block

.tree-panel-heading-controls
	margin: -20px -20px 20px
	padding: 5px
	border-bottom: solid 1px #DFDFDF

.tree-actions
	.twitter-typeahead
		@include padding(0,0,0,4px)
		position: relative
		top: 1px
	.tt-hint
		left: 4px !important
		color: #ccc

.tree-panel-label-title
	font-weight: 400
	margin: 0
	@include padding(0, 0, 0, 8px)<?php }
}
