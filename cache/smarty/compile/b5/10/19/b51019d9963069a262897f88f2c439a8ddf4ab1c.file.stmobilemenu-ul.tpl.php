<?php /* Smarty version Smarty-3.1.19, created on 2015-12-02 17:52:10
         compiled from "D:\xampp\htdocs\store\modules\stadvancedmenu\views\templates\hook\stmobilemenu-ul.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24104565e951ad33633-23739632%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b51019d9963069a262897f88f2c439a8ddf4ab1c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\store\\modules\\stadvancedmenu\\views\\templates\\hook\\stmobilemenu-ul.tpl',
      1 => 1449038239,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24104565e951ad33633-23739632',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'stmenu' => 0,
    'mm' => 0,
    'adv_menu_title' => 0,
    'column' => 0,
    'block' => 0,
    'product' => 0,
    'menu' => 0,
    'link' => 0,
    'homeSize' => 0,
    'brand' => 0,
    'img_manu_dir' => 0,
    'manufacturerSize' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_565e951b2f2c38_80766254',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565e951b2f2c38_80766254')) {function content_565e951b2f2c38_80766254($_smarty_tpl) {?>
<!-- MODULE st advancedmenu -->
<?php if (isset($_smarty_tpl->tpl_vars['stmenu']->value)) {?>
<ul class="mo_advanced_mu_level_0">
	<?php  $_smarty_tpl->tpl_vars['mm'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mm']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stmenu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mm']->key => $_smarty_tpl->tpl_vars['mm']->value) {
$_smarty_tpl->tpl_vars['mm']->_loop = true;
?>
		<?php if ($_smarty_tpl->tpl_vars['mm']->value['hide_on_mobile']==1) {?><?php continue 1?><?php }?>
		<li class="mo_advanced_ml_level_0 mo_advanced_ml_column">
			<a id="st_mo_advanced_ma_<?php echo $_smarty_tpl->tpl_vars['mm']->value['id_st_advanced_menu'];?>
" href="<?php if ($_smarty_tpl->tpl_vars['mm']->value['m_link']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mm']->value['m_link'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?>javascript:;<?php }?>" class="mo_advanced_ma_level_0" <?php if (!$_smarty_tpl->tpl_vars['adv_menu_title']->value) {?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mm']->value['m_title'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?><?php if ($_smarty_tpl->tpl_vars['mm']->value['nofollow']) {?> rel="nofollow"<?php }?><?php if ($_smarty_tpl->tpl_vars['mm']->value['new_window']) {?> target="_blank"<?php }?>><?php if ($_smarty_tpl->tpl_vars['mm']->value['m_icon']) {?><?php echo $_smarty_tpl->tpl_vars['mm']->value['m_icon'];?>
<?php } else { ?><?php if ($_smarty_tpl->tpl_vars['mm']->value['icon_class']) {?><i class="<?php echo $_smarty_tpl->tpl_vars['mm']->value['icon_class'];?>
"></i><?php }?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mm']->value['m_name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['mm']->value['cate_label']) {?><span class="cate_label"><?php echo $_smarty_tpl->tpl_vars['mm']->value['cate_label'];?>
</span><?php }?></a>
			<?php if (isset($_smarty_tpl->tpl_vars['mm']->value['column'])&&count($_smarty_tpl->tpl_vars['mm']->value['column'])) {?>
				<span class="opener">&nbsp;</span>
				<?php  $_smarty_tpl->tpl_vars['column'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['column']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mm']->value['column']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['column']->key => $_smarty_tpl->tpl_vars['column']->value) {
$_smarty_tpl->tpl_vars['column']->_loop = true;
?>
					<?php if ($_smarty_tpl->tpl_vars['column']->value['hide_on_mobile']==1) {?><?php continue 1?><?php }?>
					<?php if (isset($_smarty_tpl->tpl_vars['column']->value['children'])&&count($_smarty_tpl->tpl_vars['column']->value['children'])) {?>
						<?php  $_smarty_tpl->tpl_vars['block'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['block']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['column']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['block']->key => $_smarty_tpl->tpl_vars['block']->value) {
$_smarty_tpl->tpl_vars['block']->_loop = true;
?>
							<?php if ($_smarty_tpl->tpl_vars['block']->value['hide_on_mobile']==1) {?><?php continue 1?><?php }?>
							<?php if ($_smarty_tpl->tpl_vars['block']->value['item_t']==1) {?>
								<?php if ($_smarty_tpl->tpl_vars['block']->value['subtype']==2&&isset($_smarty_tpl->tpl_vars['block']->value['children'])) {?>
									<ul class="mo_advanced_mu_level_1 mo_advanced_sub_ul">
										<li class="mo_advanced_ml_level_1 mo_advanced_sub_li">
											<a id="st_mo_advanced_ma_<?php echo $_smarty_tpl->tpl_vars['block']->value['id_st_advanced_menu'];?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['children']['link'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if (!$_smarty_tpl->tpl_vars['adv_menu_title']->value) {?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['children']['name'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?><?php if ($_smarty_tpl->tpl_vars['block']->value['nofollow']) {?> rel="nofollow"<?php }?><?php if ($_smarty_tpl->tpl_vars['block']->value['new_window']) {?> target="_blank"<?php }?> class="mo_advanced_ma_level_1 mo_advanced_sub_a"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['children']['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php if ($_smarty_tpl->tpl_vars['block']->value['cate_label']) {?><span class="cate_label"><?php echo $_smarty_tpl->tpl_vars['block']->value['cate_label'];?>
</span><?php }?></a>
											<?php if (isset($_smarty_tpl->tpl_vars['block']->value['children']['children'])&&is_array($_smarty_tpl->tpl_vars['block']->value['children']['children'])&&count($_smarty_tpl->tpl_vars['block']->value['children']['children'])) {?>
												<span class="opener">&nbsp;</span>
												<ul class="mo_advanced_mu_level_2 mo_advanced_sub_ul">
												<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['block']->value['children']['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
												<li class="mo_advanced_ml_level_2 mo_advanced_sub_li"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if (!$_smarty_tpl->tpl_vars['adv_menu_title']->value) {?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?><?php if ($_smarty_tpl->tpl_vars['block']->value['nofollow']) {?> rel="nofollow"<?php }?><?php if ($_smarty_tpl->tpl_vars['block']->value['new_window']) {?> target="_blank"<?php }?> class="mo_advanced_ma_level_2 mo_advanced_sub_a"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],45,'...'), ENT_QUOTES, 'UTF-8', true);?>
</a></li>
												<?php } ?>
												</ul>	
											<?php }?>
										</li>
									</ul>	
								<?php } elseif ($_smarty_tpl->tpl_vars['block']->value['subtype']==0&&isset($_smarty_tpl->tpl_vars['block']->value['children']['children'])&&count($_smarty_tpl->tpl_vars['block']->value['children']['children'])) {?>
									<?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['block']->value['children']['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->_loop = true;
?>
										<ul class="mo_advanced_mu_level_1 mo_advanced_sub_ul">
											<li class="mo_advanced_ml_level_1 mo_advanced_sub_li">
												<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if (!$_smarty_tpl->tpl_vars['adv_menu_title']->value) {?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?><?php if ($_smarty_tpl->tpl_vars['block']->value['nofollow']) {?> rel="nofollow"<?php }?><?php if ($_smarty_tpl->tpl_vars['block']->value['new_window']) {?> target="_blank"<?php }?> class="mo_advanced_ma_level_1 mo_advanced_sub_a"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a>
												<?php if (isset($_smarty_tpl->tpl_vars['menu']->value['children'])&&is_array($_smarty_tpl->tpl_vars['menu']->value['children'])&&count($_smarty_tpl->tpl_vars['menu']->value['children'])) {?>
													<?php echo $_smarty_tpl->getSubTemplate ("./stadvancedmenu-category.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('nofollow'=>$_smarty_tpl->tpl_vars['block']->value['nofollow'],'new_window'=>$_smarty_tpl->tpl_vars['block']->value['new_window'],'menus'=>$_smarty_tpl->tpl_vars['menu']->value['children'],'m_level'=>2,'ismobilemenu'=>true), 0);?>

												<?php }?>
											</li>
										</ul>	
									<?php } ?>
								<?php } elseif ($_smarty_tpl->tpl_vars['block']->value['subtype']==1||$_smarty_tpl->tpl_vars['block']->value['subtype']==3) {?>
									<ul class="mo_advanced_mu_level_1 mo_advanced_sub_ul">
										<li class="mo_advanced_ml_level_1 mo_advanced_sub_li">
											<a  id="st_mo_advanced_ma_<?php echo $_smarty_tpl->tpl_vars['block']->value['id_st_advanced_menu'];?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['children']['link'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if (!$_smarty_tpl->tpl_vars['adv_menu_title']->value) {?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['children']['name'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?><?php if ($_smarty_tpl->tpl_vars['block']->value['nofollow']) {?> rel="nofollow"<?php }?><?php if ($_smarty_tpl->tpl_vars['block']->value['new_window']) {?> target="_blank"<?php }?> class="mo_advanced_ma_level_1 mo_advanced_sub_a"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['children']['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php if ($_smarty_tpl->tpl_vars['block']->value['cate_label']) {?><span class="cate_label"><?php echo $_smarty_tpl->tpl_vars['block']->value['cate_label'];?>
</span><?php }?></a>
    										<?php if (isset($_smarty_tpl->tpl_vars['block']->value['children']['children'])&&count($_smarty_tpl->tpl_vars['block']->value['children']['children'])) {?>
												<?php echo $_smarty_tpl->getSubTemplate ("./stadvancedmenu-category.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('nofollow'=>$_smarty_tpl->tpl_vars['block']->value['nofollow'],'new_window'=>$_smarty_tpl->tpl_vars['block']->value['new_window'],'menus'=>$_smarty_tpl->tpl_vars['block']->value['children']['children'],'m_level'=>2,'ismobilemenu'=>true), 0);?>

											<?php }?>
										</li>
									</ul>	
								<?php }?>
							<?php } elseif ($_smarty_tpl->tpl_vars['block']->value['item_t']==2&&isset($_smarty_tpl->tpl_vars['block']->value['children'])&&count($_smarty_tpl->tpl_vars['block']->value['children'])) {?>
								<div id="st_advanced_menu_block_<?php echo $_smarty_tpl->tpl_vars['block']->value['id_st_advanced_menu'];?>
" class="stmobileadvancedmenu_column">
								<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['block']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
									<div class="mo_advanced_pro_div">
										<a class="product_img_link"	href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['product']->value->id,$_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['product']->value->category), ENT_QUOTES, 'UTF-8', true);?>
" <?php if (!$_smarty_tpl->tpl_vars['adv_menu_title']->value) {?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?> itemprop="url"<?php if ($_smarty_tpl->tpl_vars['block']->value['nofollow']) {?> rel="nofollow"<?php }?><?php if ($_smarty_tpl->tpl_vars['block']->value['new_window']) {?> target="_blank"<?php }?>>
											<img class="replace-2x img-responsive menu_pro_img" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['product']->value->id_image,'home_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value->legend)) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->legend, ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" <?php if (!$_smarty_tpl->tpl_vars['adv_menu_title']->value) {?> title="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value->legend)) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->legend, ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['homeSize']->value)) {?> width="<?php echo $_smarty_tpl->tpl_vars['homeSize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['homeSize']->value['height'];?>
"<?php }?> itemprop="image" />
										</a>
										<a class="product-name" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['product']->value->id,$_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['product']->value->category), ENT_QUOTES, 'UTF-8', true);?>
" <?php if (!$_smarty_tpl->tpl_vars['adv_menu_title']->value) {?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?> itemprop="url"<?php if ($_smarty_tpl->tpl_vars['block']->value['nofollow']) {?> rel="nofollow"<?php }?><?php if ($_smarty_tpl->tpl_vars['block']->value['new_window']) {?> target="_blank"<?php }?>>
											<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value->name,45,'...'), ENT_QUOTES, 'UTF-8', true);?>

										</a>
									</div>
								<?php } ?>
								</div>
							<?php } elseif ($_smarty_tpl->tpl_vars['block']->value['item_t']==3&&isset($_smarty_tpl->tpl_vars['block']->value['children'])&&count($_smarty_tpl->tpl_vars['block']->value['children'])) {?>
								<?php if (isset($_smarty_tpl->tpl_vars['block']->value['subtype'])&&$_smarty_tpl->tpl_vars['block']->value['subtype']) {?>
									<?php  $_smarty_tpl->tpl_vars['brand'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['brand']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['block']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['brand']->key => $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->_loop = true;
?>
    									<ul class="mo_advanced_mu_level_1 mo_advanced_sub_ul">
											<li class="mo_advanced_ml_level_1 mo_advanced_sub_li">
												<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getmanufacturerLink($_smarty_tpl->tpl_vars['brand']->value['id_manufacturer'],$_smarty_tpl->tpl_vars['brand']->value['link_rewrite']);?>
" <?php if (!$_smarty_tpl->tpl_vars['adv_menu_title']->value) {?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?><?php if ($_smarty_tpl->tpl_vars['block']->value['nofollow']) {?> rel="nofollow"<?php }?><?php if ($_smarty_tpl->tpl_vars['block']->value['new_window']) {?> target="_blank"<?php }?> class="mo_advanced_ma_level_1 mo_advanced_sub_a"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a>
											</li>
										</ul>	
									<?php } ?>
								<?php } else { ?>
									<div id="st_advanced_menu_block_<?php echo $_smarty_tpl->tpl_vars['block']->value['id_st_advanced_menu'];?>
" class="stmobileadvancedmenu_column">
										<?php  $_smarty_tpl->tpl_vars['brand'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['brand']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['block']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['brand']->key => $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->_loop = true;
?>
	    									<div class="mo_advanced_brand_div">
												<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getmanufacturerLink($_smarty_tpl->tpl_vars['brand']->value['id_manufacturer'],$_smarty_tpl->tpl_vars['brand']->value['link_rewrite']);?>
" <?php if (!$_smarty_tpl->tpl_vars['adv_menu_title']->value) {?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?><?php if ($_smarty_tpl->tpl_vars['block']->value['nofollow']) {?> rel="nofollow"<?php }?><?php if ($_smarty_tpl->tpl_vars['block']->value['new_window']) {?> target="_blank"<?php }?> class="st_advanced_menu_brand">
								                    <img src="<?php echo $_smarty_tpl->tpl_vars['img_manu_dir']->value;?>
<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['id_manufacturer'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
-manufacturer_default.jpg" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" width="<?php echo $_smarty_tpl->tpl_vars['manufacturerSize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['manufacturerSize']->value['height'];?>
" class="replace-2x img-responsive" />
								                </a>
											</div>
										<?php } ?>
									</div>
								<?php }?>
							<?php } elseif ($_smarty_tpl->tpl_vars['block']->value['item_t']==4) {?>
								<ul class="mo_advanced_mu_level_1 mo_advanced_sub_ul">
									<li class="mo_advanced_ml_level_1 mo_advanced_sub_li">
										<a  id="st_mo_advanced_ma_<?php echo $_smarty_tpl->tpl_vars['block']->value['id_st_advanced_menu'];?>
" href="<?php if ($_smarty_tpl->tpl_vars['block']->value['m_link']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['m_link'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?>javascript:;<?php }?>" <?php if (!$_smarty_tpl->tpl_vars['adv_menu_title']->value) {?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['m_title'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?><?php if ($_smarty_tpl->tpl_vars['block']->value['nofollow']) {?> rel="nofollow"<?php }?><?php if ($_smarty_tpl->tpl_vars['block']->value['new_window']) {?> target="_blank"<?php }?> class="mo_advanced_ma_level_1 mo_advanced_sub_a <?php if (!$_smarty_tpl->tpl_vars['block']->value['m_link']) {?> advanced_ma_span<?php }?>"><?php if ($_smarty_tpl->tpl_vars['block']->value['icon_class']) {?><i class="<?php echo $_smarty_tpl->tpl_vars['block']->value['icon_class'];?>
"></i><?php }?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['m_name'], ENT_QUOTES, 'UTF-8', true);?>
<?php if ($_smarty_tpl->tpl_vars['block']->value['cate_label']) {?><span class="cate_label"><?php echo $_smarty_tpl->tpl_vars['block']->value['cate_label'];?>
</span><?php }?></a>
										<?php if (isset($_smarty_tpl->tpl_vars['block']->value['children'])&&is_array($_smarty_tpl->tpl_vars['block']->value['children'])&&count($_smarty_tpl->tpl_vars['block']->value['children'])) {?>
											<?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['block']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->_loop = true;
?>
												<?php if ($_smarty_tpl->tpl_vars['menu']->value['hide_on_mobile']==1) {?><?php continue 1?><?php }?>
												<span class="opener">&nbsp;</span>
												<ul class="mo_advanced_mu_level_2 mo_advanced_sub_ul">
												<?php echo $_smarty_tpl->getSubTemplate ("./stadvancedmenu-link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('nofollow'=>$_smarty_tpl->tpl_vars['block']->value['nofollow'],'new_window'=>$_smarty_tpl->tpl_vars['block']->value['new_window'],'menus'=>$_smarty_tpl->tpl_vars['menu']->value,'m_level'=>2,'ismobilemenu'=>true), 0);?>

												</ul>
											<?php } ?>
										<?php }?>
									</li>
								</ul>	
							<?php } elseif ($_smarty_tpl->tpl_vars['block']->value['item_t']==5&&$_smarty_tpl->tpl_vars['block']->value['html']) {?>
								<div id="st_advanced_menu_block_<?php echo $_smarty_tpl->tpl_vars['block']->value['id_st_advanced_menu'];?>
" class="stmobileadvancedmenu_column style_content">
									<?php echo $_smarty_tpl->tpl_vars['block']->value['html'];?>

								</div>
							<?php }?>
						<?php } ?>
					<?php }?>
				<?php } ?>
			<?php }?>
		</li>
	<?php } ?>
</ul>
<?php }?>
<!-- /MODULE st advancedmenu --><?php }} ?>
