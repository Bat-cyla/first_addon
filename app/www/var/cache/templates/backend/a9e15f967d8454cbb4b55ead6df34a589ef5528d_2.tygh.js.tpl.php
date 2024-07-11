<?php
/* Smarty version 4.1.1, created on 2024-07-11 12:54:22
  from '/app/www/design/backend/templates/pickers/users/js.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_668fabceb481f4_84249965',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9e15f967d8454cbb4b55ead6df34a589ef5528d' => 
    array (
      0 => '/app/www/design/backend/templates/pickers/users/js.tpl',
      1 => 1720610754,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668fabceb481f4_84249965 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('edit','remove','remove'));
if ($_smarty_tpl->tpl_vars['view_mode']->value == "list" || $_smarty_tpl->tpl_vars['view_mode']->value == "mixed") {?>
    <tr <?php if (!$_smarty_tpl->tpl_vars['clone']->value) {?>id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['holder']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php }?>class="cm-js-item<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> cm-clone hidden<?php }?>">
        <td data-th="&nbsp;"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_name']->value, ENT_QUOTES, 'UTF-8');?>
 (<a href="<?php echo htmlspecialchars((string) fn_url("profiles.update?user_id=".((string)$_smarty_tpl->tpl_vars['user_id']->value)), ENT_QUOTES, 'UTF-8');?>
" class="user-email"><span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['email']->value, ENT_QUOTES, 'UTF-8');?>
</span></a>)</td>
        <td class="nowrap" data-th="&nbsp;">
            <?php if (!$_smarty_tpl->tpl_vars['view_only']->value) {?>
                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
                    <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("edit"),'href'=>"profiles.update?user_id=".((string)$_smarty_tpl->tpl_vars['user_id']->value)), true);?>
</li>
                    <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("remove"),'onclick'=>"Tygh."."$".".cePicker('delete_js_item', '".((string)$_smarty_tpl->tpl_vars['holder']->value)."', '".((string)$_smarty_tpl->tpl_vars['user_id']->value)."', 'u'); return false;"), true);?>
</li>
                <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                <div class="hidden-tools">
                    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>

                </div>
            <?php }?>
        </td>
    </tr>
<?php } else { ?>
    <<?php if ($_smarty_tpl->tpl_vars['single_line']->value) {?>span<?php } else { ?>p<?php }?> <?php if (!$_smarty_tpl->tpl_vars['clone']->value) {?>id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['holder']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php }?>class="cm-js-item<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> cm-clone hidden<?php }?>">
    <?php if (!$_smarty_tpl->tpl_vars['first_item']->value && $_smarty_tpl->tpl_vars['single_line']->value) {?>
        <span class="cm-comma<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> hidden<?php }?>">,&nbsp;&nbsp;</span>
    <?php }?>
    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_name']->value, ENT_QUOTES, 'UTF-8');?>
(<a href="<?php echo htmlspecialchars((string) fn_url("profiles.update?user_id=".((string)$_smarty_tpl->tpl_vars['user_id']->value)), ENT_QUOTES, 'UTF-8');?>
" class="underlined user-email"><span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['email']->value, ENT_QUOTES, 'UTF-8');?>
</span></a>)
    <?php if (!$_smarty_tpl->tpl_vars['view_only']->value) {?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
            <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("remove"),'onclick'=>"Tygh."."$".".cePicker('delete_js_item', '".((string)$_smarty_tpl->tpl_vars['holder']->value)."', '".((string)$_smarty_tpl->tpl_vars['user_id']->value)."', 'u'); return false;"), true);?>
</li>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>

    <?php }?>
    </<?php if ($_smarty_tpl->tpl_vars['single_line']->value) {?>span<?php } else { ?>p<?php }?>>
<?php }
}
}
