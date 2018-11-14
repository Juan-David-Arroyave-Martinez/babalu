<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:36
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/modules/_mixins.sass' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec7980bb4618_70336169',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a30e6568d917d99f953f7f76895c9a9ce8c1684c' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/modules/_mixins.sass',
      1 => 1542223691,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec7980bb4618_70336169 (Smarty_Internal_Template $_smarty_tpl) {
?>// Avatar

@mixin avatar($size, $radius)
    height: $size
    width: $size
    display: inline-block
    text-align: center
    overflow: hidden
    -webkit-border-radius: $radius
    border-radius: $radius
    img
        width: 100%
        height: 100%
    i
        font-size: $size/3*2
        line-height: $size

// Breakpoint viewport sizes and media queries.
//
// Breakpoints are defined as a map of (name: minimum width), order from small to large:
//
//    (xs: 0, sm: 576px, md: 768px, lg: 992px, xl: 1200px)
//
// The map defined in the `$grid-breakpoints` global variable is used as the `$breakpoints` argument by default.

// Name of the next breakpoint, or null for the last breakpoint.
//
//    >> breakpoint-next(sm)
//    md
//    >> breakpoint-next(sm, (xs: 0, sm: 576px, md: 768px, lg: 992px, xl: 1200px))
//    md
//    >> breakpoint-next(sm, $breakpoint-names: (xs sm md lg xl))
//    md
@function breakpoint-next($name, $breakpoints: $grid-breakpoints, $breakpoint-names: map-keys($breakpoints))
    $n: index($breakpoint-names, $name)

    @return if($n < length($breakpoint-names), nth($breakpoint-names, $n + 1), null)

// Minimum breakpoint width. Null for the smallest (first) breakpoint.
//
//    >> breakpoint-min(sm, (xs: 0, sm: 576px, md: 768px, lg: 992px, xl: 1200px))
//    576px
@function breakpoint-min($name, $breakpoints: $grid-breakpoints)
    $min: map-get($breakpoints, $name)

    @return if($min != 0, $min, null)

// Maximum breakpoint width. Null for the largest (last) breakpoint.
// The maximum value is calculated as the minimum of the next one less 0.1.
//
//    >> breakpoint-max(sm, (xs: 0, sm: 576px, md: 768px, lg: 992px, xl: 1200px))
//    767px
@function breakpoint-max($name, $breakpoints: $grid-breakpoints)
    $next: breakpoint-next($name, $breakpoints)

    @return if($next, breakpoint-min($next, $breakpoints) - .0625em, null)

// Returns a blank string if smallest breakpoint, otherwise returns the name with a dash infront.
// Useful for making responsive utilities.
//
//    >> breakpoint-infix(xs, (xs: 0, sm: 576px, md: 768px, lg: 992px, xl: 1200px))
//    ""  (Returns a blank string)
//    >> breakpoint-infix(sm, (xs: 0, sm: 576px, md: 768px, lg: 992px, xl: 1200px))
//    "-sm"
@function breakpoint-infix($name, $breakpoints: $grid-breakpoints)
    @return if(breakpoint-min($name, $breakpoints) == null, "", "-#<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
")

// Media of at least the minimum breakpoint width. No query for the smallest breakpoint.
// Makes the @content apply to the given breakpoint and wider.
=media-breakpoint-up($name, $breakpoints: $grid-breakpoints)
    $min: breakpoint-min($name, $breakpoints)

    @if $min
        @media (min-width: $min)
            @content
    @else
        @content

// Media of at most the maximum breakpoint width. No query for the largest breakpoint.
// Makes the @content apply to the given breakpoint and narrower.
=media-breakpoint-down($name, $breakpoints: $grid-breakpoints)
    $max: breakpoint-max($name, $breakpoints)

    @if $max
        @media (max-width: $max)
            @content
    @else
        @content

// Media that spans multiple breakpoint widths.
// Makes the @content apply between the min and max breakpoints
=media-breakpoint-between($lower, $upper, $breakpoints: $grid-breakpoints)
    +media-breakpoint-up($lower, $breakpoints)
        +media-breakpoint-down($upper, $breakpoints)
            @content

// Media between the breakpoint's minimum and maximum widths.
// No minimum for the smallest breakpoint, and no maximum for the largest one.
// Makes the @content apply only to the given breakpoint, not viewports any wider or narrower.
=media-breakpoint-only($name, $breakpoints: $grid-breakpoints)
    +media-breakpoint-between($name, $name, $breakpoints)
        @content
<?php }
}
