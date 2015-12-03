<?php /* Smarty version Smarty-3.1.19, created on 2015-12-02 17:48:55
         compiled from "D:\xampp\htdocs\store\themes\transformer\modules\productcomments\productcomments_reviews.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24926565e94576b3733-69708808%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af9f52144314e52aa870264066be64f051425232' => 
    array (
      0 => 'D:\\xampp\\htdocs\\store\\themes\\transformer\\modules\\productcomments\\productcomments_reviews.tpl',
      1 => 1449038237,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24926565e94576b3733-69708808',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nbComments' => 0,
    'averageTotal' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_565e9457726ef9_19650217',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565e9457726ef9_19650217')) {function content_565e9457726ef9_19650217($_smarty_tpl) {?> 
<?php if (isset($_smarty_tpl->tpl_vars['nbComments']->value)&&$_smarty_tpl->tpl_vars['nbComments']->value>0) {?>
	<div class="rating_box rating_box_productcomments unvisible">
		<span class="rating_box_inner">
			<?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? round($_smarty_tpl->tpl_vars['averageTotal']->value)+1 - (1) : 1-(round($_smarty_tpl->tpl_vars['averageTotal']->value))+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
			    <i class="icon-star-2 icon-small light"></i>
			<?php }} ?>
			<?php if (round($_smarty_tpl->tpl_vars['averageTotal']->value)<5) {?>
			    <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 5+1 - (round($_smarty_tpl->tpl_vars['averageTotal']->value)+1) : round($_smarty_tpl->tpl_vars['averageTotal']->value)+1-(5)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = round($_smarty_tpl->tpl_vars['averageTotal']->value)+1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
			        <i class="icon-star-2 icon-small"></i>
			    <?php }} ?>
			<?php }?>
		</span>
		<?php if (isset($_smarty_tpl->tpl_vars['nbComments']->value)&&$_smarty_tpl->tpl_vars['nbComments']->value) {?><span class="comment_nbr"><?php echo $_smarty_tpl->tpl_vars['nbComments']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['nbComments']->value>1) {?><?php echo smartyTranslate(array('s'=>'Reviews','mod'=>'productcomments'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Review','mod'=>'productcomments'),$_smarty_tpl);?>
<?php }?></span><?php }?>
	</div>
<?php }?><?php }} ?>
