<?php
/* Smarty version 4.1.1, created on 2024-05-14 15:59:56
  from '/app/www/design/backend/templates/views/promotions/components/bonus.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6643604c9aabd3_09863239',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98ca34e973c7addbe43f30fd2d54f11eeb8bb819' => 
    array (
      0 => '/app/www/design/backend/templates/views/promotions/components/bonus.tpl',
      1 => 1693486476,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6643604c9aabd3_09863239 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('remove','yes','no_data'));
$_smarty_tpl->_assignInScope('l', "promotion_bonus_".((string)$_smarty_tpl->tpl_vars['bonus_data']->value['bonus']));?>

<div class="conditions-tree-node clearfix cm-row-item">
    <div class="pull-right">
        <a class="hand icon-trash cm-delete-row cm-tooltip" name="remove" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("remove");?>
"></a>
    </div>
    <label><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['l']->value);?>
:&nbsp;</label>
    <input type="hidden" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
[bonus]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bonus_data']->value['bonus'], ENT_QUOTES, 'UTF-8');?>
" />

    <?php if ($_smarty_tpl->tpl_vars['schema']->value['bonuses'][$_smarty_tpl->tpl_vars['bonus_data']->value['bonus']]['type'] == "input") {?>
    <input class="input-text" type="text" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
[value]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bonus_data']->value['value'], ENT_QUOTES, 'UTF-8');?>
" />

    <?php } elseif ($_smarty_tpl->tpl_vars['schema']->value['bonuses'][$_smarty_tpl->tpl_vars['bonus_data']->value['bonus']]['type'] == "hidden") {?>
    <input type="hidden" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
[value]" value="Y" /><?php echo $_smarty_tpl->__("yes");?>


    <?php } elseif ($_smarty_tpl->tpl_vars['schema']->value['bonuses'][$_smarty_tpl->tpl_vars['bonus_data']->value['bonus']]['type'] == "checkbox") {?>
    <input type="checkbox" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
[value]" value="Y" <?php if ($_smarty_tpl->tpl_vars['bonus_data']->value['value'] == "Y") {?>checked="checked"<?php }?> />

    <?php } elseif ($_smarty_tpl->tpl_vars['schema']->value['bonuses'][$_smarty_tpl->tpl_vars['bonus_data']->value['bonus']]['type'] == "select") {?>
    <?php $_smarty_tpl->_assignInScope('_items', fn_get_promotion_variants((($tmp = $_smarty_tpl->tpl_vars['schema']->value['bonuses'][$_smarty_tpl->tpl_vars['bonus_data']->value['bonus']]['variants'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['schema']->value['bonuses'][$_smarty_tpl->tpl_vars['bonus_data']->value['bonus']]['variants_function'] ?? null : $tmp)));?>

    <?php if ($_smarty_tpl->tpl_vars['_items']->value) {?>
    <select name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
[value]">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_items']->value, 'v', false, '_k');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
            <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_k']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['_k']->value == $_smarty_tpl->tpl_vars['bonus_data']->value['value']) {?>selected="selected"<?php }?>><?php if ($_smarty_tpl->tpl_vars['schema']->value['bonuses'][$_smarty_tpl->tpl_vars['bonus_data']->value['bonus']]['variants_function']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8');
} else {
echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['v']->value);
}?></option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
    <?php } else { ?>
    <input type="hidden" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
[value]" value="" />
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
    <?php }?>

    <?php } elseif ($_smarty_tpl->tpl_vars['schema']->value['bonuses'][$_smarty_tpl->tpl_vars['bonus_data']->value['bonus']]['type'] == "picker") {?>
        <?php echo smarty_function_include_ext(array('file'=>$_smarty_tpl->tpl_vars['schema']->value['bonuses'][$_smarty_tpl->tpl_vars['bonus_data']->value['bonus']]['picker_props']['picker'],'data_id'=>"objects_".((string)$_smarty_tpl->tpl_vars['elm_id']->value),'input_name'=>((string)$_smarty_tpl->tpl_vars['prefix']->value)."[value]",'item_ids'=>$_smarty_tpl->tpl_vars['bonus_data']->value['value'],'params_array'=>$_smarty_tpl->tpl_vars['schema']->value['bonuses'][$_smarty_tpl->tpl_vars['bonus_data']->value['bonus']]['picker_props']['params'],'owner_company_id'=>$_smarty_tpl->tpl_vars['promotion_data']->value['company_id'],'but_meta'=>'pull-left'),$_smarty_tpl);?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['schema']->value['bonuses'][$_smarty_tpl->tpl_vars['bonus_data']->value['bonus']]['discount_bonuses']) {?>
        <select name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
[discount_bonus]">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['schema']->value['bonuses'][$_smarty_tpl->tpl_vars['bonus_data']->value['bonus']]['discount_bonuses'], 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
                <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value == $_smarty_tpl->tpl_vars['bonus_data']->value['discount_bonus']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['v']->value);?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>

        <input class="input-medium cm-numeric" data-a-dec="." data-a-sep="" data-a-sign="" type="text" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
[discount_value]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bonus_data']->value['discount_value'], ENT_QUOTES, 'UTF-8');?>
" />
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
            $('.cm-numeric').autoNumeric('init');
        <?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php }?>
</div>
<?php }
}
