<?php
/* Smarty version 4.1.1, created on 2024-05-28 16:18:44
  from '/app/www/design/backend/templates/views/products/components/select_product_options.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6655d9b4e92079_56531509',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c92ddb03fd8945c441c128a3407b792d3a5bc635' => 
    array (
      0 => '/app/www/design/backend/templates/views/products/components/select_product_options.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/modifier.tpl' => 3,
    'tygh:common/fileuploader.tpl' => 1,
  ),
),false)) {
function content_6655d9b4e92079_56531509 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('select_option_above','please_select_one','na','please_select_one','na','any_option_combinations'));
if ($_smarty_tpl->tpl_vars['product_options']->value) {?>
<div class="cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" id="product_options_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
<div class="cm-switch-availability-container" id="sw_option_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_AOC_suffix">
<input type="hidden" name="appearance[id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="appearance[name]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" />

<?php if ($_smarty_tpl->tpl_vars['only_selectable_options']->value) {?>
    <input type="hidden" name="appearance[only_selectable_options]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['only_selectable_options']->value, ENT_QUOTES, 'UTF-8');?>
" />
    <input type="hidden" name="additional_info[get_only_selectable_options]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['only_selectable_options']->value, ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>

<?php $_smarty_tpl->_assignInScope('id', (($tmp = $_smarty_tpl->tpl_vars['product']->value['object_id'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['id']->value ?? null : $tmp));?>


<?php if ($_smarty_tpl->tpl_vars['name']->value == "cart_products") {?>
    <input type="hidden" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
][object_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />
    <input type="hidden" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
][product_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>

<div id="option_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_AOC" class="cm-picker-product-options form-horizontal product-options">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_options']->value, 'po');
$_smarty_tpl->tpl_vars['po']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['po']->value) {
$_smarty_tpl->tpl_vars['po']->do_else = false;
?>
<div id="opt_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
" class="control-group <?php if ($_smarty_tpl->tpl_vars['additional_class']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['additional_class']->value, ENT_QUOTES, 'UTF-8');
}?>">
    <label for="option_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
" id="option_description_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
" class="control-label <?php if ($_smarty_tpl->tpl_vars['po']->value['required'] == "Y") {?>cm-required<?php }?> <?php if ($_smarty_tpl->tpl_vars['po']->value['regexp']) {?>cm-regexp<?php }?>" <?php if ($_smarty_tpl->tpl_vars['po']->value['regexp']) {?>data-ca-regexp="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['regexp'], ENT_QUOTES, 'UTF-8');?>
" data-ca-message="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['incorrect_message'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_name'], ENT_QUOTES, 'UTF-8');?>
:</label>
<div class="controls">
    <?php if ($_smarty_tpl->tpl_vars['po']->value['option_type'] == smarty_modifier_enum("ProductOptionTypes::SELECTBOX")) {?>         <?php if ($_smarty_tpl->tpl_vars['po']->value['variants']) {?>
            <select id="option_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
][product_options][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
]" <?php if ($_smarty_tpl->tpl_vars['product']->value['options_update'] || $_smarty_tpl->tpl_vars['update_options']->value) {?>onchange="fn_change_options('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
', <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
, '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
');"<?php }?> <?php if ($_smarty_tpl->tpl_vars['cp']->value['exclude_from_calculate'] && !$_smarty_tpl->tpl_vars['product']->value['aoc'] || $_smarty_tpl->tpl_vars['po']->value['disabled']) {?>disabled="disabled"<?php }?> <?php if ($_smarty_tpl->tpl_vars['po']->value['disabled']) {?>class="cm-skip-avail-switch"<?php }?>>
            <?php if ($_smarty_tpl->tpl_vars['product']->value['options_type'] == smarty_modifier_enum("ProductOptionsApplyOrder::SEQUENTIAL")) {?><option value=""><?php if ($_smarty_tpl->tpl_vars['po']->value['disabled']) {
echo $_smarty_tpl->__("select_option_above");
} else {
echo $_smarty_tpl->__("please_select_one");
}?></option><?php }?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['po']->value['variants'], 'vr');
$_smarty_tpl->tpl_vars['vr']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['vr']->value) {
$_smarty_tpl->tpl_vars['vr']->do_else = false;
?>
                <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['vr']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['po']->value['value'] == $_smarty_tpl->tpl_vars['vr']->value['variant_id']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['vr']->value['variant_name'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['settings']->value['General']['display_options_modifiers'] == "Y") {
if (floatval($_smarty_tpl->tpl_vars['vr']->value['modifier'])) {?> (<?php $_smarty_tpl->_subTemplateRender("tygh:common/modifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('mod_type'=>$_smarty_tpl->tpl_vars['vr']->value['modifier_type'],'mod_value'=>$_smarty_tpl->tpl_vars['vr']->value['modifier'],'display_sign'=>true), 0, true);
?>)<?php }
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:select_options"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:select_options"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:select_options"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?></option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        <?php } else { ?>
            <?php echo $_smarty_tpl->__("na");?>

            <input type="hidden" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
][product_options][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['value'], ENT_QUOTES, 'UTF-8');?>
" id="option_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['cp']->value['exclude_from_calculate'] && !$_smarty_tpl->tpl_vars['product']->value['aoc'] || $_smarty_tpl->tpl_vars['po']->value['disabled']) {?>disabled="disabled"<?php }?>/>
        <?php }?>

    <?php } elseif ($_smarty_tpl->tpl_vars['po']->value['option_type'] == smarty_modifier_enum("ProductOptionTypes::RADIO_GROUP")) {?>         <?php if ($_smarty_tpl->tpl_vars['po']->value['variants']) {?>
            <input type="hidden" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
][product_options][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['value'], ENT_QUOTES, 'UTF-8');?>
" id="option_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['cp']->value['exclude_from_calculate'] && !$_smarty_tpl->tpl_vars['product']->value['aoc'] || $_smarty_tpl->tpl_vars['po']->value['disabled']) {?>disabled="disabled"<?php }?>/>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['po']->value['variants'], 'vr', false, NULL, 'vars', array (
));
$_smarty_tpl->tpl_vars['vr']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['vr']->value) {
$_smarty_tpl->tpl_vars['vr']->do_else = false;
?>
                <label id="option_description_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['vr']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
" class="radio">
                <input id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_variant_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['vr']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
" type="radio" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
][product_options][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['vr']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['po']->value['value'] == $_smarty_tpl->tpl_vars['vr']->value['variant_id']) {?>checked="checked"<?php }?> <?php if ($_smarty_tpl->tpl_vars['product']->value['options_update'] || $_smarty_tpl->tpl_vars['update_options']->value) {?>onclick="fn_change_options('<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['c_obj']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['id']->value ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
', <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
, '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
');"<?php }?> <?php if ($_smarty_tpl->tpl_vars['cp']->value['exclude_from_calculate'] && !$_smarty_tpl->tpl_vars['product']->value['aoc'] || $_smarty_tpl->tpl_vars['po']->value['disabled']) {?>disabled="disabled"<?php }?> <?php if ($_smarty_tpl->tpl_vars['po']->value['disabled']) {?>class="cm-skip-avail-switch"<?php }?> />
                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['vr']->value['variant_name'], ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['display_options_modifiers'] == "Y") {
if (floatval($_smarty_tpl->tpl_vars['vr']->value['modifier'])) {?>(<?php $_smarty_tpl->_subTemplateRender("tygh:common/modifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('mod_type'=>$_smarty_tpl->tpl_vars['vr']->value['modifier_type'],'mod_value'=>$_smarty_tpl->tpl_vars['vr']->value['modifier'],'display_sign'=>true), 0, true);
?>)<?php }
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:select_options"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:select_options"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:select_options"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?></label>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php if (!$_smarty_tpl->tpl_vars['po']->value['value'] && $_smarty_tpl->tpl_vars['product']->value['options_type'] == smarty_modifier_enum("ProductOptionsApplyOrder::SEQUENTIAL") && !$_smarty_tpl->tpl_vars['po']->value['disabled']) {?><p class="muted description clear-both"><?php echo $_smarty_tpl->__("please_select_one");?>
</p><?php }?>
        <?php } else { ?>
            <?php echo $_smarty_tpl->__("na");?>

            <input type="hidden" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
][product_options][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['value'], ENT_QUOTES, 'UTF-8');?>
" id="option_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
" />
        <?php }?>
    <?php } elseif ($_smarty_tpl->tpl_vars['po']->value['option_type'] == smarty_modifier_enum("ProductOptionTypes::CHECKBOX")) {?> 
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['po']->value['variants'], 'vr');
$_smarty_tpl->tpl_vars['vr']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['vr']->value) {
$_smarty_tpl->tpl_vars['vr']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['vr']->value['position'] == 0) {?>
            <input id="unchecked_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_option_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['cp']->value['exclude_from_calculate'] && !$_smarty_tpl->tpl_vars['product']->value['aoc'] || $_smarty_tpl->tpl_vars['po']->value['disabled']) {?>disabled="disabled"<?php }?> type="hidden" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
][product_options][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['vr']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
" />
        <?php } else { ?>
            <div class="cm-field-container">
                <label>
            <input id="option_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
" type="checkbox" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
][product_options][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['vr']->value['variant_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['po']->value['value'] == $_smarty_tpl->tpl_vars['vr']->value['variant_id']) {?>checked="checked"<?php }?> <?php if ($_smarty_tpl->tpl_vars['product']->value['options_update'] || $_smarty_tpl->tpl_vars['update_options']->value) {?>onclick="fn_change_options('<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['c_obj']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['id']->value ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
', <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
, '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
');"<?php }?> <?php if ($_smarty_tpl->tpl_vars['cp']->value['exclude_from_calculate'] && !$_smarty_tpl->tpl_vars['product']->value['aoc'] || $_smarty_tpl->tpl_vars['po']->value['disabled']) {?>disabled="disabled"<?php }?> class="<?php if ($_smarty_tpl->tpl_vars['po']->value['disabled']) {?> cm-skip-avail-switch<?php }?>" />

            <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['display_options_modifiers'] == "Y") {
if (floatval($_smarty_tpl->tpl_vars['vr']->value['modifier'])) {?>&nbsp;(<?php $_smarty_tpl->_subTemplateRender("tygh:common/modifier.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('mod_type'=>$_smarty_tpl->tpl_vars['vr']->value['modifier_type'],'mod_value'=>$_smarty_tpl->tpl_vars['vr']->value['modifier'],'display_sign'=>true), 0, true);
?>)<?php }
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:select_options"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:select_options"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:select_options"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>
                </label>
            </div>
        <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <?php } elseif ($_smarty_tpl->tpl_vars['po']->value['option_type'] == smarty_modifier_enum("ProductOptionTypes::INPUT")) {?>         <input id="option_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
" type="text" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
][product_options][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['po']->value['value'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['po']->value['inner_hint'] ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['cp']->value['exclude_from_calculate'] && !$_smarty_tpl->tpl_vars['product']->value['aoc']) {?>disabled="disabled"<?php }?> class="input-text <?php if ($_smarty_tpl->tpl_vars['po']->value['inner_hint']) {?>cm-hint<?php }?>" <?php if ($_smarty_tpl->tpl_vars['po']->value['inner_hint']) {?>title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['inner_hint'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['update_options']->value) {?>onchange="fn_change_options('<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['c_obj']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['id']->value ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
', <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
, '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
');"<?php }?> />
    <?php } elseif ($_smarty_tpl->tpl_vars['po']->value['option_type'] == smarty_modifier_enum("ProductOptionTypes::TEXT")) {?>         <textarea id="option_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
][product_options][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
]" <?php if ($_smarty_tpl->tpl_vars['cp']->value['exclude_from_calculate']) {?>disabled="disabled"<?php }?> class="input-textarea-long <?php if ($_smarty_tpl->tpl_vars['po']->value['inner_hint'] && $_smarty_tpl->tpl_vars['po']->value['value'] == '') {?>cm-hint<?php }?>" <?php if ($_smarty_tpl->tpl_vars['po']->value['inner_hint']) {?>title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['inner_hint'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['update_options']->value) {?>onchange="fn_change_options('<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['c_obj']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['id']->value ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
', <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
, '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
');"<?php }?>><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['po']->value['value'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['po']->value['inner_hint'] ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</textarea>
    <?php } elseif ($_smarty_tpl->tpl_vars['po']->value['option_type'] == smarty_modifier_enum("ProductOptionTypes::FILE")) {?>         <div class="clearfix">
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->tpl_vars['product']->value['extra']['custom_files'][$_smarty_tpl->tpl_vars['po']->value['option_id']],'var_name'=>((string)$_smarty_tpl->tpl_vars['name']->value)."[".((string)$_smarty_tpl->tpl_vars['po']->value['option_id']).((string)$_smarty_tpl->tpl_vars['id']->value)."]",'multiupload'=>$_smarty_tpl->tpl_vars['po']->value['multiupload'],'hidden_name'=>((string)$_smarty_tpl->tpl_vars['name']->value)."[custom_files][".((string)$_smarty_tpl->tpl_vars['po']->value['option_id']).((string)$_smarty_tpl->tpl_vars['id']->value)."]",'hidden_value'=>((string)$_smarty_tpl->tpl_vars['id']->value)."_".((string)$_smarty_tpl->tpl_vars['po']->value['option_id']),'label_id'=>"option_".((string)$_smarty_tpl->tpl_vars['id']->value)."_".((string)$_smarty_tpl->tpl_vars['po']->value['option_id']),'hide_server'=>true), 0, true);
?>
        </div>
    <?php }?>
</div>
</div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php if ($_smarty_tpl->tpl_vars['show_aoc']->value) {?>
<input type="hidden" name="appearance[show_aoc]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['show_aoc']->value, ENT_QUOTES, 'UTF-8');?>
" />
<div class="control-group cm-picker-product-options">
    <label for="sw_option_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_AOC" class="checkbox">
    <input class="cm-switch-availability cm-switch-inverse cm-option-aoc" id="sw_option_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_AOC" type="checkbox" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
][product_options][AOC]" value="N" /><?php echo $_smarty_tpl->__("any_option_combinations");?>
</label>
</div>
<?php }?>
</div>
<!--product_options_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }
}
}
