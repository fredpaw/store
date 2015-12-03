<?php /* Smarty version Smarty-3.1.19, created on 2015-12-02 17:48:56
         compiled from "D:\xampp\htdocs\store\modules\stbrandsslider\views\templates\hook\stbrandsslider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9782564ebf0b9bf631-87217902%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26acc2855d972b83b22a19df77099442dff7199b' => 
    array (
      0 => 'D:\\xampp\\htdocs\\store\\modules\\stbrandsslider\\views\\templates\\hook\\stbrandsslider.tpl',
      1 => 1449038240,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9782564ebf0b9bf631-87217902',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564ebf0ba82270_25758760',
  'variables' => 
  array (
    'brands' => 0,
    'hook_hash' => 0,
    'homeverybottom' => 0,
    'brandsslider_footer' => 0,
    'link' => 0,
    'direction_nav' => 0,
    'brand' => 0,
    'img_manu_dir' => 0,
    'manufacturerSize' => 0,
    'brand_slider_easing' => 0,
    'brand_slider_slideshow' => 0,
    'brand_slider_s_speed' => 0,
    'brand_slider_a_speed' => 0,
    'brand_slider_pause_on_hover' => 0,
    'brand_slider_loop' => 0,
    'pro_per_lg' => 0,
    'pro_per_md' => 0,
    'pro_per_sm' => 0,
    'pro_per_xs' => 0,
    'pro_per_xxs' => 0,
    'brand_slider_move' => 0,
    'has_background_img' => 0,
    'speed' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564ebf0ba82270_25758760')) {function content_564ebf0ba82270_25758760($_smarty_tpl) {?>
<!-- Block brands slider module -->
<?php if (isset($_smarty_tpl->tpl_vars['brands']->value)&&count($_smarty_tpl->tpl_vars['brands']->value)) {?>
<div id="brands_slider_container_<?php echo $_smarty_tpl->tpl_vars['hook_hash']->value;?>
" class="brands_slider_container block">
<?php if (isset($_smarty_tpl->tpl_vars['homeverybottom']->value)&&$_smarty_tpl->tpl_vars['homeverybottom']->value) {?><div class="wide_container"><div class="container"><?php }?>
<section id="brands_slider_<?php echo $_smarty_tpl->tpl_vars['hook_hash']->value;?>
" class="brands_slider section <?php if (isset($_smarty_tpl->tpl_vars['brandsslider_footer']->value)) {?> col-xs-12 <?php }?>">
    <h4 class="title_block"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('manufacturer'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Product Brands','mod'=>'stbrandsslider'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Product Brands','mod'=>'stbrandsslider'),$_smarty_tpl);?>
</a></h4>
    <div id="brands-itemslider-<?php echo $_smarty_tpl->tpl_vars['hook_hash']->value;?>
" class="brands-itemslider flexslider">
    	<div class="<?php if (isset($_smarty_tpl->tpl_vars['direction_nav']->value)&&$_smarty_tpl->tpl_vars['direction_nav']->value) {?>nav_left_right<?php } else { ?>nav_top_right<?php }?>"></div>
        <div class="sliderwrap">
            <ul class="slides">
            	<?php  $_smarty_tpl->tpl_vars['brand'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['brand']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['brands']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['brand']->key => $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->_loop = true;
?>
                <li>
            	<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getmanufacturerLink($_smarty_tpl->tpl_vars['brand']->value['id_manufacturer'],$_smarty_tpl->tpl_vars['brand']->value['link_rewrite']);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['img_manu_dir']->value;?>
<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['id_manufacturer'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
-manufacturer_default.jpg" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" width="<?php echo $_smarty_tpl->tpl_vars['manufacturerSize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['manufacturerSize']->value['height'];?>
" class="replace-2x img-responsive" />
                </a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</section>

<script type="text/javascript">
//<![CDATA[

jQuery(function($) {
    $('#brands-itemslider-<?php echo $_smarty_tpl->tpl_vars['hook_hash']->value;?>
 .sliderwrap').flexslider({
		easing: "<?php echo $_smarty_tpl->tpl_vars['brand_slider_easing']->value;?>
",
        useCSS: false,
		slideshow: <?php echo $_smarty_tpl->tpl_vars['brand_slider_slideshow']->value;?>
,
        slideshowSpeed: <?php echo $_smarty_tpl->tpl_vars['brand_slider_s_speed']->value;?>
,
		animationSpeed: <?php echo $_smarty_tpl->tpl_vars['brand_slider_a_speed']->value;?>
,
		pauseOnHover: <?php echo $_smarty_tpl->tpl_vars['brand_slider_pause_on_hover']->value;?>
,
        direction: "horizontal",
        animation: "slide",
		animationLoop: <?php echo $_smarty_tpl->tpl_vars['brand_slider_loop']->value;?>
,
		controlNav: false,
		controlsContainer: "#brands-itemslider-<?php echo $_smarty_tpl->tpl_vars['hook_hash']->value;?>
 <?php if (isset($_smarty_tpl->tpl_vars['direction_nav']->value)&&$_smarty_tpl->tpl_vars['direction_nav']->value) {?>.nav_left_right<?php } else { ?>.nav_top_right<?php }?>",
		itemWidth: 164,
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
    	move: <?php echo $_smarty_tpl->tpl_vars['brand_slider_move']->value;?>
,
        prevText: '<i class="icon-left-open-3"></i>',
        nextText: '<i class="icon-right-open-3"></i>',
        productSlider:true,
        allowOneSlide:false
    });
    var brands_flexslider_rs<?php echo $_smarty_tpl->tpl_vars['hook_hash']->value;?>
;
    $(window).resize(function(){
        clearTimeout(brands_flexslider_rs<?php echo $_smarty_tpl->tpl_vars['hook_hash']->value;?>
);
        var rand_s = parseInt(Math.random()*200 + 300);
        brands_flexslider_rs<?php echo $_smarty_tpl->tpl_vars['hook_hash']->value;?>
 = setTimeout(function() {
            var flexSliderSize = getFlexSliderSize({'lg':<?php echo $_smarty_tpl->tpl_vars['pro_per_lg']->value;?>
,'md':<?php echo $_smarty_tpl->tpl_vars['pro_per_md']->value;?>
,'sm':<?php echo $_smarty_tpl->tpl_vars['pro_per_sm']->value;?>
,'xs':<?php echo $_smarty_tpl->tpl_vars['pro_per_xs']->value;?>
,'xxs':<?php echo $_smarty_tpl->tpl_vars['pro_per_xxs']->value;?>
});
            var flexslide_object = $('#brands-itemslider-<?php echo $_smarty_tpl->tpl_vars['hook_hash']->value;?>
 .sliderwrap').data('flexslider');
            if(flexSliderSize && flexslide_object != null )
                flexslide_object.setVars({'minItems': flexSliderSize, 'maxItems': flexSliderSize});
    	}, rand_s);
    });
});
 
//]]>
</script>
<?php if (isset($_smarty_tpl->tpl_vars['homeverybottom']->value)&&$_smarty_tpl->tpl_vars['homeverybottom']->value) {?></div></div><?php }?>
</div>
<?php if ($_smarty_tpl->tpl_vars['has_background_img']->value&&$_smarty_tpl->tpl_vars['speed']->value) {?>
<script type="text/javascript">
//<![CDATA[

jQuery(function($) {
     $('#brands_slider_container_<?php echo $_smarty_tpl->tpl_vars['hook_hash']->value;?>
').parallax("50%", <?php echo floatval($_smarty_tpl->tpl_vars['speed']->value);?>
);
});
 
//]]>
</script>
<?php }?>
<?php }?>
<!-- /Block brands slider module --><?php }} ?>
