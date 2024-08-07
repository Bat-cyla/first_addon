<?php
/* Smarty version 4.1.1, created on 2024-05-15 08:29:43
  from '/app/www/design/backend/templates/views/companies/components/reason_container.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_664448470795b6_03746078',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3eb6e01adbbcd4fb1647793251ae758aded0787a' => 
    array (
      0 => '/app/www/design/backend/templates/views/companies/components/reason_container.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_664448470795b6_03746078 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('reason','notify_vendors_by_email'));
?>
<div class="form-horizontal form-edit">
<div class="control-group">
    <label class="control-label"><?php echo $_smarty_tpl->__("reason");?>
</label>
    <div class="controls">
    <textarea class="span9" name="reason_change_to_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['status']->value, ENT_QUOTES, 'UTF-8');?>
" id="reason_change_to_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['status']->value, ENT_QUOTES, 'UTF-8');?>
" cols="50" rows="4"></textarea>
    </div>
</div>

<div class="cm-toggle-button">
    <div class="control-group notify-customer">
        <div class="controls">
        <label for="action_notification" class="checkbox">
        <input type="hidden" name="action_notification" value="N" />
        <input type="checkbox" name="action_notification" id="action_notification" value="Y" checked="checked" <?php if ($_smarty_tpl->tpl_vars['mandatory_notification']->value) {?>disabled="disabled"<?php }?> />
        <?php echo $_smarty_tpl->__("notify_vendors_by_email");?>
</label>
        </div>
    </div>
</div>
</div><?php }
}
