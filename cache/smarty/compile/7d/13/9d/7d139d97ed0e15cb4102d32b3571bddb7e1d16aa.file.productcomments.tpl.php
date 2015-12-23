<?php /* Smarty version Smarty-3.1.19, created on 2015-12-21 16:14:43
         compiled from "D:\xampp\htdocs\store\themes\transformer\modules\productcomments\\productcomments.tpl" */ ?>
<?php /*%%SmartyHeaderCode:358056778ac3206649-45470852%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d139d97ed0e15cb4102d32b3571bddb7e1d16aa' => 
    array (
      0 => 'D:\\xampp\\htdocs\\store\\themes\\transformer\\modules\\productcomments\\\\productcomments.tpl',
      1 => 1449038237,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '358056778ac3206649-45470852',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
    'productcomment_cover_image' => 0,
    'mediumSize' => 0,
    'criterions' => 0,
    'criterion' => 0,
    'allow_guests' => 0,
    'is_logged' => 0,
    'id_product_comment_form' => 0,
    'nbComments' => 0,
    'comments' => 0,
    'comment' => 0,
    'logged' => 0,
    'too_early' => 0,
    'productcomments_controller_url' => 0,
    'moderation_active' => 0,
    'productcomments_url_rewriting_activated' => 0,
    'secure_key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56778ac3373059_91102313',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56778ac3373059_91102313')) {function content_56778ac3373059_91102313($_smarty_tpl) {?>

<!-- Fancybox -->
<div style="display:none;">
	<div id="new_comment_form">
		<form id="id_new_comment_form" action="#">
			<p class="block-heading">
				<?php echo smartyTranslate(array('s'=>'Write a review','mod'=>'productcomments'),$_smarty_tpl);?>

			</p>
				<?php if (isset($_smarty_tpl->tpl_vars['product']->value)&&$_smarty_tpl->tpl_vars['product']->value) {?>
					<div class="product clearfix">
						<img src="<?php echo $_smarty_tpl->tpl_vars['productcomment_cover_image']->value;?>
" height="<?php echo $_smarty_tpl->tpl_vars['mediumSize']->value['height'];?>
" width="<?php echo $_smarty_tpl->tpl_vars['mediumSize']->value['width'];?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" class="hidden-xs" />
						<h5 class="product_name"><?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
</h5>
						<div class="product_desc">
							<?php echo $_smarty_tpl->tpl_vars['product']->value->description_short;?>

						</div>
					</div>
				<?php }?>
				<div class="new_comment_form_content">
					<h4><?php echo smartyTranslate(array('s'=>'Write a review','mod'=>'productcomments'),$_smarty_tpl);?>
</h4>
					<div id="new_comment_form_error" class="error mar_b1" style="display:none;">
						<ul></ul>
					</div>
					<?php if (count($_smarty_tpl->tpl_vars['criterions']->value)>0) {?>
						<ul id="criterions_list">
						<?php  $_smarty_tpl->tpl_vars['criterion'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['criterion']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['criterions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['criterion']->key => $_smarty_tpl->tpl_vars['criterion']->value) {
$_smarty_tpl->tpl_vars['criterion']->_loop = true;
?>
							<li>
								<label><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['criterion']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</label>
								<div class="star_content">
									<input class="star not_uniform" type="radio" name="criterion[<?php echo round($_smarty_tpl->tpl_vars['criterion']->value['id_product_comment_criterion']);?>
]" value="1" />
									<input class="star not_uniform" type="radio" name="criterion[<?php echo round($_smarty_tpl->tpl_vars['criterion']->value['id_product_comment_criterion']);?>
]" value="2" />
									<input class="star not_uniform" type="radio" name="criterion[<?php echo round($_smarty_tpl->tpl_vars['criterion']->value['id_product_comment_criterion']);?>
]" value="3" />
									<input class="star not_uniform" type="radio" name="criterion[<?php echo round($_smarty_tpl->tpl_vars['criterion']->value['id_product_comment_criterion']);?>
]" value="4" />
									<input class="star not_uniform" type="radio" name="criterion[<?php echo round($_smarty_tpl->tpl_vars['criterion']->value['id_product_comment_criterion']);?>
]" value="5" checked="checked" />
								</div>
								<div class="clearfix"></div>
							</li>
						<?php } ?>
						</ul>
					<?php }?>
					<label for="comment_title">
						<?php echo smartyTranslate(array('s'=>'Title:','mod'=>'productcomments'),$_smarty_tpl);?>
<sup class="required">*</sup>
					</label>
					<input id="comment_title" name="title" type="text" value=""/>
					<label for="content">
						<?php echo smartyTranslate(array('s'=>'Your review:','mod'=>'productcomments'),$_smarty_tpl);?>
<sup class="required">*</sup>
					</label>
					<textarea id="content" name="content"></textarea>
					<?php if ($_smarty_tpl->tpl_vars['allow_guests']->value==true&&!$_smarty_tpl->tpl_vars['is_logged']->value) {?>
						<label>
							<?php echo smartyTranslate(array('s'=>'Your name:','mod'=>'productcomments'),$_smarty_tpl);?>
<sup class="required">*</sup>
						</label>
						<input id="commentCustomerName" name="customer_name" type="text" value=""/>
					<?php }?>
					<div id="new_comment_form_footer">
						<input id="id_product_comment_send" name="id_product" type="hidden" value='<?php echo $_smarty_tpl->tpl_vars['id_product_comment_form']->value;?>
' />
						<p class="fl required"><sup>*</sup> <?php echo smartyTranslate(array('s'=>'Required fields','mod'=>'productcomments'),$_smarty_tpl);?>
</p>
						<p class="fr">
							<button id="submitNewMessage" name="submitMessage" type="submit" class="btn btn-default">
								<span><?php echo smartyTranslate(array('s'=>'Submit','mod'=>'productcomments'),$_smarty_tpl);?>
</span>
							</button>&nbsp;
							<?php echo smartyTranslate(array('s'=>'or','mod'=>'productcomments'),$_smarty_tpl);?>
&nbsp;
							<a class="closefb" href="#">
								<?php echo smartyTranslate(array('s'=>'Cancel','mod'=>'productcomments'),$_smarty_tpl);?>

							</a>
						</p>
						<div class="clearfix"></div>
					</div> <!-- #new_comment_form_footer -->
				</div>
		</form><!-- /end new_comment_form_content -->
	</div>
</div>
<!-- End fancybox -->

<div id="idTab5" class="product_accordion block_hidden_only_for_screen">
    <a href="javascript:;" class="opener">&nbsp;</a>
    <div class="product_accordion_title">
        <?php echo smartyTranslate(array('s'=>'Comments','mod'=>'productcomments'),$_smarty_tpl);?>
(<?php echo $_smarty_tpl->tpl_vars['nbComments']->value;?>
)
    </div>
	<div id="product_comments_block_tab" class="pa_content">	
		<?php if ($_smarty_tpl->tpl_vars['comments']->value) {?>
			<?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?>
				<?php if ($_smarty_tpl->tpl_vars['comment']->value['content']) {?>
				<div class="comment row" itemprop="review" itemscope itemtype="https://schema.org/Review">
					<div class="comment_author col-xs-12 col-sm-3 col-md-3">
						<div class="star_content clearfix"  itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["i"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['name'] = "i";
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'] = (int) 0;
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop'] = is_array($_loop=5) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'] = ((int) 1) == 0 ? 1 : (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["i"]['total']);
?>
								<?php if ($_smarty_tpl->tpl_vars['comment']->value['grade']<=$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']) {?>
									<div class="star"></div>
								<?php } else { ?>
									<div class="star star_on"></div>
								<?php }?>
							<?php endfor; endif; ?>
							<meta itemprop="worstRating" content = "0" />
							<meta itemprop="ratingValue" content = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['grade'], ENT_QUOTES, 'UTF-8', true);?>
" />
            				<meta itemprop="bestRating" content = "5" />
						</div>
						<div class="comment_author_infos">
							<strong itemprop="author"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['customer_name'], ENT_QUOTES, 'UTF-8', true);?>
</strong>
							<meta itemprop="datePublished" content="<?php echo substr(htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['date_add'], ENT_QUOTES, 'UTF-8', true),0,10);?>
" />
							<em><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['date_add'], ENT_QUOTES, 'UTF-8', true),'full'=>0),$_smarty_tpl);?>
</em>
						</div>
					</div> <!-- .comment_author -->
					
					<div class="comment_details col-xs-12 col-sm-6 col-md-6">
						<div class="title_block" itemprop="name" ><?php echo $_smarty_tpl->tpl_vars['comment']->value['title'];?>
</div>
						<p itemprop="reviewBody"><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['content'], ENT_QUOTES, 'UTF-8', true));?>
</p>
					</div><!-- .comment_details -->
					<ul class="comment_actions col-xs-12 col-sm-3 col-md-3">
						<li>
							<?php echo smartyTranslate(array('s'=>'Was this comment useful to you?','mod'=>'productcomments'),$_smarty_tpl);?>

						</li>
						<li>
							<a href="javascript:;" class="<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?> logged <?php }?><?php if (!$_smarty_tpl->tpl_vars['logged']->value||(isset($_smarty_tpl->tpl_vars['comment']->value['customer_advice'])&&!$_smarty_tpl->tpl_vars['comment']->value['customer_advice'])) {?> usefulness_btn <?php } else { ?> useful_done <?php }?>" data-is-usefull="1" data-id-product-comment="<?php echo $_smarty_tpl->tpl_vars['comment']->value['id_product_comment'];?>
" title="<?php echo smartyTranslate(array('s'=>'Yes','mod'=>'productcomments'),$_smarty_tpl);?>
"><i class="icon-thumbs-up-1"></i>(<span><?php echo $_smarty_tpl->tpl_vars['comment']->value['total_useful'];?>
</span>)</a>
                        	<a href="javascript:;" class="<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?> logged <?php }?><?php if (!$_smarty_tpl->tpl_vars['logged']->value||(isset($_smarty_tpl->tpl_vars['comment']->value['customer_advice'])&&!$_smarty_tpl->tpl_vars['comment']->value['customer_advice'])) {?> usefulness_btn <?php } else { ?> useful_done <?php }?>" data-is-usefull="0" data-id-product-comment="<?php echo $_smarty_tpl->tpl_vars['comment']->value['id_product_comment'];?>
" title="<?php echo smartyTranslate(array('s'=>'No','mod'=>'productcomments'),$_smarty_tpl);?>
"><i class="icon-thumbs-down-1"></i>(<span><?php echo $_smarty_tpl->tpl_vars['comment']->value['total_advice']-$_smarty_tpl->tpl_vars['comment']->value['total_useful'];?>
</span>)</a>
						</li>
						<?php if ($_smarty_tpl->tpl_vars['logged']->value&&!$_smarty_tpl->tpl_vars['comment']->value['customer_report']) {?>
						<li>
							<span class="report_btn" data-id-product-comment="<?php echo $_smarty_tpl->tpl_vars['comment']->value['id_product_comment'];?>
">
								<?php echo smartyTranslate(array('s'=>'Report abuse','mod'=>'productcomments'),$_smarty_tpl);?>

							</span>
						</li>
						<?php }?>
					</ul>
				</div> <!-- .comment -->
				<?php }?>
			<?php } ?>
			<?php if ((!$_smarty_tpl->tpl_vars['too_early']->value&&($_smarty_tpl->tpl_vars['is_logged']->value||$_smarty_tpl->tpl_vars['allow_guests']->value))) {?>
			<p class="align_center">
				<a id="new_comment_tab_btn" class="open-comment-form" href="#new_comment_form">
					<?php echo smartyTranslate(array('s'=>'Write your review!','mod'=>'productcomments'),$_smarty_tpl);?>

				</a>
			</p>
			<?php }?>
		<?php } else { ?>
			<?php if ((!$_smarty_tpl->tpl_vars['too_early']->value&&($_smarty_tpl->tpl_vars['is_logged']->value||$_smarty_tpl->tpl_vars['allow_guests']->value))) {?>
			<p class="align_center">
				<a id="new_comment_tab_btn" class="open-comment-form" href="#new_comment_form">
					<?php echo smartyTranslate(array('s'=>'Be the first to write your review!','mod'=>'productcomments'),$_smarty_tpl);?>

				</a>
			</p>
			<?php } else { ?>
			<p class="align_center"><?php echo smartyTranslate(array('s'=>'No customer reviews for the moment.','mod'=>'productcomments'),$_smarty_tpl);?>
</p>
			<?php }?>
		<?php }?>
	</div> <!-- #product_comments_block_tab -->
</div>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('productcomments_controller_url'=>addcslashes($_smarty_tpl->tpl_vars['productcomments_controller_url']->value,'\'')),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('moderation_active'=>$_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['boolval'][0][0]->boolval($_smarty_tpl->tpl_vars['moderation_active']->value)),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('productcomments_url_rewrite'=>$_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['boolval'][0][0]->boolval($_smarty_tpl->tpl_vars['productcomments_url_rewriting_activated']->value)),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('secure_key'=>$_smarty_tpl->tpl_vars['secure_key']->value),$_smarty_tpl);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'confirm_report_message')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'confirm_report_message'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Are you sure that you want to report this comment?','mod'=>'productcomments','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'confirm_report_message'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'productcomment_added')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'productcomment_added'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Your comment has been added!','mod'=>'productcomments','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'productcomment_added'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'productcomment_added_moderation')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'productcomment_added_moderation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Your comment has been added and will be available once approved by a moderator.','mod'=>'productcomments','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'productcomment_added_moderation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'productcomment_title')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'productcomment_title'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'New comment','mod'=>'productcomments','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'productcomment_title'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'productcomment_ok')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'productcomment_ok'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'OK','mod'=>'productcomments','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'productcomment_ok'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'comment_actions_login_first')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'comment_actions_login_first'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Please login first!','mod'=>'productcomments','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'comment_actions_login_first'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'comment_actions_failure')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'comment_actions_failure'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'An error occurred. Maybe a network problem or you already set.','mod'=>'productcomments','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'comment_actions_failure'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'comment_success_msg')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'comment_success_msg'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Success! Thank you!','mod'=>'productcomments','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'comment_success_msg'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
