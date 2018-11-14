<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:39
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/js/bundle/category-tree.js' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec798340f641_33634445',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '395528e24790a6940207c0b3df3ccebe518737cf' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/js/bundle/category-tree.js',
      1 => 1542223690,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec798340f641_33634445 (Smarty_Internal_Template $_smarty_tpl) {
?>/**
 * 2007-2018 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2018 PrestaShop SA
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */

(function ($) {

  $.fn.categorytree = function (settings) {

    var isMethodCall = (typeof settings === 'string'), // is this a method call like $().categorytree("unselect")
      returnValue = this;
    // if a method call execute the method on all selected instances
    if (isMethodCall) {
      switch (settings) {
        case 'unselect':
          this.find('.radio > label > input:radio').prop('checked', false);
          // TODO: add a callback method feature?
          break;
        case 'unfold':
          this.find('ul').show();
          this.find('li').has('ul').addClass('less');
          break;
        case 'fold':
          this.find('ul ul').hide();
          this.find('li').has('ul').addClass('more');
          break;
        default:
          throw 'Unknown method';
      }
    }
    // initialize tree
    else {
        var clickHandler = function (event) {
          var $ui = $(event.target);
          if ($ui.attr('type') === 'radio' || $ui.attr('type') === 'checkbox') {
            return;
          } else {
            event.stopPropagation();
          }

          if ($ui.next('ul').length === 0) {
            $ui = $ui.parent();
          }

          $ui.next('ul').toggle();
          if ($ui.next('ul').is(':visible')) {
            $ui.parent('li').removeClass().addClass('less');
          } else {
            $ui.parent('li').removeClass().addClass('more');
          }

          return false;
    };
      this.find('li > ul').each(function (i, item) {
        var $inputWrapper = $(item).prev('div');
        $inputWrapper.on('click', clickHandler);
        $inputWrapper.find('label').on('click', clickHandler);

        if ($(item).is(':visible')) {
          $(item).parent('li').removeClass().addClass('less');
        } else {
          $(item).parent('li').removeClass().addClass('more');
        }
      });
    }
    // return the jquery selection (or if it was a method call that returned a value - the returned value)
    return returnValue;
  };
})(jQuery);
<?php }
}
