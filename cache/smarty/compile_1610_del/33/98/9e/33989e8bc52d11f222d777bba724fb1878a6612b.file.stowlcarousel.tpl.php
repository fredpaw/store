<?php /* Smarty version Smarty-3.1.19, created on 2015-12-02 17:48:57
         compiled from "D:\xampp\htdocs\store\modules\stowlcarousel\views\templates\hook\stowlcarousel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15932564ebf0c932fb4-21431680%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33989e8bc52d11f222d777bba724fb1878a6612b' => 
    array (
      0 => 'D:\\xampp\\htdocs\\store\\modules\\stowlcarousel\\views\\templates\\hook\\stowlcarousel.tpl',
      1 => 1449038241,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15932564ebf0c932fb4-21431680',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564ebf0c97d280_21456645',
  'variables' => 
  array (
    'slide_group' => 0,
    'group' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564ebf0c97d280_21456645')) {function content_564ebf0c97d280_21456645($_smarty_tpl) {?><!-- MODULE st owl carousel -->
<?php if (isset($_smarty_tpl->tpl_vars['slide_group']->value)) {?>
    <?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slide_group']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
?>
        <?php if (isset($_smarty_tpl->tpl_vars['group']->value['slide'])&&count($_smarty_tpl->tpl_vars['group']->value['slide'])) {?>
            <?php if ($_smarty_tpl->tpl_vars['group']->value['is_full_width']) {?><div id="owl_carousel_container_<?php echo $_smarty_tpl->tpl_vars['group']->value['id_st_owl_carousel_group'];?>
" class="owl_carousel_container full_container <?php if ($_smarty_tpl->tpl_vars['group']->value['hide_on_mobile']) {?> hidden-xs <?php }?> block"><?php }?>
            <div id="st_owl_carousel_<?php echo $_smarty_tpl->tpl_vars['group']->value['id_st_owl_carousel_group'];?>
" class="owl_carousel_wrap st_owl_carousel_<?php echo $_smarty_tpl->tpl_vars['group']->value['templates'];?>
 <?php if (!$_smarty_tpl->tpl_vars['group']->value['is_full_width']) {?> block <?php }?> owl_images_slider <?php if ($_smarty_tpl->tpl_vars['group']->value['hide_on_mobile']) {?> hidden-xs <?php }?>">
                <?php echo $_smarty_tpl->getSubTemplate ("./stowlcarousel-".((string)$_smarty_tpl->tpl_vars['group']->value['templates']).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('slides'=>$_smarty_tpl->tpl_vars['group']->value), 0);?>

            </div>
            <?php if ($_smarty_tpl->tpl_vars['group']->value['is_full_width']) {?></div><?php }?>
        <?php }?>
    <?php } ?>
<?php }?>
<!--/ MODULE st owl carousel --><?php }} ?>
