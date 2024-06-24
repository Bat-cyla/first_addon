<?php
/* Smarty version 4.1.1, created on 2024-06-04 15:26:37
  from '/app/www/design/backend/templates/addons/vendor_communication/views/vendor_communication/components/new_thread_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_665f07fde62378_52739943',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e0193595d5363f94d3ed0525488913545192b4c' => 
    array (
      0 => '/app/www/design/backend/templates/addons/vendor_communication/views/vendor_communication/components/new_thread_form.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/vendor_communication/views/vendor_communication/components/thread_object_data.tpl' => 1,
    'tygh:views/companies/components/picker/picker.tpl' => 1,
    'tygh:buttons/save_cancel.tpl' => 1,
  ),
),false)) {
function content_665f07fde62378_52739943 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('subject','vendor','vendor','all','vendor_communication.your_message_to_vendor_name','vendor_communication.your_message_to_admin','vendor_communication.your_message_to_customer','vendor_communication.type_message','send'));
ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("Addons\\VendorCommunication\\CommunicationTypes::VENDOR_TO_ADMIN"), ENT_QUOTES, 'UTF-8');
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('redirect_url', fn_url((($tmp = $_smarty_tpl->tpl_vars['return_url']->value ?? null)===null||$tmp==='' ? "vendor_communication.threads?communication_type=".$_prefixVariable1 ?? null : $tmp)));
$_smarty_tpl->_assignInScope('communication_type', (($tmp = $_smarty_tpl->tpl_vars['communication_type']->value ?? null)===null||$tmp==='' ? (smarty_modifier_enum("Addons\VendorCommunication\CommunicationTypes::VENDOR_TO_ADMIN")) ?? null : $tmp));?>

<div id="new_thread_dialog_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <form action="<?php ob_start();
if ($_smarty_tpl->tpl_vars['communication_type']->value) {
echo (string)$_smarty_tpl->tpl_vars['communication_type']->value;
} else {
echo htmlspecialchars((string) smarty_modifier_enum("Addons\\VendorCommunication\\CommunicationTypes::VENDOR_TO_ADMIN"), ENT_QUOTES, 'UTF-8');
}
$_prefixVariable2=ob_get_clean();
echo htmlspecialchars((string) fn_url("vendor_communication.create_thread?communication_type=".$_prefixVariable2), ENT_QUOTES, 'UTF-8');?>
" method="post" class="form-horizontal form-edit add_message_form" name="add_thread_form_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
" id="new_thread_form_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <input type="hidden" name="result_ids" value="new_thread_message_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
,threads_table" />
        <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['redirect_url']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="thread[object_type]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object_type']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="thread[object_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="thread[communication_type]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['communication_type']->value, ENT_QUOTES, 'UTF-8');?>
" />


        <div id="new_message_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="add_message_form--wrapper">

            <div class="control-group">
                <label for="thread_message_subject_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label vendor-communication-add-message__title cm-required"><?php echo $_smarty_tpl->__("subject");?>
</label>
                <div class="controls">
                    <?php if ($_smarty_tpl->tpl_vars['object_type']->value && $_smarty_tpl->tpl_vars['object_type']->value != (defined('VC_OBJECT_TYPE_COMPANY') ? constant('VC_OBJECT_TYPE_COMPANY') : null)) {?>
                        <div class="vendor-communication-object-data pull-right">
                            <?php $_smarty_tpl->_subTemplateRender("tygh:addons/vendor_communication/views/vendor_communication/components/thread_object_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object'=>$_smarty_tpl->tpl_vars['object']->value,'new_thread'=>true), 0, false);
?>
                        </div>
                    <?php } else { ?>
                        <input type="text" name="thread[subject]" id="thread_message_subject_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="input-large cm-required"/>
                    <?php }?>
                </div>
            </div>

            <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_type'] == smarty_modifier_enum("UserTypes::ADMIN")) {?>
                <?php if ($_smarty_tpl->tpl_vars['communication_type']->value === smarty_modifier_enum("Addons\\VendorCommunication\\CommunicationTypes::VENDOR_TO_ADMIN")) {?>
                    <div class="control-group">
                        <label class="control-label vendor-communication-add-message__title cm-required cm-multiple-checkboxes"><?php echo $_smarty_tpl->__("vendor");?>
</label>
                        <label class="control-label cm-required hidden" for="thread_message_company_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("vendor");?>
</label>
                            <?php if ($_smarty_tpl->tpl_vars['object_type']->value) {?>
                                <div class="controls">
                                    <input type="hidden" name="thread[companies][]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object']->value['company_id'], ENT_QUOTES, 'UTF-8');?>
" />
                                    <div class="additional-info pull-right"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object']->value['company'], ENT_QUOTES, 'UTF-8');?>
</div>
                                </div>
                            <?php } else { ?>
                                <div class="controls">
                                    <label class="checkbox">
                                        <input type="checkbox" name="thread[companies][all]" class="vendor-communication-add-message__all-companies" id="thread_message_all_companies_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
" value="Y">
                                        <?php echo $_smarty_tpl->__("all");?>

                                    </label>
                                </div>
                                <div class="controls">
                                    <div class="cm-field-container">
                                        <?php $_smarty_tpl->_subTemplateRender("tygh:views/companies/components/picker/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('select_id'=>"thread_message_company_".((string)$_smarty_tpl->tpl_vars['object_id']->value),'input_name'=>"thread[companies][]",'multiple'=>true,'show_advanced'=>false,'type'=>"selection",'close_on_select'=>false,'meta'=>"input-large vendor-communication-add-message__company"), 0, false);
?>
                                    </div>
                                </div>
                            <?php }?>
                     </div>
                <?php } else { ?>
                    <input type="hidden" name="thread[company_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object']->value['company_id'], ENT_QUOTES, 'UTF-8');?>
" />
                <?php }?>
            <?php } elseif ($_smarty_tpl->tpl_vars['auth']->value['user_type'] == smarty_modifier_enum("UserTypes::VENDOR")) {?>
                <?php if ($_smarty_tpl->tpl_vars['communication_type']->value === smarty_modifier_enum("Addons\\VendorCommunication\\CommunicationTypes::VENDOR_TO_ADMIN")) {?>
                    <input type="hidden" name="thread[companies][]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['auth']->value['company_id'], ENT_QUOTES, 'UTF-8');?>
" />
                <?php } else { ?>
                    <input type="hidden" name="thread[company_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object']->value['company_id'], ENT_QUOTES, 'UTF-8');?>
" />
                <?php }?>
            <?php }?>

            <div class="control-group">
                <label for="thread_message_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label vendor-communication-add-message__title cm-required">
                    <?php if ($_smarty_tpl->tpl_vars['communication_type']->value === smarty_modifier_enum("Addons\VendorCommunication\CommunicationTypes::VENDOR_TO_ADMIN")) {?>
                        <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_type'] === smarty_modifier_enum("UserTypes::ADMIN")) {?>
                            <?php echo $_smarty_tpl->__("vendor_communication.your_message_to_vendor_name",array("[vendor_name]"=>$_smarty_tpl->tpl_vars['object']->value['company']));?>

                        <?php } else { ?>
                            <?php echo $_smarty_tpl->__("vendor_communication.your_message_to_admin");?>

                        <?php }?>
                    <?php } else { ?>
                        <?php echo $_smarty_tpl->__("vendor_communication.your_message_to_customer");?>

                    <?php }?>
                </label>
                <textarea
                        id="thread_message_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                        name="thread[message]"
                        class="cm-focus add_message_form--textarea cm-required"
                        rows="5"
                        autofocus
                        placeholder="<?php echo $_smarty_tpl->__("vendor_communication.type_message");?>
"
                ></textarea>
                <div class="buttons-container">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("send"),'cancel_action'=>"close",'but_target_form'=>"add_thread_form_".((string)$_smarty_tpl->tpl_vars['object_id']->value)), 0, false);
?>
                </div>
            </div>
        </div>
    </form>
</div>
<?php echo smarty_function_script(array('src'=>"js/addons/vendor_communication/thread_form.js"),$_smarty_tpl);?>

<?php }
}
