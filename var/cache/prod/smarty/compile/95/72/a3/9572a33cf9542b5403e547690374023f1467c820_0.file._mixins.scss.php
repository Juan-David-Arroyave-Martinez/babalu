<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:37
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/font-awesome/_mixins.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec79812a2ac1_07624291',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9572a33cf9542b5403e547690374023f1467c820' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/font-awesome/_mixins.scss',
      1 => 1542223692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec79812a2ac1_07624291 (Smarty_Internal_Template $_smarty_tpl) {
?>// Mixins
// --------------------------

@mixin fa-icon() {
  display: inline-block;
  font: normal normal normal #<?php echo $_smarty_tpl->tpl_vars['fa']->value-'font'-'size'-'base';?>
/1 FontAwesome; // shortening font declaration
  font-size: inherit; // can't have font-size inherit on line above, so need to override
  text-rendering: auto; // optimizelegibility throws things off #1094
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  transform: translate(0, 0); // ensures no half-pixel rendering in firefox

}

@mixin fa-icon-rotate($degrees, $rotation) {
  filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=#<?php echo $_smarty_tpl->tpl_vars['rotation']->value;?>
);
  -webkit-transform: rotate($degrees);
      -ms-transform: rotate($degrees);
          transform: rotate($degrees);
}

@mixin fa-icon-flip($horiz, $vert, $rotation) {
  filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=#<?php echo $_smarty_tpl->tpl_vars['rotation']->value;?>
);
  -webkit-transform: scale($horiz, $vert);
      -ms-transform: scale($horiz, $vert);
          transform: scale($horiz, $vert);
}
<?php }
}
