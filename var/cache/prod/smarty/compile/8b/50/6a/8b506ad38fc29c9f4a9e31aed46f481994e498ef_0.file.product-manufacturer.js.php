<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:39
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/js/bundle/product/product-manufacturer.js' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec79836bde96_07921674',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b506ad38fc29c9f4a9e31aed46f481994e498ef' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/js/bundle/product/product-manufacturer.js',
      1 => 1542223690,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec79836bde96_07921674 (Smarty_Internal_Template $_smarty_tpl) {
?>/**
 * Manufacturer management
 */
var manufacturer = (function() {
  return {
    'init': function() {
      var addButton = $('#add_brand_button');
      var resetButton = $('#reset_brand_product');
      var manufacturerContent = $('#manufacturer-content');
      var selectManufacturer = $('#form_step1_id_manufacturer');

      /** Click event on the add button */
      addButton.on('click', function(e) {
        e.preventDefault();
        manufacturerContent.removeClass('hide');
        addButton.hide();
      });
      resetButton.on('click', function(e) {
        e.preventDefault();
        modalConfirmation.create(translate_javascripts['Are you sure to delete this?'], null, {
          onContinue: function(){
            manufacturerContent.addClass('hide');
            selectManufacturer.val('').trigger('change');
            addButton.show();
          }
        }).show();
      });
    }
  };
})();

BOEvent.on("Product Manufacturer Management started", function initManufacturerManagement() {
  manufacturer.init();
}, "Back office");
<?php }
}
