<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:39
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/js/bundle/modal-confirmation.js' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec79833f2966_45335855',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd499af51528c459e0576b8a8d05945e6ba437482' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/js/bundle/modal-confirmation.js',
      1 => 1542223690,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec79833f2966_45335855 (Smarty_Internal_Template $_smarty_tpl) {
?>/**
 * modal confirmation management
 */
var modalConfirmation = (function() {
  var modal = $('#confirmation_modal');

  if(!modal) {
    throw new Error('Modal confirmation is not available');
  }

  var actionsCallbacks = {
    onCancel: function() {
      console.log('modal canceled');
      return;
    },
    onContinue: function() {
      console.log('modal continued');
      return;
    }
  };

  modal.find('button.cancel').click(function() {
    if (typeof actionsCallbacks.onCancel === 'function') {
      actionsCallbacks.onCancel();
    }
    modalConfirmation.hide();
  });

  modal.find('button.continue').click(function() {
    if (typeof actionsCallbacks.onContinue === 'function') {
      actionsCallbacks.onContinue();
    }
    modalConfirmation.hide();
  });
  return {
    'init': function init() {},
    'create': function create(content, title, callbacks) {
      if(title != null){
        modal.find('.modal-title').html(title);
      }
      if(content != null){
        modal.find('.modal-body').html(content);
      }

      actionsCallbacks = callbacks;
      return this;
    },
    'show': function show() {
      modal.modal('show');
    },
    'hide': function hide() {
      modal.modal('hide');
    }
  };
})();

BOEvent.on("Modal confirmation started", function initModalConfirmationSystem() {
  modalConfirmation.init();
}, "Back office");
<?php }
}
