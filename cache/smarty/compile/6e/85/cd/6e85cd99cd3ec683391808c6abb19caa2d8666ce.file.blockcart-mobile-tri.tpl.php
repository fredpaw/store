<?php /* Smarty version Smarty-3.1.19, created on 2015-12-02 17:52:06
         compiled from "D:\xampp\htdocs\store\modules\blockcart_mod\views\templates\hook\blockcart-mobile-tri.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29803565e9516a06ed9-94713267%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e85cd99cd3ec683391808c6abb19caa2d8666ce' => 
    array (
      0 => 'D:\\xampp\\htdocs\\store\\modules\\blockcart_mod\\views\\templates\\hook\\blockcart-mobile-tri.tpl',
      1 => 1449038238,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29803565e9516a06ed9-94713267',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_process' => 0,
    'link' => 0,
    'cart_qties' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_565e9516a247f6_02548105',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565e9516a247f6_02548105')) {function content_565e9516a247f6_02548105($_smarty_tpl) {?>
<!-- MODULE Block cart -->
<a id="shopping_cart_mobile" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink($_smarty_tpl->tpl_vars['order_process']->value,true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'View my shopping cart','mod'=>'blockcart_mod'),$_smarty_tpl);?>
" rel="nofollow" class="shopping_cart mobile_bar_tri">
	<i class="icon-basket icon-1x icon_btn"></i>
	<span class="mobile_bar_tri_text"><?php echo smartyTranslate(array('s'=>'Cart','mod'=>'blockcart_mod'),$_smarty_tpl);?>
</span>
	<span class="ajax_cart_quantity amount_circle <?php if ($_smarty_tpl->tpl_vars['cart_qties']->value>9) {?> dozens <?php }?> constantly_show"><?php echo $_smarty_tpl->tpl_vars['cart_qties']->value;?>
</span>
</a>
<!-- /MODULE Block cart --><?php }} ?>
