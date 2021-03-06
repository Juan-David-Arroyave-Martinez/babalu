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
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 <div class="product-variants">
    {foreach from=$groups key=id_attribute_group item=group}
      {if !empty($group.attributes)}
      <div class="clearfix product-variants-item">
        <span class="control-label ind-variant">{$group.name}</span>
        
        {if $group.group_type == 'color'}
          <span class="swtch-attr-selected"></span>
          <ul class="lst-variant" id="group_{$id_attribute_group}">
            {foreach from=$group.attributes key=id_attribute item=group_attribute}
              <li class="float-xs-left input-container">
                <label class="lbl-varnt">
                  <input class="input-color opt-col {if $group_attribute.selected}opt-col-slctd{/if}" type="radio" data-product-attribute="{$id_attribute_group}" data-variantname="{$group_attribute.name}" name="group[{$id_attribute_group}]" value="{$id_attribute}"{if $group_attribute.selected} checked="checked"{/if}>
                  <span
                    {if $group_attribute.html_color_code}class="color" style="background-color: {$group_attribute.html_color_code}" {/if}
                    {if $group_attribute.texture}class="color texture" style="background-image: url({$group_attribute.texture})" {/if}
                  ><span class="sr-only">{$group_attribute.name}</span></span>
                </label>
              </li>
            {/foreach}
          </ul>
          <script>
            $(".swtch-attr-selected").html($(".opt-col-slctd").attr("data-variantname"));
          </script>
        {elseif $group.group_type == 'select'}
          <select
            class="form-control form-control-select"
            id="group_{$id_attribute_group}"
            data-product-attribute="{$id_attribute_group}"
            name="group[{$id_attribute_group}]">
            {foreach from=$group.attributes key=id_attribute item=group_attribute}
              <option value="{$id_attribute}" title="{$group_attribute.name}"{if $group_attribute.selected} selected="selected"{/if}>{$group_attribute.name}</option>
            {/foreach}
          </select>
        
        {elseif $group.group_type == 'radio'}
        <span class="swtch-attr-selected-tll"></span>
          <ul class="lst-variant" id="group_{$id_attribute_group}">
            {foreach from=$group.attributes key=id_attribute item=group_attribute}
              <li class="input-container float-xs-left">
                <label class="lbl-cust-tll">
                  <input class="input-radio inpt-cust-tll {if $group_attribute.selected}opt-tll-slctd{/if}" type="radio" data-variantname="{$group_attribute.name}" data-product-attribute="{$id_attribute_group}" name="group[{$id_attribute_group}]" value="{$id_attribute}"{if $group_attribute.selected} checked="checked"{/if}>
                  <span class="radio-label">{$group_attribute.name}</span>
                </label>
              </li>
            {/foreach}
          </ul>
          <script>
            if($(".opt-tll-slctd").attr("data-variantname") == "U"){
              $(".swtch-attr-selected-tll").html("Única");
            }else{
              $(".swtch-attr-selected-tll").html($(".opt-tll-slctd").attr("data-variantname"));
            }
            </script>
        {/if}
      </div>
      {/if}
    {/foreach}
  </div>
