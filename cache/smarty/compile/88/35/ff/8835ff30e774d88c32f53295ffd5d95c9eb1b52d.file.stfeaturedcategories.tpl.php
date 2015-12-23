<?php /* Smarty version Smarty-3.1.19, created on 2015-12-22 18:16:22
         compiled from "D:\xampp\htdocs\store\modules\stfeaturedcategories\views\templates\hook\stfeaturedcategories.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27955678f8c666c412-46958486%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8835ff30e774d88c32f53295ffd5d95c9eb1b52d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\store\\modules\\stfeaturedcategories\\views\\templates\\hook\\stfeaturedcategories.tpl',
      1 => 1449038240,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27955678f8c666c412-46958486',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'featured_categories' => 0,
    'featured_cate_per_lg' => 0,
    'featured_cate_per_md' => 0,
    'featured_cate_per_sm' => 0,
    'featured_cate_per_xs' => 0,
    'featured_cate_per_xxs' => 0,
    'f_c_image' => 0,
    'category' => 0,
    'link' => 0,
    'mediumSize' => 0,
    'img_cat_dir' => 0,
    'lang_iso' => 0,
    'f_c_number' => 0,
    'subcate' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5678f8c689ba07_57323267',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5678f8c689ba07_57323267')) {function content_5678f8c689ba07_57323267($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'D:\\xampp\\htdocs\\store\\tools\\smarty\\plugins\\modifier.replace.php';
?>
<!-- Featured categories -->
<?php if (isset($_smarty_tpl->tpl_vars['featured_categories']->value)&&is_array($_smarty_tpl->tpl_vars['featured_categories']->value)&&count($_smarty_tpl->tpl_vars['featured_categories']->value)) {?>
<section id="featured_categories_block" class="block section">
	<h4 class="title_block mar_b1"><span><?php echo smartyTranslate(array('s'=>'Featured categories','mod'=>'stfeaturedcategories'),$_smarty_tpl);?>
</span></h4>
    <ul class="featured_categories_list row">
    <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['featured_categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['category']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
 $_smarty_tpl->tpl_vars['category']->iteration++;
?>
        <li class="col-lg-<?php echo smarty_modifier_replace((12/$_smarty_tpl->tpl_vars['featured_cate_per_lg']->value),'.','-');?>
 col-md-<?php echo smarty_modifier_replace((12/$_smarty_tpl->tpl_vars['featured_cate_per_md']->value),'.','-');?>
 col-sm-<?php echo smarty_modifier_replace((12/$_smarty_tpl->tpl_vars['featured_cate_per_sm']->value),'.','-');?>
 col-xs-<?php echo smarty_modifier_replace((12/$_smarty_tpl->tpl_vars['featured_cate_per_xs']->value),'.','-');?>
 col-xxs-<?php echo smarty_modifier_replace((12/$_smarty_tpl->tpl_vars['featured_cate_per_xxs']->value),'.','-');?>
  <?php if ($_smarty_tpl->tpl_vars['category']->iteration%$_smarty_tpl->tpl_vars['featured_cate_per_lg']->value==1) {?> first-item-of-desktop-line<?php }?><?php if ($_smarty_tpl->tpl_vars['category']->iteration%$_smarty_tpl->tpl_vars['featured_cate_per_md']->value==1) {?> first-item-of-line<?php }?><?php if ($_smarty_tpl->tpl_vars['category']->iteration%$_smarty_tpl->tpl_vars['featured_cate_per_sm']->value==1) {?> first-item-of-tablet-line<?php }?><?php if ($_smarty_tpl->tpl_vars['category']->iteration%$_smarty_tpl->tpl_vars['featured_cate_per_xs']->value==1) {?> first-item-of-mobile-line<?php }?><?php if ($_smarty_tpl->tpl_vars['category']->iteration%$_smarty_tpl->tpl_vars['featured_cate_per_xxs']->value==1) {?> first-item-of-portrait-line<?php }?>">
            <?php if ($_smarty_tpl->tpl_vars['f_c_image']->value) {?>
            <a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['category']->value['id_category'],$_smarty_tpl->tpl_vars['category']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="fc_cat_image">
            <?php if ($_smarty_tpl->tpl_vars['category']->value['id_image']) {?>
				<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCatImageLink($_smarty_tpl->tpl_vars['category']->value['link_rewrite'],$_smarty_tpl->tpl_vars['category']->value['id_image'],'medium_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" width="<?php echo $_smarty_tpl->tpl_vars['mediumSize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['mediumSize']->value['height'];?>
" class="replace-2x img-responsive" />
			<?php } else { ?>
				<img src="<?php echo $_smarty_tpl->tpl_vars['img_cat_dir']->value;?>
<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
-default-medium_default.jpg" alt="" width="<?php echo $_smarty_tpl->tpl_vars['mediumSize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['mediumSize']->value['height'];?>
" class="replace-2x img-responsive" />
			<?php }?>
            </a>
            <?php }?>
            <p class="fc_cat_name s_title_block"><a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['category']->value['id_category'],$_smarty_tpl->tpl_vars['category']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['category']->value['name'],35,'...'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a></p>
            <?php if (isset($_smarty_tpl->tpl_vars['category']->value['children'])&&count($_smarty_tpl->tpl_vars['category']->value['children'])) {?>
            <dl>
                <?php  $_smarty_tpl->tpl_vars['subcate'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subcate']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['subcate']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['subcate']->key => $_smarty_tpl->tpl_vars['subcate']->value) {
$_smarty_tpl->tpl_vars['subcate']->_loop = true;
 $_smarty_tpl->tpl_vars['subcate']->index++;
?>
                    <?php if ($_smarty_tpl->tpl_vars['subcate']->index<$_smarty_tpl->tpl_vars['f_c_number']->value) {?>
                        <dd><a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['subcate']->value['id_category'],$_smarty_tpl->tpl_vars['subcate']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['subcate']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['subcate']->value['name'],35,'...'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a></dd>
                    <?php }?>
                <?php } ?>
            </dl>
            <?php }?>
        </li>
    <?php } ?>
    </ul>
</section>
<?php }?>
<!--/ Featured categories --><?php }} ?>
