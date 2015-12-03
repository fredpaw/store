<?php /* Smarty version Smarty-3.1.19, created on 2015-12-02 17:52:09
         compiled from "D:\xampp\htdocs\store\modules\blocklanguages_mod\views\templates\hook\blocklanguages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27586565e9519cee709-68305869%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce0337a031ec4214a7b5b269a77eaaf84c1a97ff' => 
    array (
      0 => 'D:\\xampp\\htdocs\\store\\modules\\blocklanguages_mod\\views\\templates\\hook\\blocklanguages.tpl',
      1 => 1449038238,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27586565e9519cee709-68305869',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'istopbar' => 0,
    'languages_position' => 0,
    'languages' => 0,
    'language' => 0,
    'lang_iso' => 0,
    'display_flags' => 0,
    'img_lang_dir' => 0,
    'indice_lang' => 0,
    'lang_rewrite_urls' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_565e9519db8131_84555404',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565e9519db8131_84555404')) {function content_565e9519db8131_84555404($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_regex_replace')) include 'D:\\xampp\\htdocs\\store\\tools\\smarty\\plugins\\modifier.regex_replace.php';
?>
<!-- Block languages module -->
<dl id="languages-block-top" class="languages-block <?php if (isset($_smarty_tpl->tpl_vars['istopbar']->value)&&$_smarty_tpl->tpl_vars['istopbar']->value) {?><?php if (isset($_smarty_tpl->tpl_vars['languages_position']->value)&&$_smarty_tpl->tpl_vars['languages_position']->value) {?> pull-right<?php } else { ?> pull-left<?php }?><?php }?> dropdown_wrap">
	<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['language']->key;
?>
		<?php if ($_smarty_tpl->tpl_vars['language']->value['iso_code']==$_smarty_tpl->tpl_vars['lang_iso']->value) {?>
			<dt class="dropdown_tri">
		        <div class="dropdown_tri_inner">
		            <?php if ($_smarty_tpl->tpl_vars['display_flags']->value!=1) {?><img src="<?php echo $_smarty_tpl->tpl_vars['img_lang_dir']->value;?>
<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>
" width="16" height="11" class="mar_r4" /><?php }?><?php if ($_smarty_tpl->tpl_vars['display_flags']->value!=2) {?><?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['language']->value['name'],"/\s\(.*\)"."$"."/",'');?>
<?php }?><?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?><b></b><?php }?>
		        </div>
		    </dt>
		<?php }?>
	<?php } ?>
	<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
	<dd class="dropdown_list">
		<ul id="first-languages" class="languages-block_ul">
			<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['language']->key;
?>
        		<?php if ($_smarty_tpl->tpl_vars['language']->value['iso_code']!=$_smarty_tpl->tpl_vars['lang_iso']->value) {?>
				<li>
					<?php $_smarty_tpl->tpl_vars['indice_lang'] = new Smarty_variable($_smarty_tpl->tpl_vars['language']->value['id_lang'], null, 0);?>
					<?php if (isset($_smarty_tpl->tpl_vars['lang_rewrite_urls']->value[$_smarty_tpl->tpl_vars['indice_lang']->value])) {?>
						<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang_rewrite_urls']->value[$_smarty_tpl->tpl_vars['indice_lang']->value], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
|escape:'html':'UTF-8'}" rel="alternate" hreflang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8', true);?>
">
					<?php } else { ?>
						<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getLanguageLink($_smarty_tpl->tpl_vars['language']->value['id_lang']), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
|escape:'html':'UTF-8'}" rel="alternate" hreflang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8', true);?>
">
					<?php }?>
					    <?php if ($_smarty_tpl->tpl_vars['display_flags']->value!=1) {?><img src="<?php echo $_smarty_tpl->tpl_vars['img_lang_dir']->value;?>
<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>
" width="16" height="11" class="mar_r4" /><?php }?><?php if ($_smarty_tpl->tpl_vars['display_flags']->value!=2) {?><?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['language']->value['name'],"/\s\(.*\)"."$"."/",'');?>
<?php }?>
					</a>
				</li>
				<?php }?>
			<?php } ?>
		</ul>
	</dd>
	<?php }?>
</dl>
<!-- /Block languages module --><?php }} ?>
