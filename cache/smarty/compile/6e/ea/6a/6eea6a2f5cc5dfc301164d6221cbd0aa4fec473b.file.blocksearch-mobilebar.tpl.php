<?php /* Smarty version Smarty-3.1.19, created on 2015-12-02 17:52:11
         compiled from "D:\xampp\htdocs\store\modules\blocksearch_mod\views\templates\hook\blocksearch-mobilebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17638565e951b7b1301-68745601%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6eea6a2f5cc5dfc301164d6221cbd0aa4fec473b' => 
    array (
      0 => 'D:\\xampp\\htdocs\\store\\modules\\blocksearch_mod\\views\\templates\\hook\\blocksearch-mobilebar.tpl',
      1 => 1449038238,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17638565e951b7b1301-68745601',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'sttheme' => 0,
    'search_query' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_565e951b7ea831_48510851',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565e951b7ea831_48510851')) {function content_565e951b7ea831_48510851($_smarty_tpl) {?>
<!-- Block search module TOP -->
<div id="search_block_mobile_bar" class="st-side-content clearfix">
	<form id="searchbox_mobile_bar" method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search',true), ENT_QUOTES, 'UTF-8', true);?>
" >
        <div class="searchbox_inner">
    		<input type="hidden" name="controller" value="search" />
    		<input type="hidden" name="orderby" value="position" />
    		<input type="hidden" name="orderway" value="desc" />
    		<input class="search_query form-control" type="text" id="search_query_mobile_bar" name="search_query" placeholder="<?php if (isset($_smarty_tpl->tpl_vars['sttheme']->value['search_label'])&&$_smarty_tpl->tpl_vars['sttheme']->value['search_label']) {?><?php echo $_smarty_tpl->tpl_vars['sttheme']->value['search_label'];?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Search','mod'=>'blocksearch_mod'),$_smarty_tpl);?>
<?php }?>" value="<?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['search_query']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
" autocomplete="off" /><a href="javascript:;" title="<?php echo smartyTranslate(array('s'=>'Search','mod'=>'blocksearch_mod'),$_smarty_tpl);?>
" rel="nofollow" id="submit_searchbox_mobile_bar" class="submit_searchbox icon_wrap"><i class="icon-search-1 icon-0x"></i><span class="icon_text"><?php echo smartyTranslate(array('s'=>'Search','mod'=>'blocksearch_mod'),$_smarty_tpl);?>
</span></a>
        </div>
	</form><script type="text/javascript">
    // <![CDATA[
    
    jQuery(function($){
        $('#submit_searchbox_mobile_bar').click(function(){
            var search_query_mobile_bar_val = $.trim($('#search_query_mobile_bar').val());
            if(search_query_mobile_bar_val=='' || search_query_mobile_bar_val==$.trim($('#search_query_mobile_bar').attr('placeholder')))
            {
                $('#search_query_mobile_bar').focusout();
                return false;
            }
            $('#searchbox_mobile_bar').submit();
        });
        if(!isPlaceholer())
        {
            $('#search_query_mobile_bar').focusin(function(){
                if ($(this).val()==$(this).attr('placeholder'))
                    $(this).val('');
            }).focusout(function(){
                if ($(this).val()=='')
                    $(this).val($(this).attr('placeholder'));
            });
        }
    });
    
    //]]>
    </script>
</div>
<!-- /Block search module TOP --><?php }} ?>
