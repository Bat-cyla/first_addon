<?php
/* Smarty version 4.1.1, created on 2024-05-15 09:40:09
  from '/app/www/design/backend/templates/views/shipments/manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_664458c9e655f4_41333465',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '876ec8b8e165721d63dae53d408db2e3aaa3bef0' => 
    array (
      0 => '/app/www/design/backend/templates/views/shipments/manage.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/pagination.tpl' => 2,
    'tygh:common/check_items.tpl' => 1,
    'tygh:common/table_col_head.tpl' => 6,
    'tygh:common/select_popup.tpl' => 1,
    'tygh:common/context_menu_wrapper.tpl' => 1,
    'tygh:common/saved_search.tpl' => 1,
    'tygh:views/shipments/components/shipments_search_form.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_664458c9e655f4_41333465 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('shipment_id','shipment_id','order_id','shipment_date','order_date','customer','tools','view','print_slip','delete','status','no_data','shipments','order'));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>

<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" id="shipments_form" name="manage_shipments_form">

<?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('save_current_page'=>true,'save_current_url'=>true), 0, false);
?>

<?php $_smarty_tpl->_assignInScope('c_url', fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"));?>

<?php if ($_smarty_tpl->tpl_vars['shipments']->value) {?>

<div id="shipments_content">
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "shipments_table", null, null);?>
        <div class="table-responsive-wrapper longtap-selection">
            <table width="100%" class="table table-middle table--relative table-responsive table--overflow-hidden">
            <thead data-ca-bulkedit-default-object="true">
            <tr>
                <th class="center mobile-hide table__check-items-column">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('check_statuses'=>$_smarty_tpl->tpl_vars['shipment_statuses']->value,'meta'=>"table__check-items"), 0, false);
?>

                    <input type="checkbox"
                        class="bulkedit-toggler hide"
                        data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]"
                        data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                    />
                </th>
                <th width="20%">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"id",'text'=>$_smarty_tpl->__("shipment_id")), 0, false);
?>
                </th>
                <th width="12%">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"order_id"), 0, true);
?>
                </th>
                <th width="14%">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"shipment_date"), 0, true);
?>
                </th>
                <th width="14%">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"order_date"), 0, true);
?>
                </th>
                <th width="22%">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"customer"), 0, true);
?>
                </th>
                <th width="8%">&nbsp;</th>
                <th width="10%" class="right">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"status"), 0, true);
?>
                </th>
            </tr>
            </thead>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shipments']->value, 'shipment');
$_smarty_tpl->tpl_vars['shipment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shipment']->value) {
$_smarty_tpl->tpl_vars['shipment']->do_else = false;
?>
            <tr class="cm-longtap-target cm-row-status-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['shipment']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
"
                data-ca-longtap-action="setCheckBox"
                data-ca-longtap-target="input.cm-item"
                data-ca-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipment']->value['shipment_id'], ENT_QUOTES, 'UTF-8');?>
"
                data-ca-bulkedit-dispatch-parameter="shipment_ids[]"
            >
                <td class="center mobile-hide table__check-items-cell">
                    <input type="checkbox" name="shipment_ids[]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipment']->value['shipment_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item cm-item-status-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['shipment']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 hide" />
                </td>
                <td width="20%" data-th="<?php echo $_smarty_tpl->__("shipment_id");?>
" class="table__first-column">
                    <a class="underlined" href="<?php echo htmlspecialchars((string) fn_url("shipments.details?shipment_id=".((string)$_smarty_tpl->tpl_vars['shipment']->value['shipment_id'])), ENT_QUOTES, 'UTF-8');?>
"><span>#<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipment']->value['shipment_id'], ENT_QUOTES, 'UTF-8');?>
</span></a>
                </td>
                <td width="12%" data-th="<?php echo $_smarty_tpl->__("order_id");?>
">
                    <a class="underlined" href="<?php echo htmlspecialchars((string) fn_url("orders.details?order_id=".((string)$_smarty_tpl->tpl_vars['shipment']->value['order_id'])), ENT_QUOTES, 'UTF-8');?>
"><span>#<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipment']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
</span></a>
                </td>
                <td width="14%" data-th="<?php echo $_smarty_tpl->__("shipment_date");?>
">
                    <?php if ($_smarty_tpl->tpl_vars['shipment']->value['shipment_timestamp']) {
echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['shipment']->value['shipment_timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');
} else { ?>--<?php }?>
                </td>
                <td width="14%" data-th="<?php echo $_smarty_tpl->__("order_date");?>
">
                    <?php if ($_smarty_tpl->tpl_vars['shipment']->value['order_timestamp']) {
echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['shipment']->value['order_timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');
} else { ?>--<?php }?>
                </td>
                <td width="22%" data-th="<?php echo $_smarty_tpl->__("customer");?>
">
                    <?php if ($_smarty_tpl->tpl_vars['shipment']->value['user_id']) {?><a href="<?php echo htmlspecialchars((string) fn_url("profiles.update?user_id=".((string)$_smarty_tpl->tpl_vars['shipment']->value['user_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php }
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipment']->value['s_lastname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipment']->value['s_firstname'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['shipment']->value['user_id']) {?></a><?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['shipment']->value['company']) {?><p class="muted nowrap"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shipment']->value['company'], ENT_QUOTES, 'UTF-8');?>
</p><?php }?>
                </td>
                <td width="8%" class="nowrap" data-th="<?php echo $_smarty_tpl->__("tools");?>
">

                    <div class="hidden-tools">
                        <?php $_smarty_tpl->_assignInScope('return_current_url', rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']));?>
                        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"shipments:list_extra_links"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"shipments:list_extra_links"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("view"),'href'=>"shipments.details?shipment_id=".((string)$_smarty_tpl->tpl_vars['shipment']->value['shipment_id'])), true);?>
</li>
                                <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("print_slip"),'class'=>"cm-new-window",'href'=>"shipments.packing_slip?shipment_ids[]=".((string)$_smarty_tpl->tpl_vars['shipment']->value['shipment_id'])), true);?>
</li>
                                <li class="divider"></li>
                                <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("delete"),'class'=>"cm-confirm",'href'=>"shipments.delete?shipment_ids[]=".((string)$_smarty_tpl->tpl_vars['shipment']->value['shipment_id'])."&redirect_url=".((string)$_smarty_tpl->tpl_vars['return_current_url']->value),'method'=>"POST"), true);?>
</li>
                            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"shipments:list_extra_links"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>

                    </div>

                </td>
                <td width="10%" class="right" data-th="<?php echo $_smarty_tpl->__("status");?>
">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['shipment']->value['shipment_id'],'status'=>$_smarty_tpl->tpl_vars['shipment']->value['status'],'items_status'=>$_smarty_tpl->tpl_vars['shipment_statuses']->value,'table'=>"shipments",'object_id_name'=>"shipment_id",'popup_additional_class'=>"dropleft"), 0, true);
?>
                </td>

            </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>
        </div>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>"manage_shipments_form",'object'=>"shipments",'items'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'shipments_table')), 0, false);
?>
<!--shipments_content--></div>
<?php } else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</form>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"shipments:list_tools"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"shipments:list_tools"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"shipments:list_tools"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list'))) {?>
        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>

    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "sidebar", null, null);?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/saved_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('dispatch'=>"shipments.manage",'view_type'=>"shipments"), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:views/shipments/components/shipments_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('dispatch'=>"shipments.manage"), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "title", null, null);?>
    <?php echo $_smarty_tpl->__("shipments");
if ($_REQUEST['order_id']) {?>&nbsp;(<?php echo $_smarty_tpl->__("order");?>
&nbsp;#<?php echo htmlspecialchars((string) $_REQUEST['order_id'], ENT_QUOTES, 'UTF-8');?>
)<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'title'),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'sidebar'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar'),'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons')), 0, false);
}
}
