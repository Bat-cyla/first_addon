<?php
/* Smarty version 4.1.1, created on 2024-06-27 09:47:44
  from '/app/www/design/backend/templates/views/usergroups/components/privileges_group.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_667d0b1092b995_22089132',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '920de1d16b5438fc31ac5fc30d401bed8b553f17' => 
    array (
      0 => '/app/www/design/backend/templates/views/usergroups/components/privileges_group.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/usergroups/components/privileges_access_level_controls.tpl' => 1,
    'tygh:common/check_items.tpl' => 1,
  ),
),false)) {
function content_667d0b1092b995_22089132 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.count.php','function'=>'smarty_modifier_count',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.split.php','function'=>'smarty_function_split',),2=>array('file'=>'/app/www/app/lib/vendor/smarty/smarty/libs/plugins/function.math.php','function'=>'smarty_function_math',),));
\Tygh\Languages\Helper::preloadLangVars(array('privilege_groups.other','privilege_groups.','select_all'));
$_smarty_tpl->_assignInScope('group_name', $_smarty_tpl->__("privilege_groups.other"));
if ($_smarty_tpl->tpl_vars['group_id']->value) {?>
    <?php $_smarty_tpl->_assignInScope('group_name', $_smarty_tpl->__("privilege_groups.".((string)$_smarty_tpl->tpl_vars['group_id']->value)));
}?>

<?php $_smarty_tpl->_assignInScope('id', ((string)$_smarty_tpl->tpl_vars['section_id']->value)."_".((string)$_smarty_tpl->tpl_vars['group_id']->value));?>
<div class="control-group">
    <div class="control-label"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_name']->value, ENT_QUOTES, 'UTF-8');?>
:</div>
    <div class="controls">
        <?php if ($_smarty_tpl->tpl_vars['group_id']->value) {?>
            <?php $_smarty_tpl->_assignInScope('manage_privileges_qty', smarty_modifier_count($_smarty_tpl->tpl_vars['group']->value['action_manage']));?>
            <?php $_smarty_tpl->_assignInScope('view_privileges_qty', smarty_modifier_count($_smarty_tpl->tpl_vars['group']->value['action_view']));?>
            <?php $_smarty_tpl->_assignInScope('show_custom_section', $_smarty_tpl->tpl_vars['manage_privileges_qty']->value > 1 || $_smarty_tpl->tpl_vars['view_privileges_qty']->value > 1);?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/usergroups/components/privileges_access_level_controls.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('section_id'=>$_smarty_tpl->tpl_vars['section_id']->value,'group_id'=>$_smarty_tpl->tpl_vars['group_id']->value,'disable_full_access_level_control'=>$_smarty_tpl->tpl_vars['manage_privileges_qty']->value < 1,'disable_view_access_level_control'=>$_smarty_tpl->tpl_vars['view_privileges_qty']->value < 1,'show_custom_access_level_control'=>$_smarty_tpl->tpl_vars['show_custom_section']->value), 0, false);
?>
            <div class="privileges-custom-access privileges-custom-access-disabled<?php if (!$_smarty_tpl->tpl_vars['show_custom_section']->value) {?> hidden<?php }?>"
                 id="usergroup_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['usergroup_id']->value, ENT_QUOTES, 'UTF-8');?>
_privileges_list_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
                 data-ca-privilege-section-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['section_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                 data-ca-privilege-group-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                 data-ca-privilege-usergroup-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['usergroup_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['action_manage'], 'privilege');
$_smarty_tpl->tpl_vars['privilege']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['privilege']->value) {
$_smarty_tpl->tpl_vars['privilege']->do_else = false;
?>
                    <?php $_smarty_tpl->_assignInScope('privilege_id', ((string)$_smarty_tpl->tpl_vars['id']->value)."_".((string)$_smarty_tpl->tpl_vars['privilege']->value['privilege']));?>
                    <div>
                        <label class="checkbox inline" for="privilege_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['privilege_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                            <input type="checkbox"
                                   name="usergroup_data[privileges][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['privilege']->value['privilege'], ENT_QUOTES, 'UTF-8');?>
]"
                                   value="Y"
                                   id="privilege_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['privilege_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                                   <?php if ($_smarty_tpl->tpl_vars['usergroup_privileges']->value[$_smarty_tpl->tpl_vars['privilege']->value['privilege']]) {?>checked="checked"<?php }?>
                                   data-ca-privilege-access-type="manage"
                            /><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['privilege']->value['description'], ENT_QUOTES, 'UTF-8');?>
</label>
                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['action_view'], 'privilege');
$_smarty_tpl->tpl_vars['privilege']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['privilege']->value) {
$_smarty_tpl->tpl_vars['privilege']->do_else = false;
?>
                    <?php $_smarty_tpl->_assignInScope('privilege_id', ((string)$_smarty_tpl->tpl_vars['id']->value)."_".((string)$_smarty_tpl->tpl_vars['privilege']->value['privilege']));?>
                    <div>
                        <label class="checkbox inline" for="privilege_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['privilege_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                            <input type="checkbox"
                                   name="usergroup_data[privileges][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['privilege']->value['privilege'], ENT_QUOTES, 'UTF-8');?>
]"
                                   value="Y"
                                   id="privilege_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['privilege_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                                   <?php if ($_smarty_tpl->tpl_vars['usergroup_privileges']->value[$_smarty_tpl->tpl_vars['privilege']->value['privilege']]) {?>checked="checked"<?php }?>
                                   data-ca-privilege-access-type="view"
                            /><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['privilege']->value['description'], ENT_QUOTES, 'UTF-8');?>
</label>
                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        <?php } else { ?>
            <div class="table-responsive-wrapper">
                <table width="100%" class="table table-middle table--relative table-group table-responsive table-responsive-w-titles">
                    <thead>
                        <tr>
                            <th width="1%" class="table-group-checkbox">
                                <?php $_smarty_tpl->_subTemplateRender("tygh:common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('check_target'=>"privilege-check-".((string)$_smarty_tpl->tpl_vars['section_id']->value)."-".((string)$_smarty_tpl->tpl_vars['usergroup_id']->value)), 0, false);
?></th>
                            <th width="100%" colspan="5"><?php echo $_smarty_tpl->__("select_all");?>
</th>
                        </tr>
                    </thead>

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value, 'privileges');
$_smarty_tpl->tpl_vars['privileges']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['privileges']->value) {
$_smarty_tpl->tpl_vars['privileges']->do_else = false;
?>
                        <?php echo smarty_function_split(array('data'=>$_smarty_tpl->tpl_vars['privileges']->value,'size'=>3,'assign'=>"splitted_privilege"),$_smarty_tpl);?>

                        <?php echo smarty_function_math(array('equation'=>"floor(100/x)",'x'=>3,'assign'=>"cell_width"),$_smarty_tpl);?>


                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['splitted_privilege']->value, 'sprivilege');
$_smarty_tpl->tpl_vars['sprivilege']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sprivilege']->value) {
$_smarty_tpl->tpl_vars['sprivilege']->do_else = false;
?>

                            <tr class="object-group-elements">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sprivilege']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['p']->value && $_smarty_tpl->tpl_vars['p']->value['description']) {?>
                                        <?php $_smarty_tpl->_assignInScope('pr_id', $_smarty_tpl->tpl_vars['p']->value['privilege']);?>
                                        <td width="1%" class="table-group-checkbox">
                                            <input type="checkbox" name="usergroup_data[privileges][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pr_id']->value, ENT_QUOTES, 'UTF-8');?>
]" value="Y" <?php if ($_smarty_tpl->tpl_vars['usergroup_privileges']->value[$_smarty_tpl->tpl_vars['pr_id']->value]) {?>checked="checked"<?php }?> class="cm-item-privilege-check-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['section_id']->value, ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['usergroup_id']->value, ENT_QUOTES, 'UTF-8');?>
" id="set_privileges_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pr_id']->value, ENT_QUOTES, 'UTF-8');?>
"/></td>
                                        <td width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cell_width']->value, ENT_QUOTES, 'UTF-8');?>
%"><label for="set_privileges_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pr_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p']->value['description'], ENT_QUOTES, 'UTF-8');?>
</label></td>
                                    <?php } else { ?>
                                        <td colspan="2">&nbsp;</td>
                                    <?php }?>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </tr>

                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </table>
            </div>
        <?php }?>
    </div>
</div>
<?php }
}
