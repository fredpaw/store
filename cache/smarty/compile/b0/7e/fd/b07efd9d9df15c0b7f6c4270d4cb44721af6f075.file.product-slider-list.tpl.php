<?php /* Smarty version Smarty-3.1.19, created on 2015-12-21 17:01:06
         compiled from "D:\xampp\htdocs\store\themes\transformer\product-slider-list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17660567795a2b111e5-22746003%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b07efd9d9df15c0b7f6c4270d4cb44721af6f075' => 
    array (
      0 => 'D:\\xampp\\htdocs\\store\\themes\\transformer\\product-slider-list.tpl',
      1 => 1449038237,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17660567795a2b111e5-22746003',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'slider_items' => 0,
    'product' => 0,
    'link' => 0,
    'thumbSize' => 0,
    'restricted_country_mode' => 0,
    'PS_CATALOG_MODE' => 0,
    'priceDisplay' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_567795a2c5b477_65798768',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567795a2c5b477_65798768')) {function content_567795a2c5b477_65798768($_smarty_tpl) {?>
<div class="nav_top_right"></div>
<div class="sliderwrap products_slider">
    <ul class="slides">
	<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['product']->iteration=0;
 $_smarty_tpl->tpl_vars['product']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['product']->iteration++;
 $_smarty_tpl->tpl_vars['product']->index++;
 $_smarty_tpl->tpl_vars['product']->first = $_smarty_tpl->tpl_vars['product']->index === 0;
 $_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
?>
        <?php if ($_smarty_tpl->tpl_vars['product']->first||!($_smarty_tpl->tpl_vars['product']->index % $_smarty_tpl->tpl_vars['slider_items']->value)) {?>
        <li class="<?php if ($_smarty_tpl->tpl_vars['product']->first) {?>first_item<?php } elseif ($_smarty_tpl->tpl_vars['product']->last) {?>last_item<?php } else { ?>item<?php }?>">
        <?php }?>
            <div class="pro_column_box clearfix">
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" class="pro_column_left">
			<img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'thumb_default');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" height="<?php echo $_smarty_tpl->tpl_vars['thumbSize']->value['height'];?>
" width="<?php echo $_smarty_tpl->tpl_vars['thumbSize']->value['width'];?>
" class="replace-2x img-responsive" />
			</a>
			<div class="pro_column_right">
				<h4 class="s_title_block nohidden"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],50,'...'), ENT_QUOTES, 'UTF-8', true);?>
</a></h4>
                <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
                    <span class="price">
                    <?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price']),$_smarty_tpl);?>

                    <?php } else { ?>
                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_tax_exc']),$_smarty_tpl);?>

                    <?php }?>
                    </span>
                    <?php if (isset($_smarty_tpl->tpl_vars['product']->value['reduction'])&&$_smarty_tpl->tpl_vars['product']->value['reduction']) {?><span class="old_price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_without_reduction']),$_smarty_tpl);?>
</span><?php }?>
                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"price"),$_smarty_tpl);?>

                <?php }?>
			</div>
            </div>
        <?php if ($_smarty_tpl->tpl_vars['product']->last||!($_smarty_tpl->tpl_vars['product']->iteration % $_smarty_tpl->tpl_vars['slider_items']->value)) {?>
        </li>
        <?php }?>
	<?php } ?>
	</ul>
</div><?php }} ?>
