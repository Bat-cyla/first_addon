<?php
/* Smarty version 4.1.1, created on 2024-05-28 08:59:04
  from '/app/www/design/backend/templates/views/product_features/quick_add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_665572a85d6b53_50117136',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ecb26e7c43fefd6496a9c193c131159f7524125' => 
    array (
      0 => '/app/www/design/backend/templates/views/product_features/quick_add.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:components/copy_on_type.tpl' => 1,
    'tygh:common/select2/categories.tpl' => 1,
    'tygh:buttons/button.tpl' => 1,
  ),
),false)) {
function content_665572a85d6b53_50117136 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('text_tab_changed','new_feature','product_feature.purpose','product_feature.purpose.','variants','type_to_create','use_comma_enter_to_separate_variants','feature_category','advanced_feature_creation','new_feature','create'));
echo smarty_function_script(array('src'=>"js/tygh/backend/product_features/quick_add.js"),$_smarty_tpl);?>



<?php $_smarty_tpl->_assignInScope('show_header', (($tmp = $_smarty_tpl->tpl_vars['show_header']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('enable_popover', (($tmp = $_smarty_tpl->tpl_vars['enable_popover']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('form_id', (($tmp = $_smarty_tpl->tpl_vars['form_id']->value ?? null)===null||$tmp==='' ? uniqid() ?? null : $tmp));
$_smarty_tpl->_assignInScope('action_context', (($tmp = $_smarty_tpl->tpl_vars['action_context']->value ?? null)===null||$tmp==='' ? $_REQUEST['_action_context'] ?? null : $tmp));
if ($_smarty_tpl->tpl_vars['feature']->value['description']) {?>
    <?php $_smarty_tpl->_assignInScope('is_variants_focus', true);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('is_name_focus', true);
}?>

<div class="features-create__block <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['enable_popover']->value) {?>well<?php }?>"
    data-ca-features-create-elem="block"
    data-ca-features-create-variants-selector="#elm_variants_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['form_id']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-ca-features-create-variants-data-selector="[data-ca-features-create-elem='variantsData']"
    data-ca-features-create-request-form="quick_add_feature_form_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['form_id']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-ca-features-create-event-id="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['event_id']->value ?? null)===null||$tmp==='' ? "product_feature_created" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"
    data-ca-features-create-confirm-text="<?php echo htmlspecialchars((string)$_smarty_tpl->__("text_tab_changed"), ENT_QUOTES, 'UTF-8', true);?>
"
>
    <?php if ($_smarty_tpl->tpl_vars['show_header']->value) {?>
        <div class="features-create__header">
            <h4 class="subheader features-create__subheader"><?php echo $_smarty_tpl->__("new_feature");?>
</h4>
            <?php if ($_smarty_tpl->tpl_vars['enable_popover']->value) {?>
                <button type="button" class="close flex-vertical-centered cm-inline-dialog-closer" data-ca-features-create-elem="close">
                    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-remove"),$_smarty_tpl);?>

                </button>
            <?php }?>
        </div>
    <?php }?>
    <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
"
        method="post"
        name="quick_add_feature_form_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['form_id']->value, ENT_QUOTES, 'UTF-8');?>
"
        id="quick_add_feature_form_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['form_id']->value, ENT_QUOTES, 'UTF-8');?>
"
        <?php if ($_smarty_tpl->tpl_vars['action_context']->value) {?>data-ca-ajax-done-event="ce.<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['action_context']->value, ENT_QUOTES, 'UTF-8');?>
.product_feature_save"<?php }?>
        class="cm-ajax form-horizontal form-edit" enctype="multipart/form-data"
    >
        <input type="hidden" name="feature_id" value="0" />
        <input type="hidden" name="feature_data[feature_id]" value="0" />
        <input type="hidden" name="feature_data[parent_id]" value="0">

                <?php $_smarty_tpl->_subTemplateRender("tygh:components/copy_on_type.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['form_id']->value,'source_value'=>$_smarty_tpl->tpl_vars['feature']->value['internal_name'],'source_name'=>"feature_data[internal_name]",'target_value'=>$_smarty_tpl->tpl_vars['feature']->value['description'],'target_name'=>"feature_data[description]",'type'=>"feature_name",'is_source_focus'=>$_smarty_tpl->tpl_vars['is_name_focus']->value), 0, false);
?>
        
                <?php if (fn_allowed_for("MULTIVENDOR") || $_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
            <?php $_smarty_tpl->_assignInScope('company_id', $_smarty_tpl->tpl_vars['runtime']->value['company_id']);?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('company_id', fn_get_default_company_id());?>
        <?php }?>
        <input type="hidden" name="feature_data[company_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['company_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        
        <input type="hidden" name="feature_data[feature_type]" value="<?php echo htmlspecialchars((string) smarty_modifier_enum("ProductFeatures::TEXT_SELECTBOX"), ENT_QUOTES, 'UTF-8');?>
">

        <?php if ($_smarty_tpl->tpl_vars['show_purposes']->value) {?>
                        <div class="control-group">
                <label class="control-label cm-required cm-multiple-radios" for="elm_feature_purpose_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['form_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("product_feature.purpose");?>
</label>
                <div class="controls">
                    <ul class="unstyled">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_reverse($_smarty_tpl->tpl_vars['purposes']->value), 'purpose_data', false, 'purpose');
$_smarty_tpl->tpl_vars['purpose_data']->index = -1;
$_smarty_tpl->tpl_vars['purpose_data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['purpose']->value => $_smarty_tpl->tpl_vars['purpose_data']->value) {
$_smarty_tpl->tpl_vars['purpose_data']->do_else = false;
$_smarty_tpl->tpl_vars['purpose_data']->index++;
$_smarty_tpl->tpl_vars['purpose_data']->first = !$_smarty_tpl->tpl_vars['purpose_data']->index;
$__foreach_purpose_data_0_saved = $_smarty_tpl->tpl_vars['purpose_data'];
?>
                            <li>
                                <label for="elm_feature_purpose_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['form_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['purpose']->value, ENT_QUOTES, 'UTF-8');?>
" class="radio inline"><?php echo $_smarty_tpl->__("product_feature.purpose.".((string)$_smarty_tpl->tpl_vars['purpose']->value));?>
<input
                                        type="radio"
                                        name="feature_data[purpose]"
                                        value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['purpose']->value, ENT_QUOTES, 'UTF-8');?>
"
                                        id="elm_feature_purpose_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['form_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['purpose']->value, ENT_QUOTES, 'UTF-8');?>
"
                                        <?php if ($_smarty_tpl->tpl_vars['purpose_data']->first) {?>checked="checked"<?php }?>>
                                </label>
                            </li>
                        <?php
$_smarty_tpl->tpl_vars['purpose_data'] = $__foreach_purpose_data_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                </div>
            </div>
        <?php } else { ?>
                        <input type="hidden" name="feature_data[purpose]" value="find_products">
            <input type="hidden" name="feature_data[filter_style]" value="<?php echo htmlspecialchars((string) smarty_modifier_enum("ProductFilterStyles::CHECKBOX"), ENT_QUOTES, 'UTF-8');?>
">
                    <?php }?>

        
                <div class="control-group">
            <label class="control-label" for="elm_variants_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['form_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("variants");?>
</label>
            <div class="controls">
                <?php $_smarty_tpl->_assignInScope('picker_id', uniqid());?>
                <div class="object-picker object-picker--product-features-variants-add" data-object-picker="object_picker_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <div class="object-picker__select-group object-picker__select-group--product-features-variants-add">
                        <div class="object-picker__simple object-picker__simple--product-features-variants-add">
                            <select multiple
                                    id="elm_variants_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['form_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                                    class="cm-object-picker object-picker__select object-picker__select--product-features-variants-add"
                                    data-ca-object-picker-object-type="productFeaturesVariants"
                                    data-ca-object-picker-placeholder="<?php echo $_smarty_tpl->__("type_to_create");?>
"
                                    data-ca-object-picker-allow-clear="true"
                                    data-ca-object-picker-has-strict-compliance-matcher="true"
                                    data-ca-object-picker-enable-create-object="true"
                                    data-ca-object-picker-token-separators="[',']"
                                    data-ca-object-picker-container-css-class="object-picker__selection-simple object-picker__selection-simple--full-width object-picker__selection-simple--product-features-variants-add"
                                    data-ca-object-picker-show-dropdown="false"
                                    data-ca-object-picker-select-on-close="true"
                                    data-ca-object-picker-autofocus="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['is_variants_focus']->value, ENT_QUOTES, 'UTF-8');?>
"
                                    data-ca-object-picker-has-removable-items="true"
                            ></select>
                            <div class="hidden" data-ca-features-create-elem="variantsData"></div>
                            <p class="muted description"><?php echo $_smarty_tpl->__("use_comma_enter_to_separate_variants");?>
</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
                <div class="control-group">
            <label class="control-label" for="elm_feature_category_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['form_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("feature_category");?>
</label>
            <div class="controls">
                <?php $_smarty_tpl->_assignInScope('rnd', uniqid());?>
                <?php ob_start();
echo htmlspecialchars((string) http_build_query(array("restricted_by_ids"=>array_values((($tmp = $_smarty_tpl->tpl_vars['category_ids']->value ?? null)===null||$tmp==='' ? array() ?? null : $tmp)))), ENT_QUOTES, 'UTF-8');
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:common/select2/categories.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('select2_tabindex'=>$_smarty_tpl->tpl_vars['category_tabindex']->value,'select2_select_id'=>"product_features_categories_path_".((string)$_smarty_tpl->tpl_vars['rnd']->value),'select2_name'=>"feature_data[categories_path]",'select2_category_ids'=>array($_smarty_tpl->tpl_vars['category_id']->value),'select2_wrapper_meta'=>"cm-field-container",'select2_select_meta'=>"input-large",'select2_required'=>"true",'select2_show_advanced'=>false,'select2_close_on_select'=>true,'select2_data_url'=>fn_url("categories.get_categories_list?".$_prefixVariable1),'select2_allow_clear'=>true,'select2_enable_add'=>false), 0, false);
?>
            </div>
        </div>
        
        <div class="features-create__footer">
            <?php ob_start();
echo htmlspecialchars((string) fn_url("product_features.add"), ENT_QUOTES, 'UTF-8');
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"text",'id'=>"advanced_feature_creation_".((string)$_smarty_tpl->tpl_vars['form_id']->value),'text'=>$_smarty_tpl->__("advanced_feature_creation"),'title'=>$_smarty_tpl->__("new_feature"),'href'=>$_prefixVariable2,'class'=>"btn cm-dialog-opener cm-dialog-destroy-on-close",'target_id'=>"add_product_feature_popup_".((string)$_smarty_tpl->tpl_vars['form_id']->value),'data'=>array("data-ca-target-id"=>"add_product_feature_popup","data-ca-dialog-content-request-form"=>"quick_add_feature_form_".((string)$_smarty_tpl->tpl_vars['form_id']->value),"data-ca-dialog-action-context"=>$_smarty_tpl->tpl_vars['action_context']->value)), true);?>

            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_role'=>"submit",'but_text'=>$_smarty_tpl->__("create"),'but_name'=>"dispatch[product_features.update]",'but_meta'=>"cm-internal-submit"), 0, false);
?>
        </div>
    </form>
</div>
<?php }
}
