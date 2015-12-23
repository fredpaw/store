<?php /* Smarty version Smarty-3.1.19, created on 2015-12-21 17:01:06
         compiled from "D:\xampp\htdocs\store\modules\strelatedproducts\views\templates\hook\strelatedproducts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12783567795a27d9c42-81337706%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '049bb7734b933cc0462ea03654fd38d5c288f0ef' => 
    array (
      0 => 'D:\\xampp\\htdocs\\store\\modules\\strelatedproducts\\views\\templates\\hook\\strelatedproducts.tpl',
      1 => 1449038242,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12783567795a27d9c42-81337706',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'column_slider' => 0,
    'hide_mob' => 0,
    'products' => 0,
    'slider_easing' => 0,
    'slider_slideshow' => 0,
    'slider_s_speed' => 0,
    'slider_a_speed' => 0,
    'slider_pause_on_hover' => 0,
    'slider_loop' => 0,
    'pro_per_lg' => 0,
    'pro_per_md' => 0,
    'pro_per_sm' => 0,
    'pro_per_xs' => 0,
    'pro_per_xxs' => 0,
    'slider_move' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_567795a2aa56d2_01533809',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567795a2aa56d2_01533809')) {function content_567795a2aa56d2_01533809($_smarty_tpl) {?>

<!-- MODULE Related Products -->
<?php $_smarty_tpl->_capture_stack[0][] = array("column_slider", null, null); ob_start(); ?><?php if (isset($_smarty_tpl->tpl_vars['column_slider']->value)&&$_smarty_tpl->tpl_vars['column_slider']->value) {?>_column<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<section id="related-products_block_center<?php echo Smarty::$_smarty_vars['capture']['column_slider'];?>
" class="block products_block <?php if (!isset($_smarty_tpl->tpl_vars['column_slider']->value)||!$_smarty_tpl->tpl_vars['column_slider']->value) {?> section <?php }?> <?php if ($_smarty_tpl->tpl_vars['hide_mob']->value) {?> hidden-xs <?php }?>">
	<h4 class="title_block"><span><?php echo smartyTranslate(array('s'=>'Related Products','mod'=>'strelatedproducts'),$_smarty_tpl);?>
</span></h4>
    <script type="text/javascript">
    //<![CDATA[
    var related_itemslider_options<?php echo Smarty::$_smarty_vars['capture']['column_slider'];?>
;
    //]]>
    </script>
	<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
    <div id="related-itemslider<?php echo Smarty::$_smarty_vars['capture']['column_slider'];?>
" class="flexslider">
        <?php if (isset($_smarty_tpl->tpl_vars['column_slider']->value)&&$_smarty_tpl->tpl_vars['column_slider']->value) {?>
    	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-slider-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php } else { ?>
    	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php }?>
	</div>
    
    <script type="text/javascript">
    //<![CDATA[
    
    jQuery(function($) {
        related_itemslider_options<?php echo Smarty::$_smarty_vars['capture']['column_slider'];?>
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
    		controlsContainer: "#related-itemslider<?php echo Smarty::$_smarty_vars['capture']['column_slider'];?>
 .nav_top_right",
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
        $('#related-itemslider<?php echo Smarty::$_smarty_vars['capture']['column_slider'];?>
 .sliderwrap').flexslider(related_itemslider_options<?php echo Smarty::$_smarty_vars['capture']['column_slider'];?>
);

        var related_flexslider_rs<?php echo Smarty::$_smarty_vars['capture']['column_slider'];?>
;
        $(window).resize(function(){
            clearTimeout(related_flexslider_rs<?php echo Smarty::$_smarty_vars['capture']['column_slider'];?>
);
            var rand_s = parseInt(Math.random()*200 + 300);
            related_flexslider_rs<?php echo Smarty::$_smarty_vars['capture']['column_slider'];?>
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
                var flexslide_object = $('#related-itemslider<?php echo Smarty::$_smarty_vars['capture']['column_slider'];?>
 .sliderwrap').data('flexslider');
                if(flexSliderSize && flexslide_object != null )
                    flexslide_object.setVars({'minItems': flexSliderSize, 'maxItems': flexSliderSize});
        	}, rand_s);
        });
    });
     
    //]]>
    </script>
	<?php } else { ?>
		<p class="warning"><?php echo smartyTranslate(array('s'=>'No related products','mod'=>'strelatedproducts'),$_smarty_tpl);?>
</p>
	<?php }?>
</section>
<!-- /MODULE Related Products --><?php }} ?>
