<?php /* Smarty version Smarty-3.1.19, created on 2015-12-02 17:52:10
         compiled from "D:\xampp\htdocs\store\modules\strightbarcart\views\templates\hook\strightbarcart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25541565e951ac46966-55913687%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e09ce1ad4b1f957f03ba0af196f5dc6fdf22274d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\store\\modules\\strightbarcart\\views\\templates\\hook\\strightbarcart.tpl',
      1 => 1449038242,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25541565e951ac46966-55913687',
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
  'unifunc' => 'content_565e951ac6f0c9_98297516',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565e951ac6f0c9_98297516')) {function content_565e951ac6f0c9_98297516($_smarty_tpl) {?>
<!-- /MODULE Rightbar cart -->
<div id="rightbar_cart" class="rightbar_wrap">
    <a id="rightbar-shopping_cart" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink($_smarty_tpl->tpl_vars['order_process']->value,true), ENT_QUOTES, 'UTF-8', true);?>
" class="rightbar_tri icon_wrap" title="<?php echo smartyTranslate(array('s'=>'View my shopping cart','mod'=>'strightbarcart'),$_smarty_tpl);?>
">
        <i class="icon-basket icon_btn icon-0x"></i>
        <span class="icon_text"><?php echo smartyTranslate(array('s'=>'Cart','mod'=>'strightbarcart'),$_smarty_tpl);?>
</span>
        <span class="ajax_cart_quantity amount_circle <?php if ($_smarty_tpl->tpl_vars['cart_qties']->value==0) {?> simple_hidden <?php }?><?php if ($_smarty_tpl->tpl_vars['cart_qties']->value>9) {?> dozens <?php }?>"><?php echo $_smarty_tpl->tpl_vars['cart_qties']->value;?>
</span>
    </a>
</div>
<!-- /MODULE Rightbar cart --><?php }} ?>
