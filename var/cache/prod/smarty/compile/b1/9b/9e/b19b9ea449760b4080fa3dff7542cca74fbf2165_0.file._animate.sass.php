<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:37
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/_animate.sass' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec798105cb02_76143335',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b19b9ea449760b4080fa3dff7542cca74fbf2165' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/_animate.sass',
      1 => 1542223692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec798105cb02_76143335 (Smarty_Internal_Template $_smarty_tpl) {
?>//Animate Mixin Plugin

=animate($name: fadeIn, $duration: 1s, $delay: .2s, $function: ease, $mode: both)
	+animation($name $duration $delay $function $mode)


//KeyFrame Defaults (pre-made don't edit)

@-webkit-keyframes fadeIn
	0%
		opacity: 0
	100%
		opacity: 1

@-webkit-keyframes fadeOut
	0%
		opacity: 1
	100%
		opacity: 0

@-webkit-keyframes fadeInUp
	0%
		opacity: 0
		-webkit-transform: translateY(20px)
	100%
		opacity: 1
		-webkit-transform: translateY(0)

@-webkit-keyframes fadeOutUp
	0%
		opacity: 1
		-webkit-transform: translateY(0)
	100%
		opacity: 0
		-webkit-transform: translateY(-20px)

@-webkit-keyframes fadeInDown
	0%
		opacity: 0
		-webkit-transform: translateY(-20px)
	100%
		opacity: 1
		-webkit-transform: translateY(0)

@-webkit-keyframes fadeOutDown
	0%
		opacity: 1
		-webkit-transform: translateY(0)
	100%
		opacity: 0
		-webkit-transform: translateY(20px)

@-webkit-keyframes fadeInRight
	0%
		opacity: 0
		-webkit-transform: translateX(20px)
	100%
		opacity: 1
		-webkit-transform: translateX(0)

@-webkit-keyframes fadeOutLeft
	0%
		opacity: 1
		-webkit-transform: translateX(0)
	100%
		opacity: 0
		-webkit-transform: translateX(-20px)

@-webkit-keyframes fadeInLeft
	0%
		opacity: 0
		-webkit-transform: translateX(-20px)
	100%
		opacity: 1
		-webkit-transform: translateX(0)

@-webkit-keyframes fadeOutRight
	0%
		opacity: 1
		-webkit-transform: translateX(0)
	100%
		opacity: 0
		-webkit-transform: translateX(20px)

@-webkit-keyframes fadeInUpBig
	0%
		opacity: 0
		-webkit-transform: translateY(2000px)
	100%
		opacity: 1
		-webkit-transform: translateY(0)

@-webkit-keyframes fadeOutUpBig
	0%
		opacity: 1
		-webkit-transform: translateY(0)
	100%
		opacity: 0
		-webkit-transform: translateY(-2000px)

@-webkit-keyframes fadeInDownBig
	0%
		opacity: 0
		-webkit-transform: translateY(-2000px)
	100%
		opacity: 1
		-webkit-transform: translateY(0)

@-webkit-keyframes fadeOutDownBig
	0%
		opacity: 1
		-webkit-transform: translateY(0)
	100%
		opacity: 0
		-webkit-transform: translateY(2000px)

@-webkit-keyframes fadeInRightBig
	0%
		opacity: 0
		-webkit-transform: translateX(2000px)
	100%
		opacity: 1
		-webkit-transform: translateX(0)

@-webkit-keyframes fadeOutLeftBig
	0%
		opacity: 1
		-webkit-transform: translateX(0)
	100%
		opacity: 0
		-webkit-transform: translateX(-2000px)

@-webkit-keyframes fadeInLeftBig
	0%
		opacity: 0
		-webkit-transform: translateX(-2000px)
	100%
		opacity: 1
		-webkit-transform: translateX(0)

@-webkit-keyframes fadeOutRightBig
	0%
		opacity: 1
		-webkit-transform: translateX(0)
	100%
		opacity: 0
		-webkit-transform: translateX(2000px)

@-webkit-keyframes bounceIn
	0%
		opacity: 0
		-webkit-transform: scale(0.3)
	50%
		opacity: 1
		-webkit-transform: scale(1.05)
	70%
		-webkit-transform: scale(0.9)
	100%
		-webkit-transform: scale(1)

@-webkit-keyframes bounceInDown
	0%
		opacity: 0
		-webkit-transform: translateY(-2000px)
	60%
		opacity: 1
		-webkit-transform: translateY(30px)
	80%
		-webkit-transform: translateY(-10px)
	100%
		-webkit-transform: translateY(0)

@-webkit-keyframes bounceInUp
	0%
		opacity: 0
		-webkit-transform: translateY(2000px)
	60%
		opacity: 1
		-webkit-transform: translateY(-30px)
	80%
		-webkit-transform: translateY(10px)
	100%
		-webkit-transform: translateY(0)

@-webkit-keyframes bounceInRight
	0%
		opacity: 0
		-webkit-transform: translateX(2000px)
	60%
		opacity: 1
		-webkit-transform: translateX(-30px)
	80%
		-webkit-transform: translateX(10px)
	100%
		-webkit-transform: translateX(0)

@-webkit-keyframes bounceInLeft
	0%
		opacity: 0
		-webkit-transform: translateX(-2000px)
	60%
		opacity: 1
		-webkit-transform: translateX(30px)
	80%
		-webkit-transform: translateX(-10px)
	100%
		-webkit-transform: translateX(0)

@-webkit-keyframes bounceOut
	0%
		-webkit-transform: scale(1)
	25%
		-webkit-transform: scale(0.95)
	50%
		opacity: 1
		-webkit-transform: scale(1.1)
	100%
		opacity: 0
		-webkit-transform: scale(0.3)

@-webkit-keyframes bounceOutUp
	0%
		-webkit-transform: translateY(0)
	20%
		opacity: 1
		-webkit-transform: translateY(20px)
	100%
		opacity: 0
		-webkit-transform: translateY(-2000px)

@-webkit-keyframes bounceOutDown
	0%
		-webkit-transform: translateY(0)
	20%
		opacity: 1
		-webkit-transform: translateY(-20px)
	100%
		opacity: 0
		-webkit-transform: translateY(2000px)

@-webkit-keyframes bounceOutLeft
	0%
		-webkit-transform: translateX(0)
	20%
		opacity: 1
		-webkit-transform: translateX(20px)
	100%
		opacity: 0
		-webkit-transform: translateX(-2000px)

@-webkit-keyframes bounceOutRight
	0%
		-webkit-transform: translateX(0)
	20%
		opacity: 1
		-webkit-transform: translateX(-20px)
	100%
		opacity: 0
		-webkit-transform: translateX(2000px)

@-webkit-keyframes flash
	0%
		opacity: 1
	25%
		opacity: 0
	50%
		opacity: 1
	75%
		opacity: 0
	100%
		opacity: 1

@-webkit-keyframes bounce
	0%
		-webkit-transform: translateY(0)
	20%
		-webkit-transform: translateY(0)
	40%
		-webkit-transform: translateY(-30px)
	50%
		-webkit-transform: translateY(0)
	60%
		-webkit-transform: translateY(-15px)
	80%
		-webkit-transform: translateY(0)
	100%
		-webkit-transform: translateY(0)

@-webkit-keyframes shake
	0%
		-webkit-transform: translateX(0)
	10%
		-webkit-transform: translateX(-10px)
	20%
		-webkit-transform: translateX(10px)
	30%
		-webkit-transform: translateX(-10px)
	40%
		-webkit-transform: translateX(10px)
	50%
		-webkit-transform: translateX(-10px)
	60%
		-webkit-transform: translateX(10px)
	70%
		-webkit-transform: translateX(-10px)
	80%
		-webkit-transform: translateX(10px)
	90%
		-webkit-transform: translateX(-10px)
	100%
		-webkit-transform: translateX(0)

@-webkit-keyframes rotateInDownLeft
	0%
		-webkit-transform-origin: left bottom
		-webkit-transform: rotate(-90deg)
		opacity: 0
	100%
		-webkit-transform-origin: left bottom
		-webkit-transform: rotate(0)
		opacity: 1

@-webkit-keyframes rotateInUpLeft
	0%
		-webkit-transform-origin: left bottom
		-webkit-transform: rotate(90deg)
		opacity: 0
	100%
		-webkit-transform-origin: left bottom
		-webkit-transform: rotate(0)
		opacity: 1

@-webkit-keyframes rotateInUpRight
	0%
		-webkit-transform-origin: right bottom
		-webkit-transform: rotate(-90deg)
		opacity: 0
	100%
		-webkit-transform-origin: right bottom
		-webkit-transform: rotate(0)
		opacity: 1

@-webkit-keyframes rotateInDownRight
	0%
		-webkit-transform-origin: right bottom
		-webkit-transform: rotate(90deg)
		opacity: 0
	100%
		-webkit-transform-origin: right bottom
		-webkit-transform: rotate(0)
		opacity: 1

@-webkit-keyframes rotateOutDownLeft
	0%
		-webkit-transform-origin: left bottom
		-webkit-transform: rotate(0)
		opacity: 1
	100%
		-webkit-transform-origin: left bottom
		-webkit-transform: rotate(90deg)
		opacity: 0

@-webkit-keyframes rotateOutUpLeft
	0%
		-webkit-transform-origin: left bottom
		-webkit-transform: rotate(0)
		opacity: 1
	100%
		-webkit-transform-origin: left bottom
		-webkit-transform: rotate(-90deg)
		opacity: 0

@-webkit-keyframes rotateOutDownRight
	0%
		-webkit-transform-origin: right bottom
		-webkit-transform: rotate(0)
		opacity: 1
	100%
		-webkit-transform-origin: right bottom
		-webkit-transform: rotate(-90deg)
		opacity: 0

@-webkit-keyframes rotateOutUpRight
	0%
		-webkit-transform-origin: right bottom
		-webkit-transform: rotate(0)
		opacity: 1
	100%
		-webkit-transform-origin: right bottom
		-webkit-transform: rotate(90deg)
		opacity: 0

@-webkit-keyframes rotateIn
	0%
		-webkit-transform-origin: center center
		-webkit-transform: rotate(-200deg)
		opacity: 0
	100%
		-webkit-transform-origin: center center
		-webkit-transform: rotate(0)
		opacity: 1

@-webkit-keyframes rotateOut
	0%
		-webkit-transform-origin: center center
		-webkit-transform: rotate(0)
		opacity: 1
	100%
		-webkit-transform-origin: center center
		-webkit-transform: rotate(200deg)
		opacity: 0

@-webkit-keyframes tada
	0%
		-webkit-transform: scale(1)
	10%
		-webkit-transform: scale(0.9) rotate(-3deg)
	20%
		-webkit-transform: scale(0.9) rotate(-3deg)
	30%
		-webkit-transform: scale(1.1) rotate(3deg)
	40%
		-webkit-transform: scale(1.1) rotate(-3deg)
	50%
		-webkit-transform: scale(1.1) rotate(3deg)
	60%
		-webkit-transform: scale(1.1) rotate(-3deg)
	70%
		-webkit-transform: scale(1.1) rotate(3deg)
	80%
		-webkit-transform: scale(1.1) rotate(-3deg)
	90%
		-webkit-transform: scale(1.1) rotate(3deg)
	100%
		-webkit-transform: scale(1) rotate(0)

@-moz-keyframes fadeIn
	0%
		opacity: 0
	100%
		opacity: 1

@-moz-keyframes fadeOut
	0%
		opacity: 1
	100%
		opacity: 0

@-moz-keyframes fadeInUp
	0%
		opacity: 0
		-moz-transform: translateY(20px)
	100%
		opacity: 1
		-moz-transform: translateY(0)

@-moz-keyframes fadeOutUp
	0%
		opacity: 1
		-moz-transform: translateY(0)
	100%
		opacity: 0
		-moz-transform: translateY(-20px)

@-moz-keyframes fadeInDown
	0%
		opacity: 0
		-moz-transform: translateY(-20px)
	100%
		opacity: 1
		-moz-transform: translateY(0)

@-moz-keyframes fadeOutDown
	0%
		opacity: 1
		-moz-transform: translateY(0)
	100%
		opacity: 0
		-moz-transform: translateY(20px)

@-moz-keyframes fadeInRight
	0%
		opacity: 0
		-moz-transform: translateX(20px)
	100%
		opacity: 1
		-moz-transform: translateX(0)

@-moz-keyframes fadeOutLeft
	0%
		opacity: 1
		-moz-transform: translateX(0)
	100%
		opacity: 0
		-moz-transform: translateX(-20px)

@-moz-keyframes fadeInLeft
	0%
		opacity: 0
		-moz-transform: translateX(-20px)
	100%
		opacity: 1
		-moz-transform: translateX(0)

@-moz-keyframes fadeOutRight
	0%
		opacity: 1
		-moz-transform: translateX(0)
	100%
		opacity: 0
		-moz-transform: translateX(20px)

@-moz-keyframes fadeInUpBig
	0%
		opacity: 0
		-moz-transform: translateY(2000px)
	100%
		opacity: 1
		-moz-transform: translateY(0)

@-moz-keyframes fadeOutUpBig
	0%
		opacity: 1
		-moz-transform: translateY(0)
	100%
		opacity: 0
		-moz-transform: translateY(-2000px)

@-moz-keyframes fadeInDownBig
	0%
		opacity: 0
		-moz-transform: translateY(-2000px)
	100%
		opacity: 1
		-moz-transform: translateY(0)

@-moz-keyframes fadeOutDownBig
	0%
		opacity: 1
		-moz-transform: translateY(0)
	100%
		opacity: 0
		-moz-transform: translateY(2000px)

@-moz-keyframes fadeInRightBig
	0%
		opacity: 0
		-moz-transform: translateX(2000px)
	100%
		opacity: 1
		-moz-transform: translateX(0)

@-moz-keyframes fadeOutLeftBig
	0%
		opacity: 1
		-moz-transform: translateX(0)
	100%
		opacity: 0
		-moz-transform: translateX(-2000px)

@-moz-keyframes fadeInLeftBig
	0%
		opacity: 0
		-moz-transform: translateX(-2000px)
	100%
		opacity: 1
		-moz-transform: translateX(0)

@-moz-keyframes fadeOutRightBig
	0%
		opacity: 1
		-moz-transform: translateX(0)
	100%
		opacity: 0
		-moz-transform: translateX(2000px)

@-moz-keyframes bounceIn
	0%
		opacity: 0
		-moz-transform: scale(0.3)
	50%
		opacity: 1
		-moz-transform: scale(1.05)
	70%
		-moz-transform: scale(0.9)
	100%
		-moz-transform: scale(1)

@-moz-keyframes bounceInDown
	0%
		opacity: 0
		-moz-transform: translateY(-2000px)
	60%
		opacity: 1
		-moz-transform: translateY(30px)
	80%
		-moz-transform: translateY(-10px)
	100%
		-moz-transform: translateY(0)

@-moz-keyframes bounceInUp
	0%
		opacity: 0
		-moz-transform: translateY(2000px)
	60%
		opacity: 1
		-moz-transform: translateY(-30px)
	80%
		-moz-transform: translateY(10px)
	100%
		-moz-transform: translateY(0)

@-moz-keyframes bounceInRight
	0%
		opacity: 0
		-moz-transform: translateX(2000px)
	60%
		opacity: 1
		-moz-transform: translateX(-30px)
	80%
		-moz-transform: translateX(10px)
	100%
		-moz-transform: translateX(0)

@-moz-keyframes bounceInLeft
	0%
		opacity: 0
		-moz-transform: translateX(-2000px)
	60%
		opacity: 1
		-moz-transform: translateX(30px)
	80%
		-moz-transform: translateX(-10px)
	100%
		-moz-transform: translateX(0)

@-moz-keyframes bounceOut
	0%
		-moz-transform: scale(1)
	25%
		-moz-transform: scale(0.95)
	50%
		opacity: 1
		-moz-transform: scale(1.1)
	100%
		opacity: 0
		-moz-transform: scale(0.3)

@-moz-keyframes bounceOutUp
	0%
		-moz-transform: translateY(0)
	20%
		opacity: 1
		-moz-transform: translateY(20px)
	100%
		opacity: 0
		-moz-transform: translateY(-2000px)

@-moz-keyframes bounceOutDown
	0%
		-moz-transform: translateY(0)
	20%
		opacity: 1
		-moz-transform: translateY(-20px)
	100%
		opacity: 0
		-moz-transform: translateY(2000px)

@-moz-keyframes bounceOutLeft
	0%
		-moz-transform: translateX(0)
	20%
		opacity: 1
		-moz-transform: translateX(20px)
	100%
		opacity: 0
		-moz-transform: translateX(-2000px)

@-moz-keyframes bounceOutRight
	0%
		-moz-transform: translateX(0)
	20%
		opacity: 1
		-moz-transform: translateX(-20px)
	100%
		opacity: 0
		-moz-transform: translateX(2000px)

@-moz-keyframes flash
	0%
		opacity: 1
	25%
		opacity: 0
	50%
		opacity: 1
	75%
		opacity: 0
	100%
		opacity: 1

@-moz-keyframes bounce
	0%
		-moz-transform: translateY(0)
	20%
		-moz-transform: translateY(0)
	40%
		-moz-transform: translateY(-30px)
	50%
		-moz-transform: translateY(0)
	60%
		-moz-transform: translateY(-15px)
	80%
		-moz-transform: translateY(0)
	100%
		-moz-transform: translateY(0)

@-moz-keyframes shake
	0%
		-moz-transform: translateX(0)
	10%
		-moz-transform: translateX(-10px)
	20%
		-moz-transform: translateX(10px)
	30%
		-moz-transform: translateX(-10px)
	40%
		-moz-transform: translateX(10px)
	50%
		-moz-transform: translateX(-10px)
	60%
		-moz-transform: translateX(10px)
	70%
		-moz-transform: translateX(-10px)
	80%
		-moz-transform: translateX(10px)
	90%
		-moz-transform: translateX(-10px)
	100%
		-moz-transform: translateX(0)

@-moz-keyframes rotateInDownLeft
	0%
		-moz-transform-origin: left bottom
		-moz-transform: rotate(-90deg)
		opacity: 0
	100%
		-moz-transform-origin: left bottom
		-moz-transform: rotate(0)
		opacity: 1

@-moz-keyframes rotateInUpLeft
	0%
		-moz-transform-origin: left bottom
		-moz-transform: rotate(90deg)
		opacity: 0
	100%
		-moz-transform-origin: left bottom
		-moz-transform: rotate(0)
		opacity: 1

@-moz-keyframes rotateInUpRight
	0%
		-moz-transform-origin: right bottom
		-moz-transform: rotate(-90deg)
		opacity: 0
	100%
		-moz-transform-origin: right bottom
		-moz-transform: rotate(0)
		opacity: 1

@-moz-keyframes rotateInDownRight
	0%
		-moz-transform-origin: right bottom
		-moz-transform: rotate(90deg)
		opacity: 0
	100%
		-moz-transform-origin: right bottom
		-moz-transform: rotate(0)
		opacity: 1

@-moz-keyframes rotateOutDownLeft
	0%
		-moz-transform-origin: left bottom
		-moz-transform: rotate(0)
		opacity: 1
	100%
		-moz-transform-origin: left bottom
		-moz-transform: rotate(90deg)
		opacity: 0

@-moz-keyframes rotateOutUpLeft
	0%
		-moz-transform-origin: left bottom
		-moz-transform: rotate(0)
		opacity: 1
	100%
		-moz-transform-origin: left bottom
		-moz-transform: rotate(-90deg)
		opacity: 0

@-moz-keyframes rotateOutDownRight
	0%
		-moz-transform-origin: right bottom
		-moz-transform: rotate(0)
		opacity: 1
	100%
		-moz-transform-origin: right bottom
		-moz-transform: rotate(-90deg)
		opacity: 0

@-moz-keyframes rotateOutUpRight
	0%
		-moz-transform-origin: right bottom
		-moz-transform: rotate(0)
		opacity: 1
	100%
		-moz-transform-origin: right bottom
		-moz-transform: rotate(90deg)
		opacity: 0

@-moz-keyframes rotateIn
	0%
		-moz-transform-origin: center center
		-moz-transform: rotate(-200deg)
		opacity: 0
	100%
		-moz-transform-origin: center center
		-moz-transform: rotate(0)
		opacity: 1

@-moz-keyframes rotateOut
	0%
		-moz-transform-origin: center center
		-moz-transform: rotate(0)
		opacity: 1
	100%
		-moz-transform-origin: center center
		-moz-transform: rotate(200deg)
		opacity: 0

@-moz-keyframes tada
	0%
		-moz-transform: scale(1)
	10%
		-moz-transform: scale(0.9) rotate(-3deg)
	20%
		-moz-transform: scale(0.9) rotate(-3deg)
	30%
		-moz-transform: scale(1.1) rotate(3deg)
	40%
		-moz-transform: scale(1.1) rotate(-3deg)
	50%
		-moz-transform: scale(1.1) rotate(3deg)
	60%
		-moz-transform: scale(1.1) rotate(-3deg)
	70%
		-moz-transform: scale(1.1) rotate(3deg)
	80%
		-moz-transform: scale(1.1) rotate(-3deg)
	90%
		-moz-transform: scale(1.1) rotate(3deg)
	100%
		-moz-transform: scale(1) rotate(0)

@-ms-keyframes fadeIn
	0%
		opacity: 0
	100%
		opacity: 1

@-ms-keyframes fadeOut
	0%
		opacity: 1
	100%
		opacity: 0

@-ms-keyframes fadeInUp
	0%
		opacity: 0
		-ms-transform: translateY(20px)
	100%
		opacity: 1
		-ms-transform: translateY(0)

@-ms-keyframes fadeOutUp
	0%
		opacity: 1
		-ms-transform: translateY(0)
	100%
		opacity: 0
		-ms-transform: translateY(-20px)

@-ms-keyframes fadeInDown
	0%
		opacity: 0
		-ms-transform: translateY(-20px)
	100%
		opacity: 1
		-ms-transform: translateY(0)

@-ms-keyframes fadeOutDown
	0%
		opacity: 1
		-ms-transform: translateY(0)
	100%
		opacity: 0
		-ms-transform: translateY(20px)

@-ms-keyframes fadeInRight
	0%
		opacity: 0
		-ms-transform: translateX(20px)
	100%
		opacity: 1
		-ms-transform: translateX(0)

@-ms-keyframes fadeOutLeft
	0%
		opacity: 1
		-ms-transform: translateX(0)
	100%
		opacity: 0
		-ms-transform: translateX(-20px)

@-ms-keyframes fadeInLeft
	0%
		opacity: 0
		-ms-transform: translateX(-20px)
	100%
		opacity: 1
		-ms-transform: translateX(0)

@-ms-keyframes fadeOutRight
	0%
		opacity: 1
		-ms-transform: translateX(0)
	100%
		opacity: 0
		-ms-transform: translateX(20px)

@-ms-keyframes fadeInUpBig
	0%
		opacity: 0
		-ms-transform: translateY(2000px)
	100%
		opacity: 1
		-ms-transform: translateY(0)

@-ms-keyframes fadeOutUpBig
	0%
		opacity: 1
		-ms-transform: translateY(0)
	100%
		opacity: 0
		-ms-transform: translateY(-2000px)

@-ms-keyframes fadeInDownBig
	0%
		opacity: 0
		-ms-transform: translateY(-2000px)
	100%
		opacity: 1
		-ms-transform: translateY(0)

@-ms-keyframes fadeOutDownBig
	0%
		opacity: 1
		-ms-transform: translateY(0)
	100%
		opacity: 0
		-ms-transform: translateY(2000px)

@-ms-keyframes fadeInRightBig
	0%
		opacity: 0
		-ms-transform: translateX(2000px)
	100%
		opacity: 1
		-ms-transform: translateX(0)

@-ms-keyframes fadeOutLeftBig
	0%
		opacity: 1
		-ms-transform: translateX(0)
	100%
		opacity: 0
		-ms-transform: translateX(-2000px)

@-ms-keyframes fadeInLeftBig
	0%
		opacity: 0
		-ms-transform: translateX(-2000px)
	100%
		opacity: 1
		-ms-transform: translateX(0)

@-ms-keyframes fadeOutRightBig
	0%
		opacity: 1
		-ms-transform: translateX(0)
	100%
		opacity: 0
		-ms-transform: translateX(2000px)

@-ms-keyframes bounceIn
	0%
		opacity: 0
		-ms-transform: scale(0.3)
	50%
		opacity: 1
		-ms-transform: scale(1.05)
	70%
		-ms-transform: scale(0.9)
	100%
		-ms-transform: scale(1)

@-ms-keyframes bounceInDown
	0%
		opacity: 0
		-ms-transform: translateY(-2000px)
	60%
		opacity: 1
		-ms-transform: translateY(30px)
	80%
		-ms-transform: translateY(-10px)
	100%
		-ms-transform: translateY(0)

@-ms-keyframes bounceInUp
	0%
		opacity: 0
		-ms-transform: translateY(2000px)
	60%
		opacity: 1
		-ms-transform: translateY(-30px)
	80%
		-ms-transform: translateY(10px)
	100%
		-ms-transform: translateY(0)

@-ms-keyframes bounceInRight
	0%
		opacity: 0
		-ms-transform: translateX(2000px)
	60%
		opacity: 1
		-ms-transform: translateX(-30px)
	80%
		-ms-transform: translateX(10px)
	100%
		-ms-transform: translateX(0)

@-ms-keyframes bounceInLeft
	0%
		opacity: 0
		-ms-transform: translateX(-2000px)
	60%
		opacity: 1
		-ms-transform: translateX(30px)
	80%
		-ms-transform: translateX(-10px)
	100%
		-ms-transform: translateX(0)

@-ms-keyframes bounceOut
	0%
		-ms-transform: scale(1)
	25%
		-ms-transform: scale(0.95)
	50%
		opacity: 1
		-ms-transform: scale(1.1)
	100%
		opacity: 0
		-ms-transform: scale(0.3)

@-ms-keyframes bounceOutUp
	0%
		-ms-transform: translateY(0)
	20%
		opacity: 1
		-ms-transform: translateY(20px)
	100%
		opacity: 0
		-ms-transform: translateY(-2000px)

@-ms-keyframes bounceOutDown
	0%
		-ms-transform: translateY(0)
	20%
		opacity: 1
		-ms-transform: translateY(-20px)
	100%
		opacity: 0
		-ms-transform: translateY(2000px)

@-ms-keyframes bounceOutLeft
	0%
		-ms-transform: translateX(0)
	20%
		opacity: 1
		-ms-transform: translateX(20px)
	100%
		opacity: 0
		-ms-transform: translateX(-2000px)

@-ms-keyframes bounceOutRight
	0%
		-ms-transform: translateX(0)
	20%
		opacity: 1
		-ms-transform: translateX(-20px)
	100%
		opacity: 0
		-ms-transform: translateX(2000px)

@-ms-keyframes flash
	0%
		opacity: 1
	25%
		opacity: 0
	50%
		opacity: 1
	75%
		opacity: 0
	100%
		opacity: 1

@-ms-keyframes bounce
	0%
		-ms-transform: translateY(0)
	20%
		-ms-transform: translateY(0)
	40%
		-ms-transform: translateY(-30px)
	50%
		-ms-transform: translateY(0)
	60%
		-ms-transform: translateY(-15px)
	80%
		-ms-transform: translateY(0)
	100%
		-ms-transform: translateY(0)

@-ms-keyframes shake
	0%
		-ms-transform: translateX(0)
	10%
		-ms-transform: translateX(-10px)
	20%
		-ms-transform: translateX(10px)
	30%
		-ms-transform: translateX(-10px)
	40%
		-ms-transform: translateX(10px)
	50%
		-ms-transform: translateX(-10px)
	60%
		-ms-transform: translateX(10px)
	70%
		-ms-transform: translateX(-10px)
	80%
		-ms-transform: translateX(10px)
	90%
		-ms-transform: translateX(-10px)
	100%
		-ms-transform: translateX(0)

@-ms-keyframes rotateInDownLeft
	0%
		-ms-transform-origin: left bottom
		-ms-transform: rotate(-90deg)
		opacity: 0
	100%
		-ms-transform-origin: left bottom
		-ms-transform: rotate(0)
		opacity: 1

@-ms-keyframes rotateInUpLeft
	0%
		-ms-transform-origin: left bottom
		-ms-transform: rotate(90deg)
		opacity: 0
	100%
		-ms-transform-origin: left bottom
		-ms-transform: rotate(0)
		opacity: 1

@-ms-keyframes rotateInUpRight
	0%
		-ms-transform-origin: right bottom
		-ms-transform: rotate(-90deg)
		opacity: 0
	100%
		-ms-transform-origin: right bottom
		-ms-transform: rotate(0)
		opacity: 1

@-ms-keyframes rotateInDownRight
	0%
		-ms-transform-origin: right bottom
		-ms-transform: rotate(90deg)
		opacity: 0
	100%
		-ms-transform-origin: right bottom
		-ms-transform: rotate(0)
		opacity: 1

@-ms-keyframes rotateOutDownLeft
	0%
		-ms-transform-origin: left bottom
		-ms-transform: rotate(0)
		opacity: 1
	100%
		-ms-transform-origin: left bottom
		-ms-transform: rotate(90deg)
		opacity: 0

@-ms-keyframes rotateOutUpLeft
	0%
		-ms-transform-origin: left bottom
		-ms-transform: rotate(0)
		opacity: 1
	100%
		-ms-transform-origin: left bottom
		-ms-transform: rotate(-90deg)
		opacity: 0

@-ms-keyframes rotateOutDownRight
	0%
		-ms-transform-origin: right bottom
		-ms-transform: rotate(0)
		opacity: 1
	100%
		-ms-transform-origin: right bottom
		-ms-transform: rotate(-90deg)
		opacity: 0

@-ms-keyframes rotateOutUpRight
	0%
		-ms-transform-origin: right bottom
		-ms-transform: rotate(0)
		opacity: 1
	100%
		-ms-transform-origin: right bottom
		-ms-transform: rotate(90deg)
		opacity: 0

@-ms-keyframes rotateIn
	0%
		-ms-transform-origin: center center
		-ms-transform: rotate(-200deg)
		opacity: 0
	100%
		-ms-transform-origin: center center
		-ms-transform: rotate(0)
		opacity: 1

@-ms-keyframes rotateOut
	0%
		-ms-transform-origin: center center
		-ms-transform: rotate(0)
		opacity: 1
	100%
		-ms-transform-origin: center center
		-ms-transform: rotate(200deg)
		opacity: 0

@-ms-keyframes tada
	0%
		-ms-transform: scale(1)
	10%
		-ms-transform: scale(0.9) rotate(-3deg)
	20%
		-ms-transform: scale(0.9) rotate(-3deg)
	30%
		-ms-transform: scale(1.1) rotate(3deg)
	40%
		-ms-transform: scale(1.1) rotate(-3deg)
	50%
		-ms-transform: scale(1.1) rotate(3deg)
	60%
		-ms-transform: scale(1.1) rotate(-3deg)
	70%
		-ms-transform: scale(1.1) rotate(3deg)
	80%
		-ms-transform: scale(1.1) rotate(-3deg)
	90%
		-ms-transform: scale(1.1) rotate(3deg)
	100%
		-ms-transform: scale(1) rotate(0)

@keyframes fadeIn
	0%
		opacity: 0
	100%
		opacity: 1

@keyframes fadeOut
	0%
		opacity: 1
	100%
		opacity: 0

@keyframes fadeInUp
	0%
		opacity: 0
		transform: translateY(20px)
	100%
		opacity: 1
		transform: translateY(0)

@keyframes fadeOutUp
	0%
		opacity: 1
		transform: translateY(0)
	100%
		opacity: 0
		transform: translateY(-20px)

@keyframes fadeInDown
	0%
		opacity: 0
		transform: translateY(-20px)
	100%
		opacity: 1
		transform: translateY(0)

@keyframes fadeOutDown
	0%
		opacity: 1
		transform: translateY(0)
	100%
		opacity: 0
		transform: translateY(20px)

@keyframes fadeInRight
	0%
		opacity: 0
		transform: translateX(20px)
	100%
		opacity: 1
		transform: translateX(0)

@keyframes fadeOutLeft
	0%
		opacity: 1
		transform: translateX(0)
	100%
		opacity: 0
		transform: translateX(-20px)

@keyframes fadeInLeft
	0%
		opacity: 0
		transform: translateX(-20px)
	100%
		opacity: 1
		transform: translateX(0)

@keyframes fadeOutRight
	0%
		opacity: 1
		transform: translateX(0)
	100%
		opacity: 0
		transform: translateX(20px)

@keyframes fadeInUpBig
	0%
		opacity: 0
		transform: translateY(2000px)
	100%
		opacity: 1
		transform: translateY(0)

@keyframes fadeOutUpBig
	0%
		opacity: 1
		transform: translateY(0)
	100%
		opacity: 0
		transform: translateY(-2000px)

@keyframes fadeInDownBig
	0%
		opacity: 0
		transform: translateY(-2000px)
	100%
		opacity: 1
		transform: translateY(0)

@keyframes fadeOutDownBig
	0%
		opacity: 1
		transform: translateY(0)
	100%
		opacity: 0
		transform: translateY(2000px)

@keyframes fadeInRightBig
	0%
		opacity: 0
		transform: translateX(2000px)
	100%
		opacity: 1
		transform: translateX(0)

@keyframes fadeOutLeftBig
	0%
		opacity: 1
		transform: translateX(0)
	100%
		opacity: 0
		transform: translateX(-2000px)

@keyframes fadeInLeftBig
	0%
		opacity: 0
		transform: translateX(-2000px)
	100%
		opacity: 1
		transform: translateX(0)

@keyframes fadeOutRightBig
	0%
		opacity: 1
		transform: translateX(0)
	100%
		opacity: 0
		transform: translateX(2000px)

@keyframes bounceIn
	0%
		opacity: 0
		transform: scale(0.3)
	50%
		opacity: 1
		transform: scale(1.05)
	70%
		transform: scale(0.9)
	100%
		transform: scale(1)

@keyframes bounceInDown
	0%
		opacity: 0
		transform: translateY(-2000px)
	60%
		opacity: 1
		transform: translateY(30px)
	80%
		transform: translateY(-10px)
	100%
		transform: translateY(0)

@keyframes bounceInUp
	0%
		opacity: 0
		transform: translateY(2000px)
	60%
		opacity: 1
		transform: translateY(-30px)
	80%
		transform: translateY(10px)
	100%
		transform: translateY(0)

@keyframes bounceInRight
	0%
		opacity: 0
		transform: translateX(2000px)
	60%
		opacity: 1
		transform: translateX(-30px)
	80%
		transform: translateX(10px)
	100%
		transform: translateX(0)

@keyframes bounceInLeft
	0%
		opacity: 0
		transform: translateX(-2000px)
	60%
		opacity: 1
		transform: translateX(30px)
	80%
		transform: translateX(-10px)
	100%
		transform: translateX(0)

@keyframes bounceOut
	0%
		transform: scale(1)
	25%
		transform: scale(0.95)
	50%
		opacity: 1
		transform: scale(1.1)
	100%
		opacity: 0
		transform: scale(0.3)

@keyframes bounceOutUp
	0%
		transform: translateY(0)
	20%
		opacity: 1
		transform: translateY(20px)
	100%
		opacity: 0
		transform: translateY(-2000px)

@keyframes bounceOutDown
	0%
		transform: translateY(0)
	20%
		opacity: 1
		transform: translateY(-20px)
	100%
		opacity: 0
		transform: translateY(2000px)

@keyframes bounceOutLeft
	0%
		transform: translateX(0)
	20%
		opacity: 1
		transform: translateX(20px)
	100%
		opacity: 0
		transform: translateX(-2000px)

@keyframes bounceOutRight
	0%
		transform: translateX(0)
	20%
		opacity: 1
		transform: translateX(-20px)
	100%
		opacity: 0
		transform: translateX(2000px)

@keyframes flash
	0%
		opacity: 1
	25%
		opacity: 0
	50%
		opacity: 1
	75%
		opacity: 0
	100%
		opacity: 1

@keyframes bounce
	0%
		transform: translateY(0)
	20%
		transform: translateY(0)
	40%
		transform: translateY(-30px)
	50%
		transform: translateY(0)
	60%
		transform: translateY(-15px)
	80%
		transform: translateY(0)
	100%
		transform: translateY(0)

@keyframes shake
	0%
		transform: translateX(0)
	10%
		transform: translateX(-10px)
	20%
		transform: translateX(10px)
	30%
		transform: translateX(-10px)
	40%
		transform: translateX(10px)
	50%
		transform: translateX(-10px)
	60%
		transform: translateX(10px)
	70%
		transform: translateX(-10px)
	80%
		transform: translateX(10px)
	90%
		transform: translateX(-10px)
	100%
		transform: translateX(0)

@keyframes rotateInDownLeft
	0%
		transform-origin: left bottom
		transform: rotate(-90deg)
		opacity: 0
	100%
		transform-origin: left bottom
		transform: rotate(0)
		opacity: 1

@keyframes rotateInUpLeft
	0%
		transform-origin: left bottom
		transform: rotate(90deg)
		opacity: 0
	100%
		transform-origin: left bottom
		transform: rotate(0)
		opacity: 1

@keyframes rotateInUpRight
	0%
		transform-origin: right bottom
		transform: rotate(-90deg)
		opacity: 0
	100%
		transform-origin: right bottom
		transform: rotate(0)
		opacity: 1

@keyframes rotateInDownRight
	0%
		transform-origin: right bottom
		transform: rotate(90deg)
		opacity: 0
	100%
		transform-origin: right bottom
		transform: rotate(0)
		opacity: 1

@keyframes rotateOutDownLeft
	0%
		transform-origin: left bottom
		transform: rotate(0)
		opacity: 1
	100%
		transform-origin: left bottom
		transform: rotate(90deg)
		opacity: 0

@keyframes rotateOutUpLeft
	0%
		transform-origin: left bottom
		transform: rotate(0)
		opacity: 1
	100%
		transform-origin: left bottom
		transform: rotate(-90deg)
		opacity: 0

@keyframes rotateOutDownRight
	0%
		transform-origin: right bottom
		transform: rotate(0)
		opacity: 1
	100%
		transform-origin: right bottom
		transform: rotate(-90deg)
		opacity: 0

@keyframes rotateOutUpRight
	0%
		transform-origin: right bottom
		transform: rotate(0)
		opacity: 1
	100%
		transform-origin: right bottom
		transform: rotate(90deg)
		opacity: 0

@keyframes rotateIn
	0%
		transform-origin: center center
		transform: rotate(-200deg)
		opacity: 0
	100%
		transform-origin: center center
		transform: rotate(0)
		opacity: 1

@keyframes rotateOut
	0%
		transform-origin: center center
		transform: rotate(0)
		opacity: 1
	100%
		transform-origin: center center
		transform: rotate(200deg)
		opacity: 0

@keyframes tada
	0%
		transform: scale(1)
	10%
		transform: scale(0.9) rotate(-3deg)
	20%
		transform: scale(0.9) rotate(-3deg)
	30%
		transform: scale(1.1) rotate(3deg)
	40%
		transform: scale(1.1) rotate(-3deg)
	50%
		transform: scale(1.1) rotate(3deg)
	60%
		transform: scale(1.1) rotate(-3deg)
	70%
		transform: scale(1.1) rotate(3deg)
	80%
		transform: scale(1.1) rotate(-3deg)
	90%
		transform: scale(1.1) rotate(3deg)
	100%
		transform: scale(1) rotate(0)
<?php }
}
