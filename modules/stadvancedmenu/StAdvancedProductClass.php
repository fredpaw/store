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

class StAdvancedProductClass
{
    public static function deleteMenuProducts($id)
    {
        if(!$id)
            return false;
        return Db::getInstance()->execute('DELETE FROM `'._DB_PREFIX_.'st_advanced_menu_product` WHERE `id_st_advanced_menu` = '.(int)$id);
    }

    public static function changeMenuProducts($id, $menu_products_id)
    {
        if(!$id)
            return false;
        $res = true;
        if (!$id_shop = (int)Shop::getContextShopID())
            return false;
        foreach ($menu_products_id as $id_product)
        {
            $exists = Db::getInstance()->getValue('
            SELECT `id_product` FROM `'._DB_PREFIX_.'product_shop`
            WHERE `id_shop` = '.$id_shop.'
            AND `id_product` = '.(int)$id_product.'
            ');
            if ($exists)
                $res &= Db::getInstance()->insert('st_advanced_menu_product', array(
                    'id_st_advanced_menu' => (int)$id,
                    'id_product' => (int)$id_product
                 )); 
        }
            
        return $res;
    }
    public static function getMenuProductsLight($id_lang, $id_st_advanced_menu)
    {
        $sql = 'SELECT p.`id_product`, p.`reference`, pl.`name`
                FROM `'._DB_PREFIX_.'st_advanced_menu_product` mp
                LEFT JOIN `'._DB_PREFIX_.'product` p ON (p.`id_product`= mp.`id_product`)
                '.Shop::addSqlAssociation('product', 'p').'
                LEFT JOIN `'._DB_PREFIX_.'product_lang` pl ON (
                    p.`id_product` = pl.`id_product`
                    AND pl.`id_lang` = '.(int)$id_lang.Shop::addSqlRestrictionOnLang('pl').'
                )
                WHERE `id_st_advanced_menu` = '.(int)$id_st_advanced_menu;

        return Db::getInstance()->executeS($sql);
    }
    public static function getMenuProducts($id_lang, $id_st_advanced_menu)
    {
        $sql = 'SELECT `id_product`
                FROM `'._DB_PREFIX_.'st_advanced_menu_product`
                WHERE `id_st_advanced_menu` = '.(int)$id_st_advanced_menu;

        return Db::getInstance()->executeS($sql);
    }

}