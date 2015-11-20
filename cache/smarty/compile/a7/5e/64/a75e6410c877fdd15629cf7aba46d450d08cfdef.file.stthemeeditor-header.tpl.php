<?php /* Smarty version Smarty-3.1.19, created on 2015-11-20 17:34:46
         compiled from "D:\xampp\htdocs\store\modules\stthemeeditor\views\templates\hook\stthemeeditor-header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32259564ebf0655a620-89259402%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a75e6410c877fdd15629cf7aba46d450d08cfdef' => 
    array (
      0 => 'D:\\xampp\\htdocs\\store\\modules\\stthemeeditor\\views\\templates\\hook\\stthemeeditor-header.tpl',
      1 => 1447993233,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32259564ebf0655a620-89259402',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sttheme' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564ebf066220a8_58743909',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564ebf066220a8_58743909')) {function content_564ebf066220a8_58743909($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['sttheme']->value)) {?>
<script type="text/javascript">
// <![CDATA[
	var st_responsive = <?php echo $_smarty_tpl->tpl_vars['sttheme']->value['responsive'];?>
;
	var st_responsive_max = <?php echo $_smarty_tpl->tpl_vars['sttheme']->value['responsive_max'];?>
;
	var st_addtocart_animation = <?php if (isset($_smarty_tpl->tpl_vars['sttheme']->value['addtocart_animation'])&&$_smarty_tpl->tpl_vars['sttheme']->value['addtocart_animation']) {?><?php echo $_smarty_tpl->tpl_vars['sttheme']->value['addtocart_animation'];?>
<?php } else { ?>0<?php }?>;
	var st_sticky_menu = <?php if (isset($_smarty_tpl->tpl_vars['sttheme']->value['sticky_menu'])&&$_smarty_tpl->tpl_vars['sttheme']->value['sticky_menu']) {?><?php echo $_smarty_tpl->tpl_vars['sttheme']->value['sticky_menu'];?>
<?php } else { ?>0<?php }?>;
	var st_sticky_adv = <?php if (isset($_smarty_tpl->tpl_vars['sttheme']->value['sticky_adv'])&&$_smarty_tpl->tpl_vars['sttheme']->value['sticky_adv']) {?><?php echo $_smarty_tpl->tpl_vars['sttheme']->value['sticky_adv'];?>
<?php } else { ?>0<?php }?>;
    var st_is_rtl = <?php if (isset($_smarty_tpl->tpl_vars['sttheme']->value['is_rtl'])&&$_smarty_tpl->tpl_vars['sttheme']->value['is_rtl']) {?>true<?php } else { ?>false<?php }?>;
    var zoom_type = <?php if (isset($_smarty_tpl->tpl_vars['sttheme']->value['zoom_type'])&&$_smarty_tpl->tpl_vars['sttheme']->value['zoom_type']) {?>'innerzoom'<?php } else { ?>'standard'<?php }?>;
    var st_retina = <?php if (isset($_smarty_tpl->tpl_vars['sttheme']->value['retina'])&&$_smarty_tpl->tpl_vars['sttheme']->value['retina']) {?>true<?php } else { ?>false<?php }?>;
//]]>
</script>
<?php if (isset($_smarty_tpl->tpl_vars['sttheme']->value['version_switching'])&&$_smarty_tpl->tpl_vars['sttheme']->value['version_switching']==1) {?>
<style type="text/css">#body_wrapper{min-width:992px;margin-right:auto;margin-left:auto;}</style>
<?php }?>
<?php }?>
<?php }} ?>
