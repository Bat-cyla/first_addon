<?php
/* Smarty version 4.1.1, created on 2024-05-27 15:22:26
  from '/app/www/design/backend/templates/addons/product_variations/hooks/products/advanced_search.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66547b02d83870_01253055',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22125d39ddb0659ad9a166e331e76aa88db22f0f' => 
    array (
      0 => '/app/www/design/backend/templates/addons/product_variations/hooks/products/advanced_search.post.tpl',
      1 => 1716808809,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:pickers/products/picker.tpl' => 1,
  ),
),false)) {
function content_66547b02d83870_01253055 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/modifier.in_array.php','function'=>'smarty_modifier_in_array',),));
\Tygh\Languages\Helper::preloadLangVars(array('product_variations.product_type','product_variations.belongs_to_catalog_item'));
$_smarty_tpl->_assignInScope('show_product_type_filter', (($tmp = $_smarty_tpl->tpl_vars['show_product_type_filter']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('show_product_parent_filter', (($tmp = $_smarty_tpl->tpl_vars['show_product_parent_filter']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>

<div class="row-fluid">
    <div class="group span6 form-horizontal">
        <?php if ($_smarty_tpl->tpl_vars['show_product_type_filter']->value) {?>
            <div class="control-group">
                <label class="control-label" for="product_type"><?php echo $_smarty_tpl->__("product_variations.product_type");?>
</label>
                <div class="controls">
                    <?php $_smarty_tpl->_assignInScope('product_types', $_smarty_tpl->tpl_vars['app']->value["addons.product_variations.product.type.type_collection"]->getTypeNames());?>

                    <input type="hidden" name="product_type" id="product_type">
                    <select name="product_type[]" id="product_type" multiple>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_types']->value, 'product_type_name', false, 'product_type');
$_smarty_tpl->tpl_vars['product_type_name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product_type']->value => $_smarty_tpl->tpl_vars['product_type_name']->value) {
$_smarty_tpl->tpl_vars['product_type_name']->do_else = false;
?>
                            <option <?php if (smarty_modifier_in_array($_smarty_tpl->tpl_vars['product_type']->value,$_smarty_tpl->tpl_vars['search']->value['product_type'])) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_type']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_type_name']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>
            </div>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['show_product_parent_filter']->value) {?>
            <div class="control-group">
                <label class="control-label" for="parent_product_id"><?php echo $_smarty_tpl->__("product_variations.belongs_to_catalog_item");?>
</label>
                <div class="controls">
                    <?php if ($_smarty_tpl->tpl_vars['search']->value['parent_product_id']) {?>
                        <?php $_smarty_tpl->_assignInScope('item_ids', $_smarty_tpl->tpl_vars['search']->value['parent_product_id']);?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->_assignInScope('item_ids', null);?>
                    <?php }?>

                    <?php $_smarty_tpl->_subTemplateRender("tygh:pickers/products/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>"parent_product_id",'data_id'=>"added_products",'item_ids'=>$_smarty_tpl->tpl_vars['item_ids']->value,'type'=>"links",'no_container'=>true,'picker_view'=>true,'dialog_opener_meta'=>"cm-dialog-destroy-nested-on-close"), 0, false);
?>
                </div>
            </div>
        <?php }?>
    </div>
</div><?php }
}
