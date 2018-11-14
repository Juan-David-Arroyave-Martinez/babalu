<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:38
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/bootstrap-sass/_pager.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec79824dba84_35517573',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60846bca0bf679f08855e28b8dddb0a84b5fbadd' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/bootstrap-sass/_pager.scss',
      1 => 1542223692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec79824dba84_35517573 (Smarty_Internal_Template $_smarty_tpl) {
?>//
// Pager pagination
// --------------------------------------------------


.pager {
  padding-left: 0;
  margin: $line-height-computed 0;
  list-style: none;
  text-align: center;
  @include clearfix();
  li {
    display: inline;
    > a,
    > span {
      display: inline-block;
      padding: 5px 14px;
      background-color: $pager-bg;
      border: 1px solid $pager-border;
      border-radius: $pager-border-radius;
    }

    > a:hover,
    > a:focus {
      text-decoration: none;
      background-color: $pager-hover-bg;
    }
  }

  .next {
    > a,
    > span {
      float: right;
    }
  }

  .previous {
    > a,
    > span {
      float: left;
    }
  }

  .disabled {
    > a,
    > a:hover,
    > a:focus,
    > span {
      color: $pager-disabled-color;
      background-color: $pager-bg;
      cursor: not-allowed;
    }
  }

}
<?php }
}
