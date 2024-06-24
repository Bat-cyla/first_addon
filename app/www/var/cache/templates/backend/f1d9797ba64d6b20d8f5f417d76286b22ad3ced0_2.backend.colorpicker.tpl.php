<?php
/* Smarty version 4.1.1, created on 2024-06-05 11:48:43
  from '/app/www/design/backend/templates/views/theme_editor/components/colorpicker.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6660266b1560d0_02986644',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1d9797ba64d6b20d8f5f417d76286b22ad3ced0' => 
    array (
      0 => '/app/www/design/backend/templates/views/theme_editor/components/colorpicker.tpl',
      1 => 1716808809,
      2 => 'backend',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6660266b1560d0_02986644 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="input-prepend">
    <?php $_smarty_tpl->_assignInScope('cp_id', (($tmp = $_smarty_tpl->tpl_vars['cp_id']->value ?? null)===null||$tmp==='' ? "cp_".((string)$_smarty_tpl->tpl_vars['cp_name']->value) ?? null : $tmp));?>
    <input type="text" maxlength="7" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cp_name']->value, ENT_QUOTES, 'UTF-8');?>
" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cp_id']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cp_value']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['cp_storage']->value) {?>data-ca-storage="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cp_storage']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="cm-colorpicker <?php if ($_smarty_tpl->tpl_vars['cp_class']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cp_class']->value, ENT_QUOTES, 'UTF-8');
}?>" />
</div><?php }
}
