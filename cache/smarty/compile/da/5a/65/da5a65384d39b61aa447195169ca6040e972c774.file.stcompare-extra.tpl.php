<?php /* Smarty version Smarty-3.1.19, created on 2015-12-21 16:14:43
         compiled from "D:\xampp\htdocs\store\modules\stcompare\views\templates\hook\stcompare-extra.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1965756778ac311d367-27297887%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da5a65384d39b61aa447195169ca6040e972c774' => 
    array (
      0 => 'D:\\xampp\\htdocs\\store\\modules\\stcompare\\views\\templates\\hook\\stcompare-extra.tpl',
      1 => 1449038240,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1965756778ac311d367-27297887',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'comparator_max_item' => 0,
    'product_link' => 0,
    'product' => 0,
    'product_cover' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56778ac31466a5_71560617',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56778ac31466a5_71560617')) {function content_56778ac31466a5_71560617($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['comparator_max_item']->value)&&$_smarty_tpl->tpl_vars['comparator_max_item']->value) {?>
    <p class="buttons_bottom_block no-print">
    	<a class="add_to_compare" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_link']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-id-product="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Add to compare','mod'=>'stcompare'),$_smarty_tpl);?>
" data-product-name="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" data-product-cover="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['product_cover']->value,'thumb_default');?>
" ><i class="icon-ajust icon-0x icon_btn icon-mar-lr2"></i><span><?php echo smartyTranslate(array('s'=>'Add to compare','mod'=>'stcompare'),$_smarty_tpl);?>
</span></a>
    </p>
<?php }?><?php }} ?>
