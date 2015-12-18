<?php /* Smarty version Smarty-3.1.19, created on 2015-12-18 10:30:02
         compiled from "D:\xampp\htdocs\store\admin907ta1wcy\themes\default\template\helpers\tree\tree_node_item_radio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:259585673457a0fedd8-01678126%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fbcf295d1eaf5d9daeb1a7bf87dc8f8321b19972' => 
    array (
      0 => 'D:\\xampp\\htdocs\\store\\admin907ta1wcy\\themes\\default\\template\\helpers\\tree\\tree_node_item_radio.tpl',
      1 => 1446095812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '259585673457a0fedd8-01678126',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'input_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5673457a14aca1_18189224',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5673457a14aca1_18189224')) {function content_5673457a14aca1_18189224($_smarty_tpl) {?>
<li class="tree-item<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> tree-item-disable<?php }?>">
	<span class="tree-item-name">
		<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_category'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> disabled="disabled"<?php }?> />
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li><?php }} ?>
