<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:36
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/admin-theme.sass' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec7980b8b5b6_51871849',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '251f8f91895b41f767f6920e54b282d4aa621dc0' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/sass/admin-theme.sass',
      1 => 1542223692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec7980b8b5b6_51871849 (Smarty_Internal_Template $_smarty_tpl) {
?>// Make sure the charset is set appropriately
@charset "UTF-8"
//Compass is required to pre-compile this stylesheets to .css
@import "~bourbon/app/assets/stylesheets/bourbon"

@import "modules/colors"
@import "modules/variables"
@import "modules/mixins"

@import "vendor/bi-app/bi-app-ltr"

@import "vendor/animate"
@import "vendor/font-awesome/font-awesome"

//Bootstrap Core : Variables + Mixins + Reset + Print
@import "vendor/bootstrap-sass/variables"
@import "vendor/bootstrap-sass/mixins"
@import "vendor/bootstrap-sass/normalize"
//@import "vendor/bootstrap-sass/print"

//import fonts
@import url($url-font-content)
@import url($url-font-headings)

//Bootstrap's rules applied only on div#content.bootstrap, nav.bootstrap, header.bootstrap, footer.bootstrap
.bootstrap
	//Core CSS
	@import "vendor/bootstrap-sass/scaffolding"
	@import "vendor/bootstrap-sass/type"
	@import "vendor/bootstrap-sass/code"
	@import "vendor/bootstrap-sass/grid"
	@import "vendor/bootstrap-sass/tables"
	@import "vendor/bootstrap-sass/forms"
	@import "vendor/bootstrap-sass/buttons"
	//Components
	@import "vendor/bootstrap-sass/component-animations"
	//@import "vendor/bootstrap-sass/glyphicons"
	@import "vendor/bootstrap-sass/dropdowns"
	@import "vendor/bootstrap-sass/button-groups"
	@import "vendor/bootstrap-sass/input-groups"
	@import "vendor/bootstrap-sass/navs"
	@import "vendor/bootstrap-sass/navbar"
	@import "vendor/bootstrap-sass/breadcrumbs"
	@import "vendor/bootstrap-sass/pagination"
	@import "vendor/bootstrap-sass/pager"
	@import "vendor/bootstrap-sass/labels"
	@import "vendor/bootstrap-sass/badges"
	//@import "vendor/bootstrap-sass/jumbotron"
	@import "vendor/bootstrap-sass/thumbnails"
	@import "vendor/bootstrap-sass/alerts"
	@import "vendor/bootstrap-sass/progress-bars"
	@import "vendor/bootstrap-sass/media"
	@import "vendor/bootstrap-sass/list-group"
	@import "vendor/bootstrap-sass/panels"
	@import "vendor/bootstrap-sass/wells"
	@import "vendor/bootstrap-sass/close"
	// Components w/ JavaScript
	@import "vendor/bootstrap-sass/tooltip"
	@import "vendor/bootstrap-sass/popovers"
	//Utility classes
	@import "vendor/bootstrap-sass/utilities"
	@import "vendor/bootstrap-sass/responsive-utilities"

//Moved out from .bootstrap prefix since modal's javascript appends the background overlay just before /body.
@import "vendor/bootstrap-sass/modals"
@import "vendor/bootstrap-sass/carousel"

//PrestaShop Elements
@import "partials/content"
@import "partials/header"
@import "partials/footer"
@import "partials/nav"
@import "partials/icons"

.bootstrap
	//Partials
	@import "partials/commons"
	@import "partials/tables"
	@import "partials/tree"
	@import "partials/forms"
	@import "partials/kpi"
	@import "partials/switch"
	@import "partials/toolbar"
	@import "partials/date-range-picker"
	@import "partials/multistore"
	@import "partials/product"

	//Controllers
	@import "controllers/carrier-wizard"
	@import "controllers/dashboard"
	@import "controllers/login"
	@import "controllers/modules"
	@import "controllers/search"
	@import "controllers/translations"
	@import "controllers/customer-thread"
	@import "controllers/themes"
	@import "controllers/order"
	@import "controllers/products"

//Plug-ins
@import "partials/tinymce"
@import "partials/growl"
@import "partials/chosen"
@import "partials/ladda"
@import "partials/date-picker"
@import "partials/select2"

//Backward compatibility
@import "partials/backward"

//Print support
@import "partials/print"
<?php }
}
