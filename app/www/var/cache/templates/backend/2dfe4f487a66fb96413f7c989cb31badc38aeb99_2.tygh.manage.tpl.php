<?php
/* Smarty version 4.1.1, created on 2024-05-17 15:15:20
  from '/app/www/design/backend/templates/views/products/manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66474a588e0da7_74213756',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2dfe4f487a66fb96413f7c989cb31badc38aeb99' => 
    array (
      0 => '/app/www/design/backend/templates/views/products/manage.tpl',
      1 => 1715948022,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/pagination.tpl' => 2,
    'tygh:common/check_items.tpl' => 1,
    'tygh:common/table_col_head.tpl' => 8,
    'tygh:common/image.tpl' => 1,
    'tygh:views/companies/components/company_name.tpl' => 1,
    'tygh:buttons/update_for_all.tpl' => 1,
    'tygh:views/products/components/status_on_manage.tpl' => 1,
    'tygh:common/context_menu_wrapper.tpl' => 1,
    'tygh:views/products/components/products_select_fields.tpl' => 1,
    'tygh:buttons/button.tpl' => 1,
    'tygh:buttons/save.tpl' => 1,
    'tygh:common/tools.tpl' => 1,
    'tygh:common/popupbox.tpl' => 1,
    'tygh:common/saved_search.tpl' => 1,
    'tygh:views/products/components/products_search_form.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_66474a588e0da7_74213756 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.to_json.php','function'=>'smarty_modifier_to_json',),));
\Tygh\Languages\Helper::preloadLangVars(array('position_short','name','sku','price','list_price_short_2','list_price','purchased_qty','subtotal_sum','quantity','quantity_long','products_are_not_selectable_for_context_menu','name','price','list_price','purchased_qty','subtotal_sum','quantity','edit','delete','status','no_data','text_select_fields2edit_note','cancel','modify_selected','clone_selected','export_selected','global_update','bulk_product_addition','product_subscriptions','export_found_products','import_products','create_new_product','add_product','select_fields_to_edit','products'));
echo smarty_function_script(array('src'=>"js/tygh/backend/products_manage.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/backend/products_bulk_edit.js"),$_smarty_tpl);?>

<?php ob_start();
echo htmlspecialchars((string) rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']), ENT_QUOTES, 'UTF-8');
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('delete_redirect_url', (($tmp = $_smarty_tpl->tpl_vars['delete_redirect_url']->value ?? null)===null||$tmp==='' ? $_prefixVariable1 ?? null : $tmp));?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>

<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="manage_products_form" id="manage_products_form" data-ca-main-content-selector="[data-ca-main-content]">
<input type="hidden" name="category_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['cid'], ENT_QUOTES, 'UTF-8');?>
" />

<?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('save_current_page'=>true,'save_current_url'=>true,'div_id'=>$_REQUEST['content_id']), 0, false);
?>

<?php $_smarty_tpl->_assignInScope('c_url', fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"));
$_smarty_tpl->_assignInScope('rev', (($tmp = $_REQUEST['content_id'] ?? null)===null||$tmp==='' ? "pagination_contents" ?? null : $tmp));
$_smarty_tpl->_assignInScope('has_available_products', empty($_smarty_tpl->tpl_vars['runtime']->value['company_id']) || in_array($_smarty_tpl->tpl_vars['runtime']->value['company_id'],array_column($_smarty_tpl->tpl_vars['products']->value,'company_id')));
$_smarty_tpl->_assignInScope('image_width', $_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_admin_mini_icon_width']);
$_smarty_tpl->_assignInScope('image_height', $_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_admin_mini_icon_height']);
$_smarty_tpl->_assignInScope('show_list_price_column', (($tmp = $_smarty_tpl->tpl_vars['show_list_price_column']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('product_add_button_as_dropdown', (($tmp = $_smarty_tpl->tpl_vars['product_add_button_as_dropdown']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>

<?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "products_table", null, null);?>

        <div class="table-responsive-wrapper longtap-selection">
            <table width="100%" class="table table-middle table--relative table-responsive table--overflow-hidden products-table" data-ca-main-content>
            <thead data-ca-bulkedit-default-object="true" data-target=".products-table" data-ca-bulkedit-component="defaultObject">
            <tr>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:manage_head"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:manage_head"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <th class="left mobile-hide table__check-items-column<?php if (!$_smarty_tpl->tpl_vars['has_available_products']->value) {?> table__check-items-column--disabled<?php }?>">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('check_statuses'=>fn_get_default_status_filters('',true),'is_check_disabled'=>!$_smarty_tpl->tpl_vars['has_select_permission']->value,'meta'=>"table__check-items"), 0, false);
?>

                    <input type="checkbox"
                        class="bulkedit-toggler hide"
                        data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]"
                        data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                    />
                </th>
                <th class="table__column-without-title"></th>
                <?php if ($_smarty_tpl->tpl_vars['search']->value['cid'] && $_smarty_tpl->tpl_vars['search']->value['subcats'] !== "Y") {?>
                <th width="7%" class="nowrap">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"position",'text'=>$_smarty_tpl->__("position_short")), 0, false);
?>
                </th>
                <?php }?>
                <th>
                    <div class="th-text-overflow th-text-overflow-wrapper">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"product",'text'=>$_smarty_tpl->__("name")), 0, true);
?>
                        <a class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ajax_class']->value, ENT_QUOTES, 'UTF-8');?>
 th-text-overflow <?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "code") {?>th-text-overflow--<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['sort_order_rev'], ENT_QUOTES, 'UTF-8');
}?>"
                            href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=code&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
"
                            data-ca-target-id=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>

                        >
                            <?php echo $_smarty_tpl->__("sku");?>

                        </a>
                    </div>
                </th>
                <th width="<?php if ($_smarty_tpl->tpl_vars['show_update_for_all']->value) {?>16%<?php } else { ?>13%<?php }?>">
                    <?php ob_start();
echo $_smarty_tpl->__("price");
$_prefixVariable2=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'];
$_prefixVariable3=ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"price",'text'=>$_prefixVariable2." (".$_prefixVariable3.")"), 0, true);
?>
                </th>
                <?php if ($_smarty_tpl->tpl_vars['show_list_price_column']->value) {?>
                <th width="12%" class="mobile-hide">
                    <?php ob_start();
echo $_smarty_tpl->__("list_price_short_2");
$_prefixVariable4=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'];
$_prefixVariable5=ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"list_price",'text'=>$_prefixVariable4." (".$_prefixVariable5.")",'title'=>$_smarty_tpl->__("list_price")), 0, true);
?>
                </th>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['search']->value['order_ids']) {?>
                <th width="9%">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"p_qty",'text'=>$_smarty_tpl->__("purchased_qty")), 0, true);
?>
                </th>
                <th width="9%">
                    <?php ob_start();
echo $_smarty_tpl->__("subtotal_sum");
$_prefixVariable6=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'];
$_prefixVariable7=ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"p_subtotal",'text'=>$_prefixVariable6." (".$_prefixVariable7.")"), 0, true);
?>
                </th>
                <?php }?>
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:manage_head_amount"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:manage_head_amount"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <th width="9%" class="nowrap">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"amount",'text'=>$_smarty_tpl->__("quantity"),'title'=>$_smarty_tpl->__("quantity_long")), 0, true);
?>
                    </th>
                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:manage_head_amount"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:manage_head"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <th width="9%" class="mobile-hide">&nbsp;</th>
                <th width="9%" class="right">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/table_col_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"status"), 0, true);
?>
                </th>
            </tr>
            </thead>
            <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:manage_table_body"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:manage_table_body"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

            <?php $_smarty_tpl->_assignInScope('is_use_context_menu', true);?>

            <?php if (fn_allowed_for("ULTIMATE")) {?>
                <?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id'] && $_smarty_tpl->tpl_vars['product']->value['is_shared_product'] == "Y" && $_smarty_tpl->tpl_vars['product']->value['company_id'] != $_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
                    <?php $_smarty_tpl->_assignInScope('hide_inputs_if_shared_product', "cm-hide-inputs");?>
                    <?php $_smarty_tpl->_assignInScope('no_hide_input_if_shared_product', "cm-no-hide-input");?>
                <?php } else { ?>
                    <?php $_smarty_tpl->_assignInScope('hide_inputs_if_shared_product', '');?>
                    <?php $_smarty_tpl->_assignInScope('no_hide_input_if_shared_product', '');?>
                <?php }?>
                <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id'] && $_smarty_tpl->tpl_vars['product']->value['is_shared_product'] == "Y") {?>
                    <?php $_smarty_tpl->_assignInScope('show_update_for_all', true);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->_assignInScope('show_update_for_all', false);?>
                <?php }?>

                <?php $_smarty_tpl->_assignInScope('is_use_context_menu', !$_smarty_tpl->tpl_vars['runtime']->value['company_id'] || (intval($_smarty_tpl->tpl_vars['product']->value['company_id']) === intval($_smarty_tpl->tpl_vars['runtime']->value['company_id'])));?>
            <?php }?>

            <tr class="cm-row-status-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['product']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 cm-longtap-target <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['hide_inputs_if_shared_product']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if (!$_smarty_tpl->tpl_vars['is_use_context_menu']->value) {?>longtap-selection-disable<?php }?>"
                    data-ca-longtap-action="setCheckBox"
                    data-ca-longtap-target="input.cm-item"
                    data-ca-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-category-ids="<?php echo htmlspecialchars((string) smarty_modifier_to_json($_smarty_tpl->tpl_vars['product']->value['category_ids']), ENT_QUOTES, 'UTF-8');?>
"
                    <?php if (!$_smarty_tpl->tpl_vars['is_use_context_menu']->value) {?>data-ca-bulkedit-disabled-notice="<?php echo $_smarty_tpl->__("products_are_not_selectable_for_context_menu");?>
"<?php }?>
                >
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:manage_body"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:manage_body"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <td class="left mobile-hide table__check-items-cell">
                    <input type="checkbox" name="product_ids[]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item cm-item-status-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['product']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 hide" /></td>
                    <td width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_width']->value+'18px', ENT_QUOTES, 'UTF-8');?>
" class="products-list__image">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image'=>(($tmp = $_smarty_tpl->tpl_vars['product']->value['main_pair']['icon'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['product']->value['main_pair']['detailed'] ?? null : $tmp),'image_id'=>$_smarty_tpl->tpl_vars['product']->value['main_pair']['image_id'],'image_width'=>$_smarty_tpl->tpl_vars['image_width']->value,'image_height'=>$_smarty_tpl->tpl_vars['image_height']->value,'href'=>fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])),'image_css_class'=>"products-list__image--img",'link_css_class'=>"products-list__image--link"), 0, true);
?>
                    </td>
                    <?php if ($_smarty_tpl->tpl_vars['search']->value['cid'] && $_smarty_tpl->tpl_vars['search']->value['subcats'] != "Y") {?>
                    <td width="7%" class="<?php if ($_smarty_tpl->tpl_vars['no_hide_input_if_shared_product']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['no_hide_input_if_shared_product']->value, ENT_QUOTES, 'UTF-8');
}?>">
                        <input type="text" name="products_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][position]" size="3" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['position'], ENT_QUOTES, 'UTF-8');?>
" class="input-micro" /></td>
                    <?php }?>
                    <td class="product-name-column wrap-word" data-th="<?php echo $_smarty_tpl->__("name");?>
">
                        <input type="hidden" name="products_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][product]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['no_hide_input_if_shared_product']->value) {?> class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['no_hide_input_if_shared_product']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> />
                        <a class="row-status" href="<?php echo htmlspecialchars((string) fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>
</a>
                        <div class="product-list__labels">
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_additional_info"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_additional_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <div class="product-code">
                                    <span class="product-code__label"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_code'], ENT_QUOTES, 'UTF-8');?>
</span>
                                </div>
                            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_additional_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        </div>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:views/companies/components/company_name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
                    </td>
                    <td width="<?php if ($_smarty_tpl->tpl_vars['show_update_for_all']->value) {?>16%<?php } else { ?>13%<?php }?>" class="<?php if ($_smarty_tpl->tpl_vars['no_hide_input_if_shared_product']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['no_hide_input_if_shared_product']->value, ENT_QUOTES, 'UTF-8');
}?> products-list__list-price" data-th="<?php echo $_smarty_tpl->__("price");?>
">
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:list_price"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:list_price"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/update_for_all.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('display'=>$_smarty_tpl->tpl_vars['show_update_for_all']->value,'object_id'=>"price_".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'name'=>"update_all_vendors[price][".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."]",'component'=>"products.price_".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), 0, true);
?>

                            <input type="text" name="products_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][price]" size="6" value="<?php echo htmlspecialchars((string) fn_format_price($_smarty_tpl->tpl_vars['product']->value['price'],$_smarty_tpl->tpl_vars['primary_currency']->value,null,false), ENT_QUOTES, 'UTF-8');?>
" class="input-small input-hidden cm-numeric" data-a-sep/>
                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:list_price"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    </td>
                    <?php if ($_smarty_tpl->tpl_vars['show_list_price_column']->value) {?>
                    <td width="12%" class="mobile-hide" data-th="<?php echo $_smarty_tpl->__("list_price");?>
">
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:list_list_price"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:list_list_price"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <input type="text" name="products_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][list_price]" size="6" value="<?php echo htmlspecialchars((string) fn_format_price($_smarty_tpl->tpl_vars['product']->value['list_price'],$_smarty_tpl->tpl_vars['primary_currency']->value,null,false), ENT_QUOTES, 'UTF-8');?>
" class="input-small input-hidden cm-numeric" data-a-sep />
                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:list_list_price"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    </td>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['search']->value['order_ids']) {?>
                    <td width="9%" data-th="<?php echo $_smarty_tpl->__("purchased_qty");?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['purchased_qty'], ENT_QUOTES, 'UTF-8');?>
</td>
                    <td width="9%" data-th="<?php echo $_smarty_tpl->__("subtotal_sum");?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['purchased_subtotal'], ENT_QUOTES, 'UTF-8');?>
</td>
                    <?php }?>
                    <td width="9%" data-th="<?php echo $_smarty_tpl->__("quantity");?>
">
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:list_quantity"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:list_quantity"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <input type="text" name="products_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][amount]" size="6" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['product']->value['inventory_amount'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['product']->value['amount'] ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" class="input-mini input-hidden cm-value-decimal" />
                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:list_quantity"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    </td>
                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:manage_body"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <td width="9%" class="nowrap mobile-hide">
                        <div class="hidden-tools">
                            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
                                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:list_extra_links"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:list_extra_links"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                    <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("edit"),'href'=>"products.update?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), true);?>
</li>
                                    <?php if (!$_smarty_tpl->tpl_vars['hide_inputs_if_shared_product']->value) {?>
                                        <li><?php ob_start();
if ($_smarty_tpl->tpl_vars['delete_redirect_url']->value) {
echo "&redirect_url=";
echo (string)$_smarty_tpl->tpl_vars['delete_redirect_url']->value;
}
$_prefixVariable8=ob_get_clean();
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("delete"),'class'=>"cm-confirm",'href'=>"products.delete?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']).$_prefixVariable8,'method'=>"POST"), true);?>

                                        </li>
                                    <?php }?>
                                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:list_extra_links"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>

                        </div>
                    </td>
                    <td width="9%" class="right nowrap" data-th="<?php echo $_smarty_tpl->__("status");?>
">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/status_on_manage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['product']->value['product_id'],'status'=>$_smarty_tpl->tpl_vars['product']->value['status'],'hidden'=>true,'object_id_name'=>"product_id",'table'=>"products",'non_editable_status'=>!fn_check_permissions("tools","update_status","admin","POST",array("table"=>"products"))), 0, true);
?>
                    </td>
                </tr>
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:manage_table_body"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
            </table>
        </div>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>"manage_products_form",'object'=>"products",'items'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'products_table')), 0, false);
} else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "select_fields_to_edit", null, null);?>

<p><?php echo $_smarty_tpl->__("text_select_fields2edit_note");?>
</p>
<?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/products_select_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="buttons-container">
    <a class="cm-dialog-closer cm-inline-dialog-closer tool-link btn bulkedit-unchanged"><?php echo $_smarty_tpl->__("cancel");?>
</a>

    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("modify_selected"),'but_role'=>"submit",'but_name'=>"dispatch[products.store_selection]",'but_meta'=>"btn-primary"), 0, false);
?>
</div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:action_buttons"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:action_buttons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <li class="bulkedit-action--legacy hide"><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("clone_selected"),'dispatch'=>"dispatch[products.m_clone]",'form'=>"manage_products_form"), true);?>
</li>
        <li class="bulkedit-action--legacy hide"><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("export_selected"),'dispatch'=>"dispatch[products.export_range]",'form'=>"manage_products_form"), true);?>
</li>
        <li class="bulkedit-action--legacy hide"><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"delete_selected",'dispatch'=>"dispatch[products.m_delete]",'form'=>"manage_products_form"), true);?>
</li>
        <li class="divider bulkedit-action--legacy hide"></li>
        <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("global_update"),'href'=>"products.global_update"), true);?>
</li>
        <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("bulk_product_addition"),'href'=>"products.m_add"), true);?>
</li>
        <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("product_subscriptions"),'href'=>"products.p_subscr"), true);?>
</li>
        <?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
            <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("export_found_products"),'href'=>"products.export_found"), true);?>
</li>
        <?php }?>

        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:action_buttons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>

    <?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[products.m_update]",'but_role'=>"action",'but_target_form'=>"manage_products_form",'but_meta'=>"cm-submit"), 0, false);
?>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "adv_buttons", null, null);?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:manage_tools"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:manage_tools"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_smarty_tpl->_assignInScope('import_product_href', (($tmp = $_smarty_tpl->tpl_vars['import_product_href']->value ?? null)===null||$tmp==='' ? "exim.import&section=products" ?? null : $tmp));?>
        <?php $_smarty_tpl->_assignInScope('has_permission_an_import', (($tmp = $_smarty_tpl->tpl_vars['has_permission_an_import']->value ?? null)===null||$tmp==='' ? fn_check_permissions("exim","import","admin","POST") ?? null : $tmp));?>
        <?php $_smarty_tpl->_assignInScope('allow_create_product', (($tmp = $_smarty_tpl->tpl_vars['allow_create_product']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>

        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list_items", null, null);?>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:tools_list_items"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:tools_list_items"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php if ($_smarty_tpl->tpl_vars['has_permission_an_import']->value) {?>
                    <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("import_products"),'href'=>((string)$_smarty_tpl->tpl_vars['import_product_href']->value)), true);?>
</li>
                <?php }?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:tools_list_items"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

        <?php if ($_smarty_tpl->tpl_vars['product_add_button_as_dropdown']->value && trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list_items'))) {?>
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "dropdown_list", null, null);?>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:tools_list_before_items"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:tools_list_before_items"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:tools_list_before_items"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php if ($_smarty_tpl->tpl_vars['allow_create_product']->value) {?>
                    <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'text'=>$_smarty_tpl->__("create_new_product"),'href'=>"products.add"), true);?>
</li>
                <?php }?>
                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list_items');?>

            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'dropdown_list'),'icon'=>"icon-plus",'no_caret'=>true,'placement'=>"right"), true);?>

        <?php } else { ?>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_add_button"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_add_button"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tool_href'=>"products.add",'prefix'=>"top",'title'=>$_smarty_tpl->__("add_product"),'hide_tools'=>true,'icon'=>"icon-plus"), 0, false);
?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_add_button"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php }?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:manage_tools"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"select_fields_to_edit",'text'=>$_smarty_tpl->__("select_fields_to_edit"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'select_fields_to_edit')), 0, false);
?>

<div class="clearfix">
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('div_id'=>$_REQUEST['content_id']), 0, true);
?>
</div>

</form>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "sidebar", null, null);?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:manage_sidebar"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:manage_sidebar"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/saved_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('dispatch'=>(($tmp = $_smarty_tpl->tpl_vars['dispatch']->value ?? null)===null||$tmp==='' ? "products.manage" ?? null : $tmp),'view_type'=>"products"), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/products_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('dispatch'=>(($tmp = $_smarty_tpl->tpl_vars['dispatch']->value ?? null)===null||$tmp==='' ? "products.manage" ?? null : $tmp)), 0, false);
?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:manage_sidebar"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:manage_mainbox_title"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:manage_mainbox_title"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php echo $_smarty_tpl->__("products");?>

    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:manage_mainbox_title"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox_title'),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'title_extra'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'title_extra'),'adv_buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'adv_buttons'),'select_languages'=>true,'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons'),'sidebar'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar'),'content_id'=>"manage_products"), 0, false);
}
}
