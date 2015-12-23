<?php /* Smarty version Smarty-3.1.19, created on 2015-12-21 16:14:43
         compiled from "D:\xampp\htdocs\store\themes\transformer\modules\productcomments\\tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:814256778ac3169884-54010176%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b8b4d470e2c7b4e252ff46899a520fe933ca3dc' => 
    array (
      0 => 'D:\\xampp\\htdocs\\store\\themes\\transformer\\modules\\productcomments\\\\tab.tpl',
      1 => 1449038237,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '814256778ac3169884-54010176',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nbComments' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56778ac3171832_42555042',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56778ac3171832_42555042')) {function content_56778ac3171832_42555042($_smarty_tpl) {?>
<li><a href="#idTab5" class="idTabHrefShort"><?php echo smartyTranslate(array('s'=>'Comments','mod'=>'productcomments'),$_smarty_tpl);?>
(<?php echo $_smarty_tpl->tpl_vars['nbComments']->value;?>
)</a></li><?php }} ?>
