<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:36
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/partials/_switch.sass' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec7980e94a52_77392405',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6373d3a0d14e18f1c2c08cc72d1c628450a99036' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/partials/_switch.sass',
      1 => 1542223692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec7980e94a52_77392405 (Smarty_Internal_Template $_smarty_tpl) {
?>// CSS TOGGLE SWITCHES (Ionuț Colceriu)
// Licensed under Unlicense
// https://github.com/ghinda/css-toggle-switch

@mixin switch-shared()
	display: block
	height: 26px
	*
		@include box-sizing(border-box)
	a
		display: block
		@include transition(all 0.3s ease-out)
	label,
	> span
		line-height: 26px
		vertical-align: middle

@mixin switch-light()
	@include switch-shared()
	position: relative
	overflow: visible
	padding: 0
	// Position the label over all the elements, except the slide-button (<a>)
	// Clicking anywhere on the label will change the switch-state
	label
		position: relative
		z-index: 3
		display: block
		width: 100%
	// Don't hide the input from screen-readers and keyboard access
	input
		position: absolute
		opacity: 0
		z-index: 5
		&:checked ~ a
			@include left(0)
	> span
		position: absolute
		width: 100%
		margin: 0
		font-weight: normal
		@include text-align(left)
		@include left(0)
		span
			position: absolute
			top: 0
			z-index: 5
			display: block
			width: 50%
			text-align: center
			@include left(0)
			&:last-child
				@include left(50%)
	a
		position: absolute
		top: 0
		z-index: 4
		display: block
		width: 50%
		height: 100%
		padding: 0
		@include left(50%)

// Radio Switch
@mixin switch-toggle()
	@include switch-shared()
	position: relative
	input
		position: absolute
		opacity: 0
	label
		position: relative
		z-index: 2
		width: 50%
		height: 100%
		margin: 0
		text-align: center
		@include float(left)
	a
		position: absolute
		top: 0
		padding: 0
		z-index: 1
		width: 50%
		height: 100%
		color: white
		border: solid 1px #279CBB
		background-color: #2eacce
		@include left(0)
		@include box-shadow('#1B7088' 0 -1px 0 inset)
	input:last-of-type:checked ~ a
		border: solid 1px #CA6F6F
		background-color: #E08F95
		@include left(50%)
		@include box-shadow('#5C5C5C' 0 -1px 0 inset)
	input:disabled ~ a
		border: solid 1px lighten(gray,20%) !important
		background-color: lighten(gray,30%)	!important
		@include box-shadow(lighten(gray,20%) 0 -1px 0 inset !important)
	//Generate styles for the multiple states
	@for $i from 1 through 3
		$state: $i + 2
		$width: 100 / ($i + 2)
		&.switch-#<?php echo $_smarty_tpl->tpl_vars['state']->value;?>

			label,
			a
				width: $width * 1%
		@for $j from 2 through ($i + 1)
			&.switch-#<?php echo $_smarty_tpl->tpl_vars['state']->value;?>
 input:checked:nth-of-type(#<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
) ~ a
				@include left($width * ($j - 1) * 1%)
		&.switch-#<?php echo $_smarty_tpl->tpl_vars['state']->value;?>
 input:checked:last-of-type ~ a
			@include left(100 - $width * 1%)

.switch a,
.switch-light span span
	display: none

@media only screen
	.switch-light
		@include switch-light()
	.switch
		@include switch-toggle()
	.prestashop-switch
		margin-top: 3px
		background-color: #eee
		border-radius: 3px
		color: #333
		text-align: center
		@include box-shadow(rgba(black,0.15) 0 1px 4px 1px inset)
		*
			outline: 0!important
		label
			text-transform: uppercase
			color: #bbb
			font-weight: 400
			cursor: pointer
			@include transition(color 0.2s ease-out)
		input:checked + label
			color: white
		> span
			color: #666
			text-transform: uppercase
			cursor: pointer
		&.switch-light input:checked
			~ a
				border: solid 1px $brand-success
				background-color: lighten($brand-success,10%)
				@include box-shadow($brand-success 0 -1px 0 inset)
			~ span span
				&:first-of-type
					color: white
				&:last-of-type
					color: #ccc
		&.switch-light input
			~ a
				border: solid 1px $brand-danger
				background-color: lighten($brand-danger,10%)
				@include box-shadow($brand-danger 0 -1px 0 inset)
			~ span span
				&:first-of-type
					color: #ccc
				&:last-of-type
					color: white
<?php }
}
