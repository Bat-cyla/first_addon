<?php
/* Smarty version 4.1.1, created on 2024-06-04 15:26:38
  from '/app/www/design/backend/templates/addons/vendor_communication/addons/advanced_import/hooks/vendor_communication/thread_object_data.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_665f07fe0d5d87_64270263',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4335f9779da22c76611adf40445e838a2abfb33' => 
    array (
      0 => '/app/www/design/backend/templates/addons/vendor_communication/addons/advanced_import/hooks/vendor_communication/thread_object_data.post.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665f07fe0d5d87_64270263 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('import','import','import','import'));
if ($_smarty_tpl->tpl_vars['object_type']->value == (defined('VC_OBJECT_TYPE_IMPORT_PRESET') ? constant('VC_OBJECT_TYPE_IMPORT_PRESET') : null)) {?>
    <?php if ($_smarty_tpl->tpl_vars['new_thread']->value) {?>
        <input type="hidden" name="thread[subject]" id="thread_message_subject_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo $_smarty_tpl->__("import");?>
 #<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
"/>
    <?php }?>
    <?php if (fn_check_permissions("import_presets","update","admin")) {?>
        <a href="<?php echo htmlspecialchars((string) fn_url("import_presets.update?preset_id=".((string)$_smarty_tpl->tpl_vars['object_id']->value)), ENT_QUOTES, 'UTF-8');?>
"
           class="post-object" title="<?php echo $_smarty_tpl->__("import");?>
 #<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php echo $_smarty_tpl->__("import");?>
 #<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>

        </a>
    <?php } else { ?>
        <span class="post-object"><?php echo $_smarty_tpl->__("import");?>
 #<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
</span>
    <?php }
}
}
}
