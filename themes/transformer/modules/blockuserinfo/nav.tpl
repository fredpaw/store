<!-- Block user information module NAV  -->
<div id="header_user_info" class="header_user_info pull-right clearfix">
	{if $is_logged}
		{if isset($sttheme.welcome_logged) && trim($sttheme.welcome_logged)}{if $sttheme.welcome_link}<a href="{$sttheme.welcome_link}" class="welcome header_item" rel="nofollow">{else}<span class="welcome header_item">{/if}{$sttheme.welcome_logged}{if $sttheme.welcome_link}</a>{else}</span>{/if}{/if}
		<a href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}" title="{l s='View my customer account' mod='blockuserinfo'}" class="header_item account" rel="nofollow">{$cookie->customer_firstname} {$cookie->customer_lastname}</a>
		<a href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}" title="{l s='View my customer account' mod='blockuserinfo'}" class="header_item my_account_link" rel="nofollow">{l s='My Account' mod='blockuserinfo'}</a>
		<a class="header_item logout" href="{$link->getPageLink('index', true, NULL, "mylogout")|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Log me out' mod='blockuserinfo'}">
			{l s='Sign out' mod='blockuserinfo'}
		</a>
	{else}
		{if isset($sttheme.welcome) && trim($sttheme.welcome)}{if $sttheme.welcome_link}<a href="{$sttheme.welcome_link}" class="header_item welcome" rel="nofollow">{else}<span class="welcome header_item">{/if}{$sttheme.welcome}{if $sttheme.welcome_link}</a>{else}</span>{/if}{/if}
		<a class="header_item login" href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Log in to your customer account' mod='blockuserinfo'}">
			{l s='Login' mod='blockuserinfo'}
		</a>
		<a class="header_item sing_up" href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Log in to your customer account' mod='blockuserinfo'}">
			{l s='Sign Up' mod='blockuserinfo'}
		</a>
	{/if}
</div>
<!-- /Block usmodule NAV -->