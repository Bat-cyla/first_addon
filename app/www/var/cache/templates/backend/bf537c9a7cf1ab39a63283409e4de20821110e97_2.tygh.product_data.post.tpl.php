<?php
/* Smarty version 4.1.1, created on 2024-05-28 16:18:44
  from '/app/www/design/backend/templates/addons/product_bundles/hooks/product_list/product_data.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_6655d9b4eb2939_45409996',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf537c9a7cf1ab39a63283409e4de20821110e97' => 
    array (
      0 => '/app/www/design/backend/templates/addons/product_bundles/hooks/product_list/product_data.post.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6655d9b4eb2939_45409996 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('product_bundles.any_variation','product_bundles.any_variation'));
if ($_smarty_tpl->tpl_vars['product']->value['variation_features_variants'] && $_smarty_tpl->tpl_vars['is_product_bundles']->value) {?>
    <?php $_smarty_tpl->_assignInScope('purpose_create_variations', constant("\Tygh\Addons\ProductVariations\Product\FeaturePurposes::CREATE_VARIATION_OF_CATALOG_ITEM"));?>

    <div class="cm-picker-product-options form-horizontal" id="features_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
">
        <div class="ty-product-bundles-product-list__variation-features"
            id="features_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_AOC"
            data-ca-empty-product-description-prefix="true"
        >
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['variation_features_variants'], 'feature');
$_smarty_tpl->tpl_vars['feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['feature']->value['purpose'] !== $_smarty_tpl->tpl_vars['purpose_create_variations']->value) {?>
                    <?php continue 1;?>
                <?php }?>

                <div class="control-group ty-product-variation-features__item clearfix">
                    <label class="control-label ty-product-variation-features__item-label"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['description'], ENT_QUOTES, 'UTF-8');?>
:</label>
                    <?php if ($_smarty_tpl->tpl_vars['feature']->value['prefix']) {?>
                        <span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
</span>
                    <?php }?>

                    <div class="controls">
                        <select class="product_bundle_feature_variation" name="product_bundle_feature_variation[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][product_features][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
]">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['feature']->value['variants'], 'variant');
$_smarty_tpl->tpl_vars['variant']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->do_else = false;
?>
                                <?php if ($_smarty_tpl->tpl_vars['variant']->value['product']) {?>
                                    <option <?php if ($_smarty_tpl->tpl_vars['feature']->value['variant_id'] === $_smarty_tpl->tpl_vars['variant']->value['variant_id']) {?>selected="selected"<?php }?>
                                        data-ca-product-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
"
                                        data-ca-target-id="picker_product_row_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['row_index']->value, ENT_QUOTES, 'UTF-8');?>
"
                                        data-ca-change-url="<?php echo htmlspecialchars((string) fn_url("product_bundles.change_variation"), ENT_QUOTES, 'UTF-8');?>
"
                                        data-ca-row-index="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['row_index']->value, ENT_QUOTES, 'UTF-8');?>
"
                                    >
                                        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant'], ENT_QUOTES, 'UTF-8');?>

                                    </option>
                                <?php } elseif ($_smarty_tpl->tpl_vars['addons']->value['product_variations']['variations_show_all_possible_feature_variants'] === smarty_modifier_enum("YesNo::YES")) {?>
                                    <option disabled><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant']->value['variant'], ENT_QUOTES, 'UTF-8');?>
</option>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>
                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
        <div>
            <div class="control-group cm-picker-product-options">
                <label for="sw_features_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_AOC" class="checkbox">
                    <input class="cm-switch-availability cm-switch-inverse cm-option-aoc"
                        id="sw_features_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
_AOC"
                        type="checkbox"
                        name="item_data[products][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][any_variation]"
                        value="<?php echo htmlspecialchars((string) smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>
"
                        data-ca-product-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
"
                        data-ca-aoc-text="<?php echo $_smarty_tpl->__("product_bundles.any_variation");?>
"
                        data-ca-product-bundles="anyVariation"
                    /><?php echo $_smarty_tpl->__("product_bundles.any_variation");?>

                </label>
            </div>
        </div>
    </div>
<?php }
}
}
