<?php
/* Smarty version 4.1.1, created on 2024-05-13 10:09:59
  from '/app/www/design/backend/templates/views/product_filters/manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6641bcc7566865_08715827',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50d9475401770b570a975d349e9de441d635d76c' => 
    array (
      0 => '/app/www/design/backend/templates/views/product_filters/manage.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/pagination.tpl' => 2,
    'tygh:common/check_items.tpl' => 1,
    'tygh:common/object_group.tpl' => 2,
    'tygh:common/context_menu_wrapper.tpl' => 1,
    'tygh:views/product_filters/update.tpl' => 1,
    'tygh:common/popupbox.tpl' => 1,
    'tygh:common/saved_search.tpl' => 1,
    'tygh:views/product_filters/components/product_filters_search_form.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_6641bcc7566865_08715827 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('edit','viewing_filter','product_filters_are_not_selectable_for_context_menu','view','no_data','filters_in_use','add_filter','new_filter','filters'));
echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
    var filter_fields = {};
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filter_fields']->value, 'filter_field', false, 'key');
$_smarty_tpl->tpl_vars['filter_field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['filter_field']->value) {
$_smarty_tpl->tpl_vars['filter_field']->do_else = false;
?>
    filter_fields['<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
'] = '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter_field']->value['slider'], ENT_QUOTES, 'UTF-8');?>
';
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


function fn_check_product_filter_type(value, tab_id, id)
{
    var $ = Tygh.$;
    if (!value) { return; }
    $('#' + tab_id).toggleBy(!(value.indexOf('R') == 0) && !(value.indexOf('D') == 0));
    $('[id^=inputs_ranges' + id + ']').toggleBy((value.indexOf('D') == 0));
    $('[id^=dates_ranges' + id + ']').toggleBy(!(value.indexOf('D') == 0));
    $('#round_to_' + id + '_container').toggleBy(!filter_fields[value.replace(/\w+-/, '')]);
    $('#display_count_' + id + '_container').toggleBy(!(value.indexOf('R') == 0) && !(value.indexOf('F') == 0) && !(value.indexOf('S') > 0));
}

<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>

<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" class="cm-disable-check-changes" name="manage_product_filters_form" id="manage_product_filters_form">
<?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_type'=>"filters"), 0, false);
?>
<input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
">

<?php $_smarty_tpl->_assignInScope('r_url', rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']));
$_smarty_tpl->_assignInScope('has_available_filters', empty($_smarty_tpl->tpl_vars['runtime']->value['company_id']) || in_array($_smarty_tpl->tpl_vars['runtime']->value['company_id'],array_column($_smarty_tpl->tpl_vars['filters']->value,'company_id')));?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_filters_table", null, null);?>
<div class="items-container<?php if (fn_check_form_permissions('')) {?> cm-hide-inputs<?php } else { ?> cm-sortable<?php }?>" data-ca-sortable-table="product_filters" data-ca-sortable-id-name="filter_id" id="manage_filters_list">
    <?php if ($_smarty_tpl->tpl_vars['filters']->value) {?>
        <div class="table-responsive-wrapper longtap-selection">
            <table width="100%" class="table table-middle table--relative table-objects table-striped table-responsive table-responsive-w-titles">
                <thead
                        data-ca-bulkedit-default-object="true"
                        data-ca-bulkedit-component="defaultObject"
                >
                    <tr>
                        <th>
                            <?php $_smarty_tpl->_subTemplateRender("tygh:common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('is_check_disabled'=>!$_smarty_tpl->tpl_vars['has_available_filters']->value), 0, false);
?>

                            <input type="checkbox"
                                class="bulkedit-toggler hide"
                                data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]"
                                data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                            />
                        </th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
            <tbody>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filters']->value, 'filter');
$_smarty_tpl->tpl_vars['filter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->do_else = false;
?>

                <?php if (fn_allow_save_object($_smarty_tpl->tpl_vars['filter']->value,"product_filters")) {?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/object_group.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['filter']->value['filter_id'],'show_id'=>true,'details'=>$_smarty_tpl->tpl_vars['filter']->value['filter_description'],'text'=>$_smarty_tpl->tpl_vars['filter']->value['filter'],'status'=>$_smarty_tpl->tpl_vars['filter']->value['status'],'href'=>"product_filters.update?filter_id=".((string)$_smarty_tpl->tpl_vars['filter']->value['filter_id'])."&return_url=".((string)$_smarty_tpl->tpl_vars['r_url']->value)."&in_popup",'object_id_name'=>"filter_id",'href_delete'=>"product_filters.delete?filter_id=".((string)$_smarty_tpl->tpl_vars['filter']->value['filter_id']),'delete_target_id'=>"manage_filters_list,actions_panel,pagination_contents",'table'=>"product_filters",'no_table'=>true,'draggable'=>true,'additional_class'=>"cm-no-hide-input cm-sortable-row cm-sortable-id-".((string)$_smarty_tpl->tpl_vars['filter']->value['filter_id'])." cm-longtap-target",'header_text'=>$_smarty_tpl->tpl_vars['filter']->value['filter'],'link_text'=>$_smarty_tpl->__("edit"),'company_object'=>$_smarty_tpl->tpl_vars['filter']->value,'is_responsive_table'=>true,'is_bulkedit_menu'=>true,'checkbox_col_width'=>"6%",'checkbox_name'=>"filter_ids[]",'hidden_checkbox'=>true,'bulkedit_menu_category_ids'=>"[".((string)$_smarty_tpl->tpl_vars['filter']->value['categories_path'])."]",'show_checkboxes'=>true), 0, true);
?>
                <?php } else { ?>
                    <?php ob_start();
echo $_smarty_tpl->__("viewing_filter");
$_prefixVariable1=ob_get_clean();
ob_start();
echo $_smarty_tpl->__("product_filters_are_not_selectable_for_context_menu");
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:common/object_group.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['filter']->value['filter_id'],'show_id'=>true,'details'=>$_smarty_tpl->tpl_vars['filter']->value['filter_description'],'text'=>$_smarty_tpl->tpl_vars['filter']->value['filter'],'status'=>$_smarty_tpl->tpl_vars['filter']->value['status'],'href'=>"product_filters.update?filter_id=".((string)$_smarty_tpl->tpl_vars['filter']->value['filter_id'])."&return_url=".((string)$_smarty_tpl->tpl_vars['r_url']->value)."&in_popup",'object_id_name'=>"filter_id",'table'=>"product_filters",'no_table'=>true,'additional_class'=>"cm-sortable-row cm-sortable-id-".((string)$_smarty_tpl->tpl_vars['filter']->value['filter_id']),'header_text'=>$_prefixVariable1.":&nbsp;".((string)$_smarty_tpl->tpl_vars['filter']->value['filter']),'link_text'=>$_smarty_tpl->__("view"),'non_editable'=>true,'is_view_link'=>true,'hidden_checkbox'=>true,'company_object'=>$_smarty_tpl->tpl_vars['filter']->value,'bulkedit_disabled_notice'=>$_prefixVariable2,'is_bulkedit_menu'=>true,'checkbox_col_width'=>"6%",'checkbox_name'=>"filter_ids[]",'show_checkboxes'=>true), 0, true);
?>
                <?php }?>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
            </table>
        </div>
    <?php } else { ?>
        <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
    <?php }?>
<!--manage_filters_list--></div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/context_menu_wrapper.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>"manage_product_filters_form",'object'=>"product_filters",'items'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_filters_table')), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_type'=>"filters"), 0, true);
?>

</form>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "adv_buttons", null, null);?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "add_new_picker", null, null);?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/product_filters/update.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('filter'=>array(),'in_popup'=>true), 0, false);
?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php if (!fn_allowed_for("MULTIVENDOR") || (!$_smarty_tpl->tpl_vars['runtime']->value['company_id'] && fn_allowed_for("MULTIVENDOR"))) {?>
    <?php if (!$_smarty_tpl->tpl_vars['filter_fields']->value && !$_smarty_tpl->tpl_vars['filter_features']->value) {?>
        <?php $_smarty_tpl->_assignInScope('add_filter_button_meta', "cm-disabled disabled");?>
        <?php $_smarty_tpl->_assignInScope('add_filter_button_tooltip', $_smarty_tpl->__("filters_in_use"));?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('add_filter_button_tooltip', $_smarty_tpl->__("add_filter"));?>
    <?php }?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"add_product_filter",'text'=>$_smarty_tpl->__("new_filter"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'add_new_picker'),'title'=>$_smarty_tpl->tpl_vars['add_filter_button_tooltip']->value,'act'=>"general",'icon'=>"icon-plus",'link_class'=>$_smarty_tpl->tpl_vars['add_filter_button_meta']->value), 0, false);
?>
    <?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "sidebar", null, null);
$_smarty_tpl->_subTemplateRender("tygh:common/saved_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('dispatch'=>"product_filters.manage",'view_type'=>"product_filters"), 0, false);
$_smarty_tpl->_subTemplateRender("tygh:views/product_filters/components/product_filters_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('dispatch'=>"product_filters.manage"), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("filters"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'adv_buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'adv_buttons'),'sidebar'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar'),'select_languages'=>true), 0, false);
}
}
