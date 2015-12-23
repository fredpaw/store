<?php /* Smarty version Smarty-3.1.19, created on 2015-12-21 16:14:43
         compiled from "D:\xampp\htdocs\store\modules\steasytabs\views\templates\hook\steasytabs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2778156778ac33c3432-42197803%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '298019aa375d8596f30b871510279d4c175f9721' => 
    array (
      0 => 'D:\\xampp\\htdocs\\store\\modules\\steasytabs\\views\\templates\\hook\\steasytabs.tpl',
      1 => 1449038240,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2778156778ac33c3432-42197803',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tabsContent' => 0,
    'tc' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56778ac33d3818_31897610',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56778ac33d3818_31897610')) {function content_56778ac33d3818_31897610($_smarty_tpl) {?>

<!-- Block extra tabs -->
<?php  $_smarty_tpl->tpl_vars['tc'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tc']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tabsContent']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tc']->key => $_smarty_tpl->tpl_vars['tc']->value) {
$_smarty_tpl->tpl_vars['tc']->_loop = true;
?>
<div id="idTab31<?php echo $_smarty_tpl->tpl_vars['tc']->value['id_st_easy_tabs'];?>
" class="product_accordion block_hidden_only_for_screen">
    <a href="javascript:;" class="opener">&nbsp;</a>
    <div class="product_accordion_title">
        <?php echo $_smarty_tpl->tpl_vars['tc']->value['title'];?>

    </div>
	<div class="pa_content steasytabs_content">
	   <?php echo $_smarty_tpl->tpl_vars['tc']->value['content'];?>

	</div>
</div>
<?php } ?>
<!-- /Block extra tabs --><?php }} ?>
