<?php /* Smarty version Smarty-3.1.19, created on 2015-12-02 17:48:55
         compiled from "D:\xampp\htdocs\store\modules\stadvancedbanner\views\templates\hook\stadvancedbanner-block.tpl" */ ?>
<?php /*%%SmartyHeaderCode:603564ebf0b0f6307-63196545%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab32e37a2047f8c6a89024a437460695a352f96b' => 
    array (
      0 => 'D:\\xampp\\htdocs\\store\\modules\\stadvancedbanner\\views\\templates\\hook\\stadvancedbanner-block.tpl',
      1 => 1449038239,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '603564ebf0b0f6307-63196545',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564ebf0b18c8a3_82587258',
  'variables' => 
  array (
    'banner_data' => 0,
    'banner_height' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564ebf0b18c8a3_82587258')) {function content_564ebf0b18c8a3_82587258($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['banner_data']->value['url']) {?>
    <a id="st_advanced_banner_block_<?php echo $_smarty_tpl->tpl_vars['banner_data']->value['id_st_advanced_banner'];?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['banner_data']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
" class="st_advanced_banner_block_<?php echo $_smarty_tpl->tpl_vars['banner_data']->value['id_st_advanced_banner'];?>
 st_advanced_banner_block" target="<?php if ($_smarty_tpl->tpl_vars['banner_data']->value['new_window']) {?>_blank<?php } else { ?>_self<?php }?>" title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['banner_data']->value['title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" style="height:<?php echo $_smarty_tpl->tpl_vars['banner_height']->value;?>
px;">
<?php } else { ?>
    <div id="st_advanced_banner_block_<?php echo $_smarty_tpl->tpl_vars['banner_data']->value['id_st_advanced_banner'];?>
" class="st_advanced_banner_block_<?php echo $_smarty_tpl->tpl_vars['banner_data']->value['id_st_advanced_banner'];?>
 st_advanced_banner_block" style="height:<?php echo $_smarty_tpl->tpl_vars['banner_height']->value;?>
px;">
<?php }?>
    <div class="st_advanced_banner_image" style="<?php if (isset($_smarty_tpl->tpl_vars['banner_data']->value['image_multi_lang'])&&$_smarty_tpl->tpl_vars['banner_data']->value['image_multi_lang']) {?>background-image:url(<?php echo $_smarty_tpl->tpl_vars['banner_data']->value['image_multi_lang'];?>
);<?php }?><?php if (isset($_smarty_tpl->tpl_vars['banner_data']->value['bg_color'])&&$_smarty_tpl->tpl_vars['banner_data']->value['bg_color']) {?>background-color:<?php echo $_smarty_tpl->tpl_vars['banner_data']->value['bg_color'];?>
;<?php }?>"></div>
<?php if ($_smarty_tpl->tpl_vars['banner_data']->value['description']) {?>
    <div class="advanced_banner_text text_table_wrap <?php if ($_smarty_tpl->tpl_vars['banner_data']->value['hide_text_on_mobile']) {?> hidden-xs <?php }?>">
        <div class="text_table">
            <div class="text_td style_content <?php if ($_smarty_tpl->tpl_vars['banner_data']->value['text_align']==1) {?> text-left <?php } elseif ($_smarty_tpl->tpl_vars['banner_data']->value['text_align']==3) {?> text-right <?php } else { ?> text-center <?php }?> advanced_banner_text_<?php echo (($tmp = @$_smarty_tpl->tpl_vars['banner_data']->value['text_position'])===null||$tmp==='' ? 'center' : $tmp);?>
 clearfix">
                <?php if (isset($_smarty_tpl->tpl_vars['banner_data']->value['text_width'])&&$_smarty_tpl->tpl_vars['banner_data']->value['text_width']) {?><div class="text_inner_box <?php if ($_smarty_tpl->tpl_vars['banner_data']->value['text_width']>10&&$_smarty_tpl->tpl_vars['banner_data']->value['text_width']<20) {?> text_inner_box_left<?php } elseif ($_smarty_tpl->tpl_vars['banner_data']->value['text_width']>20&&$_smarty_tpl->tpl_vars['banner_data']->value['text_width']<30) {?> text_inner_box_right<?php }?> center_width_<?php echo $_smarty_tpl->tpl_vars['banner_data']->value['text_width']%10;?>
0"><?php }?>
                <?php if ($_smarty_tpl->tpl_vars['banner_data']->value['description']) {?><?php echo $_smarty_tpl->tpl_vars['banner_data']->value['description'];?>
<?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['banner_data']->value['text_width'])&&$_smarty_tpl->tpl_vars['banner_data']->value['text_width']) {?></div><?php }?>
            </div>
        </div>
    </div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['banner_data']->value['url']) {?>
    </a>
<?php } else { ?>
    </div>
<?php }?><?php }} ?>
