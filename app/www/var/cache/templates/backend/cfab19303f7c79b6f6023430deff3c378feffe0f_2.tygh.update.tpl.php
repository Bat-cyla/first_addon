<?php
/* Smarty version 4.1.1, created on 2024-07-11 12:52:02
  from '/app/www/design/backend/templates/addons/newsletters/views/newsletters/update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_668fab42e7cb46_35831063',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cfab19303f7c79b6f6023430deff3c378feffe0f' => 
    array (
      0 => '/app/www/design/backend/templates/addons/newsletters/views/newsletters/update.tpl',
      1 => 1720610754,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 3,
    'tygh:common/select_status.tpl' => 1,
    'tygh:common/subheader.tpl' => 1,
    'tygh:common/tooltip.tpl' => 1,
    'tygh:pickers/users/picker.tpl' => 1,
    'tygh:views/companies/components/company_field.tpl' => 1,
    'tygh:buttons/save.tpl' => 1,
    'tygh:common/sidebox.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_668fab42e7cb46_35831063 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/block.notes.php','function'=>'smarty_block_notes',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.in_array.php','function'=>'smarty_modifier_in_array',),));
\Tygh\Languages\Helper::preloadLangVars(array('subject','more_subjects','tt_addons_newsletters_views_newsletters_update_more_subjects','body_html','preview','template','no_template','load','campaign','none','send_to','mailing_lists','disabled','users','add_recipients_from_users','tt_addons_newsletters_views_newsletters_update_users','customers_with_abandoned','cart','wishlist','cart_or_wishlist','for','which_is','days_old','clicks','url','campaign','clicks','url','campaign','clicks','send_to_test_email','send','save_and_send','newsletter','newsletter_template','newsletter_autoresponder','add_newsletter','add_template','add_autoresponder','menu','new'));
if ($_smarty_tpl->tpl_vars['newsletter']->value['newsletter_id']) {?>
    <?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['newsletter']->value['newsletter_id']);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('id', 0);
}?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
(function(_, $) {
    $(document).ready(function() {
        $(_.doc).on('click', '#elm_newsletter_load_template', function() {
            if ($("#elm_newsletter_template").val() != '0') {
                $.ceAjax('request',
                    '<?php echo fn_url("newsletters.render?template_id=");?>
' + $("#elm_newsletter_template").val(), {
                        callback: function(data) {
                            var elm = $("#elm_newsletter_descr_html");
                            elm.ceEditor("val", data['template']);
                        }
                    }
                )
            }
        });
    });
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>

<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" enctype="multipart/form-data" name="newsletters_form" class="form-horizontal form-edit ">
<input type="hidden" name="fake" value="1" />
<input type="hidden" name="newsletter_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="newsletter_data[type]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['newsletter_type']->value, ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="dispatch" value="" />

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('notes', array());
$_block_repeat=true;
echo smarty_block_notes(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['placeholders']->value, 'p_descr', false, 'p');
$_smarty_tpl->tpl_vars['p_descr']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value => $_smarty_tpl->tpl_vars['p_descr']->value) {
$_smarty_tpl->tpl_vars['p_descr']->do_else = false;
?>
        <div class="sidebar-note-item">
            <?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['p_descr']->value);?>
:
            <span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p']->value, ENT_QUOTES, 'UTF-8');?>
</span>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_block_repeat=false;
echo smarty_block_notes(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<div class="control-group">
    <label class="control-label cm-required" for="elm_newsletter_subject"><?php echo $_smarty_tpl->__("subject");?>
</label>
    <div class="controls">
        <input type="text" name="newsletter_data[newsletter]" id="elm_newsletter_subject" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['newsletter']->value['newsletter'], ENT_QUOTES, 'UTF-8');?>
" size="40" class="input-large" />
    </div>
</div>

<?php if ($_smarty_tpl->tpl_vars['newsletter_type']->value == (defined('NEWSLETTER_TYPE_NEWSLETTER') ? constant('NEWSLETTER_TYPE_NEWSLETTER') : null)) {?>
<div class="control-group">
    <label class="control-label" for="elm_newsletter_subject_multiple"><?php echo $_smarty_tpl->__("more_subjects");?>
</label>
    <div class="controls">
        <textarea name="newsletter_data[newsletter_multiple]" id="elm_newsletter_subject_multiple" class="input-large"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['newsletter']->value['newsletter_multiple'], ENT_QUOTES, 'UTF-8');?>
</textarea>
        <p class="muted description"><?php echo $_smarty_tpl->__("tt_addons_newsletters_views_newsletters_update_more_subjects");?>
</p>
    </div>
</div>
<?php }?>

<div class="control-group">
    <label class="control-label" for="elm_newsletter_descr_html"><?php echo $_smarty_tpl->__("body_html");?>
</label>
    <div class="controls">
        <textarea id="elm_newsletter_descr_html" name="newsletter_data[body_html]" cols="35" rows="8" class="cm-wysiwyg input-large"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['newsletter']->value['body_html'], ENT_QUOTES, 'UTF-8');?>
</textarea>
    <p><?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("preview"),'but_name'=>"dispatch[newsletters.preview_html]",'but_meta'=>"cm-new-window"), 0, false);
?></p>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="elm_newsletter_template"><?php echo $_smarty_tpl->__("template");?>
</label>
    <div class="controls">
    <select name="newsletter_data[template]" id="elm_newsletter_template">
        <option value="0"><?php echo $_smarty_tpl->__("no_template");?>
</option>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['newsletter_templates']->value, 'template');
$_smarty_tpl->tpl_vars['template']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['template']->value) {
$_smarty_tpl->tpl_vars['template']->do_else = false;
?>
        <option <?php if ($_smarty_tpl->tpl_vars['newsletter']->value['template'] == $_smarty_tpl->tpl_vars['template']->value['newsletter_id']) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['template']->value['newsletter_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['template']->value['newsletter'], ENT_QUOTES, 'UTF-8');?>
</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("load"),'but_name'=>"dispatch[newsletters.test_send]",'but_id'=>"elm_newsletter_load_template",'but_meta'=>"cm-no-submit"), 0, true);
?>
    </div>
</div>


<?php if ($_smarty_tpl->tpl_vars['newsletter_type']->value == (defined('NEWSLETTER_TYPE_NEWSLETTER') ? constant('NEWSLETTER_TYPE_NEWSLETTER') : null)) {?>
    <div class="control-group">
        <label class="control-label" for="elm_newsletter_campaigns"><?php echo $_smarty_tpl->__("campaign");?>
</label>
        <div class="controls">
        <select name="newsletter_data[campaign_id]" id="elm_newsletter_campaigns">
            <option value="0"><?php echo $_smarty_tpl->__("none");?>
</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['newsletter_campaigns']->value, 'campaign');
$_smarty_tpl->tpl_vars['campaign']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['campaign']->value) {
$_smarty_tpl->tpl_vars['campaign']->do_else = false;
?>
                <option <?php if ($_smarty_tpl->tpl_vars['newsletter']->value['campaign_id'] == $_smarty_tpl->tpl_vars['campaign']->value['campaign_id']) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['campaign']->value['campaign_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['campaign']->value['object'], ENT_QUOTES, 'UTF-8');?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        </div>
    </div>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>"newsletter_data[status]",'id'=>"elm_newsletter_status",'obj'=>$_smarty_tpl->tpl_vars['newsletter']->value,'items_status'=>fn_get_predefined_statuses("newsletters")), 0, false);
?>

<?php if ($_smarty_tpl->tpl_vars['newsletter_type']->value == (defined('NEWSLETTER_TYPE_NEWSLETTER') ? constant('NEWSLETTER_TYPE_NEWSLETTER') : null)) {
$_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("send_to"),'target'=>"#acc_send"), 0, false);
?>
<div id="acc_send" class="collapse in">
    <div class="control-group">
        <label class="control-label"><?php echo $_smarty_tpl->__("mailing_lists");?>
</label>
        <div class="controls">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mailing_lists']->value, 'list');
$_smarty_tpl->tpl_vars['list']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->do_else = false;
?>
            <label class="checkbox <?php if ($_smarty_tpl->tpl_vars['list']->value['status'] == 'D') {?>cm-row-status-d<?php }?>">
                <input type="checkbox" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['list']->value['list_id'], ENT_QUOTES, 'UTF-8');?>
" name="newsletter_data[mailing_lists][]" <?php if (smarty_modifier_in_array($_smarty_tpl->tpl_vars['list']->value['list_id'],$_smarty_tpl->tpl_vars['newsletter']->value['mailing_lists'])) {?>checked="checked"<?php }?> />
                <span class="row-status"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['list']->value['object'], ENT_QUOTES, 'UTF-8');?>
</span>
                <?php if ($_smarty_tpl->tpl_vars['list']->value['status'] == "D") {?>
                    <?php $_smarty_tpl->_assignInScope('status_text', $_smarty_tpl->__("disabled"));?>
                <?php } else { ?>
                    <?php $_smarty_tpl->_assignInScope('status_text', '');?>
                <?php }?>
                <?php if (fn_allowed_for("ULTIMATE")) {?>
                    <?php if ($_smarty_tpl->tpl_vars['status_text']->value) {?>
                        <?php $_smarty_tpl->_assignInScope('status_text', ((string)$_smarty_tpl->tpl_vars['status_text']->value)."<br/><br/>");?>
                    <?php }?>
                    <?php $_smarty_tpl->_assignInScope('tooltip_text', implode("<br/>",$_smarty_tpl->tpl_vars['list']->value['shared_for_companies']));?>
                <?php }?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tooltip'=>((string)$_smarty_tpl->tpl_vars['status_text']->value).((string)$_smarty_tpl->tpl_vars['tooltip_text']->value)), 0, true);
?>
            </label>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label"><?php echo $_smarty_tpl->__("users");?>
</label>
        <div class="controls">
            <?php $_smarty_tpl->_subTemplateRender("tygh:pickers/users/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("add_recipients_from_users"),'data_id'=>"return_users",'but_meta'=>"btn",'input_name'=>"newsletter_data[users]",'item_ids'=>$_smarty_tpl->tpl_vars['newsletter']->value['users'],'placement'=>"right"), 0, false);
?>
            <p class="muted description"><?php echo $_smarty_tpl->__("tt_addons_newsletters_views_newsletters_update_users");?>
</p>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="elm_newsletter_abandoned_type"><?php echo $_smarty_tpl->__("customers_with_abandoned");?>
</label>
        <div class="controls">
        <select id="elm_newsletter_abandoned_type" name="newsletter_data[abandoned_type]">
            <option value="cart" <?php if ($_smarty_tpl->tpl_vars['newsletter']->value['abandoned_type'] == "cart") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("cart");?>
</option>
            <option value="wishlist" <?php if ($_smarty_tpl->tpl_vars['newsletter']->value['abandoned_type'] == "wishlist") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("wishlist");?>
</option>
            <option value="both" <?php if ($_smarty_tpl->tpl_vars['newsletter']->value['abandoned_type'] == "both") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("cart_or_wishlist");?>
</option>
        </select>
        <?php if (fn_allowed_for("ULTIMATE")) {?>
        &nbsp;<?php echo $_smarty_tpl->__("for");?>
&nbsp;
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/companies/components/company_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>"newsletter_data[abandoned_company_id]",'no_wrap'=>true,'meta'=>"droptop",'selected'=>(($tmp = $_smarty_tpl->tpl_vars['newsletter']->value['abandoned_company_id'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['company_id']->value ?? null : $tmp),'id'=>'elm_abandoned_company_id'), 0, false);
?>
        <?php } else { ?>
            <input type="hidden" name="newsletter_data[abandoned_company_id]" value="0">
        <?php }?>
        &nbsp;<?php echo $_smarty_tpl->__("which_is");?>

        <input class="input-small" type="text" name="newsletter_data[abandoned_days]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['newsletter']->value['abandoned_days'], ENT_QUOTES, 'UTF-8');?>
" />
        <?php echo $_smarty_tpl->__("days_old");?>

        </div>
    </div>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['newsletter_links']->value) {?>
<div class="control-group">
    <label class="control-label"><?php echo $_smarty_tpl->__("clicks");?>
</label>
    <div class="controls">
    <div class="table-responsive-wrapper">
        <table class="table table--relative table-responsive">
            <tr>
                <th><?php echo $_smarty_tpl->__("url");?>
</th>
                <th><?php echo $_smarty_tpl->__("campaign");?>
</th>
                <th><?php echo $_smarty_tpl->__("clicks");?>
</th>
            </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['newsletter_links']->value, 'link');
$_smarty_tpl->tpl_vars['link']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->do_else = false;
?>
            <tr>
                <td data-th="<?php echo $_smarty_tpl->__("url");?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value['url'], ENT_QUOTES, 'UTF-8');?>
</td>
                <td data-th="<?php echo $_smarty_tpl->__("campaign");?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['newsletter_campaigns']->value[$_smarty_tpl->tpl_vars['link']->value['campaign_id']]['object'], ENT_QUOTES, 'UTF-8');?>
</td>
                <td data-th="<?php echo $_smarty_tpl->__("clicks");?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value['clicks'], ENT_QUOTES, 'UTF-8');?>
</td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
    </div>
    </div>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['newsletter_type']->value != (defined('NEWSLETTER_TYPE_TEMPLATE') ? constant('NEWSLETTER_TYPE_TEMPLATE') : null)) {?>
    <div class="control-group">
        <label class="control-label" for="elm_newsletter_test_send"><?php echo $_smarty_tpl->__("send_to_test_email");?>
</label>
        <div class="controls">
            <div class="input-append">
                <input type="text" name="test_email" id="elm_newsletter_test_send" value="" class="input-medium" />
                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("send"),'but_name'=>"dispatch[newsletters.test_send]",'but_id'=>"test_send_button",'but_meta'=>"cm-ajax"), 0, true);
?>
            </div>
        </div>
    </div>
<?php }?>

</form>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);
if ($_smarty_tpl->tpl_vars['newsletter_type']->value == (defined('NEWSLETTER_TYPE_NEWSLETTER') ? constant('NEWSLETTER_TYPE_NEWSLETTER') : null)) {?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
        <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("save_and_send"),'dispatch'=>"dispatch[newsletters.send]",'class'=>"cm-submit",'form'=>"newsletters_form",'process'=>true), true);?>
</li>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>

<?php }
$_smarty_tpl->_subTemplateRender("tygh:buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[newsletters.update]",'but_role'=>"submit-link",'but_target_form'=>"newsletters_form"), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['newsletter_type']->value == (defined('NEWSLETTER_TYPE_NEWSLETTER') ? constant('NEWSLETTER_TYPE_NEWSLETTER') : null)) {?>
    <?php $_smarty_tpl->_assignInScope('object_name', mb_strtolower($_smarty_tpl->__("newsletter"), 'UTF-8'));
} elseif ($_smarty_tpl->tpl_vars['newsletter_type']->value == (defined('NEWSLETTER_TYPE_TEMPLATE') ? constant('NEWSLETTER_TYPE_TEMPLATE') : null)) {?>
    <?php $_smarty_tpl->_assignInScope('object_name', mb_strtolower($_smarty_tpl->__("newsletter_template"), 'UTF-8'));
} elseif ($_smarty_tpl->tpl_vars['newsletter_type']->value == (defined('NEWSLETTER_TYPE_AUTORESPONDER') ? constant('NEWSLETTER_TYPE_AUTORESPONDER') : null)) {?>
    <?php $_smarty_tpl->_assignInScope('object_name', mb_strtolower($_smarty_tpl->__("newsletter_autoresponder"), 'UTF-8'));
}?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "sidebar", null, null);?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "content_sidebar", null, null);?>
        <ul class="nav nav-list">
            <li><a href="<?php echo htmlspecialchars((string) fn_url("newsletters.add?type=N"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("add_newsletter");?>
</a></li>
            <li><a href="<?php echo htmlspecialchars((string) fn_url("newsletters.add?type=T"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("add_template");?>
</a></li>
            <li><a href="<?php echo htmlspecialchars((string) fn_url("newsletters.add?type=A"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("add_autoresponder");?>
</a></li>
        </ul>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/sidebox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'content_sidebar'),'title'=>$_smarty_tpl->__("menu")), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php ob_start();
echo $_smarty_tpl->__("new");
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['id']->value ? $_smarty_tpl->tpl_vars['newsletter']->value['newsletter'] : $_prefixVariable1.": ".((string)$_smarty_tpl->tpl_vars['object_name']->value),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'select_languages'=>true,'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons'),'sidebar'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar')), 0, false);
}
}
