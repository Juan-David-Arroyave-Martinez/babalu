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
{block name='header_banner'}
<div class="babalu-header">
    <div class="col-sm-2 col-md-2 babalu-logo">
        <h1>
            <a href="{$urls.base_url}">
                <img class="logo img-responsive" src="{$shop.logo}" alt="{$shop.name}">
            </a>
        </h1>
    </div>
    <div class="col-sm-10 col-md-10 pad-0">
        <div class="col-md-12 babalu-top-nav">
            <div id="search_widget" class="search-widget" data-search-controller-url="{$search_controller_url}">
                <form method="get" action="{$search_controller_url}">
                    <input type="hidden" name="controller" value="search">
                    <input type="text" name="s" value="{$search_string}" placeholder="{l s='Search our catalog' d='Shop.Theme.Catalog'}" aria-label="{l s='Search' d='Shop.Theme.Catalog'}">
                    <button type="submit">
                        <i class="material-icons search">&#xE8B6;</i>
                        <span class="hidden-xl-down">{l s='Search' d='Shop.Theme.Catalog'}</span>
                    </button>
                </form>
            </div>
            <ul class="slct-lang">
                <li>ESPAÑOL <span class="cont-dwn"><img src="{$urls.img_ps_url}/custom/down-arrow.svg" class="icc-dwn"></span>
                    <ul class="lst-sublang">
                        <li><a href="#">ESPAÑOL</a></li>
                        <li><a href="#">ENGLISH</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="slct-lang slct-currt">
                <li><span class="txt-ext">PESOS COLOMBIANOS</span><span class="txt-short">COP</span> <span class="cont-dwn"><img src="{$urls.img_ps_url}/custom/down-arrow.svg" class="icc-dwn"></span>
                    <ul class="lst-sublang">
                        <li><a href="#"><span class="txt-ext">PESOS COLOMBIANOS</span><span class="txt-short">COP</span></a></li>
                        <li><a href="#">VALORES EN DÓLARES</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="lst-log">
                <li>
                    <a href="#">INICIAR SESIÓN</a>
                </li>
            </ul>
            <ul class="lst-regs">
                <li><a href="#">REGISTRARME</a></li>
            </ul>
        </div>
        <div class="col-sm-12 col-md-12 babalu-top-menu">
            <ul class="left-menu">
                <li><a href="#">INICIO</a></li>
                <li><a href="#">VENTAS MAYORISTAS</a></li>
                <li><a href="{$urls.base_url}es/3-outlet-mayorista">OUTLET MAYORISTA</a></li>
                <li><a href="#">VENTAS MAYORISTAS INTERNACIONALES</a></li>
                <li><a href="#">VENTAS POR UNIDAD</a></li>
            </ul>
            <div class="minicart-wrapper">
                <a href="#" class="shw-crt"><i class="material-icons shopping-cart cust-icart">shopping_cart</i> <span class="txt-ext">VER CARRITO</span></a>
                <span class="cart-products-count cust-spin">0</span>
            </div>
            <a href="#" class="search-mobl"><img src="{$urls.img_ps_url}/custom/msc-searcher.svg"></a>
            <button type="button" class="toggle-main-menu pull-left navbar-toggle collapsed srch-nav-mob"><div class="h-icon"><div></div><div></div><div></div></div><span>Menú</span></button>
        </div>
        <div class="white-buttons">
            <ul>
                <li>
                    <a href="#">Ventas por mayor</a>
                </li>
                <li>
                    <a href="#">Ventas Internacionales</a>
                </li>
                <li>
                    <a href="#">Ventas por unidad</a>
                </li>
                <li>
                    <a href="#">Outlet Mayorista</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="top-container"> 
    <div class="widget block block-static-block">
        <div class="hidden-xs hidden-sm">
            <div class="catalog-sales-bar center">
                <div class="cont catalog-sales">
                    <div class="center text">Novedosa Venta por Catálogo</div>
                    <div class="center cont-button">
                        <div class="center button">¡Clic aquí!</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{/block}




