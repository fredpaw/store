<?php /* Smarty version Smarty-3.1.19, created on 2015-11-20 17:34:49
         compiled from "D:\xampp\htdocs\store\modules\stthemeeditor\views\templates\hook\product_add_to_wishlist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14819564ebf09986310-49334808%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c64f2d47fc7358a68743e3339bc1b9ac9c5bfa03' => 
    array (
      0 => 'D:\\xampp\\htdocs\\store\\modules\\stthemeeditor\\views\\templates\\hook\\product_add_to_wishlist.tpl',
      1 => 1447993233,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14819564ebf09986310-49334808',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id_product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564ebf099aa714_29685089',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564ebf099aa714_29685089')) {function content_564ebf099aa714_29685089($_smarty_tpl) {?><a class="addToWishlist wishlistProd_<?php echo intval($_smarty_tpl->tpl_vars['id_product']->value);?>
" href="#" rel="nofollow" data-pid="<?php echo intval($_smarty_tpl->tpl_vars['id_product']->value);?>
" onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo intval($_smarty_tpl->tpl_vars['id_product']->value);?>
', false, 1,this); return false;"><div><i class="icon-heart icon-0x icon_btn icon-mar-lr2"></i><span><?php echo smartyTranslate(array('s'=>'Add to Wishlist','mod'=>'stthemeeditor'),$_smarty_tpl);?>
</span></div></a><?php }} ?>
