<?php /* Smarty version Smarty-3.1.19, created on 2015-11-23 11:49:14
         compiled from "D:\xampp\htdocs\store\themes\transformer\breadcrumb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:35805652628a0f4984-85348124%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27b3817d37f1b508211cff343e972e0581df3141' => 
    array (
      0 => 'D:\\xampp\\htdocs\\store\\themes\\transformer\\breadcrumb.tpl',
      1 => 1447993227,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35805652628a0f4984-85348124',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_dir' => 0,
    'path' => 0,
    'category' => 0,
    'navigationPipe' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5652628a186cf3_47614389',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5652628a186cf3_47614389')) {function content_5652628a186cf3_47614389($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_regex_replace')) include 'D:\\xampp\\htdocs\\store\\tools\\smarty\\plugins\\modifier.regex_replace.php';
?>

<!-- Breadcrumb -->
<?php if (isset(Smarty::$_smarty_vars['capture']['path'])) {?><?php $_smarty_tpl->tpl_vars['path'] = new Smarty_variable(Smarty::$_smarty_vars['capture']['path'], null, 0);?><?php }?>
<section class="breadcrumb"  xmlns:v="http://rdf.data-vocabulary.org/#">
    <ul itemprop="breadcrumb">
	<li typeof="v:Breadcrumb"><a class="home" href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
" title="<?php echo smartyTranslate(array('s'=>'Return to Home'),$_smarty_tpl);?>
" rel="v:url" property="v:title"><?php echo smartyTranslate(array('s'=>'Home'),$_smarty_tpl);?>
</a></li><?php if (isset($_smarty_tpl->tpl_vars['path']->value)&&$_smarty_tpl->tpl_vars['path']->value) {?><li class="navigation-pipe"<?php if (isset($_smarty_tpl->tpl_vars['category']->value)&&isset($_smarty_tpl->tpl_vars['category']->value->id_category)&&$_smarty_tpl->tpl_vars['category']->value->id_category==1) {?> style="display:none;"<?php }?>><?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>
</li>
		<?php if (!strpos($_smarty_tpl->tpl_vars['path']->value,'li>')!==false) {?>
			<li typeof="v:Breadcrumb" class="navigation_page"><?php echo $_smarty_tpl->tpl_vars['path']->value;?>
</li>
		<?php } else { ?>
			<?php echo $_smarty_tpl->tpl_vars['path']->value;?>

		<?php }?>
	<?php }?>
    </ul>
</section>
<?php if (isset($_GET['search_query'])&&isset($_GET['results'])&&$_GET['results']>1&&isset($_SERVER['HTTP_REFERER'])) {?>
<div id="search_return" class="pull-right hidden-xs">
	<?php $_smarty_tpl->_capture_stack[0][] = array('default', null, null); ob_start(); ?><?php if (isset($_GET['HTTP_REFERER'])&&$_GET['HTTP_REFERER']) {?><?php echo $_GET['HTTP_REFERER'];?>
<?php } elseif (isset($_SERVER['HTTP_REFERER'])&&$_SERVER['HTTP_REFERER']) {?><?php echo $_SERVER['HTTP_REFERER'];?>
<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<a href="<?php echo smarty_modifier_regex_replace($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['secureReferrer'][0][0]->secureReferrer(htmlspecialchars(Smarty::$_smarty_vars['capture']['default'], ENT_QUOTES, 'UTF-8', true)),'/[\?|&]content_only=1/','');?>
" name="back" rel="nofollow">
		<i class="icon-left-open-3"></i> <?php echo smartyTranslate(array('s'=>'Back to Search results for "%s" (%d other results)','sprintf'=>array($_GET['search_query'],$_GET['results'])),$_smarty_tpl);?>

	</a>
</div>
<?php }?>
<!-- /Breadcrumb --><?php }} ?>
