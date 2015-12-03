<?php /* Smarty version Smarty-3.1.19, created on 2015-11-20 17:34:48
         compiled from "D:\xampp\htdocs\store\modules\stadvancedmenu\views\templates\hook\stadvancedmenu-mobile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18845564ebf08decae6-53554483%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1598e3be1636ef7f9d28540cf8285315de2d653c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\store\\modules\\stadvancedmenu\\views\\templates\\hook\\stadvancedmenu-mobile.tpl',
      1 => 1447993230,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18845564ebf08decae6-53554483',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'stmenu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564ebf08e03777_17186783',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564ebf08e03777_17186783')) {function content_564ebf08e03777_17186783($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['stmenu']->value)&&is_array($_smarty_tpl->tpl_vars['stmenu']->value)&&count($_smarty_tpl->tpl_vars['stmenu']->value)) {?>
<!-- Mobile Menu -->
<div id="stmobileadvancedmenu">
	<a id="stmobileadvancedmenu_tri" href="javascript:;">
	    <i class="icon-menu icon-1x"></i>
	    <span><?php echo smartyTranslate(array('s'=>"Menu",'mod'=>'stadvancedmenu'),$_smarty_tpl);?>
</span>
	</a>
	<?php echo $_smarty_tpl->getSubTemplate ("./stmobilemenu-ul.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
<!--/ Mobile Menu -->
<?php }?>
<?php }} ?>
