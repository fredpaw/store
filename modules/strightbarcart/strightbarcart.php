<?php
/*
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
*/

if (!defined('_PS_VERSION_'))
	exit;

class StRightbarCart extends Module
{
	public function __construct()
	{
		$this->name          = 'strightbarcart';
		$this->tab           = 'front_office_features';
		$this->version       = '1.0';
		$this->author        = 'SUNNYTOO.COM';
		$this->need_instance = 0;

        $this->bootstrap = true;
		parent::__construct();

		$this->displayName  = $this->l('Right bar cart block');
		$this->description  = $this->l('Adds a block containing the customer\'s shopping cart.');
	}

	public function install()
	{
		if (!parent::install() ||
			!$this->registerHook('displayAnywhere'))
			return false;
		return true;
	}
	
    public function hookDisplayAnywhere($params)
    {
	    if(!isset($params['caller']) || $params['caller']!=$this->name)
            return false;
		if (Configuration::get('PS_CATALOG_MODE'))
			return;
        if(!Module::isInstalled('blockcart'))
            return ;
        $this->context->smarty->assign(array(
			'order_process' => Configuration::get('PS_ORDER_PROCESS_TYPE') ? 'order-opc' : 'order',
        ));
        return $this->display(__FILE__, 'strightbarcart.tpl');
    }
    
}