<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:38
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/bootstrap-sass/_type.scss' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec7982349ee6_90439877',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e22c957f94e4b34cc01def3998af5288e21a3f9' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/vendor/bootstrap-sass/_type.scss',
      1 => 1542223692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec7982349ee6_90439877 (Smarty_Internal_Template $_smarty_tpl) {
?>//
// Typography
// --------------------------------------------------


// Headings
// -------------------------

h1, h2, h3, h4, h5, h6,
.h1, .h2, .h3, .h4, .h5, .h6 {
  font-family: $headings-font-family;
  font-weight: $headings-font-weight;
  line-height: $headings-line-height;
  color: $headings-color;

  small,
  .small {
    font-weight: normal;
    line-height: 1;
    color: $headings-small-color;
  }
}

h1, .h1,
h2, .h2,
h3, .h3 {
  margin-top: $line-height-computed;
  margin-bottom: ($line-height-computed / 2);

  small,
  .small {
    font-size: 65%;
  }
}
h4, .h4,
h5, .h5,
h6, .h6 {
  margin-top: ($line-height-computed / 2);
  margin-bottom: ($line-height-computed / 2);

  small,
  .small {
    font-size: 75%;
  }
}

h1, .h1 { font-size: $font-size-h1; }
h2, .h2 { font-size: $font-size-h2; }
h3, .h3 { font-size: $font-size-h3; }
h4, .h4 { font-size: $font-size-h4; }
h5, .h5 { font-size: $font-size-h5; }
h6, .h6 { font-size: $font-size-h6; }


// Body text
// -------------------------

p {
  margin: 0 0 ($line-height-computed / 2);
}

.lead {
  margin-bottom: $line-height-computed;
  font-size: floor(($font-size-base * 1.15));
  font-weight: 200;
  line-height: 1.4;

  @media (min-width: $screen-sm-min) {
    font-size: ($font-size-base * 1.5);
  }
}


// Emphasis & misc
// -------------------------

// Ex: 14px base font * 85% = about 12px
small,
.small  { font-size: 85%; }

// Undo browser default styling
cite    { font-style: normal; }

mark,
.mark {
  background-color: $state-warning-bg;
  padding: .2em;
}

// Alignment
.text-left           { text-align: left; }
.text-right          { text-align: right; }
.text-center         { text-align: center; }
.text-justify        { text-align: justify; }
.text-nowrap         { white-space: nowrap; }

// Contextual colors
.text-muted {
  color: $text-muted;
}

@include text-emphasis-variant('.text-primary', $brand-primary);

@include text-emphasis-variant('.text-success', $state-success-text);

@include text-emphasis-variant('.text-info', $state-info-text);

@include text-emphasis-variant('.text-warning', $state-warning-text);

@include text-emphasis-variant('.text-danger', $state-danger-text);

// Contextual backgrounds
// For now we'll leave these alongside the text classes until v4 when we can
// safely shift things around (per SemVer rules).
.bg-primary {
  // Given the contrast here, this is the only class to have its color inverted
  // automatically.
  color: #fff;
}
@include bg-variant('.bg-primary', $brand-primary);

@include bg-variant('.bg-success', $state-success-bg);

@include bg-variant('.bg-info', $state-info-bg);

@include bg-variant('.bg-warning', $state-warning-bg);

@include bg-variant('.bg-danger', $state-danger-bg);


// Page header
// -------------------------

.page-header {
  padding-bottom: (($line-height-computed / 2) - 1);
  margin: ($line-height-computed * 2) 0 $line-height-computed;
  border-bottom: 1px solid $page-header-border-color;
}


// Lists
// -------------------------

// Unordered and Ordered lists
ul,
ol {
  margin-top: 0;
  margin-bottom: ($line-height-computed / 2);
  ul,
  ol {
    margin-bottom: 0;
  }
}

// List options

// Unstyled keeps list items block level, just removes default browser padding and list-style
.list-unstyled {
  padding-left: 0;
  list-style: none;
}

// Inline turns list items into inline-block
.list-inline {
  @extend .list-unstyled;
  margin-left: -5px;

  > li {
    display: inline-block;
    padding-left: 5px;
    padding-right: 5px;
  }
}

// Description Lists
dl {
  margin-top: 0; // Remove browser default
  margin-bottom: $line-height-computed;
}
dt,
dd {
  line-height: $line-height-base;
}
dt {
  font-weight: bold;
}
dd {
  margin-left: 0; // Undo browser default
}

// Horizontal description lists
//
// Defaults to being stacked without any of the below styles applied, until the
// grid breakpoint is reached (default of ~768px).

.dl-horizontal {
  dd {
    @include clearfix(); // Clear the floated `dt` if an empty `dd` is present
  }

  @media (min-width: $grid-float-breakpoint) {
    dt {
      float: left;
      width: ($component-offset-horizontal - 20);
      clear: left;
      text-align: right;
      @include text-overflow();
    }
    dd {
      margin-left: $component-offset-horizontal;
    }
  }
}


// Misc
// -------------------------

// Abbreviations and acronyms
abbr[title],
// Add data-* attribute to help out our tooltip plugin, per https://github.com/twbs/bootstrap/issues/5257
abbr[data-original-title] {
  cursor: help;
  border-bottom: 1px dotted $abbr-border-color;
}
.initialism {
  font-size: 90%;
  text-transform: uppercase;
}

// Blockquotes
blockquote {
  padding: ($line-height-computed / 2) $line-height-computed;
  margin: 0 0 $line-height-computed;
  font-size: $blockquote-font-size;
  border-left: 5px solid $blockquote-border-color;

  p,
  ul,
  ol {
    &:last-child {
      margin-bottom: 0;
    }
  }

  // Note: Deprecated small and .small as of v3.1.0
  // Context: https://github.com/twbs/bootstrap/issues/11660
  footer,
  small,
  .small {
    display: block;
    font-size: 80%; // back to default font-size
    line-height: $line-height-base;
    color: $blockquote-small-color;

    &:before {
      content: '\2014 \00A0'; // em dash, nbsp
    }
  }
}

// Opposite alignment of blockquote
//
// Heads up: `blockquote.pull-right` has been deprecated as of v3.1.0.
.blockquote-reverse,
blockquote.pull-right {
  padding-right: 15px;
  padding-left: 0;
  border-right: 5px solid $blockquote-border-color;
  border-left: 0;
  text-align: right;

  // Account for citation
  footer,
  small,
  .small {
    &:before { content: ''; }
    &:after {
      content: '\00A0 \2014'; // nbsp, em dash
    }
  }
}

// Quotes
blockquote:before,
blockquote:after {
  content: "";
}

// Addresses
address {
  margin-bottom: $line-height-computed;
  font-style: normal;
  line-height: $line-height-base;
}
<?php }
}
