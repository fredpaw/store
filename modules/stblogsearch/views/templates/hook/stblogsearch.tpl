{*
* 2007-2014 PrestaShop
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
*  @copyright  2007-2014 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

<!-- Block search module -->
<div id="stb_search_block_left" class="block">
	<h4 class="title_block">{l s='Blog search' mod='stblogsearch'}</h4>
	<form method="get" action="{$link->getModuleLink('stblogsearch', 'default')|escape:'html':'UTF-8'}" id="stb_searchbox">
		<div class="block_content clearfix">
			<input type="hidden" name="orderby" value="position" />
			<input type="hidden" name="orderway" value="desc" />
			<input class="search_query form-control" type="text" id="stb_search_query_block" name="stb_search_query" value="{$search_query|escape:'htmlall':'UTF-8'|stripslashes}" placeholder="{l s='Search' mod='stblogsearch'}" />
			<button type="submit" id="stb_search_button" class="btn btn-medium">
                {l s='Search' mod='stblogsearch'}
            </button>
		</div>
	</form>
</div>
<!-- /Block search module -->
