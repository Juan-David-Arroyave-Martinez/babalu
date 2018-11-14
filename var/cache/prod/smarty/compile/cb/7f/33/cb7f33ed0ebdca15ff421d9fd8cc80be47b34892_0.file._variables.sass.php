<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:36
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/modules/_variables.sass' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec7980bcc7b4_49497053',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb7f33ed0ebdca15ff421d9fd8cc80be47b34892' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/modules/_variables.sass',
      1 => 1542223691,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec7980bcc7b4_49497053 (Smarty_Internal_Template $_smarty_tpl) {
?>// PrestaShop Admin Theme Colors
$main-color: #363A41 !default
$primary-color: $blueSkype !default
$secondary-color: $greenPrestashop !default
$bg-content-color: #EFF1F2 !default

$contrasted-dark-default: #333
$contrasted-light-default: white
$contrasted-lightness-threshold: 10%

$bg-page-head-color : $secondary-color
$bg-panel-heading-color: hsl(hue($secondary-color), 10, 90)

$badge-notif-color: $greenPrestashop
$brand-addons: $pinkPrestashop

$font-family-mono: 'Droid Sans Mono', Helvetica, Arial, sans-serif

// FontAwesome icons
$icon-font-family: 'FontAwesome'
$fa-css-prefix: icon
$icon-size-base: 14px

// Tooltips
$tooltip-opacity: 1
$tooltip-bg: #555
$tooltip-max-width: 250px

// Bootstrap variables
$gray-darker: lighten(#000, 13.5%)  //#222
$gray-dark: lighten(#000, 20%)  //#333
$gray: lighten(#000, 33.5%)  //#555
$gray-light: lighten(#000, 60%)  //#999
$gray-lighter: lighten(#000, 93.5%)  //#eee

// Brand colors
$brand-primary: $primary-color !default

$brand-success: #72C279 !default
$brand-warning: #fbbb22 !default
$brand-danger: #E08F95 !default
$brand-info: #25b9d7 !default

$alert-success-bg:            lighten($brand-success, 30%) !default
$alert-success-text:          $brand-success !default
$alert-success-border:        $brand-success !default

$alert-info-bg:               #DCF4F9 !default
$alert-info-text:             #1e94ab !default
$alert-info-border:           $brand-info !default

$alert-warning-bg:            #FFF3D7 !default
$alert-warning-text:          #D2A63C !default
$alert-warning-border:        #D2A63C !default

$alert-danger-bg:             #FFE2E4 !default
$alert-danger-text:           #D27C82 !default
$alert-danger-border:         $brand-danger !default

// Sidebar
$sidebar-menu-color: #BEBEBE !default
$sidebar-menu-active-color: white !default
$sidebar-menu-hover-color: white !default
$sidebar-menu-bg-hover-color: #282b30

// Toolbar
$toolbar-buttons-color: #2eacce
$toolbar-buttons-hover-color: #40c9ed

// Scaffolding
$body-bg: $bg-content-color
$text-color: $gray

// Typography
$url-font-content: "//fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700" !default
$url-font-content-name : 'Open Sans' !default
$url-font-headings: "//fonts.googleapis.com/css?family=Ubuntu+Condensed" !default
$url-font-headings-name: 'Ubuntu Condensed' !default
$font-family-sans-serif: $url-font-content-name, Helvetica, Arial, sans-serif
$headings-font-family: $url-font-headings-name, Helvetica, Arial, sans-serif
$font-size-base: 12px
$line-height-base: 1.428571429
$line-height-computed: floor($font-size-base * $line-height-base)
$headings-font-weight: 400

// Components
$padding-base-vertical: 6px
$padding-base-horizontal: 8px
$border-radius-base: 3px

// Tables

// $table-bg: transparent  overall background-color
$table-bg-accent: #f9f9f9  //for striping
$table-bg-hover: #EDF7FB

// Buttons
$btn-default-color: $main-color
$btn-default-bg: white
$btn-default-border: #DEDEDE
$btn-primary-color: $btn-default-color
$btn-primary-bg: #2eacce
$btn-primary-border: #2eacce

// Forms
$input-bg: #F5F8F9
$input-height-base: ($line-height-computed + ($padding-base-vertical * 2) + 2)
$input-group-addon-bg: #F5F8F9
$input-border: #C7D6DB
// Dropdowns
$dropdown-link-hover-color: white
$dropdown-link-hover-bg: $brand-primary

// Grid system
$grid-gutter-width: 10px  // Navbar

// Basics of a navbar
$navbar-height: 40px  // Wells
$well-bg: #FCFDFE

// Media queries breakpoints
// Tiny screen / phone
$screen-tiny: 480px
$screen-phone: $screen-tiny

// Small screen / tablet
$screen-small: 768px
$screen-tablet: $screen-small

// Medium screen / desktop
$screen-medium: 992px
$screen-desktop: $screen-medium

// So media queries don't overlap when required, provide a maximum
$screen-small-max: ($screen-medium - 1)
$screen-tablet-max: $screen-small-max

// Large screen / wide desktop
$screen-large: 1200px
$screen-large-desktop: $screen-large

// Container sizes
// Small screen / tablet
$container-tablet: 728px

// Medium screen / desktop
$container-desktop: 940px

// Large screen / wide desktop
$container-large-desktop: 1170px  //light

// Menu
$gray-dark-menu: #363a41
$widthSidebarNav: 210px
$paddingLeftPageClosed: 4.0625rem
$paddingLeftMobile: 0.625rem
$widthSidebarSubmenu: 200px
$menu-item-size: 34px
$min-height: 950px
$gray-dark-text: #bebebe
$gray-dark-text-hover: #ffffff
$size-navbar-width: 13.13rem
$size-navbar-width-mini: 3.125rem
$size-header-height: 2.5rem
$header-mobile-padding-y: .625rem
$medium-gray: #6c868e
$gray-medium: $medium-gray

// use rems to ensure homogeneity on all zoom scales
// xs: 0, sm: 544px, md: 768px, lg: 1024px, xl: 1300px
$grid-breakpoints: (xs: 0, sm: 34em, md: 48em, lg: 64em, xl: 81.25em)
<?php }
}