<?php
/* Smarty version 4.1.1, created on 2024-07-11 12:52:18
  from '/app/www/design/backend/templates/addons/newsletters/views/mailing_lists/update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_668fab527309b1_42912289',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e75a301ae7fc8fc3afc796becc0da0eb7b37bf36' => 
    array (
      0 => '/app/www/design/backend/templates/addons/newsletters/views/mailing_lists/update.tpl',
      1 => 1720610754,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 1,
    'tygh:common/select_status.tpl' => 1,
    'tygh:buttons/save_cancel.tpl' => 1,
  ),
),false)) {
function content_668fab527309b1_42912289 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('general','name','from_name','tt_addons_newsletters_views_mailing_lists_update_from_name','from_email','tt_addons_newsletters_views_mailing_lists_update_from_email','reply_to','tt_addons_newsletters_views_mailing_lists_update_reply_to','register_autoresponder','no_autoresponder','show_on_checkout','addons.newsletters.show_on_registration_and_profile','subscribers','manage_subscribers'));
echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['mailing_list']->value['list_id']) {?>
    <?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['mailing_list']->value['list_id']);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('id', 0);
}?>

<div id="content_group<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" enctype="multipart/form-data" name="mailing_lists_form_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="form-horizontal form-edit ">
<input type="hidden" name="list_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />

<div class="tabs cm-j-tabs">
    <ul class="nav nav-tabs">
        <li id="tab_campaign_details_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js active"><a><?php echo $_smarty_tpl->__("general");?>
</a></li>
    </ul>
</div>

<div class="cm-tabs-content">
    <div id="content_tab_campaign_details_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <fieldset>
        <div class="control-group">
            <label for="elm_mailing_list_name_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label cm-required"><?php echo $_smarty_tpl->__("name");?>
</label>
            <div class="controls">
                <input type="text" name="mailing_list_data[name]" id="elm_mailing_list_name_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['mailing_list']->value['object'], ENT_QUOTES, 'UTF-8');?>
"/>
            </div>
        </div>

        <div class="control-group">
            <label for="elm_mailing_list_from_name_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label"><?php echo $_smarty_tpl->__("from_name");?>
</label>
            <div class="controls">
                <input type="text" name="mailing_list_data[from_name]" id="elm_mailing_list_from_name_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['mailing_list']->value['from_name'], ENT_QUOTES, 'UTF-8');?>
" />
                <p class="muted description"><?php echo $_smarty_tpl->__("tt_addons_newsletters_views_mailing_lists_update_from_name");?>
</p>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label cm-email cm-required" for="elm_mailing_list_from_email_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" ><?php echo $_smarty_tpl->__("from_email");?>
</label>
            <div class="controls">
                <input type="text" name="mailing_list_data[from_email]" id="elm_mailing_list_from_email_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['mailing_list']->value['from_email'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['Company']['company_newsletter_email'] ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
                <p class="muted description"><?php echo $_smarty_tpl->__("tt_addons_newsletters_views_mailing_lists_update_from_email");?>
</p>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label cm-email cm-required" for="elm_mailing_list_reply_to_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("reply_to");?>
</label>
            <div class="controls">
                <input type="text" name="mailing_list_data[reply_to]" id="elm_mailing_list_reply_to_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['mailing_list']->value['reply_to'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['Company']['company_newsletter_email'] ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
                <p class="muted description"><?php echo $_smarty_tpl->__("tt_addons_newsletters_views_mailing_lists_update_reply_to");?>
</p>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_mailing_list_register_autoresponder_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("register_autoresponder");?>
</label>
            <div class="controls">
                <select name="mailing_list_data[register_autoresponder]" id="elm_mailing_list_register_autoresponder_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <option value="0"><?php echo $_smarty_tpl->__("no_autoresponder");?>
</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['autoresponders']->value, 'a');
$_smarty_tpl->tpl_vars['a']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->do_else = false;
?>
                        <option <?php if ($_smarty_tpl->tpl_vars['mailing_list']->value['register_autoresponder'] == $_smarty_tpl->tpl_vars['a']->value['newsletter_id']) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['a']->value['newsletter_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['a']->value['newsletter'], ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_mailing_list_show_on_checkout_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("show_on_checkout");?>
</label>
            <div class="controls">
                <input type="hidden" name="mailing_list_data[show_on_checkout]" value="0" />
                <input type="checkbox" name="mailing_list_data[show_on_checkout]" id="elm_mailing_list_show_on_checkout_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" value="1" <?php if ($_smarty_tpl->tpl_vars['mailing_list']->value['show_on_checkout']) {?>checked="checked"<?php }?>/>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_mailing_list_show_on_registration_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("addons.newsletters.show_on_registration_and_profile");?>
</label>
            <div class="controls">
                <input type="hidden" name="mailing_list_data[show_on_registration]" value="0" />
                <input type="checkbox" name="mailing_list_data[show_on_registration]" id="elm_mailing_list_show_on_registration_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" value="1" <?php if ($_smarty_tpl->tpl_vars['mailing_list']->value['show_on_registration']) {?>checked="checked"<?php }?> />
            </div>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
            <div class="control-group">
                <label class="control-label"><?php echo $_smarty_tpl->__("subscribers");?>
</label>
                <div class="controls shift-top">
                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['mailing_list']->value['subscribers_num'], ENT_QUOTES, 'UTF-8');?>

                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("manage_subscribers"),'but_href'=>"subscribers.manage?list_id=".((string)$_smarty_tpl->tpl_vars['id']->value),'but_role'=>"text"), 0, false);
?>
                </div>
            </div>
        <?php }?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>"mailing_list_data[status]",'obj_id'=>$_smarty_tpl->tpl_vars['id']->value,'obj'=>$_smarty_tpl->tpl_vars['mailing_list']->value,'hidden'=>true), 0, false);
?>
    </fieldset>
    </div>
</div>

<div class="buttons-container">
    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[mailing_lists.update]",'cancel_action'=>"close",'save'=>$_smarty_tpl->tpl_vars['id']->value,'cancel_meta'=>"bulkedit-unchanged"), 0, false);
?>
</div>
    
</form>

<!--content_group<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }
}
