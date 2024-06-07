<?php
/* Smarty version 4.1.1, created on 2024-05-31 15:45:47
  from '/app/www/design/backend/templates/addons/product_bundles/views/product_bundles/manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6659c67ba534f2_39720708',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b87d73f4a589fb9801643386429ea02ea6b7ab0' => 
    array (
      0 => '/app/www/design/backend/templates/addons/product_bundles/views/product_bundles/manage.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/pagination.tpl' => 2,
    'tygh:common/check_items.tpl' => 1,
    'tygh:common/tooltip.tpl' => 1,
    'tygh:common/object_group.tpl' => 1,
    'tygh:common/context_menu_wrapper.tpl' => 1,
    'tygh:addons/product_bundles/views/product_bundles/update.tpl' => 1,
    'tygh:common/popupbox.tpl' => 1,
    'tygh:addons/product_bundles/views/product_bundles/components/sidebar.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_6659c67ba534f2_39720708 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
\Tygh\Languages\Helper::preloadLangVars(array('product_bundles.product_bundle_name','product_bundles.internal_feature_name_tooltip','storefront_name','products','status','n_products','n_products','no_data','product_bundles.new_bundle','product_bundles.add_new_bundle','product_bundles.product_bundles'));
echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>

    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev']),'assign'=>'c_icon'),$_smarty_tpl);?>

    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-dummy",'assign'=>'c_dummy'),$_smarty_tpl);?>

    <?php $_smarty_tpl->_assignInScope('c_url', fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"));?>
    <?php $_smarty_tpl->_assignInScope('rev', (($tmp = $_REQUEST['content_id'] ?? null)===null||$tmp==='' ? "pagination_contents" ?? null : $tmp));?>

    <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="manage_product_bundles_form" class="form-horizontal form-edit cm-ajax" id="manage_product_bundles_form">
        <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
" />
        <div id="update_bundles_list">
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php if ($_smarty_tpl->tpl_vars['bundles']->value) {?>
            <?php ob_start();
echo htmlspecialchars((string) uniqid(), ENT_QUOTES, 'UTF-8');
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('context_menu_id', "context_menu_".$_prefixVariable1);?>
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_bundles_table", null, null);?>
                <div class="items-container">
                    <div class="table-responsive-wrapper longtap-selection">
                        <table class="table table-middle table--relative table-objects table-responsive table-responsive-w-titles">
                            <thead
                                    data-ca-bulkedit-default-object="true"
                                    data-ca-bulkedit-component="defaultObject"
                            >
                            <tr>
                                <th class="left" width="6%">
                                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('elms_container'=>"#".((string)$_smarty_tpl->tpl_vars['context_menu_id']->value)), 0, false);
?>

                                    <input type="checkbox"
                                           class="bulkedit-toggler hide"
                                           data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]"
                                           data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                                    />
                                </th>
                                <th width="1%"></th>
                                <th width="56%">
                                    <a class="cm-ajax<?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "name") {?> sort-link-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['sort_order_rev'], ENT_QUOTES, 'UTF-8');
}?>" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=name&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->__("product_bundles.product_bundle_name");
$_smarty_tpl->_subTemplateRender("tygh:common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tooltip'=>$_smarty_tpl->__("product_bundles.internal_feature_name_tooltip")), 0, false);
if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "name") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
}?></a> /
                                    <a class="cm-ajax<?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "storefront_name") {?> sort-link-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['sort_order_rev'], ENT_QUOTES, 'UTF-8');
}?>" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=storefront_name&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->__("storefront_name");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "storefront_name") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
}?></a>
                                </th>
                                <th width="12%"><?php echo $_smarty_tpl->__("products");?>
</th>
                                <th width="10%"></th>
                                <th width="12%" class="right"><a class="cm-ajax<?php if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "status") {?> sort-link-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['sort_order_rev'], ENT_QUOTES, 'UTF-8');
}?>" href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=status&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');?>
><?php echo $_smarty_tpl->__("status");
if ($_smarty_tpl->tpl_vars['search']->value['sort_by'] === "status") {
echo $_smarty_tpl->tpl_vars['c_icon']->value;
}?></a></th>
                            </tr>
                            </thead>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bundles']->value, 'bundle');
$_smarty_tpl->tpl_vars['bundle']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['bundle']->value) {
$_smarty_tpl->tpl_vars['bundle']->do_else = false;
?>
                                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "extra_data", null, null);?>
                                    <?php if ($_smarty_tpl->tpl_vars['bundle']->value['products']) {?>
                                        <a href="<?php echo htmlspecialchars((string) fn_url("products.manage&pid=".((string)$_smarty_tpl->tpl_vars['bundle']->value['product_ids'])), ENT_QUOTES, 'UTF-8');?>
">
                                            <?php echo $_smarty_tpl->__("n_products",array(smarty_modifier_count($_smarty_tpl->tpl_vars['bundle']->value['products'])));?>

                                        </a>
                                    <?php } else { ?>
                                        <?php echo $_smarty_tpl->__("n_products",array(smarty_modifier_count($_smarty_tpl->tpl_vars['bundle']->value['products'])));?>

                                    <?php }?>
                                <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                                <?php $_smarty_tpl->_subTemplateRender("tygh:common/object_group.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['bundle']->value['bundle_id'],'id_prefix'=>"_product_bundle_",'text'=>$_smarty_tpl->tpl_vars['bundle']->value['name'],'status'=>$_smarty_tpl->tpl_vars['bundle']->value['status'],'hidden'=>false,'href'=>"product_bundles.update?bundle_id=".((string)$_smarty_tpl->tpl_vars['bundle']->value['bundle_id'])."&return_url=".((string)(rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']))),'href_col_width'=>"56%",'details'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'extra_data'),'details_col_width'=>"12%",'object_id_name'=>"bundle_id",'table'=>"product_bundles",'href_delete'=>"product_bundles.delete?bundle_id=".((string)$_smarty_tpl->tpl_vars['bundle']->value['bundle_id'])."&return_url=".((string)(rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']))),'delete_target_id'=>"update_bundles_list",'header_text'=>$_smarty_tpl->tpl_vars['bundle']->value['name'],'skip_delete'=>false,'no_table'=>true,'hide_for_vendor'=>false,'is_bulkedit_menu'=>true,'checkbox_col_width'=>"6%",'checkbox_name'=>"bundle_ids[]",'show_checkboxes'=>!$_smarty_tpl->tpl_vars['hide_controls']->value,'hidden_checkbox'=>true,'company_object'=>array("company_id"=>$_smarty_tpl->tpl_vars['bundle']->value['company_id']),'storefront_name'=>$_smarty_tpl->tpl_vars['bundle']->value['storefront_name']), 0, true);
?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </table>
                    </div>
                    </div>
            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

            <?php $_smarty_tpl->_subTemplateRender("tygh:common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['context_menu_id']->value,'form'=>"manage_product_bundles_form",'object'=>"product_bundles",'items'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_bundles_table')), 0, false);
?>

        <?php } else { ?>
            <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
        <?php }?>
            <div class="clearfix">
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            </div>
        <!--update_bundles_list--></div>
    </form>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "adv_buttons", null, null);?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "add_new_picker", null, null);?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_bundles/views/product_bundles/update.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('item'=>$_smarty_tpl->tpl_vars['item']->value,'hide_for_vendor'=>false), 0, false);
?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"add_new_bundles",'text'=>$_smarty_tpl->__("product_bundles.new_bundle"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'add_new_picker'),'title'=>$_smarty_tpl->__("product_bundles.add_new_bundle"),'act'=>"general",'icon'=>"icon-plus"), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "sidebar", null, null);?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_bundles/views/product_bundles/components/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("product_bundles.product_bundles"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'select_languages'=>true,'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons'),'sidebar'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar'),'adv_buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'adv_buttons'),'select_storefront'=>fn_allowed_for("ULTIMATE"),'storefront_switcher_param_name'=>"storefront_id",'selected_storefront_id'=>$_smarty_tpl->tpl_vars['selected_storefront_id']->value), 0, false);
}
}
