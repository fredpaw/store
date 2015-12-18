<?php /* Smarty version Smarty-3.1.19, created on 2015-12-18 11:10:00
         compiled from "D:\xampp\htdocs\store\admin907ta1wcy\themes\default\template\helpers\tree\tree_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2927856734ed8bbce28-98533247%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0f1084ce43ae2bef9e2799e427557f2262191b8' => 
    array (
      0 => 'D:\\xampp\\htdocs\\store\\admin907ta1wcy\\themes\\default\\template\\helpers\\tree\\tree_header.tpl',
      1 => 1446095812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2927856734ed8bbce28-98533247',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'toolbar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56734ed8bd2417_20796366',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56734ed8bd2417_20796366')) {function content_56734ed8bd2417_20796366($_smarty_tpl) {?>
<div class="tree-panel-heading-controls clearfix">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-tag"></i>&nbsp;<?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl);?>
<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {?><?php echo $_smarty_tpl->tpl_vars['toolbar']->value;?>
<?php }?>
</div><?php }} ?>
