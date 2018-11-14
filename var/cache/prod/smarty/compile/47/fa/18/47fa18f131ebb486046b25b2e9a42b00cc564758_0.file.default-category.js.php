<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:39
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/js/bundle/product/default-category.js' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec79835f7525_05359178',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47fa18f131ebb486046b25b2e9a42b00cc564758' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/js/bundle/product/default-category.js',
      1 => 1542223690,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec79835f7525_05359178 (Smarty_Internal_Template $_smarty_tpl) {
?>/**
 * Default category management
 */
var defaultCategory = (function() {
  var defaultCategoryForm = $('#form_step1_id_category_default');
  return {
    'init': function () {
      /** Populate category tree with the default category **/
      var defaultCategoryId = defaultCategoryForm.find('input:checked').val();
      productCategoriesTags.checkDefaultCategory(defaultCategoryId);

      /** Hide the default form, if javascript disabled it will be visible and so we
       * still can select a default category using the form
       */
      defaultCategoryForm.hide();
    },

    /**
     * Check the radio bouton with the selected value
     */
    'check': function(value) {
      defaultCategoryForm.find('input[value="'+value+'"]').prop('checked', true);
    },

    'isChecked': function(value) {
      return defaultCategoryForm.find('input[value="'+value+'"]').is(':checked');
    },

    /**
     * When the category selected as a default is unselected
     * The default category MUST be a selected category
     */
    'reset': function() {
      var firstInput = defaultCategoryForm.find('input:first-child');
      firstInput.prop('checked', true);
      var categoryId = firstInput.val();
      productCategoriesTags.checkDefaultCategory(categoryId);
    }
  };
})();

BOEvent.on("Product Default category Management started", function initDefaultCategoryManagement() {
  defaultCategory.init();
}, "Back office");
<?php }
}
