<?php

if (!defined('_PS_VERSION_'))
	exit;

function upgrade_module_1_9_6($object)
{
    $result = true;
    
	$result &= $object->registerHook('displayMobileMenu');
    $result &= $object->registerHook('displaySideBar');
    
    return $result;
}
