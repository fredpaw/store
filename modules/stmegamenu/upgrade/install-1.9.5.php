<?php

if (!defined('_PS_VERSION_'))
	exit;

function upgrade_module_1_9_5($object)
{
    $result = true;
    
    $field = Db::getInstance()->executeS('Describe `'._DB_PREFIX_.'st_mega_menu` `nofollow`');  
   
    if(!is_array($field) || !count($field))
        $result &= Db::getInstance()->Execute('ALTER TABLE `'._DB_PREFIX_.'st_mega_menu` ADD `nofollow` tinyint(1) unsigned NOT NULL DEFAULT 0');
        
    return $result;
}
