<?php

if (!defined('_PS_VERSION_'))
	exit;

function upgrade_module_3_0_5($object)
{
    $result = true;
    
    $result &= Configuration::updateValue('STSN_SOLD_OUT', 0);
    $result &= Configuration::updateValue('STSN_SOLD_OUT_COLOR', '');
    $result &= Configuration::updateValue('STSN_SOLD_OUT_BG_COLOR', '');
    $result &= Configuration::updateValue('STSN_SOLD_OUT_BG_IMG', '');
    $result &= Configuration::updateValue('STSN_RETINA', 0);
    $result &= Configuration::updateValue('STSN_YOTPO_STAR', 0);
    $result &= Configuration::updateValue('STSN_RETINA_LOGO', '');
    
	return $result;
}
