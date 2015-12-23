<?php /* Smarty version Smarty-3.1.19, created on 2015-12-21 17:01:05
         compiled from "D:\xampp\htdocs\store\modules\stthemeeditor\views\templates\hook\carousel_javascript.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16078567795a1d4c823-92631744%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7bf99605ccc79570e4de51cd56df4f5431ef60fd' => 
    array (
      0 => 'D:\\xampp\\htdocs\\store\\modules\\stthemeeditor\\views\\templates\\hook\\carousel_javascript.tpl',
      1 => 1449038242,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16078567795a1d4c823-92631744',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'identify' => 0,
    'easing' => 0,
    'slideshow' => 0,
    's_speed' => 0,
    'a_speed' => 0,
    'pause_on_hover' => 0,
    'loop' => 0,
    'pro_per_lg' => 0,
    'pro_per_md' => 0,
    'pro_per_sm' => 0,
    'pro_per_xs' => 0,
    'pro_per_xxs' => 0,
    'move' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_567795a1e1daa0_99159317',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567795a1e1daa0_99159317')) {function content_567795a1e1daa0_99159317($_smarty_tpl) {?>
<script type="text/javascript">
//<![CDATA[

jQuery(function($) {
    $('#<?php echo $_smarty_tpl->tpl_vars['identify']->value;?>
-itemslider .sliderwrap').flexslider({
    	easing: "<?php echo $_smarty_tpl->tpl_vars['easing']->value;?>
",
        useCSS: false,
		slideshow: <?php echo $_smarty_tpl->tpl_vars['slideshow']->value;?>
,
        slideshowSpeed: <?php echo $_smarty_tpl->tpl_vars['s_speed']->value;?>
,
		animationSpeed: <?php echo $_smarty_tpl->tpl_vars['a_speed']->value;?>
,
		pauseOnHover: <?php echo $_smarty_tpl->tpl_vars['pause_on_hover']->value;?>
,
        direction: "horizontal",
        animation: "slide",
		animationLoop: <?php echo $_smarty_tpl->tpl_vars['loop']->value;?>
,
		controlNav: false,
		controlsContainer: "#<?php echo $_smarty_tpl->tpl_vars['identify']->value;?>
-itemslider .nav_top_right",
        itemWidth: 260,
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
}),        move: <?php echo $_smarty_tpl->tpl_vars['move']->value;?>
,
        prevText: '<i class="icon-left-open-3"></i>',
        nextText: '<i class="icon-right-open-3"></i>',
        productSlider:true,
        allowOneSlide:false
    });
    var <?php echo $_smarty_tpl->tpl_vars['identify']->value;?>
_flexslider_rs;
    $(window).resize(function(){
        clearTimeout(<?php echo $_smarty_tpl->tpl_vars['identify']->value;?>
_flexslider_rs);
        var rand_s = parseInt(Math.random()*200 + 300);
        <?php echo $_smarty_tpl->tpl_vars['identify']->value;?>
_flexslider_rs = setTimeout(function() {
            var flexSliderSize = getFlexSliderSize({'lg':<?php echo $_smarty_tpl->tpl_vars['pro_per_lg']->value;?>
,'md':<?php echo $_smarty_tpl->tpl_vars['pro_per_md']->value;?>
,'sm':<?php echo $_smarty_tpl->tpl_vars['pro_per_sm']->value;?>
,'xs':<?php echo $_smarty_tpl->tpl_vars['pro_per_xs']->value;?>
,'xxs':<?php echo $_smarty_tpl->tpl_vars['pro_per_xxs']->value;?>
});
            var flexslide_object = $('#<?php echo $_smarty_tpl->tpl_vars['identify']->value;?>
-itemslider .sliderwrap').data('flexslider');
            if(flexSliderSize && flexslide_object != null )
                flexslide_object.setVars({'minItems': flexSliderSize, 'maxItems': flexSliderSize});
    	}, rand_s);
    });
});
 
//]]>
</script><?php }} ?>
