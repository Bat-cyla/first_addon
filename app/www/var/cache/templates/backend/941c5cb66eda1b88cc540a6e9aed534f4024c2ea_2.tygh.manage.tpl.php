<?php
/* Smarty version 4.1.1, created on 2024-06-04 14:13:37
  from '/app/www/design/backend/templates/views/usergroups/manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_665ef6e1d35255_18162890',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '941c5cb66eda1b88cc540a6e9aed534f4024c2ea' => 
    array (
      0 => '/app/www/design/backend/templates/views/usergroups/manage.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/check_items.tpl' => 1,
    'tygh:common/table_col_head.tpl' => 4,
    'tygh:common/popupbox.tpl' => 2,
    'tygh:common/select_popup.tpl' => 1,
    'tygh:common/context_menu_wrapper.tpl' => 1,
    'tygh:views/usergroups/update.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_665ef6e1d35255_18162890 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('usergroup','type','status','usergroup','type','privileges','edit','delete','status','no_items','user_group_requests','new_usergroups','new_usergroups','usergroups'));
echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>

<?php $_smarty_tpl->_assignInScope('hide_inputs', fn_check_form_permissions(''));?>
<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" id="usergroups_form" name="usergroups_form" class="<?php if ($_smarty_tpl->tpl_vars['hide_inputs']->value) {?> cm-hide-inputs<?php }?>">

<?php $_smarty_tpl->_assignInScope('user_group_statuses', fn_get_default_statuses('',true));
$_smarty_tpl->_assignInScope('has_permission', fn_check_permissions("usergroups","update","admin","POST",array("table"=>"states")) && fn_check_permissions("states","m_delete","admin","POST",array("table"=>"states")));?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"usergroups:manage"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"usergroups:manage"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ($_smarty_tpl->tpl_vars['usergroups']->value) {?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "usergroups_table", null, null);?>
        <div class="table-responsive-wrapper longtap-selection">
            <table class="table table-middle table--relative table-responsive table--overflow-hidden">
            <thead
                data-ca-bulkedit-default-object="true"
                data-ca-bulkedit-component="defaultObject"
            >
            <tr>
                <th class="mobile-hide table__check-items-column">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('check_statuses'=>$_smarty_tpl->tpl_vars['has_permission']->value ? $_smarty_tpl->tpl_vars['user_group_statuses']->value : '','meta'=>"table__check-items"), 0, false);
?>

                    <input type="checkbox"
                        class="bulkedit-toggler hide"
                        data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]" 
                        data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                    />
                </th>
                <th width="37%">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>$_smarty_tpl->__("usergroup")), 0, false);
?>
                </th>
                <th width="45%">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>$_smarty_tpl->__("type")), 0, true);
?>
                </th>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"usergroups:manage_header"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"usergroups:manage_header"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"usergroups:manage_header"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <th width="8%" class="mobile-hide">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>"&nbsp;"), 0, true);
?>
                </th>
                <th width="10%" class="right">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>$_smarty_tpl->__("status")), 0, true);
?>
                </th>
            </tr>
            </thead>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usergroups']->value, 'usergroup');
$_smarty_tpl->tpl_vars['usergroup']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['usergroup']->value) {
$_smarty_tpl->tpl_vars['usergroup']->do_else = false;
?>
            <tr class="cm-row-status-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['usergroup']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 cm-longtap-target"
                <?php if ($_smarty_tpl->tpl_vars['has_permission']->value) {?>
                    data-ca-longtap-action="setCheckBox"
                    data-ca-longtap-target="input.cm-item"
                    data-ca-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['state']->value['state_id'], ENT_QUOTES, 'UTF-8');?>
"
                <?php }?>
            >
                <td class="mobile-hide table__check-items-cell">
                    <input type="checkbox" name="usergroup_ids[]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item cm-item-status-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['usergroup']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 hide" />
                </td>
                <td width="37%" class="row-status" data-th="<?php echo $_smarty_tpl->__("usergroup");?>
">
                    <?php if ($_smarty_tpl->tpl_vars['hide_inputs']->value) {?>
                        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['usergroup']->value['usergroup'], ENT_QUOTES, 'UTF-8');?>

                    <?php } else { ?>
                        <a class="row-status cm-external-click bulkedit-deselect" data-ca-external-click-id="<?php echo htmlspecialchars((string) "opener_group".((string)$_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['usergroup']->value['usergroup'], ENT_QUOTES, 'UTF-8');?>
</a>
                    <?php }?>
                </td>
                <td width="45%" class="row-status" data-th="<?php echo $_smarty_tpl->__("type");?>
">
                    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['usergroup_types']->value[$_smarty_tpl->tpl_vars['usergroup']->value['type']], ENT_QUOTES, 'UTF-8');?>

                </td>

                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"usergroups:manage_data"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"usergroups:manage_data"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"usergroups:manage_data"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                <td width="8%" class="row-status mobile-hide">
                    <?php if ($_smarty_tpl->tpl_vars['usergroup']->value['type'] == "A") {?>
                        <?php $_smarty_tpl->_assignInScope('_href', "usergroups.assign_privileges?usergroup_id=".((string)$_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id']));?>
                        <?php $_smarty_tpl->_assignInScope('_link_text', $_smarty_tpl->__("privileges"));?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->_assignInScope('_href', '');?>
                        <?php $_smarty_tpl->_assignInScope('_link_text', '');?>
                    <?php }?>
                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"usergroups:list_extra_links"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"usergroups:list_extra_links"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <li><?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"group".((string)$_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id']),'text'=>$_smarty_tpl->tpl_vars['usergroup']->value['usergroup'],'link_text'=>$_smarty_tpl->__("edit"),'act'=>"link",'href'=>"usergroups.update?usergroup_id=".((string)$_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id'])."&group_type=".((string)$_smarty_tpl->tpl_vars['usergroup']->value['type'])), 0, true);
?></li>
                            <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("delete"),'class'=>"cm-confirm",'href'=>"usergroups.delete?usergroup_id=".((string)$_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id']),'method'=>"POST"), true);?>
</li>
                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"usergroups:list_extra_links"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                    <div class="hidden-tools cm-hide-with-inputs">
                        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>

                    </div>
                </td>
                <td width="10%" class="nowrap right" data-th="<?php echo $_smarty_tpl->__("status");?>
">
                    <?php $_smarty_tpl->_assignInScope('hide_for_vendor', false);?>
                    <?php if (!fn_check_view_permissions("usergroups.manage","POST")) {?>
                        <?php $_smarty_tpl->_assignInScope('hide_for_vendor', true);?>
                    <?php }?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id'],'status'=>$_smarty_tpl->tpl_vars['usergroup']->value['status'],'hidden'=>true,'object_id_name'=>"usergroup_id",'table'=>"usergroups",'hide_for_vendor'=>$_smarty_tpl->tpl_vars['hide_for_vendor']->value), 0, true);
?>
                </td>
            </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>
        </div>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>"usergroups_form",'object'=>"usergroups",'items'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'usergroups_table'),'has_permissions'=>$_smarty_tpl->tpl_vars['has_permission']->value), 0, false);
} else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_items");?>
</p>
<?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"usergroups:manage"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

</form>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
    <?php if (fn_check_view_permissions("usergroups.update")) {?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"usergroups:manage_tools_list"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"usergroups:manage_tools_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("user_group_requests"),'href'=>"usergroups.requests"), true);?>
</li>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"usergroups:manage_tools_list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>

    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "adv_buttons", null, null);?>
    <?php if (fn_check_view_permissions("usergroups.update")) {?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "add_new_picker", null, null);?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/usergroups/update.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('usergroup'=>array(),'show_privileges_tab'=>(isset($_smarty_tpl->tpl_vars['usergroup_types']->value[smarty_modifier_enum("UsergroupTypes::TYPE_ADMIN")]))), 0, false);
?>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"add_new_usergroups",'text'=>$_smarty_tpl->__("new_usergroups"),'title'=>$_smarty_tpl->__("new_usergroups"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'add_new_picker'),'act'=>"general",'icon'=>"icon-plus"), 0, true);
?>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("usergroups"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons'),'adv_buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'adv_buttons'),'select_languages'=>true), 0, false);
}
}
