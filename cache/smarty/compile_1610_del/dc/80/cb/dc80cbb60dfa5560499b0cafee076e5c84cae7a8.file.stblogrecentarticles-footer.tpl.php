<?php /* Smarty version Smarty-3.1.19, created on 2015-12-02 17:48:54
         compiled from "D:\xampp\htdocs\store\modules\stblogrecentarticles\views\templates\hook\stblogrecentarticles-footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20358564ebf089a92f5-11357149%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc80cbb60dfa5560499b0cafee076e5c84cae7a8' => 
    array (
      0 => 'D:\\xampp\\htdocs\\store\\modules\\stblogrecentarticles\\views\\templates\\hook\\stblogrecentarticles-footer.tpl',
      1 => 1449038240,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20358564ebf089a92f5-11357149',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564ebf08a0bf85_24418653',
  'variables' => 
  array (
    'hook_hash' => 0,
    'blogs' => 0,
    'blog' => 0,
    'link' => 0,
    'imageSize' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564ebf08a0bf85_24418653')) {function content_564ebf08a0bf85_24418653($_smarty_tpl) {?>
<!-- St Blog recent articles -->
<section id="st_blog_recent_article-footer_<?php echo $_smarty_tpl->tpl_vars['hook_hash']->value;?>
" class="st_blog_recent_article-footer block col-xs-12 col-sm-3 col-md-3">
    <a href="javascript:;" class="opener visible-xs">&nbsp;</a>
    <h4 class="title_block"><?php echo smartyTranslate(array('s'=>'Recent articles','mod'=>'stblogrecentarticles'),$_smarty_tpl);?>
</h4>
    <div class="footer_block_content">
    <?php if (is_array($_smarty_tpl->tpl_vars['blogs']->value)&&count($_smarty_tpl->tpl_vars['blogs']->value)) {?>
    <ul class="pro_column_list">
        <?php  $_smarty_tpl->tpl_vars['blog'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['blog']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blogs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['blog']->key => $_smarty_tpl->tpl_vars['blog']->value) {
$_smarty_tpl->tpl_vars['blog']->_loop = true;
?>
        <li class="clearfix">
            <div class="pro_column_left">
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('stblog','article',array('id_blog'=>$_smarty_tpl->tpl_vars['blog']->value['id_st_blog'],'rewrite'=>$_smarty_tpl->tpl_vars['blog']->value['link_rewrite'])), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
                <img src="<?php echo $_smarty_tpl->tpl_vars['blog']->value['cover']['links']['thumb'];?>
" alt="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" width="<?php echo $_smarty_tpl->tpl_vars['imageSize']->value[1]['thumb'][0];?>
" height="<?php echo $_smarty_tpl->tpl_vars['imageSize']->value[1]['thumb'][1];?>
" />
			</a>
            </div>
			<div class="pro_column_right">
				<h4 class="s_title_block nohidden"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('stblog','article',array('id_blog'=>$_smarty_tpl->tpl_vars['blog']->value['id_st_blog'],'rewrite'=>$_smarty_tpl->tpl_vars['blog']->value['link_rewrite'])), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['blog']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['blog']->value['name'],50,'...'), ENT_QUOTES, 'UTF-8', true);?>
</a></h4>           			      <span class="date-add"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->tpl_vars['blog']->value['date_add'],'full'=>0),$_smarty_tpl);?>
</span>
            </div>
        </li>
        <?php } ?>
    </ul>
    <?php } else { ?>
        <p class="warning"><?php echo smartyTranslate(array('s'=>'No new posts','mod'=>'stblogrecentarticles'),$_smarty_tpl);?>
</p>
    <?php }?>
    </div>
</section>
<!-- /St Blog recent articles  --><?php }} ?>
