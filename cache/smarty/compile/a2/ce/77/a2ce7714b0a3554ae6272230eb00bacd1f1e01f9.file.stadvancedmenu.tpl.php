<?php /* Smarty version Smarty-3.1.19, created on 2015-12-21 16:14:41
         compiled from "D:\xampp\htdocs\store\modules\stadvancedmenu\views\templates\hook\stadvancedmenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:731356778ac1c6c8e9-00200607%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2ce7714b0a3554ae6272230eb00bacd1f1e01f9' => 
    array (
      0 => 'D:\\xampp\\htdocs\\store\\modules\\stadvancedmenu\\views\\templates\\hook\\stadvancedmenu.tpl',
      1 => 1449038239,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '731356778ac1c6c8e9-00200607',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'stmenu' => 0,
    'megamenu_width' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56778ac1c92247_93972149',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56778ac1c92247_93972149')) {function content_56778ac1c92247_93972149($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['stmenu']->value)&&is_array($_smarty_tpl->tpl_vars['stmenu']->value)&&count($_smarty_tpl->tpl_vars['stmenu']->value)) {?>
<!-- Menu -->
<?php if (!isset($_smarty_tpl->tpl_vars['megamenu_width']->value)||!$_smarty_tpl->tpl_vars['megamenu_width']->value) {?>
<div class="wide_container boxed_advancedmenu">
<?php }?>
<div id="st_advanced_menu_container" class="animated fast">
	<div class="container">
		<nav id="st_advanced_menu_wrap" role="navigation">
	    	<?php echo $_smarty_tpl->getSubTemplate ("./stadvancedmenu-ul.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</nav>
	</div>
</div>
<?php if (!isset($_smarty_tpl->tpl_vars['megamenu_width']->value)||!$_smarty_tpl->tpl_vars['megamenu_width']->value) {?>
</div>
<?php }?>
<!--/ Menu -->
<?php }?>
<?php }} ?>
