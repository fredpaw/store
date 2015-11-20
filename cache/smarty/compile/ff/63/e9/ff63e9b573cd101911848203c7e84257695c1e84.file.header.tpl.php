<?php /* Smarty version Smarty-3.1.19, created on 2015-11-20 17:34:47
         compiled from "D:\xampp\htdocs\store\modules\stblog\views\templates\hook\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29527564ebf070f1839-78248811%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff63e9b573cd101911848203c7e84257695c1e84' => 
    array (
      0 => 'D:\\xampp\\htdocs\\store\\modules\\stblog\\views\\templates\\hook\\header.tpl',
      1 => 1447993230,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29527564ebf070f1839-78248811',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ss_slideshow' => 0,
    'ss_s_speed' => 0,
    'ss_a_speed' => 0,
    'ss_pause' => 0,
    'ss_loop' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564ebf07109721_34073280',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564ebf07109721_34073280')) {function content_564ebf07109721_34073280($_smarty_tpl) {?>
<script type="text/javascript">
// <![CDATA[

blog_flexslider_options = {
    slideshow: <?php echo $_smarty_tpl->tpl_vars['ss_slideshow']->value;?>
,
    slideshowSpeed: <?php if (!$_smarty_tpl->tpl_vars['ss_s_speed']->value) {?>0<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['ss_s_speed']->value;?>
<?php }?>,
    animationSpeed: <?php if (!$_smarty_tpl->tpl_vars['ss_a_speed']->value) {?>0<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['ss_a_speed']->value;?>
<?php }?>,
    pauseOnHover: <?php echo $_smarty_tpl->tpl_vars['ss_pause']->value;?>
,
    animationLoop: <?php echo $_smarty_tpl->tpl_vars['ss_loop']->value;?>

};
//]]>
</script>
<?php }} ?>
