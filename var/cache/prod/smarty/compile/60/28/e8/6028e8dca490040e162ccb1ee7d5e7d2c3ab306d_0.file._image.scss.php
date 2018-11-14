<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:38
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_image.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec798225f506_73365464',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6028e8dca490040e162ccb1ee7d5e7d2c3ab306d' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_image.scss',
      1 => 1542223692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec798225f506_73365464 (Smarty_Internal_Template $_smarty_tpl) {
?>// Image Mixins
// - Responsive image
// - Retina image


// Responsive image
//
// Keep images from scaling beyond the width of their parents.
@mixin img-responsive($display: block) {
  display: $display;
  max-width: 100%; // Part 1: Set a maximum relative to the parent
  height: auto; // Part 2: Scale the height according to the width, otherwise you get stretching
}


// Retina image
//
// Short retina mixin for setting background-image and -size. Note that the
// spelling of `min--moz-device-pixel-ratio` is intentional.
@mixin img-retina($file-1x, $file-2x, $width-1x, $height-1x) {
  background-image: url(if($bootstrap-sass-asset-helper, twbs-image-path("#<?php echo $_smarty_tpl->tpl_vars['file']->value-'1x';?>
"), "#<?php echo $_smarty_tpl->tpl_vars['file']->value-'1x';?>
"));

  @media
  only screen and (-webkit-min-device-pixel-ratio: 2),
  only screen and (   min--moz-device-pixel-ratio: 2),
  only screen and (     -o-min-device-pixel-ratio: 2/1),
  only screen and (        min-device-pixel-ratio: 2),
  only screen and (                min-resolution: 192dpi),
  only screen and (                min-resolution: 2dppx) {
    background-image: url(if($bootstrap-sass-asset-helper, twbs-image-path("#<?php echo $_smarty_tpl->tpl_vars['file']->value-'2x';?>
"), "#<?php echo $_smarty_tpl->tpl_vars['file']->value-'2x';?>
"));
    background-size: $width-1x $height-1x;
  }
}
<?php }
}
