<?php
/* Smarty version 4.1.1, created on 2024-05-14 15:59:56
  from '/app/www/design/backend/templates/views/promotions/components/condition.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6643604c9326f5_78634095',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2538be5d153aa9c3c8d71c1d7321eb55ed45831f' => 
    array (
      0 => '/app/www/design/backend/templates/views/promotions/components/condition.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/ajax_select_object.tpl' => 1,
  ),
),false)) {
function content_6643604c9326f5_78634095 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),));
\Tygh\Languages\Helper::preloadLangVars(array('remove','no_data','yes'));
$_smarty_tpl->_assignInScope('l', "promotion_cond_".((string)$_smarty_tpl->tpl_vars['condition_data']->value['condition']));?>

<div class="conditions-tree-node clearfix">
    <div class="pull-right">
        <a class="icon-trash cm-tooltip cm-delete-row" name="remove" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("remove");?>
"></a>
    </div>
    <label><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['l']->value);?>
&nbsp;</label>

    <?php $_smarty_tpl->_assignInScope('p_md', md5($_smarty_tpl->tpl_vars['prefix']->value));?>


    <?php if ($_smarty_tpl->tpl_vars['schema']->value['conditions'][$_smarty_tpl->tpl_vars['condition_data']->value['condition']]['type'] == "mixed") {?>
                <?php $_smarty_tpl->_assignInScope('condition_element', $_smarty_tpl->tpl_vars['condition_data']->value['condition_element']);?>
        <select name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
[condition_element]" id="mixed_condition_element_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p_md']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php $_smarty_tpl->_assignInScope('items', fn_get_promotion_variants($_smarty_tpl->tpl_vars['schema']->value['conditions'][$_smarty_tpl->tpl_vars['condition_data']->value['condition']]['conditions_function']));?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'v', false, '_k');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['v']->value['is_group']) {?>
                    <optgroup label="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['v']->value['group'], ENT_QUOTES, 'UTF-8');?>
">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['v']->value['items'], '__v', false, '__k');
$_smarty_tpl->tpl_vars['__v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['__k']->value => $_smarty_tpl->tpl_vars['__v']->value) {
$_smarty_tpl->tpl_vars['__v']->do_else = false;
?>
                            <?php if (!$_smarty_tpl->tpl_vars['condition_element']->value) {?>
                                <?php $_smarty_tpl->_assignInScope('condition_element', $_smarty_tpl->tpl_vars['__k']->value);?>
                            <?php }?>
                            <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['__k']->value, ENT_QUOTES, 'UTF-8');?>
"
                                    <?php if ($_smarty_tpl->tpl_vars['__k']->value == $_smarty_tpl->tpl_vars['condition_data']->value['condition_element']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['__v']->value['value'], ENT_QUOTES, 'UTF-8');?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </optgroup>
                <?php } else { ?>
                    <?php if (!$_smarty_tpl->tpl_vars['condition_element']->value) {?>
                        <?php $_smarty_tpl->_assignInScope('condition_element', $_smarty_tpl->tpl_vars['_k']->value);?>
                    <?php }?>
                    <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_k']->value, ENT_QUOTES, 'UTF-8');?>
"
                            <?php if ($_smarty_tpl->tpl_vars['_k']->value == $_smarty_tpl->tpl_vars['condition_data']->value['condition_element']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['v']->value['value'], ENT_QUOTES, 'UTF-8');?>
</option>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
            (function (_, $) {
                $(document).ready(function () {
                    $('#mixed_condition_element_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p_md']->value, ENT_QUOTES, 'UTF-8');?>
').on('change', function () {
                        fn_promotion_rebuild_mixed_data(<?php echo json_encode($_smarty_tpl->tpl_vars['items']->value);?>
, $(this).val(), '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p_md']->value, ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['condition_data']->value['condition_element'], ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['condition_data']->value['value'], ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['condition_data']->value['value_name'], ENT_QUOTES, 'UTF-8');?>
');
                    }).trigger('change');
                });
            }(Tygh, Tygh.$));
        <?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['schema']->value['conditions'][$_smarty_tpl->tpl_vars['condition_data']->value['condition']]['type'] == "chained") {?>
        <div class="select2-wrapper--width-auto">
            <select name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
[condition_element]" id="promotion_chained_condition_parent_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p_md']->value, ENT_QUOTES, 'UTF-8');?>
">
                <?php if ($_smarty_tpl->tpl_vars['condition_data']->value['condition_element']) {?>
                    <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['condition_data']->value['condition_element'], ENT_QUOTES, 'UTF-8');?>
" selected></option>
                <?php }?>
            </select>
        </div>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['schema']->value['conditions'][$_smarty_tpl->tpl_vars['condition_data']->value['condition']]['type'] != "list" && $_smarty_tpl->tpl_vars['schema']->value['conditions'][$_smarty_tpl->tpl_vars['condition_data']->value['condition']]['type'] != "statement") {?>
        <select name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
[operator]" id="promotion_condition_operator_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p_md']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['schema']->value['conditions'][$_smarty_tpl->tpl_vars['condition_data']->value['condition']]['operators'], 'op');
$_smarty_tpl->tpl_vars['op']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['op']->value) {
$_smarty_tpl->tpl_vars['op']->do_else = false;
?>
                <?php $_smarty_tpl->_assignInScope('l', "promotion_op_".((string)$_smarty_tpl->tpl_vars['op']->value));?>
                <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['op']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['op']->value == $_smarty_tpl->tpl_vars['condition_data']->value['operator']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['l']->value);?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
    <?php }?>

    <input type="hidden" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
[condition]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['condition_data']->value['condition'], ENT_QUOTES, 'UTF-8');?>
"/>

    <?php if ($_smarty_tpl->tpl_vars['schema']->value['conditions'][$_smarty_tpl->tpl_vars['condition_data']->value['condition']]['type'] == "input") {?>
        <input type="text" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
[value]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['condition_data']->value['value'], ENT_QUOTES, 'UTF-8');?>
" class="input-medium"/>
    <?php } elseif ($_smarty_tpl->tpl_vars['schema']->value['conditions'][$_smarty_tpl->tpl_vars['condition_data']->value['condition']]['type'] == "select") {?>
        <select name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
[value]">
            <?php $_smarty_tpl->_assignInScope('conditions', array());?>
            <?php if ((isset($_smarty_tpl->tpl_vars['schema']->value['conditions'][$_smarty_tpl->tpl_vars['condition_data']->value['condition']]['variants']))) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['schema']->value['conditions'][$_smarty_tpl->tpl_vars['condition_data']->value['condition']]['variants'], 'variant', false, 'key');
$_smarty_tpl->tpl_vars['variant']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->do_else = false;
?>
                    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['schema']) ? $_smarty_tpl->tpl_vars['schema']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['conditions'][$_smarty_tpl->tpl_vars['condition_data']->value['condition']]['variants'][$_smarty_tpl->tpl_vars['key']->value] = $_smarty_tpl->__(((string)$_smarty_tpl->tpl_vars['schema']->value['conditions'][$_smarty_tpl->tpl_vars['condition_data']->value['condition']]['variants']));
$_smarty_tpl->_assignInScope('schema', $_tmp_array);?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php } elseif ($_smarty_tpl->tpl_vars['schema']->value['conditions'][$_smarty_tpl->tpl_vars['condition_data']->value['condition']]['variants_function']) {?>
                <?php $_smarty_tpl->_assignInScope('conditions', fn_get_promotion_variants($_smarty_tpl->tpl_vars['schema']->value['conditions'][$_smarty_tpl->tpl_vars['condition_data']->value['condition']]['variants_function']));?>
            <?php }?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['conditions']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['key']->value == $_smarty_tpl->tpl_vars['condition_data']->value['value']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
    <?php } elseif ($_smarty_tpl->tpl_vars['schema']->value['conditions'][$_smarty_tpl->tpl_vars['condition_data']->value['condition']]['type'] == "picker") {?>

        <?php $_smarty_tpl->_assignInScope('_z', "params_".((string)$_smarty_tpl->tpl_vars['zone']->value));?>
        <?php if ($_smarty_tpl->tpl_vars['schema']->value['conditions'][$_smarty_tpl->tpl_vars['condition_data']->value['condition']]['picker_props'][$_smarty_tpl->tpl_vars['_z']->value]) {?>
            <?php $_smarty_tpl->_assignInScope('params', $_smarty_tpl->tpl_vars['schema']->value['conditions'][$_smarty_tpl->tpl_vars['condition_data']->value['condition']]['picker_props'][$_smarty_tpl->tpl_vars['_z']->value]);?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('params', $_smarty_tpl->tpl_vars['schema']->value['conditions'][$_smarty_tpl->tpl_vars['condition_data']->value['condition']]['picker_props']['params']);?>
        <?php }?>

        <?php echo smarty_function_include_ext(array('file'=>$_smarty_tpl->tpl_vars['schema']->value['conditions'][$_smarty_tpl->tpl_vars['condition_data']->value['condition']]['picker_props']['picker'],'company_ids'=>$_smarty_tpl->tpl_vars['picker_selected_companies']->value,'data_id'=>"objects_".((string)$_smarty_tpl->tpl_vars['elm_id']->value),'input_name'=>((string)$_smarty_tpl->tpl_vars['prefix']->value)."[value]",'item_ids'=>$_smarty_tpl->tpl_vars['condition_data']->value['value'],'params_array'=>$_smarty_tpl->tpl_vars['params']->value,'owner_company_id'=>$_smarty_tpl->tpl_vars['promotion_data']->value['company_id'],'but_meta'=>"btn"),$_smarty_tpl);?>


    <?php } elseif ($_smarty_tpl->tpl_vars['schema']->value['conditions'][$_smarty_tpl->tpl_vars['condition_data']->value['condition']]['type'] == "list") {?>
        <input type="hidden" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
[operator]" value="in"/>
        <input type="hidden" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
[value]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['condition_data']->value['value'], ENT_QUOTES, 'UTF-8');?>
"/>
        <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['condition_data']->value['value'] ?? null)===null||$tmp==='' ? $_smarty_tpl->__("no_data") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>


    <?php } elseif ($_smarty_tpl->tpl_vars['schema']->value['conditions'][$_smarty_tpl->tpl_vars['condition_data']->value['condition']]['type'] == "statement") {?>
        <input type="hidden" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
[operator]" value="eq"/>
        <input type="hidden" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
[value]" value="Y"/>
        <?php echo $_smarty_tpl->__("yes");?>


    <?php } elseif ($_smarty_tpl->tpl_vars['schema']->value['conditions'][$_smarty_tpl->tpl_vars['condition_data']->value['condition']]['type'] == "chained") {?>
        <div class="select2-wrapper--width-auto">
            <select name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
[value]" <?php if ($_smarty_tpl->tpl_vars['condition_data']->value['operator'] == 'in' || $_smarty_tpl->tpl_vars['condition_data']->value['operator'] == 'nin') {?>multiple<?php }?> class="hidden" id="promotion_chained_condition_child_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p_md']->value, ENT_QUOTES, 'UTF-8');?>
">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, explode(",",$_smarty_tpl->tpl_vars['condition_data']->value['value']), 'preselected_child');
$_smarty_tpl->tpl_vars['preselected_child']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['preselected_child']->value) {
$_smarty_tpl->tpl_vars['preselected_child']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['preselected_child']->value) {?>
                        <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['preselected_child']->value, ENT_QUOTES, 'UTF-8');?>
" selected></option>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>
        <input id="promotion_chained_condition_child_input_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p_md']->value, ENT_QUOTES, 'UTF-8');?>
" type="text" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
[value]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['condition_data']->value['value'], ENT_QUOTES, 'UTF-8');?>
"
               class="hidden input-long"/>
        <input id="promotion_chained_condition_child_input_name_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p_md']->value, ENT_QUOTES, 'UTF-8');?>
" type="text" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
[value_name]"
               value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['condition_data']->value['value_name'], ENT_QUOTES, 'UTF-8');?>
" class="hidden input-medium"/>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
            (function (_, $) {
                $(document).ready(function () {

                    var chainedCondition = new _.ChainedPromotionConditionForm({
                        operatorSelect: $('#promotion_condition_operator_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p_md']->value, ENT_QUOTES, 'UTF-8');?>
'),
                        parentSelect: $('#promotion_chained_condition_parent_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p_md']->value, ENT_QUOTES, 'UTF-8');?>
'),
                        childSelect: $('#promotion_chained_condition_child_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p_md']->value, ENT_QUOTES, 'UTF-8');?>
'),
                        childInput: $('#promotion_chained_condition_child_input_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p_md']->value, ENT_QUOTES, 'UTF-8');?>
'),
                        settings: {
                            parent: {
                                dataUrl: "<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['schema']->value['conditions'][$_smarty_tpl->tpl_vars['condition_data']->value['condition']]['chained_options']['parent_url']), ENT_QUOTES, 'UTF-8');?>
"
                            }
                        }
                    });

                    chainedCondition.render();
                });
            })(Tygh, Tygh.$);
        <?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['schema']->value['conditions'][$_smarty_tpl->tpl_vars['condition_data']->value['condition']]['type'] == "mixed") {?>
                <select id="mixed_select_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p_md']->value, ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
[value]" class="input-medium hidden"></select>
        <div class="cm-ajax-select-object shift-input shift-left">
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/ajax_select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('data_url'=>'','text'=>'','result_elm'=>"mixed_input_".((string)$_smarty_tpl->tpl_vars['p_md']->value),'id'=>"mixed_ajax_select_".((string)$_smarty_tpl->tpl_vars['p_md']->value),'js_action'=>"$"."('#mixed_input_".((string)$_smarty_tpl->tpl_vars['p_md']->value)."').toggleBy(("."$"."('#mixed_input_".((string)$_smarty_tpl->tpl_vars['p_md']->value)."').val() != 'disable_select')); if ("."$"."('#mixed_input_".((string)$_smarty_tpl->tpl_vars['p_md']->value)."').val() == 'disable_select') "."$"."('#mixed_input_".((string)$_smarty_tpl->tpl_vars['p_md']->value)."').val('');"), 0, false);
?>
        </div>
        <input id="mixed_input_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p_md']->value, ENT_QUOTES, 'UTF-8');?>
" type="text" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
[value]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['condition_data']->value['value'], ENT_QUOTES, 'UTF-8');?>
"
               class="hidden input-medium"/>
        <input id="mixed_input_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['p_md']->value, ENT_QUOTES, 'UTF-8');?>
_name" type="text" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
[value_name]"
               value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['condition_data']->value['value_name'], ENT_QUOTES, 'UTF-8');?>
" class="hidden input-medium"/>
    <?php }?>
</div>
<?php }
}
