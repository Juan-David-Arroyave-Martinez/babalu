<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:38
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/bootstrap-sass/_media.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec79823c49c7_32096091',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72d40027664d0a1942ca991c18b65be9b2949b6f' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/bootstrap-sass/_media.scss',
      1 => 1542223692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec79823c49c7_32096091 (Smarty_Internal_Template $_smarty_tpl) {
?>// Media objects
// Source: http://stubbornella.org/content/?p=497
// --------------------------------------------------


// Common styles
// -------------------------

// Clear the floats
.media,
.media-body {
  overflow: hidden;
  zoom: 1;
}

// Proper spacing between instances of .media
.media,
.media .media {
  margin-top: 15px;
}
.media:first-child {
  margin-top: 0;
}

// For images and videos, set to block
.media-object {
  display: block;
}

// Reset margins on headings for tighter default spacing
.media-heading {
  margin: 0 0 5px;
}


// Media image alignment
// -------------------------

.media {
  > .pull-left {
    margin-right: 10px;
  }
  > .pull-right {
    margin-left: 10px;
  }
}


// Media list variation
// -------------------------

// Undo default ul/ol styles
.media-list {
  padding-left: 0;
  list-style: none;
}
<?php }
}
