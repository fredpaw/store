<?php /* Smarty version Smarty-3.1.19, created on 2015-12-21 16:14:46
         compiled from "D:\xampp\htdocs\store\modules\stadvancedmenu\views\templates\hook\stadvancedmenu-mobile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2820456778ac6154dc4-69276397%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1598e3be1636ef7f9d28540cf8285315de2d653c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\store\\modules\\stadvancedmenu\\views\\templates\\hook\\stadvancedmenu-mobile.tpl',
      1 => 1449038239,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2820456778ac6154dc4-69276397',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'stmenu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56778ac6165bd0_90266723',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56778ac6165bd0_90266723')) {function content_56778ac6165bd0_90266723($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['stmenu']->value)&&is_array($_smarty_tpl->tpl_vars['stmenu']->value)&&count($_smarty_tpl->tpl_vars['stmenu']->value)) {?>
<!-- Mobile Menu -->
<div id="stmobileadvancedmenu" class="st-side-content">
	<?php echo $_smarty_tpl->getSubTemplate ("./stmobilemenu-ul.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
<!--/ Mobile Menu -->
<?php }?>
<?php }} ?>
