<?php /* Smarty version Smarty-3.1.19, created on 2015-12-02 17:48:57
         compiled from "D:\xampp\htdocs\store\themes\transformer\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8464564ebf0c212748-57532266%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6899dbc1baa2c4496bf341d27a1efd755b332d4' => 
    array (
      0 => 'D:\\xampp\\htdocs\\store\\themes\\transformer\\header.tpl',
      1 => 1449038237,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8464564ebf0c212748-57532266',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564ebf0c53d951_98864424',
  'variables' => 
  array (
    'language_code' => 0,
    'meta_title' => 0,
    'meta_description' => 0,
    'meta_keywords' => 0,
    'nobots' => 0,
    'nofollow' => 0,
    'sttheme' => 0,
    'favicon_url' => 0,
    'img_update_time' => 0,
    'css_files' => 0,
    'css_uri' => 0,
    'media' => 0,
    'js_defer' => 0,
    'js_files' => 0,
    'js_def' => 0,
    'js_uri' => 0,
    'HOOK_HEADER' => 0,
    'page_name' => 0,
    'body_classes' => 0,
    'hide_left_column' => 0,
    'hide_right_column' => 0,
    'content_only' => 0,
    'lang_iso' => 0,
    'languages' => 0,
    'language' => 0,
    'slide_lr_column' => 0,
    'restricted_country_mode' => 0,
    'geolocation_country' => 0,
    'sticky_mobile_header' => 0,
    'HOOK_MOBILE_MENU' => 0,
    'force_ssl' => 0,
    'base_dir_ssl' => 0,
    'base_dir' => 0,
    'shop_name' => 0,
    'logo_url' => 0,
    'link' => 0,
    'HOOK_MOBILE_BAR' => 0,
    'logo_left_center' => 0,
    'HOOK_TOP_LEFT' => 0,
    'HOOK_TOP' => 0,
    'HOOK_TOP_SECONDARY' => 0,
    'left_column_size' => 0,
    'HOOK_LEFT_COLUMN' => 0,
    'right_column_size' => 0,
    'cols' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564ebf0c53d951_98864424')) {function content_564ebf0c53d951_98864424($_smarty_tpl) {?><?php if (!is_callable('smarty_function_implode')) include 'D:\\xampp\\htdocs\\store\\tools\\smarty\\plugins\\function.implode.php';
?>
<?php $_smarty_tpl->tpl_vars['slide_lr_column'] = new Smarty_variable(Configuration::get('STSN_SLIDE_LR_COLUMN'), null, 0);?>
<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"<?php if (isset($_smarty_tpl->tpl_vars['language_code']->value)&&$_smarty_tpl->tpl_vars['language_code']->value) {?> lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language_code']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8 ie7"<?php if (isset($_smarty_tpl->tpl_vars['language_code']->value)&&$_smarty_tpl->tpl_vars['language_code']->value) {?> lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language_code']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9 ie8"<?php if (isset($_smarty_tpl->tpl_vars['language_code']->value)&&$_smarty_tpl->tpl_vars['language_code']->value) {?> lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language_code']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>><![endif]-->
<!--[if gt IE 8]> <html class="no-js ie9"<?php if (isset($_smarty_tpl->tpl_vars['language_code']->value)&&$_smarty_tpl->tpl_vars['language_code']->value) {?> lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language_code']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>><![endif]-->
<html<?php if (isset($_smarty_tpl->tpl_vars['language_code']->value)&&$_smarty_tpl->tpl_vars['language_code']->value) {?> lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language_code']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>>
	<head>
		<meta charset="utf-8" />
		<title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_title']->value, ENT_QUOTES, 'UTF-8', true);?>
</title>
		<?php if (isset($_smarty_tpl->tpl_vars['meta_description']->value)&&$_smarty_tpl->tpl_vars['meta_description']->value) {?>
			<meta name="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_description']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['meta_keywords']->value)&&$_smarty_tpl->tpl_vars['meta_keywords']->value) {?>
			<meta name="keywords" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_keywords']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
		<?php }?>
		<meta name="robots" content="<?php if (isset($_smarty_tpl->tpl_vars['nobots']->value)) {?>no<?php }?>index,<?php if (isset($_smarty_tpl->tpl_vars['nofollow']->value)&&$_smarty_tpl->tpl_vars['nofollow']->value) {?>no<?php }?>follow" />
		<?php if (isset($_smarty_tpl->tpl_vars['sttheme']->value['responsive'])&&$_smarty_tpl->tpl_vars['sttheme']->value['responsive']&&(!$_smarty_tpl->tpl_vars['sttheme']->value['enabled_version_swithing']||$_smarty_tpl->tpl_vars['sttheme']->value['version_switching']==0)) {?>
		<meta name="viewport" content="width=device-width, minimum-scale=0.25, maximum-scale=1.6, initial-scale=1.0" />
        <?php }?>
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo $_smarty_tpl->tpl_vars['favicon_url']->value;?>
?<?php echo $_smarty_tpl->tpl_vars['img_update_time']->value;?>
" />
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['favicon_url']->value;?>
?<?php echo $_smarty_tpl->tpl_vars['img_update_time']->value;?>
" />
		<?php if (isset($_smarty_tpl->tpl_vars['sttheme']->value['icon_iphone_57'])&&$_smarty_tpl->tpl_vars['sttheme']->value['icon_iphone_57']) {?>
        <link rel="apple-touch-icon" sizes="57x57" href="<?php echo $_smarty_tpl->tpl_vars['sttheme']->value['icon_iphone_57'];?>
" />
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['sttheme']->value['icon_iphone_72'])&&$_smarty_tpl->tpl_vars['sttheme']->value['icon_iphone_72']) {?>
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $_smarty_tpl->tpl_vars['sttheme']->value['icon_iphone_72'];?>
" />
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['sttheme']->value['icon_iphone_114'])&&$_smarty_tpl->tpl_vars['sttheme']->value['icon_iphone_114']) {?>
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $_smarty_tpl->tpl_vars['sttheme']->value['icon_iphone_114'];?>
" />
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['sttheme']->value['icon_iphone_144'])&&$_smarty_tpl->tpl_vars['sttheme']->value['icon_iphone_144']) {?>
        <link rel="apple-touch-icon" sizes="144x144" href="<?php echo $_smarty_tpl->tpl_vars['sttheme']->value['icon_iphone_144'];?>
" />
        <?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['css_files']->value)) {?>
			<?php  $_smarty_tpl->tpl_vars['media'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['media']->_loop = false;
 $_smarty_tpl->tpl_vars['css_uri'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['css_files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['media']->key => $_smarty_tpl->tpl_vars['media']->value) {
$_smarty_tpl->tpl_vars['media']->_loop = true;
 $_smarty_tpl->tpl_vars['css_uri']->value = $_smarty_tpl->tpl_vars['media']->key;
?>
				<link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['css_uri']->value, ENT_QUOTES, 'UTF-8', true);?>
" type="text/css" media="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['media']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
			<?php } ?>
		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['sttheme']->value['custom_css'])&&$_smarty_tpl->tpl_vars['sttheme']->value['custom_css']) {?>
			<link href="<?php echo $_smarty_tpl->tpl_vars['sttheme']->value['custom_css'];?>
" rel="stylesheet" type="text/css" media="<?php echo $_smarty_tpl->tpl_vars['sttheme']->value['custom_css_media'];?>
" />
		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['js_defer']->value)&&!$_smarty_tpl->tpl_vars['js_defer']->value&&isset($_smarty_tpl->tpl_vars['js_files']->value)&&isset($_smarty_tpl->tpl_vars['js_def']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['js_def']->value;?>

			<?php  $_smarty_tpl->tpl_vars['js_uri'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js_uri']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['js_files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js_uri']->key => $_smarty_tpl->tpl_vars['js_uri']->value) {
$_smarty_tpl->tpl_vars['js_uri']->_loop = true;
?>
			<script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['js_uri']->value, ENT_QUOTES, 'UTF-8', true);?>
"></script>
			<?php } ?>
		<?php }?>
		<?php echo $_smarty_tpl->tpl_vars['HOOK_HEADER']->value;?>

	</head>
	<body<?php if (isset($_smarty_tpl->tpl_vars['page_name']->value)) {?> id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page_name']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?> class="<?php if (isset($_smarty_tpl->tpl_vars['page_name']->value)) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page_name']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['body_classes']->value)&&count($_smarty_tpl->tpl_vars['body_classes']->value)) {?> <?php echo smarty_function_implode(array('value'=>$_smarty_tpl->tpl_vars['body_classes']->value,'separator'=>' '),$_smarty_tpl);?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['hide_left_column']->value) {?> hide-left-column<?php } else { ?> show-left-column<?php }?><?php if ($_smarty_tpl->tpl_vars['hide_right_column']->value) {?> hide-right-column<?php } else { ?> show-right-column<?php }?><?php if (isset($_smarty_tpl->tpl_vars['content_only']->value)&&$_smarty_tpl->tpl_vars['content_only']->value) {?> content_only<?php }?> lang_<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
 
	<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
		<?php if ($_smarty_tpl->tpl_vars['language']->value['iso_code']==$_smarty_tpl->tpl_vars['lang_iso']->value&&$_smarty_tpl->tpl_vars['language']->value['is_rtl']) {?>
			is_rtl
		<?php }?>
	<?php } ?>
	<?php if ($_smarty_tpl->tpl_vars['sttheme']->value['is_mobile_device']) {?> mobile_device <?php }?><?php if ($_smarty_tpl->tpl_vars['slide_lr_column']->value) {?> slide_lr_column <?php }?>
	">
	<?php if (!isset($_smarty_tpl->tpl_vars['content_only']->value)||!$_smarty_tpl->tpl_vars['content_only']->value) {?>
		<?php if (isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&$_smarty_tpl->tpl_vars['restricted_country_mode']->value) {?>
			<div id="restricted-country">
				<p><?php echo smartyTranslate(array('s'=>'You cannot place a new order from your country.'),$_smarty_tpl);?>
<?php if (isset($_smarty_tpl->tpl_vars['geolocation_country']->value)&&$_smarty_tpl->tpl_vars['geolocation_country']->value) {?> <span class="bold"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['geolocation_country']->value, ENT_QUOTES, 'UTF-8', true);?>
</span><?php }?></p>
			</div>
		<?php }?>
		<!--[if lt IE 9]>
		<p class="alert alert-warning">Please upgrade to Internet Explorer version 9 or download Firefox, Opera, Safari or Chrome.</p>
		<![endif]-->
		<div id="body_wrapper">
			<?php if (isset($_smarty_tpl->tpl_vars['sttheme']->value['boxstyle'])&&$_smarty_tpl->tpl_vars['sttheme']->value['boxstyle']==2) {?><div id="page_wrapper"><?php }?>
			<header id="page_header" class="<?php if ($_smarty_tpl->tpl_vars['sttheme']->value['transparent_header']) {?> transparent_header <?php }?>">
				<?php $_smarty_tpl->_capture_stack[0][] = array("displayBanner", null, null); ob_start(); ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayBanner"),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
				<?php if (isset(Smarty::$_smarty_vars['capture']['displayBanner'])&&trim(Smarty::$_smarty_vars['capture']['displayBanner'])) {?>
				<div class="banner">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12">
								<?php echo Smarty::$_smarty_vars['capture']['displayBanner'];?>

							</div>
						</div>
					</div>
				</div>
				<?php }?>
				<?php $_smarty_tpl->_capture_stack[0][] = array("displayNav", null, null); ob_start(); ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayNav"),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
				<?php if (isset(Smarty::$_smarty_vars['capture']['displayNav'])&&trim(Smarty::$_smarty_vars['capture']['displayNav'])) {?>
				<div id="top_bar" class="nav">
					<div class="container">
						<div class="row">
							<nav class="clearfix"><?php echo Smarty::$_smarty_vars['capture']['displayNav'];?>
</nav>
						</div>
					</div>
				</div>
				<?php }?>

				<?php $_smarty_tpl->tpl_vars['sticky_mobile_header'] = new Smarty_variable(Configuration::get('STSN_STICKY_MOBILE_HEADER'), null, 0);?>
	            <section id="mobile_bar" class="animated fast">
	            	<div class="container">
	                	<div id="mobile_bar_container" class="<?php if ($_smarty_tpl->tpl_vars['sticky_mobile_header']->value%2==0) {?> mobile_bar_center_layout<?php } else { ?> mobile_bar_left_layout<?php }?>">
	                		<?php if ($_smarty_tpl->tpl_vars['sticky_mobile_header']->value%2==0) {?>
	                		<div id="mobile_bar_left">
	                			<div id="mobile_bar_left_inner"><?php if (isset($_smarty_tpl->tpl_vars['HOOK_MOBILE_MENU']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_MOBILE_MENU']->value)) {?><?php echo $_smarty_tpl->tpl_vars['HOOK_MOBILE_MENU']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayMobileMenu'),$_smarty_tpl);?>
<?php }?></div>
	                		</div>
	                		<?php }?>
	                		<div id="mobile_bar_center">
	                			<a id="mobile_header_logo" href="<?php if (isset($_smarty_tpl->tpl_vars['force_ssl']->value)&&$_smarty_tpl->tpl_vars['force_ssl']->value) {?><?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
<?php }?>" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8', true);?>
">
									<img class="logo replace-2x" src="<?php echo $_smarty_tpl->tpl_vars['logo_url']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['sttheme']->value['retina_logo'])&&$_smarty_tpl->tpl_vars['sttheme']->value['retina_logo']) {?> data-2x="<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)@constant('_MODULE_DIR_'))."stthemeeditor/".((string)htmlspecialchars($_smarty_tpl->tpl_vars['sttheme']->value['retina_logo'], ENT_QUOTES, 'UTF-8', true)));?>
"<?php }?> alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if (isset($_smarty_tpl->tpl_vars['sttheme']->value['st_logo_image_width'])&&$_smarty_tpl->tpl_vars['sttheme']->value['st_logo_image_width']) {?> width="<?php echo $_smarty_tpl->tpl_vars['sttheme']->value['st_logo_image_width'];?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['sttheme']->value['st_logo_image_height'])&&$_smarty_tpl->tpl_vars['sttheme']->value['st_logo_image_height']) {?> height="<?php echo $_smarty_tpl->tpl_vars['sttheme']->value['st_logo_image_height'];?>
"<?php }?>/>
								</a>	                			
	                		</div>
	                		<div id="mobile_bar_right">
	                			<div id="mobile_bar_right_inner"><?php if (isset($_smarty_tpl->tpl_vars['HOOK_MOBILE_BAR']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_MOBILE_BAR']->value)) {?><?php echo $_smarty_tpl->tpl_vars['HOOK_MOBILE_BAR']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayMobileBar'),$_smarty_tpl);?>
<?php }?></div>
	                		</div>
	                	</div>
	                </div>
	            </section>

				<?php if (isset($_smarty_tpl->tpl_vars['sttheme']->value['logo_position'])&&$_smarty_tpl->tpl_vars['sttheme']->value['logo_position']) {?>
				    <?php $_smarty_tpl->tpl_vars["logo_left_center"] = new Smarty_variable(1, null, 0);?>
				<?php } else { ?>
				    <?php $_smarty_tpl->tpl_vars["logo_left_center"] = new Smarty_variable(0, null, 0);?>
				<?php }?>
				<section id="header" class="<?php if ($_smarty_tpl->tpl_vars['logo_left_center']->value) {?> logo_center <?php }?> animated fast">
				    <div class="wide_container">
					    <div class="container header_container">
					        <div class="row">
					            <?php if ($_smarty_tpl->tpl_vars['logo_left_center']->value) {?>
								<div id="header_left" class="col-sm-12 col-md-<?php echo (12-$_smarty_tpl->tpl_vars['sttheme']->value['logo_width'])/intval(2);?>
 posi_rel">
					                <div id="header_left_inner" class="clearfix"><?php if (isset($_smarty_tpl->tpl_vars['HOOK_TOP_LEFT']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_TOP_LEFT']->value)) {?><?php echo $_smarty_tpl->tpl_vars['HOOK_TOP_LEFT']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayTopLeft'),$_smarty_tpl);?>
<?php }?></div>
					            </div>
					            <?php }?>
					            <div id="logo_wrapper" class="col-sm-12 col-md-<?php echo $_smarty_tpl->tpl_vars['sttheme']->value['logo_width'];?>
">
					            <div id="header_logo_inner">
								<a id="header_logo" href="<?php if (isset($_smarty_tpl->tpl_vars['force_ssl']->value)&&$_smarty_tpl->tpl_vars['force_ssl']->value) {?><?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
<?php }?>" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8', true);?>
">
									<img class="logo replace-2x" src="<?php echo $_smarty_tpl->tpl_vars['logo_url']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['sttheme']->value['retina_logo'])&&$_smarty_tpl->tpl_vars['sttheme']->value['retina_logo']) {?> data-2x="<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)@constant('_MODULE_DIR_'))."stthemeeditor/".((string)htmlspecialchars($_smarty_tpl->tpl_vars['sttheme']->value['retina_logo'], ENT_QUOTES, 'UTF-8', true)));?>
"<?php }?> alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if (isset($_smarty_tpl->tpl_vars['sttheme']->value['st_logo_image_width'])&&$_smarty_tpl->tpl_vars['sttheme']->value['st_logo_image_width']) {?> width="<?php echo $_smarty_tpl->tpl_vars['sttheme']->value['st_logo_image_width'];?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['sttheme']->value['st_logo_image_height'])&&$_smarty_tpl->tpl_vars['sttheme']->value['st_logo_image_height']) {?> height="<?php echo $_smarty_tpl->tpl_vars['sttheme']->value['st_logo_image_height'];?>
"<?php }?>/>
								</a>
					            </div>
					            </div>
								<div id="header_right" class="col-sm-12 <?php if ($_smarty_tpl->tpl_vars['logo_left_center']->value) {?> col-md-<?php echo (12-$_smarty_tpl->tpl_vars['sttheme']->value['logo_width'])/ceil(2);?>
 <?php } else { ?> col-md-<?php echo 12-$_smarty_tpl->tpl_vars['sttheme']->value['logo_width'];?>
 <?php }?> text-right">
					                <div id="header_right_inner" class="clearfix"><?php echo $_smarty_tpl->tpl_vars['HOOK_TOP']->value;?>
</div>
					            </div>
					        </div>
					    </div>
				    </div>
				</section>
					            
	            <?php if (isset($_smarty_tpl->tpl_vars['HOOK_TOP_SECONDARY']->value)&&$_smarty_tpl->tpl_vars['HOOK_TOP_SECONDARY']->value) {?>
	            <section id="top_extra">
	            	<?php echo $_smarty_tpl->tpl_vars['HOOK_TOP_SECONDARY']->value;?>

	            </section>
	            <?php }?>

				<!-- Breadcrumb -->         
	            <?php if ($_smarty_tpl->tpl_vars['page_name']->value!='index'&&$_smarty_tpl->tpl_vars['page_name']->value!='pagenotfound'&&$_smarty_tpl->tpl_vars['page_name']->value!='module-stblog-default') {?>
	            <div id="breadcrumb_wrapper" class="<?php if (isset($_smarty_tpl->tpl_vars['sttheme']->value['breadcrumb_width'])&&$_smarty_tpl->tpl_vars['sttheme']->value['breadcrumb_width']) {?> wide_container <?php }?>"><div class="container"><div class="row">
	                <div class="col-xs-12 col-sm-12 col-md-12 clearfix">
	                	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	                </div>
	            </div></div></div>
	            <?php }?>
				<!--/ Breadcrumb -->
			</header>

			<div class="main_content_area">
			<!-- Main slideshow -->
            <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index') {?>
	            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAnywhere','function'=>"displayMainSlide",'mod'=>'revsliderprestashop','caller'=>'revsliderprestashop'),$_smarty_tpl);?>

            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='module-stblog-default') {?>
	            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAnywhere','function'=>"displayBlogMainSlide",'mod'=>'revsliderprestashop','caller'=>'revsliderprestashop'),$_smarty_tpl);?>

            <?php }?>
			<!--/ Main slideshow -->
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayFullWidthTop"),$_smarty_tpl);?>

            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayFullWidthTop2"),$_smarty_tpl);?>

			<div class="columns-container wide_container">
				<div id="columns" class="container">
					<?php $_smarty_tpl->_capture_stack[0][] = array("displayTopColumn", null, null); ob_start(); ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayTopColumn"),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
					<?php if (isset(Smarty::$_smarty_vars['capture']['displayTopColumn'])&&trim(Smarty::$_smarty_vars['capture']['displayTopColumn'])) {?>
					<div id="slider_row" class="row">
						<div id="top_column" class="center_column clearfix col-xs-12 col-sm-12 col-md-12"><?php echo Smarty::$_smarty_vars['capture']['displayTopColumn'];?>
</div>
					</div>
					<?php }?>
					<div class="row">
						<?php if (isset($_smarty_tpl->tpl_vars['left_column_size']->value)&&!empty($_smarty_tpl->tpl_vars['left_column_size']->value)) {?>
						<div id="left_column" class="column <?php if ($_smarty_tpl->tpl_vars['slide_lr_column']->value) {?> col-xxs-8 col-xs-6<?php } else { ?> col-xs-12<?php }?> col-sm-<?php echo intval($_smarty_tpl->tpl_vars['left_column_size']->value);?>
 col-md-<?php echo intval($_smarty_tpl->tpl_vars['left_column_size']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['HOOK_LEFT_COLUMN']->value;?>
</div>
						<?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['left_column_size']->value)&&isset($_smarty_tpl->tpl_vars['right_column_size']->value)) {?><?php $_smarty_tpl->tpl_vars['cols'] = new Smarty_variable((12-$_smarty_tpl->tpl_vars['left_column_size']->value-$_smarty_tpl->tpl_vars['right_column_size']->value), null, 0);?><?php } else { ?><?php $_smarty_tpl->tpl_vars['cols'] = new Smarty_variable(12, null, 0);?><?php }?>
						<div id="center_column" class="center_column col-xs-12 col-sm-<?php echo intval($_smarty_tpl->tpl_vars['cols']->value);?>
 col-md-<?php echo intval($_smarty_tpl->tpl_vars['cols']->value);?>
">
	<?php }?><?php }} ?>
