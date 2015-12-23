<?php /* Smarty version Smarty-3.1.19, created on 2015-12-21 16:15:10
         compiled from "D:\xampp\htdocs\store\modules\stcountdown\views\templates\admin\stcountdown.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1194356778aded22152-35528904%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79fd6d25df9d06c05d46900d739dc155772c40d8' => 
    array (
      0 => 'D:\\xampp\\htdocs\\store\\modules\\stcountdown\\views\\templates\\admin\\stcountdown.tpl',
      1 => 1449038240,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1194356778aded22152-35528904',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id_product' => 0,
    'checked' => 0,
    'currentIndex' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56778adee725c0_90706089',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56778adee725c0_90706089')) {function content_56778adee725c0_90706089($_smarty_tpl) {?>
<div class="form-group">
	<div class="col-lg-9 col-lg-offset-3">
		<p class="checkbox">
			<label for="stcountdown"><input type="checkbox" name="stcountdown" value="<?php echo $_smarty_tpl->tpl_vars['id_product']->value;?>
" id="stcountdown"<?php if ($_smarty_tpl->tpl_vars['checked']->value) {?> checked="checked"<?php }?> /><?php echo smartyTranslate(array('s'=>'Display a countdown timer on this product if it has specific prices.','mod'=>'stcountdown'),$_smarty_tpl);?>
</label>
		</p>
	</div>
</div>
<script type="text/javascript">

jQuery(document).ready(function($){
    $('input[name="stcountdown"]').click(function(){
        $.getJSON('<?php echo $_smarty_tpl->tpl_vars['currentIndex']->value;?>
&act=setstcountdown&fl='+($(this).is(':checked')?1:0)+'&id_product='+$(this).val()+'&ajax=1&ts='+new Date().getTime(),
            function(json){
                if(json.r)
                    showSuccessMessage(json.msg);
                else
                    showErrorMessage(json.msg);
            }
        ); 
    });
});

</script>
<?php }} ?>
