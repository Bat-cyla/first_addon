<?php
/* Smarty version 4.1.1, created on 2024-06-19 10:44:13
  from '/app/www/design/backend/templates/views/cart/components/carts_search_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66728c4d956125_84812759',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c2b6ea89866d10ef37ddaffa06a22fea5f7bfcf' => 
    array (
      0 => '/app/www/design/backend/templates/views/cart/components/carts_search_form.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/period_selector.tpl' => 1,
    'tygh:common/select_vendor.tpl' => 1,
    'tygh:common/products_to_search.tpl' => 1,
    'tygh:common/advanced_search.tpl' => 1,
  ),
),false)) {
function content_66728c4d956125_84812759 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('admin_search_title','customer','email','total','content','cart','with_contact_information','online_only','tt_views_cart_components_carts_search_form_online_only','user_type','any','usergroup_registered','guest','products_in_cart'));
?>
<div class="sidebar-row">
<h6><?php echo $_smarty_tpl->__("admin_search_title");?>
</h6>

<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="carts_search_form" method="get">
<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "simple_search", null, null);?>

<div class="sidebar-field">
    <label for="cname"><?php echo $_smarty_tpl->__("customer");?>
</label>
    <input type="text" name="cname" id="cname" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['cname'], ENT_QUOTES, 'UTF-8');?>
" size="30" />
</div>

<div class="sidebar-field">
    <label for="email"><?php echo $_smarty_tpl->__("email");?>
</label>
    <input type="text" name="email" id="email" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['email'], ENT_QUOTES, 'UTF-8');?>
" size="30" />
</div>

<div class="sidebar-field">
    <label for="total_from"><?php echo $_smarty_tpl->__("total");?>
&nbsp;(<?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'];?>
)</label>
    <input class="input-small" type="text" name="total_from" id="total_from" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['total_from'], ENT_QUOTES, 'UTF-8');?>
" size="3"/>&nbsp;-&nbsp;<input class="input-small" type="text" name="total_to" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['total_to'], ENT_QUOTES, 'UTF-8');?>
" size="3" />
</div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "advanced_search", null, null);?>
<div class="group">
    <div class="control-group">
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/period_selector.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('period'=>$_smarty_tpl->tpl_vars['search']->value['period'],'form_name'=>"carts_search_form"), 0, false);
?>
    </div>
</div>

<div class="row-fluid">
    <div class="group span6 form-horizontal">
        <div class="control-group">
            <label class="control-label"><?php echo $_smarty_tpl->__("content");?>
</label>
            <div class="controls checkbox-list">
                <?php if ($_smarty_tpl->tpl_vars['search']->value['product_type_c'] != "Y" && $_smarty_tpl->tpl_vars['search']->value['product_type_w'] != "Y") {?>
                    <?php $_smarty_tpl->_assignInScope('check_all', true);?>
                <?php }?>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"cart:search_form"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"cart:search_form"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <label for="cb_product_type_c">
                    <input type="checkbox" value="Y" <?php if ($_smarty_tpl->tpl_vars['search']->value['product_type_c'] == "Y" || $_smarty_tpl->tpl_vars['check_all']->value) {?>checked="checked"<?php }?> name="product_type_c" id="cb_product_type_c" onclick="if (!this.checked) document.getElementById('cb_product_type_w').checked = true;" disabled="disabled" />
                    <?php echo $_smarty_tpl->__("cart");?>

                </label>
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"cart:search_form"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="with_info_only"><?php echo $_smarty_tpl->__("with_contact_information");?>
</label>
            <div class="controls">
                <input type="checkbox" id="with_info_only" name="with_info_only" value="Y" <?php if ($_smarty_tpl->tpl_vars['search']->value['with_info_only']) {?>checked="checked"<?php }?> />
            </div>
        </div>

	<?php if (fn_allowed_for("ULTIMATE") && !$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
        <div class="control-group">
            <label class="control-label" for="online_only"><?php echo $_smarty_tpl->__("online_only");?>
</label>
            <div class="controls">
                <input type="checkbox" id="online_only" name="online_only" value="Y" <?php if ($_smarty_tpl->tpl_vars['search']->value['online_only']) {?>checked="checked"<?php }?> />
                <p class="muted description"><?php echo $_smarty_tpl->__("tt_views_cart_components_carts_search_form_online_only");?>
</p>
            </div>
        </div>
	<?php }?>
    </div>

    <div class="group span6 form-horizontal">
        <div class="control-group">
            <label class="control-label" for="users_type"><?php echo $_smarty_tpl->__("user_type");?>
</label>
            <div class="controls">
                <select name="users_type" id="users_type">
                    <option value="A" <?php if ($_smarty_tpl->tpl_vars['search']->value['users_type'] == "A") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("any");?>
</option>
                    <option value="R" <?php if ($_smarty_tpl->tpl_vars['search']->value['users_type'] == "R") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("usergroup_registered");?>
</option>
                    <option value="G" <?php if ($_smarty_tpl->tpl_vars['search']->value['users_type'] == "G") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("guest");?>
</option>
                </select>
            </div>
        </div>
        <?php if (fn_allowed_for("ULTIMATE") && !$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_vendor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>
    </div>
</div>

<div class="group">
    <div class="control-group">
        <label class='control-label'><?php echo $_smarty_tpl->__("products_in_cart");?>
</label>
        <div class="controls">
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/products_to_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('placement'=>"right"), 0, false);
?>
        </div>
    </div>
</div>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/advanced_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('simple_search'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'simple_search'),'advanced_search'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'advanced_search'),'dispatch'=>"cart.cart_list",'view_type'=>"carts"), 0, false);
?>

</form>
</div>
<hr>
<?php }
}
