<?php /* Smarty version Smarty-3.1.19, created on 2015-12-22 18:17:47
         compiled from "D:\xampp\htdocs\store\modules\stproductcategoriesslider\views\templates\hook\stproductcategoriesslider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:297025678f91bbd5179-57017858%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f27728b67bd6109afe0dcb6627ebc4aeaed627c1' => 
    array (
      0 => 'D:\\xampp\\htdocs\\store\\modules\\stproductcategoriesslider\\views\\templates\\hook\\stproductcategoriesslider.tpl',
      1 => 1449038242,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '297025678f91bbd5179-57017858',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'column_slider' => 0,
    'product_categories' => 0,
    'homeverybottom' => 0,
    'p_c' => 0,
    'hide_mob' => 0,
    'countdown_on' => 0,
    'display_as_grid' => 0,
    'link' => 0,
    'hook_hash' => 0,
    'pro_cate_easing' => 0,
    'pro_cate_slideshow' => 0,
    'pro_cate_s_speed' => 0,
    'pro_cate_a_speed' => 0,
    'pro_cate_pause_on_hover' => 0,
    'pro_cate_loop' => 0,
    'pro_per_lg' => 0,
    'pro_per_md' => 0,
    'pro_per_sm' => 0,
    'pro_per_xs' => 0,
    'pro_per_xxs' => 0,
    'pro_cate_move' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5678f91bf2cc24_04603919',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5678f91bf2cc24_04603919')) {function content_5678f91bf2cc24_04603919($_smarty_tpl) {?>

<!-- MODULE Product categories slider -->
<?php $_smarty_tpl->_capture_stack[0][] = array("column_slider", null, null); ob_start(); ?><?php if (isset($_smarty_tpl->tpl_vars['column_slider']->value)&&$_smarty_tpl->tpl_vars['column_slider']->value) {?>_column<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php if (isset($_smarty_tpl->tpl_vars['product_categories']->value)&&count($_smarty_tpl->tpl_vars['product_categories']->value)) {?>
    <?php  $_smarty_tpl->tpl_vars['p_c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p_c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product_categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p_c']->key => $_smarty_tpl->tpl_vars['p_c']->value) {
$_smarty_tpl->tpl_vars['p_c']->_loop = true;
?>
        <?php if (isset($_smarty_tpl->tpl_vars['homeverybottom']->value)&&$_smarty_tpl->tpl_vars['homeverybottom']->value) {?><div id="product_categories_slider_container_<?php echo $_smarty_tpl->tpl_vars['p_c']->value['id_category'];?>
" class="wide_container <?php if ($_smarty_tpl->tpl_vars['hide_mob']->value) {?> hidden-xs <?php }?> block"><div class="container"><?php }?>
        <section id="product_categories_slider_<?php echo $_smarty_tpl->tpl_vars['p_c']->value['id_category'];?>
" class="product_categories_slider_block<?php echo Smarty::$_smarty_vars['capture']['column_slider'];?>
<?php if (!isset($_smarty_tpl->tpl_vars['homeverybottom']->value)||!$_smarty_tpl->tpl_vars['homeverybottom']->value) {?> block<?php }?> products_block section <?php if ($_smarty_tpl->tpl_vars['hide_mob']->value) {?> hidden-xs <?php }?> <?php if ($_smarty_tpl->tpl_vars['countdown_on']->value) {?> s_countdown_block<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['display_as_grid']->value)&&$_smarty_tpl->tpl_vars['display_as_grid']->value) {?> display_as_grid <?php }?>">
            <h4 class="title_block mar_b1">
                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['p_c']->value['id_category'],$_smarty_tpl->tpl_vars['p_c']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p_c']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p_c']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a>
            </h4>            
	        <?php if (isset($_smarty_tpl->tpl_vars['p_c']->value['products'])&&$_smarty_tpl->tpl_vars['p_c']->value['products']) {?>
            <?php if (!isset($_smarty_tpl->tpl_vars['display_as_grid']->value)||!$_smarty_tpl->tpl_vars['display_as_grid']->value||(isset($_smarty_tpl->tpl_vars['display_as_grid']->value)&&$_smarty_tpl->tpl_vars['display_as_grid']->value&&isset($_smarty_tpl->tpl_vars['column_slider']->value)&&$_smarty_tpl->tpl_vars['column_slider']->value)) {?>
            <div id="product_categories-itemslider-<?php echo $_smarty_tpl->tpl_vars['hook_hash']->value;?>
<?php echo Smarty::$_smarty_vars['capture']['column_slider'];?>
_<?php echo $_smarty_tpl->tpl_vars['p_c']->value['id_category'];?>
" class="flexslider product_categories-itemslider<?php echo Smarty::$_smarty_vars['capture']['column_slider'];?>
">
                <?php if (isset($_smarty_tpl->tpl_vars['column_slider']->value)&&$_smarty_tpl->tpl_vars['column_slider']->value) {?>
            	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-slider-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['p_c']->value['products']), 0);?>

                <?php } else { ?>
            	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['p_c']->value['products'],'direction_nav'=>$_smarty_tpl->tpl_vars['p_c']->value['direction_nav']), 0);?>

                <?php }?>
        	</div>
            <script type="text/javascript">
            //<![CDATA[
            
            jQuery(function($) {

                <?php if (!Smarty::$_smarty_vars['capture']['column_slider']&&isset($_smarty_tpl->tpl_vars['p_c']->value['speed'])&&$_smarty_tpl->tpl_vars['p_c']->value['speed']&&((isset($_smarty_tpl->tpl_vars['p_c']->value['bg_img'])&&$_smarty_tpl->tpl_vars['p_c']->value['bg_img'])||(isset($_smarty_tpl->tpl_vars['p_c']->value['bg_pattern'])&&$_smarty_tpl->tpl_vars['p_c']->value['bg_pattern']))) {?>
                $('#product_categories_slider_<?php if (isset($_smarty_tpl->tpl_vars['homeverybottom']->value)&&$_smarty_tpl->tpl_vars['homeverybottom']->value) {?>container_<?php }?><?php echo $_smarty_tpl->tpl_vars['p_c']->value['id_category'];?>
').parallax("50%", <?php echo floatval($_smarty_tpl->tpl_vars['p_c']->value['speed']);?>
);
                <?php }?>

                $('#product_categories-itemslider-<?php echo $_smarty_tpl->tpl_vars['hook_hash']->value;?>
<?php echo Smarty::$_smarty_vars['capture']['column_slider'];?>
_<?php echo $_smarty_tpl->tpl_vars['p_c']->value['id_category'];?>
 .sliderwrap').flexslider({
            		easing: "<?php echo $_smarty_tpl->tpl_vars['pro_cate_easing']->value;?>
",
                    useCSS: false,
            		slideshow: <?php echo $_smarty_tpl->tpl_vars['pro_cate_slideshow']->value;?>
,
                    slideshowSpeed: <?php echo $_smarty_tpl->tpl_vars['pro_cate_s_speed']->value;?>
,
            		animationSpeed: <?php echo $_smarty_tpl->tpl_vars['pro_cate_a_speed']->value;?>
,
            		pauseOnHover: <?php echo $_smarty_tpl->tpl_vars['pro_cate_pause_on_hover']->value;?>
,
                    direction: "horizontal",
                    animation: "slide",
            		animationLoop: <?php echo $_smarty_tpl->tpl_vars['pro_cate_loop']->value;?>
,
            		controlNav: false,
            		controlsContainer: "#product_categories-itemslider-<?php echo $_smarty_tpl->tpl_vars['hook_hash']->value;?>
<?php echo Smarty::$_smarty_vars['capture']['column_slider'];?>
_<?php echo $_smarty_tpl->tpl_vars['p_c']->value['id_category'];?>
 <?php if ($_smarty_tpl->tpl_vars['p_c']->value['direction_nav']) {?>.nav_left_right<?php } else { ?>.nav_top_right<?php }?>",
    		        itemWidth: 280,
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
    		        move: <?php echo $_smarty_tpl->tpl_vars['pro_cate_move']->value;?>
,
                    prevText: '<i class="icon-left-open-3"></i>',
                    nextText: '<i class="icon-right-open-3"></i>',
                    productSlider:true,
                    allowOneSlide:false
                });

                var product_categories_<?php echo $_smarty_tpl->tpl_vars['p_c']->value['id_category'];?>
_flexslider_rs<?php echo $_smarty_tpl->tpl_vars['hook_hash']->value;?>
<?php echo Smarty::$_smarty_vars['capture']['column_slider'];?>
;
                $(window).resize(function(){
                    clearTimeout(product_categories_<?php echo $_smarty_tpl->tpl_vars['p_c']->value['id_category'];?>
_flexslider_rs<?php echo $_smarty_tpl->tpl_vars['hook_hash']->value;?>
<?php echo Smarty::$_smarty_vars['capture']['column_slider'];?>
);
                    var rand_s = parseInt(Math.random()*200 + 300);
                    product_categories_<?php echo $_smarty_tpl->tpl_vars['p_c']->value['id_category'];?>
_flexslider_rs<?php echo $_smarty_tpl->tpl_vars['hook_hash']->value;?>
<?php echo Smarty::$_smarty_vars['capture']['column_slider'];?>
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
                        var flexslide_object = $('#product_categories-itemslider-<?php echo $_smarty_tpl->tpl_vars['hook_hash']->value;?>
<?php echo Smarty::$_smarty_vars['capture']['column_slider'];?>
_<?php echo $_smarty_tpl->tpl_vars['p_c']->value['id_category'];?>
 .sliderwrap').data('flexslider');
                        if(flexSliderSize && flexslide_object != null )
                            flexslide_object.setVars({'minItems': flexSliderSize, 'maxItems': flexSliderSize});
                	}, rand_s);
                });
            });
             
            //]]>
            </script>
            <?php } elseif ($_smarty_tpl->tpl_vars['display_as_grid']->value==2) {?>
                <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list-simple.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['p_c']->value['products'],'for_f'=>'pro_cate','id'=>'stproductcategoriesslider_grid'), 0);?>

            <?php } else { ?>
                <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['p_c']->value['products'],'class'=>'stproductcategoriesslider_grid','for_f'=>'pro_cate','id'=>'stproductcategoriesslider_grid'), 0);?>

            <?php }?>
        	<?php } else { ?>
        		<p class="warning"><?php echo smartyTranslate(array('s'=>'No products','mod'=>'stproductcategoriesslider'),$_smarty_tpl);?>
</p>
        	<?php }?>
        </section>
        <?php if (isset($_smarty_tpl->tpl_vars['homeverybottom']->value)&&$_smarty_tpl->tpl_vars['homeverybottom']->value) {?></div></div><?php }?>
    <?php } ?>
<?php }?>
<!-- /MODULE Product categories slider --><?php }} ?>
