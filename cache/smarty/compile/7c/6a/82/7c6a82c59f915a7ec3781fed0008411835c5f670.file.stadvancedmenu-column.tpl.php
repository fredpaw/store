<?php /* Smarty version Smarty-3.1.19, created on 2015-12-18 16:33:56
         compiled from "D:\xampp\htdocs\store\modules\stadvancedmenu\views\templates\hook\stadvancedmenu-column.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1552156739ac4263ab0-06686497%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c6a82c59f915a7ec3781fed0008411835c5f670' => 
    array (
      0 => 'D:\\xampp\\htdocs\\store\\modules\\stadvancedmenu\\views\\templates\\hook\\stadvancedmenu-column.tpl',
      1 => 1449038239,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1552156739ac4263ab0-06686497',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'stmenu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56739ac4276ac5_15096129',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56739ac4276ac5_15096129')) {function content_56739ac4276ac5_15096129($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['stmenu']->value)&&is_array($_smarty_tpl->tpl_vars['stmenu']->value)&&count($_smarty_tpl->tpl_vars['stmenu']->value)) {?>
<!-- Menu -->
<div id="st_advanced_menu_column" class="block column_block">
	<h3 class="title_block">
		<span>
			<?php echo smartyTranslate(array('s'=>'Categories','mod'=>'stadvancedmenu'),$_smarty_tpl);?>

		</span>
	</h3>
	<div id="st_advanced_menu_column_block" class="block_content">
    	<div id="st_advanced_menu_column_desktop">
    		<?php echo $_smarty_tpl->getSubTemplate ("./stadvancedmenu-ul.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('iscolumnmenu'=>1), 0);?>

    	</div>
    	<div id="st_advanced_menu_column_mobile">
	    	<?php echo $_smarty_tpl->getSubTemplate ("./stmobilemenu-ul.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    	</div>
	</div>
</div>
<!--/ Menu -->
<?php }?><?php }} ?>
