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
<!-- Menu -->
{if $menu_pc && $menu_pc|trim}

{if !isset($megamenu_displaytop) || !$megamenu_displaytop}
{if !isset($megamenu_width) || !$megamenu_width}
<div class="wide_container">
{/if}
<div id="st_mega_menu_container" class="animated fast">
<div class="container">
{/if}
<div class="{if !isset($megamenu_displaytop) || !$megamenu_displaytop}row{/if}">
<nav id="st_mega_menu_wrap" role="navigation" class="clearBoth">
    {$menu_pc}
</nav>
</div>
{if !isset($megamenu_displaytop) || !$megamenu_displaytop}
</div>
</div>
{if !isset($megamenu_width) || !$megamenu_width}
</div>
{/if}
{/if}

{/if}
<!--/ Menu -->