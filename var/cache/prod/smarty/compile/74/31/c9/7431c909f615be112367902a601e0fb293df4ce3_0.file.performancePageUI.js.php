<?php
/* Smarty version 3.1.32, created on 2018-11-14 12:37:39
  from '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/js/bundle/admin_parameters/performancePageUI.js' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec7983517719_78249419',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7431c909f615be112367902a601e0fb293df4ce3' => 
    array (
      0 => '/home4/makemark/public_html/makemark/babalu_prestashop/admin/themes/default/js/bundle/admin_parameters/performancePageUI.js',
      1 => 1542223690,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec7983517719_78249419 (Smarty_Internal_Template $_smarty_tpl) {
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
var PerformancePageUI = {
    displaySmartyCache: function() {
        var CACHE_ENABLED = '1';
        var smartyCacheSelected = document.querySelector('input[name="form[smarty][cache]"]:checked');
        var smartyCacheOptions = document.querySelectorAll('.smarty-cache-option');
        if (smartyCacheSelected && smartyCacheSelected.value === CACHE_ENABLED) {
          for(var i = 0; i < smartyCacheOptions.length; i++) {
            smartyCacheOptions[i].style.display = 'block';
          }

          return;
        }

      for(var i = 0; i < smartyCacheOptions.length; i++) {
        smartyCacheOptions[i].style.display = 'none';
      }
    },
    displayCacheSystems: function() {
        var CACHE_ENABLED = '1';
        var cacheEnabledInput = document.querySelector('input[name="form[caching][use_cache]"]:checked');
        var cachingElements = document.getElementsByClassName('memcache');

        if(cacheEnabledInput.value === CACHE_ENABLED) {
            for (var i = 0; i < cachingElements.length; i++) {
                cachingElements[i].style.display = "block";
            }
            return;
        }

        for (var i = 0; i < cachingElements.length; i++) {
            cachingElements[i].style.display = "none";
        }
    },
    displayMemcacheServers: function() {
        var CACHE_ENABLED = '1';
        var cacheEnabledInput = document.querySelector('input[name="form[caching][use_cache]"]:checked');
        var cacheSelected = document.querySelector('input[name="form[caching][caching_system]"]:checked');
        var memcacheServersListBlock = document.getElementById('servers-list');
        var newServerBtn = document.getElementById('new-server-btn');
        var isMemcache = cacheSelected && (cacheSelected.value === "CacheMemcache" || cacheSelected.value === "CacheMemcached");

        if (isMemcache && cacheEnabledInput.value === CACHE_ENABLED) {
            memcacheServersListBlock.style.display = "block";
            newServerBtn.style.display = "block";

            return;
        }

        memcacheServersListBlock.style.display = "none";
        newServerBtn.style.display = "none";
    }
};

/**
 * Animations on form values.
 */
window.addEventListener('load', function() {
    PerformancePageUI.displaySmartyCache();
    PerformancePageUI.displayCacheSystems();
    PerformancePageUI.displayMemcacheServers();
});

var cacheSystemInputs = document.querySelectorAll('input[type=radio]');
var length = cacheSystemInputs.length;

while(length--) {
    cacheSystemInputs[length].addEventListener('change', function(e) {
        var name = e.target.getAttribute('name');
        if ('form[caching][use_cache]' === name) {
            return PerformancePageUI.displayCacheSystems();
        }
        if ('form[smarty][cache]' === name) {
            return PerformancePageUI.displaySmartyCache();
        }
        if ('form[caching][caching_system]' === name) {
            return PerformancePageUI.displayMemcacheServers();
        }
    });
}

<?php }
}
