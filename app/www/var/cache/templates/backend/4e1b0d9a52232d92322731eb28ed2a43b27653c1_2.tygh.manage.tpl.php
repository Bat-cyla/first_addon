<?php
/* Smarty version 4.1.1, created on 2024-05-31 15:51:34
  from '/app/www/design/backend/templates/addons/call_requests/views/call_requests/manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6659c7d6e79b16_93836274',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e1b0d9a52232d92322731eb28ed2a43b27653c1' => 
    array (
      0 => '/app/www/design/backend/templates/addons/call_requests/views/call_requests/manage.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/pagination.tpl' => 2,
    'tygh:common/check_items.tpl' => 1,
    'tygh:common/table_col_head.tpl' => 7,
    'tygh:views/companies/components/company_name.tpl' => 1,
    'tygh:common/select_popup.tpl' => 1,
    'tygh:common/price.tpl' => 1,
    'tygh:common/context_menu_wrapper.tpl' => 1,
    'tygh:buttons/save.tpl' => 1,
    'tygh:common/saved_search.tpl' => 1,
    'tygh:addons/call_requests/views/call_requests/components/requests_search_form.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_6659c7d6e79b16_93836274 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),));
\Tygh\Languages\Helper::preloadLangVars(array('call_requests.person_name_and_phone','status','call_requests.responsible','id','date','call_requests.person_name_and_phone','call_requests.no_name_specified','order','status','call_requests.responsible','delete','status','call_requests.requested_product','products_in_cart','call_requests.notes','call_requests.convenient_time','product','quantity','price','product','quantity','price','no_data','call_requests'));
echo smarty_function_script(array('src'=>"js/addons/call_requests/bulk_edit.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>

<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="manage_call_requests_form" class="form-horizontal form-edit cm-ajax" id="manage_call_requests_form">
<input type="hidden" name="result_ids" value="pagination_contents,tools_call_request_buttons" />

<?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('save_current_page'=>true,'save_current_url'=>true,'div_id'=>$_REQUEST['content_id']), 0, false);
?>

<?php $_smarty_tpl->_assignInScope('return_url', rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']));
$_smarty_tpl->_assignInScope('c_url', fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"));?>

<?php if ($_smarty_tpl->tpl_vars['call_requests']->value) {?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "call_requests_table", null, null);?>
        <div class="table-responsive-wrapper longtap-selection">
            <table width="100%" class="table table-middle table-responsive table--overflow-hidden">
            <thead
                    data-ca-bulkedit-default-object="true"
                    data-ca-bulkedit-component="defaultObject"
            >
                <tr>
                    <th class="left table__check-items-column">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('check_statuses'=>$_smarty_tpl->tpl_vars['call_request_statuses']->value,'meta'=>"table__check-items"), 0, false);
?>

                        <input type="checkbox"
                               class="bulkedit-toggler hide"
                               data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]"
                               data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                        />
                    </th>
                    <th width="15%">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"id"), 0, false);
?>
                    <th width="17%">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"date"), 0, true);
?>
                    </th>
                    <th width="23%">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"name",'text'=>$_smarty_tpl->__("call_requests.person_name_and_phone")), 0, true);
?>
                    </th>
                    <th width="20%">
                        <div class="th-text-overflow-wrapper">
                            <?php $_smarty_tpl->_subTemplateRender("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"order"), 0, true);
?>
                            <?php $_smarty_tpl->_subTemplateRender("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"order_status",'text'=>$_smarty_tpl->__("status")), 0, true);
?>
                        </div>
                    </th>
                    <th width="10%">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"user",'text'=>$_smarty_tpl->__("call_requests.responsible")), 0, true);
?>
                    </th>
                    <th>&nbsp;</th>
                    <th width="10%" class="right">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"status"), 0, true);
?>
                    </th>
                </tr>
            </thead>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['call_requests']->value, 'request');
$_smarty_tpl->tpl_vars['request']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['request']->value) {
$_smarty_tpl->tpl_vars['request']->do_else = false;
?>
                <tbody class="cm-row-item cm-row-status-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['request']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 cm-longtap-target"
                       data-ca-longtap-action="setCheckBox"
                       data-ca-longtap-target="input.cm-item"
                       data-ca-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['request']->value['request_id'], ENT_QUOTES, 'UTF-8');?>
"
                >
                    <tr>
                        <td class="left mobile-hide table__check-items-cell">
                            <input type="checkbox" name="request_ids[]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['request']->value['request_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item cm-item-status-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['request']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 hide" />
                        </td>
                        <td width="15%" class="table__first-column" data-th="<?php echo $_smarty_tpl->__("id");?>
">
                            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['request']->value['request_id'], ENT_QUOTES, 'UTF-8');?>

                            <?php $_smarty_tpl->_subTemplateRender("tygh:views/companies/components/company_name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object'=>$_smarty_tpl->tpl_vars['request']->value), 0, true);
?>
                        </td>
                        <td width="17%" data-th="<?php echo $_smarty_tpl->__("date");?>
"><?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['request']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>
</td>
                        <td width="23%" data-th="<?php echo $_smarty_tpl->__("call_requests.person_name_and_phone");?>
">
                            <?php if ($_smarty_tpl->tpl_vars['request']->value['name']) {?>
                                <strong><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['request']->value['name'], ENT_QUOTES, 'UTF-8');?>
</strong><br>
                            <?php } else { ?>
                                <div>
                                    <i><?php echo $_smarty_tpl->__("call_requests.no_name_specified");?>
</i>
                                </div>
                            <?php }?>
                            <span><bdi><a href="tel:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['request']->value['phone'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['request']->value['phone'], ENT_QUOTES, 'UTF-8');?>
</a></bdi></span>
                        </td>
                        <td width="20%" data-th="<?php echo $_smarty_tpl->__("order");?>
 / <?php echo $_smarty_tpl->__("status");?>
">
                            <div class="cr-table-status">
                                <div>
                                    <input type="text" name="call_requests[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['request']->value['request_id'], ENT_QUOTES, 'UTF-8');?>
][order_id]" size="3" value="<?php ob_start();
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['request']->value['order_id'], ENT_QUOTES, 'UTF-8');
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['request']->value['order_id'], ENT_QUOTES, 'UTF-8');
}?>" class="input-mini input-hidden right" />
                                </div>
                                <?php if ($_smarty_tpl->tpl_vars['request']->value['order_id']) {?>
                                    <div class="cr-table-order-status">
                                        <a href="<?php echo htmlspecialchars((string) fn_url("orders.details?order_id=".((string)$_smarty_tpl->tpl_vars['request']->value['order_id'])), ENT_QUOTES, 'UTF-8');?>
"
                                            title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order_statuses']->value[$_smarty_tpl->tpl_vars['request']->value['order_status']]['description'], ENT_QUOTES, 'UTF-8');?>
"
                                        >
                                            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order_statuses']->value[$_smarty_tpl->tpl_vars['request']->value['order_status']]['description'], ENT_QUOTES, 'UTF-8');?>

                                        </a>
                                    </div>
                                <?php }?>
                            </div>
                        </td>
                        <td width="10%" data-th="<?php echo $_smarty_tpl->__("call_requests.responsible");?>
">
                            <select name="call_requests[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['request']->value['request_id'], ENT_QUOTES, 'UTF-8');?>
][user_id]" class="input-medium input-hidden">
                                <option> -- </option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['responsibles']->value, 'name', false, 'user_id');
$_smarty_tpl->tpl_vars['name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user_id']->value => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->do_else = false;
?>
                                    <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['user_id']->value == $_smarty_tpl->tpl_vars['request']->value['user_id']) {?> selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </td>
                        <td class="nowrap">
                            <div class="hidden-tools">
                                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
                                    <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("delete"),'href'=>"call_requests.delete?request_id=".((string)$_smarty_tpl->tpl_vars['request']->value['request_id']),'class'=>"cm-confirm",'method'=>"POST"), true);?>
</li>
                                <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                                <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>

                            </div>
                        </td>
                        <td width="10%" data-th="<?php echo $_smarty_tpl->__("status");?>
" class="right nowrap">
                            <div id="call_requests_status_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['request']->value['request_id'], ENT_QUOTES, 'UTF-8');?>
">
                                <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('popup_additional_class'=>"dropleft",'id'=>$_smarty_tpl->tpl_vars['request']->value['request_id'],'status'=>$_smarty_tpl->tpl_vars['request']->value['status'],'update_controller'=>"call_requests",'items_status'=>$_smarty_tpl->tpl_vars['call_request_statuses']->value,'btn_meta'=>mb_strtolower("btn btn-info btn-small cr-btn-status-".((string)$_smarty_tpl->tpl_vars['request']->value['status']), 'UTF-8'),'extra'=>"&return_url=".((string)$_smarty_tpl->tpl_vars['return_url']->value),'st_result_ids'=>"call_requests_status_".((string)$_smarty_tpl->tpl_vars['request']->value['request_id'])), 0, true);
?>
                            <!--call_requests_status_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['request']->value['request_id'], ENT_QUOTES, 'UTF-8');?>
--></div>
                        </td>
                    </tr>
                    <tr class="cr-table-detail">
                        <td class="mobile-hide table__check-items-cell">&nbsp;</td>
                        <td class="table__first-column <?php if (!$_smarty_tpl->tpl_vars['request']->value['product_id'] && !$_smarty_tpl->tpl_vars['request']->value['cart_products']) {?>mobile-hide"<?php }?>" colspan="3" valign="top">
                            <?php if ($_smarty_tpl->tpl_vars['request']->value['product_id']) {?>
                                <div>
                                    <span><?php echo $_smarty_tpl->__("call_requests.requested_product");?>
:</span><br>
                                    <a href="<?php echo htmlspecialchars((string) fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['request']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['request']->value['product'], ENT_QUOTES, 'UTF-8');?>
</a>
                                </div>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['request']->value['cart_products']) {?>
                                <div>
                                    <button type="button"
                                        class="cm-combination cr-switch"
                                        id="sw_call_req_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['request']->value['request_id'], ENT_QUOTES, 'UTF-8');?>
"
                                    >
                                        <?php echo $_smarty_tpl->__("products_in_cart");?>

                                    </button>
                                    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-caret-down cm-combination",'id'=>"on_call_req_".((string)$_smarty_tpl->tpl_vars['request']->value['request_id'])),$_smarty_tpl);?>

                                    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-caret-up cm-combination hidden",'id'=>"off_call_req_".((string)$_smarty_tpl->tpl_vars['request']->value['request_id'])),$_smarty_tpl);?>

                                </div>
                            <?php }?>
                        </td>

                        <td colspan="3" valign="top" class="noborder--mobile cr-table-products-note">
                            <textarea name="call_requests[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['request']->value['request_id'], ENT_QUOTES, 'UTF-8');?>
][notes]" class="input-hidden" cols="20" rows="3" placeholder="<?php echo $_smarty_tpl->__("call_requests.notes");?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['request']->value['notes'], ENT_QUOTES, 'UTF-8');?>
</textarea>
                            <div class="cr-time">
                                <span><?php echo $_smarty_tpl->__("call_requests.convenient_time");?>
:</span>
                                <span><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['request']->value['time_from'] ?? null)===null||$tmp==='' ? "09:00" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</span> - <span><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['request']->value['time_to'] ?? null)===null||$tmp==='' ? "20:00" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</span>
                            </div>
                        </td>

                        <td class="mobile-hide">&nbsp;</td>
                    </tr>
                    <?php if ($_smarty_tpl->tpl_vars['request']->value['cart_products']) {?>
                        <tr id="call_req_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['request']->value['request_id'], ENT_QUOTES, 'UTF-8');?>
" class="hidden cr-table-products">
                            <td class="mobile-hide">&nbsp;</td>
                            <td colspan="6" class="cr-table-products__body">
                                <div class="table-responsive-wrapper">
                                    <table width="100%" class="table table-middle table-responsive table-rq-products">
                                        <thead>
                                            <tr>
                                                <th><?php echo $_smarty_tpl->__("product");?>
</th>
                                                <th class="nowrap center" width="10%"><?php echo $_smarty_tpl->__("quantity");?>
</th>
                                                <th class="right" width="20%"><?php echo $_smarty_tpl->__("price");?>
</th>
                                            </tr>
                                        </thead>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['request']->value['cart_products'], 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                                            <tr>
                                                <td data-th="<?php echo $_smarty_tpl->__("product");?>
">
                                                    <a href="<?php echo htmlspecialchars((string) fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product'], ENT_QUOTES, 'UTF-8');?>
</a>
                                                </td>
                                                <td data-th="<?php echo $_smarty_tpl->__("quantity");?>
" class="center"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['amount'], ENT_QUOTES, 'UTF-8');?>
</td>
                                                <td data-th="<?php echo $_smarty_tpl->__("price");?>
" class="right"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['product']->value['price']), 0, true);
?></td>
                                            </tr>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </table>
                                </div>
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                    <?php }?>
                </tbody>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>
        </div>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>"manage_call_requests_form",'object'=>"call_requests",'items'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'call_requests_table')), 0, false);
} else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['call_requests']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[call_requests.m_update]",'but_role'=>"submit-link",'but_target_form'=>"manage_call_requests_form"), 0, false);
?>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<div class="clearfix">
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('div_id'=>$_REQUEST['content_id']), 0, true);
?>
</div>

</form>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "sidebar", null, null);?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/saved_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('dispatch'=>"call_requests.manage",'view_type'=>"call_requests"), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/call_requests/views/call_requests/components/requests_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('dispatch'=>"call_requests.manage"), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("call_requests"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons'),'sidebar'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar'),'content_id'=>"call_request"), 0, false);
}
}
