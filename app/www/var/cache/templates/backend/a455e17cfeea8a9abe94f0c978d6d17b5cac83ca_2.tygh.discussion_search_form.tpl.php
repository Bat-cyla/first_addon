<?php
/* Smarty version 4.1.1, created on 2024-05-31 13:29:29
  from '/app/www/design/backend/templates/addons/discussion/views/discussion_manager/components/discussion_search_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6659a6891170a7_66550530',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a455e17cfeea8a9abe94f0c978d6d17b5cac83ca' => 
    array (
      0 => '/app/www/design/backend/templates/addons/discussion/views/discussion_manager/components/discussion_search_form.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/companies/components/picker/picker.tpl' => 1,
    'tygh:common/period_selector.tpl' => 1,
    'tygh:common/advanced_search.tpl' => 1,
  ),
),false)) {
function content_6659a6891170a7_66550530 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('admin_search_title','author','message','rating','excellent','very_good','average','fair','poor','vendor','any_vendor','period','ip_address','approved','yes','no','sort_by','author','approved','date','ip_address','desc','asc'));
?>
<div class="sidebar-row">
<h6><?php echo $_smarty_tpl->__("admin_search_title");?>
</h6>

<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="discussion_search_form" method="get">
<input type="hidden" name="object_type" id="obj_type" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['search']->value['object_type'] ?? null)===null||$tmp==='' ? "P" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
">
<input type="hidden" name="dispatch" value="discussion_manager.manage">

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "simple_search", null, null);?>
            <div class="sidebar-field">
                <label for="author"><?php echo $_smarty_tpl->__("author");?>
</label>
                <input type="text" class="input-text" id="author" name="name" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
            </div>
            
            <div class="sidebar-field">
                <label for="message"><?php echo $_smarty_tpl->__("message");?>
</label>
                <input type="text" class="input-text" id="message" name="message" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['message'], ENT_QUOTES, 'UTF-8');?>
">
            </div>
            
            <div class="sidebar-field">
                <label for="rating_value"><?php echo $_smarty_tpl->__("rating");?>
</label>
                <select name="rating_value" id="rating_value" class="input-medium">
                <option value="">--</option>
                    <option value="5" <?php if ($_smarty_tpl->tpl_vars['search']->value['rating_value'] == "5") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("excellent");?>
</option>
                    <option value="4" <?php if ($_smarty_tpl->tpl_vars['search']->value['rating_value'] == "4") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("very_good");?>
</option>
                    <option value="3" <?php if ($_smarty_tpl->tpl_vars['search']->value['rating_value'] == "3") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("average");?>
</option>
                    <option value="2" <?php if ($_smarty_tpl->tpl_vars['search']->value['rating_value'] == "2") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("fair");?>
</option>
                    <option value="1" <?php if ($_smarty_tpl->tpl_vars['search']->value['rating_value'] == "1") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("poor");?>
</option>
                </select>
            </div>

            <?php if (!$_smarty_tpl->tpl_vars['company_id']->value) {?>
                <div class="sidebar-field">
                    <label for="discussion_type"><?php echo $_smarty_tpl->__("vendor");?>
</label>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/companies/components/picker/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>"company_id",'show_advanced'=>false,'show_empty_variant'=>true,'item_ids'=>$_smarty_tpl->tpl_vars['search']->value['company_id'] ? array($_smarty_tpl->tpl_vars['search']->value['company_id']) : array(),'empty_variant_text'=>$_smarty_tpl->__("any_vendor")), 0, false);
?>
                </div>
            <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "advanced_search", null, null);?>
<div class="group form-horizontal">
    <div class="control-group">
    <label class="control-label"><?php echo $_smarty_tpl->__("period");?>
</label>
    <div class="controls">
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/period_selector.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('period'=>$_smarty_tpl->tpl_vars['search']->value['period'],'form_name'=>"discussion_search_form"), 0, false);
?>
    </div>
</div>
</div>

<div class="group form-horizontal">
<div class="control-group">
    <label class='control-label' for="ip_address"><?php echo $_smarty_tpl->__("ip_address");?>
</label>
    <div class="controls">
    <input type="text" id="ip_address" name="ip_address" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['ip_address'], ENT_QUOTES, 'UTF-8');?>
" />
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="status"><?php echo $_smarty_tpl->__("approved");?>
</label>
    <div class="controls">
    <select name="status" id="status">
        <option value="">--</option>
        <option value="A" <?php if ($_smarty_tpl->tpl_vars['search']->value['status'] == "A") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("yes");?>
</option>
        <option value="D" <?php if ($_smarty_tpl->tpl_vars['search']->value['status'] == "D") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("no");?>
</option>
    </select>
    </div>
</div>
</div>
<div class="group form-horizontal">
<div class="control-group">
    <label class="control-label" for="sort_by"><?php echo $_smarty_tpl->__("sort_by");?>
</label>
    <div class="controls">
    <select name="sort_by" id="sort_by" class="input-small">
        <option <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] == "name") {?>selected="selected"<?php }?> value="name"><?php echo $_smarty_tpl->__("author");?>
</option>
        <option <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] == "status") {?>selected="selected"<?php }?> value="status"><?php echo $_smarty_tpl->__("approved");?>
</option>
        <option <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] == "timestamp") {?>selected="selected"<?php }?> value="timestamp"><?php echo $_smarty_tpl->__("date");?>
</option>
        <option <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] == "ip_address") {?>selected="selected"<?php }?> value="ip_address"><?php echo $_smarty_tpl->__("ip_address");?>
</option>
    </select>

    <select name="sort_order" class="input-small">
        <option <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_order_rev'] == "desc") {?>selected="selected"<?php }?> value="desc"><?php echo $_smarty_tpl->__("desc");?>
</option>
        <option <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_order_rev'] == "asc") {?>selected="selected"<?php }?> value="asc"><?php echo $_smarty_tpl->__("asc");?>
</option>
    </select>
    </div>
</div>
</div>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/advanced_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('simple_search'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'simple_search'),'advanced_search'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'advanced_search'),'dispatch'=>"discussion_manager.manage",'view_type'=>"discussion"), 0, false);
?>

</form>

</div>
<hr><?php }
}
