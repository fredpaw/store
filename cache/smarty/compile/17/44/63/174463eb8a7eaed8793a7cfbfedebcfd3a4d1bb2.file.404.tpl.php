<?php /* Smarty version Smarty-3.1.19, created on 2015-12-03 12:03:43
         compiled from "D:\xampp\htdocs\store\themes\transformer\404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23302565f94efbc7103-85072314%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '174463eb8a7eaed8793a7cfbfedebcfd3a4d1bb2' => 
    array (
      0 => 'D:\\xampp\\htdocs\\store\\themes\\transformer\\404.tpl',
      1 => 1449038236,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23302565f94efbc7103-85072314',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_565f94efdc78c3_58292956',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565f94efdc78c3_58292956')) {function content_565f94efdc78c3_58292956($_smarty_tpl) {?>
<div class="pagenotfound">
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAnywhere','location'=>"6",'mod'=>'steasycontent','caller'=>'steasycontent'),$_smarty_tpl);?>

	<h1 class="heading"><?php echo smartyTranslate(array('s'=>'This page is not available'),$_smarty_tpl);?>
</h1>
	<p>
		<?php echo smartyTranslate(array('s'=>'We\'re sorry, but the Web address you\'ve entered is no longer available.'),$_smarty_tpl);?>

	</p>
	<p><?php echo smartyTranslate(array('s'=>'To find a product, please type its name in the field below.'),$_smarty_tpl);?>
</p>
	<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search'), ENT_QUOTES, 'UTF-8', true);?>
" method="post" class="std">
		<fieldset>
			<div>
				<label for="search_query"><?php echo smartyTranslate(array('s'=>'Search our product catalog:'),$_smarty_tpl);?>
</label>
				<input id="search_query" name="search_query" type="text" class="form-control grey" />
                <button type="submit" name="Submit" value="OK" class="btn btn-default"><span><?php echo smartyTranslate(array('s'=>'Ok'),$_smarty_tpl);?>
</span></button>
			</div>
		</fieldset>
	</form>
</div>
<?php }} ?>
