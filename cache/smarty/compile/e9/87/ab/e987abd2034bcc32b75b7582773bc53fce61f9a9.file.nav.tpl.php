<?php /* Smarty version Smarty-3.1.19, created on 2015-11-20 17:34:52
         compiled from "D:\xampp\htdocs\store\modules\blockuserinfo_mod\views\templates\hook\nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18479564ebf0c7a91a8-66862967%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e987abd2034bcc32b75b7582773bc53fce61f9a9' => 
    array (
      0 => 'D:\\xampp\\htdocs\\store\\modules\\blockuserinfo_mod\\views\\templates\\hook\\nav.tpl',
      1 => 1447993229,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18479564ebf0c7a91a8-66862967',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userinfo_position' => 0,
    'is_logged' => 0,
    'sttheme' => 0,
    'link' => 0,
    'cookie' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564ebf0c85a597_66972826',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564ebf0c85a597_66972826')) {function content_564ebf0c85a597_66972826($_smarty_tpl) {?><!-- Block user information module NAV  -->
<div id="header_user_info" class="header_user_info <?php if (isset($_smarty_tpl->tpl_vars['userinfo_position']->value)) {?><?php if ($_smarty_tpl->tpl_vars['userinfo_position']->value) {?> pull-left<?php } else { ?> pull-right<?php }?><?php }?> clearfix">
	<?php if ($_smarty_tpl->tpl_vars['is_logged']->value) {?>
		<?php if (isset($_smarty_tpl->tpl_vars['sttheme']->value['welcome_logged'])&&trim($_smarty_tpl->tpl_vars['sttheme']->value['welcome_logged'])) {?><?php if ($_smarty_tpl->tpl_vars['sttheme']->value['welcome_link']) {?><a href="<?php echo $_smarty_tpl->tpl_vars['sttheme']->value['welcome_link'];?>
" class="welcome header_item" rel="nofollow"><?php } else { ?><span class="welcome header_item"><?php }?><?php echo $_smarty_tpl->tpl_vars['sttheme']->value['welcome_logged'];?>
<?php if ($_smarty_tpl->tpl_vars['sttheme']->value['welcome_link']) {?></a><?php } else { ?></span><?php }?><?php }?>
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'View my customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" class="header_item account" rel="nofollow"><?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_firstname;?>
 <?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_lastname;?>
</a>
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'View my customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" class="header_item my_account_link" rel="nofollow"><?php echo smartyTranslate(array('s'=>'My Account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a>
		<a class="header_item logout" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true,null,"mylogout"), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Log me out','mod'=>'blockuserinfo'),$_smarty_tpl);?>
">
			<?php echo smartyTranslate(array('s'=>'Sign out','mod'=>'blockuserinfo'),$_smarty_tpl);?>

		</a>
	<?php } else { ?>
		<?php if (isset($_smarty_tpl->tpl_vars['sttheme']->value['welcome'])&&trim($_smarty_tpl->tpl_vars['sttheme']->value['welcome'])) {?><?php if ($_smarty_tpl->tpl_vars['sttheme']->value['welcome_link']) {?><a href="<?php echo $_smarty_tpl->tpl_vars['sttheme']->value['welcome_link'];?>
" class="header_item welcome" rel="nofollow"><?php } else { ?><span class="welcome header_item"><?php }?><?php echo $_smarty_tpl->tpl_vars['sttheme']->value['welcome'];?>
<?php if ($_smarty_tpl->tpl_vars['sttheme']->value['welcome_link']) {?></a><?php } else { ?></span><?php }?><?php }?>
		<a class="header_item login" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Log in to your customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
">
			<?php echo smartyTranslate(array('s'=>'Login','mod'=>'blockuserinfo'),$_smarty_tpl);?>

		</a>
		<a class="header_item sing_up" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Log in to your customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
">
			<?php echo smartyTranslate(array('s'=>'Sign Up','mod'=>'blockuserinfo'),$_smarty_tpl);?>

		</a>
	<?php }?>
</div>
<!-- /Block usmodule NAV --><?php }} ?>
