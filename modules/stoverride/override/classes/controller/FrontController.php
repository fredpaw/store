<?php
class FrontController extends FrontControllerCore
{
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