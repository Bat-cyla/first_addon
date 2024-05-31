<?php
/* Smarty version 4.1.1, created on 2024-05-28 16:18:44
  from '/app/www/design/backend/templates/views/products/components/products_list_row.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6655d9b4d3cfc4_37335799',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd9c91b5402859800904b1127f9d4c670c87aae9' => 
    array (
      0 => '/app/www/design/backend/templates/views/products/components/products_list_row.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/companies/components/company_name.tpl' => 1,
    'tygh:views/products/components/select_product_options.tpl' => 1,
    'tygh:common/price.tpl' => 1,
  ),
),false)) {
function content_6655d9b4d3cfc4_37335799 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),));
\Tygh\Languages\Helper::preloadLangVars(array('product_name','price','add_product'));
$_smarty_tpl->_assignInScope('hide_amount', (($tmp = $_smarty_tpl->tpl_vars['hide_amount']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('checkbox_name', (($tmp = $_smarty_tpl->tpl_vars['checkbox_name']->value ?? null)===null||$tmp==='' ? "add_products_ids" ?? null : $tmp));?>

<tr id="picker_product_row_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['row_index']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"product_list:table_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"product_list:table_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php if ($_smarty_tpl->tpl_vars['hide_amount']->value) {?>
        <td class="center" width="1%" data-th=""><input type="<?php if ($_smarty_tpl->tpl_vars['show_radio']->value) {?>radio<?php } else { ?>checkbox<?php }?>" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['checkbox_name']->value, ENT_QUOTES, 'UTF-8');?>
[]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item mrg-check" id="checkbox_id_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" /></td>
    <?php }?>
        <td data-th="<?php echo $_smarty_tpl->__("product_name");?>
">
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"product_list:product_data"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"product_list:product_data"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <input type="hidden" id="product_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product'], ENT_QUOTES, 'UTF-8');?>
" />

            <?php if ($_smarty_tpl->tpl_vars['hide_amount']->value) {?>
                <label for="checkbox_id_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>
</label>
            <?php } else { ?>
                <div><?php echo $_smarty_tpl->tpl_vars['product']->value['product'];?>
</div>
            <?php }?>
                <div class="product-list__labels">
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_additional_info"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_additional_info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php if ($_smarty_tpl->tpl_vars['product']->value['product_code']) {?>
                        <div class="product-code">
                            <span class="product-code__label"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_code'], ENT_QUOTES, 'UTF-8');?>
</span>
                        </div>
                    <?php }?>
                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_additional_info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/companies/components/company_name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object'=>$_smarty_tpl->tpl_vars['product']->value,'show_hidden_input'=>true), 0, false);
?>
                </div>


            <?php if (!$_smarty_tpl->tpl_vars['hide_options']->value) {?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/select_product_options.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['product']->value['product_id'],'product_options'=>$_smarty_tpl->tpl_vars['product']->value['product_options'],'name'=>"product_data",'show_aoc'=>$_smarty_tpl->tpl_vars['show_aoc']->value,'additional_class'=>$_smarty_tpl->tpl_vars['additional_class']->value), 0, false);
?>
            <?php }?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"product_list:product_data"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </td>
    <?php if ($_smarty_tpl->tpl_vars['show_price']->value) {?>
        <td class="cm-picker-product-options right" data-th="<?php echo $_smarty_tpl->__("price");?>
"><?php if (!floatval($_smarty_tpl->tpl_vars['product']->value['price']) && $_smarty_tpl->tpl_vars['product']->value['zero_price_action'] == "A") {?><input class="input-medium" id="product_price_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" type="text" size="3" name="product_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][price]" value="" /><?php } else {
$_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['product']->value['price']), 0, false);
}?></td>
    <?php }?>
    <?php if (!$_smarty_tpl->tpl_vars['hide_amount']->value) {?>
        <td class="center nowrap cm-value-changer" width="5%">
            <div class="input-prepend input-append">
                <a class="btn no-underline strong increase-font cm-decrease"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-minus"),$_smarty_tpl);?>
</a>
                <input id="product_id_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" type="text" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['default_product_amount']->value ?? null)===null||$tmp==='' ? "0" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" name="product_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][amount]" size="3" class="input-micro cm-amount"<?php if ($_smarty_tpl->tpl_vars['product']->value['qty_step'] > 1) {?> data-ca-step="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['qty_step'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> />
                <a class="btn no-underline strong increase-font cm-increase"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-plus"),$_smarty_tpl);?>
</a>
            </div>
        </td>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['is_order_management']->value) {?>
        <td class="center nowrap" width="5%">
            <div>
                <a class="btn cm-process-items cm-submit cm-ajax cm-add-product" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("add_product");?>
" data-ca-dispatch="dispatch[order_management.add]" data-ca-check-filter="#picker_product_row_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['i']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-target-form="add_products"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-share-alt",'data'=>array("data-ca-check-filter"=>"#picker_product_row_".((string)$_smarty_tpl->tpl_vars['i']->value))),$_smarty_tpl);?>
</a>
            </div>
        </td>
    <?php }?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"product_list:table_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"product_list:table_columns"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"product_list:table_columns"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"product_list:table_columns"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
<!--picker_product_row_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['row_index']->value, ENT_QUOTES, 'UTF-8');?>
--></tr>
<?php }
}
