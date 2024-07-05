<?php
/* Smarty version 4.1.1, created on 2024-06-27 15:32:04
  from '/app/www/design/backend/templates/views/theme_editor/components/colorpicker.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_667d5bc44ff4e6_53701720',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3700be95b4818afc3393dc9bbfe196a751020966' => 
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
function content_667d5bc44ff4e6_53701720 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><div class="input-prepend">
    <?php $_smarty_tpl->_assignInScope('cp_id', (($tmp = $_smarty_tpl->tpl_vars['cp_id']->value ?? null)===null||$tmp==='' ? "cp_".((string)$_smarty_tpl->tpl_vars['cp_name']->value) ?? null : $tmp));?>
    <input type="text" maxlength="7" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cp_name']->value, ENT_QUOTES, 'UTF-8');?>
" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cp_id']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cp_value']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['cp_storage']->value) {?>data-ca-storage="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cp_storage']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="cm-colorpicker <?php if ($_smarty_tpl->tpl_vars['cp_class']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cp_class']->value, ENT_QUOTES, 'UTF-8');
}?>" />
</div><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="backend:views/theme_editor/components/colorpicker.tpl" id="<?php echo smarty_function_set_id(array('name'=>"backend:views/theme_editor/components/colorpicker.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="input-prepend">
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
}
