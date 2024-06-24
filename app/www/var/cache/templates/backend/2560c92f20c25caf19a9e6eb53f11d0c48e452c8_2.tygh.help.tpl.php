<?php
/* Smarty version 4.1.1, created on 2024-06-11 09:23:17
  from '/app/www/design/backend/templates/common/help.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6667ed550fd216_43183036',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2560c92f20c25caf19a9e6eb53f11d0c48e452c8' => 
    array (
      0 => '/app/www/design/backend/templates/common/help.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/popupbox.tpl' => 1,
  ),
),false)) {
function content_6667ed550fd216_43183036 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('note'));
if ($_smarty_tpl->tpl_vars['content']->value) {?>
<div class="pull-right note-subheader">
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "notes_picker", null, null);?>
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('act'=>"notes",'id'=>"content_".((string)$_smarty_tpl->tpl_vars['id']->value)."_notes",'text'=>$_smarty_tpl->__("note"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'notes_picker')), 0, false);
?>
</div>
<?php }
}
}
