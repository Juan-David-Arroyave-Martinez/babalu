<article class="product-miniature js-product-miniature" data-id-product="{$product.id_product}" data-id-product-attribute="{$product.id_product_attribute}" itemscope itemtype="http://schema.org/Product">
  <div class="thumbnail-container">
    <div class="left-block">
      {block name='product_thumbnail'}
        <a href="{$product.url}" class="thumbnail product-thumbnail">
          <img src = "{$product.cover.bySize.home_default.url}" alt = "{$product.cover.legend}" data-full-size-image-url = "{$product.cover.large.url}" >
        </a>
      {/block}
      <div class="highlighted-informations{if !$product.main_variants} no-variants{/if}">
        <a href="#" class="quick-view" data-link-action="quickview" title="{l s='Quick view' d='Shop.Theme.Actions'}">
          <i class="material-icons">search</i> <!-- {l s='Quick view' d='Shop.Theme.Actions'} -->
        </a>
      </div>
      

      {block name='product_flags'}
        <ul class="product-flags">
          {foreach from=$product.flags item=flag}
            <li class="{$flag.type}">{$flag.label}</li>
          {/foreach}
        </ul>
      {/block}
    </div>
    <div class="right-block product-description  clearfix">
      

      {block name='product_variants'}
        {if $product.main_variants}
          {include file='catalog/_partials/variant-links.tpl' variants=$product.main_variants}
        {/if}
      {/block}
      
      <div class="product-meta">
        {block name='product_name'}
          <h4 class="product-title" itemprop="name"><a href="{$product.url}">{$product.name|truncate:33:'...'}</a></h4>
        {/block}
      </div>

      {block name='product_price_and_shipping'}
        <div class="product-price-and-shipping">
          {hook h='displayProductPriceBlock' product=$product type="before_price"}
          {if isset($display_price) && $display_price == '0'}
          
          {else}
            <span itemprop="price" class="price">{$product.price}</span>
          {/if}
          {hook h='displayProductPriceBlock' product=$product type='unit_price'}

          {hook h='displayProductPriceBlock' product=$product type='weight'}
          {if $product.has_discount}
            {hook h='displayProductPriceBlock' product=$product type="old_price"}

            <span class="regular-price">{$product.regular_price}</span>
            <!--
            {if $product.discount_type === 'percentage'}
              <span class="discount-percentage">{$product.discount_percentage}</span>
            {/if}
            -->
          {/if}

        </div>
      {/block}


      {block name='product_description_short'}
        <div class="product-description-short" itemprop="description">{$product.description_short nofilter}</div>
      {/block}

      {block name='product_list_actions'}
        <div class="product-list-actions">
          {if $product.add_to_cart_url}
              <a
                class = "add-to-cart"
                href  = "{$product.add_to_cart_url}"
                rel   = "nofollow"
                data-id-product="{$product.id_product}"
                data-id-product-attribute="{$product.id_product_attribute}"
                data-link-action="add-to-cart"
                title = "{l s='Add to cart' d='Shop.Theme.Actions'}"
              ><i class="material-icons">shopping_cart</i></a>              
          {else}
              <a
                class = "add-to-cart"
                href  = "{$product.url}"
                rel   = "nofollow"
                title = "{l s='Select option' d='Shop.Theme.Actions'}"
              ><i class="material-icons">file_download</i></a>
          {/if}
          {hook h='displayProductListFunctionalButtons' product=$product}
        </div>
      {/block}

      {block name='product_availability'}
        {if $product.show_availability}
          {* availability may take the values "available" or "unavailable" *}
          <span class="product-availability {$product.availability}">{$product.availability_message}</span>
        {/if}
      {/block}

     {if isset($product.js)}
          <div class="pts-countdown-{$product.id_product|escape:'html':'UTF-8'} item-countdown">
              {if $product.js == 'unlimited'}<div class="labelexpired">{l s='Unlimited'}</div>{/if}
          </div>
          {if $product.js != 'unlimited'} 
              <script type="text/javascript">
                  {literal}
                  jQuery(document).ready(function($) {{/literal}
                      $(".pts-countdown-{$product.id_product|escape:'html':'UTF-8'}").lofCountDown({literal}{{/literal}
                          TargetDate:"{$product.js.month|escape:'html':'UTF-8'}/{$product.js.day|escape:'html':'UTF-8'}/{$product.js.year|escape:'html':'UTF-8'} {$product.js.hour|escape:'html':'UTF-8'}:{$product.js.minute|escape:'html':'UTF-8'}:{$product.js.seconds|escape:'html':'UTF-8'}",
                          DisplayFormat:"<div><div><div class=\"countdown_num\">%%D%% </div><span>{l s='Days'}</span></div><div><div class=\"countdown_num\">%%H%% </div><span>{l s='Hrs'}</span></div><div><div class=\"countdown_num\">%%M%%</div> <span>{l s='Mins'}</span></div><div><div class=\"countdown_num\">%%S%%</div><span> {l s='Secs'}</span></div></div>",
                          FinishMessage: "{$product.finish|escape:'html':'UTF-8'}"
                      {literal}
                      });
                  });
                  {/literal}
              </script>
          {/if}
      {/if}

    </div>
  </div>
</article>
