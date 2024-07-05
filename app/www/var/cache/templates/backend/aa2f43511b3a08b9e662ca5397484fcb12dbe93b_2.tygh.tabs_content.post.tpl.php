<?php
/* Smarty version 4.1.1, created on 2024-07-03 11:00:51
  from '/app/www/design/backend/templates/addons/yml_export/hooks/products/tabs_content.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66850533363a99_62671993',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa2f43511b3a08b9e662ca5397484fcb12dbe93b' => 
    array (
      0 => '/app/www/design/backend/templates/addons/yml_export/hooks/products/tabs_content.post.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/subheader.tpl' => 2,
    'tygh:addons/yml_export/common/yml_categories_selector.tpl' => 1,
    'tygh:addons/yml_export/common/yml_delivery_options.tpl' => 1,
  ),
),false)) {
function content_66850533363a99_62671993 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.in_array.php','function'=>'smarty_modifier_in_array',),));
\Tygh\Languages\Helper::preloadLangVars(array('general','yml2_offer_type','tt_addons_yml_export_hooks_products_tabs_content_post_yml2_offer_type','yml_export.yml2_exclude_export','yml_export.yml2_cpa','yml2_true','yml2_false','ttc_yml_export.yml2_cpa','yml2_brand','yml_export.yml2_description','ttc_yml_export.yml2_description','yml2_model','tt_addons_yml_export_hooks_products_detailed_content_post_yml2_model','yml2_type_prefix','tt_addons_yml_export_hooks_products_detailed_content_post_yml2_type_prefix','yml2_sales_notes','yml2_country','yml2_manufacturer_warranty','yml2_none','yml2_true','yml2_false','yml2_expiry','tt_addons_yml_export_hooks_products_tabs_content_post_yml2_expiry','yml2_bid','yml2_purchase_price','yml2_adult','yml2_false','yml2_true','shipping','yml2_delivery','yml2_true','yml2_false','yml2_store','yml2_true','yml2_false','yml2_pickup','yml2_true','yml2_false'));
?>
<div class="<?php if ($_smarty_tpl->tpl_vars['selected_section']->value !== "yml") {?>hidden<?php }?>" id="content_yml">

    <?php echo smarty_function_script(array('src'=>"js/addons/yml_export/yml_tab_products.js"),$_smarty_tpl);?>


    <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("general"),'target'=>"#acc_general"), 0, false);
?>

    <div id="acc_general" class="collapse in">
        <div class="control-group">
            <label for="yml2_offer_type" class="control-label"><?php echo $_smarty_tpl->__("yml2_offer_type");?>
:</label>
            <input id="yml2_parent_offer_val" type="hidden" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['offer_type_parent_category']->value, ENT_QUOTES, 'UTF-8');?>
"/>
            <input id="yml2_offer_type_val" type="hidden" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_data']->value['yml2_offer_type'], ENT_QUOTES, 'UTF-8');?>
"/>
            <div class="controls">
                <select name="product_data[yml2_offer_type]" id="yml2_offer_type">
                    <option value="" <?php if (empty($_smarty_tpl->tpl_vars['product_data']->value['yml2_parent_offer_type_name']) && empty($_smarty_tpl->tpl_vars['product_data']->value['yml2_offer_type'])) {?>selected="selected"<?php }?>><?php if (!empty($_smarty_tpl->tpl_vars['yml2_parent_offer_type_name']->value)) {
echo $_smarty_tpl->__('yml_export.category_value',array('[default]'=>$_smarty_tpl->__($_smarty_tpl->tpl_vars['yml2_parent_offer_type_name']->value)));
} else {
echo $_smarty_tpl->__('yml_export.use_category_value');
}?></option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['yml2_offer_types']->value, 'offer_name', false, 'offer_type');
$_smarty_tpl->tpl_vars['offer_name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['offer_type']->value => $_smarty_tpl->tpl_vars['offer_name']->value) {
$_smarty_tpl->tpl_vars['offer_name']->do_else = false;
?>
                        <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['offer_type']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['product_data']->value['yml2_offer_type'] == $_smarty_tpl->tpl_vars['offer_type']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['offer_name']->value);?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
                <p class="muted description"><?php echo $_smarty_tpl->__("tt_addons_yml_export_hooks_products_tabs_content_post_yml2_offer_type");?>
</p>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label"><?php echo $_smarty_tpl->__("yml_export.yml2_exclude_export");?>
:</label>
            <div class="controls">
                <input type="hidden" name="product_data[yml2_exclude_price_ids]" value="" />
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['yml2_prices']->value, 'price');
$_smarty_tpl->tpl_vars['price']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['price']->value) {
$_smarty_tpl->tpl_vars['price']->do_else = false;
?>
                    <label class="checkbox inline" for="elm_yml_exclude_product_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['price']->value['param_id'], ENT_QUOTES, 'UTF-8');?>
">
                        <input type="checkbox" name="product_data[yml2_exclude_price_ids][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['price']->value['param_id'], ENT_QUOTES, 'UTF-8');?>
]" id="elm_yml_exclude_product_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['price']->value['param_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if (smarty_modifier_in_array($_smarty_tpl->tpl_vars['price']->value['param_id'],$_smarty_tpl->tpl_vars['yml2_exclude_prices']->value)) {?>checked="checked"<?php }?> value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['price']->value['param_id'], ENT_QUOTES, 'UTF-8');?>
" />
                        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['price']->value['param_data']['name_price_list'], ENT_QUOTES, 'UTF-8');?>
</label>
                    <?php
}
if ($_smarty_tpl->tpl_vars['price']->do_else) {
?>
                    &ndash;
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>

        <div class="control-group">
            <label for="yml2_cpa" class="control-label"><?php echo $_smarty_tpl->__("yml_export.yml2_cpa");?>
:</label>
            <div class="controls">
                <select name="product_data[yml2_cpa]" id="yml2_cpa">
                    <option value="Y" <?php if ($_smarty_tpl->tpl_vars['product_data']->value['yml2_cpa'] == "Y") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("yml2_true");?>
</option>
                    <option value="N" <?php if ($_smarty_tpl->tpl_vars['product_data']->value['yml2_cpa'] == "N") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("yml2_false");?>
</option>
                </select>
                <p class="muted description"><?php echo $_smarty_tpl->__("ttc_yml_export.yml2_cpa");?>
</p>
            </div>
        </div>

        <div class="control-group">
            <label for="yml2_brand" class="control-label"><?php echo $_smarty_tpl->__("yml2_brand");?>
:</label>
            <div class="controls">
                <input type="text" name="product_data[yml2_brand]" id="yml2_brand" size="55" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_data']->value['yml2_brand'], ENT_QUOTES, 'UTF-8');?>
" class="input-text-large" />
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_yml_product_descr"><?php echo $_smarty_tpl->__("yml_export.yml2_description");?>
:</label>
            <div class="controls">
                <textarea id="elm_yml_product_descr" name="product_data[yml2_description]" cols="55" rows="4" class="input-large"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_data']->value['yml2_description'], ENT_QUOTES, 'UTF-8');?>
</textarea>
                <p class="muted description"><?php echo $_smarty_tpl->__("ttc_yml_export.yml2_description");?>
</p>
            </div>
        </div>

        <div id="yml2_model_div" class="control-group">
            <label for="yml2_model" class="control-label"><?php echo $_smarty_tpl->__("yml2_model");?>
:</label>
            <div class="controls">
                <input type="text" name="product_data[yml2_model]" id="yml2_model" size="55" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_data']->value['yml2_model'], ENT_QUOTES, 'UTF-8');?>
" class="input-text-large" <?php if ((!empty($_smarty_tpl->tpl_vars['yml2_model_category']->value))) {?>placeholder="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['yml2_model_category']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>/>
                <p class="muted description"><?php echo $_smarty_tpl->__("tt_addons_yml_export_hooks_products_detailed_content_post_yml2_model");?>
</p>
            </div>
        </div>

        <div id="yml2_type_prefix_div" class="control-group">
            <label for="yml2_type_prefix" class="control-label"><?php echo $_smarty_tpl->__("yml2_type_prefix");?>
:</label>
            <div class="controls">
                <input type="text" name="product_data[yml2_type_prefix]" id="yml2_type_prefix" size="55" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_data']->value['yml2_type_prefix'], ENT_QUOTES, 'UTF-8');?>
" class="input-text-large"  <?php if ((!empty($_smarty_tpl->tpl_vars['yml2_type_prefix_category']->value))) {?>placeholder="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['yml2_type_prefix_category']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>/>
                <p class="muted description"><?php echo $_smarty_tpl->__("tt_addons_yml_export_hooks_products_detailed_content_post_yml2_type_prefix");?>
</p>
            </div>
        </div>

        <div class="control-group">
            <label for="yml2_sales_notes" class="control-label"><?php echo $_smarty_tpl->__("yml2_sales_notes");?>
:</label>
            <div class="controls">
                <input type="text" name="product_data[yml2_sales_notes]" id="yml2_sales_notes" size="50" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_data']->value['yml2_sales_notes'], ENT_QUOTES, 'UTF-8');?>
" class="input-text-large" />
            </div>
        </div>

        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/yml_export/common/yml_categories_selector.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>"product_data[yml2_market_category]",'value'=>$_smarty_tpl->tpl_vars['product_data']->value['yml2_market_category']), 0, false);
?>

        <div class="control-group">
            <label for="yml2_country" class="control-label"><?php echo $_smarty_tpl->__("yml2_country");?>
:</label>
            <div class="controls">
                <input type="text" name="product_data[yml2_origin_country]" id="yml2_country" size="55" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_data']->value['yml2_origin_country'], ENT_QUOTES, 'UTF-8');?>
" class="input-text-large" />
            </div>
        </div>

        <div class="control-group">
            <label for="yml2_manufacturer_warranty" class="control-label"><?php echo $_smarty_tpl->__("yml2_manufacturer_warranty");?>
:</label>
            <div class="controls">
                <select name="product_data[yml2_manufacturer_warranty]" id="yml2_manufacturer_warranty">
                    <option value="" <?php if ($_smarty_tpl->tpl_vars['product_data']->value['yml2_manufacturer_warranty'] == '') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("yml2_none");?>
</option>
                    <option value="Y" <?php if ($_smarty_tpl->tpl_vars['product_data']->value['yml2_manufacturer_warranty'] == "Y") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("yml2_true");?>
</option>
                    <option value="N" <?php if ($_smarty_tpl->tpl_vars['product_data']->value['yml2_manufacturer_warranty'] == "N") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("yml2_false");?>
</option>
                </select>
            </div>
        </div>

        <div class="control-group">
            <label for="yml2_expiry" class="control-label"><?php echo $_smarty_tpl->__("yml2_expiry");?>
:</label>
            <div class="controls">
                <input type="text" name="product_data[yml2_expiry]" id="yml2_expiry" size="55" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_data']->value['yml2_expiry'], ENT_QUOTES, 'UTF-8');?>
" class="input-text-large" />
                <p class="muted description"><?php echo $_smarty_tpl->__("tt_addons_yml_export_hooks_products_tabs_content_post_yml2_expiry");?>
</p>
            </div>
        </div>

        <div class="control-group">
            <label for="yml2_bid" class="control-label"><?php echo $_smarty_tpl->__("yml2_bid");?>
:</label>
            <div class="controls">
                <input type="text" name="product_data[yml2_bid]" id="yml2_bid" size="10" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_data']->value['yml2_bid'], ENT_QUOTES, 'UTF-8');?>
" class="input-small" />
            </div>
        </div>

        <div class="control-group">
            <label for="yml2_purchase_price" class="control-label"><?php echo $_smarty_tpl->__("yml2_purchase_price");?>
:</label>
            <div class="controls">
                <input type="text" name="product_data[yml2_purchase_price]" id="yml2_purchase_price" size="10" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_data']->value['yml2_purchase_price'], ENT_QUOTES, 'UTF-8');?>
" class="input-small" />
            </div>
        </div>

        <div class="control-group">
            <label for="yml2_adult" class="control-label"><?php echo $_smarty_tpl->__("yml2_adult");?>
:</label>
            <div class="controls">
                <select name="product_data[yml2_adult]" id="yml2_adult">
                    <option value="N" <?php if ($_smarty_tpl->tpl_vars['product_data']->value['yml2_adult'] == "N") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("yml2_false");?>
</option>
                    <option value="Y" <?php if ($_smarty_tpl->tpl_vars['product_data']->value['yml2_adult'] == "Y") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("yml2_true");?>
</option>
                </select>
            </div>
        </div>
    </div>

    <hr>

    <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("shipping"),'target'=>"#acc_shipping"), 0, true);
?>

    <div id="acc_shipping" class="collapse in">
        <div class="control-group">
            <label for="yml2_delivery" class="control-label"><?php echo $_smarty_tpl->__("yml2_delivery");?>
:</label>
            <div class="controls">
                <select name="product_data[yml2_delivery]" id="yml2_delivery">
                    <option value="" <?php if ($_smarty_tpl->tpl_vars['product_data']->value['yml2_delivery'] == '') {?>selected="selected"<?php }?>>---</option>
                    <option value="Y" <?php if ($_smarty_tpl->tpl_vars['product_data']->value['yml2_delivery'] == "Y") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("yml2_true");?>
</option>
                    <option value="N" <?php if ($_smarty_tpl->tpl_vars['product_data']->value['yml2_delivery'] == "N") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("yml2_false");?>
</option>
                </select>
            </div>
        </div>

        <div class="control-group">
            <label for="yml2_store" class="control-label"><?php echo $_smarty_tpl->__("yml2_store");?>
:</label>
            <div class="controls">
                <select name="product_data[yml2_store]" id="yml2_store">
                    <option value="" <?php if ($_smarty_tpl->tpl_vars['product_data']->value['yml2_store'] == '') {?>selected="selected"<?php }?>>---</option>
                    <option value="Y" <?php if ($_smarty_tpl->tpl_vars['product_data']->value['yml2_store'] == "Y") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("yml2_true");?>
</option>
                    <option value="N" <?php if ($_smarty_tpl->tpl_vars['product_data']->value['yml2_store'] == "N") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("yml2_false");?>
</option>
                </select>
            </div>
        </div>

        <div class="control-group">
            <label for="yml2_pickup" class="control-label"><?php echo $_smarty_tpl->__("yml2_pickup");?>
:</label>
            <div class="controls">
                <select name="product_data[yml2_pickup]" id="yml2_pickup">
                    <option value="" <?php if ($_smarty_tpl->tpl_vars['product_data']->value['yml2_pickup'] == '') {?>selected="selected"<?php }?>>---</option>
                    <option value="Y" <?php if ($_smarty_tpl->tpl_vars['product_data']->value['yml2_pickup'] == "Y") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("yml2_true");?>
</option>
                    <option value="N" <?php if ($_smarty_tpl->tpl_vars['product_data']->value['yml2_pickup'] == "N") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("yml2_false");?>
</option>
                </select>
            </div>
        </div>

        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/yml_export/common/yml_delivery_options.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>"product_data[yml2_delivery_options]",'data'=>$_smarty_tpl->tpl_vars['product_data']->value['yml2_delivery_options'],'name_data'=>"product_data[yml2_delivery_options]"), 0, false);
?>
    </div>

</div><?php }
}
