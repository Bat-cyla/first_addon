<?php
/* Smarty version 4.1.1, created on 2024-05-13 08:54:24
  from '/app/www/design/backend/templates/views/setup_wizard/components/settings_fields.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6641ab10439834_68438230',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e53cd8ccdd383dd0c120e6a3a4fbc9a88709cbf' => 
    array (
      0 => '/app/www/design/backend/templates/views/setup_wizard/components/settings_fields.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/subheader.tpl' => 1,
    'tygh:common/tooltip.tpl' => 1,
    'tygh:common/switcher.tpl' => 1,
    'tygh:components/phone.tpl' => 1,
    'tygh:buttons/update_for_all.tpl' => 1,
    'tygh:common/selectable_box.tpl' => 1,
  ),
),false)) {
function content_6641ab10439834_68438230 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),2=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.in_array.php','function'=>'smarty_modifier_in_array',),));
\Tygh\Languages\Helper::preloadLangVars(array('no_items','multiple_selectbox_notice','no_items','select_country','select_state','browse','no_items'));
if ($_smarty_tpl->tpl_vars['item']->value['update_for_all'] && ($_smarty_tpl->tpl_vars['settings']->value['Stores']['default_state_update_for_all'] === "not_active" || fn_allowed_for("MULTIVENDOR")) && $_smarty_tpl->tpl_vars['app']->value['storefront.repository']->getCount(array('cache'=>true)) > 1) {?>
    <?php $_smarty_tpl->_assignInScope('disable_input', true);
}?>

<?php if ($_smarty_tpl->tpl_vars['parent_item']->value) {?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
        (function($, _) {
            $('#<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['parent_item_html_id']->value, ENT_QUOTES, 'UTF-8');?>
').on('click', function() {
                $('#container_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
').toggle();
            });
        }(Tygh.$, Tygh));
    <?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>

<?php if ($_smarty_tpl->tpl_vars['item']->value['type'] === smarty_modifier_enum("SettingTypes::INFO")) {?>
    <div><?php echo $_smarty_tpl->tpl_vars['item']->value['info'];?>
</div>
<?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type'] === smarty_modifier_enum("SettingTypes::TEMPLATE")) {?>
    <div><?php $_smarty_tpl->_subTemplateRender("addons/".((string)$_REQUEST['addon'])."/settings/".((string)$_smarty_tpl->tpl_vars['item']->value['value']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div>
<?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type'] === smarty_modifier_enum("SettingTypes::PERMANENT_TEMPLATE")) {?>
    <div><?php $_smarty_tpl->_subTemplateRender("addons/".((string)$_REQUEST['addon'])."/settings/".((string)$_smarty_tpl->tpl_vars['item']->value['value']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('skip_addon_check'=>true), 0, true);
?></div>
<?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type'] === smarty_modifier_enum("SettingTypes::HEADER")) {?>
    <?php if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sw_header_first') === "true") {?>
        </fieldset>
        </div>
    <?php }?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "sw_header_first", null, null);?>true<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['item']->value['description'],'target'=>"#collapsable_".((string)$_smarty_tpl->tpl_vars['html_id']->value)), 0, false);
?>
<div id="collapsable_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="in collapse">
    <fieldset>
        <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type'] !== smarty_modifier_enum("SettingTypes::HIDDEN") && $_smarty_tpl->tpl_vars['item']->value['type'] !== smarty_modifier_enum("SettingTypes::SELECTABLE_BOX")) {?>
                <div id="container_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-group<?php if ($_smarty_tpl->tpl_vars['class']->value) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');
}?> <?php if ($_smarty_tpl->tpl_vars['item']->value['type'] == smarty_modifier_enum("SettingTypes::PHONE")) {?>cm-mask-phone-group<?php }?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['section_name'], ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['parent_item']->value && $_smarty_tpl->tpl_vars['parent_item']->value['value'] != smarty_modifier_enum("YesNo::YES")) {?>hidden<?php }?>" <?php if ($_smarty_tpl->tpl_vars['item']->value['type'] == smarty_modifier_enum("SettingTypes::PHONE")) {?>data-ca-phone-mask-group-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
            <label for="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label <?php if ($_smarty_tpl->tpl_vars['highlight']->value && smarty_modifier_in_array($_smarty_tpl->tpl_vars['item']->value['name'],$_smarty_tpl->tpl_vars['highlight']->value)) {?>highlight<?php }?> <?php if ($_smarty_tpl->tpl_vars['item']->value['type'] == smarty_modifier_enum("SettingTypes::PHONE")) {?> cm-mask-phone-label<?php }?>"><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];
if ($_smarty_tpl->tpl_vars['item']->value['tooltip']) {
$_smarty_tpl->_subTemplateRender("tygh:common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tooltip'=>$_smarty_tpl->tpl_vars['item']->value['tooltip']), 0, false);
}?>:
                <?php if ($_smarty_tpl->tpl_vars['label_extra']->value) {?>
                    <p><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['label_extra']->value);?>
</p>
                <?php }?>
            </label>

            <div class="controls">
                <?php if ($_smarty_tpl->tpl_vars['item']->value['type'] === smarty_modifier_enum("SettingTypes::PASSWORD")) {?>
                    <input id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
" type="password" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_name']->value, ENT_QUOTES, 'UTF-8');?>
" size="30" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['value'], ENT_QUOTES, 'UTF-8');?>
" class="input-text" <?php if ($_smarty_tpl->tpl_vars['disable_input']->value) {?>disabled="disabled"<?php }?> />
                <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type'] === smarty_modifier_enum("SettingTypes::TEXTAREA")) {?>
                    <textarea id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_name']->value, ENT_QUOTES, 'UTF-8');?>
" rows="5" cols="19" class="input-large" <?php if ($_smarty_tpl->tpl_vars['disable_input']->value) {?>disabled="disabled"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['value'], ENT_QUOTES, 'UTF-8');?>
</textarea>
                <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type'] === smarty_modifier_enum("SettingTypes::CHECKBOX")) {?>
                    <?php if ($_smarty_tpl->tpl_vars['item']->value['name'] === "global_tracking" || $_smarty_tpl->tpl_vars['item']->value['name'] === "default_tracking") {?>
                        <?php $_smarty_tpl->_assignInScope('default_checked_value', smarty_modifier_enum("ProductTracking::TRACK"));?>
                        <?php $_smarty_tpl->_assignInScope('default_unchecked_value', smarty_modifier_enum("ProductTracking::DO_NOT_TRACK"));?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->_assignInScope('default_checked_value', smarty_modifier_enum("YesNo::YES"));?>
                        <?php $_smarty_tpl->_assignInScope('default_unchecked_value', smarty_modifier_enum("YesNo::NO"));?>
                    <?php }?>
                    <?php $_smarty_tpl->_assignInScope('false_checkbox_value', (($tmp = $_smarty_tpl->tpl_vars['item']->value['false_checkbox_value'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['default_unchecked_value']->value ?? null : $tmp));?>
                    <?php $_smarty_tpl->_assignInScope('true_checkbox_value', (($tmp = $_smarty_tpl->tpl_vars['item']->value['true_checkbox_value'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['default_checked_value']->value ?? null : $tmp));?>
                    <input type="hidden" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['false_checkbox_value']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['disable_input']->value) {?>disabled="disabled"<?php }?> />
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/switcher.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('checked'=>($_smarty_tpl->tpl_vars['item']->value['value'] == $_smarty_tpl->tpl_vars['true_checkbox_value']->value),'input_name'=>$_smarty_tpl->tpl_vars['html_name']->value,'input_value'=>$_smarty_tpl->tpl_vars['true_checkbox_value']->value,'input_id'=>$_smarty_tpl->tpl_vars['html_id']->value,'input_disabled'=>$_smarty_tpl->tpl_vars['disable_input']->value), 0, false);
?>
                <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type'] === smarty_modifier_enum("SettingTypes::SELECTBOX")) {?>
                    <select id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_name']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['disable_input']->value) {?>disabled="disabled"<?php }?>>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['variants'], 'v', false, 'k');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
                            <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['value'] === $_smarty_tpl->tpl_vars['k']->value) {?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type'] === smarty_modifier_enum("SettingTypes::RADIOGROUP")) {?>
                    <div class="select-field" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['variants'], 'v', false, 'k');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
                            <label for="variant_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" class="radio">
                                <input type="radio" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['value'] === $_smarty_tpl->tpl_vars['k']->value) {?>checked="checked"<?php }?> id="variant_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['disable_input']->value) {?>disabled="disabled"<?php }?>> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8');?>

                            </label>
                        <?php
}
if ($_smarty_tpl->tpl_vars['v']->do_else) {
?>
                            <?php echo $_smarty_tpl->__("no_items");?>

                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type'] === smarty_modifier_enum("SettingTypes::MULTIPLE_SELECT")) {?>
                    <select id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_name']->value, ENT_QUOTES, 'UTF-8');?>
[]" multiple="multiple" <?php if ($_smarty_tpl->tpl_vars['disable_input']->value) {?>disabled="disabled"<?php }?>>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['variants'], 'v', false, 'k');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
                            <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['value'][$_smarty_tpl->tpl_vars['k']->value] === smarty_modifier_enum("YesNo::YES")) {?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                    <?php echo $_smarty_tpl->__("multiple_selectbox_notice");?>

                <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type'] === smarty_modifier_enum("SettingTypes::MULTIPLE_CHECKBOXES")) {?>
                    <div class="select-field" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <input type="hidden" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="N" <?php if ($_smarty_tpl->tpl_vars['disable_input']->value) {?>disabled="disabled"<?php }?> />
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['variants'], 'v', false, 'k');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
                            <label for="variant_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" class="checkbox">
                                <input type="checkbox" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_name']->value, ENT_QUOTES, 'UTF-8');?>
[]" id="variant_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['value'][$_smarty_tpl->tpl_vars['k']->value] == smarty_modifier_enum("YesNo::YES")) {?>checked="checked"<?php }?> <?php if ($_smarty_tpl->tpl_vars['disable_input']->value) {?>disabled="disabled"<?php }?>>
                                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8');?>

                            </label>
                        <?php
}
if ($_smarty_tpl->tpl_vars['v']->do_else) {
?>
                            <?php echo $_smarty_tpl->__("no_items");?>

                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type'] === smarty_modifier_enum("SettingTypes::COUNTRY")) {?>
                    <select class="cm-country cm-location-sw-billing" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_name']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['disable_input']->value) {?>disabled="disabled"<?php }?>>
                        <option value="">- <?php echo $_smarty_tpl->__("select_country");?>
 -</option>
                        <?php $_smarty_tpl->_assignInScope('countries', fn_get_simple_countries(''));?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'country', false, 'code');
$_smarty_tpl->tpl_vars['country']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['code']->value => $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->do_else = false;
?>
                            <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['code']->value === $_smarty_tpl->tpl_vars['item']->value['value']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['country']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type'] === smarty_modifier_enum("SettingTypes::STATE")) {?>
                    <select class="cm-state cm-location-sw-billing" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_name']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['disable_input']->value) {?>disabled="disabled"<?php }?>>
                        <option value="">- <?php echo $_smarty_tpl->__("select_state");?>
 -</option>
                    </select>
                    <input type="text" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
_d" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['value'], ENT_QUOTES, 'UTF-8');?>
" size="32" maxlength="64" disabled="disabled" class="cm-state cm-location-sw-billing hidden" />
                <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type'] === smarty_modifier_enum("SettingTypes::FILE")) {?>
                    <div class="input-append">
                        <input id="file_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
" type="text" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['value'], ENT_QUOTES, 'UTF-8');?>
" size="30" <?php if ($_smarty_tpl->tpl_vars['disable_input']->value) {?>disabled="disabled"<?php }?>>
                        <button id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
" type="button" class="btn" onclick="Tygh.fileuploader.init('box_server_upload', this.id);" <?php if ($_smarty_tpl->tpl_vars['disable_input']->value) {?>disabled="disabled"<?php }?>><?php echo $_smarty_tpl->__("browse");?>
</button>
                    </div>
                <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type'] === smarty_modifier_enum("SettingTypes::MULTIPLE_CHECKBOXES_FOR_SELECTBOX")) {?>
                    <div id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['variants'], 'v', false, 'k');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
                            <label for="variant_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" class="checkbox">
                                <input type="checkbox" class="cm-combo-checkbox" id="variant_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_name']->value, ENT_QUOTES, 'UTF-8');?>
[]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['value'][$_smarty_tpl->tpl_vars['k']->value] === smarty_modifier_enum("YesNo::YES")) {?>checked="checked"<?php }?> <?php if ($_smarty_tpl->tpl_vars['disable_input']->value) {?>disabled="disabled"<?php }?>>
                                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8');?>

                            </label>
                        <?php
}
if ($_smarty_tpl->tpl_vars['v']->do_else) {
?>
                            <?php echo $_smarty_tpl->__("no_items");?>

                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type'] === smarty_modifier_enum("SettingTypes::SELECTBOX_WITH_SOURCE")) {?>
                    <select id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_name']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-combo-select" <?php if ($_smarty_tpl->tpl_vars['disable_input']->value) {?>disabled="disabled"<?php }?>>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['variants'], 'v', false, 'k');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
                            <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['value'] === $_smarty_tpl->tpl_vars['k']->value) {?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type'] === smarty_modifier_enum("SettingTypes::PHONE")) {?>
                    <?php $_smarty_tpl->_assignInScope('attrs', array());?>
                    <?php if ($_smarty_tpl->tpl_vars['disable_input']->value) {?>
                        <?php $_smarty_tpl->_assignInScope('attrs', array('disabled'=>"disabled"));?>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['placeholder']->value) {?>
                        <?php $_smarty_tpl->_assignInScope('placeholder_text', $_smarty_tpl->__($_smarty_tpl->tpl_vars['placeholder']->value));?>
                    <?php }?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:components/phone.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['html_id']->value,'name'=>$_smarty_tpl->tpl_vars['html_name']->value,'value'=>$_smarty_tpl->tpl_vars['item']->value['value'],'placeholder'=>$_smarty_tpl->tpl_vars['placeholder_text']->value,'attrs'=>$_smarty_tpl->tpl_vars['attrs']->value,'show_control_group'=>false,'show_controls'=>false,'width'=>"full"), 0, false);
?>
                <?php } else { ?>
                    <input id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
" type="text" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_name']->value, ENT_QUOTES, 'UTF-8');?>
" size="30" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['value'], ENT_QUOTES, 'UTF-8');?>
" class="<?php if ($_smarty_tpl->tpl_vars['item']->value['type'] === smarty_modifier_enum("SettingTypes::NUMBER")) {?> cm-value-integer<?php }?>" <?php if ($_smarty_tpl->tpl_vars['disable_input']->value) {?>disabled="disabled"<?php }?> <?php if ($_smarty_tpl->tpl_vars['placeholder']->value) {?>placeholder="<?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['placeholder']->value);?>
"<?php }?> />
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['field_extra_description']->value) {?>
                    <p><?php if ($_smarty_tpl->tpl_vars['field_extra_link']->value) {?><a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['field_extra_link']->value), ENT_QUOTES, 'UTF-8');?>
" target="_blank"><?php }
echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['field_extra_description']->value);
if ($_smarty_tpl->tpl_vars['field_extra_link']->value) {?></a><?php }?></p>
                <?php }?>
                <div class="right update-for-all">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/update_for_all.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('display'=>$_smarty_tpl->tpl_vars['item']->value['update_for_all'],'object_id'=>$_smarty_tpl->tpl_vars['item']->value['object_id'],'name'=>"update_all_vendors[".((string)$_smarty_tpl->tpl_vars['item']->value['object_id'])."]",'hide_element'=>$_smarty_tpl->tpl_vars['html_id']->value), 0, false);
?>
                </div>
            </div>
        </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type'] == smarty_modifier_enum("SettingTypes::SELECTABLE_BOX")) {?>
        <div class="control-group">
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/selectable_box.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('addon'=>$_smarty_tpl->tpl_vars['section']->value,'name'=>$_smarty_tpl->tpl_vars['html_name']->value,'id'=>$_smarty_tpl->tpl_vars['html_id']->value,'fields'=>$_smarty_tpl->tpl_vars['item']->value['variants'],'selected_fields'=>$_smarty_tpl->tpl_vars['item']->value['value']), 0, false);
?>
        </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['total']->value === $_smarty_tpl->tpl_vars['index']->value && $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sw_header_first') === "true") {?>
    </fieldset>
</div>
<?php }
}
}
