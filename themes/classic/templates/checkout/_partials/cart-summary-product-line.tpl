{**
 * 2007-2018 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
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
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
{block name='cart_summary_product_line'}
  <div class="row-list">
    <div class="col col-md-1">
        <a href="{$product.url}" title="{$product.name}" class="cont-lnk-immcrt">
          <img class="media-object img-lnk-immcrt" src="{$product.cover.small.url}" alt="{$product.name}">
        </a>
    </div>
    <div class="col col-md-2 list-item-name">
      <span class="product-name">{$product.reference}</span>
    </div>
    <div class="col col-md-4">
      <ul>
        <li class="lst-itm-clrtl">
          Color-Talla
          <ul class="lst-contim-clrtl">
              {foreach from=$product.attributes key="attribute" item="value"}
              <li>
                <span class="label lbl-tls-cart">{$attribute}</span>
                <span class="value lbl-fls-cart">{$value}</span>
              </li>
              {/foreach}
          </ul>
        </li>
      </ul>
      
    </div>
    <div class="col col-md-2">
      <span class="product-quantity cnt-lbl-lstcr">{$product.quantity}</span>
    </div>
    <div class="col col-md-3">
      <span itemprop="price" class="price prec-cust-lscrt">${$product.price}.000</span>
    </div>
  </div>
{/block}
