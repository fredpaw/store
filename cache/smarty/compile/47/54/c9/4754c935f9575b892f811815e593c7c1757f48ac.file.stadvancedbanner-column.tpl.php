<?php /* Smarty version Smarty-3.1.19, created on 2015-12-02 17:52:08
         compiled from "D:\xampp\htdocs\store\modules\stadvancedbanner\views\templates\hook\stadvancedbanner-column.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3737565e951866c0b4-44749195%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4754c935f9575b892f811815e593c7c1757f48ac' => 
    array (
      0 => 'D:\\xampp\\htdocs\\store\\modules\\stadvancedbanner\\views\\templates\\hook\\stadvancedbanner-column.tpl',
      1 => 1449038239,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3737565e951866c0b4-44749195',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'columns_data' => 0,
    'column' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_565e95186dd6d3_28950659',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565e95186dd6d3_28950659')) {function content_565e95186dd6d3_28950659($_smarty_tpl) {?><!-- MODULE st banner column -->
<?php if (isset($_smarty_tpl->tpl_vars['columns_data']->value)) {?>
    <div class="row">
        <?php  $_smarty_tpl->tpl_vars['column'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['column']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['columns_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['column']->key => $_smarty_tpl->tpl_vars['column']->value) {
$_smarty_tpl->tpl_vars['column']->_loop = true;
?>
            <?php if ((isset($_smarty_tpl->tpl_vars['column']->value['columns'])&&count($_smarty_tpl->tpl_vars['column']->value['columns']))||(isset($_smarty_tpl->tpl_vars['column']->value['banners'])&&count($_smarty_tpl->tpl_vars['column']->value['banners']))) {?>
                <div id="advanced_banner_box_<?php echo $_smarty_tpl->tpl_vars['column']->value['id_st_advanced_banner_group'];?>
" class="col-sm-<?php echo $_smarty_tpl->tpl_vars['column']->value['width'];?>
 advanced_banner_col <?php if (isset($_smarty_tpl->tpl_vars['column']->value['banner_b'])&&$_smarty_tpl->tpl_vars['column']->value['banner_b']) {?> advanced_banner_b<?php }?> <?php if ($_smarty_tpl->tpl_vars['column']->value['hide_on_mobile']) {?> hidden-xs <?php }?>" data-height="<?php echo $_smarty_tpl->tpl_vars['column']->value['height'];?>
" >
                    <?php if (isset($_smarty_tpl->tpl_vars['column']->value['banners'])&&count($_smarty_tpl->tpl_vars['column']->value['banners'])) {?>
                        <?php echo $_smarty_tpl->getSubTemplate ("./stadvancedbanner-block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('banner_data'=>$_smarty_tpl->tpl_vars['column']->value['banners'][0],'banner_height'=>$_smarty_tpl->tpl_vars['column']->value['height_px']), 0);?>

                    <?php } else { ?>
                        <?php echo $_smarty_tpl->getSubTemplate ("./stadvancedbanner-column.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('columns_data'=>$_smarty_tpl->tpl_vars['column']->value['columns']), 0);?>

                    <?php }?>
                </div>
            <?php }?>
        <?php } ?>        
    </div>
<?php }?>
<!--/ MODULE st banner column--><?php }} ?>
