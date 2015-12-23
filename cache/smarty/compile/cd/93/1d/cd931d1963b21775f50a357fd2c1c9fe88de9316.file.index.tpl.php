<?php /* Smarty version Smarty-3.1.19, created on 2015-12-21 16:58:36
         compiled from "D:\xampp\htdocs\store\themes\transformer\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:119475677950cebf3d8-24485917%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd931d1963b21775f50a357fd2c1c9fe88de9316' => 
    array (
      0 => 'D:\\xampp\\htdocs\\store\\themes\\transformer\\index.tpl',
      1 => 1449038237,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '119475677950cebf3d8-24485917',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOOK_HOME_TOP' => 0,
    'HOOK_HOME' => 0,
    'HOOK_HOME_SECONDARY_LEFT' => 0,
    'HOOK_HOME_SECONDARY_RIGHT' => 0,
    'HOOK_LEFT_COLUMN' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
    'HOOK_HOME_BOTTOM' => 0,
    'HOOK_HOME_TAB_CONTENT' => 0,
    'HOOK_HOME_TAB' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5677950d05e481_35430945',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5677950d05e481_35430945')) {function content_5677950d05e481_35430945($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['HOOK_HOME_TOP']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_HOME_TOP']->value)) {?><?php echo $_smarty_tpl->tpl_vars['HOOK_HOME_TOP']->value;?>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['HOOK_HOME']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_HOME']->value)) {?>
	<?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

<?php }?>
<?php if ($_smarty_tpl->tpl_vars['HOOK_HOME_SECONDARY_LEFT']->value||(isset($_smarty_tpl->tpl_vars['HOOK_HOME_SECONDARY_RIGHT']->value)&&$_smarty_tpl->tpl_vars['HOOK_HOME_SECONDARY_RIGHT']->value)) {?>
<div class="row">
    <div id="home_secondary_left" class="<?php if ((!isset($_smarty_tpl->tpl_vars['HOOK_HOME_SECONDARY_RIGHT']->value)||!$_smarty_tpl->tpl_vars['HOOK_HOME_SECONDARY_RIGHT']->value)||(isset($_smarty_tpl->tpl_vars['HOOK_LEFT_COLUMN']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_LEFT_COLUMN']->value)&&isset($_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value))) {?> col-xs-12 col-md-12 <?php } else { ?> col-xs-12 col-sm-9 col-md-9 <?php }?>">
        <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME_SECONDARY_LEFT']->value;?>

    </div>
    <?php if (!(isset($_smarty_tpl->tpl_vars['HOOK_LEFT_COLUMN']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_LEFT_COLUMN']->value)&&isset($_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value))&&(isset($_smarty_tpl->tpl_vars['HOOK_HOME_SECONDARY_RIGHT']->value)&&$_smarty_tpl->tpl_vars['HOOK_HOME_SECONDARY_RIGHT']->value)) {?>
    <div id="home_secondary_right" class="col-sm-3 col-md-3 hidden-xs">
        <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME_SECONDARY_RIGHT']->value;?>

    </div>
    <?php }?>
</div>
<?php }?>
<?php $_smarty_tpl->_capture_stack[0][] = array("displayHomeTertiaryLeft", null, null); ob_start(); ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayHomeTertiaryLeft"),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_smarty_tpl->_capture_stack[0][] = array("displayHomeTertiaryRight", null, null); ob_start(); ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayHomeTertiaryRight"),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php if (trim(Smarty::$_smarty_vars['capture']['displayHomeTertiaryLeft'])||trim(Smarty::$_smarty_vars['capture']['displayHomeTertiaryRight'])) {?>
<div class="row">
    <div id="home_tertiary_left" class="col-xs-12 col-sm-6 col-md-6">
        <?php echo Smarty::$_smarty_vars['capture']['displayHomeTertiaryLeft'];?>

    </div>
    <div id="home_tertiary_right" class="col-xs-12 col-sm-6 col-md-6">
        <?php echo Smarty::$_smarty_vars['capture']['displayHomeTertiaryRight'];?>

    </div>
</div>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['HOOK_HOME_BOTTOM']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_HOME_BOTTOM']->value)) {?><?php echo $_smarty_tpl->tpl_vars['HOOK_HOME_BOTTOM']->value;?>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value)) {?>
    <?php if (isset($_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value)) {?>
        <ul id="home-page-tabs" class="li_fl clearfix">
            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value;?>

        </ul>
    <?php }?>
    <div class="tab-content"><?php echo $_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value;?>
</div>
<?php }?><?php }} ?>
