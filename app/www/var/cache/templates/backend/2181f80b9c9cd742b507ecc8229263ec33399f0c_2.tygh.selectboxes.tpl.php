<?php
/* Smarty version 4.1.1, created on 2024-06-06 13:53:01
  from '/app/www/design/backend/templates/views/exim/components/selectboxes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6661950d7371c0_18289435',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2181f80b9c9cd742b507ecc8229263ec33399f0c' => 
    array (
      0 => '/app/www/design/backend/templates/views/exim/components/selectboxes.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6661950d7371c0_18289435 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.in_array.php','function'=>'smarty_modifier_in_array',),));
\Tygh\Languages\Helper::preloadLangVars(array('text_exim_export_notice','exported_fields','available_fields'));
?>
<p class="muted description"><?php echo $_smarty_tpl->__("text_exim_export_notice");?>
</p>
<div class="table-wrapper">
    <table width="100%">
        <tr>
            <td class="center">
                <label for="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['left_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-required cm-all multiply-select-header"><?php echo $_smarty_tpl->__("exported_fields");?>
</label></td>
            <td>&nbsp;</td>
            <td class="center">
               <label for="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['left_id']->value, ENT_QUOTES, 'UTF-8');?>
_right"><?php echo $_smarty_tpl->__("available_fields");?>
</label>
            </td>
        </tr>
    </table>
</div>
<hr>
<div class="table-wrapper">
    <table width="100%">
        <tr>
            <td width="48%">
                <select id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['left_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['left_name']->value, ENT_QUOTES, 'UTF-8');?>
[]" multiple="multiple" class="input-full toll-select">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['assigned_ids']->value, 'key');
$_smarty_tpl->tpl_vars['key']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value) {
$_smarty_tpl->tpl_vars['key']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->tpl_vars['key']->value]) {?>
                        <?php $_smarty_tpl->_assignInScope('label', fn_exim_get_field_label($_smarty_tpl->tpl_vars['key']->value,"export"));?>
                        <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" selected="selected" <?php if ($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->tpl_vars['key']->value]['required']) {?>class=" selectbox-highlighted cm-required"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['label']->value) {?> — <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['label']->value, ENT_QUOTES, 'UTF-8');
}?></option>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['item']->value['required'] && !smarty_modifier_in_array($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['assigned_ids']->value)) {?>
                        <?php $_smarty_tpl->_assignInScope('label', fn_exim_get_field_label($_smarty_tpl->tpl_vars['key']->value,"export"));?>
                        <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" selected="selected"  class="selectbox-highlighted cm-required"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['label']->value) {?> — <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['label']->value, ENT_QUOTES, 'UTF-8');
}?></option>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
                <p class="left">
                    <span class="icon-chevron-up hand" onclick="Tygh.$('#<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['left_id']->value, ENT_QUOTES, 'UTF-8');?>
').swapOptions('up');"></span>
                    <span class="icon-chevron-down hand" onclick="Tygh.$('#<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['left_id']->value, ENT_QUOTES, 'UTF-8');?>
').swapOptions('down');"></span>
                </p>
            </td>
            <td width="4%" class="center chevron-icons">
                        <span class="icon-chevron-left hand" onclick="Tygh.$('#<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['left_id']->value, ENT_QUOTES, 'UTF-8');?>
_right').moveOptions('#<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['left_id']->value, ENT_QUOTES, 'UTF-8');?>
');"></span>
                        <br>
                        <span class="icon-chevron-right hand" onclick="Tygh.$('#<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['left_id']->value, ENT_QUOTES, 'UTF-8');?>
').moveOptions('#<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['left_id']->value, ENT_QUOTES, 'UTF-8');?>
_right', <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>
check_required: true, message: Tygh.tr('error_exim_layout_missed_fields')<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
);"></span>
            </td>
            <td width="48%" class="top">
                <select id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['left_id']->value, ENT_QUOTES, 'UTF-8');?>
_right" name="unset_mbox[]" multiple="multiple" class="input-full toll-select">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                    <?php if (!smarty_modifier_in_array($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['assigned_ids']->value) && !$_smarty_tpl->tpl_vars['item']->value['required']) {?>
                        <?php $_smarty_tpl->_assignInScope('label', fn_exim_get_field_label($_smarty_tpl->tpl_vars['key']->value,"export"));?>
                        <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['required']) {?>class="selectbox-highlighted cm-required"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['label']->value) {?> — <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['label']->value, ENT_QUOTES, 'UTF-8');
}?></option>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            </td>
        </tr>
    </table>
</div>
<?php }
}
