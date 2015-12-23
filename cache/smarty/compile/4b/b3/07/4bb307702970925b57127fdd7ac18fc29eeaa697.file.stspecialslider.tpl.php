<?php /* Smarty version Smarty-3.1.19, created on 2015-12-21 16:15:11
         compiled from "D:\xampp\htdocs\store\modules\stspecialslider\views\templates\admin\stspecialslider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2850056778adf0f5336-82941795%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4bb307702970925b57127fdd7ac18fc29eeaa697' => 
    array (
      0 => 'D:\\xampp\\htdocs\\store\\modules\\stspecialslider\\views\\templates\\admin\\stspecialslider.tpl',
      1 => 1449038242,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2850056778adf0f5336-82941795',
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
  'unifunc' => 'content_56778adf13b222_74017178',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56778adf13b222_74017178')) {function content_56778adf13b222_74017178($_smarty_tpl) {?>
<div class="form-group">
	<div class="col-lg-9 col-lg-offset-3">
		<p class="checkbox">
			<label for="stspecialslider"><input type="checkbox" name="stspecialslider" value="<?php echo $_smarty_tpl->tpl_vars['id_product']->value;?>
" id="stspecialslider"<?php if ($_smarty_tpl->tpl_vars['checked']->value) {?> checked="checked"<?php }?> /><?php echo smartyTranslate(array('s'=>'Display this product in the Special products slider if it has specific prices.','mod'=>'stspecialslider'),$_smarty_tpl);?>
</label>
		</p>
	</div>
</div>
<script type="text/javascript">

jQuery(document).ready(function($){
    $('input[name="stspecialslider"]').click(function(){
        $.getJSON('<?php echo $_smarty_tpl->tpl_vars['currentIndex']->value;?>
&act=setstspecial&fl='+($(this).is(':checked')?1:0)+'&id_product='+$(this).val()+'&ajax=1&ts='+new Date().getTime(),
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
