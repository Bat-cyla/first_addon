<?php
/* Smarty version 4.1.1, created on 2024-05-31 12:54:37
  from '/app/www/design/backend/templates/views/product_filters/update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66599e5dd3b130_65352153',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0a6e8416f321cded0707949e949dd578595e5be' => 
    array (
      0 => '/app/www/design/backend/templates/views/product_filters/update.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/companies/components/company_field.tpl' => 1,
    'tygh:pickers/categories/picker.tpl' => 1,
    'tygh:buttons/save_cancel.tpl' => 2,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_66599e5dd3b130_65352153 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('general','categories','name','position_short','filter_by','product_fields','features','round_to','display_type','expanded','minimized','display_variants_count','text_all_categories_included','filter'));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['filter']->value) {?>
    <?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['filter']->value['filter_id']);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('id', 0);
}?>

<?php $_smarty_tpl->_assignInScope('allow_save', true);
if (fn_allowed_for("ULTIMATE")) {?>
    <?php $_smarty_tpl->_assignInScope('allow_save', fn_allow_save_object($_smarty_tpl->tpl_vars['filter']->value,"product_filters"));
}?>

<?php $_smarty_tpl->_assignInScope('hide_inputs_class', '');
if (fn_check_form_permissions('') || !$_smarty_tpl->tpl_vars['allow_save']->value) {?>
    <?php $_smarty_tpl->_assignInScope('hide_inputs_class', "cm-hide-inputs");?>
    <?php $_smarty_tpl->_assignInScope('hide_categories_delete', true);
}?>

<div id="content_group<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">

<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="update_filter_form_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" enctype="multipart/form-data" method="post" class="form-horizontal form-edit <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['hide_inputs_class']->value, ENT_QUOTES, 'UTF-8');?>
">

<input type="hidden" class="cm-no-hide-input" name="filter_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />
<?php if ($_smarty_tpl->tpl_vars['in_popup']->value) {?>
    <?php $_smarty_tpl->_assignInScope('redirect_url', fn_url("product_filters.manage"));
} else { ?>
    <?php $_smarty_tpl->_assignInScope('redirect_url', $_smarty_tpl->tpl_vars['config']->value['current_url']);
}?>
<input type="hidden" class="cm-no-hide-input" name="redirect_url" value="<?php echo htmlspecialchars((string) (($tmp = $_REQUEST['return_url'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['redirect_url']->value ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" />

<div class="tabs cm-j-tabs">
    <ul class="nav nav-tabs">
        <li id="tab_details_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js active"><a><?php echo $_smarty_tpl->__("general");?>
</a></li>
        <li id="tab_categories_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js"><a><?php echo $_smarty_tpl->__("categories");?>
</a></li>
    </ul>
</div>
<div class="cm-tabs-content" id="tabs_content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div id="content_tab_details_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <fieldset>
        <div class="control-group">
            <label for="elm_filter_name_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label cm-required"><?php echo $_smarty_tpl->__("name");?>
</label>
            <div class="controls">
                <input type="text" id="elm_filter_name_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="filter_data[filter]" class="span9" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['filter'], ENT_QUOTES, 'UTF-8');?>
" />
            </div>
        </div>

        <?php if (fn_allowed_for("ULTIMATE")) {?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/companies/components/company_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>"filter_data[company_id]",'id'=>"elm_filter_data_".((string)$_smarty_tpl->tpl_vars['id']->value),'selected'=>$_smarty_tpl->tpl_vars['filter']->value['company_id']), 0, false);
?>
        <?php }?>

        <div class="control-group">
            <label class="control-label" for="elm_filter_position_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("position_short");?>
</label>
            <div class="controls">
            <input type="text" id="elm_filter_position_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="filter_data[position]" size="3" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['position'], ENT_QUOTES, 'UTF-8');
if (!$_smarty_tpl->tpl_vars['id']->value) {?>0<?php }?>"/>
            </div>
        </div>

        <div class="control-group object-picker__simple">
            <label class="control-label cm-required" for="elm_filter_filter_by_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("filter_by");?>
</label>
            <div class="controls select2-container--mini">
            <?php if (!$_smarty_tpl->tpl_vars['id']->value) {?>
                                <select name="filter_data[filter_type]" onchange="fn_check_product_filter_type(this.value, 'tab_feature_variants_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
', <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
);" id="elm_filter_filter_by_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-object-picker">
                <?php if ($_smarty_tpl->tpl_vars['filter_fields']->value) {?>
                    <optgroup label="<?php echo $_smarty_tpl->__("product_fields");?>
">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filter_fields']->value, 'field', false, 'field_type');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field_type']->value => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
                            <?php if (!$_smarty_tpl->tpl_vars['field']->value['hidden']) {?>
                                <option value="<?php if ($_smarty_tpl->tpl_vars['field']->value['is_range']) {?>R<?php } else { ?>B<?php }?>-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field_type']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['field']->value['description']);?>
</option>
                            <?php }?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </optgroup>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['filter_features']->value) {?>
                    <optgroup label="<?php echo $_smarty_tpl->__("features");?>
">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filter_features']->value, 'feature');
$_smarty_tpl->tpl_vars['feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->do_else = false;
?>
                        <option value="<?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::NUMBER_FIELD") || $_smarty_tpl->tpl_vars['feature']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::NUMBER_SELECTBOX")) {?>R<?php } elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::DATE")) {?>D<?php } else { ?>F<?php }?>F-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['internal_name'], ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php if ($_smarty_tpl->tpl_vars['feature']->value['subfeatures']) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['feature']->value['subfeatures'], 'subfeature');
$_smarty_tpl->tpl_vars['subfeature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subfeature']->value) {
$_smarty_tpl->tpl_vars['subfeature']->do_else = false;
?>
                        <option value="<?php if ($_smarty_tpl->tpl_vars['feature']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::NUMBER_FIELD") || $_smarty_tpl->tpl_vars['feature']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::NUMBER_SELECTBOX")) {?>R<?php } elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::DATE")) {?>D<?php } else { ?>F<?php }?>F-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subfeature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subfeature']->value['internal_name'], ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </optgroup>
                <?php }?>
                </select>
            <?php } else { ?>
                <input type="hidden" name="filter_data[filter_type]" value="<?php if ($_smarty_tpl->tpl_vars['filter']->value['feature_id']) {?>FF-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['feature_id'], ENT_QUOTES, 'UTF-8');
} else {
if ($_smarty_tpl->tpl_vars['filter_fields']->value[$_smarty_tpl->tpl_vars['filter']->value['field_type']]['is_range']) {?>R<?php } else { ?>B<?php }?>-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['field_type'], ENT_QUOTES, 'UTF-8');
}?>">
                <span class="shift-input"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['feature'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['filter']->value['feature_group']) {?> (<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['filter']->value['feature_group'], ENT_QUOTES, 'UTF-8');?>
)<?php }?></span>
            <?php }?>
            </div>
        </div>

        <div class="control-group<?php if (!$_smarty_tpl->tpl_vars['filter']->value['slider']) {?> hidden<?php }?>" id="round_to_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_container">
            <label class="control-label" for="elm_filter_round_to_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("round_to");?>
</label>
            <div class="controls">
            <select name="filter_data[round_to]" id="elm_filter_round_to_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
                <option value="0.01"<?php if ($_smarty_tpl->tpl_vars['filter']->value['round_to'] == "0.01") {?> selected="selected"<?php }?>>0.01</option>
                <option value="0.1"<?php if ($_smarty_tpl->tpl_vars['filter']->value['round_to'] == "0.1") {?> selected="selected"<?php }?>>0.1</option>
                <option value="1"  <?php if ($_smarty_tpl->tpl_vars['filter']->value['round_to'] == "1") {?>   selected="selected"<?php }?>>1</option>
                <option value="10" <?php if ($_smarty_tpl->tpl_vars['filter']->value['round_to'] == "10") {?>  selected="selected"<?php }?>>10</option>
                <option value="100"<?php if ($_smarty_tpl->tpl_vars['filter']->value['round_to'] == "100") {?> selected="selected"<?php }?>>100</option>
            </select>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_filter_display_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("display_type");?>
</label>
            <div class="controls">
            <select name="filter_data[display]" id="elm_filter_display_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
                <option value="Y" <?php if ($_smarty_tpl->tpl_vars['filter']->value['display'] == 'Y') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("expanded");?>
</option>
                <option value="N" <?php if ($_smarty_tpl->tpl_vars['filter']->value['display'] == 'N') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("minimized");?>
</option>
            </select>
            </div>
        </div>

        <div class="control-group <?php if (!($_smarty_tpl->tpl_vars['filter']->value['feature_id'] || $_smarty_tpl->tpl_vars['filter_fields']->value[$_smarty_tpl->tpl_vars['filter']->value['field_type']]['is_range'] || $_smarty_tpl->tpl_vars['filter']->value['feature'] == 'Vendor')) {?> hidden<?php }?>" id="display_count_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_container">
            <label class="control-label" for="elm_filter_display_count_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("display_variants_count");?>
</label>
            <div class="controls">
            <input type="text" id="elm_filter_display_count_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="filter_data[display_count]" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['filter']->value['display_count'] ?? null)===null||$tmp==='' ? "10" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
            </div>
        </div>
    </fieldset>
    </div>

    <div class="hidden" id="content_tab_categories_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php $_smarty_tpl->_subTemplateRender("tygh:pickers/categories/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('company_ids'=>$_smarty_tpl->tpl_vars['picker_selected_companies']->value,'multiple'=>true,'input_name'=>"filter_data[categories_path]",'item_ids'=>$_smarty_tpl->tpl_vars['filter']->value['categories_path'],'data_id'=>"category_ids_".((string)$_smarty_tpl->tpl_vars['id']->value),'no_item_text'=>$_smarty_tpl->__("text_all_categories_included"),'use_keys'=>"N",'owner_company_id'=>$_smarty_tpl->tpl_vars['filter']->value['company_id'],'but_meta'=>"pull-right",'hide_delete_button'=>(($tmp = $_smarty_tpl->tpl_vars['hide_categories_delete']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp)), 0, false);
?>
    </div>
</div>

<?php if ($_smarty_tpl->tpl_vars['in_popup']->value) {?>
    <div class="buttons-container">
        <?php if (fn_allowed_for("ULTIMATE") && !$_smarty_tpl->tpl_vars['allow_save']->value) {?>
            <?php $_smarty_tpl->_assignInScope('hide_first_button', true);?>
        <?php }?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[product_filters.update]",'cancel_action'=>"close",'hide_first_button'=>$_smarty_tpl->tpl_vars['hide_first_button']->value,'save'=>$_smarty_tpl->tpl_vars['id']->value,'cancel_meta'=>"bulkedit-unchanged"), 0, false);
?>
    </div>
<?php } else { ?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
        <?php if (fn_allow_save_object($_smarty_tpl->tpl_vars['filter']->value,"product_filters")) {?>
            <?php if (fn_allowed_for("ULTIMATE") && !$_smarty_tpl->tpl_vars['allow_save']->value) {?>
                <?php $_smarty_tpl->_assignInScope('hide_first_button', true);?>
            <?php }?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_role'=>"submit-link",'but_name'=>"dispatch[product_filters.update]",'but_target_form'=>"update_filter_form_".((string)$_smarty_tpl->tpl_vars['id']->value),'save'=>$_smarty_tpl->tpl_vars['id']->value), 0, true);
?>
        <?php }?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}?>

</form>
<!--content_group<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

<?php if (!$_smarty_tpl->tpl_vars['id']->value) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
    fn_check_product_filter_type(Tygh.$('#elm_filter_filter_by_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
').val(), 'tab_feature_variants_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
');
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['in_popup']->value) {?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox');?>

<?php } else { ?>
    <?php ob_start();
echo $_smarty_tpl->__("filter");
$_prefixVariable4=ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_prefixVariable4.": ".((string)$_smarty_tpl->tpl_vars['filter']->value['filter']),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons'),'select_languages'=>true), 0, false);
}
}
}
