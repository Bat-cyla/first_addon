<?php
/* Smarty version 4.1.1, created on 2024-07-11 11:56:06
  from '/app/www/design/themes/responsive/templates/pickers/products/js.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_668f9e2647e335_58828707',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9fe3f325389df704b6bee2f8857c44f3e1890de8' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/pickers/products/js.tpl',
      1 => 1720610754,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668f9e2647e335_58828707 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('remove','remove'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><tr <?php if (!$_smarty_tpl->tpl_vars['clone']->value) {?>id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['root_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['delete_id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php }?>class="cm-js-item<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> cm-clone hidden<?php }?>">
<td>
    <ul>
        <li><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value, ENT_QUOTES, 'UTF-8');?>

            <?php if (!$_smarty_tpl->tpl_vars['view_only']->value) {?>
                <a href="javascript: Tygh.$.cePicker('delete_js_item', '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['root_id']->value, ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['delete_id']->value, ENT_QUOTES, 'UTF-8');?>
', 'p');" class="ty-delete-big" title="<?php echo $_smarty_tpl->__("remove");?>
"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-cancel-circle ty-delete-big__icon"),$_smarty_tpl);?>
</a>
            <?php }?>
        </li>
        <?php if ($_smarty_tpl->tpl_vars['options']->value) {?>
        <li><?php echo $_smarty_tpl->tpl_vars['options']->value;?>
</li>
        <?php }?>
    </ul>
    <?php if (is_array($_smarty_tpl->tpl_vars['options_array']->value)) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['options_array']->value, 'option', false, 'option_id');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option_id']->value => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
        <input type="hidden" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
[product_options][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['option_id']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['option']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> disabled="disabled"<?php }?> />
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['product_id']->value) {?>
        <input type="hidden" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
[product_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> disabled="disabled"<?php }?> />
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['amount_input']->value == "hidden") {?>
    <input type="hidden" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
[amount]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['amount']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> disabled="disabled"<?php }?> />
    <?php }?>
</td>
    <?php if ($_smarty_tpl->tpl_vars['amount_input']->value == "text") {?>
<td class="ty-center">
    <input type="text" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
[amount]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['amount']->value, ENT_QUOTES, 'UTF-8');?>
" size="3" class="short"<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> disabled="disabled"<?php }?> />
</td>
    <?php }?>
</tr>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="pickers/products/js.tpl" id="<?php echo smarty_function_set_id(array('name'=>"pickers/products/js.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><tr <?php if (!$_smarty_tpl->tpl_vars['clone']->value) {?>id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['root_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['delete_id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php }?>class="cm-js-item<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> cm-clone hidden<?php }?>">
<td>
    <ul>
        <li><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value, ENT_QUOTES, 'UTF-8');?>

            <?php if (!$_smarty_tpl->tpl_vars['view_only']->value) {?>
                <a href="javascript: Tygh.$.cePicker('delete_js_item', '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['root_id']->value, ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['delete_id']->value, ENT_QUOTES, 'UTF-8');?>
', 'p');" class="ty-delete-big" title="<?php echo $_smarty_tpl->__("remove");?>
"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-cancel-circle ty-delete-big__icon"),$_smarty_tpl);?>
</a>
            <?php }?>
        </li>
        <?php if ($_smarty_tpl->tpl_vars['options']->value) {?>
        <li><?php echo $_smarty_tpl->tpl_vars['options']->value;?>
</li>
        <?php }?>
    </ul>
    <?php if (is_array($_smarty_tpl->tpl_vars['options_array']->value)) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['options_array']->value, 'option', false, 'option_id');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option_id']->value => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
        <input type="hidden" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
[product_options][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['option_id']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['option']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> disabled="disabled"<?php }?> />
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['product_id']->value) {?>
        <input type="hidden" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
[product_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> disabled="disabled"<?php }?> />
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['amount_input']->value == "hidden") {?>
    <input type="hidden" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
[amount]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['amount']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> disabled="disabled"<?php }?> />
    <?php }?>
</td>
    <?php if ($_smarty_tpl->tpl_vars['amount_input']->value == "text") {?>
<td class="ty-center">
    <input type="text" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
[amount]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['amount']->value, ENT_QUOTES, 'UTF-8');?>
" size="3" class="short"<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> disabled="disabled"<?php }?> />
</td>
    <?php }?>
</tr>
<?php }
}
}
