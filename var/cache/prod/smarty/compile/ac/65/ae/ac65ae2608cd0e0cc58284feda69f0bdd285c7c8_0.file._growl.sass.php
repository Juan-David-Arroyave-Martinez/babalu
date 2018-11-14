<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:36
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/partials/_growl.sass' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec7980d61080_38919230',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac65ae2608cd0e0cc58284feda69f0bdd285c7c8' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/partials/_growl.sass',
      1 => 1542223692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec7980d61080_38919230 (Smarty_Internal_Template $_smarty_tpl) {
?>/*
 * jQuery Growl
 * Copyright 2013 Kevin Sylvestre
 * 1.1.4
 */

$namespace: "growl"
$duration: 0.4s

#growls
	z-index: 50000
	position: fixed
	
	&.default
		top: 100px
		@include right(10px)
	&.tl
		top: 10px
		@include left(10px)
	&.tr
		top: 10px
		@include right(10px)
	&.bl
		bottom: 10px
		@include left(10px)
	&.br
		bottom: 10px
		@include right(10px)

.growl
	opacity: 1
	position: relative
	@include border-radius(4px)
	@include transition(all $duration ease-in-out)

	&.#<?php echo $_smarty_tpl->tpl_vars['namespace']->value;?>
-incoming
		opacity: 0.0

	&.#<?php echo $_smarty_tpl->tpl_vars['namespace']->value;?>
-outgoing
		opacity: 0.0

	&.#<?php echo $_smarty_tpl->tpl_vars['namespace']->value;?>
-small
		width: 200px
		padding: 5px
		margin: 5px
	&.#<?php echo $_smarty_tpl->tpl_vars['namespace']->value;?>
-medium
		width: 250px
		padding: 10px
		margin: 10px
	&.#<?php echo $_smarty_tpl->tpl_vars['namespace']->value;?>
-large
		width: 300px
		padding: 15px
		margin: 15px

	&.#<?php echo $_smarty_tpl->tpl_vars['namespace']->value;?>
-default
		color: #FFF
		background: gray
	&.#<?php echo $_smarty_tpl->tpl_vars['namespace']->value;?>
-error
		color: white
		background: rgba($brand-danger,0.8)
	&.#<?php echo $_smarty_tpl->tpl_vars['namespace']->value;?>
-notice
		color: white
		background: rgba($brand-success,0.8)
	&.#<?php echo $_smarty_tpl->tpl_vars['namespace']->value;?>
-warning
		color: white
		background: rgba($brand-warning,0.8)
	.#<?php echo $_smarty_tpl->tpl_vars['namespace']->value;?>
-close
		cursor: pointer
		font-size: 14px
		line-height: 18px
		font-weight: normal
		font-family: helvetica, verdana, sans-serif
		@include float(right)
	.#<?php echo $_smarty_tpl->tpl_vars['namespace']->value;?>
-title
		font-size: 18px
		line-height: 24px
	.#<?php echo $_smarty_tpl->tpl_vars['namespace']->value;?>
-message
		font-size: 14px
		line-height: 18px<?php }
}
