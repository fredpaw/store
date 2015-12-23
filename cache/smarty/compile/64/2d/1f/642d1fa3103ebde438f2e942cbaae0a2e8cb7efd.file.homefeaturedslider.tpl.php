<?php /* Smarty version Smarty-3.1.19, created on 2015-12-23 10:26:58
         compiled from "D:\xampp\htdocs\store\modules\homefeaturedslider\views\templates\hook\homefeaturedslider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:41885679dc428c2895-66969719%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '642d1fa3103ebde438f2e942cbaae0a2e8cb7efd' => 
    array (
      0 => 'D:\\xampp\\htdocs\\store\\modules\\homefeaturedslider\\views\\templates\\hook\\homefeaturedslider.tpl',
      1 => 1449038238,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '41885679dc428c2895-66969719',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'column_slider' => 0,
    'hook_hash' => 0,
    'hide_mob' => 0,
    'countdown_on' => 0,
    'homeverybottom' => 0,
    'display_as_grid' => 0,
    'products' => 0,
    'slider_easing' => 0,
    'slider_slideshow' => 0,
    'slider_s_speed' => 0,
    'slider_a_speed' => 0,
    'slider_pause_on_hover' => 0,
    'slider_loop' => 0,
    'direction_nav' => 0,
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
  'unifunc' => 'content_5679dc42b7ec74_38930029',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5679dc42b7ec74_38930029')) {function content_5679dc42b7ec74_38930029($_smarty_tpl) {?>

<!-- MODULE Featured Products slider -->
<?php $_smarty_tpl->_capture_stack[0][] = array("column_slider", null, null); ob_start(); ?><?php if (isset($_smarty_tpl->tpl_vars['column_slider']->value)&&$_smarty_tpl->tpl_vars['column_slider']->value) {?>_column<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<div id="featured_products_sldier_block_center_container_<?php echo $_smarty_tpl->tpl_vars['hook_hash']->value;?>
" class="featured_products_sldier_block_center_container <?php if ($_smarty_tpl->tpl_vars['hide_mob']->value) {?> hidden-xs <?php }?><?php if ($_smarty_tpl->tpl_vars['countdown_on']->value) {?> s_countdown_block <?php }?> block">
<?php if (isset($_smarty_tpl->tpl_vars['homeverybottom']->value)&&$_smarty_tpl->tpl_vars['homeverybottom']->value) {?><div class="wide_container"><div class="container"><?php }?>
<section id="featured_products_sldier_block_center_<?php echo $_smarty_tpl->tpl_vars['hook_hash']->value;?>
<?php echo Smarty::$_smarty_vars['capture']['column_slider'];?>
" class="featured_products_sldier_block_center<?php echo Smarty::$_smarty_vars['capture']['column_slider'];?>
 products_block section <?php if (isset($_smarty_tpl->tpl_vars['display_as_grid']->value)&&$_smarty_tpl->tpl_vars['display_as_grid']->value) {?> display_as_grid <?php }?>">
	<h4 class="title_block mar_b1"><span><?php echo smartyTranslate(array('s'=>'Featured Products','mod'=>'homefeaturedslider'),$_smarty_tpl);?>
</span></h4>
    <script type="text/javascript">
    //<![CDATA[
    var featured_itemslider_options<?php echo $_smarty_tpl->tpl_vars['hook_hash']->value;?>
<?php echo Smarty::$_smarty_vars['capture']['column_slider'];?>
;
    //]]>
    </script>
	<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
    <?php if (!isset($_smarty_tpl->tpl_vars['display_as_grid']->value)||!$_smarty_tpl->tpl_vars['display_as_grid']->value||(isset($_smarty_tpl->tpl_vars['display_as_grid']->value)&&$_smarty_tpl->tpl_vars['display_as_grid']->value&&isset($_smarty_tpl->tpl_vars['column_slider']->value)&&$_smarty_tpl->tpl_vars['column_slider']->value)) {?>
    <div id="featured-itemslider-<?php echo $_smarty_tpl->tpl_vars['hook_hash']->value;?>
<?php echo Smarty::$_smarty_vars['capture']['column_slider'];?>
" class="featured-itemslider<?php echo Smarty::$_smarty_vars['capture']['column_slider'];?>
 flexslider">
    	<?php if (isset($_smarty_tpl->tpl_vars['column_slider']->value)&&$_smarty_tpl->tpl_vars['column_slider']->value) {?>
    	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-slider-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php } else { ?>
    	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php }?>
	</div>
    
    <script type="text/javascript">
    //<![CDATA[
    
    jQuery(function($) {        
        featured_itemslider_options<?php echo $_smarty_tpl->tpl_vars['hook_hash']->value;?>
<?php echo Smarty::$_smarty_vars['capture']['column_slider'];?>
 = {
    		easing: "<?php echo $_smarty_tpl->tpl_vars['slider_easing']->value;?>
",
            useCSS: false,
    		slideshow: <?php echo $_smarty_tpl->tpl_vars['slider_slideshow']->value;?>
,
            slideshowSpeed: <?php echo $_smarty_tpl->tpl_vars['slider_s_speed']->value;?>
,
    		animationSpeed: <?php echo $_smarty_tpl->tpl_vars['slider_a_speed']->value;?>
,
    		pauseOnHover: <?php echo $_smarty_tpl->tpl_vars['slider_pause_on_hover']->value;?>
,
            direction: "horizontal",
            animation: "slide",
            animationLoop: <?php echo $_smarty_tpl->tpl_vars['slider_loop']->value;?>
,
    		controlNav: false,
    		controlsContainer: "#featured-itemslider-<?php echo $_smarty_tpl->tpl_vars['hook_hash']->value;?>
<?php echo Smarty::$_smarty_vars['capture']['column_slider'];?>
 <?php if (isset($_smarty_tpl->tpl_vars['direction_nav']->value)&&$_smarty_tpl->tpl_vars['direction_nav']->value) {?>.nav_left_right<?php } else { ?>.nav_top_right<?php }?>",
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
    		move: <?php echo $_smarty_tpl->tpl_vars['slider_move']->value;?>
,
            prevText: '<i class="icon-left-open-3"></i>',
            nextText: '<i class="icon-right-open-3"></i>',
            productSlider:true,
            allowOneSlide:false
        };
        $('#featured-itemslider-<?php echo $_smarty_tpl->tpl_vars['hook_hash']->value;?>
<?php echo Smarty::$_smarty_vars['capture']['column_slider'];?>
 .sliderwrap').flexslider(featured_itemslider_options<?php echo $_smarty_tpl->tpl_vars['hook_hash']->value;?>
<?php echo Smarty::$_smarty_vars['capture']['column_slider'];?>
);
                
        var featured_flexslider_rs<?php echo $_smarty_tpl->tpl_vars['hook_hash']->value;?>
<?php echo Smarty::$_smarty_vars['capture']['column_slider'];?>
;
        $(window).resize(function(){
            clearTimeout(featured_flexslider_rs<?php echo $_smarty_tpl->tpl_vars['hook_hash']->value;?>
<?php echo Smarty::$_smarty_vars['capture']['column_slider'];?>
);
            var rand_s = parseInt(Math.random()*200 + 300);
            featured_flexslider_rs<?php echo $_smarty_tpl->tpl_vars['hook_hash']->value;?>
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
                var flexslide_object = $('#featured-itemslider-<?php echo $_smarty_tpl->tpl_vars['hook_hash']->value;?>
<?php echo Smarty::$_smarty_vars['capture']['column_slider'];?>
 .sliderwrap').data('flexslider');
                if(flexSliderSize && flexslide_object != null )
                    flexslide_object.setVars({'minItems': flexSliderSize, 'maxItems': flexSliderSize});
        	}, rand_s);
        });        
    });
     
    //]]>
    </script>
    <?php } elseif ($_smarty_tpl->tpl_vars['display_as_grid']->value==2) {?>
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list-simple.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['products']->value,'for_f'=>'featured','id'=>'homefeatured_grid'), 0);?>

    <?php } else { ?>
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['products']->value,'class'=>'homefeatured_grid','for_f'=>'featured','id'=>'homefeatured_grid'), 0);?>

    <?php }?>
	<?php } else { ?>
		<p class="warning"><?php echo smartyTranslate(array('s'=>'No featrued products','mod'=>'homefeaturedslider'),$_smarty_tpl);?>
</p>
	<?php }?>
</section>
<?php if (isset($_smarty_tpl->tpl_vars['homeverybottom']->value)&&$_smarty_tpl->tpl_vars['homeverybottom']->value) {?></div></div><?php }?>
</div>
<?php if (!Smarty::$_smarty_vars['capture']['column_slider']&&$_smarty_tpl->tpl_vars['has_background_img']->value&&$_smarty_tpl->tpl_vars['speed']->value) {?>
<script type="text/javascript">
//<![CDATA[

jQuery(function($) {
    $('#featured_products_sldier_block_center_container_<?php echo $_smarty_tpl->tpl_vars['hook_hash']->value;?>
').parallax("50%", <?php echo floatval($_smarty_tpl->tpl_vars['speed']->value);?>
);
});
 
//]]>
</script>
<?php }?>
<!-- /MODULE Featured Products slider --><?php }} ?>
