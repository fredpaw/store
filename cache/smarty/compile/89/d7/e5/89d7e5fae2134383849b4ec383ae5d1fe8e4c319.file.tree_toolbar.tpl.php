<?php /* Smarty version Smarty-3.1.19, created on 2015-12-18 11:10:00
         compiled from "D:\xampp\htdocs\store\admin907ta1wcy\themes\default\template\helpers\tree\tree_toolbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:399356734ed8ae0206-40107042%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89d7e5fae2134383849b4ec383ae5d1fe8e4c319' => 
    array (
      0 => 'D:\\xampp\\htdocs\\store\\admin907ta1wcy\\themes\\default\\template\\helpers\\tree\\tree_toolbar.tpl',
      1 => 1446095812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '399356734ed8ae0206-40107042',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actions' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56734ed8b5b434_11734147',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56734ed8b5b434_11734147')) {function content_56734ed8b5b434_11734147($_smarty_tpl) {?>
<div class="tree-actions pull-right">
	<?php if (isset($_smarty_tpl->tpl_vars['actions']->value)) {?>
	<?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->_loop = true;
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php } ?>
	<?php }?>
</div><?php }} ?>
