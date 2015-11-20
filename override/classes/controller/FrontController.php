<?php
class FrontController extends FrontControllerCore
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
            'HOOK_TOP_LEFT'            => Hook::exec('displayTopLeft'),
            'HOOK_TOP_SECONDARY'       => Hook::exec('displayTopSecondary'),
            'HOOK_FOOTER_TOP'          => Hook::exec('displayFooterTop'),
            'HOOK_FOOTER_SECONDARY'    => Hook::exec('displayFooterSecondary'),
            'HOOK_FOOTER_BOTTOM_LEFT'  => Hook::exec('displayFooterBottomLeft'),
            'HOOK_FOOTER_BOTTOM_RIGHT' => Hook::exec('displayFooterBottomRight'),
            'HOOK_MOBILE_BAR'          => Hook::exec('displayMobileBar'),
            'HOOK_MOBILE_MENU'         => Hook::exec('displayMobileMenu'),
            'isIntalledBlockWishlist'  => Module::isInstalled('blockwishlist'),
        ));
        
        $this->addJqueryPlugin('hoverIntent');
    }
}