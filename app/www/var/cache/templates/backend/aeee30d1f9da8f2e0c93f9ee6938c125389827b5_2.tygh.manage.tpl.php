<?php
/* Smarty version 4.1.1, created on 2024-06-05 09:21:28
  from '/app/www/design/backend/templates/views/shippings/manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_666003e8e1f024_51122265',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aeee30d1f9da8f2e0c93f9ee6938c125389827b5' => 
    array (
      0 => '/app/www/design/backend/templates/views/shippings/manage.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/check_items.tpl' => 1,
    'tygh:views/companies/components/company_name.tpl' => 1,
    'tygh:common/select_usergroups.tpl' => 1,
    'tygh:common/select_popup.tpl' => 1,
    'tygh:common/context_menu_wrapper.tpl' => 1,
    'tygh:buttons/save.tpl' => 1,
    'tygh:common/tools.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_666003e8e1f024_51122265 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('position_short','name','delivery_time','weight_limit','usergroups','status','edit','view','position_short','name','delivery_time','weight_limit','usergroups','usergroup','tools','delete','status','no_data','add_shipping_method','manage_shippings'));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>

<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" id="shippings_form" name="shippings_form" class="<?php if (fn_check_form_permissions('')) {?> cm-hide-inputs<?php }?>">

<?php $_smarty_tpl->_assignInScope('shipping_statuses', fn_get_default_statuses('',false));
$_smarty_tpl->_assignInScope('has_permission', fn_check_permissions("shippings","update","admin","POST"));
$_smarty_tpl->_assignInScope('has_available_methods', empty($_smarty_tpl->tpl_vars['runtime']->value['company_id']) || in_array($_smarty_tpl->tpl_vars['runtime']->value['company_id'],array_column($_smarty_tpl->tpl_vars['shippings']->value,'company_id')));?>

<?php if ($_smarty_tpl->tpl_vars['shippings']->value) {?>
    <div id="shippings_content">
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "shippings_table", null, null);?>
            <div class="table-responsive-wrapper longtap-selection">
                <table width="100%" class="table table-middle table--relative table-responsive">
                <thead
                    data-ca-bulkedit-default-object="true"
                    data-ca-bulkedit-component="defaultObject"
                >
                <tr>
                    <th width="5%" class="mobile-hide">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('check_statuses'=>$_smarty_tpl->tpl_vars['has_permission']->value ? $_smarty_tpl->tpl_vars['shipping_statuses']->value : '','is_check_disabled'=>!$_smarty_tpl->tpl_vars['has_available_methods']->value), 0, false);
?>

                        <input type="checkbox"
                            class="bulkedit-toggler hide"
                            data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]" 
                            data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                        />
                    </th>
                    <th width="6%"><?php echo $_smarty_tpl->__("position_short");?>
</th>
                    <th><?php echo $_smarty_tpl->__("name");?>
</th>
                    <th width="10%"><?php echo $_smarty_tpl->__("delivery_time");?>
</th>
                    <th width="10%"><?php echo $_smarty_tpl->__("weight_limit");?>
&nbsp;(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['settings']->value['General']['weight_symbol'], ENT_QUOTES, 'UTF-8');?>
)</th>
                    <th width="10%"><?php echo $_smarty_tpl->__("usergroups");?>
</th>

                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"shippings:manage_header"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"shippings:manage_header"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"shippings:manage_header"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                    <th>&nbsp;</th>
                    <th width="10%" class="right"><?php echo $_smarty_tpl->__("status");?>
</th>
                </tr>
                </thead>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shippings']->value, 'shipping');
$_smarty_tpl->tpl_vars['shipping']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shipping']->value) {
$_smarty_tpl->tpl_vars['shipping']->do_else = false;
?>

                <?php $_smarty_tpl->_assignInScope('allow_save', fn_allow_save_object($_smarty_tpl->tpl_vars['shipping']->value,"shippings"));?>

                <?php if ($_smarty_tpl->tpl_vars['allow_save']->value) {?>
                    <?php $_smarty_tpl->_assignInScope('status_display', '');?>
                    <?php $_smarty_tpl->_assignInScope('link_text', $_smarty_tpl->__("edit"));?>
                <?php } else { ?>
                    <?php $_smarty_tpl->_assignInScope('status_display', "text");?>
                    <?php $_smarty_tpl->_assignInScope('link_text', $_smarty_tpl->__("view"));?>
                <?php }?>

                <tr class="cm-row-status-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['shipping']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 cm-longtap-target <?php if (!$_smarty_tpl->tpl_vars['allow_save']->value) {?>cm-hide-inputs<?php } else { ?>cm-no-hide-input<?php }?>"
                    <?php if ($_smarty_tpl->tpl_vars['has_permission']->value && $_smarty_tpl->tpl_vars['has_available_methods']->value) {?>
                        data-ca-longtap-action="setCheckBox"
                        data-ca-longtap-target="input.cm-item"
                        data-ca-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
"
                    <?php }?>  
                >
                    <input type="hidden" name="shipping_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
][tax_ids][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['tax_ids'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['tax_ids'], ENT_QUOTES, 'UTF-8');?>
" />
                    
                    <td width="5%" class="mobile-hide">
                        <input type="checkbox" name="shipping_ids[]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item cm-item-status-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['shipping']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 hide" />
                    </td>
                    <td width="6%" data-th="<?php echo $_smarty_tpl->__("position_short");?>
">
                        <input type="text" name="shipping_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
][position]" size="3" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['position'], ENT_QUOTES, 'UTF-8');?>
" class="input-micro input-hidden" /></td>
                    <td data-ct-shipping-name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['shipping'], ENT_QUOTES, 'UTF-8');?>
" data-th="<?php echo $_smarty_tpl->__("name");?>
">
                        <a href="<?php echo htmlspecialchars((string) fn_url("shippings.update?shipping_id=".((string)$_smarty_tpl->tpl_vars['shipping']->value['shipping_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['shipping'], ENT_QUOTES, 'UTF-8');?>
</a>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:views/companies/components/company_name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object'=>$_smarty_tpl->tpl_vars['shipping']->value), 0, true);
?>
                    </td>
                    <td width="10%" data-th="<?php echo $_smarty_tpl->__("delivery_time");?>
">
                        <input type="text" name="shipping_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
][delivery_time]" size="20" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['delivery_time'], ENT_QUOTES, 'UTF-8');?>
" class="input-small input-hidden" /></td>
                    <td width="10%" class="nowrap" data-th="<?php echo $_smarty_tpl->__("weight_limit");?>
&nbsp;(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['settings']->value['General']['weight_symbol'], ENT_QUOTES, 'UTF-8');?>
)">
                        <input type="text" name="shipping_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
][min_weight]" size="4" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['min_weight'], ENT_QUOTES, 'UTF-8');?>
" class="input-mini input-hidden" />&nbsp;-&nbsp;<input type="text" name="shipping_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['shipping_id'], ENT_QUOTES, 'UTF-8');?>
][max_weight]" size="4" value="<?php if ($_smarty_tpl->tpl_vars['shipping']->value['max_weight'] != "0.00") {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipping']->value['max_weight'], ENT_QUOTES, 'UTF-8');
}?>" class="input-mini input-hidden right" /></td>
                    <td width="10%" class="nowrap" data-th="<?php echo $_smarty_tpl->__("usergroups");?>
">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_usergroups.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('select_mode'=>true,'title'=>$_smarty_tpl->__("usergroup"),'id'=>"ship_data_".((string)$_smarty_tpl->tpl_vars['shipping']->value['shipping_id']),'name'=>"shipping_data[".((string)$_smarty_tpl->tpl_vars['shipping']->value['shipping_id'])."][usergroup_ids]",'usergroups'=>$_smarty_tpl->tpl_vars['usergroups']->value,'usergroup_ids'=>$_smarty_tpl->tpl_vars['shipping']->value['usergroup_ids'],'input_extra'=>''), 0, true);
?>
                    </td>

                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"shippings:manage_data"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"shippings:manage_data"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"shippings:manage_data"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                    <td class="nowrap" data-th="<?php echo $_smarty_tpl->__("tools");?>
">
                        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"shippings:list_extra_links"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"shippings:list_extra_links"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->tpl_vars['link_text']->value,'href'=>"shippings.update?shipping_id=".((string)$_smarty_tpl->tpl_vars['shipping']->value['shipping_id'])), true);?>
</li>
                                <?php if ($_smarty_tpl->tpl_vars['allow_save']->value) {?>
                                    <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("delete"),'class'=>"cm-confirm",'href'=>"shippings.delete?shipping_id=".((string)$_smarty_tpl->tpl_vars['shipping']->value['shipping_id']),'method'=>"POST"), true);?>
</li>
                                <?php }?>
                            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"shippings:list_extra_links"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                        <div class="hidden-tools">
                            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>

                        </div>
                    </td>
                    <td width="10%" class="right" data-th="<?php echo $_smarty_tpl->__("status");?>
">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['shipping']->value['shipping_id'],'display'=>$_smarty_tpl->tpl_vars['status_display']->value,'status'=>$_smarty_tpl->tpl_vars['shipping']->value['status'],'hidden'=>'','object_id_name'=>"shipping_id",'table'=>"shippings"), 0, true);
?>
                    </td>
                </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </table>
            </div>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>"shippings_form",'object'=>"shippings",'items'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'shippings_table'),'has_permissions'=>$_smarty_tpl->tpl_vars['has_permission']->value), 0, false);
?>
    <!--shippings_content--></div>
<?php } else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>
</form>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"shippings:manage_tools_list"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"shippings:manage_tools_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"shippings:manage_tools_list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>


    <?php if ($_smarty_tpl->tpl_vars['shippings']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[shippings.m_update]",'but_role'=>"submit-button",'but_target_form'=>"shippings_form"), 0, false);
?>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "adv_buttons", null, null);?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tool_href'=>"shippings.add",'prefix'=>"top",'hide_tools'=>true,'link_text'=>'','title'=>$_smarty_tpl->__("add_shipping_method"),'icon'=>"icon-plus"), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("manage_shippings"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons'),'adv_buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'adv_buttons'),'select_languages'=>true,'select_storefront'=>true,'storefront_switcher_param_name'=>"storefront_id",'selected_storefront_id'=>$_smarty_tpl->tpl_vars['selected_storefront_id']->value), 0, false);
}
}
