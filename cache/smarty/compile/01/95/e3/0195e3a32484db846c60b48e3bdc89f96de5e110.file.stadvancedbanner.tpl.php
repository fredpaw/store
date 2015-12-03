<?php /* Smarty version Smarty-3.1.19, created on 2015-12-02 17:52:08
         compiled from "D:\xampp\htdocs\store\modules\stadvancedbanner\views\templates\hook\stadvancedbanner.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23520565e95185d2fc9-77466283%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0195e3a32484db846c60b48e3bdc89f96de5e110' => 
    array (
      0 => 'D:\\xampp\\htdocs\\store\\modules\\stadvancedbanner\\views\\templates\\hook\\stadvancedbanner.tpl',
      1 => 1449038239,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23520565e95185d2fc9-77466283',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'groups' => 0,
    'group' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_565e951864f4b4_94847774',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565e951864f4b4_94847774')) {function content_565e951864f4b4_94847774($_smarty_tpl) {?><!-- MODULE st banner -->
<?php if (isset($_smarty_tpl->tpl_vars['groups']->value)) {?>
    <?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['group']->value['is_full_width']) {?><div id="advanced_banner_container_<?php echo $_smarty_tpl->tpl_vars['group']->value['id_st_advanced_banner_group'];?>
" class="advanced_banner_container full_container <?php if ($_smarty_tpl->tpl_vars['group']->value['hide_on_mobile']) {?> hidden-xs <?php }?> block"><?php if (!$_smarty_tpl->tpl_vars['group']->value['stretched']) {?><div class="container"><?php }?><?php }?>
            <div id="st_advanced_banner_<?php echo $_smarty_tpl->tpl_vars['group']->value['id_st_advanced_banner_group'];?>
" class="st_advanced_banner_row <?php if (!$_smarty_tpl->tpl_vars['group']->value['is_full_width']) {?> block <?php }?> <?php if ($_smarty_tpl->tpl_vars['group']->value['hide_on_mobile']) {?> hidden-xs <?php }?><?php if ($_smarty_tpl->tpl_vars['group']->value['hover_effect']) {?> hover_effect_<?php echo $_smarty_tpl->tpl_vars['group']->value['hover_effect'];?>
 <?php }?> <?php if (isset($_smarty_tpl->tpl_vars['group']->value['is_column'])&&$_smarty_tpl->tpl_vars['group']->value['is_column']) {?> column_block <?php }?>">
                <?php if (isset($_smarty_tpl->tpl_vars['group']->value['banners'])&&count($_smarty_tpl->tpl_vars['group']->value['banners'])) {?>
                    <div class="row block_content">
                        <div id="advanced_banner_box_<?php echo $_smarty_tpl->tpl_vars['group']->value['id_st_advanced_banner_group'];?>
" class="col-sm-12 advanced_banner_col" data-height="100">
                            <?php echo $_smarty_tpl->getSubTemplate ("./stadvancedbanner-block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('banner_data'=>$_smarty_tpl->tpl_vars['group']->value['banners'][0],'banner_height'=>$_smarty_tpl->tpl_vars['group']->value['height']), 0);?>

                        </div>
                    </div>
                <?php } elseif (isset($_smarty_tpl->tpl_vars['group']->value['columns'])) {?>
                    <?php echo $_smarty_tpl->getSubTemplate ("./stadvancedbanner-column.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('columns_data'=>$_smarty_tpl->tpl_vars['group']->value['columns']), 0);?>

                <?php }?>
            </div>
        <?php if ($_smarty_tpl->tpl_vars['group']->value['is_full_width']) {?></div><?php if (!$_smarty_tpl->tpl_vars['group']->value['stretched']) {?></div><?php }?><?php }?>
    <?php } ?>
<?php }?>
<!--/ MODULE st banner --><?php }} ?>
