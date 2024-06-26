<?php
/* Smarty version 4.1.1, created on 2024-05-28 17:16:00
  from '/app/www/design/backend/templates/views/products/components/context_menu/price.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6655e7207d0e61_82468351',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d212ebdfe02f99e1af920fcb8899280e95c75e1' => 
    array (
      0 => '/app/www/design/backend/templates/views/products/components/context_menu/price.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:components/context_menu/items/dropdown.tpl' => 1,
  ),
),false)) {
function content_6655e7207d0e61_82468351 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('price','list_price','in_stock','bulk_edit.decrease_hint','bulk_edit.example_of_modified_value','price','list_price','in_stock','reset','apply'));
?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "content", null);?>
    <div class="bulk-edit-inner__header">
        <span>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:bulk_edit_prices_block_title"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:bulk_edit_prices_block_title"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['data']->value['name']['template'],$_smarty_tpl->tpl_vars['data']->value['name']['params']);?>

            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:bulk_edit_prices_block_title"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </span>
    </div>

    <div class="bulk-edit-inner__body">
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:bulk_edit_prices_block_body"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:bulk_edit_prices_block_body"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:bulk_edit_inputs"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:bulk_edit_inputs"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <div class="bulk-edit-inner__input-group">
                <input type="number"
                       step="any"
                       class="input-group__text"
                       placeholder="<?php echo $_smarty_tpl->__("price");?>
"
                       data-ca-bulkedit-mod-changer
                       data-ca-bulkedit-mod-affect-on="[data-ca-bulkedit-mod-price]"
                       data-ca-bulkedit-mod-filter="[data-ca-bulkedit-mod-price-filter-p]"
                       data-ca-bulkedit-equal-field="[name='products_data[?][price]']"
                       data-ca-name="price"
                />
                <select class="input-group__modifier" data-ca-bulkedit-mod-price-filter-p>
                    <option value="number"><?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'];?>
</option>
                    <option value="percent">%</option>
                </select>
            </div>

            <div class="bulk-edit-inner__input-group">
                <input type="number"
                       step="any"
                       class="input-group__text"
                       placeholder="<?php echo $_smarty_tpl->__("list_price");?>
"
                       data-ca-bulkedit-mod-changer
                       data-ca-bulkedit-mod-affect-on="[data-ca-bulkedit-mod-listprice]"
                       data-ca-bulkedit-mod-filter="[data-ca-bulkedit-mod-price-filter-lp]"
                       data-ca-bulkedit-equal-field="[name='products_data[?][list_price]']"
                       data-ca-name="list_price"
                />
                <select class="input-group__modifier" data-ca-bulkedit-mod-price-filter-lp>
                    <option value="number"><?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'];?>
</option>
                    <option value="percent">%</option>
                </select>
            </div>

        <?php if ((($tmp = $_smarty_tpl->tpl_vars['show_stock_control_in_bulk_edit']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp)) {?>
            <div class="bulk-edit-inner__input-group">
                <input type="number"
                       class="input-group__text input-group__text--full"
                       placeholder="<?php echo $_smarty_tpl->__("in_stock");?>
"
                       data-ca-bulkedit-mod-changer
                       data-ca-bulkedit-mod-affect-on="[data-ca-bulkedit-mod-instock]"
                       data-ca-bulkedit-mod-filter="[data-ca-bulkedit-mod-price-filter-is]"
                       data-ca-bulkedit-equal-field="[name='products_data[?][amount]']"
                       data-ca-name="amount"
                />
                <input type="hidden" value="number" data-ca-bulkedit-mod-price-filter-is/>
            </div>
        <?php }?>

        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:bulk_edit_inputs"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

            <div class="bulk-edit-inner__hint">
                <span><?php echo $_smarty_tpl->__("bulk_edit.decrease_hint");?>
</span>
            </div>

            <div class="bulk-edit-inner__example">
                <p class="bulk-edit-inner__example-title"><?php echo $_smarty_tpl->__("bulk_edit.example_of_modified_value");?>
</p>

                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:bulk_edit_price_examples"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:bulk_edit_price_examples"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <p class="bulk-edit-inner__example-line">
                        <span class="bulk-edit-inner__example-line--left"><?php echo $_smarty_tpl->__("price");?>
:</span>
                        <span class="bulk-edit-inner__example-line--right"
                              data-ca-bulkedit-mod-default-value="30.00"
                              data-ca-bulkedit-mod-affected-write-into=".bulk-edit-inner__example-line--red"
                              data-ca-bulkedit-mod-affected-old-value=".bulk-edit-inner__example-line--green"
                              data-ca-bulkedit-mod-price
                        >
                            <span class="bulk-edit-inner__example-line--green">30.00</span>
                            <span class="bulk-edit-inner__example-line--red"></span>
                        </span>
                    </p>

                    <p class="bulk-edit-inner__example-line">
                        <span class="bulk-edit-inner__example-line--left"><?php echo $_smarty_tpl->__("list_price");?>
:</span>
                        <span class="bulk-edit-inner__example-line--right"
                              data-ca-bulkedit-mod-default-value="31.00"
                              data-ca-bulkedit-mod-affected-write-into=".bulk-edit-inner__example-line--red"
                              data-ca-bulkedit-mod-affected-old-value=".bulk-edit-inner__example-line--green"
                              data-ca-bulkedit-mod-listprice
                        >
                            <span class="bulk-edit-inner__example-line--green">31.00</span>
                            <span class="bulk-edit-inner__example-line--red"></span>
                        </span>
                    </p>

                <?php if ((($tmp = $_smarty_tpl->tpl_vars['show_stock_control_in_bulk_edit']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp)) {?>
                    <p class="bulk-edit-inner__example-line">
                        <span class="bulk-edit-inner__example-line--left"><?php echo $_smarty_tpl->__("in_stock");?>
:</span>
                        <span class="bulk-edit-inner__example-line--right"
                              data-ca-bulkedit-mod-default-value="10"
                              data-ca-bulkedit-mod-affected-write-into=".bulk-edit-inner__example-line--red"
                              data-ca-bulkedit-mod-affected-old-value=".bulk-edit-inner__example-line--green"
                              data-ca-bulkedit-mod-instock
                        >
                                <span class="bulk-edit-inner__example-line--green">10</span>
                                <span class="bulk-edit-inner__example-line--red"></span>
                            </span>
                    </p>
                <?php }?>

                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:bulk_edit_price_examples"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            </div>

        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:bulk_edit_prices_block_body"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </div>

    <div class="bulk-edit-inner__footer">
        <button class="btn bulk-edit-inner__btn bulkedit-mod-cancel"
                role="button"
                data-ca-bulkedit-mod-cancel
                data-ca-bulkedit-mod-reset-changer="[data-ca-bulkedit-mod-changer]"
        ><?php echo $_smarty_tpl->__("reset");?>
</button>
        <button class="btn btn-primary bulk-edit-inner__btn bulkedit-mod-update"
                role="button"
                data-ca-bulkedit-mod-update
                data-ca-bulkedit-mod-values="[data-ca-bulkedit-mod-changer]"
                data-ca-bulkedit-mod-target-form="[name=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['params']->value['form'], ENT_QUOTES, 'UTF-8');?>
]"
                data-ca-bulkedit-mod-target-form-active-objects="tr.selected:has(input[type=checkbox].cm-item:checked)"
                data-ca-bulkedit-mod-dispatch="products.m_update_prices"
        ><?php echo $_smarty_tpl->__("apply");?>
</button>
    </div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:components/context_menu/items/dropdown.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->tpl_vars['content']->value,'data'=>$_smarty_tpl->tpl_vars['data']->value,'id'=>"price"), 0, false);
}
}
