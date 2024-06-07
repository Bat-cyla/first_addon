<?php
/* Smarty version 4.1.1, created on 2024-05-28 08:59:04
  from '/app/www/design/backend/templates/common/select2/categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_665572a8628bc4_96602498',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9668523d92baace211971a23b2e6dbee6d97b0a8' => 
    array (
      0 => '/app/www/design/backend/templates/common/select2/categories.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:pickers/categories/picker.tpl' => 1,
    'tygh:common/select2/components/object_selection.tpl' => 1,
    'tygh:common/select2/components/object_result.tpl' => 1,
  ),
),false)) {
function content_665572a8628bc4_96602498 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('type_to_search','add','enter_category_name_and_path'));
echo smarty_function_script(array('src'=>"js/tygh/backend/select2_categories.js"),$_smarty_tpl);?>

<div class="object-categories-add <?php if ($_smarty_tpl->tpl_vars['select2_multiple']->value) {?>object-categories-add--multiple<?php }?> cm-object-categories-add-container <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['select2_wrapper_meta']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php $_smarty_tpl->_assignInScope('select_id', (($tmp = $_smarty_tpl->tpl_vars['select2_select_id']->value ?? null)===null||$tmp==='' ? "categories_add" ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('category_ids', array_unique((($tmp = $_smarty_tpl->tpl_vars['select2_category_ids']->value ?? null)===null||$tmp==='' ? array() ?? null : $tmp)));?>
    <?php $_smarty_tpl->_assignInScope('enable_add', (($tmp = $_smarty_tpl->tpl_vars['select2_enable_add']->value ?? null)===null||$tmp==='' ? "true" ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('select2_show_advanced', (($tmp = $_smarty_tpl->tpl_vars['select2_show_advanced']->value ?? null)===null||$tmp==='' ? "true" ?? null : $tmp));?>

    <?php if (fn_allowed_for("MULTIVENDOR")) {?>
        <?php $_smarty_tpl->_assignInScope('zero_company_id_name_lang_var', "none");?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id'] || fn_allowed_for("MULTIVENDOR")) {?>
        <?php $_smarty_tpl->_assignInScope('company_id', $_smarty_tpl->tpl_vars['runtime']->value['company_id']);?>
    <?php }?>

    <?php if (fn_allowed_for("MULTIVENDOR") && $_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
        <?php $_smarty_tpl->_assignInScope('enable_add', "false");?>
    <?php }?>

    <?php if (!$_smarty_tpl->tpl_vars['company_id']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['zero_company_id_name_lang_var']->value) {?>
            <?php $_smarty_tpl->_assignInScope('company_id', "0");?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('company_id', fn_get_default_company_id());?>
        <?php }?>
    <?php }?>
    <?php $_smarty_tpl->_assignInScope('company_name', fn_get_company_name($_smarty_tpl->tpl_vars['company_id']->value));?>

    <input type="hidden" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['select2_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="" />

    <?php $_smarty_tpl->_assignInScope('new_category_field_name', $_smarty_tpl->tpl_vars['is_multiple_update']->value ? ("products_data[".((string)$_smarty_tpl->tpl_vars['product_id']->value)."][add_new_category][]") : ("product_data[add_new_category][]"));?>
    <input type="hidden" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['new_category_field_name']->value, ENT_QUOTES, 'UTF-8');?>
" value=""/>

    <?php if ($_smarty_tpl->tpl_vars['select2_multiple']->value) {?>
        <?php $_smarty_tpl->_assignInScope('select2_name', ((string)$_smarty_tpl->tpl_vars['select2_name']->value)."[]");?>
    <?php }?>

    <select id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['select_id']->value, ENT_QUOTES, 'UTF-8');?>
"
        class="cm-object-selector cm-object-categories-add <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['select2_select_meta']->value, ENT_QUOTES, 'UTF-8');?>
"
        <?php if ($_smarty_tpl->tpl_vars['select2_tabindex']->value) {?>
            tabindex="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['select2_tabindex']->value, ENT_QUOTES, 'UTF-8');?>
"
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['select2_multiple']->value) {?>
            multiple
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['select2_disabled']->value) {?>
            disabled
        <?php }?>
        name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['select2_name']->value, ENT_QUOTES, 'UTF-8');?>
"
        data-ca-enable-images="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['select2_enable_images']->value ?? null)===null||$tmp==='' ? "false" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"
        data-ca-enable-search="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['select2_enable_search']->value ?? null)===null||$tmp==='' ? "true" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"
        data-ca-load-via-ajax="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['select2_load_via_ajax']->value ?? null)===null||$tmp==='' ? "true" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"
        data-ca-page-size="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['select2_page_size']->value ?? null)===null||$tmp==='' ? 10 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"
        data-ca-data-url="<?php echo fn_url((($tmp = $_smarty_tpl->tpl_vars['select2_data_url']->value ?? null)===null||$tmp==='' ? "categories.get_categories_list" ?? null : $tmp));?>
"
        data-ca-placeholder="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['select2_placeholder']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("type_to_search") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"
        data-ca-allow-clear="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['select2_allow_clear']->value ?? null)===null||$tmp==='' ? "false" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"
        data-ca-close-on-select="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['select2_close_on_select']->value ?? null)===null||$tmp==='' ? "false" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"
        data-ca-ajax-delay="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['select2_ajax_delay']->value ?? null)===null||$tmp==='' ? 250 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"
        data-ca-allow-sorting="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['select2_allow_sorting']->value ?? null)===null||$tmp==='' ? "false" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"
        data-ca-escape-html="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['select2_escape_html']->value ?? null)===null||$tmp==='' ? "false" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"
        data-ca-dropdown-css-class="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['select2_dropdown_css_class']->value ?? null)===null||$tmp==='' ? "select2-dropdown-below-categories-add" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"
        data-ca-required="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['select2_required']->value ?? null)===null||$tmp==='' ? "false" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"
        data-ca-select-width="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['select2_width']->value ?? null)===null||$tmp==='' ? "100%" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"
        data-ca-repaint-dropdown-on-change="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['select2_repaint_dropdown_on_change']->value ?? null)===null||$tmp==='' ? "true" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"
        data-ca-picker-id="categories_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['select2_select_id']->value, ENT_QUOTES, 'UTF-8');?>
"
        data-ca-enable-add="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['enable_add']->value, ENT_QUOTES, 'UTF-8');?>
"
        data-ca-template-type="category"
        data-ca-template-selection-selector="#template_selection_category"
        data-ca-template-result-add-selector="#template_result_add_category"
        data-ca-new-value-holder-selector="[name='<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['new_category_field_name']->value, ENT_QUOTES, 'UTF-8');?>
']"
        data-ca-new-value-allow-multiple="true"
    >
        <?php if ($_smarty_tpl->tpl_vars['category_ids']->value) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_unique($_smarty_tpl->tpl_vars['category_ids']->value), 'category_id');
$_smarty_tpl->tpl_vars['category_id']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category_id']->value) {
$_smarty_tpl->tpl_vars['category_id']->do_else = false;
?>
                <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                        selected="selected"
                ></option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>
    </select>
    <?php if ($_smarty_tpl->tpl_vars['select2_show_advanced']->value && !$_smarty_tpl->tpl_vars['select2_disabled']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:pickers/categories/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('company_ids'=>$_smarty_tpl->tpl_vars['runtime']->value['company_id'],'rnd'=>$_smarty_tpl->tpl_vars['select2_select_id']->value,'data_id'=>"categories",'view_mode'=>"button",'but_meta'=>"btn object-categories-add__picker",'but_icon'=>"icon-reorder",'but_text'=>false,'multiple'=>true), 0, false);
?>
    <?php }?>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_selection_category_pre", null, null);?>
        <span class="select2-selection__choice__handler"></span>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "object_template_add_content", null, null);?>
        <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate']) {?>
            <div class="select2__category-company"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['company_name']->value, ENT_QUOTES, 'UTF-8');?>
</div>
        <?php }?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <template id="template_selection_category">
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/select2/components/object_selection.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'object_template_add_content'),'content_pre'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_selection_category_pre')), 0, false);
?>
    </template>
    <template id="template_result_add_category">
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/select2/components/object_result.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'object_template_add_content'),'content_pre'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_selection_category_pre'),'prefix'=>$_smarty_tpl->__("add"),'icon'=>"icon-plus-sign",'help'=>$_smarty_tpl->__("enter_category_name_and_path")), 0, false);
?>
    </template>
</div>
<?php }
}
