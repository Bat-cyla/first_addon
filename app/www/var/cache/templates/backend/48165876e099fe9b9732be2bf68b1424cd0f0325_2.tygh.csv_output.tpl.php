<?php
/* Smarty version 4.1.1, created on 2024-07-02 08:27:32
  from '/app/www/design/backend/templates/views/exim/components/csv_output.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66838fc4a521a0_95708953',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48165876e099fe9b9732be2bf68b1424cd0f0325' => 
    array (
      0 => '/app/www/design/backend/templates/views/exim/components/csv_output.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66838fc4a521a0_95708953 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('direct_download','screen','server'));
?>
<select name="export_options[output]" id="output">
    <option value="<?php echo htmlspecialchars((string) smarty_modifier_enum("EximOutputOptions::DIRECT_DOWNLOAD"), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value === smarty_modifier_enum("EximOutputOptions::DIRECT_DOWNLOAD")) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("direct_download");?>
</option>
    <option value="<?php echo htmlspecialchars((string) smarty_modifier_enum("EximOutputOptions::SCREEN"), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value === smarty_modifier_enum("EximOutputOptions::SCREEN")) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("screen");?>
</option>
    <option value="<?php echo htmlspecialchars((string) smarty_modifier_enum("EximOutputOptions::SERVER"), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value === smarty_modifier_enum("EximOutputOptions::SERVER")) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("server");?>
</option>
</select><?php }
}
