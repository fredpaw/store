<?php /* Smarty version Smarty-3.1.19, created on 2015-12-21 16:14:43
         compiled from "D:\xampp\htdocs\store\modules\steasytabs\views\templates\hook\tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3249556778ac31c58b1-42008544%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd7e8ce8f73a402cc1831191c1bb08cc2c29759d1' => 
    array (
      0 => 'D:\\xampp\\htdocs\\store\\modules\\steasytabs\\views\\templates\\hook\\tab.tpl',
      1 => 1449038240,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3249556778ac31c58b1-42008544',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tabsHeader' => 0,
    'th' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56778ac31da836_01585040',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56778ac31da836_01585040')) {function content_56778ac31da836_01585040($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['th'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['th']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tabsHeader']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['th']->key => $_smarty_tpl->tpl_vars['th']->value) {
$_smarty_tpl->tpl_vars['th']->_loop = true;
?>
<li><a href="#idTab31<?php echo $_smarty_tpl->tpl_vars['th']->value['id_st_easy_tabs'];?>
" id="st_easy_tab_<?php echo $_smarty_tpl->tpl_vars['th']->value['id_st_easy_tabs'];?>
"><?php if ($_smarty_tpl->tpl_vars['th']->value['title']) {?><?php echo $_smarty_tpl->tpl_vars['th']->value['title'];?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Custom tab','mod'=>'steasytabs'),$_smarty_tpl);?>
<?php }?></a></li>
<?php } ?><?php }} ?>
