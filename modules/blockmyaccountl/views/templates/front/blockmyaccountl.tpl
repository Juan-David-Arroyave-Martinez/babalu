{*
* 2007-2013 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
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
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2013 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
{if $psversion > "1.5.0.0"}
<!-- Block myaccount module -->
<div class="block myaccount card block-categories" >
	<h4 class="title_block"><a href="{$link->getPageLink('my-account', true)|escape:'html'}" title="{l s='My account' mod='blockmyaccountl'}">{l s='My account' mod='blockmyaccountl'}</a>    </h4>
	<div class="block_content">

	  {if $logged}
      <ul class="bullet">
			<li><a href="{$link->getPageLink('history', true)|escape:'html'}" title="">{l s='My orders' mod='blockmyaccountl'}</a></li>
			{if $returnAllowed}<li><a href="{$link->getPageLink('order-follow', true)|escape:'html'}" title="{l s='My merchandise returns' mod='blockmyaccountl'}">{l s='My merchandise returns' mod='blockmyaccountl'}</a></li>{/if}
			<li><a href="{$link->getPageLink('order-slip', true)|escape:'html'}" title="{l s='My credit slips' mod='blockmyaccountl'}">{l s='My credit slips' mod='blockmyaccountl'}</a></li>
			<li><a href="{$link->getPageLink('addresses', true)|escape:'html'}" title="{l s='My addresses' mod='blockmyaccountl'}">{l s='My addresses' mod='blockmyaccountl'}</a></li>
			<li><a href="{$link->getPageLink('identity', true)|escape:'html'}" title="{l s='My personal info' mod='blockmyaccountl'}">{l s='My personal info' mod='blockmyaccountl'}</a></li>
			{if $voucherAllowed}<li><a href="{$link->getPageLink('discount', true)|escape:'html'}" title="{l s='My vouchers' mod='blockmyaccountl'}">{l s='My vouchers' mod='blockmyaccountl'}</a></li>{/if}
			{$HOOK_BLOCK_MY_ACCOUNT}
	  </ul>
		<p class="logout"><a href="{$link->getPageLink('index', true, NULL, "mylogout")|escape:'html'}" title="{l s='Sign out' mod='blockmyaccountl'}">{l s='Sign out' mod='blockmyaccountl'}</a></p>
      {else}





		<div style="border: 0; padding: 7px; text-align: center;">
			<form action="{block name='login_form_actionurl'}./index.php?controller=authentication&back=my-account{/block}" method="post">

				<div style="text-align: center;" class="form-group">
                  {if $psversion >"1.6.0.0"}<label for="email">{/if}
					{l s='E-mail address' mod='blockmyaccountl'}
                    {if $psversion >"1.6.0.0"}</label>{/if}<br />
					<input {if $psversion > "1.6.0.0"} class="is_required validate account_input form-control" data-validate="isEmail"{/if} type="text" id="email" name="email" value="{if isset($smarty.post.email)}{$smarty.post.email|escape:'htmlall'|stripslashes}{/if}" {if $psversion <"1.6.0.0"}style="width:90%"{/if} /><br />

                     {if $psversion >"1.6.0.0"}<label for="passwd">{/if}
                    {l s='Password' mod='blockmyaccountl'}
                    {if $psversion >"1.6.0.0"}</label>{/if}<br />
					<input {if $psversion > "1.6.0.0"} class="is_required validate account_input form-control" data-validate="isPasswd"{/if} type="password"  {if $psversion < "1.7.0.0"}id="passwd" name="passwd" {else}id="password" name="password"{/if}
					
					value="{if isset($smarty.post.passwd)}{$smarty.post.passwd|escape:'htmlall'|stripslashes}{/if}" {if $psversion <"1.6.0.0"}style="width:90%"{/if}/><br /><br />
                    </div>
                    {if $psversion < "1.6.0.0"}

				<div style="padding: 0px 22px 0px 22px;" class="form-group">
				
                {if isset($back)}<input type="hidden" class="hidden" name="back" value="{$back|escape:'html':'UTF-8'}" />{/if}
				
                <input type="submit" id="SubmitLogin" name="SubmitLogin" value="{l s='Log in' mod='blockmyaccountl'}" class="button" />
				</div>
                {else}
			<input type="hidden" class="hidden" name="submitLogin" value="1" />
                <p class="submit">
						{if isset($back)}<input type="hidden" class="hidden" name="back" value="{$back|escape:'html':'UTF-8'}" />{/if}
						<button type="submit" id="SubmitLogin" name="SubmitLogin" class="button btn btn-default button-medium">
							<span>
								<i class="icon-lock left"></i>
								{l s='Log in' mod='blockmyaccountl'}
							</span>
						</button>
				</p>
                {/if}
			</form>
			<div style="text-align: center;">
				<a href="{$link->getPageLink('password', true)}">{l s='Forgot your password?' mod='blockmyaccountl'}</a>
			</div>
			<div style="text-align: center;">
				<a href="{$link->getPageLink('my-account', true)}">{l s='No account yet?' mod='blockmyaccountl'}</a>
			</div>

	   </div>

	{/if}
	</div>
</div>
{else}
<div class="block myaccount">
	<h4><a href="{$link->getPageLink('my-account.php', true)}">{l s='My account' mod='blockmyaccountl'}</a></h4>
	<div class="block_content">
	  {if $isLogged or $logged}	<ul class="bullet">
			<li><a href="{$link->getPageLink('history.php', true)}" title="">{l s='My orders' mod='blockmyaccountl'}</a></li>
			{if $returnAllowed}<li><a href="{$link->getPageLink('order-follow.php', true)}" title="">{l s='My merchandise returns' mod='blockmyaccountl'}</a></li>{/if}
			<li><a href="{$link->getPageLink('order-slip.php', true)}" title="">{l s='My credit slips' mod='blockmyaccountl'}</a></li>
			<li><a href="{$link->getPageLink('addresses.php', true)}" title="">{l s='My addresses' mod='blockmyaccountl'}</a></li>
			<li><a href="{$link->getPageLink('identity.php', true)}" title="">{l s='My personal info' mod='blockmyaccountl'}</a></li>
			{if $voucherAllowed}<li><a href="{$link->getPageLink('discount.php', true)}" title="">{l s='My vouchers' mod='blockmyaccountl'}</a></li>{/if}
			{$HOOK_BLOCK_MY_ACCOUNT}
		</ul>
		<p class="logout"><a href="{$link->getPageLink('index.php')}?mylogout" title="{l s='Sign out' mod='blockmyaccountl'}">{l s='Sign out' mod='blockmyaccountl'}</a></p>
        {else}
       <div style="border: 0; padding: 7px; text-align: center;">

        	<form action="{$link->getPageLink('authentication.php', true)}" method="post">
				<div style="text-align: center;">
					{l s='E-mail address' mod='blockmyaccountl'}<br />
					<input type="text" id="email" name="email" value="{if isset($smarty.post.email)}{$smarty.post.email|escape:'htmlall'|stripslashes}{/if}" style="width:90%"/><br />
					{l s='Password' mod='blockmyaccountl'}<br />
					<input type="password" id="passwd" name="passwd" value="{if isset($smarty.post.passwd)}{$smarty.post.passwd|escape:'htmlall'|stripslashes}{/if}" style="width:90%"/><br /><br />
                </div>
				<div style="padding: 0px 22px 0px 22px;">
                <input type="submit" id="SubmitLogin" name="SubmitLogin" value="{l s='Log in' mod='blockmyaccountl'}" class="button" />
                </div>

			</form>
			<div style="text-align: center;">
				<a href="{$link->getPageLink('password.php', true)}">{l s='Forgot your password?' mod='blockmyaccountl'}</a>
			</div>
			<div style="text-align: center;">
				<a href="{$link->getPageLink('my-account.php', true)}">{l s='No account yet?' mod='blockmyaccountl'}</a>
			</div>

	</div>

	{/if}
	</div>
</div>
{/if}
<!-- /Block myaccount module -->
