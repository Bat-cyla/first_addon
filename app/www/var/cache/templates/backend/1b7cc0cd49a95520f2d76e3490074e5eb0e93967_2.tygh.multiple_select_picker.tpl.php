<?php
/* Smarty version 4.1.1, created on 2024-06-27 10:36:48
  from '/app/www/design/backend/templates/common/multiple_select_picker.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_667d1690597b64_75840969',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b7cc0cd49a95520f2d76e3490074e5eb0e93967' => 
    array (
      0 => '/app/www/design/backend/templates/common/multiple_select_picker.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_667d1690597b64_75840969 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.in_array.php','function'=>'smarty_modifier_in_array',),));
\Tygh\Languages\Helper::preloadLangVars(array('type_to_search'));
$_smarty_tpl->_assignInScope('is_disabled', (($tmp = $_smarty_tpl->tpl_vars['is_disabled']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('allow_add', (($tmp = $_smarty_tpl->tpl_vars['allow_add']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('placeholder', $_smarty_tpl->__("type_to_search"));?>

<div class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class_prefix']->value, ENT_QUOTES, 'UTF-8');?>
__input multiple-select__picker-container">
    <label for="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
_selector_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['storefront_id']->value, ENT_QUOTES, 'UTF-8');?>
"
           class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class_prefix']->value, ENT_QUOTES, 'UTF-8');?>
__label"
    ><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['label_text']->value, ENT_QUOTES, 'UTF-8');?>
</label>

    <select multiple
            id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
_selector_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['storefront_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            class="cm-object-picker object-picker__select <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class_prefix']->value, ENT_QUOTES, 'UTF-8');?>
__picker"
            name=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>

            data-ca-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
-picker
            data-ca-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
-editor-receiver-search-method="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-object-picker-object-type="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-object-picker-escape-html="false"
            <?php if ($_smarty_tpl->tpl_vars['load_items_url']->value) {?>
                data-ca-object-picker-ajax-url="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['load_items_url']->value), ENT_QUOTES, 'UTF-8');?>
"
                data-ca-object-picker-ajax-delay="250"
            <?php }?>
            data-ca-object-picker-autofocus="false"
            data-ca-object-picker-autoopen="false"
            data-ca-object-picker-close-on-select="false"
            data-ca-object-picker-placeholder="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['placeholder']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-object-picker-placeholder-value=""
            data-ca-object-picker-allow-clear="<?php if ($_smarty_tpl->tpl_vars['is_disabled']->value) {?>false<?php } else { ?>true<?php }?>"
            <?php if ($_smarty_tpl->tpl_vars['allow_add']->value) {?>
                data-ca-object-picker-enable-create-object="true"
                data-ca-object-picker-template-result-new-selector="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['template_result_new_selector']->value, ENT_QUOTES, 'UTF-8');?>
"
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['template_result_selector']->value) {?>
                data-ca-object-picker-template-result-selector="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['template_result_selector']->value, ENT_QUOTES, 'UTF-8');?>
"
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['is_disabled']->value) {?>
                disabled
            <?php }?>
    >
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item', false, 'k');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['id_field']->value) {?>
                <?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['id_field']->value]);?>
            <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['k']->value);?>
            <?php }?>
            
            <?php if ($_smarty_tpl->tpl_vars['name_field']->value) {?>
                <?php $_smarty_tpl->_assignInScope('item_name', $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['name_field']->value]);?>
            <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('item_name', $_smarty_tpl->tpl_vars['item']->value);?>
            <?php }?>

            <?php if (smarty_modifier_in_array($_smarty_tpl->tpl_vars['id']->value,$_smarty_tpl->tpl_vars['item_ids']->value)) {?>
                <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" selected><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_name']->value, ENT_QUOTES, 'UTF-8');?>
</option>
            <?php } elseif (!$_smarty_tpl->tpl_vars['load_items_url']->value) {?>
                <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_name']->value, ENT_QUOTES, 'UTF-8');?>
</option>
            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
</div>
<?php }
}
