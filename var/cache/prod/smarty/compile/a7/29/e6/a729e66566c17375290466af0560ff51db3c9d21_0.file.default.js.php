<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:39
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/js/bundle/default.js' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec7983469a98_23596431',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a729e66566c17375290466af0560ff51db3c9d21' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/js/bundle/default.js',
      1 => 1542223690,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec7983469a98_23596431 (Smarty_Internal_Template $_smarty_tpl) {
?>/**
 * Default layout instanciation
 */
$(document).ready(function() {
  var $this = $(this);
  var $ajaxSpinner = $('.ajax-spinner');
  $('[data-toggle="tooltip"]').tooltip();
  rightSidebar.init();
  /** spinner loading */
  $this.ajaxStart(function () {
    $ajaxSpinner.show();
  });
  $this.ajaxStop(function () {
    $ajaxSpinner.hide();
  });
  $this.ajaxError(function () {
    $ajaxSpinner.hide();
  });
});

var rightSidebar = (function() {
    return {
        'init': function() {
            $('.btn-sidebar').on('click', function initLoadQuickNav() {
                $('div.right-sidebar-flex').removeClass('col-lg-12').addClass('col-lg-9');

                /** Lazy load of sidebar */
                var url = $(this).data('url');
                var target = $(this).data('target');

                if (url) {
                    rightSidebar.loadQuickNav(url,target);
                }
            });
            $(document).on('hide.bs.sidebar', function(e) {
                $('div.right-sidebar-flex').removeClass('col-lg-9').addClass('col-lg-12');
            });
        },
        'loadQuickNav': function(url, target) {
            /** Loads inner HTML in the sidebar container */
            $(target).load(url, function() {
                $(this).removeAttr('data-url');
                $('ul.pagination > li > a[href]', this).on('click', function(e) {
                    e.preventDefault();
                    rightSidebar.navigationChange($(e.target).attr('href'), $(target));
                });
                $('ul.pagination > li > input[name="paginator_jump_page"]', this).on('keyup', function(e) {
                    if (e.which === 13) { // ENTER
                        e.preventDefault();
                        var val = parseInt($(e.target).val());
                        var limit = $(e.target).attr('pslimit');
                        var url = $(this).attr('psurl').replace(/999999/, (val-1)*limit);
                        rightSidebar.navigationChange(url, $(target));
                    }
                });
            });
        },
        'navigationChange': function(url, sidebar) {
            rightSidebar.loadQuickNav(url, sidebar);
        }
    };
})();

/**
 *  BO Events Handler
 */
var BOEvent = {

    on: function(eventName, callback, context) {

        document.addEventListener(eventName, function(event) {
            if (typeof context !== 'undefined') {
                callback.call(context, event);
            } else {
                callback(event);
            }
        });
    },

    emitEvent: function(eventName, eventType) {
        var _event = document.createEvent(eventType);
        // true values stand for: can bubble, and is cancellable
        _event.initEvent(eventName, true, true);
        document.dispatchEvent(_event);
    }
};
<?php }
}
