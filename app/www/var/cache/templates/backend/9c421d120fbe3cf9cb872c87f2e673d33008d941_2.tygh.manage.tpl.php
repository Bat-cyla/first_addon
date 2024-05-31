<?php
/* Smarty version 4.1.1, created on 2024-05-31 15:45:34
  from '/app/www/design/backend/templates/addons/reward_points/views/reward_points/manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6659c66e3230c4_25938833',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c421d120fbe3cf9cb872c87f2e673d33008d941' => 
    array (
      0 => '/app/www/design/backend/templates/addons/reward_points/views/reward_points/manage.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/subheader.tpl' => 1,
    'tygh:buttons/update_for_all.tpl' => 1,
    'tygh:buttons/save.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_6659c66e3230c4_25938833 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('earned_points','usergroup','amount','amount','type','usergroup','amount','amount','type','absolute','points_lower','percent','tools','reward_points'));
if (fn_allowed_for("ULTIMATE")) {?>
    <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
        <?php $_smarty_tpl->_assignInScope('show_update_for_all', true);?>
    <?php }
}?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>
    <div id="content_reward_points">
        <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="reward_points">
        
            <input type="hidden" name="selected_section" value="reward_points">
            <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) fn_url("reward_points.".((string)$_smarty_tpl->tpl_vars['runtime']->value['mode'])), ENT_QUOTES, 'UTF-8');?>
">
            <input type="hidden" name="object_type" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object_type']->value, ENT_QUOTES, 'UTF-8');?>
">
            
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("earned_points")), 0, false);
?>

            <div class="table-responsive-wrapper">
                <table class="table table-middle table--relative table-responsive">
                <thead class="cm-first-sibling">
                    <tr>
                        <th width="20%"><?php echo $_smarty_tpl->__("usergroup");?>
</th>
                        <th width="40%"><?php echo $_smarty_tpl->__("amount");?>
</th>
                        <th width="40%"><?php echo $_smarty_tpl->__("amount");?>
&nbsp;<?php echo $_smarty_tpl->__("type");?>
</th>
                        <?php if ($_smarty_tpl->tpl_vars['show_update_for_all']->value) {?>
                        <th></th>
                        <?php }?>
                    </tr>
                </thead>
                <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reward_usergroups']->value, 'm');
$_smarty_tpl->tpl_vars['m']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->do_else = false;
?>
                    <?php $_smarty_tpl->_assignInScope('m_id', $_smarty_tpl->tpl_vars['m']->value['usergroup_id']);?>
                    <?php $_smarty_tpl->_assignInScope('point', $_smarty_tpl->tpl_vars['reward_points']->value[$_smarty_tpl->tpl_vars['m_id']->value]);?>
                    <tr id="container_earned_points_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object_type']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['m_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <td data-th="<?php echo $_smarty_tpl->__("usergroup");?>
">
                            <input type="hidden" name="reward_points[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['m_id']->value, ENT_QUOTES, 'UTF-8');?>
][usergroup_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['m_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['m']->value['usergroup'], ENT_QUOTES, 'UTF-8');?>
</td>
                        <td data-th="<?php echo $_smarty_tpl->__("amount");?>
">
                            <input type="text" id="earned_points_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object_type']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['m_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="reward_points[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['m_id']->value, ENT_QUOTES, 'UTF-8');?>
][amount]" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['point']->value['amount'] ?? null)===null||$tmp==='' ? "0" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['show_update_for_all']->value) {?>disabled="disabled"<?php }?>>
                        </td>
                        <td data-th="<?php echo $_smarty_tpl->__("amount");?>
&nbsp;<?php echo $_smarty_tpl->__("type");?>
">
                            <select name="reward_points[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['m_id']->value, ENT_QUOTES, 'UTF-8');?>
][amount_type]" id="type_earned_points_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object_type']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['m_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="expanded input-xlarge" <?php if ($_smarty_tpl->tpl_vars['show_update_for_all']->value) {?>disabled="disabled"<?php }?>>
                                <option value="A" <?php if ($_smarty_tpl->tpl_vars['point']->value['amount_type'] == "A") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("absolute");?>
 (<?php echo $_smarty_tpl->__("points_lower");?>
)</option>
                                <option value="P" <?php if ($_smarty_tpl->tpl_vars['point']->value['amount_type'] == "P") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("percent");?>
 (%)</option>
                            </select>
                        </td>
                        <?php if ($_smarty_tpl->tpl_vars['show_update_for_all']->value) {?>
                        <td data-th="<?php echo $_smarty_tpl->__("tools");?>
">
                            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/update_for_all.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('display'=>true,'name'=>"reward_points[".((string)$_smarty_tpl->tpl_vars['m_id']->value)."][update_all_vendors]",'hide_element'=>"earned_points_".((string)$_smarty_tpl->tpl_vars['object_type']->value)."_".((string)$_smarty_tpl->tpl_vars['m_id']->value),'object_id'=>$_smarty_tpl->tpl_vars['m_id']->value,'component'=>"reward_points.".((string)$_smarty_tpl->tpl_vars['object_type']->value)."_".((string)$_smarty_tpl->tpl_vars['m_id']->value)), 0, true);
?>
                        </td>
                        <?php }?>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
                </table>
            </div>

            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[reward_points.update]",'but_role'=>"submit-link",'but_target_form'=>"reward_points"), 0, false);
?>
            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        </form>
    </div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("reward_points"),'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons'),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox')), 0, false);
}
}
