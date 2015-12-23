<?php /* Smarty version Smarty-3.1.19, created on 2015-12-21 16:14:46
         compiled from "D:\xampp\htdocs\store\modules\stcompare\views\templates\hook\stcompare.tpl" */ ?>
<?php /*%%SmartyHeaderCode:47956778ac60f3742-96624683%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c92f765acdd86e2d29e88fb6e14bf6ae5a24d9fd' => 
    array (
      0 => 'D:\\xampp\\htdocs\\store\\modules\\stcompare\\views\\templates\\hook\\stcompare.tpl',
      1 => 1449038240,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '47956778ac60f3742-96624683',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'comparator_max_item' => 0,
    'link' => 0,
    'compared_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56778ac611ef51_41524267',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56778ac611ef51_41524267')) {function content_56778ac611ef51_41524267($_smarty_tpl) {?>
<!-- MODULE st compare -->
<?php if ($_smarty_tpl->tpl_vars['comparator_max_item']->value) {?>
<section id="rightbar_compare" class="rightbar_wrap">
    <a id="rightbar-product_compare" class="rightbar_tri icon_wrap" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('products-comparison'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>"Compare Products",'mod'=>'stcompare'),$_smarty_tpl);?>
">
        <i class="icon-ajust icon-0x icon_btn"></i>
        <span class="icon_text"><?php echo smartyTranslate(array('s'=>'Compare','mod'=>'stcompare'),$_smarty_tpl);?>
</span>
        <span class="compare_quantity amount_circle <?php if (!count($_smarty_tpl->tpl_vars['compared_products']->value)) {?> simple_hidden <?php }?><?php if (count($_smarty_tpl->tpl_vars['compared_products']->value)>9) {?> dozens <?php }?>"><?php echo count($_smarty_tpl->tpl_vars['compared_products']->value);?>
</span>
    </a>
</section>
<?php }?>
<!-- /MODULE st compare --><?php }} ?>
