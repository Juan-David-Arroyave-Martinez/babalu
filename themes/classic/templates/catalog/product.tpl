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
{extends file=$layout}

{block name='head_seo' prepend}
  <link rel="canonical" href="{$product.canonical_url}">
{/block}

{block name='head' append}
  <meta property="og:type" content="product">
  <meta property="og:url" content="{$urls.current_url}">
  <meta property="og:title" content="{$page.meta.title}">
  <meta property="og:site_name" content="{$shop.name}">
  <meta property="og:description" content="{$page.meta.description}">
  <meta property="og:image" content="{$product.cover.large.url}">
  <meta property="product:pretax_price:amount" content="{$product.price_tax_exc}">
  <meta property="product:pretax_price:currency" content="{$currency.iso_code}">
  <meta property="product:price:amount" content="{$product.price_amount}">
  <meta property="product:price:currency" content="{$currency.iso_code}">
  {if isset($product.weight) && ($product.weight != 0)}
  <meta property="product:weight:value" content="{$product.weight}">
  <meta property="product:weight:units" content="{$product.weight_unit}">
  {/if}
{/block}

{block name='content'}
<style>
    .catalog-sales-bar{
      display: none;
    }
    </style>
  <section id="main" itemscope itemtype="https://schema.org/Product">
    <meta itemprop="url" content="{$product.url}">
    <div class="babalu-product-columns">
      <div class="babalu-product-left">
          <div class="babalu-category-list-fixed affix-top pad-t0">
                
              <ul class="babalu-category-list-ul"><li><a href="https://babalufashion.com/marcas.html" data-category-id="3">Marcas</a></li><ul><li><a href="https://babalufashion.com/marcas/babalu.html" data-category-id="15">Babalú</a></li><li><a href="https://babalufashion.com/marcas/inizio.html" data-category-id="16">Inizio</a></li><li><a href="https://babalufashion.com/marcas/tarrao.html" data-category-id="17">Tarrao</a></li></ul><li><a href="https://babalufashion.com/mujeres.html" data-category-id="4">Mujeres</a></li><ul><li><a href="https://babalufashion.com/mujeres/ropa-deportiva.html" data-category-id="6">Ropa deportiva femenina</a></li><li><a href="https://babalufashion.com/mujeres/linea-ciclismo-femenina.html" data-category-id="136">Línea ciclismo femenina</a></li><li><a href="https://babalufashion.com/mujeres/vestidos-de-bano.html" data-category-id="134">Vestidos de Baño</a></li><li><a href="https://babalufashion.com/mujeres/lingerie.html" data-category-id="7">Lingerie</a></li></ul><li><a href="https://babalufashion.com/hombres.html" data-category-id="8">Hombres</a></li><ul><li><a href="https://babalufashion.com/hombres/ropa-deportiva-masculina.html" data-category-id="9">Ropa deportiva masculina</a></li><li><a href="https://babalufashion.com/hombres/linea-ciclismo-masculina.html" data-category-id="137">Linea ciclismo masculina</a></li><li><a href="https://babalufashion.com/hombres/ropa-interior-microfibra.html" data-category-id="10">Ropa interior microfibra</a></li><li><a href="https://babalufashion.com/hombres/ropa-interior-algodon.html" data-category-id="19">Ropa interior algodón</a></li></ul><li><a href="https://babalufashion.com/ropa-interior-infantil.html" data-category-id="129">Infantil</a></li><ul><li><a href="https://babalufashion.com/ropa-interior-infantil/ropa-interior-nina.html" data-category-id="138">Ropa interior Niña</a></li><li><a href="https://babalufashion.com/ropa-interior-infantil/ropa-interior-nino.html" data-category-id="139">Ropa interior Niño</a></li></ul><li><a href="https://babalufashion.com/otras-categorias.html" data-category-id="11">Otras categorías</a></li><ul><li><a href="https://babalufashion.com/otras-categorias/accesorios.html" data-category-id="12">Accesorios deportivos</a></li><li><a href="https://babalufashion.com/otras-categorias/outlet-mayorista.html" data-category-id="130">Outlet mayorista</a></li><li><a href="https://babalufashion.com/otras-categorias/ver-todos-los-productos.html" data-category-id="131">Ver todos los productos</a></li></ul><li><a href="https://babalufashion.com/nueva-coleccion.html" data-category-id="135">Nueva colección</a></li><ul></ul></ul>
          
          </div>
          <a class="tggl-clmnleft">
            <img class="icc-tggl-clmft" src="{$urls.img_ps_url}controls.svg" alt="">
          </a>
      </div>
      <div class="babalu-product-main">
        <div class="babalu-breadcrumbs-int">
          <div class="previous-next">
            <a href="{$link->getCategoryLink($category->id_category, $category->link_rewrite)|escape:'html':'UTF-8'}" class="btn-vol-cust">Volver</a>
             {if $prev_product}
                <a title="{$prev_product.name}" class="btn btn-default btn-prev-cust" href="{url entity='product' id=$prev_product.id_product}">Anterior</a>
            {/if}
            {if $next_product}
                <a title="{$next_product.name}" class="btn btn-default btn-next-cust" href="{url entity='product' id=$next_product.id_product}">Siguiente</a>
            {/if}
          </div>
          <div class="breadcrumbs-int">
            {block name='breadcrumb'}
              {include file='_partials/breadcrumb.tpl'}
            {/block}
          </div>
        </div>
        <div class="babalu-product-content">
          <div class="product-images">
              {block name='product_cover_thumbnails'}
                {include file='catalog/_partials/product-cover-thumbnails.tpl'}
              {/block}
              <div class="scroll-box-arrows">
                  <i class="material-icons left">&#xE314;</i>
                  <i class="material-icons right">&#xE315;</i>
                </div>
          </div>
          <div class="product-info">
            <h1 class="babalu-product-title">{$product.name}</h1>
            <div class="product-sku-price">
              <div class="product attribute sku">
                REF {$product.reference}
              </div>
            </div>
            <div class="price-box price-final_price">
              <span itemprop="price" class="price gen-pric-prod">${$product.price}</span>
              <span class="regular-price old-pric-int">${$product.regular_price}</span>
            </div>
            <div class="product-info-bottom-description">
              <div class="product-info-main">
                  <div class="product-actions">
                      {block name='product_buy'}
                        <form action="{$urls.pages.cart}" method="post" id="add-to-cart-or-refresh">
                          <input type="hidden" name="token" value="{$static_token}">
                          <input type="hidden" name="id_product" value="{$product.id}" id="product_page_product_id">
                          <input type="hidden" name="id_customization" value="{$product.id_customization}" id="product_customization_id">
        
                          {block name='product_variants'}
                            {include file='catalog/_partials/product-variants.tpl'}
                          {/block}

                          
                          
        
                          {block name='product_pack'}
                            {if $packItems}
                              <section class="product-pack">
                                <p class="h4">{l s='This pack contains' d='Shop.Theme.Catalog'}</p>
                                {foreach from=$packItems item="product_pack"}
                                  {block name='product_miniature'}
                                    {include file='catalog/_partials/miniatures/pack-product.tpl' product=$product_pack}
                                  {/block}
                                {/foreach}
                            </section>
                            {/if}
                          {/block}
        
                          {block name='product_discounts'}
                            {include file='catalog/_partials/product-discounts.tpl'}
                          {/block}
        
                          {block name='product_add_to_cart'}
                            {include file='catalog/_partials/product-add-to-cart.tpl'}
                          {/block}

                         
        
                          {* Input to refresh product HTML removed, block kept for compatibility with themes *}
                          {block name='product_refresh'}{/block}
                        </form>
                      {/block}
        
                    </div>
              </div>
            </div>
            <div class="bot-descrb">
                <div id="product-description-short-{$product.id}" itemprop="description">{$product.description_short nofilter}</div>
            </div>
          </div>
        </div>
      </div>
    </div>


    {block name='product_accessories'}
      {if $accessories}
        <section class="product-accessories clearfix">
          <p class="h5 text-uppercase">{l s='You might also like' d='Shop.Theme.Catalog'}</p>
          <div class="products">
            {foreach from=$accessories item="product_accessory"}
              {block name='product_miniature'}
                {include file='catalog/_partials/miniatures/product.tpl' product=$product_accessory}
              {/block}
            {/foreach}
          </div>
        </section>
      {/if}
    {/block}

    {block name='product_footer'}
      {hook h='displayFooterProduct' product=$product category=$category}
    {/block}

    {block name='product_images_modal'}
      {include file='catalog/_partials/product-images-modal.tpl'}
    {/block}

    {block name='page_footer_container'}
      <footer class="page-footer">
        {block name='page_footer'}
          <!-- Footer content -->
        {/block}
      </footer>
    {/block}
  </section>

{/block}
