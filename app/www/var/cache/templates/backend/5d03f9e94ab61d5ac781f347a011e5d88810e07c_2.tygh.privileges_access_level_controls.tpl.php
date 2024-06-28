<?php
/* Smarty version 4.1.1, created on 2024-06-27 09:47:44
  from '/app/www/design/backend/templates/views/usergroups/components/privileges_access_level_controls.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_667d0b108e1861_22539230',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d03f9e94ab61d5ac781f347a011e5d88810e07c' => 
    array (
      0 => '/app/www/design/backend/templates/views/usergroups/components/privileges_access_level_controls.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_667d0b108e1861_22539230 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('privilege.full_access','privilege.view_access','privilege.no_access','privilege.custom_access'));
$_smarty_tpl->_assignInScope('id', ((string)$_smarty_tpl->tpl_vars['section_id']->value)."_".((string)$_smarty_tpl->tpl_vars['group_id']->value));?>

<div class="privileges-access-level-controls-inline<?php if ($_smarty_tpl->tpl_vars['hide_controls']->value) {?> hidden<?php }?>">
<label class="radio inline<?php if ($_smarty_tpl->tpl_vars['disable_full_access_level_control']->value) {?> privilege-access-level-control-disabled<?php }?>" for="usergroup_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['usergroup_id']->value, ENT_QUOTES, 'UTF-8');?>
_privilege_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_access_level_full">
    <input type="radio" name="privilege_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" value="Y" class="cm-privilege-set-access-level" id="usergroup_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['usergroup_id']->value, ENT_QUOTES, 'UTF-8');?>
_privilege_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_access_level_full"
           data-ca-privilege-access-level="full"
           data-ca-privilege-section-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['section_id']->value, ENT_QUOTES, 'UTF-8');?>
"
           data-ca-privilege-group-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_id']->value, ENT_QUOTES, 'UTF-8');?>
"
           data-ca-privilege-usergroup-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['usergroup_id']->value, ENT_QUOTES, 'UTF-8');?>
"
           <?php if ($_smarty_tpl->tpl_vars['disable_full_access_level_control']->value) {?>disabled<?php }?>
    /><?php echo $_smarty_tpl->__("privilege.full_access");?>
</label>

<label class="radio inline<?php if ($_smarty_tpl->tpl_vars['disable_view_access_level_control']->value) {?> privilege-access-level-control-disabled<?php }?>" for="usergroup_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['usergroup_id']->value, ENT_QUOTES, 'UTF-8');?>
_privilege_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_access_level_view">
    <input type="radio" name="privilege_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" value="Y" class="cm-privilege-set-access-level" id="usergroup_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['usergroup_id']->value, ENT_QUOTES, 'UTF-8');?>
_privilege_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_access_level_view"
           data-ca-privilege-access-level="view"
           data-ca-privilege-section-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['section_id']->value, ENT_QUOTES, 'UTF-8');?>
"
           data-ca-privilege-group-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_id']->value, ENT_QUOTES, 'UTF-8');?>
"
           data-ca-privilege-usergroup-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['usergroup_id']->value, ENT_QUOTES, 'UTF-8');?>
"
           <?php if ($_smarty_tpl->tpl_vars['disable_view_access_level_control']->value) {?>disabled<?php }?>
    /><?php echo $_smarty_tpl->__("privilege.view_access");?>
</label>

<label class="radio inline" for="usergroup_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['usergroup_id']->value, ENT_QUOTES, 'UTF-8');?>
_privilege_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_access_level_none">
    <input type="radio" name="privilege_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" value="Y" class="cm-privilege-set-access-level" id="usergroup_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['usergroup_id']->value, ENT_QUOTES, 'UTF-8');?>
_privilege_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_access_level_none"
           data-ca-privilege-access-level="none"
           data-ca-privilege-section-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['section_id']->value, ENT_QUOTES, 'UTF-8');?>
"
           data-ca-privilege-group-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_id']->value, ENT_QUOTES, 'UTF-8');?>
"
           data-ca-privilege-usergroup-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['usergroup_id']->value, ENT_QUOTES, 'UTF-8');?>
"
    /><?php echo $_smarty_tpl->__("privilege.no_access");?>
</label>
</div>
<?php if ($_smarty_tpl->tpl_vars['show_custom_access_level_control']->value) {?>
    <label class="radio inline" for="usergroup_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['usergroup_id']->value, ENT_QUOTES, 'UTF-8');?>
_privilege_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_access_level_custom">
        <input type="radio" name="privilege_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" value="Y" class="cm-privilege-set-access-level" id="usergroup_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['usergroup_id']->value, ENT_QUOTES, 'UTF-8');?>
_privilege_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_access_level_custom"
               data-ca-privilege-access-level="custom"
               data-ca-privilege-section-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['section_id']->value, ENT_QUOTES, 'UTF-8');?>
"
               data-ca-privilege-group-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_id']->value, ENT_QUOTES, 'UTF-8');?>
"
               data-ca-privilege-usergroup-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['usergroup_id']->value, ENT_QUOTES, 'UTF-8');?>
"
        /><?php echo $_smarty_tpl->__("privilege.custom_access");?>
</label>
<?php }
}
}
