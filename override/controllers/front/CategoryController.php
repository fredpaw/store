<?php
class CategoryController extends CategoryControllerCore
{
    /*
    * module: stoverride
    * date: 2015-11-20 15:22:34
    * version: 1.1.0
    */
    public function initContent()
	{
		parent::initContent();
        $this->context->smarty->assign(array(   
            'HOOK_CATEGORY_HEADER' => Hook::exec('displayCategoryHeader'),    
			'HOOK_CATEGORY_FOOTER' => Hook::exec('displayCategoryFooter'),     
            'display_category_title' => Configuration::get('STSN_DISPLAY_CATEGORY_TITLE'),  
            'display_category_image' => Configuration::get('STSN_DISPLAY_CATEGORY_IMAGE'),  
            'display_category_desc' => Configuration::get('STSN_DISPLAY_CATEGORY_DESC'),
            'display_subcategory' => Configuration::get('STSN_DISPLAY_SUBCATE'),  
			'categorySize' => Image::getSize(ImageType::getFormatedName('category')),  
		));
	}
}
