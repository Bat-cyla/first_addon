<?php
/* Smarty version 4.1.1, created on 2024-05-31 14:14:04
  from '/app/www/design/backend/templates/addons/store_locator/views/store_locator/manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6659b0fc316ae5_73783489',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b22585adedc740a706e8b623c127401bb00d62e4' => 
    array (
      0 => '/app/www/design/backend/templates/addons/store_locator/views/store_locator/manage.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/pagination.tpl' => 2,
    'tygh:common/check_items.tpl' => 1,
    'tygh:views/companies/components/company_name.tpl' => 1,
    'tygh:common/select_popup.tpl' => 1,
    'tygh:common/context_menu_wrapper.tpl' => 1,
    'tygh:common/tools.tpl' => 1,
    'tygh:addons/store_locator/components/search_form.tpl' => 1,
    'tygh:buttons/save.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_6659b0fc316ae5_73783489 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('position_short','store_locator','city','rate_area','status','position_short','store_locator','city','rate_area','store_locator.no_rate_area','tools','edit','delete','status','no_data','add_store_location','store_locator'));
echo smarty_function_script(array('src'=>"js/addons/store_locator/bulk_edit.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>

<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="store_locator_form" id="store_locator_form">
<input type="hidden" name="fake" value="1" />

<?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('save_current_page'=>true), 0, false);
?>

<div class="items-container" id="store_locations">
    <?php if ($_smarty_tpl->tpl_vars['store_locations']->value) {?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "store_locator_table", null, null);?>
            <div class="table-responsive-wrapper longtap-selection">
                <table class="table table-middle table--relative table-responsive">

                <thead
                        data-ca-bulkedit-default-object="true"
                        data-ca-bulkedit-component="defaultObject"
                >
                <tr>
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"store_locator:stores_list_header"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"store_locator:stores_list_header"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <th width="1%" class="mobile-hide">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('class'=>"cm-no-hide-input"), 0, false);
?>

                        <input type="checkbox"
                               class="bulkedit-toggler hide"
                               data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]"
                               data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                        />
                    </th>
                    <th width="1%"><?php echo $_smarty_tpl->__("position_short");?>
</th>
                    <th width="20%"><?php echo $_smarty_tpl->__("store_locator");?>
</th>
                    <th width="20%"><?php echo $_smarty_tpl->__("city");?>
</th>
                    <th width="20%"><?php echo $_smarty_tpl->__("rate_area");?>
</th>
                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"store_locator:stores_list_header"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <th width="5%">&nbsp;</th>
                    <th class="right" width="10%"><?php echo $_smarty_tpl->__("status");?>
</th>
                </tr>
                </thead>

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['store_locations']->value, 'loc');
$_smarty_tpl->tpl_vars['loc']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['loc']->value) {
$_smarty_tpl->tpl_vars['loc']->do_else = false;
?>
                    <tbody>
                    <tr class="cm-row-status-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['loc']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 cm-longtap-target" valign="top"
                        data-ca-longtap-action="setCheckBox"
                        data-ca-longtap-target="input.cm-item"
                        data-ca-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['loc']->value['store_location_id'], ENT_QUOTES, 'UTF-8');?>
"
                    >

                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"store_locator:stores_list"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"store_locator:stores_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php $_smarty_tpl->_assignInScope('allow_save', fn_allow_save_object($_smarty_tpl->tpl_vars['loc']->value,"store_locations"));?>
                        <?php if ($_smarty_tpl->tpl_vars['allow_save']->value) {?>
                            <?php $_smarty_tpl->_assignInScope('no_hide_input', "cm-no-hide-input");?>
                            <?php $_smarty_tpl->_assignInScope('display', '');?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->_assignInScope('no_hide_input', '');?>
                            <?php $_smarty_tpl->_assignInScope('display', "text");?>
                        <?php }?>

                        <td width="1%" class="left <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['no_hide_input']->value, ENT_QUOTES, 'UTF-8');?>
 mobile-hide">
                            <input type="checkbox" name="store_locator_ids[]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['loc']->value['store_location_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item cm-item-status-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['loc']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 hide" />
                        </td>
                        <td width="1%" data-th="<?php echo $_smarty_tpl->__("position_short");?>
">
                            <input type="text" name="store_locators[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['loc']->value['store_location_id'], ENT_QUOTES, 'UTF-8');?>
][position]" size="3" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['loc']->value['position'], ENT_QUOTES, 'UTF-8');?>
" class="input-micro input-hidden" />
                        </td>
                        <td width="20%" data-th="<?php echo $_smarty_tpl->__("store_locator");?>
">
                            <a class="row-status" href="<?php echo htmlspecialchars((string) fn_url("store_locator.update?store_location_id=".((string)$_smarty_tpl->tpl_vars['loc']->value['store_location_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['loc']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
                            <?php $_smarty_tpl->_subTemplateRender("tygh:views/companies/components/company_name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object'=>$_smarty_tpl->tpl_vars['loc']->value), 0, true);
?>
                        </td>

                        <td width="20%" data-th="<?php echo $_smarty_tpl->__("city");?>
">
                            <span class="row-status"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['loc']->value['city'], ENT_QUOTES, 'UTF-8');?>
</span>
                        </td>

                        <td width="20%" data-th="<?php echo $_smarty_tpl->__("rate_area");?>
">
                            <?php if ($_smarty_tpl->tpl_vars['loc']->value['main_destination_id']) {?>
                                <input type="hidden" name="store_locators[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['loc']->value['store_location_id'], ENT_QUOTES, 'UTF-8');?>
][main_destination_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['loc']->value['main_destination_id'], ENT_QUOTES, 'UTF-8');?>
"/>
                                <?php if (fn_check_view_permissions("destinations.update")) {?>
                                    <a href="<?php echo htmlspecialchars((string) fn_url("destinations.update&destination_id=".((string)$_smarty_tpl->tpl_vars['loc']->value['main_destination_id'])), ENT_QUOTES, 'UTF-8');?>
"
                                       class="row-status <?php if ($_smarty_tpl->tpl_vars['destinations']->value[$_smarty_tpl->tpl_vars['loc']->value['main_destination_id']]['status'] === smarty_modifier_enum("ObjectStatuses::DISABLED")) {?>shipping-rate-area-d<?php }?>"
                                    ><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['destinations']->value[$_smarty_tpl->tpl_vars['loc']->value['main_destination_id']]["destination"], ENT_QUOTES, 'UTF-8');?>
</a>
                                <?php } else { ?>
                                    <span class="row-status <?php if ($_smarty_tpl->tpl_vars['destinations']->value[$_smarty_tpl->tpl_vars['loc']->value['main_destination_id']]['status'] === smarty_modifier_enum("ObjectStatuses::DISABLED")) {?>shipping-rate-area-d<?php }?>">
                                        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['destinations']->value[$_smarty_tpl->tpl_vars['loc']->value['main_destination_id']]["destination"], ENT_QUOTES, 'UTF-8');?>

                                    </span>
                                <?php }?>
                            <?php } else { ?>
                                <span class="row-status">
                                    <?php echo $_smarty_tpl->__("store_locator.no_rate_area");?>

                                </span>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['loc']->value['pickup_destinations_ids']) {?>
                                <input type="hidden" name="store_locators[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['loc']->value['store_location_id'], ENT_QUOTES, 'UTF-8');?>
][pickup_destinations_ids]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['loc']->value['pickup_destinations_ids'], ENT_QUOTES, 'UTF-8');?>
"/>
                            <?php }?>
                        </td>
                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"store_locator:stores_list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                        <td width="5%" class="center nowrap" data-th="<?php echo $_smarty_tpl->__("tools");?>
">
                            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
                                <?php if ($_smarty_tpl->tpl_vars['allow_save']->value) {?>
                                    <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("edit"),'href'=>"store_locator.update?store_location_id=".((string)$_smarty_tpl->tpl_vars['loc']->value['store_location_id'])), true);?>
</li>
                                    <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'class'=>"cm-confirm",'text'=>$_smarty_tpl->__("delete"),'href'=>"store_locator.delete?store_location_id=".((string)$_smarty_tpl->tpl_vars['loc']->value['store_location_id']),'method'=>"POST"), true);?>
</li>
                                <?php }?>
                            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                            <div class="hidden-tools right">
                                <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>

                            </div>
                        </td>
                        <td width="10%" class="right nowrap" data-th="<?php echo $_smarty_tpl->__("status");?>
">
                            <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['loc']->value['store_location_id'],'status'=>$_smarty_tpl->tpl_vars['loc']->value['status'],'hidden'=>'','object_id_name'=>"store_location_id",'table'=>"store_locations",'popup_additional_class'=>((string)$_smarty_tpl->tpl_vars['no_hide_input']->value),'display'=>$_smarty_tpl->tpl_vars['display']->value), 0, true);
?>
                        </td>

                    </tr>
                    </tbody>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </table>
            </div>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>"store_locator_form",'object'=>"store_locator",'items'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'store_locator_table')), 0, false);
?>
    <?php } else { ?>
        <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
    <?php }?>
<!--store_locations--></div>


    <?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('save_current_page'=>true), 0, true);
?>
</form>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "adv_buttons", null, null);?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tool_href'=>"store_locator.add",'prefix'=>"top",'title'=>$_smarty_tpl->__("add_store_location"),'hide_tools'=>true), 0, false);
?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>


<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "sidebar", null, null);?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"store_locator:manage_sidebar"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"store_locator:manage_sidebar"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:addons/store_locator/components/search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('dispatch'=>"store_locator.manage",'search'=>$_smarty_tpl->tpl_vars['search']->value), 0, false);
?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"store_locator:manage_sidebar"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
        <?php if ($_smarty_tpl->tpl_vars['store_locations']->value) {?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[store_locator.m_update]",'but_role'=>"submit-button",'but_target_form'=>"store_locator_form",'but_meta'=>"bulkedit-disable-save-button"), 0, false);
?>
        <?php }?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("store_locator"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'adv_buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'adv_buttons'),'select_languages'=>true,'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons'),'sidebar'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar')), 0, false);
}
}
