<?php /* Smarty version Smarty-3.1.19, created on 2015-12-02 17:48:56
         compiled from "D:\xampp\htdocs\store\modules\steasycontent\views\templates\hook\steasycontent-footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2145564ebf0884f248-92607886%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2df4fb8a70107c09b7c018ae252306da854fd25' => 
    array (
      0 => 'D:\\xampp\\htdocs\\store\\modules\\steasycontent\\views\\templates\\hook\\steasycontent-footer.tpl',
      1 => 1449038240,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2145564ebf0884f248-92607886',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564ebf088b0729_47883893',
  'variables' => 
  array (
    'easy_content' => 0,
    'ec' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564ebf088b0729_47883893')) {function content_564ebf088b0729_47883893($_smarty_tpl) {?>
<!-- MODULE st easy content -->
<?php if (count($_smarty_tpl->tpl_vars['easy_content']->value)>0) {?>
    <?php  $_smarty_tpl->tpl_vars['ec'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ec']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['easy_content']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ec']->key => $_smarty_tpl->tpl_vars['ec']->value) {
$_smarty_tpl->tpl_vars['ec']->_loop = true;
?>
    <section id="easycontent_<?php echo $_smarty_tpl->tpl_vars['ec']->value['id_st_easy_content'];?>
" class="<?php if ($_smarty_tpl->tpl_vars['ec']->value['hide_on_mobile']==1) {?>hidden-xs<?php } elseif ($_smarty_tpl->tpl_vars['ec']->value['hide_on_mobile']==2) {?>visible-xs visible-xs-block<?php }?> easycontent col-xs-12 col-sm-<?php if ($_smarty_tpl->tpl_vars['ec']->value['span']) {?><?php echo $_smarty_tpl->tpl_vars['ec']->value['span'];?>
<?php } else { ?>3<?php }?> block">
        <?php if ($_smarty_tpl->tpl_vars['ec']->value['title']) {?>
        <a href="javascript:;" class="opener visible-xs">&nbsp;</a>
        <h3 class="title_block">
            <?php if ($_smarty_tpl->tpl_vars['ec']->value['url']) {?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ec']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ec']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
"><?php }?>
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ec']->value['title'], ENT_QUOTES, 'UTF-8', true);?>

            <?php if ($_smarty_tpl->tpl_vars['ec']->value['url']) {?></a><?php }?>
        </h3>
        <?php }?>
    	<div class="easycontent footer_block_content <?php if (!$_smarty_tpl->tpl_vars['ec']->value['title']) {?>keep_open<?php }?>  <?php if ($_smarty_tpl->tpl_vars['ec']->value['text_align']==2) {?> text-center <?php } elseif ($_smarty_tpl->tpl_vars['ec']->value['text_align']==3) {?> text-right <?php }?> <?php if ($_smarty_tpl->tpl_vars['ec']->value['width']) {?> center_width_<?php echo $_smarty_tpl->tpl_vars['ec']->value['width'];?>
 <?php }?>">
            <?php echo stripslashes($_smarty_tpl->tpl_vars['ec']->value['text']);?>

    	</div>
    </section>
    <?php } ?>
<?php }?>
<!-- MODULE st easy content --><?php }} ?>
