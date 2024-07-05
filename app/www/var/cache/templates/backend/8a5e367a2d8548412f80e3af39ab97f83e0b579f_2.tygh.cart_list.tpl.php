<?php
/* Smarty version 4.1.1, created on 2024-06-27 15:47:38
  from '/app/www/design/backend/templates/views/cart/cart_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_667d5f6a17c726_51660530',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a5e367a2d8548412f80e3af39ab97f83e0b579f' => 
    array (
      0 => '/app/www/design/backend/templates/views/cart/cart_list.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/pagination.tpl' => 2,
    'tygh:common/check_items.tpl' => 1,
    'tygh:common/table_col_head.tpl' => 4,
    'tygh:views/companies/components/company_name.tpl' => 1,
    'tygh:buttons/button.tpl' => 2,
    'tygh:common/price.tpl' => 3,
    'tygh:common/context_menu_wrapper.tpl' => 1,
    'tygh:common/saved_search.tpl' => 1,
    'tygh:views/cart/components/carts_search_form.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_667d5f6a17c726_51660530 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
\Tygh\Languages\Helper::preloadLangVars(array('expand_collapse_list','expand_collapse_list','expand_collapse_list','expand_collapse_list','cart','total','customer','expand_sublist_of_items','expand_sublist_of_items','collapse_sublist_of_items','collapse_sublist_of_items','expand_sublist_of_items','expand_sublist_of_items','expand_sublist_of_items','expand_sublist_of_items','collapse_sublist_of_items','collapse_sublist_of_items','unregistered_customer_short','date','cart','n_products','order','tools','delete','add_as_order','add_as_order','total','user_info','email','phone','first_name','last_name','ip_address','billing_address','billing_shipping_address','first_name','last_name','phone','address','address_2','city','state','country','zip_postal_code','shipping_address','first_name','last_name','phone','address','address_2','city','state','country','zip_postal_code','user_info','customer','unregistered_customer_short','email','phone','first_name','last_name','ip_address','product','quantity','price','product','deleted_product','quantity','price','total','total','quantity','subtotal','no_data','users_carts'));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>

<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" target="" name="carts_list_form">

<?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('save_current_url'=>true), 0, false);
?>

<?php $_smarty_tpl->_assignInScope('c_url', fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"));
$_smarty_tpl->_assignInScope('has_permission_update', fn_check_permissions("cart","delete","admin","POST"));?>

<?php if ($_smarty_tpl->tpl_vars['carts_list']->value) {?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "carts_table", null, null);?>
        <div class="table-responsive-wrapper longtap-selection">
            <table class="table table-sort table-middle table--relative table-responsive table--overflow-hidden table--cart">
            <thead
                data-ca-bulkedit-default-object="true"
                data-ca-bulkedit-component="defaultObject"
            >
                <tr>
                    <th class="mobile-hide table__check-items-column">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('is_check_all_shown'=>true,'is_check_disabled'=>!$_smarty_tpl->tpl_vars['has_permission_update']->value,'meta'=>"table__check-items"), 0, false);
?>

                        <input type="checkbox"
                            class="bulkedit-toggler hide"
                            data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]"
                            data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                        />
                    </th>
                    <th width="40%">
                        <div class="btn-expand-wrapper">
                            <span id="off_carts" alt="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" class="hidden hand cm-combinations-carts btn-expand btn-expand--header"/><span class="icon-caret-down"></span></span>
                            <span id="on_carts" alt="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" title="<?php echo $_smarty_tpl->__("expand_collapse_list");?>
" class="cm-combinations-carts btn-expand btn-expand--header"><span class="icon-caret-right"></span></span>
                        </div>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"customer"), 0, false);
?>
                    </th>
                    <th width="14%">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"date"), 0, true);
?>
                    <th width="11%">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>$_smarty_tpl->__("cart")), 0, true);
?>
                    </th>
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"cart:items_list_header"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"cart:items_list_header"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"cart:items_list_header"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <th width="22%" class="mobile-hide">&nbsp;</th>
                    <th width="13%" class="right">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>$_smarty_tpl->__("total")), 0, true);
?>
                    </th>
                </tr>
            </thead>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['carts_list']->value, 'customer');
$_smarty_tpl->tpl_vars['customer']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['customer']->value) {
$_smarty_tpl->tpl_vars['customer']->do_else = false;
?>
            <tr
                <?php if ($_smarty_tpl->tpl_vars['has_permission_update']->value) {?>
                    data-ca-longtap-action="setCheckBox"
                    data-ca-longtap-target="input.cm-item"
                    data-ca-id="<?php echo htmlspecialchars((string) !fn_allowed_for("ULTIMATE") && $_smarty_tpl->tpl_vars['customer']->value['storefront_id'] ? ($_smarty_tpl->tpl_vars['customer']->value['storefront_id']) : ($_smarty_tpl->tpl_vars['customer']->value['user_id']), ENT_QUOTES, 'UTF-8');?>
"
                <?php }?>
            >
                <?php $_smarty_tpl->_assignInScope('user_data', $_smarty_tpl->tpl_vars['customer']->value['user_data']);?>
                <?php if (!$_smarty_tpl->tpl_vars['user_data']->value['s_country_descr'] && $_smarty_tpl->tpl_vars['countries']->value[$_smarty_tpl->tpl_vars['user_data']->value['s_country']]) {?>
                    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['user_data']) ? $_smarty_tpl->tpl_vars['user_data']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['s_country_descr'] = $_smarty_tpl->tpl_vars['countries']->value[$_smarty_tpl->tpl_vars['user_data']->value['s_country']];
$_smarty_tpl->_assignInScope('user_data', $_tmp_array);?>
                <?php }?>
                <?php if (!$_smarty_tpl->tpl_vars['user_data']->value['s_state_descr']) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['user_data']->value['s_country']], 'state');
$_smarty_tpl->tpl_vars['state']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['state']->value) {
$_smarty_tpl->tpl_vars['state']->do_else = false;
?>
                        <?php if ($_smarty_tpl->tpl_vars['state']->value['code'] === $_smarty_tpl->tpl_vars['user_data']->value['s_state']) {?>
                            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['user_data']) ? $_smarty_tpl->tpl_vars['user_data']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['s_state_descr'] = $_smarty_tpl->tpl_vars['state']->value['state'];
$_smarty_tpl->_assignInScope('user_data', $_tmp_array);?>
                            <?php break 1;?>
                        <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>
                <td class="left mobile-hide table__check-items-cell">
                    <?php if (fn_allowed_for("ULTIMATE")) {?>
                        <input type="checkbox" name="user_ids[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['customer']->value['company_id'], ENT_QUOTES, 'UTF-8');?>
][]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['customer']->value['user_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item hide" />
                    <?php }?>
                    <?php if (!fn_allowed_for("ULTIMATE")) {?>
                        <input type="checkbox" name="user_ids[]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['customer']->value['user_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item hide" />
                        <?php if ($_smarty_tpl->tpl_vars['customer']->value['storefront_id']) {?>
                            <input type="hidden" name="storefront_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['customer']->value['storefront_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item" />
                        <?php }?>
                    <?php }?>
                </td>
                <td width="40%" data-th="<?php echo $_smarty_tpl->__("customer");?>
">
                    <div class="cart__customer">
                        <?php if (fn_allowed_for("ULTIMATE")) {?>
                            <a href="#" alt="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" title="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" id="on_user_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['customer']->value['user_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['customer']->value['company_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-combination-carts btn-expand" onclick="Tygh.$.ceAjax('request', '<?php echo fn_url("cart.cart_list?user_id=".((string)$_smarty_tpl->tpl_vars['customer']->value['user_id'])."&c_company_id=".((string)$_smarty_tpl->tpl_vars['customer']->value['company_id']));?>
', <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>
result_ids: 'cart_products_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['customer']->value['user_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['customer']->value['company_id'], ENT_QUOTES, 'UTF-8');?>
,wishlist_products_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['customer']->value['user_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['customer']->value['company_id'], ENT_QUOTES, 'UTF-8');?>
', caching: true<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
);"><span class="icon-caret-right"></span></a>
                            <a href="#" alt="<?php echo $_smarty_tpl->__("collapse_sublist_of_items");?>
" title="<?php echo $_smarty_tpl->__("collapse_sublist_of_items");?>
" id="off_user_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['customer']->value['user_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['customer']->value['company_id'], ENT_QUOTES, 'UTF-8');?>
" class="hidden cm-combination-carts btn-expand"><span class="icon-caret-down"></span></a>
                        <?php }?>

                        <?php if (!fn_allowed_for("ULTIMATE")) {?>
                            <?php if ($_smarty_tpl->tpl_vars['customer']->value['storefront_id']) {?>
                                <a href="#" alt="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" title="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" id="on_user_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['customer']->value['user_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-combination-carts btn-expand" onclick="Tygh.$.ceAjax('request', '<?php echo fn_url("cart.cart_list?user_id=".((string)$_smarty_tpl->tpl_vars['customer']->value['user_id'])."&storefront_id=".((string)$_smarty_tpl->tpl_vars['customer']->value['storefront_id']));?>
', <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>
result_ids: 'cart_products_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['customer']->value['user_id'], ENT_QUOTES, 'UTF-8');?>
,wishlist_products_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['customer']->value['user_id'], ENT_QUOTES, 'UTF-8');?>
', caching: true<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
);"><span class="icon-caret-right"></span></a>
                            <?php } else { ?>
                                <a href="#" alt="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" title="<?php echo $_smarty_tpl->__("expand_sublist_of_items");?>
" id="on_user_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['customer']->value['user_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-combination-carts btn-expand" onclick="Tygh.$.ceAjax('request', '<?php echo fn_url("cart.cart_list?user_id=".((string)$_smarty_tpl->tpl_vars['customer']->value['user_id']));?>
', <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>
result_ids: 'cart_products_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['customer']->value['user_id'], ENT_QUOTES, 'UTF-8');?>
,wishlist_products_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['customer']->value['user_id'], ENT_QUOTES, 'UTF-8');?>
', caching: true<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
);"><span class="icon-caret-right"></span></a>
                            <?php }?>
                            <a href="#" alt="<?php echo $_smarty_tpl->__("collapse_sublist_of_items");?>
" title="<?php echo $_smarty_tpl->__("collapse_sublist_of_items");?>
" id="off_user_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['customer']->value['user_id'], ENT_QUOTES, 'UTF-8');?>
" class="hidden cm-combination-carts btn-expand"><span class="icon-caret-down"></span></a>
                        <?php }?>

                        <div class="cart__customer-data-wrapper">
                            <div class="cart__customer-data">
                                <?php if ($_smarty_tpl->tpl_vars['user_data']->value['email']) {?>
                                    <a href="mailto:<?php echo htmlspecialchars((string) rawurlencode((string)$_smarty_tpl->tpl_vars['user_data']->value['email']), ENT_QUOTES, 'UTF-8');?>
" class="cart__customer-email">@</a>
                                    <?php if ($_smarty_tpl->tpl_vars['user_data']->value['user_id']) {?><a href="<?php echo htmlspecialchars((string) fn_url("profiles.update?user_id=".((string)$_smarty_tpl->tpl_vars['customer']->value['user_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php }?>
                                        <span class="cart__customer-name">
                                            <?php if ($_smarty_tpl->tpl_vars['customer']->value['firstname'] || $_smarty_tpl->tpl_vars['customer']->value['lastname']) {?>
                                                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['customer']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['customer']->value['lastname'], ENT_QUOTES, 'UTF-8');?>

                                            <?php } else { ?>
                                                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['email'], ENT_QUOTES, 'UTF-8');?>

                                            <?php }?>
                                        </span>
                                    <?php if ($_smarty_tpl->tpl_vars['user_data']->value['user_id']) {?></a><?php }?>
                                <?php } else { ?>
                                    <?php if ($_smarty_tpl->tpl_vars['customer']->value['email']) {?><a href="mailto:<?php echo htmlspecialchars((string) rawurlencode((string)$_smarty_tpl->tpl_vars['customer']->value['email']), ENT_QUOTES, 'UTF-8');?>
" class="cart__customer-email">@</a><?php }?>
                                    <span class="cart__customer-name">
                                        <?php if ($_smarty_tpl->tpl_vars['customer']->value['lastname'] || $_smarty_tpl->tpl_vars['customer']->value['firstname']) {?>
                                                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['customer']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['customer']->value['lastname'], ENT_QUOTES, 'UTF-8');?>

                                        <?php } else { ?>
                                            <?php echo $_smarty_tpl->__("unregistered_customer_short");?>

                                        <?php }?>
                                    </span>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['user_data']->value['s_state_descr'] || $_smarty_tpl->tpl_vars['user_data']->value['s_country']) {?>
                                    <span class="muted"><?php echo htmlspecialchars((string) smarty_modifier_truncate($_smarty_tpl->tpl_vars['user_data']->value['s_state_descr'],25,"...",true), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['user_data']->value['s_state_descr']) {?>, <?php }
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['s_country'], ENT_QUOTES, 'UTF-8');?>
</span>
                                <?php } else { ?>
                                <?php }?>
                            </div>
                            <?php if ($_smarty_tpl->tpl_vars['customer']->value['phone']) {?>
                                <div class="cart__customer-phone">
                                    <a href="tel:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['customer']->value['phone'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['customer']->value['phone'], ENT_QUOTES, 'UTF-8');?>
</a>
                                </div>
                            <?php }?>

                            <?php $_smarty_tpl->_subTemplateRender("tygh:views/companies/components/company_name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object'=>$_smarty_tpl->tpl_vars['customer']->value), 0, true);
?>

                        </div>
                    </div>
                </td>
                <td width="14%" data-th="<?php echo $_smarty_tpl->__("date");?>
">
                    <?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['customer']->value['date'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>

                </td>
                <td width="11%" data-th="<?php echo $_smarty_tpl->__("cart");?>
">
                    <?php echo $_smarty_tpl->__("n_products",array((($tmp = $_smarty_tpl->tpl_vars['customer']->value['cart_products'] ?? null)===null||$tmp==='' ? "0" ?? null : $tmp)));?>

                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"cart:cart_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"cart:cart_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php if ($_smarty_tpl->tpl_vars['customer']->value['order_id']) {?>
                        <div><small><a href="<?php echo htmlspecialchars((string) fn_url("orders.details?order_id=".((string)$_smarty_tpl->tpl_vars['customer']->value['order_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("order");?>
 <bdi>#<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['customer']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
</bdi></a></small></div>
                        <?php }?>
                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"cart:cart_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                </td>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"cart:items_list"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"cart:items_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"cart:items_list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <td width="22%" class="center" data-th="<?php echo $_smarty_tpl->__("tools");?>
">
                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_items", null, null);?>
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"cart:list_extra_links"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"cart:list_extra_links"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php if (fn_check_view_permissions("cart.delete")) {?>
                                <?php $_smarty_tpl->_assignInScope('current_redirect_url', rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']));?>
                                <?php if ($_smarty_tpl->tpl_vars['customer']->value['storefront_id']) {?>
                                    <?php $_smarty_tpl->_assignInScope('delete_url', "cart.delete?user_id=".((string)$_smarty_tpl->tpl_vars['customer']->value['user_id'])."&redirect_url=".((string)$_smarty_tpl->tpl_vars['current_redirect_url']->value)."&storefront_id=".((string)$_smarty_tpl->tpl_vars['customer']->value['storefront_id']));?>
                                <?php } else { ?>
                                    <?php $_smarty_tpl->_assignInScope('delete_url', "cart.delete?user_id=".((string)$_smarty_tpl->tpl_vars['customer']->value['user_id'])."&redirect_url=".((string)$_smarty_tpl->tpl_vars['current_redirect_url']->value));?>
                                <?php }?>
                                <?php if (fn_allowed_for("ULTIMATE")) {?>
                                    <?php $_smarty_tpl->_assignInScope('delete_url', ((string)$_smarty_tpl->tpl_vars['delete_url']->value)."&company_id=".((string)$_smarty_tpl->tpl_vars['customer']->value['company_id']));?>
                                <?php }?>
                                <li><?php ob_start();
echo $_smarty_tpl->__("delete");
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'href'=>$_smarty_tpl->tpl_vars['delete_url']->value,'class'=>"cm-confirm",'text'=>$_prefixVariable1,'method'=>"POST"), true);?>
</li>
                            <?php }?>
                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"cart:list_extra_links"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                    <div class="hidden-tools">
                        <div class="btn-group">
                            <?php if ($_smarty_tpl->tpl_vars['customer']->value['storefront_id']) {?>
                                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_role'=>"action",'but_text'=>$_smarty_tpl->__("add_as_order"),'but_href'=>"cart.convert_to_order?user_id=".((string)$_smarty_tpl->tpl_vars['customer']->value['user_id'])."&storefront_id=".((string)$_smarty_tpl->tpl_vars['customer']->value['storefront_id']),'but_meta'=>"cm-post"), 0, true);
?>
                            <?php } else { ?>
                                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_role'=>"action",'but_text'=>$_smarty_tpl->__("add_as_order"),'but_href'=>"cart.convert_to_order?user_id=".((string)$_smarty_tpl->tpl_vars['customer']->value['user_id']),'but_meta'=>"cm-post"), 0, true);
?>
                            <?php }?>
                            <?php if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_items'))) {?>
                                <button class="btn dropdown-toggle" data-toggle="dropdown">
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_items');?>

                                </ul>
                            <?php }?>
                        </div>
                    </div>
                </td>
                <td width="13%" class="right" data-th="<?php echo $_smarty_tpl->__("total");?>
">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['customer']->value['total']), 0, true);
?>
                </td>
            </tr>
            <?php $_smarty_tpl->_assignInScope('user_js_id', "user_".((string)$_smarty_tpl->tpl_vars['customer']->value['user_id']));?>
            <?php if (fn_allowed_for("ULTIMATE")) {?>
                <?php $_smarty_tpl->_assignInScope('user_js_id', ((string)$_smarty_tpl->tpl_vars['user_js_id']->value)."_".((string)$_smarty_tpl->tpl_vars['customer']->value['company_id']));?>
            <?php }?>
            <tbody id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_js_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="hidden row-more">
                <tr class="no-border">
                    <td colspan="100%" class="row-more-body top row-gray cart__detailed-wrapper">
                        <div class="cart__detailed">

                        <?php if ($_smarty_tpl->tpl_vars['user_data']->value) {?>
                            <?php $_smarty_tpl->_assignInScope('user_info_js_id', "user_info_".((string)$_smarty_tpl->tpl_vars['customer']->value['user_id']));?>
                            <?php if (fn_allowed_for("ULTIMATE")) {?>
                                <?php $_smarty_tpl->_assignInScope('user_info_js_id', ((string)$_smarty_tpl->tpl_vars['user_info_js_id']->value)."_".((string)$_smarty_tpl->tpl_vars['customer']->value['company_id']));?>
                            <?php }?>
                            <div class="cart__detailed-user">
                                <div id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_info_js_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                                    <h4><?php echo $_smarty_tpl->__("user_info");?>
</h4>
                                    <dl>
                                        <?php if ($_smarty_tpl->tpl_vars['user_data']->value['email']) {?>
                                            <dt><?php echo $_smarty_tpl->__("email");?>
</dt>
                                            <dd><a href="mailto:<?php echo htmlspecialchars((string) rawurlencode((string)$_smarty_tpl->tpl_vars['user_data']->value['email']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['email'], ENT_QUOTES, 'UTF-8');?>
</a></dd>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['customer']->value['phone']) {?>
                                            <dt><?php echo $_smarty_tpl->__("phone");?>
</dt>
                                            <dd><a href="tel:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['customer']->value['phone'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['customer']->value['phone'], ENT_QUOTES, 'UTF-8');?>
</a></dd>
                                        <?php }?>
                                        <dt><?php echo $_smarty_tpl->__("first_name");?>
</dt>
                                        <dd><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
</dd>
                                        <dt><?php echo $_smarty_tpl->__("last_name");?>
</dt>
                                        <dd><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['lastname'], ENT_QUOTES, 'UTF-8');?>
</dd>
                                        <?php if ($_smarty_tpl->tpl_vars['customer']->value['ip_address']) {?>
                                            <dt><?php echo $_smarty_tpl->__("ip_address");?>
</dt>
                                            <dd><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['customer']->value['ip_address'], ENT_QUOTES, 'UTF-8');?>
</dd>
                                        <?php }?>
                                    </dl>

                                    <?php if ($_smarty_tpl->tpl_vars['user_data']->value['ship_to_another']) {?>
                                        <h4><?php echo $_smarty_tpl->__("billing_address");?>
</h4>
                                    <?php } else { ?>
                                        <h4><?php echo $_smarty_tpl->__("billing_shipping_address");?>
</h4>
                                    <?php }?>
                                    <dl>
                                        <dt><?php echo $_smarty_tpl->__("first_name");?>
</dt>
                                        <dd><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['s_firstname'], ENT_QUOTES, 'UTF-8');?>
</dd>
                                        <dt><?php echo $_smarty_tpl->__("last_name");?>
</dt>
                                        <dd><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['s_lastname'], ENT_QUOTES, 'UTF-8');?>
</dd>
                                        <?php if ($_smarty_tpl->tpl_vars['user_data']->value['s_phone']) {?>
                                            <dt><?php echo $_smarty_tpl->__("phone");?>
</dt>
                                            <dd><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['s_phone'], ENT_QUOTES, 'UTF-8');?>
</dd>
                                        <?php }?>
                                        <dt><?php echo $_smarty_tpl->__("address");?>
</dt>
                                        <dd><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['s_address'], ENT_QUOTES, 'UTF-8');?>
</dd>
                                        <?php if ($_smarty_tpl->tpl_vars['user_data']->value['s_address_2']) {?>
                                            <dt><?php echo $_smarty_tpl->__("address_2");?>
</dt>
                                            <dd><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['s_address_2'], ENT_QUOTES, 'UTF-8');?>
</dd>
                                        <?php }?>
                                        <dt><?php echo $_smarty_tpl->__("city");?>
</dt>
                                        <dd><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['s_city'], ENT_QUOTES, 'UTF-8');?>
</dd>
                                        <dt><?php echo $_smarty_tpl->__("state");?>
</dt>
                                        <dd><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['s_state_descr'], ENT_QUOTES, 'UTF-8');?>
</dd>
                                        <dt><?php echo $_smarty_tpl->__("country");?>
</dt>
                                        <dd><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['s_country_descr'], ENT_QUOTES, 'UTF-8');?>
</dd>
                                        <dt><?php echo $_smarty_tpl->__("zip_postal_code");?>
</dt>
                                        <dd><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['s_zipcode'], ENT_QUOTES, 'UTF-8');?>
</dd>
                                    </dl>

                                    <?php if ($_smarty_tpl->tpl_vars['user_data']->value['ship_to_another']) {?>
                                    <h4><?php echo $_smarty_tpl->__("shipping_address");?>
</h4>
                                    <dl>
                                        <dt><?php echo $_smarty_tpl->__("first_name");?>
</dt>
                                        <dd><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['s_firstname'], ENT_QUOTES, 'UTF-8');?>
</dd>
                                        <dt><?php echo $_smarty_tpl->__("last_name");?>
</dt>
                                        <dd><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['s_lastname'], ENT_QUOTES, 'UTF-8');?>
</dd>
                                        <?php if ($_smarty_tpl->tpl_vars['user_data']->value['s_phone']) {?>
                                            <dt><?php echo $_smarty_tpl->__("phone");?>
</dt>
                                            <dd><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['s_phone'], ENT_QUOTES, 'UTF-8');?>
</dd>
                                        <?php }?>
                                        <dt><?php echo $_smarty_tpl->__("address");?>
</dt>
                                        <dd><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['s_address'], ENT_QUOTES, 'UTF-8');?>
</dd>
                                        <?php if ($_smarty_tpl->tpl_vars['user_data']->value['s_address_2']) {?>
                                            <dt><?php echo $_smarty_tpl->__("address_2");?>
</dt>
                                            <dd><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['s_address_2'], ENT_QUOTES, 'UTF-8');?>
</dd>
                                        <?php }?>
                                        <dt><?php echo $_smarty_tpl->__("city");?>
</dt>
                                        <dd><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['s_city'], ENT_QUOTES, 'UTF-8');?>
</dd>
                                        <dt><?php echo $_smarty_tpl->__("state");?>
</dt>
                                        <dd><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['s_state_descr'], ENT_QUOTES, 'UTF-8');?>
</dd>
                                        <dt><?php echo $_smarty_tpl->__("country");?>
</dt>
                                        <dd><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['s_country_descr'], ENT_QUOTES, 'UTF-8');?>
</dd>
                                        <dt><?php echo $_smarty_tpl->__("zip_postal_code");?>
</dt>
                                        <dd><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['s_zipcode'], ENT_QUOTES, 'UTF-8');?>
</dd>
                                    </dl>
                                    <?php }?>
                                <!--<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_info_js_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
                                </div>
                        <?php } else { ?>
                            <?php $_smarty_tpl->_assignInScope('user_info_js_id', "user_info_".((string)$_smarty_tpl->tpl_vars['customer']->value['user_id']));?>
                            <?php if (fn_allowed_for("ULTIMATE")) {?>
                                <?php $_smarty_tpl->_assignInScope('user_info_js_id', ((string)$_smarty_tpl->tpl_vars['user_info_js_id']->value)."_".((string)$_smarty_tpl->tpl_vars['customer']->value['company_id']));?>
                            <?php }?>
                            <div class="cart__detailed-user">
                                <div id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_info_js_id']->value, ENT_QUOTES, 'UTF-8');?>
">

                                    <h4><?php echo $_smarty_tpl->__("user_info");?>
</h4>
                                    <dl>
                                        <?php if (!$_smarty_tpl->tpl_vars['customer']->value['lastname'] && !$_smarty_tpl->tpl_vars['customer']->value['firstname']) {?>
                                            <dt><?php echo $_smarty_tpl->__("customer");?>
</dt>
                                            <dd><?php echo $_smarty_tpl->__("unregistered_customer_short");?>
</dd>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['customer']->value['email']) {?>
                                            <dt><?php echo $_smarty_tpl->__("email");?>
</dt>
                                            <dd><a href="mailto:<?php echo htmlspecialchars((string) rawurlencode((string)$_smarty_tpl->tpl_vars['customer']->value['email']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['customer']->value['email'], ENT_QUOTES, 'UTF-8');?>
</a></dd>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['customer']->value['phone']) {?>
                                            <dt><?php echo $_smarty_tpl->__("phone");?>
</dt>
                                            <dd><a href="tel:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['customer']->value['phone'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['customer']->value['phone'], ENT_QUOTES, 'UTF-8');?>
</a></dd>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['customer']->value['firstname']) {?>
                                            <dt><?php echo $_smarty_tpl->__("first_name");?>
</dt>
                                            <dd><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['customer']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
</dd>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['customer']->value['lastname']) {?>
                                            <dt><?php echo $_smarty_tpl->__("last_name");?>
</dt>
                                            <dd><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['customer']->value['lastname'], ENT_QUOTES, 'UTF-8');?>
</dd>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['customer']->value['ip_address']) {?>
                                            <dt><?php echo $_smarty_tpl->__("ip_address");?>
</dt>
                                            <dd><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['customer']->value['ip_address'], ENT_QUOTES, 'UTF-8');?>
</dd>
                                        <?php }?>
                                    </dl>
                                <!--<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_info_js_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
                            </div>
                        <?php }?>
                        <?php $_smarty_tpl->_assignInScope('cart_products_js_id', "cart_products_".((string)$_smarty_tpl->tpl_vars['customer']->value['user_id']));?>
                        <?php if (fn_allowed_for("ULTIMATE")) {?>
                            <?php $_smarty_tpl->_assignInScope('cart_products_js_id', ((string)$_smarty_tpl->tpl_vars['cart_products_js_id']->value)."_".((string)$_smarty_tpl->tpl_vars['customer']->value['company_id']));?>
                        <?php }?>
                        <div class="cart__detailed-products">
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"cart:products_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"cart:products_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <div id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart_products_js_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                            <?php if ($_smarty_tpl->tpl_vars['customer']->value['user_id'] == $_smarty_tpl->tpl_vars['sl_user_id']->value) {?>
                                <?php $_smarty_tpl->_assignInScope('show_price', true);?>
                                <?php if ($_smarty_tpl->tpl_vars['cart_products']->value) {?>
                                <div class="table-responsive-wrapper">
                                    <table class="table table-condensed table--relative table-responsive">
                                        <thead>
                                            <tr class="no-hover">
                                                <th><?php echo $_smarty_tpl->__("product");?>
</th>
                                                <th class="center nowrap"><?php echo $_smarty_tpl->__("quantity");?>
</th>
                                                <th class="right"><?php echo $_smarty_tpl->__("price");?>
</th>
                                            </tr>
                                        </thead>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart_products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"cart:product_row"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"cart:product_row"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                            <?php if (!$_smarty_tpl->tpl_vars['product']->value['extra']['extra']['parent']) {?>
                                                <tr>
                                                    <td data-th="<?php echo $_smarty_tpl->__("product");?>
" class="cart__detailed-products-name">
                                                    <?php if ($_smarty_tpl->tpl_vars['product']->value['item_type'] == "P") {?>
                                                        <?php if ($_smarty_tpl->tpl_vars['product']->value['product']) {?>
                                                        <a href="<?php echo htmlspecialchars((string) fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>
</a>

                                                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"cart:product_info"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"cart:product_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"cart:product_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                        <?php } else { ?>
                                                        <?php echo $_smarty_tpl->__("deleted_product");?>

                                                        <?php }?>
                                                    <?php }?>
                                                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"cart:products_list"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"cart:products_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"cart:products_list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                    </td>
                                                    <td data-th="<?php echo $_smarty_tpl->__("quantity");?>
" class="center"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['amount'], ENT_QUOTES, 'UTF-8');?>
</td>
                                                    <td data-th="<?php echo $_smarty_tpl->__("price");?>
" class="right"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['product']->value['price'],'span_id'=>"c_".((string)$_smarty_tpl->tpl_vars['customer']->value['user_id'])."_".((string)$_smarty_tpl->tpl_vars['product']->value['item_id'])), 0, true);
?></td>
                                                </tr>
                                            <?php }?>
                                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"cart:product_row"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        <tr>
                                            <td data-th="<?php echo $_smarty_tpl->__("total");?>
" class="right"><span class="mobile-hide"><?php echo $_smarty_tpl->__("total");?>
:</span></td>
                                            <td data-th="<?php echo $_smarty_tpl->__("quantity");?>
" class="center"><span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['customer']->value['cart_products'], ENT_QUOTES, 'UTF-8');?>
</span></td>
                                            <td data-th="<?php echo $_smarty_tpl->__("subtotal");?>
" class="right"><span><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['customer']->value['total'],'span_id'=>"u_".((string)$_smarty_tpl->tpl_vars['customer']->value['user_id'])), 0, true);
?></span></td>
                                        </tr>
                                    </table>
                                </div>
                                <?php }?>
                            <?php }?>
                            <!--<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart_products_js_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"cart:products_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        </div>
                    </div>
                </td>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"cart:items_list_row"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"cart:items_list_row"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"cart:items_list_row"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            </tr>
            </tbody>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>
        </div>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>"carts_list_form",'object'=>"cart",'items'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'carts_table'),'has_permission'=>$_smarty_tpl->tpl_vars['has_permission_update']->value,'is_check_all_shown'=>true), 0, false);
} else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</form>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "sidebar", null, null);?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"cart:sidebar"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"cart:sidebar"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/saved_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('dispatch'=>"cart.cart_list",'view_type'=>"carts"), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:views/cart/components/carts_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('dispatch'=>"cart.cart_list"), 0, false);
?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"cart:sidebar"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("users_carts"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'sidebar'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar'),'select_storefront'=>true,'storefront_switcher_param_name'=>"storefront_id",'selected_storefront_id'=>$_smarty_tpl->tpl_vars['selected_storefront_id']->value), 0, false);
}
}
