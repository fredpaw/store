<?php /* Smarty version Smarty-3.1.19, created on 2015-11-20 17:34:51
         compiled from "D:\xampp\htdocs\store\modules\stblogfeaturedarticles\views\templates\hook\stblogfeaturedarticles-home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19409564ebf0b57a204-55475792%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ecc3a9388793a3dc0a580865f077a15d6c30e469' => 
    array (
      0 => 'D:\\xampp\\htdocs\\store\\modules\\stblogfeaturedarticles\\views\\templates\\hook\\stblogfeaturedarticles-home.tpl',
      1 => 1447993231,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19409564ebf0b57a204-55475792',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aw_display' => 0,
    'blogs' => 0,
    'hook_hash' => 0,
    'hide_mob' => 0,
    'isHomeVeryBottom' => 0,
    'display_as_grid' => 0,
    'isbloghomepage' => 0,
    'direction_nav' => 0,
    'blog' => 0,
    'imageSize' => 0,
    'display_viewcount' => 0,
    'slider_easing' => 0,
    'slider_slideshow' => 0,
    'slider_s_speed' => 0,
    'slider_a_speed' => 0,
    'slider_pause_on_hover' => 0,
    'slider_loop' => 0,
    'column_slider' => 0,
    'pro_per_lg' => 0,
    'pro_per_md' => 0,
    'pro_per_sm' => 0,
    'pro_per_xs' => 0,
    'pro_per_xxs' => 0,
    'slider_move' => 0,
    'has_background_img' => 0,
    'speed' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564ebf0b8addc9_41622423',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564ebf0b8addc9_41622423')) {function content_564ebf0b8addc9_41622423($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'D:\\xampp\\htdocs\\store\\tools\\smarty\\plugins\\modifier.replace.php';
?>
<!-- St Blog featured articles -->
<?php if ($_smarty_tpl->tpl_vars['aw_display']->value||(is_array($_smarty_tpl->tpl_vars['blogs']->value)&&count($_smarty_tpl->tpl_vars['blogs']->value))) {?>
<div id="st_blog_featured_article_container_<?php echo $_smarty_tpl->tpl_vars['hook_hash']->value;?>
" class="st_blog_featured_article_container block <?php if ($_smarty_tpl->tpl_vars['hide_mob']->value) {?> hidden-xs <?php }?>">
<?php if (isset($_smarty_tpl->tpl_vars['isHomeVeryBottom']->value)&&$_smarty_tpl->tpl_vars['isHomeVeryBottom']->value) {?><div class="wide_container"><div class="container"><?php }?>
<section id="st_blog_featured_article<?php echo $_smarty_tpl->tpl_vars['hook_hash']->value;?>
" class="st_blog_featured_article section">
	<h3 class="title_block"><span><?php echo smartyTranslate(array('s'=>'Featured articles ','mod'=>'stblogfeaturedarticles'),$_smarty_tpl);?>
</span></h3>
    <script type="text/javascript">
    //<![CDATA[
    var featured_article_itemslider_options<?php echo $_smarty_tpl->tpl_vars['hook_hash']->value;?>
;
    //]]>
    </script>
    <?php if (is_array($_smarty_tpl->tpl_vars['blogs']->value)&&count($_smarty_tpl->tpl_vars['blogs']->value)) {?>
    <?php if (!isset($_smarty_tpl->tpl_vars['display_as_grid']->value)||!$_smarty_tpl->tpl_vars['display_as_grid']->value) {?>
        <div id="featured_article_itemslider-<?php echo $_smarty_tpl->tpl_vars['hook_hash']->value;?>
" class="featured_article_itemslider flexslider">
            <div class="<?php if (!isset($_smarty_tpl->tpl_vars['isbloghomepage']->value)&&isset($_smarty_tpl->tpl_vars['direction_nav']->value)&&$_smarty_tpl->tpl_vars['direction_nav']->value) {?>nav_left_right<?php } else { ?>nav_top_right<?php }?>"></div>
            <div class="sliderwrap products_slider">
                <ul class="slides">
                <?php  $_smarty_tpl->tpl_vars['blog'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['blog']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blogs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['blog']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['blog']->iteration=0;
 $_smarty_tpl->tpl_vars['blog']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['blog']->key => $_smarty_tpl->tpl_vars['blog']->value) {
$_smarty_tpl->tpl_vars['blog']->_loop = true;
 $_smarty_tpl->tpl_vars['blog']->iteration++;
 $_smarty_tpl->tpl_vars['blog']->index++;
 $_smarty_tpl->tpl_vars['blog']->first = $_smarty_tpl->tpl_vars['blog']->index === 0;
 $_smarty_tpl->tpl_vars['blog']->last = $_smarty_tpl->tpl_vars['blog']->iteration === $_smarty_tpl->tpl_vars['blog']->total;
?>
                    <li class="block_blog <?php if ($_smarty_tpl->tpl_vars['blog']->first) {?>first_item<?php } elseif ($_smarty_tpl->tpl_vars['blog']->last) {?>last_item<?php } else { ?>item<?php }?>">
                        <div class="blog_image">
                            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['blog']->value['cover']['links']['medium'];?>
" alt="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" width="<?php echo $_smarty_tpl->tpl_vars['imageSize']->value[1]['medium'][0];?>
" height="<?php echo $_smarty_tpl->tpl_vars['imageSize']->value[1]['medium'][1];?>
" class="hover_effect" />
                            <?php if ($_smarty_tpl->tpl_vars['blog']->value['type']==2) {?>
                                <span class="icon_wrap"><i class="icon-camera-2 icon-1x"></i></span>
                            <?php } elseif ($_smarty_tpl->tpl_vars['blog']->value['type']==3) {?>
                                <span class="icon_wrap"><i class="icon-video icon-1x"></i></span>
                            <?php }?>
                            </a>
                        </div>
                        <p class="s_title_block"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'),70,'...');?>
</a></p>

                        <?php if ($_smarty_tpl->tpl_vars['blog']->value['content_short']) {?><p class="blok_blog_short_content"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['blog']->value['content_short']),120,'...');?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Read More','mod'=>'stblogfeaturedarticles'),$_smarty_tpl);?>
" class="go"><?php echo smartyTranslate(array('s'=>'Read More','mod'=>'stblogfeaturedarticles'),$_smarty_tpl);?>
</a></p><?php }?>
                        <div class="blog_info">
                            <span class="date-add"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->tpl_vars['blog']->value['date_add'],'full'=>0),$_smarty_tpl);?>
</span>
                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAnywhere','function'=>"getCommentNumber",'id_blog'=>$_smarty_tpl->tpl_vars['blog']->value['id_st_blog'],'link_rewrite'=>$_smarty_tpl->tpl_vars['blog']->value['link_rewrite'],'mod'=>'stblogcomments','caller'=>'stblogcomments'),$_smarty_tpl);?>

                            <?php if ($_smarty_tpl->tpl_vars['display_viewcount']->value) {?><span><i class="icon-eye-2 icon-mar-lr2"></i><?php echo $_smarty_tpl->tpl_vars['blog']->value['counter'];?>
</span><?php }?>
                        </div>
                    </li>
                <?php } ?>
                </ul>
            </div>
        </div>
        <script type="text/javascript">
        //<![CDATA[
        
        jQuery(function($) {
            featured_article_itemslider_options<?php echo $_smarty_tpl->tpl_vars['hook_hash']->value;?>
 = {
                easing: "<?php echo $_smarty_tpl->tpl_vars['slider_easing']->value;?>
",
                useCSS: false,
                slideshow: <?php if ($_smarty_tpl->tpl_vars['slider_slideshow']->value===false) {?>0<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['slider_slideshow']->value;?>
<?php }?>,
                slideshowSpeed: <?php if ($_smarty_tpl->tpl_vars['slider_s_speed']->value===false) {?>7000<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['slider_s_speed']->value;?>
<?php }?>,
                animationSpeed: <?php if ($_smarty_tpl->tpl_vars['slider_a_speed']->value===false) {?>400<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['slider_a_speed']->value;?>
<?php }?>,
                pauseOnHover: <?php if ($_smarty_tpl->tpl_vars['slider_pause_on_hover']->value===false) {?>1<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['slider_pause_on_hover']->value;?>
<?php }?>,
                direction: "horizontal",
                animation: "slide",
                animationLoop: <?php if ($_smarty_tpl->tpl_vars['slider_loop']->value===false) {?>1<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['slider_loop']->value;?>
<?php }?>,
                controlNav: false,
                controlsContainer: "#featured_article_itemslider-<?php echo $_smarty_tpl->tpl_vars['hook_hash']->value;?>
 <?php if (!isset($_smarty_tpl->tpl_vars['isbloghomepage']->value)&&isset($_smarty_tpl->tpl_vars['direction_nav']->value)&&$_smarty_tpl->tpl_vars['direction_nav']->value) {?>.nav_left_right<?php } else { ?>.nav_top_right<?php }?>",
                itemWidth: 260,
                <?php if (isset($_smarty_tpl->tpl_vars['column_slider']->value)&&$_smarty_tpl->tpl_vars['column_slider']->value) {?>
                minItems: getFlexSliderSize({'lg':1,'md':1,'sm':1,'xs':1,'xxs':1}),
                maxItems: getFlexSliderSize({'lg':1,'md':1,'sm':1,'xs':1,'xxs':1}),
                <?php } else { ?>
                minItems: getFlexSliderSize({'lg':<?php echo $_smarty_tpl->tpl_vars['pro_per_lg']->value;?>
,'md':<?php echo $_smarty_tpl->tpl_vars['pro_per_md']->value;?>
,'sm':<?php echo $_smarty_tpl->tpl_vars['pro_per_sm']->value;?>
,'xs':<?php echo $_smarty_tpl->tpl_vars['pro_per_xs']->value;?>
,'xxs':<?php echo $_smarty_tpl->tpl_vars['pro_per_xxs']->value;?>
}),
                maxItems: getFlexSliderSize({'lg':<?php echo $_smarty_tpl->tpl_vars['pro_per_lg']->value;?>
,'md':<?php echo $_smarty_tpl->tpl_vars['pro_per_md']->value;?>
,'sm':<?php echo $_smarty_tpl->tpl_vars['pro_per_sm']->value;?>
,'xs':<?php echo $_smarty_tpl->tpl_vars['pro_per_xs']->value;?>
,'xxs':<?php echo $_smarty_tpl->tpl_vars['pro_per_xxs']->value;?>
}),
                <?php }?>
                move: <?php if ($_smarty_tpl->tpl_vars['slider_move']->value===false) {?>0<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['slider_move']->value;?>
<?php }?>,
                prevText: '<i class="icon-left-open-3"></i>',
                nextText: '<i class="icon-right-open-3"></i>',
                productSlider:true,
                allowOneSlide:false
            };
            $('#featured_article_itemslider-<?php echo $_smarty_tpl->tpl_vars['hook_hash']->value;?>
 .sliderwrap').flexslider(featured_article_itemslider_options<?php echo $_smarty_tpl->tpl_vars['hook_hash']->value;?>
);
            
            var featured_article_itemslider_rs<?php echo $_smarty_tpl->tpl_vars['hook_hash']->value;?>
;
            $(window).resize(function(){
                clearTimeout(featured_article_itemslider_rs<?php echo $_smarty_tpl->tpl_vars['hook_hash']->value;?>
);
                var rand_s = parseInt(Math.random()*200 + 300);
                featured_article_itemslider_rs<?php echo $_smarty_tpl->tpl_vars['hook_hash']->value;?>
 = setTimeout(function() {
                    <?php if (isset($_smarty_tpl->tpl_vars['column_slider']->value)&&$_smarty_tpl->tpl_vars['column_slider']->value) {?>
                    var flexSliderSize = getFlexSliderSize({'lg':1,'md':1,'sm':1,'xs':1,'xxs':1});
                    <?php } else { ?>
                    var flexSliderSize = getFlexSliderSize({'lg':<?php echo $_smarty_tpl->tpl_vars['pro_per_lg']->value;?>
,'md':<?php echo $_smarty_tpl->tpl_vars['pro_per_md']->value;?>
,'sm':<?php echo $_smarty_tpl->tpl_vars['pro_per_sm']->value;?>
,'xs':<?php echo $_smarty_tpl->tpl_vars['pro_per_xs']->value;?>
,'xxs':<?php echo $_smarty_tpl->tpl_vars['pro_per_xxs']->value;?>
});
                    <?php }?>
                    var flexslide_object = $('#featured_article_itemslider-<?php echo $_smarty_tpl->tpl_vars['hook_hash']->value;?>
 .sliderwrap').data('flexslider');
                    if(flexSliderSize && flexslide_object != null )
                        flexslide_object.setVars({'minItems': flexSliderSize, 'maxItems': flexSliderSize});
                }, rand_s);
            });
        });
         
        //]]>
        </script>
    <?php } else { ?>
        <ul class="row blog_row_list">
        <?php  $_smarty_tpl->tpl_vars['blog'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['blog']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blogs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['blog']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['blog']->iteration=0;
 $_smarty_tpl->tpl_vars['blog']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['blog']->key => $_smarty_tpl->tpl_vars['blog']->value) {
$_smarty_tpl->tpl_vars['blog']->_loop = true;
 $_smarty_tpl->tpl_vars['blog']->iteration++;
 $_smarty_tpl->tpl_vars['blog']->index++;
 $_smarty_tpl->tpl_vars['blog']->first = $_smarty_tpl->tpl_vars['blog']->index === 0;
 $_smarty_tpl->tpl_vars['blog']->last = $_smarty_tpl->tpl_vars['blog']->iteration === $_smarty_tpl->tpl_vars['blog']->total;
?>
            <li class="block_blog col-lg-<?php echo smarty_modifier_replace((12/$_smarty_tpl->tpl_vars['pro_per_lg']->value),'.','-');?>
 col-md-<?php echo smarty_modifier_replace((12/$_smarty_tpl->tpl_vars['pro_per_md']->value),'.','-');?>
 col-sm-<?php echo smarty_modifier_replace((12/$_smarty_tpl->tpl_vars['pro_per_sm']->value),'.','-');?>
 col-xs-<?php echo smarty_modifier_replace((12/$_smarty_tpl->tpl_vars['pro_per_xs']->value),'.','-');?>
 col-xxs-<?php echo smarty_modifier_replace((12/$_smarty_tpl->tpl_vars['pro_per_xxs']->value),'.','-');?>
  <?php if ($_smarty_tpl->tpl_vars['blog']->iteration%$_smarty_tpl->tpl_vars['pro_per_lg']->value==1) {?> first-item-of-desktop-line<?php }?><?php if ($_smarty_tpl->tpl_vars['blog']->iteration%$_smarty_tpl->tpl_vars['pro_per_md']->value==1) {?> first-item-of-line<?php }?><?php if ($_smarty_tpl->tpl_vars['blog']->iteration%$_smarty_tpl->tpl_vars['pro_per_sm']->value==1) {?> first-item-of-tablet-line<?php }?><?php if ($_smarty_tpl->tpl_vars['blog']->iteration%$_smarty_tpl->tpl_vars['pro_per_xs']->value==1) {?> first-item-of-mobile-line<?php }?><?php if ($_smarty_tpl->tpl_vars['blog']->iteration%$_smarty_tpl->tpl_vars['pro_per_xxs']->value==1) {?> first-item-of-portrait-line<?php }?> clearfix">
                <div class="blog_image">
                    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['blog']->value['cover']['links']['small'];?>
" alt="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" width="<?php echo $_smarty_tpl->tpl_vars['imageSize']->value[1]['small'][0];?>
" height="<?php echo $_smarty_tpl->tpl_vars['imageSize']->value[1]['small'][1];?>
" class="hover_effect" />
                    <?php if ($_smarty_tpl->tpl_vars['blog']->value['type']==2) {?>
                        <span class="icon_wrap"><i class="icon-camera-2 icon-1x"></i></span>
                    <?php } elseif ($_smarty_tpl->tpl_vars['blog']->value['type']==3) {?>
                        <span class="icon_wrap"><i class="icon-video icon-1x"></i></span>
                    <?php }?>                 
                    </a>
                </div>
                <p class="s_title_block"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'),70,'...');?>
</a></p>
                <?php if ($_smarty_tpl->tpl_vars['blog']->value['content_short']) {?><p class="blok_blog_short_content"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['blog']->value['content_short']),120,'...');?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Read More','mod'=>'stblogfeaturedarticles'),$_smarty_tpl);?>
" class="go"><?php echo smartyTranslate(array('s'=>'Read More','mod'=>'stblogfeaturedarticles'),$_smarty_tpl);?>
</a></p><?php }?>
                <div class="blog_info">
                    <span class="date-add"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->tpl_vars['blog']->value['date_add'],'full'=>0),$_smarty_tpl);?>
</span>
                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAnywhere','function'=>"getCommentNumber",'id_blog'=>$_smarty_tpl->tpl_vars['blog']->value['id_st_blog'],'link_rewrite'=>$_smarty_tpl->tpl_vars['blog']->value['link_rewrite'],'mod'=>'stblogcomments','caller'=>'stblogcomments'),$_smarty_tpl);?>

                    <?php if ($_smarty_tpl->tpl_vars['display_viewcount']->value) {?><span><i class="icon-eye-2 icon-mar-lr2"></i><?php echo $_smarty_tpl->tpl_vars['blog']->value['counter'];?>
</span><?php }?>
                </div>
            </li>
        <?php } ?>
        </ul>
    <?php }?>
    <?php } else { ?>
        <p class="warning"><?php echo smartyTranslate(array('s'=>'No featured articles','mod'=>'stblogfeaturedarticles'),$_smarty_tpl);?>
</p>
    <?php }?>
</section>
<?php if (isset($_smarty_tpl->tpl_vars['isHomeVeryBottom']->value)&&$_smarty_tpl->tpl_vars['isHomeVeryBottom']->value) {?></div></div><?php }?>
</div>
<?php if (isset($_smarty_tpl->tpl_vars['has_background_img']->value)&&$_smarty_tpl->tpl_vars['has_background_img']->value&&isset($_smarty_tpl->tpl_vars['speed']->value)&&$_smarty_tpl->tpl_vars['speed']->value) {?>
<script type="text/javascript">
//<![CDATA[

jQuery(function($) {
    $('#st_blog_featured_article_container_<?php echo $_smarty_tpl->tpl_vars['hook_hash']->value;?>
').parallax("50%", <?php echo floatval($_smarty_tpl->tpl_vars['speed']->value);?>
);
});
 
//]]>
</script>
<?php }?>
<?php }?>
<!-- /St Blog featured articles  --><?php }} ?>
