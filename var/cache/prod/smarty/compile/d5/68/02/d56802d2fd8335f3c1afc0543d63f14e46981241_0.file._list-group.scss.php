<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:38
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_list-group.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec79820f99c2_56979849',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd56802d2fd8335f3c1afc0543d63f14e46981241' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/bootstrap-sass/mixins/_list-group.scss',
      1 => 1542223692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec79820f99c2_56979849 (Smarty_Internal_Template $_smarty_tpl) {
?>// List Groups

@mixin list-group-item-variant($state, $background, $color) {
  .list-group-item-#<?php echo $_smarty_tpl->tpl_vars['state']->value;?>
 {
    color: $color;
    background-color: $background;

    // [converter] extracted a& to a.list-group-item-#<?php echo $_smarty_tpl->tpl_vars['state']->value;?>

  }

  a.list-group-item-#<?php echo $_smarty_tpl->tpl_vars['state']->value;?>
 {
    color: $color;

    .list-group-item-heading {
      color: inherit;
    }

    &:hover,
    &:focus {
      color: $color;
      background-color: darken($background, 5%);
    }
    &.active,
    &.active:hover,
    &.active:focus {
      color: #fff;
      background-color: $color;
      border-color: $color;
    }
  }
}
<?php }
}
