<?php /* Smarty version Smarty-3.1.19, created on 2015-11-20 17:34:52
         compiled from "D:\xampp\htdocs\store\modules\stmultilink\views\templates\hook\stmultilink-top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9225564ebf0c630b01-09543942%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cfabfd05adb723b04235f01b2f8d520e3e8f3a0f' => 
    array (
      0 => 'D:\\xampp\\htdocs\\store\\modules\\stmultilink\\views\\templates\\hook\\stmultilink-top.tpl',
      1 => 1447993232,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9225564ebf0c630b01-09543942',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link_groups' => 0,
    'link_group' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564ebf0c6b97b3_80426430',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564ebf0c6b97b3_80426430')) {function content_564ebf0c6b97b3_80426430($_smarty_tpl) {?>

<!-- Block stlinkgroups top module -->
<?php  $_smarty_tpl->tpl_vars['link_group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['link_group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['link_groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['link_group']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['link_group']->key => $_smarty_tpl->tpl_vars['link_group']->value) {
$_smarty_tpl->tpl_vars['link_group']->_loop = true;
 $_smarty_tpl->tpl_vars['link_group']->index++;
 $_smarty_tpl->tpl_vars['link_group']->first = $_smarty_tpl->tpl_vars['link_group']->index === 0;
?>
    <dl id="multilink_<?php echo $_smarty_tpl->tpl_vars['link_group']->value['id_st_multi_link_group'];?>
" class="stlinkgroups_top <?php if ($_smarty_tpl->tpl_vars['link_group']->value['location']==9) {?>pull-left<?php } elseif ($_smarty_tpl->tpl_vars['link_group']->value['location']==1) {?>pull-right<?php }?> dropdown_wrap <?php if ($_smarty_tpl->tpl_vars['link_group']->first) {?>first-item<?php }?> <?php if ($_smarty_tpl->tpl_vars['link_group']->value['hide_on_mobile']) {?> hidden-xs <?php }?>">
        <dt class="dropdown_tri">
        <?php if ($_smarty_tpl->tpl_vars['link_group']->value['url']) {?>
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link_group']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link_group']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="dropdown_tri_inner" <?php if (isset($_smarty_tpl->tpl_vars['link_group']->value['nofollow'])&&$_smarty_tpl->tpl_vars['link_group']->value['nofollow']) {?> rel="nofollow" <?php }?> <?php if (isset($_smarty_tpl->tpl_vars['link_group']->value['new_window'])&&$_smarty_tpl->tpl_vars['link_group']->value['new_window']) {?> target="_blank" <?php }?>>
        <?php } else { ?>
            <div class="dropdown_tri_inner">
        <?php }?>
        <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link_group']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

        <?php if (is_array($_smarty_tpl->tpl_vars['link_group']->value['links'])&&count($_smarty_tpl->tpl_vars['link_group']->value['links'])) {?><b></b><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['link_group']->value['url']) {?>
            </a>
        <?php } else { ?>
            </div>
        <?php }?>
        </dt>
        <dd class="dropdown_list dropdown_right">
        <ul>
        <?php if ($_smarty_tpl->tpl_vars['link_group']->value['links']) {?>
		<?php  $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['link_group']->value['links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['link']->key => $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->_loop = true;
?>
			<li>
        		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if (isset($_smarty_tpl->tpl_vars['link']->value['nofollow'])&&$_smarty_tpl->tpl_vars['link']->value['nofollow']) {?> rel="nofollow" <?php }?> <?php if ($_smarty_tpl->tpl_vars['link']->value['new_window']) {?> target="_blank" <?php }?>>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['label'], ENT_QUOTES, 'UTF-8', true);?>

        		</a>
			</li>
		<?php } ?>
		<?php }?>
		</ul>
        </dd>
    </dl>
<?php } ?>
<!-- /Block stlinkgroups top module --><?php }} ?>
