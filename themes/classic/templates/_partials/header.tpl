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
                <a href="#" class="shw-crt"><i class="material-icons shopping-cart cust-icart">shopping_cart</i> <span class="txt-ext">VER CARRITO</span>
                    <span class="cart-products-count cust-spin">0</span>
                </a>
                <div class="boxcard-minicart out-boxcard-minicart">
                    <div class="cont-boscard-mincrt">
                        <a class="cls-boscard-mincrt">Cerrar</a>
                        <h2 class="tit-boscard-mincrt">Resumen Carrito</h2>
                        <div class="box-ordinf">
                            
                            

                            <section id="js-checkout-summary" class="card js-cart" data-refresh-url="{$urls.pages.cart}?ajax=1&action=refresh">
                                <div class="card-block cont-smm-cust">
                              
                                  {block name='cart_summary_products'}
                                    <div class="cart-summary-products">
                              
                                      {block name='cart_summary_product_list'}
                                        <div class="" id="cart-summary-product-list">
                                          <ul class="media-list">
                                            {foreach from=$cart.products item=product}
                                              <li class="lst-itm-prodcrt">{include file='checkout/_partials/cart-summary-product-line.tpl' product=$product}</li>
                                            {/foreach}
                                          </ul>
                                        </div>
                                      {/block}
                                    </div>
                                  {/block}
                              
                                  {block name='cart_summary_subtotals'}
                                    {foreach from=$cart.subtotals item="subtotal"}
                                      {if $subtotal && $subtotal.type !== 'tax'}
                                        <div class="cart-summary-line cart-summary-subtotals" id="cart-subtotal-{$subtotal.type}">
                                          <span class="label">{$subtotal.label}</span>
                                          <span class="value">{$subtotal.value}</span>
                                        </div>
                                      {/if}
                                    {/foreach}
                                  {/block}
                              
                                </div>
                              
                                {block name='cart_summary_voucher'}
                                  {include file='checkout/_partials/cart-voucher.tpl'}
                                {/block}

                                <a href="" class="">Ver carrito</a>
                                <a href="" class="">Seguir comprando</a>
                                <a href="" class="">Finalizar compra</a>
                              
                              </section>


                        </div>
                        <div class="foot-boxcard-mncrt">
                            RECUERDA QUE LAS COMPRAS MÍNIMAS DEBEN SER DE $ 400.000 COP EN COLOMBIA Y 600 USD FUERA DE COLOMBIA, EXCEPTO MÉXICO QUE ES DE 1000 USD.
                        </div>
                    </div>
                </div>
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


<div class="box-cont-polg">
        <div class="lnks-optnls"><a href="{$urls.pages.cart}">carrito</a> 
        <a href="{$urls.pages.history}">history</a>
        <a href="{$urls.pages.my_account}"> cuenta</a>
        <a href="{$urls.pages.order_confirmation}">order confirm</a>
        <a href="{$urls.pages.order}">order</a>
        <a href="{$urls.pages.register}">registro</a>
        <a href="{$urls.pages.order_login}">login</a>
    </div>
    <div class="cont-pop-logn">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-left col-infsng">
                <div class="card-inf-popsgn">
                    <h2>INICIAR SESIÓN</h2>
                    <section class="login-form">
                            {block name='login_form'}

                            {block name='login_form_errors'}
                              {include file='_partials/form-errors.tpl' errors=$errors['']}
                            {/block}
                          
                            <form id="login-form" action="{block name='login_form_actionurl'}{$action}{/block}" method="post">
                          
                              
                          
                              {block name='login_form_footer'}
                                <footer class="form-footer text-sm-center clearfix">
                                  <input type="hidden" name="submitLogin" value="1">
                                  {block name='form_buttons'}
                                    <a class="lnk-log-blank" href="{$urls.pages.my_account}">Entrar</a>
                                  {/block}
                                </footer>
                              {/block}

                              <section class="secc-login-form">
                                    {block name='login_form_fields'}
                                      {foreach from=$formFields item="field"}
                                        {block name='form_field'}
                                          {form_field field=$field}
                                        {/block}
                                      {/foreach}
                                    {/block}
                                    <div class="forgot-password">
                                      <a href="{$urls.pages.password}" rel="nofollow" class="forgt-passwrd">
                                        Olvide mi contraseña
                                      </a>
                                      <a href="{$urls.pages.register}" class="regstr-cslnk">
                                        Aún no estoy registrado
                                      </a>
                                    </div>
                                  </section>
                          
                            </form>
                          {/block}
                    </section>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 hidden-sm hidden-xs col-right col-imgsng">
                <figure style="margin: 0px;">
                    <img src="{$urls.img_ps_url}sign-in.jpg">
                    <figcaption><h4>Babalú Fashion</h4><p>Prendas hechas con el mejor talento Colombiano</p></figcaption>
                </figure>
            </div>
        </div>
        <a class="cls-pooplgn">
            <img src="{$urls.img_ps_url}x-icon.png">
        </a>
    </div>
</div>
