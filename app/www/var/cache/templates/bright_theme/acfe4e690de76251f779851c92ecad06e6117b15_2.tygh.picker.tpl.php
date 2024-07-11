<?php
/* Smarty version 4.1.1, created on 2024-07-11 11:56:06
  from '/app/www/design/themes/responsive/templates/pickers/products/picker.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_668f9e26449050_99698035',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'acfe4e690de76251f779851c92ecad06e6117b15' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/pickers/products/picker.tpl',
      1 => 1720610754,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:pickers/products/js.tpl' => 4,
    'tygh:common/options_info.tpl' => 4,
    'tygh:buttons/button.tpl' => 2,
  ),
),false)) {
function content_668f9e26449050_99698035 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('no_items','name','quantity','options','any_option_combinations','deleted_product','add_products','add_products','no_items','name','quantity','options','any_option_combinations','deleted_product','add_products','add_products'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('view_mode', (($tmp = $_smarty_tpl->tpl_vars['view_mode']->value ?? null)===null||$tmp==='' ? "mixed" ?? null : $tmp));
if (!$_smarty_tpl->tpl_vars['display']->value) {?>
    <?php $_smarty_tpl->_assignInScope('display', "options");
}?>

<?php echo smarty_function_script(array('src'=>"js/tygh/picker.js"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['view_mode']->value != "button") {
if ($_smarty_tpl->tpl_vars['type']->value == "table") {?>
    <p id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
_no_item" class="ty-no-items<?php if ($_smarty_tpl->tpl_vars['item_ids']->value) {?> hidden<?php }?>"><?php echo (($tmp = $_smarty_tpl->tpl_vars['no_item_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("no_items") ?? null : $tmp);?>
</p>

    <table id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-table<?php if (!$_smarty_tpl->tpl_vars['item_ids']->value) {?> hidden<?php }?> cm-picker-options">
    <thead>
        <tr>
            <th><?php echo $_smarty_tpl->__("name");?>
</th>
            <th><?php echo $_smarty_tpl->__("quantity");?>
</th>
        </tr>
    </thead>
    <?php $_smarty_tpl->_subTemplateRender("tygh:pickers/products/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('clone'=>true,'options'=>((string)$_smarty_tpl->tpl_vars['ldelim']->value)."options".((string)$_smarty_tpl->tpl_vars['rdelim']->value),'root_id'=>$_smarty_tpl->tpl_vars['data_id']->value,'product'=>((string)$_smarty_tpl->tpl_vars['ldelim']->value)."product".((string)$_smarty_tpl->tpl_vars['rdelim']->value),'delete_id'=>((string)$_smarty_tpl->tpl_vars['ldelim']->value)."delete_id".((string)$_smarty_tpl->tpl_vars['rdelim']->value),'amount'=>1,'amount_input'=>"text",'input_name'=>((string)$_smarty_tpl->tpl_vars['input_name']->value)."[".((string)$_smarty_tpl->tpl_vars['ldelim']->value)."product_id".((string)$_smarty_tpl->tpl_vars['rdelim']->value)."]"), 0, false);
?>
    <?php if ($_smarty_tpl->tpl_vars['item_ids']->value) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item_ids']->value, 'product', false, 'product_id');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product_id']->value => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_options", null, null);?>
                <?php $_smarty_tpl->_assignInScope('prod_opts', fn_get_product_options($_smarty_tpl->tpl_vars['product']->value['product_id']));?>
                <?php if ($_smarty_tpl->tpl_vars['prod_opts']->value && !$_smarty_tpl->tpl_vars['product']->value['product_options']) {?>
                    <strong><?php echo $_smarty_tpl->__("options");?>
: </strong>&nbsp;<?php echo $_smarty_tpl->__("any_option_combinations");?>

                <?php } else { ?>
                    <?php if ($_smarty_tpl->tpl_vars['product']->value['product_options_value']) {?>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_options'=>$_smarty_tpl->tpl_vars['product']->value['product_options_value']), 0, true);
?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_options'=>fn_get_selected_product_options_info($_smarty_tpl->tpl_vars['product']->value['product_options'])), 0, true);
?>
                    <?php }?>
                <?php }?>
            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php if ($_smarty_tpl->tpl_vars['product']->value['product']) {?>
                <?php $_smarty_tpl->_assignInScope('product_name', $_smarty_tpl->tpl_vars['product']->value['product']);?>
            <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('product_name', (($tmp = htmlspecialchars((string)fn_get_product_name($_smarty_tpl->tpl_vars['product']->value['product_id']), ENT_QUOTES, 'UTF-8', true) ?? null)===null||$tmp==='' ? $_smarty_tpl->__("deleted_product") ?? null : $tmp));?>
            <?php }?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:pickers/products/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('options'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_options'),'root_id'=>$_smarty_tpl->tpl_vars['data_id']->value,'product'=>$_smarty_tpl->tpl_vars['product_name']->value,'delete_id'=>$_smarty_tpl->tpl_vars['product_id']->value,'product_id'=>$_smarty_tpl->tpl_vars['product']->value['product_id'],'amount'=>$_smarty_tpl->tpl_vars['product']->value['amount'],'amount_input'=>"text",'input_name'=>((string)$_smarty_tpl->tpl_vars['input_name']->value)."[".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."]",'options_array'=>$_smarty_tpl->tpl_vars['product']->value['product_options']), 0, true);
?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>
    </table>
<?php }
}?>

<?php if ($_smarty_tpl->tpl_vars['view_mode']->value != "list") {?>

    <?php if ($_smarty_tpl->tpl_vars['extra_var']->value) {?>
        <?php $_smarty_tpl->_assignInScope('extra_var', rawurlencode((string)$_smarty_tpl->tpl_vars['extra_var']->value));?>
    <?php }?>

    <?php if (!$_smarty_tpl->tpl_vars['no_container']->value) {?><div class="buttons-container picker"><?php }
if ($_smarty_tpl->tpl_vars['picker_view']->value) {?>[<?php }?>
        <div class="ty-mt-m">
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>"opener_picker_".((string)$_smarty_tpl->tpl_vars['data_id']->value),'but_href'=>"products.picker?display=".((string)$_smarty_tpl->tpl_vars['display']->value)."&picker_for=".((string)$_smarty_tpl->tpl_vars['picker_for']->value)."&extra=".((string)$_smarty_tpl->tpl_vars['extra_var']->value)."&checkbox_name=".((string)$_smarty_tpl->tpl_vars['checkbox_name']->value)."&aoc=".((string)$_smarty_tpl->tpl_vars['aoc']->value)."&data_id=".((string)$_smarty_tpl->tpl_vars['data_id']->value),'but_text'=>(($tmp = $_smarty_tpl->tpl_vars['but_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("add_products") ?? null : $tmp),'but_role'=>(($tmp = $_smarty_tpl->tpl_vars['but_role']->value ?? null)===null||$tmp==='' ? "add" ?? null : $tmp),'but_target_id'=>"content_".((string)$_smarty_tpl->tpl_vars['data_id']->value),'but_meta'=>"ty-btn__secondary cm-dialog-opener",'but_rel'=>"nofollow",'but_icon'=>"product-picker-icon ty-icon-plus"), 0, false);
?>
    <?php if ($_smarty_tpl->tpl_vars['picker_view']->value) {?>]<?php }
if (!$_smarty_tpl->tpl_vars['no_container']->value) {?></div><?php }?>
    </div>

    <div class="hidden" id="content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['but_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("add_products") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
">
    </div>

<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="pickers/products/picker.tpl" id="<?php echo smarty_function_set_id(array('name'=>"pickers/products/picker.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('view_mode', (($tmp = $_smarty_tpl->tpl_vars['view_mode']->value ?? null)===null||$tmp==='' ? "mixed" ?? null : $tmp));
if (!$_smarty_tpl->tpl_vars['display']->value) {?>
    <?php $_smarty_tpl->_assignInScope('display', "options");
}?>

<?php echo smarty_function_script(array('src'=>"js/tygh/picker.js"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['view_mode']->value != "button") {
if ($_smarty_tpl->tpl_vars['type']->value == "table") {?>
    <p id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
_no_item" class="ty-no-items<?php if ($_smarty_tpl->tpl_vars['item_ids']->value) {?> hidden<?php }?>"><?php echo (($tmp = $_smarty_tpl->tpl_vars['no_item_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("no_items") ?? null : $tmp);?>
</p>

    <table id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-table<?php if (!$_smarty_tpl->tpl_vars['item_ids']->value) {?> hidden<?php }?> cm-picker-options">
    <thead>
        <tr>
            <th><?php echo $_smarty_tpl->__("name");?>
</th>
            <th><?php echo $_smarty_tpl->__("quantity");?>
</th>
        </tr>
    </thead>
    <?php $_smarty_tpl->_subTemplateRender("tygh:pickers/products/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('clone'=>true,'options'=>((string)$_smarty_tpl->tpl_vars['ldelim']->value)."options".((string)$_smarty_tpl->tpl_vars['rdelim']->value),'root_id'=>$_smarty_tpl->tpl_vars['data_id']->value,'product'=>((string)$_smarty_tpl->tpl_vars['ldelim']->value)."product".((string)$_smarty_tpl->tpl_vars['rdelim']->value),'delete_id'=>((string)$_smarty_tpl->tpl_vars['ldelim']->value)."delete_id".((string)$_smarty_tpl->tpl_vars['rdelim']->value),'amount'=>1,'amount_input'=>"text",'input_name'=>((string)$_smarty_tpl->tpl_vars['input_name']->value)."[".((string)$_smarty_tpl->tpl_vars['ldelim']->value)."product_id".((string)$_smarty_tpl->tpl_vars['rdelim']->value)."]"), 0, true);
?>
    <?php if ($_smarty_tpl->tpl_vars['item_ids']->value) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item_ids']->value, 'product', false, 'product_id');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product_id']->value => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_options", null, null);?>
                <?php $_smarty_tpl->_assignInScope('prod_opts', fn_get_product_options($_smarty_tpl->tpl_vars['product']->value['product_id']));?>
                <?php if ($_smarty_tpl->tpl_vars['prod_opts']->value && !$_smarty_tpl->tpl_vars['product']->value['product_options']) {?>
                    <strong><?php echo $_smarty_tpl->__("options");?>
: </strong>&nbsp;<?php echo $_smarty_tpl->__("any_option_combinations");?>

                <?php } else { ?>
                    <?php if ($_smarty_tpl->tpl_vars['product']->value['product_options_value']) {?>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_options'=>$_smarty_tpl->tpl_vars['product']->value['product_options_value']), 0, true);
?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_options'=>fn_get_selected_product_options_info($_smarty_tpl->tpl_vars['product']->value['product_options'])), 0, true);
?>
                    <?php }?>
                <?php }?>
            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php if ($_smarty_tpl->tpl_vars['product']->value['product']) {?>
                <?php $_smarty_tpl->_assignInScope('product_name', $_smarty_tpl->tpl_vars['product']->value['product']);?>
            <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('product_name', (($tmp = htmlspecialchars((string)fn_get_product_name($_smarty_tpl->tpl_vars['product']->value['product_id']), ENT_QUOTES, 'UTF-8', true) ?? null)===null||$tmp==='' ? $_smarty_tpl->__("deleted_product") ?? null : $tmp));?>
            <?php }?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:pickers/products/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('options'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_options'),'root_id'=>$_smarty_tpl->tpl_vars['data_id']->value,'product'=>$_smarty_tpl->tpl_vars['product_name']->value,'delete_id'=>$_smarty_tpl->tpl_vars['product_id']->value,'product_id'=>$_smarty_tpl->tpl_vars['product']->value['product_id'],'amount'=>$_smarty_tpl->tpl_vars['product']->value['amount'],'amount_input'=>"text",'input_name'=>((string)$_smarty_tpl->tpl_vars['input_name']->value)."[".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."]",'options_array'=>$_smarty_tpl->tpl_vars['product']->value['product_options']), 0, true);
?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>
    </table>
<?php }
}?>

<?php if ($_smarty_tpl->tpl_vars['view_mode']->value != "list") {?>

    <?php if ($_smarty_tpl->tpl_vars['extra_var']->value) {?>
        <?php $_smarty_tpl->_assignInScope('extra_var', rawurlencode((string)$_smarty_tpl->tpl_vars['extra_var']->value));?>
    <?php }?>

    <?php if (!$_smarty_tpl->tpl_vars['no_container']->value) {?><div class="buttons-container picker"><?php }
if ($_smarty_tpl->tpl_vars['picker_view']->value) {?>[<?php }?>
        <div class="ty-mt-m">
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>"opener_picker_".((string)$_smarty_tpl->tpl_vars['data_id']->value),'but_href'=>"products.picker?display=".((string)$_smarty_tpl->tpl_vars['display']->value)."&picker_for=".((string)$_smarty_tpl->tpl_vars['picker_for']->value)."&extra=".((string)$_smarty_tpl->tpl_vars['extra_var']->value)."&checkbox_name=".((string)$_smarty_tpl->tpl_vars['checkbox_name']->value)."&aoc=".((string)$_smarty_tpl->tpl_vars['aoc']->value)."&data_id=".((string)$_smarty_tpl->tpl_vars['data_id']->value),'but_text'=>(($tmp = $_smarty_tpl->tpl_vars['but_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("add_products") ?? null : $tmp),'but_role'=>(($tmp = $_smarty_tpl->tpl_vars['but_role']->value ?? null)===null||$tmp==='' ? "add" ?? null : $tmp),'but_target_id'=>"content_".((string)$_smarty_tpl->tpl_vars['data_id']->value),'but_meta'=>"ty-btn__secondary cm-dialog-opener",'but_rel'=>"nofollow",'but_icon'=>"product-picker-icon ty-icon-plus"), 0, true);
?>
    <?php if ($_smarty_tpl->tpl_vars['picker_view']->value) {?>]<?php }
if (!$_smarty_tpl->tpl_vars['no_container']->value) {?></div><?php }?>
    </div>

    <div class="hidden" id="content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['but_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("add_products") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
">
    </div>

<?php }
}
}
}
